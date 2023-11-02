<?php
include "../koneksi.php";

$nama = $_POST['nama_lengkap'];
$kota = $_POST['id_kota'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$telpon = $_POST['telpon'];
$password = $_POST['password'];

$result = mysqli_query($conn, "INSERT INTO kustomer(`nama_lengkap`, `id_kota`, `alamat`, `email`, `telpon`, `password`) VALUES ('$nama', '$kota', '$alamat', '$email', '$telpon', '$password');");

header("Location:index.php");

?>