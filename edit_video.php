<?php
include('koneksi.php');

$id_video = $_GET['id_video'];
$nm_video = $_GET['nm_video'];
$deskripsi_video = $_GET['deskripsi_video'];
$file_video = $_GET['file_video'];

$query = "UPDATE video SET id_video ='$id_video', nm_video ='$nm_video', deskripsi_video ='$deskripsi_video', file_video ='$file_video' WHERE id_video ='$id_video' ";

if (mysqli_query($koneksi, $query)) {
	header("location:Adminvideo.php");
} else {
	echo "ERROR, data gagal diupdate" . mysqli_error($koneksi);
}

mysqli_close($koneksi);