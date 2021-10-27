-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Okt 2021 pada 16.25
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_absensi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_absensi`
--

CREATE TABLE `tb_absensi` (
  `nomor_pegawai` varchar(15) NOT NULL,
  `nama_pegawai` varchar(150) NOT NULL,
  `kehadiran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_absensi`
--

INSERT INTO `tb_absensi` (`nomor_pegawai`, `nama_pegawai`, `kehadiran`) VALUES
('52004114370', 'Finan Aji', 'Izin'),
('5200411490', 'Ilham Rafiedhia', 'Hadir');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_register`
--

CREATE TABLE `tb_register` (
  `nomor_pegawai` varchar(15) NOT NULL,
  `nama_pegawai` varchar(250) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_register`
--

INSERT INTO `tb_register` (`nomor_pegawai`, `nama_pegawai`, `alamat`, `no_hp`, `password`) VALUES
('52000411490', 'Ilham Rafiedhia', 'Balikpapan, Kalimantan Timur', '085705402938', '$2y$10$IxXVTZNWi2qYYt4Etrx.ZOaPguGsl3v3Wi64pJlTGSBAhgJORcLQS'),
('52004114370', 'Finan Aji', 'Yogyakarya', '0855723412', '$2y$10$jcdvM4ZvBsWgViBqbxOU5../b/OAIQx38nmyuj90hb235dRljumOK');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_absensi`
--
ALTER TABLE `tb_absensi`
  ADD PRIMARY KEY (`nomor_pegawai`);

--
-- Indeks untuk tabel `tb_register`
--
ALTER TABLE `tb_register`
  ADD PRIMARY KEY (`nomor_pegawai`) USING BTREE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
