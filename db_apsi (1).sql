-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 10 Feb 2023 pada 14.37
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_apsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_daftar`
--

CREATE TABLE `tbl_daftar` (
  `id` int(11) NOT NULL,
  `no_antrian` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kontak` int(15) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deskripsi` varchar(255) NOT NULL,
  `antrian_status` varchar(2) DEFAULT NULL,
  `antrian_parent` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_daftar`
--

INSERT INTO `tbl_daftar` (`id`, `no_antrian`, `nama`, `email`, `kontak`, `tanggal`, `deskripsi`, `antrian_status`, `antrian_parent`) VALUES
(33, '0302230001', 'Akmal', 'akmalfauzanmuslihudin3@gmail.com', 2147483647, '2023-02-02 17:55:05', 'asa', '1', 0),
(34, '0302230002', 'Riki', 'rikimuhamad357@gmail.com', 19333, '2023-02-02 17:55:58', 'SELESAI DI PERIKSA', '3', 0),
(36, '0302230004', 'ubed', 'akmalubed123@gmail.com', 2147483647, '2023-02-03 06:55:27', 'SELESAI DI PERIKSA', '3', 0),
(37, '0302230005', 'ubed', 'akmalfauzanmuslihudin3@gmail.com', 2147483647, '2023-02-03 07:22:17', 'asa', '1', 0),
(38, '0302230006', 'Nabila Arwa', 'nabilaarwaap@gmail.com', 19333, '2023-02-03 07:26:56', 'coba email', '1', 0),
(39, '0302230007', 'zia', 'nisrinanurhasna05@yahoo.com', 983, '2023-02-03 07:51:58', 'a', '1', 0),
(40, '0302230008', 'Nabila', 'nblaptrin@gmail.com', 2147483647, '2023-02-03 10:26:24', '', '0', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_dokter`
--

CREATE TABLE `tbl_dokter` (
  `id` int(11) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `dokter_spesialis` varchar(50) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_dokter`
--

INSERT INTO `tbl_dokter` (`id`, `nama_dokter`, `dokter_spesialis`, `foto`) VALUES
(1, 'Akmal Fauzan Muslihudin', 'Kepala Dokter', '94ff9ef4de1f537b01a7a24f4e2ddf70.png'),
(3, 'Fauzan Akmal', 'Spesialis Anak', 'c725c731577112344f13c73100494769.png'),
(4, 'Syaila', 'Spesialis Mental', '663813b37d0a65ffc2942be87378bfc5.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_identitas`
--

CREATE TABLE `tbl_identitas` (
  `identitas_id` int(11) NOT NULL,
  `identitas_logo` varchar(100) NOT NULL,
  `identitas_nama` varchar(100) DEFAULT NULL,
  `identitas_moto` varchar(100) DEFAULT NULL,
  `identitas_alamat` text,
  `identitas_tentang` text,
  `identitas_email` varchar(50) DEFAULT NULL,
  `identitas_nohp` varchar(100) DEFAULT NULL,
  `identitas_facebook` varchar(100) DEFAULT NULL,
  `identitas_twitter` varchar(100) DEFAULT NULL,
  `identitas_linkdin` varchar(100) DEFAULT NULL,
  `identitas_google_plus` varchar(100) DEFAULT NULL,
  `identitas_map` text NOT NULL,
  `identitas_ig` varchar(100) NOT NULL,
  `identitas_deskripsi` varchar(100) NOT NULL,
  `identitas_yt` text NOT NULL,
  `link_aplikasi` int(11) NOT NULL,
  `image_tentang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kontak`
--

CREATE TABLE `tbl_kontak` (
  `id` int(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telepon` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_kontak`
--

INSERT INTO `tbl_kontak` (`id`, `alamat`, `email`, `telepon`) VALUES
(1, 'Jl Raya Ciamis 2645', 'enterhealth@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `pengguna_id` int(11) NOT NULL,
  `pengguna_nama` varchar(50) DEFAULT NULL,
  `pengguna_username` varchar(30) DEFAULT NULL,
  `pengguna_password` varchar(35) DEFAULT NULL,
  `pengguna_email` varchar(50) DEFAULT NULL,
  `pengguna_nohp` varchar(20) DEFAULT NULL,
  `pengguna_status` int(2) DEFAULT '1',
  `pengguna_level` varchar(3) DEFAULT NULL,
  `pengguna_register` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `pengguna_photo` varchar(40) DEFAULT NULL,
  `pengguna_map` varchar(100) NOT NULL,
  `pengguna_jenkel` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`pengguna_id`, `pengguna_nama`, `pengguna_username`, `pengguna_password`, `pengguna_email`, `pengguna_nohp`, `pengguna_status`, `pengguna_level`, `pengguna_register`, `pengguna_photo`, `pengguna_map`, `pengguna_jenkel`) VALUES
(1, 'akmal', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'akmal@gmail.com', '083824428265', 1, '1', '2023-01-31 17:00:00', '9e4e75423d57836470a42e4a3a571999.png', '', 'L');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_daftar`
--
ALTER TABLE `tbl_daftar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `no_antrian` (`no_antrian`);

--
-- Indexes for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_identitas`
--
ALTER TABLE `tbl_identitas`
  ADD PRIMARY KEY (`identitas_id`);

--
-- Indexes for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`pengguna_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_daftar`
--
ALTER TABLE `tbl_daftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `tbl_dokter`
--
ALTER TABLE `tbl_dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_identitas`
--
ALTER TABLE `tbl_identitas`
  MODIFY `identitas_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  MODIFY `pengguna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
