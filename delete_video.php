<?php 

$id_video = $_GET['id_video'];

//include(dbconnect.php);
include('koneksi.php');

//query hapus
$query = "DELETE FROM video WHERE id_video= '$id_video' ";

if (mysqli_query($koneksi , $query)) {
	# redirect ke index.php
	header("location:Adminvideo.php");
}
else{
	echo "ERROR, data gagal dihapus". mysqli_error($conn);
}

mysqli_close($koneksi);
