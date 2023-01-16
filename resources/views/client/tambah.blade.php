@extends('main')

@section('title', 'Tambah Client')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><strong>Clients /</strong> Tambah Client</h1>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div
                class="d-flex justify-content-center flex-wrap flex-md-nowrapalign-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="text-center h2"> <b> Buat Client Baru</b></h1>
            </div>
        </div>
    </div>


    <div class="col-lg-8">
        <form action="/clients" method="POST">
            @csrf
            <div class="from-group mb-3">
                <label for="nama" class="form-label">Nama Perusahaan</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                    placeholder="Masukkan Nama Perusahaan..." required>
            </div>
            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <div class="from-group mb-3">
                <label for="kontak" class="form-label">Kontak Perusahaan</label>
                <input type="text" class="form-control @error('kontak') is-invalid @enderror" id="kontak"
                    name="kontak" placeholder="Masukkan Kontak Perusahaan...">
            </div>
            @error('kontak')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <div class="from-group mb-3">
                <label for="alamat" class="form-label">Alamat Perusahaan</label>
                <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" id="alamat" cols="30"
                    rows="5" placeholder="Masukkan Alamat Lengkap Perusahaan..." required></textarea>
                {{-- <input type="alamat" class="form-control  @error('alamat') is-invalid @enderror" id="alamat"
                    name="alamat" placeholder="Masukkan Alamat Perusahaan..." required> --}}
            </div>
            @error('alamat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            <br>
            <div class="from-group mb-5">
                <button type="submit" class="btn bg-gradient-primary text-white">Simpan</button>
                <a href="/clients" class="btn bg-gradient-danger text-white">Kembali</a>
            </div>
        </form>
    </div>
@endsection
