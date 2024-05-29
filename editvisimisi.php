<?php
include('koneksi.php');

$id_visimisi = $_GET['id_visimisi'];
$isi_visi = $_GET['isi_visi'];
$isi_misi = $_GET['isi_misi'];


$query = "UPDATE visi_misi SET isi_visi='$isi_visi' , isi_misi='$isi_misi' WHERE id_visimisi='$id_visimisi' ";

if (mysqli_query($koneksi, $query)) {
	header("location:AdminVisiMisi.php");
} else {
	echo "ERROR, data gagal diupdate" . mysqli_error($koneksi);
}

mysqli_close($koneksi);