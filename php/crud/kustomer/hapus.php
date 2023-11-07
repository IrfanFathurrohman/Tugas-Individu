<?php
include "../koneksi.php";
$id_kustomer = $_GET['id_kustomer'];

mysqli_query($conn,"DELETE FROM kustomer WHERE id_kustomer='$id_kustomer'");

header("Location:kustomer.php");

?>