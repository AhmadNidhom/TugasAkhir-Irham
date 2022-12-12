<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata_lapang extends Model
{
    use HasFactory;

    protected $table = 'biodata_lapang';
    protected $fillable = [
        'nama',
        'pendidikan',
        'email',
        'jabatan'
    ];
}
