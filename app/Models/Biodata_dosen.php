<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata_dosen extends Model
{
    use HasFactory;

    protected $table = 'biodata_dosen';
    protected $fillable = [
        'nama',
        'email',
        'pendidikan',
        'NIP'
    ];
}
