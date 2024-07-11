<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;

    protected $fillable = [
        'prodi',
        'nama_mk',
        'ruang',
        'tanggal',
        'waktu_mulai',
        'waktu_selesai',
        'maks_mhs',
        'dosen',
    ];
}
