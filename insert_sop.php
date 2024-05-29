<?php
//add dbconnect

include('koneksi.php');

$nm_sop = $_POST['nm_sop'];
$file_sop = $_POST['file_sop'];

//query

$query =  "INSERT INTO sop_perpajakan(nm_sop, file_sop) VALUES('$nm_sop', '$file_sop')";

if (mysqli_query($koneksi, $query)) {
    # code redicet setelah insert ke login
    header("location:AdminSOP.php");
} else {
    echo "ERROR, tidak berhasil" . mysqli_error($koneksi);
}

mysqli_close($koneksi);