<?php
//add dbconnect

include('koneksi.php');

$id_foto= $_POST['id_foto'];
$nm_foto = $_POST['nm_foto'];
$tanggal = $_POST['tanggal'];
$deskripsi_foto = $_POST['deskripsi_foto'];
$file_foto=$_POST['file_foto'];
$file_foto2=$_POST['file_foto2'];
$file_foto3=$_POST['file_foto3'];

//query
$query =  "INSERT INTO foto(nm_foto, tanggal, deskripsi_foto, file_foto, file_foto2, file_foto3) VALUES( '$nm_foto', '$tanggal', '$deskripsi_foto', '$file_foto', '$file_foto2', '$file_foto3')";

if (mysqli_query($koneksi, $query)) {
    # code redicet setelah insert ke login
    header("location:Adminfoto.php");
} else {
    echo "ERROR, tidak berhasil" . mysqli_error($koneksi);
}

mysqli_close($koneksi);