@extends('template')
@section('judul_halaman', 'Data Nilai Kuliah')
@section('konten')
    <p>
        <br><a href="/nilai/tambah" class="btn btn-primary">Tambah Data</a>
    </p>
    <br />
    <table class="table table-hover table-striped mt-10">
        <tr>
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach ($nilai as $s)
            <tr>
                <td>{{ $s->ID }}</td>
                <td>{{ $s->NRP }}</td>
                <td>{{ $s->NilaiAngka }}</td>
                <td>{{ $s->SKS }}</td>
                <td>
                    @if ($s->NilaiAngka <= 40)
                        D
                    @elseif ($s->NilaiAngka <= 60)
                        C
                    @elseif ($s->NilaiAngka <= 80)
                        B
                    @else
                        A
                    @endif
                </td>
                <td>{{ $s->NilaiAngka * $s->SKS }}</td>
            </tr>
        @endforeach
    </table>
@endsection
