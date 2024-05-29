<?php
//add dbconnect

include('koneksi.php');

$id_video = $_POST['id_video'];
$nm_video = $_POST['nm_video'];
$deskripsi_video = $_POST['deskripsi_video'];
$file_video = $_POST['file_video'];

//query
$query =  "INSERT INTO video(nm_video, deskripsi_video, file_video) VALUES( '$nm_video', '$deskripsi_video', '$file_video')";

if (mysqli_query($koneksi, $query)) {
    # code redicet setelah insert ke login
    header("location:Adminvideo.php");
} else {
    echo "ERROR, tidak berhasil" . mysqli_error($koneksi);
}

mysqli_close($koneksi);