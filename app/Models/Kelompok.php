<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelompok extends Model
{
    use HasFactory;

    protected $table = 'kelompok';
    protected $fillable = [
        'tahun_ajaran',
        'univ',
        'tgl_mulai',
        'tgl_berakhir',
        'users',
    ];
}
