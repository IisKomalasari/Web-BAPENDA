<?php
//add dbconnect

include('koneksi.php');

$isi_visi = $_POST['isi_visi'];
$isi_misi = $_POST['isi_misi'];

//query

$query =  "INSERT INTO visi_misi(isi_visi, isi_misi) VALUES('$isi_visi', '$isi_misi')";

if (mysqli_query($koneksi, $query)) {
    # code redicet setelah insert ke login
    header("location:AdminVisiMisi.php");
} else {
    echo "ERROR, tidak berhasil" . mysqli_error($koneksi);
}

mysqli_close($koneksi);