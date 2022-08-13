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
                                <td width="200"><span style="font-size: x-small;">{{ date('d-m-Y', strtotime($item->letter->letter_date)) }}</span></td>
                            </tr>
                            <tr>
                                <td><span style="font-size: x-small;"> Lampiran</span></td>
                                <td><span style="font-size: x-small;">:</span></td>
                                <td><span style="font-size: x-small;">{{ $item->lampiran }}</span></td>
                            </tr>
                            <tr>
                                <td><span style="font-size: x-small;"> Diterima Tanggal</span></td>
                                <td><span style="font-size: x-small;">:</span></td>
                                <td><span style="font-size: x-small;">{{ date('d-m-Y', strtotime($item->letter->date_received)) }}</span></td>
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
                                <td width="200"><span style="font-size: x-small;"><input type="checkbox" value="">&emsp;Asli</span>&emsp;&emsp;
                                    <span style="font-size: x-small;"><input type="checkbox" value="">&emsp;Tembusan</span>
                                </td>
                            </tr>
                      
                    </table>
                    <table border="0">
                        <tbody>
                            <tr>
                            <tr>
                                <td width="93"><span style="font-size: x-small;">&nbsp; Sifat : </span></td>
                                <td width="200">
                                    <span style="font-size: x-small;"><input type="checkbox" value="">&emsp; Sangat Segera/Kilat</span><br>
                                    <span style="font-size: x-small;"><input type="checkbox" value="">&emsp; Segera</span><br>
                                    <span style="font-size: x-small;"><input type="checkbox" value="">&emsp; Biasa</span><br>
                                    <span style="font-size: x-small;"><input type="checkbox" value="">&emsp; Sangat Rahasia</span><br>
                                    <span style="font-size: x-small;"><input type="checkbox" value="">&emsp; Rahasia</span>
                                </td>
                            </tr>
            </tr>
        </tbody>
    </table>

    </td>
    </tr>
    <tr>
        <td colspan="3">
            <table border="0" cellpadding="1" style="width: 400px;">
                <tbody>
                    <tr>
                        <td width="93"><span style="font-size: x-small;"> Perihal </span></td>
                        <td width="8"><span style="font-size: x-small;">:</span></td>
                        <td width="200"><span style="font-size: x-small;"> {{ $item->perihal  }} </span></td>
                    </tr>
                </tbody>
            </table>
        </td>
    </tr>
    <tr>
        <td width="302"></td>
        <td width="343"></td>
        <td width="339"></td>
    </tr>
    <tr>
        <td>
            <table border="0" style="width: 239px;">
                <tbody>
                    <tr>
                        <td width="74"><span style="font-size: x-small;">kepada yth</span></td>
                        <td width="11">
                        </td>
                        <td width="140"></td>
                    </tr>
                    <tr>
                        <td><span style="font-size: x-small;">orangtua/wali siswa</span></td>
                        <td></td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td><span style="font-size: x-small;">di</span></td>
                        <td></td>
                        <td>
                        </td>
                    </tr>
                    <tr>
                        <td><span style="font-size: x-small;">tempat</span></td>
                        <td></td>
                        <td>
                        </td>
                    </tr>
                </tbody>
            </table>
        </td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="3" height="270" valign="top">
            <div align="justify">
                <pre><span style="font-size: x-small;">Dengan hormat,
Sehubungan akan diadakannya magang bumigota (PKL) siswa kelas maka kami selaku pihak sekolah akan membicarakan mengenai
pelaksanaan Magang yang akan dilaksanakan pada :</span></pre>
                <table border="0" style="width: 352px;">
                    <tbody>
                        <tr>
                            <td width="80"><span style="font-size: x-small;">hari/tanggal</span></td>
                            <td width="10"><span style="font-size: x-small;">:</span></td>
                            <td width="248"><span style="font-size: x-small;">Rabu, 13 Agustus 2022</span></td>
                        </tr>
                        <tr>
                            <td><span style="font-size: x-small;">waktu</span></td>
                            <td><span style="font-size: x-small;">:</span></td>
                            <td><span style="font-size: x-small;">08.00 - selesai</span></td>
                        </tr>
                        <tr>
                            <td><span style="font-size: x-small;">tempat</span></td>
                            <td><span style="font-size: x-small;">:</span></td>
                            <td><span style="font-size: x-small;">IAHN GDE PUDJA MATARAM </span></td>
                        </tr>
                    </tbody>
                </table>
                <div align="justify">
                    <span style="font-size: x-small;">

                        Demikian surat ini kami sampaikan, kami harap ibu/bapa dapat menghadiri rapat ini. sekian dan terima kasih.</span>
                </div>
            </div>
            <div align="center">
                <span style="font-size: x-small;">Mengetahui</span>
            </div>
        </td>
    </tr>
    <tr>
        <td>
            <div align="center">
                <span style="font-size: x-small;">Pembuat,</span>
            </div>
            <div align="center">

            </div>
            <div align="center">
                <span style="font-size: x-small;">I Made Hary Mahayana </span>
            </div>
        </td>
        <td></td>
        <td valign="top">
            <div align="center">
                <span style="font-size: x-small;">Test peneriima, </span>
            </div>
            <div align="center">

            </div>
            <div align="center">
                <span style="font-size: x-small;">Penerima dan lain lain.</span>
            </div>
        </td>
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