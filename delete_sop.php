<?php 

$id_sop = $_GET['id_sop'];

//include(dbconnect.php);
include('koneksi.php');

//query hapus
$query = "DELETE FROM sop_perpajakan WHERE id_sop= '$id_sop' ";

if (mysqli_query($koneksi , $query)) {
	# redirect ke index.php
	header("location:AdminSOP.php");
}
else{
	echo "ERROR, data gagal dihapus". mysqli_error($conn);
}

mysqli_close($koneksi);
