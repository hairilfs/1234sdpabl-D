# Host: localhost  (Version: 5.6.16)
# Date: 2015-08-02 20:29:57
# Generator: MySQL-Front 5.3  (Build 4.122)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "guru"
#

DROP TABLE IF EXISTS `guru`;
CREATE TABLE `guru` (
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
  PRIMARY KEY (`employee_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "guru"
#

INSERT INTO `guru` VALUES ('E0002','NIP0002','NUPTK0002','Wahyuni Irna','Bandung','1982-05-13','Perempuan','Jl. Jambu Air Blok A/30 Perum. Gemilang Permai, Bekasi Barat','Katolik','Indonesia','WNA','Kandung',4,'Menikah','2005','0229139281','0898122317285','yunirna@yahoo.com',3,'2010','SK0002','2010-04-22','Bahasa Indonesia','Bandung','SKM0002','Tetap','AB','http://localhost/ci7/assets/uploads/user-female-icon.png','Jakarta','Guru','','Kontrak','3','','S2','1994','2008','Arman ','Rita','Raka Naseda','',168,50,'Kotak','Pirang','Tifus'),('E0003','NIP0003','NUPTK0003','Ni Nyoman Dewi','Denpasar','1990-10-25','Perempuan','Jl. Kenanga 3, Blok J/2 No. 12, Denpasar Village, Jakarta Selatan','Hindu','Indonesia','WNA','Kandung',3,'Belum Menikah','','02134568373','083814317285','ninyom@live.com',4,'2011','SK0003','2011-02-12','Pendidikan Agama Hin','Gianyar','SKM0003','Tetap','O','http://localhost/ci7/assets/uploads/file_1438270458.jpg','Jakarta','Guru','','Kontrak','2','','S1','1999','2009','I Made Winarna','Ni Ketut Dewi','','',170,70,'Bulat','Hitam','DBD'),('E0004','NIP0004','NUPTK0004','Windi Risti','Tangerang','1992-09-12','Perempuan','Jl. Marunda Raya No. 12 Kelurahan Cawang - Jakarta','Budha','Indonesia','WNI','Kandung',4,'Menikah','2010','021-23423123','081274836589','wiristi@yahoo.com',4,'2011','SK0004','2011-02-23','Matematika','Semarang','SKM0004','Tetap','AB','http://localhost/ci7/assets/uploads/file_1434449513.jpg','Jakarta','Guru','','Kontrak','1','','S1','1999','2008','Mardi Suhadi','Yunita','Jamal','',160,50,'Bulat','Pirang','Asma'),('E0005','NIP0005','NUPTK0005','Febrian Nawawi','Bandung','0000-00-00','Laki-laki','Jl. Kenanga No. 45 - Bekasi','Islam','Indonesia','WNA','Angkat',2,'Belum Menikah','','021-34568333','085717510575','febna@gmail.com',4,'2011','SK0005','2011-02-12','IPA','Cibubur','SKM0005','Kontrak','B','http://localhost/ci7/assets/uploads/file_1434450011.png','Jakarta','Guru','','Tetap','6','','S2','1999','2011','Junaidi','Marinah','','',176,70,'Kotak','Coklat','DBD');

#
# Structure for table "jadwal"
#

DROP TABLE IF EXISTS `jadwal`;
CREATE TABLE `jadwal` (
  `kd_jadwal` varchar(10) NOT NULL,
  `thn_ajar` varchar(10) NOT NULL,
  `semester` varchar(5) NOT NULL,
  `kd_mapel` varchar(10) NOT NULL,
  `employee_id` varchar(10) NOT NULL,
  `kd_kelas` varchar(10) NOT NULL,
  `hari` varchar(8) NOT NULL,
  `ruang` varchar(5) NOT NULL,
  PRIMARY KEY (`kd_jadwal`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "jadwal"
#

INSERT INTO `jadwal` VALUES ('J0001','2015/2013','Gasal','M0001','E0001','K0001','Selasa','2.1.2'),('J0002','2015/2016','Gasal','M0003','E0004','K0003','Jum\'at','2.3.5'),('J0007','2015/2016','Gasal','M0001','E0004','K0006','Kamis','4.1.4'),('J0009','2015/2016','Genap','M0004','E0006','K0010','Selasa','3.1.1');

#
# Structure for table "kelas"
#

DROP TABLE IF EXISTS `kelas`;
CREATE TABLE `kelas` (
  `kd_kelas` varchar(5) NOT NULL,
  `nm_kelas` varchar(20) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  PRIMARY KEY (`kd_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "kelas"
#

INSERT INTO `kelas` VALUES ('K0002','2A',38),('K0003','3A',90),('K0004','1.C',35),('K0005','3.D',60),('K0006','4.C',30);

#
# Structure for table "kuis"
#

DROP TABLE IF EXISTS `kuis`;
CREATE TABLE `kuis` (
  `kd_jadwal` varchar(10) NOT NULL,
  `nis` int(15) NOT NULL,
  `nilai` int(2) NOT NULL,
  PRIMARY KEY (`kd_jadwal`,`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "kuis"
#


#
# Structure for table "latihan"
#

DROP TABLE IF EXISTS `latihan`;
CREATE TABLE `latihan` (
  `kd_jadwal` varchar(10) NOT NULL,
  `nis` int(15) NOT NULL,
  `nilai` int(2) NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "latihan"
#


#
# Structure for table "mahasiswa"
#

DROP TABLE IF EXISTS `mahasiswa`;
CREATE TABLE `mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  PRIMARY KEY (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "mahasiswa"
#

INSERT INTO `mahasiswa` VALUES ('1211500231','Lani Sutisna','Sumedangs'),('1211500233','Abdul Aziz','Semarang'),('1211500234','Ahmad Aziz Andi','Bandung'),('1211500236','Wijayanto Prakoso','Tangerang'),('1211500239','Haroya Kanudi','Lembang'),('1211500580','Abdul Mutasin','Bandung'),('1211500583','Anna Safitri','Bogor'),('1211500589','Ahmad Zaenal','Pancoran'),('121150292','Ani Mawari','Pasuruan'),('121150298','Wahyu Pambudi.','Pekalongan,'),('1211506871','udin','makassar\r\n'),('1211506873','Austin Arta','Kebayoran');

#
# Structure for table "mapel"
#

DROP TABLE IF EXISTS `mapel`;
CREATE TABLE `mapel` (
  `kd_mapel` varchar(10) NOT NULL,
  `nm_mapel` varchar(30) NOT NULL,
  `kkm` int(2) NOT NULL,
  PRIMARY KEY (`kd_mapel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "mapel"
#

INSERT INTO `mapel` VALUES ('M0001','MATEMATIKA',75),('M0002','BAHASA INGGRIS',88),('M0003','IPS',90);

#
# Structure for table "nilai"
#

DROP TABLE IF EXISTS `nilai`;
CREATE TABLE `nilai` (
  `kd_jadwal` varchar(10) NOT NULL,
  `nis` varchar(15) NOT NULL,
  `uts` int(2) NOT NULL,
  `uas` int(2) NOT NULL,
  PRIMARY KEY (`kd_jadwal`,`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "nilai"
#


#
# Structure for table "peserta"
#

DROP TABLE IF EXISTS `peserta`;
CREATE TABLE `peserta` (
  `nis` varchar(20) NOT NULL,
  `kd_kelas` varchar(5) NOT NULL,
  `thn_ajar` varchar(10) NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "peserta"
#

INSERT INTO `peserta` VALUES ('NIS0001','K0006','2015/2016'),('NIS0002','K0006','2015/2016'),('NIS0003','K0006','2015/2015'),('NIS0004','K0006','2015/2016'),('NIS0005','K0006','2015/2016'),('NIS0005','K0009','2015/2016');

#
# Structure for table "siswa"
#

DROP TABLE IF EXISTS `siswa`;
CREATE TABLE `siswa` (
  `NIS` varchar(10) NOT NULL DEFAULT '',
  `NISN` int(10) NOT NULL,
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
  `Foto` text NOT NULL,
  PRIMARY KEY (`NIS`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "siswa"
#

INSERT INTO `siswa` VALUES ('NIS0001',1211503694,'Hairil Fiqri Sulaimann','Jakarta','2015-06-05','Islam','Laki-Laki','Indonesia','WNI','Kandung',0,0,'SMAN 2 Jakarta','Juara 1 Lomba Gemastik 2020','Ibu','Ayah','Jakarta','087367286328','087367286328',170,60,'Asia','Hitam','A','Tidak ada','file_1438097812'),('NIS0002',1211503698,'Austin Arta Tunggal Pratama','Jakarta','2015-06-19','Islam','Laki-Laki','Indonesia','WNI','Kandung',0,0,'SMAN 1 Baturetno','Juara 1','Ayah','Ibu','Jakarta','087736317753','087736317753',170,60,'Asia','Hitam','B','Tidak ada','file_1436726959.jpg'),('NIS0003',1211503699,'Mila Hanifah','Jakarta','2015-06-03','Islam','Perempuan','Indonesia','WNI','Kandung',4,4,'SMAN 5 Jakarta','Juara 1','Ayah','Ibu','Jakarta','087736317753','087736317753',170,60,'Asia','Hitam','AB','Tidak ada','file_1434445281.jpg'),('NIS0004',1211503700,'Pajar Septianto','Jakarta','2015-06-01','Islam','Perempuan','Indonesia','WNI','Kandung',1,2,'SMAN 5 Jakarta','Juara 1','Ayah','Ibu','Jakarta','087736317753','087736317753',165,55,'Asia','Hitam','B','Tidak ada','file_1434445449.jpg'),('NIS0005',1211503700,'Pajar S','Jakarta','2015-06-01','Islam','Perempuan','Indonesia','WNI','Kandung',1,2,'SMAN 5 Jakarta','Juara 1','Ayah','Ibu','Jakarta','087736317753','087736317753',165,55,'Asia','Hitam','B','Tidak ada','file_1434445449.jpg');

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` varchar(15) NOT NULL,
  `password` text NOT NULL,
  `level` varchar(10) NOT NULL,
  `sess_id` text NOT NULL,
  `ip_add` text NOT NULL,
  `browser` varchar(30) NOT NULL,
  `last_log` datetime NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "user"
#

INSERT INTO `user` VALUES ('admin','21232f297a57a5a743894a0e4a801fc3','admin','8e9395a530fcfb30329e0d0ac48ae17c254bb4de','::1','Chrome 44.0.2403.125','2015-07-31 16:28:22'),('E0002','bfa560c5543f49ef6edfcb3222d4ecee','guru','21bc9978c386d5540d87c9648b55f6526a3dc782','::1','Chrome 44.0.2403.125','2015-08-02 19:36:17'),('E0003','77fec8670e69d18271a3060b3eabd914','guru','266ffb1fe71a0f3a9456a1222925e79074a19dac','::1','Chrome 44.0.2403.125','2015-07-30 22:52:58'),('E0004','83bebfe8c5e9a9eb7ea17ce4103c84f1','guru','04bd2f2177a037acbe775359f6313297b621d118','::1','Chrome 44.0.2403.125','2015-08-02 19:28:44'),('E0005','e0005','guru','','','','0000-00-00 00:00:00'),('user','ee11cbb19052e40b07aac0ca060c23ee','user','e033849569672893f2cdd83f22417188cea9959a','::1','Chrome 43.0.2357.124','2015-06-14 19:43:23');
