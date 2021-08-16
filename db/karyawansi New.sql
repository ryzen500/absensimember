-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Agu 2021 pada 16.37
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karyawansi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_absen`
--

CREATE TABLE `tb_absen` (
  `id` int(11) NOT NULL,
  `id_karyawan` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_absen`
--

INSERT INTO `tb_absen` (`id`, `id_karyawan`, `nama`, `waktu`) VALUES
(16, '1920392912', 'Budi Sanjaya', 'Thursday, 10-11-2020 07:52:25 am'),
(17, '192', 'Sarah Mutia', 'Thursday, 10-10-2020 07:54:45 am'),
(18, '9', 'Abdul Muhlisin Sudirman', 'Sunday, 20-09-2020 01:31:05 pm'),
(19, '1920392912', 'Budi Sanjaya', 'Sunday, 13-08-2021 09:31:06 pm'),
(20, '1920392912', 'Budi Sanjaya', 'Sunday, 13-07-2021 09:31:21 pm'),
(21, '123', 'Ryzen', 'Monday, 14-06-2021 01:46:25 pm'),
(22, '123', 'Ryzen', 'Monday, 14-06-2021 03:11:03 pm'),
(23, '16', 'lia', 'Thursday, 24-05-2021 06:55:13 pm'),
(24, '123', 'Ryzen', 'Tuesday, 29-04-2021 11:07:18 pm'),
(25, '123', 'Ryzen', 'Monday, 08-03-2008 12:44:56 pm'),
(26, '12312424', 'lala', 'Monday, 16-02-2021 06:34:19 pm'),
(27, '12312424', 'lala', 'Monday, 16-01-2021 06:34:39 pm'),
(28, '1920392912', 'Budi Sanjaya', 'Thursday, 10-12-2020 07:52:25 am'),
(29, '12312424', 'lala', 'Monday, 16-01-2021 06:34:39 pm'),
(30, '12312424', 'lala', 'Monday, 16-01-2021 06:34:39 pm'),
(31, '12312424', 'lala', 'Monday, 16-01-2021 06:34:39 pm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_daftar`
--

CREATE TABLE `tb_daftar` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_daftar`
--

INSERT INTO `tb_daftar` (`id`, `username`, `password`) VALUES
(2, 'hi', 'hi'),
(5, 'admin2', 'admin2'),
(6, 'amel', '111111'),
(7, 'lia', '666666');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id` int(11) NOT NULL,
  `jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id`, `jabatan`) VALUES
(3, 'CEO'),
(4, 'CTO'),
(5, 'CFO'),
(6, 'WP Pemasaran'),
(7, 'CMO'),
(8, 'COO'),
(9, 'Front end');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_karyawan`
--

CREATE TABLE `tb_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tmp_tgl_lahir` varchar(255) NOT NULL,
  `jenkel` varchar(255) NOT NULL,
  `agama` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `no_tel` varchar(18) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_karyawan`
--

INSERT INTO `tb_karyawan` (`id_karyawan`, `username`, `password`, `nama`, `email`, `tmp_tgl_lahir`, `jenkel`, `agama`, `alamat`, `no_tel`, `jabatan`, `foto`) VALUES
(123, 'ryzen500', '123', 'ryzen', '', 'dwdwa', 'Laki-laki', 'Kristen', 'awdwadwad', 'dawdwadawd', 'WP Pemasaran', '15072021222546error 1.png'),
(1234567, 'ddfwd', '1a55ca44e2e5e04bc80fa83ba7d2cdd8', 'adwadad', '', 'wdadwad', 'Perempuan', 'Islam', 'dwadad', 'wadadwa', 'CTO', '10082021153835background(1).jpg'),
(12312424, 'lala', '202cb962ac59075b964b07152d234b70', 'lala', '', 'esgeswgsegwseg', 'Laki-laki', 'Kristen', 'wadwad', 'afafafa', 'CEO', '08082021151915tugas bahasa inggris XII RPL  Achmad'),
(132144253, 'adqwafsef', 'a1d8e0899607032c53524a46462d0e73', 'awd', '', 'awdwad', 'Laki-laki', 'Islam', 'adwadawd', 'adwad', 'CEO', '10082021154207background.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_keterangan`
--

CREATE TABLE `tb_keterangan` (
  `id` int(11) NOT NULL,
  `id_karyawan` varchar(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `alasan` text NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `bukti` varchar(50) NOT NULL,
  `cari_waktu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_keterangan`
--

INSERT INTO `tb_keterangan` (`id`, `id_karyawan`, `nama`, `keterangan`, `alasan`, `waktu`, `bukti`, `cari_waktu`) VALUES
(53, '1920392912', 'Budi Sanjaya', 'Sakit', 'saskit', 'Sunday, 13-07-2021 09:39:11 pm', '13062021163959sweet.jpg', '2021-07-12'),
(54, '12345', 'amelia', 'Sakit', 'encok ', 'Monday, 14-06-2021 03:41:52 pm', '14062021104241IMG_20200923_132711.jpg', '2021-08-12'),
(55, '12345', 'amelia', 'Sakit', 'encok ', 'Monday, 14-06-2021 03:42:42 pm', '14062021104525IMG_20200923_132711.jpg', '2021-06-12'),
(56, '12345', 'amelia', 'Sakit', 'encok ', 'Monday, 14-08-2021 03:45:32 pm', '14062021104631IMG_20200923_132711.jpg', '2021-08-12'),
(61, '16', 'lia ananta', 'Sakit', 'mboh', 'Monday, 12-07-2021 04:55:48 pm', '12072021115607bg1.png', '2021-07-12');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_absen`
--
ALTER TABLE `tb_absen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_daftar`
--
ALTER TABLE `tb_daftar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_karyawan`
--
ALTER TABLE `tb_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indeks untuk tabel `tb_keterangan`
--
ALTER TABLE `tb_keterangan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_absen`
--
ALTER TABLE `tb_absen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `tb_daftar`
--
ALTER TABLE `tb_daftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tb_keterangan`
--
ALTER TABLE `tb_keterangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
