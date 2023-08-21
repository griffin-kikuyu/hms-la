<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function signup(Request $request)
    {
        // Validation rules for signup form fields
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'age' => 'required|numeric',
            'contact' => 'required|numeric|digits:10',
            'gender' => 'required|in:Male,Female',
        ]);

        // Create a new user record
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'age' => $request->age,
            'contact' => $request->contact,
            'gender' => $request->gender,
        ]);

        return redirect()->route('dashboard')->with('success', 'Registration successful. Please log in.');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/'); // Redirect to the desired page after successful login
        }

        return redirect()->back()->withErrors(['login' => 'Invalid credentials']);
    }
}
