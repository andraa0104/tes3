<?php

namespace App\Http\Controllers;

use App\Models\izin;
use Illuminate\Http\Request;

class izinController extends Controller
{
    public function create()
    {

        return view('components.form-penggajian');
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
            'jenisizin' => 'required',
            'mulai' => 'required',
            'selesai' => 'required',
            'jumlahizin' => 'required',
            'keterangan' => 'required',

        ]);
        izin::create($validatedData);
        return redirect('/')->with('success', 'Data user berhasil disimpan.');
    }
}
