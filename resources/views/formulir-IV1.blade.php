<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" type="text/css" href="/css/style.css" />
    <!-- <link rel="stylesheet" type="text/css" href="/js/formulir.js" /> -->

    <title>Formulir 1770-IV</title>
</head>

<body>
    <div class="container-fluid">
        <header>
            <div class="row header">
                <div class="col-2 bag1">
                    <h5>FORMULIR</h5>
                    <h2>1770-IV</h2>
                    <p>KEMENTERIAN KEUANGAN
                        RI DIREKTORAT JENDERAL PAJAK</p>
                </div>
                <div class="col-6">
                    <h5>LAMPIRAN-IV</h5>
                    <p>SPT TAHUNAN PPh WAJIB PAJAK ORANG PRIBADI</p>
                    <span>* HARTA PADA AKHIR TAHUN <br></span>
                    <span>* KEWAJIBAN/UTANG PADA AKHIR TAHUN <br></span>
                    <span>* DAFTAR SUSUNAN ANGGOTA KELUARGA</span>
                </div>
                <div class="col-4">
                    <a href="/arsipSPT" class="btn btn-secondary sebelumnya">Sebelumnya</a>
                    <a href="" class="btn btn-secondary">Selanjutnya</a>
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
                                    <th>a</th>
                                    <th>a</th>
                                    <th>{{ mb_substr($spt['tahun'], 2, 1); }}</th>
                                    <th>{{ mb_substr($spt['tahun'], 3, 1); }}</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDisabled" value="pembukuan" id="flexRadioDisabled" <?= ($spt->jenis_pelaporan  == 'pembukuan') ? 'checked' : '' ?>>
                        <label class="form-check-label" for="flexRadioDisabled">
                            Pembukuan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioCheckedDisabled" value="pencatatan" <?= ($spt->jenis_pelaporan  == 'pencatatan') ? 'checked' : '' ?>>
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
        </header>

        <!-- Data Pengguna -->
        <b>PERHATIAN *SEBELUM MENGISI BACALAH PETUNJUK PENGISIAN *ISI DENGAN HURU CETAK/DIKETIK
            DENGAN TINTA HITAM *BERI TANDA X DALAM KOTAK SESUAI PILIHAN</b>
        <div class="col-12 data-pengguna">
            <div class="row">
                <label class="col-3 form-label">NPWP</label>
                <div class="col-9">
                    <input class="form-control" type="text" disabled="disabled" id="npwpWajibPajak" value="{{ $npwp }}">
                </div>
            </div>
            <div class="row">
                <label class="col-3 form-label">NAMA WAJIB PAJAK</label>
                <div class="col-9">
                    <input class="form-control" type="text" disabled="disabled" value="{{ $nama }}">
                </div>
            </div>
        </div>

        <!-- Bagian A Data Harta -->
        <b>BAGIAN A. HARTA PADA AKHIR TAHUN</b>
        <div>
            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Import Data</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Import Data Harta</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/DataHartaImport" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="file" name="file" class="form-control" accept=".csv">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <form action="/SaveDataHarta/{{$form4}}" method="POST">
            @csrf
            <input type="hidden" name="counted" value="{{ count($data_harta)  }}">
            <table id="A_TblHarta" width="100%">
                <thead>
                    <tr>
                        <th width="20%">KODE HARTA</th>
                        <th width="20%">NAMA HARTA</th>
                        <th width="20%">TAHUN PEROLEHAN</th>
                        <th width="20%">HARGA PEROLEHAN</th>
                        <th width="20%">KETERANGAN</th>
                    </tr>
                    @if (count($data_harta) == 0)

                    <tr>
                        <td><select name="harta[]">
                                <option value='pilih'>Pilih...</option>
                                <option value='011'>011 - Uang Tunai</option>
                                <option value='012'>012 - Tabungan</option>
                                <option value='013'>013 - Giro</option>
                                <option value='014'>014 - Deposito</option>
                                <option value='019'>019 - Setara Kas Lainnya</option>
                                <option value='021'>021 - Piutang</option>
                                <option value='022'>022 - Piutang Afiliasi (Piutang kepada pihak yang mempunyai hubungan
                                    istimewa sebagaimana dimaksud)</option>
                                <option value='029'>029 - Piutang Lainnya</option>
                                <option value='031'>031 - Saham Yang Dibeli Untuk Dijual Kembali</option>
                                <option value='032'>032 - Saham</option>
                                <option value='033'>033 - Obligasi Perusahaan</option>
                                <option value='034'>034 - Obligasi Pemerintah Indonesia (Obligasi Ritel Indonesia atau ORI,
                                    surat berharga syariah negara, dll)</option>
                                <option value='035'>035 - Surat Utang Lainnya</option>
                                <option value='036'>036 - Reksadana</option>
                                <option value='037'>037 - Instrumen Derivatif (Right, Warran, Kontrak Berjangka, Opsi, dll)
                                </option>
                                <option value='038'>038 - Penyertaan Modal Perusahaan Lain Yang Tidak Atas Saham Meliputi
                                    Penyertaan Modal Pada CV, Firma, dan Sejenisnya</option>
                                <option value='039'>039 - Investasi Lainnya</option>
                                <option value='041'>041 - Sepeda</option>
                                <option value='042'>042 - Sepeda Motor</option>
                                <option value='043'>043 - Mobil </option>
                                <option value='049'>049 - Alat Transportasi Lainnya</option>
                                <option value='051'>051 - Logam Mulia (Emas Batangan, Emas Perhiasan, Platina Batangan,
                                    Platina Perhiasan, Logam Mulia Lainnya)</option>
                                <option value='052'>052 - Batu Mulia (Intan, Berlian. Batu Mulia Lainnya)</option>
                                <option value='053'>053 - Barang Seni dan Antik (Barang-Barang Seni, Barang-Barang Antik)
                                </option>
                                <option value='054'>054 - Kapal Pesiar, Pesawat Terbang, Helikopter,Jetski dan Peralatan
                                    Olahraga Khusus</option>
                                <option value='055'>055 - Peralatan Elektronik dan Furnitur</option>
                                <option value='059'>059 - Harta Bergerak Lainnya</option>
                                <option value='061'>061 - Tanah dan/atau Bangunan Untuk Tempat Tinggal</option>
                                <option value='062'>062 - Tanah dan/atau Bangunan Untuk Usaha (Toko, Pabrik, Gudang, dan
                                    Sejenisnya)</option>
                                <option value='063'>063 - Tanah atau Lahan Untuk Usaha (Lahan Pertanian, Perkebunan,
                                    Perikanan Darat, dan Sejenisnya)</option>
                                <option value='069'>069 - Harta Tidak Bergerak Lainnya</option>
                            </select></td>
                        <td><input type="text" name="nama_harta[]"></td>
                        <td><input type="text" name="tahun_perolehan[]"></td>
                        <td><input type="text" name="harta_perolehan[]" oninput="format(this.value)" class="harga_perolehan"></td>
                        <td><input type="text" name="keterangan[]"></td>
                    </tr>
                    @endif
                </thead>
                <tbody>
                    @foreach ( $data_harta as $dh )
                    <tr>
                        <td><select name="harta[]">
                                <option value='pilih'>Pilih...</option>
                                <option value='011' @if ($dh['kode_harta']=="011" ) selected="selected" @endif>011 - Uang Tunai</option>
                                <option value='012' @if ($dh['kode_harta']=="012" ) selected="selected" @endif>012 - Tabungan</option>
                                <option value='013' @if ($dh['kode_harta']=="013" ) selected="selected" @endif>013 - Giro</option>
                                <option value='014' @if ($dh['kode_harta']=="014" ) selected="selected" @endif>014 - Deposito</option>
                                <option value='019' @if ($dh['kode_harta']=="019" ) selected="selected" @endif>019 - Setara Kas Lainnya</option>
                                <option value='021' @if ($dh['kode_harta']=="021" ) selected="selected" @endif>021 - Piutang</option>
                                <option value='022' @if ($dh['kode_harta']=="022" ) selected="selected" @endif>022 - Piutang Afiliasi (Piutang kepada pihak yang mempunyai hubungan
                                    istimewa sebagaimana dimaksud)</option>
                                <option value='029' @if ($dh['kode_harta']=="029" ) selected="selected" @endif>029 - Piutang Lainnya</option>
                                <option value='031' @if ($dh['kode_harta']=="031" ) selected="selected" @endif>031 - Saham Yang Dibeli Untuk Dijual Kembali</option>
                                <option value='032' @if ($dh['kode_harta']=="032" ) selected="selected" @endif>032 - Saham</option>
                                <option value='033' @if ($dh['kode_harta']=="033" ) selected="selected" @endif>033 - Obligasi Perusahaan</option>
                                <option value='032' @if ($dh['kode_harta']=="034" ) selected="selected" @endif>034 - Obligasi Pemerintah Indonesia (Obligasi Ritel Indonesia atau ORI,
                                    surat berharga syariah negara, dll)</option>
                                <option value='035' @if ($dh['kode_harta']=="035" ) selected="selected" @endif>035 - Surat Utang Lainnya</option>
                                <option value='036' @if ($dh['kode_harta']=="036" ) selected="selected" @endif>036 - Reksadana</option>
                                <option value='037' @if ($dh['kode_harta']=="037" ) selected="selected" @endif>037 - Instrumen Derivatif (Right, Warran, Kontrak Berjangka, Opsi, dll)
                                </option>
                                <option value='038' @if ($dh['kode_harta']=="038" ) selected="selected" @endif>038 - Penyertaan Modal Perusahaan Lain Yang Tidak Atas Saham Meliputi
                                    Penyertaan Modal Pada CV, Firma, dan Sejenisnya</option>
                                <option value='039' @if ($dh['kode_harta']=="039" ) selected="selected" @endif>039 - Investasi Lainnya</option>
                                <option value='041' @if ($dh['kode_harta']=="041" ) selected="selected" @endif>041 - Sepeda</option>
                                <option value='042' @if ($dh['kode_harta']=="042" ) selected="selected" @endif>042 - Sepeda Motor</option>
                                <option value='043' @if ($dh['kode_harta']=="043" ) selected="selected" @endif>043 - Mobil </option>
                                <option value='049' @if ($dh['kode_harta']=="049" ) selected="selected" @endif>049 - Alat Transportasi Lainnya</option>
                                <option value='051' @if ($dh['kode_harta']=="051" ) selected="selected" @endif>051 - Logam Mulia (Emas Batangan, Emas Perhiasan, Platina Batangan,
                                    Platina Perhiasan, Logam Mulia Lainnya)</option>
                                <option value='052' @if ($dh['kode_harta']=="052" ) selected="selected" @endif>052 - Batu Mulia (Intan, Berlian. Batu Mulia Lainnya)</option>
                                <option value='053' @if ($dh['kode_harta']=="053" ) selected="selected" @endif>053 - Barang Seni dan Antik (Barang-Barang Seni, Barang-Barang Antik)
                                </option>
                                <option value='054' @if ($dh['kode_harta']=="054" ) selected="selected" @endif>054 - Kapal Pesiar, Pesawat Terbang, Helikopter,Jetski dan Peralatan
                                    Olahraga Khusus</option>
                                <option value='055' @if ($dh['kode_harta']=="055" ) selected="selected" @endif>055 - Peralatan Elektronik dan Furnitur</option>
                                <option value='059' @if ($dh['kode_harta']=="059" ) selected="selected" @endif>059 - Harta Bergerak Lainnya</option>
                                <option value='061' @if ($dh['kode_harta']=="061" ) selected="selected" @endif>061 - Tanah dan/atau Bangunan Untuk Tempat Tinggal</option>
                                <option value='062' @if ($dh['kode_harta']=="062" ) selected="selected" @endif>062 - Tanah dan/atau Bangunan Untuk Usaha (Toko, Pabrik, Gudang, dan
                                    Sejenisnya)</option>
                                <option value='063' @if ($dh['kode_harta']=="063" ) selected="selected" @endif>063 - Tanah atau Lahan Untuk Usaha (Lahan Pertanian, Perkebunan,
                                    Perikanan Darat, dan Sejenisnya)</option>
                                <option value='069' @if ($dh['kode_harta']=="069" ) selected="selected" @endif>069 - Harta Tidak Bergerak Lainnya</option>
                            </select></td>
                        <td><input type="text" name="nama_harta[]"></td>
                        <td><input type="text" name="tahun_perolehan[]"></td>
                        <td><input type="text" name="harta_perolehan[]" oninput="format(this.value)" class="harga_perolehan"></td>
                        <td><input type="text" name="keterangan[]"></td>
                    </tr>
                </tbody>
            </table>
            <div style="padding: 10px;"></div>
            <table>
                <tr>
                    <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 670px;  height: 30px">
                        JUMLAH BAGIAN A</th>
                    <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 400px; background-color: #F0E68C">
                        <input type="text" class="form-control" readonly="readonly" style="background-color: #F0E68C; text-align: right" name="hasil1" id="hasil1">
                        <input type="hidden" name="form4_id" value="{{ $form4 }}">
                        <input type="hidden" name="formspt" value="{{ $formspt }}">
                    </th>
                </tr>
            </table>
            <template id="rowTemplateHarta">
                <tr>
                    <td style="border: 1px solid black"><select name="harta[]" style="width:100%; height: 28px; border: 1px solid white">
                            <option value='pilih'>Pilih...</option>
                            <option value='011'>011 - Uang Tunai</option>
                            <option value='012'>012 - Tabungan</option>
                            <option value='013'>013 - Giro</option>
                            <option value='014'>014 - Deposito</option>
                            <option value='019'>019 - Setara Kas Lainnya</option>
                            <option value='021'>021 - Piutang</option>
                            <option value='022'>022 - Piutang Afiliasi (Piutang kepada pihak yang mempunyai hubungan
                                istimewa sebagaimana dimaksud)</option>
                            <option value='029'>029 - Piutang Lainnya</option>
                            <option value='031'>031 - Saham Yang Dibeli Untuk Dijual Kembali</option>
                            <option value='032'>032 - Saham</option>
                            <option value='033'>033 - Obligasi Perusahaan</option>
                            <option value='034'>034 - Obligasi Pemerintah Indonesia (Obligasi Ritel Indonesia atau ORI,
                                surat berharga syariah negara, dll)</option>
                            <option value='035'>035 - Surat Utang Lainnya</option>
                            <option value='036'>036 - Reksadana</option>
                            <option value='037'>037 - Instrumen Derivatif (Right, Warran, Kontrak Berjangka, Opsi, dll)
                            </option>
                            <option value='038'>038 - Penyertaan Modal Perusahaan Lain Yang Tidak Atas Saham Meliputi
                                Penyertaan Modal Pada CV, Firma, dan Sejenisnya</option>
                            <option value='039'>039 - Investasi Lainnya</option>
                            <option value='041'>041 - Sepeda</option>
                            <option value='042'>042 - Sepeda Motor</option>
                            <option value='043'>043 - Mobil </option>
                            <option value='049'>049 - Alat Transportasi Lainnya</option>
                            <option value='051'>051 - Logam Mulia (Emas Batangan, Emas Perhiasan, Platina Batangan,
                                Platina Perhiasan, Logam Mulia Lainnya)</option>
                            <option value='052'>052 - Batu Mulia (Intan, Berlian. Batu Mulia Lainnya)</option>
                            <option value='053'>053 - Barang Seni dan Antik (Barang-Barang Seni, Barang-Barang Antik)
                            </option>
                            <option value='054'>054 - Kapal Pesiar, Pesawat Terbang, Helikopter,Jetski dan Peralatan
                                Olahraga Khusus</option>
                            <option value='055'>055 - Peralatan Elektronik dan Furnitur</option>
                            <option value='059'>059 - Harta Bergerak Lainnya</option>
                            <option value='061'>061 - Tanah dan/atau Bangunan Untuk Tempat Tinggal</option>
                            <option value='062'>062 - Tanah dan/atau Bangunan Untuk Usaha (Toko, Pabrik, Gudang, dan
                                Sejenisnya)</option>
                            <option value='063'>063 - Tanah atau Lahan Untuk Usaha (Lahan Pertanian, Perkebunan,
                                Perikanan Darat, dan Sejenisnya)</option>
                            <option value='069'>069 - Harta Tidak Bergerak Lainnya</option>
                        </select></td>
                    <td style="border: 1px solid black;"><input name="nama_harta[]" class="text @error('nama_harta') is-invalid @enderror" style="width: 100%; border: 1px solid white;text-align: center; text-transform:uppercase">
                        @error('nama_harta')
                        <span style="color: red">{{ $message }}</span>
                        @enderror
                    </td>
                    <td style="border: 1px solid black;"><input name="tahun_perolehan[]" class="text" style="width: 100%; border: 1px solid white;text-align: center">
                    </td>
                    <td style="border: 1px solid black;"><input name="harta_perolehan[]" type="text" oninput="format(this.value)" class="harga_perolehan" style="width: 100%; border: 1px solid white;text-align: center">
                    </td>
                    <td style="border: 1px solid black;"><input name="keterangan[]" class="text" style="width: 100%; border: 1px solid white;text-align: center; text-transform:uppercase">
                    </td>
                </tr>
            </template>
            <button type="button" onclick="addTableHarta(this)">Tambah</button>
            <button type="button" onclick="deleteTableHarta('A_TblHarta')">Hapus</button>
            <button type="button" id="cektableharta" onclick="cekTableHarta(this)">Simpan</button>
            <button type="submit" id="simpantableharta" style="display:none">Simpan</button>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
    <!-- <script src="js/formulir.js"></script> -->
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <script>
        let counted = 0;
        let counted2 = 0;
        let counted3 = 0;
        let tr = 1;
        let tr2 = 1;
        let tr3 = 1;
        $(document).ready(function() {
            NPWPWajibPajak();
        });
        // Jenis Pelaporan
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
                        url: 'http://localhost:8000/JenisUpdate/{{ $spt->id }}',
                        success: function(res) {
                            console.log(res)
                        }
                    });
                    // append goes here
                }
            });
        // Cek Pembetulan
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
                    url: 'http://localhost:8000/CekPembetulan/{{ $spt->id }}',
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
                url: 'http://localhost:8000/CekPembetulan/{{ $spt->id }}',
                success: function(res) {
                    console.log(res)
                }
            });
            return;
        });
        // Format NPWP
        function NPWPWajibPajak() {
            formatnpwp = document.getElementById('npwpWajibPajak').value
            formatnpwp2 = document.getElementById('npwpWajibPajak')
            if (typeof formatnpwp === 'string') {

            }
            formatnpwp2.value = formatnpwp.replace(/(\d{2})(\d{3})(\d{3})(\d{1})(\d{3})(\d{3})/, '$1.$2.$3.$4-$5.$6');
        }
        // Data Harta
        function addTableHarta($this) {

            var countdata = <?= count($data_harta) ?>,
                template = document.querySelector('#rowTemplateHarta'),
                tbl = document.querySelector('#A_TblHarta'),
                td_choice = template.content.querySelectorAll("td"),
                last_td = $('#A_TblHarta tr:last'),
                tr_count = tbl.rows.length;

            var kode_harta = last_td.find('td:eq(0)').find('option:selected').val()
            var nama_harta = last_td.find('td:eq(1)').find('input').val();
            var tahun_perolehan = last_td.find('td:eq(2)').find('input').val();
            var harta_perolehan = last_td.find('td:eq(3)').find('input').val();
            var keterangan = last_td.find('td:eq(4)').find('input').val();
            if (kode_harta === 'pilih' || nama_harta === '' || tahun_perolehan === '' || harta_perolehan === '' || keterangan === '') {
                // alert('isi dulu datanya');
                Swal.fire({
                    icon: 'error',
                    title: '',
                    text: 'Mohon Melengkapi Row Sebelumnya',
                })
                return
            }
            // if (counted == 0 && countdata > 0) {
            td_choice.textContent = tr_count;
            var clone = document.importNode(template.content, true);
            tbl.appendChild(clone);
            format();
            counted += 1
            return


        }

        function cekTableHarta($this) {
            var countdata = <?= count($data_harta) ?>,
                template = document.querySelector('#rowTemplateHarta'),
                tbl = document.querySelector('#A_TblHarta'),
                td_choice = template.content.querySelectorAll("td"),
                last_td = $('#A_TblHarta tr:last'),
                tr_count = tbl.rows.length;

            var kode_harta = last_td.find('td:eq(0)').find('option:selected').val()
            var nama_harta = last_td.find('td:eq(1)').find('input').val();
            var tahun_perolehan = last_td.find('td:eq(2)').find('input').val();
            var harta_perolehan = last_td.find('td:eq(3)').find('input').val();
            var keterangan = last_td.find('td:eq(4)').find('input').val();
            if (kode_harta === 'pilih' || nama_harta === '' || tahun_perolehan === '' || harta_perolehan === '' || keterangan === '') {
                // alert('isi dulu datanya');
                Swal.fire({
                    icon: 'error',
                    title: '',
                    text: 'Mohon Melengkapi Row Sebelumnya',
                })
                return
            }
            const myElement = document.getElementById("simpantableharta").click();

        }

        countdata = <?= count($data_harta) ?>;

        function deleteTableHarta(nama) {
            if (countdata == 0) {
                Swal.fire({
                    icon: 'error',
                    title: '',
                    text: 'Mohon Melengkapi Row Sebelumnya',
                })
                return;
            }
            Swal.fire({
                title: 'Apa kamu yakin?',
                text: "Kamu tidak akan dapat mengembalikan ini!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal',
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Berhasil!',
                        'Data Anda telah dihapus.',
                        'success'
                    )

                    let tr_length = $('#' + nama + ' tr').length;
                    if (tr_length == 2) {
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type: "POST",
                            url: 'http://localhost:8000/DataHarta/delete',
                            success: function(res) {
                                $('#' + nama + ' tr:last').remove();
                                var countdatas = <?= count($data_harta) ?>,
                                    template = document.querySelector('#rowTemplateHarta'),
                                    tbl = document.querySelector('#A_TblHarta'),
                                    td_choice = template.content.querySelectorAll("td"),
                                    last_td = $('#A_TblHarta tr:last'),
                                    tr_count = tbl.rows.length;
                                td_choice.textContent = tr_count;
                                var clone = document.importNode(template.content, true);
                                tbl.appendChild(clone);
                                format();
                            }
                        });
                    }
                    if (tr_length > 2) {
                        $.ajax({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type: "POST",
                            url: 'http://localhost:8000/DataHarta/delete',
                            success: function(res) {
                                $('#' + nama + ' tr:last').remove();
                                format();
                            }
                        });
                    }
                    counted -= 1;
                    countdata -= 1;
                    format();
                }
            })

        }
    </script>
      <script>
        let sum = 0;
        let tmp = 0;

        function format() {
            $('.harga_perolehan').each(function() {
                if (this.value.length > 0 && this.value != 0) {
                    tmp2 = getNumPrice(this.value, '.');
                    this.value = numeral(this.value).format();
                    tmp += parseFloat(tmp2)
                } else {
                    tmp += 0
                }
            });
            sum = tmp
            $('#hasil1').val(numeral(sum).format());
            tmp = 0;
        }

        function format2() {
            $('.jumlah_pinjaman').each(function() {
                console.log(this.value)
                if (this.value.length > 0 && this.value != 0) {
                    tmp2 = getNumPrice(this.value, '.');
                    this.value = numeral(this.value).format();
                    tmp += parseFloat(tmp2)
                } else {
                    tmp += 0
                }
            });
            sum = tmp
            $('#hasil2').val(numeral(sum).format());
            tmp = 0;
        }

        function getNumPrice(price, decimalpoint) {
            var p = price.split(decimalpoint);
            for (var i = 0; i < p.length; i++) p[i] = p[i].replace(/\D/g, '');
            return p.join('.');
        }

        function formatNpwp(event) {
            formatnpwp = event.value
            formatnpwp2 = event
            if (!formatnpwp.match(/^[0-9./-]+$/i)) {
                //  alert('Angka saja')?
                formatnpwp2.value = formatnpwp.slice(0, -1);
                return;
            }
            formatnpwp2.value = formatnpwp.replace();
        }

        function formatNpwp2() {
            formatnpwp = document.getElementById('formatnpwpfix').value
            formatnpwp2 = document.getElementById('formatnpwpfix')
            if (typeof formatnpwp === 'string') {

            }
            formatnpwp2.value = formatnpwp.replace(/(\d{2})(\d{3})(\d{3})(\d{1})(\d{3})(\d{3})/, '$1.$2.$3.$4-$5.$6');
        }
    </script>
    @include('sweetalert::alert')

</body>

</html>