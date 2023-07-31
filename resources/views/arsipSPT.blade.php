<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
  <link rel="icon" type="image/png" href="taxcentre.png">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Arsip SPT</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      padding: 0;
      font-family: arial;
      font-size: 16px;
      line-height: 1.6;
      background-image: url("{{ asset('poltek4.jpeg') }}");
      background-repeat: no-repeat;
      background-size: cover;
    }

    header {
      background-color: rgba(0, 0, 0, 0.7);
    }

    header span {
      color: rgb(255, 157, 49)
    }

    .content {
      padding-top: 10px;
      padding-left: 250px;
      padding-right: 250px;
      height: auto;
    }

    .card-box {
      width: 840px;
      background-color: #f5f5f5;
      padding: 18px 20px 10px 20px;
      height: auto
    }

    .card-tab {
      background-color: rgb(255, 157, 49);
      border-radius: 8px 8px 8px 8px;
      box-shadow: 2px 2px 2px 2px lightgrey;
      padding: 10px 10px 10px 10px
    }

    .nav-tabs {
      height: 40px;
      border-bottom: 0px
    }

    .card-box2 {
      background-color: #FFFFFF;
      border-radius: 8px 8px 0px 0px
    }

    .navbar-expand-lg {
      background-color: #191970;
      font-variant: normal;
    }

    .nav-link {
      color: #FFFFFF;
    }

    .container {
      max-width: 1000px;
      margin: 20px auto;
    }

    .title_1 {
      background-color: rgb(4, 153, 195);
      height: 40px;
      padding: 10px 0px 0px 10px;
      border-radius: 8px 8px 0px 0px
    }

    .title_1 span {
      color: #FFFFFF;
      font-weight: bold;
    }

    thead tr {
      background-color: rgb(4, 153, 195)
    }

    thead tr th {
      color: #FFFFFF;
      font-size: 9px;
      text-align: center;
    }

    tbody tr td {
      background-color: #FFFFFF;
      font-size: 12px;
      text-align: center;
      font-weight: bold;
    }

    .media-social {
      font-size: 18px;
      display: inline-block;
      background: #ffb727;
      color: #fff;
      line-height: 1;
      padding: 8px 0;
      margin-right: 4px;
      border-radius: 50%;
      text-align: center;
      width: 36px;
      height: 36px;
    }

    .media-social i {
      color: #FFF;
    }

    .copyright {
      font-size: 12px;
      color: #FFF;
      padding-top: 30px;
    }

    .tab_container_wrap input {
      position: absolute;
      width: 0;
      height: 0;
      margin: 0;
      z-index: -100;
      top: -1000px;
    }

    .tab_container_wrap input:checked+.tab_content_box {
      display: block;
    }

    .tab_content_box {
      background: #F5F5F5;
      padding: 20px;
      display: none;
    }

    .tab_content_box:nth-child(1) {
      background: #f0f0f0;

    }

    .tab_content_box:nth-child(2) {
      background: #f0f0f0;
    }


    .tab_content_box h2 {
      margin: 0 0 20px;
    }

    .disabled-link {
      pointer-events: none;
      color: gray;
      text-decoration: none;
    }
  </style>
</head>

<body>
  <div>
    <header class="mb-3 border-bottom">
      <div class="container-fluid d-grid gap-3 align-items-center" style="grid-template-columns: 1fr 2fr;"><img src="{{ asset('taxcentre1.png') }}" alt="" srcset="">
        <div class="d-flex align-items-center">
          <form class="w-100 me-3">
          </form>
          <div class="flex-shrink-0 dropdown">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
              <span>{{ $nama }} &nbsp;</span>
              <!-- <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle"> -->
              <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABkAAAAZCAYAAADE6YVjAAAACXBIWXMAAAsTAAALEwEAmpwYAAABL0lEQVR4nOXTMUoDQRQG4BWtjV5AL2Ay7+2CrQYE8QB2IRaJSS0Woo13EBGWebOBiAhewVSpNK2CuYCI8Q75RaMBJW52ZqcJPvibKfabf3YmCP7d4HRjAaLK0LQHrTZxszvvF0iiIgz3YRjjCD1BSmt+gIviMoRefgDj0DNaaik/YuhwMsDfOfCBtNMRaudHhM6nIGc+mmylIqLKuZFRG9aTAYq9AJ8IgjmI2ofhewi/QugOhmof68HMDaTE0NyE8BFM2EBLkb+PG9qB4cc/fvwDknA75+7pBMLD9NvFQ2g6dm1QnfLS8SsVOyCOCjD0ZoUID3C5vmjRImxYtsDX66/ZHNW1G8JX2RGhrhMi1LVAuOeGcM/muDqOyK1Nk1UkVB9dgIxJqI44WsmMzOS8AyPtL+e6fM6uAAAAAElFTkSuQmCC">
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
              <li><a class="dropdown-item" href="signout">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <div class="content">
      <div class="card-box">
        <nav class="card-tab">
          <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a style="border-radius: 2px 30px 2px 30px; height:40px; padding: 8px 20px; text-align: center;" href="{{url('/arsipSPT')}}" class="nav-link active" type="button">Arsip SPT</a>
            <a style="border-radius: 2px 30px 2px 30px; height:40px; padding: 8px 20px; text-align: center;" href="{{url('/buatSPT')}}" class="nav-link" type="button">Buat SPT</a>
            <div align="right" class="col-sm-8">
              <img src="{{ asset('form.jpg') }}" width="100px">
            </div>
          </div>
        </nav>
        <div class="card-box2">
          <div class="tab-content" id="nav-tabContent" style="margin-top: 20px;">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
              <div class="table title_1">
                <span>
                  <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAXCAYAAADgKtSgAAAABmJLR0QA/wD/AP+gvaeTAAABD0lEQVRIib3VMUvDQBjG8f+rCXUQFDengk6C0FGKq7tfQbr0q/gRRHBydHLXwSVbp3ZydHBx0E2qto9DFOS8nvcm1AeyvJf7vZccucASY2FB0hpwDGwk5s3M7MLdTdK5/s6rpANJuylrJVLbz1zHNnArqevBPekCd4saNMVL4Am4B2bAmaT18KbYhlZAP6PBzdf1nUczu0zOkFRlbGgsVWi1fefJFImxB+AjqG0Bm23xKXBKvVk/0wdO2uIdYMjvlQOMIkbPg78BVwvwmLHnwUvgyIGXHvyd+vFz8UMPXgA7DnzVg8+BZwc+9+AFMMiAk1nqF/rv+KShNQ4LsSO3Q/0PzT5DgBfg2symDRfmzydLjp+KLkhQbQAAAABJRU5ErkJggg==">
                  Daftar SPT
                </span>
              </div>
              <div style="padding: 0px 20px ;">
                <table id="TabelArsipSPT" class="table w-100 table-bordered table-hover">
                  <div style="padding: 10px;"></div>
                  <thead>
                    <tr>
                      <th>N0</th>
                      <th>JENIS SPT</th>
                      <th>TAHUN/MASA PAJAK</th>
                      <th>PEMBETULAN KE</th>
                      <th>STATUS</th>
                      <th>JUMLAH</th>
                      <th>SUMBER</th>
                      <th>AKSI</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 0; ?>
                    @foreach ($form as $row)
                    <tr>
                      <td scope="row">{{ $i+=1 }}</td>
                      <td>SPT 1770</td>
                      <td>{{ $row['tahun'] }}/01-12</td>
                      <td>{{ $row['pembetulan']}}</td>
                      <td>{{ $row['status']}}</td>
                      <td>{{ $row['jumlah'] ?? 0}}</td>
                      <td>E-Form 1770</td>
                      <td><a class="btn <?php if($row['cek_submit']) { ?>disabled-link <?php } ?>" href="formulir-IV/{{ $row['id']}}" <?php if($row['cek_submit']) { ?>disabled <?php } ?>>
                          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAoElEQVR4nNXTSwpBYRgG4GemmBpZgg3YhEvZgV1wnIlcFmBkI0oxoOzBLgyRCSmDf+B0Lije+gbf5Onv7/345UQ4ZphNGrTFLeOUPwlV34WGqOOCUVEowhRLdDEvAkWYBfvL16RBMcbBvkMlLxRjkhVJghboBfsabZTyQi10sAqQU94endHEHrUAyV3IAxroP8/i+q1mS8og49E+/uoPcgezcIvoozDVWgAAAABJRU5ErkJggg==">

                        </a>
                        <a class="btn" href="formulir_print/{{ $row['id']}}?download=pdf">
                          <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAmUlEQVR4nO3UPwrCMBiH4Udw092D9AKexr2DeAUnz+BFlIKbCnoBcfUUrRQqFGmaturmCz/Iny9vQgLhR8yQYhVJWtUGOaPomGObKG9YsMO+YbysDdK08wXXwFwvUdGSv8j37+iBDdZv6S1KMMeilmSIaIRbrZ9hMkRUcq/aB0xFyCOiLHaSF6cW0barpKT8GpaB1xl3lXzEE0Q8l4vjjj5xAAAAAElFTkSuQmCC">
                        </a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div style="padding: 20px;"></div>
  <div class="shadow-sm " id="footer" style="background-color: rgba(0,0,0,0.7); height:auto">
    <div>
      <div align="center" class="col-sm-3">
        <img src="{{ asset('taxcentre.png') }}" alt="">
      </div>
      <div align="center" class="col-sm-4">
        <span style="color: #FFF;"> <i>Alamat</i> </span>
        <div align="left" class="col-sm-8">
          <span style="color: #FFF;"><i>Jl. Ahmad Yani Batam Kota. Kota Batam. <br> kepulauan Riau.
              Indonesia</i> </span>
        </div>
        <div align="left" class="col-sm-8">
          <span style="color: #FFF;"><i><br> Email : info@polibatam.ac.id <br>Phone : +62-778-469858 Ext.1017
              <br>Fax : +62-778-463620 <br>
              Email : info@polibatam.ac.id</i> </span>
        </div>
      </div>
      <div align="center" class="col-sm-12">
        <span style="color: #FFF; font-size: 36px; font-family:'Satisfy',serif;"> <i>Tax Center</i> </span>
      </div>
      <div align="center" class="col-sm-12">
        <span style="color: #FFF; font-size: 14px"> <i>Politeknik Negeri Batam</i> </span>
      </div>
    </div>
    <div align="center" class="col-sm-12" style="padding-top: 30px;">
      <div class="media-social">
        <a href=""><i class="fa-brands fa-twitter"></i></a>
      </div>
      <div class="media-social">
        <a href=""><i class="fa-brands fa-facebook-f"></i></a>
      </div>
      <div class="media-social">
        <a href=""><i class="fa-brands fa-instagram"></i></i></a>
      </div>
      <div class="media-social">
        <a href=""><i class="fa-brands fa-skype"></i></a>
      </div>
      <div class="media-social">
        <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
      </div>
    </div>

    <div align="center" class="col-sm-12">
      <div class="copyright">
        <i class="fa-regular fa-copyright"></i> Copyright
        <strong>Polibatam Software Team</strong>
        All Rights Reserved
      </div>
    </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <!-- <script src="http://kp.bkd.sidoarjokab.go.id/website/lib/DataTables-1.10.7/media/js/jquery.dataTables.js"></script> -->
  <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#TabelArsipSPT').DataTable({
        "language": {
          "url": "https://cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
          "sEmptyTable": "Tidak ditemukan data"
        }
      });

    });
  </script>
  <script>
    function nav() {
      document.getElementById("nav-home-tab").classList.toggle("active");;
    }
  </script>
  @include('sweetalert::alert')

</body>

</html>