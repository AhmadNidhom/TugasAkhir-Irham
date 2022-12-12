<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurnal extends Model
{
    use HasFactory;

    protected $table = 'jurnal';
    protected $fillable = [
        'capaian',
        'sub_capaian',
        'alat_bahan',
        'tanggal',
        'tgl_berakhir',
        'prosedur',
        'id_user',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
