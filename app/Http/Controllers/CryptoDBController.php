<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CryptoDBController extends Controller
{
    public function indexcrypto()
    {
        // mengambil data dari table crypto
        $crypto = DB::table('crypto')->paginate(10);

        // mengirim data crypto ke view index
        return view('indexcrypto', ['crypto' => $crypto]);
    }

    // menampilkan view form tambah crypto
    public function tambah()
    {
        // memanggil view tambah
        return view('tambahcrypto');
    }

    // insert data ke table crypto
    public function store(Request $request)
    {
        // insert data ke table crypto
        // kodecrypto tidak diisi karena AUTO_INCREMENT alias AutoNumber (otomatis)
        DB::table('crypto')->insert([
            'nama'  => $request->nama,
            'ticker' => $request->ticker,
            'harga'    => $request->harga,
            'mc'    => $request->mc
        ]);
        // alihkan halaman ke halaman crypto
        return redirect('/crypto');
    }

    // method untuk edit data crypto
    public function edit($kode)
    {
        // mengambil data crypto berdasarkan kode yang dipilih
        $crypto = DB::table('crypto')->where('kodecrypto', $kode)->get();
        // passing data crypto yang didapat ke view editcrypto.blade.php
        return view('editcrypto', ['crypto' => $crypto]);
    }

    // update data crypto
    public function update(Request $request)
    {
        // update data crypto
        DB::table('crypto')->where('kodecrypto', $request->kodecrypto)->update([
            'nama'  => $request->nama,
            'ticker' => $request->ticker,
            'harga'    => $request->harga,
            'mc'    => $request->mc
        ]);
        // alihkan halaman ke halaman crypto
        return redirect('/crypto');
    }

    // hapus data crypto
    public function hapus($kode)
    {
        // menghapus data crypto berdasarkan kode yang dipilih
        DB::table('crypto')->where('kodecrypto', $kode)->delete();

        // alihkan halaman ke halaman crypto
        return redirect('/crypto');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table crypto sesuai pencarian merk
        $crypto = DB::table('crypto')
            ->where('ticker', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data crypto ke view index
        return view('indexcrypto', ['crypto' => $crypto]);
    }
}
