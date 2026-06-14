@extends('template')
@section('judul_halaman', 'Tambah nilai')
@section('konten')
    <a href="/nilai" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data Nilai Kuliah
        </div>

        <div class="card-body">
            <form action="/nilai/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="nrp" class="col-sm-2 col-form-label">NRP</label>
                    <div class="col-sm-10">
                        <input type="text" name="nrp" id="nrp" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="nilaiangka" class="col-sm-2 col-form-label">Nilai Angka</label>
                    <div class="col-sm-10">
                        <input type="text" name="nilaiangka" id="nilaiangka" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="sks" class="col-sm-2 col-form-label">SKS</label>
                    <div class="col-sm-10">
                        <input type="text" name="sks" id="sks" min="0" value="0"
                            class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
