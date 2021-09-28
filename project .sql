-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 12, 2021 at 11:56 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE IF NOT EXISTS `admin_info` (
  `UserName` varchar(30) NOT NULL DEFAULT '',
  `Password` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`UserName`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`UserName`, `Password`) VALUES
('root', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `ans`
--

CREATE TABLE IF NOT EXISTS `ans` (
  `UserID` int(6) NOT NULL,
  `QueID` int(10) NOT NULL,
  `Question` varchar(300) NOT NULL,
  `Answer` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ans`
--


-- --------------------------------------------------------

--
-- Table structure for table `chapter`
--

CREATE TABLE IF NOT EXISTS `chapter` (
  `Subject` varchar(10) NOT NULL,
  `ChapID` int(10) NOT NULL AUTO_INCREMENT,
  `Title` varchar(20) NOT NULL,
  `Info` varchar(5000) NOT NULL,
  PRIMARY KEY (`ChapID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `chapter`
--


-- --------------------------------------------------------

--
-- Table structure for table `expertsugg`
--

CREATE TABLE IF NOT EXISTS `expertsugg` (
  `ExpertID` int(5) NOT NULL DEFAULT '0',
  `Name` varchar(50) NOT NULL,
  `Email_id` varchar(500) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL,
  PRIMARY KEY (`ExpertID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `expertsugg`
--

INSERT INTO `expertsugg` (`ExpertID`, `Name`, `Email_id`, `Subject`, `Description`) VALUES
(1, 'Parth Varde', 'parthvarde50@gmail.com', 'About Chapter', 'Insert new chapter in CSS course');

-- --------------------------------------------------------

--
-- Table structure for table `expert_info`
--

CREATE TABLE IF NOT EXISTS `expert_info` (
  `Expert_id` int(2) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(20) NOT NULL DEFAULT '',
  `MiddleName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Email_id` varchar(40) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `UserName` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  PRIMARY KEY (`Expert_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `expert_info`
--

INSERT INTO `expert_info` (`Expert_id`, `FirstName`, `MiddleName`, `LastName`, `Email_id`, `Gender`, `UserName`, `Password`) VALUES
(1, 'Parth', 'Rakesh', 'Varde', 'parthvarde50@gmail.com', 'male', 'parth', 'asdf');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `Description` varchar(5000) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--


-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
  `Book` varchar(500) CHARACTER SET utf8 NOT NULL,
  `OrderNo` int(10) NOT NULL AUTO_INCREMENT,
  `Full` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Addr` varchar(500) CHARACTER SET utf8 NOT NULL,
  `City` varchar(50) CHARACTER SET utf8 NOT NULL,
  `PinCode` int(20) NOT NULL,
  `State` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Mobile` varchar(100) NOT NULL,
  PRIMARY KEY (`OrderNo`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `purchase`
--


-- --------------------------------------------------------

--
-- Table structure for table `que`
--

CREATE TABLE IF NOT EXISTS `que` (
  `QueID` int(10) NOT NULL AUTO_INCREMENT,
  `UserID` int(10) NOT NULL,
  `UserName` varchar(40) NOT NULL,
  `Description` varchar(5000) NOT NULL,
  PRIMARY KEY (`QueID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `que`
--


-- --------------------------------------------------------

--
-- Table structure for table `responsesugg`
--

CREATE TABLE IF NOT EXISTS `responsesugg` (
  `ExpertID` int(5) NOT NULL DEFAULT '0',
  `description` varchar(500) NOT NULL,
  PRIMARY KEY (`ExpertID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `responsesugg`
--


-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `Title` varchar(20) CHARACTER SET utf8 NOT NULL,
  `Info` varchar(153) CHARACTER SET utf8 NOT NULL,
  `Dinfo` varchar(850) CHARACTER SET utf8 NOT NULL,
  UNIQUE KEY `Title` (`Title`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--


-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `User_id` int(12) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Email_id` varchar(40) NOT NULL,
  `UserName` varchar(10) NOT NULL,
  `Password` varchar(40) NOT NULL,
  PRIMARY KEY (`User_id`),
  UNIQUE KEY `UserName` (`UserName`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`User_id`, `FirstName`, `LastName`, `Gender`, `Email_id`, `UserName`, `Password`) VALUES
(15, 'user', 'user', '', 'user@gmail.com', 'user', 'user1234');
