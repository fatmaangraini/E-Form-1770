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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style5.css') }}" >

    <title>PH-MT</title>
</head>

<body>
    <div class="container-fluid">
        <div style="padding: 10px"></div>
        <div class="row" style="font-size: 12px; font-weight: bold; text-align:center">
            <div class="col-sm-2"><a href="/formulir1770/{{ $spt->id}}" class="btn btn-secondary" style="font-size: 11px; width: auto; height: 30px">KEMBALI KE INDUK</a></div>
            <b style="padding: 10px;">LEMBAR PERHITUNGAN PAJAK PENGHASLAN TERUTANG</br>
                BAGI WAJIB PAJAK YANG KAWIN DENGAN STATUS PERPAJAKAN SUAMI-ISTERI PISAH HARTA DAN PENGHASILAN (PH) ATAU</br>
                ISTERI YANG MENGHENDAKI UNTUK MENJALANKAN HAK DAN KEWAJIBAN PERPAJAKANNYA SENDIRI (MT)</b>
        </div>

        <table id="mytable" class="display" style="width:100%">
            <tr>
                <th class="th1">
                    No.</th>
                <th class="th2"></th>
                <th class="th3">
                    Uraian</th>
                <th class="th4">
                    Penghasilan Neto <select style="width: 35%; height: 28px; border: 2px solid black" onchange="changePenghasilanNeto2()" id="penghasilanneto1">
                        <option value="Pilih" data-value="Pilih" <?= ($formPhMts->status_PengNeto1  == 'Pilih') ? 'selected="selected"' : '' ?>>Pilih...</option>
                        <option value="Suami" data-value="Isteri" <?= ($formPhMts->status_PengNeto1  == 'Suami') ? 'selected="selected"' : '' ?>>Suami</option>
                        <option value="Isteri" data-value="Suami" <?= ($formPhMts->status_PengNeto1  == 'Isteri') ? 'selected="selected"' : '' ?>>Isteri</option>
                    </select></th>
                <th class="th4">
                    Penghasilan Neto <input type="text" style="width: 35%; height: 28px; border: 2px solid black" id="penghasilanneto2" value="<?= $formPhMts['status_PengNeto2'] ?? "" ?>"></th>
            </tr>
            <tr>
                <td class="td1">(1)</td>
                <td class="td1"></td>
                <td class="td1">(2)</td>
                <td class="td1">(3)</td>
                <td class="td1">(4)</td>
            </tr>
            <tr>
                <td class="td2">A</td>
                <td></td>
                <td class="td3">PENGHASILAN NETO</td>
                <td class="td4"></td>
                <td class="td4"></td>
            </tr>
            <tr>
                <td class="td5"></td>
                <td class="td6">1</td>
                <td class="td3">PENGHASILAN NETO DALAM NEGERI DARI USAHA DAN/ATAU PEKERJAAN BEBAS</br>
                    <span>[Diisi dari Formulir 1770 Bagian A angka 1]</span>
                </td>
                <td class="td7"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" oninput="PenghasilanNeto()" id="suami1" value="{{ $PhMt[0]->rupiah_PengNeto1 ?? '' }}"></td>
                <td class="td7"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" oninput="PenghasilanNeto()" id="isteri1" value="{{ $PhMt[0]->rupiah_PengNeto2 ?? '' }}"></td>
            </tr>
            <tr>
                <td class="td5"></td>
                <td class="td6">2</td>
                <td class="td3">PENGHASILAN NETO DALAM NEGERI SEHUBUNGAN DENGAN PEKERJAAN</br>
                    <span>[Diisi dari Formulir 1770 Bagian A angka 2 atau Formulir 1770 S Bagian A angka 1]</span>
                </td>
                <td class="td7"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" oninput="PenghasilanNeto()" id="suami2" value="{{ $PhMt[1]->rupiah_PengNeto1 ?? '' }}"></td>
                <td class="td7"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" oninput="PenghasilanNeto()" id="isteri2" value="{{ $PhMt[1]->rupiah_PengNeto2 ?? '' }}"></td>
            </tr>
            <tr>
                <td class="td5"></td>
                <td class="td6">3</td>
                <td class="td3">PENGHASILAN NETO DALAM NEGERI LAINNYA</br>
                    <span>[Diisi dari Formulir 1770 Bagian A angka 3 atau Formulir 1770 S Bagian A angka 2]</span>
                </td>
                <td class="td7"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" oninput="PenghasilanNeto()" id="suami3" value="{{ $PhMt[2]->rupiah_PengNeto1 ?? '' }}"></td>
                <td class="td7"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" oninput="PenghasilanNeto()" id="isteri3" value="{{ $PhMt[2]->rupiah_PengNeto2 ?? '' }}"></td>
            </tr>
            <tr>
                <td class="td5"></td>
                <td class="td6">4</td>
                <td class="td3">PENGHASILAN NETO LUAR NEGERI</br>
                    <span>[Diisi dari Formulir 1770 Bagian A angka 4 atau Formulir 1770 S Bagian A angka 3]</span>
                </td>
                <td class="td7"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" oninput="PenghasilanNeto()" id="suami4" value="{{ $PhMt[3]->rupiah_PengNeto1 ?? '' }}"></td>
                <td class="td7"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" oninput="PenghasilanNeto()" id="isteri4" value="{{ $PhMt[3]->rupiah_PengNeto2 ?? '' }}"></td>
            </tr>
            <tr>
                <td class="td5"></td>
                <td class="td6">5</td>
                <td class="td3">ZAKAT / SUMBANGAN KEAGAMAAN YANG BERSIFAT WAJIB</br>
                    <span>[Diisi dari Formulir 1770 Bagian A angka 6 atau Formulir 1770 S Bagian A angka 5]</span>
                </td>
                <td class="td7"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" oninput="PenghasilanNeto()" id="suami5" value="{{ $PhMt[4]->rupiah_PengNeto1 ?? '' }}"></td>
                <td class="td7"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" oninput="PenghasilanNeto()" id="isteri5" value="{{ $PhMt[4]->rupiah_PengNeto2 ?? '' }}"></td>
            </tr>
            <tr>
                <td class="td5"></td>
                <td class="td6">6</td>
                <td class="td3">JUMLAH(1+2+3+4+5)</br>
                </td>
                <td class="td7"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" oninput="PenghasilanNeto()" id="jumlahS" value="{{ $PhMt[5]->rupiah_PengNeto1 ?? '' }}"></td>
                <td class="td7"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" oninput="PenghasilanNeto()" id="jumlahI" value="{{ $PhMt[5]->rupiah_PengNeto2 ?? '' }}"></td>
            </tr>
            <tr>
                <td class="td5"></td>
                <td class="td6">7</td>
                <td class="td3">KOMPENSASI KERUGIAN</br>
                    <span style="font-size: 10px">[Khusus Bagi WP OP yang menyelenggarakan pembukuan. Diisi dari Formulir 1770 Bagian A angka 8]</span>
                </td>
                <td class="td7"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" oninput="PenghasilanNeto()" id="suamiKK" value="{{ $PhMt[6]->rupiah_PengNeto1 ?? '' }}"></td>
                <td class="td7"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" oninput="PenghasilanNeto()" id="isteriKK" value="{{ $PhMt[6]->rupiah_PengNeto2 ?? '' }}"></td>
            </tr>
            <tr>
                <td style="border-left: 1px solid black; border-bottom: 1px solid black"></td>
                <td class="td6">8</td>
                <td class="td3">JUMLAH PENGHASILAN NETO (6-7)</br>
                </td>
                <td class="td7"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" oninput="PenghasilanNeto()" id="jumlahS2" value="{{ $PhMt[7]->rupiah_PengNeto1 ?? '' }}"></td>
                <td class="td7"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" oninput="PenghasilanNeto()" id="jumlahI2" value="{{ $PhMt[7]->rupiah_PengNeto2 ?? '' }}"></td>
            </tr>
            </br>
        </table>

        <table style="width:100%">
            <tr>
                <th class="th5">
                    No.</th>
                <th class="th6">
                    Uraian</th>
                <th class="th7">
                    Nilai</th>
            </tr>
            <tr>
                <td class="td1">(1)</td>
                <td class="td1">(2)</td>
                <td class="td1">(3)</td>
            </tr>
            <tr>
                <td class="td6">B</td>
                <td class="td3"> JUMLAH PENGHASILAN NETO SUAMI DAN ISTERI
                    <span style="font-weight: bold;">[A.8.(3) + A.8(4)]</span>
                </td>
                <td class="td7"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" oninput="PenghasilanNeto()" id="netosuamiisteri" value="{{ $PhMt2[0]->nilai_rupiah ?? ''}}"></td>
            </tr>
            <tr>
                <td class="td6">C</td>
                <td class="td3"> PENGHASILAN TIDAK KENA PAJAK <span style="margin-left: 15px;font-weight: bold;">
                        <select style="width:15%; height: 28px; border: 2px solid black" onchange="PenghasilanNeto()" id="pilihanPTKP">
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
                <td class="td7"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" oninput="PenghasilanNeto()" id="inputPTKP" value="{{ $PhMt2[1]->nilai_rupiah ?? ''}}"></td>
            </tr>
            <script>

            </script>
            <tr>
                <td class="td6">D</td>
                <td class="td3"> PENGHASILAN KENA PAJAK
                    <span style="font-weight: bold;">[B - C]</span>
                </td>
                <td class="td7"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" oninput="PenghasilanNeto()" id="inputPKP" value="{{ $PhMt2[2]->nilai_rupiah ?? ''}}"></td>
            </tr>
            <tr>
                <td class="td8"></td>
                <td class="td3"> PAJAK PENGHASILAN TERUTANG (GABUNGAN)
                </td>
                <td class="td9"></td>
            </tr>
        </table>
        <table style="width:100%">
            <tr>
                <th class="th8">
                </th>
                <th class="th9">
                    1. 5% x</th>
                <th class="th10">
                    <input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" oninput="PenghasilanNeto()" id="limapersen" value="{{ $PhMt3[0]->PPhTerutang ?? ''}}">
                </th>
                <th class="th10">
                </th>
                <th class="th10">
                    <input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" oninput="PenghasilanNeto()" id="hasillimapersen" value="{{ $PhMt3[0]->hasil_PPhTerutang ?? ''}}">
                </th>
                <th style="border: 1px solid black; border-top: 0px solid black; border-bottom: 0px solid black;width: 20%; background-color: #808080">
                </th>
            </tr>
            <tr>
                <td class="th8"></td>
                <td class="th9">2. 15% x</td>
                <td class="th10">
                    <input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" oninput="PenghasilanNeto()" id="limabelaspersen" value="{{ $PhMt3[1]->PPhTerutang ?? ''}}">
                </td>
                <td class="th10"></td>
                <td class="th10">
                    <input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" oninput="PenghasilanNeto()" id="hasillimabelaspersen" value="{{ $PhMt3[1]->hasil_PPhTerutang ?? ''}}">
                </td>
                <td style="border: 1px solid black; border-top: 0px solid black; border-bottom: 0px solid black; background-color: #808080"></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-top: 0px solid black; border-bottom: 0px solid black; text-align: center; height: 30px">E</td>
                <td class="th9">3. 25% x</td>
                <td class="th10">
                    <input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" oninput="PenghasilanNeto()" id="dualimapersen" value="{{ $PhMt3[2]->PPhTerutang ?? ''}}">
                </td>
                <td class="th10"></td>
                <td class="th10">
                    <input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" oninput="PenghasilanNeto()" id="hasildualimapersen" value="{{ $PhMt3[2]->hasil_PPhTerutang ?? ''}}">
                </td>
                <td style="border: 1px solid black; border-top: 0px solid black; border-bottom: 0px solid black; background-color: #808080"></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-top: 0px solid black; border-bottom: 0px solid black; height: 30px"></td>
                <td class="th9">4. 30% x</td>
                <td class="th10">
                    <input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" oninput="PenghasilanNeto()" id="tigapuluhpersen" value="{{ $PhMt3[3]->PPhTerutang ?? ''}}">
                </td>
                <td class="th10"></td>
                <td class="th10">
                    <input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" oninput="PenghasilanNeto()" id="hasiltigapuluhpersen" value="{{ $PhMt3[3]->hasil_PPhTerutang ?? ''}}">
                </td>
                <td style="border: 1px solid black; border-top: 0px solid black; border-bottom: 0px solid white; background-color: #808080"></td>
            </tr>
            <tr>
                <td style="border: 1px solid black; border-top: 0px solid black; border-bottom: 0px solid black; height: 30px"></td>
                <td class="th9">5. 35% x</td>
                <td class="th10">
                    <input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" oninput="PenghasilanNeto()" id="tigalimapersen" value="{{ $PhMt3[4]->PPhTerutang ?? ''}}">
                </td>
                <td class="th10"></td>
                <td class="th10">
                    <input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" oninput="PenghasilanNeto()" id="hasiltigalimapersen" value="{{ $PhMt3[4]->hasil_PPhTerutang ?? ''}}">
                </td>
                <td style="border: 1px solid black; border-top: 0px solid white; background-color: #808080"></td>
            </tr>
        </table>
        <table style="width: 100%;">
            <tr>
                <th style="border: 1px solid black; border-top: 0px solid black; width: 5%; height: 30px"></th>
                <th style="border: 1px solid black; border-top: 0px solid black; width: 70%; height: 30px; font-size: 12px">JUMLAH PAJAK PENGHASILAN TERUTANG (GABUNGAN)</th>
                <th style="border: 1px solid black; border-top: 0px solid black; width: 20%">
                    <input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" oninput="PenghasilanNeto()" id="hasilpphgabungan" value="{{ $PhMt2[3]->nilai_rupiah ?? ''}}">
                </th>
            </tr>
            <tr>
                <td class="td6">F</td>
                <td class="td3">PPh TERUTANG YANG DITANGGUNG Suami <span style="font-weight: bold;">[(A.8(3) / B) x E]</span></br>
                    <span>[Pindahkan nilai pada bagian ini ke SPT Suami bagian C angka 12 Formulir 1770 atau ke bagian C angka 9 Formulir 1770 S]</span>
                </td>
                <td class="td7"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" oninput="PenghasilanNeto()" id="ditanggungsuami" value="{{ $PhMt2[4]->nilai_rupiah ?? ''}}"></td>
            </tr>
            <tr>
                <td class="td6">G</td>
                <td class="td3">PPh TERUTANG YANG DITANGGUNG Isteri <span style="font-weight: bold;">[(A.8(4) / B) x E]</span></br>
                    <span>[Pindahkan nilai pada bagian ini ke SPT Isteri bagian C angka 12 Formulir 1770 atau ke bagian C angka 9 Formulir 1770 S]</span>
                </td>
                <td class="td7"><input type="text" class="form-control" style="border: 1px solid white; font-size: 12px; font-weight: bold; text-align: right; width: 100%; height: 30px;" placeholder="0" oninput="PenghasilanNeto()" id="ditanggungisteri" value="{{ $PhMt2[5]->nilai_rupiah ?? ''}}"></td>
            </tr>
        </table>
        <div style="padding: 10px;"></div>
        <table style="width: 100%;">
            <tr>
                <th style="width:50%; border: 0px solid black"></th>
                <th style="width: 20%; border:0px solid black"></th>
                <th style="width: 5%; border: 0px solid black"></th>
                <th style="width: 20%; border:1px solid black"><input type="date" style="width: 100%;border: 0px solid black; font-size: 12px" id="tanggal_phmt" value="<?= $formPhMts['tanggal_phmt'] ?? "" ?>"></th>
            </tr>
        </table>
        <div style="padding: 10px;"></div>

        <table style="width: 100%; height:30px">
            <tr style="background-color: #80808080">
                <th style="border: 0px solid black; width: 40%"></th>
                <th style="font-size:12px; text-align:center; width: 20%;"><input type="text" style="width: 100%; border: 0px solid black; font-size: 14px; text-align:center; background-color: #80808080" value="<?= $formPhMts['status_PengNeto1'] ?? "" ?>"></th>
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
                    <form action="/PhMt_TTD/{{$formPhMt}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="file" name="ttd1" class="form-control" accept=".png, .jpg">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                    <img src="{{ asset('ttdPHMT/'.$formPhMts['ttd1']) }}" style="width: 150px;" alt="">
                </th>
            </tr>
        </table>
        <div style="padding: 10px;"></div>

        <table style="width: 100%; height:30px">
            <tr style="background-color: #80808080">
                <th style="border: 0px solid black; width: 40%"></th>
                <th style="font-size:12px; text-align:center; width: 20%;"><input type="text" style="width: 100%; border: 0px solid black; font-size: 14px; text-align:center; background-color: #80808080" value="<?= $formPhMts['status_PengNeto2'] ?? "" ?>"></th>
                <th style="border: 0px solid black; width: 40%;"></th>
            </tr>
        </table>
        <table style="width: 100%;">
            <tr style="height: 30px;">
                <th style="border: 0px solid black; font-size: 12px; width: 34%;">Nama</th>
                <th style="border: 1px solid black; font-size: 12px; width: 70%;"><input type="text" style="height: 30px; width: 100%; border: 0px solid black; font-size: 14px" id="nama_PHMT" value="<?= $formPhMts['nama_PHMT'] ?? "" ?>"></th>
            </tr>
            <tr style="height: 30px;">
                <th style="border: 0px solid black; font-size: 12px; width: 34%;">NPWP</th>
                <th style="border: 1px solid black; font-size: 12px; width: 70%;"><input type="text" style="height: 30px; width: 100%; border: 0px solid black; font-size: 14px" maxlength="20" oninput="FormatNPWP_PHMT2(this)" id="npwp_PHMT" value="<?= $formPhMts['npwp_PHMT'] ?? "" ?>"></th>
            </tr>
        </table>

        <table style="width: 100%;">
            <tr style="height: 60px;">
                <th style="border: 0px solid black; font-size: 12px; width: 34%;">Tanda Tangan</th>
                <th style="border: 1px solid black; font-size: 12px; width: 70%;">
                    <form action="/PhMt_TTD/{{$formPhMt}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="file" name="ttd2" class="form-control" accept=".png, .jpg">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                    <img src="{{ asset('ttdPHMT/'.$formPhMts['ttd2']) }}" style="width: 150px;" alt="">
                </th>
            </tr>
        </table>
        <button type="button" value="edit" onclick="PengNetoSave(this)">Simpan</button>
        <button type="button" onclick="PengNetoDelete()">Hapus</button>

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
            FormatNPWP_PHMT();
            FormatNPWP_PHMT2();
            countPajakProgresif();
        });

        function changePenghasilanNeto2() {
            var pn1 = $("option:selected", $("#penghasilanneto1")).attr("data-value");
            document.getElementById('penghasilanneto2').value = pn1
        }

        function FormatNPWP_PHMT() {
            formatnpwp = document.getElementById('NPWP_PHMT').value
            formatnpwp2 = document.getElementById('NPWP_PHMT')
            if (typeof formatnpwp === 'string') {

            }
            formatnpwp2.value = formatnpwp.replace(/(\d{2})(\d{3})(\d{3})(\d{1})(\d{3})(\d{3})/, '$1.$2.$3.$4-$5.$6');
        }

        function FormatNPWP_PHMT2() {
            formatnpwp = document.getElementById('npwp_PHMT').value
            formatnpwp2 = document.getElementById('npwp_PHMT')
            if (!formatnpwp.match(/^[0-9./-]+$/i)) {
                formatnpwp2.value = formatnpwp.slice(0, -1);
                return;
            }
            formatnpwp2.value = formatnpwp.replace(/(\d{2})(\d{3})(\d{3})(\d{1})(\d{3})(\d{3})/, '$1.$2.$3.$4-$5.$6');
        }
    </script>

    <script>
        $('#pilihanPTKP').change(function() {
            ids = $(this).val().split("/");
            $(`#${ids[0]}`).prop("checked", true);
            data = {
                pilihan_PTKP: $(this).val()
            }
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: "POST",
                data: data,
                url: '/PilihanPTKP/{{ $formPhMt }}',
                success: function(res) {
                    console.log(res)
                }
            });
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
                url: '/StatusPengNeto/{{ $formPhMt }}',
                success: function(res) {
                    console.log(res)
                }
            });
        });

        function PenghasilanNeto() {
            // SUAMI
            valueSuami1 = numeral(suami1.value);
            document.getElementById('suami1').value = valueSuami1.format();
            valueSuami2 = numeral(suami2.value);
            document.getElementById('suami2').value = valueSuami2.format();
            valueSuami3 = numeral(suami3.value);
            document.getElementById('suami3').value = valueSuami3.format();
            valueSuami4 = numeral(suami4.value);
            document.getElementById('suami4').value = valueSuami4.format();
            valueSuami5 = numeral(suami5.value);
            document.getElementById('suami5').value = valueSuami5.format();
            valueSuamiKK = numeral(suamiKK.value);
            document.getElementById('suamiKK').value = valueSuamiKK.format();

            var Suami = ((valueSuami1.value()) + (valueSuami2.value()) +
                (valueSuami3.value()) + (valueSuami4.value()) + (valueSuami5.value()));
            document.getElementById('jumlahS').value = numeral(Suami).format();;

            var Suami2 = Suami - ((valueSuamiKK.value()));
            document.getElementById('jumlahS2').value = numeral(Suami2).format();

            // ISTERI
            valueIsteri1 = numeral(isteri1.value);
            document.getElementById('isteri1').value = valueIsteri1.format();
            valueIsteri2 = numeral(isteri2.value);
            document.getElementById('isteri2').value = valueIsteri2.format();
            valueIsteri3 = numeral(isteri3.value);
            document.getElementById('isteri3').value = valueIsteri3.format();
            valueIsteri4 = numeral(isteri4.value);
            document.getElementById('isteri4').value = valueIsteri4.format();
            valueIsteri5 = numeral(isteri5.value);
            document.getElementById('isteri5').value = valueIsteri5.format();
            valueIsteriKK = numeral(isteriKK.value);
            document.getElementById('isteriKK').value = valueIsteriKK.format();

            var Isteri = ((valueIsteri1.value()) + (valueIsteri2.value()) +
                (valueIsteri3.value()) + (valueIsteri4.value()) + (valueIsteri5.value()));
            document.getElementById('jumlahI').value = numeral(Isteri).format();

            var Isteri2 = Isteri - ((valueIsteriKK.value()));
            document.getElementById('jumlahI2').value = numeral(Isteri2).format();

            var netoSuamiIsteri = Suami2 + Isteri2;
            document.getElementById('netosuamiisteri').value = numeral(netoSuamiIsteri).format();

            // PKP
            var data = $("option:selected", $("#pilihanPTKP")).attr("data-value");
            document.getElementById("inputPTKP").value = numeral(data).format();

            valueInputPTKP = numeral(inputPTKP.value);
            document.getElementById('inputPTKP').value = valueInputPTKP.format();

            var hasilPKP = netoSuamiIsteri - ((valueInputPTKP.value()));
            document.getElementById('inputPKP').value = numeral(hasilPKP).format();

            // PPH GABUNGAN

            valueLimaPersen = numeral(limapersen.value);
            document.getElementById('limapersen').value = valueLimaPersen.format();

            valueLimaBelasPersen = numeral(limabelaspersen.value);
            document.getElementById('limabelaspersen').value = valueLimaBelasPersen.format();

            valueDuaLimaPersen = numeral(dualimapersen.value);
            document.getElementById('dualimapersen').value = valueDuaLimaPersen.format();

            valueTigaPuluhPersen = numeral(tigapuluhpersen.value);
            document.getElementById('tigapuluhpersen').value = valueTigaPuluhPersen.format();

            valueTigaLimaPersen = numeral(tigalimapersen.value);
            document.getElementById('tigalimapersen').value = valueTigaLimaPersen.format();

            // HASIL PPH GABUNGAN
            var HasilLimaPersen = ((valueLimaPersen.value()) * (5 / 100));
            document.getElementById('hasillimapersen').value = numeral(HasilLimaPersen).format();

            var HasilLimaBelasPersen = ((valueLimaBelasPersen.value()) * (15 / 100));
            document.getElementById('hasillimabelaspersen').value = numeral(HasilLimaBelasPersen).format();

            var HasilDuaLimaPersen = ((valueDuaLimaPersen.value()) * (25 / 100));
            document.getElementById('hasildualimapersen').value = numeral(HasilDuaLimaPersen).format();

            var HasilTigaPuluhPersen = ((valueTigaPuluhPersen.value()) * (30 / 100));
            document.getElementById('hasiltigapuluhpersen').value = numeral(HasilTigaPuluhPersen).format();

            var HasilTigaLimaPersen = ((valueTigaLimaPersen.value()) * (35 / 100));
            document.getElementById('hasiltigalimapersen').value = numeral(HasilTigaLimaPersen).format();

            // JUMLAH PPH GABUNGAN
            var HasilPPHGabungan = HasilLimaPersen + HasilLimaBelasPersen + HasilDuaLimaPersen +
                HasilTigaPuluhPersen + HasilTigaLimaPersen;
            document.getElementById('hasilpphgabungan').value = numeral(HasilPPHGabungan).format();

            // PPH TERUTANG SUAMI
            var DitanggungSuami = Suami2 / netoSuamiIsteri * HasilPPHGabungan;
            document.getElementById('ditanggungsuami').value = numeral(DitanggungSuami).format();

            // PPH TERUTANG ISTERI
            var DitanggungIsteri = Isteri2 / netoSuamiIsteri * HasilPPHGabungan;
            document.getElementById('ditanggungisteri').value = numeral(DitanggungIsteri).format();
            countPajakProgresif();

        }

        function countPajakProgresif() {
            var pkp = $('#inputPKP').val().split(',').join('');
            console.log(pkp)
            var limapersen = 0;
            var hasillimapersen = 0;
            var hasillimabelaspersen = 0;
            var hasildualimapersen = 0;
            var hasiltigapuluhpersen = 0;
            var hasiltigalimapersen = 0;

            if (pkp <= 60000000) {
                limapersen = pkp;
                hasillimapersen = pkp * 0.05;
                } else if (pkp > 60000000 && pkp <= 250000000) {
                    limapersen = 60000000;
                    hasillimapersen = 60000000 * 0.05;
                    limabelaspersen = (pkp - 60000000);
                    hasillimabelaspersen = (pkp - 60000000) * 0.15;
                } else if (pkp > 250000000 && pkp <= 500000000) {
                    limapersen = 60000000;
                    limabelaspersen = 190000000;
                    dualimapersen = (pkp - 250000000);
                    hasillimapersen = 60000000 * 0.05;
                    hasillimabelaspersen = 190000000 * 0.15;
                    hasildualimapersen = (pkp - 250000000) * 0.25;
                } else if (pkp > 500000000 && pkp <= 5000000000) {
                    limapersen = 60000000;
                    limabelaspersen = 190000000;
                    dualimapersen = 250000000;
                    tigapuluhpersen = (pkp - 500000000);
                    hasillimapersen = 60000000 * 0.05;
                    hasillimabelaspersen = 190000000 * 0.15;
                    hasildualimapersen = 250000000 * 0.25;
                    hasiltigapuluhpersen = (pkp - 500000000) * 0.30;
                }
                else if (pkp > 5000000000) {
                    limapersen = 60000000;
                    limabelaspersen = 190000000;
                    dualimapersen = 250000000;
                    tigapuluhpersen = 4500000000;
                    tigalimapersen = (pkp - 5000000000);
                    hasillimapersen = 60000000 * 0.05;
                    hasillimabelaspersen = 190000000 * 0.15;
                    hasildualimapersen = 250000000 * 0.25;
                    hasiltigapuluhpersen = tigapuluhpersen * 0.30;
                    hasiltigalimapersen = (pkp - 5000000000) * 0.35;
                }
                $('#limapersen').val(numeral(limapersen).format());
                $('#hasillimapersen').val(numeral(hasillimapersen).format());
                $('#limabelaspersen').val(numeral(limabelaspersen).format());
                $('#hasillimabelaspersen').val(numeral(hasillimabelaspersen).format());
                $('#dualimapersen').val(numeral(dualimapersen).format());
                $('#hasildualimapersen').val(numeral(hasildualimapersen).format());
                $('#tigapuluhpersen').val(numeral(tigapuluhpersen).format());
                $('#hasiltigapuluhpersen').val(numeral(hasiltigapuluhpersen).format());
                $('#tigalimapersen').val(numeral(tigalimapersen).format());
                $('#hasiltigalimapersen').val(numeral(hasiltigalimapersen).format());
            }
            // console.log(hasillimapersen);


            // SIMPAN PENGHASILAN NETO
            function PengNetoSave(event) {
                suami1 = document.querySelector('#suami1').value
                suami2 = document.querySelector('#suami2').value
                suami3 = document.querySelector('#suami3').value
                suami4 = document.querySelector('#suami4').value
                suami5 = document.querySelector('#suami5').value
                jumlahS = document.querySelector('#jumlahS').value
                suamiKK = document.querySelector('#suamiKK').value
                jumlahS2 = document.querySelector('#jumlahS2').value
                isteri1 = document.querySelector('#isteri1').value
                isteri2 = document.querySelector('#isteri2').value
                isteri3 = document.querySelector('#isteri3').value
                isteri4 = document.querySelector('#isteri4').value
                isteri5 = document.querySelector('#isteri5').value
                jumlahI = document.querySelector('#jumlahI').value
                isteriKK = document.querySelector('#isteriKK').value
                jumlahI2 = document.querySelector('#jumlahI2').value
                tanggal_phmt = document.querySelector('#tanggal_phmt').value
                nama_PHMT = document.querySelector('#nama_PHMT').value
                npwp_PHMT = document.querySelector('#npwp_PHMT').value


                var data = {
                    type: event.value,
                    tanggal_phmt: tanggal_phmt,
                    nama_PHMT: nama_PHMT,
                    npwp_PHMT: npwp_PHMT,
                    PengNeto1: [suami1, suami2, suami3, suami4, suami5, jumlahS, suamiKK, jumlahS2],
                    PengNeto2: [isteri1, isteri2, isteri3, isteri4, isteri5, jumlahI, isteriKK, jumlahI2]
                }

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: '/PhMt_Point/Store/{{ $formPhMt }}',
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

                // NILAI RUPIAH
                netosuamiisteri = document.querySelector('#netosuamiisteri').value
                inputPTKP = document.querySelector('#inputPTKP').value
                inputPKP = document.querySelector('#inputPKP').value
                hasilpphgabungan = document.querySelector('#hasilpphgabungan').value
                ditanggungsuami = document.querySelector('#ditanggungsuami').value
                ditanggungisteri = document.querySelector('#ditanggungisteri').value

                var data = {
                    type: event.value,
                    NilaiRupiah: [netosuamiisteri, inputPTKP, inputPKP,
                        hasilpphgabungan, ditanggungsuami, ditanggungisteri
                    ]
                }

                console.log(data);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: '/PhMt2_Point/Store/{{ $formPhMt }}',
                    data: data,
                    success: function(res) {
                        location.reload()
                    }
                });

                // PPh TERUTANG
                limapersen = document.querySelector('#limapersen').value
                limabelaspersen = document.querySelector('#limabelaspersen').value
                dualimapersen = document.querySelector('#dualimapersen').value
                tigapuluhpersen = document.querySelector('#tigapuluhpersen').value
                tigalimapersen = document.querySelector('#tigalimapersen').value
                hasillimapersen = document.querySelector('#hasillimapersen').value
                hasillimabelaspersen = document.querySelector('#hasillimabelaspersen').value
                hasildualimapersen = document.querySelector('#hasildualimapersen').value
                hasiltigapuluhpersen = document.querySelector('#hasiltigapuluhpersen').value
                hasiltigalimapersen = document.querySelector('#hasiltigalimapersen').value

                var data = {
                    type: event.value,
                    PPhTerutang: [limapersen, limabelaspersen, dualimapersen, tigapuluhpersen, tigalimapersen],
                    HasilPPhTerutang: [hasillimapersen, hasillimabelaspersen, hasildualimapersen, hasiltigapuluhpersen, hasiltigalimapersen]
                }

                console.log(data);
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: '/PhMt3_Point/Store/{{ $formPhMt }}',
                    data: data,
                    success: function(res) {
                        location.reload()
                    }
                });

            }

            // HAPUS PENGHASILAN NETO
            function PengNetoDelete() {
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    type: "POST",
                    url: '/PhMt_Point/delete/{{ $formPhMt }}',
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
    </script>
</body>

</html>