<?php 

$id_sejarah = $_GET['id_sejarah'];

//include(dbconnect.php);
include('koneksi.php');

//query hapus
$query = "DELETE FROM sejarah WHERE id_sejarah = '$id_sejarah' ";

if (mysqli_query($koneksi , $query)) {
	# redirect ke index.php
	header("location:AdminSejarah.php");
}
else{
	echo "ERROR, data gagal dihapus". mysqli_error($conn);
}

mysqli_close($koneksi);
