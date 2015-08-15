-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Agu 2015 pada 16.40
-- Versi Server: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sdpa_bl`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `employee_id` varchar(10) NOT NULL,
  `NIP` varchar(15) NOT NULL,
  `NUPTK` varchar(20) NOT NULL,
  `nama_guru` varchar(30) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(9) NOT NULL,
  `alamat` text NOT NULL,
  `agama` varchar(8) NOT NULL,
  `kewarganegaraan` varchar(15) NOT NULL,
  `warga_negara` varchar(3) NOT NULL,
  `status_anak` varchar(7) NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `status_pernikahan` varchar(15) NOT NULL,
  `tahun_menikah` varchar(4) NOT NULL,
  `telp_rumah` varchar(12) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` text NOT NULL,
  `jml_saudara` int(11) NOT NULL,
  `thn_mulai_tugas` varchar(4) NOT NULL,
  `no_sk_dinas` text NOT NULL,
  `tgl_sk_dinas` date NOT NULL,
  `bdg_studi_ajar` varchar(20) NOT NULL,
  `mutasi_dari` varchar(20) NOT NULL,
  `no_sk_mutasi` text NOT NULL,
  `stat_karyawan` varchar(10) NOT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `foto` text NOT NULL,
  `tempat_bekerja` varchar(20) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `pangkat_golongan` text NOT NULL,
  `stat_pegawai` text NOT NULL,
  `mengajar_dikelas` varchar(11) NOT NULL,
  `tugas_tambahan` varchar(11) NOT NULL,
  `tgkt_jnjg_pddkn` varchar(5) NOT NULL,
  `thn_msk_pddkn` varchar(4) NOT NULL,
  `thn_lulus_pddkn` varchar(4) NOT NULL,
  `nama_bapak` varchar(30) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL,
  `nama_suami` varchar(30) NOT NULL,
  `nama_istri` varchar(30) NOT NULL,
  `tinggi_badan` int(11) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `wajah` varchar(20) NOT NULL,
  `rambut` varchar(11) NOT NULL,
  `pykt_derita` varchar(30) NOT NULL,
  `keahlian` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`employee_id`, `NIP`, `NUPTK`, `nama_guru`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `agama`, `kewarganegaraan`, `warga_negara`, `status_anak`, `anak_ke`, `status_pernikahan`, `tahun_menikah`, `telp_rumah`, `no_hp`, `email`, `jml_saudara`, `thn_mulai_tugas`, `no_sk_dinas`, `tgl_sk_dinas`, `bdg_studi_ajar`, `mutasi_dari`, `no_sk_mutasi`, `stat_karyawan`, `gol_darah`, `foto`, `tempat_bekerja`, `jabatan`, `pangkat_golongan`, `stat_pegawai`, `mengajar_dikelas`, `tugas_tambahan`, `tgkt_jnjg_pddkn`, `thn_msk_pddkn`, `thn_lulus_pddkn`, `nama_bapak`, `nama_ibu`, `nama_suami`, `nama_istri`, `tinggi_badan`, `berat_badan`, `wajah`, `rambut`, `pykt_derita`, `keahlian`) VALUES
('E0002', 'NIP0002', 'NUPTK0002', 'Wahyuni Irna', 'Bandung', '1982-05-13', 'Perempuan', 'Jl. Jambu Air Blok A/30 Perum. Gemilang Permai, Bekasi Barat', 'Katolik', 'Indonesia', 'WNA', 'Kandung', 4, 'Menikah', '2005', '0229139281', '0898122317285', 'yunirna@yahoo.com', 3, '2010', 'SK0002', '2010-04-22', 'Bahasa Indonesia', 'Bandung', 'SKM0002', 'Tetap', 'AB', 'http://localhost/1234sdpabl-D/assets/uploads/file_1439649321', 'Jakarta', 'Guru', '', 'Kontrak', '3', '', 'S2', '1994', '2008', 'Arman ', 'Rita', 'Raka Naseda', '', 168, 50, 'Kotak', 'Ikal', 'Tifus', 'Edit Video'),
('E0003', 'NIP0003', 'NUPTK0003', 'Ni Nyoman Dewi', 'Denpasar', '1990-10-25', 'Perempuan', 'Jl. Kenanga 3, Blok J/2 No. 12, Denpasar Village, Jakarta Selatan', 'Hindu', 'Indonesia', 'WNA', 'Kandung', 3, 'Belum Menikah', '', '02134568373', '083814317285', 'ninyom@live.com', 4, '2011', 'SK0003', '2011-02-12', 'Pendidikan Agama Hin', 'Gianyar', 'SKM0003', 'Tetap', 'O', 'http://localhost/ci7/assets/uploads/file_1438270458.jpg', 'Jakarta', 'Guru', '', 'Kontrak', '2', '', 'S1', '1999', '2009', 'I Made Winarna', 'Ni Ketut Dewi', '', '', 170, 70, 'Bulat', 'Hitam', 'DBD', NULL),
('E0004', 'NIP0004', 'NUPTK0004', 'Windi Risti', 'Tangerang', '1992-09-12', 'Perempuan', 'Jl. Marunda Raya No. 12 Kelurahan Cawang - Jakarta', 'Budha', 'Indonesia', 'WNI', 'Kandung', 4, 'Menikah', '2010', '021-23423123', '081274836589', 'wiristi@yahoo.com', 4, '2011', 'SK0004', '2011-02-23', 'Matematika', 'Semarang', 'SKM0004', 'Tetap', 'AB', 'http://localhost/1234sdpabl-D/assets/uploads/file_1439649586.jpg', 'Jakarta', 'Guru', '', 'Kontrak', '1', '', 'S1', '1999', '2008', 'Mardi Suhadi', 'Yunita', 'Jamal', '', 160, 50, 'Bulat', 'Ikal', 'Asma', 'Drama'),
('E0005', 'NIP0005', 'NUPTK0005', 'Febrian Nawawi', 'Bandung', '0000-00-00', 'Laki-laki', 'Jl. Kenanga No. 45 - Bekasi', 'Islam', 'Indonesia', 'WNA', 'Angkat', 2, 'Belum Menikah', '', '021-34568333', '085717510575', 'febna@gmail.com', 4, '2011', 'SK0005', '2011-02-12', 'IPA', 'Cibubur', 'SKM0005', 'Kontrak', 'B', 'http://localhost/ci7/assets/uploads/file_1434450011.png', 'Jakarta', 'Guru', '', 'Tetap', '6', '', 'S2', '1999', '2011', 'Junaidi', 'Marinah', '', '', 176, 70, 'Kotak', 'Coklat', 'DBD', NULL),
('E0008', 'NIP0008', 'NUPTK0008', 'Roni Setiawan', 'Bandung', '0000-00-00', 'Laki-laki', 'Jl. Kenanga No. 45 - Bekasi', 'Islam', 'Indonesia', 'WNA', 'Angkat', 2, 'Belum Menikah', '', '021-34568333', '085717510575', 'febna@gmail.com', 4, '2011', 'SK0005', '2011-02-12', 'IPA', 'Cibubur', 'SKM0005', 'Kontrak', 'B', 'http://localhost/ci7/assets/uploads/file_1434450011.png', 'Jakarta', 'Guru', '', 'Tetap', '6', '', 'S2', '1999', '2011', 'Junaidi', 'Marinah', '', '', 176, 70, 'Kotak', 'Coklat', 'DBD', NULL),
('E0009', 'NIP0009', 'NUPTK0009', 'Cappucino Kopiu', 'Bandung', '0000-00-00', 'Laki-laki', 'Jl. Kenanga No. 45 - Bekasi', 'Islam', 'Indonesia', 'WNA', 'Angkat', 2, 'Belum Menikah', '', '021-34568333', '085717510575', 'febna@gmail.com', 4, '2011', 'SK0005', '2011-02-12', 'IPA', 'Cibubur', 'SKM0005', 'Kontrak', 'B', 'http://localhost/ci7/assets/uploads/file_1434450011.png', 'Jakarta', 'Guru', '', 'Tetap', '6', '', 'S2', '1999', '2011', 'Junaidi', 'Marinah', '', '', 176, 70, 'Kotak', 'Coklat', 'DBD', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`employee_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
