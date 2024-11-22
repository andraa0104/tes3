<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class izin extends Model
{
    protected $fillable = [
        'nip',
        'nama',
        'jabatan',
        'departemen',
        'penempatan',
        'jenisizin',
        'mulai',
        'selesai',
        'keterangan',
        'jumlahizin',
        'status',
    ];
}
