<?php
include "koneksi103.php";

$ukuran = $_POST['ukuran'];
$kodeproduk = $_POST['kodeproduk'];
$voucher = $kodeproduk . $ukuran;

$nama = $_POST["nama"];
$email = $_POST["email"];
$hp = $_POST['hp'];


$select = mysqli_query($conn, "select *from produk where kodeproduk='$kodeproduk'");


if ($select->num_rows > 0) {

	$hasil = mysqli_fetch_array($select);
	$nomor = sprintf("%02d", $hasil['pakai'] + 1);
	$kodekupon = $hasil['kode_kupon'] . $nomor; // kode kupon untuk konsumen
	$produk = $hasil['nama'] . ' ' . $ukuran;  // pesan untuk whatsapp

	//$conn->query("insert into data_konsumen (nama,email,hp,kupon) values ('$nama','$email','$hp','$kodekupon')");
	$conn->query("update produk set kupon_aktif='$kodekupon' where nama='$voucher'");
} else {
	$kodekupon = "Kode Error"; // kode kupon untuk konsumen
	$produk = $voucher; // pesan untuk whatsapp
}

header("location:kupon_print_flashsale?voucher=$voucher&kode=$kodekupon&nama=$nama&produk=$produk");
