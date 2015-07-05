-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 05, 2015 at 10:30 AM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `atm`
--

-- --------------------------------------------------------

--
-- Table structure for table `logical`
--

CREATE TABLE IF NOT EXISTS `logical` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `qs` text NOT NULL,
  `op1` text NOT NULL,
  `op2` text NOT NULL,
  `op3` text NOT NULL,
  `op4` text NOT NULL,
  `ans` text NOT NULL,
  `mode` varchar(20) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=97 ;

--
-- Dumping data for table `logical`
--

INSERT INTO `logical` (`qid`, `qs`, `op1`, `op2`, `op3`, `op4`, `ans`, `mode`) VALUES
(1, 'question 1', 'op1', 'op2', 'op3', 'op4', 'op5', 'we'),
(2, 'Question2', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(3, 'Question3', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(4, 'Question4', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(5, 'Question5', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(6, 'Question6', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(7, 'Question7', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(8, 'Question8', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(9, 'Question9', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(10, 'Question10', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(11, 'Question11', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(12, 'Question12', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(13, 'Question13', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(14, 'Question14', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(15, 'Question15', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(16, 'Question16', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(17, 'Question17', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(18, 'Question18', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(19, 'Question19', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(20, 'Question20', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(21, 'Question21', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(22, 'Question22', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(23, 'Question23', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(24, 'Question24', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(25, 'Question25', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(26, 'Question26', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(27, 'Question27', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(28, 'Question28', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(29, 'Question29', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(30, 'Question30', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(31, 'Question31', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(32, 'Question32', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(33, 'Question33', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(34, 'Question34', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(35, 'Question35', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(36, 'Question36', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(37, 'Question37', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(38, 'Question38', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(39, 'Question39', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(40, 'Question40', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(41, 'Question41', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(42, 'Question42', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(43, 'Question43', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(44, 'Question44', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(45, 'Question45', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(46, 'Question46', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(47, 'Question47', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(48, 'Question48', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(49, 'Question49', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(50, 'Question50', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(51, 'Question51', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(52, 'Question52', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(53, 'Question53', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(54, 'Question54', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(55, 'Question55', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(56, 'Question56', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(57, 'Question57', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(58, 'Question58', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(59, 'Question59', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(60, 'Question60', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(61, 'Question61', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(62, 'Question62', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(63, 'Question63', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(64, 'Question64', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(65, 'Question65', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(66, 'Question66', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(67, 'Question67', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(68, 'Question68', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(69, 'Question69', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(70, 'Question70', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(71, 'Question71', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(72, 'Question72', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(73, 'Question73', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(74, 'Question74', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(75, 'Question75', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(76, 'Question76', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(77, 'Question77', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(78, 'Question78', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(79, 'Question79', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(80, 'Question80', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(81, 'Question81', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(82, 'Question82', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(83, 'Question83', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(84, 'Question84', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(85, 'Question85', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(86, 'Question86', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(87, 'Question87', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(88, 'Question88', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(89, 'Question89', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(90, 'Question90', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(94, 'sample question', 'sop1', 'sop2', 'sop3', 'sop4', 'sop2', 'we\n'),
(95, 'sample question', 'sop1', 'sop2', 'sop3', 'sop4', 'sop2', 'we\n'),
(96, 'sample question', 'sop1', 'sop2', 'sop3', 'sop4', 'sop2', 'we\n');

-- --------------------------------------------------------

--
-- Table structure for table `quants`
--

CREATE TABLE IF NOT EXISTS `quants` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `qs` text NOT NULL,
  `op1` text NOT NULL,
  `op2` text NOT NULL,
  `op3` text NOT NULL,
  `op4` text NOT NULL,
  `ans` text NOT NULL,
  `mode` varchar(20) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=96 ;

--
-- Dumping data for table `quants`
--

INSERT INTO `quants` (`qid`, `qs`, `op1`, `op2`, `op3`, `op4`, `ans`, `mode`) VALUES
(1, 'question 1', 'op1', 'op2', 'op3', 'op4', 'op5', 'we'),
(2, 'Question2', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(3, 'Question3', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(4, 'Question4', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(5, 'Question5', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(6, 'Question6', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(7, 'Question7', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(8, 'Question8', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(9, 'Question9', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(10, 'Question10', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(11, 'Question11', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(12, 'Question12', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(13, 'Question13', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(14, 'Question14', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(15, 'Question15', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(16, 'Question16', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(17, 'Question17', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(18, 'Question18', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(19, 'Question19', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(20, 'Question20', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(21, 'Question21', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(22, 'Question22', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(23, 'Question23', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(24, 'Question24', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(25, 'Question25', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(26, 'Question26', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(27, 'Question27', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(28, 'Question28', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(29, 'Question29', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(30, 'Question30', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(31, 'Question31', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(32, 'Question32', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(33, 'Question33', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(34, 'Question34', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(35, 'Question35', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(36, 'Question36', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(37, 'Question37', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(38, 'Question38', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(39, 'Question39', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(40, 'Question40', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(41, 'Question41', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(42, 'Question42', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(43, 'Question43', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(44, 'Question44', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(45, 'Question45', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(46, 'Question46', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(47, 'Question47', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(48, 'Question48', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(49, 'Question49', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(50, 'Question50', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(51, 'Question51', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(52, 'Question52', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(53, 'Question53', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(54, 'Question54', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(55, 'Question55', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(56, 'Question56', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(57, 'Question57', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(58, 'Question58', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(59, 'Question59', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(60, 'Question60', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(61, 'Question61', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(62, 'Question62', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(63, 'Question63', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(64, 'Question64', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(65, 'Question65', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(66, 'Question66', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(67, 'Question67', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(68, 'Question68', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(69, 'Question69', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(70, 'Question70', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(71, 'Question71', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(72, 'Question72', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(73, 'Question73', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(74, 'Question74', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(75, 'Question75', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(76, 'Question76', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(77, 'Question77', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(78, 'Question78', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(79, 'Question79', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(80, 'Question80', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(81, 'Question81', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(82, 'Question82', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(83, 'Question83', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(84, 'Question84', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(85, 'Question85', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(86, 'Question86', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(87, 'Question87', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(88, 'Question88', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(89, 'Question89', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(90, 'Question90', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(94, 'sample question', 'sop1', 'sop2', 'sop3', 'sop4', 'sop2', 'we\n'),
(95, 'sample question', 'sop1', 'sop2', 'sop3', 'sop4', 'sop2', 'we\n');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(32) NOT NULL,
  `section` varchar(50) NOT NULL,
  `score` varchar(10) NOT NULL,
  `day` date NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`rid`, `uid`, `section`, `score`, `day`) VALUES
(5, '11n31a1227', 'verbal', '66', '2014-10-15'),
(6, '11n31a1250', 'verbal', '0', '2014-10-16'),
(7, '11n31a1249', 'verbal', '2', '2014-10-16'),
(8, '11n31a1232', 'verbal', '2', '2014-10-16'),
(9, '11n31a1233', 'verbal', '0', '2014-10-16'),
(10, '11n31a1228', 'verbal', '22', '2014-10-16'),
(11, '11n31a1228', 'quants', '70', '2014-10-16'),
(12, '11n31a1232', 'quants', '70', '2014-10-16'),
(13, '11n31a1250', 'quants', '70', '2014-10-16'),
(14, '11n31a1232', 'logical', '70', '2014-10-16'),
(15, '11n31a1233', 'quants', '70', '2014-10-16'),
(16, '11n31a1249', 'quants', '70', '2014-10-16'),
(17, '11n31a1245', 'quants', '70', '2014-10-16'),
(18, '11n31a1235', 'quants', '70', '2014-10-16'),
(19, '11n31a1202', 'verbal', '57', '2014-10-16'),
(20, '11n31a1202', 'quants', '60', '2014-10-16'),
(21, '11n31a1202', 'logical', '44', '2014-10-16'),
(22, '11n31a1202', 'technical', '70', '2014-10-16'),
(23, '11n31a1228', 'verbal', '4', '2014-10-17'),
(24, '11n31a1228', 'verbal', '70', '2014-10-20'),
(25, '11n31a1228', 'quants', '70', '2014-10-20'),
(26, '11n31a1228', 'logical', '70', '2014-10-20'),
(27, '11n31a1228', 'technical', '70', '2014-10-20'),
(28, '11n31a1228', 'verbal', '68', '2014-10-20'),
(29, '11n31a1228', 'quants', '70', '2014-10-20'),
(30, '11n31a1228', 'logical', '62', '2014-10-20'),
(31, '11n31a1228', 'technical', '70', '2014-10-20'),
(32, 'admin', 'logical', '70', '2014-10-20'),
(33, '11n31a1249', 'verbal', '70', '2014-10-20'),
(34, '11n31a1249', 'quants', '70', '2014-10-20'),
(35, '11n31a1249', 'logical', '70', '2014-10-20'),
(36, '11n31a1249', 'technical', '70', '2014-10-20'),
(37, '11n31a1228', 'verbal', '0', '2015-01-19'),
(38, '11n31a1228', 'verbal', '63', '2015-02-05');

-- --------------------------------------------------------

--
-- Table structure for table `result2`
--

CREATE TABLE IF NOT EXISTS `result2` (
  `fname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `score` int(11) NOT NULL,
  `tid` int(11) NOT NULL,
  `para` text NOT NULL,
  `day` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result2`
--

INSERT INTO `result2` (`fname`, `email`, `score`, `tid`, `para`, `day`) VALUES
('sai nihar', 'sai.waiting4reply@gmail.com', 6, 7, 'hey thsi is 7', '2015-02-09');

-- --------------------------------------------------------

--
-- Table structure for table `technical`
--

CREATE TABLE IF NOT EXISTS `technical` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `qs` text NOT NULL,
  `op1` text NOT NULL,
  `op2` text NOT NULL,
  `op3` text NOT NULL,
  `op4` text NOT NULL,
  `ans` text NOT NULL,
  `mode` varchar(20) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=96 ;

--
-- Dumping data for table `technical`
--

INSERT INTO `technical` (`qid`, `qs`, `op1`, `op2`, `op3`, `op4`, `ans`, `mode`) VALUES
(1, 'question 1', 'op1', 'op2', 'op3', 'op4', 'op5', 'we'),
(2, 'Question2', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(3, 'Question3', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(4, 'Question4', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(5, 'Question5', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(6, 'Question6', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(7, 'Question7', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(8, 'Question8', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(9, 'Question9', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(10, 'Question10', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(11, 'Question11', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(12, 'Question12', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(13, 'Question13', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(14, 'Question14', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(15, 'Question15', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(16, 'Question16', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(17, 'Question17', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(18, 'Question18', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(19, 'Question19', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(20, 'Question20', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(21, 'Question21', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(22, 'Question22', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(23, 'Question23', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(24, 'Question24', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(25, 'Question25', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(26, 'Question26', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(27, 'Question27', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(28, 'Question28', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(29, 'Question29', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(30, 'Question30', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(31, 'Question31', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(32, 'Question32', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(33, 'Question33', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(34, 'Question34', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(35, 'Question35', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(36, 'Question36', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(37, 'Question37', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(38, 'Question38', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(39, 'Question39', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(40, 'Question40', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(41, 'Question41', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(42, 'Question42', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(43, 'Question43', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(44, 'Question44', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(45, 'Question45', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(46, 'Question46', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(47, 'Question47', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(48, 'Question48', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(49, 'Question49', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(50, 'Question50', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(51, 'Question51', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(52, 'Question52', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(53, 'Question53', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(54, 'Question54', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(55, 'Question55', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(56, 'Question56', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(57, 'Question57', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(58, 'Question58', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(59, 'Question59', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(60, 'Question60', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(61, 'Question61', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(62, 'Question62', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(63, 'Question63', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(64, 'Question64', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(65, 'Question65', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(66, 'Question66', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(67, 'Question67', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(68, 'Question68', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(69, 'Question69', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(70, 'Question70', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(71, 'Question71', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(72, 'Question72', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(73, 'Question73', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(74, 'Question74', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(75, 'Question75', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(76, 'Question76', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(77, 'Question77', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(78, 'Question78', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(79, 'Question79', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(80, 'Question80', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(81, 'Question81', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(82, 'Question82', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(83, 'Question83', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(84, 'Question84', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(85, 'Question85', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(86, 'Question86', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(87, 'Question87', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(88, 'Question88', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(89, 'Question89', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(90, 'Question90', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(94, 'sample question', 'sop1', 'sop2', 'sop3', 'sop4', 'sop2', 'we\n'),
(95, 'sample question', 'sop1', 'sop2', 'sop3', 'sop4', 'sop2', 'we\n');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` varchar(10) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `uname`, `password`, `status`) VALUES
('11n31a1228', 'K.Saibaba', '1f27a398ba69e438b77f5ccfe61f5b9b', 'student'),
('admin', 'Admin', '02adcec2263d2127269fcd769c33f029', 'admin'),
('', '11n31a1249', '1f27a398ba69e438b77f5ccfe61f5b9b', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `verbal`
--

CREATE TABLE IF NOT EXISTS `verbal` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `qs` text NOT NULL,
  `op1` text NOT NULL,
  `op2` text NOT NULL,
  `op3` text NOT NULL,
  `op4` text NOT NULL,
  `ans` text NOT NULL,
  `mode` varchar(20) NOT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=98 ;

--
-- Dumping data for table `verbal`
--

INSERT INTO `verbal` (`qid`, `qs`, `op1`, `op2`, `op3`, `op4`, `ans`, `mode`) VALUES
(1, 'question 1', 'op1', 'op2', 'op3', 'op4', 'op5', 'we'),
(2, 'Question2', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(3, 'Question3', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(4, 'Question4', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(5, 'Question5', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(6, 'Question6', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(7, 'Question7', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(8, 'Question8', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(9, 'Question9', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(10, 'Question10', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(11, 'Question11', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(12, 'Question12', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(13, 'Question13', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(14, 'Question14', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(15, 'Question15', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(16, 'Question16', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(17, 'Question17', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(18, 'Question18', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(19, 'Question19', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(20, 'Question20', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(21, 'Question21', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(22, 'Question22', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(23, 'Question23', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(24, 'Question24', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(25, 'Question25', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(26, 'Question26', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(27, 'Question27', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(28, 'Question28', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(29, 'Question29', 'op1', 'op2', 'op3', 'op4', 'op2', 'we'),
(30, 'Question30', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(31, 'Question31', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(32, 'Question32', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(33, 'Question33', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(34, 'Question34', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(35, 'Question35', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(36, 'Question36', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(37, 'Question37', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(38, 'Question38', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(39, 'Question39', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(40, 'Question40', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(41, 'Question41', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(42, 'Question42', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(43, 'Question43', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(44, 'Question44', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(45, 'Question45', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(46, 'Question46', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(47, 'Question47', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(48, 'Question48', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(49, 'Question49', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(50, 'Question50', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(51, 'Question51', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(52, 'Question52', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(53, 'Question53', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(54, 'Question54', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(55, 'Question55', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(56, 'Question56', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(57, 'Question57', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(58, 'Question58', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(59, 'Question59', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(60, 'Question60', 'op1', 'op2', 'op3', 'op4', 'op2', 'medium'),
(61, 'Question61', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(62, 'Question62', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(63, 'Question63', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(64, 'Question64', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(65, 'Question65', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(66, 'Question66', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(67, 'Question67', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(68, 'Question68', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(69, 'Question69', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(70, 'Question70', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(71, 'Question71', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(72, 'Question72', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(73, 'Question73', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(74, 'Question74', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(75, 'Question75', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(76, 'Question76', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(77, 'Question77', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(78, 'Question78', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(79, 'Question79', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(80, 'Question80', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(81, 'Question81', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(82, 'Question82', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(83, 'Question83', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(84, 'Question84', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(85, 'Question85', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(86, 'Question86', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(87, 'Question87', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(88, 'Question88', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(89, 'Question89', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(90, 'Question90', 'op1', 'op2', 'op3', 'op4', 'op2', 'hard'),
(94, 'sample question', 'sop1', 'sop2', 'sop3', 'sop4', 'sop2', 'we\n'),
(95, 'sample question', 'sop1', 'sop2', 'sop3', 'sop4', 'sop2', 'we\n'),
(96, 'how are you doing?', 'fne', 'fine', 'none', 'NOTA', 'fne', 'we\r\n'),
(97, 'synonymn for sai', 'sai', 'karthik', 'eshwar', 'shrish', 'sai', 'easy');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
