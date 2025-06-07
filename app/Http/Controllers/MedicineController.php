<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\User;
class MedicineController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        // Show received or prescribed medicines depending on role
        if ($user->user_account_type === 'physician') {
            $medicines = $user->prescribedMedicines;
        } else {
            $medicines = $user->receivedMedicines;
        }

        return view('medicines.index', compact('medicines'));
    }

    public function create()
    {
        $patients = User::where('user_account_type', 'patient')->get();
        return view('medicines.create', compact('patients'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'dosage' => 'nullable|string|max:255',
            'prescribed_to' => 'required|exists:users,id',
        ]);

        Medicine::create([
            'name' => $request->name,
            'description' => $request->description,
            'dosage' => $request->dosage,
            'prescribed_by' => auth()->id(),
            'prescribed_to' => $request->prescribed_to,
        ]);

        return redirect()->route('medicines.index')->with('success', 'Medicine prescribed successfully.');
    }
}
