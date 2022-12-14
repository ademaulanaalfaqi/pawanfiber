-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 08, 2022 at 01:36 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pawan_fiber`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id` int NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id`, `nama`, `tanggal`, `foto`, `longitude`, `latitude`, `created_at`, `updated_at`) VALUES
(1, 'jemi', '2022-11-23', 'app/images/absensi/-1669177486-agw3u.webp', '109.6163185', '-0.2467982', '2022-11-23 04:24:47', '2022-11-23 04:24:47'),
(2, 'jemi', NULL, 'app/images/absensi/-1669178983-mu4bC.webp', '109.987781', '-1.8169204', '2022-11-23 04:49:43', '2022-11-28 07:16:23'),
(4, 'Ade Maulana Alfaqi', NULL, 'app/images/absensi/-1669269623-bCEHt.png', '109.9873675', '-1.8160743', '2022-11-24 06:00:24', '2022-11-24 06:00:24'),
(7, 'pppp', NULL, 'app/images/absensi/-1669620807-5tnJt.png', '109.98769243212843', '-1.816543479736785', '2022-11-28 07:33:28', '2022-11-28 07:33:28'),
(9, 'soleh', NULL, 'app/images/absensi/-1669622674-zHFgA.webp', '109.9876439', '-1.8171338', '2022-11-28 08:04:34', '2022-11-28 08:04:34'),
(10, 'kon', NULL, 'app/images/absensi/-1669630203-1KpHw.png', '109.9692941', '-1.8439633', '2022-11-28 10:10:03', '2022-11-28 10:10:03');

-- --------------------------------------------------------

--
-- Table structure for table `absen_masuk`
--

CREATE TABLE `absen_masuk` (
  `id` int NOT NULL,
  `id_absen` int DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `absen_masuk`
--

INSERT INTO `absen_masuk` (`id`, `id_absen`, `nama`, `tanggal`, `foto`, `longitude`, `latitude`, `created_at`, `updated_at`) VALUES
(3, NULL, 'jemi', '2022-11-04', 'app/images/absensi/-1667541424-hQUIU.webp', NULL, NULL, '2022-11-03 22:57:05', '2022-11-03 22:57:05'),
(4, NULL, 'datok', '2022-11-04', 'app/images/absensi/-1667546298-S5yMP.webp', NULL, NULL, '2022-11-04 00:18:18', '2022-11-04 00:18:18'),
(5, NULL, 'sakti', '2022-11-04', 'app/images/absensi/-1667546492-xhByB.jpg', NULL, NULL, '2022-11-04 00:21:32', '2022-11-04 00:21:32'),
(8, NULL, 'datok', '2022-11-15', 'app/images/absensi/-1668513708-0Gti1.png', '109.3664237', '0.0087989', '2022-11-15 12:01:48', '2022-11-15 12:01:48'),
(9, NULL, 'pppp', '2022-11-22', 'app/images/absensi/-1669125533-ADj0H.webp', '109.9616069', '-1.8228269', '2022-11-22 13:58:53', '2022-11-22 13:58:53');

-- --------------------------------------------------------

--
-- Table structure for table `absen_pulang`
--

CREATE TABLE `absen_pulang` (
  `id` int NOT NULL,
  `id_absensi` int DEFAULT NULL,
  `level` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `username`, `password`, `remember_token`, `email`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '$2y$10$fHGOXAkylhevSJbSXi9bDuc3DQJxtpxp3ZZNUm5nhT4ixGMoWNybu', NULL, 'admin@gmail.com', '2022-11-09 03:27:51', '2022-11-09 03:27:51');

-- --------------------------------------------------------

--
-- Table structure for table `datapegawai`
--

CREATE TABLE `datapegawai` (
  `id` bigint NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `divisi` enum('administrasi','staff') DEFAULT NULL,
  `gaji_pokok` varchar(255) DEFAULT NULL,
  `kontrak` enum('tetap','kontrak','magang/training','freelance/parttime') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `no_hp` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `datapegawai`
--

INSERT INTO `datapegawai` (`id`, `nama`, `nik`, `divisi`, `gaji_pokok`, `kontrak`, `email`, `password`, `no_hp`, `jabatan`, `tanggal_masuk`, `foto`, `created_at`, `updated_at`) VALUES
(6, 'Ade Maulana Alfaqi', '6104162602040001', 'administrasi', '1000000', 'tetap', 'admlna26@gmail.com', '$2y$10$BCO.C/C5EuKmXB2PXh2XDetGWj1EuBmL9ffCYnuLOKRKv2u4o9cjC', '089668407351', 'sgszg', '2022-11-08', 'app/images/datapegawai/-1667897469-Tc0Or.webp', '2022-11-08 08:51:10', '2022-11-16 06:06:16');

-- --------------------------------------------------------

--
-- Table structure for table `dinas`
--

CREATE TABLE `dinas` (
  `id` int NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `kegiatan` text,
  `longitude` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dinas`
--

INSERT INTO `dinas` (`id`, `nama`, `tanggal`, `kegiatan`, `longitude`, `latitude`, `created_at`, `updated_at`) VALUES
(1, 'Ade Maulana Alfaqi', '2022-11-24', 'sldasdohdfwjfjsda', '109.3173248', '1.3828096', '2022-11-24 07:00:35', '2022-11-24 07:00:35'),
(2, 'jeremi', '2022-11-30', 'Dalam Rangka Pemeliharaan Arsip Dinamis, Dinas Kearsipan dan perpustakaan Kota Gorontalo Terutama Bidang Kearsipan Melaksanakan Kegiatan Pendataan dan Penataan Sekaligus Monitoring Pada Seluruh Kecamatan dan Kelurahan Yang Berada Di Kota', '109.98769867832753', '-1.8165480293941583', '2022-11-29 05:46:06', '2022-11-29 05:46:06');

-- --------------------------------------------------------

--
-- Table structure for table `istirahat`
--

CREATE TABLE `istirahat` (
  `id` int NOT NULL,
  `id_absen` int DEFAULT NULL,
  `level` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `izin`
--

CREATE TABLE `izin` (
  `id` int NOT NULL,
  `id_user` int DEFAULT NULL,
  `tipe_izin` enum('Cuti','Izin','Sakit') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `keterangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `status` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `izin`
--

INSERT INTO `izin` (`id`, `id_user`, `tipe_izin`, `tanggal_mulai`, `tanggal_selesai`, `keterangan`, `foto`, `status`, `created_at`, `updated_at`) VALUES
(24, 6, 'Cuti', '2022-11-30', '2022-12-03', '-', 'app/images/izin/24-1669785856-g1OGG.webp', 3, '2022-11-30 05:24:16', '2022-11-30 06:05:55'),
(25, 6, 'Izin', '2022-12-01', '2022-12-02', 'acara', 'app/images/izin/25-1669864277-vAejz.png', 2, '2022-12-01 03:11:17', '2022-12-01 03:12:10'),
(26, 6, 'Cuti', '2022-12-03', '2022-12-11', 'kawin', 'app/images/izin/26-1669864969-ZwJ08.webp', 3, '2022-12-01 03:22:49', '2022-12-01 03:23:04'),
(27, 6, 'Cuti', '2022-12-23', '2022-12-29', 'naek haji', 'app/images/izin/27-1669875433-xhhzX.webp', 1, '2022-12-01 06:17:13', '2022-12-01 06:17:14');

-- --------------------------------------------------------

--
-- Table structure for table `lembur`
--

CREATE TABLE `lembur` (
  `id` int NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `aktifitas` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lembur`
--

INSERT INTO `lembur` (`id`, `nama`, `tanggal`, `jam_mulai`, `jam_selesai`, `aktifitas`, `created_at`, `updated_at`) VALUES
(1, 'Ade Maulana Alfaqi', '2022-11-24', '13:06:00', '13:08:00', 'dasds', '2022-11-24 06:06:34', '2022-11-24 06:06:34');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id` int NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id`, `nama`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Ade Maulana', 'ademaulanaalfaqi', 'admlna26@gmail.com', '$2y$10$r4.lBEv4jMiAammRTTJSoO7CyWVcr7HMsHlAV1FbqSp/AW1d/ZVPe', NULL, '2022-10-21 06:53:12', '2022-10-21 08:36:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `absen_masuk`
--
ALTER TABLE `absen_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `absen_pulang`
--
ALTER TABLE `absen_pulang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datapegawai`
--
ALTER TABLE `datapegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dinas`
--
ALTER TABLE `dinas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `istirahat`
--
ALTER TABLE `istirahat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `izin`
--
ALTER TABLE `izin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lembur`
--
ALTER TABLE `lembur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `absen_masuk`
--
ALTER TABLE `absen_masuk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `absen_pulang`
--
ALTER TABLE `absen_pulang`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `datapegawai`
--
ALTER TABLE `datapegawai`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `dinas`
--
ALTER TABLE `dinas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `istirahat`
--
ALTER TABLE `istirahat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `izin`
--
ALTER TABLE `izin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `lembur`
--
ALTER TABLE `lembur`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
