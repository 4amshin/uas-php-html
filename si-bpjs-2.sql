-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2023 at 07:42 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si-bpjs-2`
--

-- --------------------------------------------------------

--
-- Table structure for table `dashboard-content`
--

CREATE TABLE `dashboard-content` (
  `id` int(11) NOT NULL,
  `menu_id` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dashboard-content`
--

INSERT INTO `dashboard-content` (`id`, `menu_id`, `title`, `content`) VALUES
(1, 'home-menu', 'Description', 'Hallo Website ini menyediakan informasi seputar BPJS Kesehatan Cabang Kota Palopo, seperti layanan, jenis layanan, fasilitas, dan lain-lainnya'),
(2, 'home-menu', 'Hero Image', 'https://tinyurl.com/lady-circle'),
(3, 'about-menu', 'Description', 'BPJS Kesehatan adalah Badan yang mengatur jaminan sosial masyarakat'),
(4, 'about-menu', 'Left Side Image', 'https://tinyurl.com/bpjs-office'),
(5, 'about-menu', 'Card Icon', 'https://tinyurl.com/fast-response'),
(6, 'about-menu', 'Card Text', 'Layanan Super Cepat'),
(7, 'contact-menu', 'Email', 'bpjskspalopo@gmail.com'),
(8, 'contact-menu', 'Phone', '08956458102'),
(9, 'img-menu', 'Footer Stakeholder White Logo', 'https://tinyurl.com/logo-white'),
(10, 'img-menu', 'Header White Logo', 'https://tinyurl.com/bpjs-ks-logo-white'),
(11, 'img-menu', 'Header Colorful Logo', 'https://tinyurl.com/bpjs-ks-logo');

-- --------------------------------------------------------

--
-- Table structure for table `dashboard-menu`
--

CREATE TABLE `dashboard-menu` (
  `id` int(11) NOT NULL,
  `menu_name` varchar(50) NOT NULL,
  `menu_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dashboard-menu`
--

INSERT INTO `dashboard-menu` (`id`, `menu_name`, `menu_id`) VALUES
(1, 'Home Section', 'home-menu'),
(2, 'About Section', 'about-menu'),
(3, 'Service Section', 'service-menu'),
(4, 'Contact Section', 'contact-menu'),
(5, 'Images Url', 'img-menu');

-- --------------------------------------------------------

--
-- Table structure for table `service-menu`
--

CREATE TABLE `service-menu` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `icon_url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service-menu`
--

INSERT INTO `service-menu` (`id`, `title`, `icon_url`) VALUES
(1, 'Registrasi Peserta PPU Badan Usaha', 'https://tinyurl.com/kartu-satu'),
(2, 'Layanan Peserta JKN-KIS', 'https://tinyurl.com/kartu-dua'),
(3, 'Informasi Fasilitas Kesehatan', 'https://tinyurl.com/kartu-tiga'),
(4, 'Skrining Riwayat Kesehatan', 'https://tinyurl.com/kartu-empat'),
(5, 'Registrasi Autodebit        ', 'https://tinyurl.com/kartu-lima'),
(6, 'Informasi, Pengaduan, Saran &amp; Aspirasi', 'https://tinyurl.com/kartu-enam');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'rely', '123'),
(2, 'admin', 'admin'),
(3, 'shin', 'shin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dashboard-content`
--
ALTER TABLE `dashboard-content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboard-menu`
--
ALTER TABLE `dashboard-menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service-menu`
--
ALTER TABLE `service-menu`
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
-- AUTO_INCREMENT for table `dashboard-content`
--
ALTER TABLE `dashboard-content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `dashboard-menu`
--
ALTER TABLE `dashboard-menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `service-menu`
--
ALTER TABLE `service-menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
