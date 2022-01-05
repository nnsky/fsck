<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<?php
include "../koneksi.php";

if (!$_GET['brand']) {
    echo "<h2><center>Halaman Page Error </center></h2>
    <script>setTimeout(function(){location.href='../index3'} , 1); </script>";
} else {

    if ($_GET['brand']  == "estima") {
        echo "
        <div class='row'>
        <div class='col-sm-6'>
        <img src='../fsjan/produk/sesi1/spring/1.jpg' class='img-responsive'>
        <img src='../fsjan/produk/sesi1/spring/b1.jpg' class='img-responsive'>
        </div>

        <div class='col-sm-6'>
        <img src='../fsjan/produk/sesi1/spring/2.jpg' class='img-responsive'>
        <img src='../fsjan/produk/sesi1/spring/b2.jpg' class='img-responsive'>
        </div>

        <div class='col-sm-6'>
        <img src='../fsjan/produk/sesi1/spring/3.jpg' class='img-responsive'>
        <img src='../fsjan/produk/sesi1/spring/b3.jpg' class='img-responsive'>
        </div>
        ";
    } 
    elseif ($_GET['brand']  == "superdream") {
        echo "
        <div class='col-sm-6'>
        <img src='../fsjan/produk/sesi1/spring/4.jpg' class='img-responsive'>
        <img src='../fsjan/produk/sesi1/spring/b4.jpg' class='img-responsive'>
        </div>

        <div class='col-sm-6'>
        <img src='../fsjan/produk/sesi1/spring/5.jpg' class='img-responsive'>
        <img src='../fsjan/produk/sesi1/spring/b5.jpg' class='img-responsive'>
        </div>

        <div class='col-sm-6'>
        <img src='../fsjan/produk/sesi1/spring/6.jpg' class='img-responsive'>
        <img src='../fsjan/produk/sesi1/spring/b6.jpg' class='img-responsive'>
        </div>
        ";
    }
    elseif ($_GET['brand']  == "air808") {
        echo "
        <div class='col-sm-6'>
        <img src='../fsjan/produk/sesi1/spring/7.png' class='img-responsive'>
        <img src='../fsjan/produk/sesi1/spring/b7.png' class='img-responsive'>
        </div>

        <div class='col-sm-6'>
        <img src='../fsjan/produk/sesi1/spring/8.png' class='img-responsive'>
        <img src='../fsjan/produk/sesi1/spring/b8.png' class='img-responsive'>
        </div>

        <div class='col-sm-6'>
        <img src='../fsjan/produk/sesi1/spring/9.png' class='img-responsive'>
        <img src='../fsjan/produk/sesi1/spring/b9.png' class='img-responsive'>
        </div>
        ";
    }
        elseif ($_GET['brand']  == "taylor") {
        echo "
        <div class='col-sm-6'>
        <img src='../fsjan/produk/sesi1/spring/10.png' class='img-responsive'>
        <img src='../fsjan/produk/sesi1/spring/b10.png' class='img-responsive'>
        </div>

        <div class='col-sm-6'>
        <img src='../fsjan/produk/sesi1/spring/11.png' class='img-responsive'>
        <img src='../fsjan/produk/sesi1/spring/b11.png' class='img-responsive'>
        </div>

        <div class='col-sm-6'>
        <img src='../fsjan/produk/sesi1/spring/12.png' class='img-responsive'>
        <img src='../fsjan/produk/sesi1/spring/b12.png' class='img-responsive'>
        </div>
        ";
        }    
        else {
        echo "<h2><center>Halaman Page Error </center></h2>
        <script>setTimeout(function(){location.href='../index7'} , 1); </script>";
        
    }
}
