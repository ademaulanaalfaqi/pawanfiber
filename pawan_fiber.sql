-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 15, 2022 at 06:34 AM
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
(23, 1, 'Pegawai', 2, 2, '09:41:04', '09:42:16', 'app/images/absensi/-1671071995-CALMM.webp', '109.97819340344788', '-1.8415555950784341', '2022-12-15 02:39:55', '2022-12-15 02:42:24');

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
  `divisi` enum('Administrasi','Pegawai','Office boy','Teknisi','Keuangan','Security','HRD','Marketing') CHARACTER SET latin1 COLLATE latin1_swedish_ci DEFAULT NULL,
  `jabatan` enum('HRD','Direktur','Bendahara','Sekretaris') DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datapegawai`
--

INSERT INTO `datapegawai` (`id`, `level`, `nik`, `email`, `nama`, `foto`, `gaji_pokok`, `status_kerja`, `jatah_cuti`, `tanggal_berakhir`, `jam_kerja`, `jenis_kelamin`, `no_handphone`, `divisi`, `jabatan`, `tanggal_masuk`, `password`, `created_at`, `updated_at`) VALUES
(1, '2', 12345678900566, 'pegawai@gmail.com', 'Pegawai', 'app/admin/images/datapegawai/8-1669776602-29i98.jpg', 4000000, 'Kontrak', '9', '2022-11-16', 'Senin - Jumat', 'Perempuan', '0897865643', 'Pegawai', 'Direktur', '2022-11-16', '$2y$10$P6QmznDMK/oalX9zO5Kqh.oPHuvmW/WvmFnQOflsGU0x7nKnQZFny', '2022-11-15 23:00:40', '2022-11-30 02:50:02'),
(2, '1', 1234567890012345, 'admin@gmail.com', 'ADMIN', 'app/admin/images/datapegawai/9-1669775869-BTQmh.jpg', 4000000, 'Tetap', '9', '2022-11-25', 'Senin - Sabtu', 'Laki - Laki', '0897865643', 'Administrasi', 'HRD', '2022-11-25', '$2y$10$P6QmznDMK/oalX9zO5Kqh.oPHuvmW/WvmFnQOflsGU0x7nKnQZFny', '2022-11-25 03:20:05', '2022-11-30 02:37:49'),
(3, '2', 3457875665645, 'saturnus@gmail.com', 'Saturnus', 'app/admin/images/datapegawai/11-1669695340-813EH.jpg', 5000000, 'Tetap', '9', '2022-11-29', 'Senin - Jumat', 'Laki - Laki', '1232455675', 'Keuangan', 'Bendahara', '2022-11-29', '$2y$10$UJNmM7sOF1BLdAZ9waI.beYok94wzsctkxhQS35qczKPBrmiRsnGy', '2022-11-29 04:15:40', '2022-11-29 04:15:40'),
(4, '1', 123456789064532, 'admin1@gmail.com', 'Admin2', 'app/admin/images/datapegawai/12-1669703879-tJ69G.jpg', 4000000, 'Freelance/Partime', '9', '2022-11-29', 'Senin - Sabtu', 'Perempuan', '454545445454', 'Security', 'Sekretaris', '2022-11-29', '$2y$10$oBr/oDUSkPTa3Fx8on6XueXecTxQvzbJvbtVAAXChhqUT4p.lljYu', '2022-11-29 06:37:59', '2022-11-29 06:38:29'),
(5, NULL, 93740237402, 'admlna26@gmail.com', 'ade maulana', 'app/images/datapegawai/97efb9a4-24a2-471a-afe2-a2f0eb6ed5ec-1670558675-R8zSu.webp', 200000, 'Kontrak', '6', '2022-12-23', 'Senin - Jumat', 'Laki - Laki', '0820174190274', 'Pegawai', 'Bendahara', '2022-12-09', '$2y$10$sWJFkStUPNFxoPmNKPfya.qUmo38y8wu3jKt.F4FUlXgtIHicWkQe', '2022-12-09 04:04:35', '2022-12-09 04:04:35'),
(6, NULL, 2349829793520, 'akmal@gmail.com', 'Akmal Alfarizi', 'app/images/datapegawai/6-1671008572-EHDwk.webp', 200000, 'Kontrak', '6', '2022-12-31', 'Senin - Jumat', 'Laki - Laki', '0820174190274', 'Pegawai', 'Sekretaris', '2022-12-09', '$2y$10$jtzznJwAyoWtbKmm6O47B.3/vWOdk3YJkHkk93KABYaQhnNWBJ01K', '2022-12-09 04:24:59', '2022-12-14 09:02:52');

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
(1, NULL, 'Ade Maulana Alfaqi', '2022-11-24', NULL, 'sldasdohdfwjfjsda', '109.3173248', '1.3828096', '2022-11-24 07:00:35', '2022-11-24 07:00:35'),
(2, NULL, 'jeremi', '2022-11-30', NULL, 'Dalam Rangka Pemeliharaan Arsip Dinamis, Dinas Kearsipan dan perpustakaan Kota Gorontalo Terutama Bidang Kearsipan Melaksanakan Kegiatan Pendataan dan Penataan Sekaligus Monitoring Pada Seluruh Kecamatan dan Kelurahan Yang Berada Di Kota', '109.98769867832753', '-1.8165480293941583', '2022-11-29 05:46:06', '2022-11-29 05:46:06'),
(4, 5, 'ade maulana', '2022-12-15', '2022-12-24', 'skjhfksgfkwgekslaaoatohlhslhruyrhksjghf,mn,blshgoeiroiyghdgdgfghoeeoiighlflfdngdhgeotoerhtdhgdglshlehtoiiethtldhgdg,fkkeg', '110.33706665039064', '-1.780185315393532', '2022-12-15 04:22:51', '2022-12-15 04:24:48'),
(5, 5, 'ade maulana', '2022-12-15', '2022-12-16', 'huh', '110.06927490234376', '-1.7403786705878306', '2022-12-15 06:13:35', '2022-12-15 06:13:59'),
(6, 1, 'pegawai', '2022-12-15', '2022-12-24', 'ntah', '110.0885009765625', '-1.9243054921857554', '2022-12-15 06:16:25', '2022-12-15 06:16:25');

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
(28, 1, 'Cuti', '2022-12-08', '2022-12-09', 'naek haji', 'app/images/izin/28-1670469246-9unBh.png', 1, '2022-12-08 03:14:06', '2022-12-13 07:18:59'),
(29, 1, 'Izin', '2022-12-29', '2022-12-31', 'kawin', 'app/images/izin/29-1670469530-8zHUM.webp', 3, '2022-12-08 03:18:50', '2022-12-13 07:16:48'),
(30, 1, 'Sakit', '2022-12-15', '2022-12-16', 'demam', 'app/images/izin/30-1670470091-e0xwO.webp', 3, '2022-12-08 03:28:11', '2022-12-08 03:39:06'),
(31, 3, 'Izin', '2022-12-09', '2022-12-10', 'galik perigi', 'app/images/izin/31-1670470873-qJffC.webp', 3, '2022-12-08 03:41:13', '2022-12-13 07:16:50'),
(32, 5, 'Izin', '2022-12-13', '2022-12-13', 'ngoding', 'app/images/izin/32-1670916169-PgpZt.webp', 1, '2022-12-13 07:22:49', '2022-12-13 07:22:49'),
(33, 5, 'Cuti', '2022-12-13', '2022-12-22', 'naek haji', 'app/images/izin/33-1670919313-wSALh.webp', 2, '2022-12-13 08:15:13', '2022-12-13 08:15:24'),
(34, 5, 'Sakit', '2022-12-14', '2022-12-14', 'sakit perut', 'app/images/izin/34-1670985250-r4qYw.png', 1, '2022-12-14 02:34:10', '2022-12-14 02:34:10'),
(35, 1, 'Sakit', '2022-12-14', '2022-12-14', 'sakit gigi', 'app/images/izin/35-1670986143-p9IHP.webp', 2, '2022-12-14 02:49:03', '2022-12-14 02:49:13');

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
(5, 6, 'Akmal Alfarizi', 1, NULL, 'nonton', '2022-12-14 11:03:22', '2022-12-14 11:03:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `datapegawai`
--
ALTER TABLE `datapegawai`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
