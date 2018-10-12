-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Okt 2018 pada 05.03
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jurnall6`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jurnal6`
--

CREATE TABLE `tb_jurnal6` (
  `nim` bigint(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `jeniskelamin` varchar(10) NOT NULL,
  `hobi` varchar(20) NOT NULL,
  `fakultas` varchar(3) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_jurnal6`
--

INSERT INTO `tb_jurnal6` (`nim`, `nama`, `kelas`, `jeniskelamin`, `hobi`, `fakultas`, `alamat`) VALUES
(4321, 'Dyah Ayu', '41-01', 'Laki-laki', 'musik', 'FRI', 'a'),
(9999, 'Ayyu', '41-01', 'Laki-laki', 'musik', 'FIK', 'a'),
(12340, 'pppp', '41-01', 'Laki-laki', '', 'FIK', 'uuuuu'),
(12348, 'Dyah Ayu', '41-01', 'Laki-laki', '', 'FEB', 'aaa'),
(6701174010, 'Ayyu', '41-01', 'Laki-laki', '', 'FTE', 'jj'),
(6701174011, 'Dyah Ayu', '41-01', 'Laki-laki', '', 'FTE', 'aaa'),
(6701174012, 'Dyah Ayu', '41-01', 'Laki-laki', 'musik', 'FIK', 'aa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_jurnal6`
--
ALTER TABLE `tb_jurnal6`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
