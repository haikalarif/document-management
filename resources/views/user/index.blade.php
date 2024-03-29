@extends('main')

@section('title', 'Users')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Users</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-info alert-dismissible col-lg-12" role='alert'>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{-- <button type="button" class="close" data-disniss="alert" aria-hidden="true">&times;</button> --}}
            <h5><i class="icon fa fa-check-square"></i> Berhasil!!!</h5>
            {{ session('success') }}
        </div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger alert-dismissible col-lg-12" role='alert'>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            {{-- <button type="button" class="close" data-disniss="alert" aria-hidden="true">&times;</button> --}}
            <h5><i class="icon fa fa-check-square"></i> Gagal!!!</h5>
            {{ session('error') }}
        </div>
    @endif

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data List Users</h6>
        </div>
        <div class="card-body">
            <div class="d-flex mb-3">
                <a href="/user/create" class="btn btn-success btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Users</span>
                </a>
            </div>
            <div class="container-fluid">
                <div class="row">
                    @foreach ($users as $usr)
                        <div class="col-lg-4">
                            <div class="card">
                                @if ($usr->image)
                                    <img src="{{ asset('storage/' . $usr->image) }}" class="card-img-top img-fluid p-2"
                                        alt="Image User" style="height: 180px; border-radius: 10px;">
                                @else
                                    <img src="{{ asset('temp') }}/img/undraw_profile.svg" class="card-img-top img-fluid p-2"
                                        alt="Image User" style="height: 180px; border-radius: 10px;">
                                @endif
                                <div class="card-body">
                                    <h4 class="card-title text-center">{{ ucfirst($usr->name) }}</h4>
                                    <p class="card-text"><strong>Email &nbsp;: </strong> {{ $usr->email }}</p>
                                    <p><strong>Role &nbsp;&nbsp;&nbsp;:</strong> {{ ucfirst($usr->role) }}</p>
                                    <div class="d-flex justify-content-center mt-4">
                                        <a href="/user/{{ $usr->id }}/edit" class="btn btn-warning mr-2"><i
                                                class="fa fa-edit"></i> Edit</a>
                                        <form action="/user/{{ $usr->id }}" method="POST" class="d-inline">
                                            @method('delete')
                                            @csrf
                                            <button class="btn btn-danger"
                                                onclick="return confirm('Yakin Mau Di Hapus?')"><i class="fa fa-trash"></i>
                                                Hapus</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Image</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($users as $usr)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                @if ($usr->image)
                                    <td><img class="img-profile rounded-circle" style="width: 50px; height: 50px"
                                            src="{{ asset('storage/' . $usr->image) }}">
                                    </td>
                                @else
                                    <td>
                                        <img class="img-profile rounded-circle" style="width: 50px; height: 50px"
                                            src="{{ asset('temp') }}/img/undraw_profile.svg">
                                    </td>
                                @endif
                                <td>{{ $usr->name }}</td>
                                <td>{{ $usr->email }}</td>
                                <td>{{ ucfirst($usr->role) }}</td>
                                <td class="text-center">
                                    <a href="/user/{{ $usr->id }}" class="btn btn-circle btn-sm btn-primary"><i
                                            class="fa fa-eye"></i></a>
                                    <a href="/user/{{ $usr->id }}/edit" class="btn btn-circle btn-sm btn-warning"><i
                                            class="fa fa-edit"></i></a>
                                    <form action="/user/{{ $usr->id }}" method="POST" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button class="btn btn-circle btn-sm btn-danger"
                                            onclick="return confirm('Yakin Mau Di Hapus?')"><i
                                                class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> --}}
        </div>
    </div>
@endsection
