-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2018 at 10:50 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `poll`
--

-- --------------------------------------------------------

--
-- Table structure for table `party_info`
--

CREATE TABLE IF NOT EXISTS `party_info` (
  `party_name` varchar(20) NOT NULL,
  `symbol` varchar(20) NOT NULL,
  `year_eastablishment` int(4) NOT NULL,
  `no_representatives` int(3) NOT NULL,
  `headquarters` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbadministrators`
--

CREATE TABLE IF NOT EXISTS `tbadministrators` (
  `admin_id` int(5) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbadministrators`
--

INSERT INTO `tbadministrators` (`admin_id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Kimani', 'Kahiga', 'admin@example.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tbcandidates`
--

CREATE TABLE IF NOT EXISTS `tbcandidates` (
  `candidate_id` int(5) NOT NULL AUTO_INCREMENT,
  `candidate_name` varchar(45) NOT NULL,
  `candidate_position` varchar(45) NOT NULL,
  `candidate_cvotes` int(11) NOT NULL,
  PRIMARY KEY (`candidate_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=137 ;

--
-- Dumping data for table `tbcandidates`
--

INSERT INTO `tbcandidates` (`candidate_id`, `candidate_name`, `candidate_position`, `candidate_cvotes`) VALUES
(3, 'NARENDRA MODI', 'BJP', 110),
(4, 'AMIT SHAH', 'BJP', 21),
(6, 'RAHUL GANDHI', 'CONGRESS', 0),
(8, 'SONIA GANDHI', 'CONGRESS', 8),
(9, 'MANMOHAN SINGH', 'CONGRESS', 46),
(10, 'NARASIMHA RAO', 'CONGRESS', 0),
(11, 'DEVE GOWDA', 'JDS', 0),
(12, 'C. BALARAM', 'JDS', 0),
(13, 'KUNWAR DANISH ALI', 'JDS', 0),
(14, 'KULDEEP SINGH RANA', 'JDS', 0),
(15, 'ARVIND ', 'AAM', 0),
(16, 'SHAZIA', 'AAM', 0),
(17, 'MANISH', 'AAM', 30),
(18, 'DHARAMVIR GANDHI', 'AAM', 14),
(19, 'CHANDRABABU NAIDU ', 'TDP', 4),
(20, 'LOKESH', 'TDP', 1),
(22, 'NARAYANA', 'TDP', 2),
(35, 'RAJNATH SINGH', 'BJP', 1),
(78, 'LK ADVANI', 'BJP', 11),
(100, 'KUMAR ', 'YCP', 3),
(108, 'SUREKHA', 'YCP', 1),
(110, 'VIJAYA LAKSHMI', 'YCP', 2),
(113, 'AKHILESH', 'HNP', 2),
(115, 'REKHA ', 'HNP', 9),
(116, 'UJWAL', 'HNP', 3),
(117, 'CHINNARAJAPPA', 'TDP', 2),
(118, 'JAGANMOHAN', 'YCP', 5),
(119, 'PAYAL', 'HNP', 45),
(131, 'PALANISWAMI', 'AIADMK', 10),
(133, 'PANNERSWAMI', 'AIADMK', 12),
(135, 'THAMBIDURAI', 'AIADMK', 12),
(136, 'RAMACHANDRAN', 'AIADMK', 7);

-- --------------------------------------------------------

--
-- Table structure for table `tbmembers`
--

CREATE TABLE IF NOT EXISTS `tbmembers` (
  `member_id` int(5) NOT NULL AUTO_INCREMENT,
  `voterid` varchar(12) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tbmembers`
--

INSERT INTO `tbmembers` (`member_id`, `voterid`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, '0', 'Kimani', 'Kahiga', 'kahiga@gmail.com', '547da2b03f947606f1d06a8dec093e64'),
(2, '0', 'MacDonald', 'Ngowi', 'mcbcrue08@gmail.com', '14b876400a7ae986df9b17fbaffb9eca'),
(3, '0', 'test', 'testt', 'test@example.com', '098f6bcd4621d373cade4e832627b4f6'),
(4, '0', 'sai', 'abhishek', 'sai@gmail.com', 'a29bac723ca2d59ed78a2d715e17e92f'),
(5, '0', 'sai', 'abhishek', 'saiabhishek1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(6, '0', 'alaska', 'jain', 'alaska@gmail.com', '202cb962ac59075b964b07152d234b70'),
(7, '523', 'alaska', 'jain', 'alaska1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(8, '0', 'gaur', 'jain', 'gaurav12@gmail.com', '70c278e66c9bc7683f0ad2748f694b43'),
(9, '0', 'hey', 'heyy', 'hey@ak.com', '202cb962ac59075b964b07152d234b70'),
(10, '123456', 'sai', 'kumari', 'sai@gmail.com', '123'),
(11, '', 'ai', 'shrn', 'shh@y1.com', '250cf8b51c773f3f8dc8b4be867a9a02'),
(12, '', 'ket', 'aki', 'aki@super.com', '202cb962ac59075b964b07152d234b70'),
(13, '', 'ket', 'aki', 'aki@super.com', '79e754e39c0f26bba87724d8353c41f7'),
(14, '', 'ket', 'aki', 'aki@super.com', '79e754e39c0f26bba87724d8353c41f7'),
(15, '', 'ket', 'aki', 'aki@super.com', '79e754e39c0f26bba87724d8353c41f7'),
(16, '', 'ket', 'aki', 'aki@super.com', '79e754e39c0f26bba87724d8353c41f7'),
(17, '', 'ketakiii', 'et', 'ketaki12@gmail.com', '79e754e39c0f26bba87724d8353c41f7');

-- --------------------------------------------------------

--
-- Table structure for table `tbpositions`
--

CREATE TABLE IF NOT EXISTS `tbpositions` (
  `position_id` int(5) NOT NULL AUTO_INCREMENT,
  `position_name` varchar(45) NOT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbpositions`
--

INSERT INTO `tbpositions` (`position_id`, `position_name`) VALUES
(1, 'BJP'),
(2, 'CONGRESS'),
(5, 'JDS'),
(7, 'AAM'),
(8, 'TDP'),
(9, 'YCP'),
(10, 'HNP'),
(11, 'AIADMK');

-- --------------------------------------------------------

--
-- Table structure for table `voter_info`
--

CREATE TABLE IF NOT EXISTS `voter_info` (
  `voter_id` int(10) NOT NULL,
  `adhar_no` int(16) NOT NULL,
  `phno` int(10) NOT NULL,
  `age` int(2) NOT NULL,
  `accno` int(5) NOT NULL,
  `vote_casted` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
