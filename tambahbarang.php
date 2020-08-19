<?php 
require 'koneksi.php';

if(isset($_POST["submit"])){

  if (tambahbarang($_POST)>0) {
    echo "
      <script>
        alert('Data Berhasil Ditambahkan');
        document.location.href = 'barang.php'
      </script>
    ";
  }else{
    echo "Data gagal ditambahkan";

  }
}
?>
<!doctype html>
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

    <div class="col-md-4">
        <div class="card my-2">
          <div class="card-header text-center bg-dark text-white">Tambah Barang</div>
          <div class="card-body">
            <form action="" method="POST">
              <div class="form-group ">
                <label>Kode Barang</label>
                <input type="text" class="form-control" name="kode_barang" placeholder="Nama Stasiun">
              </div>
              <div class="form-group ">
                <label>Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang" placeholder="Nama Stasiun">
              </div>
              <div class="form-group ">
                <label>Harga</label>
                <input type="text" class="form-control" name="harga" placeholder="Nama Stasiun">
              </div>

              <button class="btn btn-block btn-primary" name="submit">Tambah Staisun</button>
            </form>
          </div>
        </div>
      </div>

    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
    </html>