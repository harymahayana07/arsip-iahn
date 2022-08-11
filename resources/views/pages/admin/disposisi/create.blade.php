@extends('layouts.admin')

@section('title')
Tambah Surat Disposisi
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
                            Tambah Surat Disposisi
                        </h1>
                    </div>
                    <div class="col-12 col-xl-auto mb-3">
                        <a class="btn btn-sm btn-light text-primary" href="{{ route('surat-disposisi') }}">
                            <i class="me-1" data-feather="arrow-left"></i>
                            Kembali ke Semua Surat Disposisi
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-fluid px-4">
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
        <form action="{{ route('disposisi.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row gx-4">
                <div class="col-lg-9">
                    <div class="card mb-4">
                        <div class="card-header">Form Surat Disposisi</div>
                        <div class="card-body">
                            <div class="mb-3 row">
                                <label for="letter_id" class="col-sm-3 col-form-label">No.Surat Disposisi</label>
                                <div class="col-sm-9">
                                    <select name="letter_id" class="form-control selectx" required>
                                        <option value="">Pilih..</option>
                                        @foreach ($letters as $letter)
                                        <option value="{{ $letter->letter_no }}">{{ $letter->letter_no }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('letter_id')
                                <div class="invalid-feedback">
                                    {{ $message; }}
                                </div>
                                @enderror

                            </div>
                            <div class="mb-3 row">
                                <label for="lampiran" class="col-sm-3 col-form-label">Lampiran</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('lampiran') is-invalid @enderror" value="{{ old('lampiran') }}" name="lampiran" placeholder="Lampiran.." required>
                                </div>
                                @error('lampiran')
                                <div class="invalid-feedback">
                                    {{ $message; }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3 row">
                                <label for="status" class="col-sm-3 col-form-label">Status</label>
                                <div class="col-sm-9">
                                    <input type="checkbox" value="Asli" name="status[]"> Asli <br>
                                    <input type="checkbox" value="Tembusan" name="status[]"> Tembusan
                                </div>
                                @error('status')
                                <div class="invalid-feedback">
                                    {{ $message; }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3 row">
                                <label for="sifat" class="col-sm-3 col-form-label">Sifat</label>
                                <div class="col-sm-9 row" style="float: right;">
                                    <div class="col-sm-4">
                                        <input type="checkbox" value="Sangat Segera/kilat" name="sifat[]"> Sangat Segera/kilat <br>
                                        <input type="checkbox" value="Segera" name="sifat[]"> Segera <br>
                                        <input type="checkbox" value="Biasa" name="sifat[]"> Biasa
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="checkbox" value="Sangat Rahasia" name="sifat[]"> Sangat Rahasia <br>
                                        <input type="checkbox" value="Rahasia" name="sifat[]"> Rahasia <br>
                                        <input type="checkbox" value="Biasa" name="sifat[]"> Biasa
                                    </div>
                                </div>
                                @error('sifat')
                                <div class="invalid-feedback">
                                    {{ $message; }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3 row">
                                <label for="petunjuk" class="col-sm-3 col-form-label">Petunjuk</label>
                                <div class="col-sm-9 row" style="float: right;">
                                    <div class="col-sm-4">
                                        <input type="checkbox" value="Setuju" name="petunjuk[]"> Setuju <br>
                                        <input type="checkbox" value="Tolak" name="petunjuk[]"> Tolak <br>
                                        <input type="checkbox" value="Teliti & Pendapat" name="petunjuk[]"> Teliti & Pendapat <br>
                                        <input type="checkbox" value="Untuk Diketahui" name="petunjuk[]"> Untuk Diketahui <br>
                                        <input type="checkbox" value="Selesaikan" name="petunjuk[]"> Selesaikan <br>
                                        <input type="checkbox" value="Sesuai Catatan" name="petunjuk[]"> Sesuai Catatan <br>
                                        <input type="checkbox" value="Untuk Perhatian" name="petunjuk[]"> Untuk Perhatian <br>
                                        <input type="checkbox" value="Edarkan" name="petunjuk[]"> Edarkan <br>
                                        <input type="checkbox" value="-" name="petunjuk[]"> -
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="checkbox" value="Jawab" name="petunjuk[]"> Jawab <br>
                                        <input type="checkbox" value="Perbaiki" name="petunjuk[]"> Perbaiki <br>
                                        <input type="checkbox" value="Bicarakan Dengan saya" name="petunjuk[]"> Bicarakan Dengan saya <br>
                                        <input type="checkbox" value="Bicarakan Bersama" name="petunjuk[]"> Bicarakan Bersama <br>
                                        <input type="checkbox" value="Ingatkan" name="petunjuk[]"> Ingatkan <br>
                                        <input type="checkbox" value="Simpan" name="petunjuk[]"> Simpan <br>
                                        <input type="checkbox" value="Disiapkan" name="petunjuk[]"> Disiapkan <br>
                                        <input type="checkbox" value="Harap dihadiri/diwakili" name="petunjuk[]"> Harap dihadiri/diwakili <br>
                                    </div>
                                </div>
                                @error('petunjuk')
                                <div class="invalid-feedback">
                                    {{ $message; }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3 row">
                                <label for="catatan_rektor" class="col-sm-3 col-form-label">Catatan Rektor</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('catatan_rektor') is-invalid @enderror" value="{{ old('catatan_rektor') }}" name="catatan_rektor" placeholder="Catatan Rektor.." required>
                                </div>
                                @error('catatan_rektor')
                                <div class="invalid-feedback">
                                    {{ $message; }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3 row">
                                <label for="tgl_selesai" class="col-sm-3 col-form-label">Tanggal Selesai</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control @error('tgl_selesai') is-invalid @enderror" value="{{ old('tgl_selesai') }}" name="tgl_selesai" required>
                                </div>
                                @error('tgl_selesai')
                                <div class="invalid-feedback">
                                    {{ $message; }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3 row">
                                <label for="tgl_aju_kembali" class="col-sm-3 col-form-label">Tanggal Diajukan kembali</label>
                                <div class="col-sm-9">
                                    <input type="date" class="form-control @error('tgl_aju_kembali') is-invalid @enderror" value="{{ old('tgl_aju_kembali') }}" name="tgl_aju_kembali">
                                </div>
                                @error('tgl_aju_kembali')
                                <div class="invalid-feedback">
                                    {{ $message; }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3 row">
                                <label for="penerima_disposisi" class="col-sm-3 col-form-label">Penerima Disposisi</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('penerima_disposisi') is-invalid @enderror" value="{{ old('penerima_disposisi') }}" name="penerima_disposisi" placeholder="penerima disposisi.." required>
                                </div>
                                @error('penerima_disposisi')
                                <div class="invalid-feedback">
                                    {{ $message; }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3 row">
                                <label for="kepada" class="col-sm-3 col-form-label">Kepada</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control @error('kepada') is-invalid @enderror" value="{{ old('kepada') }}" name="kepada" placeholder="Kepada.." required>
                                </div>
                                @error('kepada')
                                <div class="invalid-feedback">
                                    {{ $message; }}
                                </div>
                                @enderror
                            </div>
                            <!-- selasa 9 agustus 2022 -->

                            <div class="mb-3 row">
                                <label for="letter_file" class="col-sm-3 col-form-label">Surat Yang Di Disposisi</label>
                                <div class="col-sm-9">
                                    <input type="file" class="form-control @error('letter_file') is-invalid @enderror" value="{{ old('letter_file') }}" name="letter_file" required>
                                    <div id="letter_file" class="form-text">Ekstensi .pdf</div>
                                </div>
                                @error('letter_file')
                                <div class="invalid-feedback">
                                    {{ $message; }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-3 row">
                                <label for="letter_file" class="col-sm-3 col-form-label"></label>
                                <div class="col-sm-9">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>
@endsection

@push('addon-style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.1.1/dist/select2-bootstrap-5-theme.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />
@endpush

@push('addon-script')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(".selectx").select2({
        theme: "bootstrap-5"
    });
</script>
@endpush