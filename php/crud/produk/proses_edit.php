<?php
include "../koneksi.php";

$id_produk = $_GET['id_produk'];

$nama_produk = $_POST['nama_produk'];
$id_kategori = $_POST['id_kategori'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];
$tgl_masuk = $_POST['tgl_masuk'];

mysqli_query($conn, "UPDATE `produk` SET `nama_produk` = '$nama_produk', `id_kategori` = '$id_kategori', `harga` = '$harga', 
`stok` = '$stok', `tgl_masuk` = '$tgl_masuk' WHERE `id_produk` = '$id_produk' ");

header("Location:produk.php");

?>