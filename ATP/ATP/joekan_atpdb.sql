-- phpMyAdmin SQL Dump
-- version 4.3.7
-- http://www.phpmyadmin.net
--
-- Host: 10.123.0.85:3307
-- Generation Time: Oct 24, 2017 at 10:05 PM
-- Server version: 5.6.27
-- PHP Version: 5.4.45-0+deb7u11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `joekan_atpdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `atp_selections`
--

CREATE TABLE IF NOT EXISTS `atp_selections` (
  `selection_name` text COLLATE utf8_unicode_ci NOT NULL,
  `selection` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `atp_selections`
--

INSERT INTO `atp_selections` (`selection_name`, `selection`) VALUES
('van', '{"name":"Vanilla Cupcake","Description":"A tasty vanilla cupcake.","Price":"$3.99","Image":"<img src=''vancup.jpg'' />"}'),
('choc', '{"name":"Chocolate Cupcake","Description":"A tasty chocolate cupcake.","Price":"$4.99","Image":"<img src=''choccup.jpg'' />"}'),
('red', '{"name":"Red Velvet Cupcake","Description":"A tasty red velvet cupcake.","Price":"$5.99","Image":"<img src=''redcup.jpg'' />"}'),
('rock', '{"name":"Rock Candy","Description":"Delcious, crystalline rock candy!","Price":"$6.99","Image":"<img src=''rock.jpg'' />"}');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
