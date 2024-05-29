<?php 

$id_strukturorganisasi = $_GET['id_strukturorganisasi'];

//include(dbconnect.php);
include('koneksi.php');

//query hapus
$query = "DELETE FROM struktur_organisasi WHERE id_strukturorganisasi= '$id_strukturorganisasi' ";

if (mysqli_query($koneksi , $query)) {
	# redirect ke index.php
	header("location:AdminStruktur.php");
}
else{
	echo "ERROR, data gagal dihapus". mysqli_error($conn);
}

mysqli_close($koneksi);
