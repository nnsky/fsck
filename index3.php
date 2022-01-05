<html>

<head>
<?php
include "header.php";
date_default_timezone_set("Asia/Bangkok");
$date=date('d');
$jam=date('Hi');;

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


// Set the date we're counting down to
var countDownDate = new Date("Feb 28, 2021 16:00:00").getTime();
var countupDate = new Date("Feb 27, 2021 16:00:00").getTime();

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
        document.getElementById("fs").innerHTML = "FLASH SALE SELESAI";
		document.getElementById("days").innerHTML = "-";
		document.getElementById("hours").innerHTML = "-";
		document.getElementById("minutes").innerHTML =  "-";
		document.getElementById("seconds").innerHTML =  "-";
    }
}, 1000);

</script>
</head>
<body>
<ul class='pc'>
      <li class='tinfo'><span id="fs"></span></li>
      <li class='timing'><span id="days"></span>DAYS</li>
      <li class='timing'><span id="hours"></span>Hours</li>
      <li class='timing'><span id="minutes"></span>Minutes</li>
      <li class='timing'><span id="seconds"></span>Seconds</li>
</ul>

<center>
<img src='img/pcbaner.jpg' class='img-responsive pbanner' style='margin-top:-20px;'>
<img src='img/hpbaner.jpg' class='img-responsive hbanner' style='margin-top:-20px;'>
<img src='img/pccapp.jpg' class='img-responsive pbanner'>
<img src='img/hpcapp.jpg' class='img-responsive hbanner'>
<br>

<div id='menu'>
<div class='col-sm-4 col-xs-4'>
<a href='d1'><img src='img/tombol/l6.jpg' class='img-responsive'></a>
</div>
<div class='col-sm-4 col-xs-4'>
<a href='d2'><img src='img/tombol/l7.jpg' class='img-responsive'></a>
</div>
<div class='col-sm-4 col-xs-4'>
<a href='d3'><img src='img/tombol/l11.jpg' class='img-responsive'></a>
</div>
<div style='clear:both'></div>
<br>
<div class='col-sm-4 col-xs-4'>
<a href='d4'><img src='img/tombol/l12.jpg' class='img-responsive'></a>
</div>
<div class='col-sm-4 col-xs-4'>
<a href='d5'><img src='img/tombol/l13.jpg' class='img-responsive'></a>
</div>
<div class='col-sm-4 col-xs-4'>
<a href='d6'><img src='img/tombol/l14.jpg' class='img-responsive'></a>
</div>
<div style='clear:both'></div>
<br>

<div class='col-sm-4 col-xs-4'>
<a href='d7'><img src='img/tombol/l20.jpg' class='img-responsive'></a>
</div>
<div class='col-sm-4 col-xs-4'>
<a href='d6'><img src='img/tombol/l21.jpg' class='img-responsive'></a>
</div>
<div class='col-sm-4 col-xs-4'>
<a href='d9'><img src='img/tombol/l27.jpg' class='img-responsive'></a>
</div>
<div style='clear:both'></div>
<br>

<div class='col-sm-4 col-xs-4'>
<a href='d10'><img src='img/tombol/l28.jpg' class='img-responsive'></a>
</div>
<div class='col-sm-4 col-xs-4'>

</div>
<div class='col-sm-4 col-xs-4'>

</div>
<div style='clear:both'></div>
<br>
</div>
</center>
<div class='row' id='container'>
<?php
//produk 1
  if($jam<1254){
	 $g11='31.jpg';
	 $t11="<a href='https://www.chandrakarya.com/featured-products/1205-cabinet-casey-flash-sale-chandra-karya-.html'><img src='img/tombol/buttoninfo.png' class='img-responsive'></a>";	
	 $t12="<a href='https://www.chandrakarya.com/featured-products/1220-tea-table-nancy-flash-sale-chandra-karya.html'><img src='img/tombol/buttoninfo.png' class='img-responsive'></a>";
 }else{
	$g11='d1.jpg';
	$t11="
		<div class='row'>
			 <div class='col-sm-6 col-xs-6'>
				<a href='https://www.chandrakarya.com/featured-products/1205-cabinet-casey-flash-sale-chandra-karya-.html'><img src='img/tombol/bweb.png' class='img-responsive'></a>
				 </div>
			 <div class='col-sm-6 col-xs-6'>
				<a href='https://api.whatsapp.com/send?phone=628990021020&text=Halo%20Admin%20Flash%20Sale%20Chandra%20Karya,%20saya%20ingin%20membeli%20produk%20Cabinet%20Casey%20Flashsale'><img src='img/tombol/bwa.png' class='img-responsive'></a>
			   </div>
		</div>
		";
	$t12="
			<div class='row'>
			 <div class='col-sm-6 col-xs-6'>
				<a href='https://www.chandrakarya.com/featured-products/1220-tea-table-nancy-flash-sale-chandra-karya.html'><img src='img/tombol/bweb.png' class='img-responsive'></a>
				 </div>
			 <div class='col-sm-6 col-xs-6'>
				<a href='https://api.whatsapp.com/send?phone=628990021020&text=Halo%20Admin%20Flash%20Sale%20Chandra%20Karya,%20saya%20ingin%20membeli%20produk%20Tea%20Table%20Nancy%20Flashsale'><img src='img/tombol/bwa.png' class='img-responsive'></a>
			   </div>
		</div>
	";
  }
  
 //produk 2 
   if($jam<1324){	 
	 $g21='32.jpg';
	 $g22='42.jpg';
	 $t21="<a href='https://www.chandrakarya.com/featured-products/1219-sofa-kanzano-211-dudukan-flash-sale-chandra-karya.html'><img src='img/tombol/buttoninfo.png' class='img-responsive'></a>";
	 $t22="<a href='https://www.chandrakarya.com/featured-products/1208-tea-table-brystol-flash-sale-chandra-karya.html'><img src='img/tombol/buttoninfo.png' class='img-responsive'></a>";
  }else{
	$g21='d2.jpg';
	$g22='d2.jpg';
		$t21="
			<div class='row'>
			  <div class='col-sm-6 col-xs-6'>
				<a href='https://www.chandrakarya.com/featured-products/1219-sofa-kanzano-211-dudukan-flash-sale-chandra-karya.html'><img src='img/tombol/bweb.png' class='img-responsive'></a>
				 </div>
			   <div class='col-sm-6 col-xs-6'>
				<a href='https://api.whatsapp.com/send?phone=628990021020&text=Halo%20Admin%20Flash%20Sale%20Chandra%20Karya,%20saya%20ingin%20membeli%20produk%20Sofa%20Kanzo%20211%20Dudukan%20Flashsale'><img src='img/tombol/bwa.png' class='img-responsive'></a>
			   </div>
			</div>
	";
	$t22="
				<div class='row'>
			  <div class='col-sm-6 col-xs-6'>
				<a href='https://www.chandrakarya.com/featured-products/1208-tea-table-brystol-flash-sale-chandra-karya.html'><img src='img/tombol/bweb.png' class='img-responsive'></a>
				 </div>
			   <div class='col-sm-6 col-xs-6'>
				<a href='https://api.whatsapp.com/send?phone=628990021020&text=Halo%20Admin%20Flash%20Sale%20Chandra%20Karya,%20saya%20ingin%20membeli%20produk%20Tea%20Table%20Brystol%20QI%20Flashsale'><img src='img/tombol/bwa.png' class='img-responsive'></a>
			   </div>
			</div>
	";

  }
//produk 3 
 
     if($jam<1354){
	 $g31='33.jpg';
	 $t31="<a href='https://www.chandrakarya.com/featured-products/1206-springbed-airland-chiropedic-qi-mattress-only-flash-sale-chandra-karya.html'><img src='img/tombol/buttoninfo.png' class='img-responsive'></a>";  
	 $t32="<a href='https://www.chandrakarya.com/featured-products/1209-sofa-amarilis-211-dudukan-flash-sale-chandra-karya.html'><img src='img/tombol/buttoninfo.png' class='img-responsive'></a>";  
  }else{
	$g31='d3.jpg';
	$t31="
			<div class='row'>
			  <div class='col-sm-6 col-xs-6'>
				<a href='https://www.chandrakarya.com/featured-products/1206-springbed-airland-chiropedic-qi-mattress-only-flash-sale-chandra-karya.html'><img src='img/tombol/bweb.png' class='img-responsive'></a>;
				 </div>
			   <div class='col-sm-6 col-xs-6'>
				<a href='https://api.whatsapp.com/send?phone=628990021020&text=Halo%20Admin%20Flash%20Sale%20Chandra%20Karya,%20saya%20ingin%20membeli%20produk%20Springbed%20Airland%20Chiropedic%20QI%20Mattress%20Only%20Flashsale'><img src='img/tombol/bwa.png' class='img-responsive'></a>
			   </div>
			</div>
	";
	$t32="
			<div class='row'>
			  <div class='col-sm-6 col-xs-6'>
				<a href='https://www.chandrakarya.com/featured-products/1209-sofa-amarilis-211-dudukan-flash-sale-chandra-karya.html'><img src='img/tombol/bweb.png' class='img-responsive'></a>;
				 </div>
			   <div class='col-sm-6 col-xs-6'>
				<a href='https://api.whatsapp.com/send?phone=628990021020&text=Halo%20Admin%20Flash%20Sale%20Chandra%20Karya,%20saya%20ingin%20membeli%20produk%20Sofa%20Amarilis%20211%20Dudukan%20Flashsale'><img src='img/tombol/bwa.png' class='img-responsive'></a>
			   </div>
			</div>
	";
  }
//produk 4 
 
  if($jam<1424){
	 $g41="34.jpg";
	 $g42="44.jpg";
	 $t41="<a href='https://www.chandrakarya.com/featured-products/1212-sofa-l-berta-flash-sale-chandra-karya.html'><img src='img/tombol/buttoninfo.png' class='img-responsive'></a>";
	 $t42="<a href='https://www.chandrakarya.com/featured-products/1217-springbed-serta-perfection-mattress-only-flash-sale-chandra-karya.html'><img src='img/tombol/buttoninfo.png' class='img-responsive'></a>";
 }else{
	$g41='d4.jpg';
	$g42='d4.jpg';
	$t41="
			<div class='row'>
			  <div class='col-sm-6 col-xs-6'>
				<a href='https://www.chandrakarya.com/featured-products/1212-sofa-l-berta-flash-sale-chandra-karya.html'><img src='img/tombol/bweb.png' class='img-responsive'></a>;
				 </div>
			   <div class='col-sm-6 col-xs-6'>
				<a href='https://api.whatsapp.com/send?phone=628990021020&text=Halo%20Admin%20Flash%20Sale%20Chandra%20Karya,%20saya%20ingin%20membeli%20produk%20Sofa%20L%20Berta%20Flashsale'><img src='img/tombol/bwa.png' class='img-responsive'></a>
			   </div>
			</div>
	";
	$t42="
			<div class='row'>
			  <div class='col-sm-6 col-xs-6'>
				<a href='https://www.chandrakarya.com/featured-products/1217-springbed-serta-perfection-mattress-only-flash-sale-chandra-karya.html'><img src='img/tombol/bweb.png' class='img-responsive'></a>;
				 </div>
			   <div class='col-sm-6 col-xs-6'>
				<a href='https://api.whatsapp.com/send?phone=628990021020&text=Halo%20Admin%20Flash%20Sale%20Chandra%20Karya,%20saya%20ingin%20membeli%20produk%20Springbed%20Serta%20Perfection%20Mattress%20Only%20Flashsale'><img src='img/tombol/bwa.png' class='img-responsive'></a>
			   </div>
			</div>	
	";

  }
 //produk 5
    if($jam<1454){
	 $g51='35.jpg';
	 $g52='45.jpg';
	 $t51="<a href='https://www.chandrakarya.com/featured-products/1207-springbed-simmons-charming-mattress-only-flash-sale-chandra-karya.html'><img src='img/tombol/buttoninfo.png' class='img-responsive'></a>";
	 $t52="<a href='https://www.chandrakarya.com/featured-products/1218-springbed-king-koil-chiro-endorsed-mattress-only-flash-sale-chandra-karya.html'> <img src='img/tombol/buttoninfo.png'class='img-responsive'></a>";
 }else{
	$g51='d5.jpg';
	$g52='d5.jpg';
	$t51="
			<div class='row'>
			  <div class='col-sm-6 col-xs-6'>
				<a href='https://www.chandrakarya.com/featured-products/1207-springbed-simmons-charming-mattress-only-flash-sale-chandra-karya.html'><img src='img/tombol/bweb.png' class='img-responsive'></a>;
				 </div>
			   <div class='col-sm-6 col-xs-6'>
				<a href='https://api.whatsapp.com/send?phone=628990021020&text=Halo%20Admin%20Flash%20Sale%20Chandra%20Karya,%20saya%20ingin%20membeli%20produk%20Springbed%20Simmons%20Charming%20Mattress%20Only%20Flashsale'><img src='img/tombol/bwa.png' class='img-responsive'></a>
			   </div>
			</div>
	
	";
	$t52="
			<div class='row'>
			  <div class='col-sm-6 col-xs-6'>
				<a href='https://www.chandrakarya.com/featured-products/1218-springbed-king-koil-chiro-endorsed-mattress-only-flash-sale-chandra-karya.html'><img src='img/tombol/bweb.png' class='img-responsive'></a>;
				 </div>
			   <div class='col-sm-6 col-xs-6'>
				<a href='https://api.whatsapp.com/send?phone=628990021020&text=Halo%20Admin%20Flash%20Sale%20Chandra%20Karya,%20saya%20ingin%20membeli%20produk%20Springbed%20KingKoil%20Chiro%20Endorsed%20Mattress%20Only%20Flashsale'><img src='img/tombol/bwa.png' class='img-responsive'></a>
			   </div>
			</div>	
	";
}
//produk 6
    if($jam<1524){
	 $g61='36.jpg';
	 $t61="<a href='https://www.chandrakarya.com/featured-products/1210-springbed-king-koil-chiro-endorsed-full-set-flash-sale-chandra-karya.html'><img src='img/tombol/buttoninfo.png' class='img-responsive'></a>";
	 $t62="<a href='https://www.chandrakarya.com/featured-products/1211-springbed-spring-air-crystal-full-set-flash-sale-chandra-karya.html'><img src='img/tombol/buttoninfo.png' class='img-responsive'></a>";
 }else{
	$g61='d6.jpg';
	$t61="
			<div class='row'>
			  <div class='col-sm-6 col-xs-6'>
				<a href='https://www.chandrakarya.com/featured-products/1210-springbed-king-koil-chiro-endorsed-full-set-flash-sale-chandra-karya.html'><img src='img/tombol/bweb.png' class='img-responsive'></a>;
				 </div>
			   <div class='col-sm-6 col-xs-6'>
				<a href='https://api.whatsapp.com/send?phone=628990021020&text=Halo%20Admin%20Flash%20Sale%20Chandra%20Karya,%20saya%20ingin%20membeli%20produk%20Springbed%20Kingkoil%20Chiro%20Endorsed%20Flashsale'><img src='img/tombol/bwa.png' class='img-responsive'></a>
			   </div>
			</div>
	";
	$t62="
				<div class='row'>
			  <div class='col-sm-6 col-xs-6'>
				<a href='https://www.chandrakarya.com/featured-products/1211-springbed-spring-air-crystal-full-set-flash-sale-chandra-karya.html'><img src='img/tombol/bweb.png' class='img-responsive'></a>;
				 </div>
			   <div class='col-sm-6 col-xs-6'>
				<a href='https://api.whatsapp.com/send?phone=628990021020&text=Halo%20Admin%20Flash%20Sale%20Chandra%20Karya,%20saya%20ingin%20membeli%20produk%20Springbed%20Spring%20Air%20Crystal%20Flashsale'><img src='img/tombol/bwa.png' class='img-responsive'></a>
			   </div>
			</div>
	";
}
//produk 7
    if($jam<1554){
	 $g72='37.jpg';
	 $t72="<a href='https://www.chandrakarya.com/featured-products/1215-springbed-king-koil-world-endorsed-full-set-flash-sale-chandra-karya.html'><img src='img/tombol/buttoninfo.png' class='img-responsive'></a>";
 }else{
	$g72='d7.jpg';
	$t72="
			<div class='row'>
			  <div class='col-sm-6 col-xs-6'>
				<a href='https://www.chandrakarya.com/featured-products/1215-springbed-king-koil-world-endorsed-full-set-flash-sale-chandra-karya.html'><img src='img/tombol/bweb.png' class='img-responsive'></a>;
				 </div>
			   <div class='col-sm-6 col-xs-6'>
				<a href='https://api.whatsapp.com/send?phone=628990021020&text=Halo%20Admin%20Flash%20Sale%20Chandra%20Karya,%20saya%20ingin%20membeli%20produk%20Springbed%20KingKoil%20World%20Endorsed%20Fullset%20Flashsale'><img src='img/tombol/bwa.png' class='img-responsive'></a>
			   </div>
			</div>
	";
}


 if($date=='28'){
echo "
	<div class='col-sm-4 col-xs-12'>
		<div class='thumbnail'>
		 <img src='img/d10/".$g11."' class='img-responsive'>
			 <div class='caption'>
			 <p class='spekjudul'>Spesifikasi Produk :</p>
				<ul class='spekdetil'>
				<li>Item : Meja Tamu </li>
				<li>Tipe : MTR AH 1050 S B</li>
				<li>Bahan : Kaca </li>
				<li>Uk. PxLxT : 100cm x 50cm x 40cm </li>
				<li></li>
				</ul>
					".$t12."
			 </div>
		</div>
	</div>
	
		<div class='col-sm-4 col-xs-12'>
		<div class='thumbnail'>
		 <img src='img/d10/".$g21."' class='img-responsive'>
			 <div class='caption'>
			 <p class='spekjudul'>Spesifikasi Produk :</p>
				<ul class='spekdetil'>
				<li>Item : Tea Table </li>
				<li>Tipe : C957</li>
				<li>Bahan : MDF, Kaca</li>
				<li>Warna : White Gold</li>
				<li>Ukuran P x L x T : 120cm x 61cm x 46cm </li>
				</ul>
					".$t22."
			 </div>
		</div>
	</div>
	
				<div class='col-sm-4 col-xs-12'>
		<div class='thumbnail'>
		 <img src='img/d10/".$g31."' class='img-responsive'>
			 <div class='caption'>
			 <p class='spekjudul'>Spesifikasi Produk :</p>
				<ul class='spekdetil'>
				<li>Item : Sofa</li>
				<li>Tipe : Amarilis</li>
				<li>Bahan : Vienna </li>
				<li>Uk 1 ddk PxLxT : 104cmx85cmx92cm</li>
				<li>Uk 2 ddk PxLxT : 154cmx85cmx92cm </li>
				</ul>
				".$t32."
			 </div>
		</div>
	</div>
	
		<div class='col-sm-4 col-xs-12'>
		<div class='thumbnail'>
		 <img src='img/d10/".$g42."' class='img-responsive'>
			 <div class='caption'>
			 <p class='spekjudul'>Spesifikasi Produk :</p>
				<ul class='spekdetil'>
				<li>Mattress Thickness : 36 cm</li>
				<li>Soft</li>
				<li>Solid Curve Foundation</li>
				<li>Luxurious Knit</li>
				<li>Pocket Spring with latex</li>
				</ul>
				".$t42."
			 </div>
		</div>
	</div>	
	
		<div class='col-sm-4 col-xs-12'>
		<div class='thumbnail'>
		 <img src='img/d10/".$g52."' class='img-responsive'>
			 <div class='caption'>
			 <p class='spekjudul'>Spesifikasi Produk :</p>
				<ul class='spekdetil'>
				<li>Mattress Thickness : 32.5 cm</li>
				<li>Firm</li>
				<li>Ventilated Foam Encasement</li>
				<li>7 Zone Honeycomb Pocket Coil</li>
				<li>Superior Anti Skid</li>
				</ul>
				".$t52."
			 </div>
		</div>
	</div>
	
			<div class='col-sm-4 col-xs-12'>
		<div class='thumbnail'>
		 <img src='img/d10/".$g61."' class='img-responsive'>
			 <div class='caption'>
			 <p class='spekjudul'>Spesifikasi Produk :</p>
				<ul class='spekdetil'>
				<li>Mattress Thickness : 33 cm</li>
				<li>Pocket Nano Spring with 7 Zone Support</li>
				<li>Foam Encasement Triple Guard</li>
				<li>Euro Top</li>
				<li>Jacquard Fabric 3D Knitted</li>
				</ul>
				".$t62."
			 </div>
		</div>
	</div>
	
		<div class='col-sm-4 col-xs-12'>
		<div class='thumbnail'>
		 <img src='img/d10/".$g72."' class='img-responsive'>
			 <div class='caption'>
			 <p class='spekjudul'>Spesifikasi Produk :</p>
				<ul class='spekdetil'>
				<li>Mattress Thickness : 33 cm</li>
				<li>Pocket Nano Spring with 7 Zone Support</li>
				<li>Foam Encasement Triple Guard</li>
				<li>Euro Top</li>
				<li>Jacquard Fabric 3D Knitted</li>
				</ul>
				".$t72."
			 </div>
		</div>
	</div>
";
}else if ($date=='27'){
echo "
	<div class='col-sm-4 col-xs-12'>
		<div class='thumbnail'>
		 <img src='img/d9/".$g11."' class='img-responsive'>
			 <div class='caption'>
			 <p class='spekjudul'>Spesifikasi Produk :</p>
				<ul class='spekdetil'>
				<li>Item: Cabinet + Mirror</li>
				<li>Tipe: EJT 74-628</li>
				<li>Bahan : MDF, Kaca - Cermin, Besi</li>
				<li>Warna : Hitam</li>			
				<li>Ukuran P x L x T : 55cm x 34cm x 167cm</li>			
				</ul>
					".$t11."
			 </div>
		</div>
	</div>
	
		<div class='col-sm-4 col-xs-12'>
		<div class='thumbnail'>
		 <img src='img/d9/".$g22."' class='img-responsive'>
			 <div class='caption'>
			 <p class='spekjudul'>Spesifikasi Produk :</p>
				<ul class='spekdetil'>
				<li>Item : Sofa</li>
				<li>Tipe : Kanzano</li>
				<li>Bahan : Daphnie</li>
				<li>Uk 2 ddkan PxLxT : 137cm x 75cm x 85cm </li>
				<li>Uk 1 ddkan PxLxT : 83cm x 75cm x 85cm </li>
				</ul>
				".$t21."
			 </div>
		</div>
	</div>
	
					<div class='col-sm-4 col-xs-12'>
		<div class='thumbnail'>
		 <img src='img/d9/".$g31."' class='img-responsive'>
			 <div class='caption'>
			 <p class='spekjudul'>Spesifikasi Produk :</p>
				<ul class='spekdetil'>
				<li>Mattress Thickness : 25 cm</li>
				<li>Extra Firm</li>
				<li>Pocket Spring Orthopedic </li>
				<li></li>
				<li></li>
				</ul>
				".$t31."
			 </div>
		</div>
	</div>
		
	<div class='col-sm-4 col-xs-12'>
		<div class='thumbnail'>
		 <img src='img/d9/".$g41."' class='img-responsive'>
			 <div class='caption'>
			 <p class='spekjudul'>Spesifikasi Produk :</p>
				<ul class='spekdetil'>
				<li>Item : Sofa L</li>
				<li>Tipe : Berta</li>
				<li>Bahan : Vienna</li>
				<li>Ukuran P x L x T : 206cm x 140cm x 88cm</li>
				<br>
				</ul>
				".$t41."
			 </div>
		</div>
	</div>
	
	<div class='col-sm-4 col-xs-12'>
		<div class='thumbnail'>
		 <img src='img/d9/".$g51."' class='img-responsive'>
			 <div class='caption'>
			 <p class='spekjudul'>Spesifikasi Produk :</p>
				<ul class='spekdetil'>
				<li>Mattress Thickness : 27 cm</li>
				<li>Medium Firm</li>
				<li>Natural Latex</li>
				<li>6 Convolutions Spring</li>
				<li>Comfort Quilt Cover</li>
				</ul>
				".$t51."
			 </div>
		</div>
	</div>	
	
		<div class='col-sm-4 col-xs-12'>
		<div class='thumbnail'>
		 <img src='img/d9/".$g61."' class='img-responsive'>
			 <div class='caption'>
			 <p class='spekjudul'>Spesifikasi Produk :</p>
				<ul class='spekdetil'>
				<li>Mattress Thickness : 32.5 cm</li>
				<li>Firm</li>
				<li>Ventilated Foam Encasement</li>
				<li>7 Zone Honeycomb Pocket Coil</li>
				<li>Superior Anti Skid</li>
				</ul>
				".$t61."
			 </div>
		</div>
	</div>
";
}else{

}
 
?>
</div>
<br>
<div style='clear:both'></div>
<center>
<a href='https://api.whatsapp.com/send?phone=628990021020&text=Hallo%20Admin%20Flash%20Sale%20Chandra%20Karya,'><img src='img/call4.jpg' class='img-responsive'></a>
</center>
<?php
include "footer.php";
?>
</body>
</html>