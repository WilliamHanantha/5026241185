@extends('template')
@section('judul_halaman', 'Tambah crypto')
@section('konten')
    <a href="/crypto" class="btn btn-secondary mb-4">Kembali</a>

    <div class="card">
        <div class="card-header">
            Form Tambah Data crypto
        </div>

        <div class="card-body">
            <form action="/crypto/store" method="post">
                {{ csrf_field() }}

                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama" id="nama" maxlength="30" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="ticker" class="col-sm-2 col-form-label">Ticker</label>
                    <div class="col-sm-10">
                        <input type="text" name="ticker" id="ticker" class="form-control" required>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="number" name="harga" id="harga" min="0" value="0"
                            class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="mc" class="col-sm-2 col-form-label">Market Cap</label>
                    <div class="col-sm-10">
                        <input type="number" name="mc" id="mc" min="0" value="0"
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
