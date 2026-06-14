<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class FlashdiskController extends Controller
{
    public function indexflashdisk()
    {
        // mengambil data dari table flashdisk
        $flashdisk = DB::table('flashdisk')->paginate(10);

        // mengirim data flashdisk ke view index
        return view('flashdisk.index', ['flashdisk' => $flashdisk]);
    }

    // menampilkan view form tambah flashdisk
    public function tambah()
    {
        // memanggil view tambah
        return view('flashdisk.tambah');
    }

    // insert data ke table flashdisk
    public function store(Request $request)
    {
        // insert data ke table flashdisk
        // kodeflashdisk tidak diisi karena AUTO_INCREMENT alias AutoNumber (otomatis)
        DB::table('flashdisk')->insert([
            'merkflashdisk'  => $request->merkflashdisk,
            'stockflashdisk' => $request->stockflashdisk,
            'tersedia'    => $request->tersedia
        ]);
        // alihkan halaman ke halaman flashdisk
        return redirect('/flashdisk');
    }

    // method untuk edit data flashdisk
    public function edit($kode)
    {
        // mengambil data flashdisk berdasarkan kode yang dipilih
        $flashdisk = DB::table('flashdisk')->where('kodeflashdisk', $kode)->get();
        // passing data flashdisk yang didapat ke view editflashdisk.blade.php
        return view('flashdisk.edit', ['flashdisk' => $flashdisk]);
    }

    // update data flashdisk
    public function update(Request $request)
    {
        // update data flashdisk
        DB::table('flashdisk')->where('kodeflashdisk', $request->kodeflashdisk)->update([
            'merkflashdisk'  => $request->merkflashdisk,
            'stockflashdisk' => $request->stockflashdisk,
            'tersedia'    => $request->tersedia
        ]);
        // alihkan halaman ke halaman flashdisk
        return redirect('/flashdisk');
    }

    // hapus data flashdisk
    public function hapus($kode)
    {
        // menghapus data flashdisk berdasarkan kode yang dipilih
        DB::table('flashdisk')->where('kodeflashdisk', $kode)->delete();

        // alihkan halaman ke halaman flashdisk
        return redirect('/flashdisk');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

        // mengambil data dari table flashdisk sesuai pencarian merk
        $flashdisk = DB::table('flashdisk')
            ->where('merkflashdisk', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data flashdisk ke view index
        return view('flashdisk.index', ['flashdisk' => $flashdisk]);
    }
}
