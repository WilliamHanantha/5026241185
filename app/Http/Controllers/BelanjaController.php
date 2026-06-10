<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BelanjaController extends Controller
{
    public function indexbelanja()
    {
        // mengambil data dari table belanja
        $keranjangbelanja = DB::table('keranjangbelanja')->get();

        // $keranjangbelanja = $keranjangbelanja->get();

        // mengirim data belanja ke view index
        return view('belanja.index', ['keranjangbelanja' => $keranjangbelanja]);
    }

    // menampilkan view form tambah belanja
    public function tambah()
    {
        // memanggil view tambah
        return view('belanja.tambah');
    }

    // insert data ke table belanja
    public function store(Request $request)
    {
        // insert data ke table belanja
        // id tidak diisi karena AUTO_INCREMENT alias AutoNumber (otomatis)
        DB::table('keranjangbelanja')->insert([
            'kodebarang'  => $request->kodebarang,
            'jumlah' => $request->jumlah,
            'harga'    => $request->harga
        ]);
        // alihkan halaman ke halaman belanja
        return redirect('/belanja');
    }

    // hapus data belanja
    public function hapus($kode)
    {
        // menghapus data belanja berdasarkan kode yang dipilih
        DB::table('keranjangbelanja')->where('id', $kode)->delete();

        // alihkan halaman ke halaman belanja
        return redirect('/belanja');
    }
}
