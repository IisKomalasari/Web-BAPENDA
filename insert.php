<?php
//add dbconnect

include('koneksi.php');

$nama_petugas = $_POST['nama_petugas'];
$username = $_POST['username'];
$password = $_POST['password'];
$gambar = $_POST['gambar'];
$level = $_POST['level'];

//query

$query =  "INSERT INTO user(nama_petugas, username, password, gambar, level) VALUES('$nama_petugas', '$username', '$password', '$gambar', '$level')";

if (mysqli_query($koneksi, $query)) {
    # code redicet setelah insert ke login
    header("location:Data_User.php");
} else {
    echo "ERROR, tidak berhasil" . mysqli_error($koneksi);
}

mysqli_close($koneksi);