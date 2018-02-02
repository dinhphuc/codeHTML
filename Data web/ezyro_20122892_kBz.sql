-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: sql302.ezyro.com
-- Generation Time: Nov 06, 2017 at 09:40 AM
-- Server version: 5.6.35-81.0
-- PHP Version: 5.3.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ezyro_20122892_kBz`
--

-- --------------------------------------------------------

--
-- Table structure for table `Account`
--

CREATE TABLE IF NOT EXISTS `Account` (
  `ID` int(11) NOT NULL,
  `Name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Token` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Account`
--

INSERT INTO `Account` (`ID`, `Name`, `Token`) VALUES
(1, 'Đình Phúc', '1'),
(5, 'DDC', 'EAAAAUaZA8jlABAG0HjQNsFZBywqzb2kOCPWFy4qBI98M8vWqZBjfrKWnq3ap4F4hOV3eItO7nb3Ae2xUUgLEwc2ZAU0uEVbuGzraxJtCRWtCWpwFBuX2LrN6r9OTYOvKstvC0nYHhA1i10h4hOA8okeda0ZAZCXLMTpZADp5oYA9wZDZD'),
(2, 'Thanh Hằng', 'EAAAAUaZA8jlABAOlyLI5U2t3H9oipmGL1GbYsslzIf1jA2SuwZCZAYltLLvQn5ovXzLSDeY2uQdsZCqEdNHbZCW2eZCOLfZB2heBwQSGYw1JeZCXPzsbiJkKlZBCa6TlxczaOgl83YY7BvuE2g8Xcj6TtxdZCiglyZAosUZD'),
(3, 'Duyên', 'EAAAAUaZA8jlABAA2eYnHYOcFZCmJOcYBah7w47ylAV9G8UWR4Q1ZC7nbmHM5oxd92H9BYZArXZBqSnHn5aXPK3fGLpmxcIC8ZANZBssgfE7ZCkPP7ICRiUR8NnBmHFWdiSDnKm5pNIfHmsZA1GPzYHVwNClxOyfT9sdbxPw3Teb45rAZDZD'),
(4, 'TTN', 'EAAAAAYsX7TsBANNpCm3MTUWfO2F3CjPIq6KPXho4gZCXhfttjLQINzZBJzDZBCQPfpWyo7Pd76fukKZCkHhd1ij3DK1XobVJjZCLGjuDJ792hQ7YGeuyVDZBZCZCgNvn4AtrL9zRLClbuyjKsgtTM7wcKjkBsvCQQxlWpyQ66uMfbtfBwYTyl25mbuMZBpNsbFYZChpaidlIiW3IPuQqnmz6JZC');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` text NOT NULL,
  `password` text NOT NULL
   PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
