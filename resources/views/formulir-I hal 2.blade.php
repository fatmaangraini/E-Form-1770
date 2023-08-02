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
    <link rel="stylesheet" type="text/css" href="/css/style3.css" />

    <title>Formulir 1770-I</title>

</head>

<body>
    <div class="container-fluid">
        <div class="row header">
            <div class="col-2 bag1">
                <h6>HALAMAN 2</h6>
                <h5>FORMULIR</h5>
                <h1>1770-I</h1>
                <p>KEMENTERIAN KEUANGAN
                    RI DIREKTORAT JENDERAL PAJAK</p>
            </div>
            <div class="col-6">
                <h5>LAMPIRAN-I</h5>
                <p>SPT TAHUNAN PPh WAJIB PAJAK ORANG PRIBADI</p>
                <span>* PERHITUNGAN PENGHASILAN NETO DALAM NEGERI DARI USAHA DAN/ATAU PEKERJAAN BEBAS BAGI WAJIB PAJAK YANG MENYELENGGARAKAN PENCATATAN<br></span>
                <span>* PERHITUNGAN PENGHASILAN NETO DALAM NEGERI SEHUBUNGAN DENGAN PEKERJAAN<br></span>
                <span>* PENGHITUNGAN PENGHASILAN DALAM NEGERI LAINNYA </span>
            </div>
            <div class="col-4">
                <a href="/formulir-I/{{ $spt->id}}" class="btn btn-secondary sebelumnya">Sebelumnya</a>
                <a href="/formulir1770/{{ $spt->id}}" class="btn btn-secondary">Selanjutnya</a>
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
                    <input class="form-check-input" type="radio" name="flexRadioDisabled" id="flexRadioCheckedDisabled" value="pencatatan" onclick="Pencatatan()" <?= ($spt->jenis_pelaporan  == 'pencatatan') ? 'checked' : '' ?> disabled>
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

        <!-- Bagian B. Penghasilan Neto Dalam Negeri (pencatatan) -->
        <div style="padding: 5px;"></div>
        <b>BAGIAN B. PENGHASILAN NETO DALAM NEGERI DARI USAHA DAN/ATAU PEKERJAAN BEBAS
            (BAGI WAJIB PAJAK YANG MENYELENGGARAKAN PENCATATAN)</b>
        <table id="Bagian_A" style="display: none;">
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
                <td class="tdtiga"><input type="text" class="form-control" value="{{ $formulir_i2b[0]->rupiah_peredaran_usahaB ?? '' }}" oninput="format()" name="dagang_peredaran_usaha" id="dagang_peredaran_usaha" placeholder="0"></td>
                <td class="tdempat"><input type="text" class="form-control" value="{{ $formulir_i2b[0]->norma ?? '' }}" id="norma_dagang" name="norma_dagang"></td>
                <td class="tdtiga"><input type="text" class="form-control" value="{{ $formulir_i2b[0]->rupiah_penghasilan_netoB ?? '' }}" oninput="format2()" name="dagang_penghasilan_neto" id="dagang_penghasilan_neto" placeholder="0"></td>
            </tr>
            <tr>
                <td class="tdsatu">2.</td>
                <td class="tddua">INDUSTRI</td>
                <td class="tdtiga"><input type="text" class="form-control" value="{{ $formulir_i2b[1]->rupiah_peredaran_usahaB ?? '' }}" oninput="format()" name="industri_peredaran_usaha" id="industri_peredaran_usaha" placeholder="0"></td>
                <td class="tdempat"><input type="text" class="form-control" value="{{ $formulir_i2b[1]->norma ?? '' }}" id="norma_industri" name="norma_indutri"></td>
                <td class="tdtiga"><input type="text" class="form-control" value="{{ $formulir_i2b[1]->rupiah_penghasilan_netoB ?? '' }}" oninput="format3()" name="industri_penghasilan_neto" id="industri_penghasilan_neto" placeholder="0"></td>
            </tr>
            <tr>
                <td class="tdsatu">3.</td>
                <td class="tddua">JASA</td>
                <td class="tdtiga"><input type="text" class="form-control" value="{{ $formulir_i2b[2]->rupiah_peredaran_usahaB ?? '' }}" oninput="format()" name="jasa_peredaran_usaha" id="jasa_peredaran_usaha" placeholder="0"></td>
                <td class="tdempat"><input type="text" class="form-control" value="{{ $formulir_i2b[2]->norma ?? '' }}" id="norma_jasa" name="norma_jasa"></td>
                <td class="tdtiga"><input type="text" class="form-control" value="{{ $formulir_i2b[2]->rupiah_penghasilan_netoB ?? '' }}" oninput="format4()" name="jasa_penghasilan_neto" id="jasa_penghasilan_neto" placeholder="0"></td>
            </tr>
            <tr>
                <td class="tdsatu">4.</td>
                <td class="tddua">PEKERJAAN BEBAS</td>
                <td class="tdtiga"><input type="text" class="form-control" value="{{ $formulir_i2b[3]->rupiah_peredaran_usahaB ?? '' }}" oninput="format()" name="pbebas_peredaran_usaha" id="pbebas_peredaran_usaha" placeholder="0"></td>
                <td class="tdempat"><input type="text" class="form-control" value="{{ $formulir_i2b[3]->norma ?? '' }}" id="norma_pbebas" name="norma_pbebas"></td>
                <td class="tdtiga"><input type="text" class="form-control" value="{{ $formulir_i2b[3]->rupiah_penghasilan_netoB ?? '' }}" oninput="format5()" name="pbebas_penghasilan_neto" id="pbebas_penghasilan_neto" placeholder="0"></td>
            </tr>
            <tr>
                <td class="tdsatu">5.</td>
                <td class="tddua">USAHA LAINNYA</td>
                <td class="tdtiga"><input type="text" class="form-control" value="{{ $formulir_i2b[4]->rupiah_peredaran_usahaB ?? '' }}" oninput="format()" name="usaha_peredaran_usaha" id="usaha_peredaran_usaha" placeholder="0"></td>
                <td class="tdempat"><input type="text" class="form-control" value="{{ $formulir_i2b[4]->norma ?? '' }}" id="norma_usaha" name="norma_usaha"></td>
                <td class="tdtiga"><input type="text" class="form-control" value="{{ $formulir_i2b[4]->rupiah_penghasilan_netoB ?? '' }}" oninput="format6()" name="usaha_penghasilan_neto" id="usaha_penghasilan_neto" placeholder="0"></td>
            </tr>
            <tr>
                <td class="tdsatu"></td>
                <td class="thdua">JUMLAH BAGIAN B</td>
                <td class="jumlahB"><input type="text" class="form-control" style="background-color: #F0E68C;" readonly="readonly" name="hasilusaha" id="hasilusaha"></td>
                <td class="thempat">JBB</td>
                <td class="jumlahB"><input input type="text" class="form-control" readonly="readonly" style="background-color: #F0E68C;" name="hasilneto" id="hasilneto"></td>
            </tr>
        </table>

        <table id="Bagian_A_disabled">
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
                <td class="tdtiga"><input class="text" placeholder="0" disabled></td>
                <td class="tdempat"><input class="text" disabled></td>
                <td class="tdtiga"><input class="text" placeholder="0" disabled></td>
            </tr>
            <tr>
                <td class="tdsatu">2.</td>
                <td class="tddua">INDUSTRI</td>
                <td class="tdtiga"><input class="text" placeholder="0" disabled></td>
                <td class="tdempat"><input class="text" disabled></td>
                <td class="tdtiga"><input class="text" placeholder="0" disabled></td>
            </tr>
            <tr>
                <td class="tdsatu">3.</td>
                <td class="tddua">JASA</td>
                <td class="tdtiga"><input class="text" placeholder="0" disabled></td>
                <td class="tdempat"><input class="text" disabled></td>
                <td class="tdtiga"><input class="text" placeholder="0" disabled></td>
            </tr>
            <tr>
                <td class="tdsatu">4.</td>
                <td class="tddua">PEKERJAAN BEBAS</td>
                <td class="tdtiga"><input class="text" placeholder="0" disabled></td>
                <td class="tdempat"><input class="text" disabled></td>
                <td class="tdtiga"><input class="text" placeholder="0" disabled></td>
            </tr>
            <tr>
                <td class="tdsatu">5.</td>
                <td class="tddua">USAHA LAINNYA</td>
                <td class="tdtiga"><input class="text" placeholder="0" disabled></td>
                <td class="tdempat"><input class="text" disabled></td>
                <td class="tdtiga"><input class="text" placeholder="0" disabled></td>
            </tr>
            <tr>
                <td class="tdsatu"></td>
                <td class="thdua">JUMLAH BAGIAN B</td>
                <td class="jumlahB"><input type="text" class="form-control" style="background-color: #F0E68C;" readonly="readonly" name="hasilusaha" id="hasilusaha"></td>
                <td class="thempat">JBB</td>
                <td class="jumlahB"><input input type="text" class="form-control" readonly="readonly" style="background-color: #F0E68C;" name="hasilneto" id="hasilneto"></td>
            </tr>
        </table>
        <button type="button" value="edit" onclick="BagianBSave(this)">Simpan</button>
        <button type="button" onclick="BagianBDelete()">Hapus</button>

        <script>
            function Pembukuan(src) {
                const myElement = document.getElementById("Bagian_A");
                myElement.style.display = "none";

                document.getElementById("Bagian_A_disabled").style.display = "block";
            }

            function Pencatatan(src) {
                const myElement = document.getElementById("Bagian_A_disabled");
                myElement.style.display = "none";

                document.getElementById("Bagian_A").style.display = "block";

            }
        </script>

        <!-- Bagian C. Penghasilan Neto (Tidak Bersifat Final) -->
        <div style="padding: 5px;"></div>
        <b> BAGIAN C. PENGHASILAN NETO DALAM NEGERI SEHUBUNGAN DENGAN PEKERJAAN
            (TIDAK TERMASUK PENGHASILAN YANG DIKENAKAN PPh BERSIFAT FINAL)</b>
        <form action="/SaveFormulirI2C" method="POST">
            @csrf
            <input type="hidden" name="counted" value="{{ count($formulir_i2c ?? [])  }}">
            <table id="BagianC" class="display" width="100%">
                <tr>
                    <th>NPWP PEMBERI KERJA</th>
                    <th>NAMA PEMBERI KERJA</th>
                    <th>PENGHASILAN BRUTO</th>
                    <th>PENGURANGAN</br>PENGHASILAN BRUTO</th>
                    <th>PENGHASILAN NETO</th>
                    <th>HAPUS</th>
                </tr>
                @if (count($formulir_i2c ?? []) == 0)
                <tr>
                    <td><input type="text" name="npwp_pemberi_kerja[]" style="border: 0; height:35px; width: 100%; text-align:center" maxlength="20" oninput="FormatNPWP_Pemberi_Kerja(this)" id="npwp_PemberiKerja"></td>
                    <td><input type="text" name="nama_pemberi_kerja[]" style="border: 0; height:35px; width: 100%; text-align:center; text-transform:uppercase"></td>
                    <td><input type="text" name="penghasilan_bruto[]" style="border: 0; height:35px; width: 100%; text-align:center" oninput="format_bagianC(this.value)" id="penghasilan_bruto" class="penghasilan_bruto" placeholder="0"></td>
                    <td><input type="text" name="pengurangan_penghasilan_bruto[]" style="border: 0; height:35px; width: 100%; text-align:center" oninput="format_bagianC(this.value)" id="pengurangan_bruto" class="pengurangan_bruto" placeholder="0"></td>
                    <td><input type="text" name="penghasilan_neto[]" style="border: 0; height:35px; width: 100%; text-align:center" oninput="format_bagianC(this.value)" class="penghasilan_neto" placeholder="0"></td>
                    <td>
                        <div class="checkbox-container">
                            <input type="checkbox" name="pengneto_id">
                        </div>
                    </td>
                </tr>
                @endif
                <tbody>
                    @foreach ( $formulir_i2c as $dh)
                    <tr>
                        <td><input type="text" name="npwp_pemberi_kerja[]" value="{{ $dh['npwp_pemberi_kerja'] }}" style="border: 0; height:35px; width: 100%; text-align:center" maxlength="20" oninput="FormatNPWP_Pemberi_Kerja(this)" id="npwp_PemberiKerja"></td>
                        <td><input type="text" name="nama_pemberi_kerja[]" value="{{ $dh['nama_pemberi_kerja'] }}" style="border: 0; height:35px; width: 100%; text-align:center; text-transform:uppercase"></td>
                        <td><input type="text" name="penghasilan_bruto[]" value="{{ $dh['penghasilan_bruto'] }}" style="border: 0; height:35px; width: 100%; text-align:center" oninput="format_bagianC(this.value)" id="penghasilan_bruto" class="penghasilan_bruto" placeholder="0"></td>
                        <td><input type="text" name="pengurangan_penghasilan_bruto[]" value="{{ $dh['pengurangan_penghasilan_bruto'] }}" style="border: 0; height:35px; width: 100%; text-align:center" oninput="format_bagianC(this.value)" id="pengurangan_bruto" class="pengurangan_bruto" placeholder="0"></td>
                        <td><input type="text" name="penghasilan_neto[]" value="{{ $dh['penghasilan_neto'] }}" style="border: 0; height:35px; width: 100%; text-align:center" oninput="format_bagianC(this.value)" class="penghasilan_neto" placeholder="0"></td>
                        <td>
                            <div class="checkbox-container">
                                <input type="checkbox" name="pengneto_id" value="{{ $dh['id'] }}">
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <table>
                <tr>
                    <th class="jumlahC">JUMLAH BAGIAN C</th>
                    <th class="thjumlah">
                        <input type="text" id="jumlah_bagianC" placeholder="0">
                    </th>
                </tr>
            </table>
            <template id="rowTemplateBagianC">
                <tr>
                    <td><input type="text" name="npwp_pemberi_kerja[]" style="border: 0; height:35px; width: 100%; text-align:center" maxlength="20" oninput="FormatNPWP_Pemberi_Kerja(this)" id="npwp_PemberiKerja"></td>
                    <td><input type="text" name="nama_pemberi_kerja[]" style="border: 0; height:35px; width: 100%; text-align:center;text-transform:uppercase"></td>
                    <td><input type="text" name="penghasilan_bruto[]" style="border: 0; height:35px; width: 100%; text-align:center" oninput="format_bagianC(this.value)" id="penghasilan_bruto" class="penghasilan_bruto" value="0"></td>
                    <td><input type="text" name="pengurangan_penghasilan_bruto[]" style="border: 0; height:35px; width: 100%; text-align:center" oninput="format_bagianC(this.value)" id="pengurangan_bruto" class="pengurangan_bruto" value="0"></td>
                    <td><input type="text" name="penghasilan_neto[]" style="border: 0; height:35px; width: 100%; text-align:center" oninput="format_bagianC(this.value)" class="penghasilan_neto" value="0"></td>
                    <td>
                        <div class="checkbox-container">
                            <input type="checkbox" name="pengneto_id">
                        </div>
                    </td>
                </tr>
            </template>
            <button type="button" onclick="addTableBagianC(this)">Tambah</button>
            <button type="button" onclick="deleteTableBagianC('BagianC')">Hapus</button>
            <input type="hidden" name="form1_2_id" value="{{ $form1_2 }}">
            <input type="hidden" name="formspt" value="{{ $formspt }}">
            <button type="button" id="cekbagianC" onclick="cekBagianC(this)">Simpan</button>
            <button type="submit" id="simpanbagianC" style="display:none">Simpan</button>
        </form>

        <!-- Bagian D. Penghasilan Neto (Lainnya) -->
        <div style="padding: 5px;"></div>
        <b>BAGIAN D. PENGHASILAN NETO DALAM NEGERI LAINNYA
            (TIDAK TERMASUK PENGHASILAN YANG DIKENAKAN PPh BERSIFAT FINAL)</b>
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
                <td class="tddua2"><input type="text" value="{{ $formulir_i2d[0]->rupiah_penghasilan_netoD ?? '' }}" oninput="format_bagianD()" name="bunga_penghasilan_neto" id="bunga_penghasilan_neto" placeholder="0"></td>
            </tr>
            <tr>
                <td class="tdsatu">2.</td>
                <td class="tddua2">ROYALTI</td>
                <td class="tddua2"><input type="text" value="{{ $formulir_i2d[1]->rupiah_penghasilan_netoD ?? '' }}" oninput="format_bagianD()" name="royalti_penghasilan_neto" id="royalti_penghasilan_neto" placeholder="0"></td>
            </tr>
            <tr>
                <td class="tdsatu">3.</td>
                <td class="tddua2">SEWA</td>
                <td class="tddua2"><input type="text" value="{{ $formulir_i2d[2]->rupiah_penghasilan_netoD ?? '' }}" oninput="format_bagianD()" name="sewa_penghasilan_neto" id="sewa_penghasilan_neto" placeholder="0"></td>
            </tr>
            <tr>
                <td class="tdsatu">4.</td>
                <td class="tddua2">PENGHARGAAN DAN HADIAH</td>
                <td class="tddua2"><input type="text" value="{{ $formulir_i2d[3]->rupiah_penghasilan_netoD ?? '' }}" oninput="format_bagianD()" name="penghargaan_penghasilan_neto" id="penghargaan_penghasilan_neto" placeholder="0"></td>
            </tr>
            <tr>
                <td class="tdsatu">5.</td>
                <td class="tddua2">KEUNTUNGAN DARI PENJUALAN/PENGALIHAN HARTA</td>
                <td class="tddua2"><input type="text" value="{{ $formulir_i2d[4]->rupiah_penghasilan_netoD ?? '' }}" oninput="format_bagianD()" name="keuntungan_penghasilan_neto" id="keuntungan_penghasilan_neto" placeholder="0"></td>
            </tr>
            <tr>
                <td class="tdsatu">6.</td>
                <td class="tddua2">PENGHASILAN LAINNYA</td>
                <td class="tddua2"><input class="text" value="{{ $formulir_i2d[5]->rupiah_penghasilan_netoD ?? '' }}" oninput="format_bagianD()" name="penghasilanLain_penghasilan_neto" id="penghasilanLain_penghasilan_neto" placeholder="0"></td>
            </tr>
        </table>
        <table width="100%">
            <tr>
                <td class="tdsatu2">JUMLAH BAGIAN D</td>
                <td class="tddua3">JBD</td>
                <td class="tdtiga2"><input input type="text" class="form-control" readonly="readonly" style="background-color: #F0E68C; text-align:right" name="hasilnetolain" id="hasilnetolain"></td>
            </tr>
        </table>
        <button type="button" value="edit" onclick="BagianDSave(this)">Simpan</button>
        <button type="button" onclick="BagianDDelete(this)">Hapus</button>

        </form>
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

    <script>
        $(document).ready(function() {
            if ($('input[name="flexRadioDisabled"]:checked').val() == 'pencatatan') {
                Pencatatan(1)
            } else {
                Pembukuan(1);
            }
            NPWPWajibPajak();
            format();
            format_bagianC()
            format_bagianD();
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
                    // append goes here
                }
            });

        let tr = 0;

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
    <script>
        // Format Bagian B
        $('#dagang_peredaran_usaha, #norma_dagang, #industri_peredaran_usaha, #norma_industri, #jasa_peredaran_usaha, #norma_jasa, #pbebas_peredaran_usaha, #norma_pbebas, #usaha_peredaran_usaha, #norma_usaha').on('input', format);

        function format() {

            var peredaranUsahaDagang = parseFloat($('#dagang_peredaran_usaha').val().replace(/,/g, '')) || 0;
            var normaDagang = parseFloat($('#norma_dagang').val().replace(/,/g, '')) || 0;
            var hasilDagang = (peredaranUsahaDagang * normaDagang) / 100;
            $('#dagang_penghasilan_neto').val(hasilDagang.toFixed(2));

            var peredaranUsahaIndustri = parseFloat($('#industri_peredaran_usaha').val().replace(/,/g, '')) || 0;
            var normaIndustri = parseFloat($('#norma_industri').val().replace(/,/g, '')) || 0;
            var hasilIndustri = (peredaranUsahaIndustri * normaIndustri) / 100;
            $('#industri_penghasilan_neto').val(hasilIndustri.toFixed(2));

            var peredaranUsahaJasa = parseFloat($('#jasa_peredaran_usaha').val().replace(/,/g, '')) || 0;
            var normaJasa = parseFloat($('#norma_jasa').val().replace(/,/g, '')) || 0;
            var hasilJasa = (peredaranUsahaJasa * normaJasa) / 100;
            $('#jasa_penghasilan_neto').val(hasilJasa.toFixed(2));

            var peredaranUsahaPbebas = parseFloat($('#pbebas_peredaran_usaha').val().replace(/,/g, '')) || 0;
            var normaPbebas = parseFloat($('#norma_pbebas').val().replace(/,/g, '')) || 0;
            var hasilPbebas = (peredaranUsahaPbebas * normaPbebas) / 100;
            $('#pbebas_penghasilan_neto').val(hasilPbebas.toFixed(2));

            var peredaranUsaha = parseFloat($('#usaha_peredaran_usaha').val().replace(/,/g, '')) || 0;
            var normaUsaha = parseFloat($('#norma_usaha').val().replace(/,/g, '')) || 0;
            var hasilUsaha = (peredaranUsaha * normaUsaha) / 100;
            $('#usaha_penghasilan_neto').val(hasilUsaha.toFixed(2));

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
                document.getElementById('hasilneto').value = numeral(resultneto).format();
            }
        }

        // Save Bagian B
        function BagianBSave(event) {
            dagang_peredaran_usaha = document.querySelector('#dagang_peredaran_usaha').value
            industri_peredaran_usaha = document.querySelector('#industri_peredaran_usaha').value
            jasa_peredaran_usaha = document.querySelector('#jasa_peredaran_usaha').value
            pbebas_peredaran_usaha = document.querySelector('#pbebas_peredaran_usaha').value
            usaha_peredaran_usaha = document.querySelector('#usaha_peredaran_usaha').value
            norma_dagang = document.querySelector('#norma_dagang').value
            norma_industri = document.querySelector('#norma_industri').value
            norma_jasa = document.querySelector('#norma_jasa').value
            norma_pbebas = document.querySelector('#norma_pbebas').value
            norma_usaha = document.querySelector('#norma_usaha').value
            dagang_penghasilan_neto = document.querySelector('#dagang_penghasilan_neto').value
            industri_penghasilan_neto = document.querySelector('#industri_penghasilan_neto').value
            jasa_penghasilan_neto = document.querySelector('#jasa_penghasilan_neto').value
            pbebas_penghasilan_neto = document.querySelector('#pbebas_penghasilan_neto').value
            usaha_penghasilan_neto = document.querySelector('#usaha_penghasilan_neto').value

            var data = {
                type: event.value,
                PeredaranUsahaB: [dagang_peredaran_usaha, industri_peredaran_usaha, jasa_peredaran_usaha, pbebas_peredaran_usaha, usaha_peredaran_usaha],
                Norma: [norma_dagang, norma_industri, norma_jasa, norma_pbebas, norma_usaha],
                PenghasilanNetoB: [dagang_penghasilan_neto, industri_penghasilan_neto, jasa_penghasilan_neto, pbebas_penghasilan_neto, usaha_penghasilan_neto]
            }
            console.log(data);

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: '/FormulirI2B_Point/Store/{{ $form1_2 }}',
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

        // Delete Bagian B
        function BagianBDelete(nama) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: '/FormulirI2B_Point/delete/{{ $form1_2 }}',
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
                                    title: 'Data Berhasil Terhapus',
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

        // Format Bagian C
        let sum = 0;
        let tmp = 0;
        let counted = 0;


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

        function getNumPrice(price, decimalpoint) {
            var p = price.split(decimalpoint);
            for (var i = 0; i < p.length; i++) p[i] = p[i].replace(/\D/g, '');
            return p.join('.');
        }



        function addTableBagianC($this) {
            var last_td = $('#BagianC tr:last');
            var npwp_pemberi_kerja = last_td.find('td:eq(1)').find('input').val();
            var nama_pemberi_kerja = last_td.find('td:eq(1)').find('input').val();
            var penghasilan_bruto = last_td.find('td:eq(1)').find('input').val();
            var pengurangan_penghasilan_bruto = last_td.find('td:eq(1)').find('input').val();
            var penghasilan_neto = last_td.find('td:eq(1)').find('input').val();

            if (npwp_pemberi_kerja === '' || nama_pemberi_kerja === '' || penghasilan_bruto === '' || pengurangan_penghasilan_bruto === '' || penghasilan_neto === '') {
                Swal.fire({
                    icon: 'error',
                    title: '',
                    text: 'Mohon Melengkapi Row Sebelumnya',
                })
                return
            }
            var template = document.querySelector('#rowTemplateBagianC'),
                tbl = document.querySelector('#BagianC'),
                td_choice = template.content.querySelectorAll("td"),
                tr_count = tbl.rows.length;


            td_choice.textContent = tr_count;
            var clone = document.importNode(template.content, true);
            tbl.appendChild(clone);
        }

        function cekBagianC() {
            console.log(1)
            var last_td = $('#BagianC tr:last');
            var npwp_pemberi_kerja = last_td.find('td:eq(1)').find('input').val();
            var nama_pemberi_kerja = last_td.find('td:eq(1)').find('input').val();
            var penghasilan_bruto = last_td.find('td:eq(1)').find('input').val();
            var pengurangan_penghasilan_bruto = last_td.find('td:eq(1)').find('input').val();
            var penghasilan_neto = last_td.find('td:eq(1)').find('input').val();

            if (npwp_pemberi_kerja === '' || nama_pemberi_kerja === '' || penghasilan_bruto === '' || pengurangan_penghasilan_bruto === '' || penghasilan_neto === '') {
                Swal.fire({
                    icon: 'error',
                    title: '',
                    text: 'Mohon Melengkapi Row Sebelumnya',
                })
                return
            }
            const myElement = document.getElementById("simpanbagianC").click();

            var template = document.querySelector('#rowTemplateBagianC'),
                tbl = document.querySelector('#BagianC'),
                td_choice = template.content.querySelectorAll("td"),
                tr_count = tbl.rows.length;
        }

        function deleteTableBagianC(nama) {

            var checkboxes = document.getElementsByName("pengneto_id");
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
                        url: '/FormulirI2C/delete',
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

        // Format Bagian D
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

        // Save Bagian D
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
                url: '/FormulirI2D_Point/Store/{{ $form1_2 }}',
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

        function BagianDDelete(nama) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                url: '/FormulirI2D_Point/delete/{{ $form1_2 }}',
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
                                    title: 'Data Berhasil Terhapus',
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

        function format2() {
            valueDagangPeredaranUsaha = numeral(dagang_peredaran_usaha.value);
            dagang_peredaran_usaha = document.getElementById('dagang_peredaran_usaha');
            dagang_peredaran_usaha.value = valueDagangPeredaranUsaha.format();
            if (numeral(document.getElementById('dagang_penghasilan_neto').value)._value < numeral(dagang_peredaran_usaha.value)._value) {
                format()
            } else {
                document.getElementById('dagang_penghasilan_neto').value = 0;
                Swal.fire(
                    '',
                    'Nilai PPh Terutang Harus Lebih Kecil dari Dasar Pengenaannya',
                    'error'
                )
            }
        }

        function format3() {
            valueIndustriPeredaranUsaha = numeral(industri_peredaran_usaha.value);
            industri_peredaran_usaha = document.getElementById('industri_peredaran_usaha');
            industri_peredaran_usaha.value = valueIndustriPeredaranUsaha.format();
            if (numeral(document.getElementById('industri_penghasilan_neto').value)._value < numeral(industri_peredaran_usaha.value)._value) {
                format()
            } else {
                document.getElementById('industri_penghasilan_neto').value = 0;
                Swal.fire(
                    '',
                    'Nilai PPh Terutang Harus Lebih Kecil dari Dasar Pengenaannya',
                    'error'
                )
            }
        }

        function format4() {
            valueJasaPeredaranUsaha = numeral(jasa_peredaran_usaha.value);
            jasa_peredaran_usaha = document.getElementById('jasa_peredaran_usaha');
            jasa_peredaran_usaha.value = valueJasaPeredaranUsaha.format();
            if (numeral(document.getElementById('jasa_penghasilan_neto').value)._value < numeral(jasa_peredaran_usaha.value)._value) {
                format()
            } else {
                document.getElementById('jasa_penghasilan_neto').value = 0;
                Swal.fire(
                    '',
                    'Nilai PPh Terutang Harus Lebih Kecil dari Dasar Pengenaannya',
                    'error'
                )
            }
        }

        function format5() {
            valuePBebasPeredaranUsaha = numeral(pbebas_peredaran_usaha.value);
            pbebas_peredaran_usaha = document.getElementById('pbebas_peredaran_usaha');
            pbebas_peredaran_usaha.value = valuePBebasPeredaranUsaha.format();
            if (numeral(document.getElementById('pbebas_penghasilan_neto').value)._value < numeral(pbebas_peredaran_usaha.value)._value) {
                format()
            } else {
                document.getElementById('pbebas_penghasilan_neto').value = 0;
                Swal.fire(
                    '',
                    'Nilai PPh Terutang Harus Lebih Kecil dari Dasar Pengenaannya',
                    'error'
                )
            }
        }

        function format6() {
            valueUsahaPeredaranUsaha = numeral(usaha_peredaran_usaha.value);
            usaha_peredaran_usaha = document.getElementById('usaha_peredaran_usaha');
            usaha_peredaran_usaha.value = valueUsahaPeredaranUsaha.format();
            if (numeral(document.getElementById('usaha_penghasilan_neto').value)._value < numeral(usaha_peredaran_usaha.value)._value) {
                format()
            } else {
                document.getElementById('usaha_penghasilan_neto').value = 0;
                Swal.fire(
                    '',
                    'Nilai PPh Terutang Harus Lebih Kecil dari Dasar Pengenaannya',
                    'error'
                )
            }
        }

        function getNumPrice(price, decimalpoint) {
            var p = price.split(decimalpoint);
            for (var i = 0; i < p.length; i++) p[i] = p[i].replace(/\D/g, '');
            return p.join('.');
        }

        function NPWPWajibPajak() {
            formatnpwp = document.getElementById('npwpWajibPajak').value
            formatnpwp2 = document.getElementById('npwpWajibPajak')
            if (typeof formatnpwp === 'string') {

            }
            formatnpwp2.value = formatnpwp.replace(/(\d{2})(\d{3})(\d{3})(\d{1})(\d{3})(\d{3})/, '$1.$2.$3.$4-$5.$6');
        }

        function FormatNPWP_Pemberi_Kerja() {
            formatnpwp = document.getElementById('npwp_PemberiKerja').value
            formatnpwp2 = document.getElementById('npwp_PemberiKerja')
            if (!formatnpwp.match(/^[0-9./-]+$/i)) {
                formatnpwp2.value = formatnpwp.slice(0, -1);
                return;
            }
            formatnpwp2.value = formatnpwp.replace(/(\d{2})(\d{3})(\d{3})(\d{1})(\d{3})(\d{3})/, '$1.$2.$3.$4-$5.$6');
        }
    </script>
    @include('sweetalert::alert')


</body>

</html>