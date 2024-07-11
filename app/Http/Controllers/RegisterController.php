<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\mahasiswa;
use App\Models\prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        $prodi = prodi::all();

        return view('auth.register', compact('prodi'));
    }

    protected function create(Request $request)
    {
        mahasiswa::create([
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'email' => $request->input('email'),
            'prodi' => $request->input('prodi'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect()->route('admin.login')->with('success', 'Register berhasil, silakan login.');
    }
}
