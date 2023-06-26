-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Jun 2023 pada 20.27
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `balluas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `club`
--

CREATE TABLE `club` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `id_negara` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `club`
--

INSERT INTO `club` (`id`, `nama`, `id_negara`) VALUES
(1, 'Sporting Lisbon FC', 1),
(2, 'Manchester City', 9),
(3, 'Manchester United', 9),
(4, 'Real Madrid', 8),
(5, 'Barcelona', 8),
(6, 'Paris Saint Germain', 7),
(7, 'Inter Milan', 31),
(8, 'AC Milan', 31),
(9, 'AS Roma', 31),
(10, 'Bayern Munich', 10),
(11, 'Borussia Dortmund', 10),
(12, 'Santos', 4),
(13, 'AL NASSR', 5),
(14, 'Borneo FC', 18),
(15, 'Ajax', 2),
(16, 'River Plate', 3),
(17, 'ANTWERP', 6),
(18, 'CA Penarol', 11),
(19, 'Inter Miami', 12),
(20, 'Gorica', 13),
(21, 'Servette', 14),
(22, 'Johor Darul Ta\'zim', 19),
(23, 'Brondby IF', 20),
(24, 'Bangkok United', 22),
(25, 'Ha Noi', 23),
(26, 'pikine', 25),
(27, 'FORGE FC', 27),
(28, 'Sagan Tosu', 16),
(29, 'Melbourne City', 21),
(30, 'Akosombo Sparks FC', 24);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_25_060641_create_pemains_table', 1),
(6, '2023_06_25_062532_create_clubs_table', 2),
(7, '2023_06_25_062555_create_negaras_table', 2),
(8, '2023_06_25_062611_create_sepatus_table', 2),
(9, '2023_06_25_063127_create_sepatupemain_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `negara`
--

CREATE TABLE `negara` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `negara`
--

INSERT INTO `negara` (`id`, `nama`) VALUES
(1, 'Portugal'),
(2, 'Belanda'),
(3, 'Argentina'),
(4, 'Brazil'),
(5, 'Arab Saudi'),
(6, 'Belgia'),
(7, 'Francis'),
(8, 'Spanyol'),
(9, 'Inggris'),
(10, 'Germany'),
(11, 'Uruguay'),
(12, 'Amerika Serikat'),
(13, 'Croatia'),
(14, 'Swiss'),
(15, 'Mexico'),
(16, 'Jepang'),
(17, 'Polandia'),
(18, 'Indonesia'),
(19, 'Malaysia'),
(20, 'Denmark'),
(21, 'Australia'),
(22, 'Thailand'),
(23, 'Vietnam'),
(24, 'Ghana'),
(25, 'Senegal'),
(26, 'Wales'),
(27, 'Canada'),
(28, 'Maroco'),
(29, 'Korea Selatan'),
(30, 'Singapura'),
(31, 'Italia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemains`
--

CREATE TABLE `pemains` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_punggung` bigint(20) UNSIGNED NOT NULL,
  `id_club` bigint(20) UNSIGNED NOT NULL,
  `id_negara` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pemains`
--

INSERT INTO `pemains` (`id`, `nama`, `no_punggung`, `id_club`, `id_negara`) VALUES
(1, 'Ronaldo', 7, 1, 1),
(2, 'Phil Foden', 20, 2, 9),
(3, 'Jack Grealish', 7, 2, 9),
(4, 'Kalvin Phillips', 14, 2, 9),
(5, 'Kyle Walker', 2, 2, 9),
(6, 'John Stones', 5, 2, 9),
(7, 'Ederson', 31, 2, 4),
(8, 'Scott Carson', 33, 2, 9),
(9, 'Ruben Dias', 3, 2, 1),
(10, 'Nathan Ake', 6, 2, 2),
(11, 'Aymeric Laporte', 14, 2, 7),
(12, 'Sergio Gomez', 21, 2, 8),
(13, 'Benjamin Mendy', 22, 2, 7),
(14, 'Manuel Akanji', 25, 2, 14),
(15, 'Kevin De Bruyne', 17, 2, 6),
(16, 'Ilkay Gundogan', 8, 2, 10),
(17, 'Julian Alvarez', 19, 2, 3),
(18, 'Riyad Mahrez', 26, 2, 5),
(19, 'David de Gea', 1, 3, 8),
(20, 'Victor Lindelof', 2, 3, 21),
(21, 'Lisandro Martinez', 6, 3, 3),
(22, 'Tyrell Malacia', 12, 3, 29),
(23, 'Raphael Varane', 19, 3, 7),
(24, 'Diogo Dalot', 20, 3, 1),
(25, 'Eriksen', 15, 3, 20),
(26, 'Facundo Pellistri', 28, 3, 11),
(27, 'Anthony Elanga', 36, 3, 17),
(28, 'Thibaut Courtois', 1, 4, 6),
(29, 'Andriy Lunin', 13, 4, 13),
(30, 'Eder Militao', 3, 4, 4),
(31, 'David Alaba', 4, 4, 21),
(32, 'Federico Valverde', 15, 4, 11),
(33, 'Karim Banzema', 9, 4, 7),
(34, 'Eden Hazard', 7, 4, 6),
(35, 'Ronald Araujo', 4, 5, 11),
(36, 'Andreas Christensen', 15, 5, 20),
(37, 'Miralem Pjanic', 16, 5, 27),
(38, 'Robert Lewandowski', 9, 5, 17),
(39, 'Keylor Navas', 1, 6, 13),
(40, 'Achraf Hakimi', 2, 6, 28),
(41, 'Neymar', 10, 6, 4),
(42, 'Lionel Messi', 30, 6, 3),
(43, 'Kylian Mbappe', 7, 6, 7),
(44, 'Remelu Lukaku', 90, 7, 6),
(45, 'Samir Handanovic', 1, 7, 26),
(46, 'Edin Dzeko', 9, 7, 15),
(47, 'Milan Skriniar', 37, 7, 20),
(48, 'Sergino Dest', 21, 8, 12),
(49, 'Fode Ballo-Toure', 5, 8, 25),
(50, 'Ismael Bennacer', 4, 8, 28),
(51, 'Alexis Saelemaekers', 56, 8, 31),
(52, 'Matias Vina', 17, 9, 11),
(53, 'Nicola Zalewski', 59, 9, 31),
(54, 'Yann Sommer', 27, 10, 31),
(55, 'Alphonso Davies', 19, 10, 27),
(56, 'Bouna Sarr', 20, 10, 25),
(57, 'Noussair Mazraoui', 40, 10, 28),
(58, 'Josip Stanisic', 44, 10, 13),
(59, 'Thomas Muller', 25, 10, 10),
(60, 'Sadio Mane', 17, 10, 25),
(61, 'Gregor Kobel', 1, 11, 14),
(62, 'Marwin Hitz', 35, 11, 14),
(63, 'Giovanni Reyna', 7, 11, 12),
(64, 'Vladimir', 1, 12, 4),
(65, 'Rodrigo Fernandez', 14, 12, 11),
(66, 'Stiven Mendoza', 20, 12, 15),
(67, 'Amin Bukhari', 1, 13, 5),
(68, 'Sultan Al-Ghannam', 2, 13, 5),
(69, 'Abdullah Madu', 3, 13, 5),
(70, 'Ali Al-Hassan', 19, 13, 5),
(71, 'Muhammad Zulfikri', 40, 14, 18),
(72, 'Wildansyah', 4, 14, 18),
(73, 'Kei Hirose', 8, 14, 16),
(74, 'Terens Puhiri', 28, 14, 18),
(75, 'Florian Grillitsch', 21, 15, 21),
(76, 'Mohammed Kudus', 20, 15, 24),
(77, 'Edson Alvarez', 4, 15, 15),
(78, 'Jonatan Maidana', 4, 16, 3),
(79, 'Enzo Diaz', 13, 16, 3),
(80, 'Andres Herrera', 15, 16, 3),
(81, 'Ritchie De Laet', 2, 17, 6),
(82, 'Björn Engels', 3, 17, 6),
(83, 'Koji Miyoshi', 19, 17, 16),
(84, 'Thiago Cardozo', 1, 18, 11),
(85, 'Rodrigo Saravia', 6, 18, 11),
(86, 'Jake LaCava', 12, 19, 12),
(87, 'Robbie Robinson', 19, 19, 12),
(88, 'Ante Matej Jurić', 7, 20, 13),
(89, 'Vinko Skrbin', 17, 20, 13),
(90, 'Steve Rouiller', 4, 21, 14),
(91, 'Dereck Kutesa', 17, 21, 14),
(92, 'Farizal Marlias', 1, 22, 19),
(93, 'Ramadhan Saifullah', 17, 22, 19),
(94, 'Aidil Zafuan', 7, 22, 19),
(95, 'Frederik Winther', 4, 23, 20),
(96, 'Thomas Mikkelsen', 16, 23, 20),
(97, 'T. Muaddarak', 17, 24, 22),
(98, 'Chananan Pombuppha', 20, 24, 22),
(99, 'C. Tapsuvanavon', 21, 24, 22),
(100, 'Nguyễn Thành Chung', 16, 25, 23),
(101, 'Nguyễn Văn Công', 18, 25, 23),
(102, 'C. Tapsuvanavon', 12, 26, 25),
(103, 'A. Diouf', 8, 26, 25),
(104, 'K. Chiba', 17, 27, 27),
(105, 'M.Duncan', 2, 27, 27),
(106, 'Kosuke Yamazaki', 2, 28, 16),
(107, 'Jun Nishikawa', 18, 28, 16),
(108, 'Scott Galloway', 2, 29, 21),
(109, 'Jordon Hall', 18, 29, 21),
(110, 'Andrew Nabbout', 15, 29, 30),
(111, 'Nuno Reis', 4, 29, 1),
(112, 'Danilo Pereira', 15, 6, 1),
(113, 'Mauro Icardi', 9, 6, 3),
(114, 'Juan Bernat', 14, 6, 8),
(115, 'Sergio Ramos', 4, 6, 8),
(116, 'A.Nupaya', 3, 30, 24),
(117, 'A.Amadu', 12, 30, 24),
(118, 'Y. Dwomoh', 14, 30, 24),
(119, 'B. Asante', 38, 30, 24),
(120, 'Alhassan Nupaya', 7, 30, 24);

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `sepatu`
--

CREATE TABLE `sepatu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sepatu` varchar(255) NOT NULL,
  `ukuran` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sepatu`
--

INSERT INTO `sepatu` (`id`, `sepatu`, `ukuran`) VALUES
(1, 'Adiddas Copa Sense.1 Firm Ground Boots', 43),
(2, 'adidas Predator Edge.3 Laceless Firm Ground', 42),
(3, 'adidas X Speedflow Messi.1 Firm Ground Boots', 41),
(4, 'adidas Copa Sense.1 Firm Ground Boots', 40),
(5, 'X Speedportal.3 Firm Ground Cleats', 44),
(6, 'adidas Predator Edge.3 Indoor Boots', 43),
(7, 'adidas X Speedportal Messi.3 Indoor Shoes', 42),
(8, 'adidas Predator Edge.3 Low Firm Ground Boots', 44),
(9, 'adidas X Speedflow.4 Flexible Ground Boots', 45),
(10, 'adidas Copa Sense.4 Flexible Ground Boots', 43),
(11, 'Nike Phantom GT2 Club TF', 40),
(12, 'Nike Mercurial Vapor 14 Academy FG/MG', 44),
(13, 'Nike Phantom GT Scorpion FG', 42),
(14, 'Nike Premier 3 FG', 44),
(15, 'Nike Nike Tiempo Legend 9 Academy TF', 43),
(16, 'Nike Phantom GT Elite 3D FG', 42),
(17, 'Nike Phantom GT2 Academy MG', 45),
(18, 'Nike Zoom Mercurial Superfly 9 Elite KM FG', 40),
(19, 'Nike Zoom Mercurial Vapor 15 Academy CR7 TF', 42),
(20, 'Nike Mercurial Vapor 13 Academy MG', 40),
(21, 'PUMA PUMA x BATMAN FUTURE 1.3 FG/AG', 42),
(22, 'PUMA FUTURE ULTIMATE FG/AG', 44),
(23, 'Puma Neymar Jr FUTURE 2.4 FG/AG Football Boots Men', 42),
(24, 'Puma Future Ultimate FG/AG Football Boots', 42),
(25, 'Puma Future Ultimate Crea Shoes', 41),
(26, 'Puma X Spongebob Future Rider', 43),
(27, 'PUMA ULTRA PLAY FG/AG Men\'s Soccer', 44),
(28, 'PUMA ULTRA 1.1 LUMINIOS PURPLE FG', 43),
(29, 'Puma Future Z 1.1 Full White', 45),
(30, 'Puma Future Z 3.2 FG Green Glare', 42);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sepatupemain`
--

CREATE TABLE `sepatupemain` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pemain` bigint(20) UNSIGNED NOT NULL,
  `id_sepatu` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sepatupemain`
--

INSERT INTO `sepatupemain` (`id`, `id_pemain`, `id_sepatu`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 1),
(4, 4, 1),
(5, 5, 1),
(6, 6, 1),
(7, 7, 1),
(8, 8, 12),
(9, 9, 12),
(10, 10, 1),
(11, 11, 2),
(12, 12, 2),
(13, 13, 2),
(14, 14, 2),
(15, 15, 2),
(16, 16, 2),
(17, 17, 2),
(18, 18, 2),
(19, 19, 12),
(20, 20, 12),
(21, 21, 3),
(22, 22, 3),
(23, 23, 3),
(24, 24, 3),
(25, 25, 3),
(26, 26, 4),
(27, 27, 4),
(28, 28, 4),
(29, 29, 4),
(30, 30, 4),
(31, 31, 5),
(32, 32, 5),
(33, 33, 5),
(34, 34, 5),
(35, 35, 5),
(36, 36, 6),
(37, 37, 6),
(38, 38, 6),
(39, 39, 6),
(40, 40, 6),
(41, 41, 7),
(42, 42, 7),
(43, 43, 7),
(44, 44, 8),
(45, 45, 8),
(46, 46, 9),
(47, 47, 9),
(48, 48, 9),
(49, 49, 9),
(50, 50, 10),
(51, 51, 11),
(52, 52, 11),
(53, 53, 11),
(54, 54, 11),
(55, 55, 11),
(56, 56, 12),
(57, 57, 13),
(58, 58, 13),
(59, 59, 13),
(60, 60, 13),
(61, 61, 14),
(62, 62, 14),
(63, 63, 14),
(64, 64, 14),
(65, 65, 14),
(66, 66, 15),
(67, 67, 15),
(68, 68, 15),
(69, 69, 15),
(70, 70, 15),
(71, 71, 16),
(72, 72, 16),
(73, 73, 16),
(74, 74, 16),
(75, 75, 16),
(76, 76, 17),
(77, 77, 17),
(78, 78, 17),
(79, 79, 17),
(80, 80, 17),
(81, 81, 18),
(82, 82, 19),
(83, 83, 19),
(84, 84, 19),
(85, 85, 19),
(86, 86, 20),
(87, 87, 20),
(88, 88, 20),
(89, 89, 20),
(90, 90, 20),
(91, 91, 21),
(92, 92, 21),
(93, 93, 21),
(94, 94, 21),
(95, 95, 21),
(96, 96, 22),
(97, 97, 22),
(98, 98, 22),
(99, 99, 22),
(100, 100, 22),
(101, 101, 23),
(102, 102, 23),
(103, 103, 23),
(104, 104, 23),
(105, 105, 23),
(106, 106, 24),
(107, 107, 24),
(108, 108, 24),
(109, 109, 24),
(110, 110, 24),
(111, 111, 25),
(112, 112, 25),
(113, 113, 25),
(114, 114, 26),
(115, 115, 26),
(116, 116, 26),
(117, 117, 27),
(118, 118, 28),
(119, 119, 29),
(120, 120, 30);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'saiwan', 'syayuwanrezqi@gmail.com', NULL, '$2y$10$7lMS2i3eSzCqQwA1Imf6VumUy0ussFtykFM73HeXNRCpsQTVhBkxa', NULL, '2023-06-24 22:53:57', '2023-06-24 22:53:57'),
(2, 'saiwan', 'rezqisaiwan@gmail.com', NULL, '$2y$10$rDlvJQtJvq3Fbs7SQo1ajOKckrRWDM4vwovwDDMQfaZsMAffoOc76', NULL, '2023-06-25 07:50:11', '2023-06-25 07:50:11');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `negara`
--
ALTER TABLE `negara`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pemains`
--
ALTER TABLE `pemains`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `sepatu`
--
ALTER TABLE `sepatu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sepatupemain`
--
ALTER TABLE `sepatupemain`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `club`
--
ALTER TABLE `club`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `negara`
--
ALTER TABLE `negara`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT untuk tabel `pemains`
--
ALTER TABLE `pemains`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `sepatu`
--
ALTER TABLE `sepatu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `sepatupemain`
--
ALTER TABLE `sepatupemain`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
