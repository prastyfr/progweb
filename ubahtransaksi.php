<?php
require 'koneksi.php';
$id = $_GET ["id"];


$transaksi = query("SELECT * FROM transaksi WHERE id=$id")[0]; 
if(isset($_POST["submit"])){

	if (ubahtransaksi($_POST)>0) {
		echo "
			<script>
				alert('Data Berhasil Diubah');
				document.location.href = 'transaksi.php'
			</script>
		";
	}else{
		echo "Data gagal diubah";

	}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.12.1-web/css/all.min.css">

    <title>Hello, world!</title>
  </head>
  <body>
  	<form action="" method="POST">
<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-md-4">
				<div class="card my-5">
					<div class="card-header bg-primary text-white text-center">
						Ubah Data Sewa
					</div>
					<input type="hidden" name="id" value="<?= $transaksi["id"]; ?> ">
					<div class="card-body">

							<div class="form-group">
								<label>Tanggal</label>
								<input type="text" name="nofaktur" class="form-control" value="<?= $transaksi["nofaktur"]; ?>" >
							</div>
							<div class="form-group">
								<label>No KTP</label>
								<input type="date" name="tgl" class="form-control" value="<?= $transaksi["tgl"]; ?>">
							</div>
							<div class="form-group">
								<label>Id Kendaraan</label>
								<input type="text" name="kode_pelanggan" class="form-control" value="<?= $transaksi["kode_pelanggan"]; ?>">
							</div>
							

							<button class="btn btn-success bg-primary btn-block" name="submit">Ubah</button>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<script src="js/jquery-3.1.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>