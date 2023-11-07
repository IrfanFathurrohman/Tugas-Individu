<?php
include "../koneksi.php";
$id_kota = $_GET['id_kota'];

mysqli_query($conn,"DELETE FROM kota WHERE id_kota='$id_kota'");

header("Location:kota.php");

?>