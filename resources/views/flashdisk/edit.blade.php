@extends('template')
@section('judul_halaman', 'Edit flashdisk')
@section('konten')
    <a href="/flashdisk" class="btn btn-secondary mb-4">Kembali</a>
    @foreach ($flashdisk as $s)
        <div class="card">
            <div class="card-header">
                Form Edit Data flashdisk
            </div>

            <div class="card-body">
                <form action="/flashdisk/update" method="post">
                    {{ csrf_field() }}

                    <input type="hidden" name="kodeflashdisk" value="{{ $s->kodeflashdisk }}">

                    <div class="row mb-3">
                        <label for="merkflashdisk" class="col-sm-2 col-form-label">Merk</label>
                        <div class="col-sm-10">
                            <input type="text" name="merkflashdisk" id="merkflashdisk" maxlength="30"
                                class="form-control" required value="{{ $s->merkflashdisk }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="stockflashdisk" class="col-sm-2 col-form-label">Stok</label>
                        <div class="col-sm-10">
                            <input type="number" name="stockflashdisk" id="stockflashdisk" min="0"
                                class="form-control" required value="{{ $s->stockflashdisk }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                        <div class="col-sm-10">
                            <select name="tersedia" id="tersedia" class="form-control">
                                <option value="Y" {{ $s->tersedia == 'Y' ? 'selected' : '' }}>Ya</option>
                                <option value="T" {{ $s->tersedia == 'T' ? 'selected' : '' }}>Tidak</option>
                            </select>
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
    @endforeach
@endsection
