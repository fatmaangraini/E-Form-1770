<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>E-Form 1770</title>
</head>
<style>
    @media print {
        .pagebreak {
            page-break-before: always;
        }

        /* page-break-after works, as well */
    }

    .thsatu {
        border: 1px solid black;
        font-size: 12px;
        font-weight: bold;
        text-align: center;
        width: 5%;
        height: 30px
    }

    .thdua {
        border: 1px solid black;
        font-size: 12px;
        font-weight: bold;
        text-align: center;
        width: 32%
    }

    .thtiga {
        border: 1px solid black;
        font-size: 12px;
        font-weight: bold;
        text-align: center;
        width: 30%
    }

    .thempat {
        border: 1px solid black;
        font-size: 12px;
        font-weight: bold;
        text-align: center;
        width: 7%
    }

    .tdsatu {
        font-size: 14px;
        text-align: center;
        border: 1px solid black;
        height: 40px
    }

    .tddua {
        font-size: 13px;
        border: 1px solid black;
        height: 40px
    }

    .tdtiga {
        border: 1px solid black;
        height: 40px
    }

    .tdempat {
        border: 1px solid black;
        height: 40px
    }

    .tdtiga input {
        width: 100%;
        height: 40px;
        border: 1px solid white;
        text-align: right
    }


    .jumlahB {
        border: 1px solid black;
        width: 30%;
        height: 40px;
        background-color: #F0E68C
    }

    .jumlahC {
        border: 1px solid black;
        font-size: 12px;
        font-weight: bold;
        text-align: center;
        width: 80%;
        height: 30px
    }

    .thjumlah {
        border: 1px solid black;
        font-size: 12px;
        font-weight: bold;
        text-align: center;
        width: 400px;
    }


    .thdua2 {
        border: 1px solid black;
        font-size: 12px;
        text-align: center;
        font-weight: bold;
        width: 60%
    }

    .tddua2 {
        border: 1px solid black;
        font-size: 14px
    }

    .tddua2 input {
        width: 100%;
        height: 40px;
        border: 1px solid white;
        text-align: right
    }

    .tdsatu2 {
        border: 1px solid black;
        font-size: 12px;
        font-weight: bold;
        text-align: center;
        width: 57%;
        height: 40px;
    }

    .tddua3 {
        border: 1px solid black;
        font-size: 12px;
        font-weight: bold;
        text-align: center;
        width: 8%
    }

    .tdtiga2 {
        border: 1px solid black;
        ;
        background-color: #F0E68C
    }
</style>

<body class="bg-grey">
    <!-- Formulir-IV -->
    <div class="container">
        <!-- Header -->
        <div class="row" style="border-bottom: 2px solid black;">
            <div class="col-2 col-md-2 text-center">
                <h4>FORMULIR</h4>
                <h3>1770-IV</h3>
                <p style="font-size: 12px;">KEMENTERIAN KEUANGAN <br>RI DIREKTORAT JENDERAL <br> PAJAK</p>
            </div>
            <div class="col-6 col-md-6" style="border-left: 2px solid black; border-right:2px solid black">
                <div class="row">
                    <h5 class="text-center">LAMPIRAN-IV</h5>
                    <p style="font-size: 14px; text-align:center; font-weight:bold; border-bottom: 2px solid black">SPT TAHUNAN PPh WAJIB PAJAK ORANG PRIBADI</p>
                </div>
                <div class="row">
                    <b style="font-size: 12px;">* HARTA PADA AKHIR TAHUN</b>
                    <b style="font-size: 12px;">* KEWAJIBAN/UTANG PADA AKHIR TAHUN</b>
                    <b style="font-size: 12px;">* DAFTAR SUSUNAN ANGGOTA KELUARGA</b>
                </div>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col">
                        <table class="table table-bordered border-secondary text-center">
                            <th>{{ mb_substr($spt['tahun'], 0, 1); }}</th>
                            <th>{{ mb_substr($spt['tahun'], 1, 1); }}</th>
                            <th>{{ mb_substr($spt['tahun'], 2, 1); }}</th>
                            <th>{{ mb_substr($spt['tahun'], 3, 1); }}</th>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <table class="table table-bordered border-secondary">
                            <tr>
                                <th>0</th>
                                <th>1</th>
                                <th>{{ mb_substr($spt['tahun'], 2, 1); }}</th>
                                <th>{{ mb_substr($spt['tahun'], 3, 1); }}</th>
                            </tr>
                        </table>
                    </div>
                    <div class="col-2">
                    </div>
                    <div class="col-4">
                        <table class="table table-bordered border-secondary">
                            <tr>
                                <th>1</th>
                                <th>2</th>
                                <th>{{ mb_substr($spt['tahun'], 2, 1); }}</th>
                                <th>{{ mb_substr($spt['tahun'], 3, 1); }}</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="form-check" style="display:inline-block; margin-left: 10px">
                    <input style="display:inline;" class="form-check-input" type="radio" name="" value="pembukuan" id="flexRadioDisabled" <?= ($spt->jenis_pelaporan  == 'pembukuan') ? 'checked' : '' ?> disabled>
                    <label class="form-check-label" for="flexRadioDisabled" style="font-size: 14px;">
                        Pembukuan
                    </label>
                </div>
                <div class="form-check" style="display:inline-block; margin-left: 10px">
                    <input class="form-check-input" type="radio" name="" value="pencatatan" id="flexRadioCheckedDisabled" <?= ($spt->jenis_pelaporan  == 'pencatatan') ? 'checked' : '' ?> disabled>
                    <label class="form-check-label" for="flexRadioCheckedDisabled" style="font-size: 14px;">
                        Pencatatan
                    </label>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div>
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <label style="font-size: 11px; margin-left: 15px">SPT Pembetulan Ke</label>
                                    <input style="width:20px; height: 15px; border: 1px solid;  margin-left: 15px" value="{{ $spt['pembetulan'] }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Isi -->
        <b style="font-size: 8.5px;">PERHATIAN *SEBELUM MENGISI BACALAH PETUNJUK PENGISIAN *ISI DENGAN HURU CETAK/DIKETIK
            DENGAN TINTA HITAM *BERI TANDA X DALAM KOTAK SESUAI PILIHAN</b>

        <!-- Data WP -->
        <div class="col-sm-12" style=" border: 1px solid black; padding: 8px 10px 1px 10px ; height: 80PX; border: 2px solid; margin-left: 10px">
            <div style="display:flex ; flex-direction:row ">
                <div>
                    <label style="font-size: 11px;">NPWP</label>
                </div>
                <div style="margin-left: 319px;">
                    <input class="form-control" type="text" style="width:600px ;border: 1px solid black; height: 30px; border-radius: 1px; " value="{{ $npwp }}" disabled="disabled" id="npwpformulirIV">
                </div>
            </div>
            <div style="display:flex ; flex-direction:row ">
                <div>
                    <label style="font-size: 11px; width: 150px">NAMA WAJIB PAJAK</label>
                </div>
                <div style="margin-left: 200px;">
                    <input class="form-control" type="text" style="width:600px ;border: 1px solid black; height: 30px; border-radius: 1px; " value="{{ $nama }}" disabled="disabled">
                </div>
            </div>
        </div>

        <!-- Data Harta -->
        <p style="font-size: 11px; padding: 10px 0px 0px 0px">BAGIAN A. HARTA PADA AKHIR TAHUN</p>
        @csrf
        <input type="hidden" name="counted" value="{{ count($data_harta)  }}">
        <table id="A_TblHarta" class="display">
            <thead>
                <tr>
                    <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width:25%; height: 30px">
                        KODE HARTA</th>
                    <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width:20%;">
                        NAMA HARTA</th>
                    <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width:20%;">
                        TAHUN PEROLEHAN</th>
                    <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width:20%;">
                        HARGA PEROLEHAN</th>
                    <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width:20%;">
                        KETERANGAN</th>
                </tr>
                @if (count($data_harta) == 0)

                <tr>
                    <td style="border: 1px solid black"><select disabled="disabled" name='harta[]' style="width:100%; height: 28px; border: 1px solid white; font-size:11px">
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
                    <td style="border: 1px solid black;"><input disabled="disabled" name='nama_harta[]' class="text" style="width: 100%; border: 1px solid white;text-align: center;text-transform:uppercase; font-size:11px">
                    </td>
                    <td style="border: 1px solid black;"><input disabled="disabled" name='tahun_perolehan[]' class="text" style="width: 100%; border: 1px solid white;text-align: center; font-size:11px">
                    </td>
                    <td style="border: 1px solid black;"><input disabled="disabled" name='harta_perolehan[]' type="text" oninput="format(this.value)" class="harga_perolehan" style="width: 100%; border: 1px solid white;text-align: center; font-size:11px">
                    </td>
                    <td style="border: 1px solid black;"><input disabled="disabled" name='keterangan[]' class="text" style="width: 100%; border: 1px solid white;text-align: center;text-transform:uppercase; font-size:11px">
                    </td>
                </tr>
                @endif
            </thead>
            <tbody>
                @foreach ( $data_harta as $dh )

                <tr>
                    <td style="border: 1px solid black"><select disabled="disabled" name='harta[]' style="width:100%; height: 28px; border: 1px solid white; font-size:11px">
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
                    <td style="border: 1px solid black;"><input disabled="disabled" name="nama_harta[]" class="text" value="{{ $dh['nama_harta'] }}" style="width: 100%; border: 1px solid white;text-align: center; text-transform:uppercase; font-size:11px">
                    </td>
                    <td style="border: 1px solid black;"><input disabled="disabled" name="tahun_perolehan[]" class="text" value="{{ $dh['tahun_perolehan'] }}" style="width: 100%; border: 1px solid white;text-align: center; font-size:11px">
                    </td>
                    <td style="border: 1px solid black;"><input disabled="disabled" name="harta_perolehan[]" type="text" oninput="format(this.value)" value="{{ $dh['harta_perolehan'] }}" class="harga_perolehan" style="width: 100%; border: 1px solid white;text-align: center; font-size:11px">
                    </td>
                    <td style="border: 1px solid black;"><input disabled="disabled" name="keterangan[]" class="text" value="{{ $dh['keterangan'] }}" style="width: 100%; border: 1px solid white;text-align: center; text-transform:uppercase; font-size:11px">
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <template id="rowTemplateHarta">
            <tr>
                <td style="border: 1px solid black"><select disabled="disabled" name='harta[]' style="width:100%; height: 28px; border: 1px solid white; font-size:11px">
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
                <td style="border: 1px solid black;"><input disabled="disabled" name="nama_harta[]" class="text" style="width: 100%; border: 1px solid white;text-align: center; text-transform:uppercase; font-size:11px">
                </td>
                <td style="border: 1px solid black;"><input disabled="disabled" name="tahun_perolehan[]" class="text" style="width: 100%; border: 1px solid white;text-align: center; font-size:11px">
                </td>
                <td style="border: 1px solid black;"><input disabled="disabled" name="harta_perolehan[]" type="text" oninput="format(this.value)" class="harga_perolehan" style="width: 100%; border: 1px solid white;text-align: center; font-size:11px">
                </td>
                <td style="border: 1px solid black;"><input disabled="disabled" name="keterangan[]" class="text" style="width: 100%; border: 1px solid white;text-align: center; text-transform:uppercase; font-size:11px">
                </td>
            </tr>
        </template>

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

        <!-- Data Utang -->
        <p style="font-size: 11px; padding: 15px 0px 10px 0px">BAGIAN B : KEWAJIBAN/UTANG PADA AKHIR TAHUN</p>
        @csrf
        <input type="hidden" name="counted" value="{{ count($data_utang)  }}">
        <table id="B_TblUtang" class="display" style="width:100%">
            <tr>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width:25%; height: 30px;text-align: center">
                    KODE UTANG</th>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width:20%;text-align: center">
                    NAMA PEMBERI PINJAMAN</th>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width:20%;text-align: center">
                    ALAMAT PEMBERI PINJAMAN</th>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width:20%;text-align: center">
                    TAHUN PEMINJAMAN</th>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width:20%;text-align: center">
                    JUMLAH PINJAMAN</th>
            </tr>
            @if (count($data_utang) == 0)
            <tr>
                <td style="border: 1px solid black"><select disabled="disabled" name='kode_utang[]' style="width: 100%; height: 28px; border: 1px solid white; font-size:11px">
                        <option value='pilih'>Pilih...</option>
                        <option value='101'>101 - Utang Bank/Lembaga Keuangan Bukan Bank (KPR, Leasing Kendaraan
                            Bermotor, dan sejenisnya)</option>
                        <option value='102'>102 - Utang Kartu Kredit</option>
                        <option value='103'>103 - Utang Afiliasi (Pinjaman dari pihak yang memiliki hubungan
                            istimewasebagaimana dimaksud dalam Pasal 18 ayat (4) Undang-UndangPPh)</option>
                        <option value='109'>109 - Utang Lainnya</option>
                    </select></td>
                <td style="border: 1px solid black;"><input disabled="disabled" name='nama_pemberi_pinjaman[]' class="text" style="width: 100%; border: 1px solid white;text-align: center; font-size:11px; text-transform:uppercase">
                </td>
                <td style="border: 1px solid black;"><input disabled="disabled" name='alamat_pemberi_pinjaman[]' class="text" style="width: 100%; border: 1px solid white;text-align: center; font-size:11px; text-transform:uppercase">
                </td>
                <td style="border: 1px solid black;"><input disabled="disabled" name='tahun_pinjaman[]' class="text" style="width: 100%; border: 1px solid white;text-align: center; font-size:11px">
                </td>
                <td style="border: 1px solid black;"><input disabled="disabled" name='jumlah_pinjaman[]' type="text" oninput="format2(this.value)" class="jumlah_pinjaman" style="width: 100%; border: 1px solid white;text-align: center; font-size:11px">
                </td>
            </tr>
            @endif
            <tbody>
                @foreach ( $data_utang as $dh )
                <tr>
                    <td style="border: 1px solid black"><select disabled="disabled" name='kode_utang[]' style="width: 100%; height: 28px; border: 1px solid white; font-size:11px">
                            <option value='pilih'>Pilih...</option>
                            <option value='101' @if ($dh['kode_utang']=="101" ) selected="selected" @endif>101 - Utang Bank/Lembaga Keuangan Bukan Bank (KPR, Leasing Kendaraan
                                Bermotor, dan sejenisnya)</option>
                            <option value='102' @if ($dh['kode_utang']=="102" ) selected="selected" @endif>102 - Utang Kartu Kredit</option>
                            <option value='103' @if ($dh['kode_utang']=="103" ) selected="selected" @endif>103 - Utang Afiliasi (Pinjaman dari pihak yang memiliki hubungan
                                istimewasebagaimana dimaksud dalam Pasal 18 ayat (4) Undang-UndangPPh)</option>
                            <option value='109' @if ($dh['kode_utang']=="109" ) selected="selected" @endif>109 - Utang Lainnya</option>
                        </select></td>
                    <td style="border: 1px solid black;"><input disabled="disabled" name="nama_pemberi_pinjaman[]" class="text" value="{{ $dh['nama_pemberi_pinjaman'] }}" style="width: 100%; border: 1px solid white;text-align: center; font-size:11px; text-transform:uppercase">
                    </td>
                    <td style="border: 1px solid black;"><input disabled="disabled" name="alamat_pemberi_pinjaman[]" class="text" value="{{ $dh['alamat_pemberi_pinjaman'] }}" style="width: 100%; border: 1px solid white;text-align: center; font-size:11px; text-transform:uppercase">
                    </td>
                    <td style="border: 1px solid black;"><input disabled="disabled" name="tahun_pinjaman[]" class="text" value="{{ $dh['tahun_pinjaman'] }}" style="width: 100%; border: 1px solid white;text-align: center; font-size:11px">
                    </td>
                    <td style="border: 1px solid black;"><input disabled="disabled" name="jumlah_pinjaman[]" type="text" oninput="format2(this.value)" class="jumlah_pinjaman" value="{{ $dh['jumlah_pinjaman'] }}" style="width: 100%; border: 1px solid white;text-align: center; font-size:11px">
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div style="padding: 10px;"></div>
        <table>
            <tr>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 670px;  height: 30px">
                    JUMLAH BAGIAN B</th>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 400px; background-color: #F0E68C">
                    <input type="text" class="form-control" disabled="true" readonly="readonly" style="background-color: #F0E68C; text-align: right" name="hasil2" id="hasil2">
                    <input type="hidden" name="form4_id" value="{{ $form4 }}">
                    <input type="hidden" name="formspt" value="{{ $formspt }}">
                </th>
            </tr>
        </table>

        <template id="rowTemplateUtang">
            <tr>
                <td style="border: 1px solid black"><select disabled="disabled" name='kode_utang[]' style="width: 100%; height: 28px; border: 1px solid white; font-size:11px">
                        <option value='pilih'>Pilih...</option>
                        <option value='101'>101 - Utang Bank/Lembaga Keuangan Bukan Bank (KPR, Leasing Kendaraan
                            Bermotor, dan sejenisnya)</option>
                        <option value='102'>102 - Utang Kartu Kredit</option>
                        <option value='103'>103 - Utang Afiliasi (Pinjaman dari pihak yang memiliki hubungan
                            istimewasebagaimana dimaksud dalam Pasal 18 ayat (4) Undang-UndangPPh)</option>
                        <option value='109'>109 - Utang Lainnya</option>
                    </select></td>
                <td style="border: 1px solid black;"><input disabled="disabled" name="nama_pemberi_pinjaman[]" class="text" style="width: 100%; border: 1px solid white;text-align: center; font-size:11px; text-transform:uppercase">
                </td>
                <td style="border: 1px solid black;"><input disabled="disabled" name="alamat_pemberi_pinjaman[]" class="text" style="width: 100%; border: 1px solid white;text-align: center; font-size:11px; text-transform:uppercase">
                </td>
                <td style="border: 1px solid black;"><input disabled="disabled" name="tahun_pinjaman[]" class="text" style="width: 100%; border: 1px solid white;text-align: center; font-size:11px">
                </td>
                <td style="border: 1px solid black;"><input disabled="disabled" name="jumlah_pinjaman[]" type="text" oninput="format2(this.value)" class="jumlah_pinjaman" style="width: 100%; border: 1px solid white;text-align: center; font-size:11px">
                </td>
            </tr>
        </template>

        <!-- Data Keluarga -->
        <p style="font-size: 11px; padding: 15px 0px 10px 0px">BAGIAN C : DAFTAR SUSUNAN ANGGOTA KELUARGA</p>
        @csrf
        <input type="hidden" name="counted" value="{{ count($data_kel)  }}">
        <table id="C_TblKeluarga" class="display" style="width:100%">
            <tr>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 25%;  height: 30px">
                    NAMA ANGGOTA KELUARGA</th>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 25%">
                    NIK</th>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 25%">
                    HUBUNGAN</th>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 25%">
                    PEKERJAAN</th>
            </tr>
            @if (count($data_kel) == 0)
            <tr>
                <td style="border: 1px solid black;"><input disabled="disabled" name="nama_anggota_kel[]" class="text" style="width: 100%; border: 1px solid white; text-align:center; font-size:11px; text-transform:uppercase">
                </td>
                <td style="border: 1px solid black;"><input disabled="disabled" name="nik[]" class="text" style="width: 100%; border: 1px solid white; text-align:center; font-size:11px;" maxlength="16" oninput="formatNpwp()" id="formatnpwp">
                </td>
                <td style="border: 1px solid black;"><input disabled="disabled" name="hubungan[]" class="text" style="width: 100%; border: 1px solid white; text-align:center; font-size:11px; text-transform:uppercase">
                </td>
                <td style="border: 1px solid black;"><input disabled="disabled" name="pekerjaan[]" class="text" style="width: 100%; border: 1px solid white; text-align:center; font-size:11px; text-transform:uppercase">
                </td>
            </tr>
            @endif
            <tbody>
                @foreach ( $data_kel as $dh )
                <tr>
                    <td style="border: 1px solid black;"><input disabled="disabled" name="nama_anggota_kel[]" class="text" value="{{ $dh['nama_anggota_kel'] }}" style="width: 100%; border: 1px solid white; text-align:center; font-size:11px; text-transform:uppercase">
                    </td>
                    <td style="border: 1px solid black;"><input disabled="disabled" name="nik[]" class="text" value="{{ $dh['nik'] }}" style="width: 100%; border: 1px solid white; text-align:center; font-size:11px;" maxlength="16" oninput="formatNpwp()" id="formatnpwp">
                    </td>
                    <td style="border: 1px solid black;"><input disabled="disabled" name="hubungan[]" class="text" value="{{ $dh['hubungan'] }}" style="width: 100%; border: 1px solid white; text-align:center; font-size:11px; text-transform:uppercase">
                    </td>
                    <td style="border: 1px solid black;"><input disabled="disabled" name="pekerjaan[]" class="text" value="{{ $dh['pekerjaan'] }}" style="width: 100%; border: 1px solid white; text-align:center; font-size:11px; text-transform:uppercase">
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <template id="rowTemplateKeluarga">
            <tr>
                <td style="border: 1px solid black;"><input disabled="disabled" name="nama_anggota_kel[]" class="text" style="width: 100%; border: 1px solid white; text-align:center; font-size:11px; text-transform:uppercase">
                </td>
                <td style="border: 1px solid black;"><input disabled="disabled" name="nik[]" class="text" style="width: 100%; border: 1px solid white; text-align:center; font-size:11px;" oninput="formatNpwp(this)" maxlength="16">
                </td>
                <td style="border: 1px solid black;"><input disabled="disabled" name="hubungan[]" class="text" style="width: 100%; border: 1px solid white; text-align:center; font-size:11px; text-transform:uppercase">
                </td>
                <td style="border: 1px solid black;"><input disabled="disabled" name="pekerjaan[]" class="text" style="width: 100%; border: 1px solid white; text-align:center; font-size:11px; text-transform:uppercase">
                </td>
            </tr>
        </template>
    </div>

    <br>
    <div class="pagebreak"> </div>
    <!-- Formulir-III -->
    <div class="container">
        <!-- Header -->
        <div class="row" style="border-bottom: 2px solid black;">
            <div class="col-2 col-md-2 text-center">
                <h4>FORMULIR</h4>
                <h3>1770-III</h3>
                <p style="font-size: 12px;">KEMENTERIAN KEUANGAN <br>RI DIREKTORAT JENDERAL <br> PAJAK</p>
            </div>
            <div class="col-6 col-md-6" style="border-left: 2px solid black; border-right:2px solid black">
                <div class="row">
                    <h5 class="text-center">LAMPIRAN-III</h5>
                    <p style="font-size: 14px; text-align:center; font-weight:bold; border-bottom: 2px solid black">SPT TAHUNAN PPh WAJIB PAJAK ORANG PRIBADI</p>
                </div>
                <div class="row">
                    <b style="font-size: 12px;">* PENGHASILAN YANG DIKENAKAN PAJAK FINAL DAN/ATAU BERSIFAT FINAL</b>
                    <b style="font-size: 12px;">* PENGHASILAN YANG TIDAK TERMASUK OBJEK PAJAK</b>
                    <b style="font-size: 12px;">* PENGHASILAN ISTERI/SUAMI YNG DIKENAKAN PAJAK SECARA TERPISAH</b>
                </div>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col">
                        <table class="table table-bordered border-secondary text-center">
                            <th>{{ mb_substr($spt['tahun'], 0, 1); }}</th>
                            <th>{{ mb_substr($spt['tahun'], 1, 1); }}</th>
                            <th>{{ mb_substr($spt['tahun'], 2, 1); }}</th>
                            <th>{{ mb_substr($spt['tahun'], 3, 1); }}</th>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <table class="table table-bordered border-secondary">
                            <tr>
                                <th>0</th>
                                <th>1</th>
                                <th>{{ mb_substr($spt['tahun'], 2, 1); }}</th>
                                <th>{{ mb_substr($spt['tahun'], 3, 1); }}</th>
                            </tr>
                        </table>
                    </div>
                    <div class="col-2">
                    </div>
                    <div class="col-4">
                        <table class="table table-bordered border-secondary">
                            <tr>
                                <th>1</th>
                                <th>2</th>
                                <th>{{ mb_substr($spt['tahun'], 2, 1); }}</th>
                                <th>{{ mb_substr($spt['tahun'], 3, 1); }}</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="form-check" style="display:inline-block; margin-left: 10px">
                    <input style="display:inline;" class="form-check-input" type="radio" name="" id="flexRadioDisabled" value="pembukuan" <?= ($spt->jenis_pelaporan  == 'pembukuan') ? 'checked' : '' ?> disabled>
                    <label class="form-check-label" for="flexRadioDisabled" style="font-size: 14px;">
                        Pembukuan
                    </label>
                </div>
                <div class="form-check" style="display:inline-block; margin-left: 10px">
                    <input class="form-check-input" type="radio" name="" id="flexRadioCheckedDisabled" value="pencatatan" <?= ($spt->jenis_pelaporan  == 'pencatatan') ? 'checked' : '' ?> disabled>
                    <label class="form-check-label" for="flexRadioCheckedDisabled" style="font-size: 14px;">
                        Pencatatan
                    </label>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div>
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <label style="font-size: 11px; margin-left: 15px">SPT Pembetulan Ke</label>
                                    <input style="width:20px; height: 15px; border: 1px solid;  margin-left: 15px" value="{{ $spt['pembetulan'] }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Isi -->
        <b style="font-size: 8.5px;">PERHATIAN *SEBELUM MENGISI BACALAH PETUNJUK PENGISIAN *ISI DENGAN HURU CETAK/DIKETIK
            DENGAN TINTA HITAM *BERI TANDA X DALAM KOTAK SESUAI PILIHAN</b>

        <!-- Data WP -->
        <div class="col-sm-12" style=" border: 1px solid black; padding: 8px 10px 1px 10px ; height: 80PX; border: 2px solid; margin-left: 10px">
            <div style="display:flex ; flex-direction:row ">
                <div>
                    <label style="font-size: 11px;">NPWP</label>
                </div>
                <div style="margin-left: 319px;">
                    <input class="form-control" type="text" style="width:600px ;border: 1px solid black; height: 30px; border-radius: 1px; " value="{{ $npwp }}" disabled="disabled" id="npwpformulirIII">
                </div>
            </div>
            <div style="display:flex ; flex-direction:row ">
                <div>
                    <label style="font-size: 11px; width: 150px">NAMA WAJIB PAJAK</label>
                </div>
                <div style="margin-left: 200px;">
                    <input class="form-control" type="text" style="width:600px ;border: 1px solid black; height: 30px; border-radius: 1px; " value="{{ $nama }}" disabled="disabled">
                </div>
            </div>
        </div>

        <!-- Bagian A -->
        <p style="font-size: 11px; padding: 10px 0px 0px 0px">BAGIAN A. PENGHASILAN YANG DIKENAKAN PAJAK FINAL DAN/ATAU BERSIFAT FINAL</p>
        <table id="#mytable" class="display" style="width:100%">

            <tr>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 4%;  height: 30px">NO.</th>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 35%">JENIS PENGHASILAN</th>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 30%">DASAR PENGENAAN PAJAK/PENGHASILAN BRUTO</th>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 30%">PPh TERUTANG (Rupiah)</th>
            </tr>
            <tr>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 10px; height: 20px">(1)</td>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 10px; height: 20px">(2)</td>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 10px; height: 20px">(3)</td>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 10px; height: 20px">(4)</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center">1.</td>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold">BUNGA DEPOSITO, TABUNGAN, DISKONTO SBI, SURAT BERHARGA NEGARA</td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" value="{{ $formulir_iiia[0]->rupiah_dsrPengenaan_PajakA ?? '' }}" style="text-align: right; border: 1px solid white" oninput="formatPajakFinal()" name="pengenaan_pajak1" id="pengenaan_pajak1" placeholder="0" disabled></td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" value="{{ $formulir_iiia[0]->rupiah_PPh_terutang ?? '' }}" style="text-align: right; border: 1px solid white" oninput="formatJnsPenghasilan1()" name="pph_terutang1" id="pph_terutang1" placeholder="0" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center">2.</td>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold">BUNGA/DISKONTO OBLIGASI</td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" value="{{ $formulir_iiia[1]->rupiah_dsrPengenaan_PajakA ?? '' }}" style="text-align: right; border: 1px solid white" oninput="formatPajakFinal(this.value)" name="pengenaan_pajak2" id="pengenaan_pajak2" placeholder="0" disabled></td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" value="{{ $formulir_iiia[1]->rupiah_PPh_terutang ?? '' }}" style="text-align: right; border: 1px solid white" oninput="formatJnsPenghasilan2()" name="pph_terutang2" id="pph_terutang2" placeholder="0" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center">3.</td>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold">PENJUALAN SAHAM DI BURSA EFEK</td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" value="{{ $formulir_iiia[2]->rupiah_dsrPengenaan_PajakA ?? '' }}" style="text-align: right; border: 1px solid white" oninput="formatPajakFinal(this.value)" name="pengenaan_pajak3" id="pengenaan_pajak3" placeholder="0" disabled></td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" value="{{ $formulir_iiia[2]->rupiah_PPh_terutang ?? '' }}" style="text-align: right; border: 1px solid white" oninput="formatJnsPenghasilan3(this.value)" name="pph_terutang3" id="pph_terutang3" placeholder="0" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center">4.</td>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold">HADIAH UNDIAN</td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" value="{{ $formulir_iiia[3]->rupiah_dsrPengenaan_PajakA ?? '' }}" style="text-align: right; border: 1px solid white" oninput="formatPajakFinal(this.value)" name="pengenaan_pajak4" id="pengenaan_pajak4" placeholder="0" disabled></td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" value="{{ $formulir_iiia[3]->rupiah_PPh_terutang ?? '' }}" style="text-align: right; border: 1px solid white" oninput="formatJnsPenghasilan4(this.value)" name="pph_terutang4" id="pph_terutang4" placeholder="0" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center">5.</td>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold">PESANGON, TUNJANGAN HARI TUA DAN TEBUSAN PENSIUN YANG DIBAYAR SEKALIGUS</td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" value="{{ $formulir_iiia[4]->rupiah_dsrPengenaan_PajakA ?? '' }}" style="text-align: right; border: 1px solid white" oninput="formatPajakFinal(this.value)" name="pengenaan_pajak5" id="pengenaan_pajak5" placeholder="0" disabled></td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" value="{{ $formulir_iiia[4]->rupiah_PPh_terutang ?? '' }}" style="text-align: right; border: 1px solid white" oninput="formatJnsPenghasilan5(this.value)" name="pph_terutang5" id="pph_terutang5" placeholder="0" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center">6.</td>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold">HONORARIUM ATAS BEBAN APBN / APBD</td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" value="{{ $formulir_iiia[5]->rupiah_dsrPengenaan_PajakA ?? '' }}" style="text-align: right; border: 1px solid white" oninput="formatPajakFinal(this.value)" name="pengenaan_pajak6" id="pengenaan_pajak6" placeholder="0" disabled></td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" value="{{ $formulir_iiia[5]->rupiah_PPh_terutang ?? '' }}" style="text-align: right; border: 1px solid white" oninput="formatJnsPenghasilan6(this.value)" name="pph_terutang6" id="pph_terutang6" placeholder="0" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center">7.</td>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold">PENGALIHAN HAK ATAS TANAH DAN/ATAU BANGUNAN</td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" value="{{ $formulir_iiia[6]->rupiah_dsrPengenaan_PajakA ?? '' }}" style="text-align: right; border: 1px solid white" oninput="formatPajakFinal(this.value)" name="pengenaan_pajak7" id="pengenaan_pajak7" placeholder="0" disabled></td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" value="{{ $formulir_iiia[6]->rupiah_PPh_terutang ?? '' }}" style="text-align: right; border: 1px solid white" oninput="formatJnsPenghasilan7(this.value)" name="pph_terutang7" id="pph_terutang7" placeholder="0" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center">8.</td>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold">BANGUNAN YANG DITERIMA DALAM RANGKA BANGUNAN GUNA SERAH</td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" value="{{ $formulir_iiia[7]->rupiah_dsrPengenaan_PajakA ?? '' }}" style="text-align: right; border: 1px solid white" oninput="formatPajakFinal(this.value)" name="pengenaan_pajak8" id="pengenaan_pajak8" placeholder="0" disabled></td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" value="{{ $formulir_iiia[7]->rupiah_PPh_terutang ?? '' }}" style="text-align: right; border: 1px solid white" oninput="formatJnsPenghasilan8(this.value)" name="pph_terutang8" id="pph_terutang8" placeholder="0" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center">9.</td>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold">SEWA ATAS TANAH DAN/ATAU BANGUNAN</td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" value="{{ $formulir_iiia[8]->rupiah_dsrPengenaan_PajakA ?? '' }}" style="text-align: right; border: 1px solid white" oninput="formatPajakFinal(this.value)" name="pengenaan_pajak9" id="pengenaan_pajak9" placeholder="0" disabled></td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" value="{{ $formulir_iiia[8]->rupiah_PPh_terutang ?? '' }}" style="text-align: right; border: 1px solid white" oninput="formatJnsPenghasilan9(this.value)" name="pph_terutang9" id="pph_terutang9" placeholder="0" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center">10.</td>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold">USAHA JASA KONSTRUKSI</td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" value="{{ $formulir_iiia[9]->rupiah_dsrPengenaan_PajakA ?? '' }}" style="text-align: right; border: 1px solid white" oninput="formatPajakFinal(this.value)" name="pengenaan_pajak10" id="pengenaan_pajak10" placeholder="0" disabled></td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" value="{{ $formulir_iiia[9]->rupiah_PPh_terutang ?? '' }}" style="text-align: right; border: 1px solid white" oninput="formatJnsPenghasilan10(this.value)" name="pph_terutang10" id="pph_terutang10" placeholder="0" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center">11.</td>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold">PENYALUR/DEALER/AGEN PRODUK BBM</td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" value="{{ $formulir_iiia[10]->rupiah_dsrPengenaan_PajakA ?? '' }}" style="text-align: right; border: 1px solid white" oninput="formatPajakFinal(this.value)" name="pengenaan_pajak11" id="pengenaan_pajak11" placeholder="0" disabled></td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" value="{{ $formulir_iiia[10]->rupiah_PPh_terutang ?? '' }}" style="text-align: right; border: 1px solid white" oninput="formatJnsPenghasilan11(this.value)" name="pph_terutang11" id="pph_terutang11" placeholder="0" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center">12.</td>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold">BUNGA SIMPANAN YANG DIBAYARKAN OLEH KOPERASI KEPADA ANGGOTA KOPERASI</td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" value="{{ $formulir_iiia[11]->rupiah_dsrPengenaan_PajakA ?? '' }}" style="text-align: right; border: 1px solid white" oninput="formatPajakFinal(this.value)" name="pengenaan_pajak12" id="pengenaan_pajak12" placeholder="0" disabled></td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" value="{{ $formulir_iiia[11]->rupiah_PPh_terutang ?? '' }}" style="text-align: right; border: 1px solid white" oninput="formatJnsPenghasilan12(this.value)" name="pph_terutang12" id="pph_terutang12" placeholder="0" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center">13.</td>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold">PENGHASILAN DARI TRANSAKSI DERIVATIF</td>
                <td style="border: 1px solid black; background-color: #C0C0C0; height: 40px"></td>
                <td style="border: 1px solid black; background-color: #C0C0C0; height: 40px"></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center">14.</td>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold">DIVIDEN</td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" value="{{ $formulir_iiia[12]->rupiah_dsrPengenaan_PajakA ?? '' }}" style="text-align: right; border: 1px solid white" oninput="formatPajakFinal(this.value)" name="pengenaan_pajak14" id="pengenaan_pajak14" placeholder="0" disabled></td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" value="{{ $formulir_iiia[12]->rupiah_PPh_terutang ?? '' }}" style="text-align: right; border: 1px solid white" oninput="formatJnsPenghasilan14(this.value)" name="pph_terutang14" id="pph_terutang14" placeholder="0" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center">15.</td>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold">PENGHASILAN ISTERI DARU SATU PEMBERI KERJA</td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" value="{{ $formulir_iiia[13]->rupiah_dsrPengenaan_PajakA ?? '' }}" style="text-align: right; border: 1px solid white" oninput="formatPajakFinal(this.value)" name="pengenaan_pajak15" id="pengenaan_pajak15" placeholder="0" disabled></td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" value="{{ $formulir_iiia[13]->rupiah_PPh_terutang ?? '' }}" style="text-align: right; border: 1px solid white" oninput="formatJnsPenghasilan15(this.value)" name="pph_terutang15" id="pph_terutang15" placeholder="0" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center">16.</td>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold">PENGHASILAN LAIN YANG DIKENAKAN PAJAK FINAL DAN/ATAU BERSIFAT FINAL
                    <input type="checkbox" id="pembetulan2" aria-label="Checkbox for following text input" style="width: 20px;" disabled>
                    <label for="exampleFormControlInput1" class="form-label">PP46/23</label>
                </td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" value="{{ $formulir_iiia[14]->rupiah_dsrPengenaan_PajakA ?? '' }}" style="text-align: right; border: 1px solid white" oninput="formatPajakFinal(this.value)" name="pengenaan_pajak16" id="pengenaan_pajak16" placeholder="0" disabled></td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" value="{{ $formulir_iiia[14]->rupiah_PPh_terutang ?? '' }}" style="text-align: right; border: 1px solid white" oninput="formatJnsPenghasilan16(this.value)" name="pph_terutang16" id="pph_terutang16" placeholder="0" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 10px; height: 30px; margin-left: -1px; margin-top: -2px">17.</td>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; width: 10px; height: 30px; margin-left: -1px; margin-top: -2px">JUMLAH (1 s.d. 16)</td>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; width: 10px; height: 30px; margin-left: -1px; margin-top: -2px; background-color: #C0C0C0;"></td>
                <td style="border: 1px solid black; background-color: #F0E68C;"><input type="text" class="form-control" readonly="readonly" style="background-color: #F0E68C; text-align: right" name="JmlhPPhTerutang" id="JmlhPPhTerutang"></td>
            </tr>
        </table>
        <button style="display:none" type="button" onclick="BagianA(this)">Simpan</button>

        <div class="pagebreak"> </div>

        <!-- Bagian B -->
        <p style=" font-size: 11px; padding: 10px 0px 0px 0px">BAGIAN B. PENGHASILAN YANG TIDAK TERMASUK OBJEK PAJAK</p>
        <table id="#mytable" class="display" style="width:100%">
            <tr>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 4%;  height: 30px">NO.</th>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 50%">JENIS PENGHASILAN</th>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 50%">DASAR PENGENAAN PAJAK/PENGHASILAN BRUTO</th>
            </tr>
            <tr>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 4%; height: 20px">(1)</td>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 50%; height: 20px">(2)</td>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 50%; height: 20px">(3)</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 4%;  height: 30px">1.</td>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; width: 50%">BANTUAN / SUMBANGAN / HIBAH</td>
                <td style="border: 1px solid black;"><input value="{{ $formulir_iiib[0]->rupiah_dsrPengenaan_PajakB ?? '' }}" type="text" class="form-control" style="text-align: right; width: 100%; border: 1px solid white" oninput="format1(this.value)" name="bantuansumbanganhibah" id="bantuansumbanganhibah" placeholder="0" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 4%;  height: 30px">2.</td>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; width: 50%">WARISAN</td>
                <td style="border: 1px solid black;"><input value="{{ $formulir_iiib[1]->rupiah_dsrPengenaan_PajakB ?? '' }}" type="text" class="form-control" style="text-align: right; width: 100%; border: 1px solid white" oninput="format1(this.value)" name="warisan" id="warisan" placeholder="0" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 4%;  height: 30px">3.</td>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; width: 50%">BAGIAN LABA ANGGOTA PERSEOROAN KOMANDITER TIDAK ATAS SAHAM, PERSEKUTUAN,
                    PERKUMPULAN, FIRMA, KONGSI</td>
                <td style="border: 1px solid black;"><input value="{{ $formulir_iiib[2]->rupiah_dsrPengenaan_PajakB ?? '' }}" type="text" class="form-control" style="text-align: right; width: 100%; border: 1px solid white" oninput="format1(this.value)" name="bagianlaba" id="bagianlaba" placeholder="0" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 4%;  height: 30px">4.</td>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; width: 50%">KLAIM ASURANSI KESEHATAN, KECELAKAAN, JIWA, DWIGUNA, BEASISWA</td>
                <td style="border: 1px solid black;"><input value="{{ $formulir_iiib[3]->rupiah_dsrPengenaan_PajakB ?? '' }}" type="text" class="form-control" style="text-align: right; width: 100%; border: 1px solid white" oninput="format1(this.value)" name="klaimasuransi" id="klaimasuransi" placeholder="0" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 4%;  height: 30px">5.</td>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; width: 50%">BEASISWA</td>
                <td style="border: 1px solid black;"><input value="{{ $formulir_iiib[4]->rupiah_dsrPengenaan_PajakB ?? '' }}" type="text" class="form-control" style="text-align: right; width: 100%; border: 1px solid white" oninput="format1(this.value)" name="beasiswa" id="beasiswa" placeholder="0" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 4%;  height: 30px">6.</td>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; width: 50%">PENGHASILAN LAIN YANG TIDAK TERMASUK OBJEK PAJAK</td>
                <td style="border: 1px solid black;"><input value="{{ $formulir_iiib[5]->rupiah_dsrPengenaan_PajakB ?? '' }}" type="text" class="form-control" style="text-align: right; width: 100%; border: 1px solid white" oninput="format1(this.value)" name="penghasilanlain" id="penghasilanlain" placeholder="0" disabled></td>

            </tr>
            <tr>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 20px;  height: 30px"></td>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; width: 250px">JUMLAH BAGIAN B</td>
                <td style="border: 1px solid black; background-color: #F0E68C;"><input type="text" class="form-control" disabled="true" readonly="readonly" style="background-color: #F0E68C; text-align: right" name="JmlhDasarPengenaanBruto" id="JmlhDasarPengenaanBruto"></td>

            </tr>
        </table>

        <!-- Bagian C -->
        <p style="font-size: 11px; padding: 10px 0px 0px 0px">BAGIAN C. PENGHASILAN ISTERI/SUAMI YANG DIKENAKAN PAJAK SECARA TERPISAH</p>
        <table id="#mytable" class="display" style="width:100%">
            <tr>
                <td style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 54%; height: 30px">PENGHASILAN NETO ISTERI/SUAMI YANG DIKENAKAN PAJAK SECARA TERPISAH</td>
                <td style="border: 1px solid black;"><input value="{{ $formulir_iiic[0]->rupiah_dsrPengenaan_PajakC ?? '' }}" class="form-control" style="text-align: right; width: 100%; border: 1px solid white" placeholder="0" oninput="format2(this.value)" name="pajak_terpisah" id="pajak_terpisah" disabled>
                </td>
            </tr>
        </table>

    </div>

    <br>
    <div class="pagebreak"> </div>
    <!-- PP46/23 -->
    <div class="container">
        <p style="text-align:center; font-weight:bold">DAFTAR JUMLAH PENGHASILAN BRUTO DAN PEMBAYARAN PPh FINAL BERDASARKAN PP 46 TAHUN 2013 DAN ATAU PP 23 TAHUN 2018
            PER MASA PAJAK SERTA DARI MASING-MASING TEMPAT USAHA

            <!-- Data WP -->
        <div class="col-sm-12" style=" border: 1px solid black; padding: 8px 10px 1px 10px ; height: 80PX; border: 2px solid; margin-left: 10px">
            <div style="display:flex ; flex-direction:row ">
                <div>
                    <label style="font-size: 11px;">NPWP</label>
                </div>
                <div style="margin-left: 319px;">
                    <input class="form-control" type="text" style="width:600px ;border: 1px solid black; height: 30px; border-radius: 1px; " value="{{ $npwp }}" disabled="disabled" id="npwpPP4623">
                </div>
            </div>
            <div style="display:flex ; flex-direction:row ">
                <div>
                    <label style="font-size: 11px; width: 150px">NAMA WAJIB PAJAK</label>
                </div>
                <div style="margin-left: 200px;">
                    <input class="form-control" type="text" style="width:600px ;border: 1px solid black; height: 30px; border-radius: 1px; " value="{{ $nama }}" disabled="disabled">
                </div>
            </div>
        </div>

        <!-- data tabel -->
        @csrf
        <input type="hidden" name="counted" value="{{ count($datadaftarpp4623)  }}">
        <table id="PP46_23" class="display" style="width:100%">
            <tr>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 20%;  height: 30px">
                    NPWP</th>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 20%">
                    MASA PAJAK</th>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 20%">
                    ALAMAT</th>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 20%">
                    PEREDARAN BRUTO</th>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 20%">
                    JUMLAH PPh FINAL YANG DIBAYAR</th>
            </tr>
            @if (count($datadaftarpp4623) == 0)
            <tr>
                <td style="border: 1px solid black;"><input disabled="disabled" name="npwp[]" type="text" style="border: 1px solid white; font-size: 14px; text-align: center; width: 100%; height: 30px" maxlength="20" oninput="formatNpwp2(this)" id="formatnpwpfix"></td>
                <td style="border: 1px solid black;"><select disabled="disabled" name='masa_pajak[]' style="width:100%; height:30px; border: 1px solid white">
                        <option value='pilih'>Pilih...</option>
                        <option value='1'>Januari</option>
                        <option value='2'>Februari</option>
                        <option value='3'>Maret</option>
                        <option value='4'>April</option>
                        <option value='5'>Mei</option>
                        <option value='6'>Juni</option>
                        <option value='7'>Juli</option>
                        <option value='8'>Agustus</option>
                        <option value='9'>September</option>
                        <option value='10'>Oktober</option>
                        <option value='11'>November</option>
                        <option value='12'>Desember</option>

                    </select> </td>
                <td style="border: 1px solid black;"><input disabled="disabled" name="alamat[]" type="text" style="border: 1px solid white; font-size: 14px; width:100%; height: 30px; text-align:center; text-transform:uppercase"></td>
                <td style="border: 1px solid black;"><input disabled="disabled" name="peredaran_bruto[]" type="text" style="border: 1px solid white; font-size: 14px; text-align: center; width:100%; height: 30px" oninput="formatperedaranbruto(this.value)" class="peredaranbruto"></td>
                <td style="border: 1px solid black;"><input disabled="disabled" name="jumlahPPhFinal_dibayar[]" type="text" style="border: 1px solid white; font-size: 14px; text-align: center; width:100%; height: 30px" oninput="formatJmlPPhFinalDibayar(this.value)" class="jumlahPPhFinalYangDibayar"></td>
            </tr>
            @endif
            <tbody>
                @foreach ( $datadaftarpp4623 as $dh )
                <tr>
                    <td style="border: 1px solid black;"><input disabled="disabled" name="npwp[]" type="text" value="{{ $dh['npwp'] }}" style="border: 1px solid white; font-size: 14px; text-align: center; width: 100%; height: 30px" maxlength="20" oninput="formatNpwp2(this)" id="formatnpwpfix"></td>
                    <td style="border: 1px solid black;"><select disabled="disabled" name='masa_pajak[]' style="width:100%; height:30px; border: 1px solid white">
                            <option value='pilih'>Pilih...</option>
                            <option value='1' @if ($dh['masa_pajak']=="1" ) selected="selected" @endif>Januari</option>
                            <option value='2' @if ($dh['masa_pajak']=="2" ) selected="selected" @endif>Februari</option>
                            <option value='3' @if ($dh['masa_pajak']=="3" ) selected="selected" @endif>Maret</option>
                            <option value='4' @if ($dh['masa_pajak']=="4" ) selected="selected" @endif>April</option>
                            <option value='5' @if ($dh['masa_pajak']=="5" ) selected="selected" @endif>Mei</option>
                            <option value='6' @if ($dh['masa_pajak']=="6" ) selected="selected" @endif>Juni</option>
                            <option value='7' @if ($dh['masa_pajak']=="7" ) selected="selected" @endif>Juli</option>
                            <option value='8' @if ($dh['masa_pajak']=="8" ) selected="selected" @endif>Agustus</option>
                            <option value='9' @if ($dh['masa_pajak']=="9" ) selected="selected" @endif>September</option>
                            <option value='10' @if ($dh['masa_pajak']=="10" ) selected="selected" @endif>Oktober</option>
                            <option value='11' @if ($dh['masa_pajak']=="11" ) selected="selected" @endif>November</option>
                            <option value='12' @if ($dh['masa_pajak']=="12" ) selected="selected" @endif>Desember</option>

                        </select> </td>
                    <td style="border: 1px solid black;"><input disabled="disabled" name="alamat[]" type="text" value="{{ $dh['alamat'] }}" style="border: 1px solid white; font-size: 14px; text-align:center; width:100%; height: 30px; text-transform:uppercase"></td>
                    <td style="border: 1px solid black;"><input disabled="disabled" name="peredaran_bruto[]" type="text" value="{{ $dh['peredaran_bruto'] }}" style="border: 1px solid white; font-size: 14px; text-align: center; width:100%; height: 30px" oninput="formatperedaranbruto(this.value)" class="peredaranbruto"></td>
                    <td style="border: 1px solid black;"><input disabled="disabled" name="jumlahPPhFinal_dibayar[]" type="text" value="{{ $dh['jumlahPPhFinal_dibayar'] }}" style="border: 1px solid white; font-size: 14px; text-align: center; width:100%; height: 30px" oninput="formatJmlPPhFinalDibayar(this.value)" class="jumlahPPhFinalYangDibayar"></td>
                </tr>
                @endforeach
            </tbody>
            </br>
        </table>
        <div style="padding: 10px;"></div>
        <table>
            <tr>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 670px;  height: 30px">PEREDARAN BRUTO</th>
                <th style="background-color: #F0E68C; border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 400px">
                    <input type="text" class="form-control" disabled="true" readonly="readonly" style="background-color: #F0E68C; text-align: right; height:30px" name="hasilPbruto" id="hasilPbruto">
                </th>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 400px">JUMLAH PPh FINAL YANG DIBAYAR</th>
                <th style="background-color: #F0E68C; border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 400px">
                    <input type="text" class="form-control" disabled="true" readonly="readonly" style="background-color: #F0E68C; text-align: right; height:30px" name="hasilPPhFinal" id="hasilPPhFinal">
                    <input type="hidden" name="pp4623_id" value="{{ $pp4623 }}">
                    <input type="hidden" name="formspt" value="{{ $spt->id }}">
                </th>
            </tr>
        </table>
        <template id="rowTemplatePP46_23">
            <tr>
                <td style="border: 1px solid black;"><input disabled="disabled" name="npwp[]" type="text" style="border: 1px solid white; font-size: 14px; text-align: center; width: 100%; height: 30px" maxlength="20" oninput="formatNpwp2(this)" id="formatnpwpfix"></td>
                <td style="border: 1px solid black;"><select disabled="disabled" name='masa_pajak[]' style="width:100%; height:30px; border: 1px solid white">
                        <option value='pilih'>Pilih...</option>
                        <option value='1'>Januari</option>
                        <option value='2'>Februari</option>
                        <option value='3'>Maret</option>
                        <option value='4'>April</option>
                        <option value='5'>Mei</option>
                        <option value='6'>Juni</option>
                        <option value='7'>Juli</option>
                        <option value='8'>Agustus</option>
                        <option value='9'>September</option>
                        <option value='10'>Oktober</option>
                        <option value='11'>November</option>
                        <option value='12'>Desember</option>

                    </select></td>
                <td style="border: 1px solid black;"><input disabled="disabled" name="alamat[]" type="text" style="border: 1px solid white; font-size: 14px; text-align:center; width:100%; height: 30px; text-transform:uppercase"></td>
                <td style="border: 1px solid black;"><input disabled="disabled" name="peredaran_bruto[]" type="text" style="border: 1px solid white; font-size: 14px; text-align: center; width:100%; height: 30px" oninput="formatperedaranbruto(this.value)" class="peredaranbruto"></td>
                <td style="border: 1px solid black;"><input disabled="disabled" name="jumlahPPhFinal_dibayar[]" type="text" style="border: 1px solid white; font-size: 14px; text-align: center; width:100%; height: 30px" oninput="formatJmlPPhFinalDibayar(this.value)" class="jumlahPPhFinalYangDibayar"></td>
            </tr>
        </template>

    </div>

    <br>
    <div class="pagebreak"> </div>
    <!-- Formulir-II -->
    <div class="container">
        <!-- Header -->
        <div class="row" style="border-bottom: 2px solid black;">
            <div class="col-2 col-md-2 text-center">
                <h4>FORMULIR</h4>
                <h3>1770-II</h3>
                <p style="font-size: 12px;">KEMENTERIAN KEUANGAN <br>RI DIREKTORAT JENDERAL <br> PAJAK</p>
            </div>
            <div class="col-6 col-md-6" style="border-left: 2px solid black; border-right:2px solid black">
                <div class="row">
                    <h5 class="text-center">LAMPIRAN-II</h5>
                    <p style="font-size: 14px; text-align:center; font-weight:bold; border-bottom: 2px solid black">SPT TAHUNAN PPh WAJIB PAJAK ORANG PRIBADI</p>
                </div>
                <div class="row" style="font-size: 11px; text-align: center">
                    <b>DAFTAR PEMOTONGAN PEMUNGUTAN PPh OLEH PIHAK LAIN,</b>
                    <b>PPh YANG DIBAYAR/DIPOTONG DI LUAR NEGERI DAN</b>
                    <b>PPh DITANGGUNG PEMERINTAH</b>
                </div>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col">
                        <table class="table table-bordered border-secondary text-center">
                            <th>{{ mb_substr($spt['tahun'], 0, 1); }}</th>
                            <th>{{ mb_substr($spt['tahun'], 1, 1); }}</th>
                            <th>{{ mb_substr($spt['tahun'], 2, 1); }}</th>
                            <th>{{ mb_substr($spt['tahun'], 3, 1); }}</th>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <table class="table table-bordered border-secondary">
                            <tr>
                                <th>0</th>
                                <th>1</th>
                                <th>{{ mb_substr($spt['tahun'], 2, 1); }}</th>
                                <th>{{ mb_substr($spt['tahun'], 3, 1); }}</th>
                            </tr>
                        </table>
                    </div>
                    <div class="col-2">
                    </div>
                    <div class="col-4">
                        <table class="table table-bordered border-secondary">
                            <tr>
                                <th>1</th>
                                <th>2</th>
                                <th>{{ mb_substr($spt['tahun'], 2, 1); }}</th>
                                <th>{{ mb_substr($spt['tahun'], 3, 1); }}</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="form-check" style="display:inline-block; margin-left: 10px">
                    <input style="display:inline;" class="form-check-input" type="radio" name="" id="flexRadioDisabled" value="pembukuan" <?= ($spt->jenis_pelaporan  == 'pembukuan') ? 'checked' : '' ?> disabled>
                    <label class="form-check-label" for="flexRadioDisabled" style="font-size: 14px;">
                        Pembukuan
                    </label>
                </div>
                <div class="form-check" style="display:inline-block; margin-left: 10px">
                    <input class="form-check-input" type="radio" name="" id="flexRadioCheckedDisabled" value="pencatatan" <?= ($spt->jenis_pelaporan  == 'pencatatan') ? 'checked' : '' ?> disabled>
                    <label class="form-check-label" for="flexRadioCheckedDisabled" style="font-size: 14px;">
                        Pencatatan
                    </label>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div>
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <label style="font-size: 11px; margin-left: 15px">SPT Pembetulan Ke</label>
                                    <input style="width:20px; height: 15px; border: 1px solid;  margin-left: 15px" value="{{ $spt['pembetulan'] }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- Isi -->
        <b style="font-size: 8.5px;">PERHATIAN *SEBELUM MENGISI BACALAH PETUNJUK PENGISIAN *ISI DENGAN HURU CETAK/DIKETIK
            DENGAN TINTA HITAM *BERI TANDA X DALAM KOTAK SESUAI PILIHAN</b>

        <!-- Data WP -->
        <div class="col-sm-12" style=" border: 1px solid black; padding: 8px 10px 1px 10px ; height: 80PX; border: 2px solid; margin-left: 10px">
            <div style="display:flex ; flex-direction:row ">
                <div>
                    <label style="font-size: 11px;">NPWP</label>
                </div>
                <div style="margin-left: 319px;">
                    <input class="form-control" type="text" style="width:600px ;border: 1px solid black; height: 30px; border-radius: 1px; " value="{{ $npwp }}" disabled="disabled" id="npwpformulirII">
                </div>
            </div>
            <div style="display:flex ; flex-direction:row ">
                <div>
                    <label style="font-size: 11px; width: 150px">NAMA WAJIB PAJAK</label>
                </div>
                <div style="margin-left: 200px;">
                    <input class="form-control" type="text" style="width:600px ;border: 1px solid black; height: 30px; border-radius: 1px; " value="{{ $nama }}" disabled="disabled">
                </div>
            </div>
        </div>

        <!-- Data Tabel -->
        <p style="font-size: 11px; padding: 10px 0px 0px 0px">BAGIAN A : DAFTAR PEMOTONGAN/PEMUNGUTAN PPh OLEH PIHAK LAIN,
            PPh YANG DIBAYAR/DIPOTONG DI LUAR NEGERI DAN PPh DITANGGUNG PEMERINTAH</p>

        @csrf
        <input type="hidden" name="counted" value="{{ count($data_potong_pungut)  }}">
        <table id="BagianA" class="display">
            <tr>
                <th style="border: 1px solid black; font-size: 11px; font-weight: bold; text-align: center; width: 5%; height: 30px">
                    <br>NO <br> <br>(1)
                </th>
                <th style="border: 1px solid black; font-size: 11px; font-weight: bold; text-align: center; width: 15%">
                    NAMA</br>PEMOTONG/</br>PEMUNGUT PAJAK <br> (2)</th>
                <th style="border: 1px solid black; font-size: 11px; font-weight: bold; text-align: center; width: 25%">
                    NPWP</br>PEMOTONG/</br>PEMUNGUT PAJAK <br>(3)</th>
                <th style="border: 1px solid black; font-size: 11px; font-weight: bold; text-align: center; width: 15%">
                    NOMOR</br>BUKTI</br>PEMOTONGAN <br>(4)</th>
                <th style="border: 1px solid black; font-size: 11px; font-weight: bold; text-align: center; width: 10%">
                    TANGGAL</br>BUKTI</br>PEMOTONGAN <br>(5)</th>
                <th style="border: 1px solid black; font-size: 11px; font-weight: bold; text-align: center; width: 15%">
                    JENIS PAJAK :</br>PPh PASAL</br>21/22/23/26DTP <br>(6)</th>
                <th style="border: 1px solid black; font-size: 11px; font-weight: bold; text-align: center; width: 20%">
                    JUMLAH PPh</br>YANG DIPOTONG/</br>DIPUNGUT <br>(7)</th>
            </tr>
            @if (count($data_potong_pungut) == 0)
            <tr>
                <td style="border: 1px solid black; width: 5%; text-align:center">1</td>
                <td style="border: 1px solid black"><input name="nama_pemotong[]" type="text" class="form-control" style="border: 1px solid white; width: 100%; font-size: 11px; text-transform:uppercase" disabled></td>
                <td style="border: 1px solid black;"><input name="npwp_pemotong[]" type="text" class="form-control" style="border: 1px solid white; width: 100%; font-size: 11px" maxlength="20" oninput="formatNpwp(this)" id="formatnpwp" disabled></td>
                <td style="border: 1px solid black;"><input name="nomor_bupot[]" type="text" class="form-control" style="border: 1px solid white; width: 100%; font-size: 11px; text-transform:uppercase" disabled></td>
                <td style="border: 1px solid black;"><input name="tgl_bupot[]" type="date" class="form-control" style="border: 1px solid white; width: 100%; font-size: 11px;" disabled></td>
                <td style="border: 1px solid black;"><select name='jenis_pajak[]' style="width:100%; height:30px; border: 1px solid white; font-size: 11px;" disabled>
                        <option value='pilih'>Pilih...</option>
                        <option value='21'>Pasal 21</option>
                        <option value='22'>Pasal 22</option>
                        <option value='23'>Pasal 23</option>
                        <option value='24'>Pasal 24</option>
                        <option value='26'>Pasal 26</option>
                        <option value='DTP'>Pasal DTP</option>
                    </select> </td>
                <td style="border: 1px solid black;"><input name="jumlahPPh_potong[]" class="jumlahpph" type="text" class="form-control" style="border: 1px solid white; width: 100%; text-align: right; font-size: 11px;" oninput="formatJmlPPhDipotongDipungut(this.value)" name="jumlahPPh" placeholder="0" disabled></td>
            </tr>
            @endif
            <tbody>
                <?php $i = 0; ?>
                @foreach ( $data_potong_pungut as $dh )
                <tr>
                    <td style="border: 1px solid black; width: 5%; text-align:center"><?= $i += 1 ?></td>
                    <td style="border: 1px solid black"><input name="nama_pemotong[]" type="text" class="form-control" value="{{ $dh['nama_pemotong'] }}" style="border: 1px solid white; width: 100%; font-size: 11px; text-transform:uppercase" disabled></td>
                    <td style="border: 1px solid black;"><input name="npwp_pemotong[]" type="text" class="form-control" value="{{ $dh['npwp_pemotong'] }}" style="border: 1px solid white; width: 100%; font-size: 11px;" maxlength="20" oninput="formatNpwp(this)" id="formatnpwp" disabled></td>
                    <td style="border: 1px solid black;"><input name="nomor_bupot[]" type="text" class="form-control" value="{{ $dh['nomor_bupot'] }}" style="border: 1px solid white; width: 100%; font-size: 11px; text-transform:uppercase" disabled></td>
                    <td style="border: 1px solid black;"><input name="tgl_bupot[]" type="date" class="form-control" value="{{ $dh['tgl_bupot'] }}" style="border: 1px solid white; width: 100%; font-size: 11px;" disabled></td>
                    <td style="border: 1px solid black;"><select name='jenis_pajak[]' style="width:100%; height:30px; border: 1px solid white" disabled>
                            <option value='pilih'>Pilih...</option>
                            <option value='21' @if ($dh['jenis_pajak']=="21" ) selected="selected" @endif>Pasal 21</option>
                            <option value='22' @if ($dh['jenis_pajak']=="22" ) selected="selected" @endif>Pasal 22</option>
                            <option value='23' @if ($dh['jenis_pajak']=="23" ) selected="selected" @endif>Pasal 23</option>
                            <option value='24' @if ($dh['jenis_pajak']=="24" ) selected="selected" @endif>Pasal 24</option>
                            <option value='26' @if ($dh['jenis_pajak']=="26" ) selected="selected" @endif>Pasal 26</option>
                            <option value='DTP' @if ($dh['jenis_pajak']=="DTP" ) selected="selected" @endif>Pasal DTP</option>
                        </select> </td>
                    <td style="border: 1px solid black;"><input name="jumlahPPh_potong[]" class="jumlahpph" type="text" class="form-control" value="{{ $dh['jumlahPPh_potong'] }}" style="border: 1px solid white; width: 100%; text-align: right; font-size: 11px;" oninput="formatJmlPPhDipotongDipungut(this.value)" name="jumlahPPh" id="jumlahPPh" placeholder="0" disabled></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div style="padding: 10px;"></div>
        <table>
            <tr>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 670px;  height: 30px">
                    JUMLAH BAGIAN A</th>

                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 400px; background-color: #F0E68C">
                    <input type="text" class="form-control" readonly="readonly" style="background-color: #F0E68C; text-align: right; border: 1px solid white" name="hasilPPhDipotongDipungut" id="hasilPPhDipotongDipungut">
                    <input type="hidden" name="form2_id" value="{{ $form2 }}">
                    <input type="hidden" name="formspt" value="{{ $formspt }}">
                </th>
            </tr>
        </table>
        <template id="rowTemplateBagianA">
            <tr>
                <td style="border: 1px solid black; width: 5%; text-align:center"><span id="nomortemplate" disabled></span></td>
                <td style="border: 1px solid black"><input name="nama_pemotong[]" type="text" class="form-control" style="border: 1px solid white; width: 100%; font-size: 11px; text-transform:uppercase" disabled></td>
                <td style="border: 1px solid black;"><input name="npwp_pemotong[]" type="text" class="form-control" style="border: 1px solid white; width: 100%; font-size: 11px;" maxlength="20" oninput="formatNpwp2(this)" id="formatnpwpfix" disabled></td>
                <td style="border: 1px solid black;"><input name="nomor_bupot[]" type="text" class="form-control" style="border: 1px solid white; width: 100%; font-size: 11px; text-transform:uppercase" disabled></td>
                <td style="border: 1px solid black;"><input name="tgl_bupot[]" type="date" class="form-control" style="border: 1px solid white; width: 100%; font-size: 11px;" disabled></td>
                <td style="border: 1px solid black;"><select name='jenis_pajak[]' style="width:100%; height:30px; border: 1px solid white; font-size: 11px;" disabled>
                        <option value='pilih'>Pilih...</option>
                        <option value='21'>Pasal 21</option>
                        <option value='22'>Pasal 22</option>
                        <option value='23'>Pasal 23</option>
                        <option value='24'>Pasal 24</option>
                        <option value='26'>Pasal 26</option>
                        <option value='DTP'>Pasal DTP</option>
                    </select> </td>
                <td style="border: 1px solid black;"><input name="jumlahPPh_potong[]" class="jumlahpph" type="text" class="form-control" style="border: 1px solid white; width: 100%; text-align: right; font-size: 11px;" oninput="formatJmlPPhDipotongDipungut(this.value)" name="jumlahPPh" id="jumlahPPh" placeholder="0" disabled></td>
            </tr>
        </template>
    </div>

    <br>
    <div class="pagebreak"> </div>
    <!-- Formulir-I hal 1 -->
    <div class="container">
        <!-- Header -->
        <div class="row" style="border-bottom: 2px solid black;">
            <div class="col-2 col-md-2 text-center">
                <h6>HALAMAN 1</h6>
                <h4>FORMULIR</h4>
                <h3>1770-I</h3>
                <p style="font-size: 12px;">KEMENTERIAN KEUANGAN <br>RI DIREKTORAT JENDERAL <br> PAJAK</p>
            </div>
            <div class="col-6 col-md-6" style="border-left: 2px solid black; border-right:2px solid black">
                <div class="row">
                    <h5 class="text-center">LAMPIRAN-I</h5>
                    <p style="font-size: 14px; text-align:center; font-weight:bold; border-bottom: 2px solid black">SPT TAHUNAN PPh WAJIB PAJAK ORANG PRIBADI</p>
                </div>
                <div class="row" style="font-size: 11px; text-align: center">
                    <b>PERHITUNGAN PENGHASILAN NETO DALAM NEGERI DARI USAHA DAN/ATAU</b>
                    <b>PEKERJAAN BEBAS BAGI WAJIB PAJAK YANG</b>
                    <b>MENYELENGGARAKAN PEMBUKUAN</b>
                </div>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col">
                        <table class="table table-bordered border-secondary text-center">
                            <th>{{ mb_substr($spt['tahun'], 0, 1); }}</th>
                            <th>{{ mb_substr($spt['tahun'], 1, 1); }}</th>
                            <th>{{ mb_substr($spt['tahun'], 2, 1); }}</th>
                            <th>{{ mb_substr($spt['tahun'], 3, 1); }}</th>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <table class="table table-bordered border-secondary">
                            <tr>
                                <th>0</th>
                                <th>1</th>
                                <th>{{ mb_substr($spt['tahun'], 2, 1); }}</th>
                                <th>{{ mb_substr($spt['tahun'], 3, 1); }}</th>
                            </tr>
                        </table>
                    </div>
                    <div class="col-2">
                    </div>
                    <div class="col-4">
                        <table class="table table-bordered border-secondary">
                            <tr>
                                <th>1</th>
                                <th>2</th>
                                <th>{{ mb_substr($spt['tahun'], 2, 1); }}</th>
                                <th>{{ mb_substr($spt['tahun'], 3, 1); }}</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="form-check" style="display:inline-block; margin-left: 10px">
                    <input style="display:inline;" class="form-check-input" type="radio" name="" id="flexRadioDisabled" value="pembukuan" <?= ($spt->jenis_pelaporan  == 'pembukuan') ? 'checked' : '' ?> disabled>
                    <label class="form-check-label" for="flexRadioDisabled" style="font-size: 14px;">
                        Pembukuan
                    </label>
                </div>
                <div class="form-check" style="display:inline-block; margin-left: 10px">
                    <input class="form-check-input" type="radio" name="" id="flexRadioCheckedDisabled" value="pencatatan" <?= ($spt->jenis_pelaporan  == 'pencatatan') ? 'checked' : '' ?> disabled>
                    <label class="form-check-label" for="flexRadioCheckedDisabled" style="font-size: 14px;">
                        Pencatatan
                    </label>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div>
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <label style="font-size: 11px; margin-left: 15px">SPT Pembetulan Ke</label>
                                    <input style="width:20px; height: 15px; border: 1px solid;  margin-left: 15px" value="{{ $spt['pembetulan'] }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <!-- Isi -->
        <b style="font-size: 8.5px;">PERHATIAN *SEBELUM MENGISI BACALAH PETUNJUK PENGISIAN *ISI DENGAN HURU CETAK/DIKETIK
            DENGAN TINTA HITAM *BERI TANDA X DALAM KOTAK SESUAI PILIHAN</b>

        <!-- Data WP -->
        <div class="col-sm-12" style=" border: 1px solid black; padding: 8px 10px 1px 10px ; height: 80PX; border: 2px solid; margin-left: 10px">
            <div style="display:flex ; flex-direction:row ">
                <div>
                    <label style="font-size: 11px;">NPWP</label>
                </div>
                <div style="margin-left: 319px;">
                    <input class="form-control" type="text" style="width:600px ;border: 1px solid black; height: 30px; border-radius: 1px; " value="{{ $npwp }}" disabled="disabled" id="npwpformulirI-1">
                </div>
            </div>
            <div style="display:flex ; flex-direction:row ">
                <div>
                    <label style="font-size: 11px; width: 150px">NAMA WAJIB PAJAK</label>
                </div>
                <div style="margin-left: 200px;">
                    <input class="form-control" type="text" style="width:600px ;border: 1px solid black; height: 30px; border-radius: 1px; " value="{{ $nama }}" disabled="disabled">
                </div>
            </div>
        </div>

        <!-- Bagian A -->
        @csrf
        <input type="hidden" name="counted" value="{{ count($audit)  }}">
        <div style="padding: 10px">
            <p style="font-size: 11px; padding: 0px 0px -7px 0px">BAGIAN A. PENGHASILAN NETO DALAM NEGERI DARI USAHA
                DAN/ATAU PEKERJAAN BEBAS
                (BAGI WAJIB PAJAK YANG MENYELENGGARAKAN PEMBUKUAN)</p>
        </div>
        <div class="col-sm-11.5" style="padding: 4px 20px 10px 10px ; height: auto; border: 1px solid; margin-left: 10px">
            <div style="display:flex ; flex-direction:row ">
                <div>
                    <label style="font-size: 11px;">PEMBUKUAN/LAPORAN KEUANGAN</label>
                </div>
                <div style="margin-left: 40px;">
                    <div class="form-check" style="display:inline-block; margin-left: 15px">
                        <input style="display:inline;" class="form-check-input" type="radio" onchange="handleChange(this);" name="Audit" id="Audit" value="1" <?= ($form1->is_audit  == 1) ? 'checked' : '' ?> disabled>
                        <label class="form-check-label" for="flexRadioDisabled" style="font-size: 14px;">
                            Di Audit
                        </label>
                    </div>
                    <div class="form-check" style="display:inline-block; margin-left: 10px">
                        <input class="form-check-input" type="radio" name="Audit" onchange="handleChange2(this);" id="TidakAudit" value="0" <?= ($form1->is_audit  == 0) ? 'checked' : '' ?> disabled>
                        <label class="form-check-label" for="flexRadioCheckedDisabled" style="font-size: 14px; ">
                            Tidak Di Audit
                        </label>
                    </div>
                </div>
            </div>
            <div id="eformspt" style="display: none;">
                <div style="display:flex ; flex-direction:row ">
                    <div>
                        <label style="font-size: 11px;">Opini Akuntan</label>
                    </div>
                    <div style="margin-left: 161px;">
                        <select name="" id="" style="width:430px ;border: 1px solid black; height: 30px; border-radius: 1px; ">
                            <option selected>Pilih...</option>
                            <option value='1. Wajar Tanpa Pengecualian' <?php if ($audit[0]['opini_akuntan'] ?? false) {
                                                                            if ($audit[0]['opini_akuntan'] == "1. Wajar Tanpa Pengecualian") {
                                                                                echo "selected='selected'";
                                                                            }
                                                                        } ?>>1. Wajar Tanpa Pengecualian</option>
                            <option value='2. Wajar Dengan Pengecualian' <?php if ($audit[0]['opini_akuntan'] ?? false) {
                                                                                if ($audit[0]['opini_akuntan'] == "2. Wajar Dengan Pengecualian") {
                                                                                    echo "selected='selected'";
                                                                                }
                                                                            } ?>>2. Wajar Dengan Pengecualian</option>
                            <option value='3. Tidak Wajar' <?php if ($audit[0]['opini_akuntan'] ?? false) {
                                                                if ($audit[0]['opini_akuntan'] == "3. Tidak Wajar") {
                                                                    echo "selected='selected'";
                                                                }
                                                            } ?>>3. Tidak Wajar</option>
                            <option value='4. Tidak Ada Opini' <?php if ($audit[0]['opini_akuntan'] ?? false) {
                                                                    if ($audit[0]['opini_akuntan'] == "4. Tidak Ada Opini") {
                                                                        echo "selected='selected'";
                                                                    }
                                                                } ?>>4. Tidak Ada Opini</option>
                        </select>
                    </div>
                </div>
                <div style="display:flex ; flex-direction:row ">
                    <div>
                        <label style="font-size: 11px; width: 150px">NAMA AKUNTAN PUBLIK</label>
                    </div>
                    <div style="margin-left: 81px;">
                        <input class="form-control" type="text" style="width:430px ;border: 1px solid black; height: 30px; border-radius: 1px; text-transform:uppercase" value="{{ $audit[0]['nama_AKpublik'] ?? '' }}" id="nama_AKpublik" disabled>
                    </div>
                </div>
                <div style="display:flex ; flex-direction:row ">
                    <div>
                        <label style="font-size: 11px; width: 150px">NPWP AKUNTAN PUBLIK</label>
                    </div>
                    <div style="margin-left: 81px;">
                        <input class="form-control" type="text" style="width:430px ;border: 1px solid black; height: 30px; border-radius: 1px" value="{{ $audit[0]['npwp_AKpublik'] ?? '' }}" id="npwp_AKpublik" disabled>
                    </div>
                </div>
                <div style="display:flex ; flex-direction:row ">
                    <div>
                        <label style="font-size: 11px; width: 150px">NAMA KANTOR AKUNTAN PUBLIK</label>
                    </div>
                    <div style="margin-left: 81px;">
                        <input class="form-control" type="text" style="width:430px ;border: 1px solid black; height: 30px; border-radius: 1px; text-transform:uppercase" value="{{ $audit[0]['nama_kantor_AKpublik'] ?? '' }}" id="nama_kantor_AKpublik" disabled>
                    </div>
                </div>
                <div style="display:flex ; flex-direction:row ">
                    <div>
                        <label style="font-size: 11px; width: 150px">NPWP KANTOR AKUNTAN PUBLIK</label>
                    </div>
                    <div style="margin-left: 81px;">
                        <input class="form-control" type="text" style="width:430px ;border: 1px solid black; height: 30px; border-radius: 1px; " value="{{ $audit[0]['npwp_kantor_AKpublik'] ?? '' }}" id="npwp_kantor_AKpublik" disabled>
                    </div>
                </div>
                <div style="display:flex ; flex-direction:row ">
                    <div>
                        <label style="font-size: 11px; width: 150px">NAMA KONSULTAN PAJAK</label>
                    </div>
                    <div style="margin-left: 81px;">
                        <input class="form-control" type="text" style="width:430px ;border: 1px solid black; height: 30px; border-radius: 1px; text-transform:uppercase" value="{{ $audit[0]['nama_Kpajak'] ?? '' }}" id="nama_Kpajak" disabled>
                    </div>
                </div>
                <div style="display:flex ; flex-direction:row ">
                    <div>
                        <label style="font-size: 11px; width: 150px">NPWP KONSULTAN PAJAK</label>
                    </div>
                    <div style="margin-left: 81px;">
                        <input class="form-control" type="text" style="width:430px ;border: 1px solid black; height: 30px; border-radius: 1px" value="{{ $audit[0]['npwp_Kpajak'] ?? '' }}" id="npwp_Kpajak" disabled>
                    </div>
                </div>
                <div style="display:flex ; flex-direction:row ">
                    <div>
                        <label style="font-size: 11px; width: 150px">NAMA KANTOR KONSULTAN PAJAK</label>
                    </div>
                    <div style="margin-left: 81px;">
                        <input class="form-control" type="text" style="width:430px ;border: 1px solid black; height: 30px; border-radius: 1px; text-transform:uppercase" value="{{ $audit[0]['nama_kantor_Kpajak'] ?? '' }}" id="nama_kantor_Kpajak" disabled>
                    </div>
                </div>
                <div style="display:flex ; flex-direction:row ">
                    <div>
                        <label style="font-size: 11px; width: 150px">NPWP KANTOR KONSULTAN PAJAK</label>
                    </div>
                    <div style="margin-left: 81px;">
                        <input class="form-control" type="text" style="width:430px ;border: 1px solid black; height: 30px; border-radius: 1px; " value="{{ $audit[0]['npwp_kantor_Kpajak'] ?? '' }}" id="npwp_kantor_Kpajak" disabled>
                    </div>
                </div>
            </div>

            <div id="eformspt2">

                <div style="display:flex ; flex-direction:row ">
                    <div>
                        <label style="font-size: 11px; width: 150px">NAMA AKUNTAN PUBLIK</label>
                    </div>
                    <div style="margin-left: 81px;">
                        <input class="form-control" type="text" style="width:430px ;border: 1px solid black; height: 30px; border-radius: 1px; " disabled="disabled">
                    </div>
                </div>
                <div style="display:flex ; flex-direction:row ">
                    <div>
                        <label style="font-size: 11px; width: 150px">NPWP AKUNTAN PUBLIK</label>
                    </div>
                    <div style="margin-left: 81px;">
                        <input class="form-control" type="text" style="width:430px ;border: 1px solid black; height: 30px; border-radius: 1px; " disabled="disabled">
                    </div>
                </div>
                <div style="display:flex ; flex-direction:row ">
                    <div>
                        <label style="font-size: 11px; width: 150px">NAMA KANTOR AKUNTAN PUBLIK</label>
                    </div>
                    <div style="margin-left: 81px;">
                        <input class="form-control" type="text" style="width:430px ;border: 1px solid black; height: 30px; border-radius: 1px; " disabled="disabled">
                    </div>
                </div>
                <div style="display:flex ; flex-direction:row ">
                    <div>
                        <label style="font-size: 11px; width: 150px">NPWP KANTOR AKUNTAN PUBLIK</label>
                    </div>
                    <div style="margin-left: 81px;">
                        <input class="form-control" type="text" style="width:430px ;border: 1px solid black; height: 30px; border-radius: 1px; " disabled="disabled">
                    </div>
                </div>
                <div style="display:flex ; flex-direction:row ">
                    <div>
                        <label style="font-size: 11px; width: 150px">NAMA KONSULTAN PAJAK</label>
                    </div>
                    <div style="margin-left: 81px;">
                        <input class="form-control" type="text" style="width:430px ;border: 1px solid black; height: 30px; border-radius: 1px; " disabled="disabled">
                    </div>
                </div>
                <div style="display:flex ; flex-direction:row ">
                    <div>
                        <label style="font-size: 11px; width: 150px">NPWP KONSULTAN PAJAK</label>
                    </div>
                    <div style="margin-left: 81px;">
                        <input class="form-control" type="text" style="width:430px ;border: 1px solid black; height: 30px; border-radius: 1px; " disabled="disabled">
                    </div>
                </div>
                <div style="display:flex ; flex-direction:row ">
                    <div>
                        <label style="font-size: 11px; width: 150px">NAMA KANTOR KONSULTAN PAJAK</label>
                    </div>
                    <div style="margin-left: 81px;">
                        <input class="form-control" type="text" style="width:430px ;border: 1px solid black; height: 30px; border-radius: 1px; " disabled="disabled">
                    </div>
                </div>
                <div style="display:flex ; flex-direction:row ">
                    <div>
                        <label style="font-size: 11px; width: 150px">NPWP KANTOR KONSULTAN PAJAK</label>
                    </div>
                    <div style="margin-left: 81px;">
                        <input class="form-control" type="text" style="width:430px ;border: 1px solid black; height: 30px; border-radius: 1px; " disabled="disabled">
                    </div>
                </div>
            </div>

        </div>

        <!-- tabel bagian A -->
        <br>
        <div>
            <table style="width: 100%; border: 1px solid black; border-bottom: 0px">
                <tr>
                    <th style="width: 3%; border-bottom: 0px; border-right: 1px solid black"></th>
                    <th style="width: 72%; font-size: 12px; border-bottom: 0px; border-right: 0px">PENGHASILAN DARI USAHA DAN/ATAU PEKERJAAN BEBAS BERDASARKAN LAPORAN KEUANGAN KOMERSIAL :</th>
                    <th style="width: 5%; border-bottom: 0px; border-left: 0px; border-right: 0px"></th>
                    <th style="width: 20%; font-size: 12px; text-align: center; border-bottom: 0px; border-left: 0px ">Rupiah</th>
                </tr>
                <tr>
                    <td style="border: 1px solid black; border-top: 0px; border-bottom: 0px"></td>
                    <td style="border-bottom: 0px"> <span style="margin-left: 5px;  font-size: 12px">a. PEREDARAN USAHA</span></td>
                    <td style="border-left: 1px dotted black; border-top: 1px dotted black; border-bottom: 0px; font-size: 12px; text-align:center">1a.</td>
                    <td style="font-size: 12px; text-align: center; border: 1px solid black; border-bottom: 0px"><input value="{{ $formuliri[0]->rupiah_JenisPenghasilan ?? '' }}" type="text" class="form-control" style="width: 100%; height: 30px; border: 0px; text-align:right; font-size:14px" oninput="formatPengNetoDlmNegeri()" name="peredaran_usaha" id="peredaran_usaha" placeholder="0" disabled></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; border-top: 0px; border-bottom: 0px"></td>
                    <td style="border-bottom: 0px"><span style="margin-left: 5px;  font-size: 12px">b. HARGA POKOK PENJUALAN</span></td>
                    <td style="border-left: 1px dotted black; border-top: 1px solid black; border-bottom: 0px; font-size: 12px; text-align:center">1b.</td>
                    <td style="font-size: 12px; text-align: center; border: 1px solid black; border-bottom: 0px"><input value="{{ $formuliri[1]->rupiah_JenisPenghasilan ?? '' }}" type="text" class="form-control" style="width: 100%; height: 30px; border: 0px; text-align:right; font-size:14px" oninput="formatPengNetoDlmNegeri()" name="harga_pokok_penjualan" id="harga_pokok_penjualan" placeholder="0" disabled></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; border-top: 0px; border-bottom: 0px; font-size: 12px; text-align: center">1</td>
                    <td style="border-bottom: 0px"><span style="margin-left: 5px;  font-size: 12px">c. LABA/RUGI BRUTO USAHA (1a - 1b)</span></td>
                    <td style="border-left: 1px dotted black; border-top: 1px solid black; border-bottom: 0px; font-size: 12px; text-align:center">1c.</td>
                    <td style="font-size: 12px; text-align: center; border: 1px solid black; border-bottom: 0px; background-color: #F0E68C"><input type="text" disabled="true" readonly="readonly" style="width: 100%; height: 30px; border: 0px;background-color: #F0E68C; text-align:right; font-size:14px" name="hasil1c" id="hasil1c"></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; border-top: 0px; border-bottom: 0px"></td>
                    <td style="border-bottom: 0px"><span style="margin-left: 5px;  font-size: 12px">d. BIAYA USAHA</span></td>
                    <td style="border-left: 1px dotted black; border-top: 1px solid black; border-bottom: 0px; font-size: 12px; text-align:center">1d.</td>
                    <td style="font-size: 12px; text-align: center; border: 1px solid black; border-bottom: 0px"><input value="{{ $formuliri[2]->rupiah_JenisPenghasilan ?? '' }}" type="text" class="form-control" style="width: 100%; height: 30px; border: 0px; text-align:right; font-size:14px" oninput="formatPengNetoDlmNegeri()" name="biaya_usaha" id="biaya_usaha" placeholder="0" disabled></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; border-top: 0px; border-bottom: 0px"></td>
                    <td style="border-bottom: 0px"><span style="margin-left: 5px;  font-size: 12px">e. PENGHASILAN NETO (1c - 1d)</span></td>
                    <td style="border-left: 1px dotted black; border-top: 1px solid black; border-bottom: 0px; font-size: 12px; text-align:center">1e.</td>
                    <td style="font-size: 12px; text-align: center; border: 1px solid black; border-bottom: 0px; background-color: #F0E68C"><input type="text" readonly="readonly" style="width: 100%; height: 30px; border: 0px;background-color: #F0E68C; text-align:right; font-size:14px" name="hasil1c-1d" id="hasil1c-1d"></td>
                </tr>
            </table>
            <table style="width: 100%; border: 1px solid black; border-bottom: 0px">
                <tr>
                    <th style="width: 3%; border-bottom: 0px; border-top: 0px; border-right: 1px solid black"></th>
                    <th style="width: 72%; font-size: 12px; border-bottom: 0px; border-right: 0px">PENYESUAIAN FISIKAL POSITIF</th>
                    <th style="width: 5%; border-bottom: 0px; border-left: 0px; border-right: 0px"></th>
                    <th style="width: 20%; font-size: 12px; text-align: center; border-bottom: 0px;  border-left: 0px"></th>
                </tr>
                <tr>
                    <td style="border: 1px solid black; border-top: 0px; border-bottom: 0px"></td>
                    <td style="border-bottom: 0px"> <span style="margin-left: 5px;  font-size: 12px">a. BIAYA YANG DIBEBANKAN /DIKELUARKAN UNTUK KEPENTINGAN RPIBADI WAJIB PAJAK ATAU ORANG YANG MENJADI TANGGUNGANNYA</span></td>
                    <td style="border-left: 1px dotted black; border-top: 1px dotted black; border-bottom: 0px; font-size: 12px; text-align:center">2a.</td>
                    <td style="font-size: 12px; text-align: center; border: 1px solid black; border-bottom: 0px"><input value="{{ $formuliri[3]->rupiah_JenisPenghasilan ?? '' }}" type="text" class="form-control" style="width: 100%; height: 40px; border: 0px; text-align:right; font-size:14px" oninput="formatPengNetoDlmNegeri()" name="biaya_dibebankan_dikeluarkan" id="biaya_dibebankan_dikeluarkan" placeholder="0" disabled></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; border-top: 0px; border-bottom: 0px"></td>
                    <td style="border-bottom: 0px"><span style="margin-left: 5px;  font-size: 12px">b. PREMI ASURANSI KESEHATAN, ASURANSI KECELAKAAN, ASURANSI JIWA, ASURANSI DWIGUNA, DAN ASURANSI BEASISWA YANG DIBAYAR OLEH WAJIB PAJAK</span></td>
                    <td style="border-left: 1px dotted black; border-top: 1px solid black; border-bottom: 0px; font-size: 12px; text-align:center">2b.</td>
                    <td style="font-size: 12px; text-align: center; border: 1px solid black; border-bottom: 0px"><input value="{{ $formuliri[4]->rupiah_JenisPenghasilan ?? '' }}" type="text" class="form-control" style="width: 100%; height: 40px; border: 0px; text-align:right; font-size:14px" oninput="formatPengNetoDlmNegeri()" name="premi_asuransi" id="premi_asuransi" placeholder="0" disabled></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; border-top: 0px; border-bottom: 0px"></td>
                    <td style="border-bottom: 0px"><span style="margin-left: 5px;  font-size: 12px">c. PENGGANTIAN ATAU IMBALAN SEHUBUNGAN DENGAN PEKERJAAN ATAU JASA YANG DIBERIKAN DALAM BENTUK NATURA ATAU KENIKMATAN</span></td>
                    <td style="border-left: 1px dotted black; border-top: 1px solid black; border-bottom: 0px; font-size: 12px; text-align:center">2c.</td>
                    <td style="font-size: 12px; text-align: center; border: 1px solid black; border-bottom: 0px"><input value="{{ $formuliri[5]->rupiah_JenisPenghasilan ?? '' }}" type="text" class="form-control" style="width: 100%; height: 40px; border: 0px; text-align:right; font-size:14px" oninput="formatPengNetoDlmNegeri()" name="penggantian_imbalan" id="penggantian_imbalan" placeholder="0" disabled></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; border-top: 0px; border-bottom: 0px"></td>
                    <td style="border-bottom: 0px"><span style="margin-left: 5px;  font-size: 12px">d. JUMLAH YANG MELEBIHI KEWAJARAN YANG DIBAYARKAN KEPADA PIHAK YANG MEMPUNYAI HUBUNGAN ISTIMEWA SEHUBUNGAN DENGAN PEKERJAAN YANG DILAKUKAN</span></td>
                    <td style="border-left: 1px dotted black; border-top: 1px solid black; border-bottom: 0px; font-size: 12px; text-align:center">2d.</td>
                    <td style="font-size: 12px; text-align: center; border: 1px solid black; border-bottom: 0px"><input value="{{ $formuliri[6]->rupiah_JenisPenghasilan ?? '' }}" type="text" class="form-control" style="width: 100%; height: 40px; border: 0px; text-align:right; font-size:14px" oninput="formatPengNetoDlmNegeri()" name="jumlahmelebihi_kewajaran" id="jumlahmelebihi_kewajaran" placeholder="0" disabled></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; border-top: 0px; border-bottom: 0px; font-size: 12px; text-align: center">2</td>
                    <td style="border-bottom: 0px"><span style="margin-left: 5px;  font-size: 12px">e. HARTA YANG DIHIBAHKAN, BANTUAN ATAU SUMBANGAN</span></td>
                    <td style="border-left: 1px dotted black; border-top: 1px solid black; border-bottom: 0px; font-size: 12px; text-align:center">2e.</td>
                    <td style="font-size: 12px; text-align: center; border: 1px solid black; border-bottom: 0px"><input value="{{ $formuliri[7]->rupiah_JenisPenghasilan ?? '' }}" type="text" class="form-control" style="width: 100%; height: 30px; border: 0px; text-align:right; font-size:14px" oninput="formatPengNetoDlmNegeri()" name="harta" id="harta" placeholder="0" disabled></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; border-top: 0px; border-bottom: 0px"></td>
                    <td style="border-bottom: 0px"><span style="margin-left: 5px;  font-size: 12px">f. PAJAK PENGHASILAN</span></td>
                    <td style="border-left: 1px dotted black; border-top: 1px solid black; border-bottom: 0px; font-size: 12px; text-align:center">2f.</td>
                    <td style="font-size: 12px; text-align: center; border: 1px solid black; border-bottom: 0px"><input value="{{ $formuliri[8]->rupiah_JenisPenghasilan ?? '' }}" type="text" class="form-control" style="width: 100%; height: 30px; border: 0px; text-align:right; font-size:14px" oninput="formatPengNetoDlmNegeri()" name="pajak_penghasilan" id="pajak_penghasilan" placeholder="0" disabled></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; border-top: 0px; border-bottom: 0px"></td>
                    <td style="border-bottom: 0px"><span style="margin-left: 5px;  font-size: 12px">g. GAJI YANG DIBAYARKAN KEPADA PEMILIK / ORANG YANG MENJADI TANGGUNGANNYA</span></td>
                    <td style="border-left: 1px dotted black; border-top: 1px solid black; border-bottom: 0px; font-size: 12px; text-align:center">2g.</td>
                    <td style="font-size: 12px; text-align: center; border: 1px solid black; border-bottom: 0px"><input value="{{ $formuliri[9]->rupiah_JenisPenghasilan ?? '' }}" type="text" class="form-control" style="width: 100%; height: 30px; border: 0px; text-align:right; font-size:14px" oninput="formatPengNetoDlmNegeri()" name="gaji_yangdibayarkan" id="gaji_yangdibayarkan" placeholder="0" disabled></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; border-top: 0px; border-bottom: 0px"></td>
                    <td style="border-bottom: 0px"><span style="margin-left: 5px;  font-size: 12px">h. SANKSI ADMINISTRASI</span></td>
                    <td style="border-left: 1px dotted black; border-top: 1px solid black; border-bottom: 0px; font-size: 12px; text-align:center">2h.</td>
                    <td style="font-size: 12px; text-align: center; border: 1px solid black; border-bottom: 0px"><input value="{{ $formuliri[10]->rupiah_JenisPenghasilan ?? '' }}" type="text" class="form-control" style="width: 100%; height: 30px; border: 0px; text-align:right; font-size:14px" oninput="formatPengNetoDlmNegeri()" name="sanksi_administrasi" id="sanksi_administrasi" placeholder="0" disabled></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; border-top: 0px; border-bottom: 0px"></td>
                    <td style="border-bottom: 0px"><span style="margin-left: 5px;  font-size: 12px">i. SELISIH PENYUSUTAN/AMORTISASI KOMERSIAL DIATAS PENYUSUTAN/AMORTISASI FISIKAL</span></td>
                    <td style="border-left: 1px dotted black; border-top: 1px solid black; border-bottom: 0px; font-size: 12px; text-align:center">2i.</td>
                    <td style="font-size: 12px; text-align: center; border: 1px solid black; border-bottom: 0px"><input value="{{ $formuliri[11]->rupiah_JenisPenghasilan ?? '' }}" type="text" class="form-control" style="width: 100%; height: 30px; border: 0px; text-align:right; font-size:14px" oninput="formatPengNetoDlmNegeri()" name="selisih" id="selisih" placeholder="0" disabled></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; border-top: 0px; border-bottom: 0px"></td>
                    <td style="border-bottom: 0px"><span style="margin-left: 5px;  font-size: 12px">j. BIAYA UNTUK MENDAPATKAN, MENAGIH DAN MEMELIHARA PENGHASILAN YANG DIKENAKAN PPh FINAL DAN PENGHASILAN YANG TIDAK TERMASUK OBJEK PAJAK</span></td>
                    <td style="border-left: 1px dotted black; border-top: 1px solid black; border-bottom: 0px; font-size: 12px; text-align:center">2j.</td>
                    <td style="font-size: 12px; text-align: center; border: 1px solid black; border-bottom: 0px"><input value="{{ $formuliri[12]->rupiah_JenisPenghasilan ?? '' }}" type="text" class="form-control" style="width: 100%; height: 40px; border: 0px; text-align:right; font-size:14px" oninput="formatPengNetoDlmNegeri()" name="biaya_yangmendapatkan" id="biaya_yangmendapatkan" placeholder="0" disabled></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; border-top: 0px; border-bottom: 0px"></td>
                    <td style="border-bottom: 0px"><span style="margin-left: 5px;  font-size: 12px">k. PENYESUAIAN FISIKAL POSITIF LAINNYA</span></td>
                    <td style="border-left: 1px dotted black; border-top: 1px solid black; border-bottom: 0px; font-size: 12px; text-align:center">2k.</td>
                    <td style="font-size: 12px; text-align: center; border: 1px solid black; border-bottom: 0px"><input value="{{ $formuliri[13]->rupiah_JenisPenghasilan ?? '' }}" type="text" class="form-control" style="width: 100%; height: 40px; border: 0px; text-align:right; font-size:14px" oninput="formatPengNetoDlmNegeri()" name="penyesuaian_fisikal_positif" id="penyesuaian_fisikal_positif" placeholder="0" disabled></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; border-top: 0px; border-bottom: 0px"></td>
                    <td style="border-bottom: 0px"><span style="margin-left: 5px;  font-size: 12px">l. JUMLAH (2a s.d 2k)</span></td>
                    <td style="border-left: 1px dotted black; border-top: 1px solid black; border-bottom: 0px; font-size: 12px; text-align:center">2l.</td>
                    <td style="font-size: 12px; text-align: center; border: 1px solid black; border-bottom: 0px; background-color: #F0E68C"><input type="text" disabled="true" readonly="readonly" style="width: 100%; height: 30px; border: 0px;background-color: #F0E68C; text-align:right; font-size:14px" name="jumlah(2a-2k)" id="jumlah(2a-2k)"></td>
                </tr>
            </table>
            <table style="width: 100%; border: 1px solid black;">
                <tr>
                    <th style="width: 3%; border-bottom: 0px; border-right: 1px solid black"></th>
                    <th style="width: 72%; font-size: 12px; border-bottom: 0px; border-right: 0px;">PENGHASILAN FISIKAL NEGATIF</th>
                    <th style="width: 5%; border-bottom: 0px; border-left: 0px; border-right: 0px;"></th>
                    <th style="width: 20%; font-size: 12px; text-align: center; border-bottom: 0px; border-left: 0px "></th>
                </tr>
                <tr>
                    <td style="border: 1px solid black; border-top: 0px; border-bottom: 0px"></td>
                    <td style="border-bottom: 0px"> <span style="margin-left: 5px;  font-size: 12px">a. PENGHASILAN YANG DIKENAKAN PPh FINAL DAN PENGHASILAN YANG TIDAK TERMASUK OBJEK PAJAK TETAPI TERMASUK DALAM PEREDARAN USAHA</span></td>
                    <td style="border-left: 1px dotted black; border-top: 1px dotted black; border-bottom: 0px; font-size: 12px; text-align:center">3a.</td>
                    <td style="font-size: 12px; text-align: center; border: 1px solid black; border-bottom: 0px"><input value="{{ $formuliri[14]->rupiah_JenisPenghasilan ?? '' }}" type="text" class="form-control" style="width: 100%; height: 40px; border: 0px; text-align:right; font-size:14px" oninput="formatPengNetoDlmNegeri()" name="penghasilan_dikenakanPPhfinal" id="penghasilan_dikenakanPPhfinal" placeholder="0" disabled></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; border-top: 0px; border-bottom: 0px; font-size: 12px; text-align: center">3</td>
                    <td style="border-bottom: 0px"><span style="margin-left: 5px;  font-size: 12px">b. SELISIH PENYUSUTAN / AMORTISASI KOMERSIAL DI BAWAH PENYUSUTAN AMORTISASI FISIKAL</span></td>
                    <td style="border-left: 1px dotted black; border-top: 1px solid black; border-bottom: 0px; font-size: 12px; text-align:center">3b.</td>
                    <td style="font-size: 12px; text-align: center; border: 1px solid black; border-bottom: 0px"><input value="{{ $formuliri[15]->rupiah_JenisPenghasilan ?? '' }}" type="text" class="form-control" style="width: 100%; height: 30px; border: 0px; text-align:right; font-size:14px" oninput="formatPengNetoDlmNegeri()" name="selisih1" id="selisih1" placeholder="0" disabled></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; border-top: 0px; border-bottom: 0px"></td>
                    <td style="border-bottom: 0px"><span style="margin-left: 5px;  font-size: 12px">c. PENYUSUTAN FISIKAL NEGATIF LAINNYA</span></td>
                    <td style="border-left: 1px dotted black; border-top: 1px solid black; border-bottom: 0px; font-size: 12px; text-align:center">3c.</td>
                    <td style="font-size: 12px; text-align: center; border: 1px solid black; border-bottom: 0px"><input value="{{ $formuliri[16]->rupiah_JenisPenghasilan ?? '' }}" type="text" class="form-control" style="width: 100%; height: 30px; border: 0px; text-align:right; font-size:14px" oninput="formatPengNetoDlmNegeri()" name="penyesuaian_fisikal_negatif" id="penyesuaian_fisikal_negatif" placeholder="0" disabled></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; border-top: 0px; border-bottom: 0px"></td>
                    <td style="border-bottom: 0px"><span style="margin-left: 5px;  font-size: 12px">d. JUMLAH (3a s.d 3c)</span></td>
                    <td style="border-left: 1px dotted black; border-top: 1px solid black; border-bottom: 0px; font-size: 12px; text-align:center">3d.</td>
                    <td style="font-size: 12px; text-align: center; border: 1px solid black; border-bottom: 0px; background-color: #F0E68C"><input type="text" disabled="true" readonly="readonly" style="width: 100%; height: 30px; border: 0px;background-color: #F0E68C; text-align:right; font-size:14px" name="jumlah(3a-3c)" id="jumlah(3a-3c)"></td>
                </tr>
                <tr>
                    <th style="width: 3%; font-size: 12px; text-align: center; border-right: 1px solid black">4</th>
                    <th style="width: 72%; font-size: 12px; border-right: 0px">JUMLAH BAGIAN A (1e + 2l -3d)</th>
                    <th style="border-left: 1px solid black; border-top: 1px solid black; font-size: 12px; text-align:center">4.</th>
                    <th style="font-size: 12px; text-align: center; border: 1px solid black; background-color: #F0E68C"><input type="text" disabled="true" readonly="readonly" style="width: 100%; height: 30px; border: 0px;background-color: #F0E68C; text-align:right; font-size:14px" name="jumlah(1e+2l-3d)" id="jumlah(1e+2l-3d)"></th>
                </tr>

            </table>


        </div>
    </div>

    <br>
    <div class="pagebreak"> </div>
    <!-- Formulir-I hal 2 -->
    <div class="container">
        <!-- Header -->
        <div class="row" style="border-bottom: 2px solid black;">
            <div class="col-2 col-md-2 text-center">
                <h6>HALAMAN 2</h6>
                <h4>FORMULIR</h4>
                <h3>1770-I</h3>
                <p style="font-size: 12px;">KEMENTERIAN KEUANGAN <br>RI DIREKTORAT JENDERAL <br> PAJAK</p>
            </div>
            <div class="col-6 col-md-6" style="border-left: 2px solid black; border-right:2px solid black">
                <div class="row">
                    <h5 class="text-center">LAMPIRAN-I</h5>
                    <p style="font-size: 14px; text-align:center; font-weight:bold; border-bottom: 2px solid black">SPT TAHUNAN PPh WAJIB PAJAK ORANG PRIBADI</p>
                </div>
                <div class="row" style="font-size: 12px">
                    <b>* PERHITUNGAN PENGHASILAN NETO DALAM NEGERI DARI USAHA DAN/ATAU PEKERJAAN BEBAS BAGI WAJIB PAJAK YANG MENYELENGGARAKAN PENCATATAN</b>
                    <b>* PERHITUNGAN PENGHASILAN NETO DALAM NEGERI SEHUBUNGAN DENGAN PEKERJAAN</b>
                    <b>* PENGHITUNGAN PENGHASILAN DALAM NEGERI LAINNYA</b>
                </div>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col">
                        <table class="table table-bordered border-secondary text-center">
                            <th>{{ mb_substr($spt['tahun'], 0, 1); }}</th>
                            <th>{{ mb_substr($spt['tahun'], 1, 1); }}</th>
                            <th>{{ mb_substr($spt['tahun'], 2, 1); }}</th>
                            <th>{{ mb_substr($spt['tahun'], 3, 1); }}</th>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <table class="table table-bordered border-secondary">
                            <tr>
                                <th>0</th>
                                <th>1</th>
                                <th>{{ mb_substr($spt['tahun'], 2, 1); }}</th>
                                <th>{{ mb_substr($spt['tahun'], 3, 1); }}</th>
                            </tr>
                        </table>
                    </div>
                    <div class="col-2">
                    </div>
                    <div class="col-4">
                        <table class="table table-bordered border-secondary">
                            <tr>
                                <th>1</th>
                                <th>2</th>
                                <th>{{ mb_substr($spt['tahun'], 2, 1); }}</th>
                                <th>{{ mb_substr($spt['tahun'], 3, 1); }}</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="form-check" style="display:inline-block; margin-left: 10px">
                    <input style="display:inline;" class="form-check-input" type="radio" name="" id="flexRadioDisabled" value="pembukuan" <?= ($spt->jenis_pelaporan  == 'pembukuan') ? 'checked' : '' ?> disabled>
                    <label class="form-check-label" for="flexRadioDisabled" style="font-size: 14px;">
                        Pembukuan
                    </label>
                </div>
                <div class="form-check" style="display:inline-block; margin-left: 10px">
                    <input class="form-check-input" type="radio" name="" id="flexRadioCheckedDisabled" value="pencatatan" <?= ($spt->jenis_pelaporan  == 'pencatatan') ? 'checked' : '' ?> disabled>
                    <label class="form-check-label" for="flexRadioCheckedDisabled" style="font-size: 14px;">
                        Pencatatan
                    </label>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div>
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <label style="font-size: 11px; margin-left: 15px">SPT Pembetulan Ke</label>
                                    <input style="width:20px; height: 15px; border: 1px solid;  margin-left: 15px" value="{{ $spt['pembetulan'] }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Isi -->
        <b style="font-size: 8.5px;">PERHATIAN *SEBELUM MENGISI BACALAH PETUNJUK PENGISIAN *ISI DENGAN HURU CETAK/DIKETIK
            DENGAN TINTA HITAM *BERI TANDA X DALAM KOTAK SESUAI PILIHAN</b>
        <!-- Data WP -->
        <div class="col-sm-12" style=" border: 1px solid black; padding: 8px 10px 1px 10px ; height: 80PX; border: 2px solid; margin-left: 10px">
            <div style="display:flex ; flex-direction:row ">
                <div>
                    <label style="font-size: 11px;">NPWP</label>
                </div>
                <div style="margin-left: 319px;">
                    <input class="form-control" type="text" style="width:600px ;border: 1px solid black; height: 30px; border-radius: 1px; " value="{{ $npwp }}" disabled="disabled" id="npwpformulirI-2">
                </div>
            </div>
            <div style="display:flex ; flex-direction:row ">
                <div>
                    <label style="font-size: 11px; width: 150px">NAMA WAJIB PAJAK</label>
                </div>
                <div style="margin-left: 200px;">
                    <input class="form-control" type="text" style="width:600px ;border: 1px solid black; height: 30px; border-radius: 1px; " value="{{ $nama }}" disabled="disabled">
                </div>
            </div>
        </div>

        <!-- Bagian B -->
        <p style="font-size: 11px; padding: 10px 0px 0px 0px">BAGIAN B. PENGHASILAN NETO DALAM NEGERI DARI USAHA DAN/ATAU PEKERJAAN BEBAS <br>
            (BAGI WAJIB PAJAK YANG MENYELENGGARAKAN PENCATATAN)</p>
        <table id="Bagian_A">
            <tr>
                <th class="thsatu">NO</th>
                <th class="thdua">JENIS USAHA</th>
                <th class="thtiga">PEREDARAN USAHA</br>(Rupiah)</th>
                <th class="thempat">NORMA</br>(%)</th>
                <th class="thtiga">PENGHASILAN NETO</br>(Rupiah)</th>
            </tr>
            <tr class="kolom">
                <td class="thsatu">(1)</td>
                <td class="thdua">(2)</td>
                <td class="thtiga">(3)</td>
                <td class="thempat">(4)</td>
                <td class="thtiga">(5)</td>
            </tr>
            <tr>
                <td class="tdsatu">1.</td>
                <td class="tddua">DAGANG</td>
                <td class="tdtiga"><input type="text" class="form-control" value="{{ $formulir_i2b[0]->rupiah_peredaran_usahaB ?? '' }}" oninput="format_bagianB()" name="dagang_peredaran_usaha" id="dagang_peredaran_usaha" placeholder="0" disabled></td>
                <td class="tdempat"><input type="text" class="form-control" value="{{ $formulir_i2b[0]->norma ?? '' }}" id="norma_dagang" name="norma_dagang" disabled></td>
                <td class="tdtiga"><input type="text" class="form-control" value="{{ $formulir_i2b[0]->rupiah_penghasilan_netoB ?? '' }}" oninput="format2()" name="dagang_penghasilan_neto" id="dagang_penghasilan_neto" placeholder="0" disabled></td>
            </tr>
            <tr>
                <td class="tdsatu">2.</td>
                <td class="tddua">INDUSTRI</td>
                <td class="tdtiga"><input type="text" class="form-control" value="{{ $formulir_i2b[1]->rupiah_peredaran_usahaB ?? '' }}" oninput="format_bagianB()" name="industri_peredaran_usaha" id="industri_peredaran_usaha" placeholder="0" disabled></td>
                <td class="tdempat"><input type="text" class="form-control" value="{{ $formulir_i2b[1]->norma ?? '' }}" id="norma_industri" name="norma_indutri" disabled></td>
                <td class="tdtiga"><input type="text" class="form-control" value="{{ $formulir_i2b[1]->rupiah_penghasilan_netoB ?? '' }}" oninput="format3()" name="industri_penghasilan_neto" id="industri_penghasilan_neto" placeholder="0" disabled></td>
            </tr>
            <tr>
                <td class="tdsatu">3.</td>
                <td class="tddua">JASA</td>
                <td class="tdtiga"><input type="text" class="form-control" value="{{ $formulir_i2b[2]->rupiah_peredaran_usahaB ?? '' }}" oninput="format_bagianB()" name="jasa_peredaran_usaha" id="jasa_peredaran_usaha" placeholder="0" disabled></td>
                <td class="tdempat"><input type="text" class="form-control" value="{{ $formulir_i2b[2]->norma ?? '' }}" id="norma_jasa" name="norma_jasa" disabled></td>
                <td class="tdtiga"><input type="text" class="form-control" value="{{ $formulir_i2b[2]->rupiah_penghasilan_netoB ?? '' }}" oninput="format4()" name="jasa_penghasilan_neto" id="jasa_penghasilan_neto" placeholder="0" disabled></td>
            </tr>
            <tr>
                <td class="tdsatu">4.</td>
                <td class="tddua">PEKERJAAN BEBAS</td>
                <td class="tdtiga"><input type="text" class="form-control" value="{{ $formulir_i2b[3]->rupiah_peredaran_usahaB ?? '' }}" oninput="format_bagianB()" name="pbebas_peredaran_usaha" id="pbebas_peredaran_usaha" placeholder="0" disabled></td>
                <td class="tdempat"><input type="text" class="form-control" value="{{ $formulir_i2b[3]->norma ?? '' }}" id="norma_pbebas" name="norma_pbebas" disabled></td>
                <td class="tdtiga"><input type="text" class="form-control" value="{{ $formulir_i2b[3]->rupiah_penghasilan_netoB ?? '' }}" oninput="format5()" name="pbebas_penghasilan_neto" id="pbebas_penghasilan_neto" placeholder="0" disabled></td>
            </tr>
            <tr>
                <td class="tdsatu">5.</td>
                <td class="tddua">USAHA LAINNYA</td>
                <td class="tdtiga"><input type="text" class="form-control" value="{{ $formulir_i2b[4]->rupiah_peredaran_usahaB ?? '' }}" oninput="format_bagianB()" name="usaha_peredaran_usaha" id="usaha_peredaran_usaha" placeholder="0" disabled></td>
                <td class="tdempat"><input type="text" class="form-control" value="{{ $formulir_i2b[4]->norma ?? '' }}" id="norma_usaha" name="norma_usaha" disabled></td>
                <td class="tdtiga"><input type="text" class="form-control" value="{{ $formulir_i2b[4]->rupiah_penghasilan_netoB ?? '' }}" oninput="format6()" name="usaha_penghasilan_neto" id="usaha_penghasilan_neto" placeholder="0" disabled></td>
            </tr>
            <tr>
                <td class="tdsatu"></td>
                <td class="thdua">JUMLAH BAGIAN B</td>
                <td class="jumlahB"><input type="text" class="form-control" style="background-color: #F0E68C;" readonly="readonly" name="hasilusaha" id="hasilusaha"></td>
                <td class="thempat">JBB</td>
                <td class="jumlahB"><input input type="text" class="form-control" readonly="readonly" style="background-color: #F0E68C;" name="hasilneto" id="hasilneto"></td>
            </tr>
        </table>

        <!-- bagian C -->
        <p style="font-size: 11px; padding: 10px 0px 0px 0px">BAGIAN C. PENGHASILAN NETO DALAM NEGERI SEHUBUNGAN DENGAN PEKERJAAN <br> (TIDAK TERMASUK PENGHASILAN YANG DIKENAKAN PPh BERSIFAT FINAL)</p>
        @csrf
        <input type="hidden" name="counted" value="{{ count($formulir_i2c ?? [])  }}">
        <table class="table table-bordered border-dark" width="100%">
            <tr style="font-size: 11px; text-align: center">
                <th>NPWP PEMBERI KERJA</th>
                <th>NAMA PEMBERI KERJA</th>
                <th>PENGHASILAN BRUTO</th>
                <th>PENGURANGAN</br>PENGHASILAN BRUTO</th>
                <th>PENGHASILAN NETO</th>
            </tr>
            @if (count($formulir_i2c ?? []) == 0)
            <tr style="height:10">
                <td><input type="text" name="npwp_pemberi_kerja[]" style="border: 0px; text-align:center" disabled></td>
                <td><input type="text" name="nama_pemberi_kerja[]" style="border: 0px; text-align:center" disabled></td>
                <td><input type="text" name="penghasilan_bruto[]" style="border: 0px; text-align:center" oninput="format_bagianC(this.value)" id="penghasilan_bruto" class="penghasilan_bruto" disabled></td>
                <td><input type="text" name="pengurangan_penghasilan_bruto[]" style="border: 0px; text-align:center" oninput="format_bagianC(this.value)" id="pengurangan_bruto" class="pengurangan_bruto" disabled></td>
                <td><input type="text" name="penghasilan_neto[]" style="border: 0px; text-align:center" oninput="format_bagianC(this.value)" class="penghasilan_neto" disabled></td>
            </tr>
            @endif
            <tbody>
                @foreach ( $formulir_i2c as $dh)
                <tr style="height:10">
                    <td><input type="text" name="npwp_pemberi_kerja[]" value="{{ $dh['npwp_pemberi_kerja'] }}" style="border: 0px; text-align:center" disabled></td>
                    <td><input type="text" name="nama_pemberi_kerja[]" value="{{ $dh['nama_pemberi_kerja'] }}" style="border: 0px; text-align:center" disabled></td>
                    <td><input type="text" name="penghasilan_bruto[]" value="{{ $dh['penghasilan_bruto'] }}" style="border: 0px; text-align:center" oninput="format_bagianC(this.value)" id="penghasilan_bruto" class="penghasilan_bruto" disabled></td>
                    <td><input type="text" name="pengurangan_penghasilan_bruto[]" value="{{ $dh['pengurangan_penghasilan_bruto'] }}" style="border: 0px; text-align:center" oninput="format_bagianC(this.value)" id="pengurangan_bruto" class="pengurangan_bruto" disabled></td>
                    <td><input type="text" name="penghasilan_neto[]" value="{{ $dh['penghasilan_neto'] }}" style="border: 0px; text-align:center" oninput="format_bagianC(this.value)" class="penghasilan_neto" disabled></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <template id="rowTemplateBagianC">
            <tr style="height:10">
                <td><input type="text" name="npwp_pemberi_kerja[]" style="border: 0px; text-align:center" disabled></td>
                <td><input type="text" name="nama_pemberi_kerja[]" style="border: 0px; text-align:center" disabled></td>
                <td><input type="text" name="penghasilan_bruto[]" style="border: 0px; text-align:center" oninput="format_bagianC(this.value)" id="penghasilan_bruto" class="penghasilan_bruto" disabled></td>
                <td><input type="text" name="pengurangan_penghasilan_bruto[]" style="border: 0px; text-align:center" oninput="format_bagianC(this.value)" id="pengurangan_bruto" class="pengurangan_bruto" disabled></td>
                <td><input type="text" name="penghasilan_neto[]" style="border: 0px; text-align:center" oninput="format_bagianC(this.value)" class="penghasilan_neto" disabled></td>
            </tr>
        </template>
        <table>
            <tr>
                <th class="jumlahC">JUMLAH BAGIAN C</th>
                <th class="thjumlah">
                    <input type="text" id="jumlah_bagianC" placeholder="0" style="border: 0px">
                </th>
            </tr>
        </table>
        <!-- Bagian D -->
        <p style="font-size: 11px; padding: 10px 0px 0px 0px">BAGIAN D. PENGHASILAN NETO DALAM NEGERI LAINNYA (TIDAK TERMASUK PENGHASILAN YANG DIKENAKAN PPh BERSIFAT FINAL)</p>
        <table width="100%">
            <tr>
                <th class="thsatu">NO</th>
                <th class="thdua2">JENIS USAHA</th>
                <th class="thdua2">PENGHASILAN NETO</br>(Rupiah)</th>
            </tr>
            <tr class="kolom">
                <td class="thsatu">(1)</td>
                <td class="thdua">(2)</td>
                <td class="thdua">(3)</td>
            </tr>
            <tr>
                <td class="tdsatu">1.</td>
                <td class="tddua2">BUNGA</td>
                <td class="tddua2"><input type="text" value="{{ $formulir_i2d[0]->rupiah_penghasilan_netoD ?? '' }}" oninput="format_bagianD()" name="bunga_penghasilan_neto" id="bunga_penghasilan_neto" placeholder="0" disabled></td>
            </tr>
            <tr>
                <td class="tdsatu">2.</td>
                <td class="tddua2">ROYALTI</td>
                <td class="tddua2"><input type="text" value="{{ $formulir_i2d[1]->rupiah_penghasilan_netoD ?? '' }}" oninput="format_bagianD()" name="royalti_penghasilan_neto" id="royalti_penghasilan_neto" placeholder="0" disabled></td>
            </tr>
            <tr>
                <td class="tdsatu">3.</td>
                <td class="tddua2">SEWA</td>
                <td class="tddua2"><input type="text" value="{{ $formulir_i2d[2]->rupiah_penghasilan_netoD ?? '' }}" oninput="format_bagianD()" name="sewa_penghasilan_neto" id="sewa_penghasilan_neto" placeholder="0" disabled></td>
            </tr>
            <tr>
                <td class="tdsatu">4.</td>
                <td class="tddua2">PENGHARGAAN DAN HADIAH</td>
                <td class="tddua2"><input type="text" value="{{ $formulir_i2d[3]->rupiah_penghasilan_netoD ?? '' }}" oninput="format_bagianD()" name="penghargaan_penghasilan_neto" id="penghargaan_penghasilan_neto" placeholder="0" disabled></td>
            </tr>
            <tr>
                <td class="tdsatu">5.</td>
                <td class="tddua2">KEUNTUNGAN DARI PENJUALAN/PENGALIHAN HARTA</td>
                <td class="tddua2"><input type="text" value="{{ $formulir_i2d[4]->rupiah_penghasilan_netoD ?? '' }}" oninput="format_bagianD()" name="keuntungan_penghasilan_neto" id="keuntungan_penghasilan_neto" placeholder="0" disabled></td>
            </tr>
            <tr>
                <td class="tdsatu">6.</td>
                <td class="tddua2">PENGHASILAN LAINNYA</td>
                <td class="tddua2"><input class="text" value="{{ $formulir_i2d[5]->rupiah_penghasilan_netoD ?? '' }}" oninput="format_bagianD()" name="penghasilanLain_penghasilan_neto" id="penghasilanLain_penghasilan_neto" placeholder="0" disabled></td>
            </tr>
        </table>
        <table width="100%">
            <tr>
                <td class="tdsatu2">JUMLAH BAGIAN D</td>
                <td class="tddua3">JBD</td>
                <td class="tdtiga2"><input input type="text" class="form-control" readonly="readonly" style="background-color: #F0E68C; text-align:right" name="hasilnetolain" id="hasilnetolain"></td>
            </tr>
        </table>
    </div>

    <br>
    <div class="pagebreak"> </div>
    <!-- Formulir-1770 -->
    <div class="container">
        <!-- Header -->
        <div class="row" style="border-bottom: 2px solid black;">
            <div class="col-2 col-md-2 text-center">
                <h4>FORMULIR</h4>
                <h3>1770</h3>
                <p style="font-size: 12px;">KEMENTERIAN KEUANGAN <br>RI DIREKTORAT JENDERAL <br> PAJAK</p>
            </div>
            <div class="col-6 col-md-6" style="border-left: 2px solid black; border-right:2px solid black">
                <div class="row">
                    <p style="font-size: 14px; text-align:center; font-weight:bold; border-bottom: 2px solid black">SPT TAHUNAN PPh WAJIB PAJAK ORANG PRIBADI</p>
                </div>
                <div class="row" style="font-size: 12px;">
                    <b>BAGI WAJIB PAJAK YANG MEMPUNYAI PENGHASILAN :</b>
                    <b><br> * DARI USAHA/PEKERJAAN BEBAS</b>
                    <b>* DARI SATU ATAU LEBIH PEMBERI KERJA</b>
                    <b>* YANG DIKENAKAN PPh FINAL DAN/ATAU BERSIFAT FINAL; DAN/ATAU;</b>
                    <b>* DALAM NEGERI LAINNYA ATAU LUAR NEGERI</b>

                </div>
            </div>
            <div class="col-4">
                <div class="row">
                    <div class="col">
                        <table class="table table-bordered border-secondary text-center">
                            <th>{{ mb_substr($spt['tahun'], 0, 1); }}</th>
                            <th>{{ mb_substr($spt['tahun'], 1, 1); }}</th>
                            <th>{{ mb_substr($spt['tahun'], 2, 1); }}</th>
                            <th>{{ mb_substr($spt['tahun'], 3, 1); }}</th>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <table class="table table-bordered border-secondary">
                            <tr>
                                <th>0</th>
                                <th>1</th>
                                <th>{{ mb_substr($spt['tahun'], 2, 1); }}</th>
                                <th>{{ mb_substr($spt['tahun'], 3, 1); }}</th>
                            </tr>
                        </table>
                    </div>
                    <div class="col-2">
                    </div>
                    <div class="col-4">
                        <table class="table table-bordered border-secondary">
                            <tr>
                                <th>1</th>
                                <th>2</th>
                                <th>{{ mb_substr($spt['tahun'], 2, 1); }}</th>
                                <th>{{ mb_substr($spt['tahun'], 3, 1); }}</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="form-check" style="display:inline-block; margin-left: 10px">
                    <input style="display:inline;" class="form-check-input" type="radio" name="" id="flexRadioDisabled" value="pembukuan" <?= ($spt->jenis_pelaporan  == 'pembukuan') ? 'checked' : '' ?> disabled>
                    <label class="form-check-label" for="flexRadioDisabled" style="font-size: 14px;">
                        Pembukuan
                    </label>
                </div>
                <div class="form-check" style="display:inline-block; margin-left: 10px">
                    <input class="form-check-input" type="radio" name="" id="flexRadioCheckedDisabled" value="pencatatan" <?= ($spt->jenis_pelaporan  == 'pencatatan') ? 'checked' : '' ?> disabled>
                    <label class="form-check-label" for="flexRadioCheckedDisabled" style="font-size: 14px;">
                        Pencatatan
                    </label>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div>
                                    <input type="checkbox" aria-label="Checkbox for following text input">
                                    <label style="font-size: 11px; margin-left: 15px">SPT Pembetulan Ke</label>
                                    <input style="width:20px; height: 15px; border: 1px solid;  margin-left: 15px" value="{{ $spt['pembetulan'] }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!-- Isi -->
        <b style="font-size: 8.5px;">PERHATIAN *SEBELUM MENGISI BACALAH PETUNJUK PENGISIAN *ISI DENGAN HURU CETAK/DIKETIK
            DENGAN TINTA HITAM *BERI TANDA X DALAM KOTAK SESUAI PILIHAN</b>

        <!-- Kolom Identitas -->
        @if(count($kolom_identitas) == 0)
        <form action="/SaveKolomIdentitas" method="POST">
            @csrf
            <input type="hidden" name="counted" value="{{count($kolom_identitas)   }}">
            <div class="item2">
                <div class="col-sm-11.5" style="padding: 4px 20px 10px 10px ; height: auto; border: 4px solid; margin-left: 10px">
                    <div style="display:flex ; flex-direction:row ">
                        <div>
                            <label style="font-size: 11px;">NPWP</label>
                        </div>
                        <div style="margin-left: 200px;">
                            <input class="form-control" type="text" style="width:430px ;border: 1px solid black; height: 30px; border-radius: 1px" id="npwp_wajibpajak" disabled>
                        </div>
                    </div>
                    <div style="display:flex ; flex-direction:row ">
                        <div>
                            <label style="font-size: 11px; width: 150px">NAMA WAJIB PAJAK</label>
                        </div>
                        <div style="margin-left: 81px;">
                            <input class="form-control" type="text" style="width:430px ;border: 1px solid black; height: 30px; border-radius: 1px; text-transform:uppercase" id="nama_wajibpajak" disabled>
                        </div>
                    </div>
                    <div style="display:flex ; flex-direction:row ">
                        <div>
                            <label style="font-size: 11px; width: 150px">JENIS USAHA/PEKERJAAN BEBAS</label>
                        </div>
                        <div style="margin-left: 81px;">
                            <input class="form-control" type="text" style="width:270px ;border: 1px solid black; height: 30px; border-radius: 1px; text-transform:uppercase" id="jenis_usaha" disabled>
                        </div>
                        <div>
                            <label style="font-size: 11px; width: 60px">&nbsp; &nbsp; KLU</label>
                        </div>
                        <div>
                            <input class="form-control" type="text" style="width:100px ;border: 1px solid black; height: 30px; border-radius: 1px" id="klu" disabled>
                        </div>
                    </div>
                    <div style="display:flex ; flex-direction:row ">
                        <div>
                            <label style="font-size: 11px; width: 150px">NO.TELEPON/FAKSIMILI</label>
                        </div>
                        <div style="margin-left: 81px;">
                            <input class="form-control" type="text" style="width:270px ;border: 1px solid black; height: 30px; border-radius: 1px" id="no_telepon" disabled>
                        </div>
                        <div>
                            <label style="font-size: 11px; width: 60px">&nbsp; &nbsp; FAX</label>
                        </div>
                        <div>
                            <input class="form-control" type="text" style="width:100px ;border: 1px solid black; height: 30px; border-radius: 1px" id="fax" disabled>
                        </div>
                    </div>
                    <div style="display:flex ; flex-direction:row ">
                        <div>
                            <label style="font-size: 11px; width: 150px">STATUS KEWAJIBAN PERPAJAKAN SUAMI-ISTERI</label>
                        </div>
                        <div style="margin-left: 81px;">
                            <div class="form-check" style="display:inline-block">
                                <input style="display:inline;" id="SUBMIT1" class="form-check-input" type="radio" name="status" id="flexRadioDisabled" value="kk">
                                <label class="form-check-label" for="flexRadioDisabled" style="font-size: 14px;">
                                    KK
                                </label>
                            </div>
                            <div class="form-check" style="display:inline-block">
                                <input class="form-check-input" id="SUBMIT2" type="radio" name="status" id="flexRadioCheckedDisabled" value="hb">
                                <label class="form-check-label" for="flexRadioCheckedDisabled" style="font-size: 14px;">
                                    HB
                                </label>
                            </div>
                            <div class="form-check" style="display:inline-block">
                                <input class="form-check-input" id="PH" type="radio" name="status" id="flexRadioCheckedDisabled" value="ph">
                                <label class="form-check-label" for="flexRadioCheckedDisabled" style="font-size: 14px;">
                                    PH
                                </label>
                            </div>
                            <div class="form-check" style="display:inline-block">
                                <input class="form-check-input" id="PH1" type="radio" name="status" id="flexRadioCheckedDisabled" value="mt">
                                <label class="form-check-label" for="flexRadioCheckedDisabled" style="font-size: 14px;">
                                    MT
                                </label>
                            </div>
                        </div>
                    </div>
                    <div style="display:flex ; flex-direction:row ">
                        <div>
                            <label style="font-size: 11px; width: 150px">NPWP SUAMI/ISTERI</label>
                        </div>
                        <div style="margin-left: 81px;">
                            <input class="form-control" type="text" style="width:430px ;border: 1px solid black; height: 30px; border-radius: 1px; " disabled id="npwp_suamiisteri">
                        </div>
                    </div>
                    <p style="text-align: center; font-weight:bold; font-size: 12px">
                        Permohonan perubahan data dapat disampaikan terpisah dari pelaporan SPT Tahunan Orang Pribadi ini, dengan menggunakan
                        Formulir Perubahan Data Wajib Pajak dan dilengkapi dokumen yang diisyaratkan
                    </p>
                </div>
            </div>
        </form>
        @endif

        @if(count($kolom_identitas) == 1)
        <form action="/SaveKolomIdentitas" method="POST">
            @csrf
            <input type="hidden" name="counted" value="{{count($kolom_identitas)   }}">
            <div class="item2">
                <div class="col-sm-11.5" style="padding: 4px 20px 10px 10px ; height: auto; border: 4px solid; margin-left: 10px">
                    <div style="display:flex ; flex-direction:row ">
                        <div>
                            <label style="font-size: 11px;">NPWP</label>
                        </div>
                        <div style="margin-left: 200px;">
                            <input class="form-control" type="text" style="width:430px ;border: 1px solid black; height: 30px; border-radius: 1px" id="npwp_wajibpajak" value="{{ $kolom_identitas[0]['npwp_wajibpajak'] ?? '' }}" disabled>
                        </div>
                    </div>
                    <div style="display:flex ; flex-direction:row ">
                        <div>
                            <label style="font-size: 11px; width: 150px">NAMA WAJIB PAJAK</label>
                        </div>
                        <div style="margin-left: 81px;">
                            <input class="form-control" type="text" style="width:430px ;border: 1px solid black; height: 30px; border-radius: 1px; text-transform:uppercase" id="nama_wajibpajak" value="{{ $kolom_identitas[0]['nama_wajibpajak'] ?? '' }}" disabled>
                        </div>
                    </div>
                    <div style="display:flex ; flex-direction:row ">
                        <div>
                            <label style="font-size: 11px; width: 150px">JENIS USAHA/PEKERJAAN BEBAS</label>
                        </div>
                        <div style="margin-left: 81px;">
                            <input class="form-control" type="text" style="width:270px ;border: 1px solid black; height: 30px; border-radius: 1px; text-transform:uppercase" id="jenis_usaha" value="{{ $kolom_identitas[0]['jenis_usaha'] ?? '' }}" disabled>
                        </div>
                        <div>
                            <label style="font-size: 11px; width: 60px">&nbsp; &nbsp; KLU</label>
                        </div>
                        <div>
                            <input class="form-control" type="text" style="width:100px ;border: 1px solid black; height: 30px; border-radius: 1px" id="klu" value="{{ $kolom_identitas[0]['klu'] ?? '' }}" disabled>
                        </div>
                    </div>
                    <div style="display:flex ; flex-direction:row ">
                        <div>
                            <label style="font-size: 11px; width: 150px">NO.TELEPON/FAKSIMILI</label>
                        </div>
                        <div style="margin-left: 81px;">
                            <input class="form-control" type="text" style="width:270px ;border: 1px solid black; height: 30px; border-radius: 1px" id="no_telepon" value="{{ $kolom_identitas[0]['no_telepon'] ?? '' }}" disabled>
                        </div>
                        <div>
                            <label style="font-size: 11px; width: 60px">&nbsp; &nbsp; FAX</label>
                        </div>
                        <div>
                            <input class="form-control" type="text" style="width:100px ;border: 1px solid black; height: 30px; border-radius: 1px" id="fax" value="{{ $kolom_identitas[0]['fax'] ?? '' }}" disabled>
                        </div>
                    </div>
                    <div style="display:flex ; flex-direction:row ">
                        <div>
                            <label style="font-size: 11px; width: 150px">STATUS KEWAJIBAN PERPAJAKAN SUAMI-ISTERI</label>
                        </div>
                        <div style="margin-left: 81px;">
                            <div class="form-check" style="display:inline-block">
                                <input style="display:inline;" id="SUBMIT1" class="form-check-input" type="radio" name="status" id="flexRadioDisabled" value="kk" <?= ($kolom_identitas[0]->status_perpajakan  == 'kk') ? 'checked' : '' ?>>
                                <label class="form-check-label" for="flexRadioDisabled" style="font-size: 14px;">
                                    KK
                                </label>
                            </div>
                            <div class="form-check" style="display:inline-block">
                                <input class="form-check-input" id="SUBMIT2" type="radio" name="status" id="flexRadioCheckedDisabled" value="hb" <?= ($kolom_identitas[0]->status_perpajakan  == 'hb') ? 'checked' : '' ?>>
                                <label class="form-check-label" for="flexRadioCheckedDisabled" style="font-size: 14px;">
                                    HB
                                </label>
                            </div>
                            <div class="form-check" style="display:inline-block">
                                <input class="form-check-input" id="PH" type="radio" name="status" id="flexRadioCheckedDisabled" value="ph" <?= ($kolom_identitas[0]->status_perpajakan  == 'ph') ? 'checked' : '' ?>>
                                <label class="form-check-label" for="flexRadioCheckedDisabled" style="font-size: 14px;">
                                    PH
                                </label>
                            </div>
                            <div class="form-check" style="display:inline-block">
                                <input class="form-check-input" id="PH1" type="radio" name="status" id="flexRadioCheckedDisabled" value="mt" <?= ($kolom_identitas[0]->status_perpajakan  == 'mt') ? 'checked' : '' ?>>
                                <label class="form-check-label" for="flexRadioCheckedDisabled" style="font-size: 14px;">
                                    MT
                                </label>
                            </div>
                        </div>
                    </div>
                    <div style="display:flex ; flex-direction:row ">
                        <div>
                            <label style="font-size: 11px; width: 150px">NPWP SUAMI/ISTERI</label>
                        </div>
                        <div style="margin-left: 81px;">
                            <input class="form-control" type="text" style="width:430px ;border: 1px solid black; height: 30px; border-radius: 1px; " disabled id="npwp_suamiisteri">
                        </div>
                    </div>
                    <p style="text-align: center; font-weight:bold; font-size: 12px">
                        Permohonan perubahan data dapat disampaikan terpisah dari pelaporan SPT Tahunan Orang Pribadi ini, dengan menggunakan
                        Formulir Perubahan Data Wajib Pajak dan dilengkapi dokumen yang diisyaratkan
                    </p>
                </div>
            </div>
        </form>
        @endif

        <div style="padding: 10px"></div>

        <!-- Tabel Lampiran 1770 -->
        <table style="width: 99%; margin-left: 10px">
            <tr>
                <th style="border: 1px solid black; width: 75%; height: 20px; font-size: 11px; text-align: left">*)Pengisian kolom-kolom yang berisi nilai rupiah harus tanpa nilai desimal (contoh penulisan lihat petunjuk pengisian halaman 3)</th>
                <th style="border: 1px solid black; width: 25%; font-size: 11px; text-align: center">Rupiah</th>
            </tr>
        </table>
        <table style="width: 99%; margin-left: 10px">
            <tr>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 7%; text-align: center;font-size: 11px ">A</td>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 55%;  font-size: 12px;">1. <span style="margin-left: 5px">PENGHASILAN NETO DALAM NEGERI DARI USAHA DAN/ATAU PEKERJAAN BEBAS</span> </br>
                    <u style="font-size: 11px; margin-left: 20px">[Diisi dari Formulir 1770-I Halaman 1 Jumlah Bagian A atau Formulir 1770-I Halaman 2 Jumlah Bagaian B Kolom 5]</u>
                </td>
                <td style="border: 1px solid black; border-top: 0px; width: 3%;  text-align: center; font-size:12px">1</td>
                <td style="border: 1px solid black; border-top: 0px; width: 18%; background-color: #F0E68C"><input type="text" style="width: 100%; border: 0px solid black; background-color: #F0E68C; text-align:right" id="penghasilanneto1" value="{{ $kolom5 }}" placeholder="0" oninput="formulir1770()" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 5%; font-size:11px; text-align:center">PENGHASILAN</br>NETO</td>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 55%;  font-size: 12px">2. <span style="margin-left: 5px"> PENGHASILAN NETO DALAM NEGERI SEHUBUNGAN DENGAN PEKERJAAN</span></br>
                    <u style="font-size: 11px; margin-left: 20px">[Diisi dri Formulir 1770-I Halaman 2 Jumlah Bagian C Kolom 5]</u>
                </td>
                <td style="border: 1px solid black; border-top: 0px; width: 3%;  text-align: center; font-size:12px">2</td>
                <td style="border: 1px solid black; border-top: 0px; width: 17%; background-color: #F0E68C"><input type="text" style="width: 100%; border: 0px solid black; background-color: #F0E68C; text-align:right" placeholder="0" id="penghasilanneto2" value="{{ $totalformulir_i2c }}" oninput="formulir1770()" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 5%; "></td>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 55%; ; font-size: 12px">3. <span style="margin-left: 5px">PENGHASILAN NETO DALAM NEGERI LAINNYA</span> </br>
                    <u style="font-size: 11px; margin-left: 20px">[Diisi dri Formulir 1770-I Halaman 2 Jumlah Bagian D Kolom 3]</u>
                </td>
                <td style="border: 1px solid black; border-top: 0px; width: 3%;  text-align: center;  font-size:12px">3</td>
                <td style="border: 1px solid black; border-top: 0px; width: 17%; background-color: #F0E68C"><input type="text" style="width: 100%; border: 0px solid black; background-color: #F0E68C; text-align: right" placeholder="0" id="penghasilanneto3" value="{{ $formulir_i2d }}" oninput="formulir1770()" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 5%; "></td>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 55%; ; font-size: 12px">4. <span style="margin-left: 5px">PENGHASILAN NETO LUAR NEGERI</span> </br>
                    <u style="font-size: 11px; margin-left: 20px">[Apabila memiliki penghasilan dari luar negeri agar diisi dari Lampiran Tersendiri, lihat petunjuk pengisian]</u>
                </td>
                <td style="border: 1px solid black; border-top: 0px; width: 3%;  text-align: center;  font-size:12px">4</td>
                <td style="border: 1px solid black; border-top: 0px; width: 17%; "><input type="text" style="width: 100%; border: 0px solid black; text-align:right" placeholder="0" id="penghasilanneto4" value="{{ $formulir_1770[3]->rupiah_daftar_poin ?? '' }}" oninput="formulir1770()" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 5%; "></td>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 55%; ; font-size: 12px">5. <span style="margin-left: 5px">JUMLAH PENGHASILAN NETO (1+2+3+4)</span></br></br></td>
                <td style="border: 1px solid black; border-top: 0px; width: 3%;  text-align: center;  font-size:12px">5</td>
                <td style="border: 1px solid black; border-top: 0px; width: 17%; background-color: #F0E68C"><input type="text" style="width: 100%; border: 0px solid black; background-color: #F0E68C; text-align:right" placeholder="0" id="penghasilanneto5" value="{{ $formulir_1770[4]->rupiah_daftar_poin ?? '' }}" oninput="formulir1770()" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 5%; "></td>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 55%; ; font-size: 12px">6. <span style="margin-left: 5px">ZAKAT / SUMBANGAN KEAGAMAAN YANG BERSIFAT WAJIB</span></br></br></td>
                <td style="border: 1px solid black; border-top: 0px; width: 3%;  text-align: center;  font-size:12px">6</td>
                <td style="border: 1px solid black; border-top: 0px; width: 17%; "><input type="text" style="width: 100%; border: 0px solid black; text-align:right" placeholder="0" id="penghasilanneto6" value="{{ $formulir_1770[5]->rupiah_daftar_poin ?? '' }}" oninput="formulir1770()" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-top: 0px; width: 5%; "></td>
                <td style="border: 1px solid black; border-top: 0px; width: 55%; ; font-size: 12px">7. <span style="margin-left: 5px">JUMLAH PENGHASILAN NETO SETELAH PENGURANGAN ZAKAT/SUMBANGAN</span></br> <span style="margin-left: 20px">KEAGAMAAN YANG SIFATNYA WAJIB (5-6)</span></td>
                <td style="border: 1px solid black; border-top: 0px; width: 3%;  text-align: center;  font-size:12px">7</td>
                <td style="border: 1px solid black; border-top: 0px; width: 17%; background-color: #F0E68C"><input type="text" style="width: 100%; border: 0px solid black; background-color: #F0E68C; text-align:right" placeholder="0" id="penghasilanneto7" value="{{ $formulir_1770[6]->rupiah_daftar_poin ?? '' }}" oninput="formulir1770()" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 5%; font-size: 11px; text-align:center">B</td>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 55%; ; font-size: 12px">8. <span style="margin-left: 5px">KOMPENSASI KERUGIAN</span></br></br></td>
                <td style="border: 1px solid black; border-top: 0px; width: 3%;  text-align: center;  font-size:12px">8</td>
                <td style="border: 1px solid black; border-top: 0px; width: 17%"><input type="text" style="width: 100%; border: 0px solid black; text-align:right" placeholder="0" id="penghasilankenapajak8" value="{{ $formulir_1770[7]->rupiah_daftar_poin ?? '' }}" oninput="formulir1770()" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 5%; font-size: 11px; text-align:center">PENGHASILAN</br>KENA PAJAK</td>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 55%; ; font-size: 12px">9. <span style="margin-left: 5px">JUMLAH PENGHASILAN NETO SETELAH KOMPENSASI KERUGIAN (7-8)</span></br></br></td>
                <td style="border: 1px solid black; border-top: 0px; width: 3%;  text-align: center;  font-size:12px">9</td>
                <td style="border: 1px solid black; border-top: 0px; width: 17%; background-color: #F0E68C"><input type="text" style="width: 100%; border: 0px solid black; background-color: #F0E68C; text-align:right" placeholder="0" id="penghasilankenapajak9" value="{{ $formulir_1770[8]->rupiah_daftar_poin ?? '' }}" oninput="formulir1770()" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 5%;"></td>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 55%; ; font-size: 12px">10. <span style="margin-left: 5px">PENGHASILAN TIDAK KENA PAJAK &emsp; &emsp; &emsp;</span>
                    <div class="form-check" style="display:inline-block">
                        <input style="display:inline;" class="form-check-input" type="radio" name="ptkp" value="TK" id="TK" <?= (explode('/', $form1770s->jenis_PTKP)[0]  == 'TK') ? 'checked' : '' ?> disabled>
                        <label class="form-check-label" for="flexRadioDisabled" style="font-size: 12px;">
                            TK
                        </label>
                    </div>
                    <div class="form-check" style="display:inline-block">
                        <input class="form-check-input" type="radio" name="ptkp" value="K" id="K" <?= (explode('/', $form1770s->jenis_PTKP)[0]  == 'K') ? 'checked' : '' ?> disabled>
                        <label class="form-check-label" for="flexRadioCheckedDisabled" style="font-size: 12px;">
                            K
                        </label>
                    </div>
                    <div class="form-check" style="display:inline-block">
                        <input class="form-check-input" type="radio" name="ptkp" value="KI" id="KI" <?= (explode('/', $form1770s->jenis_PTKP)[0]  == 'KI') ? 'checked' : '' ?> disabled>
                        <label class="form-check-label" for="flexRadioCheckedDisabled" style="font-size: 12px;">
                            K/I
                        </label>
                    </div>
                    <select class="col-sm-1" style="height: 20px; width: 50px; border: 1px solid black" oninput="formulir1770()" id="pilihanPTKP" disabled>
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
                <td style="border: 1px solid black; border-top: 0px; width: 3%;  text-align: center;  font-size:12px">10</td>
                <td style="border: 1px solid black; border-top: 0px; width: 17%; background-color: #F0E68C "><input type="text" style="width: 100%; border: 0px solid black; background-color: #F0E68C; text-align:right" placeholder="0" oninput="formulir1770()" id="inputPTKP" value="{{ $formulir_1770[9]->rupiah_daftar_poin ?? '' }}" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-top: 0px; width: 5%; "></td>
                <td style="border: 1px solid black; border-top: 0px; width: 55%; ; font-size: 12px">11. <span style="margin-left: 5px">PENGHASILAN KENA PAJAK (9-10) &emsp; &emsp; &emsp;</span>
                </td>

                <td style="border: 1px solid black; border-top: 0px; width: 3%;  text-align: center;  font-size:12px">11</td>
                <td style="border: 1px solid black; border-top: 0px; width: 17%; background-color: #F0E68C"><input type="text" style="width: 100%; border: 0px solid black; background-color: #F0E68C; text-align:right" placeholder="0" id="penghasilankenapajak11" value="{{ $formulir_1770[10]->rupiah_daftar_poin ?? '' }}" oninput="formulir1770()" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 5%; font-size: 11px; text-align:center">C</td>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 55%; ; font-size: 12px">12. <span style="margin-left: 5px">PPh TERUTANG (TARIF PASAL 17 UU PPh X ANGKA 11) &emsp; &emsp; &emsp; </span>
                    <input type="checkbox" aria-label="Checkbox for following text input" style="margin-left: -15px;" name="check" {{ $form1770s->perhitungan_sendiri ?'checked':'' }} id="PerhitunganSendiri" onclick="formulir1770(this)">
                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 12px;">Menggunakan Perhitungan Sendiri</label>
                </td>
                <td style="border: 1px solid black; border-top: 0px; width: 3%;  text-align: center;  font-size:12px">12</td>
                <td style="border: 1px solid black; border-top: 0px; width: 17%; background-color: #F0E68C"><input type="text" style="width: 100%; border: 0px solid black; background-color: #F0E68C; text-align:right" placeholder="0" id="pphterutang12" value="{{ $formulir_1770[11]->rupiah_daftar_poin ?? '' }}" oninput="formulir1770()" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 5%; font-size: 11px; text-align:center">PPh</br>TERUTANG</td>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 55%; ; font-size: 12px">13. <span style="margin-left: 5px">PENGEMBALIAN/PENGURANGAN PPh PASAL 24 YANG TELAH DIKREDITKAN</br></span> </td>
                <td style="border: 1px solid black; border-top: 0px; width: 3%;  text-align: center;  font-size:12px">13</td>
                <td style="border: 1px solid black; border-top: 0px; width: 17%; "><input type="text" style="width: 100%; border: 0px solid black; text-align:right" placeholder="0" oninput="formulir1770()" id="pphterutang13" value="{{ $formulir_1770[12]->rupiah_daftar_poin ?? '' }}" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-top: 0px; width: 5%; font-size: 11px; text-align:center"></td>
                <td style="border: 1px solid black; border-top: 0px; width: 55%; ; font-size: 12px">14. <span style="margin-left: 5px">JUMLAH PPh TERUTANG (12 + 13)</br></span> </td>
                <td style="border: 1px solid black; border-top: 0px; width: 3%;  text-align: center;  font-size:12px">14</td>
                <td style="border: 1px solid black; border-top: 0px; width: 17%; background-color: #F0E68C"><input type="text" style="width: 100%; border: 0px solid black;background-color: #F0E68C; text-align:right" placeholder="0" oninput="formulir1770()" id="pphterutang14" value="{{ $formulir_1770[13]->rupiah_daftar_poin ?? '' }}" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 5%; font-size: 11px; text-align:center">D</td>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 55%; ; font-size: 12px">15. <span style="margin-left: 5px">PPh YANG DIPOTONG/DIPUNGUT OLEH PIHAK LAIN, PPh YANG DIBAYAR/DIPOTONG DI LUAR</br></span>
                    <span style="margin-left: 25px;">NEGERI DAN PPh DITANGGUNG PEMERINTAH [Diisi dari formulir 1770-II Jumlah Bagian A Kolom 7]</span>
                </td>
                <td style="border: 1px solid black; border-top: 0px; width: 3%;  text-align: center;  font-size:12px">15</td>
                <td style="border: 1px solid black; border-top: 0px; width: 17%; background-color: #F0E68C"><input type="text" style="width: 100%; border: 0px solid black; background-color: #F0E68C; text-align:right" placeholder="0" oninput="formulir1770()" id="kreditpajak15" value="{{ $formulir_1770[14]->rupiah_daftar_poin ?? '' }}" id="kreditpajak15" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 5%; font-size: 11px; text-align:center">KREDIT</br>PAJAK</td>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 55%; ; font-size: 12px">16.
                    <div class="form-check" style="display:inline-block; border-bottom: 1px solid black">
                        <input style="display:inline;" class="form-check-input" type="radio" name="Nomor16" id="pphBayarSendiri" value="bayarsendiri" <?= ($form1770s->jenis_KreditPajak  == 'bayarsendiri') ? 'checked' : '' ?> onclick="formulir1770()" disabled>
                        <label class="form-check-label" for="flexRadioDisabled" style="font-size: 11px;">
                            a. PPh YANG HARUS DIBAYAR SENDIRI
                        </label>
                    </div>
                    <br>
                    <div class="form-check" style="display:inline-block; margin-left: 20px">
                        <input style="display:inline;" class="form-check-input" type="radio" name="Nomor16" id="pphPotongPungut" value="potongpungut" <?= ($form1770s->jenis_KreditPajak  == 'potongpungut') ? 'checked' : '' ?> onclick="formulir1770()" disabled>
                        <label class="form-check-label" for="flexRadioDisabled" style="font-size: 11px;">
                            b. PPh YANG LEBIH DIPOTONG/DIPUNGUT
                        </label>
                    </div>(14-15)
                </td>
                <td style="border: 1px solid black; border-top: 0px; width: 3%;  text-align: center;  font-size:12px">16</td>
                <td style="border: 1px solid black; border-top: 0px; width: 17%; background-color: #F0E68C"><input type="text" style="width: 100%; border: 0px solid black; background-color: #F0E68C; text-align:right" placeholder="0" oninput="formulir1770()" id="kreditpajak16" value="{{ $formulir_1770[15]->rupiah_daftar_poin ?? '' }}" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 5%; font-size: 11px; text-align:center"></td>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 55%; ; font-size: 12px">17. <span style="margin-left: 5px">PPh YANG DIBAYAR SENDIRI &emsp; a. PPh PASAL 25 BULANAN</br></span></td>
                <td style="border: 1px solid black; border-top: 0px; width: 3%;  text-align: center;  font-size:12px">17a</td>
                <td style="border: 1px solid black; border-top: 0px; width: 17%; "><input type="text" style="width: 100%; border: 0px solid black; text-align:right" placeholder="0" oninput="formulir1770()" id="kreditpajak17a" value="{{ $formulir_1770[16]->rupiah_daftar_poin ?? '' }}" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 5%; font-size: 11px; text-align:center"></td>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 55%; ; font-size: 12px"><span style="margin-left: 210px">b. STP PPh PASAL 25 (HANYA POKOK PAJAK)</br></span></td>
                <td style="border: 1px solid black; border-top: 0px; width: 3%;  text-align: center;  font-size:12px">17b</td>
                <td style="border: 1px solid black; border-top: 0px; width: 17%; "><input type="text" style="width: 100%; border: 0px solid black; text-align:right" placeholder="0" oninput="formulir1770()" id="kreditpajak17b" value="{{ $formulir_1770[17]->rupiah_daftar_poin ?? '' }}" disabled></td>
            </tr>

            <tr>
                <td style="border: 1px solid black; border-top: 0px; width: 5%; font-size: 11px; text-align:center"></td>
                <td style="border: 1px solid black; border-top: 0px; width: 55%; ; font-size: 12px">18. <span style="margin-left: 5px">JUMLAH KREDIT PAJAK (17a + 17b)</br></span></td>
                <td style="border: 1px solid black; border-top: 0px; width: 3%;  text-align: center;  font-size:12px">18</td>
                <td style="border: 1px solid black; border-top: 0px; width: 17%; background-color: #F0E68C "><input type="text" style="width: 100%; border: 0px solid black; background-color: #F0E68C; text-align:right" placeholder="0" oninput="formulir1770()" id="kreditpajak18" value="{{ $formulir_1770[18]->rupiah_daftar_poin ?? '' }}" disabled></td>
            </tr>
        </table>

        <table style="width: 99%; margin-left: 10px">
            <tr>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 8.4%; font-size: 11px; text-align:center">E</td>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 35%; ; font-size: 12px">19.
                    <div class="form-check" style="display:inline-block; border-bottom: 1px solid black">
                        <input style="display:inline;" class="form-check-input" type="radio" name="Nomor19" id="KurangBayar" value="kurangbayar" <?= ($form1770s->jenis_PPhKurang_LebihBayar  == 'kurangbayar') ? 'checked' : '' ?> disabled>
                        <label class="form-check-label" for="flexRadioDisabled" style="font-size: 11px;">
                            a. PPh YANG KURANG DIBAYAR (PPh PASAL 29)
                        </label>
                    </div>
                    <br>
                    <div class="form-check" style="display:inline-block; margin-left: 20px">
                        <input style="display:inline;" class="form-check-input" type="radio" name="Nomor19" id="LebihBayar" value="lebihbayar" <?= ($form1770s->jenis_PPhKurang_LebihBayar  == 'lebihbayar') ? 'checked' : '' ?> disabled>
                        <label class="form-check-label" for="flexRadioDisabled" style="font-size: 11px;">
                            b. PPh YANG LEBIH DIBAYAR (PPh PASAL 28 A)
                        </label>
                    </div>(16-18)
                </td>
                <td style="border: 1px solid black; border-top: 0px; font-size: 12px; text-align:center; width: 6%">Tgl Lunas</td>
                <td style="border: 1px solid black; border-top: 0px; width: 14%"><input type="date" style="width: 100%; border: 0px; font-size: 12px" id="tanggal_lunas" value="<?= $form1770s['tanggal_lunas'] ?? "" ?>"></td>
                <td style="border: 1px solid black; border-top: 0px; width: 3%;  text-align: center;  font-size:12px">19</td>
                <td style="border: 1px solid black; border-top: 0px; width: 18%; background-color: #F0E68C"><input type="text" style="width: 100%; border: 0px solid black; background-color: #F0E68C; text-align:right" placeholder="0" oninput="formulir1770()" id="KurangLebihBayar19" value="{{ $formulir_1770[19]->rupiah_daftar_poin ?? '' }}" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-top: 0px; width: 8.4%; font-size: 11px; text-align:center">PPh KURANG/</br>LEBIH BAYAR</td>
                <td style="border: 1px solid black; border-top: 0px; border-right: 0px; width: 35%; ; font-size: 12px">20. <span style="margin-left: 5px">PERMOHONAN : PPh Lebih Bayar Pada 19.b mohon</br></span>
                </td>
                <td style="width: 6%; border-bottom: 1px solid black"></td>
                <td style="width: 14%; border-bottom: 1px solid black">
                    <input type="checkbox" id="pembetulan2" aria-label="Checkbox for following text input" name="Nomor20" value="direstitusikan" <?= ($form1770s->permohonan_PPhLebihBayar  == 'direstitusikan') ? 'checked' : '' ?> disabled>
                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 9px;">a. DIRESTITUSIKAN</label></br>
                    <input type="checkbox" id="pembetulan2" aria-label="Checkbox for following text input" name="Nomor20" value="diperhitungkan" <?= ($form1770s->permohonan_PPhLebihBayar  == 'diperhitungkan') ? 'checked' : '' ?> disabled>
                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 9px;">b. DIPERHITUNGKAN</br> DENGAN UTANG PAJAK</label>
                </td>
                <td style="width: 3%; border-bottom: 1px solid black"></td>
                <td style="width: 18%; border-bottom: 1px solid black; border-right: 1px solid black">
                    <input type="checkbox" id="pembetulan2" aria-label="Checkbox for following text input" name="Nomor20" value="skppkp17c" <?= ($form1770s->permohonan_PPhLebihBayar  == 'skppkp17c') ? 'checked' : '' ?> disabled>
                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 9px;">c. DIKEMBALIKAN DENGAN SKPPKP 17C</br>
                        (WP dengan Kriteria Tertentu)</label></br>
                    <input type="checkbox" id="pembetulan2" aria-label="Checkbox for following text input" name="Nomor20" value="skppkp17d" <?= ($form1770s->permohonan_PPhLebihBayar  == 'skppkp17d') ? 'checked' : '' ?> disabled>
                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 9px;">d. DIKEMBALIKAN DENGAN SKPPKP 17D</br>
                        (WP yang Memenuhi Persyaratan Tertentu )</label>
            </tr>
        </table>

        <table style="width: 99%; margin-left: 10px">
            <tr>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 8.7%; text-align: center;font-size: 11px ">F</td>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 58%;  font-size: 12px;">21. <span style="margin-left: 5px; font-size: 11px">ANGSURAN PPh PASAL 25 TAHUN PAJAK BERIKUTNYA DIHITUNG SEBESAR. DIHITUNG BERDASARKAN :</span> </br>
                </td>
                <td style="border: 1px solid black; border-top: 0px; width: 3%;  text-align: center; font-size:12px">21</td>
                <td style="border: 1px solid black; border-top: 0px; width: 18%; "><input type="text" style="width: 100%; border: 0px solid black; text-align:right" placeholder="0" oninput="formulir1770()" id="pasal25" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-top: 0px; width: 8.7%; text-align: center;font-size: 11px ">ANGSURAN PPh</br>PASAL 25 TAHUN</br>PAJAK BERIKUTNYA</td>
                <td style="border: 1px solid black; border-top: 0px;  border-right: 0px; width: 58%;  font-size: 12px;">
                    <input type="checkbox" id="pembetulan2" aria-label="Checkbox for following text input" style="margin-left: 20px" name="Nomor21" value="1/2XAngka16" <?= ($form1770s->angsuran_PPh25  == '1/2XAngka16') ? 'checked' : '' ?> disabled>
                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 10px;">a. 1/2 X JUMLAH PADA ANGKA 16</label>

                    <input type="checkbox" id="pembetulan2" aria-label="Checkbox for following text input" style="margin-left: 20px" name="Nomor21" value="PengusahaTertentu" <?= ($form1770s->angsuran_PPh25  == 'PengusahaTertentu') ? 'checked' : '' ?> disabled>
                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 10px">b. PERHITUNGAN WAJIB PAJAK ORANG PRIBADI PENGUSAHA TERTENTU</label>
                </td>
                <td style="border-bottom: 1px solid black; width: 3%"></td>
                <td style="border-bottom: 1px solid black; border-right: 1px solid black; width: 18%">
                    <input type="checkbox" id="pembetulan2" aria-label="Checkbox for following text input" name="Nomor21" value="LampiranSendiri" <?= ($form1770s->angsuran_PPh25  == 'LampiranSendiri') ? 'checked' : '' ?> disabled>
                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 10px">c. PERHITUNGAN DALAM</br>LAMPIRAN TERSENDIRI</label>
                </td>
            </tr>
        </table>

        <table style="width: 99%; margin-left: 10px">
            <tr>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 8.1%; text-align: center;font-size: 11px ">G</td>
                <td style="border: 1px solid black; border-right: 0px; border-bottom: 0px; border-top: 0px; width: 37%;  font-size: 11px;">SEKAIN FORMULIR 1770-I SAMPAI DENGAN 1770-IV (BAIK YANG DIISI MAUPUN</td>
                <td style="border: 1px solid black; border-left: 0px; border-top: 0px; border-bottom: 0px; width: 36%; font-size: 11px; ">YANG TIDAK DIISI) HARUS DILAMPIRKAN PULA :</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 8.1%; text-align: center;font-size: 11px ">LAMPIRAN</td>
                <td style="border: 1px solid black; border-right: 0px; border-bottom: 0px; border-top: 0px; width: 37%;  font-size: 11px;">
                    <input type="checkbox" id="pembetulan2" aria-label="Checkbox for following text input" style="margin-top: 5px; margin-left: 10px">
                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 11px;">SURAT KUASA KHUSUS (BILA DIKUASAKAN)</label>
                </td>
                <td style="border: 1px solid black; border-left: 0px; border-top: 0px; border-bottom: 0px; width: 36%; font-size: 11px; ">
                    <input type="checkbox" id="pembetulan2" aria-label="Checkbox for following text input" style="margin-top: 5px">
                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 11px;">PERHITUNGAN ANGSURAN PPh PASAL 25 TAHUN PAJAK BERIKUTNYA</label>
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 8.1%; text-align: center;font-size: 11px "></td>
                <td style="border: 1px solid black; border-right: 0px; border-bottom: 0px; border-top: 0px; width: 37%;  font-size: 11px;">
                    <input type="checkbox" id="pembetulan2" aria-label="Checkbox for following text input" style="margin-top: 5px; margin-left: 10px">
                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 11px;">SPP LEMBAR KE-3 PPh PASAL 29</label>
                </td>
                <td style="border: 1px solid black; border-left: 0px; border-top: 0px; border-bottom: 0px; width: 36%; font-size: 11px; ">
                    <input type="checkbox" id="pembetulan2" aria-label="Checkbox for following text input" style="margin-top: 5px">
                    <input type="text" style="width: 90%; height: 30px; border: 1px solid black; margin-left: 5px">
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 8.1%; text-align: center;font-size: 11px "></td>
                <td style="border: 1px solid black; border-right: 0px; border-bottom: 0px; border-top: 0px; width: 37%;  font-size: 11px;">
                    <input type="checkbox" id="pembetulan2" aria-label="Checkbox for following text input" style="margin-top: 5px; margin-left: 10px">
                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 11px;">NERACA DAN LAP.LABA RUGI/REKAPITULASI BULANAN</br>PEREDARAN BRUTO DAN/ATAU PENGHASILAN LAIN DAN BIAYA</label>
                </td>
                <td style="border: 1px solid black; border-left: 0px; border-top: 0px; border-bottom: 0px; width: 36%; font-size: 11px; ">
                    <input type="checkbox" id="pembetulan2" aria-label="Checkbox for following text input" style="margin-top: 5px">
                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 11px;">PERHITUNGAN PPh TERUTANG BAGI WAJIB PAJAK</br>DENGAN STATUS PERPAJAKAN PH ATAU MT</label>
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 8.1%; text-align: center;font-size: 11px "></td>
                <td style="border: 1px solid black; border-right: 0px; border-bottom: 0px; border-top: 0px; width: 37%;  font-size: 11px;">
                    <input type="checkbox" id="pembetulan2" aria-label="Checkbox for following text input" style="margin-top: 5px; margin-left: 10px">
                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 11px;">PERHITUNGAN KOMPENSASI KERUGIAN FISIKAL</label>
                </td>
                <td style="border: 1px solid black; border-left: 0px; border-top: 0px; border-bottom: 0px; width: 36%; font-size: 11px; ">
                    <input type="checkbox" id="pembetulan2" aria-label="Checkbox for following text input" style="margin-top: 5px">
                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 11px;">DAFTAR JUMLAH PENGHASILAN DAN PEMBAYARAN PPh PASAL 25</br>(KHUSUS UNTUK ORANG PRIBADI PENGUSAHA TERTENTU)</label>
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-bottom: 0px; border-top: 0px; width: 8.1%; text-align: center;font-size: 11px "></td>
                <td style="border: 1px solid black; border-right: 0px; border-bottom: 0px; border-top: 0px; width: 37%;  font-size: 11px;">
                    <input type="checkbox" id="pembetulan2" aria-label="Checkbox for following text input" style="margin-top: 5px; margin-left: 10px">
                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 11px;">BUKTI PEMOTONGAN/PEMUNGUTAN OLEH PIHAK LAIN/DITANGGUNG</br>PEMERINTAH DAN YANG DIBAYAR/DIPOTONG DI LUAR NEGERI</label>
                </td>
                <td style="border: 1px solid black; border-left: 0px; border-top: 0px; border-bottom: 0px; width: 36%">
                    <input type="checkbox" id="pembetulan2" aria-label="Checkbox for following text input" style="margin-top: 5px">
                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 10px;">DAFTAR JUMLAH PEREDARAN BRUTO DAN PEMBAYARAN PPh FINAL</br>BERDASARKAN PP 46 TAHUN 2013 PER MASA PAJAK DAN PER TEMPAT USAHA</label>
                </td>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-top: 0px; border-bottom: 0px; width: 8.1%; text-align: center;font-size: 11px "></td>
                <td style="border: 1px solid black; border-right: 0px; border-top: 0px; border-bottom: 0px; width: 37%;  font-size: 11px;">
                    <input type="checkbox" id="pembetulan2" aria-label="Checkbox for following text input" style="margin-top: 5px; margin-left: 10px">
                    <label for="exampleFormControlInput1" class="form-label" style="font-size: 11px;">FOTOKOPI FORMULIR 1721-A1 DAN/ATAU 1721-A2 &emsp; &emsp; LEMBAR</label>
                </td>
                <td style="border: 1px solid black; border-left: 0px; border-top: 0px; border-bottom: 0px; width: 36%; font-size: 11px; ">
                    <input type="checkbox" id="pembetulan2" aria-label="Checkbox for following text input" style="margin-top: 5px">
                    <input type="text" style="width: 90%; height: 30px; border: 1px solid black; margin-left: 5px">
                </td>
            </tr>
        </table>
        <table style="width: 99%; margin-left: 10px">
            <tr>
                <th style="font-size: 12px; text-align: center; background-color: #80808080">PERNYATAAN</th>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-bottom: 0px; font-size: 12px; font-weight: bold; text-align: center">Dengan menyadari sepenuhnya akan segala akibatnya termasuk sanksi-sanksi sesuai dengan ketentuan perundang-undangan
                    yang berlaku, saya menyatakan bahwa apa yang telah saya beritahukan di atas beserta lampiran-lampirannya adalah benar, lengkap dan jelas.</td>
            </tr>
        </table>
        <table style="width: 99%; margin-left: 10px">
            <tr>
                <th style="border-top: 0px; border-right: 0px; border-bottom: 0px; width: 30%">
                    <div class="form-check" style="display:inline-block;">
                        <input style="display:inline;" class="form-check-input" type="radio" name="PelaporPajak" id="flexRadioDisabled" value="WajibPajak" <?= ($form1770s->pelapor_pajak  == 'WajibPajak') ? 'checked' : '' ?>>
                        <label class="form-check-label" for="flexRadioDisabled" style="font-size: 11px;">
                            WAJIB PAJAK
                        </label>
                    </div>
                    <div class="form-check" style="display:inline-block;">
                        <input style="display:inline;" class="form-check-input" type="radio" name="PelaporPajak" id="flexRadioDisabled" value="Kuasa" <?= ($form1770s->pelapor_pajak  == 'Kuasa') ? 'checked' : '' ?>>
                        <label class="form-check-label" for="flexRadioDisabled" style="font-size: 11px;">
                            KUASA
                        </label>
                    </div>
                </th>
                <th style="border-top: 0px; border-right: 0px; border-left: 0px; border-bottom: 0px; width: 20%"></th>
                <th style="border-top: 0px; border-right: 0px; border-left: 0px; border-bottom: 0px; width: 5%; font-size: 11px;">TANGGAL</th>
                <th style="border-top: 0px; border-right: 0px; border-left: 0px; border-bottom: 0px; width: 20%"><input type="date" style="width: 90%; font-size: 12px; height: 40px" id="tanggal_lampiran" value="<?= $form1770s['tanggal_lampiran'] ?? "" ?>"></th>
                <th style="border: 1px solid black; width: 25%; font-size: 11px">TANDA TANGAN</th>
                </th>
            </tr>
        </table>
        <table style="width: 99%; margin-left: 10px">
            <tr>
                <th style="border-top: 0px; border-right: 0px; border-bottom: 0px; width: 15%; font-size: 12px; background-color: #F0E68C">NAMA WAJIB PAJAK</th>
                <th style="border-top: 0px; border-right: 0px; border-left: 0px; border-bottom: 0px; width: 55%; background-color: #F0E68C"><input type="text" style="height: 30px; width: 100%; border: 1px solid black; font-size: 14px" placeholder="{{ $nama }}" disabled="disabled"></th>
                <th rowspan="2" style="border: 1px solid black; border-top: 0px; border-bottom: 1px solid black; width: 23%;">
                    <img src="{{ asset('ttdPHMT/'.$form1770s['tanda_tangan']) }}" style="width: 90px;" alt="">
                </th>
            </tr>
            <tr>
                <th style="border-top: 0px; border-right: 0px; width: 15%; font-size: 12px; background-color: #F0E68C">NPWP</th>
                <th style="border-top: 0px; border-right: 0px; border-left: 0px; width: 55%; background-color: #F0E68C"><input type="text" style="height: 30px; width: 100%; border: 1px solid black; font-size: 14px" value="{{ $npwp }}" disabled="disabled" id="formatnpwpfix"></th>
            </tr>
        </table>
    </div>

    <br>
    <div class="pagebreak"> </div>
    <!-- Formulir-PH-MT -->
    <div class="container">
        <p style="padding: 10px; text-align: center; font-size: 12px; font-weight: bold">LEMBAR PERHITUNGAN PAJAK PENGHASLAN TERUTANG</br>
            BAGI WAJIB PAJAK YANG KAWIN DENGAN STATUS PERPAJAKAN SUAMI-ISTERI PISAH HARTA DAN PENGHASILAN (PH) ATAU</br>
            ISTERI YANG MENGHENDAKI UNTUK MENJALANKAN HAK DAN KEWAJIBAN PERPAJAKANNYA SENDIRI (MT)</p>

        <table class="display" style="width:100%">
            <tr>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 5%;  height: 30px">
                    No.</th>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 3%;"></th>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 55%">
                    Uraian</th>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 20%">
                    Penghasilan Neto <select style="width: 35%; height: 28px; border: 2px solid black" onchange="changePenghasilanNeto2()" id="PengNeto1" disabled>
                        <option value="Pilih" data-value="Pilih" <?= ($formPhMts->status_PengNeto1  == 'Pilih') ? 'selected="selected"' : '' ?>>Pilih...</option>
                        <option value="Suami" data-value="Isteri" <?= ($formPhMts->status_PengNeto1  == 'Suami') ? 'selected="selected"' : '' ?>>Suami</option>
                        <option value="Isteri" data-value="Suami" <?= ($formPhMts->status_PengNeto1  == 'Isteri') ? 'selected="selected"' : '' ?>>Isteri</option>
                    </select></th>
                <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 20%">
                    Penghasilan Neto <input type="text" style="width: 35%; height: 28px; border: 2px solid black" id="PengNeto2" value="<?= $formPhMts['status_PengNeto2'] ?? "" ?>" disabled></th>
            </tr>
            <tr>
                <td style="border: 1px solid black; height: 8px; font-size: 11px; text-align:center">(1)</td>
                <td style="border: 1px solid black;"></td>
                <td style="border: 1px solid black; height: 8px; font-size: 11px; text-align:center">(2)</td>
                <td style="border: 1px solid black; height: 8px; font-size: 11px; text-align:center">(3)</td>
                <td style="border: 1px solid black; height: 8px; font-size: 11px; text-align:center">(4)</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-bottom:0px solid black; text-align:center">A</td>
                <td></td>
                <td style="border: 1px solid black; font-size: 12px">PENGHASILAN NETO</td>
                <td style="border: 1px solid black; background-color: #808080"></td>
                <td style="border: 1px solid black; background-color: #808080"></td>
            </tr>
            <tr>
                <td style="border-left: 1px solid black"></td>
                <td style="border: 1px solid black; text-align:center">1</td>
                <td style="border: 1px solid black; font-size: 12px">PENGHASILAN NETO DALAM NEGERI DARI USAHA DAN/ATAU PEKERJAAN BEBAS</br>
                    <span style="font-size: 11px">[Diisi dari Formulir 1770 Bagian A angka 1]</span>
                </td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" value="{{ $PhMt[0]->rupiah_PengNeto1 ?? '' }}" oninput="PenghasilanNeto()" id="suami1" disabled></td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" value="{{ $PhMt[0]->rupiah_PengNeto2 ?? '' }}" oninput="PenghasilanNeto()" id="isteri1" disabled></td>
            </tr>
            <tr>
                <td style="border-left: 1px solid black"></td>
                <td style="border: 1px solid black; text-align:center">2</td>
                <td style="border: 1px solid black; font-size: 12px">PENGHASILAN NETO DALAM NEGERI SEHUBUNGAN DENGAN PEKERJAAN</br>
                    <span style="font-size: 11px">[Diisi dari Formulir 1770 Bagian A angka 2 atau Formulir 1770 S Bagian A angka 1]</span>
                </td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" value="{{ $PhMt[1]->rupiah_PengNeto1 ?? '' }}" placeholder="0" oninput="PenghasilanNeto()" id="suami2" disabled></td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" value="{{ $PhMt[1]->rupiah_PengNeto2 ?? '' }}" placeholder="0" oninput="PenghasilanNeto()" id="isteri2" disabled></td>
            </tr>
            <tr>
                <td style="border-left: 1px solid black"></td>
                <td style="border: 1px solid black; text-align:center">3</td>
                <td style="border: 1px solid black; font-size: 12px">PENGHASILAN NETO DALAM NEGERI LAINNYA</br>
                    <span style="font-size: 11px">[Diisi dari Formulir 1770 Bagian A angka 3 atau Formulir 1770 S Bagian A angka 2]</span>
                </td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" value="{{ $PhMt[2]->rupiah_PengNeto1 ?? '' }}" oninput="PenghasilanNeto()" id="suami3" disabled></td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" value="{{ $PhMt[2]->rupiah_PengNeto2 ?? '' }}" oninput="PenghasilanNeto()" id="isteri3" disabled></td>
            </tr>
            <tr>
                <td style="border-left: 1px solid black"></td>
                <td style="border: 1px solid black; text-align:center">4</td>
                <td style="border: 1px solid black; font-size: 12px">PENGHASILAN NETO LUAR NEGERI</br>
                    <span style="font-size: 11px">[Diisi dari Formulir 1770 Bagian A angka 4 atau Formulir 1770 S Bagian A angka 3]</span>
                </td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" value="{{ $PhMt[3]->rupiah_PengNeto1 ?? '' }}" oninput="PenghasilanNeto()" id="suami4" disabled></td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" value="{{ $PhMt[3]->rupiah_PengNeto2 ?? '' }}" oninput="PenghasilanNeto()" id="isteri4" disabled></td>
            </tr>
            <tr>
                <td style="border-left: 1px solid black"></td>
                <td style="border: 1px solid black; text-align:center">5</td>
                <td style="border: 1px solid black; font-size: 12px">ZAKAT / SUMBANGAN KEAGAMAAN YANG BERSIFAT WAJIB</br>
                    <span style="font-size: 11px">[Diisi dari Formulir 1770 Bagian A angka 6 atau Formulir 1770 S Bagian A angka 5]</span>
                </td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" value="{{ $PhMt[4]->rupiah_PengNeto1 ?? '' }}" oninput="PenghasilanNeto()" id="suami5" disabled></td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" value="{{ $PhMt[4]->rupiah_PengNeto2 ?? '' }}" oninput="PenghasilanNeto()" id="isteri5" disabled></td>
            </tr>
            <tr>
                <td style="border-left: 1px solid black"></td>
                <td style="border: 1px solid black; text-align:center">6</td>
                <td style="border: 1px solid black; font-size: 12px">JUMLAH(1+2+3+4+5)</br>
                </td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" value="{{ $PhMt[5]->rupiah_PengNeto1 ?? '' }}" oninput="PenghasilanNeto()" id="jumlahS" disabled></td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" value="{{ $PhMt[5]->rupiah_PengNeto2 ?? '' }}" oninput="PenghasilanNeto()" id="jumlahI" disabled></td>
            </tr>
            <tr>
                <td style="border-left: 1px solid black"></td>
                <td style="border: 1px solid black; text-align:center">7</td>
                <td style="border: 1px solid black; font-size: 12px">KOMPENSASI KERUGIAN</br>
                    <span style="font-size: 10px">[Khusus Bagi WP OP yang menyelenggarakan pembukuan. Diisi dari Formulir 1770 Bagian A angka 8]</span>
                </td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" value="{{ $PhMt[6]->rupiah_PengNeto1 ?? '' }}" oninput="PenghasilanNeto()" id="suamiKK" disabled></td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" value="{{ $PhMt[6]->rupiah_PengNeto2 ?? '' }}" oninput="PenghasilanNeto()" id="isteriKK" disabled></td>
            </tr>
            <tr>
                <td style="border-left: 1px solid black; border-bottom: 1px solid black"></td>
                <td style="border: 1px solid black; text-align:center">8</td>
                <td style="border: 1px solid black; font-size: 12px">JUMLAH PENGHASILAN NETO (6-7)</br>
                </td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" value="{{ $PhMt[7]->rupiah_PengNeto1 ?? '' }}" oninput="PenghasilanNeto()" id="jumlahS2" disabled></td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" value="{{ $PhMt[7]->rupiah_PengNeto2 ?? '' }}" oninput="PenghasilanNeto()" id="jumlahI2" disabled></td>
            </tr>
            </br>
        </table>

        <table style="width:100%">
            <tr>
                <th style="border: 1px solid black; border-top: 0px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 5%;  height: 30px">
                    No.</th>
                <th style="border: 1px solid black; border-top: 0px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 70%">
                    Uraian</th>
                <th style="border: 1px solid black; border-top: 0px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 20%">
                    Nilai</th>
            </tr>
            <tr>
                <td style="border: 1px solid black; height: 8px; font-size: 11px; text-align:center">(1)</td>
                <td style="border: 1px solid black; height: 8px; font-size: 11px; text-align:center">(2)</td>
                <td style="border: 1px solid black; height: 8px; font-size: 11px; text-align:center">(3)</td>
            </tr>
            <tr>
                <td style="border: 1px solid black; text-align:center">B</td>
                <td style="border: 1px solid black; font-size: 12px"> JUMLAH PENGHASILAN NETO SUAMI DAN ISTERI
                    <span style="font-weight: bold;">[A.8.(3) + A.8(4)]</span>
                </td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" value="{{ $PhMt2[0]->nilai_rupiah ?? ''}}" oninput="PenghasilanNeto()" id="netosuamiisteri" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; text-align:center">C</td>
                <td style="border: 1px solid black; font-size: 12px"> PENGHASILAN TIDAK KENA PAJAK <span style="margin-left: 15px;font-weight: bold;">
                        <select style="width:15%; height: 28px; border: 2px solid black" onchange="PenghasilanNeto()" id="pilihanPTKP1" disabled>
                            <option data-value="0">Pilih...</option>
                            <option value="TK/0" data-value="54000000" <?= ($formPhMts->pilihan_PTKP  == 'TK/0') ? 'selected="selected"' : '' ?>>TK/0</option>
                            <option value="TK/1" data-value="58500000" <?= ($formPhMts->pilihan_PTKP  == 'TK/1') ? 'selected="selected"' : '' ?>>TK/1</option>
                            <option value="TK/2" data-value="63000000" <?= ($formPhMts->pilihan_PTKP  == 'TK/2') ? 'selected="selected"' : '' ?>>TK/2</option>
                            <option value="TK/3" data-value="67500000" <?= ($formPhMts->pilihan_PTKP  == 'TK/3') ? 'selected="selected"' : '' ?>>TK/3</option>
                            <option value="K/0" data-value="58500000" <?= ($formPhMts->pilihan_PTKP  == 'K/0') ? 'selected="selected"' : '' ?>>K/0</option>
                            <option value="K/1" data-value="63000000" <?= ($formPhMts->pilihan_PTKP  == 'K/1') ? 'selected="selected"' : '' ?>>K/1</option>
                            <option value="K/2" data-value="67500000" <?= ($formPhMts->pilihan_PTKP  == 'K/2') ? 'selected="selected"' : '' ?>>K/2</option>
                            <option value="K/3" data-value="72000000" <?= ($formPhMts->pilihan_PTKP  == 'K/3') ? 'selected="selected"' : '' ?>>K/3</option>
                            <option value="K/I/0" data-value="112500000" <?= ($formPhMts->pilihan_PTKP  == 'K/I/0') ? 'selected="selected"' : '' ?>>K/I/0</option>
                            <option value="K/I/1" data-value="117000000" <?= ($formPhMts->pilihan_PTKP  == 'K/I/1') ? 'selected="selected"' : '' ?>>K/I/1</option>
                            <option value="K/I/2" data-value="121500000" <?= ($formPhMts->pilihan_PTKP  == 'K/I/2') ? 'selected="selected"' : '' ?>>K/I/2</option>
                            <option value="K/I/3" data-value="126000000" <?= ($formPhMts->pilihan_PTKP  == 'K/I/3') ? 'selected="selected"' : '' ?>>K/I/3</option>
                        </select>
                </td>
                </span>
                <td style="border: 1px solid black;"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" value="{{ $PhMt2[1]->nilai_rupiah ?? ''}}" oninput="PenghasilanNeto()" id="inputPTKP" disabled></td>
            </tr>
            <script>

            </script>
            <tr>
                <td style="border: 1px solid black; text-align:center">D</td>
                <td style="border: 1px solid black; font-size: 12px"> PENGHASILAN KENA PAJAK
                    <span style="font-weight: bold;">[B - C]</span>
                </td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" value="{{ $PhMt2[2]->nilai_rupiah ?? ''}}" oninput="PenghasilanNeto()" id="inputPKP" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-bottom: 0px solid black; height: 30px"></td>
                <td style="border: 1px solid black; font-size: 12px"> PAJAK PENGHASILAN TERUTANG (GABUNGAN)
                </td>
                <td style="border: 1px solid black; border-bottom: 0px solid black; background-color: #808080"></td>
            </tr>
        </table>

        <table style="width:100%">
            <tr>
                <th style=" border: 1px solid black; border-top: 0px solid black; border-bottom: 0px solid black; width: 5%; height: 30px">
                </th>
                <th style="border: 1px solid black; border-top: 0px solid black; font-size: 16px; font-weight: bold; width: 10%">
                    1. 5% x</th>
                <th style="border: 1px solid black; border-top: 0px solid black; width: 20%">
                    <input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" value="{{ $PhMt3[0]->PPhTerutang ?? ''}}" oninput="PenghasilanNeto()" id="limapersen" disabled>
                </th>
                <th style="border: 1px solid black; border-top: 0px solid black; width: 20%">
                </th>
                <th style="border: 1px solid black; border-top: 0px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 20%">
                    <input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" value="{{ $PhMt3[0]->hasil_PPhTerutang ?? ''}}" oninput="PenghasilanNeto()" id="hasillimapersen" disabled>
                </th>
                <th style="border: 1px solid black; border-top: 0px solid black; border-bottom: 0px solid black;width: 20%; background-color: #808080">
                </th>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-top: 0px solid black; border-bottom: 0px solid black; height: 30px"></td>
                <td style="border: 1px solid black; border-top: 0px solid black; font-size: 16px; font-weight: bold;     height: 30px">2. 15% x</td>
                <td style="border: 1px solid black; border-top: 0px solid black">
                    <input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" value="{{ $PhMt3[1]->PPhTerutang ?? ''}}" oninput="PenghasilanNeto()" id="limabelaspersen" disabled>
                </td>
                <td style="border: 1px solid black; border-top: 0px solid black"></td>
                <td style="border: 1px solid black; border-top: 0px solid black">
                    <input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" value="{{ $PhMt3[1]->hasil_PPhTerutang ?? ''}}" oninput="PenghasilanNeto()" id="hasillimabelaspersen" disabled>
                </td>
                <td style="border: 1px solid black; border-top: 0px solid black; border-bottom: 0px solid black; background-color: #808080"></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-top: 0px solid black; border-bottom: 0px solid black; text-align: center; height: 30px">E</td>
                <td style="border: 1px solid black; border-top: 0px solid black; font-size: 16px; font-weight: bold;     height: 30px">3. 25% x</td>
                <td style="border: 1px solid black; border-top: 0px solid black">
                    <input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" value="{{ $PhMt3[2]->PPhTerutang ?? ''}}" oninput="PenghasilanNeto()" id="dualimapersen" disabled>
                </td>
                <td style="border: 1px solid black; border-top: 0px solid black"></td>
                <td style="border: 1px solid black; border-top: 0px solid black">
                    <input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" value="{{ $PhMt3[2]->hasil_PPhTerutang ?? ''}}" oninput="PenghasilanNeto()" id="hasildualimapersen" disabled>
                </td>
                <td style="border: 1px solid black; border-top: 0px solid black; border-bottom: 0px solid black; background-color: #808080"></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-top: 0px solid black; border-bottom: 0px solid black; height: 30px"></td>
                <td style="border: 1px solid black; border-top: 0px solid black; font-size: 16px; font-weight: bold;     height: 30px">4. 30% x</td>
                <td style="border: 1px solid black; border-top: 0px solid black">
                    <input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" value="{{ $PhMt3[3]->PPhTerutang ?? ''}}" oninput="PenghasilanNeto()" id="tigapuluhpersen" disabled>
                </td>
                <td style="border: 1px solid black; border-top: 0px solid black"></td>
                <td style="border: 1px solid black; border-top: 0px solid black">
                    <input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" value="{{ $PhMt3[3]->hasil_PPhTerutang ?? ''}}" oninput="PenghasilanNeto()" id="hasiltigapuluhpersen" disabled>
                </td>
                <td style="border: 1px solid black; border-top: 0px solid black; background-color: #808080"></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-top: 0px solid black; border-bottom: 0px solid black; height: 30px"></td>
                <td style="border: 1px solid black; border-top: 0px solid black; font-size: 16px; font-weight: bold;     height: 30px">5. 35% x</td>
                <td style="border: 1px solid black; border-top: 0px solid black">
                    <input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" value="{{ $PhMt3[4]->PPhTerutang ?? ''}}" oninput="PenghasilanNeto()" id="tigalimapersen" disabled>
                </td>
                <td style="border: 1px solid black; border-top: 0px solid black"></td>
                <td style="border: 1px solid black; border-top: 0px solid black">
                    <input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" value="{{ $PhMt3[4]->hasil_PPhTerutang ?? ''}}" oninput="PenghasilanNeto()" id="hasiltigalimapersen" disabled>
                </td>
                <td style="border: 1px solid black; border-top: 0px solid black; background-color: #808080"></td>
            </tr>
        </table>

        <table style="width: 100%;">
            <tr>
                <th style="border: 1px solid black; border-top: 0px solid black; width: 5%; height: 30px"></th>
                <th style="border: 1px solid black; border-top: 0px solid black; width: 70%; height: 30px; font-size: 12px">JUMLAH PAJAK PENGHASILAN TERUTANG (GABUNGAN)</th>
                <th style="border: 1px solid black; border-top: 0px solid black; width: 20%">
                    <input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" value="{{ $PhMt2[3]->nilai_rupiah ?? ''}}" oninput="PenghasilanNeto()" id="hasilpphgabungan" disabled>
                </th>
            </tr>
            <tr>
                <td style="border: 1px solid black; text-align:center">F</td>
                <td style="border: 1px solid black; font-size: 12px">PPh TERUTANG YANG DITANGGUNG Suami <span style="font-weight: bold;">[(A.8(3) / B) x E]</span></br>
                    <span style="font-size: 11px">[Pindahkan nilai pada bagian ini ke SPT Suami bagian C angka 12 Formulir 1770 atau ke bagian C angka 9 Formulir 1770 S]</span>
                </td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" value="{{ $PhMt2[4]->nilai_rupiah ?? ''}}" oninput="PenghasilanNeto()" id="ditanggungsuami" disabled></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; text-align:center">G</td>
                <td style="border: 1px solid black; font-size: 12px">PPh TERUTANG YANG DITANGGUNG Isteri <span style="font-weight: bold;">[(A.8(4) / B) x E]</span></br>
                    <span style="font-size: 11px">[Pindahkan nilai pada bagian ini ke SPT Isteri bagian C angka 12 Formulir 1770 atau ke bagian C angka 9 Formulir 1770 S]</span>
                </td>
                <td style="border: 1px solid black;"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" value="{{ $PhMt2[5]->nilai_rupiah ?? ''}}" oninput="PenghasilanNeto()" id="ditanggungisteri" disabled></td>
            </tr>
        </table>
        <div style="padding: 10px;"></div>
        <table style="width: 100%;">
            <tr>
                <th style="width:50%; border: 0px solid black"></th>
                <th style="width: 20%; border:1px solid black"></th>
                <th style="width: 5%; border: 0px solid black"></th>
                <th style="width: 20%; border:1px solid black"><input type="date" style="width: 100%;border: 0px solid black; font-size: 12px" id="tanggal_phmt" value="<?= $formPhMts['tanggal_phmt'] ?? "" ?>" disabled></th>
            </tr>
        </table>
        <div style="padding: 10px;"></div>

        <table style="width: 100%; height:30px">
            <tr style="background-color: #80808080">
                <th style="border: 0px solid black; width: 40%"></th>
                <th style="font-size:12px; text-align:center; width: 20%;"><input type="text" style="width: 100%; border: 0px solid black; font-size: 14px; text-align:center; background-color: #80808080" value="<?= $formPhMts['status_PengNeto1'] ?? "" ?>" disabled></th>
                <th style="border: 0px solid black; width: 40%;"></th>
            </tr>
        </table>

        <table style="width: 100%;">
            <tr style="height: 30px; background-color: #F0E68C;">
                <th style="border: 0px solid black; font-size: 12px; width: 34%;">Nama</th>
                <th style="border: 1px solid black; font-size: 12px; width: 70%;"><input type="text" style="height: 30px; width: 100%; border: 0px solid black; font-size: 14px; background-color: #F0E68C" value="{{ $nama }}" disabled></th>
            </tr>
            <tr style="height: 30px; background-color: #F0E68C">
                <th style="border: 0px solid black; font-size: 12px; width: 34%;">NPWP</th>
                <th style="border: 1px solid black; font-size: 12px; width: 70%;"><input type="text" style="height: 30px; width: 100%; border: 0px solid black; font-size: 14px; background-color: #F0E68C" value="{{ $npwp }}" id="NPWP_PHMT" disabled></th>
            </tr>
        </table>

        <table style="width: 100%;">
            <tr style="height: 60px;">
                <th style="border: 0px solid black; font-size: 12px; width: 34%;">Tanda Tangan</th>
                <th style="border: 1px solid black; font-size: 12px; width: 70%;">
                    <img src="{{ asset('ttdPHMT/'.$formPhMts['ttd1']) }}" style="width: 150px;" alt="">
                </th>
            </tr>
        </table>
        <div style="padding: 10px;"></div>

        <table style="width: 100%; height:30px">
            <tr style="background-color: #80808080">
                <th style="border: 0px solid black; width: 40%"></th>
                <th style="font-size:12px; text-align:center; width: 20%;"><input type="text" style="width: 100%; border: 0px solid black; font-size: 14px; text-align:center; background-color: #80808080" value="<?= $formPhMts['status_PengNeto2'] ?? "" ?>" disabled></th>
                <th style="border: 0px solid black; width: 40%;"></th>
            </tr>
        </table>
        <table style="width: 100%;">
            <tr style="height: 30px;">
                <th style="border: 0px solid black; font-size: 12px; width: 34%;">Nama</th>
                <th style="border: 1px solid black; font-size: 12px; width: 70%;"><input type="text" style="height: 30px; width: 100%; border: 0px solid black; font-size: 14px" id="nama_PHMT" value="<?= $formPhMts['nama_PHMT'] ?? "" ?>" disabled></th>
            </tr>
            <tr style="height: 30px;">
                <th style="border: 0px solid black; font-size: 12px; width: 34%;">NPWP</th>
                <th style="border: 1px solid black; font-size: 12px; width: 70%;"><input type="text" style="height: 30px; width: 100%; border: 0px solid black; font-size: 14px" maxlength="20" oninput="FormatNPWP_PHMT2(this)" id="npwp_PHMT" value="<?= $formPhMts['npwp_PHMT'] ?? "" ?>" disabled></th>
            </tr>
        </table>
        <table style="width: 100%;">
            <tr style="height: 60px;">
                <th style="border: 0px solid black; font-size: 12px; width: 34%;">Tanda Tangan</th>
                <th style="border: 1px solid black; font-size: 12px; width: 70%;">
                    <img src="{{ asset('ttdPHMT/'.$formPhMts['ttd2']) }}" style="width: 150px;" alt="">
                </th>
            </tr>
        </table>




    </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
    <script>
        $(document).ready(function() {
            handleChange(true)
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
                url: 'http://localhost:8000/JenisPTKP/{{ $form1770 }}',
                success: function(res) {
                    console.log(res)
                }
            });
        });
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
                    url: 'http://localhost:8000/PerhitunganSendiri/{{ $form1770 }}',
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
                url: 'http://localhost:8000/PerhitunganSendiri/{{ $form1770 }}',
                success: function(res) {
                    console.log(res)
                }
            });
            return;
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
                        url: 'http://localhost:8000/JenisKreditPajak/{{ $form1770 }}',
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
                        url: 'http://localhost:8000/JenisPPhKurangLebih/{{ $form1770 }}',
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
                        url: 'http://localhost:8000/PermohonanPPhLebihBayar/{{ $form1770 }}',
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
                        url: 'http://localhost:8000/AngsuranPPhPasal25/{{ $form1770 }}',
                        success: function(res) {
                            console.log(res)
                        }
                    });
                }
            });

        $('#penghasilanneto1').change(function() {
            ids = $(this).val().split("/");
            console.log(ids);
            $(`#${ids[0]}`).prop("checked", true);
            data = {
                status_PengNeto1: $(this).val(),
                status_PengNeto2: $(penghasilanneto2).val()
            }
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                data: data,
                url: 'http://localhost:8000/StatusPengNeto/{{ $formPhMt }}',
                success: function(res) {
                    console.log(res)
                }
            });
        });
    </script>
    @if($form1->is_audit == 1)
    <script>
        $(document).ready(function() {
            handleChange(true)
        });
    </script>
    @endif
    @if($form1->is_audit == 0)
    <script>
        $(document).ready(function() {

            handleChange2(true)
        });
    </script>
    @endif
    <script>
        $(document).ready(function() {
            format();
            format2();
            formatNpwp2();
            formatPajakFinal();
            format1();
            formatperedaranbruto();
            formatJmlPPhFinalDibayar();
            formatJmlPPhDipotongDipungut();
            formatPengNetoDlmNegeri();
            format_bagianB();
            format_bagianC();
            format_bagianD();
            window.print();
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
                        url: 'http://localhost:8000/JenisUpdate/{{ $spt->id }}',
                        success: function(res) {
                            console.log(res)
                        }
                    });
                    // append goes here
                }
            });
        $('input:radio[name="Audit"]').change(
            function() {
                if ($(this).is(':checked')) {
                    console.log(1, $(this).val())
                    data = {
                        is_audit: $(this).val()
                    }
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: "POST",
                        data: data,
                        url: 'http://localhost:8000/JenisAudit/{{ $form1->id }}',
                        success: function(res) {
                            console.log(res)
                        }
                    });
                    // append goes here
                }
            });

        let sum = 0;
        let tmp = 0;

        // Format NPWP
        function formatNpwp2() {
            formatnpwp4 = document.getElementById('npwpformulirIV').value
            formatnpwpform4 = document.getElementById('npwpformulirIV')
            formatnpwp3 = document.getElementById('npwpformulirIII').value
            formatnpwpform3 = document.getElementById('npwpformulirIII')
            formatnpwp4623 = document.getElementById('npwpPP4623').value
            formatnpwpPP4623 = document.getElementById('npwpPP4623')
            formatnpwp2 = document.getElementById('npwpformulirII').value
            formatnpwpform2 = document.getElementById('npwpformulirII')
            formatnpwp1 = document.getElementById('npwpformulirI-1').value
            formatnpwpform1 = document.getElementById('npwpformulirI-1')
            formatnpwp1_2 = document.getElementById('npwpformulirI-2').value
            formatnpwpform1_2 = document.getElementById('npwpformulirI-2')

            if (typeof formatnpwp === 'string') {

            }
            formatnpwpform4.value = formatnpwp4.replace(/(\d{2})(\d{3})(\d{3})(\d{1})(\d{3})(\d{3})/, '$1.$2.$3.$4-$5.$6');
            formatnpwpform3.value = formatnpwp3.replace(/(\d{2})(\d{3})(\d{3})(\d{1})(\d{3})(\d{3})/, '$1.$2.$3.$4-$5.$6');
            formatnpwpPP4623.value = formatnpwp4623.replace(/(\d{2})(\d{3})(\d{3})(\d{1})(\d{3})(\d{3})/, '$1.$2.$3.$4-$5.$6');
            formatnpwpform2.value = formatnpwp2.replace(/(\d{2})(\d{3})(\d{3})(\d{1})(\d{3})(\d{3})/, '$1.$2.$3.$4-$5.$6');
            formatnpwpform1.value = formatnpwp1.replace(/(\d{2})(\d{3})(\d{3})(\d{1})(\d{3})(\d{3})/, '$1.$2.$3.$4-$5.$6');
            formatnpwpform1_2.value = formatnpwp1_2.replace(/(\d{2})(\d{3})(\d{3})(\d{1})(\d{3})(\d{3})/, '$1.$2.$3.$4-$5.$6');
        }

        // Formulir-IV
        function getNumPrice(price, decimalpoint) {
            var p = price.split(decimalpoint);
            for (var i = 0; i < p.length; i++) p[i] = p[i].replace(/\D/g, '');
            return p.join('.');
        }
        // Data Harta
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
        // Data Utang
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

        // Formulir-III
        function formatPajakFinal() {
            valuePengenaanPajak1 = numeral(pengenaan_pajak1.value);
            document.getElementById('pengenaan_pajak1').value = valuePengenaanPajak1.format();
            valuePPhTerutang1 = numeral(pph_terutang1.value);
            document.getElementById('pph_terutang1').value = valuePPhTerutang1.format();

            valuePengenaanPajak2 = numeral(pengenaan_pajak2.value);
            document.getElementById('pengenaan_pajak2').value = valuePengenaanPajak2.format();
            valuePPhTerutang2 = numeral(pph_terutang2.value);
            document.getElementById('pph_terutang2').value = valuePPhTerutang2.format();

            valuePengenaanPajak3 = numeral(pengenaan_pajak3.value);
            document.getElementById('pengenaan_pajak3').value = valuePengenaanPajak3.format();
            valuePPhTerutang3 = numeral(pph_terutang3.value);
            document.getElementById('pph_terutang3').value = valuePPhTerutang3.format();

            valuePengenaanPajak4 = numeral(pengenaan_pajak4.value);
            document.getElementById('pengenaan_pajak4').value = valuePengenaanPajak4.format();
            valuePPhTerutang4 = numeral(pph_terutang4.value);
            document.getElementById('pph_terutang4').value = valuePPhTerutang4.format();

            valuePengenaanPajak5 = numeral(pengenaan_pajak5.value);
            document.getElementById('pengenaan_pajak5').value = valuePengenaanPajak5.format();
            valuePPhTerutang5 = numeral(pph_terutang5.value);
            document.getElementById('pph_terutang5').value = valuePPhTerutang5.format();

            valuePengenaanPajak6 = numeral(pengenaan_pajak6.value);
            document.getElementById('pengenaan_pajak6').value = valuePengenaanPajak6.format();
            valuePPhTerutang6 = numeral(pph_terutang6.value);
            document.getElementById('pph_terutang6').value = valuePPhTerutang6.format();

            valuePengenaanPajak7 = numeral(pengenaan_pajak7.value);
            document.getElementById('pengenaan_pajak7').value = valuePengenaanPajak7.format();
            valuePPhTerutang7 = numeral(pph_terutang7.value);
            document.getElementById('pph_terutang7').value = valuePPhTerutang7.format();

            valuePengenanPajak8 = numeral(pengenaan_pajak8.value);
            document.getElementById('pengenaan_pajak8').value = valuePengenanPajak8.format();
            valuePPhTerutang8 = numeral(pph_terutang8.value);
            document.getElementById('pph_terutang8').value = valuePPhTerutang8.format();

            valuePengenaanPajak9 = numeral(pengenaan_pajak9.value);
            document.getElementById('pengenaan_pajak9').value = valuePengenaanPajak9.format();
            valuePPhTerutang9 = numeral(pph_terutang9.value);
            document.getElementById('pph_terutang9').value = valuePPhTerutang9.format();

            valuePengenaanPajak10 = numeral(pengenaan_pajak10.value);
            document.getElementById('pengenaan_pajak10').value = valuePengenaanPajak10.format();
            valuePPhTerutang10 = numeral(pph_terutang10.value);
            document.getElementById('pph_terutang10').value = valuePPhTerutang10.format();

            valuePengenaanPajak11 = numeral(pengenaan_pajak11.value);
            document.getElementById('pengenaan_pajak11').value = valuePengenaanPajak11.format();
            valuePPhTerutang11 = numeral(pph_terutang11.value);
            document.getElementById('pph_terutang11').value = valuePPhTerutang11.format();

            valuePengenaanPajak12 = numeral(pengenaan_pajak12.value);
            document.getElementById('pengenaan_pajak12').value = valuePengenaanPajak12.format();
            valuePPhTerutang12 = numeral(pph_terutang12.value);
            document.getElementById('pph_terutang12').value = valuePPhTerutang12.format();

            valuePengenaanPajak14 = numeral(pengenaan_pajak14.value);
            document.getElementById('pengenaan_pajak14').value = valuePengenaanPajak14.format();
            valuePPhTerutang14 = numeral(pph_terutang14.value);
            document.getElementById('pph_terutang14').value = valuePPhTerutang14.format();

            valuePengenaanPajak15 = numeral(pengenaan_pajak15.value);
            document.getElementById('pengenaan_pajak15').value = valuePengenaanPajak15.format();
            valuePPhTerutang15 = numeral(pph_terutang15.value);
            document.getElementById('pph_terutang15').value = valuePPhTerutang15.format();

            valuePengenaanPajak16 = numeral(pengenaan_pajak16.value);
            document.getElementById('pengenaan_pajak16').value = valuePengenaanPajak16.format();
            valuePPhTerutang16 = numeral(pph_terutang16.value);
            document.getElementById('pph_terutang16').value = valuePPhTerutang16.format();

            var resultPajakFinal = ((valuePPhTerutang1.value()) + (valuePPhTerutang2.value()) +
                (valuePPhTerutang3.value()) + (valuePPhTerutang4.value()) + (valuePPhTerutang5.value()) +
                (valuePPhTerutang6.value()) + (valuePPhTerutang7.value()) + (valuePPhTerutang8.value()) +
                (valuePPhTerutang9.value()) + (valuePPhTerutang10.value()) + (valuePPhTerutang11.value()) +
                (valuePPhTerutang12.value()) + (valuePPhTerutang14.value()) + (valuePPhTerutang15.value()) +
                (valuePPhTerutang16.value()));
            if (!isNaN(resultPajakFinal)) {
                document.getElementById('JmlhPPhTerutang').value = numeral(resultPajakFinal).format();
            }

        }

        function format1() {
            valueBantuanSumbanganHibah = numeral(bantuansumbanganhibah.value);
            document.getElementById('bantuansumbanganhibah').value = valueBantuanSumbanganHibah.format();

            valueWarisan = numeral(warisan.value);
            document.getElementById('warisan').value = valueWarisan.format();

            valueBagianLaba = numeral(bagianlaba.value);
            document.getElementById('bagianlaba').value = valueBagianLaba.format();

            valueKlaimAsuransi = numeral(klaimasuransi.value);
            document.getElementById('klaimasuransi').value = valueKlaimAsuransi.format();

            valueBeasiswa = numeral(beasiswa.value);
            document.getElementById('beasiswa').value = valueBeasiswa.format();

            valuePenghasilanLain = numeral(penghasilanlain.value);
            document.getElementById('penghasilanlain').value = valuePenghasilanLain.format();

            var result = ((valueBantuanSumbanganHibah.value()) + (valueWarisan.value()) + (valueBagianLaba.value()) + (valueKlaimAsuransi.value()) +
                (valueBeasiswa.value()) + (valuePenghasilanLain.value()));
            if (!isNaN(result)) {
                document.getElementById('JmlhDasarPengenaanBruto').value = numeral(result).format();
            }

        }

        // PP 46/23
        let sum1 = 0;
        let tmp1 = 0;

        function formatperedaranbruto() {
            $('.peredaranbruto').each(function() {
                console.log(this.value)
                if (this.value.length > 0 && this.value != 0) {
                    tmp2 = getNumPrice(this.value, '.');
                    this.value = numeral(this.value).format();
                    tmp1 += parseFloat(tmp2)
                } else {
                    tmp1 += 0
                }
            });
            sum1 = tmp1
            $('#hasilPbruto').val(numeral(sum1).format());
            tmp1 = 0;
        }

        function formatJmlPPhFinalDibayar() {
            $('.jumlahPPhFinalYangDibayar').each(function() {
                console.log(this.value)
                if (this.value.length > 0 && this.value != 0) {
                    tmp2 = getNumPrice(this.value, '.');
                    this.value = numeral(this.value).format();
                    tmp1 += parseFloat(tmp2)
                } else {
                    tmp1 += 0
                }
            });
            sum1 = tmp1
            $('#hasilPPhFinal').val(numeral(sum1).format());
            tmp1 = 0;
        }

        // Formulir-II
        let sum3 = 0;
        let tmp3 = 0;

        function formatJmlPPhDipotongDipungut() {
            $('.jumlahpph').each(function() {
                if (this.value.length > 0 && this.value != 0) {
                    tmp2 = getNumPrice(this.value, '.');
                    this.value = numeral(this.value).format();
                    tmp3 += parseFloat(tmp2)
                } else {
                    tmp3 += 0
                }
            });
            sum3 = tmp3
            console.log(sum3)
            $('#hasilPPhDipotongDipungut').val(numeral(sum3).format());
            tmp3 = 0;
        }

        // Formulir-I hal 1
        function handleChange(src) {
            const myElement = document.getElementById("eformspt");
            const myElement2 = document.getElementById("eformspt2");
            myElement.style.display = "block";
            myElement2.style.display = "none";
        }

        function handleChange2(src) {
            const myElement = document.getElementById("eformspt");
            const myElement2 = document.getElementById("eformspt2");
            myElement.style.display = "none";
            myElement2.style.display = "block";
        }

        function formatPengNetoDlmNegeri() {
            valuePeredaranUsaha = numeral(peredaran_usaha.value);
            document.getElementById('peredaran_usaha').value = valuePeredaranUsaha.format();

            valueHargaPokokPenjualan = numeral(harga_pokok_penjualan.value);
            document.getElementById('harga_pokok_penjualan').value = valueHargaPokokPenjualan.format();

            valueBiayaUsaha = numeral(biaya_usaha.value);
            document.getElementById('biaya_usaha').value = valueBiayaUsaha.format();

            valueBiayaDibebankanDikeluarkan = numeral(biaya_dibebankan_dikeluarkan.value);
            document.getElementById('biaya_dibebankan_dikeluarkan').value = valueBiayaDibebankanDikeluarkan.format();

            valuePremiAsuransi = numeral(premi_asuransi.value);
            document.getElementById('premi_asuransi').value = valuePremiAsuransi.format();

            valuePenggantianImbalan = numeral(penggantian_imbalan.value);
            document.getElementById('penggantian_imbalan').value = valuePenggantianImbalan.format();

            valueJumlahMelebihiKewajaran = numeral(jumlahmelebihi_kewajaran.value);
            document.getElementById('jumlahmelebihi_kewajaran').value = valueJumlahMelebihiKewajaran.format();
            valueHarta = numeral(harta.value);
            document.getElementById('harta').value = valueHarta.format();
            valuePajakPenghasilan = numeral(pajak_penghasilan.value);
            document.getElementById('pajak_penghasilan').value = valuePajakPenghasilan.format();
            valueGajiYangDibayarkan = numeral(gaji_yangdibayarkan.value);
            document.getElementById('gaji_yangdibayarkan').value = valueGajiYangDibayarkan.format();
            valueSanksiAdministrasi = numeral(sanksi_administrasi.value);
            document.getElementById('sanksi_administrasi').value = valueSanksiAdministrasi.format();
            valueSelisih = numeral(selisih.value);
            document.getElementById('selisih').value = valueSelisih.format();
            valueBiayaYangMendapatkan = numeral(biaya_yangmendapatkan.value);
            document.getElementById('biaya_yangmendapatkan').value = valueBiayaYangMendapatkan.format();
            valuePenyesuaianFisikalPositif = numeral(penyesuaian_fisikal_positif.value);
            document.getElementById('penyesuaian_fisikal_positif').value = valuePenyesuaianFisikalPositif.format();

            valuePenghasilanDikenakanPPhFinal = numeral(penghasilan_dikenakanPPhfinal.value);
            document.getElementById('penghasilan_dikenakanPPhfinal').value = valuePenghasilanDikenakanPPhFinal.format();
            valueSelisih1 = numeral(selisih1.value);
            document.getElementById('selisih1').value = valueSelisih1.format();
            valuePenyesuaianFisikalNegatif = numeral(penyesuaian_fisikal_negatif.value);
            document.getElementById('penyesuaian_fisikal_negatif').value = valuePenyesuaianFisikalNegatif.format();

            var resultLabaRugi = ((valuePeredaranUsaha.value()) - (valueHargaPokokPenjualan.value()));
            if (!isNaN(resultLabaRugi)) {
                document.getElementById('hasil1c').value = numeral(resultLabaRugi).format()

            }

            var result2 = resultLabaRugi - (valueBiayaUsaha.value());
            if (!isNaN(result2)) {
                document.getElementById('hasil1c-1d').value = numeral(result2).format()

            }
            var result3 = ((valueBiayaDibebankanDikeluarkan.value()) + (valuePremiAsuransi.value()) + (valuePenggantianImbalan.value()) + (valueJumlahMelebihiKewajaran.value()) + (valueHarta.value()) + (valuePajakPenghasilan.value()) +
                (valueGajiYangDibayarkan.value()) + (valueSanksiAdministrasi.value()) + (valueSelisih.value()) + (valueBiayaYangMendapatkan.value()) + (valuePenyesuaianFisikalPositif.value()));
            if (!isNaN(result3)) {
                let penghasilanneto1 = document.getElementById('penghasilanneto1');
                document.getElementById('penghasilanneto1').value = numeral(penghasilanneto1.value).format()
                document.getElementById('jumlah(2a-2k)').value = numeral(result3).format()

            }
            var result4 = ((valuePenghasilanDikenakanPPhFinal.value()) + (valueSelisih1.value()) + (valuePenyesuaianFisikalNegatif.value()));
            if (!isNaN(result4)) {
                document.getElementById('jumlah(3a-3c)').value = numeral(result4).format()

            }

            var result5 = result2 + result3 - result4;
            if (!isNaN(result5)) {
                document.getElementById('jumlah(1e+2l-3d)').value = numeral(result5).format()

            }
        }

        // Formulir-I hal 2
        // Bagian B
        function format_bagianB() {
            valueDagangPeredaranUsaha = numeral(dagang_peredaran_usaha.value);
            document.getElementById('dagang_peredaran_usaha').value = valueDagangPeredaranUsaha.format();

            valueDagangPenghasilanNeto = numeral(dagang_penghasilan_neto.value);
            document.getElementById('dagang_penghasilan_neto').value = valueDagangPenghasilanNeto.format();

            valueIndustriPeredaranUsaha = numeral(industri_peredaran_usaha.value);
            document.getElementById('industri_peredaran_usaha').value = valueIndustriPeredaranUsaha.format();

            valueIndustriPenghasilanNeto = numeral(industri_penghasilan_neto.value);
            document.getElementById('industri_penghasilan_neto').value = valueIndustriPenghasilanNeto.format();

            valueJasaPeredaranUsaha = numeral(jasa_peredaran_usaha.value);
            document.getElementById('jasa_peredaran_usaha').value = valueJasaPeredaranUsaha.format();

            valueJasaPenghasilanNeto = numeral(jasa_penghasilan_neto.value);
            document.getElementById('jasa_penghasilan_neto').value = valueJasaPenghasilanNeto.format();

            valuePBebasPeredaranUsaha = numeral(pbebas_peredaran_usaha.value);
            document.getElementById('pbebas_peredaran_usaha').value = valuePBebasPeredaranUsaha.format();

            valuePBebasPenghasilanNeto = numeral(pbebas_penghasilan_neto.value);
            document.getElementById('pbebas_penghasilan_neto').value = valuePBebasPenghasilanNeto.format();

            valueUsahaPeredaranUsaha = numeral(usaha_peredaran_usaha.value);
            document.getElementById('usaha_peredaran_usaha').value = valueUsahaPeredaranUsaha.format();

            valueUsahaPenghasilanNeto = numeral(usaha_penghasilan_neto.value);
            document.getElementById('usaha_penghasilan_neto').value = valueUsahaPenghasilanNeto.format();

            var resultusaha = ((valueDagangPeredaranUsaha.value()) + (valueIndustriPeredaranUsaha.value()) +
                (valueJasaPeredaranUsaha.value()) + (valuePBebasPeredaranUsaha.value()) + (valueUsahaPeredaranUsaha.value()));
            if (!isNaN(resultusaha)) {
                document.getElementById('hasilusaha').value = numeral(resultusaha).format();
            }

            var resultneto = ((valueDagangPenghasilanNeto.value()) + (valueIndustriPenghasilanNeto.value()) +
                (valueJasaPenghasilanNeto.value()) + (valuePBebasPenghasilanNeto.value()) + (valueUsahaPenghasilanNeto.value()));
            if (!isNaN(resultneto)) {
                let penghasilanneto2 = document.getElementById('penghasilanneto2');
                document.getElementById('penghasilanneto2').value = numeral(penghasilanneto2.value).format();
                document.getElementById('hasilneto').value = numeral(resultneto).format();
            }

        }

        // Bagian C
        function format_bagianC() {
            $('.penghasilan_bruto').each(function() {
                valuePenghasilanBruto = numeral(this.value);
                this.value = valuePenghasilanBruto.format();
            });
            $('.pengurangan_bruto').each(function() {
                valuePenguranganBruto = numeral(this.value);
                this.value = valuePenguranganBruto.format();
            });
            for (i = 0; i < $('.penghasilan_neto').length; i++) {
                valuePenghasilanBruto = numeral($('.penghasilan_bruto')[i].value).format();
                $('.penghasilan_bruto')[i].value = valuePenghasilanBruto;
                valuePenguranganBruto = numeral($('.pengurangan_bruto')[i].value).format();
                $('.pengurangan_bruto')[i].value = valuePenguranganBruto;
                $('.penghasilan_neto')[i].value = parseFloat(getNumPrice(valuePenghasilanBruto, '.')) - parseFloat(getNumPrice(valuePenguranganBruto, '.'));
                // console.log($('.penghasilan_neto')[i].value)
                if ($('.penghasilan_neto')[i].value.length > 0 && $('.penghasilan_neto')[i].value != 0) {
                    tmp2 = getNumPrice($('.penghasilan_neto')[i].value, '.');
                    // console.log(tmp2)
                    $('.penghasilan_neto')[i].value = numeral($('.penghasilan_neto')[i].value).format();
                    tmp += parseFloat(tmp2)
                } else {
                    tmp += 0
                }

            }
            sum = tmp
            $('#jumlah_bagianC').val(numeral(sum).format());
            tmp = 0;
        }

        // Bagian D
        function format_bagianD() {
            valueBungaPenghasilanNeto = numeral(bunga_penghasilan_neto.value);
            document.getElementById('bunga_penghasilan_neto').value = valueBungaPenghasilanNeto.format();
            valueRoyaltiPenghasilanNeto = numeral(royalti_penghasilan_neto.value);
            document.getElementById('royalti_penghasilan_neto').value = valueRoyaltiPenghasilanNeto.format();
            valueSewaPenghasilanNeto = numeral(sewa_penghasilan_neto.value);
            document.getElementById('sewa_penghasilan_neto').value = valueSewaPenghasilanNeto.format();
            valuePenghargaanPenghasilanNeto = numeral(penghargaan_penghasilan_neto.value);
            document.getElementById('penghargaan_penghasilan_neto').value = valuePenghargaanPenghasilanNeto.format();
            valueKeuntunganPenghasilanNeto = numeral(keuntungan_penghasilan_neto.value);
            document.getElementById('keuntungan_penghasilan_neto').value = valueKeuntunganPenghasilanNeto.format();
            valuePenghasilanLainPenghasilanNeto = numeral(penghasilanLain_penghasilan_neto.value);
            document.getElementById('penghasilanLain_penghasilan_neto').value = valuePenghasilanLainPenghasilanNeto.format();

            var resultnetoLain = ((valueBungaPenghasilanNeto.value()) + (valueRoyaltiPenghasilanNeto.value()) +
                (valueSewaPenghasilanNeto.value()) + (valuePenghargaanPenghasilanNeto.value()) + (valueKeuntunganPenghasilanNeto.value()) + (valuePenghasilanLainPenghasilanNeto.value()));
            if (!isNaN(resultnetoLain)) {
                document.getElementById('hasilnetolain').value = numeral(resultnetoLain).format();
            }
        }
        function BagianDSave(event) {
            bunga_penghasilan_neto = document.querySelector('#bunga_penghasilan_neto').value
            royalti_penghasilan_neto = document.querySelector('#royalti_penghasilan_neto').value
            sewa_penghasilan_neto = document.querySelector('#sewa_penghasilan_neto').value
            penghargaan_penghasilan_neto = document.querySelector('#penghargaan_penghasilan_neto').value
            keuntungan_penghasilan_neto = document.querySelector('#keuntungan_penghasilan_neto').value
            penghasilanLain_penghasilan_neto = document.querySelector('#penghasilanLain_penghasilan_neto').value

            var data = {
                type: event.value,
                PenghasilanNetoD: [bunga_penghasilan_neto, royalti_penghasilan_neto, sewa_penghasilan_neto, penghargaan_penghasilan_neto, keuntungan_penghasilan_neto, penghasilanLain_penghasilan_neto]
            }

            console.log(data);

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: 'http://localhost:8000/FormulirI2D_Point/Store/{{ $form1_2 }}',
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

        // Formulir 1770
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
            document.getElementById('kreditpajak18').value = numeral(hasilkreditpajak18).format();
            if ($('input[name="Nomor16"]:checked').val() == 'bayarsendiri' && hasilkreditpajak >= hasilkreditpajak18) {
                $("#KurangBayar").prop("checked", true);
            } else if ($('input[name="Nomor16"]:checked').val() == 'bayarsendiri' && hasilkreditpajak < hasilkreditpajak18) {
                $("#LebihBayar").prop("checked", true);

            } else if ($('input[name="Nomor16"]:checked').val() == 'potongpungut') {
                $("#LebihBayar").prop("checked", true);

            }
            // PPh KURANG/LEBIH BAYAR
            var pphkuranglebih19 = hasilkreditpajak - hasilkreditpajak18;
            document.getElementById('KurangLebihBayar19').value = numeral(pphkuranglebih19).format();

            // PASAL 25
            valuePasal25 = numeral(pasal25.value);
            document.getElementById('pasal25').value = valuePasal25.format();
        }

        function countPajakProgresif(pkpr) {
            pkp = Number(pkpr.replace(/,/g, ''));
            pkpCounted = 0;
            if (pkp <= 60000000) {
                pkpCounted = (60000000 * 0.05)
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
    </script>


    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>