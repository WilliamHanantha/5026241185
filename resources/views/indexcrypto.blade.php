@extends('template')
@section('judul_halaman', 'Data crypto')
@section('konten')
    <p>
        <br><a href="/crypto/tambah" class="btn btn-primary"> + Tambah crypto Baru</a>
    </p>
    <br />
    <br />

    <p>Cari Data crypto :</p>
    <form action="/crypto/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari ticker crypto .." class="form-control">
        <input type="submit" value="CARI" class="btn btn-success">
    </form>
    <br />
    <table class="table table-hover table-striped mt-10">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Ticker</th>
            <th>Harga</th>
            <th>Market Cap</th>
            <th>Opsi</th>
        </tr>
        @foreach ($crypto as $s)
            <tr>
                <td>{{ $s->kodecrypto }}</td>
                <td>{{ $s->nama }}</td>
                <td>{{ $s->ticker }}</td>
                <td>{{ $s->harga }}</td>
                <td>{{ $s->mc }}</td>
                <td>
                    <a href="/crypto/edit/{{ $s->kodecrypto }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/crypto/hapus/{{ $s->kodecrypto }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $crypto->links() }}
@endsection
