@extends('template')
@section('judul_halaman', 'Data belanja')
@section('konten')
    <p>
        <br><a href="/belanja/tambah" class="btn btn-primary">Beli</a>
    </p>
    <br />
    <table class="table table-hover table-striped mt-10">
        <tr>
            <th>Kode Pembelian</th>
            <th>Kode Barang</th>
            <th>Jumlah Pembelian</th>
            <th>Harga per item</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        @foreach ($keranjangbelanja as $s)
            <tr>
                <td>{{ $s->id }}</td>
                <td>{{ $s->kodebarang }}</td>
                <td>{{ $s->jumlah }}</td>
                <td>{{ number_format($s->harga, 0, ',', '.') }}</td>
                <td>{{ number_format($s->jumlah * $s->harga, 0, ',', '.') }}</td>
                <td>
                    <a href="/belanja/hapus/{{ $s->id }}" class="btn btn-danger">Batal</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
