<?php
include('koneksi.php');

$id_rencana = $_GET['id_rencana'];
$nm_rencana = $_GET['nm_rencana'];
$file_rencana = $_GET['file_rencana'];

$query = "UPDATE rencana_kerja SET id_rencana ='$id_rencana', nm_rencana ='$nm_rencana', file_rencana ='$file_rencana' WHERE id_rencana='$id_rencana' ";

if (mysqli_query($koneksi, $query)) {
	header("location:AdminRencanakerja.php");
} else {
	echo "ERROR, data gagal diupdate" . mysqli_error($koneksi);
}

mysqli_close($koneksi);