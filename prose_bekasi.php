<?php
session_start();
include "koneksi103.php";

$nama=$_POST['nama'];
$email=$_POST['email'];
$hp=$_POST['hp'];

$voucher=$_POST['voucher'];
$kodekupon="CKBEKASI2109";
$select=mysqli_query($conn,"select *from newflash where brand='$voucher'");

if($select->num_rows>0){
	
	$conn->query("insert into data_konsumen (nama,email,hp,kupon) values ('$nama','$email','$hp','$voucher')");
	//$conn->query("update kupon set kupon_aktif='$kodekupon' where nama='$voucher'");
}else{
	$kodekupon="Kode Error";
	$produk=$voucher;
	
}

header("location:bekasi_kupon?voucher=$voucher&kode=$kodekupon&nama=$nama&produk=$produk");
?>