<?php
include('koneksi.php');

$id = $_GET['id'];
$nama_petugas = $_GET['nama_petugas'];
$username = $_GET['username'];
$password = $_GET['password'];
$gambar = $_GET['gambar'];
$level = $_GET['level'];

$query = "UPDATE user SET nama_petugas='$nama_petugas', username='$username', password='$password', gambar='$gambar', level='$level' WHERE id='$id' ";

if (mysqli_query($koneksi, $query)) {
	header("location:Data_User.php");
} else { 
	echo "ERROR, data gagal diupdate" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
