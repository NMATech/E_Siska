<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prodi;
use App\Models\matakuliah;
use App\Models\kelas;
use Illuminate\Support\Facades\Auth;

class controllerUser extends Controller
{
    public function home()
    {
        $user = Auth::guard('mahasiswa')->user();

        if ($user) {
            // Mengambil semua matakuliah berdasarkan prodi pengguna
            $matkul = matakuliah::where('prodi', $user->prodi)->get();

            // Mengelompokkan matakuliah berdasarkan semester
            $krs = [
                '1' => $matkul->where('semester', 1)->all(),
                '2' => $matkul->where('semester', 2)->all(),
                '3' => $matkul->where('semester', 3)->all(),
                '4' => $matkul->where('semester', 4)->all(),
                '5' => $matkul->where('semester', 5)->all(),
                '6' => $matkul->where('semester', 6)->all(),
                '7' => $matkul->where('semester', 7)->all(),
                '8' => $matkul->where('semester', 8)->all(),
            ];

            return view('user.home', compact('user', 'krs'));
        } else {
            return redirect()->route('admin.login');
        }

    }

    public function krs()
    {
        $user = Auth::guard('mahasiswa')->user();

        if ($user) {
            // Mengambil semua matakuliah berdasarkan prodi pengguna
            $matkul = matakuliah::where('prodi', $user->prodi)->get();

            // Mengelompokkan matakuliah berdasarkan semester
            $krs = [
                '1' => $matkul->where('semester', 1)->all(),
                '2' => $matkul->where('semester', 2)->all(),
                '3' => $matkul->where('semester', 3)->all(),
                '4' => $matkul->where('semester', 4)->all(),
                '5' => $matkul->where('semester', 5)->all(),
                '6' => $matkul->where('semester', 6)->all(),
                '7' => $matkul->where('semester', 7)->all(),
                '8' => $matkul->where('semester', 8)->all(),
            ];

            return view('user.krs', compact('user', 'krs'));
        } else {
            return redirect()->route('admin.login');
        }
    }

    public function kelas()
    {
        $user = Auth::guard('mahasiswa')->user();

        if ($user) {
            $kelas = kelas::where('prodi', $user->prodi)->get();

            return view('user.kelas', compact('user', 'kelas'));
        } else {
            return redirect()->route('admin.login');
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('mahasiswa')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login'); // Redirect to the login page after logout
    }
}
