<?php 

$id_foto = $_GET['id_foto'];

//include(dbconnect.php);
include('koneksi.php');

//query hapus
$query = "DELETE FROM foto WHERE id_foto= '$id_foto' ";

if (mysqli_query($koneksi , $query)) {
	# redirect ke index.php
	header("location:Adminfoto.php");
}
else{
	echo "ERROR, data gagal dihapus". mysqli_error($conn);
}

mysqli_close($koneksi);
