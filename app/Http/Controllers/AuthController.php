<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{

    public function showLoginForm()
    {
        return view('auth.login');
    }

    
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|exists:users,name',
            'password' => 'required'
        ]);

        // Check if the username exists
        $user = User::where('name', $request->username)->first();

        if (!$user) {
            return back()->withErrors(['username' => 'Invalid username']);
        }

        // Check if the password is incorrect
        if (!Hash::check($request->password, $user->password)) {
            return back()->withErrors(['password' => 'Incorrect password entered']);
        }

        // Attempt login with username & password
        if (Auth::attempt(['name' => $request->username, 'password' => $request->password])) {
            // return redirect()->route('dashboard')->with('success', 'Login successful');
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['password' => 'Invalid credentials']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function dashboard()
    {
        return view('dashboard.index');
    }
}
