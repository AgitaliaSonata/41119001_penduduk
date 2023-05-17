<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;

    protected $table = 'penduduk';
    protected $fillable = [
        'nik',
        'nama',
        'jenis_kelamin',
        'tgl_lahir',
        'umur_bulan',
        'propinsi_id',
        'kota_id',
        'alamat_pasien',
        'rt',
        'rw'
    ];
}
