<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<?php
include "../koneksi.php";

if (!$_GET['brand']) {
    echo "<h2><center>Halaman Tidak Di Temukan </center></h2>
    <script>setTimeout(function(){location.href='../flashsale'} , 1); </script>";
} else {
    //PRODUK 1
    if ($_GET['brand']  == "olivier") {
        echo "
        
        <form action='../kupon_proses' method='POST'>

        <center>
        <label>
            <input type='radio' name='kodeproduk' value='" . $_GET['brand'] . "' checked>
            <img src='../fsjan/produk/sesi1/mulai/7.png' class='img-responsive'>
            <img src='../fsjan/produk/sesi1/mulai/b7.png' class='img-responsive'>
        </label>
        </center>
       

        <div style='clear:both;'></div>
        
        <center>

        <p style='margin-top:20px;' ><h3>Isi Form Untuk Mendapatkan Kupon</h3></p>
        
        <div class='container'>

        <div class='form-group'>
        <label>Nama Singkat</label>
        <input type='text' name='nama' class='form-control' required> 
        </div>

        <div class='form-group'>
        <label>Email Anda</label>
        <input type='email' name='email' class='form-control'> 
        </div>

        <div class='form-group'>
        <label>Nomor Handphone</label>
        <input type='number' name='hp' class='form-control' required> 
        </div>

        <input type='hidden' name='ukuran' value=''>

        <div style='clear:both;'><br></div>

       <button type='submit' class='btn btn-primary btn-lg'>Simpan</button>
       
       </center>

        </form>
        ";

        //PRODUK 2
    } elseif ($_GET['brand']  == "lemarick") {
        echo "

        <form action='../kupon_proses' method='POST'>

        <center>
        <label>
            <input type='radio' name='kodeproduk' value='" . $_GET['brand'] . "' checked>
            <img src='../fsjan/produk/sesi1/mulai/8.png' class='img-responsive'>
            <img src='../fsjan/produk/sesi1/mulai/b8.png' class='img-responsive'>
        </label>
        </center>
       

        <div style='clear:both;'></div>
        
        <center>

        <p style='margin-top:20px;' ><h3>Isi Form Untuk Mendapatkan Kupon</h3></p>
        
        <div class='container'>

        <div class='form-group'>
        <label>Nama Singkat</label>
        <input type='text' name='nama' class='form-control' required> 
        </div>

        <div class='form-group'>
        <label>Email Anda</label>
        <input type='email' name='email' class='form-control'> 
        </div>

        <div class='form-group'>
        <label>Nomor Handphone</label>
        <input type='number' name='hp' class='form-control' required> 
        </div>

        <input type='hidden' name='ukuran' value=''>

        <div style='clear:both;'><br></div>

       <button type='submit' class='btn btn-primary btn-lg'>Simpan</button>
       
       </center>

        </form>
        ";
    } elseif ($_GET['brand']  == "cabin") {
        echo "

        <form action='../kupon_proses' method='POST'>

        <center>
        <label>
            <input type='radio' name='kodeproduk' value='" . $_GET['brand'] . "' checked>
            <img src='../fsjan/produk/sesi1/mulai/15.png' class='img-responsive'>
            <img src='../fsjan/produk/sesi1/mulai/b15.png' class='img-responsive'>
        </label>
        </center>
       

        <div style='clear:both;'></div>
        
        <center>

        <p style='margin-top:20px;' ><h3>Isi Form Untuk Mendapatkan Kupon</h3></p>
        
        <div class='container'>

        <div class='form-group'>
        <label>Nama Singkat</label>
        <input type='text' name='nama' class='form-control' required> 
        </div>

        <div class='form-group'>
        <label>Email Anda</label>
        <input type='email' name='email' class='form-control'> 
        </div>

        <div class='form-group'>
        <label>Nomor Handphone</label>
        <input type='number' name='hp' class='form-control' required> 
        </div>

        <input type='hidden' name='ukuran' value=''>

        <div style='clear:both;'><br></div>

       <button type='submit' class='btn btn-primary btn-lg'>Simpan</button>
       
       </center>

        </form>
        ";
    } elseif ($_GET['brand']  == "hazel") {
        echo "

        <form action='../kupon_proses' method='POST'>

        <center>
        <label>
            <input type='radio' name='kodeproduk' value='" . $_GET['brand'] . "' checked>
            <img src='../fsjan/produk/sesi1/mulai/16.png' class='img-responsive'>
            <img src='../fsjan/produk/sesi1/mulai/b16.png' class='img-responsive'>
        </label>
        </center>
       

        <div style='clear:both;'></div>
        
        <center>

        <p style='margin-top:20px;' ><h3>Isi Form Untuk Mendapatkan Kupon</h3></p>
        
        <div class='container'>

        <div class='form-group'>
        <label>Nama Singkat</label>
        <input type='text' name='nama' class='form-control' required> 
        </div>

        <div class='form-group'>
        <label>Email Anda</label>
        <input type='email' name='email' class='form-control'> 
        </div>

        <div class='form-group'>
        <label>Nomor Handphone</label>
        <input type='number' name='hp' class='form-control' required> 
        </div>

        <input type='hidden' name='ukuran' value=''>

        <div style='clear:both;'><br></div>

       <button type='submit' class='btn btn-primary btn-lg'>Simpan</button>
       
       </center>

        </form>
        ";
    } else {
    }
}
