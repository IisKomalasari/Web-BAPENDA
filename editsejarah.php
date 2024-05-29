<?php
include('koneksi.php');

$id_sejarah = $_GET['id_sejarah'];
$judul_sejarah = $_GET['judul_sejarah'];
$isi_sejarah = $_GET['isi_sejarah'];


$query = "UPDATE sejarah SET judul_sejarah='$judul_sejarah' , isi_sejarah='$isi_sejarah' WHERE id_sejarah='$id_sejarah' ";

if (mysqli_query($koneksi, $query)) {
	header("location:AdminSejarah.php");
} else {
	echo "ERROR, data gagal diupdate" . mysqli_error($koneksi);
}

mysqli_close($koneksi);