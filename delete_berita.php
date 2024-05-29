<?php 

$id_berita  = $_GET['id_berita'];

//include(dbconnect.php);
include('koneksi.php');

//query hapus
$query = "DELETE FROM berita WHERE id_berita = '$id_berita' ";

if (mysqli_query($koneksi , $query)) {
	# redirect ke index.php
	header("location:AdminBerita.php");
}
else{
	echo "ERROR, data gagal dihapus". mysqli_error($conn);
}

mysqli_close($koneksi);
