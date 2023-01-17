@extends('main')

@section('title', 'Project')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Projects</h1>
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

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data List Projects</h6>
        </div>
        <div class="card-body">
            <div class="d-flex mb-3">
                <a class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#tambahProject">
                    <span class="icon text-white-50">
                        <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">Tambah Project</span>
                </a>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Client</th>
                            <th>Products</th>
                            @foreach ($documents as $item)
                                <th class="text-center">{{ $item->nama }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Client</th>
                            <th>Products</th>
                            @foreach ($documents as $item)
                                <th class="text-center">{{ $item->nama }}</th>
                            @endforeach
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($client as $item)
                            @foreach ($item->product as $data)
                                <tr>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $data->nama }}</td>
                                    @foreach ($documents as $documents->nama)
                                        <td class="text-center">
                                            <a href="#" class="text-secondary"><i
                                                    class="fa-solid fa-file-pdf fa-xl mb-4"></i></a>
                                            <br>
                                            <button type="button" class="btn btn-success btn-sm" data-toggle="modal"
                                                data-target="#staticBackdrop">Upload</button>
                                        </td>
                                    @endforeach
                                </tr>
                            @endforeach
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal Uplaod File -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Upload File Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <div class="from-group mb-3">
                            <label for="file" class="form-label">File Dokumen</label>
                            <input type="file" class="form-control-file" id="file" name="file">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Tambah Project -->
    <div class="modal fade" id="tambahProject" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('projects.store') }}" method="POST">
                        @csrf
                        <div class="from-group mb-3">
                            <label for="client_id" class="form-label">Client</label>
                            <select name="client_id" id="client_id" class="form-control">
                                <option value="" selected hidden>Pilih Client</option>
                                @foreach ($client as $item)
                                    <option value={{ $item->id }}>{{ $item->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="from-group mb-3">
                            <label for="product_id" class="form-label">Product</label>
                            <select name="product_id" id="product_id" class="form-control">
                                <option value="" selected hidden>Pilih Product</option>
                                @foreach ($product as $data)
                                    <option value={{ $data->id }}>{{ $data->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
