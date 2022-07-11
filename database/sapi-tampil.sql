-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 08, 2022 at 07:21 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sapi-tampil`
--

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
(3, '2019_06_28_174820_create_role_table', 1),
(4, '2019_06_28_174943_create_role_user_table', 1),
(5, '2019_07_04_155617_create_setting_table', 2);

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
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'User', '2019-07-03 20:13:31', '2019-07-03 20:13:31'),
(2, 'Administrator', '2019-07-03 20:13:31', '2019-07-03 20:13:31');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, NULL),
(2, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sapi`
--

CREATE TABLE `sapi` (
  `id` int(9) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Price_rupiah` int(10) NOT NULL,
  `susu` int(3) NOT NULL,
  `umur` varchar(9) DEFAULT NULL,
  `konsumsi` varchar(5) DEFAULT NULL,
  `bobot` varchar(7) DEFAULT NULL,
  `merksapi` varchar(20) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sapi`
--

INSERT INTO `sapi` (`id`, `updated_at`, `created_at`, `Price_rupiah`, `susu`, `umur`, `konsumsi`, `bobot`, `merksapi`, `keterangan`) VALUES
(4, '2019-07-04 07:43:57', '2019-07-04 07:43:57', 9000000, 3, '18 bulan', '6 kg', '170 kg', 'FH', NULL),
(5, '2019-07-04 07:43:57', '2019-07-04 07:43:57', 45000000, 10, '48 bulan', '15 kg', '230 kg', 'FH', NULL),
(6, '2019-07-04 07:43:57', '2019-07-04 07:43:57', 23000000, 7, '39 bulan', '13 kg', '270 kg', 'Jersey', NULL),
(7, '2019-07-04 07:43:57', '2019-07-04 07:43:57', 16000000, 6, '30 bulan', '7 kg', '185 kg', 'Jersey', NULL),
(8, '2019-07-04 07:43:57', '2019-07-04 07:43:57', 12250000, 5, '36 bulan', '10 kg', '270 kg', 'Jersey', NULL),
(9, '2019-07-04 07:43:57', '2019-07-04 07:43:57', 16000000, 6, '50 bulan', '14 kg', '360 kg', 'FH', NULL),
(10, '2019-07-04 07:43:57', '2019-07-04 07:43:57', 16500000, 7, '40 bulan', '18 kg', '300 kg', 'Jersey', NULL),
(11, '2022-06-30 03:09:41', '2022-06-30 03:09:41', 21000000, 4, '28 bulan', '20 kg', '231 kg', 'Jersey', 'asal desa mliwis'),
(12, '2022-07-07 03:52:40', '2022-07-07 03:52:40', 11000000, 4, '7 bulan', '7 kg', '300 kg', 'dummy', 'dummy'),
(13, '2022-07-07 07:43:13', '2022-07-07 07:43:13', 21000000, 2, '34 bulan', '15 kg', '300 kg', 'FH', 'asal sapi desa bubakan');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'c1', '{\"weight\":\"0.6\",\"is_cost\":\"0\"}', '2019-07-04 09:00:38', '2022-07-01 02:42:47'),
(2, 'c2', '{\"weight\":\"0.8\",\"is_cost\":\"1\"}', '2019-07-04 09:00:38', '2022-07-01 02:43:08'),
(3, 'c3', '{\"weight\":\"0.6\",\"is_cost\":\"1\"}', '2019-07-04 09:00:38', '2022-07-01 02:28:46'),
(4, 'c4', '{\"weight\":\"0.6\",\"is_cost\":\"0\"}', '2019-07-04 09:00:38', '2022-07-04 04:59:24'),
(5, 'c5', '{\"weight\":\"0.8\",\"is_cost\":\"1\"}', '2019-07-04 09:00:38', '2022-07-01 02:43:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@minhajul.com', NULL, '$2y$10$2IHbySIbf6/NJVWs1VU6k.2dAAqbi6XBInYrlyMlUskVtPM27M2dS', '2C9y0bwrIsp9Lh1AKzyfkBDwXZlPmt9dDmC2XqgnvpDduAcbcpJUom7jmRXB', '2019-07-03 20:13:31', '2019-07-03 20:13:31'),
(2, 'user', 'user@gmail.com', NULL, '$2y$10$YhDT/jW6YcTdndH5UF41sOLK2asHYG2kCdmmcLvwuWiONwZL3uL8i', NULL, '2022-06-29 08:42:05', '2022-06-29 08:42:05');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`user_id`,`role_id`);

--
-- Indexes for table `sapi`
--
ALTER TABLE `sapi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `setting_key_unique` (`key`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sapi`
--
ALTER TABLE `sapi`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
