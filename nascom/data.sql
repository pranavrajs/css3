-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 06, 2014 at 12:29 PM
-- Server version: 5.5.37-cll
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `maangalz_pg`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `appno` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `ccredit` varchar(255) NOT NULL,
  `ccgpa` varchar(255) NOT NULL,
  `cocredit` varchar(255) NOT NULL,
  `cocgpa` varchar(255) NOT NULL,
  `nss` varchar(255) NOT NULL,
  `hs` varchar(255) NOT NULL,
  `uty` varchar(255) NOT NULL,
  `fs` varchar(255) NOT NULL,
  `caste` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `appno`, `name`, `ccredit`, `ccgpa`, `cocredit`, `cocgpa`, `nss`, `hs`, `uty`, `fs`, `caste`) VALUES
(4, '33', 'koran', '62', '3.56', '16', '3.67', '0', '1', '1', '3.7512', '4'),
(2, '345', 'pooja', '62', '3.33', '16', '3.45', '0', '1', '1', '3.5109', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
