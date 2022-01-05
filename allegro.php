<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>Kupon Flash Sale</title>
</head>
<body>

<a href="index" class="btn btn-success">Kembali</a><br>
<div class="col-sm-12">
<?php
include "koneksi103.php";
date_default_timezone_set("Asia/Bangkok");
$jam=date('jHi');

$sleep=mysqli_query($conn,"select *from newflash where brand='Allegro'");
$hsleep=mysqli_fetch_array($sleep);


//produk 1
if($jam<120959 ){
	echo "
	<div class='col-sm-6'>
		<img src='fsept/produk/sesi1/springbed/12.png' class='img-responsive'>
		<img src='fsept/produk/sesi1/springbed/b12.png' class='img-responsive'>
	</div>
	";
	
}else if( ($jam>=121000 && $jam<152059) && $hsleep['stock']>=1){
	echo "
	<div class='col-sm-6'>
	<a type='button' data-toggle='modal' data-target='#produk1'>
		<img src='fsept/produk/sesi1/mulai/18.png' class='img-responsive'>
		<img src='fsept/produk/sesi1/mulai/b18.png' class='img-responsive'>
	</a>
	</div>
	";
}else if($hsleep["stock"] == 0){
	echo "
	<div class='col-sm-6'>
		<img src='fsept/produk/sesi1/ss/18.png' class='img-responsive'>
		<img src='fsept/produk/sesi1/ss/st1.png' class='img-responsive'>
	</div>
	";
}else if($jam>=152100){
	echo "
		<div class='col-sm-6'>
		<img src='fsept/produk/sesi1/ss/18.png' class='img-responsive'>
		<img src='fsept/produk/sesi1/ss/fs1.png' class='img-responsive'>
	</div>
	";
}

//produk2

if($jam<120959 ){
	echo "
	<div class='col-sm-6'>
		<img src='fsept/produk/sesi1/springbed/13.png' class='img-responsive'>
		<img src='fsept/produk/sesi1/springbed/b13.png' class='img-responsive'>
	</div>
	";
	
}else if( ($jam>=121000 && $jam<152059) && $hsleep['stock']>=1){
	echo "
	<div class='col-sm-6'>
		<a type='button' data-toggle='modal' data-target='#produk2'>
		<img src='fsept/produk/sesi1/mulai/19.png' class='img-responsive'>
		<img src='fsept/produk/sesi1/mulai/b19.png' class='img-responsive'>
		</a>
	</div>
	";
}else if($hsleep["stock"] == 0){
	echo "
	<div class='col-sm-6'>
		<img src='fsept/produk/sesi1/ss/19.png' class='img-responsive'>
		<img src='fsept/produk/sesi1/ss/st1.png' class='img-responsive'>
	</div>
	";
}else if($jam>=152100){
	echo "
		<div class='col-sm-6'>
		<img src='fsept/produk/sesi1/ss/19.png' class='img-responsive'>
		<img src='fsept/produk/sesi1/ss/fs1.png' class='img-responsive'>
	</div>
	";
}

//produk 3

if($jam<120959 ){
	echo "
	<div class='col-sm-6'>
		<img src='fsept/produk/sesi1/springbed/14.png' class='img-responsive'>
		<img src='fsept/produk/sesi1/springbed/b14.png' class='img-responsive'>
	</div>
	";
	
}else if( ($jam>=121000 && $jam<152059) && $hsleep['stock']>=1){
	echo "
	<div class='col-sm-6'>
		<a type='button' data-toggle='modal' data-target='#produk3'>
		<img src='fsept/produk/sesi1/mulai/20.png' class='img-responsive'>
		<img src='fsept/produk/sesi1/mulai/b20.png' class='img-responsive'>
		</a>
	</div>
	";
}else if($hsleep["stock"] == 0){
	echo "
	<div class='col-sm-6'>
		<img src='fsept/produk/sesi1/ss/20.png' class='img-responsive'>
		<img src='fsept/produk/sesi1/ss/st1.png' class='img-responsive'>
	</div>
	";
}else if($jam>=152100){
	echo "
		<div class='col-sm-6'>
		<img src='fsept/produk/sesi1/ss/20.png' class='img-responsive'>
		<img src='fsept/produk/sesi1/ss/fs1.png' class='img-responsive'>
	</div>
	";
}

?>
	
</div>

 <!-- produk 1-->

<div class="modal fade" id="produk1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><center><b>Kasur Airland Allegro Air 160x200</b></center></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <form action="kupon_proses" method="POST">   
      <div class="modal-body">
      
            <div class='col-sm-4'>
            <label>Nama Singkat :</label>
            <input type='text' class='form-control' name='nama' required>
            </div>
            <div class='col-sm-4'>
            <label>Alamat Email :</label>
            <input type='email' class='form-control' name='email' required>
            </div>
            <div class='col-sm-4'>
            <label>No HP :</label>
            <input type='number' class='form-control' name='hp' required>
            </div>

      
      </div>
      <div style='clear:both'></div>
      <br>
      <div class="modal-footer">
      <input type='hidden' name='voucher' value='Allegro 160'>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

 <!-- produk 2-->

<div class="modal fade" id="produk2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><center><b>Kasur Airland Allegro Air 180x200</b></center></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <form action="kupon_proses" method="POST">   
      <div class="modal-body">
      
            <div class='col-sm-4'>
            <label>Nama Singkat :</label>
            <input type='text' class='form-control' name='nama' required>
            </div>
            <div class='col-sm-4'>
            <label>Alamat Email :</label>
            <input type='email' class='form-control' name='email' required>
            </div>
            <div class='col-sm-4'>
            <label>No HP :</label>
            <input type='number' class='form-control' name='hp' required>
            </div>

      
      </div>
      <div style='clear:both'></div>
      <br>
      <div class="modal-footer">
      <input type='hidden' name='voucher' value='Allegro 180'>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

 <!-- produk 3-->

<div class="modal fade" id="produk3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><center><b>Kasur Airland Allegro Air 200x200</b></center></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <form action="kupon_proses" method="POST">   
      <div class="modal-body">
      
            <div class='col-sm-4'>
            <label>Nama Singkat :</label>
            <input type='text' class='form-control' name='nama' required>
            </div>
            <div class='col-sm-4'>
            <label>Alamat Email :</label>
            <input type='email' class='form-control' name='email' required>
            </div>
            <div class='col-sm-4'>
            <label>No HP :</label>
            <input type='number' class='form-control' name='hp' required>
            </div>

      
      </div>
      <div style='clear:both'></div>
      <br>
      <div class="modal-footer">
      <input type='hidden' name='voucher' value='Allegro 200'>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>