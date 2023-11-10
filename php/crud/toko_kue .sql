-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Nov 2023 pada 09.29
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_kue`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Kue Kering'),
(2, 'Kue Basah'),
(3, 'Kue Lebaran'),
(4, 'Kue Ulang Tahun'),
(5, 'Kue Natal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `nama_kota` varchar(100) DEFAULT NULL,
  `ongkos_kirim` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kota`
--

INSERT INTO `kota` (`id_kota`, `nama_kota`, `ongkos_kirim`) VALUES
(1, 'Palembang', 27000000),
(2, 'Jakarta', 25000),
(3, 'Bandung', 21000),
(4, 'Jogja', 30000),
(5, 'Aceh', 40000),
(6, 'soreang', 1000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kustomer`
--

CREATE TABLE `kustomer` (
  `id_kustomer` int(11) NOT NULL,
  `nama_lengkap` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telpon` varchar(100) DEFAULT NULL,
  `id_kota` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kustomer`
--

INSERT INTO `kustomer` (`id_kustomer`, `nama_lengkap`, `password`, `alamat`, `email`, `telpon`, `id_kota`) VALUES
(1, 'Aprilisa', 'abc', 'Jl.Sejahtera', 'aprilisa@gmail.com', '08123456781', 1),
(2, 'Irfan', '678910', 'Jl.Bunga', 'irfan@gmail.com', '08192537838', 3),
(3, 'Isnan', '111213', 'Jl.Kelinci', 'isnan@gmail.com', '082738938020', 2),
(4, 'Nizar', '1617181', 'Jl.Katus', 'nizar@gmail.com', '08362819173', 4),
(5, 'irfan', 'qwertyt', 'asfasf', 'irfanfathur099@gmail.com', '12412354135', 6),
(6, 'fatur', '124312354', 'asfasf', 'irfanswitf099@gmail.com', '13254135', 6),
(7, 'jaya', '12345', 'asfasf', 'irfanfathur099@gmail.com', '12412354135', 2),
(11, 'qwerty', 'qwerty', 'Jl.Sejahtera', 'qwerty@gmail.com', '0812345678888', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id_orders` int(11) NOT NULL,
  `status_order` varchar(100) DEFAULT NULL,
  `tgl_order` date DEFAULT NULL,
  `jam_order` time DEFAULT NULL,
  `id_kustomer` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id_orders`, `status_order`, `tgl_order`, `jam_order`, `id_kustomer`) VALUES
(1, 'Sukses', '2023-10-03', '20:15:51', 1),
(2, 'Sukses', '2023-10-04', '19:15:52', 3),
(3, 'Batal', '2023-10-05', '15:00:00', 4),
(4, 'Batal', '2023-10-07', '10:00:00', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders_detail`
--

CREATE TABLE `orders_detail` (
  `id_orders` int(11) DEFAULT NULL,
  `id_produk` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `orders_detail`
--

INSERT INTO `orders_detail` (`id_orders`, `id_produk`, `jumlah`) VALUES
(1, 8, 10),
(4, 7, 15),
(2, 1, 20),
(3, 2, 16),
(1, 5, 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `harga` int(20) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `tgl_masuk` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `id_kategori`, `nama_produk`, `harga`, `stok`, `tgl_masuk`) VALUES
(1, 2, 'Nastarrrr', 2147483647, 71, '2023-10-01'),
(2, 1, 'Kastengel', 50000, 15, '2023-10-01'),
(5, 1, 'Putri Salju', 20000, 5, '2023-10-03'),
(6, 2, 'Maksubah', 100000, 6, '2023-10-04'),
(7, 2, 'Pukis', 10000, 10, '2023-10-05'),
(8, 4, 'Black Forest', 150000, 8, '2023-10-06');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indeks untuk tabel `kustomer`
--
ALTER TABLE `kustomer`
  ADD PRIMARY KEY (`id_kustomer`),
  ADD KEY `FK_kustomer_kota` (`id_kota`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_orders`),
  ADD KEY `FK_orders_kustomer` (`id_kustomer`);

--
-- Indeks untuk tabel `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD KEY `FK_orders_detail_produk` (`id_produk`),
  ADD KEY `FK_orders_detail_orders` (`id_orders`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `FK_produk_kategori` (`id_kategori`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kustomer`
--
ALTER TABLE `kustomer`
  MODIFY `id_kustomer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id_orders` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kustomer`
--
ALTER TABLE `kustomer`
  ADD CONSTRAINT `FK_kustomer_kota` FOREIGN KEY (`id_kota`) REFERENCES `kota` (`id_kota`);

--
-- Ketidakleluasaan untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `FK_orders_kustomer` FOREIGN KEY (`id_kustomer`) REFERENCES `kustomer` (`id_kustomer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD CONSTRAINT `FK_orders_detail_orders` FOREIGN KEY (`id_orders`) REFERENCES `orders` (`id_orders`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_orders_detail_produk` FOREIGN KEY (`id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `FK_produk_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
