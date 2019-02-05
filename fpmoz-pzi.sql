-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 05, 2019 at 10:23 AM
-- Server version: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.11-4+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fpmoz-pzi`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `ime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prezime` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `korisnicko_ime` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `jmbg` char(13) COLLATE utf8_unicode_ci NOT NULL,
  `lozinka` varchar(256) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `prezime`, `korisnicko_ime`, `jmbg`, `lozinka`) VALUES
(1, 'Daniel', 'Vasic', 'dvasic', '1233456789123', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `proizvod`
--

CREATE TABLE `proizvod` (
  `id` int(11) NOT NULL,
  `naziv` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cijena` float NOT NULL,
  `slika` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proizvod`
--
ALTER TABLE `proizvod`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `proizvod`
--
ALTER TABLE `proizvod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
