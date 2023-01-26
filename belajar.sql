-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2023 at 04:27 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `belajar`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata_dosen`
--

CREATE TABLE `biodata_dosen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NIP` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biodata_dosen`
--

INSERT INTO `biodata_dosen` (`id`, `nama`, `email`, `pendidikan`, `NIP`, `created_at`, `updated_at`) VALUES
(1, 'sdasd', 'adsa@gmail.com', 'asdasd', 134234, '2022-09-14 04:06:50', '2022-09-14 04:06:50'),
(2, 'sdasdasd', 'adsa@gmail.com', 'asdasd', 134234, '2022-09-14 04:07:14', '2022-09-14 04:07:14'),
(3, 'sdasdasd', 'adsa@gmail.com', 'asdasd', 134234, '2022-09-14 04:08:41', '2022-09-14 04:08:41');

-- --------------------------------------------------------

--
-- Table structure for table `biodata_lapang`
--

CREATE TABLE `biodata_lapang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biodata_lapang`
--

INSERT INTO `biodata_lapang` (`id`, `nama`, `pendidikan`, `email`, `jabatan`, `created_at`, `updated_at`) VALUES
(1, 'asdasd', 'asdas', 'adas@gmail.com', 'asdad', '2022-09-11 10:11:41', '2022-09-11 10:11:41'),
(2, 'eko win kenali', 'S1', 'ekowin@gmail.com', 'dosen', '2022-09-11 21:03:48', '2022-09-11 21:03:48');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jurnal`
--

CREATE TABLE `jurnal` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `capaian` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_capaian` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alat_bahan` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` date NOT NULL,
  `tgl_berakhir` date NOT NULL,
  `prosedur` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nilai` int(11) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jurnal`
--

INSERT INTO `jurnal` (`id`, `capaian`, `sub_capaian`, `alat_bahan`, `tanggal`, `tgl_berakhir`, `prosedur`, `nilai`, `id_user`, `status`, `created_at`, `updated_at`) VALUES
(1, 'asdasd', 'asdasd', 'esfasf', '2022-09-11', '2022-09-11', '<p>sfsddfs</p>', 100, 2, 'working', '2022-09-11 10:10:16', '2022-10-17 23:32:25'),
(2, 'baru', 'baru', 'asd', '2022-09-11', '2022-09-10', '<p>asd</p>', 100, 2, 'end', '2022-08-17 10:30:45', '2022-10-09 21:45:33'),
(3, 'senin', 'senin', 'asdad', '2022-09-12', '2022-09-13', '<p>asdad</p>', 100, 2, 'working', '2022-09-11 21:07:27', '2022-10-17 23:31:03'),
(4, 'asda', 'asd', 'asdas', '2022-09-30', '2022-10-06', '<p>asda</p>', 100, 2, 'end', '2022-09-29 23:17:21', '2022-12-05 06:30:43'),
(5, 'asdaf', 'asdf', NULL, '2022-09-30', '2022-10-07', NULL, NULL, 3, 'request', '2022-09-29 23:17:51', '2022-09-29 23:19:53'),
(6, 'asdasd', 'asdasd', 'asdasd', '2023-01-26', '2023-01-28', '<p>asdasd</p>', 100, 2, 'end', '2023-01-25 19:16:16', '2023-01-25 19:24:13'),
(7, 'asdasd', 'asdasd', NULL, '2023-01-26', '2023-01-28', NULL, NULL, 3, 'Request', '2023-01-25 19:16:16', '2023-01-25 19:16:16');

-- --------------------------------------------------------

--
-- Table structure for table `kelompok`
--

CREATE TABLE `kelompok` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tahun_ajaran` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `univ` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_berakhir` date NOT NULL,
  `users` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelompok`
--

INSERT INTO `kelompok` (`id`, `tahun_ajaran`, `univ`, `tgl_mulai`, `tgl_berakhir`, `users`, `created_at`, `updated_at`) VALUES
(1, '2323', 'asdasd', '2022-09-01', '2022-09-12', 'a:2:{i:0;i:3;i:1;i:2;}', '2022-09-11 10:09:59', '2022-09-11 10:09:59'),
(2, '2020', 'politeknik negeri lampung', '2022-09-01', '2022-09-30', 'a:2:{i:0;i:3;i:1;i:2;}', '2022-09-11 20:50:10', '2022-09-11 20:50:10'),
(4, '1234', 'asdf', '2022-09-01', '2022-09-30', 'a:1:{i:0;i:6;}', '2022-09-29 08:27:18', '2022-09-29 08:27:18');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_12_153808_create_jurnal_table', 1),
(6, '2021_12_13_015504_create_biodata_dosen_table', 1),
(7, '2021_12_13_020137_create_biodata_lapang_table', 1),
(8, '2021_12_13_020526_create__perusahaan_table', 1),
(9, '2021_12_13_052559_create_pkl_table', 1),
(10, '2022_07_28_134350_create_kelompok', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perusahaan`
--

CREATE TABLE `perusahaan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pendirian` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pimpinan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pimpinan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` date NOT NULL,
  `bidang_usaha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_karyawan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `assesibilitas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pkl`
--

CREATE TABLE `pkl` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `id_dosen` int(11) NOT NULL,
  `id_lapang` int(11) NOT NULL,
  `id_jurnal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_ketuaKelompok` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL,
  `password` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perguruan_tinggi` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `npm` int(11) DEFAULT NULL,
  `jurusan` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `program_studi` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `semester` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `isAdmin`, `password`, `perguruan_tinggi`, `npm`, `jurusan`, `program_studi`, `semester`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '2021-08-03 01:12:50', 1, '$2y$10$AU1JvsdIXRrfK8VwDsWfi.A0SdeKXhpGnsglXnTRYvIkvl4LieOLy', NULL, 123456, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Ahmad Nidhom Al Fadli', 'ahmad.n.fadli@gmail.com', '2021-08-03 01:12:50', 0, '$2y$10$AU1JvsdIXRrfK8VwDsWfi.A0SdeKXhpGnsglXnTRYvIkvl4LieOLy', 'asdasd', 12345678, 'asdasd', 'asdsa', '4', NULL, NULL, '2022-09-11 10:11:41'),
(3, 'Ahmad Nidhom Al Fadli', 'ahmadnidhom@gmail.com', '2021-08-03 01:12:50', 0, '$2y$10$AU1JvsdIXRrfK8VwDsWfi.A0SdeKXhpGnsglXnTRYvIkvl4LieOLy', 'dasdasd', 42342, 'sadasd', 'asdas', '6', NULL, NULL, '2022-09-14 04:08:41'),
(6, 'dinda saghadu', 'ahmadnidhom13@gmail.com', '2022-09-25 08:31:32', NULL, '$2y$10$LY6Zj9MCeURp4tfx44TC7eb2IygxjWpY2DTsdWSbg9mk5o6ecVMbS', NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-25 08:30:24', '2022-09-25 08:31:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata_dosen`
--
ALTER TABLE `biodata_dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `biodata_lapang`
--
ALTER TABLE `biodata_lapang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jurnal`
--
ALTER TABLE `jurnal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelompok`
--
ALTER TABLE `kelompok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `perusahaan`
--
ALTER TABLE `perusahaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pkl`
--
ALTER TABLE `pkl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata_dosen`
--
ALTER TABLE `biodata_dosen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `biodata_lapang`
--
ALTER TABLE `biodata_lapang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jurnal`
--
ALTER TABLE `jurnal`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kelompok`
--
ALTER TABLE `kelompok`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perusahaan`
--
ALTER TABLE `perusahaan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pkl`
--
ALTER TABLE `pkl`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
