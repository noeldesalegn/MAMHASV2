<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\File;

class RegisteredUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'FName' => ['required', 'string', 'max:255'],
            'LName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone_no' => ['required', 'string', 'max:255'],
            'age' => ['required','integer','between:18,40' ],
            'Gender' => ['required','string'],
            'Registered_By' => ['required','string'],
            'user_account_name' => ['required', 'string', 'max:255', 'unique:users'],
            'user_account_type' => ['required', 'string', 'max:255'],
            'photo' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048',File::types([ 'jpeg', 'png', 'jpg' ])],
        ]);

        $logoPath = $request->file('photo')->store('photos', 'public');

        $validated['password'] = Hash::make($validated['password']);

        // 4. Merge in the logo path
       $validated['photo'] = $logoPath;

        // 5. Persist the user
        $user = User::create($validated);

        // 6. Log them in
        Auth::login($user);

        // 7. Redirect
        return redirect('/');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
