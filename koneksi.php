<?php
$koneksi = mysqli_connect("localhost","root","","olshop");

  if (mysqli_connect_error()){
    echo "koneksi error".msqli_connect_error();
  }

  function query($query){
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
      $rows[] = $row;
    }
    return $rows;
  }


  
  function tambahbarang($data){
    global $koneksi;
  $kb = htmlspecialchars($data["kode_barang"]);
  $nb = htmlspecialchars($data["nama_barang"]);
  $hr = htmlspecialchars($data["harga"]);

  $query = "INSERT INTO barang
        VALUES 
        ('','$kb','$nb','$hr')
  ";
  mysqli_query($koneksi,$query);
  return mysqli_affected_rows($koneksi);
  }

  function tambahdetail($data){
    global $koneksi;
  $nf = htmlspecialchars($data["nofaktur"]);
  $kb = htmlspecialchars($data["kode_barang"]);
  $qt = htmlspecialchars($data["qty"]);

  $query = "INSERT INTO detail
        VALUES 
        ('','$nf','$kb','$qt')
  ";
  mysqli_query($koneksi,$query);
  return mysqli_affected_rows($koneksi);
  }

  function tambahtransaksi($data){
    global $koneksi;
  $nf = htmlspecialchars($data["nofaktur"]);
  $tg = htmlspecialchars($data["tgl"]);
  $kp = htmlspecialchars($data["kode_pelanggan"]);

  $query = "INSERT INTO transaksi
        VALUES 
        ('','$nf','$tg','$kp')
  ";
  mysqli_query($koneksi,$query);
  return mysqli_affected_rows($koneksi);
  }

  function tambahpelanggan($data){
    global $koneksi;
  $kp = htmlspecialchars($data["kode_pelanggan"]);
  $nm = htmlspecialchars($data["nama"]);
  $jk = htmlspecialchars($data["JK"]);
  $tl = htmlspecialchars($data["telepon"]);
  $al = htmlspecialchars($data["alamat"]);

  $foto = upload();
  if ( !$foto) {
    return false;
  }

  $query = "INSERT INTO pelanggan
        VALUES 
        ('','$kp','$nm','$jk','$tl','$al','$foto')
  ";
  mysqli_query($koneksi,$query);
  return mysqli_affected_rows($koneksi);
  }

  function upload(){
    $namaFile = $_FILES['foto']['name'];
    $ukuranFile = $_FILES['foto']['size'];
    $error = $_FILES['foto']['error'];
    $tmpName = $_FILES['foto']['tmp_name'];

    if ($error === 4 ) {
      echo "<script>
              alert('pilih gambar bro');
            <script>";

      return false;
    }

    $ekstensiGambarValid = ['jpg','jpeg','png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid)){
      echo "<script>
              alert('bukan gambar itu bro!');
            <script>";
      return false;
    }

    if ( $ukuranFile > 1000000) {
      echo "<script>
              alert('gambarnya kebesaran!');
            <script>";
      return false;
    }

    move_uploaded_file($tmpName, 'img/' . $namaFile);
    return $namaFile;
  }



  function hapuspelanggan($id){
    global $koneksi;
    mysqli_query($koneksi,"DELETE FROM pelanggan where id=$id");

    return mysqli_affected_rows($koneksi);
  }

  function ubahpelanggan($ubahdata){
    global $koneksi;
  $id = htmlspecialchars($ubahdata["id"]);
  $kp = htmlspecialchars($ubahdata["kode_pelanggan"]);
  $nm = htmlspecialchars($ubahdata["nama"]);
  $jk = htmlspecialchars($ubahdata["JK"]);
  $tl = htmlspecialchars($ubahdata["telepon"]);
  $al = htmlspecialchars($ubahdata["alamat"]);
  $foto = htmlspecialchars($ubahdata["foto"]);

  $query = "UPDATE pelanggan SET  kode_pelanggan = '$kp', nama ='$nm', JK ='$jk', telepon ='$tl', alamat='$al', foto='$foto' WHERE id=$id";
  mysqli_query($koneksi,$query);
  return mysqli_affected_rows($koneksi);
  }

   function hapusbarang($id){
    global $koneksi;
    mysqli_query($koneksi,"DELETE FROM barang where id=$id");

    return mysqli_affected_rows($koneksi);
  }

  function ubahbarang($ubahdata){
    global $koneksi;
  $id = htmlspecialchars($ubahdata["id"]);
  $kb = htmlspecialchars($ubahdata["kode_barang"]);
  $nb = htmlspecialchars($ubahdata["nama_barang"]);
  $hr = htmlspecialchars($ubahdata["harga"]);

  $query = "UPDATE barang SET  kode_barang = '$kb', nama_barang ='$nb', harga ='$hr' WHERE id=$id";
  mysqli_query($koneksi,$query);
  return mysqli_affected_rows($koneksi);
  }

  function hapusdetail($id){
    global $koneksi;
    mysqli_query($koneksi,"DELETE FROM detail where id=$id");

    return mysqli_affected_rows($koneksi);
}

  function ubahtransaksi($ubahdata){
    global $koneksi;
  $id = htmlspecialchars($ubahdata["id"]);
  $nf = htmlspecialchars($ubahdata["nofaktur"]);
  $tg = htmlspecialchars($ubahdata["tgl"]);
  $kp = htmlspecialchars($ubahdata["kode_pelanggan"]);

  $query = "UPDATE transaksi SET  nofaktur = '$nf', tgl ='$tg', kode_pelanggan ='$kp' WHERE id=$id";
  mysqli_query($koneksi,$query);
  return mysqli_affected_rows($koneksi);
  }

  function ubahdetail($ubahdata){
    global $koneksi;
  $id = htmlspecialchars($ubahdata["id"]);
  $nf = htmlspecialchars($ubahdata["nofaktur"]);
  $kb = htmlspecialchars($ubahdata["kode_barang"]);
  $qt = htmlspecialchars($ubahdata["qty"]);

  $query = "UPDATE detail SET  nofaktur = '$nf', kode_barang ='$kb', qty ='$qt' WHERE id=$id";
  mysqli_query($koneksi,$query);
  return mysqli_affected_rows($koneksi);
  }
    function hapustransaksi($id){
    global $koneksi;
    mysqli_query($koneksi,"DELETE FROM transaksi where id=$id");

    return mysqli_affected_rows($koneksi);
  }
 
?>