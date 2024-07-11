<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    private $adminEmail = 'admin@gmail.com';
    private $adminPassword = '12345678';
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        $credentials = $request->only('email', 'password');


        // Check credentials
        if ($request->email === $this->adminEmail && $request->password === $this->adminPassword) {
            session(['is_admin' => true]);
            return redirect()->route('admin.dashboard');
        } else if (Auth::guard('mahasiswa')->attempt($credentials)) { // Use the 'mahasiswa' guard
            // If login successful, regenerate session
            $request->session()->regenerate();
            $user = Auth::guard('mahasiswa')->user();

            return redirect()->route('home');
        }

        // If unsuccessful, redirect back with an error
        return redirect()->back()->with('error', 'Invalid credentials.');
    }

    public function logoutAdmin()
    {
        session()->forget('is_admin');
        return redirect()->route('admin.login')->with('success', 'Logged out successfully.');
    }
}

