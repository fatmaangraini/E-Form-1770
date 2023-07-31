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

    <title>Formulir 1770-IV</title>
</head>

<body>
    <div class="container-fluid">
        <header>
            <div class="row header">
                <div class="col-2 bag1">
                    <h5>FORMULIR</h5>
                    <h1>1770-IV</h1>
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
                    <a href="/formulir-III/{{ $spt->id}}" class="btn btn-secondary">Selanjutnya</a>
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
                                    <th>1</th>
                                    <th>2</th>
                                    <th>{{ mb_substr($spt['tahun'], 2, 1); }}</th>
                                    <th>{{ mb_substr($spt['tahun'], 3, 1); }}</th>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDisabled" data-id="{{ $spt->id }}" value="pembukuan" id="flexRadioDisabled" <?= ($spt->jenis_pelaporan  == 'pembukuan') ? 'checked' : '' ?>>
                        <label class="form-check-label" for="flexRadioDisabled">
                            Pembukuan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioCheckedDisabled" data-id="{{ $spt->id }}" value="pencatatan" <?= ($spt->jenis_pelaporan  == 'pencatatan') ? 'checked' : '' ?>>
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
        <div style="padding: 5px;"></div>

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
                                    <button class="btn btn-primary" type="submit">Simpan</button>
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
                        <th>HAPUS</th>

                    </tr>
                    @if (count($data_harta) == 0)

                    <tr>
                        <td><select name='harta[]'>
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
                            </select>

                        </td>
                        <td><input name='nama_harta[]' type="text">
                        </td>
                        <td><input name='tahun_perolehan[]' type="number" min="2000" max="2032" maxlength="4" id="tahun_perolehan">
                        </td>
                        <td><input name='harta_perolehan[]' type="text" oninput="format(this.value)" class="harga_perolehan">
                        </td>
                        <td><input name='keterangan[]' type="text">
                        </td>
                        <td>
                            <div class="checkbox-container">
                                <input type="checkbox" name="dataharta_id">
                            </div>
                        </td>

                    </tr>
                    @endif
                </thead>
                <tbody>
                    @foreach ( $data_harta as $dh )

                    <tr>
                        <td><select name='harta[]'>
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
                        <td><input name="nama_harta[]" type="text" value="{{ $dh['nama_harta'] }}">
                        </td>
                        <td><input name="tahun_perolehan[]" type="number" min="2000" max="2032" value="{{ $dh['tahun_perolehan'] }}" maxlength="4" id="tahun_perolehan">
                        </td>
                        <td><input name="harta_perolehan[]" type="text" oninput="format(this.value)" value="{{ $dh['harta_perolehan'] }}" class="harga_perolehan">
                        </td>
                        <td><input name="keterangan[]" type="text" value="{{ $dh['keterangan'] }}">
                        </td>
                        <td>
                            <div class="checkbox-container">
                                <input type="checkbox" name="dataharta_id" value="{{ $dh['id'] }}">
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div style="padding: 10px;"></div>
            <table>
                <tr>
                    <th class="thJumlah">
                        JUMLAH BAGIAN A</th>
                    <th class="thJumlah2">
                        <input type="text" class="form-control" readonly="readonly" style="background-color: #F0E68C; text-align: right" name="hasil1" id="hasil1">
                        <input type="hidden" name="form4_id" value="{{ $form4 }}">
                        <input type="hidden" name="formspt" value="{{ $formspt }}">
                    </th>
                </tr>
            </table>

            <template id="rowTemplateHarta" width="100%">
                <tr>
                    <td><select name='harta[]'>
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
                    <td><input name="nama_harta[]" type="text">
                    </td>
                    <td><input name="tahun_perolehan[]" type="number" min="2000" max="2032" maxlength="4">
                    </td>
                    <td><input name="harta_perolehan[]" type="text" oninput="format(this.value)" class="harga_perolehan">
                    </td>
                    <td><input name="keterangan[]" type="text">
                    </td>
                    <td>
                        <div class="checkbox-container">
                            <input type="checkbox" name="dataharta_id">
                        </div>
                    </td>

                </tr>
            </template>

            <button type="button" onclick="addTableHarta(this)">Tambah</button>
            <button type="button" onclick="hapusData()">Hapus</button>
            <button type="button" id="cektableharta" onclick="cekTableHarta(this)">Simpan</button>
            <button type="submit" id="simpantableharta" style="display:none">Simpan</button>

        </form>

        <!-- Bagian B Data Utang -->
        <div style="padding: 5px;"></div>

        <b>BAGIAN B : KEWAJIBAN/UTANG PADA AKHIR TAHUN</b>
        <div>
            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-bs-whatever="@mdo">Import Data</button>
            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Import Data Utang</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/DataUtangImport" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="input-group mb-3">
                                    <input type="file" name="file" class="form-control" accept=".csv">
                                    <button class="btn btn-primary" type="submit">Simpan</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <form action="/SaveDataUtang/{{$form4}}" method="POST">
            @csrf
            <input type="hidden" name="counted" value="{{ count($data_utang)  }}">
            <table id="B_TblUtang" class="display" style="width:100%">
                <tr>
                    <th width="20%">KODE UTANG</th>
                    <th width="20%">NAMA PEMBERI PINJAMAN</th>
                    <th width="20%">ALAMAT PEMBERI PINJAMAN</th>
                    <th width="20%">TAHUN PEMINJAMAN</th>
                    <th width="20%">JUMLAH PINJAMAN</th>
                    <th>HAPUS</th>
                </tr>
                @if (count($data_utang) == 0)
                <tr>
                    <td><select name='kode_utang[]'>
                            <option value='pilih'>Pilih...</option>
                            <option value='101'>101 - Utang Bank/Lembaga Keuangan Bukan Bank (KPR, Leasing Kendaraan
                                Bermotor, dan sejenisnya)</option>
                            <option value='102'>102 - Utang Kartu Kredit</option>
                            <option value='103'>103 - Utang Afiliasi (Pinjaman dari pihak yang memiliki hubungan
                                istimewasebagaimana dimaksud dalam Pasal 18 ayat (4) Undang-UndangPPh)</option>
                            <option value='109'>109 - Utang Lainnya</option>
                        </select></td>
                    <td><input name='nama_pemberi_pinjaman[]' class="text">
                    </td>
                    <td><input name='alamat_pemberi_pinjaman[]' class="text">
                    </td>
                    <td><input name='tahun_pinjaman[]' type="number" min="2000" max="2032" class="text">
                    </td>
                    <td><input name='jumlah_pinjaman[]' type="text" oninput="format2(this.value)" class="jumlah_pinjaman">
                    </td>
                    <td>
                        <div class="checkbox-container">
                            <input type="checkbox" name="datautang_id">
                        </div>
                    </td>
                </tr>
                @endif
                <tbody>
                    @foreach ( $data_utang as $dh )
                    <tr>
                        <td><select name='kode_utang[]'>
                                <option value='pilih'>Pilih...</option>
                                <option value='101' @if ($dh['kode_utang']=="101" ) selected="selected" @endif>101 - Utang Bank/Lembaga Keuangan Bukan Bank (KPR, Leasing Kendaraan
                                    Bermotor, dan sejenisnya)</option>
                                <option value='102' @if ($dh['kode_utang']=="102" ) selected="selected" @endif>102 - Utang Kartu Kredit</option>
                                <option value='103' @if ($dh['kode_utang']=="103" ) selected="selected" @endif>103 - Utang Afiliasi (Pinjaman dari pihak yang memiliki hubungan
                                    istimewasebagaimana dimaksud dalam Pasal 18 ayat (4) Undang-UndangPPh)</option>
                                <option value='109' @if ($dh['kode_utang']=="109" ) selected="selected" @endif>109 - Utang Lainnya</option>
                            </select></td>
                        <td><input name="nama_pemberi_pinjaman[]" class="text" value="{{ $dh['nama_pemberi_pinjaman'] }}">
                        </td>
                        <td><input name="alamat_pemberi_pinjaman[]" class="text" value="{{ $dh['alamat_pemberi_pinjaman'] }}">
                        </td>
                        <td><input name="tahun_pinjaman[]" type="number" min="2000" max="2032" class="text" value="{{ $dh['tahun_pinjaman'] }}">
                        </td>
                        <td><input name="jumlah_pinjaman[]" type="text" oninput="format2(this.value)" class="jumlah_pinjaman" value="{{ $dh['jumlah_pinjaman'] }}">
                        </td>
                        <td>
                            <div class="checkbox-container">
                                <input type="checkbox" name="datautang_id" value="{{ $dh['id'] }}">
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div style="padding: 10px;"></div>
            <table>
                <tr>
                    <th class="thJumlah">
                        JUMLAH BAGIAN B</th>
                    <th class="thJumlah2">
                        <input type="text" class="form-control" disabled="true" readonly="readonly" style="background-color: #F0E68C; text-align: right" name="hasil2" id="hasil2">
                        <input type="hidden" name="form4_id" value="{{ $form4 }}">
                        <input type="hidden" name="formspt" value="{{ $formspt }}">
                    </th>
                </tr>
            </table>

            <template id="rowTemplateUtang">
                <tr>
                    <td><select name='kode_utang[]'>
                            <option value='pilih'>Pilih...</option>
                            <option value='101'>101 - Utang Bank/Lembaga Keuangan Bukan Bank (KPR, Leasing Kendaraan
                                Bermotor, dan sejenisnya)</option>
                            <option value='102'>102 - Utang Kartu Kredit</option>
                            <option value='103'>103 - Utang Afiliasi (Pinjaman dari pihak yang memiliki hubungan
                                istimewasebagaimana dimaksud dalam Pasal 18 ayat (4) Undang-UndangPPh)</option>
                            <option value='109'>109 - Utang Lainnya</option>
                        </select></td>
                    <td><input name="nama_pemberi_pinjaman[]" class="text">
                    </td>
                    <td><input name="alamat_pemberi_pinjaman[]" class="text">
                    </td>
                    <td><input name="tahun_pinjaman[]" type="number" min="2000" max="2032" class="text">
                    </td>
                    <td><input name="jumlah_pinjaman[]" type="text" oninput="format2(this.value)" class="jumlah_pinjaman">
                    </td>
                    <td>
                        <div class="checkbox-container">
                            <input type="checkbox" name="datautang_id">
                        </div>
                    </td>
                </tr>
            </template>
            <button type="button" onclick="addTableUtang(this)">Tambah</button>
            <button type="button" onclick="deleteTableUtang()">Hapus</button>
            <button type="button" id="cektableutang" onclick="cekTableUtang(this)">Simpan</button>
            <button type="submit" id="simpantableutang" style="display:none">Simpan</button>
        </form>

        <!-- PENUTUP BAGIAN B. UTANG -->

        <!-- BAGIAN C. KELUARGA -->
        <div style="padding: 5px;"></div>

        <b>BAGIAN C : DAFTAR SUSUNAN ANGGOTA KELUARGA</b>

        <form action="/SaveDataKel/{{$form4}}" method="POST">
            @csrf
            <input type="hidden" name="counted" value="{{ count($data_kel)  }}">
            <table id="C_TblKeluarga" class="display" style="width:100%">
                <tr>
                    <th>NAMA ANGGOTA KELUARGA</th>
                    <th>NIK</th>
                    <th>HUBUNGAN</th>
                    <th>PEKERJAAN</th>
                    <th>HAPUS</th>
                </tr>
                @if (count($data_kel) == 0)
                <tr>
                    <td><input name="nama_anggota_kel[]" class="text">
                    </td>
                    <td><input name="nik[]" class="text" maxlength="16" id="nik" onkeypress="validasi_nik(this.value);">
                    </td>
                    <td><input name="hubungan[]" class="text">
                    </td>
                    <td><input name="pekerjaan[]" class="text">
                    </td>
                    <td>
                        <div class="checkbox-container">
                            <input type="checkbox" name="datakeluarga_id">
                        </div>
                    </td>
                </tr>
                @endif
                <tbody>
                    @foreach ( $data_kel as $dh )
                    <tr>
                        <td><input name="nama_anggota_kel[]" class="text" value="{{ $dh['nama_anggota_kel'] }}">
                        </td>
                        <td><input name="nik[]" class="text" value="{{ $dh['nik'] }}" maxlength="16" id="nik" onkeypress="validasi_nik(this.value);">
                        </td>
                        <td><input name="hubungan[]" class="text" value="{{ $dh['hubungan'] }}">
                        </td>
                        <td><input name="pekerjaan[]" class="text" value="{{ $dh['pekerjaan'] }}">
                        </td>
                        <td>
                            <div class="checkbox-container">
                                <input type="checkbox" name="datakeluarga_id" value="{{ $dh['id'] }}">
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <template id="rowTemplateKeluarga">
                <tr>
                    <td><input name="nama_anggota_kel[]" class="text">
                    </td>
                    <td><input name="nik[]" class="text" maxlength="16" id="nik" onkeypress="validasi_nik(this.value);">
                    </td>
                    <td><input name="hubungan[]" class="text">
                    </td>
                    <td><input name="pekerjaan[]" class="text">
                    </td>
                    <td>
                        <div class="checkbox-container">
                            <input type="checkbox" name="datakeluarga_id">
                        </div>
                    </td>
                </tr>
            </template>
            <button type="button" onclick="addTableKeluarga(this)">Tambah</button>
            <button type="button" onclick="deleteTableKeluarga()">Hapus</button>
            <input type="hidden" name="form4_id" value="{{ $form4 }}">
            <input type="hidden" name="formspt" value="{{ $formspt }}">
            <button type="button" id="cektblekeluarga" onclick="cekTableKeluarga(this)">Simpan</button>
            <button type="submit" id="simpantablekeluarga" style="display:none">Simpan</button>
        </form>
        <script>
            function validasi_nik(nilai_nik) {

                var nik = document.getElementById('nik');
                var nik_invalid = document.getElementById('nik_invalid');

                if (nilai_nik.length < 15) {

                    nik.classList.add('invalid');
                    nik_invalid.style.display = 'block';

                } else {

                    nik.classList.remove('invalid');
                    nik_invalid.style.display = 'none';

                }
            }
        </script>
        <!-- PENUTUP BAGIAN C. KELUARGA -->
    </div>


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
    <script src="/js/formulir.js"></script>


    <script>
        let counted = 0;
        let counted2 = 0;
        let counted3 = 0;
        let tr = 1;
        let tr2 = 1;
        let tr3 = 1;
        $(document).ready(function() {
            NPWPWajibPajak();
            format();
            format2();
            // window.print();
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
        // $('input:radio[name="flexRadioDisabled"]').change(
        //     function() {
        //         if ($(this).is(':checked')) {
        //             console.log(1, $(this).val())
        //             data = {
        //                 jenis_pelaporan: $(this).val()
        //             }
        //             $.ajax({
        //                 headers: {
        //                     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //                 },
        //                 type: "POST",
        //                 data: data,
        //                 url: 'http://localhost:8000/JenisUpdate/{{ $spt->id }}',
        //                 success: function(res) {
        //                     console.log(res)
        //                 }
        //             });
        //             // append goes here
        //         }
        //     });

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

        // function deleteTableHarta(nama) {
        //     if (countdata == 0) {
        //         Swal.fire({
        //             icon: 'error',
        //             title: '',
        //             text: 'Mohon Melengkapi Row Sebelumnya',
        //         })
        //         return;
        //     }
        //     Swal.fire({
        //         title: 'Apa kamu yakin?',
        //         text: "Kamu tidak akan dapat mengembalikan ini!",
        //         icon: 'warning',
        //         showCancelButton: true,
        //         confirmButtonColor: '#3085d6',
        //         cancelButtonColor: '#d33',
        //         confirmButtonText: 'Ya, hapus!',
        //         cancelButtonText: 'Batal',
        //     }).then((result) => {
        //         if (result.isConfirmed) {
        //             Swal.fire(
        //                 'Berhasil!',
        //                 'Data Anda telah dihapus.',
        //                 'success'
        //             )

        //             let tr_length = $('#' + nama + ' tr').length;
        //             if (tr_length == 2) {
        //                 $.ajax({
        //                     headers: {
        //                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //                     },
        //                     type: "POST",
        //                     url: 'http://localhost:8000/DataHarta/delete',
        //                     success: function(res) {
        //                         $('#' + nama + ' tr:last').remove();
        //                         var countdatas = <?= count($data_harta) ?>,
        //                             template = document.querySelector('#rowTemplateHarta'),
        //                             tbl = document.querySelector('#A_TblHarta'),
        //                             td_choice = template.content.querySelectorAll("td"),
        //                             last_td = $('#A_TblHarta tr:last'),
        //                             tr_count = tbl.rows.length;
        //                         td_choice.textContent = tr_count;
        //                         var clone = document.importNode(template.content, true);
        //                         tbl.appendChild(clone);
        //                         format();
        //                     }
        //                 });
        //             }
        //             if (tr_length > 2) {
        //                 $.ajax({
        //                     headers: {
        //                         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //                     },
        //                     type: "POST",
        //                     url: 'http://localhost:8000/DataHarta/delete',
        //                     success: function(res) {
        //                         $('#' + nama + ' tr:last').remove();
        //                         format();
        //                     }
        //                 });
        //             }
        //             counted -= 1;
        //             countdata -= 1;
        //             format();
        //         }
        //     })

        // }

        function hapusData() {
            var checkboxes = document.getElementsByName("dataharta_id");
            let checkedValues = [];
            // if (countdata == 0) {
            //     Swal.fire({
            //         icon: 'error',
            //         title: '',
            //         text: 'Mohon Melengkapi Row Sebelumnya',
            //     })
            //     return;
            // }
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
                    for (var i = 0; i < checkboxes.length; i++) {
                        if (checkboxes[i].checked) {
                            checkedValues.push(checkboxes[i].value);
                        }
                    }
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: "POST",
                        url: 'http://localhost:8000/DataHarta/delete',
                        data: {
                            checkedValues: checkedValues
                        },
                        success: function(data) {
                            Swal.fire(
                                'Berhasil!',
                                'Data Anda telah dihapus.',
                                'success'
                            ).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload();
                                }
                            })
                        }
                    });
                }


                // countdata -= 1;
            })
            // console.log(checkedValues);
        }



        function addTableUtang($this) {
            var countdata = <?= count($data_utang) ?>,
                template = document.querySelector('#rowTemplateUtang'),
                tbl = document.querySelector('#B_TblUtang'),
                td_choice = template.content.querySelectorAll("td"),
                last_td = $('#B_TblUtang tr:last'),
                tr_count = tbl.rows.length;

            var kode_utang = last_td.find('td:eq(0)').find('option:selected').val()
            var nama_pemberi_pinjaman = last_td.find('td:eq(1)').find('input').val();
            var alamat_pemberi_pinjaman = last_td.find('td:eq(2)').find('input').val();
            var tahun_pinjaman = last_td.find('td:eq(3)').find('input').val();
            var jumlah_pinjaman = last_td.find('td:eq(4)').find('input').val();

            console.log(data)
            if (kode_utang === 'pilih' || nama_pemberi_pinjaman === '' || alamat_pemberi_pinjaman === '' || tahun_pinjaman === '' || jumlah_pinjaman === '') {
                Swal.fire({
                    icon: 'error',
                    title: '',
                    text: 'Mohon Melengkapi Row Sebelumnya',
                })
                return
            }
            if (counted2 == 0 && countdata > 0) {
                td_choice.textContent = tr_count;
                var clone = document.importNode(template.content, true);
                tbl.appendChild(clone);
                format2();
                counted2 += 1
                return
            }
            var data = {
                kode_utang: kode_utang,
                nama_pemberi_pinjaman: nama_pemberi_pinjaman,
                alamat_pemberi_pinjaman: alamat_pemberi_pinjaman,
                tahun_pinjaman: tahun_pinjaman,
                jumlah_pinjaman: jumlah_pinjaman
            }

            td_choice.textContent = tr_count;
            var clone = document.importNode(template.content, true);
            tbl.appendChild(clone);
            format2();
        }

        function cekTableUtang($this) {
            var countdata = <?= count($data_utang) ?>,
                template = document.querySelector('#rowTemplateUtang'),
                tbl = document.querySelector('#B_TblUtang'),
                td_choice = template.content.querySelectorAll("td"),
                last_td = $('#B_TblUtang tr:last'),
                tr_count = tbl.rows.length;

            var kode_utang = last_td.find('td:eq(0)').find('option:selected').val()
            var nama_pemberi_pinjaman = last_td.find('td:eq(1)').find('input').val();
            var alamat_pemberi_pinjaman = last_td.find('td:eq(2)').find('input').val();
            var tahun_pinjaman = last_td.find('td:eq(3)').find('input').val();
            var jumlah_pinjaman = last_td.find('td:eq(4)').find('input').val();
            if (kode_utang === 'pilih' || nama_pemberi_pinjaman === '' || alamat_pemberi_pinjaman === '' || tahun_pinjaman === '' || jumlah_pinjaman === '') {
                Swal.fire({
                    icon: 'error',
                    title: '',
                    text: 'Mohon Melengkapi Row Sebelumnya',
                })
                return
            }
            const myElement = document.getElementById("simpantableutang").click();

        }

        countdata2 = <?= count($data_utang) ?>;

        function deleteTableUtang() {
            var checkboxes = document.getElementsByName("datautang_id");
            let checkedValues = [];

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
                    for (var i = 0; i < checkboxes.length; i++) {
                        if (checkboxes[i].checked) {
                            checkedValues.push(checkboxes[i].value);
                        }
                    }
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: "POST",
                        url: 'http://localhost:8000/DataUtang/delete',
                        data: {
                            checkedValues: checkedValues
                        },
                        success: function(data) {
                            Swal.fire(
                                'Berhasil!',
                                'Data Anda telah dihapus.',
                                'success'
                            ).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload();
                                }
                            })
                        }
                    });
                }
            })
        }

        function addTableKeluarga($this) {
            var countdata = <?= count($data_kel) ?>,
                template = document.querySelector('#rowTemplateKeluarga'),
                tbl = document.querySelector('#C_TblKeluarga'),
                td_choice = template.content.querySelectorAll("td"),
                last_td = $('#C_TblKeluarga tr:last'),
                tr_count = tbl.rows.length;
            var nama_anggota_kel = last_td.find('td:eq(0)').find('input').val()
            var nik = last_td.find('td:eq(1)').find('input').val();
            var hubungan = last_td.find('td:eq(2)').find('input').val();
            var pekerjaan = last_td.find('td:eq(3)').find('input').val();
            if (nama_anggota_kel === '' || nik === '' || hubungan === '' || pekerjaan === '') {
                Swal.fire({
                    icon: 'error',
                    title: '',
                    text: 'Mohon Melengkapi Row Sebelumnya',
                })
                return
            }
            if (counted3 == 0 && countdata > 0) {
                td_choice.textContent = tr_count;
                var clone = document.importNode(template.content, true);
                tbl.appendChild(clone);
                counted3 += 1
                return
            }
            var data = {
                nama_anggota_kel: nama_anggota_kel,
                nik: nik,
                hubungan: hubungan,
                pekerjaan: pekerjaan,
            }

            td_choice.textContent = tr_count;
            var clone = document.importNode(template.content, true);
            tbl.appendChild(clone);
        }

        function cekTableKeluarga($this) {
            var countdata = <?= count($data_kel) ?>,
                template = document.querySelector('#rowTemplateKeluarga'),
                tbl = document.querySelector('#C_TblKeluarga'),
                td_choice = template.content.querySelectorAll("td"),
                last_td = $('#C_TblKeluarga tr:last'),
                tr_count = tbl.rows.length;
            var nama_anggota_kel = last_td.find('td:eq(0)').find('input').val()
            var nik = last_td.find('td:eq(1)').find('input').val();
            var hubungan = last_td.find('td:eq(2)').find('input').val();
            var pekerjaan = last_td.find('td:eq(3)').find('input').val();
            if (nama_anggota_kel === '' || nik === '' || hubungan === '' || pekerjaan === '') {
                Swal.fire({
                    icon: 'error',
                    title: '',
                    text: 'Mohon Melengkapi Row Sebelumnya',
                })
                return
            }
            const myElement = document.getElementById("simpantablekeluarga").click();

        }
        countdata3 = <?= count($data_kel) ?>;

       function deleteTableKeluarga() {
            var checkboxes = document.getElementsByName("datakeluarga_id");
            let checkedValues = [];

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
                    for (var i = 0; i < checkboxes.length; i++) {
                        if (checkboxes[i].checked) {
                            checkedValues.push(checkboxes[i].value);
                        }
                    }
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: "POST",
                        url: 'http://localhost:8000/DataKel/delete',
                        data: {
                            checkedValues: checkedValues
                        },
                        success: function(data) {
                            Swal.fire(
                                'Berhasil!',
                                'Data Anda telah dihapus.',
                                'success'
                            ).then((result) => {
                                if (result.isConfirmed) {
                                    location.reload();
                                }
                            })
                        }
                    });
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

        function NPWPWajibPajak() {
            formatnpwp = document.getElementById('npwpWajibPajak').value
            formatnpwp2 = document.getElementById('npwpWajibPajak')
            if (typeof formatnpwp === 'string') {

            }
            formatnpwp2.value = formatnpwp.replace(/(\d{2})(\d{3})(\d{3})(\d{1})(\d{3})(\d{3})/, '$1.$2.$3.$4-$5.$6');
        }
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->
    @include('sweetalert::alert')


</body>

</html>