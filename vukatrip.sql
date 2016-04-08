-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 02, 2016 at 11:09 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vukatrip`
--

-- --------------------------------------------------------

--
-- Table structure for table `OPERATOR`
--

CREATE TABLE IF NOT EXISTS `OPERATOR` (
`operatorId` int(10) NOT NULL,
  `operatorName` text NOT NULL,
  `operatorMail` text NOT NULL,
  `operatorPassword` text NOT NULL,
  `operatorUrl` text,
  `operatorStatus` text,
  `verificationId` text
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
-- --------------------------------------------------------

--
-- Table structure for table `OPERATORSCHEDULE`
--

CREATE TABLE IF NOT EXISTS `OPERATORSCHEDULE` (
`scheduleId` int(10) NOT NULL,
  `scheduleFrom` text,
  `scheduleTo` text,
  `scheduleDate` text,
  `scheduleTime` text,
  `scheduleBus` text,
  `scheduleBusCapacity` text,
  `scheduleBusCost` int(10) DEFAULT NULL,
  `scheduleStatus` int(10) DEFAULT '1',
  `operatorId` int(10) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------
-- Table structure for table `TICKET`
--

CREATE TABLE IF NOT EXISTS `TICKET` (
`id` int(10) NOT NULL,
  `customerName` text NOT NULL,
  'customerId' text NOT NULL,
  `customerContact` text NOT NULL,
  `busDetails` text NOT NULL,
  `from` text NOT NULL,
  `to` text NOT NULL,
  `dateScheduled` text NOT NULL,
  `time` text NOT NULL,
  `seats` text NOT NULL,
  `totalCost` text NOT NULL,
  'operatorId' int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
-- --------------------------------------------------------
-- Table structure for table 'GROUPBOOKING'
--

CREATE TABLE IF NOT EXISTS `GROUPBOKING` (
`tableId` INT( 50 ) NOT NULL AUTO_INCREMENT ,
`groupname` TEXT NOT NULL ,
`groupemail` TEXT NOT NULL ,
`groupphone` TEXT NOT NULL ,
`numbertravellers` INT( 50 ) NOT NULL ,
`busname` TEXT NOT NULL ,
`from` TEXT NOT NULL ,
`to` TEXT NOT NULL ,
`datetotravel` TEXT NOT NULL ,
`groupinfo` TEXT NOT NULL ,
PRIMARY KEY ( `tableId` )
) ENGINE = InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1; ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `OPERATOR`
--
ALTER TABLE `OPERATOR`
 ADD PRIMARY KEY (`operatorId`);

--
-- Indexes for table `OPERATORSCHEDULE`
--
ALTER TABLE `OPERATORSCHEDULE`
 ADD PRIMARY KEY (`scheduleId`);

--
-- Indexes for table `TICKET`
--
ALTER TABLE `TICKET`
 ADD PRIMARY KEY (`customerId`);
--

--
-- Indexes for table `GROUPBOOKING`
--
ALTER TABLE `GROUPBOOKING`
 ADD PRIMARY KEY (`tableId`);
--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `OPERATOR`
--
ALTER TABLE `OPERATOR`
MODIFY `operatorId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `OPERATORSCHEDULE`
--
ALTER TABLE `OPERATORSCHEDULE`
MODIFY `scheduleId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `TICKET`
--
ALTER TABLE `TICKET`
MODIFY `customerId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `GROUPBOOKING`
--
ALTER TABLE `GROUPBOOKING`
MODIFY `tableId` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
