-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2021 at 11:03 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ravetour`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(11) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  `created_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `telp`, `email`, `kota`, `deskripsi`, `updated_at`, `created_at`) VALUES
(1, '087719021760', 'rakarahadyandani1@gmail.com', 'Depok', 'TEST', '2021-07-14 06:07:13', '2021-07-14 06:07:13');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `image`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, '0Y7ATRash2JyBT6I1iEIoOcYTjpMmh3JDzRrnbqj.png', 'aaaa', '<p>aaaaaa</p>', '2021-07-13 19:44:41', '2021-07-13 21:58:22'),
(2, 'Si4KaBz9dAWJuYaLod4Mv5g8ZUnR5N998DRqqGD0.jpg', 'fdgd', '<p>dfdh</p>', '2021-07-13 23:24:19', '2021-07-13 23:24:19'),
(3, 'Xo9ztWeWYXWj43vNIXyfw9WCNWK0qHFEsrixuvK6.png', 'rweg', '<p>rtewgeaerwr</p>', '2021-07-13 23:25:38', '2021-07-13 23:25:38'),
(4, 'y9gKx4RAK1YEVdXa1i2dRptZK2uF1BQcy7o0GGHl.jpg', 'aaaaaaaaaaaa', '<p>aaaaaaaaa</p>', '2021-07-13 23:26:39', '2021-07-13 23:27:06'),
(5, 'nUcwQqN4ZOEY7dmC5D3mwTyqc77Oh5DVtGt84yjW.png', 'sfgasdg', '<p>dfdshsdf</p>', '2021-07-13 23:31:24', '2021-07-13 23:31:24');

-- --------------------------------------------------------

--
-- Table structure for table `destinasis`
--

CREATE TABLE `destinasis` (
  `id` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  `created_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `destinasis`
--

INSERT INTO `destinasis` (`id`, `gambar`, `nama`, `updated_at`, `created_at`) VALUES
(4, 'n7gt5JRMhVMGOPTpItDJfB86hv6kDb4JvMdxpFR2.jpg', 'FRANCE', '2021-07-24 01:10:07', '2021-07-18 06:21:34'),
(5, 'KeVPQs3T9vLNVUr4e347ZwleeUR9wrZIKYEL47MU.jpg', 'CHINA', '2021-07-24 00:57:22', '2021-07-18 06:23:55'),
(6, 'QgeWLvvDsGnf9KKK7oRc58sXImNtKByT2F7Xpusb.jpg', 'ENGLAND', '2021-07-24 00:57:59', '2021-07-18 06:24:20'),
(7, 'upkZBXagXDUQjNQenC7UFPXrWhzJqYb5YYzfdIlm.jpg', 'ITALY', '2021-07-24 00:56:52', '2021-07-18 06:24:32'),
(8, '9MW8QDWMzEvYehjTKjzuqsEo4Ynt8vf9B2Ya8JHb.jpg', 'ITALY', '2021-07-24 02:10:31', '2021-07-18 06:24:45'),
(9, 'q4hvgfkeQQI2zftpZweesUHm1Jk6BDpDlDbyMYI3.png', 'SWISS', '2021-07-24 01:09:25', '2021-07-18 06:24:58'),
(10, 'UkYk5hlWUZhOOBDhHoiHmexgFtRxYkKIo0wrLGzV.jpg', 'SPAIN', '2021-07-18 09:42:03', '2021-07-18 08:36:28');

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
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `gambar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `galerii`
--

CREATE TABLE `galerii` (
  `id` int(11) NOT NULL,
  `gambar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `galeris`
--

CREATE TABLE `galeris` (
  `id` int(11) NOT NULL,
  `gambar` varchar(250) NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  `created_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galeris`
--

INSERT INTO `galeris` (`id`, `gambar`, `updated_at`, `created_at`) VALUES
(3, 'chinSo8N13SmnkdTfJs9JTa8CYOJjP9GB7LtQQjo.jpg', '2021-07-18 08:42:55', '2021-07-18 08:42:55'),
(4, 'spKnVLxJPYcH5ZEi5aMPQazSQIZSe5lpJ77dFtI5.jpg', '2021-07-18 08:43:04', '2021-07-18 08:43:04'),
(5, '16efAE9MMYZwGjCEiSw947nzYeIcDhS55GARi5j1.jpg', '2021-07-18 08:43:45', '2021-07-18 08:43:45'),
(6, '1eCePwtoAaiCZKy3UEPOQr4gsmNiLfamCAL7s9DZ.jpg', '2021-07-18 08:43:55', '2021-07-18 08:43:55'),
(7, 'aZpMxovESoqzs7WPvfP9ce0YuINNojYGz6TelVtT.jpg', '2021-07-18 08:44:03', '2021-07-18 08:44:03'),
(8, '48l48UU2LDT8d3E05Ag10z4du7FKVpd1sK94cVpi.png', '2021-07-18 08:44:13', '2021-07-18 08:44:13'),
(9, 'KES2repSu3IL8SNsFUzxYldvjCkPimUeNf3UPpCN.jpg', '2021-07-18 08:44:29', '2021-07-18 08:44:29'),
(10, 'qjW6wo3eR4LDSBrLAHWNLeyqLZeq0lJ5uczUQpE4.jpg', '2021-07-18 09:38:55', '2021-07-18 09:38:55');

-- --------------------------------------------------------

--
-- Table structure for table `kontaks`
--

CREATE TABLE `kontaks` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `pesan` varchar(50) NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  `created_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontaks`
--

INSERT INTO `kontaks` (`id`, `nama`, `email`, `telp`, `pesan`, `updated_at`, `created_at`) VALUES
(6, 'Raka', 'rakarahadyandani1@gmail.com', '087719021760', 'test masuk', '2021-07-18 06:16:51', '2021-07-18 06:16:51'),
(7, 'Kay Garland', 'rhdyn@shoe.com', '087719021760', 'mantap', '2021-07-18 06:19:42', '2021-07-18 06:19:42'),
(8, 'Futsal Rakyat', 'asep@gmail.com', '087719021760', 'a', '2021-07-18 08:56:48', '2021-07-18 08:56:48'),
(9, 'Raka', 'raka@gmail.com', '0822123812', 'Bagus ya', '2021-07-24 05:50:10', '2021-07-24 05:50:10');

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
(4, '2021_07_14_023435_create_blogs_table', 1),
(5, '2021_07_18_115203_create_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pakets`
--

CREATE TABLE `pakets` (
  `id` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `deskripsi` varchar(300) NOT NULL,
  `harga` varchar(30) NOT NULL,
  `updated_at` varchar(20) NOT NULL,
  `created_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pakets`
--

INSERT INTO `pakets` (`id`, `gambar`, `nama`, `deskripsi`, `harga`, `updated_at`, `created_at`) VALUES
(20, 'blxX3MQ917ral07cTus8IkvYyEcN6zCj0vrOcSQs.jpg', 'Benidorm, Spain', 'Benidorm is a buzzing resort with a big reputation for beach holidays. Situated in sunny Costa Blanca, the town is one of the original Spanish beach resorts...', '$790', '2021-07-18 09:21:31', '2021-07-18 09:19:51'),
(21, 'aKb6z4b2bQMP60yPbyydPnxzinEMJGEh2h27FLhz.jpg', 'Raja Ampat, Indonesia', 'Raja Ampat, or the Four Kings, is an archipelago located off the northwest tip of Bird\'s Head Peninsula on the island of New Guinea, in Indonesia\'s West Papua province. It comprises over 1,500 small islands, cays..', '$1000', '2021-07-18 09:30:25', '2021-07-18 09:30:25'),
(22, 'pyxegx52PIwp9Wfa1x0up73593Q7NfJt0qjB14VN.jpg', 'Colosseum', 'The Colosseum in Rome, Italy, is a large amphitheater that hosted events like gladiatorial games. ...', '$800', '2021-07-18 09:36:45', '2021-07-18 09:36:45'),
(23, 'mHF25FST6uBqILQDNrID7HJygOMUFg1ZwseszjDM.jpg', 'Niagara Falls, United State', 'Niagara Falls is a geological wonder and one of the most famous waterfalls in the world. Straddling the border between the United States and Canada, it has been a popular tourist attraction for over 200 years, as well as a major source of hydroelectric power', '$500', '2021-07-24 01:39:57', '2021-07-24 01:39:57');

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
-- Table structure for table `pesans`
--

CREATE TABLE `pesans` (
  `id` int(11) NOT NULL,
  `nama_pemesan` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `no_tlp` int(11) NOT NULL,
  `nama_paket` varchar(250) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `created_at` varchar(250) NOT NULL,
  `updated_at` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesans`
--

INSERT INTO `pesans` (`id`, `nama_pemesan`, `email`, `no_tlp`, `nama_paket`, `harga`, `created_at`, `updated_at`) VALUES
(7, 'Raka', 'rakarahadyandani1@gmail.com', 233, 'Niagara Fals', '$500', '2021-07-24 01:45:08', '2021-07-24 01:45:08'),
(8, 'Anugrah', 'anugrah@gmail.com', 82133441, 'Niagara', '$1000', '2021-07-24 05:40:14', '2021-07-24 05:40:14'),
(9, 'Raka', 'raka@gmail.com', 822103812, 'Niagara', '$1000', '2021-07-24 05:48:40', '2021-07-24 05:48:40');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `deskripsi` varchar(250) NOT NULL,
  `created_at` varchar(20) NOT NULL,
  `updated_at` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `judul`, `deskripsi`, `created_at`, `updated_at`) VALUES
(6, 'Personalized Matching', 'Our unique matching system lets you find just the tour you want for your next holiday.', '2021-07-18 09:59:10', '2021-07-18 09:59:10'),
(7, 'Wide Variety of Tours', 'We offer a wide variety of personally picked tours with destinations all over the globe.', '2021-07-18 09:59:30', '2021-07-18 09:59:30'),
(8, 'Highly Qualified Service', 'Our tour managers are qualified, skilled, and friendly to bring you the best service.', '2021-07-18 09:59:52', '2021-07-18 09:59:52'),
(9, '24/7 Support', 'You can always get professional support from our staff 24/7 and ask any question you have.', '2021-07-18 10:00:11', '2021-07-18 10:00:11'),
(10, 'Handpicked Hotels', 'Our team offers only the best selection of affordable and luxury hotels to our clients.', '2021-07-18 10:00:33', '2021-07-18 10:00:33'),
(11, 'Best Price Guarantee', 'If you find tours that are cheaper than ours, we will compensate the difference.', '2021-07-18 10:00:53', '2021-07-18 10:00:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 1, NULL, '$2b$10$u8Irvq47gk0alELG53CSv.MAseJ5bOculRPh4C69itvAu9nb6NWZe', NULL, NULL, NULL),
(2, 'anugrah', 'anugrah@gmail.com', 2, NULL, '$2y$10$3WPPgE18Xp8F4vjSCHCNIejNlzzb2FbhOCEZ5h.qnoNMqaE2XQy6m', NULL, '2021-07-18 05:23:04', '2021-07-18 05:23:04'),
(3, 'raihan evanza', 'raihan.evanza20@gmail.com', 2, NULL, '$2y$10$UJbKeVohDXDpBKTAM8dF9uEd/ZRY1VqQ3isrcnkYxHEUgCTswmDHS', NULL, '2021-07-23 06:31:35', '2021-07-23 06:31:35'),
(4, 'eeeeee', 'raihan.evanza2036@gmail.com', 3, NULL, '$2y$10$ti5sfADP3l9ho.nJRfDIAecl9161z8rlTe8c63Wg7myVDcRAgHoJS', NULL, '2021-07-23 06:39:15', '2021-07-23 06:39:15'),
(5, 'adminweb', 'admin321@gmail.com', 1, NULL, '$2y$10$ojllTgRsOe1mfinPFePf5u2qNeX8Yphuj.3diTj7dGRSLG4./PrAm', NULL, '2021-07-23 17:39:49', '2021-07-23 17:39:49'),
(6, 'raka', 'raka@gmail.com', 2, NULL, '$2y$10$wVW58CKJwhVaz2DpzOAjEed8J3iRLYO/rb8E6VWc1/hMMYkr6JaS.', NULL, '2021-07-23 17:42:09', '2021-07-23 17:42:09'),
(7, 'raka', 'raka123@gmail.com', 2, NULL, '$2y$10$x0T0UIYHL2bfVNlyCTC2yuxkvXlYEP/b3/OoqoQrGp8FUXYDkWrEq', NULL, '2021-07-23 20:18:37', '2021-07-23 20:18:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `destinasis`
--
ALTER TABLE `destinasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galerii`
--
ALTER TABLE `galerii`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontaks`
--
ALTER TABLE `kontaks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakets`
--
ALTER TABLE `pakets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pesans`
--
ALTER TABLE `pesans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `destinasis`
--
ALTER TABLE `destinasis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galerii`
--
ALTER TABLE `galerii`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kontaks`
--
ALTER TABLE `kontaks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pakets`
--
ALTER TABLE `pakets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pesans`
--
ALTER TABLE `pesans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
