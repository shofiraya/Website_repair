-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Jul 2023 pada 02.20
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbrepair`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nomor_hp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `id_user`, `nama`, `alamat`, `nomor_hp`) VALUES
(1, 14, 'Shofira Izza Nurrohma', 'Jalan Gebang Timur No 78', '08876778753'),
(2, 15, 'Alfira Putri', 'Jalan Gebang Selatan No 12', '08876234567');

-- --------------------------------------------------------

--
-- Struktur dari tabel `elektronik`
--

CREATE TABLE `elektronik` (
  `id_elektronik` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `elektronik`
--

INSERT INTO `elektronik` (`id_elektronik`, `nama`) VALUES
(1, 'Televisi'),
(2, 'Kulkas'),
(3, 'AC'),
(4, 'Mesin Cuci');

-- --------------------------------------------------------

--
-- Struktur dari tabel `invoice`
--

CREATE TABLE `invoice` (
  `id_invoice` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `biaya_servis` varchar(50) NOT NULL,
  `biaya_komponen` varchar(50) NOT NULL,
  `nama_komponen` varchar(255) NOT NULL,
  `id_teknisi` int(11) NOT NULL,
  `biaya_cek` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `invoice`
--

INSERT INTO `invoice` (`id_invoice`, `id_pemesanan`, `biaya_servis`, `biaya_komponen`, `nama_komponen`, `id_teknisi`, `biaya_cek`, `total`) VALUES
(1, 21, '65.000', '100.000', 'penggiling', 1, '', '165.000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nomor_hp` varchar(20) NOT NULL,
  `nama` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `id_user`, `alamat`, `nomor_hp`, `nama`) VALUES
(5, 6, 'Jalan Gunung Anyar Tengah Sekolahan No 23', '082233337118', 'Arsyita Devanaya Arianto'),
(6, 7, 'Jl. Gunung Anyar Tengah Sekolahan no 23', '098887786', 'Arthamara Devina Arianto'),
(9, 11, 'Jalan Gebang No 33', '0817889037', 'Yaya Denaya'),
(10, 16, 'Jalan Dupak Selatan', '0887445678', 'Sinta Aulia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_elektronik` int(11) NOT NULL,
  `merk_tipe` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `status` varchar(100) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `waktu_pesan` time NOT NULL,
  `tanggal_sekarang` date NOT NULL,
  `waktu_sekarang` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_pelanggan`, `id_elektronik`, `merk_tipe`, `deskripsi`, `status`, `tanggal_pesan`, `waktu_pesan`, `tanggal_sekarang`, `waktu_sekarang`) VALUES
(20, 5, 4, 'LG', 'Suara Berisisk', 'proses', '2023-06-30', '17:52:00', '2023-06-26', '12:48:48'),
(21, 5, 2, 'Panasonic', 'Tidak dingin', 'proses', '2023-06-29', '17:53:00', '2023-06-26', '12:51:25'),
(22, 6, 3, 'Panasonic', 'Kurang Dingin', 'proses', '2023-06-29', '09:28:00', '2023-06-27', '04:25:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `teknisi`
--

CREATE TABLE `teknisi` (
  `id_teknisi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nomor_hp` varchar(50) NOT NULL,
  `id_elektronik` int(11) NOT NULL,
  `usia` int(100) NOT NULL,
  `deskripsi_pengalaman` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `teknisi`
--

INSERT INTO `teknisi` (`id_teknisi`, `id_user`, `nama`, `alamat`, `nomor_hp`, `id_elektronik`, `usia`, `deskripsi_pengalaman`) VALUES
(1, 12, 'Haji Yatimin', 'Gunung Anyar Tengah Gang 8', '0866288627', 3, 50, 'Bekerja dari usia muda dan telah melayani banyak perbaikan AC yang berada di Surabaya Timur.'),
(2, 13, 'Basori Alfajri', 'Rungkut Asri Utra', '0822836483', 1, 55, 'Sudah bekarja dari usia muda dan telah memperbaiki alat ekejtronik.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ulasan`
--

CREATE TABLE `ulasan` (
  `id_ulasan` int(11) NOT NULL,
  `id_pemesanan` int(11) NOT NULL,
  `ulasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ulasan`
--

INSERT INTO `ulasan` (`id_ulasan`, `id_pemesanan`, `ulasan`) VALUES
(1, 21, 'sangat bagus pelayanannya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `role`) VALUES
(6, 'naya@gmail.com', '$2y$10$jjMdWxbmCRIAQ/DZibOB/uZiKHaaPMWG3DzYQ6KHvBH2JjN1G37hi', 'pelanggan'),
(7, 'arthamara@gmail.com', '$2y$10$lq0N84p7yqWbenUCOE3tJODjKBm4bSLaYo7/QOPT.8votj7YIQjKi', 'pelanggan'),
(11, 'yaya@gmail.com', '$2y$10$jDj6BL2yM7jWzTyEejRa4O7KtsmCV44S58Sgprr7mrnKjpLCMTWk2', 'pelanggan'),
(12, 'yatimin@gmmail.com', '1010101010', 'teknisi'),
(13, 'basori@gmail.com', '2020202020', 'teknisi'),
(14, 'shofira@gmail.com', '3030303030', 'admin'),
(15, 'alfira@gmail.com', '6060606060', 'admin'),
(16, 'dumi@gmail.com', '$2y$10$sJhZ0sbMzqq/fMODfvZDeOgZAP9tIZxbwRr6NNk.Ld0dquZhH1JKS', 'pelanggan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `elektronik`
--
ALTER TABLE `elektronik`
  ADD PRIMARY KEY (`id_elektronik`);

--
-- Indeks untuk tabel `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id_invoice`),
  ADD KEY `id_pemesanan` (`id_pemesanan`),
  ADD KEY `id_teknisi` (`id_teknisi`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_elektronik` (`id_elektronik`);

--
-- Indeks untuk tabel `teknisi`
--
ALTER TABLE `teknisi`
  ADD PRIMARY KEY (`id_teknisi`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_elektronik` (`id_elektronik`);

--
-- Indeks untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`id_ulasan`),
  ADD KEY `id_pemsanan` (`id_pemesanan`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `elektronik`
--
ALTER TABLE `elektronik`
  MODIFY `id_elektronik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id_invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `teknisi`
--
ALTER TABLE `teknisi`
  MODIFY `id_teknisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `id_ulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `invoice_ibfk_2` FOREIGN KEY (`id_teknisi`) REFERENCES `teknisi` (`id_teknisi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD CONSTRAINT `pelanggan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `pemesanan_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pemesanan_ibfk_2` FOREIGN KEY (`id_elektronik`) REFERENCES `elektronik` (`id_elektronik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `teknisi`
--
ALTER TABLE `teknisi`
  ADD CONSTRAINT `teknisi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teknisi_ibfk_2` FOREIGN KEY (`id_elektronik`) REFERENCES `elektronik` (`id_elektronik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `ulasan`
--
ALTER TABLE `ulasan`
  ADD CONSTRAINT `ulasan_ibfk_1` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
