<?php

namespace App\Http\Controllers;

use App\Models\pinjaman;
use Illuminate\Http\Request;

class pinjamanController extends Controller
{
    public function create()
    {

        return view('components.form-pinjaman');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'jabatan' => 'required',
            'departemen' => 'required',
            'penempatan' => 'required',
            'jumlah_pinjam' => 'required',
            'cicilan' => 'required',
            'tanggal_pinjam' => 'required',
            'keperluan' => 'required',

        ]);
        pinjaman::create($validatedData);
        return redirect('/')->with('success', 'Data user berhasil disimpan.');
    }
}
