<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    use HasFactory;

    protected $table = 'perusahaan';
    protected $fillable = [
        'nama_perusahaan',
        'tanggal_pendirian',
        'pimpinan',
        'nama_pimpinan',
        'alamat',
        'bidang_usaha',
        'jumlah_karyawan',
        'assesibilitas'
    ];
}
