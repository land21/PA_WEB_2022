-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2022 at 03:14 PM
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
-- Database: `schedulekucing`
--

-- --------------------------------------------------------

--
-- Table structure for table `kucing`
--

CREATE TABLE `kucing` (
  `id` int(11) NOT NULL,
  `bnama` varchar(50) NOT NULL,
  `bjenis` varchar(50) NOT NULL,
  `knama` varchar(50) NOT NULL,
  `kkelamin` varchar(50) NOT NULL,
  `bbook` varchar(100) NOT NULL,
  `btrawat` varchar(100) NOT NULL,
  `kfoto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kucing`
--

INSERT INTO `kucing` (`id`, `bnama`, `bjenis`, `knama`, `kkelamin`, `bbook`, `btrawat`, `kfoto`) VALUES
(21, 'Alan Nuzulan', 'VACCINATION', 'Poci', 'BETINA', '2022-10-28T09:11', '2022-10-29T21:11', 'Poci.jpg'),
(22, 'Lobi', 'STERILIZATION', 'Supri', 'JANTAN', '2022-10-28T09:13', '2022-10-31T21:13', 'Supri.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kucing`
--
ALTER TABLE `kucing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kucing`
--
ALTER TABLE `kucing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
