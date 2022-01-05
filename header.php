<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
	.hbanner {
		display: none;
	}

	.pbanner {
		display: block;
	}

	.navbar li a,
	.navbar .navbar-brand {
		color: black !important;
		font-weight: bold;
		font-size: 20px;
	}

	.li {
		margin-left: 80px;
	}

	.tinfo {
		display: inline-block;
		font-size: 30px;
		list-style-type: none;
		text-transform: uppercase;
		color: white;
		margin-top: 10px;
		margin-left: 70px;
		font-weight: bold;
	}

	.timing {
		margin-left: 20px;
		display: inline-block;
		font-size: 20px;
		list-style-type: none;
		padding: 10px;
		text-transform: uppercase;
		color: white;
		border: 1px solid;
		margin-top: 10px;
		font-weight: bold;
	}

	.timing span {
		display: block;
		font-size: 30px;
		text-align: center;
	}

	.gmbr {
		margin-top: -20px;

	}

	.pc {
		position: absolute;
	}

	.gatas {
		margin-top: -20px;
	}

	.itext {
		font-size: 20px;
		text-align: justify;
		margin-left: 10px;
	}

	.info {
		color: white;
		background-color: black;
		font-size: 26px;
		padding: 10px;
		text-align: center;
		text-weight: bold;
	}

	.judul {
		font-size: 32px;
		text-align: center;
		font-weight: bold;
	}

	.next {
		color: white;
		background-color: #025E5B;
		font-size: 50px;
		font-weight: bold;
		border: 2px solid black;
	}

	.now {
		color: black;
		background-color: #FFDD0F;
		font-size: 50px;
		font-weight: bold;
		border: 2px solid black;
	}

	.sudah {
		color: white;
		background-color: #808080;
		font-size: 50px;
		font-weight: bold;
		border: 2px solid black;
	}

	.footer {
		padding: 32px;
		background-color: #2d2d30;
		text-align: center;
		color: white;
		font-weight: bold;
		font-size: 24px;
	}

	.spekjudul {
		font-weight: bold;
		font-size: 16px;
		text-align: justify;
	}

	.spekdetil {
		font-size: 14px;
	}

	.homedesc {
		margin: 0px 10px 0px 10px;
		font-weight: bold;
		font-size: 22px;
		text-align: justify;
	}

	.infoklik {
		background-color: #023333;
		color: white;
		font-weight: bold;
		padding: 10px;
		text-align: center;
		font-size: 32px;
	}

	.berlakuklik {
		background-color: #850303;
		color: white;
		font-weight: bold;
		padding: 10px;
		text-align: center;
		font-size: 32px;
	}

	.sudahklik {
		background-color: #d17b23;
		color: white;
		font-weight: bold;
		padding: 10px;
		text-align: center;
		font-size: 32px;
	}

	.hp {
		display: none;
	}

	@media (max-width: 768px) {
		.hbanner {
			display: block;
		}

		.pbanner {
			display: none;
		}

		.navbar-header {
			display: flex;
		}

		.navbar-brand {
			order: 1;
		}

		.navbar-toggle {
			order: 0;
			margin-left: 15px;
			margin-right: 0;
		}

		.menu {
			color: black !important;
			font-weight: bold;
			font-size: 20px;
		}

		.pc {
			margin-left: -20px;
			margin-top: -25px;
		}

		.gmbr {
			margin-top: -20px;
		}

		.tinfo {
			font-size: 10px;
			margin-left: 1px;
		}

		.timing {
			display: inline-block;
			font-size: 8px;
			margin-left: 7px;
			padding: 0px;

		}

		.timing span {
			display: block;
			font-size: 12px;
			text-align: center;
		}

		.li {
			margin-left: 0px;
		}

		.navbar li a,
		.navbar .navbar-brand {
			color: black !important;
			font-weight: bold;
			font-size: 12px;
		}

		.index {
			margin-top: -500px;
		}

		.itext {
			font-size: 14px;
			text-align: justify;
			margin-left: 10px;
		}

		.info {
			color: white;
			background-color: black;
			font-size: 14px;
			padding: 10px;
			text-align: center;
			text-weight: bold;
		}

		.judul {
			font-size: 20px;
			text-align: center;
			font-weight: bold;
		}

		.next {
			font-size: 14px;
		}

		.now {
			font-size: 14px;
		}

		.sudah {
			font-size: 14px;
		}

		.spekjudul {
			font-weight: bold;
			font-size: 14px;
		}

		.spekdetil {
			font-size: 12px;
			margin-left: -20px;
		}

		.homedesc {
			font-weight: bold;
			font-size: 12px;
		}

		.infoklik {
			font-size: 16px;
		}

		.berlakuklik {
			font-size: 16px;
		}

		.sudahklik {
			font-size: 16px;
		}

		.hp {
			clear: both;
			display: block;
		}


	}
</style>


<nav class="navbar navbar-default menu">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle btn btn-link" data-toggle="collapse" data-target="#myNavbar">
				<span class='navbar-toggler-icon'><b>Menu</b></span>
			</button>
		</div>

		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav">
				<li class='li'><a href="index">BAZAAR JILID 9</a></li>
				<li class='li'><a href="https://www.chandrakarya.com/59-clearance-sale">CLEARANCE SALE</a></li>
				<li class='li'><a href="bazaarpromo">PROMO PRODUK LAINNYA</a></li>
				<li class='li'><a href="faq">F.A.Q</a></li>
				<li class='li'><a href="video">VIDEO</a></li>
			</ul>
		</div>
	</div>
</nav>