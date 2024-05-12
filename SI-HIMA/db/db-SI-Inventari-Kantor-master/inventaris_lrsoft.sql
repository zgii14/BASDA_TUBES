-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2024 at 12:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventaris_lrsoft`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `no_peminjaman` int(11) NOT NULL,
  `nama_peminjam` varchar(30) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `kode_barang` int(11) NOT NULL,
  `banyaknya` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `no_peminjaman`, `nama_peminjam`, `tgl_peminjaman`, `tgl_pengembalian`, `kode_barang`, `banyaknya`, `status`) VALUES
(38, 64, 'Febri Dwi', '2019-01-04', '2019-01-04', 3, 1, 'Sudah Dikembalikan'),
(39, 66, 'Febri Dwi', '2019-01-04', '2019-01-05', 2, 1, 'Sudah Dikembalikan'),
(40, 67, 'Andi Ardhian', '2019-01-05', '2019-01-16', 3, 2, 'Sudah Dikembalikan'),
(41, 69, 'Febri Dwi', '2019-01-16', '2019-01-16', 3, 1, 'Sudah Dikembalikan');

-- --------------------------------------------------------

--
-- Table structure for table `history_peminjaman`
--

CREATE TABLE `history_peminjaman` (
  `no_peminjaman` int(11) NOT NULL,
  `nama_peminjam` varchar(30) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_pengembalian` date NOT NULL,
  `kode_barang` int(11) NOT NULL,
  `banyaknya` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `no_peminjaman` int(11) NOT NULL,
  `nama_peminjam` varchar(30) NOT NULL,
  `tgl_peminjaman` date NOT NULL,
  `tgl_pengembalian` date DEFAULT NULL,
  `kode_barang` int(11) DEFAULT NULL,
  `banyaknya` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tambah_barang`
--

CREATE TABLE `tambah_barang` (
  `kode_barang` int(11) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `jumlah_barang` int(11) NOT NULL,
  `sinopsis` text NOT NULL,
  `gambar_barang` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tambah_barang`
--

INSERT INTO `tambah_barang` (`kode_barang`, `kategori`, `nama_barang`, `jumlah_barang`, `sinopsis`, `gambar_barang`) VALUES
(1, 'Aksesories', 'Headset Jbl', 5, 'Bluethooth headset', 'foto_barang/d3ea26d1c5ac2c8bdafb43f034a03992asd .jpg'),
(2, 'Elektronik', 'Laptop', 1, 'Laptop Merk Dell', 'foto_barang/143d2d3f32d4939373ce7182725cfd6blaptop dell.jpg'),
(3, 'Furniture', 'Meja Komputer', 2, '3 x 2 m', 'foto_barang/dda91a4efc80da99a7180cd9ff6895c3meja.jpg'),
(4, 'Elektronik', 'Hp Samsung S6', 2, 'Utk Simulasi Aplikasi', 'foto_barang/aac9ad808d5122303ea8e6005650e962samsung2.jpg'),
(44, 'ATK', 'buku Phyton 3', 1, 'Buku programming', 'foto_barang/b8e8c8b3783f8e0f82c54e3b4c6105edaaron-burden-QJDzYT_K8Xg-unsplash.jpg'),
(45, 'Aksesories', 'Pulpen', 2, 'Alat untuk menulis', 'foto_barang/f17e53fe5806ab4f8ea9ab2ef249144cliviu-c-d_eLSvL4v9w-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL DEFAULT 'password',
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL,
  `role` enum('admin','member') NOT NULL DEFAULT 'member',
  `npm` varchar(20) DEFAULT NULL,
  `foto_anggota` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `email`, `no_hp`, `role`, `npm`, `foto_anggota`) VALUES
(1, 'Muhammad Rozagi', 'admin', 'admin', 'Muhammad Rozagi', '082236145540', 'admin', NULL, NULL),
(41, 'Muhammad Rozagi', 'G1A022008', 'password', 'muhammadrozagi09@gmail.com', '086353245532', 'member', 'G1A022008', 'foto_anggota/2.2.png'),
(42, 'Tiesya Andriani Ramadhanti', 'G1A022014', 'password', 'tiesya123@gmail.com', '082236145540', 'member', 'G1A022014', 'foto_anggota/2.png'),
(49, 'Attika Oktavianti', 'G1A022020', 'password', 'attika123@gmail.com', '089182931829', 'member', 'G1A022040', 'foto_anggota/3.png'),
(50, 'Hikmah Hijrayanti', 'G1A022026', 'password', 'keysa123@gmail.com', '081297314348', 'member', 'G1A022012', 'foto_anggota/4.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_peminjaman`
--
ALTER TABLE `history_peminjaman`
  ADD PRIMARY KEY (`no_peminjaman`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`no_peminjaman`),
  ADD UNIQUE KEY `peminjaman` (`no_peminjaman`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `tambah_barang`
--
ALTER TABLE `tambah_barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `history_peminjaman`
--
ALTER TABLE `history_peminjaman`
  MODIFY `no_peminjaman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `no_peminjaman` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tambah_barang`
--
ALTER TABLE `tambah_barang`
  MODIFY `kode_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `history_peminjaman`
--
ALTER TABLE `history_peminjaman`
  ADD CONSTRAINT `fk_history_peminjaman_barang` FOREIGN KEY (`kode_barang`) REFERENCES `tambah_barang` (`kode_barang`);

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `fk_peminjaman_barang` FOREIGN KEY (`kode_barang`) REFERENCES `tambah_barang` (`kode_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
