-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 15, 2019 at 12:06 PM
-- Server version: 5.7.24
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jukebox`
--

-- --------------------------------------------------------

--
-- Table structure for table `jukebox`
--

CREATE TABLE `jukebox` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(127) DEFAULT NULL,
  `code` varchar(20) DEFAULT NULL,
  `author` varchar(127) DEFAULT NULL,
  `added_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jukebox`
--

INSERT INTO `jukebox` (`id`, `name`, `code`, `author`, `added_at`) VALUES
(12, 'Unforgiven', 'Ckom3gf57Yw', 'Metallica', '2019-02-15'),
(14, 'Black', '4q9UafsiQ6k', 'Pearl Jam', '2019-02-15'),
(15, 'Wish You Were Here', 'DPL_SV3n7IU', 'Pink Floyd', '2019-02-15'),
(16, 'Fast Car', 'DwrHwZyFN7M', 'Tracy Chapman', '2019-02-15'),
(17, 'Dark Necessities', 'Q0oIoR9mLwc', 'RHCP', '2019-02-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jukebox`
--
ALTER TABLE `jukebox`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jukebox`
--
ALTER TABLE `jukebox`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
