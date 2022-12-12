<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PKL extends Model
{
    use HasFactory;

    protected $table = 'pkl';
    protected $fillable = [
        'id_user',
        'id_perusahaan',
        'id_dosen',
        'id_lapang',
        'id_jurnal'
    ];
}
