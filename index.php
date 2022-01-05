<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
    include "koneksi103.php";
    date_default_timezone_set('Asia/Jakarta');
    $jam = date('yjHi'); //TahunTanggalJamMenit
    $hari = date('ymj'); //TahunBulanTanggal
    // $hari = 220106;
    // $jam = 22061100;  //di bawah jam 10
    ?>
    <title>Flash Sale</title>
    
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
            <a class="navbar-brand" href="index"><img src="fsjan/basic/logo.png" style="width: 200px;" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-item nav-link" href="bazaarindex">Event</a>
                    <a class="nav-item nav-link" href="https://www.chandrakarya.com/59-clearance-sale">Clearance Sale</a>
                    <a class="nav-item nav-link" href="fspromo">Promo Lainnya</a>
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
    <center><img src='fsjan/basic/index.png' class='img-fluid'></center>
   
    
    <center><h2>FLASH SALE CHANDRA KARYA</h2>
<p class="word-1">FLASH SALE Chandra Karya menghadirkan BRANDED SPRINGBED, SOFA dan FURNITURE dengan penawaran EKSTRA MURAH jaminan produk baru bergaransi resmi yang kami hadirkan dengan kuota terbatas.</p>
<p class="word-1">Hanya untuk 5 TRANSAKSI TERCEPAT di seluruh gerai Chandra Karya/<a href="https://www.chandrakarya.com/">www.chandrakarya.com</a> mulai pukul 10.00 WIB.</P>
<p class="word-1">FLASH SALE akan dilaksanakan setiap Sabtu & Minggu pada tanggal [8], [9], [15], [16], [22], [23], [29], dan [30] Januari 2022 jaminan produk baru bergaransi resmi. Pastikan Anda tidak melewatkan produk incaran Anda!</P></center>

    
    <!-- akhir jumbotron -->


    <!-- kupon sekarang -->

    <p class='infoklik'> KUPON BERLAKU SEKARANG</p>
    <div class="col-lg-12"></div>
    <center>
        <div class="row">
            <div class="col-lg-6">
                <a href="#"><img src="promokk/basic/kk.png" class="img-fluid"></a>
            </div>
       

            <div style="clear:both"><br></div>
       
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
		<div class="col-lg-6">
			' . $a . '
			<img src=fsjan/produk/' . $query["imgproduk"] . '" class="img-fluid">
			<img src=fsjan/produk/' . $query["imgbutton"] . '" class="img-fluid">
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
		<div class="col-lg-6">
			' . $a . '
			<img src=fsjan/produk/' . $query["imgprodukmulai"] . '" class="img-fluid">
			<img src=fsjan/produk/' . $query["imgbuttonmulai"] . '" class="img-fluid">
		</div>
		';
                    } else if ($query["stock"] == 0) { // jika stock adalah 0
                        echo '
		<div class="col-sm-6">
			<img src=fsjan/produk/' . $query["imgproduk"] . '" class="img-fluid">
			<img src=fsjan/produk/' . $query["imgbuttonsold"] . '" class="img-fluid">
		</div>
		';
                    } else {
                    }
                }
            }
            ?>
        </div>
    </center>
    
    <!-- kupon berlaku akan datang -->
    <div style="clear:both">
    <br>
</div>
    <p class='berlakuklik'> KUPON YANG AKAN DATANG</p>
    <!-- <div class="col-sm-12" id="menu"> -->
    <div class="col-sm-12">
      <center>
      <div class="row">
        <?php
        if ($hari <= 220108) {
            echo '       
      <div class="col-lg">
	<img src="fsjan/tombol/s1.png" class="img-fluid" style="padding-bottom: 5px;">
	</div>
	';
        } else {
        }

//         if ($hari <= 211213) {
//             echo '
// 	<div class="col-lg-6">
// 	<img src="fsjan/tombol/s2.png" class="img-fluid">
// 	</div>
// 	';
//         } else {
//         }

//         if ($hari <= 211220) {
//             echo '
// 	<div class="col-lg-6">
// 	<img src="fsjan/tombol/s3.png" class="img-fluid">
// 	</div>
// 	';
//         } else {
//         }

//         if ($hari <= 211227) {
//             echo '
//   <div class="col-lg-6">
// 	<img src="fsjan/tombol/s4.png" class="img-fluid">
// 	</div>
// 	';
//         } else {
//         }

//         if ($hari <= 220104) {
//             echo '
//             <div class="col-lg-6">
//       <img src="fsdesc/tombol/s5.png" class="img-fluid">
// 	</div>
   
// 	';
//         } else {
//         }
        ?>
        </center>
    </div>


    <div class="row">
    <?php
    $tampil = mysqli_query($conn, "select *from produk where sesi = 1");
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
                <img src="fsjan/produk/' . $produk["imgproduk"] . '" class="img-fluid">
                <img src="fsjan/produk/' . $produk["imgbutton"] . '" class="img-fluid">
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
    <p class='sudahklik'> KUPON YANG SUDAH BERLALU</p>
    <div class="col-sm-12">
        <center>
        <div class="row">
            <?php
            if ($hari >= 211208) {
                echo '
        <div class="col-lg-6">
	<a href="d1"><img src="fsdesc/tombol/ss1.png" class="img-fluid"></a>
	</div>
	';
            } else {
            }

            if ($hari >= 211215) {
                echo '
        <div class="col-lg-6">
	<a href="d2"><img src="fsdesc/tombol/ss2.png" class="img-fluid"></a>
	</div>
	';
            } else {
            }

            if ($hari >= 211222) {
                echo '
        <div class="col-lg-6">
	<a href="d3"><img src="fsdesc/tombol/ss3.png" class="img-fluid"></a>
	</div>
	';
            } else {
            }

            if ($hari >= 211229) {
                echo '
        <div class="col-lg-6">
	<a href="d4"><img src="fsdesc/tombol/ss4.png" class="img-fluid"></a>
	</div>
	';
            } else {
            }

            if ($hari >= 220104) {
                echo '
            
        <div class="col-lg-6">
	<a href="d5"><img src="fsdesc/tombol/ss5.png" class="img-fluid"></a>

    </div>
	';
            } else {
            }

            ?>
        </div>
        </center>
    </div>

    <br>



    </div>

    <center><p style="color: red;">NOTE* : Jika tampilan tidak muncul atau tidak beraturan , disarankan menghapus cookie/cache pada settingan browser lalu refresh/tekan F5 pada keyboard.</p></center>
    <div style='clear:both'><br></div>
    <center><a href="https://api.whatsapp.com/send?phone=628990021020&text=Halo%20Admin%20Flash%20Sale%20Chandra%20Karya"><img src='fsjan/basic/kontak.png' class='img-fluid'></a></center>
    <br>



    <footer>
        <?php include('footer.php') ?>
    </footer>
    


    <!-- Optional JavaScript -->
    <script type="text/javascript" src="jquery-1.2.3.pack.js"></script>
    <!-- countdown time -->
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
        var countDownDate = new Date("JAN 8, 2022 10:00:00").getTime();
        var countupDate = new Date("JAN 2, 2022 21:00:00").getTime();

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
            document.getElementById("fs").innerHTML = "FLASH SALE <br> AKAN DIMULAI";
            document.getElementById("days").innerHTML = days + "";
            document.getElementById("hours").innerHTML = hours + "";
            document.getElementById("minutes").innerHTML = minutes + "";
            document.getElementById("seconds").innerHTML = seconds + "";

            // If the count down is over, write some text 
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("fs").innerHTML = "FLASH SALE <br> SEDANG DIMULAI";
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
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>