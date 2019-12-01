-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 01, 2019 at 02:48 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9-2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cargo`
--

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE IF NOT EXISTS `passenger` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `trip_id` int(10) NOT NULL,
  `ride_id_01` int(10) DEFAULT NULL,
  `ride_id_02` int(5) DEFAULT NULL,
  `ride_id_03` int(5) DEFAULT NULL,
  `ride_id_04` int(5) DEFAULT NULL,
  `ride_id_05` int(5) DEFAULT NULL,
  `ride_id_01_status` tinyint(1) NOT NULL DEFAULT '0',
  `ride_id_02_status` tinyint(1) NOT NULL DEFAULT '0',
  `ride_id_03_status` tinyint(1) NOT NULL DEFAULT '0',
  `ride_id_04_status` tinyint(1) NOT NULL DEFAULT '0',
  `ride_id_05_status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`p_id`),
  KEY `trip_id` (`trip_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`p_id`, `trip_id`, `ride_id_01`, `ride_id_02`, `ride_id_03`, `ride_id_04`, `ride_id_05`, `ride_id_01_status`, `ride_id_02_status`, `ride_id_03_status`, `ride_id_04_status`, `ride_id_05_status`) VALUES
(1, 9, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user_id`, `first_name`, `last_name`, `email`, `mobile`, `username`, `passwrd`, `mobile_verified`) VALUES
(1, 'Arjun', 'Krishna', 'arjun12345krishna@gmail.com', '9400057152', 'Decoded_Cipher', 'Alpha@123', 1),
(2, 'Ashwin', 'Varghese', 'ashwinvarghese0@gmail.com', '8606641591', 'ashwinvarghese', 'qwerty', 0),
(3, 'Georgy', 'K Joseph', 'georgykjoseph101@gmail.com', '9961332087', 'georgk_k_joseph', '1597538246', 0),
(4, 'Anima', 'Krishna', 'anima12345krishna@gmail.com', '8547387151', 'saber_athena', 'qwerty', 0),
(5, 'Anuraj', 'T R', 'anuraj2001tr@gmail.com', '9446288412', 'anuraj', '123456789', 0),
(6, 'Sreelatha', 'Unnikrishnan', 'unnielava@gmail.com', '9961332087', 'sreelatha', 'Alpha@123', 0),
(7, 'Sunandha', 'Rajagopal', 'sunandhar@gmail.com', '9497312934', 'sunandha', 'sunandha', 0),
(8, 'george', 'thomas', 'georgethomas11@gmail.com', '9638527412', 'george', 'george', 0),
(10, 'Dhannya', 'S', 'qwertyuio8@gmail.com', '1234567896', 'dhannya', 'dhannya', 0),
(14, 'Jomy', 'Abraham', 'jomyak123@gmail.com', '9633830859', 'jomy', '123', 0),
(15, 'fgh', 'kl', 'fgh@g.in', '9400057152', 'fghkl', '123', 1),
(16, 'cvbz', 'aaqqq', 'qq@d.in', '9400057152', 'ddfgfdg', '123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ride`
--

CREATE TABLE IF NOT EXISTS `ride` (
  `ride_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` int(5) NOT NULL,
  `source` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `datee` date NOT NULL,
  `timee` time NOT NULL,
  PRIMARY KEY (`ride_id`),
  KEY `user_id` (`user_id`),
  KEY `user_id_2` (`user_id`),
  KEY `user_id_3` (`user_id`),
  KEY `user_id_4` (`user_id`),
  KEY `user_id_5` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ride`
--

INSERT INTO `ride` (`ride_id`, `user_id`, `source`, `destination`, `datee`, `timee`) VALUES
(2, 1, 'Mallapally', 'Changanacherry', '2020-01-02', '02:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `trip`
--

INSERT INTO `trip` (`trip_id`, `user_id`, `source`, `destination`, `datee`, `timee`, `vehicle_id`) VALUES
(9, 1, 'Mallapally', 'Changanacherry', '2020-02-02', '02:30:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `trip_details`
--

CREATE TABLE IF NOT EXISTS `trip_details` (
  `tripDetails_id` int(11) NOT NULL AUTO_INCREMENT,
  `trip_id` int(10) NOT NULL,
  `source` varchar(50) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `vehicle` varchar(10) NOT NULL,
  PRIMARY KEY (`tripDetails_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `trip_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE IF NOT EXISTS `vehicle` (
  `vehicle_id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicle_name` varchar(50) NOT NULL,
  `passengers_no` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`vehicle_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

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
  ADD CONSTRAINT `trip_ibfk_2` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicle` (`vehicle_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trip_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `registration` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
