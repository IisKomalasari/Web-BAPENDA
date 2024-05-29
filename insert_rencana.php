<?php
//add dbconnect

include('koneksi.php');

$nm_rencana = $_POST['nm_rencana'];
$file_rencana = $_POST['file_rencana'];

//query

$query =  "INSERT INTO rencana_kerja(nm_rencana, file_rencana) VALUES('$nm_rencana', '$file_rencana')";

if (mysqli_query($koneksi, $query)) {
    # code redicet setelah insert ke login
    header("location:AdminRencanakerja.php");
} else {
    echo "ERROR, tidak berhasil" . mysqli_error($koneksi);
}

mysqli_close($koneksi);