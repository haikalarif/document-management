@extends('main')

@section('title', 'Edit Document')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><strong>Document /</strong> Edit Dokumen</h1>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div
                class="d-flex justify-content-center flex-wrap flex-md-nowrapalign-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="text-center h2"> <b> Update Dokumen Baru</b></h1>
            </div>
        </div>
    </div>

    <div class="col-lg-8">
        <form action="/documents/{{ $documents->id }}" method="POST">
            @csrf
            @method('put')
            <div class="from-group mb-3">
                <label for="nama" class="form-label">Nama Dokumen</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama"
                    value="{{ old('nama', $documents->nama) }}" placeholder="Masukkan Nama Dokumen..." required autofocus>
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <br>
            <div class="from-group">
                <button type="submit" class="btn bg-gradient-primary text-white">Update</button>
                <a href="/documents" class="btn bg-gradient-danger text-white">Kembali</a>
            </div>
        </form>
    </div>
@endsection