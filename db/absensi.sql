-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2023 at 10:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level_akun` enum('guru','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `username`, `password`, `level_akun`) VALUES
(1, 'abror1000', '78aef6bf53f74cddd36b05b6ad2dd14d', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `kariyawan`
--

CREATE TABLE `kariyawan` (
  `id_kariyawan` int(11) NOT NULL,
  `nama_kariyawan` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `id_kelas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kariyawan`
--

INSERT INTO `kariyawan` (`id_kariyawan`, `nama_kariyawan`, `jenis`, `id_akun`, `id_kelas`) VALUES
(1, 'Admin Abror', 'Staff TU', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_absen_siswa`
--

CREATE TABLE `tb_absen_siswa` (
  `id_absen_siswa` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `masuk` time NOT NULL,
  `pulang` time DEFAULT NULL,
  `keterangan_absen` varchar(255) NOT NULL,
  `status_absen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(255) NOT NULL,
  `angkatan_kelas` varchar(255) NOT NULL,
  `status_kelas` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekap`
--

CREATE TABLE `tb_rekap` (
  `id_rekap` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `bulan` varchar(255) NOT NULL,
  `1` enum('H','S','I','A') DEFAULT NULL,
  `2` enum('H','S','I','A') DEFAULT NULL,
  `3` enum('H','S','I','A') DEFAULT NULL,
  `4` enum('H','S','I','A') DEFAULT NULL,
  `5` enum('H','S','I','A') DEFAULT NULL,
  `6` enum('H','S','I','A') DEFAULT NULL,
  `7` enum('H','S','I','A') DEFAULT NULL,
  `8` enum('H','S','I','A') DEFAULT NULL,
  `9` enum('H','S','I','A') DEFAULT NULL,
  `10` enum('H','S','I','A') DEFAULT NULL,
  `11` enum('H','S','I','A') DEFAULT NULL,
  `12` enum('H','S','I','A') DEFAULT NULL,
  `13` enum('H','S','I','A') DEFAULT NULL,
  `14` enum('H','S','I','A') DEFAULT NULL,
  `15` enum('H','S','I','A') DEFAULT NULL,
  `16` enum('H','S','I','A') DEFAULT NULL,
  `17` enum('H','S','I','A') DEFAULT NULL,
  `18` enum('H','S','I','A') DEFAULT NULL,
  `19` enum('H','S','I','A') DEFAULT NULL,
  `20` enum('H','S','I','A') DEFAULT NULL,
  `21` enum('H','S','I','A') DEFAULT NULL,
  `22` enum('H','S','I','A') DEFAULT NULL,
  `23` enum('H','S','I','A') DEFAULT NULL,
  `24` enum('H','S','I','A') DEFAULT NULL,
  `25` enum('H','S','I','A') DEFAULT NULL,
  `26` enum('H','S','I','A') DEFAULT NULL,
  `27` enum('H','S','I','A') DEFAULT NULL,
  `28` enum('H','S','I','A') DEFAULT NULL,
  `29` enum('H','S','I','A') DEFAULT NULL,
  `30` enum('H','S','I','A') DEFAULT NULL,
  `31` enum('H','S','I','A') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nis` varchar(255) DEFAULT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `angkatan` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temp_rfid`
--

CREATE TABLE `temp_rfid` (
  `id_temp` int(11) NOT NULL,
  `rfid` varchar(255) NOT NULL,
  `jenis_scan` enum('tambah','absen') NOT NULL,
  `kode_mesin` varchar(255) NOT NULL,
  `last_use` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `kariyawan`
--
ALTER TABLE `kariyawan`
  ADD PRIMARY KEY (`id_kariyawan`),
  ADD KEY `tb_akun` (`id_akun`),
  ADD KEY `tb_kelas` (`id_kelas`);

--
-- Indexes for table `tb_absen_siswa`
--
ALTER TABLE `tb_absen_siswa`
  ADD PRIMARY KEY (`id_absen_siswa`),
  ADD KEY `tb_siswa` (`id_siswa`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_rekap`
--
ALTER TABLE `tb_rekap`
  ADD PRIMARY KEY (`id_rekap`),
  ADD KEY `tb_siswa` (`id_siswa`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `tb_kelas` (`id_kelas`);

--
-- Indexes for table `temp_rfid`
--
ALTER TABLE `temp_rfid`
  ADD PRIMARY KEY (`id_temp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kariyawan`
--
ALTER TABLE `kariyawan`
  MODIFY `id_kariyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_absen_siswa`
--
ALTER TABLE `tb_absen_siswa`
  MODIFY `id_absen_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_rekap`
--
ALTER TABLE `tb_rekap`
  MODIFY `id_rekap` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `temp_rfid`
--
ALTER TABLE `temp_rfid`
  MODIFY `id_temp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35821;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
