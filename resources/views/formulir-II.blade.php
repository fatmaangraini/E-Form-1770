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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >

    <title>Formulir 1770-II</title>
</head>

<body>
    <div class="container-fluid">
        <header>
            <div class="row header">
                <div class="col-2 bag1">
                    <h5>FORMULIR</h5>
                    <h1>1770-II</h1>
                    <p>KEMENTERIAN KEUANGAN
                        RI DIREKTORAT JENDERAL PAJAK</p>
                </div>
                <div class="col-6" style="text-align: center;">
                    <h5>LAMPIRAN-II</h5>
                    <p>SPT TAHUNAN PPh WAJIB PAJAK ORANG PRIBADI</p>
                    <span>DAFTAR PEMOTONGAN PEMUNGUTAN PPh OLEH PIHAK LAIN, <br></span>
                    <span>PPh YANG DIBAYAR/DIPOTONG DI LUAR NEGERI DAN<br></span>
                    <span>PPh DITANGGUNG PEMERINTAH</span>
                </div>
                <div class="col-4">
                    <a href="/formulir-III/{{ $spt->id}}" class="btn btn-secondary">Sebelumnya</a>
                    <a href="/formulir-I/{{ $spt->id}}" class="btn btn-secondary">Selanjutnya</a>
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

        <!-- Bagian A. Daftar Pemotongan/Pemungutan -->
        <div style="padding: 5px;"></div>
        <b>BAGIAN A : DAFTAR PEMOTONGAN/PEMUNGUTAN PPh OLEH PIHAK LAIN,
            PPh YANG DIBAYAR/DIPOTONG DI LUAR NEGERI DAN PPh DITANGGUNG PEMERINTAH</b>
        <div>
            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Import Data</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Import Data Daftar Pemotongan/Pemungutan</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/DataPotongPungutImport" method="POST" enctype="multipart/form-data">
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

        <form action="/SaveDataPotongPungut/{{$form2}}" method="POST">
            @csrf
            <input type="hidden" name="counted" value="{{ count($data_potong_pungut)  }}">
            <table id="BagianABupot" class="display" width="100%">
                <tr>
                    <th width="5%"><br>NO <br> <br>(1)</th>
                    <th width="15%">NAMA</br>PEMOTONG/</br>PEMUNGUT PAJAK <br> (2)</th>
                    <th width="25%">NPWP</br>PEMOTONG/</br>PEMUNGUT PAJAK <br>(3)</th>
                    <th width="15%">NOMOR</br>BUKTI</br>PEMOTONGAN <br>(4)</th>
                    <th width="10%">TANGGAL</br>BUKTI</br>PEMOTONGAN <br>(5)</th>
                    <th width="15%">JENIS PAJAK :</br>PPh PASAL</br>21/22/23/26DTP <br>(6)</th>
                    <th width="20%">JUMLAH PPh</br>YANG DIPOTONG/</br>DIPUNGUT <br>(7)</th>
                    <th width="20%">HAPUS</th>
                </tr>
                @if (count($data_potong_pungut) == 0)
                <tr>
                    <td>1</td>
                    <td><input name="nama_pemotong[]" type="text" class="form-control"></td>
                    <td><input name="npwp_pemotong[]" type="text" class="form-control" maxlength="20" oninput="formatNpwp2(this)" id="formatnpwpfix"></td>
                    <td><input name="nomor_bupot[]" type="text" class="form-control"></td>
                    <td><input name="tgl_bupot[]" type="date" class="form-control"></td>
                    <td><select name='jenis_pajak[]'>
                            <option value='pilih'>Pilih...</option>
                            <option value='21'>Pasal 21</option>
                            <option value='22'>Pasal 22</option>
                            <option value='23'>Pasal 23</option>
                            <option value='24'>Pasal 24</option>
                            <option value='26'>Pasal 26</option>
                            <option value='DTP'>Pasal DTP</option>
                        </select> </td>
                    <td><input name="jumlahPPh_potong[]" class="jumlahpph" type="text" class="form-control" style="text-align: right" oninput="formatJmlPPhDipotongDipungut(this.value)" name="jumlahPPh" placeholder="0"></td>
                    <td>
                        <div class="checkbox-container">
                            <input type="checkbox" name="pemotongan_id">
                        </div>
                    </td>
                </tr>
                @endif
                <tbody>
                    <?php $i = 0; ?>
                    @foreach ( $data_potong_pungut as $dh )
                    <tr>
                        <td><?= $i += 1 ?></td>
                        <td><input name="nama_pemotong[]" type="text" class="form-control" value="{{ $dh['nama_pemotong'] }}"></td>
                        <td><input name="npwp_pemotong[]" type="text" class="form-control" value="{{ $dh['npwp_pemotong'] }}" maxlength="20" oninput="formatNpwp2(this)" id="formatnpwpfix"></td>
                        <td><input name="nomor_bupot[]" type="text" class="form-control" value="{{ $dh['nomor_bupot'] }}"></td>
                        <td><input name="tgl_bupot[]" type="date" class="form-control" value="{{ $dh['tgl_bupot'] }}"></td>
                        <td><select name='jenis_pajak[]' style="width:100%; height:30px; border: 1px solid white">
                                <option value='pilih'>Pilih...</option>
                                <option value='21' @if ($dh['jenis_pajak']=="21" ) selected="selected" @endif>Pasal 21</option>
                                <option value='22' @if ($dh['jenis_pajak']=="22" ) selected="selected" @endif>Pasal 22</option>
                                <option value='23' @if ($dh['jenis_pajak']=="23" ) selected="selected" @endif>Pasal 23</option>
                                <option value='24' @if ($dh['jenis_pajak']=="24" ) selected="selected" @endif>Pasal 24</option>
                                <option value='26' @if ($dh['jenis_pajak']=="26" ) selected="selected" @endif>Pasal 26</option>
                                <option value='DTP' @if ($dh['jenis_pajak']=="DTP" ) selected="selected" @endif>Pasal DTP</option>
                            </select> </td>
                        <td><input name="jumlahPPh_potong[]" class="jumlahpph" type="text" class="form-control" value="{{ $dh['jumlahPPh_potong'] }}" style="text-align: right" oninput="formatJmlPPhDipotongDipungut(this.value)" name="jumlahPPh" id="jumlahPPh" placeholder="0"></td>
                        <td>
                            <div class="checkbox-container">
                                <input type="checkbox" name="pemotongan_id" value="{{ $dh['id'] }}">
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div style="padding: 10px;"></div>
            <table>
                <tr>
                    <th class="thJumlah">JUMLAH BAGIAN A</th>
                    <th class="thJumlah2">
                        <input type="text" class="form-control" readonly="readonly" style="background-color: #F0E68C; text-align: right; border: 1px solid white" name="hasilPPhDipotongDipungut" id="hasilPPhDipotongDipungut">
                        <input type="hidden" name="form2_id" value="{{ $form2 }}">
                        <input type="hidden" name="formspt" value="{{ $formspt }}">
                    </th>
                </tr>
            </table>

            <template id="rowTemplateBagianABupot">
                <tr>
                    <td><span id="nomortemplate"></span></td>
                    <td><input name="nama_pemotong[]" type="text" class="form-control"></td>
                    <td><input name="npwp_pemotong[]" type="text" class="form-control" maxlength="20" oninput="formatNpwp2(this)" id="formatnpwpfix"></td>
                    <td><input name="nomor_bupot[]" type="text" class="form-control"></td>
                    <td><input name="tgl_bupot[]" type="date" class="form-control"></td>
                    <td><select name='jenis_pajak[]'>
                            <option value='pilih'>Pilih...</option>
                            <option value='21'>Pasal 21</option>
                            <option value='22'>Pasal 22</option>
                            <option value='23'>Pasal 23</option>
                            <option value='24'>Pasal 24</option>
                            <option value='26'>Pasal 26</option>
                            <option value='DTP'>Pasal DTP</option>
                        </select> </td>
                    <td><input name="jumlahPPh_potong[]" class="jumlahpph" type="text" class="form-control" style="border: 1px solid white; width: 100%; text-align: right" oninput="formatJmlPPhDipotongDipungut(this.value)" name="jumlahPPh" id="jumlahPPh" placeholder="0"></td>
                    <td>
                        <div class="checkbox-container">
                            <input type="checkbox" name="pemotongan_id">
                        </div>
                    </td>
                </tr>
            </template>
            <button type="button" onclick="addTableBagianA(this)">Tambah</button>
            <button type="button" onclick="deleteTableBagianA('BagianABupot')">Hapus</button>
            <button type="button" id="cektablepotongpungut" onclick="cekTablePotongPungut(this)">Simpan</button>
            <button type="submit" id="simpantablePotongPungut" style="display:none">Simpan</button>
        </form>
    </div>

    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/numeral.js/2.0.6/numeral.min.js"></script>

    <script>
        let nomor = 0;
        $(document).ready(function() {
            nomor = <?= count($data_potong_pungut) ?>;
            $("#nomortemplate").html(nomor + 1)
            formatJmlPPhDipotongDipungut();
            NPWPWajibPajak();
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
        let counted = 0


        function addTableBagianA($this) {
            var countdata = <?= count($data_potong_pungut) ?>,
                template = document.querySelector('#rowTemplateBagianABupot'),
                tbl = document.querySelector('#BagianABupot'),
                td_choice = template.content.querySelectorAll("td"),
                last_td = $('#BagianABupot tr:last'),
                tr_count = tbl.rows.length;

            var nama_pemotong = last_td.find('td:eq(1)').find('input').val()
            var npwp_pemotong = last_td.find('td:eq(2)').find('input').val();
            var nomor_bupot = last_td.find('td:eq(3)').find('input').val();
            var tgl_bupot = last_td.find('td:eq(4)').find('input').val();
            var jenis_pajak = last_td.find('td:eq(5)').find('option:selected').val();
            var jumlahPPh_potong = last_td.find('td:eq(6)').find('input').val();

            var data = {
                nama_pemotong: nama_pemotong,
                npwp_pemotong: npwp_pemotong,
                nomor_bupot: nomor_bupot,
                tgl_bupot: tgl_bupot,
                jenis_pajak: jenis_pajak,
                jumlahPPh_potong: jumlahPPh_potong

            }
            console.log(data);
            if (nama_pemotong === '' || npwp_pemotong === '' || nomor_bupot === '' || tgl_bupot === '' || jenis_pajak === 'pilih' || jumlahPPh_potong === '') {

                Swal.fire({
                    icon: 'error',
                    title: '',
                    text: 'Mohon Melengkapi Row Sebelumnya',
                })
                return
            }
            if (counted == 0 && countdata > 0) {
                td_choice.textContent = tr_count;
                var clone = document.importNode(template.content, true);
                tbl.appendChild(clone);
                formatJmlPPhDipotongDipungut();
                nomor += 1
                $("#nomortemplate").html(nomor)

                counted += 1
                return
            }
            var data = {
                nama_pemotong: nama_pemotong,
                npwp_pemotong: npwp_pemotong,
                nomor_bupot: nomor_bupot,
                tgl_bupot: tgl_bupot,
                jenis_pajak: jenis_pajak,
                jumlahPPh_potong: jumlahPPh_potong

            }

            td_choice.textContent = tr_count;
            var clone = document.importNode(template.content, true);
            tbl.appendChild(clone);
            formatJmlPPhDipotongDipungut();
            nomor += 1
            $("#nomortemplate").html(nomor)

        }

        function cekTablePotongPungut($this) {
            var countdata = <?= count($data_potong_pungut) ?>,
                template = document.querySelector('#rowTemplateBagianABupot'),
                tbl = document.querySelector('#BagianABupot'),
                td_choice = template.content.querySelectorAll("td"),
                last_td = $('#BagianABupot tr:last'),
                tr_count = tbl.rows.length;

            var nama_pemotong = last_td.find('td:eq(1)').find('input').val()
            var npwp_pemotong = last_td.find('td:eq(2)').find('input').val();
            var nomor_bupot = last_td.find('td:eq(3)').find('input').val();
            var tgl_bupot = last_td.find('td:eq(4)').find('input').val();
            var jenis_pajak = last_td.find('td:eq(5)').find('option:selected').val();
            var jumlahPPh_potong = last_td.find('td:eq(6)').find('input').val();

            var data = {
                nama_pemotong: nama_pemotong,
                npwp_pemotong: npwp_pemotong,
                nomor_bupot: nomor_bupot,
                tgl_bupot: tgl_bupot,
                jenis_pajak: jenis_pajak,
                jumlahPPh_potong: jumlahPPh_potong

            }
            console.log(data);
            if (nama_pemotong === '' || npwp_pemotong === '' || nomor_bupot === '' || tgl_bupot === '' || jenis_pajak === 'pilih' || jumlahPPh_potong === '') {

                Swal.fire({
                    icon: 'error',
                    title: '',
                    text: 'Mohon Melengkapi Row Sebelumnya',
                })
                return
            }
            const myElement = document.getElementById("simpantablePotongPungut").click();

        }

        countdata2 = <?= count($data_potong_pungut) ?>;


        function deleteTableBagianA() {
            var checkboxes = document.getElementsByName("pemotongan_id");
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
                        url: '/DataPotongPungut/delete',
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

        function formatJmlPPhDipotongDipungut() {
            $('.jumlahpph').each(function() {
                if (this.value.length > 0 && this.value != 0) {
                    tmp2 = getNumPrice(this.value, '.');
                    this.value = numeral(this.value).format();
                    tmp += parseFloat(tmp2)
                } else {
                    tmp += 0
                }
            });
            sum = tmp
            console.log(sum)
            $('#hasilPPhDipotongDipungut').val(numeral(sum).format());
            tmp = 0;
        }

        function getNumPrice(price, decimalpoint) {
            var p = price.split(decimalpoint);
            for (var i = 0; i < p.length; i++) p[i] = p[i].replace(/\D/g, '');
            return p.join('.');
        }

        function NPWPpemotong(event) {
            console.log(event.value)
            NPWPpemotong = event.value
            NPWPpemotong2 = event
            if (!NPWPpemotong.match(/^[0-9./-]+$/i)) {
                alert('Angka saja')
                NPWPpemotong2.value = NPWPpemotong.slice(0, -1);
                return;
            }
            NPWPpemotong2.value = NPWPpemotong.replace(/(\d{2})(\d{3})(\d{3})(\d{1})(\d{3})(\d{3})/, '$1.$2.$3.$4-$5.$6');
        }

        function formatNpwp2(event) {
            formatnpwp = event.value
            formatnpwp2 = event
            if (!formatnpwp.match(/^[0-9./-]+$/i)) {
                alert('Angka saja')
                formatnpwp2.value = formatnpwp.slice(0, -1);
                return;
            }
            formatnpwp2.value = formatnpwp.replace(/(\d{2})(\d{3})(\d{3})(\d{1})(\d{3})(\d{3})/, '$1.$2.$3.$4-$5.$6');
        }

        function NPWPWajibPajak() {
            formatnpwp = document.getElementById('npwpWajibPajak').value
            formatnpwp2 = document.getElementById('npwpWajibPajak')
            if (typeof formatnpwp === 'string') {

            }
            formatnpwp2.value = formatnpwp.replace(/(\d{2})(\d{3})(\d{3})(\d{1})(\d{3})(\d{3})/, '$1.$2.$3.$4-$5.$6');
        }
    </script>
    @include('sweetalert::alert')
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    -->

</body>

</html>