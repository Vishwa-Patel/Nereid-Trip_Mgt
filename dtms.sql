-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2020 at 11:59 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dtms`
--

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `expenseid` bigint(20) NOT NULL,
  `tripid` int(11) DEFAULT NULL,
  `userid` int(10) DEFAULT NULL,
  `transportPrice` bigint(10) DEFAULT NULL,
  `accommodationPrice` bigint(10) DEFAULT NULL,
  `food` bigint(10) DEFAULT NULL,
  `movie` bigint(10) DEFAULT NULL,
  `shopping` bigint(10) DEFAULT NULL,
  `other` bigint(10) DEFAULT NULL,
  `grandTotal` bigint(50) NOT NULL,
  `eTS` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This Table will keep all the Expense data';

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`expenseid`, `tripid`, `userid`, `transportPrice`, `accommodationPrice`, `food`, `movie`, `shopping`, `other`, `grandTotal`, `eTS`) VALUES
(1, 13, 1, 4500, 3500, 2700, 500, 1200, 250, 12650, '2020-04-09 12:28:12'),
(11, 15, 5, 35000, 10000, 5000, 1500, 2500, 1200, 55200, '2020-04-09 15:12:03'),
(12, 16, 6, 2340, 1230, 2345, 150, 3500, 780, 10345, '2020-04-09 15:24:23');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `pkgid` int(11) NOT NULL,
  `durationStart` date DEFAULT NULL,
  `durationEnd` date DEFAULT NULL,
  `source` varchar(50) DEFAULT NULL,
  `destination` varchar(50) DEFAULT NULL,
  `transport` varchar(50) DEFAULT NULL,
  `pkgPrice` int(11) DEFAULT NULL,
  `mealPrice` int(11) DEFAULT NULL,
  `Accommodation` varchar(50) DEFAULT NULL,
  `pkgTS` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This Table will keep all the package data';

-- --------------------------------------------------------

--
-- Table structure for table `travel`
--

CREATE TABLE `travel` (
  `travelid` int(11) NOT NULL,
  `tripid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `tcreatorid` int(11) NOT NULL,
  `tripType` varchar(10) NOT NULL,
  `TravelTS` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This Table will keep all the travel data';

--
-- Dumping data for table `travel`
--

INSERT INTO `travel` (`travelid`, `tripid`, `userid`, `tcreatorid`, `tripType`, `TravelTS`) VALUES
(6, 10, 1, 2, 'Group', '2020-04-09 01:20:14'),
(7, 10, 2, 2, 'Group', '2020-04-09 01:28:16'),
(15, 13, 1, 1, 'Solo', '2020-04-09 12:13:09'),
(16, 15, 2, 5, 'Group', '2020-04-09 15:11:03'),
(17, 15, 4, 5, 'Group', '2020-04-09 15:11:12'),
(18, 15, 3, 5, 'Group', '2020-04-09 15:11:21'),
(19, 15, 1, 5, 'Group', '2020-04-09 15:11:28'),
(20, 16, 6, 6, 'Solo', '2020-04-09 15:23:51');

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `tid` int(11) NOT NULL,
  `tname` varchar(50) NOT NULL,
  `tCreatorid` int(11) DEFAULT NULL,
  `tsource` varchar(50) DEFAULT NULL,
  `tdestination` varchar(50) DEFAULT NULL,
  `startDate` date DEFAULT NULL,
  `endDate` date DEFAULT NULL,
  `TripTS` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This Table will keep all the Trip data with Trip Destination';

--
-- Dumping data for table `trip`
--

INSERT INTO `trip` (`tid`, `tname`, `tCreatorid`, `tsource`, `tdestination`, `startDate`, `endDate`, `TripTS`) VALUES
(10, 'New Delhi', 2, 'Ahmedabad', 'New Delhi', '2020-04-30', '2020-05-08', '2020-04-09 01:19:59'),
(13, 'Rajasthan', 1, 'Bharuch', 'Rajasthan', '2020-04-05', '2020-04-17', '2020-04-09 12:12:59'),
(14, 'Phuket', 1, 'Vadodara', 'Phuket', '2020-04-22', '2020-04-29', '2020-04-09 12:54:42'),
(15, 'Goa', 5, 'Delhi', 'Goa', '2020-04-13', '2020-05-01', '2020-04-09 15:10:53'),
(16, 'Malasia', 6, 'Anand', 'Malasia', '2020-04-12', '2020-04-23', '2020-04-09 15:23:45');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `uidai` int(11) DEFAULT NULL,
  `UserTS` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='This Table will keep all the User data with credentials ';

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `emailid`, `password`, `contactno`, `uidai`, `UserTS`) VALUES
(1, 'Jyot Patel', 'jyotpatel@gmail.com', 'asdfghjkl', 9988776655, 987654321, '2020-04-07 18:24:02'),
(2, 'Vishwa patel', 'vishwajyot5@gmail.com', 'asdfghjkl', 9998025210, 1234567890, '2020-04-07 18:30:16'),
(3, 'Geeta Patel', 'geetajyot0@gmail.com', 'qwertyuiop', 9998821386, 2147483647, '2020-04-09 13:03:26'),
(4, 'Nilesh Patel', 'nilesh.patel@gmail.com', 'asdfghjkl', 8238003389, 1234567890, '2020-04-09 15:06:39'),
(5, 'Nidhi Patel', 'nidhipatel@gmail.com', 'asdfghjkl', 9988776655, 1234567890, '2020-04-09 15:28:44'),
(6, 'Krina Sardhara', 'krina98mm@gmail.com', 'qwertyuiop', 9998887770, 1234567890, '2020-04-09 15:22:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`expenseid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `tripid` (`tripid`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`pkgid`);

--
-- Indexes for table `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`travelid`),
  ADD KEY `tcreatorid` (`tcreatorid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `tripid` (`tripid`);

--
-- Indexes for table `trip`
--
ALTER TABLE `trip`
  ADD PRIMARY KEY (`tid`),
  ADD KEY `tCreatorid` (`tCreatorid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `expenseid` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `pkgid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `travel`
--
ALTER TABLE `travel`
  MODIFY `travelid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `trip`
--
ALTER TABLE `trip`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `expenses`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `expenses_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`),
  ADD CONSTRAINT `expenses_ibfk_2` FOREIGN KEY (`tripid`) REFERENCES `trip` (`tid`);

--
-- Constraints for table `travel`
--
ALTER TABLE `travel`
  ADD CONSTRAINT `travel_ibfk_1` FOREIGN KEY (`tcreatorid`) REFERENCES `user` (`userid`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `travel_ibfk_2` FOREIGN KEY (`userid`) REFERENCES `user` (`userid`),
  ADD CONSTRAINT `travel_ibfk_3` FOREIGN KEY (`tripid`) REFERENCES `trip` (`tid`);

--
-- Constraints for table `trip`
--
ALTER TABLE `trip`
  ADD CONSTRAINT `trip_ibfk_1` FOREIGN KEY (`tCreatorid`) REFERENCES `user` (`userid`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
