-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Agu 2015 pada 04.27
-- Versi Server: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sdpa_blnew`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ket_kuis`
--

CREATE TABLE IF NOT EXISTS `ket_kuis` (
  `kd_ket_kuis` varchar(10) NOT NULL DEFAULT '',
  `keterangan_kuis` text,
  `tahun` varchar(10) NOT NULL DEFAULT '',
  `semester` varchar(10) NOT NULL DEFAULT '',
  `kd_jadwal` varchar(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ket_kuis`
--

INSERT INTO `ket_kuis` (`kd_ket_kuis`, `keterangan_kuis`, `tahun`, `semester`, `kd_jadwal`) VALUES
('QZ0001', 'frrr', '2015/2016', 'Gasal', 'J0004'),
('QZ0001', 'tes', '2015/2016', 'Gasal', 'J0007');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ket_kuis`
--
ALTER TABLE `ket_kuis`
  ADD PRIMARY KEY (`kd_ket_kuis`,`tahun`,`semester`,`kd_jadwal`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
