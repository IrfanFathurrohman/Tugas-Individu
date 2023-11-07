<?php
include "../koneksi.php";

$nama_produk = $_POST['nama_produk'];
$id_kategori = $_POST['id_kategori'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$tgl_masuk = $_POST['tgl_masuk'];

$result = mysqli_query($conn, "INSERT INTO produk(`nama_produk`, `id_kategori`, `harga`, `stok`, `tgl_masuk`) 
VALUES ('$nama_produk', '$id_kategori', '$harga', '$stok', '$tgl_masuk');");

header("Location:produk.php");

?>