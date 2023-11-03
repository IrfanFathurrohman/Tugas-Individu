<?php
include "../koneksi.php";

$id_kustomer = $_GET['id_kustomer'];
$nama_lengkap = $_POST['nama_lengkap'];
$id_kota = $_POST['id_kota'];    
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$telpon = $_POST['telpon'];
$password = $_POST['password'];

mysqli_query($conn, "UPDATE `kustomer` SET `nama_lengkap` = '$nama_lengkap', `password` = '$password', `alamat` = '$alamat', 
`email` = '$email', `telpon` = '$telpon', `id_kota` = '$id_kota' WHERE `id_kustomer` = '$id_kustomer' ");

header("Location:../index.php");


?>