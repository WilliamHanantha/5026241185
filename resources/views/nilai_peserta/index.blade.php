@extends('template')
@section('judul_halaman_nilai', 'Kode Soal nilai_peserta')
@section('konten')
    <p>
        <br><a href="/eas/tambah" class="btn btn-primary">Tambah Data</a>
    </p>
    <br />
    <table class="table table-hover table-striped mt-10">
        <tr>
            <th>ID</th>
            <th>No Peserta</th>
            <th>Nilai Teori</th>
            <th>Nilai Praktek</th>
            <th>Rata-rata</th>
            <th>Status</th>
        </tr>
        @foreach ($nilai_peserta as $s)
            <tr>
                <td>{{ $s->ID }}</td>
                <td>{{ $s->nopeserta }}</td>
                <td>{{ $s->nilaiteori }}</td>
                <td>{{ $s->nilaipraktek }}</td>
                <td>{{ ($s->nilaiteori + $s->nilaipraktek) / 2 }}</td>
                <td style="background-color: {{ ($s->nilaiteori + $s->nilaipraktek) / 2 >= 75 ? '#008000' : '#EE4B2B' }}"
                    class="text-white">
                    @if (($s->nilaiteori + $s->nilaipraktek) / 2 >= 75)
                        Lulus
                    @else
                        Tidak Lulus
                    @endif
                </td>
            </tr>
        @endforeach
    </table>
@endsection
