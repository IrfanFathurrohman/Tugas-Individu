<?php
include "../koneksi.php";

$id_kota = $_GET['id_kota'];
$nama_kota = $_POST['nama_kota'];
$ongkir = $_POST['ongkos_kirim'];

mysqli_query($conn, "UPDATE kota SET nama_kota = '$nama_kota', ongkos_kirim = '$ongkir' WHERE id_kota='$id_kota' ");

header("Location:kota.php");

?>