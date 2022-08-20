@extends('layouts.admin')

@section('title')
Dashboard
@endsection

@section('container')
<main>
    <header class="page-header page-header-dark pb-10" style="background-color: yellow;">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title" style="color: black;">
                            <div class="page-header-icon" style="color: black;"><i data-feather="activity"></i></div>
                            Dashboard
                        </h1>
                        <div class="page-header-subtitle" style="color: black;">Administrator Panel</div>
                    </div>
                    <div class="col-12 col-xl-auto mt-4">
                        <div class="input-group input-group-joined border-0" style="width: 16.5rem">
                            <span class="input-group-text"><i class="text-primary" data-feather="calendar"></i></span>
                            <input class="form-control ps-0 pointer" id="litepickerRangePlugin" placeholder="Select date range..." />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-n10">
        <div class="row">
            <div class="col-xxl-12 col-xl-12 mb-4">
                <div class="card h-100">
                    <div class="card-body h-100 p-5">
                        <div class="row align-items-center">
                            <div class="col-xl-8 col-xxl-12">
                                <div class="text-xl-start text-xxl-center mb-4 mb-xl-0 mb-xxl-4">
                                    <h1 class="text-primary">Selamat Datang {{ Auth::user()->name }}!</h1>
                                    <p class="text-gray-700 mb-0">Di Website Aplikasi Surat Masuk dan Keluar</p>
                                </div>
                            </div>
                            <div class="col-xl-4 col-xxl-12 text-center"><img class="img-fluid" src="/admin/assets/img/illustrations/img-app-surat.png" style="max-width: 15rem" alt="LOGO SURAT IAHN" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Example Colored Cards for Dashboard Demo-->
        <div class="row">
            <div class="col-lg-12 col-xl-6 mb-4">
                <div class="card bg-primary text-white h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="me-3">
                                <div class="text-white-75 small">Surat Masuk</div>
                                <div class="text-lg fw-bold">{{ $masuk }}</div>
                            </div>
                            <i class="feather-xl text-white-50" data-feather="mail"></i>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between small">
                        <a class="text-white stretched-link" href="{{ route('surat-masuk') }}">Selengkapnya</a>
                        <div class="text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-6 mb-4">
                <div class="card bg-warning text-white h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="me-3">
                                <div class="text-white-75 small">Surat Keluar</div>
                                <div class="text-lg fw-bold">{{ $keluar }}</div>
                            </div>
                            <i class="feather-xl text-white-50" data-feather="mail"></i>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between small">
                        <a class="text-white stretched-link" href="{{ route('surat-keluar') }}">Selengkapnya</a>
                        <div class="text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-xl-6 mb-4">
                <div class="card bg-success text-white h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="me-3">
                                <div class="text-white-75 small">Disposisi</div>
                                <div class="text-lg fw-bold">{{ $disposisi }}</div>
                            </div>
                            <i class="feather-xl text-white-50" data-feather="mail"></i>
                        </div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between small">
                        <a class="text-white stretched-link" href="{{ route('surat-disposisi') }}">Selengkapnya</a>
                        <div class="text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection