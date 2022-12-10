-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2022 at 02:36 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_paud_iskijne_sborhoinyi`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku_kas_umum`
--

CREATE TABLE `buku_kas_umum` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `uraian` text NOT NULL,
  `penerimaan` varchar(50) NOT NULL,
  `pengeluaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku_kas_umum`
--

INSERT INTO `buku_kas_umum` (`id`, `tanggal`, `uraian`, `penerimaan`, `pengeluaran`) VALUES
(1, '2022-12-01', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '300000', ''),
(2, '2022-11-29', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '200000', ''),
(3, '2022-11-30', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '', '230000'),
(4, '2023-01-01', 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '600000', '');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `alamat_email` varchar(100) NOT NULL,
  `nomor_hp` varchar(15) NOT NULL,
  `alamat_lengkap` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nama_lengkap`, `foto`, `alamat_email`, `nomor_hp`, `alamat_lengkap`) VALUES
(167, 'Yuli Wambrauw', '1669972118-yuliwambrauw.jpg', 'yuliwambrauw@gmail.com', '', 'Lembah Furia Kotaraja Dalam'),
(168, 'Dessy Weldensya', '1669972161-dessyweldensya.jpg', 'dessyweldensya@gmail.com ', '', 'Lembah Furia Kotaraja Dalam'),
(169, 'Martha Inggeni', '1669972181-marthainggeni.jpg', 'marthainggeni@gmail.com ', '', 'Lembah Furia Kotaraja Dalam');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran_spp`
--

CREATE TABLE `pembayaran_spp` (
  `id` int(11) NOT NULL,
  `bulan` enum('Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember') NOT NULL,
  `iuran` varchar(30) NOT NULL,
  `tanggal_pembayaran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembayaran_spp`
--

INSERT INTO `pembayaran_spp` (`id`, `bulan`, `iuran`, `tanggal_pembayaran`) VALUES
(2, 'Februari', '600000', '2022-11-02'),
(3, 'Maret', '55555', '2022-11-30'),
(4, 'April', '66666', '2022-12-02'),
(5, 'Januari', 'asdf sadf', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `sarpras`
--

CREATE TABLE `sarpras` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(150) NOT NULL,
  `jumlah` int(4) NOT NULL,
  `kondisi` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sarpras`
--

INSERT INTO `sarpras` (`id`, `nama_barang`, `jumlah`, `kondisi`) VALUES
(2, 'Meja Guru', 9, 8);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `tmp_tgl_lahir` varchar(30) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama_lengkap`, `foto`, `nim`, `tmp_tgl_lahir`, `jenis_kelamin`) VALUES
(2, 'Samuel Bosawer', '1669973499-samuelbosawer.jpg', '12345678', 'Sentani, 1 Januari 2000', 'Laki-Laki'),
(4, 'Elly Ansek', '1669973456-ellyansek.jpg', '12345678', 'Nabire, 01 Desember 2022', 'Laki-Laki');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id` int(11) NOT NULL,
  `jenis_surat` enum('Masuk','Keluar') NOT NULL,
  `tanggal_diterima` date NOT NULL,
  `tanggal_surat` date NOT NULL,
  `nomor_surat` int(30) NOT NULL,
  `pengirim` varchar(100) NOT NULL,
  `tujuan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id`, `jenis_surat`, `tanggal_diterima`, `tanggal_surat`, `nomor_surat`, `pengirim`, `tujuan`) VALUES
(1, 'Keluar', '2022-12-01', '2022-12-01', 1234567890, 'Janzen Faidiban', 'Theis A.'),
(2, 'Keluar', '2022-12-01', '2022-12-01', 1234567890, 'Michael Faidiban', 'Johan N.'),
(3, 'Keluar', '2022-12-01', '2022-12-01', 1029384756, 'Samuel Bosawer', 'Samuel B.'),
(4, 'Masuk', '2022-12-08', '2022-12-02', 2147483647, 'Sonai Morin', ''),
(5, 'Masuk', '2022-11-29', '2022-12-01', 1029384756, 'Ellyakim Ansek', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `alamat`, `username`, `password`) VALUES
(12, 'Administraor', '', 'admin', '36aba7ac608d9f5dacb81c00c82bc54d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku_kas_umum`
--
ALTER TABLE `buku_kas_umum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran_spp`
--
ALTER TABLE `pembayaran_spp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sarpras`
--
ALTER TABLE `sarpras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku_kas_umum`
--
ALTER TABLE `buku_kas_umum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT for table `pembayaran_spp`
--
ALTER TABLE `pembayaran_spp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sarpras`
--
ALTER TABLE `sarpras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
