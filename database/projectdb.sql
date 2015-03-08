-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2015 at 01:26 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `projectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `jedihunt`
--

CREATE TABLE IF NOT EXISTS `jedihunt` (
`ID` int(10) NOT NULL,
  `Name` varchar(30) CHARACTER SET utf8 NOT NULL,
  `Location` varchar(30) CHARACTER SET utf8 NOT NULL,
  `Pic` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Description` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jedihunt`
--

INSERT INTO `jedihunt` (`ID`, `Name`, `Location`, `Pic`, `Description`) VALUES
(27, 'Yoda', 'Tython', 'yoda.png', 'Don''t let his looks deceive you, He is very powerful!'),
(28, 'Luke Skywalker', 'Tatooine', 'luke_skywalker.jpg', 'Nothing new. We all know who he is adn we''ve been after him for a while.'),
(29, 'Mace Windu', 'Ryloth', 'mace_windu.jpg', 'A dangerous member of the Jedi Council who should not be taken lightly. His downfall is essential to'),
(30, 'Obi Wan Kenobi', 'Tatooine', 'Ben_Kenobi.png', 'Luke Skywalker''s master. Enough said.');

-- --------------------------------------------------------

--
-- Table structure for table `tomb`
--

CREATE TABLE IF NOT EXISTS `tomb` (
`id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `picture` varchar(64) NOT NULL,
  `brief` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tomb`
--

INSERT INTO `tomb` (`id`, `name`, `picture`, `brief`, `description`) VALUES
(1, 'AARGONAR', 'aargonar.jpg', 'Aargonar was a dusty, desert-climate planet located ....', 'Aargonar was a dusty, desert-climate planet located in the Borderlands Regions of the Mid Rim. '),
(2, 'ATHISS', 'athiss.png', 'Athiss was the second planet in the Loro Babis system. ....', 'Athiss was the second planet in the Loro Babis system. It was located on the Descri Wris and was close to Korriz and Ziost.'),
(3, 'YAVIN PRIME', 'yavin.jpg', 'Yavin Prime, also known as Yavin (Yavin pronounced: YAH-vin), ....', 'Yavin Prime, also known as Yavin (Yavin pronounced: YAH-vin), was a bright red gas giant in the Gordian Reach sector (part of the Bright Jewel Oversector).'),
(4, 'KASHYYYK', 'kashyyyk.jpg', 'Kashyyyk (see pronunciation), also known as Wookiee Planet C, ....', 'Kashyyyk (see pronunciation), also known as Wookiee Planet C, Edean, G5-623, and Wookiee World, was a Mid Rim planet.');

-- --------------------------------------------------------

--
-- Table structure for table `tombcomments`
--

CREATE TABLE IF NOT EXISTS `tombcomments` (
  `id` int(11) NOT NULL,
  `tombid` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tombcomments`
--

INSERT INTO `tombcomments` (`id`, `tombid`, `comment`) VALUES
(1, 1, 'testing - AARGONAR comment'),
(2, 2, 'testing - ATHISS comment'),
(3, 1, 'testing1 - AARGONAR comment'),
(4, 2, 'testing1'),
(5, 1, 'testing3'),
(6, 1, 'testing4\r\n'),
(7, 2, 'test'),
(8, 3, 'test'),
(9, 4, 'lol');

-- --------------------------------------------------------

--
-- Table structure for table `torturer`
--

CREATE TABLE IF NOT EXISTS `torturer` (
`id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `picture` varchar(64) NOT NULL,
  `brief` text NOT NULL,
  `description` text NOT NULL,
  `vote_total` int(11) NOT NULL,
  `vote_count` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `torturer`
--

INSERT INTO `torturer` (`id`, `name`, `picture`, `brief`, `description`, `vote_total`, `vote_count`) VALUES
(1, 'RYLOTH', 'ryloth1.jpg', 'Ryloth, also known as Twi''lek, and Twi''lek Prime,[9] was the harsh, ....', 'Ryloth, also known as Twi''lek, and Twi''lek Prime,[9] was the harsh, rocky homeworld of the Twi''leks, an Outer Rim Territories world located on the Corellian Run and forming one endpoint of the Death Wind Corridor.', 7, 2),
(2, 'TARIS', 'taris.png', 'Taris was an urban planet in the fifth orbit of its star, ....', 'Taris was an urban planet in the fifth orbit of its star, located in the Taris system, within the Ojoster sector, of the Outer Rim Territories, in turn Taris was orbited by four moons, including Rogue. The term Tarisian was used to describe people and products from the planet.', 5, 2),
(3, 'DROMUND KAAS', 'dromund_Kaas.png', 'Dromund Kaas was the third planet in the Dromund system, ....', 'Dromund Kaas was the third planet in the Dromund system, a star system in the Sith Worlds region of the Outer Rim Territories''s Esstran sector.', 0, 0),
(4, 'KORRIBAN', 'korriban.png', 'Korriban, known as Pesegam during the reign of Xim, and also known ....', 'Korriban, known as Pesegam during the reign of Xim, and also known as Moraband by the time of the Clone Wars, was the sole planet in the Horuset system, located across the galaxy from Koros Major.', 6, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jedihunt`
--
ALTER TABLE `jedihunt`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `tomb`
--
ALTER TABLE `tomb`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tombcomments`
--
ALTER TABLE `tombcomments`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `torturer`
--
ALTER TABLE `torturer`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jedihunt`
--
ALTER TABLE `jedihunt`
MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `tomb`
--
ALTER TABLE `tomb`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `torturer`
--
ALTER TABLE `torturer`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
