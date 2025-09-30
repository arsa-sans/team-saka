<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BukuTamu extends Model
{
    protected $table = 'buku_tamus';
    protected $primaryKey = 'id_tamu';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'id_tamu',
        'tanggal',
        'nama_tamu',
        'alamat',
        'no_hp',
        'bertemu',
        'kepentingan',
    ];
}
