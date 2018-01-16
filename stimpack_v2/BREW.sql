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
-- Table structure for table `BREW`
--

CREATE TABLE IF NOT EXISTS `BREW` (
  `ID` int(10) NOT NULL,
  `Brew` varchar(255) NOT NULL,
  `Type` varchar(255) NOT NULL,
  `Gallons` int(5) NOT NULL,
  `Created Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Completed Date` date DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `BREW`
--

INSERT INTO `BREW` (`ID`, `Brew`, `Type`, `Gallons`, `Created Date`, `Completed Date`) VALUES
(1, 'Mark', 'IPA', 5, '2016-09-30 06:00:00', NULL),
(2, 'Mark', '2', 2, '2016-09-30 06:00:00', NULL),
(3, 'chris', 'hops', 1, '2016-09-30 06:00:00', NULL),
(4, 'chris', 'hops', 1, '2016-09-30 06:00:00', NULL),
(5, 'Drakes IPA', 'IPA', 5, '2016-09-30 06:00:00', NULL),
(6, 'Test1', 'IPA', 5, '2016-10-21 06:00:00', NULL),
(7, 'another beer test', 'Lager', 1, '2017-01-16 07:00:00', NULL),
(8, 'Gotta Love It IPA', 'IPA', 5, '2017-03-30 06:00:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `BREW`
--
ALTER TABLE `BREW`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `BREW`
--
ALTER TABLE `BREW`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
