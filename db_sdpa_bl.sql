# Host: 127.0.0.1  (Version: 5.6.25)
# Date: 2015-08-15 12:07:33
# Generator: MySQL-Front 5.3  (Build 4.224)

/*!40101 SET NAMES latin1 */;

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

INSERT INTO `guru` VALUES ('E0002','NIP0002','NUPTK0002','Wahyuni Irna','Bandung','1982-05-13','Perempuan','Jl. Jambu Air Blok A/30 Perum. Gemilang Permai, Bekasi Barat','Katolik','Indonesia','WNA','Kandung',4,'Menikah','2005','0229139281','0898122317285','yunirna@yahoo.com',3,'2010','SK0002','2010-04-22','Bahasa Indonesia','Bandung','SKM0002','Tetap','AB','http://localhost/ci7/assets/uploads/user-female-icon.png','Jakarta','Guru','','Kontrak','3','','S2','1994','2008','Arman ','Rita','Raka Naseda','',168,50,'Kotak','Pirang','Tifus'),('E0003','NIP0003','NUPTK0003','Ni Nyoman Dewi','Denpasar','1990-10-25','Perempuan','Jl. Kenanga 3, Blok J/2 No. 12, Denpasar Village, Jakarta Selatan','Hindu','Indonesia','WNA','Kandung',3,'Belum Menikah','','02134568373','083814317285','ninyom@live.com',4,'2011','SK0003','2011-02-12','Pendidikan Agama Hin','Gianyar','SKM0003','Tetap','O','http://localhost/ci7/assets/uploads/file_1438270458.jpg','Jakarta','Guru','','Kontrak','2','','S1','1999','2009','I Made Winarna','Ni Ketut Dewi','','',170,70,'Bulat','Hitam','DBD'),('E0004','NIP0004','NUPTK0004','Windi Risti','Tangerang','1992-09-12','Perempuan','Jl. Marunda Raya No. 12 Kelurahan Cawang - Jakarta','Budha','Indonesia','WNI','Kandung',4,'Menikah','2010','021-23423123','081274836589','wiristi@yahoo.com',4,'2011','SK0004','2011-02-23','Matematika','Semarang','SKM0004','Tetap','AB','http://localhost/ci7_hairil4/assets/uploads/file_1439221268.jpg','Jakarta','Guru','','Kontrak','1','','S1','1999','2008','Mardi Suhadi','Yunita','Jamal','',160,50,'Bulat','Pirang','Asma'),('E0005','NIP0005','NUPTK0005','Febrian Nawawi','Bandung','0000-00-00','Laki-laki','Jl. Kenanga No. 45 - Bekasi','Islam','Indonesia','WNA','Angkat',2,'Belum Menikah','','021-34568333','085717510575','febna@gmail.com',4,'2011','SK0005','2011-02-12','IPA','Cibubur','SKM0005','Kontrak','B','http://localhost/ci7/assets/uploads/file_1434450011.png','Jakarta','Guru','','Tetap','6','','S2','1999','2011','Junaidi','Marinah','','',176,70,'Kotak','Coklat','DBD'),('E0008','NIP0008','NUPTK0008','Roni Setiawan','Bandung','0000-00-00','Laki-laki','Jl. Kenanga No. 45 - Bekasi','Islam','Indonesia','WNA','Angkat',2,'Belum Menikah','','021-34568333','085717510575','febna@gmail.com',4,'2011','SK0005','2011-02-12','IPA','Cibubur','SKM0005','Kontrak','B','http://localhost/ci7/assets/uploads/file_1434450011.png','Jakarta','Guru','','Tetap','6','','S2','1999','2011','Junaidi','Marinah','','',176,70,'Kotak','Coklat','DBD'),('E0009','NIP0009','NUPTK0009','Cappucino Kopiu','Bandung','0000-00-00','Laki-laki','Jl. Kenanga No. 45 - Bekasi','Islam','Indonesia','WNA','Angkat',2,'Belum Menikah','','021-34568333','085717510575','febna@gmail.com',4,'2011','SK0005','2011-02-12','IPA','Cibubur','SKM0005','Kontrak','B','http://localhost/ci7/assets/uploads/file_1434450011.png','Jakarta','Guru','','Tetap','6','','S2','1999','2011','Junaidi','Marinah','','',176,70,'Kotak','Coklat','DBD');

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

INSERT INTO `jadwal` VALUES ('J0001','2015/2013','Gasal','M0001','E0004','K0001','Selasa','2.1.2'),('J0002','2015/2016','Gasal','M0003','E0004','K0003','Jum\'at','2.3.5'),('J0003','2015/2016','Genap','M0002','E0004','K0002','Senin','5.3.1'),('J0004','2015/2016','Gasal','M0002','E0003','K0003','Kamis','6.4.7'),('J0005','2015/2016','Gasal','M0001','E0009','K0002','Senin','3.4.6'),('J0007','2015/2016','Gasal','M0001','E0004','K0006','Kamis','4.1.4'),('J0009','2015/2016','Genap','M0004','E0005','K0010','Selasa','3.1.1');

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

INSERT INTO `kelas` VALUES ('K0002','2.A',38),('K0003','3.A',90),('K0005','3.D',60),('K0006','4.C',30);

#
# Structure for table "kuis"
#

DROP TABLE IF EXISTS `kuis`;
CREATE TABLE `kuis` (
  `kd_kuis` varchar(10) NOT NULL DEFAULT '',
  `kd_jadwal` varchar(10) NOT NULL,
  `nis` varchar(20) NOT NULL DEFAULT '',
  `nilai` int(3) DEFAULT '0',
  `tahun` varchar(15) NOT NULL DEFAULT '',
  `semester` varchar(5) NOT NULL DEFAULT '',
  PRIMARY KEY (`kd_jadwal`,`nis`,`kd_kuis`,`tahun`,`semester`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "kuis"
#

INSERT INTO `kuis` VALUES ('QZ0001','J0007','NIS0001',90,'2015/2016','Gasal'),('QZ0002','J0007','NIS0001',90,'2015/2016','Gasal'),('QZ0001','J0007','NIS0002',90,'2015/2016','Gasal'),('QZ0002','J0007','NIS0002',100,'2015/2016','Gasal'),('QZ0001','J0007','NIS0003',90,'2015/2016','Gasal'),('QZ0002','J0007','NIS0003',90,'2015/2016','Gasal'),('QZ0001','J0007','NIS0004',90,'2015/2016','Gasal'),('QZ0002','J0007','NIS0004',90,'2015/2016','Gasal'),('QZ0001','J0007','NIS0005',80,'2015/2016','Gasal'),('QZ0002','J0007','NIS0005',80,'2015/2016','Gasal');

#
# Structure for table "latihan"
#

DROP TABLE IF EXISTS `latihan`;
CREATE TABLE `latihan` (
  `kd_lat` varchar(10) NOT NULL,
  `kd_jadwal` varchar(10) NOT NULL,
  `nis` varchar(10) NOT NULL,
  `nilai` int(3) DEFAULT '0',
  `tahun` varchar(15) NOT NULL DEFAULT '',
  `semester` varchar(5) NOT NULL DEFAULT '',
  PRIMARY KEY (`kd_lat`,`kd_jadwal`,`nis`,`tahun`,`semester`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "latihan"
#

INSERT INTO `latihan` VALUES ('LT0001','J0007','NIS0001',90,'2015/2016','Gasal'),('LT0001','J0007','NIS0002',80,'2015/2016','Gasal'),('LT0001','J0007','NIS0003',80,'2015/2016','Gasal'),('LT0001','J0007','NIS0004',90,'2015/2016','Gasal'),('LT0001','J0007','NIS0005',80,'2015/2016','Gasal'),('LT0002','J0007','NIS0001',90,'2015/2016','Gasal'),('LT0002','J0007','NIS0002',90,'2015/2016','Gasal'),('LT0002','J0007','NIS0003',90,'2015/2016','Gasal'),('LT0002','J0007','NIS0004',80,'2015/2016','Gasal'),('LT0002','J0007','NIS0005',80,'2015/2016','Gasal');

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

INSERT INTO `mapel` VALUES ('M0001','MATEMATIKA',75),('M0002','BAHASA INGGRIS',88),('M0003','IPS',80);

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
  PRIMARY KEY (`nis`,`kd_kelas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "peserta"
#

INSERT INTO `peserta` VALUES ('NIS0001','K0002','2015/2016'),('NIS0001','K0006','2015/2016'),('NIS0002','K0003','2015/2016'),('NIS0002','K0006','2015/2016'),('NIS0003','K0006','2015/2015'),('NIS0004','K0006','2015/2016'),('NIS0005','K0003','2015/2016'),('NIS0005','K0006','2015/2016');

#
# Structure for table "siswa"
#

DROP TABLE IF EXISTS `siswa`;
CREATE TABLE `siswa` (
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
  `Foto` text NOT NULL,
  PRIMARY KEY (`NIS`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "siswa"
#

INSERT INTO `siswa` VALUES ('NIS0001','NISN0001','Hairil Fiqri Sulaimann','Jakarta','2015-06-05','Islam','Laki-Laki','Indonesia','WNI','Kandung',0,0,'SMAN 2 Jakarta','Juara 1 Lomba Gemastik 2020','Ibu','Ayah','Jakarta','087367286328','087367286328',170,60,'Asia','Hitam','A','Tidak ada','file_1439285444.jpg'),('NIS0002','NISN0002','Austin Arta Tunggal Pratama','Jakarta','2015-06-19','Islam','Perempuan','Indonesia','WNI','Kandung',0,0,'SMAN 1 Baturetno','Juara 1','Ayah','Ibu','Jakarta','087736317753','087736317753',170,60,'Bulat','Ikal','B','Tidak','file_1439572003'),('NIS0003','NISN0003','Mila Hanifah','Jakarta','2015-06-03','Islam','Perempuan','Indonesia','WNI','Kandung',4,4,'SMAN 5 Jakarta','Juara 1','Ayah','Ibu','Jakarta','087736317753','087736317753',170,60,'Asia','Hitam','AB','Tidak ada','file_1439526907'),('NIS0004','NISN0004','Pajar Septianto','Jakarta','2015-06-01','Islam','Perempuan','Indonesia','WNI','Kandung',1,2,'SMAN 5 Jakarta','Juara 1','Ayah','Ibu','Jakarta','087736317753','087736317753',165,55,'Asia','Hitam','B','Tidak ada','file_1439406531.jpg');

#
# Structure for table "uas"
#

DROP TABLE IF EXISTS `uas`;
CREATE TABLE `uas` (
  `kd_uas` varchar(10) NOT NULL DEFAULT '',
  `kd_jadwal` varchar(10) NOT NULL DEFAULT '',
  `nis` varchar(20) NOT NULL DEFAULT '',
  `nilai` int(3) DEFAULT NULL,
  `tahun` varchar(10) NOT NULL DEFAULT '',
  `semester` varchar(5) NOT NULL DEFAULT '',
  PRIMARY KEY (`kd_uas`,`kd_jadwal`,`nis`,`tahun`,`semester`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "uas"
#


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
  `walikelas` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "user"
#

INSERT INTO `user` VALUES ('admin','21232f297a57a5a743894a0e4a801fc3','admin','1a9d1d527eb3d78b112862d9daf3a55689fd46bb','::1','Chrome 44.0.2403.155','2015-08-14 21:39:42',''),('E0004','83bebfe8c5e9a9eb7ea17ce4103c84f1','guru','486b2c538b47ec4fdf835f88289f9f4d267fccea','::1','Chrome 44.0.2403.155','2015-08-14 11:34:08','Y'),('user','ee11cbb19052e40b07aac0ca060c23ee','user','e033849569672893f2cdd83f22417188cea9959a','::1','Chrome 43.0.2357.124','2015-06-14 19:43:23','');

#
# Structure for table "uts"
#

DROP TABLE IF EXISTS `uts`;
CREATE TABLE `uts` (
  `kd_uts` varchar(10) NOT NULL,
  `kd_jadwal` varchar(10) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nilai` int(3) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `semester` varchar(5) NOT NULL,
  PRIMARY KEY (`kd_uts`,`kd_jadwal`,`nis`,`tahun`,`semester`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "uts"
#


#
# Structure for table "walikelas"
#

DROP TABLE IF EXISTS `walikelas`;
CREATE TABLE `walikelas` (
  `Kd_walikelas` int(10) NOT NULL AUTO_INCREMENT,
  `Tahun_ajar_wali` varchar(10) DEFAULT '',
  `Employee_id` varchar(30) NOT NULL DEFAULT '',
  `NIP` varchar(30) NOT NULL DEFAULT '',
  `Kd_kelas` varchar(10) NOT NULL,
  PRIMARY KEY (`Kd_walikelas`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

#
# Data for table "walikelas"
#

INSERT INTO `walikelas` VALUES (26,'2015/2016','E0004','','K0006'),(28,'2015/2016','E0003','','K0005');
