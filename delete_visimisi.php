<?php 

$id_visimisi = $_GET['id_visimisi'];

//include(dbconnect.php);
include('koneksi.php');

//query hapus
$query = "DELETE FROM visi_misi WHERE id_visimisi = '$id_visimisi' ";

if (mysqli_query($koneksi , $query)) {
	# redirect ke index.php
	header("location:AdminVisiMisi.php");
}
else{
	echo "ERROR, data gagal dihapus". mysqli_error($conn);
}

mysqli_close($koneksi);
