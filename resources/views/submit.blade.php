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

    <title>Submit E-Form 1770</title>
    <style>
        body {
            font-family: arial;
            background-color: #ccc;
            padding: 1% 10% 1% 10%;
        }

        .container-fluid {
            width: 1000px;
            background-color: #fff;
            position: static;
        }

        th,
        td {
            border: 1px solid black;
            font-size: 12px;
            text-align: center;
            height: 30px;
        }

        input {
            width: 100%;

            border: 0;
            text-align: center;
            font-size: 14px;
        }

        select {
            width: 100%;
            font-size: 14px;
            border: 1px solid white
        }

        @media(min-width: 600px) {
            .container-fluid {
                width: 1000px;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div style="padding: 10px"></div>
        <div class="row" style="font-size: 12px; font-weight: bold; text-align:center">
            <div class="col-sm-2"><a href="/formulir1770/{{ $spt->id}}" class="btn btn-secondary" style="font-size: 11px; width: auto; height: 30px">Sebelumnya</a></div>
        </div>
        <div style="padding: 20px"></div>
        <div class="row" style="padding-left: 30px;">
            <div id="laporan_keuangan"><a href="{{ url('/download/'.$formsubmits['id'] ?? '' )}}?download=laporan_keuangan"><?= $formsubmits['laporan_keuangan'] ?? "" ?></a></div>
            <div class="col-sm-6">
                <form action="/SubmitFile/{{$formsubmit}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="file" name="laporan_keuangan" class="form-control" accept=".pdf">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-6">
                <p>Laporan Keuangan. File yang diunggah berjenis .pdf. <br>Maksimal 15 MB</p>
            </div>
        </div>
        <div class="row" style="padding-left: 30px;">
            <div id="bukti_potong"> <a href="{{ url('/download/'.$formsubmits['id'] ?? '' )}}?download=bukti_potong"> <?= $formsubmits['bukti_potong'] ?? "" ?> </a> </div>
            <div class="col-sm-6">
                <form action="/SubmitFile/{{$formsubmit}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="file" name="bukti_potong" class="form-control" accept=".pdf">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-6">
                <p>Bukti Potong. File yang diunggah berjenis .pdf. <br>Maksimal 15 MB</p>
            </div>
        </div>
        <div class="row" style="padding-left: 30px;">
            <div id="dokumen_lainnya"> <a href="{{ url('/download/'.$formsubmits['id'] ?? '' )}}?download=dokumen_lainnya"><?= $formsubmits['dokumen_lainnya'] ?? "" ?></a> </div>
            <div class="col-sm-6">
                <form action="/SubmitFile/{{$formsubmit}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="file" name="dokumen_lainnya" class="form-control" accept=".pdf">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-sm-6">
                <p>Dokumen Lainnya. File yang diunggah berjenis .pdf. <br>Maksimal 15 MB</p>
            </div>
        </div>

        <div style="margin-left: 30px;">
            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Import Data</button>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Import Data Harta</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/DataSetorPajakImport" method="POST" enctype="multipart/form-data">
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

        <form action="/SaveDataSubmit/{{$formsubmit}}" method="POST">
            @csrf
            <input type="hidden" name="counted" value="{{ count($data_submit)  }}">
            <table id="TblSubmit" width="95%" style="margin-left: 30px;">
                <thead>
                    <tr>
                        <th width="20%">KODE MAP</th>
                        <th width="20%">KODE JENIS SETOR</th>
                        <th width="20%">TANGGAL SPP/PBK</th>
                        <th width="20%">NILAI SPP/PBK</th>
                        <th width="20%">NTPN/PBK</th>
                        <th>HAPUS</th>
                    </tr>
                    @if (count($data_submit) == 0)
                    <tr>
                        <td><select name='kode_map[]' onchange="dropdown(this)" kode_setor='kode_setor0' id="kode_map0">
                                <option value="">Pilih</option>
                                @foreach ($kode_maps as $data)
                                <option value="{{$data->id}}">{{$data['akun_pajak']}}</option>
                                @endforeach
                            </select></td>
                        <td><select name='kode_setor[]' id="kode_setor0">
                                <!-- <option value="">Pilih</option> -->
                            </select></td>
                        <td><input type="date" name='tanggal_spp_pbk[]' id=""></td>
                        <td><input type="text" name='nilai_spp_pbk[]' oninput="format(this.value)" class="nilai_spp_pbk"></td>
                        <td><input type="text" name='ntpn_pbk[]'></td>
                        <td>
                            <div class="checkbox-container">
                                <input type="checkbox" name="setorpajak_id">
                            </div>
                        </td>
                    </tr>
                    @endif
                </thead>
                <tbody>
                    <?php $kodeid = 0;
                    ?>
                    @foreach ( $data_submit as $dh)
                    <tr>
                        <td><select name='kode_map[]' onchange="dropdown(this)" kode_setor="kode_setor<?= $kodeid ?>" id="kode_map<?= $kodeid  ?>" value="{{ $dh['kode_map'] }}">
                                <option value="">Pilih</option>
                                @foreach ($kode_maps as $data)
                                <option value="{{$data->id}}" @if ($data['id']==$dh['kode_map'] ) selected="selected" @endif>{{$data->akun_pajak}}</option>
                                @endforeach
                            </select></td>
                        <td><select name="kode_setor[]" id="kode_setor<?= $kodeid ?>">
                                <option value="{{ $dh['kode_setor'] }}">{{ $dh['kodesetor']['jenis_setor'] }}</option>
                            </select></td>
                        <td><input type="date" name='tanggal_spp_pbk[]' id="" value="{{ $dh['tanggal_spp_pbk'] }}"></td>
                        <td><input type="text" name='nilai_spp_pbk[]' value="{{ $dh['nilai_spp_pbk'] }}" oninput="format(this.value)" class="nilai_spp_pbk"></td>
                        <td><input type="text" name='ntpn_pbk[]' value="{{ $dh['ntpn_pbk'] }}"></td>
                        <td>
                            <div class="checkbox-container">
                                <input type="checkbox" name="setorpajak_id" value="{{ $dh['id'] }}">
                            </div>
                        </td>
                    </tr>
                    <?php $kodeid += 1 ?>
                    @endforeach
                </tbody>
            </table>
            <div style="padding: 10px;"></div>
            <table width="95%" style="margin-left: 30px;">
                <tr>
                    <th width="25%">NILAI KURANG BAYAR</th>
                    <th width="25%" style="background-color: #F0E68C">
                        <input type="text" class="form-control" disabled="true" readonly="readonly" style="background-color: #F0E68C; text-align: right; height:30px" name="nilai_kurangbayar" id="nilai_kurangbayar">
                    </th>
                    <th width="25%">JUMLAH SETOR</th>
                    <th width="25%" style="background-color: #F0E68C">
                        <input type="text" class="form-control" disabled="true" readonly="readonly" style="background-color: #F0E68C; text-align: right; height:30px" name="jumlah_setor" id="jumlah_setor">
                        <input type="hidden" name="formsubmit_id" value="{{ $formsubmit }}">
                        <input type="hidden" name="formspt" value="{{ $formspt }}">

                    </th>
                </tr>
            </table>
            <template id="rowTemplateSubmit" width="100%">
                <tr>
                    <td><select name='kode_map[]' onchange="dropdown(this)" id="kode_map">
                            <option value="">Pilih</option>
                            @foreach ($kode_maps as $data)
                            <option value="{{$data->id}}">{{$data->akun_pajak}}</option>
                            @endforeach
                        </select></td>
                    <td><select name='kode_setor[]' id="kode_setor">
                            <option value="">Pilih</option>
                        </select></td>
                    <td><input type="date" name='tanggal_spp_pbk[]' id=""></td>
                    <td><input type="text" name='nilai_spp_pbk[]' oninput="format(this.value)" class="nilai_spp_pbk"></td>
                    <td><input type="text" name='ntpn_pbk[]'></td>
                    <td>
                        <div class="checkbox-container">
                            <input type="checkbox" name="setorpajak_id">
                        </div>
                    </td>
                </tr>
            </template>
            <div style="margin-left: 30px;">
                <button type="button" onclick="addTableSubmit(this)">Tambah</button>
                <button type="button" onclick="deleteTableSubmit()">Hapus</button>
                <button type="button" id="" onclick="cekTableSubmit(this)">Simpan</button>
                <button type="submit" id="simpantablesubmit" style="display:none">Simpan</button>
            </div>
        </form>

        <div style="padding: 10px;"></div>
        <b style="padding: 30px">Silahkan submit jika Anda telah selesai mengisinya.</b>
        <div class="row" style="padding-left: 30px;">
            <!-- <div class="col-sm-2">Kode Verifikasi</div>
            <div class="col-sm-3"><input type="text" class="form-control"></div> -->
            <form action="/SubmitForm/{{$formspt}}" method="POST">
                @csrf

                <div class="col-sm-6">
                    <button type="submit" style="display: none;">Submit</button>
                </div>
                <div class="col-sm-6">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-bs-whatever="@mdo">Submit</button>
                    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Masukkan Email</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <div class="input-group mb-3">
                                            <input type="email" name="email" class="form-control" accept=".csv">
                                             <button class="btn btn-primary" type="submit">Simpan</button>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

        </div>
        <div style="padding: 20px"></div>
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
        $(document).ready(function() {
            format();
        });
        let sum = 0;
        let tmp = 0;
        let counted = 0;
        let tr = 1;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }

        });

        function dropdown(event) {
            let id_kodemap = $(event).val();
            // console.log(id_kodemap);
            let kode_setor = $(event).attr('kode_setor')
            $.ajax({
                type: 'POST',
                url: "{{route('getKodeSetor')}}",
                data: {
                    id_kodemap: id_kodemap
                },
                cache: false,

                success: function(msg) {
                    $(`#${kode_setor}`).html(msg);
                },
                error: function(data) {
                    console.log('error:', data)
                },
            })
        }

        function addTableSubmit($this) {
            var countdata = <?= count($data_submit) ?>,
                template = document.querySelector('#rowTemplateSubmit'),
                tbl = document.querySelector('#TblSubmit'),
                td_choice = template.content.querySelectorAll("td"),
                last_td = $('#TblSubmit tr:last'),
                tr_count = tbl.rows.length;
            id = (countdata + counted);
            td_choice[0].querySelector('select').setAttribute('id', `kode_map${id}`);
            td_choice[0].querySelector('select').setAttribute('kode_setor', `kode_setor${id}`);
            td_choice[1].querySelector('select').setAttribute('id', `kode_setor${id}`);
            console.log(td_choice[0], counted);
            var kode_map = last_td.find('td:eq(0)').find('input').val();
            var kode_setor = last_td.find('td:eq(1)').find('input').val();
            var tanggal_spp_pbk = last_td.find('td:eq(2)').find('input').val();
            var nilai_spp_pbk = last_td.find('td:eq(3)').find('input').val();
            var ntpn_pbk = last_td.find('td:eq(4)').find('input').val();
            if (kode_map === '' || kode_setor === '' || tanggal_spp_pbk === '' || nilai_spp_pbk === '' || ntpn_pbk === '') {
                Swal.fire({
                    icon: 'error',
                    title: '',
                    text: 'Mohon Melengkapi Row Sebelumnya',
                })
                return
            }
            td_choice.textContent = tr_count;
            var clone = document.importNode(template.content, true);
            tbl.appendChild(clone);
            format();
            counted += 1
            return
        }

        function deleteTableSubmit(nama) {
            var checkboxes = document.getElementsByName("dataharta_id");
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
                        url: 'http://localhost:8000/DataSubmit/delete',
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

        function cekTableSubmit($this) {
            var countdata = <?= count($data_submit) ?>,
                template = document.querySelector('#rowTemplateSubmit'),
                tbl = document.querySelector('#TblSubmit'),
                td_choice = template.content.querySelectorAll("td"),
                last_td = $('#TblSubmit tr:last'),
                tr_count = tbl.rows.length;

            var kode_map = last_td.find('td:eq(0)').find('input').val();
            var kode_setor = last_td.find('td:eq(1)').find('input').val();
            var tanggal_spp_pbk = last_td.find('td:eq(2)').find('input').val();
            var nilai_spp_pbk = last_td.find('td:eq(3)').find('input').val();
            var ntpn_pbk = last_td.find('td:eq(4)').find('input').val();
            if (kode_map === '' || kode_setor === '' || tanggal_spp_pbk === '' || nilai_spp_pbk === '' || ntpn_pbk === '') {
                Swal.fire({
                    icon: 'error',
                    title: '',
                    text: 'Mohon Melengkapi Row Sebelumnya',
                })
                return
            }
            const myElement = document.getElementById("simpantablesubmit").click();
        }
        countdata = <?= count($data_submit) ?>;

        function format() {
            $('.nilai_spp_pbk').each(function() {
                if (this.value.length > 0 && this.value != 0) {
                    tmp2 = getNumPrice(this.value, '.');
                    this.value = numeral(this.value).format();
                    tmp += parseFloat(tmp2)
                } else {
                    tmp += 0
                }
            });
            sum = tmp
            $('#nilai_kurangbayar').val(numeral(sum).format());
            $('#jumlah_setor').val(numeral(sum).format());
            tmp = 0;
        }

        function getNumPrice(price, decimalpoint) {
            var p = price.split(decimalpoint);
            for (var i = 0; i < p.length; i++) p[i] = p[i].replace(/\D/g, '');
            return p.join('.');
        }
    </script>
    @include('sweetalert::alert')
</body>

</html>