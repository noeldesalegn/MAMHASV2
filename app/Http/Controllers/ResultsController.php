<?php

namespace App\Http\Controllers;

use App\Models\Results;
use App\Models\User;
use Illuminate\Http\Request;

class ResultsController extends Controller
{
    public function index()
    {
        $results = Results::with('patient', 'physician')->latest()->get();
        return view('results.index', compact('results'));
    }

    public function create()
    {
        $patients = User::where('user_account_type', 'patient')->get();
        return view('results.create', compact('patients'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'details' => 'nullable|string',

            'patient_id' => 'required|exists:users,id',
        ]);

        Results::create([
            'title' => $data['title'],
            'details' => $data['details'] ?? null,
            'status' => 'Pending',
            'patient_id' => $data['patient_id'],
            'physician_id' => auth()->id(),
        ]);

        return redirect()->route('results.index')->with('success', 'Result created.');
    }

    public function show(Results $result)
    {
        return view('results.show', compact('result'));
    }
    public function edit(Results $result)
    {
        $patients = User::where('user_account_type', 'patient')->get();
        return view('results.edit', compact('result', 'patients'));
    }
    public function update(Request $request, Results $result)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'details' => 'nullable|string',
            'patient_id' => 'required|exists:users,id',
        ]);

        $result->update([
            'title' => $data['title'],
            'details' => $data['details'] ?? null,
            'patient_id' => $data['patient_id'],
        ]);

        return redirect()->route('results.index')->with('success', 'Result updated.');
    }
    public function destroy(Results $result)
    {
        $result->delete();
        return redirect()->route('results.index')->with('success', 'Result deleted.');
    }
}
