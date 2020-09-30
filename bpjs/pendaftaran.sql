-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Sep 2020 pada 02.54
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contoh`
--

CREATE TABLE `contoh` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `code` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `contoh`
--

INSERT INTO `contoh` (`id`, `nama`, `code`, `email`, `tanggal`) VALUES
(1, 'Sasmitoh', 'rbBHXr46koRP8lOTtaJj', 'sasmitohrr@gmail.com', '2020-08-20 02:01:07'),
(2, 'Sasmitoh', 'Y6R0opZ5JhXkLUX88iWZ', 'sasmitohrr@gmail.com', '2020-08-20 02:01:07'),
(3, 'Sasmitoh', 'Nkd14Jzrqho6K5Gc2jGg', 'sasmitohrr@gmail.com', '2020-08-20 02:01:07'),
(4, 'Sasmitoh', 'E4h6gs8fm9kKUDFwPNrv', 'sasmitohrr@gmail.com', '2020-08-20 02:01:07'),
(5, 'Sasmitoh', 'hhCSo2BI5MmEDTAr6DNS', 'sasmitohrr@gmail.com', '2020-08-20 02:01:07'),
(6, 'Sasmitoh', 'dnpy0QkGBUcx4IZriImj', 'sasmitohrr@gmail.com', '2020-08-20 02:01:07'),
(7, 'Sasmitoh', 'te7EG4sf0vsnIgtvX1sq', 'sasmitohrr@gmail.com', '2020-08-20 02:01:07'),
(8, 'Sasmitoh', '1HnCbCHowqH8RqOzF2m7', 'sasmitohrr@gmail.com', '2020-08-20 02:01:07'),
(9, 'Sasmitoh', '4mR7BXyIU6SIyXfTLRPZ', 'sasmitohrr@gmail.com', '2020-08-20 02:01:07'),
(10, 'Sasmitoh', 'BMytyqpDjq6Uaewyrz2z', 'sasmitohrr@gmail.com', '2020-08-20 02:01:07'),
(11, 'Sasmitoh', '1yZblDQHnXFOhJUtBYA6', 'sasmitohrr@gmail.com', '2020-08-20 02:01:07'),
(12, 'Sasmitoh', 'VYX5FzzzAd0aq2WxT6LO', 'sasmitohrr@gmail.com', '2020-08-20 02:01:07'),
(13, 'Sasmitoh', 'JyGjunAjc2HsuBwhzKr7', 'sasmitohrr@gmail.com', '2020-08-20 02:01:07'),
(14, 'Sasmitoh', 'XI9neZAO4KUXR63URU5I', 'sasmitohrr@gmail.com', '2020-08-20 02:01:07'),
(15, 'asdsa', 'sads', 'adsa', '2020-08-20 17:00:00'),
(16, 'rianti', 'uRtjkMsBaERw4L9ENKxB', 'sasmitohrr@gmail.com', '2020-08-20 09:16:12'),
(17, 'Sasmitoh', '4KATNZdrmO16qw7Optep', 'sasmitohrr@gmail.com', '2020-08-20 11:03:48'),
(18, 'Sasmitoh', '7XQGOMReEVn8G6AV4YZL', 'asd', '2020-08-20 16:45:18'),
(19, 'Sasmitoh', 'fuj6fwibqQ98tWLEd2us', 'asd', '2020-08-20 16:48:35'),
(20, 'Sasmitoh', '9U4iPNEzJo1ChpJezDu5', 'asd', '2020-08-20 16:54:57'),
(21, 'Sasmitoh', 'nLSkLBJGInjQ96PvRzRO', 'asd', '2020-08-20 16:55:10'),
(22, 'Sasmitoh', '8DlQlGvgaSA1Vy9FWZu8', 'asd', '2020-08-20 16:55:37'),
(24, 'asep', 'NADPgY2FDfGXjHBHrLig', 'muhammadarif@mhs.pel', '2020-08-20 16:56:17'),
(25, 'Sasmitoh', 'hgtyNWudkkCPu2oMIUPe', 'sasmitohrr@gmail.com', '2020-08-20 17:05:32'),
(26, 'rianti', 'PSjEiTKZGeOpHsHMquh4', 'syahnihrr@gmail.com', '2020-08-20 17:07:07'),
(27, 'Sasmitoh', 'u9JS8It96nHzACck9gC8', 'rudi@masrud.com', '2020-08-21 15:30:00'),
(28, 'Sasmitoh', 'ONGcEWlWiqf60mi841Ji', 'rusdianto@president.', '2020-08-21 15:49:14'),
(29, 'Sasmitoh', 'gKYSijlfIzfGZrO2yDa7', 'muhammadarif@mhs.pel', '2020-08-21 15:50:48'),
(30, 'Sas', 'AUzx7XTmhbWIdgt11uEE', 'sasmitohrsdr@gmail.c', '2020-08-21 16:42:45'),
(31, 'Okey', 'AV6R7uWs2iSELCFBZBpN', 'Dicoba', '2020-08-21 16:43:51'),
(32, 'Asep Sunarya', 'OHc1HIUf5EdjDkPoGMUB', 'sunarya209@gmail.com', '2020-08-23 07:52:15'),
(33, 'ardi', 'CSBrri5bOA7jFVogUfsp', 'ardigunawantkj@gmail', '2020-08-23 07:52:16'),
(34, 'Khalis Sofi', 'ZNkYxJw9tSbvCFpEkGur', 'khalissofi@mhs.pelit', '2020-08-23 07:52:17'),
(35, 'rianti', 'zacZP6mk8YOnOWSINRZ8', 'riantikinasih@mhs.pe', '2020-08-23 07:52:18'),
(36, 'Melia', '1sY7g5oLFs7TlC28Myeg', 'meliaiko101@gmail.co', '2020-08-23 07:52:22'),
(37, 'Fazri', 'zxWvoIb8Si5Qv6q1O9B8', 'adzie.alfazr@outlook', '2020-08-23 07:53:39'),
(38, 'Muchromi Ahmad', '1z6MoIifePX0mvGTh8Mh', 'muchromiahmad@gmail.', '2020-08-23 07:53:43'),
(39, 'rianti', '879U8Rw07R2h6rLXyWAC', 'kinasihrianti@gmail.', '2020-09-27 10:06:34'),
(40, 'riantikinasih', 'ONEJcoZlOdWl2PBo94Ji', 'kinasihrianti@gmail.', '2020-09-29 11:53:47'),
(41, 'riantikinasih', 'Ve46TppmaiyFTJTMqaCM', 'jkakak@gmail.com', '2020-09-29 12:05:22'),
(42, 'kinasih', 'yDLSAmlp9qDHn9j6uq1W', 'kinasihrianti@gmail.', '2020-09-29 12:07:52'),
(43, 'kinasih', 'j11XIEZXXknwqVDDn8bE', 'kinasihrianti@gmail.', '2020-09-29 14:39:29'),
(44, 'kinasih', 'P9m8maiYMSeReagAubWx', 'kinasihrianti@gmail.', '2020-09-29 17:41:49'),
(45, 'rianti', 'g6BubP28zLupxsxCi9k0', 'kinasihrianti@gmail.', '2020-09-29 17:53:46'),
(46, 'rianti', 'zNZROqOHjiBFS6EXNuJ5', 'kinasihrianti@gmail.', '2020-09-29 17:55:17'),
(47, 'rianki', 'miePvsL5PtSJXWiwv7d4', 'kinasihrianti@gmail.', '2020-09-29 17:56:56'),
(48, 'riantik', '0C02E9Ql9v4rtD9ajOdF', 'kinasihrianti@gmail.', '2020-09-29 18:00:34'),
(49, 'rianti', 'bm31Cy3i1J0MvYzeeXHs', 'ngodingstudyclub@gma', '2020-09-29 18:01:21'),
(50, 'rianti', 'pF2V0WFYFMzJsPvc33gl', 'riantikinasih06@gmai', '2020-09-29 18:02:24'),
(51, 'rianti', 'ix1CBBnD5U3M0kejVYEs', 'kinasihrianti@gmail.', '2020-09-29 18:04:43'),
(52, 'rianti', 'mn6vI074uAseN4JhGC2v', 'kinasihrianti@gmail.', '2020-09-29 18:05:42'),
(53, 'rianti', 'DbE9rCsasimgBipaefdT', 'kinasihrianti@gmail.', '2020-09-29 18:07:47'),
(54, 'rianti', 'lSXt31k0KtDsO8Cxs5PT', 'kinasihrianti@gmail.', '2020-09-29 18:08:33'),
(55, 'rianti', 'pS9AASUaL20puvFO8Jeu', 'kinasihrianti@gmail.', '2020-09-29 18:17:18'),
(56, 'rianti', 'w9IHFMfrH5b5VRVkX6zJ', 'kinasihrianti@gmail.', '2020-09-29 18:18:11'),
(57, 'kinasih', '7BDt8B56gm3xsGuyUFQH', 'kinasihrianti@gmail.', '2020-09-29 18:21:35'),
(58, 'rianti', '0xCSCCpgl1B7hrZ8M9ZJ', 'kinasihrianti@gmail.', '2020-09-29 18:22:35'),
(59, 'rianti', 'GXNaTujFZqsdCY7g7Ek8', 'kinasihrianti@gmail.', '2020-09-29 18:23:08'),
(60, 'rianti', '1yzrlbPlN2hXfTDtWPaj', 'kinasihrianti@gmail.', '2020-09-29 18:24:50'),
(61, 'sasmitoh', 'jNWtAMeM7NbKsNMKqtcf', 'sasmitohrr@gmail.com', '2020-09-29 18:27:26'),
(62, 'rianti kinasih', 'UHLJYJPQgtrPrjZbTSAM', 'kinasihrianti@gmail.', '2020-09-29 18:27:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar`
--

CREATE TABLE `daftar` (
  `id` varchar(100) NOT NULL,
  `no_kk` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `bpjs_tunai` varchar(100) NOT NULL,
  `no_bpjs` varchar(20) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `keluhan_utama` text NOT NULL,
  `keluhan_tambahan` text NOT NULL,
  `faktor_memperingan` text NOT NULL,
  `faktor_meperberat` text NOT NULL,
  `minum_obat` text NOT NULL,
  `persiapan_obat` text NOT NULL,
  `riwayat_penyakit` text NOT NULL,
  `alergi_obat` varchar(100) NOT NULL,
  `informasi_tambahan` text NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `daftar`
--

INSERT INTO `daftar` (`id`, `no_kk`, `nama`, `tgl_lahir`, `bpjs_tunai`, `no_bpjs`, `berat_badan`, `jenis_kelamin`, `keluhan_utama`, `keluhan_tambahan`, `faktor_memperingan`, `faktor_meperberat`, `minum_obat`, `persiapan_obat`, `riwayat_penyakit`, `alergi_obat`, `informasi_tambahan`, `alamat`, `no_hp`, `email`) VALUES
('20200929083212WY8aeTg9', '36464643636', 'kinasih', '2020-09-16', 'BPJS', 'BPJS', 78, 'Perempuan', 'kiki', 'kiki', 'kiki', 'kiki', 'kiki', 'ki', 'ki', 'Ya', 'kiki', 'kkik', '08121965053', 'kinasihrianti@gmail.com'),
('202009290833361XlWpWM7', '663763766', 'kinasih', '2020-09-10', 'BPJS', 'BPJS', 89, 'Perempuan', 'keluhan', 'keluhan', 'keluhan', 'keluhan', 'keluhan', 'keluhan', 'keluhan', 'Ya', 'keluhan', 'hdsudshus', '938748748', 'kinasihrianti@gmail.com'),
('202009290844061dlzlFR8', '663763766', 'kinasih', '2020-09-10', 'BPJS', 'BPJS', 89, 'Perempuan', 'keluhan', 'keluhan', 'keluhan', 'keluhan', 'keluhan', 'keluhan', 'keluhan', 'Ya', 'keluhan', 'hdsudshus', '938748748', 'kinasihrianti@gmail.com'),
('Hc27Vytt0NEdynSF6FHD', '6363363263', 'kinasih', '2020-09-10', 'BPJS', 'BPJS', 76, 'Laki-laki', 'jdidji', 'jdijdei', 'jdiejid', 'jidjei', 'jidjij', 'jdujd', 'jdiej', 'Ya', 'jdiejie', 'kdfifri', '76374674', 'kinasihrianti@gmail.com'),
('Rpp6Iw4uMaiWmq89ikhw20200929062214', '63633632636363', 'kinasih', '2020-09-10', 'BPJS', 'BPJS', 76, 'Perempuan', 'hduhdu', 'hduhue', 'hfduhuf', 'hufhr', 'hdufhfur', 'hfuhru', 'hfuhr', 'Ya', 'hduhe', 'hufhur', '674674', 'kinasihrianti11@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `open_close`
--

CREATE TABLE `open_close` (
  `id` int(11) NOT NULL,
  `open` datetime NOT NULL,
  `close` datetime NOT NULL,
  `limit` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `open_close`
--

INSERT INTO `open_close` (`id`, `open`, `close`, `limit`) VALUES
(1, '2020-08-31 14:00:00', '2020-09-27 19:00:00', '15');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `contoh`
--
ALTER TABLE `contoh`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `open_close`
--
ALTER TABLE `open_close`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `contoh`
--
ALTER TABLE `contoh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT untuk tabel `open_close`
--
ALTER TABLE `open_close`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
