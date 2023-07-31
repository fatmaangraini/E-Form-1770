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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" type="text/css" href="/css/style.css" />

    <title>Formulir 1770-III</title>

</head>

<body>
    <div class="container-fluid">
        <header>
            <div class="row header">
                <div class="col-2 bag1">
                    <h5>FORMULIR</h5>
                    <h1>1770-III</h1>
                    <p>KEMENTERIAN KEUANGAN
                        RI DIREKTORAT JENDERAL PAJAK</p>
                </div>
                <div class="col-6">
                    <h5>LAMPIRAN-III</h5>
                    <p>SPT TAHUNAN PPh WAJIB PAJAK ORANG PRIBADI</p>
                    <span>* PENGHASILAN YANG DIKENAKAN PAJAK FINAL DAN/ATAU BERSIFAT FINAL <br></span>
                    <span>* PENGHASILAN YANG TIDAK TERMASUK OBJEK PAJAK <br></span>
                    <span>* PENGHASILAN ISTERI/SUAMI YNG DIKENAKAN PAJAK SECARA TERPISAH</span>
                </div>
                <div class="col-4">
                    <a href="/formulir-IV/{{ $spt->id}}" class="btn btn-secondary sebelumnya">Sebelumnya</a>
                    <a href="/formulir-II/{{ $spt->id}}" id="selanjutnya" class="btn btn-secondary">Selanjutnya</a>
                    <a href="/PP46atau23/{{ $spt->id}}" id="pph46" class="btn btn-secondary" style="font-size: 12px; width: 120px; height: 30px; margin-left: 10px; display: none">PP 46/23</a>

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

        <!-- Bagian A Pajak Final -->
        <div style="padding: 5px;"></div>

        <b>BAGIAN A. PENGHASILAN YANG DIKENAKAN PAJAK FINAL DAN/ATAU BERSIFAT FINAL</b>
        <table id="mytable" class="display" style="width:100%">
            <tr>
                <th width="4%">NO.</th>
                <th width="36%">JENIS PENGHASILAN</th>
                <th width="30%">DASAR PENGENAAN PAJAK/PENGHASILAN BRUTO</th>
                <th width="30%">PPh TERUTANG (Rupiah)</th>
            </tr>
            <tr>
                <td style="height: 20px">(1)</td>
                <td style="height: 20px">(2)</td>
                <td style="height: 20px">(3)</td>
                <td style="height: 20px">(4)</td>
            </tr>
            <tr>
                <td>1.</td>
                <td class="left">BUNGA DEPOSITO, TABUNGAN, DISKONTO SBI, SURAT BERHARGA NEGARA</td>
                <td><input type="text" class="form-control" value="{{ $formulir_iiia[0]->rupiah_dsrPengenaan_PajakA ?? '' }}" oninput="formatPajakFinal()" name="pengenaan_pajak1" id="pengenaan_pajak1" placeholder="0"></td>
                <td><input type="text" class="form-control" value="{{ $formulir_iiia[0]->rupiah_PPh_terutang ?? '' }}" oninput="formatJnsPenghasilan1()" name="pph_terutang1" id="pph_terutang1" placeholder="0"></td>
            </tr>
            <tr>
                <td>2.</td>
                <td class="left">BUNGA/DISKONTO OBLIGASI</td>
                <td><input type="text" class="form-control" value="{{ $formulir_iiia[1]->rupiah_dsrPengenaan_PajakA ?? '' }}" oninput="formatPajakFinal(this.value)" name="pengenaan_pajak2" id="pengenaan_pajak2" placeholder="0"></td>
                <td><input type="text" class="form-control" value="{{ $formulir_iiia[1]->rupiah_PPh_terutang ?? '' }}" oninput="formatJnsPenghasilan2()" name="pph_terutang2" id="pph_terutang2" placeholder="0"></td>
            </tr>
            <tr>
                <td>3.</td>
                <td class="left">PENJUALAN SAHAM DI BURSA EFEK</td>
                <td><input type="text" class="form-control" value="{{ $formulir_iiia[2]->rupiah_dsrPengenaan_PajakA ?? '' }}" oninput="formatPajakFinal(this.value)" name="pengenaan_pajak3" id="pengenaan_pajak3" placeholder="0"></td>
                <td><input type="text" class="form-control" value="{{ $formulir_iiia[2]->rupiah_PPh_terutang ?? '' }}" oninput="formatJnsPenghasilan3(this.value)" name="pph_terutang3" id="pph_terutang3" placeholder="0"></td>
            </tr>
            <tr>
                <td>4.</td>
                <td class="left">HADIAH UNDIAN</td>
                <td><input type="text" class="form-control" value="{{ $formulir_iiia[3]->rupiah_dsrPengenaan_PajakA ?? '' }}" oninput="formatPajakFinal(this.value)" name="pengenaan_pajak4" id="pengenaan_pajak4" placeholder="0"></td>
                <td><input type="text" class="form-control" value="{{ $formulir_iiia[3]->rupiah_PPh_terutang ?? '' }}" oninput="formatJnsPenghasilan4(this.value)" name="pph_terutang4" id="pph_terutang4" placeholder="0"></td>
            </tr>
            <tr>
                <td>5.</td>
                <td class="left">PESANGON, TUNJANGAN HARI TUA DAN TEBUSAN PENSIUN YANG DIBAYAR SEKALIGUS</td>
                <td><input type="text" class="form-control" value="{{ $formulir_iiia[4]->rupiah_dsrPengenaan_PajakA ?? '' }}" oninput="formatPajakFinal(this.value)" name="pengenaan_pajak5" id="pengenaan_pajak5" placeholder="0"></td>
                <td><input type="text" class="form-control" value="{{ $formulir_iiia[4]->rupiah_PPh_terutang ?? '' }}" oninput="formatJnsPenghasilan5(this.value)" name="pph_terutang5" id="pph_terutang5" placeholder="0"></td>
            </tr>
            <tr>
                <td>6.</td>
                <td class="left">HONORARIUM ATAS BEBAN APBN / APBD</td>
                <td><input type="text" class="form-control" value="{{ $formulir_iiia[5]->rupiah_dsrPengenaan_PajakA ?? '' }}" oninput="formatPajakFinal(this.value)" name="pengenaan_pajak6" id="pengenaan_pajak6" placeholder="0"></td>
                <td><input type="text" class="form-control" value="{{ $formulir_iiia[5]->rupiah_PPh_terutang ?? '' }}" oninput="formatJnsPenghasilan6(this.value)" name="pph_terutang6" id="pph_terutang6" placeholder="0"></td>
            </tr>
            <tr>
                <td>7.</td>
                <td class="left">PENGALIHAN HAK ATAS TANAH DAN/ATAU BANGUNAN</td>
                <td><input type="text" class="form-control" value="{{ $formulir_iiia[6]->rupiah_dsrPengenaan_PajakA ?? '' }}" oninput="formatPajakFinal(this.value)" name="pengenaan_pajak7" id="pengenaan_pajak7" placeholder="0"></td>
                <td><input type="text" class="form-control" value="{{ $formulir_iiia[6]->rupiah_PPh_terutang ?? '' }}" oninput="formatJnsPenghasilan7(this.value)" name="pph_terutang7" id="pph_terutang7" placeholder="0"></td>
            </tr>
            <tr>
                <td>8.</td>
                <td class="left">BANGUNAN YANG DITERIMA DALAM RANGKA BANGUNAN GUNA SERAH</td>
                <td><input type="text" class="form-control" value="{{ $formulir_iiia[7]->rupiah_dsrPengenaan_PajakA ?? '' }}" oninput="formatPajakFinal(this.value)" name="pengenaan_pajak8" id="pengenaan_pajak8" placeholder="0"></td>
                <td><input type="text" class="form-control" value="{{ $formulir_iiia[7]->rupiah_PPh_terutang ?? '' }}" oninput="formatJnsPenghasilan8(this.value)" name="pph_terutang8" id="pph_terutang8" placeholder="0"></td>
            </tr>
            <tr>
                <td>9.</td>
                <td class="left">SEWA ATAS TANAH DAN/ATAU BANGUNAN</td>
                <td><input type="text" class="form-control" value="{{ $formulir_iiia[8]->rupiah_dsrPengenaan_PajakA ?? '' }}" oninput="formatPajakFinal(this.value)" name="pengenaan_pajak9" id="pengenaan_pajak9" placeholder="0"></td>
                <td><input type="text" class="form-control" value="{{ $formulir_iiia[8]->rupiah_PPh_terutang ?? '' }}" oninput="formatJnsPenghasilan9(this.value)" name="pph_terutang9" id="pph_terutang9" placeholder="0"></td>
            </tr>
            <tr>
                <td>10.</td>
                <td class="left">USAHA JASA KONSTRUKSI</td>
                <td><input type="text" class="form-control" value="{{ $formulir_iiia[9]->rupiah_dsrPengenaan_PajakA ?? '' }}" oninput="formatPajakFinal(this.value)" name="pengenaan_pajak10" id="pengenaan_pajak10" placeholder="0"></td>
                <td><input type="text" class="form-control" value="{{ $formulir_iiia[9]->rupiah_PPh_terutang ?? '' }}" oninput="formatJnsPenghasilan10(this.value)" name="pph_terutang10" id="pph_terutang10" placeholder="0"></td>
            </tr>
            <tr>
                <td>11.</td>
                <td class="left">PENYALUR/DEALER/AGEN PRODUK BBM</td>
                <td><input type="text" class="form-control" value="{{ $formulir_iiia[10]->rupiah_dsrPengenaan_PajakA ?? '' }}" oninput="formatPajakFinal(this.value)" name="pengenaan_pajak11" id="pengenaan_pajak11" placeholder="0"></td>
                <td><input type="text" class="form-control" value="{{ $formulir_iiia[10]->rupiah_PPh_terutang ?? '' }}" oninput="formatJnsPenghasilan11(this.value)" name="pph_terutang11" id="pph_terutang11" placeholder="0"></td>
            </tr>
            <tr>
                <td>12.</td>
                <td class="left">BUNGA SIMPANAN YANG DIBAYARKAN OLEH KOPERASI KEPADA ANGGOTA KOPERASI</td>
                <td><input type="text" class="form-control" value="{{ $formulir_iiia[11]->rupiah_dsrPengenaan_PajakA ?? '' }}" oninput="formatPajakFinal(this.value)" name="pengenaan_pajak12" id="pengenaan_pajak12" placeholder="0"></td>
                <td><input type="text" class="form-control" value="{{ $formulir_iiia[11]->rupiah_PPh_terutang ?? '' }}" oninput="formatJnsPenghasilan12(this.value)" name="pph_terutang12" id="pph_terutang12" placeholder="0"></td>
            </tr>
            <tr>
                <td>13.</td>
                <td class="left">PENGHASILAN DARI TRANSAKSI DERIVATIF</td>
                <td style="background-color: #C0C0C0;  height: 40px"></td>
                <td style="background-color: #C0C0C0; height: 40px"></td>
            </tr>
            <tr>
                <td>14.</td>
                <td class="left">DIVIDEN</td>
                <td><input type="text" class="form-control" value="{{ $formulir_iiia[12]->rupiah_dsrPengenaan_PajakA ?? '' }}" oninput="formatPajakFinal(this.value)" name="pengenaan_pajak14" id="pengenaan_pajak14" placeholder="0"></td>
                <td><input type="text" class="form-control" value="{{ $formulir_iiia[12]->rupiah_PPh_terutang ?? '' }}" oninput="formatJnsPenghasilan14(this.value)" name="pph_terutang14" id="pph_terutang14" placeholder="0"></td>
            </tr>
            <tr>
                <td>15.</td>
                <td class="left">PENGHASILAN ISTERI DARU SATU PEMBERI KERJA</td>
                <td><input type="text" class="form-control" value="{{ $formulir_iiia[13]->rupiah_dsrPengenaan_PajakA ?? '' }}" oninput="formatPajakFinal(this.value)" name="pengenaan_pajak15" id="pengenaan_pajak15" placeholder="0"></td>
                <td><input type="text" class="form-control" value="{{ $formulir_iiia[13]->rupiah_PPh_terutang ?? '' }}" oninput="formatJnsPenghasilan15(this.value)" name="pph_terutang15" id="pph_terutang15" placeholder="0"></td>
            </tr>
            <tr>
                <td>16.</td>
                <td class="left">PENGHASILAN LAIN YANG DIKENAKAN PAJAK FINAL DAN/ATAU BERSIFAT FINAL
                    <input type="checkbox" id="pembetulan2" aria-label="Checkbox for following text input" style="width: 20px;" {{ $form3s->PP46_23 ?'checked':''}}>
                    <label for="exampleFormControlInput1" class="form-label">PP46/23</label>
                </td>
                <td><input type="text" class="form-control" value="{{ $Peredaran_Bruto, $formulir_iiia[14]->rupiah_dsrPengenaan_PajakA ?? '' }}" oninput="formatPajakFinal(this.value)" name="pengenaan_pajak16" id="pengenaan_pajak16" placeholder="0"></td>
                <td><input type="text" class="form-control" value="{{ $PPh_Final, $formulir_iiia[14]->rupiah_PPh_terutang ?? '' }}" oninput="formatJnsPenghasilan16(this.value)" name="pph_terutang16" id="pph_terutang16" placeholder="0"></td>
            </tr>
            <tr>
                <td>17.</td>
                <td class="left">JUMLAH (1 s.d. 16)</td>
                <td style="background-color: #C0C0C0;"></td>
                <td style="background-color: #F0E68C;"><input type="text" class="form-control" readonly="readonly" style="background-color: #F0E68C; text-align: right" name="hasil" id="hasil"></td>
            </tr>
        </table>
        <script>
            function BagianA(event) {
                pengenaan_pajak1 = document.querySelector('#pengenaan_pajak1').value
                pengenaan_pajak2 = document.querySelector('#pengenaan_pajak2').value
                pengenaan_pajak3 = document.querySelector('#pengenaan_pajak3').value
                pengenaan_pajak4 = document.querySelector('#pengenaan_pajak4').value
                pengenaan_pajak5 = document.querySelector('#pengenaan_pajak5').value
                pengenaan_pajak6 = document.querySelector('#pengenaan_pajak6').value
                pengenaan_pajak7 = document.querySelector('#pengenaan_pajak7').value
                pengenaan_pajak8 = document.querySelector('#pengenaan_pajak8').value
                pengenaan_pajak9 = document.querySelector('#pengenaan_pajak9').value
                pengenaan_pajak10 = document.querySelector('#pengenaan_pajak10').value
                pengenaan_pajak11 = document.querySelector('#pengenaan_pajak11').value
                pengenaan_pajak12 = document.querySelector('#pengenaan_pajak12').value
                pengenaan_pajak14 = document.querySelector('#pengenaan_pajak14').value
                pengenaan_pajak15 = document.querySelector('#pengenaan_pajak15').value
                pengenaan_pajak16 = document.querySelector('#pengenaan_pajak16').value
                pph_terutang1 = document.querySelector('#pph_terutang1').value
                pph_terutang2 = document.querySelector('#pph_terutang2').value
                pph_terutang3 = document.querySelector('#pph_terutang3').value
                pph_terutang4 = document.querySelector('#pph_terutang4').value
                pph_terutang5 = document.querySelector('#pph_terutang5').value
                pph_terutang6 = document.querySelector('#pph_terutang6').value
                pph_terutang7 = document.querySelector('#pph_terutang7').value
                pph_terutang8 = document.querySelector('#pph_terutang8').value
                pph_terutang9 = document.querySelector('#pph_terutang9').value
                pph_terutang10 = document.querySelector('#pph_terutang10').value
                pph_terutang11 = document.querySelector('#pph_terutang11').value
                pph_terutang12 = document.querySelector('#pph_terutang12').value
                pph_terutang14 = document.querySelector('#pph_terutang14').value
                pph_terutang15 = document.querySelector('#pph_terutang15').value
                pph_terutang16 = document.querySelector('#pph_terutang16').value

                var data = {
                    type: event.value,
                    pengenaan: [pengenaan_pajak1, pengenaan_pajak2, pengenaan_pajak3, pengenaan_pajak4, pengenaan_pajak5, pengenaan_pajak6,
                        pengenaan_pajak7, pengenaan_pajak8, pengenaan_pajak9, pengenaan_pajak10, pengenaan_pajak11, pengenaan_pajak12,
                        pengenaan_pajak14, pengenaan_pajak15, pengenaan_pajak16
                    ],
                    pphterutang: [pph_terutang1, pph_terutang2, pph_terutang3, pph_terutang4, pph_terutang5, pph_terutang6, pph_terutang7,
                        pph_terutang8, pph_terutang9, pph_terutang10, pph_terutang11, pph_terutang12, pph_terutang14, pph_terutang15, pph_terutang16
                    ]
                }
                console.log(data);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: 'http://localhost:8000/FormulirIIIA_Point/Store/{{ $form3 }}',
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

            // function cekBagianA() {
            //     pengenaan_pajak1 = document.querySelector('#pengenaan_pajak1').value
            //     pengenaan_pajak2 = document.querySelector('#pengenaan_pajak2').value
            //     pengenaan_pajak3 = document.querySelector('#pengenaan_pajak3').value
            //     pengenaan_pajak4 = document.querySelector('#pengenaan_pajak4').value
            //     pengenaan_pajak5 = document.querySelector('#pengenaan_pajak5').value
            //     pengenaan_pajak6 = document.querySelector('#pengenaan_pajak6').value
            //     pengenaan_pajak7 = document.querySelector('#pengenaan_pajak7').value
            //     pengenaan_pajak8 = document.querySelector('#pengenaan_pajak8').value
            //     pengenaan_pajak9 = document.querySelector('#pengenaan_pajak9').value
            //     pengenaan_pajak10 = document.querySelector('#pengenaan_pajak10').value
            //     pengenaan_pajak11 = document.querySelector('#pengenaan_pajak11').value
            //     pengenaan_pajak12 = document.querySelector('#pengenaan_pajak12').value
            //     pengenaan_pajak14 = document.querySelector('#pengenaan_pajak14').value
            //     pengenaan_pajak15 = document.querySelector('#pengenaan_pajak15').value
            //     pengenaan_pajak16 = document.querySelector('#pengenaan_pajak16').value
            //     pph_terutang1 = document.querySelector('#pph_terutang1').value
            //     pph_terutang2 = document.querySelector('#pph_terutang2').value
            //     pph_terutang3 = document.querySelector('#pph_terutang3').value
            //     pph_terutang4 = document.querySelector('#pph_terutang4').value
            //     pph_terutang5 = document.querySelector('#pph_terutang5').value
            //     pph_terutang6 = document.querySelector('#pph_terutang6').value
            //     pph_terutang7 = document.querySelector('#pph_terutang7').value
            //     pph_terutang8 = document.querySelector('#pph_terutang8').value
            //     pph_terutang9 = document.querySelector('#pph_terutang9').value
            //     pph_terutang10 = document.querySelector('#pph_terutang10').value
            //     pph_terutang11 = document.querySelector('#pph_terutang11').value
            //     pph_terutang12 = document.querySelector('#pph_terutang12').value
            //     pph_terutang14 = document.querySelector('#pph_terutang14').value
            //     pph_terutang15 = document.querySelector('#pph_terutang15').value
            //     pph_terutang16 = document.querySelector('#pph_terutang16').value

            //     console.log(pengenaan_pajak1)
            //     if (pengenaan_pajak1 < 1 || pph_terutang1 < 1) {
            //         Swal.fire({
            //             icon: 'error',
            //             title: 'Oops...',
            //             text: 'Isi dulu datanya!',
            //         })
            //         return
            //     }
            //     var data = {
            //         type: event.value,
            //         pengenaan: [pengenaan_pajak1, pengenaan_pajak2, pengenaan_pajak3, pengenaan_pajak4, pengenaan_pajak5, pengenaan_pajak6,
            //             pengenaan_pajak7, pengenaan_pajak8, pengenaan_pajak9, pengenaan_pajak10, pengenaan_pajak11, pengenaan_pajak12,
            //             pengenaan_pajak14, pengenaan_pajak15, pengenaan_pajak16
            //         ],
            //         pphterutang: [pph_terutang1, pph_terutang2, pph_terutang3, pph_terutang4, pph_terutang5, pph_terutang6, pph_terutang7,
            //             pph_terutang8, pph_terutang9, pph_terutang10, pph_terutang11, pph_terutang12, pph_terutang14, pph_terutang15, pph_terutang16
            //         ]
            //     }

            //     const myElement = document.getElementById("simpanbagianA").click();

            // }

            function BagianADelete(nama) {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: 'http://localhost:8000/FormulirIIIA_Point/delete/{{ $form3 }}',
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
        <!-- <button type="button"  value="save" onclick="BagianA(this)">Simpan</button> -->
        <button type="button" value="edit" id="simpanbagianA" onclick="BagianA(this)">Simpan</button>
        <!-- <button type="button" onclick="cekBagianA(this)">Simpan</button> -->
        <button type="button" onclick="BagianADelete()">Hapus</button>

        <!-- Bagian B. Tidak Objek Pajak -->
        <div style="padding: 5px;"></div>
        <b>BAGIAN B. PENGHASILAN YANG TIDAK TERMASUK OBJEK PAJAK</b>
        <table id="mytable" class="display" style="width:100%">
            <tr>
                <th width="4%">NO.</th>
                <th width="50%">JENIS PENGHASILAN</th>
                <th width="50%">DASAR PENGENAAN PAJAK/PENGHASILAN BRUTO</th>
            </tr>
            <tr>
                <td style="height: 20px">(1)</td>
                <td style="height: 20px">(2)</td>
                <td style="height: 20px">(3)</td>
            </tr>
            <tr>
                <td>1.</td>
                <td class="left">BANTUAN / SUMBANGAN / HIBAH</td>
                <td><input value="{{ $formulir_iiib[0]->rupiah_dsrPengenaan_PajakB ?? '' }}" type="text" class="form-control" oninput="format1(this.value)" name="bantuansumbanganhibah" id="bantuansumbanganhibah" placeholder="0"></td>
            </tr>
            <tr>
                <td>2.</td>
                <td class="left">WARISAN</td>
                <td><input value="{{ $formulir_iiib[1]->rupiah_dsrPengenaan_PajakB ?? '' }}" type="text" class="form-control" oninput="format1(this.value)" name="warisan" id="warisan" placeholder="0"></td>
            </tr>
            <tr>
                <td>3.</td>
                <td class="left">BAGIAN LABA ANGGOTA PERSEOROAN KOMANDITER TIDAK ATAS SAHAM, PERSEKUTUAN,
                    PERKUMPULAN, FIRMA, KONGSI</td>
                <td><input value="{{ $formulir_iiib[2]->rupiah_dsrPengenaan_PajakB ?? '' }}" type="text" class="form-control" oninput="format1(this.value)" name="bagianlaba" id="bagianlaba" placeholder="0"></td>
            </tr>
            <tr>
                <td>4.</td>
                <td class="left">KLAIM ASURANSI KESEHATAN, KECELAKAAN, JIWA, DWIGUNA, BEASISWA</td>
                <td><input value="{{ $formulir_iiib[3]->rupiah_dsrPengenaan_PajakB ?? '' }}" type="text" class="form-control" oninput="format1(this.value)" name="klaimasuransi" id="klaimasuransi" placeholder="0"></td>
            </tr>
            <tr>
                <td>5.</td>
                <td class="left">BEASISWA</td>
                <td><input value="{{ $formulir_iiib[4]->rupiah_dsrPengenaan_PajakB ?? '' }}" type="text" class="form-control" oninput="format1(this.value)" name="beasiswa" id="beasiswa" placeholder="0"></td>
            </tr>
            <tr>
                <td>6.</td>
                <td class="left">PENGHASILAN LAIN YANG TIDAK TERMASUK OBJEK PAJAK</td>
                <td><input value="{{ $formulir_iiib[5]->rupiah_dsrPengenaan_PajakB ?? '' }}" type="text" class="form-control" oninput="format1(this.value)" name="penghasilanlain" id="penghasilanlain" placeholder="0"></td>

            </tr>
            <tr>
                <td></td>
                <td>JUMLAH BAGIAN B</td>
                <td style="background-color: #F0E68C;"><input type="text" class="form-control" disabled="true" readonly="readonly" style="background-color: #F0E68C; text-align: right" name="hasil1" id="hasil1"></td>

            </tr>
        </table>

        <script>
            function BagianB() {
                bantuansumbanganhibah = document.querySelector('#bantuansumbanganhibah').value
                warisan = document.querySelector('#warisan').value
                bagianlaba = document.querySelector('#bagianlaba').value
                klaimasuransi = document.querySelector('#klaimasuransi').value
                beasiswa = document.querySelector('#beasiswa').value
                penghasilanlain = document.querySelector('#penghasilanlain').value

                var data = {
                    bantuansumbanganhibah: [bantuansumbanganhibah, warisan, bagianlaba, klaimasuransi, beasiswa, penghasilanlain],
                }

                console.log(data);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: 'http://localhost:8000/FormulirIIIB_Point/Store/{{ $form3 }}',
                    data: data,
                    success: function(res) {
                        Swal.fire(
                            'Data Berhasil Tersimpan',
                            '',
                            'success'
                        )
                        // location.reload()
                    }
                });

            }

            function BagianBDelete(nama) {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: 'http://localhost:8000/FormulirIIIB_Point/delete/{{ $form3 }}',
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
        </script>
        <!-- <button type="button" onclick="BagianB(this)">Simpan</button> -->
        <button type="button" value="edit" onclick="BagianB(this)">Simpan</button>
        <button type="button" onclick="BagianBDelete('A_TblHarta')">Hapus</button>

        <p style="font-size: 11px; padding: 10px 0px 0px 0px">BAGIAN C. PENGHASILAN ISTERI/SUAMI YANG DIKENAKAN PAJAK SECARA TERPISAH</p>
        <table id="mytable" class="display" style="width:100%">
            <tr>
                <td width="54%" class="left">PENGHASILAN NETO ISTERI/SUAMI YANG DIKENAKAN PAJAK SECARA TERPISAH</td>
                <td ><input value="{{ $formulir_iiic[0]->rupiah_dsrPengenaan_PajakC ?? '' }}" class="text" placeholder="0" oninput="format2(this.value)" name="pajak_terpisah" id="pajak_terpisah">
                </td>
            </tr>
        </table>
        <!-- <button type="button" onclick="BagianC(this)">Simpan</button> -->
        <button type="button" value="edit" onclick="BagianC(this)">Simpan</button>
        <button type="button" onclick="BagianCDelete('A_TblHarta')">Hapus</button>
        </form>

        <script>
            function BagianC() {
                pajak_terpisah = document.querySelector('#pajak_terpisah').value

                var data = {
                    pajak_terpisah: pajak_terpisah,
                }

                console.log(data);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: 'http://localhost:8000/FormulirIIIC_Point/Store/{{ $form3 }}',
                    data: data,
                    success: function(res) {
                        Swal.fire(
                            'Data Berhasil Tersimpan',
                            '',
                            'success'
                        )
                    }
                });
            }

            function BagianCDelete(nama) {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: 'http://localhost:8000/FormulirIIIC_Point/delete/{{ $form3 }}',
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
        </script>


    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>


    <script>
        $(document).ready(function() {
            NPWPWajibPajak();
            formatPajakFinal();
            format1();
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

                }
            });
        $("#pembetulan2").change(function() {
            if (this.checked) {
                data = {
                    PP46_23: 1
                }
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    data: data,
                    url: 'http://localhost:8000/CheckPP46_23/{{ $form3 }}',
                    success: function(res) {
                        console.log(res)
                    }
                });
                return;
            }
            data = {
                PP46_23: 0
            }
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                data: data,
                url: 'http://localhost:8000/CheckPP46_23/{{ $form3 }}',
                success: function(res) {
                    console.log(res)
                }
            });
            return;
        });

        function myFunction($this) {
            var $tableBody = $('#harta'),
                $trLast = $tableBody.find("tr:last"),
                $trNew = $trLast.clone();
            $trLast.after($trNew);
        }

        const checkbox = document.getElementById('pembetulan2')
        const button1 = document.getElementById('selanjutnya')
        const button2 = document.getElementById('pph46')

        checkbox.addEventListener('change', (event) => {
            if (event.currentTarget.checked) {
                button2.style.display = 'inline-block';
                button1.style.display = 'none';

            } else {
                button1.style.display = 'inline-block';
                button2.style.display = 'none';
            }
        })

        function myFunction2(event) {
            console.log(event)
            // Get the checkbox
            var checkBox = document.getElementById("pembetulan");
            // Get the output text
            var text = document.getElementById("text");

            // If the checkbox is checked, display the output text
            if (checkBox.checked == true) {
                alert('test1')
                // text.style.display = "block";
            } else {
                alert('test2')

                // text.style.display = "none";
            }
        }
    </script>
    <script>
        function formatJnsPenghasilan1() {
            valuePengenaanPajak1 = numeral(pengenaan_pajak1.value);
            pengenaan_pajak1 = document.getElementById('pengenaan_pajak1');
            pengenaan_pajak1.value = valuePengenaanPajak1.format();
            console.log(numeral(document.getElementById('pph_terutang1').value)._value, numeral(pengenaan_pajak1.value)._value)
            if (numeral(document.getElementById('pph_terutang1').value)._value < numeral(pengenaan_pajak1.value)._value) {
                formatPajakFinal()
            } else {
                document.getElementById('pph_terutang1').value = 0;
                Swal.fire(
                    '',
                    'Nilai PPh Terutang Harus Lebih Kecil dari Dasar Pengenaannya',
                    'error'
                )
            }
        }

        function formatJnsPenghasilan2() {
            valuePengenaanPajak2 = numeral(pengenaan_pajak2.value);
            pengenaan_pajak2 = document.getElementById('pengenaan_pajak2');
            pengenaan_pajak2.value = valuePengenaanPajak2.format();
            console.log(numeral(document.getElementById('pph_terutang2').value)._value < numeral(pengenaan_pajak2.value)._value)
            if (numeral(document.getElementById('pph_terutang2').value)._value < numeral(pengenaan_pajak2.value)._value) {
                formatPajakFinal()
            } else {
                document.getElementById('pph_terutang2').value = 0;
                Swal.fire(
                    '',
                    'Nilai PPh Terutang Harus Lebih Kecil dari Dasar Pengenaannya',
                    'error'
                )
            }
        }

        function formatJnsPenghasilan3() {
            valuePengenaanPajak3 = numeral(pengenaan_pajak3.value);
            pengenaan_pajak3 = document.getElementById('pengenaan_pajak3');
            pengenaan_pajak3.value = valuePengenaanPajak3.format();
            console.log(numeral(document.getElementById('pph_terutang3').value)._value < numeral(pengenaan_pajak3.value)._value)
            if (numeral(document.getElementById('pph_terutang3').value)._value < numeral(pengenaan_pajak3.value)._value) {
                formatPajakFinal()
            } else {
                document.getElementById('pph_terutang3').value = 0;
                Swal.fire(
                    '',
                    'Nilai PPh Terutang Harus Lebih Kecil dari Dasar Pengenaannya',
                    'error'
                )
            }
        }

        function formatJnsPenghasilan4() {
            valuePengenaanPajak4 = numeral(pengenaan_pajak4.value);
            pengenaan_pajak4 = document.getElementById('pengenaan_pajak4');
            pengenaan_pajak4.value = valuePengenaanPajak4.format();
            console.log(numeral(document.getElementById('pph_terutang4').value)._value < numeral(pengenaan_pajak4.value)._value)
            if (numeral(document.getElementById('pph_terutang4').value)._value < numeral(pengenaan_pajak4.value)._value) {
                formatPajakFinal()
            } else {
                document.getElementById('pph_terutang4').value = 0;
                Swal.fire(
                    '',
                    'Nilai PPh Terutang Harus Lebih Kecil dari Dasar Pengenaannya',
                    'error'
                )
            }
        }

        function formatJnsPenghasilan5() {
            valuePengenaanPajak5 = numeral(pengenaan_pajak5.value);
            pengenaan_pajak5 = document.getElementById('pengenaan_pajak5');
            pengenaan_pajak5.value = valuePengenaanPajak5.format();
            console.log(numeral(document.getElementById('pph_terutang5').value)._value < numeral(pengenaan_pajak5.value)._value)
            if (numeral(document.getElementById('pph_terutang5').value)._value < numeral(pengenaan_pajak5.value)._value) {
                formatPajakFinal()
            } else {
                document.getElementById('pph_terutang5').value = 0;
                Swal.fire(
                    '',
                    'Nilai PPh Terutang Harus Lebih Kecil dari Dasar Pengenaannya',
                    'error'
                )
            }
        }

        function formatJnsPenghasilan6() {
            valuePengenaanPajak6 = numeral(pengenaan_pajak6.value);
            pengenaan_pajak6 = document.getElementById('pengenaan_pajak6');
            pengenaan_pajak6.value = valuePengenaanPajak6.format();
            console.log(numeral(document.getElementById('pph_terutang6').value)._value < numeral(pengenaan_pajak6.value)._value)
            if (numeral(document.getElementById('pph_terutang6').value)._value < numeral(pengenaan_pajak6.value)._value) {
                formatPajakFinal()
            } else {
                document.getElementById('pph_terutang6').value = 0;
                Swal.fire(
                    '',
                    'Nilai PPh Terutang Harus Lebih Kecil dari Dasar Pengenaannya',
                    'error'
                )
            }
        }

        function formatJnsPenghasilan7() {
            valuePengenaanPajak7 = numeral(pengenaan_pajak7.value);
            pengenaan_pajak7 = document.getElementById('pengenaan_pajak7');
            pengenaan_pajak7.value = valuePengenaanPajak7.format();
            console.log(numeral(document.getElementById('pph_terutang7').value)._value < numeral(pengenaan_pajak7.value)._value)
            if (numeral(document.getElementById('pph_terutang6').value)._value < numeral(pengenaan_pajak7.value)._value) {
                formatPajakFinal()
            } else {
                document.getElementById('pph_terutang7').value = 0;
                Swal.fire(
                    '',
                    'Nilai PPh Terutang Harus Lebih Kecil dari Dasar Pengenaannya',
                    'error'
                )
            }
        }

        function formatJnsPenghasilan8() {
            valuePengenaanPajak8 = numeral(pengenaan_pajak8.value);
            pengenaan_pajak8 = document.getElementById('pengenaan_pajak8');
            pengenaan_pajak8.value = valuePengenaanPajak8.format();
            console.log(numeral(document.getElementById('pph_terutang8').value)._value < numeral(pengenaan_pajak8.value)._value)
            if (numeral(document.getElementById('pph_terutang8').value)._value < numeral(pengenaan_pajak8.value)._value) {
                formatPajakFinal()
            } else {
                document.getElementById('pph_terutang8').value = 0;
                Swal.fire(
                    '',
                    'Nilai PPh Terutang Harus Lebih Kecil dari Dasar Pengenaannya',
                    'error'
                )
            }
        }

        function formatJnsPenghasilan9() {
            valuePengenaanPajak9 = numeral(pengenaan_pajak9.value);
            pengenaan_pajak9 = document.getElementById('pengenaan_pajak9');
            pengenaan_pajak9.value = valuePengenaanPajak9.format();
            console.log(numeral(document.getElementById('pph_terutang9').value)._value < numeral(pengenaan_pajak9.value)._value)
            if (numeral(document.getElementById('pph_terutang9').value)._value < numeral(pengenaan_pajak9.value)._value) {
                formatPajakFinal()
            } else {
                document.getElementById('pph_terutang9').value = 0;
                Swal.fire(
                    '',
                    'Nilai PPh Terutang Harus Lebih Kecil dari Dasar Pengenaannya',
                    'error'
                )
            }
        }

        function formatJnsPenghasilan10() {
            valuePengenaanPajak10 = numeral(pengenaan_pajak10.value);
            pengenaan_pajak10 = document.getElementById('pengenaan_pajak10');
            pengenaan_pajak10.value = valuePengenaanPajak10.format();
            console.log(numeral(document.getElementById('pph_terutang10').value)._value < numeral(pengenaan_pajak10.value)._value)
            if (numeral(document.getElementById('pph_terutang10').value)._value < numeral(pengenaan_pajak10.value)._value) {
                formatPajakFinal()
            } else {
                document.getElementById('pph_terutang10').value = 0;
                Swal.fire(
                    '',
                    'Nilai PPh Terutang Harus Lebih Kecil dari Dasar Pengenaannya',
                    'error'
                )
            }
        }

        function formatJnsPenghasilan11() {
            valuePengenaanPajak11 = numeral(pengenaan_pajak11.value);
            pengenaan_pajak11 = document.getElementById('pengenaan_pajak11');
            pengenaan_pajak11.value = valuePengenaanPajak11.format();
            console.log(numeral(document.getElementById('pph_terutang11').value)._value < numeral(pengenaan_pajak11.value)._value)
            if (numeral(document.getElementById('pph_terutang11').value)._value < numeral(pengenaan_pajak11.value)._value) {
                formatPajakFinal()
            } else {
                document.getElementById('pph_terutang11').value = 0;
                Swal.fire(
                    '',
                    'Nilai PPh Terutang Harus Lebih Kecil dari Dasar Pengenaannya',
                    'error'
                )
            }
        }

        function formatJnsPenghasilan12() {
            valuePengenaanPajak12 = numeral(pengenaan_pajak12.value);
            pengenaan_pajak12 = document.getElementById('pengenaan_pajak12');
            pengenaan_pajak12.value = valuePengenaanPajak12.format();
            console.log(numeral(document.getElementById('pph_terutang12').value)._value < numeral(pengenaan_pajak12.value)._value)
            if (numeral(document.getElementById('pph_terutang12').value)._value < numeral(pengenaan_pajak12.value)._value) {
                formatPajakFinal()
            } else {
                document.getElementById('pph_terutang12').value = 0;
                Swal.fire(
                    '',
                    'Nilai PPh Terutang Harus Lebih Kecil dari Dasar Pengenaannya',
                    'error'
                )
            }
        }

        function formatJnsPenghasilan14() {
            valuePengenaanPajak14 = numeral(pengenaan_pajak14.value);
            pengenaan_pajak14 = document.getElementById('pengenaan_pajak14');
            pengenaan_pajak14.value = valuePengenaanPajak14.format();
            console.log(numeral(document.getElementById('pph_terutang14').value)._value < numeral(pengenaan_pajak14.value)._value)
            if (numeral(document.getElementById('pph_terutang14').value)._value < numeral(pengenaan_pajak14.value)._value) {
                formatPajakFinal()
            } else {
                document.getElementById('pph_terutang14').value = 0;
                Swal.fire(
                    '',
                    'Nilai PPh Terutang Harus Lebih Kecil dari Dasar Pengenaannya',
                    'error'
                )
            }
        }

        function formatJnsPenghasilan15() {
            valuePengenaanPajak15 = numeral(pengenaan_pajak15.value);
            pengenaan_pajak15 = document.getElementById('pengenaan_pajak15');
            pengenaan_pajak15.value = valuePengenaanPajak15.format();
            console.log(numeral(document.getElementById('pph_terutang15').value)._value < numeral(pengenaan_pajak15.value)._value)
            if (numeral(document.getElementById('pph_terutang15').value)._value < numeral(pengenaan_pajak15.value)._value) {
                formatPajakFinal()
            } else {
                document.getElementById('pph_terutang15').value = 0;
                Swal.fire(
                    '',
                    'Nilai PPh Terutang Harus Lebih Kecil dari Dasar Pengenaannya',
                    'error'
                )
            }
        }

        function formatJnsPenghasilan16() {
            valuePengenaanPajak16 = numeral(pengenaan_pajak16.value);
            pengenaan_pajak16 = document.getElementById('pengenaan_pajak16');
            pengenaan_pajak16.value = valuePengenaanPajak16.format();
            console.log(numeral(document.getElementById('pph_terutang16').value)._value < numeral(pengenaan_pajak16.value)._value)
            if (numeral(document.getElementById('pph_terutang16').value)._value < numeral(pengenaan_pajak16.value)._value) {
                formatPajakFinal()
            } else {
                document.getElementById('pph_terutang16').value = 0;
                Swal.fire(
                    '',
                    'Nilai PPh Terutang Harus Lebih Kecil dari Dasar Pengenaannya',
                    'error'
                )
            }
        }

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
                document.getElementById('hasil').value = numeral(resultPajakFinal).format();
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
                document.getElementById('hasil1').value = numeral(result).format();
            }

        }

        function format2() {
            valuePajakTerpisah = numeral(pajak_terpisah.value);
            document.getElementById('pajak_terpisah').value = valuePajakTerpisah.format();
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