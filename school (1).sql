-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jul 14, 2019 at 08:33 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--
CREATE DATABASE IF NOT EXISTS `school` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `school`;

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `ab`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `ab` (IN `sarfaraz` INT)  SELECT * from student where studentid =sarfaraz$$

DROP PROCEDURE IF EXISTS `abc`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `abc` ()  SELECT * from employee where salary>5000$$

DROP PROCEDURE IF EXISTS `abcd`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `abcd` (IN `name` VARCHAR(20))  select * from student where student.studentname like concat(name,"%")$$

DROP PROCEDURE IF EXISTS `ac`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `ac` (OUT `result` INT)  SELECT count(*) into result from student$$

DROP PROCEDURE IF EXISTS `c`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `c` (IN `n` VARCHAR(50))  select * from employee where first_name =n$$

DROP PROCEDURE IF EXISTS `eemp`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `eemp` (IN `f` VARCHAR(20), IN `l` VARCHAR(20))  SELECT * FROM employee WHERE first_name = f AND last_name = l$$

DROP PROCEDURE IF EXISTS `getme`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `getme` (IN `n` VARCHAR(20), OUT `s` FLOAT)  select salary into s from employee where first_name like concat(n,'%')$$

DROP PROCEDURE IF EXISTS `sarfaraz`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `sarfaraz` ()  insert into employee(salary) values("6000")$$

DROP PROCEDURE IF EXISTS `selectstudents`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `selectstudents` ()  select *  from student$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

DROP TABLE IF EXISTS `author`;
CREATE TABLE IF NOT EXISTS `author` (
  `authorid` int(11) NOT NULL AUTO_INCREMENT,
  `authorname` varchar(50) NOT NULL,
  PRIMARY KEY (`authorid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`authorid`, `authorname`) VALUES
(1, 'karlmarx'),
(2, 'frederik engels');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
CREATE TABLE IF NOT EXISTS `book` (
  `bookid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`bookid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bookid`, `name`) VALUES
(1, 'communits manifesto');

-- --------------------------------------------------------

--
-- Table structure for table `bookauthor`
--

DROP TABLE IF EXISTS `bookauthor`;
CREATE TABLE IF NOT EXISTS `bookauthor` (
  `bookauthorid` int(11) NOT NULL AUTO_INCREMENT,
  `bookid` int(11) NOT NULL,
  `authorid` int(11) NOT NULL,
  PRIMARY KEY (`bookauthorid`),
  KEY `authorid` (`authorid`),
  KEY `bookid` (`bookid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookauthor`
--

INSERT INTO `bookauthor` (`bookauthorid`, `bookid`, `authorid`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `CATEGORYID` int(11) NOT NULL AUTO_INCREMENT,
  `CATEGORYNAME` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`CATEGORYID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CATEGORYID`, `CATEGORYNAME`) VALUES
(1, 'ram'),
(2, 'regtertg'),
(3, 'reytergyt');

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

DROP TABLE IF EXISTS `certificate`;
CREATE TABLE IF NOT EXISTS `certificate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `certificate_name` varchar(30) DEFAULT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `idx` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FKmbknpf3abr2yxxjvgq9orllpk` (`employee_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`id`, `certificate_name`, `employee_id`, `idx`) VALUES
(1, 'PMP', 1, NULL),
(2, 'MBA', 1, NULL),
(3, 'MCA', 1, NULL),
(6, 'MBA', 3, NULL),
(7, 'Phd', 3, NULL),
(8, 'grade 6', 6, 0),
(9, 'slc fail', 6, 1),
(10, 'derferf', 100, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `courseid` int(11) NOT NULL AUTO_INCREMENT,
  `coursename` varchar(50) NOT NULL,
  `studentid` int(11) DEFAULT NULL,
  PRIMARY KEY (`courseid`),
  KEY `studentid` (`studentid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseid`, `coursename`, `studentid`) VALUES
(1, 'computer', 3),
(2, 'language', 5),
(3, 'nepali', NULL),
(4, 'english', NULL),
(5, 'social', NULL),
(6, 'math', NULL),
(7, 'jksadhisa', 10);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `first_name`, `last_name`, `salary`) VALUES
(1, 'Manoj', 'Kumar', 5000),
(3, 'chandra', 'Tamang', 50000),
(4, NULL, NULL, 6000),
(5, NULL, NULL, 6000),
(6, 'chakra', 'baskota', 5);

-- --------------------------------------------------------

--
-- Table structure for table `hibernate_sequence`
--

DROP TABLE IF EXISTS `hibernate_sequence`;
CREATE TABLE IF NOT EXISTS `hibernate_sequence` (
  `next_val` bigint(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hibernate_sequence`
--

INSERT INTO `hibernate_sequence` (`next_val`) VALUES
(17),
(17);

-- --------------------------------------------------------

--
-- Table structure for table `hibernate_sequences`
--

DROP TABLE IF EXISTS `hibernate_sequences`;
CREATE TABLE IF NOT EXISTS `hibernate_sequences` (
  `sequence_name` varchar(255) NOT NULL,
  `next_val` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`sequence_name`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hibernate_sequences`
--

INSERT INTO `hibernate_sequences` (`sequence_name`, `next_val`) VALUES
('default', 4);

-- --------------------------------------------------------

--
-- Table structure for table `nn`
--

DROP TABLE IF EXISTS `nn`;
CREATE TABLE IF NOT EXISTS `nn` (
  `nid` int(11) NOT NULL,
  `nname` varchar(50) NOT NULL,
  PRIMARY KEY (`nid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nn`
--

INSERT INTO `nn` (`nid`, `nname`) VALUES
(1, 'ram'),
(2, 'shyam'),
(3, 'hari'),
(4, 'krishna'),
(5, 'ramesh'),
(6, 'anup'),
(7, 'birendra'),
(8, 'kris'),
(9, 'sunil'),
(10, 'anil');

-- --------------------------------------------------------

--
-- Table structure for table `nt`
--

DROP TABLE IF EXISTS `nt`;
CREATE TABLE IF NOT EXISTS `nt` (
  `studentid` int(11) NOT NULL DEFAULT '0',
  `studentname` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nt`
--

INSERT INTO `nt` (`studentid`, `studentname`) VALUES
(1, 'ram'),
(2, 'shyam'),
(3, 'hari'),
(4, 'krishna'),
(5, 'ramesh'),
(6, 'anup'),
(7, 'birendra'),
(8, 'kris'),
(9, 'sunil'),
(10, 'anil');

-- --------------------------------------------------------

--
-- Table structure for table `s400`
--

DROP TABLE IF EXISTS `s400`;
CREATE TABLE IF NOT EXISTS `s400` (
  `id` int(11) NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s400`
--

INSERT INTO `s400` (`id`, `city`) VALUES
(1, 'kathmandu'),
(5, 'kathmandua'),
(9, 'kathmandua'),
(13, 'kathmandua');

-- --------------------------------------------------------

--
-- Table structure for table `stu400`
--

DROP TABLE IF EXISTS `stu400`;
CREATE TABLE IF NOT EXISTS `stu400` (
  `id` int(11) NOT NULL,
  `sname` varchar(255) DEFAULT NULL,
  `qid` int(11) DEFAULT NULL,
  `type` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FKtdisoqahm56ag15bhqnpe77kr` (`qid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu400`
--

INSERT INTO `stu400` (`id`, `sname`, `qid`, `type`) VALUES
(2, 'chandra', 1, 0),
(3, 'c++', 1, 1),
(4, 'java', 1, 2),
(6, 'chandraa', 5, 0),
(7, 'c++a', 5, 1),
(8, 'javaa', 5, 2),
(10, 'chandraa', 9, 0),
(11, 'c++a', 9, 1),
(12, 'javaa', 9, 2),
(14, 'chandraa', 13, 0),
(15, 'c++a', 13, 1),
(16, 'javaa', 13, 2);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `studentid` int(11) NOT NULL AUTO_INCREMENT,
  `studentname` varchar(50) NOT NULL,
  PRIMARY KEY (`studentid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentid`, `studentname`) VALUES
(1, 'ram'),
(2, 'shyam'),
(3, 'hari'),
(4, 'krishna'),
(5, 'ramesh'),
(6, 'anup'),
(7, 'birendra'),
(8, 'kris'),
(9, 'sunil'),
(10, 'anil');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookauthor`
--
ALTER TABLE `bookauthor`
  ADD CONSTRAINT `bookauthor_ibfk_1` FOREIGN KEY (`authorid`) REFERENCES `author` (`authorid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bookauthor_ibfk_2` FOREIGN KEY (`bookid`) REFERENCES `book` (`bookid`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`studentid`) REFERENCES `student` (`studentid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
