-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Värd: localhost
-- Skapad: 19 sep 2013 kl 12:42
-- Serverversion: 5.6.12-log
-- PHP-version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databas: `results`
--
CREATE DATABASE IF NOT EXISTS `results` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `results`;

-- --------------------------------------------------------

--
-- Tabellstruktur `competition`
--

CREATE TABLE IF NOT EXISTS `competition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=84 ;

--
-- Dumpning av Data i tabell `competition`
--

INSERT INTO `competition` (`id`, `name`, `link`, `year`, `type`) VALUES
(1, 'SM stafett 2012', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=23041', 2012, 1),
(2, 'SM stafett 2011', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=18660', 2011, 1),
(3, 'SM stafett 2010', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=15161', 2010, 1),
(4, 'SM stafett 2009', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=12671', 2009, 1),
(5, 'SM stafett 2008', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=10482', 2008, 1),
(6, 'SM stafett 2007', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=8474', 2007, 1),
(7, 'SM stafett 2006', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=6718', 2006, 1),
(8, 'SM stafett 2005', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=5253', 2005, 1),
(9, 'SM budkavle 2004', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=3731', 2004, 1),
(10, 'SM budkavle 2003', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=2889', 2003, 1),
(11, 'SM budkavle 2002', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=2016', 2002, 1),
(12, 'SM budkavle 2001', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=1292', 2001, 1),
(13, 'SM budkavle 2000', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=633', 2000, 1),
(14, 'SM budkavle 1999', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=214', 1999, 1),
(15, 'SM LÃ¥ng 2012', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=22926', 2012, 2),
(16, 'SM LÃ¥ng 2011', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=18574', 2011, 2),
(17, 'SM LÃ¥ng 2010', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=15075', 2010, 2),
(18, 'SM LÃ¥ng 2009', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=12743', 2009, 2),
(19, 'SM LÃ¥ng 2008', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=10412', 2008, 2),
(20, 'SM LÃ¥ng 2007', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=8419', 2007, 2),
(21, 'SM LÃ¥ng 2006', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=6663', 2006, 2),
(22, 'SM LÃ¥ng 2005', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=5173', 2005, 2),
(23, 'SM Klassisk 2004', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=3696', 2004, 2),
(24, 'SM Klassisk 2003', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=2841', 2003, 2),
(25, 'SM Klassisk 2002', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=1983', 2002, 2),
(26, 'SM Klassisk 2001', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=1280', 2001, 2),
(27, 'SM Klassisk 2000', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=610', 2000, 2),
(28, 'SM Klassisk 1999', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=207', 1999, 2),
(29, 'SM Klassisk 1998', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=39', 1998, 2),
(30, 'SM Medel 2012', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=22926', 2012, 3),
(31, 'SM Medel 2011', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=18574', 2011, 3),
(32, 'SM Medel 2010', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=15075', 2010, 3),
(33, 'SM Medel 2009', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=12743', 2009, 3),
(34, 'SM Medel 2008', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=10412', 2008, 3),
(35, 'SM Medel 2007', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=8419', 2007, 3),
(36, 'SM Medel 2006', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=6663', 2006, 3),
(37, 'SM Medel 2005', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=5173', 2005, 3),
(38, 'SM Kort 2004', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=3696', 2004, 3),
(39, 'SM Kort 2003', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=2841', 2003, 3),
(40, 'SM Kort 2002', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=1983', 2002, 3),
(41, 'SM Kort 2001', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=1280', 2001, 3),
(42, 'SM Kort 2000', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=610', 2000, 3),
(43, 'SM Kort 1999', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=207', 1999, 3),
(44, 'SM Kort 1998', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=39', 1998, 3),
(45, 'SM Sprint 2013', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=24990', 2013, 4),
(46, 'SM Sprint 2012', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=22482', 2012, 4),
(47, 'SM Sprint 2011', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=16663', 2011, 4),
(48, 'SM Sprint 2010', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=14116', 2010, 4),
(49, 'SM Sprint 2009', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=9655', 2009, 4),
(50, 'SM Sprint 2008', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=9373', 2008, 4),
(51, 'SM Sprint 2007', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=7435', 2007, 4),
(52, 'SM Sprint 2006', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=6746', 2006, 4),
(53, 'SM Sprint 2005', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=4700', 2005, 4),
(54, 'SM Sprint 2004', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=3443', 2004, 4),
(55, 'SM Sprint 2003', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=2833', 2003, 4),
(56, 'SM Natt 2013', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=24968', 2013, 5),
(57, 'SM Natt 2012', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=22449', 2012, 5),
(58, 'SM Natt 2011', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=16637', 2011, 5),
(59, 'SM Natt 2010', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=13884', 2010, 5),
(60, 'SM Natt 2009', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=13005', 2009, 5),
(61, 'SM Natt 2008', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=9286', 2008, 5),
(62, 'SM Natt 2007', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=7416', 2007, 5),
(63, 'SM Natt 2006', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=6688', 2006, 5),
(64, 'SM Natt 2005', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=5209', 2005, 5),
(65, 'SM Natt 2003', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=2856', 2003, 5),
(66, 'SM Natt 2002', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=1586', 2002, 5),
(67, 'SM Natt 2000', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=624', 2000, 5),
(68, 'SM Natt 1999', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=213', 1999, 5),
(69, 'SM Natt 1997', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=4', 1997, 5),
(70, 'SM Ultra 2013', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=24905', 2013, 6),
(71, 'SM Ultra 2012', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=23118', 2012, 6),
(72, 'SM Ultra 2011', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=18855', 2011, 6),
(73, 'SM Ultra 2010', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=13777', 2010, 6),
(74, 'SM Ultra 2009', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=12256	', 2009, 6),
(75, 'SM Ultra 2008', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=9974', 2008, 6),
(76, 'SM Ultra 2007', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=7335', 2007, 6),
(77, 'SM Ultra 2006', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=6754', 2006, 6),
(78, 'SM Ultra 2005', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=4738', 2005, 6),
(79, 'SM LÃ¥ng 2004', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=3454', 2004, 6),
(80, 'SM LÃ¥ng 2003', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=2294', 2003, 6),
(81, 'SM LÃ¥ng 2002', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=1511', 2002, 6),
(82, 'SM LÃ¥ng 2001', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=1315', 2001, 6),
(83, 'SM LÃ¥ng 2000', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=346', 2000, 6);

-- --------------------------------------------------------

--
-- Tabellstruktur `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `link` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumpning av Data i tabell `links`
--

INSERT INTO `links` (`id`, `name`, `link`) VALUES
(2, 'SM stafett 2012', 'http://obasen.orientering.se/winsplits/online/sv/default.asp?page=classes&databaseId=23041');

-- --------------------------------------------------------

--
-- Tabellstruktur `type`
--

CREATE TABLE IF NOT EXISTS `type` (
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur `years`
--

CREATE TABLE IF NOT EXISTS `years` (
  `id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
