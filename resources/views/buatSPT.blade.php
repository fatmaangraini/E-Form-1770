<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <link rel="icon" type="image/png" href="taxcentre.png">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <title>Buat SPT</title>
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
      padding-bottom: 100px;
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


    .text {
      font-size: 11px;
      font-family: Arial;
      text-align: center;
    }

    .text1 {
      font-size: 14px;
      font-family: Arial;
      text-align: center;
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
  </style>
</head>

<body>
  <div>
    <!-- Header -->
    <header class=" mb-3 border-bottom">
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
              <li><a class="dropdown-item" href="#">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <!-- Akhir Header -->
    <div class="content">
      <div class="card-box">
        <nav class="card-tab">
          <div class="nav nav-tabs" id="nav-tab" role="tablist" style="height:40px ; border-bottom:0px">
            <a style="border-radius: 2px 30px 2px 30px; height:40px; padding: 8px 20px; text-align: center;" href="{{url('/arsipSPT')}}" class="nav-link " type="button">Arsip SPT</a>
            <a style="border-radius: 2px 30px 2px 30px; height:40px; padding: 8px 20px; text-align: center;" href="{{url('/buatSPT')}}" class="nav-link active" type="button">Buat SPT</a>
            <img src="{{ asset('form.jpg') }}" style="height: 100%; margin-left: 670px; margin-top: -40px;">
          </div>
        </nav>
        <div class="card-box2">
          <div class="tab-content" id="nav-tabContent" style="margin-top: 20px;">

            <div class="table" style="background-color: rgb(4, 153, 195); height: 40px; padding: 10px 0px 0px 10px; border-radius: 8px 8px 0px 0px">
              <span style="color: #FFFFFF; font-weight: bold;">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAAAXCAYAAADgKtSgAAAABmJLR0QA/wD/AP+gvaeTAAABD0lEQVRIib3VMUvDQBjG8f+rCXUQFDengk6C0FGKq7tfQbr0q/gRRHBydHLXwSVbp3ZydHBx0E2qto9DFOS8nvcm1AeyvJf7vZccucASY2FB0hpwDGwk5s3M7MLdTdK5/s6rpANJuylrJVLbz1zHNnArqevBPekCd4saNMVL4Am4B2bAmaT18KbYhlZAP6PBzdf1nUczu0zOkFRlbGgsVWi1fefJFImxB+AjqG0Bm23xKXBKvVk/0wdO2uIdYMjvlQOMIkbPg78BVwvwmLHnwUvgyIGXHvyd+vFz8UMPXgA7DnzVg8+BZwc+9+AFMMiAk1nqF/rv+KShNQ4LsSO3Q/0PzT5DgBfg2symDRfmzydLjp+KLkhQbQAAAABJRU5ErkJggg==">
                Formulir SPT
              </span>
            </div>
            <div id="form1">
              <label style="margin-left: 20px">Apakah Anda Menjalankan Usaha atau Pekerjaan Bebas?</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" style="margin-left: 0px" value="11" onchange="handleChange(this);" name="form1" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault" style="margin-left: 10px">
                  Ya
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" style="margin-left: 0px" value="" onchange="handleChange2(this);" name="form1" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked" style="margin-left: 10px">
                  Tidak
                </label>
              </div>
              <div style="padding: 8px;"></div>
              <button class="rounded-pill w-40 h-10 btn-warning text-dark btn" style="display:none; margin-left: 10px;" id="eformspt" onclick="changeForm(this)">E-form SPT Tahunan orang pribadi formulir
                1770</button>
            </div>
            <div id="form3" style="display:none">
              <label style="margin-left: 20px ;">Apakah Anda seorang Suami atau Istri yang menjalankan kewajiban perpajakan terpisah
                (MT) atau Pisah Harta (PH)</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" style="margin-left: 0px" value="11" onchange="handleChange3(this);" name="form3" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault" style="margin-left: 10px">
                  Ya
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" style="margin-left: 0px" value="" onchange="handleChange4(this);" name="form3" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked" style="margin-left: 10px">
                  Tidak
                </label>
              </div>
              <div style="padding: 8px;"></div>
              <button class="rounded-pill w-40 h-10 btn-warning text-dark btn" style="display:none; margin-left: 10px;" id="eformspt" onclick="changeForm(this)">E-form SPT Tahunan orang pribadi formulir
                1770</button>
            </div>
            <div id="form4" style="display:none">
              <label style="margin-left: 20px ;">Anda Dapat Menggunakan Formulir 1770 S, pilihlah form yang akan digunakan</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" style="margin-left: 0px" value="11" onchange="handleChange5(this);" name="form4" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault" style="margin-left: 10px">
                  Dengan bentuk formulir
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" style="margin-left: 0px" value="" onchange="handleChange6(this);" name="form4" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked" style="margin-left: 10px">
                  Dengan panduan
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" style="margin-left: 0px" value="" onchange="handleChange7(this);" name="1" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked" style="margin-left: 10px">
                  Dengan upload SPT
                </label>
              </div>
              <div style="padding: 8px;"></div>
              <button class="rounded-pill w-40 h-10 btn-warning text-dark btn" style="display:none; margin-left: 10px;" id="eformspt" onclick="changeForm(this)">E-form SPT Tahunan orang pribadi formulir
                1770</button>
            </div>
            <div id="form5" style="display:none">
              <label style="margin-left: 20px ;">Apakah Penghasilan Bruto Yang Anda Peroleh selama setahun Kurang dari 60 Juta Rupiah?</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" style="margin-left: 0px" value="11" onchange="handleChange5(this);" name="form5" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault" style="margin-left: 10px">
                  Ya
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" style="margin-left: 0px" value="" onchange="handleChange6(this);" name="form5" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked" style="margin-left: 10px">
                  Tidak
                </label>
              </div>

              <div style="padding: 8px;"></div>
              <button class="rounded-pill w-40 h-10 btn-warning text-dark btn" style="display:none; margin-left: 10px;" id="eformspt" onclick="changeForm(this)">E-form SPT Tahunan orang pribadi formulir
                1770</button>
              <button class="rounded-pill w-40 h-10 btn-warning text-dark btn" style="display:none; margin-left: 10px;" id="spt1770ss" onclick="changeForm(this)">SPT 1770 SS
              </button>
            </div>
            <div id="form6" style="display:none">
              <label style="margin-left: 20px ;">Anda Dapat Menggunakan Formulir 1770 S, pilihlah form yang akan digunakan</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" style="margin-left: 0px" value="11" onchange="handleChange5(this);" name="form4" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault" style="margin-left: 10px">
                  Dengan bentuk formulir
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" style="margin-left: 0px" value="" onchange="handleChange6(this);" name="form4" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked" style="margin-left: 10px">
                  Dengan panduan
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" style="margin-left: 0px" value="" onchange="handleChange7(this);" name="form4" id="flexCheckChecked">
                <label class="form-check-label" for="flexCheckChecked" style="margin-left: 10px">
                  Dengan upload SPT
                </label>
              </div>
              <div style="padding: 8px;"></div>
              <button class="rounded-pill w-40 h-10 btn-warning text-dark btn" style="display:none; margin-left: 10px;" id="eformspt" onclick="changeForm(this)">E-form SPT Tahunan orang pribadi formulir
                1770</button>
            </div>
            <form action="{{ url('prosestambahspt') }}" method="POST">
              @csrf
              <div id="form2" style="display: none; ">
                <div class="form-group" style="padding: 0 25%;">

                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Tahun Pajak</label>
                    <select name="tahun" class="form-select" aria-label="Default select example">
                      <option selected>Tahun</option>
                      <option value="2010">2010</option>
                      <option value="2011">2011</option>
                      <option value="2012">2012</option>
                      <option value="2013">2013</option>
                      <option value="2014">2014</option>
                      <option value="2015">2015</option>
                      <option value="2016">2016</option>
                      <option value="2017">2017</option>
                      <option value="2018">2018</option>
                      <option value="2019">2019</option>
                      <option value="2020">2020</option>
                      <option value="2021">2021</option>
                      <option value="2022">2022</option>
                      <option value="2023">2023</option>

                    </select>
                  </div>
                  <div class="mb-3">
                    <label name="status_spt" for="" class="form-label">Status SPT</label>
                    <br>
                    <div class="form-check" style="display:inline-block;">
                      <input style="display:inline;" class="form-check-input" type="radio" name="status_spt" id="flexRadioDisabled" value="Normal" onclick="Normal()">
                      <label class="form-check-label" for="flexRadioDisabled">
                        Normal
                      </label>
                    </div>
                    <div class="form-check" style="display:inline-block;">
                      <input class="form-check-input" type="radio" name="status_spt" id="flexRadioCheckedDisabled" value="Pembetulan" onclick="Pembetulan()">
                      <label class="form-check-label" for="flexRadioCheckedDisabled">
                        Pembetulan
                      </label>
                    </div>
                  </div>
                  <script>
                    function Normal(src) {
                      const myElement = document.getElementById("pembetulan");
                      myElement.style.display = "none";

                      document.getElementById("pembetulan_disabled").style.display = "block";
                    }

                    function Pembetulan(src) {
                      const myElement = document.getElementById("pembetulan_disabled");
                      myElement.style.display = "none";

                      document.getElementById("pembetulan").style.display = "block";

                    }
                  </script>
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Pembetulan ke</label>
                    <input id="pembetulan" style="display: none;" name="pembetulan" type="number" class="form-control">
                    <input id="pembetulan_disabled" name="pembetulan" type="number" class="form-control" disabled>
                    <!-- <input class="form-check-input" type="radio" value="" name="1" id="flexCheckChecked"> -->
                    <!-- <label class="form-check-label" for="flexCheckChecked">
                      Hanya kirim token
                    </label> -->
                  </div>
                  <div class="mb-3">
                    <label for="" class="form-label">Media Pengiriman </label>
                    <br>
                    <div class="form-check" style="display:inline-block;">
                      <input style="display:inline;" class="form-check-input" type="radio" name="media_pengiriman_token" id="flexRadioDisabled" value="email">
                      <label class="form-check-label" for="flexRadioDisabled">
                        Email
                      </label>
                    </div>
                    <!-- <div class="form-check" style="display:inline-block;">
                      <input class="form-check-input" type="radio" name="media_pengiriman_token" id="flexRadioCheckedDisabled" value="nomor_hp">
                      <label class="form-check-label" for="flexRadioCheckedDisabled">
                        Nomor Handphone
                      </label>
                    </div> -->
                  </div>
                  <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Email</label>
                    <input id="email" name="email" type="text" class="form-control">
                  </div>
                </div>
                <div class="mb-3 text-center">
                  <button type="submit" class="rounded-pill w-25 h-10 btn-warning text-dark btn">Kirim Permintaan</button>
                </div>
              </div>
            </form>

            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
              ghi</div>
          </div>
          {{-- ss --}}


        </div>
      </div>

    </div>
  </div>
  </div>
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

</body>
<script>
  function handleChange(src) {
    const myElement = document.getElementById("form3");
    const myElement2 = document.getElementById("form5");
    const myElement3 = document.getElementById("form6");

    document.getElementById("eformspt").style.display = "block";
    myElement.style.display = "none";
    myElement2.style.display = "none";
    myElement3.style.display = "none";


  }

  function handleChange2(src) {
    const myElement = document.getElementById("eformspt");
    document.getElementById("form3").style.display = "block";

    myElement.style.display = "none";
  }

  function handleChange3(src) {
    const myElement = document.getElementById("form5");
    document.getElementById("form4").style.display = "block";
    myElement.style.display = "none";

  }

  function handleChange4(src) {
    const myElement = document.getElementById("form4");

    document.getElementById("form5").style.display = "block";
    myElement.style.display = "none";

  }

  function handleChange5(src) {

    document.getElementById("spt1770ss").style.display = "block";

  }

  function handleChange6(src) {
    const myElement = document.getElementById("spt1770ss");
    document.getElementById("form6").style.display = "block";
    myElement.style.display = "none";

  }

  function changeForm(src) {
    document.getElementById("form1").style.display = "none";
    document.getElementById("form2").style.display = "block";
    const myElement2 = document.getElementById("footer");
    myElement2.style.marginTop = "300px";

  }
</script>
<script>
  function nav() {
    document.getElementById("nav-home-tab").classList.toggle("active");;
  }
</script>

</html>