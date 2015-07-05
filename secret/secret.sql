-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 11, 2015 at 01:11 AM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `secret`
--

-- --------------------------------------------------------

--
-- Table structure for table `secrets`
--

CREATE TABLE IF NOT EXISTS `secrets` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `identity` text NOT NULL,
  `sender` varchar(200) NOT NULL,
  `reciever` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `tsecs` int(10) NOT NULL,
  `fflag` tinyint(1) DEFAULT NULL,
  `fname` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `secrets`
--

INSERT INTO `secrets` (`id`, `identity`, `sender`, `reciever`, `message`, `tsecs`, `fflag`, `fname`) VALUES
(5, '555582e35ec9580bca707fb88465505d', 'sailu@hotmail', 'sai.waiting4reply@gmail.com', 'hellooo sii savd\r\n\r\nfdv\r\n\r\nv', 60, NULL, ''),
(14, '10db06735c2da5b1758fbc6b441c3cc2', 'karz', 'sainihar', 'Combination of unique thinking, quick learning and powerful determination will make me stand in front among my competitors .Love towards my work helps me in putting my best to accomplish the task assigned to me. Waiting for an opportunity to step into the field of Computer Science to prove myself\r\n\r\nHobbies\r\n\r\nCricket, Playing video games,Computer programming, Generating algorithms ,Solving miscellaneous problems, Music Composing ,Drawing', 60, NULL, ''),
(16, '8ba78290789f3755607093f7c61dd9a0', 'steve', 'jobs', 'of Computer Science to prove myself\r\n\r\nHobbies\r\n\r\nCricket, Playing video games,Computeous problems, Music Composing ,Drawing', 60, NULL, ''),
(27, 'aff3b6f72722d47bb20095ec9e564016', 'sailu@hotmail', 'jobs', 'popup test', 10, NULL, ''),
(28, 'd37a8195652a2ac13a9bf041bd247d46', 'sailu@hotmail', 'jobs', 'popup ', 10, NULL, ''),
(29, 'faf84e1b50c8f788409d0b6520aca9b5', 'sailu@hotmail', 'jobs', 'pop ', 5, NULL, ''),
(31, '63dc4e1c67b8c75b4bdf48dd7f1363de', 'steve', 'sainihar', 'final test', 5, NULL, ''),
(32, 'ee92ac81f78f6514d001d0a19df6b403', 'sai', 'sai@hotmal', 'rdytdugjghjjy', 15, NULL, ''),
(33, 'bb713a538d4ce7b3a38865fa98ae94cd', 'sai', 'ss', 'efedggdsd', 10, NULL, ''),
(35, '6c850be450f2fffa9611f722f1fcd3d1', 'karthik', 'asov ,v', 'wmv v l', 5, NULL, ''),
(36, '2a2144dea98bb0f0275325ae126e8135', 'ddsd', 'g wwew', 'fvbl;dfl;', 60, NULL, ''),
(37, '2a2144dea98bb0f0275325ae126e8135', 'ddsd', 'g wwew', 'fvbl;dfl;', 60, NULL, ''),
(38, '4ab0fbbdb98f580ce1f4bc1dc84fdb07', 'fefef', 'sff', '        	\r\n         dg dggb', 0, 0, ''),
(39, '39649336f668e2169c5df250c5ad756d', 'efwwef', 'sgsfv', 'afdfdfd', 0, 1, '39649336f668e2169c5df250c5ad756d.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
