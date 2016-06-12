-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 27, 2013 at 12:54 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `resume_pro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `Name` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `Name`, `password`, `email`, `id`) VALUES
('snake', 'Sourabh', 'dodgeviper', 'sousnake@gmail.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE IF NOT EXISTS `cv` (
  `username` varchar(10) NOT NULL,
  `Name` varchar(25) DEFAULT NULL,
  `roll_no` varchar(11) DEFAULT NULL,
  `cpi` varchar(10) DEFAULT '0',
  `10_marks` varchar(10) DEFAULT '0',
  `12_marks` varchar(10) DEFAULT '0',
  `Skills` varchar(100) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=148 ;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`username`, `Name`, `roll_no`, `cpi`, `10_marks`, `12_marks`, `Skills`, `id`) VALUES
('sousnake', 'Sourabhmas Maheshwari', 'UG201010032', '8.44', '42.8', '39.6', 'Php,JavaScript,Xml', 146),
('panakj', 'Pankaj', 'UG201010025', '7.5', '90', '88', 'Java,Php,Javascript', 133),
('khusii', 'Khuseeram', 'UG201010011', '4.99', '46', '90', 'Java', 136),
('kabra', 'Sumit', 'UG200010000', '8.88', '77', '82', 'Latex', 143),
('pavan', 'Pavan Sukalkar', 'UG201010033', '8.33', '92', '88', 'Php,JavaScript,Xml', 147);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `username` varchar(15) NOT NULL,
  `p_title` varchar(20) DEFAULT NULL,
  `p_des` varchar(200) DEFAULT NULL,
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=168 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`username`, `p_title`, `p_des`, `pid`) VALUES
('kabra', 'CypherIt', '""a Cryptography Project" " ', 159),
('sousnake', 'Cab Service', 'A java Applicaion demonstrating GUI', 165),
('panakj', 'Cab Service', '"A java Application done good" ', 145),
('panakj', 'Matching String', '"A javascript project under DR.Gaurav Harit" ', 146),
('khusii', 'Chat Applicatio', '"DR. Ramana Sir" ', 149),
('sousnake', 'Spc Portal', 'php wed Application under Dr. Gaurav Harit', 164),
('kabra', 'Music Library Builde', '""A Java Application, U can synchronize songs" " ', 158),
('pavan', 'Spc Portal', 'php wed Application under Dr. Gaurav Harit', 166),
('pavan', 'Cab Service', 'A java Applicaion demonstrating GUI', 167);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Name` varchar(25) DEFAULT NULL,
  `username` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `email_id` varchar(20) DEFAULT NULL,
  `security_ques` varchar(255) NOT NULL,
  `security_ans` varchar(255) NOT NULL,
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Name`, `username`, `Password`, `email_id`, `security_ques`, `security_ans`, `uid`) VALUES
('Sourabh', 'sousnake', '9352562860', 'sousnake@gmail.com', 'Who am i?', 'I am gadha...', 38),
('Pankaj', 'panakj', 'pankajk', 'pankaj@iitj.ac.in', 'Who am i?', 'I am god.', 39),
('Sumit', 'kabra', 'sumit', 'sumit@yahoo.com', 'birth place?', 'kanpur', 40),
('Pavan Sukalkar', 'pavan', 'pavan', 'pavan@gmail.com', 'Who am i?', 'I am engineer', 41);
