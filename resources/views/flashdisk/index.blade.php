@extends('template')
@section('judul_halaman', 'Data flashdisk')
@section('konten')
    <p>
        <br><a href="/flashdisk/tambah" class="btn btn-primary"> + Tambah flashdisk Baru</a>
    </p>
    <br />
    <br />

    <p>Cari Data flashdisk :</p>
    <form action="/flashdisk/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari merk flashdisk .." class="form-control">
        <input type="submit" value="CARI" class="btn btn-success">
    </form>
    <br />
    <table class="table table-hover table-striped">
        <tr>
            <th>Kode</th>
            <th>Merk</th>
            <th>Stok</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach ($flashdisk as $s)
            <tr>
                <td>{{ $s->kodeflashdisk }}</td>
                <td>{{ $s->merkflashdisk }}</td>
                <td>{{ $s->stockflashdisk }}</td>
                <td>{{ $s->tersedia == 'Y' ? 'Ya' : 'Tidak' }}</td>
                <td>
                    <a href="/flashdisk/edit/{{ $s->kodeflashdisk }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/flashdisk/hapus/{{ $s->kodeflashdisk }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $flashdisk->links() }}
@endsection
