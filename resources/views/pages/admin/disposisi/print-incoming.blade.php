<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Print Disposisi</title>
</head>

<body>
    <table align="center" border="0" cellpadding="1" style="width: 700px;" class="table-bordered">
        <tbody>
            <tr>
                <td valign="top">
                    <div align="center">
                        <span style="font-size: x-small;"><img src="/admin/assets/img/iahn.jpeg" style="max-width: 7rem;" alt="Gambar iahn"></span>
                    </div>
                </td>
                <td colspan="2">
                    <table border="0" cellpadding="1" style="width: 500px;text-align: center;">
                        <tbody>
                            <tr>
                                <td width="100%"><span style="font-size: x-small;">
                                        <h6>KEMENTERIAN AGAMA REPUBLIK INDONESIA <br>INSTITUT AGAMA HINDU GDE PUDJA MATARAM</h6>
                                </td>
                            </tr>
                            <tr>
                                <td width="100%"><span style="font-size: x-small;">
                                        <center>
                                            <pre>Jalan Pancaka No. 7 B Mataram 83126 <br> Telepon (0370) 628382; Faksimili (0370) 631725,<br> www.iahn-gdepudja.ac.id, email : info@iahn-gdepudja.ac.id</pre>
                                        </center>
                                    </span></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div align="center">
                        <span style="font-family: Verdana; font-size: x-small;"><b>LEMBAR DISPOSISI</b></span>

                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <div align="center">
                        <span style="font-family: Verdana; font-size: x-small;"><b>PERHATIAN: Dilarang memisahkan sehelai surat pun yang digabung dalam berkas ini !</b></span>

                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <table border="0" cellpadding="1" style="width: 400px;">
                        <tbody>
                            <tr>
                                <td width="93"><span style="font-size: x-small;"> Nomor Surat </span></td>
                                <td width="8"><span style="font-size: x-small;">:</span></td>
                                <td width="200"><span style="font-size: x-small;"> {{ $item->letter->letter_no  }} </span></td>
                            </tr>
                            <tr>
                                <td width="93"><span style="font-size: x-small;"> Tanggal Surat </span></td>
                                <td width="8"><span style="font-size: x-small;">:</span></td>
                                <td width="200"><span style="font-size: x-small;">{{ Carbon\Carbon::parse($item->letter->letter_date)->translatedFormat('l, d F Y') }}</span></td>
                            </tr>
                            <tr>
                                <td><span style="font-size: x-small;"> Lampiran</span></td>
                                <td><span style="font-size: x-small;">:</span></td>
                                <td><span style="font-size: x-small;">{{ $item->lampiran }}</span></td>
                            </tr>
                            <tr>
                                <td><span style="font-size: x-small;"> Diterima Tanggal</span></td>
                                <td><span style="font-size: x-small;">:</span></td>
                                <td><span style="font-size: x-small;">{{ Carbon\Carbon::parse($item->letter->date_received)->translatedFormat('l, d F Y') }}</span></td>
                            </tr>
                            <tr>
                                <td width="93"><span style="font-size: x-small;"> No. Agenda </span></td>
                                <td width="8"><span style="font-size: x-small;">:</span></td>
                                <td width="200"><span style="font-size: x-small;"> {{ $item->letter->agenda_no  }} </span></td>
                            </tr>
                            <tr>
                                <td width="93"><span style="font-size: x-small;"> Pengirim </span></td>
                                <td width="8"><span style="font-size: x-small;">:</span></td>
                                <td width="200"><span style="font-size: x-small;"> {{ $item->letter->sender->name  }} </span></td>
                            </tr>
                            <tr>
                                <td width="93"><span style="font-size: x-small;"> Departemen</span></td>
                                <td width="8"><span style="font-size: x-small;">:</span></td>
                                <td width="200"><span style="font-size: x-small;"> {{ $item->letter->department->name  }} </span></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
                <td valign="top">
                    <table border="1">
                        <tr>
                            <td width="93"><span style="font-size: x-small;"> &nbsp; Status : </span></td>
                            <td width="301"><span style="font-size: x-small;"><input type="checkbox" value="Asli" name="status[]" {{ in_array('Asli', $status) ? 'checked' : '' }}>&emsp;Asli</span>&emsp;&emsp;
                                <span style="font-size: x-small;"><input type="checkbox" value="Tembusan" name="status[]" {{ in_array('Tembusan', $status) ? 'checked' : '' }}>&emsp;Tembusan</span>
                            </td>
                        </tr>
                    </table>
                    <table border="0">
                        <tbody>
                            <tr>
                                <td width="93" valign="top"><span style="font-size: x-small;">&nbsp; Sifat : </span></td>
                                <td width="200">
                                    <span style="font-size: x-small;"><input type="checkbox" value="Sangat Segera/kilat" name="sifat[]" {{ in_array('Sangat Segera/kilat', $sifat) ? 'checked' : '' }}>&emsp; Sangat Segera/Kilat</span><br>
                                    <span style="font-size: x-small;"><input type="checkbox" value="Segera" name="sifat[]" {{ in_array('Segera', $sifat) ? 'checked' : '' }}>&emsp; Segera</span><br>
                                    <span style="font-size: x-small;"><input type="checkbox" value="Biasa" name="sifat[]" {{ in_array('Biasa', $sifat) ? 'checked' : '' }}>&emsp; Biasa</span><br>
                                    <span style="font-size: x-small;"><input type="checkbox" value="Sangat Rahasia" name="sifat[]" {{ in_array('Sangat Rahasia', $sifat) ? 'checked' : '' }}>&emsp; Sangat Rahasia</span><br>
                                    <span style="font-size: x-small;"><input type="checkbox" value="Rahasia" name="sifat[]" {{ in_array('Rahasia', $sifat) ? 'checked' : '' }}>&emsp; Rahasia</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <table border="0" cellpadding="1" style="width: 400px;">
                        <tbody>
                            <tr valign="top">
                                <td width="93"><span style="font-size: x-small;"> Perihal </span></td>
                                <td width="8"><span style="font-size: x-small;">:</span></td>
                                <td width="200" style="height: 50px;"><span style="font-size: x-small;"> {{ $item->letter->regarding  }} </span></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2" valign="top">
                    <table border="0" cellpadding="1" style="width: 400px;">
                        <tbody>
                            <tr valign="top">
                                <td width="400"><span style="font-size: x-small;">&emsp;<U>Disposisi Rektor IAHN Gde Pudja Mataram kepada :</U> </span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table border="0" cellpadding="1" style="width: 400px;">
                        <tfoot>
                            <tr>
                                <div class="row" style="float: left;">
                                    <div class="col">
                                        <td width="150">
                                            <span style="font-size: x-small;">&emsp;<input type="checkbox" value="Wakil Rektor I" name="penerima_disposisi_2[]" {{ in_array('Wakil Rektor I', $disposisi) ? 'checked' : '' }}>&nbsp;Wakil Rektor I</span><br>
                                            <span style="font-size: x-small;">&emsp;<input type="checkbox" value="Kepala Biro" name="penerima_disposisi_2[]" {{ in_array('Kepala Biro', $disposisi) ? 'checked' : '' }}>&nbsp;Kepala Biro</span><br>
                                            <span style="font-size: x-small;">&emsp;<input type="checkbox" value="Kasubbag" name="penerima_disposisi_2[]" {{ in_array('Kasubbag', $disposisi) ? 'checked' : '' }}>&nbsp;Kasubbag TU</span><br>
                                            <span style="font-size: x-small;">&emsp;<input type="checkbox" value="Dekan Fakultas" name="penerima_disposisi_2[]" {{ in_array('Dekan Fakultas', $disposisi) ? 'checked' : '' }}>&nbsp;Dekan Fakultas</span><br>
                                            <span style="font-size: x-small;">&emsp;<input type="checkbox" value="Koordinator Prodi" name="penerima_disposisi_2[]" {{ in_array('Koordinator Prodi', $disposisi) ? 'checked' : '' }}>&nbsp;Koordinator Prodi</span><br>
                                            <span style="font-size: x-small;">&emsp;<input type="checkbox" value="Kepala Unit" name="penerima_disposisi_2[]" {{ in_array('Kepala Unit', $disposisi) ? 'checked' : '' }}>&nbsp;Kepala Unit</span><br>
                                            <span style="font-size: x-small;">&emsp;<input type="checkbox" value="-" name="penerima_disposisi_2[]" {{ in_array('-', $disposisi) ? 'checked' : '' }}>&nbsp;Lainnya</span><br>
                                        </td>
                                    </div>
                                    <div class="col">
                                        <td width="250" valign="top">
                                            <span style="font-size: x-small;"><input type="checkbox" value="Wakil Rektor II" name="penerima_disposisi_2[]" {{ in_array('Wakil Rektor II', $disposisi) ? 'checked' : '' }}>&nbsp;Wakil Rektor II</span><br>
                                            <span style="font-size: x-small;"><input type="checkbox" value="Kabag" name="penerima_disposisi_2[]" {{ in_array('Kabag', $disposisi) ? 'checked' : '' }}>&nbsp;Kabag</span><br>
                                            <span style="font-size: x-small;"><input type="checkbox" value="Direktur" name="penerima_disposisi_2[]" {{ in_array('Direktur', $disposisi) ? 'checked' : '' }}>&nbsp;Direktur</span><br>
                                            <span style="font-size: x-small;"><input type="checkbox" value="Ketua Jurusan" name="penerima_disposisi_2[]" {{ in_array('Ketua Jurusan', $disposisi) ? 'checked' : '' }}>&nbsp;Ketua Jurusan</span><br>
                                            <span style="font-size: x-small;"><input type="checkbox" value="Ketua Lembaga" name="penerima_disposisi_2[]" {{ in_array('Ketua Lembaga', $disposisi) ? 'checked' : '' }}>&nbsp;Ketua Lembaga</span><br>
                                            <span style="font-size: x-small;"><input type="checkbox" value="Kepala Lab" name="penerima_disposisi_2[]" {{ in_array('Kepala Lab', $disposisi) ? 'checked' : '' }}>&nbsp;Kepala Lab</span>
                                        </td>
                                    </div>
                                </div>
                            </tr>
                        </tfoot>
                    </table>
                </td>
                <td colspan="1" valign="top">
                    <table border="0" cellpadding="1" style="width: 200px;">
                        <tbody>
                            <tr valign="top">
                                <td width="400"><span style="font-size: x-small;">&emsp;<U>Petunjuk :</U> </span></td>
                            </tr>
                        </tbody>
                    </table>
                    <table border="0" cellpadding="1" style="width: 280px;">
                        <tfoot>
                            <tr>
                                <div class="row" style="float: left;">
                                    <div class="col">
                                        <td width="100">
                                            <span style="font-size: x-small;">&emsp;<input type="checkbox" value="Setuju" name="petunjuk[]" {{ in_array('Setuju', $petunjuk) ? 'checked' : '' }}>&nbsp;Setuju</span><br>
                                            <span style="font-size: x-small;">&emsp;<input type="checkbox" value="Tolak" name="petunjuk[]" {{ in_array('Tolak', $petunjuk) ? 'checked' : '' }}>&nbsp;Tolak</span><br>
                                            <span style="font-size: x-small;">&emsp;<input type="checkbox" value="Teliti & Pendapat" name="petunjuk[]" {{ in_array('Teliti & Pendapat', $petunjuk) ? 'checked' : '' }}>&nbsp;Teliti & Pendapat</span><br>
                                            <span style="font-size: x-small;">&emsp;<input type="checkbox" value="Untuk Diketahui" name="petunjuk[]" {{ in_array('Untuk Diketahui', $petunjuk) ? 'checked' : '' }}>&nbsp;Untuk Diketahui</span><br>
                                            <span style="font-size: x-small;">&emsp;<input type="checkbox" value="Selesaikan" name="petunjuk[]" {{ in_array('Selesaikan', $petunjuk) ? 'checked' : '' }}>&nbsp;Selesaikan</span><br>
                                            <span style="font-size: x-small;">&emsp;<input type="checkbox" value="Sesuai Catatan" name="petunjuk[]" {{ in_array('Sesuai Catatan', $petunjuk) ? 'checked' : '' }}>&nbsp;Sesuai catatan</span><br>
                                            <span style="font-size: x-small;">&emsp;<input type="checkbox" value="Untuk Perhatian" name="petunjuk[]" {{ in_array('Untuk Perhatian', $petunjuk) ? 'checked' : '' }}>&nbsp;Untuk Perhatian</span><br>
                                            <span style="font-size: x-small;">&emsp;<input type="checkbox" value="Edarkan" name="petunjuk[]" {{ in_array('Edarkan', $petunjuk) ? 'checked' : '' }}>&nbsp;Edarkan</span><br>
                                            <span style="font-size: x-small;">&emsp;<input type="checkbox" value="-" name="petunjuk[]" {{ in_array('-', $petunjuk) ? 'checked' : '' }}>&nbsp;-</span><br>
                                        </td>
                                    </div>
                                    <div class="col">
                                        <td width="100" valign="top">
                                            <span style="font-size: x-small;"><input type="checkbox" value="Jawab" name="petunjuk[]" {{ in_array('Jawab', $petunjuk) ? 'checked' : '' }}>&nbsp;Jawab</span><br>
                                            <span style="font-size: x-small;"><input type="checkbox" value="Perbaiki" name="petunjuk[]" {{ in_array('Perbaiki', $petunjuk) ? 'checked' : '' }}>&nbsp;Perbaiki</span><br>
                                            <span style="font-size: x-small;"><input type="checkbox" value="Bicarakan Dengan saya" name="petunjuk[]" {{ in_array('Bicarakan Dengan saya', $petunjuk) ? 'checked' : '' }}>&nbsp;Bicarakan dengan saya</span><br>
                                            <span style="font-size: x-small;"><input type="checkbox" value="Bicarakan Bersama" name="petunjuk[]" {{ in_array('Bicarakan Bersama', $petunjuk) ? 'checked' : '' }}>&nbsp;Bicarakan bersama</span><br>
                                            <span style="font-size: x-small;"><input type="checkbox" value="Ingatkan" name="petunjuk[]" {{ in_array('Ingatkan', $petunjuk) ? 'checked' : '' }}>&nbsp;Ingatkan</span><br>
                                            <span style="font-size: x-small;"><input type="checkbox" value="Simpan" name="petunjuk[]" {{ in_array('Simpan', $petunjuk) ? 'checked' : '' }}>&nbsp;Simpan</span><br>
                                            <span style="font-size: x-small;"><input type="checkbox" value="Disiapkan" name="petunjuk[]" {{ in_array('Disiapkan', $petunjuk) ? 'checked' : '' }}>&nbsp;Disiapkan</span><br>
                                            <span style="font-size: x-small;"><input type="checkbox" value="Harap dihadiri/diwakili" name="petunjuk[]" {{ in_array('Harap dihadiri/diwakili', $petunjuk) ? 'checked' : '' }}>&nbsp;Harap dihadiri/diwakili</span><br>
                                        </td>
                                    </div>
                                </div>
                            </tr>
                        </tfoot>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="3" style="height: 80px;" valign="top">
                    <table border="0" cellpadding="1" style="width: 400px;">
                        <tbody>
                            <tr valign="top">
                                <td width="93"><span style="font-size: x-small;"> <u> CATATAN REKTOR</u> </span></td>
                                <td width="8"><span style="font-size: x-small;">:</span></td>
                                <td width="200" style="height: 50px;"><span style="font-size: x-small;"> {{ $item->catatan_rektor  }} </span></td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div>
                        <span style="font-size: x-small;"> Tanggal Penyelesaian : {{ $item->tgl_selesai }}</span>
                    </div>
                </td>
                <td valign="top">
                    <div>
                        <span style="font-size: x-small;"> Diajukan kembali tanggal : {{ $item->tgl_aju_kembali }}</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div>
                        <span style="font-size: x-small;"> Penerima : <br>DISPOSISI : {{ $item->letter->disposisi }}</span>
                    </div>
                </td>
                <td valign="top">
                    <div>
                        <span style="font-size: x-small;"> Penerima : <br>DISPOSISI : {{ $item->penerima_disposisi_2 }}</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="height: 80px;" valign="top">
                    <div>
                        <span style="font-size: x-small;"> Kepada : {{ $item->kepada }} <br>Petunjuk : {{ $item->petunjuk }}</span>
                    </div>
                </td>
                <td valign="top">
                    <div>
                        <span style="font-size: x-small;"> Kepada : belum-ada <br>Petunjuk : belum ada</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div>
                        <span style="font-size: x-small;"> Tanggal Penyelesaian : {{ $item->tgl_selesai }}</span>
                    </div>
                </td>
                <td>
                    <div>
                        <span style="font-size: x-small;"> Diajukan kembali tanggal : {{ $item->tgl_aju_kembali }}</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <div>
                        <span style="font-size: x-small;"> Penerima : {{ $item->penerima_disposisi }}</span>
                    </div>
                </td>
                <td valign="top">
                    <div>
                        <span style="font-size: x-small;"> Penerima : {{ $item->penerima_disposisi }}</span>
                    </div>
                </td>
            </tr>
            <tr>
                <td width="425"></td>
                <td width="150"></td>
                <td width="409"></td>
            </tr>
        </tbody>
    </table>

    <script>
        window.print();
        window.onafterprint = window.close;
    </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>