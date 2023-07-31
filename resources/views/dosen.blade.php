<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <title>Daftar E-Form 1770</title>
    <style>
        .bg-grey {
            font-family: arial;
            background-color: #ccc;
        }

        thead tr {
            background-color: rgb(4, 153, 195)
        }

        thead tr th {
            color: #FFFFFF;
            font-size: 13px;
        }

        tbody tr td {
            background-color: #FFFFFF;
            font-size: 14px;
            text-align: center;
            font-weight: bold;
        }
    </style>
</head>

<body class="bg-grey" style="padding: 1% 10% 1% 10%">
    <div class="container" style="width : 90%; background-color: #fff">
        <div style="padding: 10px"></div>
        <table id="daftar_eform1770" class="table w-100 table-bordered table-hover">
            <thead>

                <tr>
                    <th style="text-align: center;">NAMA</th>
                    <th style="text-align: center;">E-FORM 1770</th>
                    <th style="text-align: center;">LAPORAN KEUANGAN</th>
                    <th style="text-align: center;">BUKTI POTONG</th>
                    <th style="text-align: center;">DOKUMEN LAINNYA</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td><button class="btn btn-primary btn-xs" style="font-size: 12px;">Lihat File
                        </button></td>
                    <td><button class="btn btn-primary btn-xs" style="font-size: 12px;">Lihat File
                        </button></td>
                    <td><button class="btn btn-primary btn-xs" style="font-size: 12px;">Lihat File
                        </button></td>
                </tr>
            </tbody>
        </table>
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
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <!-- <script src="http://kp.bkd.sidoarjokab.go.id/website/lib/DataTables-1.10.7/media/js/jquery.dataTables.js"></script> -->
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#daftar_eform1770').DataTable({
                "language": {
                    "url": "https://cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
                    "sEmptyTable": "Tidak ditemukan data"
                }
            });

        });
    </script>
</body>

</html>