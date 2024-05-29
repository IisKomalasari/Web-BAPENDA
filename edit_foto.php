<?php
include('koneksi.php');

$id_foto = $_GET['id_foto'];
$nm_foto = $_GET['nm_foto'];
$tanggal = $_GET['tanggal'];
$deskripsi_foto = $_GET['deskripsi_foto'];
$file_foto = $_GET['file_foto'];
$file_foto2=$_GET['file_foto2'];
$file_foto3=$_GET['file_foto3'];

$query = "UPDATE foto SET id_foto ='$id_foto', nm_foto ='$nm_foto', tanggal ='$tanggal', deskripsi_foto ='$deskripsi_foto', file_foto ='$file_foto', file_foto2 ='$file_foto2', file_foto3 ='$file_foto3'  WHERE id_foto='$id_foto' ";

if (mysqli_query($koneksi, $query)) {
	header("location:Adminfoto.php");
} else {
	echo "ERROR, data gagal diupdate" . mysqli_error($koneksi);
}

mysqli_close($koneksi);