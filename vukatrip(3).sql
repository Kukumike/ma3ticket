-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 02, 2016 at 12:56 AM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vukatrip`
--

-- --------------------------------------------------------

--
-- Table structure for table `groupbooking`
--

CREATE TABLE IF NOT EXISTS `groupbooking` (
  `tableId` int(50) NOT NULL AUTO_INCREMENT,
  `groupname` text NOT NULL,
  `groupemail` text,
  `groupphone` text NOT NULL,
  `numbertravellers` int(50) NOT NULL,
  `busname` text NOT NULL,
  `from` text NOT NULL,
  `to` text NOT NULL,
  `datetotravel` text NOT NULL,
  `groupinfo` text NOT NULL,
  PRIMARY KEY (`tableId`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `groupbooking`
--


-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE IF NOT EXISTS `operator` (
  `operatorId` int(10) NOT NULL AUTO_INCREMENT,
  `operatorName` text NOT NULL,
  `operatorMail` text NOT NULL,
  `operatorPassword` text NOT NULL,
  `operatorUrl` text,
  `operatorStatus` text,
  `verificationId` text,
  PRIMARY KEY (`operatorId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `operator`
--


-- --------------------------------------------------------

--
-- Table structure for table `operatorschedule`
--

CREATE TABLE IF NOT EXISTS `operatorschedule` (
  `scheduleId` int(10) NOT NULL AUTO_INCREMENT,
  `scheduleFrom` text,
  `scheduleTo` text,
  `scheduleDate` text,
  `scheduleTime` text,
  `scheduleBus` text,
  `scheduleBusCapacity` text,
  `scheduleBusCost` int(10) DEFAULT NULL,
  `scheduleStatus` int(10) DEFAULT '1',
  `operatorId` int(10) DEFAULT NULL,
  PRIMARY KEY (`scheduleId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `operatorschedule`
--


-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE IF NOT EXISTS `ticket` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `customerName` text NOT NULL,
  `customerId` text NOT NULL,
  `customerContact` text NOT NULL,
  `busDetails` text NOT NULL,
  `from` text NOT NULL,
  `to` text NOT NULL,
  `dateScheduled` text NOT NULL,
  `time` text NOT NULL,
  `seats` text NOT NULL,
  `totalCost` text NOT NULL,
  `operatorId` int(10) NOT NULL,
  `scheduleBusCost` int(11) NOT NULL,
  `ticketCode` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=185 ;

--
-- Dumping data for table `ticket`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
