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

    <title>PP46/23</title>
</head>

<body>
    <div class="container-fluid">
        <div style="padding: 10px"></div>
        <div class="row" style="font-size: 12px; font-weight: bold; text-align:center">
            <div class="col-sm-5"><a href="/formulir-III/{{ $spt->id}}" class="btn btn-secondary" style="font-size: 12px; width: 120px; height: 30px">Sebelumnya</a></div>
            <div class="col-sm-7"><a href="/formulir-II/{{ $spt->id}}" class="btn btn-secondary" style="font-size: 12px; width: 120px; height: 30px">Selanjutnya</a></div>
            <b style="padding: 10px;">DAFTAR JUMLAH PENGHASILAN BRUTO DAN PEMBAYARAN PPh FINAL BERDASARKAN PP 46 TAHUN 2013 DAN ATAU PP 23 TAHUN 2018
                </br>PER MASA PAJAK SERTA DARI MASING-MASING TEMPAT USAHA</b>
        </div>
        <div style="padding: 5px;"></div>
        <div class="col-sm-11.5" style=" border: 1px solid black; background-color: #F0E68C ; padding: 4px 20px 10px 10px ; height: auto; border: 2px solid; margin-left: 10px">
            <div class="row">
                <label class="col-sm-4 col-form-label" style="font-size: 12px;">NPWP</label>
                <div class="col-sm-8">
                    <input class="form-control" type="text" style="border: 1px solid black; height: 30px; border-radius: 1px; " value="{{ $npwp }}" disabled="disabled" id="npwpWP">
                </div>
            </div>
            <div class="row">
                <label class="col-sm-4 col-form-label" style="font-size: 12px;">NAMA WAJIB PAJAK</label>
                <div class="col-sm-8">
                    <input class="form-control" type="text" style="border: 1px solid black; height: 30px; border-radius: 1px;" value="{{ $nama }}" disabled="disabled">
                </div>
            </div>
        </div>

        <div style="padding: 10px;"></div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Import Daftar PP4623</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/DataDaftar4623Import" method="POST" enctype="multipart/form-data">
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
        <form action="/SaveDataPP4623/{{$pp4623}}" method="POST">
            @csrf
            <input type="hidden" name="counted" value="{{ count($datadaftarpp4623)  }}">
            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Import Data</button>

            <table id="PP46_23" class="display">
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
                    <th style="border: 1px solid black; font-size: 12px; font-weight: bold; text-align: center; width: 20%">
                        HAPUS</th>
                </tr>
                @if (count($datadaftarpp4623) == 0)
                <tr>
                    <td style="border: 1px solid black;"><input name="npwp[]" type="text" style="border: 1px solid white; font-size: 14px; text-align: center; width: 100%; height: 30px" maxlength="20" oninput="formatNpwp2(this)" id="formatnpwpfix"></td>
                    <td style="border: 1px solid black;"><select name='masa_pajak[]' style="width:100%; height:30px; border: 1px solid white">
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
                    <td style="border: 1px solid black;"><input name="alamat[]" type="text" style="border: 1px solid white; font-size: 14px; width:100%; height: 30px; text-align:center; text-transform:uppercase"></td>
                    <td style="border: 1px solid black;"><input name="peredaran_bruto[]" type="text" style="border: 1px solid white; font-size: 14px; text-align: center; width:100%; height: 30px" oninput="formatperedaranbruto(this.value)" class="peredaranbruto"></td>
                    <td style="border: 1px solid black;"><input name="jumlahPPhFinal_dibayar[]" type="text" style="border: 1px solid white; font-size: 14px; text-align: center; width:100%; height: 30px" oninput="formatJmlPPhFinalDibayar(this.value)" class="jumlahPPhFinalYangDibayar"></td>
                    <td>
                        <div class="checkbox-container">
                            <input type="checkbox" name="pp4623_id">
                        </div>
                    </td>
                </tr>
                @endif
                <tbody>
                    @foreach ( $datadaftarpp4623 as $dh )
                    <tr>
                        <td style="border: 1px solid black;"><input name="npwp[]" type="text" value="{{ $dh['npwp'] }}" style="border: 1px solid white; font-size: 14px; text-align: center; width: 100%; height: 30px" maxlength="20" oninput="formatNpwp2(this)" id="formatnpwpfix"></td>
                        <td style="border: 1px solid black;"><select name='masa_pajak[]' style="width:100%; height:30px; border: 1px solid white">
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
                        <td style="border: 1px solid black;"><input name="alamat[]" type="text" value="{{ $dh['alamat'] }}" style="border: 1px solid white; font-size: 14px; text-align:center; width:100%; height: 30px; text-transform:uppercase"></td>
                        <td style="border: 1px solid black;"><input name="peredaran_bruto[]" type="text" value="{{ $dh['peredaran_bruto'] }}" style="border: 1px solid white; font-size: 14px; text-align: center; width:100%; height: 30px" oninput="formatperedaranbruto(this.value)" class="peredaranbruto"></td>
                        <td style="border: 1px solid black;"><input name="jumlahPPhFinal_dibayar[]" type="text" value="{{ $dh['jumlahPPhFinal_dibayar'] }}" style="border: 1px solid white; font-size: 14px; text-align: center; width:100%; height: 30px" oninput="formatJmlPPhFinalDibayar(this.value)" class="jumlahPPhFinalYangDibayar"></td>
                        <td>
                            <div class="checkbox-container">
                                <input type="checkbox" name="pp4623_id" value="{{ $dh['id'] }}">
                            </div>
                        </td>
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
            <button type="button" onclick="addTablePP46_23(this)">Tambah</button>
            <button type="button" onclick="deleteTablePP46_23('PP46_23')">Hapus</button>
            <button type="button" id="cektablePP4623" onclick="cekTablePP4623(this)">Simpan</button>
            <button type="submit" id="simpantablePP4623" style="display:none">Simpan</button>

            <template id="rowTemplatePP46_23">
                <tr>
                    <td style="border: 1px solid black;"><input name="npwp[]" type="text" style="border: 1px solid white; font-size: 14px; text-align: center; width: 100%; height: 30px" maxlength="20" oninput="formatNpwp2(this)" id="formatnpwpfix"></td>
                    <td style="border: 1px solid black;"><select name='masa_pajak[]' style="width:100%; height:30px; border: 1px solid white">
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
                    <td style="border: 1px solid black;"><input name="alamat[]" type="text" style="border: 1px solid white; font-size: 14px; text-align:center; width:100%; height: 30px; text-transform:uppercase"></td>
                    <td style="border: 1px solid black;"><input name="peredaran_bruto[]" type="text" style="border: 1px solid white; font-size: 14px; text-align: center; width:100%; height: 30px" oninput="formatperedaranbruto(this.value)" class="peredaranbruto"></td>
                    <td style="border: 1px solid black;"><input name="jumlahPPhFinal_dibayar[]" type="text" style="border: 1px solid white; font-size: 14px; text-align: center; width:100%; height: 30px" oninput="formatJmlPPhFinalDibayar(this.value)" class="jumlahPPhFinalYangDibayar"></td>
                    <td>
                        <div class="checkbox-container">
                            <input type="checkbox" name="pp4623_id">
                        </div>
                    </td>
                </tr>
            </template>
        </form>

        <div style="padding: 10px;">

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
        let counted = 0;
        $(document).ready(function() {
            formatperedaranbruto();
            formatJmlPPhFinalDibayar();
            npwpWP();
        });



        function formatNpwp2(event) {
            formatnpwp = event.value
            formatnpwp2 = event
            if (!formatnpwp.match(/^[0-9./-]+$/i)) {
                // alert('Angka saja')
                Swal.fire({
                    icon: 'error',
                    text: 'Isi angka saja',
                })
                formatnpwp2.value = formatnpwp.slice(0, -1);
                return;
            }
            formatnpwp2.value = formatnpwp.replace(/(\d{2})(\d{3})(\d{3})(\d{1})(\d{3})(\d{3})/, '$1.$2.$3.$4-$5.$6');
        }

        function npwpWP() {
            npwpWP = document.getElementById('npwpWP').value
            npwpWP2 = document.getElementById('npwpWP')
            if (typeof npwpWP === 'string') {

            }
            npwpWP2.value = npwpWP.replace(/(\d{2})(\d{3})(\d{3})(\d{1})(\d{3})(\d{3})/, '$1.$2.$3.$4-$5.$6');
        }

        function addTablePP46_23($this) {
            var countdata = <?= count($datadaftarpp4623) ?>,
                template = document.querySelector('#rowTemplatePP46_23'),
                tbl = document.querySelector('#PP46_23'),
                td_choice = template.content.querySelectorAll("td"),
                last_td = $('#PP46_23 tr:last'),
                tr_count = tbl.rows.length;
            var npwp = last_td.find('td:eq(0)').find('input').val()
            var masa_pajak = last_td.find('td:eq(1)').find('option:selected').val();
            var alamat = last_td.find('td:eq(2)').find('input').val();
            var peredaran_bruto = last_td.find('td:eq(3)').find('input').val();
            var jumlahPPhFinal_dibayar = last_td.find('td:eq(4)').find('input').val();
            if (npwp === '' || masa_pajak === 'pilih' || alamat === '' ||
                peredaran_bruto === '' || jumlahPPhFinal_dibayar === '') {
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
                formatperedaranbruto();
                formatJmlPPhFinalDibayar();

                counted += 1
                return
            }
            var data = {
                npwp: npwp,
                masa_pajak: masa_pajak,
                alamat: alamat,
                peredaran_bruto: peredaran_bruto,
                jumlahPPhFinal_dibayar: jumlahPPhFinal_dibayar
            }


            td_choice.textContent = tr_count;
            var clone = document.importNode(template.content, true);
            tbl.appendChild(clone);
            formatperedaranbruto();
            formatJmlPPhFinalDibayar();
        }

        function cekTablePP4623($this) {
            var countdata = <?= count($datadaftarpp4623) ?>,
                template = document.querySelector('#rowTemplatePP46_23'),
                tbl = document.querySelector('#PP46_23'),
                td_choice = template.content.querySelectorAll("td"),
                last_td = $('#PP46_23 tr:last'),
                tr_count = tbl.rows.length;
            var npwp = last_td.find('td:eq(0)').find('input').val()
            var masa_pajak = last_td.find('td:eq(1)').find('option:selected').val();
            var alamat = last_td.find('td:eq(2)').find('input').val();
            var peredaran_bruto = last_td.find('td:eq(3)').find('input').val();
            var jumlahPPhFinal_dibayar = last_td.find('td:eq(4)').find('input').val();
            if (npwp === '' || masa_pajak === 'pilih' || alamat === '' || peredaran_bruto === '' || jumlahPPhFinal_dibayar === '') {
                Swal.fire({
                    icon: 'error',
                    title: '',
                    text: 'Mohon Melengkapi Row Sebelumnya',
                })
                return
            }
            const myElement = document.getElementById("simpantablePP4623").click();

        }

        countdata = <?= count($datadaftarpp4623) ?>;

        function deleteTablePP46_23() {
            var checkboxes = document.getElementsByName("pp4623_id");
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
                        url: 'http://localhost:8000/Datapp46danpp23/delete',
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

        function formatperedaranbruto() {
            $('.peredaranbruto').each(function() {
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
            $('#hasilPbruto').val(numeral(sum).format());
            tmp = 0;
        }

        function formatJmlPPhFinalDibayar() {
            $('.jumlahPPhFinalYangDibayar').each(function() {
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
            $('#hasilPPhFinal').val(numeral(sum).format());
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