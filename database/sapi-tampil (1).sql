-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 24, 2022 at 01:17 PM
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
(1, 1, NULL, NULL),
(1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sapi`
--

CREATE TABLE `sapi` (
  `id` int(9) NOT NULL,
  `Company` varchar(9) DEFAULT NULL,
  `Product` varchar(45) DEFAULT NULL,
  `TypeName` varchar(18) DEFAULT NULL,
  `Inches` decimal(3,1) DEFAULT NULL,
  `ScreenResolution` varchar(45) DEFAULT NULL,
  `Cpu` varchar(37) DEFAULT NULL,
  `Ram` varchar(6) DEFAULT NULL,
  `Memory` varchar(29) DEFAULT NULL,
  `Gpu` varchar(30) DEFAULT NULL,
  `OpSys` varchar(12) DEFAULT NULL,
  `Weight` varchar(7) DEFAULT NULL,
  `Price_euros` decimal(6,2) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Price_rupiah` int(10) NOT NULL,
  `susu` int(3) NOT NULL,
  `umur` varchar(9) DEFAULT NULL,
  `konsumsi` varchar(5) DEFAULT NULL,
  `bobot` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sapi`
--

INSERT INTO `sapi` (`id`, `Company`, `Product`, `TypeName`, `Inches`, `ScreenResolution`, `Cpu`, `Ram`, `Memory`, `Gpu`, `OpSys`, `Weight`, `Price_euros`, `updated_at`, `created_at`, `Price_rupiah`, `susu`, `umur`, `konsumsi`, `bobot`) VALUES
(1, 'Apple', 'MacBook Pro', 'Ultrabook', '13.3', 'IPS Panel Retina Display 2560x1600', 'Intel Core i5 2.3GHz', '8GB', '128GB SSD', 'Intel Iris Plus Graphics 640', 'macOS', '1.37kg', '1339.69', '2019-07-04 07:43:57', '2019-07-04 07:43:57', 10000000, 3, '16 bulan', '5 kg', '130 kg'),
(2, 'Apple', 'Macbook Air', 'Ultrabook', '13.3', '1440x900', 'Intel Core i5 1.8GHz', '8GB', '128GB Flash Storage', 'Intel HD Graphics 6000', 'macOS', '1.34kg', '898.94', '2019-07-04 07:43:57', '2019-07-04 07:43:57', 11000000, 4, '34 bulan', '10 kg', '150 kg'),
(3, 'HP', '250 G6', 'Notebook', '15.6', 'Full HD 1920x1080', 'Intel Core i5 7200U 2.5GHz', '8GB', '256GB SSD', 'Intel HD Graphics 620', 'No OS', '1.86kg', '575.00', '2019-07-04 07:43:57', '2019-07-04 07:43:57', 12000000, 5, '28 bulan', '7 kg', '210 kg'),
(4, 'Apple', 'MacBook Pro', 'Ultrabook', '15.4', 'IPS Panel Retina Display 2880x1800', 'Intel Core i7 2.7GHz', '16GB', '512GB SSD', 'AMD Radeon Pro 455', 'macOS', '1.83kg', '2537.45', '2019-07-04 07:43:57', '2019-07-04 07:43:57', 9000000, 3, '18 bulan', '6 kg', '170 kg'),
(5, 'Apple', 'MacBook Pro', 'Ultrabook', '13.3', 'IPS Panel Retina Display 2560x1600', 'Intel Core i5 3.1GHz', '8GB', '256GB SSD', 'Intel Iris Plus Graphics 650', 'macOS', '1.37kg', '1803.60', '2019-07-04 07:43:57', '2019-07-04 07:43:57', 45000000, 10, '48 bulan', '15 kg', '230 kg'),
(6, 'Acer', 'Aspire 3', 'Notebook', '15.6', '1366x768', 'AMD A9-Series 9420 3GHz', '4GB', '500GB HDD', 'AMD Radeon R5', 'Windows 10', '2.1kg', '400.00', '2019-07-04 07:43:57', '2019-07-04 07:43:57', 23000000, 7, '39 bulan', '13 kg', '270 kg'),
(7, 'Apple', 'MacBook Pro', 'Ultrabook', '15.4', 'IPS Panel Retina Display 2880x1800', 'Intel Core i7 2.2GHz', '16GB', '256GB Flash Storage', 'Intel Iris Pro Graphics', 'Mac OS X', '2.04kg', '2139.97', '2019-07-04 07:43:57', '2019-07-04 07:43:57', 16000000, 6, '30 bulan', '7 kg', '185 kg'),
(8, 'Apple', 'Macbook Air', 'Ultrabook', '13.3', '1440x900', 'Intel Core i5 1.8GHz', '8GB', '256GB Flash Storage', 'Intel HD Graphics 6000', 'macOS', '', '1158.70', '2019-07-04 07:43:57', '2019-07-04 07:43:57', 12250000, 5, '36 bulan', '10 kg', '270 kg'),
(9, 'Asus', 'ZenBook UX430UN', 'Ultrabook', '14.0', 'Full HD 1920x1080', 'Intel Core i7 8550U 1.8GHz', '16GB', '', 'Nvidia GeForce MX150', 'Windows 10', '1.3kg', '1495.00', '2019-07-04 07:43:57', '2019-07-04 07:43:57', 16000000, 6, '50 bulan', '14 kg', '360 kg'),
(10, 'Acer', 'Swift 3', 'Ultrabook', '14.0', 'IPS Panel Full HD 1920x1080', 'Intel Core i5 8250U 1.6GHz', '8GB', '256GB SSD', 'Intel UHD Graphics 620', 'Windows 10', '1.6kg', '770.00', '2019-07-04 07:43:57', '2019-07-04 07:43:57', 16500000, 7, '40 bulan', '18 kg', '300 kg');

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
(1, 'c1', '{\"weight\":\"0.6\",\"is_cost\":\"0\"}', '2019-07-04 09:00:38', '2019-07-04 19:19:07'),
(2, 'c2', '{\"weight\":\"0.2\",\"is_cost\":\"0\"}', '2019-07-04 09:00:38', '2019-07-04 19:18:43'),
(3, 'c3', '{\"weight\":\"0.8\",\"is_cost\":\"0\"}', '2019-07-04 09:00:38', '2019-07-04 19:19:24'),
(4, 'c4', '{\"weight\":\"0.6\",\"is_cost\":\"1\"}', '2019-07-04 09:00:38', '2022-06-23 19:54:45'),
(5, 'c5', '{\"weight\":\"1\",\"is_cost\":\"1\"}', '2019-07-04 09:00:38', '2019-07-10 18:55:08');

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
(1, 'Admin', 'admin@minhajul.com', NULL, '$2y$10$2IHbySIbf6/NJVWs1VU6k.2dAAqbi6XBInYrlyMlUskVtPM27M2dS', NULL, '2019-07-03 20:13:31', '2019-07-03 20:13:31');

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
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
