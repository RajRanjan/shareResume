-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2015 at 06:18 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shareresume`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `email`, `title`, `description`, `start_date`, `end_date`) VALUES
(1, 'raj.ranjan91956@gmail.com', 'Alumni Association web portal', 'Alumni portal where people can be in touch with their college mates.\r\nLatest technologies like AJAX, OOP-PHP5, Security features are used.\r\nPublic, Admin and Account area have been built.', '2013-07-01', '2014-12-24'),
(2, 'raj.ranjan91956@gmail.com', 'The Asylum | Publishing House', 'A friend’s start-up company as a publishing house. CSS3 heading feature\r\nhas been included. The development took only 3 Hours due to urgent\r\nrequirement for his book launch.', '2013-01-01', '2013-02-21'),
(4, 'raj.ranjan91956@gmail.com', 'Library Management System| College Competition', 'Developed a library management system website in college\r\ncompetition. People can search books available and can issue them.', '2012-04-01', '2012-12-27'),
(5, 'raj.ranjan91956@gmail.com', 'College Fest Website', 'Tecnoesis a techno management college fest of NIT Silchar. Worked.Worked as\r\na team leader and guided juniors in best possible way.', '2012-07-10', '2013-12-25'),
(6, 'raj.ranjan91956@gmail.com', 'Rahul Saini Personal Website | AuthorWebsite', 'A personal website of an author with his books review. A blog system\r\nfor the author. Email contact system was integrated.', '2012-07-08', '2012-07-25'),
(7, 'raj.ranjan91956@gmail.com', 'Manila Expat Services Network | Internship', 'Worked as a PHP developer for conndignsolutions to develop the server\r\nside of service providing website.\r\nWorked with foreign clients.', '2012-07-01', '2012-07-31'),
(8, 'raj.ranjan91956@gmail.com', 'Line Follower Robot', 'An infrared operated robot which can sense black and white surface and\r\ntake appropriate decision by doing calculations in AVRmicrocontroller.\r\nLearned about Architecture of At mega 32, Light sensors, Voltage\r\nRegulators and other Integrated circuits.Worked on Programmers\r\nNotepad and AVR Studio.', '2010-01-01', '2010-01-29'),
(9, 'raj.ranjan91956@gmail.com', 'Alumni Association web portal', 'Alumni portal where people can be in touch with their college mates.\r\nLatest technologies like AJAX, OOP-PHP5, Security features are used.\r\nPublic, Admin and Account area have been built.', '2013-07-01', '2014-12-24'),
(10, 'raj.ranjan91956@gmail.com', 'Cell phone Operated Robot', 'A cell phone dials a number of a mobile which is attached to the robot\r\nand the robot can be controlled by pressing keypad on the cell phone\r\nWorked on the DTMF Signals and DTMF decoderMT8870.', '2012-07-10', '2012-07-27');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE IF NOT EXISTS `social_links` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(150) DEFAULT NULL,
  `facebook` varchar(150) DEFAULT NULL,
  `quora` varchar(150) DEFAULT NULL,
  `linkedin` varchar(150) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`id`, `email`, `website`, `facebook`, `quora`, `linkedin`) VALUES
(3, 'raj.ranjan91956@gmail.com', '', 'www.facebook.com/rajranjan', '', 'www.linkedin.com/rajranjan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact_no` varchar(11) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `create_date` date DEFAULT NULL,
  `update_date` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `contact_no`, `birth_date`, `country`, `password`, `create_date`, `update_date`) VALUES
(7, 'Raj ranjan', 'raj.ranjan91956@gmail.com', '7738428573', '1992-02-16', 'india', '956956956', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_links`
--
ALTER TABLE `social_links`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `social_links`
--
ALTER TABLE `social_links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `social_links`
--
ALTER TABLE `social_links`
ADD CONSTRAINT `fk_email_from_user_to_social_links` FOREIGN KEY (`email`) REFERENCES `user` (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
