-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Bulan Mei 2023 pada 09.46
-- Versi server: 10.4.25-MariaDB
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_absensi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kariyawan`
--

CREATE TABLE `kariyawan` (
  `id_kariyawan` int(11) NOT NULL,
  `nama_kariyawan` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `id_akun` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kariyawan`
--

INSERT INTO `kariyawan` (`id_kariyawan`, `nama_kariyawan`, `jenis`, `id_akun`) VALUES
(1, 'John Doe', 'Guru', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_absen_siswa`
--

CREATE TABLE `tb_absen_siswa` (
  `id_absen_siswa` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `masuk` time NOT NULL,
  `pulang` time NOT NULL,
  `keterangan_absen` varchar(255) NOT NULL,
  `status_absen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_absen_siswa`
--

INSERT INTO `tb_absen_siswa` (`id_absen_siswa`, `id_siswa`, `tgl`, `masuk`, `pulang`, `keterangan_absen`, `status_absen`) VALUES
(9, 3, '2023-05-16', '01:52:05', '00:00:00', 'Terlambat', 'Pulang'),
(10, 3, '2023-05-16', '01:52:05', '00:00:00', 'On Time', 'Pulang'),
(11, 2, '2023-05-16', '01:52:05', '00:00:00', 'On Time', 'Pulang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `id_kariyawan` int(11) NOT NULL,
  `nama_kelas` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `id_kariyawan`, `nama_kelas`) VALUES
(1, 1, 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nama_siswa` varchar(255) NOT NULL,
  `angkatan` varchar(255) NOT NULL,
  `status` enum('1','0') NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `uuid`, `id_kelas`, `nama_siswa`, `angkatan`, `status`, `created_at`, `updated_at`) VALUES
(2, '0129D51C', 0, 'Wahyu Nur Cahyo', '2016', '1', '2023-05-13 23:49:52', '2023-05-13 23:49:52'),
(3, '12345678', 1, 'Adi Sukmana', '2016', '1', '2023-05-13 23:49:52', '2023-05-13 23:49:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp_rfid`
--

CREATE TABLE `temp_rfid` (
  `id_temp` int(11) NOT NULL,
  `rfid` varchar(255) NOT NULL,
  `jenis_scan` enum('tambah','absen') NOT NULL,
  `kode_mesin` varchar(255) NOT NULL,
  `last_use` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kariyawan`
--
ALTER TABLE `kariyawan`
  ADD PRIMARY KEY (`id_kariyawan`),
  ADD KEY `tb_akun` (`id_akun`);

--
-- Indeks untuk tabel `tb_absen_siswa`
--
ALTER TABLE `tb_absen_siswa`
  ADD PRIMARY KEY (`id_absen_siswa`),
  ADD KEY `tb_siswa` (`id_siswa`);

--
-- Indeks untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `id_kariyawan` (`id_kariyawan`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `tb_kelas` (`id_kelas`);

--
-- Indeks untuk tabel `temp_rfid`
--
ALTER TABLE `temp_rfid`
  ADD PRIMARY KEY (`id_temp`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kariyawan`
--
ALTER TABLE `kariyawan`
  MODIFY `id_kariyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_absen_siswa`
--
ALTER TABLE `tb_absen_siswa`
  MODIFY `id_absen_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `temp_rfid`
--
ALTER TABLE `temp_rfid`
  MODIFY `id_temp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35445;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
