-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 10, 2013 at 09:30 AM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `user`
--
CREATE DATABASE `user` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `user`;

-- --------------------------------------------------------

--
-- Table structure for table `bookclass`
--

CREATE TABLE IF NOT EXISTS `bookclass` (
  `classid` varchar(11) NOT NULL,
  `classname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`classid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookclass`
--

INSERT INTO `bookclass` (`classid`, `classname`) VALUES
('000', 'General Works'),
('100', 'Philosophy'),
('200', 'Religions'),
('300', 'Social Science'),
('400', 'Languages'),
('500', 'Natural Science'),
('600', 'Technology'),
('700', 'Arts/Recreation'),
('800', 'Literature');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `bookid` int(11) NOT NULL AUTO_INCREMENT,
  `accNo` int(50) NOT NULL,
  `booksubject` varchar(100) DEFAULT NULL,
  `booktitle` varchar(50) DEFAULT NULL,
  `bookclass` varchar(50) DEFAULT NULL,
  `author1` varchar(50) DEFAULT NULL,
  `author2` varchar(50) DEFAULT NULL,
  `author3` varchar(50) DEFAULT NULL,
  `bookpub` varchar(50) DEFAULT NULL,
  `booked` varchar(50) NOT NULL,
  `bookcopies` int(11) DEFAULT '0',
  `isbn` varchar(50) DEFAULT NULL,
  `copyright` int(11) DEFAULT '0',
  `daterecieve` varchar(20) DEFAULT NULL,
  `dateadded` datetime DEFAULT NULL,
  `placeofpob` varchar(50) DEFAULT NULL,
  `status` int(20) NOT NULL,
  PRIMARY KEY (`bookid`),
  KEY `author1` (`author1`),
  KEY `author2` (`author2`),
  KEY `author3` (`author3`),
  KEY `bookclass` (`bookclass`),
  KEY `bookcopies` (`bookcopies`),
  KEY `booked` (`booked`),
  KEY `bookid` (`bookid`),
  KEY `bookpub` (`bookpub`),
  KEY `booksubject` (`booksubject`),
  KEY `booktitle` (`booktitle`),
  KEY `copyright` (`copyright`),
  KEY `dateadded` (`dateadded`),
  KEY `daterecieve` (`daterecieve`),
  KEY `isbn` (`isbn`),
  KEY `placeofpob` (`placeofpob`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2411 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookid`, `accNo`, `booksubject`, `booktitle`, `bookclass`, `author1`, `author2`, `author3`, `bookpub`, `booked`, `bookcopies`, `isbn`, `copyright`, `daterecieve`, `dateadded`, `placeofpob`, `status`) VALUES
(2338, 4872, '', 'Adventure oh Huckleberry Finn', '700', 'Twain shaen', '', '', '', '', 102, '', 0, '2013-04-01 02:10:26', '2013-04-01 02:10:26', '', 1),
(2367, 4875, '', 'C++ programming Language', '600', 'dyesebel romo', '', '', '', '', 19, '', 0, '2013-04-19 18:53:19', '2013-04-19 18:53:19', '', 1),
(2366, 4936, '', 'Business Writing', '800', 'Janis, J. Harold', '', '', '', '', 119, '', 0, '2013-2014', '2013-01-23 11:25:22', '', 0),
(2369, 8787, '', 'Place Of Publication Book Edition Book Place Of Pu', '100', 'Jade langa', '', '', '', '', 96, '', 0, '2013-2014', '2013-03-20 17:33:07', '', 1),
(2378, 487234, 'English', 'manual of life', '200', 'jade langa', '', '', '', '', 23, '', 0, '2013-02-07 18:34:43', '2013-02-07 18:34:43', '', 0),
(2379, 2323245, '', '', '', '', '', '', '', '', 0, '', 0, '2013-02-07 18:34:51', '2013-02-07 18:34:51', '', 0),
(2380, 232324534, '', '', '', '', '', '', '', '', 0, '', 0, '2013-02-07 18:35:33', '2013-02-07 18:35:33', '', 0),
(2381, 48722, '', '', '', '', '', '', '', '', 0, '', 0, '2013-02-07 18:36:02', '2013-02-07 18:36:02', '', 0),
(2382, 4333, '', '', '', '', '', '', '', '', 0, '', 0, '2013-02-07 18:36:17', '2013-02-07 18:36:17', '', 0),
(2383, 87878787, '', '', '', '', '', '', '', '', 0, '', 0, '2013-03-19 07:35:57', '2013-03-19 07:35:57', '', 0),
(2384, 6969, 'Math', 'Algebra', '700', 'Allbert Einstien', '', '', '', '', 90, '', 0, '2013-04-19 18:53:47', '2013-04-19 18:53:47', '', 1),
(2386, 48725, 'Math', 'java programming Language', '600', 'dyesebel romo dfdf', '', '', '', '', 686, '', 0, '2012-2013', '2013-05-02 05:14:50', '', 1),
(2387, 878734, 'Science', 'Geometry', '700', 'wala', '', '', '', '', 23, '', 0, '2012-2013', '2013-03-21 05:02:49', '', 0),
(2388, 87874, 'Science math', 'Chemestry', '300', 'langa family', '', '', '', '', 12, '', 0, '2011-2012', '2013-04-01 19:55:46', '', 1),
(2389, 435, 'Math', 'Place Of Publication Book Edition Book Place Of Pu', '400', 'sdsd', 'ds', '', '', '', -1, '', 0, '2011-2012', '2013-03-21 18:13:29', '', 1),
(2390, 4333454, '', '', '', '', '', '', '', '', 0, '', 0, '2011-2012', '2013-03-21 18:41:00', '', 0),
(2391, 76766, '', '', '', '', '', '', '', '', 0, '', 0, '2011-2012', '2013-03-21 18:41:17', '', 0),
(2392, 5454, '', '', '', '', '', '', '', '', 0, '', 0, '2011-2012', '2013-03-21 18:41:26', '', 0),
(2393, 67667, '', '', '', '', '', '', '', '', 0, '', 0, '2011-2012', '2013-03-21 18:41:51', '', 0),
(2394, 345345, '', '', '', '', '', '', '', '', 0, '', 0, '2011-2012', '2013-03-21 18:44:22', '', 0),
(2395, 452, '', '', '', '', '', '', '', '', 0, '', 0, '2011-2012', '2013-03-21 18:44:34', '', 0),
(2396, 124522, '', '', '', '', '', '', '', '', 0, '', 0, '2011-2012', '2013-03-21 18:45:38', '', 0),
(2397, 546567, '', '', '', '', '', '', '', '', 0, '', 0, '2011-2012', '2013-03-21 18:45:52', '', 0),
(2398, 1222212, '', '', '', '', '', '', '', '', 0, '', 0, '2011-2012', '2013-03-21 18:46:07', '', 0),
(2399, 4324234, '', '', '', '', '', '', '', '', 0, '', 0, '2011-2012', '2013-04-01 19:46:40', '', 0),
(2400, 433455, '', '', '', '', '', '', '', '', 0, '', 0, '2011-2012', '2013-04-01 19:48:32', '', 0),
(2401, 34522, '', '', '', '', '', '', '', '', 0, '', 0, '2011-2012', '2013-04-01 20:02:43', '', 0),
(2402, 3432434, '', '', '', '', '', '', '', '', 12, '', 0, '2013-04-01 20:14:23', '2013-04-01 20:14:23', '', 0),
(2403, 45454, '', '', '', '', '', '', '', '', 0, '', 0, '2011-2012', '2013-04-01 20:13:29', '', 0),
(2404, 34535, '', '', '', '', '', '', '', '', 0, '', 0, '2011-2012', '2013-04-01 20:14:07', '', 0),
(2405, 3545, '', '', '', '', '', '', '', '', 0, '', 0, '2011-2012', '2013-04-01 20:14:12', '', 0),
(2406, 4554, '', '', '', '', '', '', '', '', 23, '', 0, '2013-04-01 20:20:43', '2013-04-01 20:20:43', '', 0),
(2407, 9343924, 'Java', 'Object Oriented Programming', '700', 'SPCFI', '', '', '', '', 21, '345354545', 0, '2013-2014', '2013-03-31 22:03:01', '', 1),
(2408, 2334, 'Programming', 'C/VB.net', '600', 'asdsad', '', '', '', '', 13, '', 0, '2013-04-01 02:10:34', '2013-04-01 02:10:34', '', 1),
(2409, 5466, '', '', '', '', '', '', '', '', 0, '', 0, '2011-2012', '2013-03-31 22:03:12', '', 0),
(2410, 54656, '', '', '', '', '', '', '', '', 0, '', 0, '2013-2014', '2013-04-01 00:40:00', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sy`
--

CREATE TABLE IF NOT EXISTS `sy` (
  `syid` int(11) NOT NULL AUTO_INCREMENT,
  `year` varchar(20) NOT NULL,
  PRIMARY KEY (`syid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sy`
--

INSERT INTO `sy` (`syid`, `year`) VALUES
(1, '2011-2012'),
(2, '2012-2013'),
(3, '2013-2014'),
(4, '2014-2015');

-- --------------------------------------------------------

--
-- Table structure for table `tblbookreserve`
--

CREATE TABLE IF NOT EXISTS `tblbookreserve` (
  `resid` int(11) NOT NULL AUTO_INCREMENT,
  `accNo` int(11) NOT NULL,
  `studentid` int(11) NOT NULL,
  `timeres` time NOT NULL,
  `timeget` datetime NOT NULL,
  `status` int(50) NOT NULL,
  PRIMARY KEY (`resid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=127 ;

--
-- Dumping data for table `tblbookreserve`
--

INSERT INTO `tblbookreserve` (`resid`, `accNo`, `studentid`, `timeres`, `timeget`, `status`) VALUES
(125, 435, 41, '06:57:51', '2013-04-19 19:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblborrow`
--

CREATE TABLE IF NOT EXISTS `tblborrow` (
  `borrowid` int(11) NOT NULL AUTO_INCREMENT,
  `accNo` varchar(50) NOT NULL,
  `classid` int(11) NOT NULL DEFAULT '0',
  `studentid` bigint(50) NOT NULL,
  `dateborrow` datetime NOT NULL,
  `duedate` date DEFAULT NULL,
  `datereturn` date NOT NULL,
  `status` varchar(50) DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `item` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`borrowid`),
  KEY `bookid` (`accNo`),
  KEY `borrowerid` (`studentid`),
  KEY `borrowid` (`borrowid`),
  KEY `classid` (`classid`),
  KEY `item` (`item`),
  KEY `purpose` (`status`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=423 ;

--
-- Dumping data for table `tblborrow`
--

INSERT INTO `tblborrow` (`borrowid`, `accNo`, `classid`, `studentid`, `dateborrow`, `duedate`, `datereturn`, `status`, `amount`, `item`) VALUES
(417, '4875', 600, 41, '2013-04-01 02:31:55', '2013-04-01', '2013-04-08', 'Signed', '2.00', 0),
(416, '87874', 300, 24, '2013-04-01 02:25:46', '2013-04-01', '2013-04-19', 'Signed', '2.00', 0),
(415, '87874', 300, 24, '2013-04-01 02:20:47', '2013-04-01', '2013-04-01', 'Signed', '0.00', 1),
(414, '2334', 600, 24, '2013-04-01 02:19:45', '2013-04-01', '2013-04-01', 'Signed', '2.00', 1),
(413, '2334', 600, 24, '2013-04-01 02:17:14', '2013-04-01', '2013-04-26', 'Signed', '2.00', 0),
(411, '4875', 600, 24, '2013-04-01 02:16:07', '2013-04-01', '2013-04-01', 'Signed', '2.00', 1),
(412, '8787', 100, 24, '2013-04-01 02:16:23', '2013-04-01', '2013-04-26', 'Signed', '2.00', 0),
(410, '6969', 700, 24, '2013-04-01 02:15:15', '2013-04-01', '2013-04-01', 'Signed', '2.00', 1),
(418, '8787', 100, 45, '2013-04-19 18:51:33', '2013-04-10', '2013-04-19', 'Signed', '2.00', 0),
(419, '435', 400, 41, '2013-04-19 18:54:58', '2013-04-19', '0000-00-00', 'Signed', '2.00', 1),
(420, '435', 400, 41, '2013-04-19 18:58:30', '2013-04-19', '0000-00-00', 'Unsigned', '2.00', 1),
(421, '8787', 100, 24, '2013-05-15 18:33:22', '2013-05-01', '2013-05-15', 'Signed', '2.00', 0),
(422, '4875', 600, 24, '2013-05-15 18:45:22', '2013-05-15', '0000-00-00', 'Unsigned', '2.00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblborrower`
--

CREATE TABLE IF NOT EXISTS `tblborrower` (
  `studentid` int(11) NOT NULL AUTO_INCREMENT,
  `lname` varchar(50) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `mi` varchar(2) DEFAULT NULL,
  `contactnumber` bigint(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `photo` varchar(50) NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `levelyr` varchar(50) DEFAULT NULL,
  `sy` varchar(10) NOT NULL,
  `section` varchar(30) NOT NULL,
  `dateadded` datetime DEFAULT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`studentid`),
  KEY `address` (`address`),
  KEY `gender` (`gender`),
  KEY `levelyr` (`levelyr`),
  KEY `lname` (`lname`),
  KEY `mi` (`mi`),
  KEY `fname` (`fname`),
  KEY `studentid` (`studentid`),
  KEY `contactnumber` (`contactnumber`),
  KEY `type` (`type`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `tblborrower`
--

INSERT INTO `tblborrower` (`studentid`, `lname`, `fname`, `gender`, `mi`, `contactnumber`, `address`, `photo`, `type`, `levelyr`, `sy`, `section`, `dateadded`, `status`) VALUES
(24, 'Langa', 'Jade', 'Male', 'C', 9322865875, 'san fernando', '', 'Teacher', '1st Year', '2013-2014', 'jade', '2013-05-15 18:36:48', 1),
(41, 'Tangente', 'Armhele', 'Female', 'R', 9322865875, 'Bulacao Cebu', '1360140014_247256571971116.jpg', 'Student', '4th Year', '2013-2014', 'bato', '2013-03-23 20:37:55', 1),
(43, 'Del soccoro', 'Cloudine', 'Female', 'A', 9322865875, 'Minglanilla', '1364180776_Blue hills.jpg', 'Teacher', '1st Year', '2013-2014', 'jade', '2013-03-25 11:06:16', 1),
(45, 'adsad', 'asd', 'Male', 'd', 9322865875, 'asdasd', '1364042802_Sunset.jpg', 'Teacher', '2nd Year', '2013-2014', 'rubi', '2013-03-23 20:46:42', 1),
(46, 'assd', 'asdas', 'Female', 'd', 9322865875, 'asdsad', '1364043021_Winter.jpg', 'Teacher', '3rd Year', '2013-2014', 'emerald', '2013-03-27 05:23:11', 0),
(47, 'asds', 'das', 'Male', 'a', 33434, 'sdsad', '', 'Employee', '4th Year', '2013-2014', 'Diamond', '2013-03-27 05:23:35', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblpayment`
--

CREATE TABLE IF NOT EXISTS `tblpayment` (
  `payid` int(11) NOT NULL AUTO_INCREMENT,
  `amount` decimal(10,2) NOT NULL,
  PRIMARY KEY (`payid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tblpayment`
--

INSERT INTO `tblpayment` (`payid`, `amount`) VALUES
(1, '2.00');

-- --------------------------------------------------------

--
-- Table structure for table `tblreciept`
--

CREATE TABLE IF NOT EXISTS `tblreciept` (
  `recieptid` int(11) NOT NULL AUTO_INCREMENT,
  `studentid` int(11) NOT NULL,
  `accNo` int(11) NOT NULL,
  `borrowid` int(11) NOT NULL,
  `datedue` varchar(50) NOT NULL,
  `datereturn` varchar(50) NOT NULL,
  `totaldays` varchar(50) NOT NULL,
  `totalpay` varchar(50) NOT NULL,
  PRIMARY KEY (`recieptid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Dumping data for table `tblreciept`
--

INSERT INTO `tblreciept` (`recieptid`, `studentid`, `accNo`, `borrowid`, `datedue`, `datereturn`, `totaldays`, `totalpay`) VALUES
(37, 24, 87874, 405, 'January 01 2013', 'April 01, 2013', '90', '180.00'),
(36, 41, 6969, 404, 'April 01 2013', 'April 15, 2013', '14', '28.00'),
(35, 41, 4872, 403, 'April 01 2013', 'April 22, 2013', '21', '42.00'),
(34, 43, 6969, 401, 'April 01 2013', 'April 24, 2013', '23', '46.00'),
(33, 24, 4872, 400, 'April 01 2013', 'April 26, 2013', '25', '50.00'),
(38, 24, 2334, 413, 'April 01 2013', 'April 26, 2013', '25', '50.00'),
(39, 24, 8787, 412, 'April 01 2013', 'April 26, 2013', '25', '50.00'),
(40, 41, 4875, 417, 'April 01 2013', 'April 08, 2013', '7', '14.00'),
(41, 24, 87874, 416, 'April 01 2013', 'April 19, 2013', '18', '36.00'),
(42, 45, 8787, 418, 'April 10 2013', 'April 19, 2013', '9', '18.00'),
(43, 24, 8787, 421, 'May 01 2013', 'May 15, 2013', '14', '28.00');

-- --------------------------------------------------------

--
-- Table structure for table `tblsection`
--

CREATE TABLE IF NOT EXISTS `tblsection` (
  `sec_id` int(11) NOT NULL AUTO_INCREMENT,
  `yr_id` int(11) NOT NULL,
  `section` varchar(20) NOT NULL,
  PRIMARY KEY (`sec_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `tblsection`
--

INSERT INTO `tblsection` (`sec_id`, `yr_id`, `section`) VALUES
(1, 1, 'jade'),
(2, 2, 'rubi '),
(3, 3, 'emerald'),
(4, 4, 'Diamond'),
(16, 1, 'Isidore'),
(21, 1, 'jade'),
(51, 3, 'Add Third Year'),
(39, 4, 'Pearl');

-- --------------------------------------------------------

--
-- Table structure for table `tbltype`
--

CREATE TABLE IF NOT EXISTS `tbltype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `borrowertype` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `borrowertype` (`borrowertype`),
  KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `tbltype`
--

INSERT INTO `tbltype` (`id`, `borrowertype`) VALUES
(2, 'Teacher'),
(20, 'Employee'),
(21, 'Non-Teaching'),
(22, 'Student'),
(32, 'Contruction');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `username`, `password`) VALUES
(1, 'librarian', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `userlogin`
--

CREATE TABLE IF NOT EXISTS `userlogin` (
  `loginid` int(11) NOT NULL AUTO_INCREMENT,
  `studentid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`loginid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `userlogin`
--

INSERT INTO `userlogin` (`loginid`, `studentid`, `username`, `password`) VALUES
(21, 43, 'Del soccoro', 'a'),
(20, 24, 'Langa', 'a'),
(22, 41, 'Tangente', 'a');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
