<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" type="text/css" href="/css/style4.css" />

    <title>Formulir 1770</title>

</head>

<body>
    <div class="container-fluid">
        <div class="row header">
            <div class="col-2 bag1">
                <h5>FORMULIR</h5>
                <h1>1770</h1>
                <p>KEMENTERIAN KEUANGAN
                    RI DIREKTORAT JENDERAL PAJAK</p>
            </div>
            <div class="col-6">
                <h5>LAMPIRAN 1770</h5>
                <p>SPT TAHUNAN PPh WAJIB PAJAK ORANG PRIBADI</p>
                <span>BAGI WAJIB PAJAK YANG MEMPUNYAI PENGHASILAN :<br></span>
                <span>* DARI USAHA/PEKERJAAN BEBAS<br></span>
                <span>* DARI SATU ATAU LEBIH PEMBERI KERJA <br></span>
                <span>* YANG DIKENAKAN PPh FINAL DAN/ATAU BERSIFAT FINAL; DAN/ATAU; <br></span>
                <span>* DALAM NEGERI LAINNYA ATAU LUAR NEGERI</span>
            </div>
            <div class="col-4">
                <a href="/formulir-I hal 2/{{ $spt->id}}" class="btn btn-secondary sebelumnya">Sebelumnya</a>
                <a href="/submit/{{ $spt->id}}" class="btn btn-secondary" id="SUBMIT">Submit</a>
                <a href="/PH-MT/{{ $spt->id}}" class="btn btn-secondary" id="PH-MT" style="display: none">PH-MT</a>

                <div class="row tahun-pelaporan">
                    <div class="col">
                        <table class="table table-bordered">
                            <tr class="tahun-pajak">
                                <th>{{ mb_substr($spt['tahun'], 0, 1); }}</th>
                                <th>{{ mb_substr($spt['tahun'], 1, 1); }}</th>
                                <th>{{ mb_substr($spt['tahun'], 2, 1); }}</th>
                                <th>{{ mb_substr($spt['tahun'], 3, 1); }}</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row bulan-pelaporan">
                    <div class="col-4">
                        <table class="table table-bordered">
                            <tr class="bulan-pajak">
                                <th>0</th>
                                <th>1</th>
                                <th>{{ mb_substr($spt['tahun'], 2, 1); }}</th>
                                <th>{{ mb_substr($spt['tahun'], 3, 1); }}</th>
                            </tr>
                        </table>
                    </div>
                    <div class="col-2 sd">
                        sd
                    </div>
                    <div class="col-4">
                        <table class="table table-bordered">
                            <tr class="bulan-pajak">
                                <th>0</th>
                                <th>1</th>
                                <th>{{ mb_substr($spt['tahun'], 2, 1); }}</th>
                                <th>{{ mb_substr($spt['tahun'], 3, 1); }}</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDisabled" value="pembukuan" id="flexRadioDisabled" <?= ($spt->jenis_pelaporan  == 'pembukuan') ? 'checked' : '' ?> disabled>
                    <label class="form-check-label" for="flexRadioDisabled">
                        Pembukuan
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioCheckedDisabled" value="pencatatan" <?= ($spt->jenis_pelaporan  == 'pencatatan') ? 'checked' : '' ?> disabled>
                    <label class="form-check-label" for="flexRadioCheckedDisabled">
                        Pencatatan
                    </label>
                </div>
                <div class="col-12 form-pembetulan">
                    <div class="input-group mb-6">
                        <input class="cek-pembetulan" type="checkbox" id="CekPembetulan" {{ $spt->cek_pembetulan ?'checked':'' }} name="check" aria-label="Checkbox for following text input">
                        <label class="col-9">SPT Pembetulan Ke</label>
                        <input class="cek-pembetulan" value="{{ $spt['pembetulan'] }}">
                    </div>
                </div>
            </div>

        </div>

        @if(count($kolom_identitas) == 0)
        <!-- <form action="/SaveKolomIdentitas/{{$form1770}}" method="POST"> -->
        @csrf
        <input type="hidden" name="counted" value="{{count($kolom_identitas)   }}">
        <b>PERHATIAN *SEBELUM MENGISI BACALAH PETUNJUK PENGISIAN *ISI DENGAN HURUF CETAK/DIKETIK
            DENGAN TINTA HITAM *BERI TANDA X DALAM KOTAK SESUAI PILIHAN</b>
        <!-- <div class="item2"> -->
        <div class="col-11.5 kolomidentitas">
            <div class="row">
                <label class="col-4">NPWP</label>
                <div class="col-8">
                    <input class="form-control" type="text" id="npwp_wajibpajak" value="{{ $npwp }}">
                </div>
            </div>
            <div class="row">
                <label class="col-4">NAMA WAJIB PAJAK</label>
                <div class="col-8">
                    <input class="form-control" type="text" id="nama_wajibpajak" value="{{ $nama }}">
                </div>
            </div>
            <div class="row">
                <label class="col-4">JENIS USAHA/PEKERJAAN BEBAS</label>
                <div class="col-5">
                    <input class="form-control" type="text" id="jenis_usaha">
                </div>
                <label class="col-1 ">KLU</label>
                <div class="col-2">
                    <input class="form-control" type="text" id="klu">
                </div>
            </div>
            <div class="row">
                <label class="col-4 ">NO.TELEPON/FAKSIMILI</label>
                <div class="col-5">
                    <input class="form-control" type="text" id="no_telepon">
                </div>

                <label class="col-1 ">FAX</label>
                <div class="col-2">
                    <input class="form-control" type="text" id="fax">
                </div>
            </div>
            <div class="row">
                <label class="col-4 ">STATUS KEWAJIBAN PERPAJAKAN SUAMI-ISTERI </label>
                <div class="col-sm-4" style="border: 1px solid black; height: 30px; background-color:#fff; margin-left:12px">
                    <div class="form-check formulir1770" style="display:inline-block">
                        <input style="display:inline;" id="SUBMIT1" class="form-check-input" type="radio" name="status" value="kk" id="flexRadioDisabled" onclick="KepalaKeluarga()">
                        <label class="form-check-label" for="flexRadioDisabled" style="font-size: 14px;">
                            KK
                        </label>
                    </div>
                    <div class="form-check formulir1770" style="display:inline-block">
                        <input class="form-check-input" id="SUBMIT2" type="radio" name="status" id="flexRadioCheckedDisabled" value="hb" onclick="KepalaKeluarga()">
                        <label class="form-check-label" for="flexRadioCheckedDisabled" style="font-size: 14px;">
                            HB
                        </label>
                    </div>
                    <div class="form-check formulir1770" style="display:inline-block">
                        <input class="form-check-input" id="PH" type="radio" name="status" id="flexRadioCheckedDisabled" value="ph" onclick="PisahHarta()">
                        <label class="form-check-label" for="flexRadioCheckedDisabled" style="font-size: 14px;">
                            PH
                        </label>
                    </div>
                    <div class="form-check formulir1770" style="display:inline-block">
                        <input class="form-check-input" id="PH1" type="radio" name="status" id="flexRadioCheckedDisabled" value="mt" onclick="PisahHarta()">
                        <label class="form-check-label" for="flexRadioCheckedDisabled" style="font-size: 14px;">
                            MT
                        </label>
                    </div>
                </div>
            </div>
            <script>
                function PisahHarta(src) {
                    const myElement = document.getElementById("npwp_suamiisteriAktif");
                    myElement.style.display = "none";

                    document.getElementById("npwp_suamiisteri").style.display = "block";
                }

                function KepalaKeluarga(src) {
                    const myElement = document.getElementById("npwp_suamiisteri");
                    myElement.style.display = "none";

                    document.getElementById("npwp_suamiisteriAktif").style.display = "block";
                }
            </script>
            <div class="row">
                <label class="col-4 ">NPWP SUAMI/ISTERI</label>
                <div class="col-8">
                    <input class="form-control" type="text" disabled="disabled" id="npwp_suamiisteriAktif">
                    <input class="form-control" type="text" style="display: none;" id="npwp_suamiisteri" value="{{ $kolom_identitas[0]['npwp_suamiisteri'] ?? '' }}">
                </div>
            </div>

            <label class="keterangan">Permohonan perubahan data dapat disampaikan terpisah dari pelaporan SPT Tahunan Orang Pribadi ini, dengan menggunakan
                Formulir Perubahan Data Wajib Pajak dan dilengkapi dokumen yang diisyaratkan
            </label>

            <button onclick="SaveKolomIdentitas()">Simpan</button>
            <button type="button" onclick="DeleteKolomIdentitas()">Hapus</button>
        </div>
        <!-- </div> -->
        <div style="padding: 10px"></div>
        <!-- </form> -->

        @endif
        @if(count($kolom_identitas) == 1)
        <!-- <form action="/SaveKolomIdentitas/{{$form1770}}" method="POST"> -->
        @csrf
        <input type="hidden" name="counted" value="{{count($kolom_identitas)   }}">
        <b>PERHATIAN *SEBELUM MENGISI BACALAH PETUNJUK PENGISIAN *ISI DENGAN HURU CETAK/DIKETIK
            DENGAN TINTA HITAM *BERI TANDA X DALAM KOTAK SESUAI PILIHAN</b>

        <div class="col-sm-11.5 kolomidentitas">
            <div class="row">
                <label class="col-4">NPWP</label>
                <div class="col-8">
                    <input class="form-control" type="text" maxlength="20" oninput="npwpWajibPajak(this)" id="npwp_wajibpajak" value="{{ $kolom_identitas[0]['npwp_wajibpajak'] ?? '' }}">
                </div>
            </div>
            <div class="row">
                <label class="col-4">NAMA WAJIB PAJAK</label>
                <div class="col-8">
                    <input class="form-control" type="text" style="text-transform:uppercase" id="nama_wajibpajak" value="{{ $kolom_identitas[0]['nama_wajibpajak'] ?? '' }}">
                </div>
            </div>
            <div class="row">
                <label class="col-4">JENIS USAHA/PEKERJAAN BEBAS</label>
                <div class="col-5">
                    <input class="form-control" type="text" style="text-transform:uppercase" id="jenis_usaha" value="{{ $kolom_identitas[0]['jenis_usaha'] ?? '' }}">
                </div>
                <label class="col-1">KLU</label>
                <div class="col-2">
                    <input class="form-control" type="text" id="klu" value="{{ $kolom_identitas[0]['klu'] ?? '' }}">
                </div>
            </div>
            <div class="row">
                <label class="col-4">NO.TELEPON/FAKSIMILI</label>
                <div class="col-5">
                    <input class="form-control" type="text" id="no_telepon" value="{{ $kolom_identitas[0]['no_telepon'] ?? '' }}">
                </div>

                <label class="col-1">FAX</label>
                <div class="col-2">
                    <input class="form-control" type="text" id="fax" value="{{ $kolom_identitas[0]['fax'] ?? '' }}">
                </div>
            </div>
            <div class="row">
                <label class="col-4">STATUS KEWAJIBAN PERPAJAKAN SUAMI-ISTERI </label>
                <div class="col-sm-4" style="border: 1px solid black; height: 30px; background-color:#fff; margin-left:12px">
                    <div class="form-check formulir1770" style="display:inline-block">
                        <input style="display:inline;" id="SUBMIT1" class="form-check-input" type="radio" name="status" id="flexRadioDisabled" value="kk" <?= ($kolom_identitas[0]->status_perpajakan  == 'kk') ? 'checked' : '' ?> onclick="KepalaKeluarga()">
                        <label class="form-check-label" for="flexRadioDisabled" style="font-size: 14px;">
                            KK
                        </label>
                    </div>
                    <div class="form-check formulir1770" style="display:inline-block">
                        <input class="form-check-input" id="SUBMIT2" type="radio" name="status" id="flexRadioCheckedDisabled" value="hb" <?= ($kolom_identitas[0]->status_perpajakan  == 'hb') ? 'checked' : '' ?> onclick="KepalaKeluarga()">
                        <label class="form-check-label" for="flexRadioCheckedDisabled" style="font-size: 14px;">
                            HB
                        </label>
                    </div>
                    <div class="form-check formulir1770" style="display:inline-block">
                        <input class="form-check-input" id="PH" type="radio" name="status" id="flexRadioCheckedDisabled" value="ph" <?= ($kolom_identitas[0]->status_perpajakan  == 'ph') ? 'checked' : '' ?> onclick="PisahHarta()">
                        <label class="form-check-label" for="flexRadioCheckedDisabled" style="font-size: 14px;">
                            PH
                        </label>
                    </div>
                    <div class="form-check formulir1770" style="display:inline-block">
                        <input class="form-check-input" id="PH1" type="radio" name="status" id="flexRadioCheckedDisabled" value="mt" <?= ($kolom_identitas[0]->status_perpajakan  == 'mt') ? 'checked' : '' ?> onclick="PisahHarta()">
                        <label class="form-check-label" for="flexRadioCheckedDisabled" style="font-size: 14px;">
                            MT
                        </label>
                    </div>
                </div>
            </div>
            <script>
                function PisahHarta(src) {
                    const myElement = document.getElementById("npwp_suamiisteriAktif");
                    myElement.style.display = "none";

                    document.getElementById("npwp_suamiisteri").style.display = "block";
                }

                function KepalaKeluarga(src) {
                    const myElement = document.getElementById("npwp_suamiisteri");
                    myElement.style.display = "none";

                    document.getElementById("npwp_suamiisteriAktif").style.display = "block";
                }
            </script>
            <div class="row">
                <label class="col-4 ">NPWP SUAMI/ISTERI</label>
                <div class="col-8">
                    <?php $status_perpajakan = ($kolom_identitas[0]['status_perpajakan'] == 'kk' || $kolom_identitas[0]['status_perpajakan'] == 'hb'); ?>
                    <input class="form-control" type="text" disabled="disabled" style="display: <?= $status_perpajakan ? 'block' : 'none' ?>" id="npwp_suamiisteriAktif">
                    <input class="form-control" type="text" style="display: <?= $status_perpajakan ? 'none' : 'block' ?>" id="npwp_suamiisteri" value="{{ $kolom_identitas[0]['npwp_suamiisteri'] ?? '' }}">
                </div>
            </div>

            <label class="keterangan">Permohonan perubahan data dapat disampaikan terpisah dari pelaporan SPT Tahunan Orang Pribadi ini, dengan menggunakan
                Formulir Perubahan Data Wajib Pajak dan dilengkapi dokumen yang diisyaratkan
            </label>

            <button onclick="SaveKolomIdentitas()">Simpan</button>
            <button type="button" onclick="DeleteKolomIdentitas()">Hapus</button>
        </div>

        <!-- </form> -->

        @endif

        <!-- Table -->
        <table class="table1">
            <tr>
                <th class="th1">*Pengisian kolom-kolom yang berisi nilai rupiah harus tanpa nilai desimal (contoh penulisan lihat petunjuk pengisian halaman 3)</th>
                <th class="th2">Rupiah</th>
            </tr>
        </table>
        <!-- Table A -->
        <table class="table1">
            <tr>
                <td class="td1">A</td>
                <td class="td2">1. <span style="margin-left: 5px">PENGHASILAN NETO DALAM NEGERI DARI USAHA DAN/ATAU PEKERJAAN BEBAS</span> </br>
                    <u>[Diisi dari Formulir 1770-I Halaman 1 Jumlah Bagian A atau Formulir 1770-I Halaman 2 Jumlah Bagaian B Kolom 5]</u>
                </td>
                <td class="td3">1</td>
                <td class="td4"><input type="text" style="width: 100%; border: 0px solid black; background-color: #F0E68C; text-align:right" id="penghasilanneto1" value="{{ $kolom5 }}" oninput="formulir1770()" disabled></td>
            </tr>
            <tr>
                <td class="td1">PENGHASILAN</br>NETO</td>
                <td class="td2">2. <span style="margin-left: 5px"> PENGHASILAN NETO DALAM NEGERI SEHUBUNGAN DENGAN PEKERJAAN</span></br>
                    <u>[Diisi dri Formulir 1770-I Halaman 2 Jumlah Bagian C Kolom 5]</u>
                </td>
                <td class="td3">2</td>
                <td class="td4"><input type="text" style="width: 100%; border: 0px solid black; background-color: #F0E68C; text-align:right" placeholder="0" id="penghasilanneto2" value="{{ $formulir_i2c }}" oninput="formulir1770()" disabled></td>
            </tr>
            <tr>
                <td class="td1"></td>
                <td class="td2">3. <span style="margin-left: 5px">PENGHASILAN NETO DALAM NEGERI LAINNYA</span> </br>
                    <u>[Diisi dri Formulir 1770-I Halaman 2 Jumlah Bagian D Kolom 3]</u>
                </td>
                <td class="td3">3</td>
                <td class="td4"><input type="text" style="width: 100%; border: 0px solid black; background-color: #F0E68C; text-align: right" placeholder="0" id="penghasilanneto3" value="{{ $formulir_i2d }}" oninput="formulir1770()" disabled></td>
            </tr>
            <tr>
                <td class="td1"></td>
                <td class="td2">4. <span style="margin-left: 5px">PENGHASILAN NETO LUAR NEGERI</span> </br>
                    <u>[Apabila memiliki penghasilan dari luar negeri agar diisi dari Lampiran Tersendiri, lihat petunjuk pengisian]</u>
                </td>
                <td class="td3">4</td>
                <td class="td5"><input type="text" style="width: 100%; border: 0px solid black; text-align:right" placeholder="0" id="penghasilanneto4" value="{{ $formulir_1770[3]->rupiah_daftar_poin ?? '' }}" oninput="formulir1770()"></td>
            </tr>
            <tr>
                <td class="td1"></td>
                <td class="td2">5. <span style="margin-left: 5px">JUMLAH PENGHASILAN NETO (1+2+3+4)</span></br></br></td>
                <td class="td3">5</td>
                <td class="td4"><input type="text" style="width: 100%; border: 0px solid black; background-color: #F0E68C; text-align:right" id="penghasilanneto5" value="{{ $formulir_1770[4]->rupiah_daftar_poin ?? '' }}" oninput="formulir1770()" disabled></td>
            </tr>
            <tr>
                <td class="td1"></td>
                <td class="td2">6. <span style="margin-left: 5px">ZAKAT / SUMBANGAN KEAGAMAAN YANG BERSIFAT WAJIB</span></br></br></td>
                <td class="td3">6</td>
                <td class="td5"><input type="text" style="width: 100%; border: 0px solid black; text-align:right" placeholder="0" id="penghasilanneto6" value="{{ $formulir_1770[5]->rupiah_daftar_poin ?? '' }}" oninput="formulir1770()"></td>
            </tr>
            <tr>
                <td class="td6"></td>
                <td class="td7">7. <span style="margin-left: 5px">JUMLAH PENGHASILAN NETO SETELAH PENGURANGAN ZAKAT/SUMBANGAN</span></br> <span style="margin-left: 20px">KEAGAMAAN YANG SIFATNYA WAJIB (5-6)</span></td>
                <td class="td3">7</td>
                <td class="td4"><input type="text" style="width: 100%; border: 0px solid black; background-color: #F0E68C; text-align:right; <?php if (strpos($formulir_1770[6]->rupiah_daftar_poin ?? '', '-') !== false) { ?>font-weight:bold <?php } ?>" placeholder="0" id="penghasilanneto7" value="{{ $formulir_1770[6]->rupiah_daftar_poin ?? '' }}" oninput="formulir1770()" disabled></td>
            </tr>
            <tr>
                <td class="td1">B</td>
                <td class="td2">8. <span style="margin-left: 5px">KOMPENSASI KERUGIAN</span></br></br></td>
                <td class="td3">8</td>
                <td class="td5"><input type="text" style="width: 100%; border: 0px solid black; text-align:right" placeholder="0" id="penghasilankenapajak8" value="{{ $formulir_1770[7]->rupiah_daftar_poin ?? '' }}" oninput="formulir1770()"></td>
            </tr>
            <tr>
                <td class="td1">PENGHASILAN</br>KENA PAJAK</td>
                <td class="td2">9. <span style="margin-left: 5px">JUMLAH PENGHASILAN NETO SETELAH KOMPENSASI KERUGIAN (7-8)</span></br></br></td>
                <td class="td3">9</td>
                <td class="td4"><input type="text" style="width: 100%; border: 0px solid black; background-color: #F0E68C; text-align:right; <?php if (strpos($formulir_1770[8]->rupiah_daftar_poin ?? '', '-') !== false) { ?>font-weight:bold <?php } ?>" placeholder="0" id="penghasilankenapajak9" value="{{ $formulir_1770[8]->rupiah_daftar_poin ?? '' }}" oninput="formulir1770()"></td>
            </tr>
            <tr>
                <td class="td1"></td>
                <td class="td2">10. <span style="margin-left: 5px">PENGHASILAN TIDAK KENA PAJAK &emsp; &emsp; &emsp;</span>
                    <div class="form-check formulir1770" style="display:inline-block">
                        <input style="display:inline;" class="form-check-input" type="radio" name="ptkp" value="TK" id="TK" <?= (explode('/', $form1770s->jenis_PTKP)[0]  == 'TK') ? 'checked' : '' ?>>
                        <label class="form-check-label" for="flexRadioDisabled" style="font-size: 12px;">
                            TK
                        </label>
                    </div>
                    <div class="form-check formulir1770" style="display:inline-block">
                        <input class="form-check-input" type="radio" name="ptkp" value="K" id="K" <?= (explode('/', $form1770s->jenis_PTKP)[0]  == 'K') ? 'checked' : '' ?>>
                        <label class="form-check-label" for="flexRadioCheckedDisabled" style="font-size: 12px;">
                            K
                        </label>
                    </div>
                    <div class="form-check formulir1770" style="display:inline-block">
                        <input class="form-check-input" type="radio" name="ptkp" value="KI" id="KI" <?= (explode('/', $form1770s->jenis_PTKP)[0]  == 'KI') ? 'checked' : '' ?>>
                        <label class="form-check-label" for="flexRadioCheckedDisabled" style="font-size: 12px;">
                            K/I
                        </label>
                    </div>
                    <select class="col-sm-1" style="height: 20px; width: 50px; border: 1px solid black" oninput="formulir1770()" id="pilihanPTKP">
                        <option data-value="0">Pilih</option>
                        <option value="TK/0" data-value="54000000" <?= ($form1770s->jenis_PTKP  == 'TK/0') ? 'selected="selected"' : '' ?>>TK/0</option>
                        <option value="TK/1" data-value="58500000" <?= ($form1770s->jenis_PTKP  == 'TK/1') ? 'selected="selected"' : '' ?>>TK/1</option>
                        <option value="TK/2" data-value="63000000" <?= ($form1770s->jenis_PTKP  == 'TK/2') ? 'selected="selected"' : '' ?>>TK/2</option>
                        <option value="TK/3" data-value="67500000" <?= ($form1770s->jenis_PTKP  == 'TK/3') ? 'selected="selected"' : '' ?>>TK/3</option>
                        <option value="K/0" data-value="58500000" <?= ($form1770s->jenis_PTKP  == 'K/0') ? 'selected="selected"' : '' ?>>K/0</option>
                        <option value="K/1" data-value="63000000" <?= ($form1770s->jenis_PTKP  == 'K/1') ? 'selected="selected"' : '' ?>>K/1</option>
                        <option value="K/2" data-value="67500000" <?= ($form1770s->jenis_PTKP  == 'K/2') ? 'selected="selected"' : '' ?>>K/2</option>
                        <option value="K/3" data-value="72000000" <?= ($form1770s->jenis_PTKP  == 'K/3') ? 'selected="selected"' : '' ?>>K/3</option>
                        <option value="KI/0" data-value="112500000" <?= ($form1770s->jenis_PTKP  == 'KI/0') ? 'selected="selected"' : '' ?>>K/I/0</option>
                        <option value="KI/1" data-value="117000000" <?= ($form1770s->jenis_PTKP  == 'KI/1') ? 'selected="selected"' : '' ?>>K/I/1</option>
                        <option value="KI/2" data-value="121500000" <?= ($form1770s->jenis_PTKP  == 'KI/2') ? 'selected="selected"' : '' ?>>K/I/2</option>
                        <option value="KI/3" data-value="126000000" <?= ($form1770s->jenis_PTKP  == 'KI/3') ? 'selected="selected"' : '' ?>>K/I/3</option>
                    </select>
                </td>
                <td class="td3">10</td>
                <td class="td4"><input type="text" style="width: 100%; border: 0px solid black; background-color: #F0E68C; text-align:right" placeholder="0" oninput="formulir1770()" id="inputPTKP" value="{{ $formulir_1770[9]->rupiah_daftar_poin ?? '' }}"></td>
            </tr>
            <tr>
                <td class="td8"></td>
                <td class="td9">11. <span style="margin-left: 5px">PENGHASILAN KENA PAJAK (9-10) &emsp; &emsp; &emsp;</span>
                </td>

                <td class="td3">11</td>
                <td class="td4"><input type="text" style="width: 100%; border: 0px solid black; background-color: #F0E68C; text-align:right; <?php if (strpos($formulir_1770[10]->rupiah_daftar_poin ?? '', '-') !== false) { ?>font-weight:bold <?php } ?>" placeholder="0" id="penghasilankenapajak11" value="{{ $formulir_1770[10]->rupiah_daftar_poin ?? '' }}" oninput="formulir1770()"></td>
            </tr>
            <tr>
                <td class="td1">C</td>
                <td class="td2">12. <span style="margin-left: 5px">PPh TERUTANG (TARIF PASAL 17 UU PPh X ANGKA 11) &emsp; &emsp; &emsp; </span>
                    <input type="checkbox" aria-label="Checkbox for following text input" style="margin-left: -15px;" name="check" {{ $form1770s->perhitungan_sendiri ?'checked':'' }} id="PerhitunganSendiri" onclick="formulir1770(this)">
                    <label for="exampleFormControlInput1" class="form-label">Menggunakan Perhitungan Sendiri</label>
                </td>
                <td class="td3">12</td>
                <td class="td4"><input type="text" style="width: 100%; border: 0px solid black; background-color: #F0E68C; text-align:right" placeholder="0" id="pphterutang12" value="{{ $formulir_1770[11]->rupiah_daftar_poin ?? '' }}" oninput="formulir1770()"></td>
            </tr>
            <script>
                function jumlah2() {
                    valueinputperhitungan = numeral(InputPerhitungan.value);
                    document.getElementById('InputPerhitungan').value = valueinputperhitungan.format();

                    valuePengembalian = numeral(pengembalian.value);
                    document.getElementById('pengembalian').value = valuePengembalian.format();

                    var resultnetoLain6 = ((valueinputperhitungan.value()) + (valuePengembalian.value()))
                    document.getElementById('pengembalian1').value = resultnetoLain6;
                }
            </script>
            <tr>
                <td class="td1">PPh</br>TERUTANG</td>
                <td class="td2">13. <span style="margin-left: 5px">PENGEMBALIAN/PENGURANGAN PPh PASAL 24 YANG TELAH DIKREDITKAN</br></span> </td>
                <td class="td3">13</td>
                <td class="td5"><input type="text" style="width: 100%; border: 0px solid black; text-align:right" placeholder="0" oninput="formulir1770()" id="pphterutang13" value="{{ $formulir_1770[12]->rupiah_daftar_poin ?? '' }}"></td>
            </tr>
            <tr>
                <td class="td6"></td>
                <td style="border: 1px solid black; border-top: 0px; width: 55%; ; font-size: 12px">14. <span style="margin-left: 5px">JUMLAH PPh TERUTANG (12 + 13)</br></span> </td>
                <td class="td3">14</td>
                <td class="td4"><input type="text" style="width: 100%; border: 0px solid black;background-color: #F0E68C; text-align:right" placeholder="0" oninput="formulir1770()" id="pphterutang14" value="{{ $formulir_1770[13]->rupiah_daftar_poin ?? '' }}"></td>
            </tr>
            <tr>
                <td class="td1">D</td>
                <td class="td2">15. <span style="margin-left: 5px">PPh YANG DIPOTONG/DIPUNGUT OLEH PIHAK LAIN, PPh YANG DIBAYAR/DIPOTONG DI LUAR</br></span>
                    <span style="margin-left: 25px;">NEGERI DAN PPh DITANGGUNG PEMERINTAH [Diisi dari formulir 1770-II Jumlah Bagian A Kolom 7]</span>
                </td>
                <td class="td3">15</td>
                <td class="td4"><input type="text" style="width: 100%; border: 0px solid black; background-color: #F0E68C; text-align:right" placeholder="0" oninput="formulir1770()" id="kreditpajak15" value="{{ $totalpotongpungut }}" id="kreditpajak15" disabled></td>
            </tr>
            <tr>
                <td class="td1">KREDIT</br>PAJAK</td>
                <td class="td2">16.
                    <div class="form-check formulir1770" style="display:inline-block; border-bottom: 1px solid black">
                        <input style="display:inline;" class="form-check-input" type="radio" name="Nomor16" id="pphBayarSendiri" value="bayarsendiri" <?= ($form1770s->jenis_KreditPajak  == 'bayarsendiri') ? 'checked' : '' ?> onclick="formulir1770()">
                        <label class="form-check-label" for="flexRadioDisabled" style="font-size: 11px;">
                            a. PPh YANG HARUS DIBAYAR SENDIRI
                        </label>
                    </div>
                    <br>
                    <div class="form-check formulir1770" style="display:inline-block; margin-left: 20px">
                        <input style="display:inline;" class="form-check-input" type="radio" name="Nomor16" id="pphPotongPungut" value="potongpungut" <?= ($form1770s->jenis_KreditPajak  == 'potongpungut') ? 'checked' : '' ?> onclick="formulir1770()">
                        <label class="form-check-label" for="flexRadioDisabled" style="font-size: 11px;">
                            b. PPh YANG LEBIH DIPOTONG/DIPUNGUT
                        </label>
                    </div>(14-15)
                </td>
                <td class="td3">16</td>
                <td class="td4"><input type="text" style="width: 100%; border: 0px solid black; background-color: #F0E68C; text-align:right; <?php if (strpos($formulir_1770[15]->rupiah_daftar_poin ?? '', '-') !== false) { ?>font-weight:bold <?php } ?>" placeholder="0" oninput="formulir1770()" id="kreditpajak16" value="{{ $formulir_1770[15]->rupiah_daftar_poin ?? '' }}"> </td>
            </tr>
            <tr>
                <td class="td1"></td>
                <td class="td2">17. <span style="margin-left: 5px">PPh YANG DIBAYAR SENDIRI &emsp; a. PPh PASAL 25 BULANAN</br></span></td>
                <td class="td3">17a</td>
                <td class="td5"><input type="text" style="width: 100%; border: 0px solid black; text-align:right" placeholder="0" oninput="formulir1770()" id="kreditpajak17a" value="{{ $formulir_1770[16]->rupiah_daftar_poin ?? '' }}"></td>
            </tr>
            <tr>
                <td class="td1"></td>
                <td class="td2"><span style="margin-left: 210px">b. STP PPh PASAL 25 (HANYA POKOK PAJAK)</br></span></td>
                <td class="td3">17b</td>
                <td class="td5"><input type="text" style="width: 100%; border: 0px solid black; text-align:right" placeholder="0" oninput="formulir1770()" id="kreditpajak17b" value="{{ $formulir_1770[17]->rupiah_daftar_poin ?? '' }}"></td>
            </tr>

            <tr>
                <td class="td6"></td>
                <td class="td7">18. <span style="margin-left: 5px">JUMLAH KREDIT PAJAK (17a + 17b)</br></span></td>
                <td class="td3">18</td>
                <td style="border: 1px solid black; border-top: 0px; width: 17%; background-color: #F0E68C "><input type="text" style="width: 100%; border: 0px solid black; background-color: #F0E68C; text-align:right" placeholder="0" oninput="formulir1770()" id="kreditpajak18" value="{{ $formulir_1770[18]->rupiah_daftar_poin ?? '' }}"></td>
            </tr>
        </table>
        <!-- Table B -->
        <table class="table1">
            <tr>
                <td class="td10">E</td>
                <td class="td11">19.
                    <div class="form-check formulir1770" style="display:inline-block; border-bottom: 1px solid black">
                        <input style="display:inline;" class="form-check-input" type="radio" name="Nomor19" id="KurangBayar" value="kurangbayar" <?= ($form1770s->jenis_PPhKurang_LebihBayar  == 'kurangbayar') ? 'checked' : '' ?> disabled>
                        <label class="form-check-label" for="flexRadioDisabled" style="font-size: 11px;">
                            a. PPh YANG KURANG DIBAYAR (PPh PASAL 29)
                        </label>
                    </div>
                    <br>
                    <div class="form-check formulir1770" style="display:inline-block; margin-left: 20px">
                        <input style="display:inline;" class="form-check-input" type="radio" name="Nomor19" id="LebihBayar" value="lebihbayar" <?= ($form1770s->jenis_PPhKurang_LebihBayar  == 'lebihbayar') ? 'checked' : '' ?> disabled>
                        <label class="form-check-label" for="flexRadioDisabled" style="font-size: 11px;">
                            b. PPh YANG LEBIH DIBAYAR (PPh PASAL 28 A)
                        </label>
                    </div>(16-18)
                </td>
                <td class="td6">Tgl Lunas</td>
                <td class="td12"><input type="date" style="width: 100%; border: 0px; font-size: 12px" id="tanggal_lunas" value="<?= $form1770s['tanggal_lunas'] ?? "" ?>"></td>
                <td class="td3">19</td>
                <td class="td4"><input type="text" style="width: 100%; border: 0px solid black; background-color: #F0E68C; text-align:right; <?php if (strpos($formulir_1770[19]->rupiah_daftar_poin ?? '', '-') !== false) { ?>font-weight:bold <?php } ?>" placeholder="0" oninput="formulir1770()" id="KurangLebihBayar19" value="{{ $formulir_1770[19]->rupiah_daftar_poin ?? '' }}"></td>
            </tr>
            <tr>
                <td class="td6">PPh KURANG/</br>LEBIH BAYAR</td>
                <td class="td13">20. <span style="margin-left: 5px">PERMOHONAN : PPh Lebih Bayar Pada 19.b mohon</br></span>
                </td>
                <td style="width: 6%; border-bottom: 1px solid black"></td>
                <td style="width: 14%; border-bottom: 1px solid black">
                    <span class="radio20">
                        <input type="radio" id="pembetulan2" aria-label="Checkbox for following text input" name="Nomor20" value="direstitusikan" <?= ($form1770s->permohonan_PPhLebihBayar  == 'direstitusikan') ? 'checked' : '' ?>>
                        <label for="exampleFormControlInput1" class="form-label" style="font-size: 9px;">a. DIRESTITUSIKAN</label></br>
                        <input type="radio" id="pembetulan2" aria-label="Checkbox for following text input" name="Nomor20" value="diperhitungkan" <?= ($form1770s->permohonan_PPhLebihBayar  == 'diperhitungkan') ? 'checked' : '' ?>>
                        <label for="exampleFormControlInput1" class="form-label" style="font-size: 9px;">b. DIPERHITUNGKAN</br> DENGAN UTANG PAJAK</label>
                    </span>
                </td>
                <td style="width: 3%; border-bottom: 1px solid black"></td>
                <td style="width: 18%; border-bottom: 1px solid black; border-right: 1px solid black">
                    <span class="radio20">
                        <input type="radio" id="pembetulan2" aria-label="Checkbox for following text input" name="Nomor20" value="skppkp17c" <?= ($form1770s->permohonan_PPhLebihBayar  == 'skppkp17c') ? 'checked' : '' ?>>
                        <label for="exampleFormControlInput1" class="form-label" style="font-size: 9px;">c. DIKEMBALIKAN DENGAN SKPPKP 17C</br>
                            (WP dengan Kriteria Tertentu)</label></br>
                        <input type="radio" id="pembetulan2" aria-label="Checkbox for following text input" name="Nomor20" value="skppkp17d" <?= ($form1770s->permohonan_PPhLebihBayar  == 'skppkp17d') ? 'checked' : '' ?>>
                        <label for="exampleFormControlInput1" class="form-label" style="font-size: 9px;">d. DIKEMBALIKAN DENGAN SKPPKP 17D</br>
                            (WP yang Memenuhi Persyaratan Tertentu )</label>
                    </span>
                </td>
            </tr>
        </table>
        <!-- Table C -->
        <table class="table1">
            <tr>
                <td class="td14">F</td>
                <td class="td15">21. <span style="margin-left: 5px; font-size: 11px">ANGSURAN PPh PASAL 25 TAHUN PAJAK BERIKUTNYA DIHITUNG SEBESAR. DIHITUNG BERDASARKAN :</span> </br>
                </td>
                <td class="td3">21</td>
                <td class="td5"><input type="text" style="width: 100%; border: 0px solid black; text-align:right" placeholder="0" oninput="formulir1770()" id="pasal25" value=""></td>
            </tr>
            <tr>
                <td class="td16">ANGSURAN PPh</br>PASAL 25 TAHUN</br>PAJAK BERIKUTNYA</td>
                <td class="td17">
                    <span class="radio20">
                        <input type="radio" id="pembetulan2" aria-label="Checkbox for following text input" style="margin-left: 20px" name="Nomor21" value="1/2XAngka16" <?= ($form1770s->angsuran_PPh25  == '1/2XAngka16') ? 'checked' : '' ?>>
                        <label for="exampleFormControlInput1" class="form-label" style="font-size: 10px;">a. 1/2 X JUMLAH PADA ANGKA 16</label>

                        <input type="radio" id="pembetulan2" aria-label="Checkbox for following text input" style="margin-left: 20px" name="Nomor21" value="PengusahaTertentu" <?= ($form1770s->angsuran_PPh25  == 'PengusahaTertentu') ? 'checked' : '' ?>>
                        <label for="exampleFormControlInput1" class="form-label" style="font-size: 10px">b. PERHITUNGAN WAJIB PAJAK ORANG PRIBADI PENGUSAHA TERTENTU</label>
                    </span>
                </td>
                <td style="border-bottom: 1px solid black; width: 3%"></td>
                <td style="border-bottom: 1px solid black; border-right: 1px solid black; width: 18%">
                    <span class="radio20">
                        <input type="radio" id="pembetulan2" aria-label="Checkbox for following text input" name="Nomor21" value="LampiranSendiri" <?= ($form1770s->angsuran_PPh25  == 'LampiranSendiri') ? 'checked' : '' ?>>
                        <label for="exampleFormControlInput1" class="form-label" style="font-size: 10px">c. PERHITUNGAN DALAM</br>LAMPIRAN TERSENDIRI</label>
                    </span>
                </td>
            </tr>
        </table>

        <table class="table1">
            <tr>
                <td class="td18">G</td>
                <td class="td19">SEKAIN FORMULIR 1770-I SAMPAI DENGAN 1770-IV (BAIK YANG DIISI MAUPUN</td>
                <td class="td20">YANG TIDAK DIISI) HARUS DILAMPIRKAN PULA :</td>
            </tr>
            <tr>
                <td class="td18">LAMPIRAN</td>
                <td class="td19">
                    <input type="checkbox" aria-label="Checkbox for following text input" style="margin-top: 5px; margin-left: 10px" id="SuratKuasa" <?= (isset($formulir_1770[21]) && $formulir_1770[21]->rupiah_daftar_poin > 0) ? 'checked' : '' ?>>
                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 11px;">SURAT KUASA KHUSUS (BILA DIKUASAKAN)</label>
                </td>
                <td class="td20">
                    <input type="checkbox" aria-label="Checkbox for following text input" style="margin-top: 5px" id="AngsuranPPh25" <?= (isset($formulir_1770[22]) && $formulir_1770[22]->rupiah_daftar_poin > 0) ? 'checked' : '' ?>>
                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 11px;">PERHITUNGAN ANGSURAN PPh PASAL 25 TAHUN PAJAK BERIKUTNYA</label>
                </td>
            </tr>
            <tr>
                <td class="td18"></td>
                <td class="td19">
                    <input type="checkbox" aria-label="Checkbox for following text input" style="margin-top: 5px; margin-left: 10px" id="SPPPasal29" <?= (isset($formulir_1770[23]) && $formulir_1770[23]->rupiah_daftar_poin > 0) ? 'checked' : '' ?>>
                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 11px;">SPP LEMBAR KE-3 PPh PASAL 29</label>
                </td>
                <td class="td20">
                    <input type="checkbox" aria-label="Checkbox for following text input" style="margin-top: 5px">
                    <input type="text" style="width: 90%; height: 30px; border: 1px solid black; margin-left: 5px" id="lampiranGpoin4" <?= (isset($formulir_1770[24]) && $formulir_1770[24]->rupiah_daftar_poin > 0) ? 'checked' : '' ?>>
                </td>
            </tr>
            <tr>
                <td class="td18"></td>
                <td class="td19">
                    <input type="checkbox" aria-label="Checkbox for following text input" style="margin-top: 5px; margin-left: 10px" id="neraca" <?= (isset($formulir_1770[25]) && $formulir_1770[25]->rupiah_daftar_poin > 0) ? 'checked' : '' ?>>
                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 11px;">NERACA DAN LAP.LABA RUGI/REKAPITULASI BULANAN</br>PEREDARAN BRUTO DAN/ATAU PENGHASILAN LAIN DAN BIAYA</label>
                </td>
                <td class="td20">
                    <input type="checkbox" aria-label="Checkbox for following text input" style="margin-top: 5px" id="PerpajakanPHMT" <?= (isset($formulir_1770[26]) && $formulir_1770[26]->rupiah_daftar_poin > 0) ? 'checked' : '' ?>>
                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 11px;">PERHITUNGAN PPh TERUTANG BAGI WAJIB PAJAK</br>DENGAN STATUS PERPAJAKAN PH ATAU MT</label>
                </td>
            </tr>
            <tr>
                <td class="td18"></td>
                <td class="td19">
                    <input type="checkbox" aria-label="Checkbox for following text input" style="margin-top: 5px; margin-left: 10px" id="PerhitunganKompensasi" <?= (isset($formulir_1770[27]) && $formulir_1770[27]->rupiah_daftar_poin > 0) ? 'checked' : '' ?>>
                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 11px;">PERHITUNGAN KOMPENSASI KERUGIAN FISIKAL</label>
                </td>
                <td class="td20">
                    <input type="checkbox" aria-label="Checkbox for following text input" style="margin-top: 5px" id="DaftarPenghasilan" <?= (isset($formulir_1770[28]) && $formulir_1770[28]->rupiah_daftar_poin > 0) ? 'checked' : '' ?>>
                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 11px;">DAFTAR JUMLAH PENGHASILAN DAN PEMBAYARAN PPh PASAL 25</br>(KHUSUS UNTUK ORANG PRIBADI PENGUSAHA TERTENTU)</label>
                </td>
            </tr>
            <tr>
                <td class="td18"></td>
                <td class="td19">
                    <input type="checkbox" aria-label="Checkbox for following text input" style="margin-top: 5px; margin-left: 10px" id="BuktiPemotongan" <?= (isset($formulir_1770[29]) && $formulir_1770[29]->rupiah_daftar_poin > 0) ? 'checked' : '' ?>>
                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 11px;">BUKTI PEMOTONGAN/PEMUNGUTAN OLEH PIHAK LAIN/DITANGGUNG</br>PEMERINTAH DAN YANG DIBAYAR/DIPOTONG DI LUAR NEGERI</label>
                </td>
                <td style="border: 1px solid black; border-left: 0px; border-top: 0px; border-bottom: 0px; width: 36%">
                    <input type="checkbox" aria-label="Checkbox for following text input" style="margin-top: 5px" id="DafarPeredaran" <?= (isset($formulir_1770[30]) && $formulir_1770[30]->rupiah_daftar_poin > 0) ? 'checked' : '' ?>>
                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 10px;">DAFTAR JUMLAH PEREDARAN BRUTO DAN PEMBAYARAN PPh FINAL</br>BERDASARKAN PP 46 TAHUN 2013 PER MASA PAJAK DAN PER TEMPAT USAHA</label>
                </td>
            </tr>
            <tr>
                <td class="td18"></td>
                <td style="border: 1px solid black; border-right: 0px; border-top: 0px; border-bottom: 0px; width: 37%;  font-size: 11px;">
                    <input type="checkbox" aria-label="Checkbox for following text input" style="margin-top: 5px; margin-left: 10px" id="FotokopiFormulir" <?= (isset($formulir_1770[31]) && $formulir_1770[31]->rupiah_daftar_poin > 0) ? 'checked' : '' ?>>
                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 11px;">FOTOKOPI FORMULIR 1721-A1 DAN/ATAU 1721-A2 &emsp; &emsp; LEMBAR</label>
                </td>
                <td class="td20">
                    <input type="checkbox" aria-label="Checkbox for following text input" style="margin-top: 5px">
                    <input type="text" style="width: 90%; height: 30px; border: 1px solid black; margin-left: 5px" id="LampiranGPoin12" <?= (isset($formulir_1770[32]) && $formulir_1770[32]->rupiah_daftar_poin > 0) ? 'checked' : '' ?>>
                </td>
            </tr>
        </table>
        <table class="table1">
            <tr>
                <th class="th3">PERNYATAAN</th>
            </tr>
            <tr>
                <td class="td21">Dengan menyadari sepenuhnya akan segala akibatnya termasuk sanksi-sanksi sesuai dengan ketentuan perundang-undangan
                    yang berlaku, saya menyatakan bahwa apa yang telah saya beritahukan di atas beserta lampiran-lampirannya adalah benar, lengkap dan jelas.</td>
            </tr>
        </table>
        <table class="table1">
            <tr>
                <th class="td22">
                    <div class="form-check formulir1770" style="display:inline-block;">
                        <input style="display:inline;" class="form-check-input" type="radio" name="PelaporPajak" id="flexRadioDisabled" value="WajibPajak" <?= ($form1770s->pelapor_pajak  == 'WajibPajak') ? 'checked' : '' ?>>
                        <label class="form-check-label" for="flexRadioDisabled" style="font-size: 11px;">
                            WAJIB PAJAK
                        </label>
                    </div>
                    <div class="form-check formulir1770" style="display:inline-block;">
                        <input style="display:inline;" class="form-check-input" type="radio" name="PelaporPajak" id="flexRadioDisabled" value="Kuasa" <?= ($form1770s->pelapor_pajak  == 'Kuasa') ? 'checked' : '' ?>>
                        <label class="form-check-label" for="flexRadioDisabled" style="font-size: 11px;">
                            KUASA
                        </label>
                    </div>
                </th>
                <th class="td23"></th>
                <th class="td24">TANGGAL</th>
                <th class="td23"><input type="date" style="width: 90%; font-size: 12px; height: 40px" id="tanggal_lampiran" value="<?= $form1770s['tanggal_lampiran'] ?? "" ?>"></th>
                <th><input type="hidden" style="width: 90%; font-size: 12px; height: 40px" id="formsptid" value="<?= $formspt ?? "" ?>"></th>
                <th class="td25">TANDA TANGAN</th>

                </th>

            </tr>
        </table>
        <table class="table1">
            <tr>
                <th class="th4">NAMA WAJIB PAJAK</th>
                <th class="th5"><input type="text" style="height: 30px; width: 100%; border: 1px solid black; font-size: 14px" placeholder="{{ $nama }}" disabled="disabled"></th>
                <th rowspan="2" class="th6">
                    <form action="/1770_TTD/{{$form1770}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="file" name="tanda_tangan" class="form-control" style="font-size:11px;" accept=".png">
                            <button class="btn btn-primary" type="submit" style="font-size:11px;">Submit</button>
                        </div>
                    </form>
                    <img src="{{ asset('ttdPHMT/'.$form1770s['tanda_tangan']) }}" style="width: 90px;" alt="">
                </th>
            </tr>
            <tr>
                <th class="th7">NPWP</th>
                <th class="th8"><input type="text" style="height: 30px; width: 100%; border: 1px solid black; font-size: 14px" value="{{ $npwp }}" disabled="disabled" id="formatnpwpfix"></th>
            </tr>
        </table>
        <button type="button" onclick="tabel1770(this)" style="margin-left: 10px;">Simpan</button>
        <button type="button" onclick="tabel1770Delete()">Hapus</button>




        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"> -->
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>

        <script>
            $(document).ready(function() {
                // jumlah();
                formatNpwp2();
                formulir1770();
                // $("#KurangBayar").prop("checked", false);
            });
            $("#CekPembetulan").change(function() {
                if (this.checked) {
                    data = {
                        cek_pembetulan: 1
                    }
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: "POST",
                        data: data,
                        url: '/CekPembetulan/{{ $spt->id }}',
                        success: function(res) {
                            console.log(res)
                        }
                    });
                    return;
                }
                data = {
                    cek_pembetulan: 0
                }
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    data: data,
                    url: '/CekPembetulan/{{ $spt->id }}',
                    success: function(res) {
                        console.log(res)
                    }
                });
                return;
            });
            $('#pilihanPTKP').change(function() {
                ids = $(this).val().split("/");
                console.log(ids);
                $(`#${ids[0]}`).prop("checked", true);
                data = {
                    jenis_PTKP: $(this).val()
                }
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    data: data,
                    url: '/JenisPTKP/{{ $form1770 }}',
                    success: function(res) {
                        console.log(res)
                    }
                });
            });
            $('input:radio[name="flexRadioDisabled"]').change(
                function() {
                    if ($(this).is(':checked')) {
                        console.log(1, $(this).val())
                        data = {
                            jenis_pelaporan: $(this).val()
                        }
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type: "POST",
                            data: data,
                            url: '/JenisUpdate/{{ $spt->id }}',
                            success: function(res) {
                                console.log(res)
                            }
                        });
                    }
                });


            $('input:radio[name="Nomor16"]').change(
                function() {
                    if ($(this).is(':checked')) {
                        console.log(1, $(this).val())
                        data = {
                            jenis_KreditPajak: $(this).val()
                        }
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type: "POST",
                            data: data,
                            url: '/JenisKreditPajak/{{ $form1770 }}',
                            success: function(res) {
                                console.log(res)
                            }
                        });
                    }
                });

            $('input:radio[name="Nomor19"]').change(
                function() {
                    if ($(this).is(':checked')) {
                        console.log(1, $(this).val())
                        data = {
                            jenis_PPhKurang_LebihBayar: $(this).val()
                        }
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type: "POST",
                            data: data,
                            url: '/JenisPPhKurangLebih/{{ $form1770 }}',
                            success: function(res) {
                                console.log(res)
                            }
                        });
                    }
                });

            $('input:radio[name="Nomor20"]').change(
                function() {
                    if ($(this).is(':checked')) {
                        console.log(1, $(this).val())
                        data = {
                            permohonan_PPhLebihBayar: $(this).val()
                        }
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type: "POST",
                            data: data,
                            url: '/PermohonanPPhLebihBayar/{{ $form1770 }}',
                            success: function(res) {
                                console.log(res)
                            }
                        });
                    }
                });

            $('input:radio[name="Nomor21"]').change(
                function() {
                    if ($(this).is(':checked')) {
                        console.log(1, $(this).val())
                        data = {
                            angsuran_PPh25: $(this).val()
                        }
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type: "POST",
                            data: data,
                            url: '/AngsuranPPhPasal25/{{ $form1770 }}',
                            success: function(res) {
                                console.log(res)
                            }
                        });
                    }
                });

            $('input:radio[name="PelaporPajak"]').change(
                function() {
                    if ($(this).is(':checked')) {
                        console.log(1, $(this).val())
                        data = {
                            pelapor_pajak: $(this).val()
                        }
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type: "POST",
                            data: data,
                            url: '/PelaporPajak/{{ $form1770 }}',
                            success: function(res) {
                                console.log(res)
                            }
                        });
                    }
                });
            const checkbox = document.getElementById('PH')
            const checkbox2 = document.getElementById('PH1')
            const checkbox3 = document.getElementById('SUBMIT1')
            const checkbox4 = document.getElementById('SUBMIT2')
            const button1 = document.getElementById('SUBMIT')
            const button2 = document.getElementById('PH-MT')


            checkbox.addEventListener('change', (event) => {
                if (event.currentTarget.checked) {
                    button2.style.display = 'inline-block';
                    button1.style.display = 'none';

                }
            })
            checkbox2.addEventListener('change', (event) => {
                if (event.currentTarget.checked) {
                    button2.style.display = 'inline-block';
                    button1.style.display = 'none';

                }
            })
            checkbox3.addEventListener('change', (event) => {
                if (event.currentTarget.checked) {
                    button1.style.display = 'inline-block';
                    button2.style.display = 'none';

                }
            })
            checkbox4.addEventListener('change', (event) => {
                if (event.currentTarget.checked) {
                    button1.style.display = 'inline-block';
                    button2.style.display = 'none';

                }
            })

            function SaveKolomIdentitas() {
                const npwp_wajibpajak = document.getElementById("npwp_wajibpajak").value;
                console.log('npwp_wajibpajak');

                const nama_wajibpajak = document.getElementById("nama_wajibpajak").value;
                const jenis_usaha = document.getElementById("jenis_usaha").value;
                const klu = document.getElementById("klu").value;
                const no_telepon = document.getElementById("no_telepon").value;
                const fax = document.getElementById("fax").value;
                const status_perpajakan = $('input:radio[name="status"]:checked').val();
                const npwp_suamiisteri = document.getElementById("npwp_suamiisteri").value;
                data = {
                    npwp_wajibpajak: npwp_wajibpajak,
                    nama_wajibpajak: nama_wajibpajak,
                    jenis_usaha: jenis_usaha,
                    klu: klu,
                    no_telepon: no_telepon,
                    fax: fax,
                    status_perpajakan: status_perpajakan,
                    npwp_suamiisteri: npwp_suamiisteri,
                }
                console.log(data);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "post",
                    data: data,
                    url: '/KolomIdentitas/Store/{{ $form1770 }}',
                    success: function(res) {
                        Swal.fire(
                            'Data Berhasil Tersimpan',
                            '',
                            'success'
                        )
                    }
                });
            }

            function DeleteKolomIdentitas(nama) {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: '/KolomIdentitas/delete/{{ $form1770 }}',
                    success: function(res) {
                        Swal.fire({
                                title: 'Apa kamu yakin?',
                                text: "Kamu tidak akan dapat mengembalikan ini!",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Ya, hapus!',
                                cancelButtonText: 'Batal',
                            }

                        ).then((result) => {
                            if (result.isConfirmed) {
                                Swal.fire(
                                    'Berhasil!',
                                    'Data Anda telah dihapus.',
                                    'success'
                                )
                                location.reload()

                            }
                        })
                    }
                });
            }

            function jumlah() {
                valueNomorDelapan = numeral(nomordelapan.value);
                document.getElementById('nomordelapan').value = valueNomorDelapan.format();

                var resultnetoLain2 = resultnetoLain1 - (valueNomorDelapan.value())
                document.getElementById('nomorsembilan').value = resultnetoLain2;

                valueNomorSembilan = numeral(nomorsembilan.value);
                document.getElementById('nomorsembilan').value = valueNomorSembilan.format();
                valueHasil = numeral(hasil.value);
                document.getElementById('hasil').value = valueHasil.format();
                valueHasilPPhDiPotongDiPungut = numeral(hasilPPhDipotongDipungut.value);
                document.getElementById('hasilPPhDipotongDipungut').value = valueHasilPPhDiPotongDiPungut.format();

                var resultnetoLain3 = ((valueHasil.value()) + (valueHasilPPhDiPotongDiPungut.value()))
                document.getElementById('nomorsepuluh').value = resultnetoLain3;
                valueNomorSepuluh = numeral(nomorsepuluh.value);
                document.getElementById('nomorsepuluh').value = valueNomorSepuluh.format();

                var resultnetoLain4 = resultnetoLain2 - resultnetoLain3
                document.getElementById('nomorsebelas').value = resultnetoLain4;


                valueNomorDelapanBelas = numeral(nomordelapanbelas.value);
                document.getElementById('nomordelapanbelas').value = valueNomorDelapanBelas.format();

                valueK1 = numeral(k1.value);
                document.getElementById('k1').value = valueK1;

                var resultpkp = resultnetoLain2 - valueNomorDelapanBelas
                document.getElementById('nomorsebelas').value = resultpkp;
            }

            function formatNpwp2() {
                formatnpwp = document.getElementById('formatnpwpfix').value
                formatnpwp2 = document.getElementById('formatnpwpfix')
                if (typeof formatnpwp === 'string') {

                }
                formatnpwp2.value = formatnpwp.replace(/(\d{2})(\d{3})(\d{3})(\d{1})(\d{3})(\d{3})/, '$1.$2.$3.$4-$5.$6');
            }


            function formulir1770() {
                // PENGHASILAN NETO
                valuePenghasilanNeto1 = numeral(penghasilanneto1.value);
                document.getElementById('penghasilanneto1').value = valuePenghasilanNeto1.format();

                valuePenghasilanNeto2 = numeral(penghasilanneto2.value);
                document.getElementById('penghasilanneto2').value = valuePenghasilanNeto2.format();

                valuePenghasilanNeto3 = numeral(penghasilanneto3.value);
                document.getElementById('penghasilanneto3').value = valuePenghasilanNeto3.format();

                valuePenghasilanNeto4 = numeral(penghasilanneto4.value);
                document.getElementById('penghasilanneto4').value = valuePenghasilanNeto4.format();
                // HASIL 1+2+3+4
                var penghasilanneto1234 = ((valuePenghasilanNeto1.value()) + (valuePenghasilanNeto2.value()) +
                    (valuePenghasilanNeto3.value()) + (valuePenghasilanNeto4.value()));
                document.getElementById('penghasilanneto5').value = numeral(penghasilanneto1234).format();

                valuePenghasilanNeto6 = numeral(penghasilanneto6.value);
                document.getElementById('penghasilanneto6').value = valuePenghasilanNeto6.format();

                // HASIL 5-6
                var penghasilanneto56 = penghasilanneto1234 - ((valuePenghasilanNeto6.value()));
                document.getElementById('penghasilanneto7').value = numeral(penghasilanneto56).format();

                // PENGHASILAN KENA PAJAK
                valuePenghasilanKenaPajak8 = numeral(penghasilankenapajak8.value);
                document.getElementById('penghasilankenapajak8').value = valuePenghasilanKenaPajak8.format();

                // HASIL 7-8
                var penghasilankenapajak78 = penghasilanneto56 - ((valuePenghasilanKenaPajak8.value()));
                document.getElementById('penghasilankenapajak9').value = numeral(penghasilankenapajak78).format();

                // PTKP
                var data = $("option:selected", $("#pilihanPTKP")).attr("data-value");
                console.log();
                document.getElementById("inputPTKP").value = numeral(data).format();

                // HASIL 9-10
                var penghasilankenapajak910 = penghasilankenapajak78 - data;
                document.getElementById('penghasilankenapajak11').value = numeral(penghasilankenapajak910).format();
                if (penghasilankenapajak910 < 0) {
                    // Jika nilai penghasilankenapajak11 negatif, berhenti di sini
                    document.getElementById('penghasilankenapajak11').value = 0;
                    return;
                } else {

                    var data2 = document.getElementById("penghasilankenapajak11").value;

                    // PERHITUNGAN SENDIRI
                    var PPhTerutang = document.getElementById("pphterutang12");
                    PPhTerutang.disabled = PerhitunganSendiri.checked ? false : true;
                    console.log(countPajakProgresif(data2))
                    if (!PerhitunganSendiri.checked) {
                        document.getElementById("pphterutang12").value = numeral(countPajakProgresif(data2)).format();
                        PPhTerutang.focus()
                    }

                    valuePPhTerutang12 = numeral(pphterutang12.value);
                    document.getElementById('pphterutang12').value = valuePPhTerutang12.format();

                    valuePPhTerutang13 = numeral(pphterutang13.value);
                    document.getElementById('pphterutang13').value = valuePPhTerutang13.format();

                    // HASIL 12+13
                    var hasilpphterutang = ((valuePPhTerutang12.value()) + (valuePPhTerutang13.value()));
                    document.getElementById('pphterutang14').value = numeral(hasilpphterutang).format();

                    valueKreditPajak15 = numeral(kreditpajak15.value);
                    document.getElementById('kreditpajak15').value = valueKreditPajak15.format();

                    // KREDIT PAJAK 14-15
                    var hasilkreditpajak = hasilpphterutang - (valueKreditPajak15.value());
                    document.getElementById('kreditpajak16').value = numeral(hasilkreditpajak).format();

                    valueKreditPajak17a = numeral(kreditpajak17a.value);
                    document.getElementById('kreditpajak17a').value = valueKreditPajak17a.format();

                    valueKreditPajak17b = numeral(kreditpajak17b.value);
                    document.getElementById('kreditpajak17b').value = valueKreditPajak17b.format();

                    // HASIL 17a+17b
                    var hasilkreditpajak18 = ((valueKreditPajak17a.value()) + (valueKreditPajak17b.value()));
                    // console.log(parseInt(valueKreditPajak15.format().replaceAll(',','')))
                    if ((parseInt(numeral(hasilpphterutang).format().replaceAll(',', '')) -
                            parseInt(valueKreditPajak15.format().replaceAll(',', ''))) < 0) {
                        $("#pphPotongPungut").prop("checked", true);

                    }
                    document.getElementById('kreditpajak18').value = numeral(hasilkreditpajak18).format();
                    if (hasilkreditpajak < 0) {
                        $("#pphPotongPungut").prop("checked", true);
                    } else {
                        $("#pphBayarSendiri").prop("checked", true);

                    }
                    if ($('input[name="Nomor16"]:checked').val() == 'bayarsendiri' && hasilkreditpajak >= hasilkreditpajak18) {
                        $("#KurangBayar").prop("checked", true);
                    } else if ($('input[name="Nomor16"]:checked').val() == 'bayarsendiri' && hasilkreditpajak < hasilkreditpajak18) {
                        $("#LebihBayar").prop("checked", true);

                    } else if ($('input[name="Nomor16"]:checked').val() == 'potongpungut') {
                        $("#LebihBayar").prop("checked", true);

                    }
                    // PPh KURANG/LEBIH BAYAR
                    var pphkuranglebih19 = hasilkreditpajak - hasilkreditpajak18;
                    if (pphkuranglebih19 >= 0) {
                        document.getElementById('KurangLebihBayar19').value = numeral(pphkuranglebih19).format();
                    } else {
                        pphkuranglebih19 = hasilkreditpajak18 - hasilkreditpajak;
                        document.getElementById('KurangLebihBayar19').value = numeral(pphkuranglebih19).format();
                    }

                    // PASAL 25
                    valuePasal25 = numeral(pasal25.value);
                    document.getElementById('pasal25').value = valuePasal25.format();
                }
            }

            function countPajakProgresif(pkpr) {
                pkp = Number(pkpr.replace(/,/g, ''));
                pkpCounted = 0;
                if (pkp <= 60000000) {
                    pkpCounted = (differentNumber(pkp, 0) * 0.05)
                    return pkpCounted;
                }
                if (pkp > 60000000 && pkp <= 250000000) {
                    pkpCounted = (60000000 * 0.05) + (differentNumber(pkp, 60000000) * 0.15)
                    return pkpCounted;
                }

                if (pkp > 250000000 && pkp <= 500000000) {
                    pkpCounted = (60000000 * 0.05) + (190000000 * 0.15) + (differentNumber(pkp, 250000000) * 0.25)
                    return pkpCounted;
                }
                if (pkp > 500000000 && pkp <= 5000000000) {
                    pkpCounted = (60000000 * 0.05) + (190000000 * 0.15) + (250000000 * 0.25) + (differentNumber(pkp, 500000000) * 0.30)

                    return pkpCounted;
                }
                if (pkp > 5000000000) {
                    pkpCounted = (60000000 * 0.05) + (190000000 * 0.15) + (250000000 * 0.25) + (4500000000 * 0.30) + (differentNumber(pkp, 5000000000) * 0.35)
                    return pkpCounted;
                }
                // if(pkp > 5000000000){
                //     pkpCounted = (60000000 * 0.5) + (250000000 * 0.15) + (500000000 * 0.25) + ((pkp - 60000000 - 250000000 - 500000000) * 0.30) + ((pkp - 60000000 - 250000000 - 500000000))
                // }    
                return pkpCounted;

            }

            function differentNumber(angka1, angka2) {
                // Pastikan kedua argumen adalah angka


                // Hitung selisih antara dua angka
                var selisih = Math.abs(angka1 - angka2);

                return selisih;
            }


            function tabel1770() {
                penghasilanneto1 = document.querySelector('#penghasilanneto1').value
                penghasilanneto2 = document.querySelector('#penghasilanneto2').value
                penghasilanneto3 = document.querySelector('#penghasilanneto3').value
                penghasilanneto4 = document.querySelector('#penghasilanneto4').value
                penghasilanneto5 = document.querySelector('#penghasilanneto5').value
                penghasilanneto6 = document.querySelector('#penghasilanneto6').value
                penghasilanneto7 = document.querySelector('#penghasilanneto7').value
                penghasilankenapajak8 = document.querySelector('#penghasilankenapajak8').value
                penghasilankenapajak9 = document.querySelector('#penghasilankenapajak9').value
                inputPTKP = document.querySelector('#inputPTKP').value
                penghasilankenapajak11 = document.querySelector('#penghasilankenapajak11').value
                pphterutang12 = document.querySelector('#pphterutang12').value
                pphterutang13 = document.querySelector('#pphterutang13').value
                pphterutang14 = document.querySelector('#pphterutang14').value
                kreditpajak15 = document.querySelector('#kreditpajak15').value
                kreditpajak16 = document.querySelector('#kreditpajak16').value
                kreditpajak17a = document.querySelector('#kreditpajak17a').value
                kreditpajak17b = document.querySelector('#kreditpajak17b').value
                kreditpajak18 = document.querySelector('#kreditpajak18').value
                KurangLebihBayar19 = document.querySelector('#KurangLebihBayar19').value
                pasal25 = document.querySelector('#pasal25').value
                SuratKuasa = $("#SuratKuasa").is(':checked') ? 1 : 0;
                AngsuranPPh25 = $("#AngsuranPPh25").is(':checked') ? 1 : 0;
                SPPPasal29 = $("#SPPPasal29").is(':checked') ? 1 : 0;
                lampiranGpoin4 = document.querySelector('#lampiranGpoin4').value
                neraca = $("#neraca").is(':checked') ? 1 : 0;
                PerpajakanPHMT = $("#PerpajakanPHMT").is(':checked') ? 1 : 0;
                PerhitunganKompensasi = $("#PerhitunganKompensasi").is(':checked') ? 1 : 0;
                DaftarPenghasilan = $("#DaftarPenghasilan").is(':checked') ? 1 : 0;
                BuktiPemotongan = $("#BuktiPemotongan").is(':checked') ? 1 : 0;
                DafarPeredaran = $("#DafarPeredaran").is(':checked') ? 1 : 0;
                FotokopiFormulir = $("#FotokopiFormulir").is(':checked') ? 1 : 0;
                LampiranGPoin12 = document.querySelector('#LampiranGPoin12').value
                tanggal_lunas = document.querySelector('#tanggal_lunas').value
                tanggal_lampiran = document.querySelector('#tanggal_lampiran').value
                formsptid = document.querySelector('#formsptid').value
                jumlah = numeral(Math.abs(kreditpajak16.replaceAll(',', '') - kreditpajak18.replaceAll(',', ''))).format()
                var data = {
                    tanggal_lampiran: tanggal_lampiran,
                    tanggal_lunas: tanggal_lunas,
                    poin1770: [penghasilanneto1, penghasilanneto2, penghasilanneto3, penghasilanneto4,
                        penghasilanneto5, penghasilanneto6, penghasilanneto7, penghasilankenapajak8,
                        penghasilankenapajak9, inputPTKP, penghasilankenapajak11, pphterutang12,
                        pphterutang13, pphterutang14, kreditpajak15, kreditpajak16, kreditpajak17a,
                        kreditpajak17b, kreditpajak18, KurangLebihBayar19, pasal25, SuratKuasa, AngsuranPPh25,
                        SPPPasal29, lampiranGpoin4, neraca, PerpajakanPHMT, PerhitunganKompensasi,
                        DaftarPenghasilan, BuktiPemotongan, DafarPeredaran, FotokopiFormulir, LampiranGPoin12
                    ],
                    formsptid: formsptid,
                    jumlah: jumlah

                }
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: '/Formulir1770_Point/Store/{{ $form1770 }}',
                    data: data,
                    success: function(res) {
                        Swal.fire({
                                title: 'Data Berhasil Tersimpan',
                                icon: 'success',
                                confirmButtonColor: '#8A2BE2',
                                confirmButtonText: 'OK',
                            }

                        ).then((result) => {
                            if (result.isConfirmed) {

                                location.reload();
                            }
                        })
                    }
                });
            }

            function tabel1770Delete(nama) {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: '/Formulir1770_Point/delete',
                    success: function(res) {
                        Swal.fire({
                                title: 'Apa kamu yakin?',
                                text: "Kamu tidak akan dapat mengembalikan ini!",
                                icon: 'warning',
                                showCancelButton: true,
                                confirmButtonColor: '#3085d6',
                                cancelButtonColor: '#d33',
                                confirmButtonText: 'Ya, hapus!',
                                cancelButtonText: 'Batal',
                            }

                        ).then((result) => {
                            if (result.isConfirmed) {
                                Swal.fire({
                                        title: 'Berhasil',
                                        icon: 'success',
                                        confirmButtonColor: '#8A2BE2',
                                        confirmButtonText: 'OK',
                                    }

                                ).then((result) => {
                                    if (result.isConfirmed) {

                                        location.reload();
                                    }
                                })

                            }
                        })
                    }
                });

            }
            $("#PerhitunganSendiri").change(function() {
                if (this.checked) {
                    data = {
                        perhitungan_sendiri: 1
                    }
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: "POST",
                        data: data,
                        url: '/PerhitunganSendiri/{{ $form1770 }}',
                        success: function(res) {
                            console.log(res)
                        }
                    });
                    return;
                }
                data = {
                    perhitungan_sendiri: 0
                }
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    data: data,
                    url: '/PerhitunganSendiri/{{ $form1770 }}',
                    success: function(res) {
                        console.log(res)
                    }
                });
                return;
            });
        </script>
</body>

</html>