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

    <a href="../flashsale" class="btn btn-success">Kembali</a>

    <br>

    <div class='row'>

        <?php
        include "../koneksi103.php";
        date_default_timezone_set("Asia/Bangkok");
        $jam = date('jHi');
        $sleep = mysqli_query($conn, "select *from newflash where brand='grandr255'");
        $hsleep = mysqli_fetch_array($sleep);

        //produk 1
        if ($jam <= 240959) {
            echo "
		<div class='col-sm-6'>
		<img src='../fsdesc/produk/sesi4/spring/4.png' class='img-responsive'>
		<img src='../fsdesc/produk/sesi4/spring/b4.png' class='img-responsive'>
		</div>
	";
        } else if (($jam >= 241000 && $jam < 282059) && $hsleep['stock'] >= 1) {
            echo "
	<div class='col-sm-6'>
	<a type='button' data-toggle='modal' data-target='#produk1'>
		<img src='../fsdesc/produk/sesi4/mulai/6.png' class='img-responsive'>
		<img src='../fsdesc/produk/sesi4/mulai/b6.png' class='img-responsive'>
	</a>
	</div>
	";
        } else if ($hsleep["stock"] == 0) {
            echo "
	<div class='col-sm-6'>
		<img src='../fsdesc/produk/sesi4/mulai/6.png' class='img-responsive'>
		<img src='../fsdesc/produk/sesi4/mulai/ss.png' class='img-responsive'>
	</div>
	";
        } else if ($jam >= 282100) {
            echo "
		<div class='col-sm-6'>
		<img src='../fsdesc/produk/sesi4/mulai/6.png' class='img-responsive'>
		<img src='../fsdesc/produk/sesi4/mulai/fs.png' class='img-responsive'>
	</div>
	";
        }

        //produk2

        if ($jam <= 240959) {
            echo "
		<div class='col-sm-6'>
		<img src='../fsdesc/produk/sesi4/spring/5.png' class='img-responsive'>
		<img src='../fsdesc/produk/sesi4/spring/b5.png' class='img-responsive'>
		</div>
	";
        } else if (($jam >= 241000 && $jam < 282059) && $hsleep['stock'] >= 1) {
            echo "
	<div class='col-sm-6'>
	<a type='button' data-toggle='modal' data-target='#produk2'>
		<img src='../fsdesc/produk/sesi4/mulai/7.png' class='img-responsive'>
		<img src='../fsdesc/produk/sesi4/mulai/b7.png' class='img-responsive'>
	</a>
	</div>
	";
        } else if ($hsleep["stock"] == 0) {
            echo "
	<div class='col-sm-6'>
		<img src='../fsdesc/produk/sesi4/mulai/7.png' class='img-responsive'>
		<img src='../fsdesc/produk/sesi4/mulai/ss.png' class='img-responsive'>
	</div>
	";
        } else if ($jam >= 282100) {
            echo "
		<div class='col-sm-6'>
		<img src='../fsdesc/produk/sesi4/mulai/7.png' class='img-responsive'>
		<img src='../fsdesc/produk/sesi4/mulai/fs.png' class='img-responsive'>
	</div>
	";
        }

        //produk 3

        if ($jam <= 240959) {
            echo "
		<div class='col-sm-6'>
		<img src='../fsdesc/produk/sesi4/spring/6.png' class='img-responsive'>
		<img src='../fsdesc/produk/sesi4/spring/b6.png' class='img-responsive'>
		</div>
	";
        } else if (($jam >= 241000 && $jam < 282059) && $hsleep['stock'] >= 1) {
            echo "
	<div class='col-sm-6'>
	<a type='button' data-toggle='modal' data-target='#produk3'>
		<img src='../fsdesc/produk/sesi4/mulai/8.png' class='img-responsive'>
		<img src='../fsdesc/produk/sesi4/mulai/b8.png' class='img-responsive'>
	</a>
	</div>
	";
        } else if ($hsleep["stock"] == 0) {
            echo "
	<div class='col-sm-6'>
		<img src='../fsdesc/produk/sesi4/mulai/8.png' class='img-responsive'>
		<img src='../fsdesc/produk/sesi4/mulai/ss.png' class='img-responsive'>
	</div>
	";
        } else if ($jam >= 282100) {
            echo "
		<div class='col-sm-6'>
		<img src='../fsdesc/produk/sesi4/mulai/8.png' class='img-responsive'>
		<img src='../fsdesc/produk/sesi4/mulai/fs.png' class='img-responsive'>
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
                    <h5 class="modal-title" id="exampleModalLabel">
                        <center><b>Romance Grand R 255E SET 160x200</b></center>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <form action="../kupon_proses" method="POST">
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
                        <input type='hidden' name='voucher' value='grandr255 160'>
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
                    <h5 class="modal-title" id="exampleModalLabel">
                        <center><b>Romance Grand R 255E SET 180x200</b></center>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <form action="../kupon_proses" method="POST">
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
                        <input type='hidden' name='voucher' value='grandr255 180'>
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
                    <h5 class="modal-title" id="exampleModalLabel">
                        <center><b>Romance Grand R 255E SET 200x200</b></center>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <form action="../kupon_proses" method="POST">
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
                        <input type='hidden' name='voucher' value='grandr255 200'>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    </div>
</body>

</html>