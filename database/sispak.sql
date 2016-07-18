-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Jan 2016 pada 09.52
-- Versi Server: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sispak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `fish`
--

CREATE TABLE `fish` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `latin_name` varchar(250) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fish`
--

INSERT INTO `fish` (`id`, `name`, `latin_name`, `updated_at`, `created_at`) VALUES
(3, 'Karper ', 'Cyprinus Carpio', '2016-01-22 01:04:28', '2016-01-22 00:45:24'),
(4, 'Nilem', 'Osteocilus Hasselti ', '2016-01-22 00:46:38', '2016-01-22 00:46:38'),
(5, 'Bandeng', 'Chanos-Chanos ', '2016-01-22 00:52:41', '2016-01-22 00:52:41'),
(7, 'Bawal', 'Ampus Argenteus', '2016-01-22 01:00:12', '2016-01-22 01:00:12'),
(8, 'Sepat siam', '', '2016-01-26 09:53:34', '2016-01-26 09:53:34'),
(9, 'Gurame', '', '2016-01-26 09:53:48', '2016-01-26 09:53:48'),
(10, 'Sidat', '', '2016-01-26 09:54:11', '2016-01-26 09:54:11'),
(11, 'Lele', '', '2016-01-26 09:54:21', '2016-01-26 09:54:21'),
(12, 'Kakap', '', '2016-01-26 09:54:48', '2016-01-26 09:54:48'),
(13, 'Kerapu', '', '2016-01-26 09:55:02', '2016-01-26 09:55:02'),
(14, 'Gabus', '', '2016-01-26 09:55:13', '2016-01-26 09:55:13'),
(15, 'Belut', '', '2016-01-26 09:55:32', '2016-01-26 09:55:32'),
(16, 'Udang', '', '2016-01-26 09:55:42', '2016-01-26 09:55:42'),
(17, 'Patin', '', '2016-01-26 09:55:50', '2016-01-26 09:55:50'),
(18, 'Mas', '', '2016-01-26 09:55:59', '2016-01-26 09:55:59'),
(19, 'Nila', '', '2016-01-26 09:56:09', '2016-01-26 09:56:09'),
(20, 'Mujaher', '', '2016-01-26 09:56:19', '2016-01-26 09:56:19'),
(21, 'Tawes', '', '2016-01-26 09:58:54', '2016-01-26 09:58:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pakan`
--

CREATE TABLE `pakan` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `protein` float NOT NULL,
  `karbohidrat` float NOT NULL,
  `lemak` float NOT NULL,
  `air_zat_adiktif` float NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pakan`
--

INSERT INTO `pakan` (`id`, `name`, `protein`, `karbohidrat`, `lemak`, `air_zat_adiktif`, `harga`, `created_at`, `updated_at`) VALUES
(1, 'Tepung ikan', 0.2265, 0.00001, 0.1538, 0.6197, 15000, '2016-01-22 01:16:57', '2016-01-22 01:19:41'),
(2, 'Tepung rebon', 0.594, 0.032, 0.036, 0.338, 9000, '2016-01-22 01:21:24', '2016-01-22 01:21:24'),
(3, 'Tepung benawa', 50, 10, 20, 20, 10000, '2016-01-26 10:36:30', '2016-01-27 18:20:58'),
(5, 'Tepung kepala udang', 0, 0, 0, 0, 0, '2016-01-26 10:37:06', '2016-01-26 10:37:22'),
(6, 'Tepung anak ayam', 0, 0, 0, 0, 0, '2016-01-26 10:37:47', '2016-01-26 10:37:47'),
(7, 'Tepung kepompong ulat sutra', 0, 0, 0, 0, 0, '2016-01-26 10:38:41', '2016-01-26 10:38:41'),
(8, 'Ampas minyak hati ikan', 0, 0, 0, 0, 0, '2016-01-26 10:38:56', '2016-01-26 10:38:56'),
(9, 'Tepung darah', 0, 0, 0, 0, 0, '2016-01-26 10:39:08', '2016-01-26 10:39:08'),
(10, 'Silase Ikan', 0, 0, 0, 0, 0, '2016-01-26 10:39:21', '2016-01-26 10:39:21'),
(11, 'Arang bulu ayam dan Tepung tulang', 0, 0, 0, 0, 0, '2016-01-26 10:39:50', '2016-01-26 10:39:50'),
(12, 'Tepung bekicot', 0, 0, 0, 0, 0, '2016-01-26 10:40:05', '2016-01-26 10:40:05'),
(13, 'Tepung cacing tanah', 0, 0, 0, 0, 0, '2016-01-26 10:40:20', '2016-01-26 10:40:20'),
(14, 'Tepung artemia burayak', 0, 0, 0, 0, 0, '2016-01-26 10:40:47', '2016-01-26 10:40:47'),
(15, 'Tepung artemia dewasa', 0, 0, 0, 0, 0, '2016-01-26 10:41:17', '2016-01-26 10:41:26'),
(16, 'Telur ayam dan itik', 0, 0, 0, 0, 0, '2016-01-26 10:42:04', '2016-01-26 10:42:04'),
(17, 'Susu', 0, 0, 0, 0, 0, '2016-01-26 10:42:13', '2016-01-26 10:42:13'),
(18, 'Dedak', 0.096, 0, 0, 0, 5000, '2016-01-26 10:42:22', '2016-01-27 18:40:10'),
(19, 'Dedak gandum', 0, 0, 0, 0, 0, '2016-01-26 10:42:34', '2016-01-26 10:42:34'),
(20, 'Jagung', 0, 0, 0, 0, 0, '2016-01-26 10:42:43', '2016-01-26 10:42:43'),
(21, 'Cantel/Sorgum', 0, 0, 0, 0, 0, '2016-01-26 10:43:04', '2016-01-26 10:43:04'),
(22, 'Tepung terigu', 0, 0, 0, 0, 0, '2016-01-26 10:43:18', '2016-01-26 10:43:18'),
(23, 'Tepung kedele', 0, 0, 0, 0, 0, '2016-01-26 10:43:31', '2016-01-26 10:43:31'),
(24, 'Tepung ampas tahu', 0, 0, 0, 0, 0, '2016-01-26 10:43:47', '2016-01-26 10:43:47'),
(25, 'Tepung bungkil kacang tanah', 0, 0, 0, 0, 0, '2016-01-26 10:44:13', '2016-01-26 10:44:13'),
(26, 'Bungkil kelapa', 0, 0, 0, 0, 0, '2016-01-26 10:44:28', '2016-01-26 10:44:28'),
(27, 'Biji kapuk /Randu', 0, 0, 0, 0, 0, '2016-01-26 10:44:50', '2016-01-26 10:44:50'),
(28, 'Biji kapas', 0, 0, 0, 0, 0, '2016-01-26 10:45:01', '2016-01-26 10:45:01'),
(29, 'Tepung daun turi', 0, 0, 0, 0, 0, '2016-01-26 10:45:18', '2016-01-26 10:45:18'),
(30, 'Tepung daun lamtoro', 0, 0, 0, 0, 0, '2016-01-26 10:45:34', '2016-01-26 10:45:34'),
(31, 'Tepung daun ketela pohon', 0, 0, 0, 0, 0, '2016-01-26 10:45:58', '2016-01-26 10:45:58'),
(32, 'Isi perut besar hewan memamah biak', 0, 0, 0, 0, 0, '2016-01-26 10:46:46', '2016-01-26 10:46:46'),
(33, 'Ragi', 0, 0, 0, 0, 0, '2016-01-26 10:46:54', '2016-01-26 10:46:54'),
(34, 'Ampas bir', 0, 0, 0, 0, 0, '2016-01-26 10:47:03', '2016-01-26 10:47:03'),
(35, 'Tepung Petek', 0.6, 0, 0, 0, 9000, '2016-01-27 18:39:50', '2016-01-27 18:39:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pakan_komersil`
--

CREATE TABLE `pakan_komersil` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `berat` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pakan_komersil`
--

INSERT INTO `pakan_komersil` (`id`, `name`, `berat`, `harga`, `created_at`, `updated_at`) VALUES
(5, 'Sinta', 100, 25000, '2016-01-28 07:46:41', '2016-01-28 07:46:41');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pakan_komersil_untuk`
--

CREATE TABLE `pakan_komersil_untuk` (
  `id` int(11) NOT NULL,
  `pakan_komersil_id` int(11) NOT NULL,
  `fish_id` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pakan_komersil_untuk`
--

INSERT INTO `pakan_komersil_untuk` (`id`, `pakan_komersil_id`, `fish_id`, `updated_at`, `created_at`) VALUES
(1, 5, 11, '2016-01-28 07:46:41', '2016-01-28 07:46:41'),
(2, 5, 18, '2016-01-28 07:46:41', '2016-01-28 07:46:41'),
(3, 5, 19, '2016-01-28 07:46:41', '2016-01-28 07:46:41'),
(4, 6, 4, '2016-01-28 08:51:24', '2016-01-28 08:51:24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `profiles`
--

INSERT INTO `profiles` (`id`, `name`, `address`, `updated_at`, `created_at`) VALUES
(3, 'Aswinda Prima Putra', '', '2016-01-27 18:30:51', '2016-01-27 18:30:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rules`
--

CREATE TABLE `rules` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `karbohidrat` int(11) NOT NULL,
  `protein` int(11) NOT NULL,
  `lemak` int(11) NOT NULL,
  `air_zat_adiktif` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rules`
--

INSERT INTO `rules` (`id`, `name`, `karbohidrat`, `protein`, `lemak`, `air_zat_adiktif`, `updated_at`, `created_at`) VALUES
(1, 'A', 20, 40, 10, 30, '2016-01-22 02:31:08', '2016-01-22 02:31:08'),
(2, 'B', 8, 25, 40, 27, '2016-01-22 02:33:03', '2016-01-22 02:31:42'),
(3, 'C', 8, 35, 30, 27, '2016-01-26 09:50:34', '2016-01-26 09:50:34'),
(4, 'D', 8, 30, 35, 27, '2016-01-26 09:51:09', '2016-01-26 09:51:09'),
(5, 'E', 10, 35, 30, 25, '2016-01-26 09:51:45', '2016-01-26 09:51:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `rules_fish`
--

CREATE TABLE `rules_fish` (
  `id` int(11) NOT NULL,
  `fish_id` int(11) NOT NULL,
  `umur` enum('Larva','Juvenil','Induk') NOT NULL,
  `rules_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rules_fish`
--

INSERT INTO `rules_fish` (`id`, `fish_id`, `umur`, `rules_id`, `created_at`, `updated_at`) VALUES
(1, 3, 'Larva', 1, '2016-01-22 07:51:10', '2016-01-22 07:58:19'),
(3, 3, 'Juvenil', 2, '2016-01-22 07:59:03', '2016-01-22 07:59:03'),
(4, 4, 'Larva', 1, '2016-01-26 09:58:03', '2016-01-26 09:58:03'),
(5, 5, 'Larva', 1, '2016-01-26 09:58:11', '2016-01-26 09:58:11'),
(6, 21, 'Larva', 1, '2016-01-26 09:59:08', '2016-01-26 09:59:08'),
(7, 8, 'Larva', 1, '2016-01-26 09:59:32', '2016-01-26 09:59:32'),
(8, 9, 'Larva', 1, '2016-01-26 09:59:40', '2016-01-26 09:59:40'),
(9, 4, 'Juvenil', 2, '2016-01-26 10:00:27', '2016-01-26 10:00:27'),
(10, 5, 'Juvenil', 2, '2016-01-26 10:00:47', '2016-01-26 10:00:47'),
(11, 21, 'Juvenil', 2, '2016-01-26 10:01:01', '2016-01-26 10:01:01'),
(12, 8, 'Juvenil', 2, '2016-01-26 10:01:13', '2016-01-26 10:01:13'),
(13, 9, 'Juvenil', 2, '2016-01-26 10:01:28', '2016-01-26 10:01:28'),
(14, 3, 'Induk', 5, '2016-01-26 10:01:54', '2016-01-26 10:01:54'),
(15, 4, 'Induk', 5, '2016-01-26 10:02:31', '2016-01-26 10:02:31'),
(16, 5, 'Induk', 5, '2016-01-26 10:02:41', '2016-01-26 10:02:41'),
(17, 21, 'Induk', 5, '2016-01-26 10:02:52', '2016-01-26 10:02:52'),
(18, 8, 'Induk', 5, '2016-01-26 10:03:04', '2016-01-26 10:03:04'),
(19, 9, 'Induk', 5, '2016-01-26 10:03:16', '2016-01-26 10:03:16'),
(20, 10, 'Larva', 1, '2016-01-26 10:03:43', '2016-01-26 10:03:43'),
(21, 11, 'Larva', 1, '2016-01-26 10:03:56', '2016-01-26 10:03:56'),
(22, 12, 'Larva', 1, '2016-01-26 10:04:04', '2016-01-26 10:04:04'),
(23, 13, 'Larva', 1, '2016-01-26 10:04:13', '2016-01-26 10:04:13'),
(24, 14, 'Larva', 1, '2016-01-26 10:04:26', '2016-01-26 10:04:26'),
(25, 15, 'Larva', 1, '2016-01-26 10:04:36', '2016-01-26 10:04:36'),
(26, 16, 'Larva', 1, '2016-01-26 10:04:45', '2016-01-26 10:04:45'),
(27, 17, 'Larva', 1, '2016-01-26 10:04:51', '2016-01-26 10:04:51'),
(28, 10, 'Juvenil', 3, '2016-01-26 10:05:21', '2016-01-26 10:05:21'),
(29, 11, 'Juvenil', 3, '2016-01-26 10:05:35', '2016-01-26 10:05:35'),
(30, 12, 'Juvenil', 3, '2016-01-26 10:05:47', '2016-01-26 10:05:47'),
(31, 13, 'Juvenil', 3, '2016-01-26 10:06:30', '2016-01-26 10:06:30'),
(32, 14, 'Juvenil', 3, '2016-01-26 10:06:44', '2016-01-26 10:06:44'),
(33, 16, 'Juvenil', 3, '2016-01-26 10:06:54', '2016-01-26 10:06:54'),
(34, 17, 'Juvenil', 3, '2016-01-26 10:07:06', '2016-01-26 10:07:06'),
(35, 10, 'Induk', 5, '2016-01-26 10:07:29', '2016-01-26 10:07:29'),
(36, 11, 'Induk', 5, '2016-01-26 10:07:39', '2016-01-26 10:07:39'),
(37, 12, 'Induk', 5, '2016-01-26 10:07:49', '2016-01-26 10:07:49'),
(38, 13, 'Induk', 5, '2016-01-26 10:08:00', '2016-01-26 10:08:00'),
(39, 14, 'Induk', 5, '2016-01-26 10:08:14', '2016-01-26 10:08:14'),
(40, 15, 'Induk', 5, '2016-01-26 10:08:29', '2016-01-26 10:08:29'),
(41, 16, 'Induk', 5, '2016-01-26 10:08:45', '2016-01-26 10:08:45'),
(42, 17, 'Induk', 5, '2016-01-26 10:08:55', '2016-01-26 10:08:55'),
(43, 18, 'Larva', 1, '2016-01-26 10:09:22', '2016-01-26 10:09:22'),
(44, 19, 'Larva', 1, '2016-01-26 10:09:32', '2016-01-26 10:09:32'),
(45, 20, 'Larva', 1, '2016-01-26 10:09:39', '2016-01-26 10:09:39'),
(46, 7, 'Larva', 1, '2016-01-26 10:09:51', '2016-01-26 10:09:51'),
(47, 18, 'Juvenil', 4, '2016-01-26 10:10:18', '2016-01-26 10:10:18'),
(48, 19, 'Juvenil', 4, '2016-01-26 10:10:29', '2016-01-26 10:10:29'),
(49, 20, 'Juvenil', 4, '2016-01-26 10:10:40', '2016-01-26 10:10:40'),
(50, 7, 'Juvenil', 4, '2016-01-26 10:10:52', '2016-01-26 10:10:52'),
(51, 18, 'Induk', 5, '2016-01-26 10:11:24', '2016-01-26 10:11:24'),
(52, 19, 'Induk', 5, '2016-01-26 10:11:34', '2016-01-26 10:11:34'),
(53, 20, 'Induk', 5, '2016-01-26 10:11:45', '2016-01-26 10:11:45'),
(54, 7, 'Induk', 5, '2016-01-26 10:11:54', '2016-01-26 10:11:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(250) NOT NULL,
  `profile_id` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `remember_token` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `profile_id`, `updated_at`, `created_at`, `remember_token`) VALUES
(2, 'aswinda.pp@gmail.com', '$2y$10$eE/9mSy42GcK/s1c59D0g.TW1aHSG3ojU5a9Q2EDYCxp8O/LOL.Sq', 3, '2016-01-27 18:38:55', '2016-01-27 18:30:51', 'XKFonX7Lp1d7aenj8zGfbEl5yeJfhtqMpalBjV8FW5R2ZbjbsVbkehYTTi4j');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fish`
--
ALTER TABLE `fish`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakan`
--
ALTER TABLE `pakan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakan_komersil`
--
ALTER TABLE `pakan_komersil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakan_komersil_untuk`
--
ALTER TABLE `pakan_komersil_untuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rules`
--
ALTER TABLE `rules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rules_fish`
--
ALTER TABLE `rules_fish`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fish`
--
ALTER TABLE `fish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `pakan`
--
ALTER TABLE `pakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `pakan_komersil`
--
ALTER TABLE `pakan_komersil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pakan_komersil_untuk`
--
ALTER TABLE `pakan_komersil_untuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `rules`
--
ALTER TABLE `rules`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `rules_fish`
--
ALTER TABLE `rules_fish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
