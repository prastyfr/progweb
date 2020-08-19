<?php

require 'koneksi.php';

$id = $_GET["id"];

if(hapusbarang($id)>0){
	echo "
			<script>
				alert('Data Berhasil Dihapus');
				document.location.href = 'barang.php'
			</script>
		";
}else{
	echo "
			<script>
				alert('Data Gagal Dihapus');
				document.location.href = 'barang.php'
			</script>
		";
}
?>