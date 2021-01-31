-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Jan 2021 pada 12.05
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_intan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gaji`
--

CREATE TABLE `tbl_gaji` (
  `id_gaji` int(11) NOT NULL,
  `namaKaryawan` varchar(50) NOT NULL,
  `alamatKaryawan` varchar(128) NOT NULL,
  `jabatanKaryawan` varchar(50) NOT NULL,
  `gajiPokok` int(20) NOT NULL,
  `tunjanganMakan` int(20) NOT NULL,
  `tunjanganPulsa` int(20) NOT NULL,
  `bonusKaryawan` int(50) NOT NULL,
  `totalTerima` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_gaji`
--

INSERT INTO `tbl_gaji` (`id_gaji`, `namaKaryawan`, `alamatKaryawan`, `jabatanKaryawan`, `gajiPokok`, `tunjanganMakan`, `tunjanganPulsa`, `bonusKaryawan`, `totalTerima`) VALUES
(46, 'Fausan', 'werer', 'Manajer', 324, 23423, 234, 243, 24224),
(47, 'Intan', 'palembang', 'Kepala Keuangan', 120000, 122222, 12222, 1222, 255666);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jabatankaryawan`
--

CREATE TABLE `tbl_jabatankaryawan` (
  `idJabatan` int(11) NOT NULL,
  `namaJabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_jabatankaryawan`
--

INSERT INTO `tbl_jabatankaryawan` (`idJabatan`, `namaJabatan`) VALUES
(1, 'Manajer'),
(12, 'Staff'),
(14, 'Kepala Keuangan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_gaji`
--
ALTER TABLE `tbl_gaji`
  ADD PRIMARY KEY (`id_gaji`);

--
-- Indeks untuk tabel `tbl_jabatankaryawan`
--
ALTER TABLE `tbl_jabatankaryawan`
  ADD PRIMARY KEY (`idJabatan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_gaji`
--
ALTER TABLE `tbl_gaji`
  MODIFY `id_gaji` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT untuk tabel `tbl_jabatankaryawan`
--
ALTER TABLE `tbl_jabatankaryawan`
  MODIFY `idJabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
