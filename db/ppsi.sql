-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Jan 2024 pada 01.43
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama`) VALUES
(1, 'kacang'),
(2, 'Ikan'),
(3, 'Daging'),
(4, 'Minyak Goreng'),
(5, 'Ikan Asin'),
(6, 'Kerupuk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `harga_barang`
--

CREATE TABLE `harga_barang` (
  `id` int(11) NOT NULL,
  `barang_id` int(11) NOT NULL,
  `pasar_id` int(11) NOT NULL,
  `harga` double NOT NULL,
  `tanggal_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `harga_barang`
--

INSERT INTO `harga_barang` (`id`, `barang_id`, `pasar_id`, `harga`, `tanggal_input`) VALUES
(1, 4, 1, 20000, '2023-05-11'),
(2, 2, 1, 10000, '2023-05-12'),
(3, 1, 2, 10000, '2023-05-12'),
(4, 1, 3, 2000, '2023-05-14'),
(5, 3, 1, 120000, '2023-05-15'),
(6, 1, 20, 4500, '2023-05-13'),
(7, 1, 22, 4500, '2023-05-14'),
(8, 2, 3, 15000, '2023-05-15'),
(10, 5, 3, 15000, '2023-04-11'),
(11, 5, 2, 4500, '2023-04-12'),
(12, 3, 2, 50000, '2023-08-22'),
(13, 2, 3, 50000, '2023-08-10'),
(15, 4, 20, 10000, '2023-08-22'),
(16, 2, 22, 25000, '2023-08-13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasar`
--

CREATE TABLE `pasar` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pasar`
--

INSERT INTO `pasar` (`id`, `nama`, `lokasi`) VALUES
(1, 'Pasar PPI', 'Jl Gresik 39'),
(2, 'Pasar Atom', 'Surabaya, Jawa Timur'),
(3, 'Pasar Genteng', 'Jalan Genteng, Surabaya'),
(20, 'Pasar Lamongan', 'Jawa Timur'),
(22, 'Pasar Ikan', 'Gunung Sari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(60) NOT NULL,
  `type` int(1) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  `activate_code` varchar(15) NOT NULL,
  `reset_code` varchar(15) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type`, `firstname`, `lastname`, `address`, `contact_info`, `status`, `activate_code`, `reset_code`, `created_on`) VALUES
(1, 'admin@admin.com', '$2a$12$1I4VBqdNLKIm8xvETDgd.uCZEA/NbXuHvqIKMPcz/wx60aTuYk/9e', 1, 'Kelompok', 'Tiga', '', '', 1, '', '', '2018-05-01'),
(13, 'pasar@gmail.com', '$2a$12$KSKrkNVeQMMl3Cbmuzpc/uaBT.Pj7EUgXipBgcqAr0tdXQGdTIV0m', 0, 'Pegawai', 'Pasar', '', '', 1, '', '', '2022-07-08'),
(14, 'pasar1@gmail.com', '$2y$10$qZUN4JOgh4RgzunelAYhrefjHban4F06cmlty7w05X3fe4aN4KxeK', 0, 'Pasar', 'Admin 2', '', '', 1, '', '', '2022-07-08');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `harga_barang`
--
ALTER TABLE `harga_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pasar`
--
ALTER TABLE `pasar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `harga_barang`
--
ALTER TABLE `harga_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `pasar`
--
ALTER TABLE `pasar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
