<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\User;
class MedicineController extends Controller
{
    public function index()
    {
        // If physician: show all they’ve prescribed, if patient: show only their own
        if (auth()->user()->user_account_type === 'physician') {
            $medicines = Medicine::with('patient')
                ->where('prescribed_by', auth()->id())
                ->latest()
                ->get();
        } else {
            $medicines = Medicine::with('prescriber')
                ->where('prescribed_to', auth()->id())
                ->latest()
                ->get();
        }

        return view('medicines.index', compact('medicines'));
    }

    public function create()
    {
        // only physicians can prescribe
        abort_if(auth()->user()->user_account_type !== 'physician', 403);

        $patients = User::where('user_account_type', 'patient')->get();
        return view('medicines.create', compact('patients'));
    }

    public function store(Request $request)
    {
        abort_if(auth()->user()->user_account_type !== 'physician', 403);

        $data = $request->validate([
            'name'          => 'required|string|max:255',
            'description'   => 'nullable|string',
            'dosage'        => 'nullable|string|max:255',
            'prescribed_to' => 'required|exists:users,id',
        ]);

        Medicine::create([
            'name'          => $data['name'],
            'description'   => $data['description'] ?? null,
            'dosage'        => $data['dosage'] ?? null,
            'prescribed_by' => auth()->id(),
            'prescribed_to' => $data['prescribed_to'],
        ]);

        return redirect()->route('medicines.index')
            ->with('success', 'Medicine prescribed successfully.');
    }

    public function show(Medicine $medicine)
    {
        // ensure either prescriber *or* patient exists, otherwise 404
        $medicine->loadMissing(['patient','physician']);

        if (! $medicine->patient || ! $medicine->physician) {
            abort(404, 'Incomplete prescription data.');
        }

        return view('medicines.show', compact('medicine'));
    }
    public function edit(Medicine $medicine)
    {
        // allow only prescriber to edit
        abort_if(auth()->id() !== $medicine->prescribed_by, 403);

        $patients = User::where('user_account_type', 'patient')->get();
        return view('medicines.edit', compact('medicine', 'patients'));
    }
    public function update(Request $request, Medicine $medicine)
    {
        // allow only prescriber to update
        abort_if(auth()->id() !== $medicine->prescribed_by, 403);

        $data = $request->validate([
            'name'          => 'required|string|max:255',
            'description'   => 'nullable|string',
            'dosage'        => 'string|max:255',
            'prescribed_to' => 'required|exists:users,id',
        ]);

        $medicine->update([
            'name'          => $data['name'],
            'description'   => $data['description'] ?? null,
            'dosage'        => $data['dosage'],
            'prescribed_to' => $data['prescribed_to'],
        ]);

        return redirect()->route('medicines.index')
            ->with('success', 'Prescription updated successfully.');
    }

    public function destroy(Medicine $medicine)
    {
        // allow only prescriber to revoke
        abort_if(auth()->id() !== $medicine->prescribed_by, 403);
        $medicine->delete();
        return back()->with('success', 'Prescription revoked.');
    }
}
