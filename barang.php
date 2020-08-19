<?php
require 'koneksi.php';
$barang = query("SELECT * FROM barang");

if(add($_POST["submit"])){

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

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Admin | <i class="fas fa-shopping-bag mr-2"></i><b>PRAZ OLSHOP</b></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <form class="form-inline my-2 my-lg-0 ml-auto">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <div class="icon ml-4">
          <h5>
            <i class="fas fa-bell mr-3" data-toggle="tooltip" title="Notifikasi" style="color: white;"></i>
            <i class="fas fa-envelope mr-3" data-toggle="tooltip" title="Surat Masuk" style="color: white;"></i>
            <i class="fas fa-user-circle mr-3" data-toggle="tooltip" title="Akun" style="color: white;"></i>
          </h5>
      </div>
    </nav>

    <div class="row no-gutter mr-2">

      <div class="col-md-2 bg-dark   pr-3 pt-4">
        <ul class="nav flex-column  ml-3 mb-4" style="hover {background-color: white;}">
          <li class="nav-item">
            <a class="nav-link text-white" href="pelanggan.php"> <i class="fas fa-tachometer-alt mr-2"></i>Tabel Pelanggan</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="barang.php"><i class="fas fa-folder mr-2"></i>Tabel Barang</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="detail.php"><i class="fas fa-chart-area mr-2"></i>Tabel Detail</a><hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="transaksi.php"><i class="fas fa-table mr-2"></i>Tabel Transaksi</a><hr class="bg-secondary">
          </li>
        </ul>
      </div>

      <div class="col-md-6">
          <h1><i class="fas fa-shopping-bag mr-3"></i><b><font face="tahoma" size="8">PRAZ OLSHOP</font></b></h1>
          <br>
          <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col"><font face="tahoma" size="2.5">Kode Barang</font></th>
            <th scope="col"><font face="tahoma" size="2.5">Nama Harga</font></th>
            <th scope="col"><font face="tahoma" size="2.5">Harga</font></th>
            <th scope="col"><font face="tahoma" size="2.5">Aksi</font></th>
          </tr>
        </thead>

        <?php foreach ($barang as $row) : ?>
      <tr>
      <td><?= $row["kode_barang"]; ?></td>
      <td><?= $row["nama_barang"]; ?></td>
      <td><?= $row["harga"]; ?></td>
       <td>
        <a href="ubahbarang.php?id=<?= $row["id"];?> "><button type="button" class="btn btn-primary btn-sm">Ubah</button></a> |
        <a href="hapusbarang.php?id=<?= $row["id"];?> "><button type="button" class="btn btn-danger btn-sm">Hapus</button></a>
      </td>
    </tr>
  <?php endforeach; ?>
      </table>
    </div>


       <div class="col-md-4">
        <div class="card my-2">
          <div class="card-header text-center bg-dark text-white">Tambah Barang</div>
          <div class="card-body">
            <form action="" method="POST">
              <div class="form-group ">
                <label>Kode Barang</label>
                <input type="text" class="form-control" name="kode_barang" placeholder="Kode Barang">
              </div>
              <div class="form-group ">
                <label>Nama Barang</label>
                <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang">
              </div>
              <div class="form-group ">
                <label>Harga</label>
                <input type="text" class="form-control" name="harga" placeholder="Harga">
              </div>

              <button class="btn btn-block btn-primary" name="submit">Tambah</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <nav class="navbar navbar-expand-lg  ml-auto" style="background-color: #808080;">
        <div class="icon ml-4">
          <div style="margin-left: 530px;">
          <h10>
            Copyright <i class="far fa-copyright"></i> Website 2020
          </h10>
          </div>
      </div>
    </nav>

   









    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>