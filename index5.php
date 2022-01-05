<html>

<head>
<?php
include "header.php";
date_default_timezone_set('Asia/Jakarta');
$date=date('j');
$button=date('jH');
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
</script>
</head>

<body>

<div class='gatas'></div>
<center><img src='imgg/1.png' class='img-responsive'></center>
<br>
<center><p class='judul'>FLASH SALE CHANDRA KARYA</p></center>

<p class="homedesc">
Flash Sale Chandra Karya menghadirkan BRANDED SPRINGBED, SOFA dan FURNITURE dengan penawaran EKSTRA MURAH jaminan produk baru bergaransi resmi yang kami hadirkan dengan kuota terbatas.
<br><br>
Chandra Karya Flash Sale akan dimulai setiap jam 10.00 pada tanggal 14-17,21,22,28,29 Agustus 2021. Masing-masing produk hanya tersedia 4 kuota untuk 4 transaksi tercepat berlaku untuk pembelanjaan melalui Online di flashsale.chandrakarya.com & Offline di seluruh gerai Chandra Karya. SIAPA CEPAT DIA DAPAT!
</p>
<br>
<p class='infoklik'> KUPON BERLAKU SEKARANG</p>
<div class="col-sm-12"><center>
	<div class="col-sm-6">
	<img src='imgg/kk/mp.jpg' class='img-responsive'>
	</div>
	<div class="col-sm-6">
	<img src='imgg/kk/nr.jpg' class='img-responsive'>
	</div>
	
	<div style="clear:both"><br></div>
	
	<div class="col-sm-6">
	<img src='imgg/kk/divan.png' class='img-responsive'>
	</div>
	<div class="col-sm-6">
	<img src='imgg/kk/divan++.png' class='img-responsive'>
	</div>
	
</center></div>
<div style="clear:both"><br></div>
<p class='berlakuklik'> KUPON BERLAKU AKAN DATANG</p>

<div class='col-sm-12' id='menu'><center>
	<div class='col-sm-4 col-xs-12'>	
			<img src='imgg/ss1.png' class='img-responsive'>
	</div>
	<div class="hp"><br></div>
	<div class='col-sm-4 col-xs-12'>	
			<img src='imgg/s2.png' class='img-responsive'>
	</div>
	<div class="hp"><br></div>
		<div class='col-sm-4 col-xs-12'>	
			<img src='imgg/s3.png' class='img-responsive'>
	</div>
</center></div>

<div style="clear:both"><br></div>

<p class='sudahklik'> KUPON YANG SUDAH BERLALU</p>


<div id="container">

</div>

<div style='clear:both'><br></div>
<center><a href="https://api.whatsapp.com/send?phone=628990021020&text=Halo%20Admin%20Flash%20Sale%20Chandra%20Karya"><img src='imgg/hubungi.png' class='img-responsive'></a></center>
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

</body>
</html>