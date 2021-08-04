-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2017 at 07:55 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hiring`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `firstname`, `lastname`, `username`, `password`) VALUES
(1, 'Munezero', 'Smayah', 'sanyu', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `allow`
--

CREATE TABLE IF NOT EXISTS `allow` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `fullnames` varchar(34) NOT NULL,
  `house_id` int(34) NOT NULL,
  `phone` int(34) NOT NULL,
  `address` varchar(43) NOT NULL,
  `nation` varchar(23) NOT NULL,
  `A_date` date NOT NULL,
  `A_time` time NOT NULL,
  `operation_date` date NOT NULL,
  `image` longblob NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `allow`
--

INSERT INTO `allow` (`ID`, `fullnames`, `house_id`, `phone`, `address`, `nation`, `A_date`, `A_time`, `operation_date`, `image`) VALUES
(1, 'litco', 1, 123456, 'gatsata', 'burundi', '2017-08-07', '00:00:12', '2017-08-07', 0x312e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `ID` int(12) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(20) NOT NULL,
  `username` varchar(23) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`ID`, `firstname`, `lastname`, `email`, `phone`, `username`, `password`) VALUES
(1, 'Haruna', 'ba', 'harunamuhirwe@gmail.com', 723729415, 'ba', '123'),
(2, 'Haruna', 'ba', 'harunamuhirwe@gmail.com', 723729415, 'ba', '123'),
(5, 'humure ', 'haruna', 'harunab@gmail.com', 789954567, 'harunab', '123');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `fullnames` varchar(20) NOT NULL,
  `contact` int(15) NOT NULL,
  `message` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hire`
--

CREATE TABLE IF NOT EXISTS `hire` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `fullnames` varchar(20) NOT NULL,
  `house_id` int(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(12) NOT NULL,
  `nation` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `hire`
--

INSERT INTO `hire` (`ID`, `fullnames`, `house_id`, `phone`, `address`, `nation`) VALUES
(1, 'harunab', 2, '0344', 'remera', 'rwanda'),
(2, 'litco', 1, '123456', 'gatsata', 'burundi');

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE IF NOT EXISTS `house` (
  `image` varchar(45) NOT NULL,
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`image`, `ID`, `description`) VALUES
('better.jpg', 1, 'Is located in kagugu\r\nIt have 2rooms in down loof and 3rooms up loof\r\ntoilet and shower in and out\r\nand parking\r\ncost 1,000,000 per month'),
('kabu.jpg', 2, 'Is located in remera\r\nIt have 3rooms in down loof and 2rooms up loof\r\ntoilet and shower in and out\r\nand parking\r\ncost200,000 per month');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
