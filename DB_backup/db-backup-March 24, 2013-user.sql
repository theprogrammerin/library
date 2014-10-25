

CREATE TABLE `bookclass` (
  `classid` varchar(11) NOT NULL,
  `classname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`classid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO bookclass VALUES("000","General Works");
INSERT INTO bookclass VALUES("100","Philosophy");
INSERT INTO bookclass VALUES("200","Religions");
INSERT INTO bookclass VALUES("300","Social Science");
INSERT INTO bookclass VALUES("400","Languages");
INSERT INTO bookclass VALUES("500","Natural Science");
INSERT INTO bookclass VALUES("600","Technology");
INSERT INTO bookclass VALUES("700","Arts/Recreation");
INSERT INTO bookclass VALUES("800","Literature");





CREATE TABLE `books` (
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
) ENGINE=MyISAM AUTO_INCREMENT=2399 DEFAULT CHARSET=utf8;

INSERT INTO books VALUES("2338","4872","","Adventure oh Huckleberry Finn","700","Twain","","","","","5","","0","2013-01-20 20:19:05","2013-01-20 20:19:05","","1");
INSERT INTO books VALUES("2367","4875","","C++ programming Language","600","dyesebel romo","","","","","-12","","0","2013-03-19 07:41:33","2013-03-19 07:41:33","","1");
INSERT INTO books VALUES("2366","4936","","Business Writing","800","Janis, J. Harold","","","","","119","","0","2013-01-23 11:25:22","2013-01-23 11:25:22","","0");
INSERT INTO books VALUES("2369","8787","","Place Of Publication Book Edition Book Place Of Pu","100","Jade langa","","","","","98","","0","2013-03-20 17:33:07","2013-03-20 17:33:07","","1");
INSERT INTO books VALUES("2378","487234","English","manual of life","200","jade langa","","","","","23","","0","2013-02-07 18:34:43","2013-02-07 18:34:43","","0");
INSERT INTO books VALUES("2379","2323245","","","","","","","","","0","","0","2013-02-07 18:34:51","2013-02-07 18:34:51","","0");
INSERT INTO books VALUES("2380","232324534","","","","","","","","","0","","0","2013-02-07 18:35:33","2013-02-07 18:35:33","","0");
INSERT INTO books VALUES("2381","48722","","","","","","","","","0","","0","2013-02-07 18:36:02","2013-02-07 18:36:02","","0");
INSERT INTO books VALUES("2382","4333","","","","","","","","","0","","0","2013-02-07 18:36:17","2013-02-07 18:36:17","","0");
INSERT INTO books VALUES("2383","87878787","","","","","","","","","0","","0","2013-03-19 07:35:57","2013-03-19 07:35:57","","0");
INSERT INTO books VALUES("2384","6969","Math","Algebra","700","Allbert Einstien","","","","","15","","0","2013-03-20 18:15:44","2013-03-20 18:15:44","","1");
INSERT INTO books VALUES("2386","48725","Math","java programming Language","600","dyesebel romo dfdf","","","","","89","","0","2011-2012","2013-03-21 04:47:48","","1");
INSERT INTO books VALUES("2387","878734","Science","Geometry","700","wala","","","","","23","","0","2012-2013","2013-03-21 05:02:49","","0");
INSERT INTO books VALUES("2388","87874","Science math","Chemestry","300","langa family","","","","","23","","0","2011-2012","2013-03-21 05:03:55","","1");
INSERT INTO books VALUES("2389","435","Math","Place Of Publication Book Edition Book Place Of Pu","400","sdsd","ds","","","","23","","0","2011-2012","2013-03-21 18:13:29","","1");
INSERT INTO books VALUES("2390","4333454","","","","","","","","","0","","0","2011-2012","2013-03-21 18:41:00","","0");
INSERT INTO books VALUES("2391","76766","","","","","","","","","0","","0","2011-2012","2013-03-21 18:41:17","","0");
INSERT INTO books VALUES("2392","5454","","","","","","","","","0","","0","2011-2012","2013-03-21 18:41:26","","0");
INSERT INTO books VALUES("2393","67667","","","","","","","","","0","","0","2011-2012","2013-03-21 18:41:51","","0");
INSERT INTO books VALUES("2394","345345","","","","","","","","","0","","0","2011-2012","2013-03-21 18:44:22","","0");
INSERT INTO books VALUES("2395","452","","","","","","","","","0","","0","2011-2012","2013-03-21 18:44:34","","0");
INSERT INTO books VALUES("2396","124522","","","","","","","","","0","","0","2011-2012","2013-03-21 18:45:38","","0");
INSERT INTO books VALUES("2397","546567","","","","","","","","","0","","0","2011-2012","2013-03-21 18:45:52","","0");
INSERT INTO books VALUES("2398","1222212","","","","","","","","","0","","0","2011-2012","2013-03-21 18:46:07","","0");





CREATE TABLE `sy` (
  `syid` int(11) NOT NULL AUTO_INCREMENT,
  `year` varchar(20) NOT NULL,
  PRIMARY KEY (`syid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO sy VALUES("1","2011-2012");
INSERT INTO sy VALUES("2","2012-2013");
INSERT INTO sy VALUES("3","2013-2014");
INSERT INTO sy VALUES("4","2014-2015");





CREATE TABLE `tblbookreserve` (
  `resid` int(11) NOT NULL AUTO_INCREMENT,
  `accNo` int(11) NOT NULL,
  `studentid` int(11) NOT NULL,
  `timeres` time NOT NULL,
  `timeget` datetime NOT NULL,
  `status` int(50) NOT NULL,
  PRIMARY KEY (`resid`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

INSERT INTO tblbookreserve VALUES("25","8787","24","11:17:34","2013-03-25 07:30:00","1");
INSERT INTO tblbookreserve VALUES("24","6969","43","11:05:28","2013-03-25 11:30:00","1");
INSERT INTO tblbookreserve VALUES("20","4875","24","06:30:49","2013-03-31 11:00:00","1");
INSERT INTO tblbookreserve VALUES("21","6969","24","10:35:24","2013-03-25 12:00:00","1");
INSERT INTO tblbookreserve VALUES("22","6969","24","10:36:23","2013-03-25 12:00:00","1");
INSERT INTO tblbookreserve VALUES("23","6969","41","10:39:22","2013-03-25 04:30:00","1");





CREATE TABLE `tblborrow` (
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
) ENGINE=MyISAM AUTO_INCREMENT=349 DEFAULT CHARSET=utf8;

INSERT INTO tblborrow VALUES("319","8787","100","24","2013-02-07 00:00:00","2013-02-09","2013-02-09","Signed","0.00","1");
INSERT INTO tblborrow VALUES("318","8787","100","41","2013-02-07 00:00:00","2013-02-19","2013-02-15","Signed","0.00","1");
INSERT INTO tblborrow VALUES("317","4875","600","41","2013-02-06 00:00:00","2013-02-10","2013-02-10","Signed","0.00","1");
INSERT INTO tblborrow VALUES("316","4875","600","24","2013-02-06 00:00:00","2013-02-12","2013-02-06","Signed","0.00","1");
INSERT INTO tblborrow VALUES("315","8787","100","24","2013-02-06 00:00:00","2013-02-11","2013-02-08","Signed","0.00","1");
INSERT INTO tblborrow VALUES("314","8787","100","24","2013-02-06 00:00:00","2013-02-07","2013-02-06","Signed","0.00","1");
INSERT INTO tblborrow VALUES("320","4875","600","24","2013-02-07 00:00:00","2013-02-11","2013-02-11","Signed","0.00","1");
INSERT INTO tblborrow VALUES("321","4875","600","41","2013-02-08 00:00:00","2013-02-12","2013-02-12","Signed","0.00","1");
INSERT INTO tblborrow VALUES("322","8787","100","42","2013-02-12 00:00:00","2013-02-14","2013-02-13","Signed","0.00","1");
INSERT INTO tblborrow VALUES("323","4872","700","41","2013-02-13 00:00:00","2013-02-16","2013-02-13","Signed","0.00","1");
INSERT INTO tblborrow VALUES("325","4875","600","42","2013-02-14 00:00:00","2013-02-17","2013-02-15","Signed","2.00","1");
INSERT INTO tblborrow VALUES("326","8787","100","42","2013-02-14 00:00:00","2013-02-16","2013-02-14","Signed","2.00","1");
INSERT INTO tblborrow VALUES("327","4872","700","24","2013-02-14 00:00:00","2013-02-18","2013-03-01","Signed","5.00","1");
INSERT INTO tblborrow VALUES("328","8787","100","41","2013-02-14 00:00:00","2013-02-14","2013-02-14","Signed","3.00","1");
INSERT INTO tblborrow VALUES("329","8787","100","42","2013-02-28 00:00:00","2013-03-01","0000-00-00","Unsigned","2.00","1");
INSERT INTO tblborrow VALUES("330","4875","600","41","2013-03-01 00:00:00","2013-03-03","2013-03-01","Signed","2.00","1");
INSERT INTO tblborrow VALUES("331","4872","700","41","2013-03-02 00:00:00","2013-03-12","2013-03-06","Signed","2.00","1");
INSERT INTO tblborrow VALUES("332","4875","600","24","2013-02-27 00:00:00","2013-03-01","2013-03-01","Signed","2.00","1");
INSERT INTO tblborrow VALUES("333","8787","100","43","2013-03-30 00:00:00","2013-03-01","2013-03-23","Signed","2.00","1");
INSERT INTO tblborrow VALUES("334","4875","600","43","2013-03-30 00:00:00","2013-04-02","2013-03-23","Signed","2.00","1");
INSERT INTO tblborrow VALUES("335","4872","700","43","2013-03-30 00:00:00","2013-04-30","2013-05-03","Signed","2.00","1");
INSERT INTO tblborrow VALUES("336","8787","100","24","2013-03-01 00:00:00","2013-03-04","2013-03-02","Signed","2.00","1");
INSERT INTO tblborrow VALUES("337","8787","100","41","2013-03-19 00:00:00","2013-03-22","2013-03-19","Signed","2.00","1");
INSERT INTO tblborrow VALUES("338","8787","100","41","2013-03-19 00:00:00","2013-03-22","2013-03-19","Signed","2.00","1");
INSERT INTO tblborrow VALUES("339","8787","100","24","2013-03-19 00:00:00","2013-03-21","0000-00-00","Unsigned","2.00","1");
INSERT INTO tblborrow VALUES("340","8787","100","41","2013-03-20 00:00:00","2013-03-22","2013-03-29","Signed","1.00","1");
INSERT INTO tblborrow VALUES("341","4875","600","41","2013-03-20 00:00:00","2013-03-23","2013-03-21","Signed","5.00","1");
INSERT INTO tblborrow VALUES("342","878734","700","41","2013-03-21 00:00:00","2013-03-30","2013-04-02","Signed","2.00","1");
INSERT INTO tblborrow VALUES("343","6969","700","24","2013-03-21 00:00:00","2013-03-22","2013-04-01","Signed","2.00","1");
INSERT INTO tblborrow VALUES("344","4875","600","43","2013-03-20 21:01:50","2013-03-21","2013-03-29","Signed","2.00","1");
INSERT INTO tblborrow VALUES("345","4875","600","24","2013-03-20 21:47:37","2013-03-21","2013-03-29","Signed","2.00","1");
INSERT INTO tblborrow VALUES("346","8787","100","41","2013-03-21 14:11:41","2013-03-29","0000-00-00","Unsigned","2.00","1");
INSERT INTO tblborrow VALUES("347","4875","600","46","2013-03-23 20:58:14","2013-03-25","2013-03-29","Signed","56.00","1");
INSERT INTO tblborrow VALUES("348","4875","600","24","2013-03-25 08:12:14","2013-03-26","0000-00-00","Unsigned","56.00","1");





CREATE TABLE `tblborrower` (
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
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

INSERT INTO tblborrower VALUES("24","Langa","Jade","Male","C","9322865875","san fernando","","Teacher","1st Year","2013-2014","jade","2013-03-23 20:37:33","1");
INSERT INTO tblborrower VALUES("41","Tangente","Armhele","Female","R","9322865875","Bulacao Cebu","1360140014_247256571971116.jpg","Student","4th Year","2013-2014","bato","2013-03-23 20:37:55","0");
INSERT INTO tblborrower VALUES("43","Del soccoro","Cloudine","Female","A","9322865875","Minglanilla","1364180776_Blue hills.jpg","Teacher","1st Year","2013-2014","jade","2013-03-25 11:06:16","0");
INSERT INTO tblborrower VALUES("45","adsad","asd","Male","d","9322865875","asdasd","1364042802_Sunset.jpg","Teacher","2nd Year","2013-2014","rubi","2013-03-23 20:46:42","0");
INSERT INTO tblborrower VALUES("46","assd","asdas","Female","d","9322865875","asdsad","1364043021_Winter.jpg","Teacher","3rd Year","2013-2014","emerald","2013-03-23 20:50:21","1");





CREATE TABLE `tblpayment` (
  `payid` int(11) NOT NULL AUTO_INCREMENT,
  `amount` decimal(10,2) NOT NULL,
  PRIMARY KEY (`payid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO tblpayment VALUES("1","56.00");





CREATE TABLE `tblreciept` (
  `recieptid` int(11) NOT NULL AUTO_INCREMENT,
  `borrowersid` int(11) NOT NULL,
  `datedue` varchar(50) NOT NULL,
  `datereturn` varchar(50) NOT NULL,
  `totaldays` varchar(50) NOT NULL,
  `totalpay` varchar(50) NOT NULL,
  PRIMARY KEY (`recieptid`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

INSERT INTO tblreciept VALUES("2","0","February 16 2013","March 02 2013","14","28.00");
INSERT INTO tblreciept VALUES("3","0","February 16 2013","March 02 2013","14","28.00");
INSERT INTO tblreciept VALUES("4","42","February 16 2013","March 02 2013","14","28.00");
INSERT INTO tblreciept VALUES("5","41","March 22 2013","March 31 2013","9","18.00");
INSERT INTO tblreciept VALUES("6","43","March 21 2013","March 29, 2013","8","16.00");
INSERT INTO tblreciept VALUES("7","41","March 22 2013","March 29, 2013","7","7.00");
INSERT INTO tblreciept VALUES("8","24","March 22 2013","April 01, 2013","10","20.00");
INSERT INTO tblreciept VALUES("9","41","March 30 2013","April 02, 2013","3","6.00");
INSERT INTO tblreciept VALUES("10","24","March 21 2013","March 29, 2013","8","16.00");
INSERT INTO tblreciept VALUES("11","46","March 25 2013","March 29, 2013","4","224.00");





CREATE TABLE `tblsection` (
  `sec_id` int(11) NOT NULL AUTO_INCREMENT,
  `yr_id` int(11) NOT NULL,
  `section` varchar(20) NOT NULL,
  PRIMARY KEY (`sec_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO tblsection VALUES("1","1","jade");
INSERT INTO tblsection VALUES("2","2","rubi");
INSERT INTO tblsection VALUES("3","3","emerald");
INSERT INTO tblsection VALUES("4","4","bato");





CREATE TABLE `tbltype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `borrowertype` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `borrowertype` (`borrowertype`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

INSERT INTO tbltype VALUES("1","Student");
INSERT INTO tbltype VALUES("2","Teacher");
INSERT INTO tbltype VALUES("3","Non-Teaching");





CREATE TABLE `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO user VALUES("1","Administrator","jade");
INSERT INTO user VALUES("2","a","a");



