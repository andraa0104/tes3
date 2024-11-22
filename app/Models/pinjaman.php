<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pinjaman extends Model
{
    protected $fillable = [
        'nip',
        'nama',
        'jabatan',
        'departemen',
        'penempatan',
        'tanggal_pinjam',
        'jumlah_pinjam',
        'cicilan',
        'keperluan',
        'status',
    ];}
