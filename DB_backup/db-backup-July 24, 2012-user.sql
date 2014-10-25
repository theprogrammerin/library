

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
) ENGINE=MyISAM AUTO_INCREMENT=2407 DEFAULT CHARSET=utf8;

INSERT INTO books VALUES("2338","4872","","Adventure oh Huckleberry Finn","700","Twain shaen","","","","","27","","0","2013-04-01 20:05:01","2013-04-01 20:05:01","","1");
INSERT INTO books VALUES("2367","4875","","C++ programming Language","600","dyesebel romo","","","","","22","","0","2013-04-01 20:05:26","2013-04-01 20:05:26","","1");
INSERT INTO books VALUES("2366","4936","","Business Writing","800","Janis, J. Harold","","","","","119","","0","2013-01-23 11:25:22","2013-01-23 11:25:22","","0");
INSERT INTO books VALUES("2369","8787","","Place Of Publication Book Edition Book Place Of Pu","100","Jade langa","","","","","96","","0","2013-03-20 17:33:07","2013-03-20 17:33:07","","1");
INSERT INTO books VALUES("2378","487234","English","manual of life","200","jade langa","","","","","23","","0","2013-02-07 18:34:43","2013-02-07 18:34:43","","0");
INSERT INTO books VALUES("2379","2323245","","","","","","","","","0","","0","2013-02-07 18:34:51","2013-02-07 18:34:51","","0");
INSERT INTO books VALUES("2380","232324534","","","","","","","","","0","","0","2013-02-07 18:35:33","2013-02-07 18:35:33","","0");
INSERT INTO books VALUES("2381","48722","","","","","","","","","0","","0","2013-02-07 18:36:02","2013-02-07 18:36:02","","0");
INSERT INTO books VALUES("2382","4333","","","","","","","","","0","","0","2013-02-07 18:36:17","2013-02-07 18:36:17","","0");
INSERT INTO books VALUES("2383","87878787","","","","","","","","","0","","0","2013-03-19 07:35:57","2013-03-19 07:35:57","","0");
INSERT INTO books VALUES("2384","6969","Math","Algebra","700","Allbert Einstien","","","","","20","","0","2013-04-01 19:58:05","2013-04-01 19:58:05","","1");
INSERT INTO books VALUES("2386","48725","Math","java programming Language","600","dyesebel romo dfdf","","","","","686","","0","2013-05-02 05:14:50","2013-05-02 05:14:50","","1");
INSERT INTO books VALUES("2387","878734","Science","Geometry","700","wala","","","","","23","","0","2012-2013","2013-03-21 05:02:49","","0");
INSERT INTO books VALUES("2388","87874","Science math","Chemestry","300","langa family","","","","","13","","0","2013-04-01 19:55:46","2013-04-01 19:55:46","","1");
INSERT INTO books VALUES("2389","435","Math","Place Of Publication Book Edition Book Place Of Pu","400","sdsd","ds","","","","49","","0","2011-2012","2013-03-21 18:13:29","","1");
INSERT INTO books VALUES("2390","4333454","","","","","","","","","0","","0","2011-2012","2013-03-21 18:41:00","","0");
INSERT INTO books VALUES("2391","76766","","","","","","","","","0","","0","2011-2012","2013-03-21 18:41:17","","0");
INSERT INTO books VALUES("2392","5454","","","","","","","","","0","","0","2011-2012","2013-03-21 18:41:26","","0");
INSERT INTO books VALUES("2393","67667","","","","","","","","","0","","0","2011-2012","2013-03-21 18:41:51","","0");
INSERT INTO books VALUES("2394","345345","","","","","","","","","0","","0","2011-2012","2013-03-21 18:44:22","","0");
INSERT INTO books VALUES("2395","452","","","","","","","","","0","","0","2011-2012","2013-03-21 18:44:34","","0");
INSERT INTO books VALUES("2396","124522","","","","","","","","","0","","0","2011-2012","2013-03-21 18:45:38","","0");
INSERT INTO books VALUES("2397","546567","","","","","","","","","0","","0","2011-2012","2013-03-21 18:45:52","","0");
INSERT INTO books VALUES("2398","1222212","","","","","","","","","0","","0","2011-2012","2013-03-21 18:46:07","","0");
INSERT INTO books VALUES("2399","4324234","","","","","","","","","0","","0","2011-2012","2013-04-01 19:46:40","","0");
INSERT INTO books VALUES("2400","433455","","","","","","","","","0","","0","2011-2012","2013-04-01 19:48:32","","0");
INSERT INTO books VALUES("2401","34522","","","","","","","","","0","","0","2011-2012","2013-04-01 20:02:43","","0");
INSERT INTO books VALUES("2402","3432434","","","","","","","","","12","","0","2013-04-01 20:14:23","2013-04-01 20:14:23","","0");
INSERT INTO books VALUES("2403","45454","","","","","","","","","0","","0","2011-2012","2013-04-01 20:13:29","","0");
INSERT INTO books VALUES("2404","34535","","","","","","","","","0","","0","2011-2012","2013-04-01 20:14:07","","0");
INSERT INTO books VALUES("2405","3545","","","","","","","","","0","","0","2011-2012","2013-04-01 20:14:12","","0");
INSERT INTO books VALUES("2406","4554","","","","","","","","","23","","0","2013-04-01 20:20:43","2013-04-01 20:20:43","","0");





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
) ENGINE=MyISAM AUTO_INCREMENT=104 DEFAULT CHARSET=latin1;






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
) ENGINE=MyISAM AUTO_INCREMENT=374 DEFAULT CHARSET=utf8;

INSERT INTO tblborrow VALUES("370","8787","100","24","2013-04-01 19:04:17","2013-04-03","2013-04-26","Signed","2.00","1");
INSERT INTO tblborrow VALUES("371","4872","700","24","2013-04-01 19:05:02","2013-04-03","2013-04-26","Signed","2.00","1");
INSERT INTO tblborrow VALUES("361","48725","600","41","2013-03-27 11:15:41","2013-03-28","2013-03-30","Signed","2.00","1");
INSERT INTO tblborrow VALUES("365","4872","700","47","2013-03-30 17:33:46","2013-04-01","2013-04-01","Signed","2.00","1");
INSERT INTO tblborrow VALUES("372","6969","700","24","2013-04-01 19:06:23","2013-04-02","2013-04-26","Signed","2.00","1");
INSERT INTO tblborrow VALUES("373","4875","600","43","2013-04-01 19:27:45","2013-04-01","0000-00-00","Unsigned","2.00","1");
INSERT INTO tblborrow VALUES("368","6969","700","24","2013-04-05 18:39:15","2013-04-08","2013-04-05","Signed","2.00","1");
INSERT INTO tblborrow VALUES("369","8787","100","47","2013-04-01 18:46:34","2013-04-02","2013-04-26","Signed","2.00","1");





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
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;

INSERT INTO tblborrower VALUES("24","Langa","Jade","Male","C","9322865875","san fernando","","Teacher","1st Year","2013-2014","jade","2013-04-01 19:29:03","0");
INSERT INTO tblborrower VALUES("41","Tangente","Armhele","Female","R","9322865875","Bulacao Cebu","1360140014_247256571971116.jpg","Student","4th Year","2013-2014","bato","2013-03-23 20:37:55","1");
INSERT INTO tblborrower VALUES("43","Del soccoro","Cloudine","Female","A","9322865875","Minglanilla","1364180776_Blue hills.jpg","Teacher","1st Year","2013-2014","jade","2013-03-25 11:06:16","1");
INSERT INTO tblborrower VALUES("45","adsad","asd","Male","d","9322865875","asdasd","1364042802_Sunset.jpg","Teacher","2nd Year","2013-2014","rubi","2013-03-23 20:46:42","0");
INSERT INTO tblborrower VALUES("46","assd","asdas","Female","d","9322865875","asdsad","1364043021_Winter.jpg","Teacher","3rd Year","2013-2014","emerald","2013-03-27 05:23:11","0");
INSERT INTO tblborrower VALUES("47","asds","das","Male","a","33434","sdsad","","Employee","4th Year","2013-2014","Diamond","2013-03-27 05:23:35","1");
INSERT INTO tblborrower VALUES("60","a","a","Female","a","9373243434434","sdsd","","Employee","2nd Year","2013-2014","rubi adsd","2013-04-01 19:40:07","0");





CREATE TABLE `tblpayment` (
  `payid` int(11) NOT NULL AUTO_INCREMENT,
  `amount` decimal(10,2) NOT NULL,
  PRIMARY KEY (`payid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO tblpayment VALUES("1","2.00");





CREATE TABLE `tblreciept` (
  `recieptid` int(11) NOT NULL AUTO_INCREMENT,
  `borrowersid` int(11) NOT NULL,
  `datedue` varchar(50) NOT NULL,
  `datereturn` varchar(50) NOT NULL,
  `totaldays` varchar(50) NOT NULL,
  `totalpay` varchar(50) NOT NULL,
  PRIMARY KEY (`recieptid`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

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
INSERT INTO tblreciept VALUES("12","43","March 28 2013","March 29, 2013","1","2.00");
INSERT INTO tblreciept VALUES("13","41","March 28 2013","March 30, 2013","2","4.00");
INSERT INTO tblreciept VALUES("14","24","March 25 2013","May 01, 2013","37","74.00");
INSERT INTO tblreciept VALUES("15","24","March 27 2013","April 29, 2013","33","66.00");
INSERT INTO tblreciept VALUES("16","47","April 02 2013","April 26, 2013","24","48.00");
INSERT INTO tblreciept VALUES("17","24","April 02 2013","April 26, 2013","24","48.00");





CREATE TABLE `tblsection` (
  `sec_id` int(11) NOT NULL AUTO_INCREMENT,
  `yr_id` int(11) NOT NULL,
  `section` varchar(20) NOT NULL,
  PRIMARY KEY (`sec_id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

INSERT INTO tblsection VALUES("1","1","jade");
INSERT INTO tblsection VALUES("2","2","rubi adsd");
INSERT INTO tblsection VALUES("3","3","emerald dsfd");
INSERT INTO tblsection VALUES("4","4","Diamond");
INSERT INTO tblsection VALUES("16","1","Isidore");
INSERT INTO tblsection VALUES("21","1","jade1");
INSERT INTO tblsection VALUES("25","2","sadsd");
INSERT INTO tblsection VALUES("27","2","sdsd");
INSERT INTO tblsection VALUES("29","2","asdsad ads sdfdf");
INSERT INTO tblsection VALUES("31","2","asdsad ads");
INSERT INTO tblsection VALUES("39","4","Pearl");





CREATE TABLE `tbltype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `borrowertype` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `borrowertype` (`borrowertype`),
  KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8;

INSERT INTO tbltype VALUES("2","Teacher");
INSERT INTO tbltype VALUES("20","Employee");
INSERT INTO tbltype VALUES("21","Non-Teaching");
INSERT INTO tbltype VALUES("22","Student");
INSERT INTO tbltype VALUES("32","Contruction");





CREATE TABLE `user` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

INSERT INTO user VALUES("1","Administrator","jade");
INSERT INTO user VALUES("2","a","a");





CREATE TABLE `userlogin` (
  `loginid` int(11) NOT NULL AUTO_INCREMENT,
  `studentid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`loginid`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

INSERT INTO userlogin VALUES("21","43","Del soccoro","a");
INSERT INTO userlogin VALUES("20","24","Langa","a");



