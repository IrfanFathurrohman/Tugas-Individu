<?php
include "koneksi.php";

$nama = $_POST['nama_kota'];
$ongkir = $_POST['ongkos_kirim'];

$result = mysqli_query($conn, "INSERT INTO kota(`nama_kota`, `ongkos_kirim`) VALUES ('$nama', '$ongkir');");

header("Location:kota.php");

?>