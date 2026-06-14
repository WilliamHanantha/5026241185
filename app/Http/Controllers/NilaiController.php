<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class nilaiController extends Controller
{
    public function indexnilai()
    {
        // mengambil data dari table nilai
        $nilai = DB::table('nilaikuliah')->get();

        // $nilai = $nilai->get();

        // mengirim data nilai ke view index
        return view('nilai.index', ['nilai' => $nilai]);
    }

    // menampilkan view form tambah nilai
    public function tambah()
    {
        // memanggil view tambah
        return view('nilai.tambah');
    }

    // insert data ke table nilai
    public function store(Request $request)
    {
        // insert data ke table nilai
        // id tidak diisi karena AUTO_INCREMENT alias AutoNumber (otomatis)
        DB::table('nilaikuliah')->insert([
            'nrp'  => $request->nrp,
            'nilaiangka' => $request->nilaiangka,
            'sks'    => $request->sks
        ]);
        // alihkan halaman ke halaman nilai
        return redirect('/nilai');
    }
}
