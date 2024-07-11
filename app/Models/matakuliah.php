<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_mk',
        'sks',
        'prodi',
        'semester'
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->kode_mk = 'FT' . rand(100, 999);
        });
    }
}
