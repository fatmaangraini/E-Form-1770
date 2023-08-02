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
    <link rel="stylesheet" type="text/css" href="/css/style2.css" />


    <title>Formulir 1770-I</title>
</head>

<body>
    <div class="container-fluid">
        <header>
            <div class="row header">
                <div class="col-2 bag1">
                    <h6>HALAMAN 1</h6>
                    <h5>FORMULIR</h5>
                    <h1>1770-I</h1>
                    <p>KEMENTERIAN KEUANGAN
                        RI DIREKTORAT JENDERAL PAJAK</p>
                </div>
                <div class="col-6" style="text-align: center;">
                    <h5>LAMPIRAN-I</h5>
                    <p>SPT TAHUNAN PPh WAJIB PAJAK ORANG PRIBADI</p>
                    <span>PERHITUNGAN PENGHASILAN NETO DALAM NEGERI DARI USAHA DAN/ATAU<br></span>
                    <span>PEKERJAAN BEBAS BAGI WAJIB PAJAK YANG<br></span>
                    <span>MENYELENGGARAKAN PEMBUKUAN</span>
                </div>
                <div class="col-4">
                    <a href="/formulir-II/{{ $spt->id}}" class="btn btn-secondary">Sebelumnya</a>
                    <a href="/formulir-I hal 2/{{ $spt->id}}" class="btn btn-secondary">Selanjutnya</a>
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
                        <input class="form-check-input" type="radio" name="flexRadioDisabled" value="pembukuan" id="flexRadioDisabled" onclick="Pembukuan()" <?= ($spt->jenis_pelaporan  == 'pembukuan') ? 'checked' : '' ?> disabled>
                        <label class="form-check-label" for="flexRadioDisabled">
                            Pembukuan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioCheckedDisabled" onclick="Pencatatan()" value="pencatatan" <?= ($spt->jenis_pelaporan  == 'pencatatan') ? 'checked' : '' ?> disabled>
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

        <!-- <form action="/SaveAudit/{{$form1->id}}" method="POST"> -->
        @csrf
        <input type="hidden" name="counted" value="{{ count($audit)  }}">
        <div style="padding: 5px"></div>
        <b>BAGIAN A. PENGHASILAN NETO DALAM NEGERI DARI USAHA
            DAN/ATAU PEKERJAAN BEBAS
            (BAGI WAJIB PAJAK YANG MENYELENGGARAKAN PEMBUKUAN)
        </b>

        <!-- Audit / Tidak Audit -->
        <div class="table audit">
            <label>PEMBUKUAN/LAPORAN KEUANGAN</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" onchange="handleChange(this);" name="Audit" id="Audit" value="1" <?= ($form1->is_audit  == '1') ? 'checked' : '' ?>>
                <label class="form-check-label" for="flexRadioDisabled">
                    Di Audit
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="Audit" onchange="handleChange2(this);" id="TidakAudit" value="0" <?= ($form1->is_audit  == '0') ? 'checked' : '' ?>>
                <label class="form-check-label" for="flexRadioCheckedDisabled">
                    Tidak Di Audit
                </label>
            </div>

            <div id="eformspt">
                <div class="row opiniakuntan">
                    <label class="col-3 col-form-label">Opini
                        Akuntan</label>
                    <select class="col-8" id="opini_akuntan" name="opini_akuntan">
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
                <div class="row identitasAudit">
                    <label class="col-3 col-form-label">NAMA AKUNTAN
                        PUBLIK</label>
                    <div class="col-8" style="padding: 1px;">
                        <input class="form-control" type="text" name="nama_AKpublik" value="{{ $audit[0]['nama_AKpublik'] ?? '' }}" id="nama_AKpublik">
                    </div>
                </div>
                <div class="row identitasAudit">
                    <label class="col-3 col-form-label">NPWP AKUNTAN
                        PUBLIK</label>
                    <div class="col-8" style="padding: 1px;">
                        <input class="form-control" type="text" maxlength="20" oninput="formatNpwpAkuntan(this)" name="npwp_AKpublik" value="{{ $audit[0]['npwp_AKpublik'] ?? '' }}" id="npwp_AKpublik">
                    </div>
                </div>
                <div class="row identitasAudit">
                    <label class="col-3 col-form-label">NAMA KANTOR
                        AKUNTAN PUBLIK</label>
                    <div class="col-8" style="padding: 1px;">
                        <input class="form-control" type="text" name="nama_kantor_AKpublik" value="{{ $audit[0]['nama_kantor_AKpublik'] ?? '' }}" id="nama_kantor_AKpublik">
                    </div>
                </div>
                <div class="row identitasAudit">
                    <label class="col-3 col-form-label">NPWP KANTOR
                        AKUNTAN PUBLIK</label>
                    <div class="col-8" style="padding: 1px;">
                        <input class="form-control" type="text" maxlength="20" oninput="formatNpwpKantorAkuntan(this)" name="npwp_kantor_AKpublik" value="{{ $audit[0]['npwp_kantor_AKpublik'] ?? '' }}" id="npwp_kantor_AKpublik">
                    </div>
                </div>
                <div class="row identitasAudit">
                    <label class="col-3 col-form-label">NAMA KONSULTAN
                        PAJAK</label>
                    <div class="col-8" style="padding: 1px;">
                        <input class="form-control" type="text" name="nama_Kpajak" value="{{ $audit[0]['nama_Kpajak'] ?? '' }}" id="nama_Kpajak">
                    </div>
                </div>
                <div class="row identitasAudit">
                    <label class="col-3 col-form-label">NPWP KONSULTAN
                        PAJAK</label>
                    <div class="col-8" style="padding: 1px;">
                        <input class="form-control" type="text" maxlength="20" oninput="formatNpwpKonsultan(this)" name="npwp_Kpajak" value="{{ $audit[0]['npwp_Kpajak'] ?? '' }}" id="npwp_Kpajak">
                    </div>
                </div>
                <div class="row identitasAudit">
                    <label class="col-3 col-form-label">NAMA KANTOR
                        KONSULTAN PAJAK</label>
                    <div class="col-8" style="padding: 1px;">
                        <input class="form-control" type="text" name="nama_kantor_Kpajak" value="{{ $audit[0]['nama_kantor_Kpajak'] ?? '' }}" id="nama_kantor_Kpajak">
                    </div>
                </div>
                <div class="row identitasAudit">
                    <label class="col-3 col-form-label">NPWP KANTOR
                        KONSULTAN PAJAK</label>
                    <div class="col-8" style="padding: 1px;">
                        <input class="form-control" type="text" maxlength="20" oninput="formatNpwpKantorKonsultan(this)" name="npwp_kantor_Kpajak" value="{{ $audit[0]['npwp_kantor_Kpajak'] ?? '' }}" id="npwp_kantor_Kpajak">
                    </div>
                </div>
                <button type="button" onclick="DeleteAudit()">Hapus</button>
                <button type="button" onclick="saveAudit()" id="simpanAudit" style="display: none;">Simpan</button>
                <button type="button" onclick="cekAudit()">Simpan</button>
            </div>
            <div id="eformspt2">
                <div class="row identitasAudit2">
                    <label class="col-3 col-form-label">NAMA AKUNTAN
                        PUBLIK</label>
                    <div class="col-8" style="padding: 1px;">
                        <input class="form-control" type="text" style="background-color: #808080" disabled="disabled">
                    </div>
                </div>
                <div class="row identitasAudit2">
                    <label class="col-3 col-form-label">NPWP AKUNTAN
                        PUBLIK</label>
                    <div class="col-8" style="padding: 1px;">
                        <input class="form-control" type="text" style="background-color: #808080" disabled="disabled">
                    </div>
                </div>
                <div class="row identitasAudit2">
                    <label class="col-3 col-form-label">NAMA KANTOR
                        AKUNTAN PUBLIK</label>
                    <div class="col-8" style="padding: 1px;">
                        <input class="form-control" type="text" style="background-color: #808080" disabled="disabled">
                    </div>
                </div>
                <div class="row identitasAudit2">
                    <label class="col-3 col-form-label">NPWP KANTOR
                        AKUNTAN PUBLIK</label>
                    <div class="col-8" style="padding: 1px;">
                        <input class="form-control" type="text" style="background-color: #808080" disabled="disabled">
                    </div>
                </div>
                <div class="row identitasAudit2">
                    <label class="col-3 col-form-label">NAMA KONSULTAN
                        PAJAK</label>
                    <div class="col-8" style="padding: 1px;">
                        <input class="form-control" type="text" style="background-color: #808080" disabled="disabled">
                    </div>
                </div>
                <div class="row identitasAudit2">
                    <label class="col-3 col-form-label">NPWP KONSULTAN
                        PAJAK</label>
                    <div class="col-8" style="padding: 1px;">
                        <input class="form-control" type="text" style="background-color: #808080" disabled="disabled">
                    </div>
                </div>
                <div class="row identitasAudit2">
                    <label class="col-3 col-form-label">NAMA KANTOR
                        KONSULTAN PAJAK</label>
                    <div class="col-8" style="padding: 1px;">
                        <input class="form-control" type="text" style="background-color: #808080" disabled="disabled">
                    </div>
                </div>
                <div class="row identitasAudit2">
                    <label class="col-3 col-form-label">NPWP KANTOR
                        KONSULTAN PAJAK</label>
                    <div class="col-8" style="padding: 1px;">
                        <input class="form-control" type="text" style="background-color: #808080">
                    </div>
                </div>
            </div>
        </div>
        <!-- </form> -->

        <!-- Bagian A. Penghasilan Neto Dalam Negeri -->
        <div id="tampil">
            <table width="100%">
                <tr>
                    <th class="th1"></th>
                    <th class="th2">PENGHASILAN DARI USAHA DAN/ATAU PEKERJAAN BEBAS BERDASARKAN LAPORAN KEUANGAN KOMERSIAL :</th>
                    <th class="th3"></th>
                    <th class="th4">Rupiah</th>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td class="td2"> <span>a. PEREDARAN USAHA</span></td>
                    <td class="td3">1a.</td>
                    <td class="td4"><input value="{{ $formuliri[0]->rupiah_JenisPenghasilan ?? '' }}" type="text" class="form-control" oninput="formatPengNetoDlmNegeri()" name="peredaran_usaha" id="peredaran_usaha" placeholder="0"></td>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td class="td2"><span>b. HARGA POKOK PENJUALAN</span></td>
                    <td class="td3">1b.</td>
                    <td class="td4"><input value="{{ $formuliri[1]->rupiah_JenisPenghasilan ?? '' }}" type="text" class="form-control" oninput="formatPengNetoDlmNegeri()" name="harga_pokok_penjualan" id="harga_pokok_penjualan" placeholder="0"></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; border-top: 0px; border-bottom: 0px; font-size: 12px; text-align: center">1</td>
                    <td class="td2"><span>c. LABA/RUGI BRUTO USAHA (1a - 1b)</span></td>
                    <td class="td3">1c.</td>
                    <td class="td4hasil"><input value="{{ $formuliri[2]->rupiah_JenisPenghasilan ?? '' }}" type="text" disabled="true" readonly="readonly" name="hasil1c" id="hasil1c"></td>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td class="td2"><span>d. BIAYA USAHA</span></td>
                    <td class="td3">1d.</td>
                    <td class="td4"><input value="{{ $formuliri[3]->rupiah_JenisPenghasilan ?? '' }}" type="text" class="form-control" oninput="formatPengNetoDlmNegeri()" name="biaya_usaha" id="biaya_usaha" placeholder="0"></td>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td class="td2"><span>e. PENGHASILAN NETO (1c - 1d)</span></td>
                    <td class="td3">1e.</td>
                    <td class="td4hasil"><input value="{{ $formuliri[4]->rupiah_JenisPenghasilan ?? '' }}" type="text" readonly="readonly" name="hasil1" id="hasil1"></td>
                </tr>
            </table>
            <table style="width: 100%;">
                <tr>
                    <th class="th1"></th>
                    <th class="th2">PENYESUAIAN FISIKAL POSITIF</th>
                    <th class="th3"></th>
                    <th class="th4"></th>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td class="td2"> <span>a. BIAYA YANG DIBEBANKAN /DIKELUARKAN UNTUK KEPENTINGAN RPIBADI WAJIB PAJAK ATAU ORANG YANG MENJADI TANGGUNGANNYA</span></td>
                    <td class="td3">2a.</td>
                    <td class="td4"><input value="{{ $formuliri[5]->rupiah_JenisPenghasilan ?? '' }}" type="text" class="form-control" oninput="formatPengNetoDlmNegeri()" name="biaya_dibebankan_dikeluarkan" id="biaya_dibebankan_dikeluarkan" placeholder="0"></td>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td class="td2"><span>b. PREMI ASURANSI KESEHATAN, ASURANSI KECELAKAAN, ASURANSI JIWA, ASURANSI DWIGUNA, DAN ASURANSI BEASISWA YANG DIBAYAR OLEH WAJIB PAJAK</span></td>
                    <td class="td3">2b.</td>
                    <td class="td4"><input value="{{ $formuliri[6]->rupiah_JenisPenghasilan ?? '' }}" type="text" class="form-control" oninput="formatPengNetoDlmNegeri()" name="premi_asuransi" id="premi_asuransi" placeholder="0"></td>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td class="td2"><span>c. PENGGANTIAN ATAU IMBALAN SEHUBUNGAN DENGAN PEKERJAAN ATAU JASA YANG DIBERIKAN DALAM BENTUK NATURA ATAU KENIKMATAN</span></td>
                    <td class="td3">2c.</td>
                    <td class="td4"><input value="{{ $formuliri[7]->rupiah_JenisPenghasilan ?? '' }}" type="text" class="form-control" oninput="formatPengNetoDlmNegeri()" name="penggantian_imbalan" id="penggantian_imbalan" placeholder="0"></td>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td class="td2"><span>d. JUMLAH YANG MELEBIHI KEWAJARAN YANG DIBAYARKAN KEPADA PIHAK YANG MEMPUNYAI HUBUNGAN ISTIMEWA SEHUBUNGAN DENGAN PEKERJAAN YANG DILAKUKAN</span></td>
                    <td class="td3">2d.</td>
                    <td class="td4"><input value="{{ $formuliri[8]->rupiah_JenisPenghasilan ?? '' }}" type="text" class="form-control" oninput="formatPengNetoDlmNegeri()" name="jumlahmelebihi_kewajaran" id="jumlahmelebihi_kewajaran" placeholder="0"></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; border-top: 0px; border-bottom: 0px; font-size: 12px; text-align: center">2</td>
                    <td class="td2"><span>e. HARTA YANG DIHIBAHKAN, BANTUAN ATAU SUMBANGAN</span></td>
                    <td class="td3">2e.</td>
                    <td class="td4"><input value="{{ $formuliri[9]->rupiah_JenisPenghasilan ?? '' }}" type="text" class="form-control" oninput="formatPengNetoDlmNegeri()" name="harta" id="harta" placeholder="0"></td>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td class="td2"><span>f. PAJAK PENGHASILAN</span></td>
                    <td class="td3">2f.</td>
                    <td class="td4"><input value="{{ $formuliri[10]->rupiah_JenisPenghasilan ?? '' }}" type="text" class="form-control" oninput="formatPengNetoDlmNegeri()" name="pajak_penghasilan" id="pajak_penghasilan" placeholder="0"></td>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td class="td2"><span>g. GAJI YANG DIBAYARKAN KEPADA PEMILIK / ORANG YANG MENJADI TANGGUNGANNYA</span></td>
                    <td class="td3">2g.</td>
                    <td class="td4"><input value="{{ $formuliri[11]->rupiah_JenisPenghasilan ?? '' }}" type="text" class="form-control" oninput="formatPengNetoDlmNegeri()" name="gaji_yangdibayarkan" id="gaji_yangdibayarkan" placeholder="0"></td>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td class="td2"><span>h. SANKSI ADMINISTRASI</span></td>
                    <td class="td3">2h.</td>
                    <td class="td4"><input value="{{ $formuliri[12]->rupiah_JenisPenghasilan ?? '' }}" type="text" class="form-control" oninput="formatPengNetoDlmNegeri()" name="sanksi_administrasi" id="sanksi_administrasi" placeholder="0"></td>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td class="td2"><span>i. SELISIH PENYUSUTAN/AMORTISASI KOMERSIAL DIATAS PENYUSUTAN/AMORTISASI FISIKAL</span></td>
                    <td class="td3">2i.</td>
                    <td class="td4"><input value="{{ $formuliri[13]->rupiah_JenisPenghasilan ?? '' }}" type="text" class="form-control" oninput="formatPengNetoDlmNegeri()" name="selisih" id="selisih" placeholder="0"></td>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td class="td2"><span>j. BIAYA UNTUK MENDAPATKAN, MENAGIH DAN MEMELIHARA PENGHASILAN YANG DIKENAKAN PPh FINAL DAN PENGHASILAN YANG TIDAK TERMASUK OBJEK PAJAK</span></td>
                    <td class="td3">2j.</td>
                    <td class="td4"><input value="{{ $formuliri[14]->rupiah_JenisPenghasilan ?? '' }}" type="text" class="form-control" oninput="formatPengNetoDlmNegeri()" name="biaya_yangmendapatkan" id="biaya_yangmendapatkan" placeholder="0"></td>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td class="td2"><span>k. PENYESUAIAN FISIKAL POSITIF LAINNYA</span></td>
                    <td class="td3">2k.</td>
                    <td class="td4"><input value="{{ $formuliri[15]->rupiah_JenisPenghasilan ?? '' }}" type="text" class="form-control" oninput="formatPengNetoDlmNegeri()" name="penyesuaian_fisikal_positif" id="penyesuaian_fisikal_positif" placeholder="0"></td>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td class="td2"><span>l. JUMLAH (2a s.d 2k)</span></td>
                    <td class="td3">2l.</td>
                    <td class="td4hasil"><input value="{{ $formuliri[16]->rupiah_JenisPenghasilan ?? '' }}" type="text" disabled="true" name="jumlah2a2k" id="jumlah2a2k"></td>
                </tr>
            </table>
            <table style="width: 100%;">
                <tr>
                    <th class="th1"></th>
                    <th class="th2">PENGHASILAN FISIKAL NEGATIF</th>
                    <th class="th3"></th>
                    <th class="th4"></th>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td class="td2"> <span>a. PENGHASILAN YANG DIKENAKAN PPh FINAL DAN PENGHASILAN YANG TIDAK TERMASUK OBJEK PAJAK TETAPI TERMASUK DALAM PEREDARAN USAHA</span></td>
                    <td class="td3">3a.</td>
                    <td class="td4"><input value="{{ $formuliri[17]->rupiah_JenisPenghasilan ?? '' }}" type="text" class="form-control" oninput="formatPengNetoDlmNegeri()" name="penghasilan_dikenakanPPhfinal" id="penghasilan_dikenakanPPhfinal" placeholder="0"></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; border-top: 0px; border-bottom: 0px; font-size: 12px; text-align: center">3</td>
                    <td class="td2"><span>b. SELISIH PENYUSUTAN / AMORTISASI KOMERSIAL DI BAWAH PENYUSUTAN AMORTISASI FISIKAL</span></td>
                    <td class="td3">3b.</td>
                    <td class="td4"><input value="{{ $formuliri[18]->rupiah_JenisPenghasilan ?? '' }}" type="text" class="form-control" oninput="formatPengNetoDlmNegeri()" name="selisih1" id="selisih1" placeholder="0"></td>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td class="td2"><span>c. PENYUSUTAN FISIKAL NEGATIF LAINNYA</span></td>
                    <td class="td3">3c.</td>
                    <td class="td4"><input value="{{ $formuliri[19]->rupiah_JenisPenghasilan ?? '' }}" type="text" class="form-control" oninput="formatPengNetoDlmNegeri()" name="penyesuaian_fisikal_negatif" id="penyesuaian_fisikal_negatif" placeholder="0"></td>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td class="td2"><span>d. JUMLAH (3a s.d 3c)</span></td>
                    <td class="td3">3d.</td>
                    <td class="td4hasil"><input value="{{ $formuliri[20]->rupiah_JenisPenghasilan ?? '' }}" type="text" disabled="true" readonly="readonly" name="jumlah3a3c" id="jumlah3a3c"></td>
                </tr>
                <tr>
                    <th class="th5">4</th>
                    <th class="th6">JUMLAH BAGIAN A (1e + 2l -3d)</th>
                    <th class="th7">4.</th>
                    <th class="th8"><input value="{{ $formuliri[21]->rupiah_JenisPenghasilan ?? '' }}" type="text" disabled="true" readonly="readonly" name="jumlah1e2l3d" id="jumlah1e2l3d"></th>
                </tr>

            </table>

        </div>
        <div id="disabled" style="display: none;">
            <table width="100%">
                <tr>
                    <th class="th1"></th>
                    <th class="th2">PENGHASILAN DARI USAHA DAN/ATAU PEKERJAAN BEBAS BERDASARKAN LAPORAN KEUANGAN KOMERSIAL :</th>
                    <th class="th3"></th>
                    <th class="th4">Rupiah</th>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td class="td2"> <span>a. PEREDARAN USAHA</span></td>
                    <td class="td3">1a.</td>
                    <td class="td4"><input disabled type="text" class="form-control" placeholder="0"></td>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td class="td2"><span>b. HARGA POKOK PENJUALAN</span></td>
                    <td class="td3">1b.</td>
                    <td class="td4"><input disabled type="text" class="form-control" placeholder="0"></td></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; border-top: 0px; border-bottom: 0px; font-size: 12px; text-align: center">1</td>
                    <td class="td2"><span>c. LABA/RUGI BRUTO USAHA (1a - 1b)</span></td>
                    <td class="td3">1c.</td>
                    <td class="td4hasil"><input disabled type="text" class="form-control" placeholder="0" style="background-color: #F0E68C"></td></td>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td class="td2"><span>d. BIAYA USAHA</span></td>
                    <td class="td3">1d.</td>
                    <td class="td4"><input disabled type="text" class="form-control" placeholder="0"></td></td>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td class="td2"><span>e. PENGHASILAN NETO (1c - 1d)</span></td>
                    <td class="td3">1e.</td>
                    <td class="td4hasil"><input disabled type="text" class="form-control" placeholder="0" style="background-color: #F0E68C"></td></td>
                </tr>
            </table>
            <table style="width: 100%;">
                <tr>
                    <th class="th1"></th>
                    <th class="th2">PENYESUAIAN FISIKAL POSITIF</th>
                    <th class="th3"></th>
                    <th class="th4"></th>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td class="td2"> <span>a. BIAYA YANG DIBEBANKAN /DIKELUARKAN UNTUK KEPENTINGAN RPIBADI WAJIB PAJAK ATAU ORANG YANG MENJADI TANGGUNGANNYA</span></td>
                    <td class="td3">2a.</td>
                    <td class="td4"><input disabled type="text" class="form-control" placeholder="0"></td></td>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td class="td2"><span>b. PREMI ASURANSI KESEHATAN, ASURANSI KECELAKAAN, ASURANSI JIWA, ASURANSI DWIGUNA, DAN ASURANSI BEASISWA YANG DIBAYAR OLEH WAJIB PAJAK</span></td>
                    <td class="td3">2b.</td>
                    <td class="td4"><input disabled type="text" class="form-control" placeholder="0"></td></td>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td class="td2"><span>c. PENGGANTIAN ATAU IMBALAN SEHUBUNGAN DENGAN PEKERJAAN ATAU JASA YANG DIBERIKAN DALAM BENTUK NATURA ATAU KENIKMATAN</span></td>
                    <td class="td3">2c.</td>
                    <td class="td4"><input disabled type="text" class="form-control" placeholder="0"></td></td>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td class="td2"><span>d. JUMLAH YANG MELEBIHI KEWAJARAN YANG DIBAYARKAN KEPADA PIHAK YANG MEMPUNYAI HUBUNGAN ISTIMEWA SEHUBUNGAN DENGAN PEKERJAAN YANG DILAKUKAN</span></td>
                    <td class="td3">2d.</td>
                    <td class="td4"><input disabled type="text" class="form-control" placeholder="0"></td></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; border-top: 0px; border-bottom: 0px; font-size: 12px; text-align: center">2</td>
                    <td class="td2"><span>e. HARTA YANG DIHIBAHKAN, BANTUAN ATAU SUMBANGAN</span></td>
                    <td class="td3">2e.</td>
                    <td class="td4"><input disabled type="text" class="form-control" placeholder="0"></td></td>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td class="td2"><span>f. PAJAK PENGHASILAN</span></td>
                    <td class="td3">2f.</td>
                    <td class="td4"><input disabled type="text" class="form-control" placeholder="0"></td></td>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td class="td2"><span>g. GAJI YANG DIBAYARKAN KEPADA PEMILIK / ORANG YANG MENJADI TANGGUNGANNYA</span></td>
                    <td class="td3">2g.</td>
                    <td class="td4"><input disabled type="text" class="form-control" placeholder="0"></td></td>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td class="td2"><span>h. SANKSI ADMINISTRASI</span></td>
                    <td class="td3">2h.</td>
                    <td class="td4"><input disabled type="text" class="form-control" placeholder="0"></td></td>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td class="td2"><span>i. SELISIH PENYUSUTAN/AMORTISASI KOMERSIAL DIATAS PENYUSUTAN/AMORTISASI FISIKAL</span></td>
                    <td class="td3">2i.</td>
                    <td class="td4"><input disabled type="text" class="form-control" placeholder="0"></td></td>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td class="td2"><span>j. BIAYA UNTUK MENDAPATKAN, MENAGIH DAN MEMELIHARA PENGHASILAN YANG DIKENAKAN PPh FINAL DAN PENGHASILAN YANG TIDAK TERMASUK OBJEK PAJAK</span></td>
                    <td class="td3">2j.</td>
                    <td class="td4"><input disabled type="text" class="form-control" placeholder="0"></td></td>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td class="td2"><span>k. PENYESUAIAN FISIKAL POSITIF LAINNYA</span></td>
                    <td class="td3">2k.</td>
                    <td class="td4"><input disabled type="text" class="form-control" placeholder="0"></td></td>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td class="td2"><span>l. JUMLAH (2a s.d 2k)</span></td>
                    <td class="td3">2l.</td>
                    <td class="td4hasil"><input disabled type="text" class="form-control" placeholder="0" style="background-color: #F0E68C"></td></td>
                </tr>
            </table>
            <table style="width: 100%;">
                <tr>
                    <th class="th1"></th>
                    <th class="th2">PENGHASILAN FISIKAL NEGATIF</th>
                    <th class="th3"></th>
                    <th class="th4"></th>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td class="td2"> <span>a. PENGHASILAN YANG DIKENAKAN PPh FINAL DAN PENGHASILAN YANG TIDAK TERMASUK OBJEK PAJAK TETAPI TERMASUK DALAM PEREDARAN USAHA</span></td>
                    <td class="td3">3a.</td>
                    <td class="td4"><input disabled type="text" class="form-control" placeholder="0"></td></td>
                </tr>
                <tr>
                    <td style="border: 1px solid black; border-top: 0px; border-bottom: 0px; font-size: 12px; text-align: center">3</td>
                    <td class="td2"><span>b. SELISIH PENYUSUTAN / AMORTISASI KOMERSIAL DI BAWAH PENYUSUTAN AMORTISASI FISIKAL</span></td>
                    <td class="td3">3b.</td>
                    <td class="td4"><input disabled type="text" class="form-control" placeholder="0"></td></td>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td class="td2"><span>c. PENYUSUTAN FISIKAL NEGATIF LAINNYA</span></td>
                    <td class="td3">3c.</td>
                    <td class="td4"><input disabled type="text" class="form-control" placeholder="0"></td></td>
                </tr>
                <tr>
                    <td class="td1"></td>
                    <td class="td2"><span>d. JUMLAH (3a s.d 3c)</span></td>
                    <td class="td3">3d.</td>
                    <td class="td4hasil"><input disabled type="text" class="form-control" placeholder="0" style="background-color: #F0E68C"></td></td>
                </tr>
                <tr>
                    <th class="th5">4</th>
                    <th class="th6">JUMLAH BAGIAN A (1e + 2l -3d)</th>
                    <th class="th7">4.</th>
                    <th class="th8"><input disabled type="text" class="form-control" placeholder="0" style="background-color: #F0E68C"></td></th>
                </tr>

            </table>


        </div>
        <!-- <button type="button" onclick="BagianA(this)">Simpan</button> -->
        <button type="button" value="edit" onclick="BagianA(this)">Simpan</button>
        <button type="button" onclick="BagianADelete()">Hapus</button>

        <script>
            function BagianA() {
                peredaran_usaha = document.querySelector('#peredaran_usaha').value
                harga_pokok_penjualan = document.querySelector('#harga_pokok_penjualan').value
                hasil1c = document.querySelector('#hasil1c').value
                biaya_usaha = document.querySelector('#biaya_usaha ').value
                hasil1 = document.querySelector('#hasil1').value
                biaya_dibebankan_dikeluarkan = document.querySelector('#biaya_dibebankan_dikeluarkan').value
                premi_asuransi = document.querySelector('#premi_asuransi').value
                penggantian_imbalan = document.querySelector('#penggantian_imbalan').value
                jumlahmelebihi_kewajaran = document.querySelector('#jumlahmelebihi_kewajaran').value
                harta = document.querySelector('#harta').value
                pajak_penghasilan = document.querySelector('#pajak_penghasilan').value
                gaji_yangdibayarkan = document.querySelector('#gaji_yangdibayarkan').value
                sanksi_administrasi = document.querySelector('#sanksi_administrasi').value
                selisih = document.querySelector('#selisih').value
                biaya_yangmendapatkan = document.querySelector('#biaya_yangmendapatkan').value
                penyesuaian_fisikal_positif = document.querySelector('#penyesuaian_fisikal_positif').value
                jumlah2a2k = document.querySelector('#jumlah2a2k').value
                penghasilan_dikenakanPPhfinal = document.querySelector('#penghasilan_dikenakanPPhfinal').value
                selisih1 = document.querySelector('#selisih1').value
                penyesuaian_fisikal_negatif = document.querySelector('#penyesuaian_fisikal_negatif').value
                jumlah3a3c = document.querySelector('#jumlah3a3c').value
                jumlah1e2l3d = document.querySelector('#jumlah1e2l3d').value

                var data = {
                    penghasilan: [peredaran_usaha, harga_pokok_penjualan, hasil1c, biaya_usaha, hasil1, biaya_dibebankan_dikeluarkan,
                        premi_asuransi, penggantian_imbalan, jumlahmelebihi_kewajaran, harta, pajak_penghasilan, gaji_yangdibayarkan,
                        sanksi_administrasi, selisih, biaya_yangmendapatkan, penyesuaian_fisikal_positif, jumlah2a2k, penghasilan_dikenakanPPhfinal,
                        selisih1, penyesuaian_fisikal_negatif, jumlah3a3c, jumlah1e2l3d
                    ]
                }
                console.log(data);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: '/FormulirI_Point/Store/{{ $form1->id }}',
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

            function BagianADelete() {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: '/FormulirI_Point/delete/{{ $form1->id }}',
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
        </script>
        <script>
            function Pencatatan(src) {
                const myElement = document.getElementById("tampil");
                myElement.style.display = "none";

                document.getElementById("disabled").style.display = "block";
            }

            function Pembukuan(src) {
                const myElement = document.getElementById("disabled");
                document.getElementById("tampil").style.display = "block";

                myElement.style.display = "none";
            }
        </script>




        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>
        @if($form1->is_audit == 1)
        <script>
            $(document).ready(function() {
                handleChange(true)
                if ($('input[name="flexRadioDisabled"]:checked').val() == 'pencatatan') {
                    Pencatatan(1)
                } else {
                    Pembukuan(1);
                }
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
        </script>
        @endif
        @if($form1->is_audit == 0)
        <script>
            $(document).ready(function() {

                handleChange2(true)
                if ($('input[name="flexRadioDisabled"]:checked').val() == 'pencatatan') {
                    Pencatatan(1)
                } else {
                    Pembukuan(1);
                }
            });
        </script>
        @endif
        <script>
            var input = document.getElementById("npwp_kantor_Kpajak");
            input.addEventListener("keypress", function(event) {
                if (event.key === "Enter") {
                    console.log('enter')
                    event.preventDefault();
                    saveAudit();
                }
            });

            function saveAudit() {
                const opini_akuntan = document.getElementById("opini_akuntan").value;
                const nama_AKpublik = document.getElementById("nama_AKpublik").value;
                const npwp_AKpublik = document.getElementById("npwp_AKpublik").value;
                const nama_kantor_AKpublik = document.getElementById("nama_kantor_AKpublik").value;
                const npwp_kantor_AKpublik = document.getElementById("npwp_kantor_AKpublik").value;
                const nama_Kpajak = document.getElementById("nama_Kpajak").value;
                const npwp_Kpajak = document.getElementById("npwp_Kpajak").value;
                const nama_kantor_Kpajak = document.getElementById("nama_kantor_Kpajak").value;
                const npwp_kantor_Kpajak = document.getElementById("npwp_kantor_Kpajak").value;
                data = {
                    opini_akuntan: opini_akuntan,
                    nama_AKpublik: nama_AKpublik,
                    npwp_AKpublik: npwp_AKpublik,
                    nama_kantor_AKpublik: nama_kantor_AKpublik,
                    npwp_kantor_AKpublik: npwp_kantor_AKpublik,
                    nama_Kpajak: nama_Kpajak,
                    npwp_Kpajak: npwp_Kpajak,
                    nama_kantor_Kpajak: nama_kantor_Kpajak,
                    npwp_kantor_Kpajak: npwp_kantor_Kpajak,
                }
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "post",
                    data: data,
                    url: '/Audit/Store/{{ $form1->id }}',
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

            function cekAudit() {
                const opini_akuntan = document.getElementById("opini_akuntan").value;
                const nama_AKpublik = document.getElementById("nama_AKpublik").value;
                const npwp_AKpublik = document.getElementById("npwp_AKpublik").value;
                const nama_kantor_AKpublik = document.getElementById("nama_kantor_AKpublik").value;
                const npwp_kantor_AKpublik = document.getElementById("npwp_kantor_AKpublik").value;
                const nama_Kpajak = document.getElementById("nama_Kpajak").value;
                const npwp_Kpajak = document.getElementById("npwp_Kpajak").value;
                const nama_kantor_Kpajak = document.getElementById("nama_kantor_Kpajak").value;
                const npwp_kantor_Kpajak = document.getElementById("npwp_kantor_Kpajak").value;

                if (opini_akuntan === '' || nama_AKpublik === '' || npwp_AKpublik === '' || nama_kantor_AKpublik === '' || npwp_kantor_AKpublik === '') {
                    Swal.fire({
                            title: '',
                            text: 'Mohon Melengkapi Row Sebelumnya',
                            icon: 'error',
                            confirmButtonColor: '#8A2BE2',
                            confirmButtonText: 'OK',
                        }

                    ).then((result) => {
                        if (result.isConfirmed) {

                            location.reload();
                        }
                    })
                    return
                }

                const myElement = document.getElementById("simpanAudit").click();

            }

            function DeleteAudit() {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: '/Audit/delete/{{ $form1->id }}',
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
        </script>
        <script>
            $(document).ready(function() {
                NPWPWajibPajak();
                formatPengNetoDlmNegeri();
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
                            url: '/JenisAudit/{{ $form1->id }}',
                            success: function(res) {
                                console.log(res)
                            }
                        });
                    }
                });

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
        </script>
        <script>
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
                    document.getElementById('hasil1').value = numeral(result2).format()

                }
                var result3 = ((valueBiayaDibebankanDikeluarkan.value()) + (valuePremiAsuransi.value()) + (valuePenggantianImbalan.value()) + (valueJumlahMelebihiKewajaran.value()) + (valueHarta.value()) + (valuePajakPenghasilan.value()) +
                    (valueGajiYangDibayarkan.value()) + (valueSanksiAdministrasi.value()) + (valueSelisih.value()) + (valueBiayaYangMendapatkan.value()) + (valuePenyesuaianFisikalPositif.value()));
                if (!isNaN(result3)) {
                    document.getElementById('jumlah2a2k').value = numeral(result3).format()

                }
                var result4 = ((valuePenghasilanDikenakanPPhFinal.value()) + (valueSelisih1.value()) + (valuePenyesuaianFisikalNegatif.value()));
                if (!isNaN(result4)) {
                    document.getElementById('jumlah3a3c').value = numeral(result4).format()

                }

                var result5 = result2 + result3 - result4;
                if (!isNaN(result5)) {
                    document.getElementById('jumlah1e2l3d').value = numeral(result5).format()

                }
            }

            function NPWPWajibPajak() {
            formatnpwp = document.getElementById('npwpWajibPajak').value
            formatnpwp2 = document.getElementById('npwpWajibPajak')
            if (typeof formatnpwp === 'string') {

            }
            formatnpwp2.value = formatnpwp.replace(/(\d{2})(\d{3})(\d{3})(\d{1})(\d{3})(\d{3})/, '$1.$2.$3.$4-$5.$6');
        }
        </script>
        <script>
            function formatNpwpAkuntan() {
                npwp_AKpublik = document.getElementById('npwp_AKpublik').value
                npwp_AKpublik2 = document.getElementById('npwp_AKpublik')
                if (!npwp_AKpublik.match(/^[0-9./-]+$/i) && npwp_AKpublik2.value.length != 0) {
                    alert('Angka saja')
                    npwp_AKpublik2.value = npwp_AKpublik.slice(0, -1);
                    return;
                }
                npwp_AKpublik2.value = npwp_AKpublik.replace(/(\d{2})(\d{3})(\d{3})(\d{1})(\d{3})(\d{3})/, '$1.$2.$3.$4-$5.$6');
            }

            function formatNpwpKantorAkuntan() {
                npwp_kantor_AKpublik = document.getElementById('npwp_kantor_AKpublik').value
                npwp_kantor_AKpublik2 = document.getElementById('npwp_kantor_AKpublik')
                if (!npwp_kantor_AKpublik.match(/^[0-9./-]+$/i) && npwp_kantor_AKpublik2.value.length != 0) {
                    alert('Angka saja')
                    npwp_kantor_AKpublik2.value = npwp_kantor_AKpublik.slice(0, -1);
                    return;
                }
                npwp_kantor_AKpublik2.value = npwp_kantor_AKpublik.replace(/(\d{2})(\d{3})(\d{3})(\d{1})(\d{3})(\d{3})/, '$1.$2.$3.$4-$5.$6');
            }

            function formatNpwpKonsultan() {
                npwp_Kpajak = document.getElementById('npwp_Kpajak').value
                npwp_Kpajak2 = document.getElementById('npwp_Kpajak')
                if (!npwp_Kpajak.match(/^[0-9./-]+$/i) && npwp_Kpajak2.value.length != 0) {
                    alert('Angka saja')
                    npwp_Kpajak2.value = npwp_Kpajak.slice(0, -1);
                    return;
                }
                npwp_Kpajak2.value = npwp_Kpajak.replace(/(\d{2})(\d{3})(\d{3})(\d{1})(\d{3})(\d{3})/, '$1.$2.$3.$4-$5.$6');
            }

            function formatNpwpKantorKonsultan() {
                npwp_kantor_Kpajak = document.getElementById('npwp_kantor_Kpajak').value
                npwp_kantor_Kpajak2 = document.getElementById('npwp_kantor_Kpajak')
                if (!npwp_kantor_Kpajak.match(/^[0-9./-]+$/i) && npwp_kantor_Kpajak2.value.length != 0) {
                    alert('Angka saja')
                    npwp_kantor_Kpajak2.value = npwp_kantor_Kpajak.slice(0, -1);
                    return;
                }
                npwp_kantor_Kpajak2.value = npwp_kantor_Kpajak.replace(/(\d{2})(\d{3})(\d{3})(\d{1})(\d{3})(\d{3})/, '$1.$2.$3.$4-$5.$6');
            }
        </script>
</body>

</html>