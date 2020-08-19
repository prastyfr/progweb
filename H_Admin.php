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
      <a class="navbar-brand" href="#">Admin | <b>PRAZ OLSHOP</b></a>
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
      <div class="col-md-2 bg-dark  mr-2 pr-3 pt-4">
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
      <div class="col-md-9">
          <h1><b><font face="tahoma" size="8">PRAZ OLSHOP</font></h1>
          <br>
          <a href="dasboardtambahsewa.php"><button type="button" class="btn btn-success">Tambah Data Sewa</button></a>
          <br></br>
          <form class="form-inline my-2 my-lg-0" action="" method="POST">
            <input class="form-control mr-sm-2" type="text" placeholder="Masukkan Kata Kunci" aria-label="Search" name="kunci">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="cari">Cari</button>
          </form>
          <br>
          <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col"><font face="tahoma" size="2.5">Nis</th>
            <th scope="col"><font face="tahoma" size="2.5">Nama</th>
            <th scope="col"><font face="tahoma" size="2.5">Jenis Kelamin</th>
            <th scope="col"><font face="tahoma" size="2.5">Telepon</th>
            <th scope="col"><font face="tahoma" size="2.5">Alamat</th>
            <th scope="col"><font face="tahoma" size="2.5">Foto</th>
            <th scope="col"><font face="tahoma" size="2.5">Aksi</th>
          </tr>
        </thead>
      </table>
      </div>
         </div>


   









    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>