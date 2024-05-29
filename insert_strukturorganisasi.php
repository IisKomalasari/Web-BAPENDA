<?php
//add dbconnect

include('koneksi.php');

$nm_strukturorganisasi = $_POST['nm_strukturorganisasi'];
$deskripsi_strukturorganisasi = $_POST['deskripsi_strukturorganisasi'];
$image_strukturorganisasi = $_POST['image_strukturorganisasi'];


//query
$query =  "INSERT INTO struktur_organisasi(nm_strukturorganisasi, deskripsi_strukturorganisasi, image_strukturorganisasi) VALUES('$nm_strukturorganisasi', '$deskripsi_strukturorganisasi', '$image_strukturorganisasi')";

if (mysqli_query($koneksi, $query)) {
    # code redicet setelah insert ke login
    header("location:AdminStruktur.php");
} else {
    echo "ERROR, tidak berhasil" . mysqli_error($koneksi);
}

mysqli_close($koneksi);