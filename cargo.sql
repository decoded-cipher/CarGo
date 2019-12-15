-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 10, 2019 at 02:50 AM
-- Server version: 5.7.26
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cargo`
--

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

DROP TABLE IF EXISTS `passenger`;
CREATE TABLE IF NOT EXISTS `passenger` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `trip_id` int(10) NOT NULL,
  `ride_id` int(10) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0-Pending, 1-Accepted, 2-Rejected',
  PRIMARY KEY (`p_id`),
  KEY `trip_id` (`trip_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`p_id`, `trip_id`, `ride_id`, `status`) VALUES
(3, 3, 1, 1),
(4, 1, 4, 1),
(10, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `user_id` int(10) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `passwrd` varchar(50) NOT NULL,
  `mobile_verified` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`,`mobile`,`username`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user_id`, `first_name`, `last_name`, `email`, `mobile`, `username`, `passwrd`, `mobile_verified`) VALUES
(1, 'Arjun', 'Krishna', 'arjun12345krishna@gmail.com', '9400057152', 'Decoded_Cipher', 'Alpha@123', 1),
(2, 'Ashwin', 'Varghese', 'ashwinvarghese0@gmail.com', '8606641591', 'ashwinvarghese', 'qwerty', 1),
(3, 'Georgy', 'K Joseph', 'georgykjoseph101@gmail.com', '9961332087', 'georgk_k_joseph', '1597538246', 1),
(4, 'Anima', 'Krishna', 'anima12345krishna@gmail.com', '8547387151', 'saber_athena', 'qwerty', 0),
(5, 'Anuraj', 'T R', 'anuraj2001tr@gmail.com', '9446288412', 'anuraj', '123456789', 1),
(6, 'Sreelatha', 'Unnikrishnan', 'unnielava@gmail.com', '9961332087', 'sreelatha', 'Alpha@123', 0),
(7, 'Sunandha', 'Rajagopal', 'sunandhar@gmail.com', '9497312934', 'sunandha', 'sunandha', 1),
(8, 'george', 'thomas', 'georgethomas11@gmail.com', '9638527412', 'george', 'george', 1),
(10, 'Dhannya', 'S', 'qwertyuio8@gmail.com', '1234567896', 'dhannya', 'dhannya', 0);

-- --------------------------------------------------------

--
-- Table structure for table `ride`
--

DROP TABLE IF EXISTS `ride`;
CREATE TABLE IF NOT EXISTS `ride` (
  `ride_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `source` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `datee` date NOT NULL,
  `timee` time NOT NULL,
  PRIMARY KEY (`ride_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ride`
--

INSERT INTO `ride` (`ride_id`, `user_id`, `source`, `destination`, `datee`, `timee`) VALUES
(1, 7, 'Mallappally', 'Changanacherry', '2020-01-01', '11:00:00'),
(2, 7, 'Mallappally', 'Kottayam', '2020-01-01', '12:30:00'),
(3, 5, 'Mallappally', 'Changanacherry', '2020-01-02', '09:30:00'),
(4, 8, 'Mallappally', 'Changanacherry', '2020-01-01', '10:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

DROP TABLE IF EXISTS `trip`;
CREATE TABLE IF NOT EXISTS `trip` (
  `trip_id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `source` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `datee` date NOT NULL,
  `timee` time NOT NULL,
  `vehicle_id` int(10) NOT NULL,
  PRIMARY KEY (`trip_id`),
  KEY `user_id` (`user_id`),
  KEY `vehicle_id` (`vehicle_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trip`
--

INSERT INTO `trip` (`trip_id`, `user_id`, `source`, `destination`, `datee`, `timee`, `vehicle_id`) VALUES
(1, 1, 'Mallappally', 'Changanacherry', '2020-01-01', '10:00:00', 4),
(2, 1, 'Changanacherry', 'Mallappally', '2020-01-01', '17:00:00', 4),
(3, 3, 'Mallappally', 'Changanacherry', '2020-01-01', '13:00:00', 1),
(4, 2, 'Mallappally', 'Changanacherry', '2020-01-02', '10:00:00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `trip_details`
--

DROP TABLE IF EXISTS `trip_details`;
CREATE TABLE IF NOT EXISTS `trip_details` (
  `tripDetails_id` int(11) NOT NULL AUTO_INCREMENT,
  `trip_id` int(10) NOT NULL,
  `source` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `vehicle` varchar(10) NOT NULL,
  PRIMARY KEY (`tripDetails_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

DROP TABLE IF EXISTS `vehicle`;
CREATE TABLE IF NOT EXISTS `vehicle` (
  `vehicle_id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicle_name` varchar(50) NOT NULL,
  `passengers_no` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`vehicle_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vehicle_id`, `vehicle_name`, `passengers_no`, `status`) VALUES
(1, 'Scooter', 1, 1),
(2, 'Sedan', 3, 1),
(3, 'SUV', 3, 1),
(4, 'MPV', 5, 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ride`
--
ALTER TABLE `ride`
  ADD CONSTRAINT `ride_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `registration` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `trip`
--
ALTER TABLE `trip`
  ADD CONSTRAINT `trip_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `registration` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trip_ibfk_2` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicle` (`vehicle_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
