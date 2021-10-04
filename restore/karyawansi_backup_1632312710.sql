

CREATE TABLE `tb_absen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_karyawan` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

INSERT INTO tb_absen VALUES("16","1920392912","Budi Sanjaya","Thursday, 10-11-2020 07:52:25 am");
INSERT INTO tb_absen VALUES("17","192","Sarah Mutia","Thursday, 10-10-2020 07:54:45 am");
INSERT INTO tb_absen VALUES("18","9","Abdul Muhlisin Sudirman","Sunday, 20-09-2020 01:31:05 pm");
INSERT INTO tb_absen VALUES("19","1920392912","Budi Sanjaya","Sunday, 13-08-2021 09:31:06 pm");
INSERT INTO tb_absen VALUES("20","1920392912","Budi Sanjaya","Sunday, 13-07-2021 09:31:21 pm");
INSERT INTO tb_absen VALUES("21","123","Ryzen","Monday, 14-06-2021 01:46:25 pm");
INSERT INTO tb_absen VALUES("22","123","Ryzen","Monday, 14-06-2021 03:11:03 pm");
INSERT INTO tb_absen VALUES("23","16","lia","Thursday, 24-05-2021 06:55:13 pm");
INSERT INTO tb_absen VALUES("24","123","Ryzen","Tuesday, 29-04-2021 11:07:18 pm");
INSERT INTO tb_absen VALUES("25","123","Ryzen","Monday, 08-03-2008 12:44:56 pm");
INSERT INTO tb_absen VALUES("26","12312424","lala","Monday, 16-02-2021 06:34:19 pm");
INSERT INTO tb_absen VALUES("27","12312424","lala","Monday, 16-01-2021 06:34:39 pm");
INSERT INTO tb_absen VALUES("28","1920392912","Budi Sanjaya","Thursday, 10-12-2020 07:52:25 am");
INSERT INTO tb_absen VALUES("29","12312424","lala","Monday, 16-01-2021 06:34:39 pm");
INSERT INTO tb_absen VALUES("30","12312424","lala","Monday, 16-01-2021 06:34:39 pm");
INSERT INTO tb_absen VALUES("31","12312424","lala","Monday, 16-01-2021 06:34:39 pm");



CREATE TABLE `tb_daftar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

INSERT INTO tb_daftar VALUES("2","hi","hi");
INSERT INTO tb_daftar VALUES("5","admin2","admin2");
INSERT INTO tb_daftar VALUES("6","amel","111111");
INSERT INTO tb_daftar VALUES("7","lia","666666");



CREATE TABLE `tb_jabatan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

INSERT INTO tb_jabatan VALUES("3","CEO");
INSERT INTO tb_jabatan VALUES("4","CTO");
INSERT INTO tb_jabatan VALUES("5","CFO");
INSERT INTO tb_jabatan VALUES("6","WP Pemasaran");
INSERT INTO tb_jabatan VALUES("7","CMO");
INSERT INTO tb_jabatan VALUES("8","COO");
INSERT INTO tb_jabatan VALUES("9","Front end");



CREATE TABLE `tb_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tmp_tgl_lahir` varchar(255) NOT NULL,
  `jenkel` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `no_tel` varchar(18) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY (`id_karyawan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO tb_karyawan VALUES("555","user","827ccb0eea8a706c4c34a16891f84e7b","user","12312312","Laki-laki","Kristen","wafe","awdw","CEO","30082021044811Tsany.jpeg");
INSERT INTO tb_karyawan VALUES("5555","amelia","ee11cbb19052e40b07aac0ca060c23ee","tester","12312312","Laki-laki","Kristen","wafe","awdw","CEO","30082021044811Tsany.jpeg");



CREATE TABLE `tb_keterangan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_karyawan` varchar(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `alasan` text NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `bukti` varchar(50) NOT NULL,
  `cari_waktu` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4;

INSERT INTO tb_keterangan VALUES("53","1920392912","Budi Sanjaya","Sakit","saskit","Sunday, 13-07-2021 09:39:11 pm","13062021163959sweet.jpg","2021-07-12");
INSERT INTO tb_keterangan VALUES("54","12345","amelia","Sakit","encok ","Monday, 14-06-2021 03:41:52 pm","14062021104241IMG_20200923_132711.jpg","2021-08-12");
INSERT INTO tb_keterangan VALUES("55","12345","amelia","Sakit","encok ","Monday, 14-06-2021 03:42:42 pm","14062021104525IMG_20200923_132711.jpg","2021-06-12");
INSERT INTO tb_keterangan VALUES("56","12345","amelia","Sakit","encok ","Monday, 14-08-2021 03:45:32 pm","14062021104631IMG_20200923_132711.jpg","2021-08-12");
INSERT INTO tb_keterangan VALUES("61","16","lia ananta","Sakit","mboh","Monday, 12-07-2021 04:55:48 pm","12072021115607bg1.png","2021-07-12");

