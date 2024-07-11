<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\matakuliah;

class controllerMk extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'nama_mk' => 'required|string',
            'sks' => 'required|integer',
            'prodi' => 'required|string|min:8',
            'semester' => 'required|integer',
        ]);

        mataKuliah::create([
            'nama_mk' => $request->input('nama_mk'),
            'sks' => $request->input('sks'),
            'prodi' => $request->input('prodi'),
            'semester' => $request->input('semester'),
        ]);

        return redirect()->route('admin.matakuliah')->with('success', 'Mata Kuliah Berhasil ditambahkan!');
    }

    public function editView($id)
    {
        $mk = mataKuliah::find($id);

        // Jika data tidak ditemukan, lemparkan 404 error
        if (!$mk) {
            abort(404, 'Mata Kuliah tidak ditemukan');
        }

        return view('pages.edit_mk', ['mk' => $mk]);
    }

    public function update(Request $request, $id)
    {
        $mata_kuliah = mataKuliah::findOrFail($id);

        // Validasi input
        $request->validate([
            'nama_mk' => 'required|string',
            'sks' => 'required|integer',
            'prodi' => 'required|string|min:8',
            'semester' => 'required|integer',
        ]);

        $mata_kuliah->nama_mk = $request->input('nama_mk');
        $mata_kuliah->sks = $request->input('sks');
        $mata_kuliah->prodi = $request->input('prodi');
        $mata_kuliah->semester = $request->input('semester');

        $mata_kuliah->save();

        return redirect()->route('admin.matakuliah')->with('success', 'Mata Kuliah Berhasil diupdate!');
    }

    public function delete($id)
    {
        $mk = mataKuliah::find($id);

        if (!$mk) {
            return redirect()->route('admin.matakuliah')->with('error', 'Mata Kuliah tidak ditemukan!');
        }

        $mk->delete();

        return redirect()->route('admin.matakuliah')->with('success', 'Mata Kuliah Berhasil dihapus!');
    }
}
