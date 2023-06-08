-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 12, 2021 at 10:35 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clearmind`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `password`) VALUES
('kavi', 'kavi'),
('pavi', 'pavi'),
('rizka', 'rizka'),
('vithu', 'vithu');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`email`) VALUES
(''),
(''),
('rj@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

DROP TABLE IF EXISTS `request`;
CREATE TABLE IF NOT EXISTS `request` (
  `username` varchar(255) NOT NULL,
  `splid` varchar(255) NOT NULL,
  KEY `username` (`username`),
  KEY `splid` (`splid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`username`, `splid`) VALUES
('aj123', 'phy001'),
('aj123', 'phy001'),
('aj123', 'phy003'),
('aj123', 'dit003');

-- --------------------------------------------------------

--
-- Table structure for table `specialists`
--

DROP TABLE IF EXISTS `specialists`;
CREATE TABLE IF NOT EXISTS `specialists` (
  `splid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phoneno` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  PRIMARY KEY (`splid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specialists`
--

INSERT INTO `specialists` (`splid`, `name`, `phoneno`, `address`) VALUES
('dit001', 'Chethiya Wadugodapitiya', 23564845, 'baticalo'),
('dit002', 'Tiron Wickramasinghe', 58946123, 'puttalam'),
('dit003', 'Daniel Thambyrajah', 778945632, 'comlombo 8'),
('exe001', 'Dinuka Perera', 22345678, 'colombo'),
('exe002', 'Eva Priyanka Wegener', 703826464, 'jaffna'),
('exe003', 'Daniel Thambyrajah', 71458265, 'negambo'),
('phy001', 'Dr Romesh Jayasinghe Ph.D.(Psy.) Dh.C(Florida)', 112506004, 'colombo4'),
('phy002', 'Vinthiya Balachandran', 703826464, 'kandy'),
('phy003', 'M.N.L.Hakeem Niyas', 779373756, 'Colombo'),
('yoga001', 'Jagath Gunaratne', 115621455, 'colombo 7'),
('yoga002', 'Eva Priyanka Wegener', 778546921, 'jaffna'),
('yoga003', 'Shaunagh Aluwihare', 761245852, 'kandy');

-- --------------------------------------------------------

--
-- Table structure for table `totalcorrect`
--

DROP TABLE IF EXISTS `totalcorrect`;
CREATE TABLE IF NOT EXISTS `totalcorrect` (
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `totalcorrect`
--

INSERT INTO `totalcorrect` (`total`) VALUES
(57),
(64);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `fullname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` varchar(3) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fullname`, `username`, `email`, `age`, `password`) VALUES
('admin', 'admin', 'admin@gmail', '10', 'admin'),
('ajith', 'aj123', 'ajithdaniel2628@gmail.com', '18', 'admin'),
('danie', 'alan123', 'djgjg@sdjjf', '12', '123456');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`),
  ADD CONSTRAINT `request_ibfk_2` FOREIGN KEY (`splid`) REFERENCES `specialists` (`splid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
