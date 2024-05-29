<?php
include('koneksi.php');

$id_berita = $_GET['id_berita'];
$judul_berita = $_GET['judul_berita'];
$tgl_berita = $_GET['tgl_berita'];
$deskripsi_berita = $_GET['deskripsi_berita'];
$image_berita = $_GET['image_berita'];

$query = "UPDATE berita SET id_berita='$id_berita', judul_berita='$judul_berita', tgl_berita ='$tgl_berita', deskripsi_berita ='$deskripsi_berita', image_berita ='$image_berita' WHERE id_berita='$id_berita' ";

if (mysqli_query($koneksi, $query)) {
	header("location:AdminBerita.php");
} else {
	echo "ERROR, data gagal diupdate" . mysqli_error($koneksi);
}

mysqli_close($koneksi);