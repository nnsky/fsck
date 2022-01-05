<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>KUPON DISKON</title>
	<style>
		.kupon {
			border: 2px black solid;
			padding: 10px 10px 10px 10px;
			background-color: red;
			color: white;
			font-size: 32px;
		}

		.info {
			font-size: 30px;
			color: red;
			font-weight: bold;
		}

		.sk {
			font-size: 30px;
			font-weight: bold;
			text-align: justify;
		}

		.hp {
			display: none;
		}

		.pc {
			display: block;
		}

		@media (max-width: 768px) {
			.info {
				font-size: 12px;
			}

			.kupon {
				border: 2px black solid;
				padding: 10px 10px 10px 10px;
				background-color: red;
				color: white;
				font-size: 15px;
			}

			.sk {
				font-size: 12px;
				text-align: justify;
			}

			.pc {
				display: none;
			}

			.hp {
				display: block;
			}

		}
	</style>
</head>

<?php
if ($_GET['voucher'] == 'kingkoil160') {
	$gambar = "promokk/isi/kk160.png";
	$button = "";
	$link = "#";
} elseif ($_GET['voucher'] == 'kingkoil180') {
	$gambar = "promokk/isi/kk180.png";
	$button = "";
	$link = "#";
} elseif ($_GET['voucher'] == 'kingkoil200') {
	$gambar = "promokk/isi/kk200.png";
	$button = "";
	$link = "#";
} elseif ($_GET['voucher'] == 'pakaianck') {    // untuk categori QTY
	$gambar = "fsdesc/produk/sesi5/mulai/1.png";
	$button = "<img class='img-responsive' src='fsdesc/produk/sesi5/mulai/b1.png'> ";
	$link = "https://www.chandrakarya.com/featured-products/1518-lemari-pakaian-ck-flash-sale-chandra-karya.html";
} elseif ($_GET['voucher'] == 'briana211') {    // untuk categori QTY
	$gambar = "fsdesc/produk/sesi5/mulai/2.png";
	$button = "<img class='img-responsive' src='fsdesc/produk/sesi5/mulai/b2.png'> ";
	$link = "https://www.chandrakarya.com/featured-products/1517-sofa-briana-211-dudukan-flash-sale-chandra-karya.html";
} elseif ($_GET['voucher'] == 'royalseries160') {	// Untuk categori Springbed
	$gambar = "fsdesc/produk/sesi5/mulai/3.png";
	$button = "<img class='img-responsive' src='fsdesc/produk/sesi5/mulai/b3.png'> ";
	$link = "https://www.chandrakarya.com/featured-products/1489-dunlopillo-royal-series-mattress-only-flash-sale-chandra-karya.html";
} elseif ($_GET['voucher'] == 'royalseries180') {	// Untuk categori Springbed
	$gambar = "fsdesc/produk/sesi5/mulai/4.png";
	$button = "<img class='img-responsive' src='fsdesc/produk/sesi5/mulai/b4.png'> ";
	$link = "https://www.chandrakarya.com/featured-products/1489-dunlopillo-royal-series-mattress-only-flash-sale-chandra-karya.html";
} elseif ($_GET['voucher'] == 'royalseries200') {	// Untuk categori Springbed
	$gambar = "fsdesc/produk/sesi5/mulai/5.png";
	$button = "<img class='img-responsive' src='fsdesc/produk/sesi5/mulai/b5.png'> ";
	$link = "https://www.chandrakarya.com/featured-products/1489-dunlopillo-royal-series-mattress-only-flash-sale-chandra-karya.html";
} elseif ($_GET['voucher'] == 'andes160') {	// Untuk categori Springbed
	$gambar = "fsdesc/produk/sesi5/mulai/6.png";
	$button = "<img class='img-responsive' src='fsdesc/produk/sesi5/mulai/b6.png'> ";
	$link = "https://www.chandrakarya.com/flash-sale/1364-springbed-serta-andes-mattress-only-flash-sale-chandra-karya.html";
} elseif ($_GET['voucher'] == 'andes180') {	// Untuk categori Springbed
	$gambar = "fsdesc/produk/sesi5/mulai/7.png";
	$button = "<img class='img-responsive' src='fsdesc/produk/sesi5/mulai/b7.png'> ";
	$link = "https://www.chandrakarya.com/flash-sale/1364-springbed-serta-andes-mattress-only-flash-sale-chandra-karya.html";
} elseif ($_GET['voucher'] == 'andes200') {	// Untuk categori Springbed
	$gambar = "fsdesc/produk/sesi5/mulai/8.png";
	$button = "<img class='img-responsive' src='fsdesc/produk/sesi5/mulai/b8.png'> ";
	$link = "https://www.chandrakarya.com/flash-sale/1364-springbed-serta-andes-mattress-only-flash-sale-chandra-karya.html";
} elseif ($_GET['voucher'] == 'mejamakan') {	// Untuk categori Springbed
	$gambar = "fsdesc/produk/sesi5/mulai/9.png";
	$button = "<img class='img-responsive' src='fsdesc/produk/sesi5/mulai/b9.png'> ";
	$link = "https://www.chandrakarya.com/featured-products/1501-set-meja-makan-fendi-set-flash-sale-chandra-karya.html";
} elseif ($_GET['voucher'] == 'ladova') {	// Untuk categori Springbed
	$gambar = "fsdesc/produk/sesi5/mulai/10.png";
	$button = "<img class='img-responsive' src='fsdesc/produk/sesi5/mulai/b10.png'> ";
	$link = "https://www.chandrakarya.com/featured-products/1142-sofa-ladova-2-dudukan-flash-sale-chandra-karya.html";
} elseif ($_GET['voucher'] == 'charming160') {	// Untuk categori Springbed
	$gambar = "fsdesc/produk/sesi5/mulai/11.png";
	$button = "<img class='img-responsive' src='fsdesc/produk/sesi5/mulai/b11.png'> ";
	$link = "https://www.chandrakarya.com/flash-sale/1410-simmons-charming-mattress-only-flash-sale-chandra-karya.html";
} elseif ($_GET['voucher'] == 'charming180') {	// Untuk categori Springbed
	$gambar = "fsdesc/produk/sesi5/mulai/12.png";
	$button = "<img class='img-responsive' src='fsdesc/produk/sesi5/mulai/b12.png'> ";
	$link = "https://www.chandrakarya.com/flash-sale/1410-simmons-charming-mattress-only-flash-sale-chandra-karya.html";
} elseif ($_GET['voucher'] == 'charming200') {	// Untuk categori Springbed
	$gambar = "fsdesc/produk/sesi5/mulai/13.png";
	$button = "<img class='img-responsive' src='fsdesc/produk/sesi5/mulai/b13.png'> ";
	$link = "https://www.chandrakarya.com/flash-sale/1410-simmons-charming-mattress-only-flash-sale-chandra-karya.html";
} elseif ($_GET['voucher'] == 'madison160') {	// Untuk categori Springbed
	$gambar = "fsdesc/produk/sesi5/mulai/14.png";
	$button = "<img class='img-responsive' src='fsdesc/produk/sesi5/mulai/b14.png'> ";
	$link = "https://www.chandrakarya.com/flash-sale/1350-spring-air-madison-full-set-flash-sale-chandra-karya-.html";
} elseif ($_GET['voucher'] == 'madison180') {	// Untuk categori Springbed
	$gambar = "fsdesc/produk/sesi5/mulai/15.png";
	$button = "<img class='img-responsive' src='fsdesc/produk/sesi5/mulai/b15.png'> ";
	$link = "https://www.chandrakarya.com/flash-sale/1350-spring-air-madison-full-set-flash-sale-chandra-karya-.html";
} elseif ($_GET['voucher'] == 'madison200') {	// Untuk categori Springbed
	$gambar = "fsdesc/produk/sesi5/mulai/16.png";
	$button = "<img class='img-responsive' src='fsdesc/produk/sesi5/mulai/b16.png'> ";
	$link = "https://www.chandrakarya.com/flash-sale/1350-spring-air-madison-full-set-flash-sale-chandra-karya-.html";
} elseif ($_GET['voucher'] == 'cabinetck') {	// Untuk categori Springbed
	$gambar = "fsdesc/produk/sesi5/mulai/17.png";
	$button = "<img class='img-responsive' src='fsdesc/produk/sesi5/mulai/b17.png'> ";
	$link = "https://www.chandrakarya.com/featured-products/1519-cabinet-ck-flash-sale-chandra-karya.html";
} elseif ($_GET['voucher'] == 'chicago321') {	// Untuk categori Springbed
	$gambar = "fsdesc/produk/sesi5/mulai/18.png";
	$button = "<img class='img-responsive' src='fsdesc/produk/sesi5/mulai/b18.png'> ";
	$link = "https://www.chandrakarya.com/featured-products/1070-sofa-chicago-321-dudukan-flash-sale-chandra-karya.html";
} elseif ($_GET['voucher'] == 'ladysove160') {	// Untuk categori Springbed
	$gambar = "fsdesc/produk/sesi5/mulai/19.png";
	$button = "<img class='img-responsive' src='fsdesc/produk/sesi5/mulai/b19.png'> ";
	$link = "https://www.chandrakarya.com/flash-sale/1353-lady-americana-new-sovereign-matress-only-flash-sale-chandra-karya-.html";
} elseif ($_GET['voucher'] == 'ladysove180') {	// Untuk categori Springbed
	$gambar = "fsdesc/produk/sesi5/mulai/20.png";
	$button = "<img class='img-responsive' src='fsdesc/produk/sesi5/mulai/b20.png'> ";
	$link = "https://www.chandrakarya.com/flash-sale/1353-lady-americana-new-sovereign-matress-only-flash-sale-chandra-karya-.html";
} elseif ($_GET['voucher'] == 'ladysove200') {	// Untuk categori Springbed
	$gambar = "fsdesc/produk/sesi5/mulai/21.png";
	$button = "<img class='img-responsive' src='fsdesc/produk/sesi5/mulai/b21.png'> ";
	$link = "https://www.chandrakarya.com/flash-sale/1353-lady-americana-new-sovereign-matress-only-flash-sale-chandra-karya-.html";
} elseif ($_GET['voucher'] == 'kingwe160') {	// Untuk categori Springbed
	$gambar = "fsdesc/produk/sesi5/mulai/22.png";
	$button = "<img class='img-responsive' src='fsdesc/produk/sesi5/mulai/b22.png'> ";
	$link = "https://www.chandrakarya.com/flash-sale/1367-king-koil-new-world-endorsed-matress-only-flash-sale-chandra-karya.html";
} elseif ($_GET['voucher'] == 'kingwe180') {	// Untuk categori Springbed
	$gambar = "fsdesc/produk/sesi5/mulai/23.png";
	$button = "<img class='img-responsive' src='fsdesc/produk/sesi5/mulai/b23.png'> ";
	$link = "https://www.chandrakarya.com/flash-sale/1367-king-koil-new-world-endorsed-matress-only-flash-sale-chandra-karya.html";
} elseif ($_GET['voucher'] == 'kingwe200') {	// Untuk categori Springbed
	$gambar = "fsdesc/produk/sesi5/mulai/24.png";
	$button = "<img class='img-responsive' src='fsdesc/produk/sesi5/mulai/b24.png'> ";
	$link = "https://www.chandrakarya.com/flash-sale/1367-king-koil-new-world-endorsed-matress-only-flash-sale-chandra-karya.html";
}



echo "
<a href='http://www.flashsale.chandrakarya.com' class='btn btn-success btn-lg'>Halaman Utama</a>
<center><h4>Selamat Bapak/Ibu " . $_GET['nama'] . ", Anda Mendapatkan <br></h4>
<img src='" . $gambar . "' class='img-responsive'>
" . $button . "
<div class='caption'><br>
<span class='kupon'>KODE KUPON : " . $_GET['kode'] . "</span>
<br>
<div style='clear:both'><br></div>
<center class='info'>* HARAP CATAT KODE KUPON SEBELUM MELANJUTKAN KE HALAMAN SELANJUTNYA</center>
<div style='clear:both'><br></div>
";
if ($link != "#") {
	echo "
		<div class='hp'>
	<center>
		<div class='col-xs-6'>
			<a href='$link' class='btn btn-primary'>Belanja Via Website</a>
		</div>
		<div class='col-xs-6'>
			<a class='btn btn-success' href='https://api.whatsapp.com/send?phone=628990021020&text=Halo%20Admin%20Flash%20Sale%20Chandra%20Karya%20Saya%20Mau%20Belanja%20" . $_GET['produk'] . "%20Dengan%20Voucher%20*" . $_GET['kode'] . "*' >Belanja Via Whatsapp</a></center>
		</div>
	</center>
	</div>

	<div class='pc'>
	<center>
			<a href='$link' class='btn btn-primary btn-lg'>Belanja Via Website</a>
			<a class='btn btn-success btn-lg' href='https://api.whatsapp.com/send?phone=628990021020&text=Halo%20Admin%20Flash%20Sale%20Chandra%20Karya%20Saya%20Mau%20Belanja%20*" . $_GET['produk'] . "*%20Dengan%20Voucher%20*" . $_GET['kode'] . "*' >Belanja Via Whatsapp</a></center>
	</center>
	</div>
	<div style='clear:both'><br></div>

	<div class='container'>
	<span class='sk'>
	Syarat & ketentuan
	<ul>
	<li>Kupon Potongan Langsung berlaku untuk pembelanjaan secara offline dan online</li>
	<li>Hanya tersedia 4 kuota kupon Potongan Langsung untuk masing-masing produk dan tidak berlaku jika kuota sudah habis.
	<br>Segera klaim kupon yang telah anda dapatkan.
	<br>Apabila sistem menyatakan kupon sudah terpakai.bisa ambil kupon terbaru apabila ada stok.
	</li>
	<li>1 (satu) Kupon Potongan Langsung hanya berlaku untuk 1(satu) kali transaksi</li>
	<li>Kupon dianggap sudah terpakai apabila pembayaran lunas sudah terkomfrimasi</li>
	<li>Kupon Flash Sale tidak berlaku apabila sudah melewati bayas waktu dan kuita yang sudah ditentukan</li>
	<li> CSO Chandra Karya hanya nomor hp <a href='https://api.whatsapp.com/send?phone=628990021020&text=Halo%20Admin%20Flash%20Sale%20Chandra%20Karya'>0899 0021 020</a> di luar daripada itu harap konfirmasi dulu dengan nomor resmi untuk mencegah penyalahgunaan.</li>
	</ul>
	</span>
	";
} else {

	echo "
	<div class='container'>
	<span class='sk'>
	Syarat & ketentuan
	<ul>
	<li>Kupon Potongan Langsung berlaku untuk pembelanjaan secara offline dan online</li>
	<li>Syarat mendapatkan Kupon Divan Ohio Rp 900.000 dengan membeli Springbed tipe apa saja (KECUALI CHIRO ENDORSED) dengan ukuran 160x200, 180x200, 200x200
	<br>Segera klaim kupon yang telah anda dapatkan.
	<br>Apabila sistem menyatakan kupon sudah terpakai.bisa ambil kupon terbaru apabila ada stok.
	</li>
	<li>1 (satu) Kupon Potongan Langsung hanya berlaku untuk 1(satu) kali transaksi</li>
	<li>Kupon dianggap sudah terpakai apabila pembayaran lunas sudah terkomfrimasi</li>
	<li>Kupon Flash Sale tidak berlaku apabila sudah melewati bayas waktu dan kuita yang sudah ditentukan</li>
	<li> CSO Chandra Karya hanya nomor hp <a href='https://api.whatsapp.com/send?phone=628990021020&text=Halo%20Admin%20Flash%20Sale%20Chandra%20Karya'>0899 0021 020</a> di luar daripada itu harap konfirmasi dulu dengan nomor resmi untuk mencegah penyalahgunaan.</li>
	</ul>
	</span>
	";
}

echo "
<p class='info'>
Dengan mengikuti promo ini, customer dianggap mengerti dan menyetujui semua syarat & ketentuan berlaku. 
</span>
<br><br>
<span class='info'>
* Chandra Karya berhak mengubah syarat & ketentuan tanpa pemberitahuan lebih dulu
</span>
";
?>