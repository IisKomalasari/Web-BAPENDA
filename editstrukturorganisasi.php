<?php
include('koneksi.php');

$id_strukturorganisasi = $_GET['id_strukturorganisasi'];
$nm_strukturorganisasi  = $_GET['nm_strukturorganisasi'];
$deskripsi_strukturorganisasi  = $_GET['deskripsi_strukturorganisasi'];
$image_strukturorganisasi  = $_GET['image_strukturorganisasi'];


$query = "UPDATE struktur_organisasi SET id_strukturorganisasi='$id_strukturorganisasi', nm_strukturorganisasi='$nm_strukturorganisasi', deskripsi_strukturorganisasi='$deskripsi_strukturorganisasi', image_strukturorganisasi='$image_strukturorganisasi' WHERE id_strukturorganisasi='$id_strukturorganisasi' ";

if (mysqli_query($koneksi, $query)) {
	header("location:AdminStruktur.php");
} else {
	echo "ERROR, data gagal diupdate" . mysqli_error($koneksi);
}

mysqli_close($koneksi);