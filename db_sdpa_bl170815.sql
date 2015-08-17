-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Agu 2015 pada 17.48
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
('E0002', 'NIP0002', 'NUPTK0002', 'Wahyuni Irna', 'Bandung', '1982-05-13', 'Perempuan', 'Jl. Jambu Air Blok A/30 Perum. Gemilang Permai, Bekasi Barat', 'Katolik', 'Indonesia', 'WNA', 'Kandung', 4, 'Menikah', '2005', '0229139281', '0898122317285', 'yunirna@yahoo.com', 3, '2010', 'SK0002', '2010-04-22', 'Bahasa Indonesia', 'Bandung', 'SKM0002', 'Tetap', 'AB', 'http://localhost/1234sdpabl-D/assets/uploads/file_1439672250.jpg', 'Jakarta', 'Guru', 'A', 'Kontrak', '3', '', 'S2', '1994', '2008', 'Arman ', 'Rita', 'Raka Naseda', '', 168, 50, 'Kotak', 'Ikal', 'Tifus', 'Edit Video'),
('E0003', 'NIP0003', 'NUPTK0003', 'Ni Nyoman Dewi', 'Denpasar', '1990-10-25', 'Perempuan', 'Jl. Kenanga 3, Blok J/2 No. 12, Denpasar Village, Jakarta Selatan', 'Hindu', 'Indonesia', 'WNA', 'Kandung', 3, 'Belum Menikah', '', '02134568373', '083814317285', 'ninyom@live.com', 4, '2011', 'SK0003', '2011-02-12', 'Pendidikan Agama Hin', 'Gianyar', 'SKM0003', 'Tetap', 'O', 'http://localhost/1234sdpabl-D/assets/uploads/file_1439671217', 'Jakarta', 'Guru', '', 'Kontrak', '2', '', 'S1', '1999', '2009', 'I Made Winarna', 'Ni Ketut Dewi', '', '', 170, 70, 'Bulat', 'Ikal', 'DBD', ''),
('E0004', 'NIP0004', 'NUPTK0004', 'Windi Risti', 'Tangerang', '1992-09-12', 'Perempuan', 'Jl. Marunda Raya No. 12 Kelurahan Cawang - Jakarta', 'Budha', 'Indonesia', 'WNI', 'Kandung', 4, 'Menikah', '2010', '021-23423123', '081274836589', 'wiristi@yahoo.com', 4, '2011', 'SK0004', '2011-02-23', 'Matematika', 'Semarang', 'SKM0004', 'Tetap', 'AB', 'http://localhost/1234sdpabl-D/assets/uploads/file_1439672239.jpg', 'Jakarta', 'Guru', '', 'Kontrak', '1', '', 'S1', '1999', '2008', 'Mardi Suhadi', 'Yunita', 'Jamal', '', 160, 50, 'Bulat', 'Ikal', 'Asma', 'Drama'),
('E0005', 'NIP0005', 'NUPTK0005', 'Febrian Nawawi', 'Bandung', '0000-00-00', 'Laki-laki', 'Jl. Kenanga No. 45 - Bekasi', 'Islam', 'Indonesia', 'WNA', 'Angkat', 2, 'Belum Menikah', '', '021-34568333', '085717510575', 'febna@gmail.com', 4, '2011', 'SK0005', '2011-02-12', 'IPA', 'Cibubur', 'SKM0005', 'Kontrak', 'B', 'http://localhost/ci7/assets/uploads/file_1434450011.png', 'Jakarta', 'Guru', '', 'Tetap', '6', '', 'S2', '1999', '2011', 'Junaidi', 'Marinah', '', '', 176, 70, 'Kotak', 'Coklat', 'DBD', NULL),
('E0008', 'NIP0008', 'NUPTK0008', 'Roni Setiawan', 'Bandung', '0000-00-00', 'Laki-laki', 'Jl. Kenanga No. 45 - Bekasi', 'Islam', 'Indonesia', 'WNA', 'Angkat', 2, 'Belum Menikah', '', '021-34568333', '085717510575', 'febna@gmail.com', 4, '2011', 'SK0005', '2011-02-12', 'IPA', 'Cibubur', 'SKM0005', 'Kontrak', 'B', 'http://localhost/ci7/assets/uploads/file_1434450011.png', 'Jakarta', 'Guru', '', 'Tetap', '6', '', 'S2', '1999', '2011', 'Junaidi', 'Marinah', '', '', 176, 70, 'Kotak', 'Coklat', 'DBD', NULL),
('E0009', 'NIP0009', 'NUPTK0009', 'Cappucino Kopiu', 'Bandung', '0000-00-00', 'Laki-laki', 'Jl. Kenanga No. 45 - Bekasi', 'Islam', 'Indonesia', 'WNA', 'Angkat', 2, 'Belum Menikah', '', '021-34568333', '085717510575', 'febna@gmail.com', 4, '2011', 'SK0005', '2011-02-12', 'IPA', 'Cibubur', 'SKM0005', 'Kontrak', 'B', 'http://localhost/1234sdpabl-D/assets/uploads/file_1439800015.jpg', 'Jakarta', 'Guru', '', 'Tetap', '6', '', 'S2', '1999', '2011', 'Junaidi', 'Marinah', '', '', 176, 70, 'Kotak', 'Ikal', 'DBD', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `kd_jadwal` varchar(10) NOT NULL,
  `thn_ajar` varchar(10) NOT NULL,
  `semester` varchar(5) NOT NULL,
  `kd_mapel` varchar(10) NOT NULL,
  `employee_id` varchar(10) NOT NULL,
  `kd_kelas` varchar(10) NOT NULL,
  `hari` varchar(8) NOT NULL,
  `ruang` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`kd_jadwal`, `thn_ajar`, `semester`, `kd_mapel`, `employee_id`, `kd_kelas`, `hari`, `ruang`) VALUES
('J0001', '2015/2016', 'Gasal', 'M0001', 'E0004', 'K0001', 'Selasa', '2.1.2'),
('J0002', '2015/2016', 'Gasal', 'M0003', 'E0004', 'K0003', 'Jum''at', '2.3.5'),
('J0003', '2015/2016', 'Genap', 'M0002', 'E0004', 'K0002', 'Senin', '5.3.1'),
('J0004', '2015/2016', 'Gasal', 'M0002', 'E0003', 'K0003', 'Kamis', '6.4.7'),
('J0005', '2015/2016', 'Gasal', 'M0001', 'E0003', 'K0002', 'Senin', '3.4.6'),
('J0007', '2015/2016', 'Gasal', 'M0001', 'E0004', 'K0006', 'Kamis', '4.1.4'),
('J0009', '2015/2016', 'Genap', 'M0004', 'E0005', 'K0010', 'Selasa', '3.1.1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `kd_kelas` varchar(5) NOT NULL,
  `nm_kelas` varchar(20) NOT NULL,
  `kapasitas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`kd_kelas`, `nm_kelas`, `kapasitas`) VALUES
('K0002', '2.A', 38),
('K0003', '3.A', 90),
('K0005', '3.D', 60),
('K0006', '4.C', 30);

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `ket_latihan`
--

CREATE TABLE IF NOT EXISTS `ket_latihan` (
  `kd_ket_latihan` varchar(10) NOT NULL DEFAULT '',
  `keterangan_latihan` text,
  `kd_jadwal` varchar(10) NOT NULL DEFAULT '',
  `tahun` varchar(10) NOT NULL DEFAULT '',
  `semester` varchar(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ket_latihan`
--

INSERT INTO `ket_latihan` (`kd_ket_latihan`, `keterangan_latihan`, `kd_jadwal`, `tahun`, `semester`) VALUES
('LT0001', 'frr', 'J0004', '2015/2016', 'Gasal'),
('LT0001', 'tes', 'J0007', '2015/2016', 'Gasal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kuis`
--

CREATE TABLE IF NOT EXISTS `kuis` (
  `kd_kuis` varchar(10) NOT NULL DEFAULT '',
  `kd_jadwal` varchar(10) NOT NULL,
  `nis` varchar(20) NOT NULL DEFAULT '',
  `nilai` int(3) DEFAULT '0',
  `tahun` varchar(15) NOT NULL DEFAULT '',
  `semester` varchar(5) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kuis`
--

INSERT INTO `kuis` (`kd_kuis`, `kd_jadwal`, `nis`, `nilai`, `tahun`, `semester`) VALUES
('QZ0001', 'J0004', 'NIS0001', 0, '2015/2016', 'Gasal'),
('QZ0001', 'J0007', 'NIS0001', 0, '2015/2016', 'Gasal'),
('QZ0001', 'J0007', 'NIS0002', 0, '2015/2016', 'Gasal'),
('QZ0001', 'J0007', 'NIS0003', 0, '2015/2016', 'Gasal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `latihan`
--

CREATE TABLE IF NOT EXISTS `latihan` (
  `kd_lat` varchar(10) NOT NULL,
  `kd_jadwal` varchar(10) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `nilai` int(3) DEFAULT '0',
  `tahun` varchar(15) NOT NULL DEFAULT '',
  `semester` varchar(5) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `latihan`
--

INSERT INTO `latihan` (`kd_lat`, `kd_jadwal`, `nis`, `nilai`, `tahun`, `semester`) VALUES
('LT0001', 'J0004', 'NIS0001', 0, '2015/2016', 'Gasal'),
('LT0001', 'J0007', 'NIS0001', 0, '2015/2016', 'Gasal'),
('LT0001', 'J0007', 'NIS0002', 0, '2015/2016', 'Gasal'),
('LT0001', 'J0007', 'NIS0003', 0, '2015/2016', 'Gasal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE IF NOT EXISTS `mapel` (
  `kd_mapel` varchar(10) NOT NULL,
  `nm_mapel` varchar(30) NOT NULL,
  `kkm` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`kd_mapel`, `nm_mapel`, `kkm`) VALUES
('M0001', 'MATEMATIKA', 75),
('M0002', 'BAHASA INGGRIS', 88),
('M0003', 'IPS', 80);

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `kd_jadwal` varchar(10) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `uts` int(2) NOT NULL,
  `uas` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta`
--

CREATE TABLE IF NOT EXISTS `peserta` (
  `nis` varchar(20) NOT NULL,
  `kd_kelas` varchar(5) NOT NULL,
  `thn_ajar` varchar(10) NOT NULL,
  `kd_peserta` int(4) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peserta`
--

INSERT INTO `peserta` (`nis`, `kd_kelas`, `thn_ajar`, `kd_peserta`) VALUES
('NIS0001', 'K0002', '2015/2018', 2),
('NIS0001', 'K0006', '2015/2016', 3),
('NIS0002', 'K0006', '2015/2016', 5),
('NIS0003', 'K0006', '2015/2016', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `NIS` varchar(10) NOT NULL DEFAULT '',
  `NISN` varchar(30) NOT NULL DEFAULT '0',
  `Nama` varchar(50) NOT NULL,
  `Tempat_lahir` varchar(20) NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `Agama` varchar(10) NOT NULL,
  `Jenis_kelamin` varchar(10) NOT NULL,
  `Kewarganegaraan` varchar(10) NOT NULL,
  `Warga_negara` varchar(3) NOT NULL,
  `Status_anak` varchar(10) NOT NULL,
  `Anak_ke` int(2) NOT NULL,
  `Jumlah_saudara` int(2) NOT NULL,
  `Asal_sekolah` varchar(30) NOT NULL,
  `Prestasi` text NOT NULL,
  `Nama_ayah` varchar(50) NOT NULL,
  `Nama_ibu` varchar(50) NOT NULL,
  `Alamat` text NOT NULL,
  `Telepon_rumah` varchar(20) NOT NULL,
  `Nomor_hp` varchar(20) NOT NULL,
  `Tinggi_badan` int(11) NOT NULL,
  `Berat_badan` int(11) NOT NULL,
  `Wajah` varchar(20) NOT NULL,
  `Rambut` varchar(20) NOT NULL,
  `Golongan_darah` varchar(2) NOT NULL,
  `Penyakit_riwayat` text NOT NULL,
  `Foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`NIS`, `NISN`, `Nama`, `Tempat_lahir`, `Tanggal_lahir`, `Agama`, `Jenis_kelamin`, `Kewarganegaraan`, `Warga_negara`, `Status_anak`, `Anak_ke`, `Jumlah_saudara`, `Asal_sekolah`, `Prestasi`, `Nama_ayah`, `Nama_ibu`, `Alamat`, `Telepon_rumah`, `Nomor_hp`, `Tinggi_badan`, `Berat_badan`, `Wajah`, `Rambut`, `Golongan_darah`, `Penyakit_riwayat`, `Foto`) VALUES
('NIS0001', 'NISN0001', 'Hairil Fiqri Sulaiman', 'Jakarta', '2015-06-05', 'Islam', 'Laki-Laki', 'Indonesia', 'WNI', 'Kandung', 0, 0, 'SMAN 2 Jakarta', 'Juara 1 Lomba Gemastik 2020', 'Ibu', 'Ayah', 'Jakarta', '087367286328', '087367286328', 170, 60, 'Bulat', 'Ikal', 'A', 'Tidak ada', 'file_1439672189.jpg'),
('NIS0002', 'NISN0002', 'Austin Arta Tunggal Pratama', 'Jakarta', '2015-06-19', 'Islam', 'Perempuan', 'Indonesia', 'WNI', 'Kandung', 0, 0, 'SMAN 1 Baturetno', 'Juara 1', 'Ayah', 'Ibu', 'Jakarta', '087736317753', '087736317753', 170, 60, 'Bulat', 'Ikal', 'B', 'Tidak', 'file_1439672196.jpg'),
('NIS0003', 'NISN0003', 'Mila Hanifah', 'Jakarta', '2015-06-03', 'Islam', 'Perempuan', 'Indonesia', 'WNI', 'Kandung', 4, 4, 'SMAN 5 Jakarta', 'Juara 1', 'Ayah', 'Ibu', 'Jakarta', '087736317753', '087736317753', 170, 60, 'Bulat', 'Ikal', 'AB', 'Tidak ada', 'file_1439672202.jpg'),
('NIS0004', 'NISN0004', 'Pajar Septianto', 'Jakarta', '2015-06-01', 'Islam', 'Perempuan', 'Indonesia', 'WNI', 'Kandung', 1, 2, 'SMAN 5 Jakarta', 'Juara 1', 'Ayah', 'Ibu', 'Jakarta', '087736317753', '087736317753', 165, 55, 'Bulat', 'Ikal', 'B', 'Tidak ada', 'file_1439672208.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `uas`
--

CREATE TABLE IF NOT EXISTS `uas` (
  `kd_uas` varchar(10) NOT NULL DEFAULT '',
  `kd_jadwal` varchar(10) NOT NULL DEFAULT '',
  `nis` varchar(20) NOT NULL DEFAULT '',
  `nilai` int(3) DEFAULT NULL,
  `tahun` varchar(10) NOT NULL DEFAULT '',
  `semester` varchar(5) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `uas`
--

INSERT INTO `uas` (`kd_uas`, `kd_jadwal`, `nis`, `nilai`, `tahun`, `semester`) VALUES
('UA0001', 'J0004', 'NIS0001', 0, '2015/2016', 'Gasal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `level` varchar(10) NOT NULL,
  `sess_id` text NOT NULL,
  `ip_add` text NOT NULL,
  `browser` varchar(30) NOT NULL,
  `last_log` datetime NOT NULL,
  `walikelas` varchar(10) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `password`, `level`, `sess_id`, `ip_add`, `browser`, `last_log`, `walikelas`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '71e975eccbcec4d8092e1d201ca0b8da9aa1cf42', '::1', 'Chrome 44.0.2403.155', '2015-08-17 22:46:06', ''),
('E0003', '77fec8670e69d18271a3060b3eabd914', 'guru', '6d10378d1e844b43ff1d014f11981a8ea05784d7', '::1', 'Chrome 44.0.2403.155', '2015-08-17 09:18:52', 'Y'),
('E0004', '83bebfe8c5e9a9eb7ea17ce4103c84f1', 'guru', 'dcf0d2c637a37da9eaebe26b7c3a9c4c5424b844', '::1', 'Chrome 44.0.2403.155', '2015-08-17 22:11:35', 'Y'),
('E0009', 'e48d95f01415d2f731e4517b461f499e', 'guru', 'a14af664b87b48fb4f46dbf1f2a5ecc521b8d771', '::1', 'Chrome 44.0.2403.155', '2015-08-17 16:09:16', 'N'),
('user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 'e033849569672893f2cdd83f22417188cea9959a', '::1', 'Chrome 43.0.2357.124', '2015-06-14 19:43:23', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `uts`
--

CREATE TABLE IF NOT EXISTS `uts` (
  `kd_uts` varchar(10) NOT NULL,
  `kd_jadwal` varchar(10) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nilai` int(3) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `semester` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `uts`
--

INSERT INTO `uts` (`kd_uts`, `kd_jadwal`, `nis`, `nilai`, `tahun`, `semester`) VALUES
('UT0001', 'J0004', 'NIS0001', 0, '2015/2016', 'Gasal');

-- --------------------------------------------------------

--
-- Struktur dari tabel `walikelas`
--

CREATE TABLE IF NOT EXISTS `walikelas` (
  `Kd_walikelas` int(10) NOT NULL,
  `Tahun_ajar_wali` varchar(10) DEFAULT '',
  `Employee_id` varchar(30) NOT NULL DEFAULT '',
  `Kd_kelas` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `walikelas`
--

INSERT INTO `walikelas` (`Kd_walikelas`, `Tahun_ajar_wali`, `Employee_id`, `Kd_kelas`) VALUES
(26, '2015/2016', 'E0004', 'K0006'),
(28, '2015/2016', 'E0003', 'K0005');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`kd_jadwal`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`kd_kelas`);

--
-- Indexes for table `ket_kuis`
--
ALTER TABLE `ket_kuis`
  ADD PRIMARY KEY (`kd_ket_kuis`,`tahun`,`semester`,`kd_jadwal`);

--
-- Indexes for table `ket_latihan`
--
ALTER TABLE `ket_latihan`
  ADD PRIMARY KEY (`kd_ket_latihan`,`kd_jadwal`,`tahun`,`semester`);

--
-- Indexes for table `kuis`
--
ALTER TABLE `kuis`
  ADD PRIMARY KEY (`kd_jadwal`,`nis`,`kd_kuis`,`tahun`,`semester`);

--
-- Indexes for table `latihan`
--
ALTER TABLE `latihan`
  ADD PRIMARY KEY (`kd_lat`,`kd_jadwal`,`nis`,`tahun`,`semester`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`kd_mapel`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`kd_jadwal`,`nis`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`kd_peserta`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NIS`);

--
-- Indexes for table `uas`
--
ALTER TABLE `uas`
  ADD PRIMARY KEY (`kd_uas`,`kd_jadwal`,`nis`,`tahun`,`semester`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `uts`
--
ALTER TABLE `uts`
  ADD PRIMARY KEY (`kd_uts`,`kd_jadwal`,`nis`,`tahun`,`semester`);

--
-- Indexes for table `walikelas`
--
ALTER TABLE `walikelas`
  ADD PRIMARY KEY (`Kd_walikelas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `kd_peserta` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `walikelas`
--
ALTER TABLE `walikelas`
  MODIFY `Kd_walikelas` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
