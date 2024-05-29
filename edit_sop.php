<?php
include('koneksi.php');

$id_sop = $_GET['id_sop'];
$nm_sop = $_GET['nm_sop'];
$file_sop = $_GET['file_sop'];

$query = "UPDATE sop_perpajakan SET id_sop ='$id_sop', nm_sop ='$nm_sop', file_sop ='$file_sop' WHERE id_sop='$id_sop' ";

if (mysqli_query($koneksi, $query)) {
	header("location:AdminSOP.php");
} else {
	echo "ERROR, data gagal diupdate" . mysqli_error($koneksi);
}

mysqli_close($koneksi);