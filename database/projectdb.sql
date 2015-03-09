-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2015 at 01:51 AM
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
(1, 'AARGONAR', 'aargonar.jpg', 'Aargonar was a dusty, desert-climate planet located ....', 'Aargonar is home to the tomb of Ajunta Pall, Darth Krayt, Ludo Kressh, and the tomb of the infamous Naga Sadaow!'),
(2, 'ATHISS', 'athiss.png', 'Athiss was the second planet in the Loro Babis system. ....', 'Athiss features the tomb of Marka Ragnos, Tulak Hord, and the tomb of Darth Bane!'),
(3, 'YAVIN PRIME', 'yavin.jpg', 'Yavin Prime, also known as Yavin (Yavin pronounced: YAH-vin), ....', 'Yavin Prime hosts only two tombs, however, gaining entry to the tomb has proven troubling for many a Sith Lord. Here we have the tombs of Darth Perash and Dramath the second.'),
(4, 'KASHYYYK', 'kashyyyk.jpg', 'Kashyyyk (see pronunciation), also known as Wookiee Planet C, ....', 'Kashyyyk is the home of the tomb of Freedon Nadd, Vodal Kressh, Exar Kun, and Sakkra-kla.');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `torturer`
--

INSERT INTO `torturer` (`id`, `name`, `picture`, `brief`, `description`, `vote_total`, `vote_count`) VALUES
(1, 'RYLOTH', 'ryloth1.jpg', 'Ryloth, also known as Twi''lek, and Twi''lek Prime,[9] was the harsh, ....', 'Ryloth, also known as Twi''lek, and Twi''lek Prime. Ryloth is full of Twi''lek rebels who are withholding information from the empire. If you enjoy their high pitched squeals of agony, this is the planet for you!', 7, 2),
(2, 'TARIS', 'taris.png', 'Taris was an urban planet in the fifth orbit of its star, ....', 'Taris is an urban planet in the fifth orbit of its star. This planet does not even have enough cell space for all of the captured rebels. There are so many rebels to torture here that you may never have to leave the planet again if you''re truly enjoying yourself. Quantity over quality on Taris.', 5, 2),
(3, 'DROMUND KAAS', 'dromund_Kaas.png', 'Dromund Kaas was the third planet in the Dromund system, ....', 'Dromund Kaas was the third planet in the Dromund system. There are not many republic followers to torture on Dromund Kaas, however the few that there are have proven extremely tough to break. A dark Lord of the Sith is sure to succeed here where others have failed.', 0, 0),
(4, 'KORRIBAN', 'korriban.png', 'Korriban, known as Pesegam during the reign of Xim, and also known ....', 'Korriban was the sole planet in the Horuset system. Korriban is of particular interest because here we have a few captured Jedi who are having problems parting with their words. Any Dark Lord would surely revel in the idea of being able to torture Jedi until their point of mental and physical collapse. Jump on this opportunity while you still can!.', 6, 2);

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
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
