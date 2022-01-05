<html>

<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>    
<title>KUPON DISKON</title>
<style>
.kupon{
    border:2px black solid;
    padding:10px 10px 10px 10px ;
    background-color:red;
    color:white;
    font-size:32px;
}
.info{
    font-size:30px;
    color:red;
    font-weight: bold;
}

@media (max-width: 768px) { 
.info{
    font-size:12px;
}
.kupon{
    border:2px black solid;
    padding:10px 10px 10px 10px ;
    background-color:red;
    color:white;
    font-size:15px;
}
</style>
</head>

<?php
if($_GET['voucher']=='kupon Kasur CE 160x200 kupon 500rb'){
    $gambar="img/kupon/kk/ce/mo/160.jpg";
    $value='img/kupon/kuponsystemver4/500.jpg';
}else if($_GET['voucher']=='kupon Kasur CE 200x200 kupon 750rb'){
    $gambar="img/kupon/kk/ce/mo/200.jpg";
    $value='img/kupon/kuponsystemver4/750.jpg';
}else if($_GET['voucher']=='kupon Kasur CE 180x200 kupon 750rb'){
    $gambar="img/kupon/kk/ce/mo/180.jpg";
    $value='img/kupon/kuponsystemver4/200.jpg';
}else if($_GET['voucher']=='kupon Kasur CE Set Baltimore 160x200 Kupon 750rb'){
    $gambar="img/kupon/kk/ce/cebal/160.jpg";
    $value='img/kupon/kuponsystemver4/750.jpg';
}else if($_GET['voucher']=='kupon Kasur CE Set Baltimore 180x200 Kupon 750rb'){
    $gambar="img/kupon/kk/ce/cebal/180.jpg";
    $value='img/kupon/kuponsystemver4/750.jpg';
}else if($_GET['voucher']=='kupon Kasur CE Set Baltimore 200x200 Kupon 750rb'){
    $gambar="img/kupon/kk/ce/cebal/200.jpg";
    $value='img/kupon/kuponsystemver4/750.jpg';
}else if($_GET['voucher']=='kupon Kasur WE 180x200 kupon 500rb'){
    $gambar="img/kupon/kk/we/mo/180.jpg";
    $value='img/kupon/kuponsystemver4/500.jpg';
}else if($_GET['voucher']=='kupon Kasur WE 200x200 kupon 500rb'){
    $gambar="img/kupon/kk/we/mo/200.jpg";
    $value='img/kupon/kuponsystemver4/500.jpg';
}else if($_GET['voucher']=='kupon Kasur WE Set Baltimore 180x200 Kupon 750rb'){
    $gambar="img/kupon/kk/we/cebal/180.jpg";
    $value='img/kupon/kuponsystemver4/750.jpg';
}else if($_GET['voucher']=='kupon Kasur WE Set Baltimore 200x200 Kupon 1jt'){
    $gambar="img/kupon/kk/we/cebal/200.jpg";
    $value='img/kupon/kuponsystemver4/1jt.jpg';
}else if($_GET['voucher']=='kupon Kasur CE Div Ohio HB Baltimore 180x200 kupon 750rb'){
    $gambar="img/kupon/kk/ce/hbalti/180.jpg";
    $value='img/kupon/kuponsystemver4/750.jpg';
}else if($_GET['voucher']=='kupon Kasur CE Div Ohio HB Baltimore 200x200 kupon 750rb'){
    $gambar="img/kupon/kk/ce/hbalti/200.jpg";
    $value='img/kupon/kuponsystemver4/750.jpg';
}else if($_GET['voucher']=='kupon Kasur WE Div Ohio HB Baltimore 180x200 kupon 750rb'){
    $gambar="img/kupon/kk/we/hbalti/180.jpg";
    $value='img/kupon/kuponsystemver4/2.jpg';
}else if($_GET['voucher']=='kupon Kasur WE Div Ohio HB Baltimore 200x200 kupon 1jt'){
    $gambar="img/kupon/kk/ce/hbalti/200.jpg";
    $value='img/kupon/kuponsystemver4/3.jpg';
}else if($_GET['voucher']=='kupon kasur IC 180x200 Kupon 750rb'){
    $gambar="img/kupon/kk/ic/180.jpg";
    $value='img/kupon/kuponsystemver4/750.jpg';
}else if($_GET['voucher']=='kupon kasur IC 200x200 Kupon 750rb'){
    $gambar="img/kupon/kk/ic/200.jpg";
    $value='img/kupon/kuponsystemver4/750.jpg';
}else if($_GET['voucher']=='kupon kasur GC 160x200 Kupon 750rb'){
    $gambar="img/kupon/kk/gc/160.jpg";
    $value='img/kupon/kuponsystemver4/750.jpg';
}else if($_GET['voucher']=='kupon kasur GC 180x200 Kupon 750rb'){
    $gambar="img/kupon/kk/gc/180.jpg";
    $value='img/kupon/kuponsystemver4/750.jpg';
}else if($_GET['voucher']=='kupon kasur GC 200x200 Kupon 750rb'){
    $gambar="img/kupon/kk/gc/200.jpg";
    $value='img/kupon/kuponsystemver4/750.jpg';
}else if($_GET['voucher']=='kupon kasur Visc 160x200 Kupon 1jt'){
    $gambar="img/kupon/kk/vs/160.jpg";
    $value='img/kupon/kuponsystemver4/1jt.jpg';
}else if($_GET['voucher']=='kupon kasur Visc 180x200 Kupon 1jt'){
    $gambar="img/kupon/kk/vs/180.jpg";
    $value='img/kupon/kuponsystemver4/1jt.jpg';
}else if($_GET['voucher']=='kupon kasur Visc 200x200 Kupon 1jt'){
    $gambar="img/kupon/kk/vs/200.jpg";
    $value='img/kupon/kuponsystemver4/1jt.jpg';
}else if($_GET['voucher']=='kupon Kasur CE Divan Ohio 180x200 kupon 1jt'){
    $gambar="img/kupon/kk/ce/dohio/180.jpg";
    $value='img/kupon/kuponsystemver4/1jt.jpg';
}else if($_GET['voucher']=='kupon Kasur CE Divan Ohio 200x200 kupon 1jt'){
    $gambar="img/kupon/kk/ce/dohio/200.jpg";
    $value='img/kupon/kuponsystemver4/1jt.jpg';
}else if($_GET['voucher']=='kupon Kasur WE Divan Ohio 180x200 kupon 1jt'){
    $gambar="img/kupon/kk/we/dohio/180.jpg";
    $value='img/kupon/kuponsystemver4/1jt.jpg';
}else if($_GET['voucher']=='kupon Kasur WE Divan Ohio 200x200 kupon 1jt'){
    $gambar="img/kupon/kk/we/dohio/200.jpg";
    $value='img/kupon/kuponsystemver4/1jt.jpg';
}else if($_GET['voucher']=='kupon Kasur PF 160x200 kupon 500rb'){
    $gambar="img/kupon/serta/pf/160.jpg";
    $value='img/kupon/kuponsystemver4/500.jpg';
}else if($_GET['voucher']=='kupon Kasur PF 180x200 kupon 500rb'){
    $gambar="img/kupon/serta/pf/180.jpg";
    $value='img/kupon/kuponsystemver4/500.jpg';
}else if($_GET['voucher']=='kupon Kasur NR 180x200 kupon 1250'){
    $gambar="img/kupon/kk/ce/nr/180.jpg";
    $value='img/kupon/kuponsystemver4/1250.jpg';
}else if($_GET['voucher']=='kupon Kasur NR 200x200 kupon 1250'){
    $gambar="img/kupon/kk/ce/nr/200.jpg";
    $value='img/kupon/kuponsystemver4/1250.jpg';
}else if($_GET['voucher']=='kupon Kasur GC Divan HB OHIO 160x200 kupon 1250'){
    $gambar="img/kupon/kk/gc/ohio/160.jpg";
    $value='img/kupon/kuponsystemver4/1250.jpg';
}else if($_GET['voucher']=='kupon Kasur GC Divan HB OHIO 180x200 kupon 1250'){
    $gambar="img/kupon/kk/gc/ohio/180.jpg";
    $value='img/kupon/kuponsystemver4/1250.jpg';
}else if($_GET['voucher']=='kupon Kasur GC Divan HB OHIO 200x200 kupon 1250'){
    $gambar="img/kupon/kk/gc/ohio/200.jpg";
    $value='img/kupon/kuponsystemver4/1250.jpg';
}else if($_GET['voucher']=='kupon Kasur GC Set Baltimore 160x200 kupon 1250'){
    $gambar="img/kupon/kk/gc/balti/160.jpg";
    $value='img/kupon/kuponsystemver4/1250.jpg';
}else if($_GET['voucher']=='kupon Kasur GC Set Baltimore 180x200 kupon 1250'){
    $gambar="img/kupon/kk/gc/balti/180.jpg";
    $value='img/kupon/kuponsystemver4/1250.jpg';
}else if($_GET['voucher']=='kupon Kasur GC Set Baltimore 200x200 kupon 1250'){
    $gambar="img/kupon/kk/gc/balti/200.jpg";
    $value='img/kupon/kuponsystemver4/1250.jpg';
}else if($_GET['voucher']=='kupon Kasur GC Set Philadelphia 160x200 kupon 1250'){
    $gambar="img/kupon/kk/gc/phil/160.jpg";
    $value='img/kupon/kuponsystemver4/1250.jpg';
}else if($_GET['voucher']=='kupon Kasur GC Set Philadelphia 180x200 kupon 1250'){
    $gambar="img/kupon/kk/gc/phil/180.jpg";
    $value='img/kupon/kuponsystemver4/1250.jpg';
}else if($_GET['voucher']=='kupon Kasur GC Set Philadelphia 200x200 kupon 1250'){
    $gambar="img/kupon/kk/gc/phil/200.jpg";
    $value='img/kupon/kuponsystemver4/1250.jpg';
}else if($_GET['voucher']=='kupon Kasur IC Set Philadelphia 160x200 kupon 1500'){
    $gambar="img/kupon/kk/ic/phil/160.jpg";
    $value='img/kupon/kuponsystemver4/1750.jpg';
}else if($_GET['voucher']=='kupon Kasur IC Set Philadelphia 180x200 kupon 1500'){
    $gambar="img/kupon/kk/ic/phil/180.jpg";
    $value='img/kupon/kuponsystemver4/1750.jpg';
}else if($_GET['voucher']=='kupon Kasur IC Set Philadelphia 200x200 kupon 1500'){
    $gambar="img/kupon/kk/ic/phil/200.jpg";
    $value='img/kupon/kuponsystemver4/1750.jpg';
}else if($_GET['voucher']=='Kasur only / set Therapedic 160/180/200'){
    $gambar="img/kupon/therapedic/mo/160.jpg";
    $value='img/kupon/kuponsystemver4/800.jpg';
}else if($_GET['voucher']=='Divan 160x200'){
    $gambar="img/kupon/kk/divan/div160.jpg";
    $value='img/kupon/kk/divan/harga1/1.jpg';
}else if($_GET['voucher']=='Divan 180x200'){
    $gambar="img/kupon/kk/divan/div180.jpg";
    $value='img/kupon/kk/divan/harga1/2.jpg';
}else if($_GET['voucher']=='Divan 200x200'){
    $gambar="img/kupon/kk/divan/div200.jpg";
    $value='img/kupon/kk/divan/harga1/3.jpg';
}else if($_GET['voucher']=='HB 200x200'){
    $gambar="img/kupon/kk/divan/hb200.jpg";
    $value='img/kupon/kk/divan/harga1/3.jpg';
}
echo "
<a href='kupon' class='btn btn-success btn-lg'>Halaman Utama</a>
<center><h4>Selamat Bapak/Ibu ".$_GET['nama'].", Anda Mendapatkan <br></h4>
<img src='".$gambar."' class='img-responsive'>
<img src='".$value."' class='img-responsive'>
<div class='caption'><br>
<span class='kupon'>KODE KUPON : ".$_GET['kode']."</span>
</div></center> <br>
";
if($_GET['voucher']=='Divan 160x200'){
	echo "
	<div class='container'>
<center class='info'>Silahkan Melakukan Pembelian Kasur Apa Saja Di Chandra Karya Untuk Dapat Menggunakan Kupon Ini . Segera gunakan kupon sebelum terpakai pelanggan lain. HANYA BERLAKU di gerai <a href='https://www.chandrakarya.com/content/13-our-store'>CHANDRA KARYA</a> / pembelian online <a href='https://www.chandrakarya.com'>CHANDRA KARYA</a>.</center>
</div>
	";
}else if($_GET['voucher']=='Divan 180x200'){ 
	echo "
	<div class='container'>
<center class='info'>Silahkan Melakukan Pembelian Kasur Apa Saja Di Chandra Karya Untuk Dapat Menggunakan Kupon Ini . Segera gunakan kupon sebelum terpakai pelanggan lain. HANYA BERLAKU di gerai <a href='https://www.chandrakarya.com/content/13-our-store'>CHANDRA KARYA</a> / pembelian online <a href='https://www.chandrakarya.com'>CHANDRA KARYA</a>.</center>
</div>
	";
}else if($_GET['voucher']=='Divan 200x200'){ 
	echo "
	<div class='container'>
<center class='info'>Silahkan Melakukan Pembelian Kasur Apa Saja Di Chandra Karya Untuk Dapat Menggunakan Kupon Ini . Segera gunakan kupon sebelum terpakai pelanggan lain. HANYA BERLAKU di gerai <a href='https://www.chandrakarya.com/content/13-our-store'>CHANDRA KARYA</a> / pembelian online <a href='https://www.chandrakarya.com'>CHANDRA KARYA</a>.</center>
</div>
	";
}else if($_GET['voucher']=='HB 200x200'){ 
	echo "
	<div class='container'>
<center class='info'>Silahkan melakukan pembelian kasur apa saja di Chandra Karya untuk dapat menggunakan kupon ini . Segera gunakan kupon sebelum terpakai pelanggan lain. HANYA BERLAKU di gerai <a href='https://www.chandrakarya.com/content/13-our-store'>CHANDRA KARYA</a> / pembelian online <a href='https://www.chandrakarya.com'>CHANDRA KARYA</a>.</center>
</div>
	";
}
else{
echo "



<div class='container'>
<center class='info'>Silahkan screenshot dan tunjukkan kupon ini kepada sales team Chandra Karya untuk diproses pemotongan harga pembelian produk. Segera gunakan kupon sebelum terpakai pelanggan lain. HANYA BERLAKU di gerai <a href='https://www.chandrakarya.com/content/13-our-store'>CHANDRA KARYA</a> / pembelian online <a href='https://www.chandrakarya.com'>CHANDRA KARYA</a>.</center>
</div>
";
}
?>