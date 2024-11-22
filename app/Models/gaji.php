<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class gaji extends Model
{
    protected $fillable = [
        'nip',
        'nama',
        'jabatan',
        'departemen',
        'penempatan',
        'namabank',
        'hariefektifkerja',
        'harikerja',
        'izinkerja',
        'sakitkerja',
        'alfakerja',
        'cutikerja',
        'gajipokok',
        'tunjanganmakan',
        'kesehatan',
        'jkm',
        'jkk',
        'jht',
        'jp',
        'pph21',
        'pinjaman',
        'cicilan',
        'gajikotor',
        'potongan',
        'gajibersih',
        'norek',
        'status',
        'jabatanapprove',
        'penempatanapprove',
        'statusapprove',
    ];
}
