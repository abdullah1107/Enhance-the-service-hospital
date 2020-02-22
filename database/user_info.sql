-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2016 at 09:11 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `information`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
  `user_id` int(7) NOT NULL AUTO_INCREMENT,
  `test` varchar(15) NOT NULL,
  `Department` varchar(15) NOT NULL,
  `AttendingPhysician` varchar(35) NOT NULL,
  `image_path` mediumtext NOT NULL,
  `Name` varchar(15) NOT NULL,
  `age` int(15) NOT NULL,
  `sex` varchar(15) NOT NULL,
  `password` varchar(7) NOT NULL,
  `Confirmpassword` varchar(15) NOT NULL,
  `dat` varchar(15) NOT NULL,
  `pr_diagnostics` varchar(25) NOT NULL,
  `bloodpressure` varchar(15) NOT NULL,
  `pulse` varchar(15) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `energy` varchar(15) NOT NULL,
  `blood_group` varchar(15) NOT NULL,
  `complain` text NOT NULL,
  `management` varchar(100) NOT NULL,
  `history` varchar(120) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `test`, `Department`, `AttendingPhysician`, `image_path`, `Name`, `age`, `sex`, `password`, `Confirmpassword`, `dat`, `pr_diagnostics`, `bloodpressure`, `pulse`, `weight`, `energy`, `blood_group`, `complain`, `management`, `history`) VALUES
(1, 'blood', 'Surgery', 'Dr.Gias Uddin', '', 'man', 23, 'male', '123', '123', '2/27/2016', 'no', '', '', '', '', '', '\r\n            ', '\r\n            ', '\r\n\r\n          '),
(2, 'blood', 'GynaeandObs', 'Dr.Md.Mahbubul Alam', '', 'nan', 22, 'male', '234', '234', '2/28/2016', 'yes', '', '', '', '', '', '\r\n            ', '\r\n            ', '\r\n\r\n          '),
(3, 'x-ray', 'Surgery', 'Dr.Md.Mahbubul Alam', '', 'lal', 22, 'm', '456', '456', '2/28/2016', 'yrs', '', '', '', '', '', '\r\n            ', '\r\n            ', '\r\n\r\n          '),
(4, 'x-ray', 'Surgery', 'Dr.Md.Mahbubul Alam', '', 'no', 34, 'm', '678', '678', '2/28/2016', 'hgf', '', '', '', '', '', '\r\n            ', '\r\n            ', '\r\n\r\n          '),
(5, 'x-ray', 'Medicine', 'Dr.Gias Uddin', '', 'man', 24, 'male', '000', '000', '2/28/2016', 'bal', '', '', '', '', '', '\r\n            ', '\r\n            ', '\r\n\r\n          '),
(6, 'x-ray', 'Surgery', 'Dr.Jasim Uddin', '', 'jjj', 89, 'jk', 'mmm', 'mmm', 'hjgjk', 'jhg', '', '', '', '', '', '\r\n            ', '\r\n            ', '\r\n\r\n          '),
(7, 'blood', 'Cardiology', 'Dr.Md.Mahbubul Alam', 'upload/12721920_1141431692534351_979412156_n.jpg', 'mmm', 65, 'mfg', 'nnn', 'nnn', 'ghtgf', 'gjgf', '', '', '', '', '', '\r\n            ', '\r\n            ', '\r\n\r\n          '),
(8, 'blood', 'Surgery', 'Dr.Jasim Uddin', 'upload/l.jpg', 'nnn', 45, 'bb', 'bbb', 'bbb', 'fg', 'nfgd', '', '', '', '', '', '\r\n            ', '\r\n            ', '\r\n\r\n          '),
(9, 'x-ray', 'Surgery', 'Dr.Jasim Uddin', 'upload/new.txt', 'mal', 23, 'male', 'ttt', 'ttt', '43765', 'hfd', '', '', '', '', '', '\r\n            ', '\r\n            ', '\r\n\r\n          '),
(10, 'blood', 'Cardiology', 'Dr.Abdul Mannan', 'upload/shriya-saran_140533520600.jpg', 'mal', 23, 'male', 'mal', 'mal', '2/29/2016', 'badnews', '', '', '', '', '', '\r\n            ', '\r\n            ', '\r\n\r\n          '),
(11, 'blood', 'SkinandVenerial', 'Dr.Salauddin Mamun', 'upload/New-Text-Document.txt', 'tanvir', 23, 'male', 'tan', 'tan', '3/3/2016', 'bal', '', '', '', '', '', '\r\n            ', '\r\n            ', '\r\n\r\n          ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
