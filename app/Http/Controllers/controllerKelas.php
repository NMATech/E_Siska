<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelas;
use App\Models\matakuliah;
use App\Models\prodi;

class controllerKelas extends Controller
{
    public function store(Request $request)
    {
        // // Validasi input
        // $request->validate([
        //     'nama_mk' => 'required|string',
        //     'ruang' => 'required|string',
        //     'tanggal' => 'required|date',
        //     'waktu_mulai' => 'required|date_format:H:i',
        //     'waktu_selesai' => 'required|date_format:H:i|after:waktu_mulai',
        //     'maks_mhs' => 'required|integer',
        //     'dosen' => 'required|string',
        // ]);

        // Simpan data ke database
        kelas::create([
            'prodi' => $request->input('prodi'),
            'nama_mk' => $request->input('nama_mk'),
            'ruang' => $request->input('ruang'),
            'tanggal' => $request->input('tanggal'),
            'waktu_mulai' => $request->input('waktu_mulai'),
            'waktu_selesai' => $request->input('waktu_selesai'),
            'maks_mhs' => $request->input('maks_mhs'),
            'dosen' => $request->input('dosen'),
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.kelas')->with('success', 'Kelas Berhasil ditambahkan!');
    }

    public function editView($id)
    {
        $kelas = kelas::findOrFail($id);
        $nama_mk = mataKuliah::all();
        $prodi = prodi::all();

        return view('pages.edit_kelas', compact('kelas', 'nama_mk', 'prodi'));
    }

    public function edit(Request $request, $id)
    {
        $kelas = kelas::findOrFail($id);

        $kelas->prodi = $request->input('prodi');
        $kelas->nama_mk = $request->input('nama_mk');
        $kelas->ruang = $request->input('ruang');
        $kelas->tanggal = $request->input('tanggal');
        $kelas->waktu_mulai = $request->input('waktu_mulai');
        $kelas->waktu_selesai = $request->input('waktu_selesai');
        $kelas->dosen = $request->input('dosen');

        $kelas->save();

        return redirect()->route('admin.kelas')->with('success', 'Berhasil Edit kelas!');
    }

    public function delete($id)
    {
        $kelas = kelas::findOrFail($id);

        $kelas->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus data kelas!');
    }
}
