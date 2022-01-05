<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
    include "koneksi103.php";
    date_default_timezone_set('Asia/Jakarta');
    //$jam = date('yjHi'); //TahunTanggalJamMenit
    //$hari = date('ymj'); //TahunBulanTanggal
    $hari = 220102;
    $jam = 22021000;  //di bawah jam 10
    ?>
    <title>Flash Sale</title>
    <script type="text/javascript" src="jquery-1.2.3.pack.js"></script>
    <script>
        $(function() {
            $('#menu a').click(function() {
                var url = $(this).attr('href');
                $('#container').load(url);
                return false;
            });

        });

        $(function() {
            $('#selesai a').click(function() {
                var url = $(this).attr('href');
                $('#sscontainer').load(url);
                return false;
            });

        });



        // Set the date we're counting down to
        var countDownDate = new Date("JAN 4, 2022 21:00:00").getTime();
        var countupDate = new Date("JAN 7, 2022 10:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get todays date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;
            var next = countupDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            var ndays = Math.floor(next / (1000 * 60 * 60 * 24));
            var nhours = Math.floor((next % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var nminutes = Math.floor((next % (1000 * 60 * 60)) / (1000 * 60));
            var nseconds = Math.floor((next % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("fs").innerHTML = "FLASH SALE <br> Sedang DIMULAI";
            document.getElementById("days").innerHTML = days + "";
            document.getElementById("hours").innerHTML = hours + "";
            document.getElementById("minutes").innerHTML = minutes + "";
            document.getElementById("seconds").innerHTML = seconds + "";

            // If the count down is over, write some text 
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("fs").innerHTML = "FLASH SALE <br> AKAN DIMULAI";
                document.getElementById("days").innerHTML = ndays + "";
                document.getElementById("hours").innerHTML = nhours + "";
                document.getElementById("minutes").innerHTML = nminutes + "";
                document.getElementById("seconds").innerHTML = nseconds + "";
                // document.getElementById("days").innerHTML = " - ";
                // document.getElementById("hours").innerHTML = " - ";
                // document.getElementById("minutes").innerHTML = " - ";
                // document.getElementById("seconds").innerHTML = " - ";
            }
        }, 1000);
    </script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet">

    <!-- My CSS -->
    <link rel="stylesheet" href="asset/style.css">

    <title>FLASHSALE</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#home">CHANDRA KARYA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="index">Bazaar Jilid 9</a>
                    <a class="nav-item nav-link" href="https://www.chandrakarya.com/59-clearance-sale">Clearance Sale</a>
                    <a class="nav-item nav-link" href="bazaarpromo">Promo Lainnya</a>
                    <a class="nav-item nav-link" href="faq">F.A.Q</a>
                    <a class="nav-item nav-link" href="video">VIDEO</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- akhir Navbar -->
    <!-- Jumbotron -->
    <div class='gatas'></div>
    <center>
        <ul style="position: absolute;top: 8%;width: 100%;margin-left: -2rem;" class="text-center">
            <li class='tinfo'><span id="fs"></span></li>
            <li class='timing'><span id="days"></span>&nbsp;DAYS&nbsp;</li>
            <li class='timing'><span id="hours"></span>&nbsp;Hours&nbsp;</li>
            <li class='timing'><span id="minutes"></span>&nbsp;Minutes&nbsp;</li>
            <li class='timing'><span id="seconds"></span>&nbsp;Seconds&nbsp;</li>
        </ul>
    </center>
    <center><img src='fsdesc/basic/banner.png' class='img-fluid'></center>
    <br>
    <!-- akhir jumbotron -->


    <!-- kupon sekarang -->

    <p class='infoklik'> KUPON BERLAKU SEKARANG</p>
    <div class="col-lg-12"></div>
    <center>
        <div class="row sesi">
            <div class="col-lg-6">
                <a href="#"><img src="promokk/basic/kk.png" class="img-fluid"></a>
            </div>
            <div class="col-lg-6">

            </div>
        </div>

        <div style="clear:both"><br></div>
        <div class="row">
            <?php

            $select = mysqli_query($conn, "select *from produk where wktshow <= $hari && wktdown >= $hari"); // mengambil produk yang memenuhi syarat
            if (mysqli_num_rows($select) == 0) {
                // Jika $select Tidak ditemukan
            } else {
                while ($query = mysqli_fetch_array($select)) {

                    if ($jam < $query["wktshowjam"]) { //list produk hari ini TAPI belum jam 10:00

                        // setting LINK untuk produk dengan kategori springbed 
                        if ($query["category"] == "springbed") {
                            $a = "<a href='spring/list?&brand=" . $query['kodeproduk'] . "'>";
                        } else {
                            $a = '';
                        }

                        echo '
		<div class="col-sm-6">
			' . $a . '
			<img src="fsdesc/produk/' . $query["imgproduk"] . '" class="img-fluid">
			<img src="fsdesc/produk/' . $query["imgbutton"] . '" class="img-fluid">
		</div>
		';
                    } else if (($jam >= $query["wktshowjam"] && $jam < $query["wktdownjam"]) && $query["stock"] >= 1) { // menampilkan produk yang memenuhi syarat dan stock lebih dari 0

                        // setting untuk produk springbed dan non
                        if ($query["category"] == "springbed") {
                            $a = "<a href='spring/kupon?&brand=" . $query['kodeproduk'] . "'>";
                        } else {
                            $a = "<a href='spring/quality?&brand=" . $query['kodeproduk'] . "'>";
                        }

                        echo '
		<div class="col-sm-6">
			' . $a . '
			<img src="fsdesc/produk/' . $query["imgprodukmulai"] . '" class="img-fluid">
			<img src="fsdesc/produk/' . $query["imgbuttonmulai"] . '" class="img-fluid">
		</div>
		';
                    } else if ($query["stock"] == 0) { // jika stock adalah 0
                        echo '
		<div class="col-sm-6">
			<img src="fsdesc/produk/' . $query["imgproduk"] . '" class="img-fluid">
			<img src="fsdesc/produk/' . $query["imgbuttonsold"] . '" class="img-fluid">
		</div>
		';
                    } else {
                    }
                }
            }

            ?>
        </div>
    </center>
    </div>
    <!-- kupon berlaku akan datang -->
    <div style="clear:both"><br></div>
    <p class='berlakuklik'> KUPON YANG AKAN DATANG</p>
    <!-- <div class="col-sm-12" id="menu"> -->
    <div class="col-sm-12 justify-content-center">
        <?php
        if ($hari <= 211207) {
            echo '
      <div class="col-lg-6">
	<img src="fsdesc/tombol/s1.png" class="img-lagi">
	</div>
	';
        } else {
        }

        if ($hari <= 211214) {
            echo '
	<div class="col-lg-6">
	<img src="fsdesc/tombol/s2.png" class="img-lagi">
	</div>
	';
        } else {
        }

        if ($hari <= 211221) {
            echo '
	<div class="col-lg-6">
	<img src="fsdesc/tombol/s3.png" class="img-lagi">
	</div>
	';
        } else {
        }

        if ($hari <= 211227) {
            echo '
  <div class="col-lg-6">
	<img src="fsdesc/tombol/s4.png" class="img-lagi">
	</div>
	';
        } else {
        }

        if ($hari <= 220103) {
            echo '
      <div class="row" style="padding: 2px 2px 2px 2px;">
      
	<img src="fsdesc/tombol/s5.png" class="img-lagi">
	</div>
  
	';
        } else {
        }
        ?>
    </div>

    <div class="row" style="padding: 2px 2px 2px 2px;">
        <?php
        $tampil = mysqli_query($conn, "select *from produk where sesi = 5");
        if (mysqli_num_rows($tampil) == 0) {
            // Jika $select Tidak ditemukan
        } else {
            while ($produk = mysqli_fetch_array($tampil)) {

                if ($produk["wktshow"] > $hari) {
                    // setting LINK untuk produk dengan kategori springbed 
                    if ($produk["category"] == "springbed") {
                        $a = "<a href='spring/list?&brand=" . $produk['kodeproduk'] . "'>";
                    } else {
                        $a = '';
                    }

                    echo '
            
              <div class="col-lg-6">
                ' . $a . '
                <img src="fsdesc/produk/' . $produk["imgproduk"] . '" class="img-fluid">
                <img src="fsdesc/produk/' . $produk["imgbutton"] . '" class="img-fluid">
                </a>
              </div>
              ';
                } else {
                }
            }
        }


        ?>
    </div>

    <!-- kupon sudah berlalu -->
    <div style="clear:both"><br></div>
    <p class='berlakuklik'> KUPON YANG SUDAH BERLALU</p>

    <div class="col-sm-12">
        <center>

            <?php
            if ($hari >= 211207) {
                echo '
	<div class="row sesi">
        <div class="col-lg-6">
	<a href="d1"><img src="fsdesc/tombol/ss1.png" class="img-lagi"></a>
	</div>
	';
            } else {
            }

            if ($hari >= 211214) {
                echo '
        <div class="col-lg-6">
	<a href="d2"><img src="fsdesc/tombol/ss2.png" class="img-lagi"></a>
	</div>
	';
            } else {
            }

            if ($hari >= 211221) {
                echo '
        <div class="col-lg-6">
	<a href="d3"><img src="fsdesc/tombol/ss3.png" class="img-lagi"></a>
	</div>
	';
            } else {
            }

            if ($hari >= 211228) {
                echo '
        <div class="col-lg-6">
	<a href="d4"><img src="fsdesc/tombol/ss4.png" class="img-lagi"></a>
	</div>
	';
            } else {
            }

            if ($hari >= 220103) {
                echo '
        <div class="col-lg-6">
	<a href="d5"><img src="fsdesc/tombol/ss5.png" class="img-lagi"></a>
	</div>
	';
            } else {
            }

            ?>

    </div>

    <br>



    </div>


    <div style='clear:both'><br></div>
    <center><a href="https://api.whatsapp.com/send?phone=628990021020&text=Halo%20Admin%20Flash%20Sale%20Chandra%20Karya"><img src='fsdesc/basic/kontak.png' class='img-fluid'></a></center>
    <br>



    <footer>
        <?php include('footer.php') ?>
    </footer>
    <!-- </div> -->
    <!-- info panel -->
    <!-- <div class="row justify-content-center">
      <div class="col-10 info-panel">
        <div class="row">
          <div class="col-lg">
            <img src="img/employee.png" alt="Employee" class="float-left">
            <h4>24 Hours</h4>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
          </div>
          <div class="col-lg">
            <img src="img/hires.png" alt="High Res" class="float-left">
            <h4>24 Hours</h4>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
          </div>
          <div class="col-lg">
            <img src="img/security.png" alt="Security" class="float-left">
            <h4>24 Hours</h4>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
          </div>
        </div>
      </div>
    </div> -->
    <!-- akhir info panel -->

    <!-- workingspace -->
    <!-- <div class="row workingspace">
    <div class="col-lg-6">
      <img src="img/workingspace.png" alt="workingspace" class="img-fluid">
    </div>
    <div class="col-lg-5">
      <h3> You <span>work</span> like <br>at <span>home</span></h3>
      <p>Bekerja dengan suasana hati yang lebih baik dan mempelajari hal baru setiap harinya.</p>
      <a href="" class="btn btn-primary tombol">Gallery</a>
    </div>
  </div> -->
    <!-- akhir workingspace -->

    <!-- testi -->
    <!-- <section class="testi">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <h5>"Bekerja dengan suasana hati yang lebih baik dan mempelajari hal baru setiap harinya."</h5>
        </div>
      </div> -->
    <!-- testi 1 -->
    <!-- <div class="row justify-content-center">
        <div class="col-lg-6 justify-content-center d-flex">
          <figure class="figure">
            <img src="img/img1.png" class="figure-img img-fluid rounded-circle" alt="testi 1">
          </figure> -->
    <!-- testi 2 -->
    <!-- <figure class="figure">
            <img src="img/img2.png" class="figure-img img-fluid rounded-circle utama" alt="testi 2">
            <figcaption class="figure-caption">
              <h5>Sunny Xiu</h5>
              <p>Designer</p>
            </figcaption>
          </figure> -->
    <!-- testi 3 -->
    <!-- <figure class="figure">
            <img src="img/img3.png" class="figure-img img-fluid rounded-circle" alt="testi 3">
          </figure>
        </div>
      </div>
    </section> -->
    <!-- akhir testi -->

    <!-- Footer -->
    <!-- <div class="row footer">
      <div class="col text-center">
        <p>2021 All Rights Reserved by <a href="">Nanda.</a></p>
      </div>
    </div> -->
    <!-- akhir footer -->
    <!-- </div> -->
    <!-- akhir container -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>