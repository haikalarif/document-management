@extends('main')

@section('title', 'Dashboard')

@section('content')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-sm font-weight-bold text-primary text-uppercase mb-1">
                                Client</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jml_client->count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-sm font-weight-bold text-success text-uppercase mb-1">
                                Product</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jml_product->count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-brands fa-dropbox fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-sm font-weight-bold text-info text-uppercase mb-1">Project
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jml_project->count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-chart-pie fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-sm font-weight-bold text-warning text-uppercase mb-1">Users
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $jml_user->count() }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary text-center">Document Management</h6>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-center align-items-center rotate-n-15 mb-4">
                        {{-- <img class="img-profile rounded-circle justify-content-center" width="10%"
                            src="{{ asset('temp') }}/img/undraw_profile.svg"> --}}
                        <i class="fa-brands fa-dochub fa-4x text-primary"></i>
                    </div>
                    <p align="justify">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Document Management merupakan sebuah solusi program software yang dirancang secara khusus dengan
                        tujuan untuk mengorganisir, mengamankan, menangkap, mendigitalisasi, menandai, menyetujui, dan
                        menyelesaikan tugas pada file-file bisnis.
                    </p>
                    <p align="justify" class="mb-0">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Aplikasi ini digunakan untuk menangkap dan mengorganisir segala jenis dokumen ke dalam
                        bentuk elektronik yang mudah ditemukan dan diambil ketika dibutuhkan. Dalam kasus ini, dokumen
                        didefinisikan sebagai segala jenis objek atau informasi yang direkam dan dipandang sebagai sebuah
                        unit data.
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
