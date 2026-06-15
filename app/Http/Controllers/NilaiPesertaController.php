<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiPesertaController extends Controller
{
    public function indexnilai()
    {
        // mengambil data dari table belanja
        $nilai_peserta = DB::table('nilai_peserta')->get();

        // mengirim data belanja ke view index
        return view('nilai_peserta.index', ['nilai_peserta' => $nilai_peserta]);
    }

    // menampilkan view form tambah belanja
    public function tambah()
    {
        // memanggil view tambah
        return view('nilai_peserta.tambah');
    }

    // insert data ke table belanja
    public function store(Request $request)
    {
        // insert data ke table belanja
        // id tidak diisi karena AUTO_INCREMENT alias AutoNumber (otomatis)
        DB::table('nilai_peserta')->insert([
            'nopeserta'  => $request->nopeserta,
            'nilaiteori' => $request->nilaiteori,
            'nilaipraktek'    => $request->nilaipraktek,
        ]);
        // alihkan halaman ke halaman belanja
        return redirect('/eas');
    }
}
