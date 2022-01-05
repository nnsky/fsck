<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<?php
include "../koneksi.php";

if (!$_GET['brand']) {
    echo "<h2><center>Halaman Tidak Di Temukan </center></h2>
    <script>setTimeout(function(){location.href='../index3'} , 1); </script>";
} else {

    // PRODUK 1
    if ($_GET['brand']  == "royalseries") {
        echo "
        <form action='../kupon_proses.php' method='POST'>
        <div class='col-sm-6'>
        <label>
            <input type='radio' name='ukuran' value='160' checked>
            <img src='../fsdesc/produk/sesi5/mulai/3.png' class='img-responsive'>
            <img src='../fsdesc/produk/sesi5/mulai/b3.png' class='img-responsive'>
        </label>
    </div>
    <div class='col-sm-6'>
        <label>
             <input type='radio' name='ukuran' value='180'>
            <img src='../fsdesc/produk/sesi5/mulai/4.png' class='img-responsive'>
            <img src='../fsdesc/produk/sesi5/mulai/b4.png' class='img-responsive'>
        </label>
    </div>
    <div class='col-sm-6'>
        <label>
            <input type='radio' name='ukuran' value='200'>
            <img src='../fsdesc/produk/sesi5/mulai/5.png' class='img-responsive'>
            <img src='../fsdesc/produk/sesi5/mulai/b5.png' class='img-responsive'>
        </label>
    </div>

    <div style='clear:both;'></div>
    
    <center>

    <p style='margin-top:20px;' ><h3>Pilih dan Isi Form Untuk Mendapatkan Kupon</h3></p>
    
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

    <input type='hidden' name='kodeproduk' value='" . $_GET['brand'] . "'>
    
    <div style='clear:both;'><br></div>

   <button type='submit' class='btn btn-primary btn-lg'>Simpan</button>
   
   </center>

    </form>
    
        ";
    } elseif ($_GET['brand']  == "estima") {

        // PRODUK 2

        echo "
        <form action='../kupon_proses.php' method='POST'>
        <div class='col-sm-6'>
        <label>
            <input type='radio' name='ukuran' value='160' checked>
            <img src='../fsjan/produk/sesi5/mulai/1.png' class='img-responsive'>
            <img src='../fsjan/produk/sesi5/mulai/b1.png' class='img-responsive'>
        </label>
    </div>
    <div class='col-sm-6'>
        <label>
             <input type='radio' name='ukuran' value='180'>
            <img src='../fsjan/produk/sesi5/mulai/2.png' class='img-responsive'>
            <img src='../fsjan/produk/sesi5/mulai/b2.png' class='img-responsive'>
        </label>
    </div>
    <div class='col-sm-6'>
        <label>
            <input type='radio' name='ukuran' value='200'>
            <img src='../fsjan/produk/sesi5/mulai/3.png' class='img-responsive'>
            <img src='../fsjan/produk/sesi5/mulai/b3.png' class='img-responsive'>
        </label>
    </div>

    <div style='clear:both;'></div>
    
    <center>

    <p style='margin-top:20px;' ><h3>Pilih dan Isi Form Untuk Mendapatkan Kupon</h3></p>
    
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

    <input type='hidden' name='kodeproduk' value='" . $_GET['brand'] . "'>

    <div style='clear:both;'><br></div>

   <button type='submit' class='btn btn-primary btn-lg'>Simpan</button>
   
   </center>

    </form>
        ";
    } elseif ($_GET['brand']  == "superdream") {

        // PRODUK 2

        echo "
        <form action='../kupon_proses.php' method='POST'>
        <div class='col-sm-6'>
        <label>
            <input type='radio' name='ukuran' value='160' checked>
            <img src='../fsjan/produk/sesi1/mulai/4.png' class='img-responsive'>
            <img src='../fsjan/produk/sesi1/mulai/b4.png' class='img-responsive'>
        </label>
    </div>
    <div class='col-sm-6'>
        <label>
             <input type='radio' name='ukuran' value='180'>
            <img src='../fsjan/produk/sesi1/mulai/5.png' class='img-responsive'>
            <img src='../fsjan/produk/sesi1/mulai/b5.png' class='img-responsive'>
        </label>
    </div>
    <div class='col-sm-6'>
        <label>
            <input type='radio' name='ukuran' value='200'>
            <img src='../fsjan/produk/sesi1/mulai/6.png' class='img-responsive'>
            <img src='../fsjan/produk/sesi1/mulai/b6.png' class='img-responsive'>
        </label>
    </div>

    <div style='clear:both;'></div>
    
    <center>

    <p style='margin-top:20px;' ><h3>Pilih dan Isi Form Untuk Mendapatkan Kupon</h3></p>
    
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

    <input type='hidden' name='kodeproduk' value='" . $_GET['brand'] . "'>

    <div style='clear:both;'><br></div>

   <button type='submit' class='btn btn-primary btn-lg'>Simpan</button>
   
   </center>

    </form>
        ";
    } elseif ($_GET['brand']  == "air808") {

        // PRODUK 2

        echo "
        <form action='../kupon_proses.php' method='POST'>
        <div class='col-sm-6'>
        <label>
            <input type='radio' name='ukuran' value='160' checked>
            <img src='../fsjan/produk/sesi1/mulai/9.png' class='img-responsive'>
            <img src='../fsjan/produk/sesi1/mulai/b9.png' class='img-responsive'>
        </label>
    </div>
    <div class='col-sm-6'>
        <label>
             <input type='radio' name='ukuran' value='180'>
            <img src='../fsjan/produk/sesi1/mulai/10.png' class='img-responsive'>
            <img src='../fsjan/produk/sesi1/mulai/b10.png' class='img-responsive'>
        </label>
    </div>
    <div class='col-sm-6'>
        <label>
            <input type='radio' name='ukuran' value='200'>
            <img src='../fsjan/produk/sesi1/mulai/11.png' class='img-responsive'>
            <img src='../fsjan/produk/sesi1/mulai/b11.png' class='img-responsive'>
        </label>
    </div>

    <div style='clear:both;'></div>
    
    <center>

    <p style='margin-top:20px;' ><h3>Pilih dan Isi Form Untuk Mendapatkan Kupon</h3></p>
    
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

    <input type='hidden' name='kodeproduk' value='" . $_GET['brand'] . "'>

    <div style='clear:both;'><br></div>

   <button type='submit' class='btn btn-primary btn-lg'>Simpan</button>
   
   </center>

    </form>
        ";
    } elseif ($_GET['brand']  == "taylor") {

        // PRODUK 2

        echo "
        <form action='../kupon_proses.php' method='POST'>
        <div class='col-sm-6'>
        <label>
            <input type='radio' name='ukuran' value='160' checked>
            <img src='../fsjan/produk/sesi1/mulai/12.png' class='img-responsive'>
            <img src='../fsjan/produk/sesi1/mulai/b12.png' class='img-responsive'>
        </label>
    </div>
    <div class='col-sm-6'>
        <label>
             <input type='radio' name='ukuran' value='180'>
            <img src='../fsjan/produk/sesi1/mulai/13.png' class='img-responsive'>
            <img src='../fsjan/produk/sesi1/mulai/b13.png' class='img-responsive'>
        </label>
    </div>
    <div class='col-sm-6'>
        <label>
            <input type='radio' name='ukuran' value='200'>
            <img src='../fsjan/produk/sesi1/mulai/14.png' class='img-responsive'>
            <img src='../fsjan/produk/sesi1/mulai/b14.png' class='img-responsive'>
        </label>
    </div>

    <div style='clear:both;'></div>
    
    <center>

    <p style='margin-top:20px;' ><h3>Pilih dan Isi Form Untuk Mendapatkan Kupon</h3></p>
    
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

    <input type='hidden' name='kodeproduk' value='" . $_GET['brand'] . "'>

    <div style='clear:both;'><br></div>

   <button type='submit' class='btn btn-primary btn-lg'>Simpan</button>
   
   </center>

    </form>
        ";
    } else {
        echo "<h2><center>Halaman Page Error </center></h2>
        <script>setTimeout(function(){location.href='../index3'} , 1); </script>";
    }
}
