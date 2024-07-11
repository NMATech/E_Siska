<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\matakuliah;
use App\Models\prodi;
use App\Models\kelas;

class controllerAdmin extends Controller
{
    public function dashboard()
    {
        $prodi_fakultas = prodi::all();
        $total_prodi = prodi::count();
        $totalFakultas = prodi::distinct('nama_fakultas')->count('nama_fakultas');

        return view('pages.dashboard', compact('prodi_fakultas', 'total_prodi', 'totalFakultas'));
    }
    public function matakuliah()
    {
        $mata_kuliah = mataKuliah::all();

        return view('pages.mk', ['mata_kuliah' => $mata_kuliah]);
    }

    public function add_mk()
    {
        $prodis = prodi::all();

        return view('pages.add_mk', compact('prodis'));
    }

    public function kelas()
    {
        $kelas = kelas::all();

        return view('pages.kelas', compact('kelas'));
    }

    public function add_kelas()
    {
        $nama_mk = mataKuliah::all();
        $prodi = prodi::all();

        return view('pages.add_kelas', compact('nama_mk', 'prodi'));
    }

    public function add_prodi()
    {
        return view('pages.add_prodi');
    }
}
