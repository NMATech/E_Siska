<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prodi;

class controllerProdi extends Controller
{
    public function store(Request $request)
    {
        prodi::create([
            'nama_prodi' => $request->input('nama_prodi'),
            'nama_fakultas' => $request->input('nama_fakultas')
        ]);

        return redirect()->route('admin.dashboard')->with('success', 'Berhasil menambahkan prodi!');
    }

    public function editView($id)
    {
        $pd_fk = prodi::findOrFail($id);

        if (!$pd_fk) {
            abort(404, 'Tidak menemukan data!');
        }

        return view('pages.edit_prodi', ['prodi' => $pd_fk]);
    }

    public function update(Request $request, $id)
    {
        $pd_fk = prodi::findOrFail($id);

        if (!$pd_fk) {
            abort(404, 'Tidak menemukan data!');
        }

        $pd_fk->nama_prodi = $request->input('nama_prodi');
        $pd_fk->nama_fakultas = $request->input('nama_fakultas');

        $pd_fk->save();

        return redirect()->route('admin.dashboard')->with('success', 'Berhasil mengedit prodi!');
    }

    public function delete($id)
    {
        $pd_fk = prodi::findOrFail($id);

        if (!$pd_fk) {
            abort(404, 'Tidak menemukan data!');
        }

        $pd_fk->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Berhasil menghapus prodi!');
    }
}
