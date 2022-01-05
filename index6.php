<html>

<head>
<?php
include "header.php";
date_default_timezone_set('Asia/Jakarta');
$jam=251000;
$hari=25;
include "koneksi103.php";
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
var countDownDate = new Date("Sept 28, 2021 21:00:00").getTime();
var countupDate = new Date("Sept 28, 2021 21:00:00").getTime();

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
    document.getElementById("fs").innerHTML = "FLASH SALE <br> SEDANG BERLANGSUNG";
    document.getElementById("days").innerHTML = days + "";
    document.getElementById("hours").innerHTML = hours + "";
    document.getElementById("minutes").innerHTML = minutes + "";
    document.getElementById("seconds").innerHTML = seconds + "";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("fs").innerHTML = "FLASH SALE <br> SELESAI ";
		// document.getElementById("days").innerHTML = ndays + "";
		// document.getElementById("hours").innerHTML = nhours + "";
		// document.getElementById("minutes").innerHTML =  nminutes + "";
		// document.getElementById("seconds").innerHTML =  nseconds + "";
		document.getElementById("days").innerHTML = " - ";
		document.getElementById("hours").innerHTML = " - ";
		document.getElementById("minutes").innerHTML = " - ";
		document.getElementById("seconds").innerHTML = " - ";
    }
}, 1000);


</script>
</head>

<body>
<div class='gatas'></div>
<center>
<ul style="position: absolute;top: 7%;width: 100%;" class="text-center">
      <li class='tinfo'><span id="fs"></span></li>
      <li class='timing'><span id="days"></span>&nbsp;DAYS&nbsp;</li>
      <li class='timing'><span id="hours"></span>&nbsp;Hours&nbsp;</li>
      <li class='timing'><span id="minutes"></span>&nbsp;Minutes&nbsp;</li>
      <li class='timing'><span id="seconds"></span>&nbsp;Seconds&nbsp;</li>
</ul>
</center>

<center><img src='fsept/dll/homebanner.png' class='img-responsive'></center>
<br>
<center><p class='judul'>FLASH SALE CHANDRA KARYA</p></center>

<p class="homedesc">
Flash Sale spesial Anniversary Chandra Karya dengan menghadirkan produk-produk menarik dari Branded Springbed, Sofa dan Furniture dengan POTONGAN LANGSUNG HINGGA 1,5 JUTA untuk 5 transaksi tercepat di Seluruh gerai Chandra Karya / flashsale.chandrakarya.com pada tanggal 10-12, 17-19, 24-26 September 2021 setiap jam 10.00 pagi SIAPA CEPAT DIA DAPAT!</p>
<br>
<p class='infoklik'> KUPON BERLAKU SEKARANG</p>
<div class="col-sm-12"><center>
	<div class="col-sm-6">
	<a type='button' data-toggle='modal' data-target='#add1'><img src='imgg/kk/divanohio.png' class='img-responsive'></a>
	</div>
	<div class="col-sm-6">

    </div>
	
	<div style="clear:both"><br></div>

<?php

if($hari>=24){
	
	
	$hinto=mysqli_query($conn,"select *from newflash where brand='malone'");
	$hhinto=mysqli_fetch_array($hinto);
	if($jam<240959){
	  echo "
		<div class='col-sm-6'>
		<img src='fsept/produk/sesi3/basic/1.png' class='img-responsive'>
		<img src='fsept/produk/sesi3/basic/b1.png' class='img-responsive'>
	    </div>
		";
	}else if( ($jam>=241000 && $jam<282100) && $hhinto['stock']>=1){
		echo "
		<div class='col-sm-6'>
		<a type='button' data-toggle='modal' data-target='#produk1'>
		<img src='fsept/produk/sesi3/mulai/1.png' class='img-responsive'>
		<img src='fsept/produk/sesi3/mulai/b1.png' class='img-responsive'>
		</a>
		</div>
		";
	}else if($hhinto["stock"] == 0){
		echo "
		<div class='col-sm-6'>
			<img src='fsept/produk/sesi3/ss/1.png' class='img-responsive'>
			<img src='fsept/produk/sesi3/ss/ss.png' class='img-responsive'>
		</div>
		";
	}else if($jam>=282100){
		
	}
	
	
	$spinel=mysqli_query($conn,"select *from newflash where brand='mejack'");
	$hspinel=mysqli_fetch_array($spinel);
	if($jam<240959){
	  echo "
		<div class='col-sm-6'>
		<img src='fsept/produk/sesi3/basic/2.png' class='img-responsive'>
		<img src='fsept/produk/sesi3/basic/b2.png' class='img-responsive'>
	    </div>
		";
	}else if( ($jam>=241000 && $jam<282100) && $hspinel['stock']>=1){
		echo "
		<div class='col-sm-6'>
		<a type='button' data-toggle='modal' data-target='#produk2'>
		<img src='fsept/produk/sesi3/mulai/2.png' class='img-responsive'>
		<img src='fsept/produk/sesi3/mulai/b2.png' class='img-responsive'>
		</a>
		</div>
		";
	}else if($hspinel["stock"] == 0){
		echo "
		<div class='col-sm-6'>
			<img src='fsept/produk/sesi3/ss/2.png' class='img-responsive'>
			<img src='fsept/produk/sesi3/ss/ss.png' class='img-responsive'>
		</div>
		";
	}else if($jam>=282100){
		
	}
	
	$rena=mysqli_query($conn,"select *from newflash where brand='prestige'");
	$hrena=mysqli_fetch_array($rena);
	if($jam<240959){
	  echo "
		<div class='col-sm-6'>
		<a href='prestige'>
		<img src='fsept/produk/sesi3/basic/3.png' class='img-responsive'>
		<img src='fsept/produk/sesi3/basic/b3.png' class='img-responsive'>
		</a>
	    </div>
		";
	}
	elseif( ($jam>=241000 && $jam<282100) && $hrena['stock']>=1){
		echo "
		<div class='col-sm-6'>
		<a href='prestige'>
		<img src='fsept/produk/sesi3/basic/3.png' class='img-responsive'>
		<img src='fsept/produk/sesi3/basic/b3.png' class='img-responsive'>
		</a>
		</div>
		";
	}else if($hrena["stock"] == 0){
		echo "
		<div class='col-sm-6'>
			<img src='fsept/produk/sesi3/ss/3.png' class='img-responsive'>
			<img src='fsept/produk/sesi3/ss/ss.png' class='img-responsive'>
		</div>
		";
	}else if($jam>=282100){
		
	}
	
	$madison=mysqli_query($conn,"select *from newflash where brand='estate'");
	$hmadison=mysqli_fetch_array($madison);
	if($jam<240959){
	  echo "
		<div class='col-sm-6'>
		<a href='estate'>
		<img src='fsept/produk/sesi3/basic/4.png' class='img-responsive'>
		<img src='fsept/produk/sesi3/basic/b4.png' class='img-responsive'>
		</a>
	    </div>
		";
	}
	elseif( ($jam>=241000 && $jam<282100) && $hmadison['stock']>=1){
		echo "
		<div class='col-sm-6'>
		<a href='estate'>
		<img src='fsept/produk/sesi3/basic/4.png' class='img-responsive'>
		<img src='fsept/produk/sesi3/basic/b4.png' class='img-responsive'>
		</a>
		</div>
		";
	}else if($hmadison["stock"] == 0){
		echo "
		<div class='col-sm-6'>
			<img src='fsept/produk/sesi3/ss/6.png' class='img-responsive'>
			<img src='fsept/produk/sesi3/ss/ss.png' class='img-responsive'>
		</div>
		";
	}else if($jam>=282100){
		
	}
	
	
}

if($hari>=25){
	
	
	$olivier=mysqli_query($conn,"select *from newflash where brand='olivier'");
	$holivier=mysqli_fetch_array($olivier);
	if($jam<250959){
	  echo "
		<div class='col-sm-6'>
		<img src='fsept/produk/sesi3/basic/5.png' class='img-responsive'>
		<img src='fsept/produk/sesi3/basic/b5.png' class='img-responsive'>
	    </div>
		";
	}else if( ($jam>=251000 && $jam<282100) && $holivier['stock']>=1){
		echo "
		<div class='col-sm-6'>
		<a type='button' data-toggle='modal' data-target='#produk3'>
		<img src='fsept/produk/sesi3/mulai/9.png' class='img-responsive'>
		<img src='fsept/produk/sesi3/mulai/b9.png' class='img-responsive'>
		</a>
		</div>
		";
	}else if($holivier["stock"] == 0){
		echo "
		<div class='col-sm-6'>
			<img src='fsept/produk/sesi3/ss/9.png' class='img-responsive'>
			<img src='fsept/produk/sesi3/ss/ss.png' class='img-responsive'>
		</div>
		";
	}else if($jam>=282100){
		
	}
	
	
	$arden=mysqli_query($conn,"select *from newflash where brand='arden'");
	$harden=mysqli_fetch_array($arden);
	if($jam<250959){
	  echo "
		<div class='col-sm-6'>
		<img src='fsept/produk/sesi3/basic/6.png' class='img-responsive'>
		<img src='fsept/produk/sesi3/basic/b6.png' class='img-responsive'>
	    </div>
		";
	}else if( ($jam>=251000 && $jam<282100) && $harden['stock']>=1){
		echo "
		<div class='col-sm-6'>
		<a type='button' data-toggle='modal' data-target='#produk4'>
		<img src='fsept/produk/sesi3/mulai/10.png' class='img-responsive'>
		<img src='fsept/produk/sesi3/mulai/b10.png' class='img-responsive'>
		</a>
		</div>
		";
	}else if($harden["stock"] == 0){
		echo "
		<div class='col-sm-6'>
			<img src='fsept/produk/sesi3/ss/10.png' class='img-responsive'>
			<img src='fsept/produk/sesi3/ss/ss.png' class='img-responsive'>
		</div>
		";
	}else if($jam>=282100){
		
	}
	
	$perfect=mysqli_query($conn,"select *from newflash where brand='perfectdream'");
	$hperfect=mysqli_fetch_array($perfect);
	if($jam<250959){
	  echo "
		<a href='perfect'>
		<div class='col-sm-6'>
		<img src='fsept/produk/sesi3/basic/7.png' class='img-responsive'>
		<img src='fsept/produk/sesi3/basic/b7.png' class='img-responsive'>
		</a>
	    </div>
		";
	}
	elseif( ($jam>=251000 && $jam<282100) && $hperfect['stock']>=1){
		echo "
		<div class='col-sm-6'>
		<a href='perfect'>
		<img src='fsept/produk/sesi3/basic/11.png' class='img-responsive'>
		<img src='fsept/produk/sesi3/basic/b11.png' class='img-responsive'>
		</a>
		</div>
		";
	}else if($hperfect["stock"] == 0){
		echo "
		<div class='col-sm-6'>
			<img src='fsept/produk/sesi3/ss/11.png' class='img-responsive'>
			<img src='fsept/produk/sesi3/ss/ss.png' class='img-responsive'>
		</div>
		";
	}else if($jam>=282100){
		
	}
	
	$kkchiro=mysqli_query($conn,"select *from newflash where brand='kkchiro'");
	$hkkchiro=mysqli_fetch_array($kkchiro);
	if($jam<250959){
	  echo "
		<div class='col-sm-6'>
		<a href='chiro'>
		<img src='fsept/produk/sesi3/basic/8.png' class='img-responsive'>
		<img src='fsept/produk/sesi3/basic/b8.png' class='img-responsive'>
		</a>
	    </div>
		";
	}
	elseif( ($jam>=251000 && $jam<282100) && $hkkchiro['stock']>=1){
		echo "
		<div class='col-sm-6'>
		<a href='chiro'>
		<img src='fsept/produk/sesi3/basic/12.png' class='img-responsive'>
		<img src='fsept/produk/sesi3/basic/b12.png' class='img-responsive'>
		</a>
		</div>
		";
	}else if($hkkchiro["stock"] == 0){
		echo "
		<div class='col-sm-6'>
			<img src='fsept/produk/sesi3/ss/12.png' class='img-responsive'>
			<img src='fsept/produk/sesi3/ss/ss.png' class='img-responsive'>
		</div>
		";
	}else if($jam>=282100){
		
	}
	
	
}
?>


<div style="clear:both"><br></div>
<p class='berlakuklik'> KUPON BERLAKU AKAN DATANG</p>
<div class="col-sm-12" id="menu">

<div class="col-sm-4 col-xs-12">
	<a href="d3"><img src="fsept/button/ss3.png" class="img-responsive"></a>
</div>

</div>


<div style="clear:both"><br></div>

<div class="col-sm-12" id="container">

</div>

<div style="clear:both"><br></div>

<p class='sudahklik'> KUPON YANG SUDAH BERLALU</p>

<center>
<div class='row' id='selesai'>
<?php
if($hari>=15){
	echo "
	<div class='col-sm-4 col-xs-12'>
	<a href='d1'><img src='fsept/button/sl1.png' class='img-responsive'></a>
	</div>
	";
}else{
	
}

if($hari>=22){
	echo"
	<div class='col-sm-4 col-xs-12'>
	<a href='d2'><img src='fsept/button/sl2.png' class='img-responsive'></a>
	</div>
	";
}


?>	
</div>
</center>

<div class='col-sm-12' id='sscontainer'>


</div>


<div style='clear:both'><br></div>
<center><a href="https://api.whatsapp.com/send?phone=628990021020&text=Halo%20Admin%20Flash%20Sale%20Chandra%20Karya"><img src='fsept/dll/kontak.png' class='img-responsive'></a></center>
<br>

<!--
<img src="img/sementara/1.jpg" class="img-responsive">
<img src="img/sementara/2.jpg" class="img-responsive">
<img src="img/sementara/3.jpg" class="img-responsive">
<img src="img/sementara/4.jpg" class="img-responsive">
-->
<footer>
<?php include('footer.php')?>
</footer>


<div class="modal fade" id="add1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><center><b>Divan OHIO</b></center></h5>
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
      <input type='hidden' name='voucher' value='DIVANOHIO'>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Produk 1 -->

<div class="modal fade" id="produk1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><center><b>Tea Table Malone</b></center></h5>
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
      <input type='hidden' name='voucher' value='malone'>
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
        <h5 class="modal-title" id="exampleModalLabel"><center><b>Meja Makan CK </b></center></h5>
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
      <input type='hidden' name='voucher' value='mejack'>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Produk 3 -->

<div class="modal fade" id="produk3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><center><b>Tea Table Olivier</b></center></h5>
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
      <input type='hidden' name='voucher' value='olivier'>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

 <!-- produk 4-->

<div class="modal fade" id="produk4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><center><b>Sofa Arden 321</b></center></h5>
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
      <input type='hidden' name='voucher' value='arden'>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Produk 5 -->

<div class="modal fade" id="produk5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><center><b>Forst Pillow</b></center></h5>
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
      <input type='hidden' name='voucher' value='forst'>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

 <!-- produk 6-->

<div class="modal fade" id="produk6" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><center><b>Sofabed Cross </b></center></h5>
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
      <input type='hidden' name='voucher' value='nova'>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>