-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Mei 2017 pada 09.58
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tono_futsal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `lapangan`
--

CREATE TABLE `lapangan` (
  `no_lap` int(5) NOT NULL,
  `nama_lap` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lapangan`
--

INSERT INTO `lapangan` (`no_lap`, `nama_lap`, `deskripsi`) VALUES
(1, 'Lapangan_A', 'Lapangan ini adalah lapangan Sintetis yang di import langsung dari Spanyol, dengan karakteristik lembutnya lapangan ini banyak dipilih oleh Pemain Timnas Futsal Indonesia saat berlaga'),
(2, 'Lapangan B', 'Lapangan ini adalah lapangan Matras yang di import langsung dari Inggris, dengan karakteristik halusnya tapi tidak licin lapangan ini banyak dipilih oleh Pemain Timnas Futsal Indonesia saat berlaga'),
(3, 'Lapangan C', 'Lapangan ini adalah lapangan Sintetis yang di import langsung dari Spanyol, dengan karakteristik lembutnya lapangan ini banyak dipilih oleh Pemain Timnas Futsal Indonesia saat berlaga'),
(4, 'Lapangan D', 'Lapangan ini adalah lapangan Matras yang di import langsung dari Inggris, dengan karakteristik halusnya tapi tidak licin lapangan ini banyak dipilih oleh Pemain Timnas Futsal Indonesia saat berlaga');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `account` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`username`, `password`, `account`) VALUES
('admin1', '111111', 'admin'),
('bryanagam', 'bryan', 'user'),
('fikkrip', 'fikkri', 'user'),
('gema', 'gema', 'user'),
('misbahul', 'misbah', 'user'),
('nasrul', '12345', 'user'),
('nrmayani', 'maya', 'user'),
('sizura', 'zunia', 'user'),
('tono', 'tono', 'user'),
('user', 'user', 'user'),
('user1', '111111', 'user'),
('user123', 'user', 'user'),
('user2', '111111', 'user'),
('user3', '111111', 'user'),
('user4', '111111', 'user'),
('user5', '111111', 'user'),
('yusril', 'yusril', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pel` int(5) NOT NULL,
  `nama_pel` varchar(50) NOT NULL,
  `alamat_pel` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pel`, `nama_pel`, `alamat_pel`, `no_telp`, `username`) VALUES
(1, 'Fikkri', 'Lebo Agung 3 No 90 L Surabaya', '0895337070515', 'user1'),
(2, 'Prasetya', 'Kenjeran Surabaya', '0895337070515', 'user2'),
(3, 'Pras', 'Surabaya', '0895337070515', 'user3'),
(4, 'Tyo', 'Surabaya', '0895337070515', 'user4'),
(5, 'Fix', 'Kenjeran', '0895337070515', 'user5'),
(6, 'maya', 'Candi', '089605357865', 'nrmayani'),
(7, 'Fikk', 'Lebo Agung ', '0895337070515', 'fikkrip'),
(8, 'Zunia', 'Randu', '083832112345', 'sizura'),
(9, 'Fikkri Prasetya', 'Kenjeran, Surabaya', '0895337070515', 'prasetya'),
(10, 'nadia widad', 'Surabaya', '08976436821', 'nadiawidad'),
(11, 'Tono Ton', 'Kenjeran Surabaya', '0895337070515', 'tono'),
(12, 'nasrul', 'tlogomas', '081331771309', 'nasrul'),
(13, 'Bryan Agam K', 'Bojonegoro', '08156728900', 'bryanagam'),
(14, 'Fikkri Prasetya', 'Kenjeran', '089637281900', 'fikkrip'),
(15, 'Nur Ulima Rusmayani', 'Sidoarjo', '08986827190', 'nrmayani'),
(16, 'Siti Zunia R', 'Surabaya', '08729173902', 'sizura'),
(17, 'Misbahul Ardani', 'Krian', '08658929108', 'misbahul'),
(18, 'Nugraha Adi Gemanggala P', 'Surabaya', '08975462819', 'gema'),
(19, 'Yusril', 'Lamongan', '08623819132', 'yusril'),
(20, 'user 123', 'Surabaya', '081928394750', 'user123'),
(21, 'User', 'Surabaya', '08134281930', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sewa`
--

CREATE TABLE `sewa` (
  `kode_sewa` int(5) NOT NULL,
  `status` int(2) NOT NULL,
  `username` varchar(10) NOT NULL,
  `tgl_sewa` date NOT NULL,
  `jam_sewa` time NOT NULL,
  `lama_sewa` int(30) NOT NULL,
  `tarif` int(10) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `lapangan` varchar(30) NOT NULL,
  `kode_lap` int(2) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sewa`
--

INSERT INTO `sewa` (`kode_sewa`, `status`, `username`, `tgl_sewa`, `jam_sewa`, `lama_sewa`, `tarif`, `jumlah`, `lapangan`, `kode_lap`, `nama`) VALUES
(58, 1, 'fikkrip', '2017-01-15', '15:00:00', 3, 150000, 450000, 'Lapangan_A', 1, 'Fikkri Prasetya'),
(59, 0, 'bryanagam', '2017-01-14', '09:00:00', 2, 120000, 240000, 'Lapangan_B', 0, 'Bryan Agam K'),
(60, 0, 'nrmayani', '2017-01-14', '19:00:00', 2, 150000, 300000, 'Lapangan_C', 1, 'Nur Ulima Rusmayani'),
(61, 1, 'sizura', '2017-01-16', '10:00:00', 3, 120000, 360000, 'Lapangan_D', 0, 'Siti Zunia R'),
(62, 1, 'misbahul', '2017-01-16', '10:00:00', 3, 150000, 450000, 'Lapangan_C', 1, 'Misbahul Ardani'),
(63, 0, 'gema', '2017-01-18', '07:00:00', 5, 150000, 750000, 'Lapangan_A', 1, 'Nugraha Adi Gemanggala P'),
(64, 0, 'yusril', '2017-01-20', '09:00:00', 2, 120000, 240000, 'Lapangan_D', 0, 'Yusril'),
(65, 1, 'user', '2017-01-21', '10:00:00', 2, 150000, 300000, 'Lapangan_C', 1, 'User'),
(66, 0, 'user', '2017-01-20', '10:00:00', 6, 150000, 900000, 'Lapangan_A', 1, 'User'),
(67, 1, 'nrmayani', '2017-02-20', '10:00:00', 2, 150000, 300000, 'Lapangan_A', 1, 'Nur Ulima Rusmayani'),
(68, 0, 'nrmayani', '0000-00-00', '10:00:00', 2, 120000, 240000, 'Lapangan_B', 0, 'Nur Ulima Rusmayani'),
(69, 1, 'nrmayani', '2017-02-19', '10:00:00', 2, 150000, 300000, 'Lapangan_A', 1, 'Nur Ulima Rusmayani'),
(71, 0, 'nrmayani', '2016-01-10', '10:00:00', 2, 150000, 300000, 'Lapangan_A', 1, 'Nur Ulima Rusmayani'),
(72, 0, 'nrmayani', '2016-01-29', '09:00:00', 3, 150000, 450000, 'Lapangan_C', 1, 'Nur Ulima Rusmayani');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lapangan`
--
ALTER TABLE `lapangan`
  ADD PRIMARY KEY (`no_lap`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pel`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`kode_sewa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pel` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `sewa`
--
ALTER TABLE `sewa`
  MODIFY `kode_sewa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
