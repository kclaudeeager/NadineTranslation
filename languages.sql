-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 08:03 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `translation`
--

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(15) NOT NULL,
  `Variable` varchar(35) NOT NULL,
  `Kinyarwanda` varchar(35) NOT NULL,
  `Kiswahili` varchar(35) NOT NULL,
  `English` varchar(35) NOT NULL,
  `French` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `Variable`, `Kinyarwanda`, `Kiswahili`, `English`, `French`) VALUES
(1, 'vida', 'ubuzima', 'maisha', 'life', 'vie'),
(2, 'amor', 'urukundo', 'upendo', 'love', 'aimer'),
(3, 'reír', 'guseka', 'Cheka', 'laugh', 'rire'),
(4, 'paz', 'amahoro', 'amani', 'peace', 'paix'),
(5, 'sendero', 'inzira', 'njia', 'path', 'chemin'),
(6, 'Iglesia', 'urusengero', 'kanisa', 'church', 'église'),
(7, 'bienvenidos', 'murakaza neza', 'karibu', 'welcome', 'bienvenu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
