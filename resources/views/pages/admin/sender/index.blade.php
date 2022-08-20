@extends('layouts.admin')

@section('title')
Pengirim Surat
@endsection

@section('container')
<main>
    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-xl px-4">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="user"></i></div>
                            Pengirim Surat
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl px-4 mt-4">
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-header-actions mb-4">
                    <div class="card-header">
                        List Pengirim Surat
                        <a class="btn btn-sm btn-primary" href="{{ route('sender.create') }}" data-bs-toggle="modal" data-bs-target="#createModal">
                            Tambah Data
                        </a>
                    </div>
                    <div class="card-body">
                        {{-- Alert --}}
                        @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        {{-- List Data --}}
                        <div class="table table-responsive">
                            <table class="table table-striped table-hover table-sm" id="crudTable">
                                <thead>
                                    <tr>
                                        <th width="10">No.</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Kontak</th>
                                        <th>E-Mail</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
{{-- Modal Add --}}
<div class="modal fade" id="createModal" role="dialog" aria-labelledby="createModal" aria-hidden="true" style="overflow:hidden;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createModal">Tambah Data Pengirim Surat</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('sender.store') }}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <div class="col-md-12">
                            <label for="name">Nama Pengirim</label>
                            <input type="text" name="name" class="form-control" placeholder="Masukan Nama Pengirim.." required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="col-md-12">
                            <label for="address">Alamat</label>
                            <textarea name="address" class="form-control" required></textarea>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="col-md-12">
                            <label for="phone">Kontak</label>
                            <input type="text" name="phone" class="form-control" placeholder="Masukan Kontak.." required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="col-md-12">
                            <label for="email">E-Mail</label>
                            <input type="email" name="email" class="form-control" placeholder="Masukan E-Mail.." required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                    <button class="btn btn-primary" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{-- Modal Update --}}
@foreach ($sender as $item)
@php
$id = $item->id;
$name = $item->name;
$address = $item->address;
$phone = $item->phone;
$email = $item->email;
@endphp
<div class="modal fade" id="updateModal{{ $id }}" role="dialog" aria-labelledby="createModal" aria-hidden="true" style="overflow:hidden;">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModal{{ $id }}">Ubah Data</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('sender.update', $item->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <div class="col-md-12">
                            <label for="name">Nama Pengirim</label>
                            <input type="text" name="name" class="form-control" value="{{ $name; }}" placeholder="Masukan Nama Pengirim.." required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="col-md-12">
                            <label for="address">Alamat</label>
                            <textarea name="address" class="form-control" required>{{ $address; }}</textarea>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="col-md-12">
                            <label for="phone">Kontak</label>
                            <input type="text" name="phone" value="{{ $phone; }}" class="form-control" placeholder="Masukan Kontak.." required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="col-md-12">
                            <label for="email">E-Mail</label>
                            <input type="email" name="email" value="{{ $email; }}" class="form-control" placeholder="Masukan E-Mail.." required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Batal</button>
                    <button class="btn btn-primary" type="submit">Ubah</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach
@endsection

@push('addon-script')
<script>
    var datatable = $('#crudTable').DataTable({
        processing: true,
        serverSide: true,
        ordering: true,
        ajax: {
            url: '{!! url()->current() !!}',
        },
        columns: [{
                "data": 'DT_RowIndex',
                orderable: false,
                searchable: false
            },
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'address',
                name: 'address'
            },
            {
                data: 'phone',
                name: 'phone'
            },
            {
                data: 'email',
                name: 'email'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searcable: false,
                width: '15%'
            },
        ]
    });
</script>
@endpush