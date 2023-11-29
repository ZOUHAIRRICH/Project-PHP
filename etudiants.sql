-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3309
-- Generation Time: Nov 29, 2023 at 02:40 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etudiants`
--
CREATE DATABASE IF NOT EXISTS `etudiants` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `etudiants`;

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `ddn` date NOT NULL,
  `tel` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`id`, `nom`, `age`, `ddn`, `tel`) VALUES
(1, 'Ahmed', 20, '2003-06-01', '0612345678'),
(2, 'Fatima', 22, '2001-05-12', '0623456789'),
(3, 'Mohamed', 21, '2002-08-23', '0634567890'),
(4, 'Amina', 19, '2004-02-14', '0645678901'),
(5, 'Youssef', 20, '2003-11-05', '0656789012'),
(6, 'Sara', 22, '2001-04-16', '0667890123'),
(7, 'Tazi Ali', 21, '2002-11-08', '0677289825'),
(9, 'Ahmed', 20, '2003-01-01', '0612345678'),
(10, 'Fatima', 22, '2001-05-12', '0623456789'),
(11, 'Mohamed', 21, '2002-08-23', '0634567890'),
(12, 'Amina', 19, '2004-02-14', '0645678901');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
