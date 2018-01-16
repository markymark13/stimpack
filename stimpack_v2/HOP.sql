-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 15, 2018 at 05:32 PM
-- Server version: 5.6.32-78.1-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `winterma_homebrew`
--

-- --------------------------------------------------------

--
-- Table structure for table `HOP`
--

CREATE TABLE IF NOT EXISTS `HOP` (
  `ID` int(10) NOT NULL,
  `Hop` varchar(255) NOT NULL,
  `Amount` int(10) NOT NULL,
  `Time` int(5) NOT NULL,
  `Use` varchar(255) NOT NULL,
  `Brew ID` int(10) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `HOP`
--

INSERT INTO `HOP` (`ID`, `Hop`, `Amount`, `Time`, `Use`, `Brew ID`) VALUES
(1, 'Cascase', 5, 60, 'Boil', 6),
(2, 'Colunbis', 2, 40, 'Boil', 6),
(3, '', 0, 0, 'Boil', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `HOP`
--
ALTER TABLE `HOP`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `HOP`
--
ALTER TABLE `HOP`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
