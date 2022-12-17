-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 17, 2022 at 12:47 AM
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
  `id_user` int DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `istirahat` int DEFAULT NULL,
  `pulang` int DEFAULT NULL,
  `jam_istirahat` time DEFAULT NULL,
  `jam_pulang` time DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id`, `id_user`, `nama`, `istirahat`, `pulang`, `jam_istirahat`, `jam_pulang`, `foto`, `longitude`, `latitude`, `created_at`, `updated_at`) VALUES
(15, 6, 'Akmal Alfarizi', 1, 1, NULL, NULL, 'app/images/absensi/-1670573146-3nPsw.webp', '109.98769099039261', '-1.8165430508777476', '2022-12-09 08:05:46', '2022-12-09 08:05:46'),
(16, 5, 'ade maulana', 2, 2, '15:02:48', '15:02:31', 'app/images/absensi/-1670911994-CuH7q.png', '109.98769245682671', '-1.8165449670375455', '2022-12-13 06:13:14', '2022-12-13 08:02:50'),
(18, 5, 'ade maulana', 2, 2, '15:01:42', '15:02:10', 'app/images/absensi/-1670914700-x5Zux.webp', '109.98769405570886', '-1.8165460440996704', '2022-12-13 06:58:20', '2022-12-13 08:02:15'),
(19, 5, 'ade maulana', 2, 2, '12:23:39', '12:23:43', 'app/images/absensi/-1670995419-e3Zkd.png', '109.97818833509542', '-1.8414146812930559', '2022-12-14 05:23:39', '2022-12-14 05:26:06'),
(20, 5, 'ade maulana', 2, 2, '12:29:11', '12:30:05', 'app/images/absensi/-1670995751-RTCF4.webp', '109.97818428469017', '-1.8413437767279448', '2022-12-14 05:29:11', '2022-12-14 05:32:30'),
(21, 6, 'Akmal Alfarizi', 2, 2, '17:53:00', '17:53:09', 'app/images/absensi/-1671015179-gY7Mj.png', '109.3369', '-0.0212', '2022-12-14 10:52:59', '2022-12-14 10:54:03'),
(22, 6, 'Akmal Alfarizi', 1, 1, NULL, NULL, 'app/images/absensi/-1671015299-STwKO.webp', '109.3369', '-0.0212', '2022-12-14 10:54:59', '2022-12-14 10:54:59'),
(24, 5, 'ade maulana', 2, 1, '01:13:34', NULL, 'app/images/absensi/-1671111109-TBsFu.png', '109.98770848029154', '-1.8165493612311012', '2022-12-15 13:31:49', '2022-12-16 18:13:44'),
(25, 5, 'ade maulana', 1, 1, NULL, NULL, 'app/images/absensi/-1671182415-adOoL.jpg', '109.98770548398406', '-1.81654533834935', '2022-12-16 09:20:15', '2022-12-16 09:20:15'),
(26, 5, 'ade maulana', 1, 1, NULL, NULL, 'app/images/absensi/-1671212198-bWFhx.webp', '109.97818733012399', '-1.8415579765518966', '2022-12-16 17:36:38', '2022-12-16 17:36:38'),
(27, 5, 'ade maulana', 1, 1, NULL, NULL, 'app/images/absensi/-1671235105-WSySY.webp', '109.97819341868238', '-1.8415910629782744', '2022-12-16 23:58:25', '2022-12-16 23:58:25'),
(28, 5, 'ade maulana', 2, 1, '07:42:02', NULL, 'app/images/absensi/-1671235362-8NIRl.webp', '109.97816542992311', '-1.8415461515375517', '2022-12-17 00:02:42', '2022-12-17 00:42:05');

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
  `id` int NOT NULL,
  `level` varchar(11) DEFAULT NULL,
  `nik` bigint DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `gaji_pokok` int DEFAULT NULL,
  `status_kerja` enum('Tetap','Kontrak','Magang/Training','Freelance/Partime') DEFAULT NULL,
  `jatah_cuti` varchar(255) DEFAULT NULL,
  `tanggal_berakhir` date DEFAULT NULL,
  `jam_kerja` enum('Senin - Jumat','Senin - Sabtu') DEFAULT NULL,
  `jenis_kelamin` enum('Laki - Laki','Perempuan') DEFAULT NULL,
  `no_handphone` varchar(255) DEFAULT NULL,
  `divisi` enum('HRD & GA','Finance','Sales & marketing','Network & Technical') CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `jabatan` enum('HRD GA','Kepala Cabang','Kepala Teknisi','Leader Finance AP','Leader Finance AR','Leader Sales','Leader IKR','Costumer Service','Staff Accounting','Staff Inventory','Staff Finance','Staff Teknisi','Office Boy') CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datapegawai`
--

INSERT INTO `datapegawai` (`id`, `level`, `nik`, `email`, `nama`, `foto`, `gaji_pokok`, `status_kerja`, `jatah_cuti`, `tanggal_berakhir`, `jam_kerja`, `jenis_kelamin`, `no_handphone`, `divisi`, `jabatan`, `tanggal_masuk`, `password`, `created_at`, `updated_at`) VALUES
(5, NULL, 93740237402, 'admlna26@gmail.com', 'ade maulana', 'app/images/datapegawai/97efb9a4-24a2-471a-afe2-a2f0eb6ed5ec-1670558675-R8zSu.webp', 200000, 'Kontrak', '6', '2022-12-23', 'Senin - Jumat', 'Laki - Laki', '0820174190274', 'Finance', 'Leader Finance AP', '2022-12-09', '$2y$10$sWJFkStUPNFxoPmNKPfya.qUmo38y8wu3jKt.F4FUlXgtIHicWkQe', '2022-12-09 04:04:35', '2022-12-09 04:04:35'),
(6, NULL, 2349829793520, 'akmal@gmail.com', 'Akmal Alfarizi', 'app/images/datapegawai/6-1671008572-EHDwk.webp', 200000, 'Kontrak', '6', '2022-12-31', 'Senin - Jumat', 'Laki - Laki', '0820174190274', 'HRD & GA', 'HRD GA', '2022-12-09', '$2y$10$jtzznJwAyoWtbKmm6O47B.3/vWOdk3YJkHkk93KABYaQhnNWBJ01K', '2022-12-09 04:24:59', '2022-12-14 09:02:52');

-- --------------------------------------------------------

--
-- Table structure for table `dinas`
--

CREATE TABLE `dinas` (
  `id` int NOT NULL,
  `id_user` int DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tanggal_mulai` date DEFAULT NULL,
  `tanggal_selesai` date DEFAULT NULL,
  `deskripsi_dinas` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `longitude` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `dinas`
--

INSERT INTO `dinas` (`id`, `id_user`, `nama`, `tanggal_mulai`, `tanggal_selesai`, `deskripsi_dinas`, `longitude`, `latitude`, `created_at`, `updated_at`) VALUES
(4, 5, 'ade maulana', '2022-12-15', '2022-12-24', 'skjhfksgfkwgekslaaoatohlhslhruyrhksjghf,mn,blshgoeiroiyghdgdgfghoeeoiighlflfdngdhgeotoerhtdhgdglshlehtoiiethtldhgdg,fkkeg', '110.33706665039064', '-1.780185315393532', '2022-12-15 04:22:51', '2022-12-15 04:24:48'),
(5, 5, 'ade maulana', '2022-12-15', '2022-12-16', 'huh', '110.06927490234376', '-1.7403786705878306', '2022-12-15 06:13:35', '2022-12-15 06:13:59');

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
(32, 5, 'Izin', '2022-12-13', '2022-12-13', 'ngoding', 'app/images/izin/32-1670916169-PgpZt.webp', 2, '2022-12-13 07:22:49', '2022-12-15 12:22:01'),
(33, 5, 'Cuti', '2022-12-13', '2022-12-22', 'naek haji', 'app/images/izin/33-1670919313-wSALh.webp', 2, '2022-12-13 08:15:13', '2022-12-13 08:15:24'),
(34, 5, 'Sakit', '2022-12-14', '2022-12-14', 'sakit perut', 'app/images/izin/34-1670985250-r4qYw.png', 3, '2022-12-14 02:34:10', '2022-12-16 18:33:41');

-- --------------------------------------------------------

--
-- Table structure for table `lembur`
--

CREATE TABLE `lembur` (
  `id` int NOT NULL,
  `id_user` int DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `lembur` int DEFAULT NULL,
  `selesai` time DEFAULT NULL,
  `aktifitas` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lembur`
--

INSERT INTO `lembur` (`id`, `id_user`, `nama`, `lembur`, `selesai`, `aktifitas`, `created_at`, `updated_at`) VALUES
(4, 5, 'ade maulana', 2, '11:12:09', 'ngoding', '2022-12-13 06:36:30', '2022-12-15 04:12:11'),
(7, 5, 'ade maulana', 2, '01:39:11', 'biasalah', '2022-12-16 18:38:59', '2022-12-16 18:39:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `izin`
--
ALTER TABLE `izin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `lembur`
--
ALTER TABLE `lembur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `datapegawai`
--
ALTER TABLE `datapegawai`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dinas`
--
ALTER TABLE `dinas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `izin`
--
ALTER TABLE `izin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `lembur`
--
ALTER TABLE `lembur`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absensi`
--
ALTER TABLE `absensi`
  ADD CONSTRAINT `absensi_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `datapegawai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `dinas`
--
ALTER TABLE `dinas`
  ADD CONSTRAINT `dinas_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `datapegawai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `izin`
--
ALTER TABLE `izin`
  ADD CONSTRAINT `izin_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `datapegawai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lembur`
--
ALTER TABLE `lembur`
  ADD CONSTRAINT `lembur_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `datapegawai` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
