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
.sk{
    font-size:30px;
    font-weight: bold;
	text-align:justify;
}
.hp{
	display:none;
}
.pc {
	display:block;
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
.sk{
    font-size:12px;
	text-align:justify;
}
.pc{
	display:none;
}
.hp {
	display:block;
}

}
</style>
</head>
<?php
if($_GET['voucher']=='CKBEKASI2109'){
    $gambar="ckbekasi/bekasibanner.png";
}


echo "
<a href='http://www.flashsale.chandrakarya.com/gerai_bekasi' class='btn btn-success btn-lg'>Halaman Utama</a>
<center><h4>Selamat Bapak/Ibu ".$_GET['nama'].", Anda Mendapatkan <br></h4>
<img src='".$gambar."' class='img-responsive'>
<div class='caption'><br>
<span class='kupon'>KODE KUPON : ".$_GET['kode']."</span>
<br>
<div style='clear:both'><br></div>
<center class='info'>* HARAP CATAT KODE KUPON SEBELUM MENGGUNAKANNYA</center>


<div style='clear:both'><br></div>
";
echo "
<div class='container'>
<span class='sk'>
<ul>
<li>ALL READY STOCK 5% + 2% </li>
<li>Khusus pembelian Chandra Karya Bekasi</li>
<li>Periode Promo Hingga 30 September</li>
<li>S&K Berlaku</li>
</ul>
</span>
<p class='info'>
Dengan mengikuti promo ini, customer dianggap mengerti dan menyetujui semua syarat & ketentuan berlaku. 
</span>
<br><br>
<span class='info'>
* Chandra Karya berhak mengubah syarat & ketentuan tanpa pemberitahuan lebih dulu
</span>
";
?>