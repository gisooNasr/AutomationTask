-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 19, 2022 at 06:28 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alibaba`
--

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
(5, '2022_12_18_173427_create_user_transactions_table', 1);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `family` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` int(11) DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `family`, `email`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Anita Wilkinson II', 'XikX4bu5tM', 'nasrgisu@gmail.com', '$2y$10$RDpwdv51HFrIEP8Hot2dw.8vqUZkfWsr4vEU3isAJCjRP51rruiFa', 1, 'bkt4rOscArkTKkDkOQoeJgo3Y6vBXZdv5MkPUIO7VRqCgi39g66dphVUxRUS', '2022-12-20 01:23:14', '2022-12-20 01:23:14', NULL),
(2, 'Jazmyne Rodriguez', 'zvGTShiR7F', 'pemmerich@example.net', '$2y$10$nglSYKZv2/ZRhbSycxs3NurITnQuL/4lym99peNQ8hFjVkGJpEQC.', 0, '3NXmXx9Bwr5733DWtYAVJf32iKTyVcfRCkGZapGXOa7MvjatChJ7l4CXMXsW', '2022-12-20 01:23:14', '2022-12-20 01:23:14', NULL),
(3, 'Freida Farrell DDS', 'DLWN51ziuE', 'annette.baumbach@example.org', '$2y$10$Up1yakRdwPkn3f3rLR.pvOLPdBkvtrPKlry/HeuFiYtUTzgQA4iby', 0, 'kFLs9BCa97', '2022-12-20 01:23:14', '2022-12-20 01:23:14', NULL),
(4, 'Dr. Karlie Haag II', 'UGC1AUcJQ7', 'thad85@example.net', '$2y$10$UMA7nHj82OlLFUoAxmPEJ.lBW90Rz1xOk/ZqK9Ol4KsMFSJbI1Vsq', 0, '9MJTTboKHX', '2022-12-20 01:23:14', '2022-12-20 01:23:14', NULL),
(5, 'Dr. Malika Bayer', 'LvBiVYuSH6', 'betsy.mitchell@example.org', '$2y$10$gsd2Yb50TTwmtaojryuQjuj0iMelGf9HqLLPUPe3ANHCplstSg0WC', 0, 'QPkAka38s7', '2022-12-20 01:23:14', '2022-12-20 01:23:14', NULL),
(6, 'Jammie Rath IV', '4UmVt3wNQF', 'erunolfsson@example.net', '$2y$10$2.lE73YTadwYWsNFM1lYb.FbNZgz0IxfLc643KE7EgYPBlASFucIC', 0, 'G5Xu0GdVDf', '2022-12-20 01:23:14', '2022-12-20 01:23:14', NULL),
(7, 'Ms. Mireille Zboncak', 'TOgEOK6NYB', 'maudie49@example.org', '$2y$10$dVP/muBpf08l2EnkvW3eaeNUbOLvKa8t8zAqdvfGArAGxEtXy/d3G', 0, 'Yrqydey9pR', '2022-12-20 01:23:14', '2022-12-20 01:23:14', NULL),
(8, 'Jaren Bartell III', 'GZsqGgxL1y', 'vladimir.stroman@example.com', '$2y$10$XDMOChPhYkgTYt8ktNyzuOcZBGPLIelk9PWujk1YIBt2LYtYM75OW', 0, 'plqB0UHmJa', '2022-12-20 01:23:14', '2022-12-20 01:23:14', NULL),
(9, 'Terrill Donnelly', 'O0kX29cKsT', 'brianne.block@example.org', '$2y$10$7YgPOlLyedgPWfyO89ymtOCcExbmqrSwuOEQIXGd8F8yXjKC9omse', 0, 'aD5mL65vXc', '2022-12-20 01:23:14', '2022-12-20 01:23:14', NULL),
(10, 'Eileen Kovacek', 'ybcoGCgEq0', 'ykemmer@example.org', '$2y$10$qiC2WoBXuVwZY0xkL7jmleRGk1wZxbfZUS.aMp.cagnkGeEQiEfZa', 0, 'TgRGPATVct', '2022-12-20 01:23:14', '2022-12-20 01:23:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_transactions`
--

CREATE TABLE `user_transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amount` double DEFAULT 0,
  `type` enum('in','out') COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `receiver_id` bigint(20) UNSIGNED NOT NULL,
  `operator_id` bigint(20) UNSIGNED DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_transactions`
--

INSERT INTO `user_transactions` (`id`, `amount`, `type`, `description`, `user_id`, `receiver_id`, `operator_id`, `file`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 12000000, 'in', 'مبلغ درخواستی بیشتر از بودجه شماست', 3, 5, 1, 'uploads/2022/12/1671470693automation_task.pdf', 0, '2022-12-20 01:24:53', '2022-12-20 01:26:39', NULL),
(2, 42000000, 'in', 'کاربر گرامی درخواست شما تایید شد', 2, 9, 1, 'uploads/2022/12/1671470719automation_task.pdf', 1, '2022-12-20 01:25:19', '2022-12-20 01:26:20', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_name_index` (`name`),
  ADD KEY `users_family_index` (`family`);

--
-- Indexes for table `user_transactions`
--
ALTER TABLE `user_transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_transactions_user_id_foreign` (`user_id`),
  ADD KEY `user_transactions_receiver_id_foreign` (`receiver_id`),
  ADD KEY `user_transactions_operator_id_foreign` (`operator_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_transactions`
--
ALTER TABLE `user_transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_transactions`
--
ALTER TABLE `user_transactions`
  ADD CONSTRAINT `user_transactions_operator_id_foreign` FOREIGN KEY (`operator_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_transactions_receiver_id_foreign` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
