<?php
//add dbconnect

include('koneksi.php');

$judul_berita = $_POST['judul_berita'];
$tgl_berita = $_POST['tgl_berita'];
$deskripsi_berita = $_POST['deskripsi_berita'];
$image_berita = $_FILES['image_berita']['name'];

//query
$query =  "INSERT INTO berita(judul_berita, tgl_berita, deskripsi_berita, image_berita ) VALUES('$judul_berita', '$tgl_berita', '$deskripsi_berita', '$image_berita')";

if (mysqli_query($koneksi, $query)) {
    # code redicet setelah insert ke login
    header("location:AdminBerita.php");
} else {
    echo "ERROR, tidak berhasil" . mysqli_error($koneksi);
}

mysqli_close($koneksi);