<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    protected $fillable = [
        'nik',
        'nama',
        'asal_perusahaan',
        'nama_pic',
        'departemen',
        'tujuan_lokasi',
        'tujuan',
    ];
}