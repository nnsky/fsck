<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <title>KUPON DISKON</title>
</head>
<body>
<a type='button' data-toggle='modal' data-target='#produk1'>
<center>
<img src='ckbekasi/banner.png' class='img-responsive'>
</center>
</a>
<br>
<div class="container">
<center>
  <a type="button" data-toggle="modal" data-target="#produk1">
  <img src="ckbekasi/kupon.png" class="img-responsive">
  </a>
<div style='clear:both'><br></div>
<img src='ckbekasi/bannerbks2.png' class='img-responsive'>

</center>
</div>

</body>

<div class="modal fade" id="produk1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><center><b>KHUSUS GERAI CHANDRA KARYA BEKASI </b></center></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <form action="bekasi_proses" method="POST">   
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
      <input type='hidden' name='voucher' value='CKBEKASI2109'>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
</html>