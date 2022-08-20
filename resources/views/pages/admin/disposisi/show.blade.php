@extends('layouts.admin')

@section('title')
Detail Surat
@endsection

@section('container')
<main>
    <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-4">
        <div class="container-fluid px-4">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="file-text"></i></div>
                            Detail Surat
                        </h1>
                    </div>
                    <div class="col-12 col-xl-auto mb-3">
                        <button class="btn btn-sm btn-light text-primary" onclick="javascript:window.history.back();">
                            <i class="me-1" data-feather="arrow-left"></i>
                            Kembali Ke Semua Surat
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-fluid px-4">
        <div class="row gx-4">
            <div class="col-lg-7">
                <div class="card mb-4">
                    <div class="card-header">Detail Surat</div>
                    <div class="card-body">
                        <div class="mb-3 row">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>No.Surat</th>
                                        <td>{{ $item->letter->letter_no }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Surat</th>
                                        <td>{{ Carbon\Carbon::parse($item->letter->letter_date)->translatedFormat('l, d F Y') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Lampiran</th>
                                        <td>{{ $item->lampiran }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Diterima</th>
                                        <td>{{ Carbon\Carbon::parse($item->letter->date_received)->translatedFormat('l, d F Y') }}</td>
                                    </tr>
                                    <tr>
                                        <th>No. Agenda</th>
                                        <td>{{ $item->letter->agenda_no }}</td>
                                    </tr>
                                    <tr>
                                        <th>Pengirim</th>
                                        <td>{{ $item->letter->sender->name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Perihal</th>
                                        <td>{{ $item->letter->regarding }}</td>
                                    </tr>
                                    <tr>
                                        <th>Status</th>
                                        <td>{{ $item->status }}</td>
                                    </tr>
                                    <tr>
                                        <th>Sifat</th>
                                        <td>{{ $item->sifat }}</td>
                                    </tr>
                                    <tr>
                                        <th>Petunjuk</th>
                                        <td>{{ $item->petunjuk }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tujuan Disposisi</th>
                                        <td>{{ $item->letter->disposisi }}</td>
                                    </tr>
                                    <tr>
                                        <th>Catatan Rektor</th>
                                        <td>{{ $item->catatan_rektor }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Penyelesaian</th>
                                        <td>{{ Carbon\Carbon::parse($item->tgl_selesai)->translatedFormat('l, d F Y') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Kepada</th>
                                        <td>{{ $item->kepada }}</td>
                                    </tr>
                                    <tr>
                                        <th>Petunjuk</th>
                                        <td>{{ $item->petunjuk_kpd_1 }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Penyelesaian 2</th>
                                        <td>{{ Carbon\Carbon::parse($item->tgl_selesai_2)->translatedFormat('l, d F Y') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Penerima</th>
                                        <td>{{ $item->penerima_2 }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Pengajuan Kembali</th>
                                        <td>{{ Carbon\Carbon::parse($item->tgl_aju_kembali)->translatedFormat('l, d F Y') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Penerima Disposisi</th>
                                        <td>{{ $item->penerima_disposisi_2 }}</td>
                                    </tr>
                                    <tr>
                                        <th>Kepada</th>
                                        <td>{{ $item->kepada_2 }}</td>
                                    </tr>
                                    <tr>
                                        <th>Petunjuk</th>
                                        <td>{{ $item->petunjuk_kpd_2 }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Penyelesaian</th>
                                        <td>{{ Carbon\Carbon::parse($item->tgl_selesai_3)->translatedFormat('l, d F Y') }}</td>
                                    </tr>
                                    <tr>
                                        <th>Penerima</th>
                                        <td>{{ $item->penerima_3 }}</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="card mb-4">
                    <div class="card-header">
                        File Surat -
                        <a href="{{ route('download-surat', $item->id) }}" class="btn btn-sm btn-primary">
                            <i class="fa fa-download" aria-hidden="true"></i> &nbsp; Download Surat
                        </a>
                    </div>

                    <div class="card-body">
                        <div class="mb-3 row">
                            <embed src="{{ Storage::url($item->letter->letter_file) }}" width="500" height="375" type="application/pdf">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection