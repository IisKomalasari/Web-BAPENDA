<?php 

$id_rencana = $_GET['id_rencana'];

//include(dbconnect.php);
include('koneksi.php');

//query hapus
$query = "DELETE FROM rencana_kerja WHERE id_rencana= '$id_rencana' ";

if (mysqli_query($koneksi , $query)) {
	# redirect ke index.php
	header("location:AdminRencanakerja.php");
}
else{
	echo "ERROR, data gagal dihapus". mysqli_error($conn);
}

mysqli_close($koneksi);
