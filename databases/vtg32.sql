-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2018 at 04:24 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vtg`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `Aid` int(10) NOT NULL,
  `adescription` varchar(300) NOT NULL,
  `adate` varchar(20) NOT NULL,
  `astatus` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`Aid`, `adescription`, `adate`, `astatus`) VALUES
(15, '<p>hello hi hi hi</p>', '2018/06/23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `contact` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `location` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `title` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `type` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `joindate` varchar(50) NOT NULL,
  `vtype` varchar(200) NOT NULL,
  `company_name` varchar(500) NOT NULL,
  `latitude` varchar(500) NOT NULL,
  `longitude` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `first_name`, `last_name`, `email`, `contact`, `password`, `address`, `location`, `description`, `title`, `image`, `type`, `status`, `joindate`, `vtype`, `company_name`, `latitude`, `longitude`) VALUES
(1, 'sjonchhe ', 'Sandesh', 'Jonchhe', 'sandeshjon@gmail.com', '9849128762', 'apple', 'Maharajgunj', '', 'Always code as if the guy who ends up maintaining your code will be violent psychopath who knows where you live', 'Founder / Designer / Developer', 'images/admin/11.jpg', 1, 1, '', '', '', '', ''),
(9, 'anisha', 'Anisha', 'Shrestha', 'anisha@gmail.com', '9843327132', 'apple', 'Gokarna', '', '', 'Founder / Database Admin / Developer', 'images/admin/33595629_2067820053543446_9789720821235712_n.jpg', 1, 1, '', '', '', '', ''),
(10, 'basanta', 'Basanta', 'Shahi', 'bsnta@gmail.com', '9843312532', 'apple', 'Kapan', '', '<p>adsad</p>', 'Founder / Developer', 'images/admin/33575130_1913070718724670_989777021544431616_n.jpg', 1, 1, '', '', '', '', ''),
(41, 'namastetravel', '', '', 'namaste@gmail.com', '1234567891', 'apple', 'Kapan', '', '<p><span class=\"ILfuVd yZ8quc\">A <strong>travel</strong> agency is a private retailer </span></p>', '', 'images/admin/namaste-hand-posture-background_23-2147707402.jpg', 4, 1, '2018/06/25', 'package', 'Namaste Travel and Tours', '27.736026063025964', '85.3605774161133'),
(42, 'explorenepal', '', '', 'explore@gmail.com', '8418451846', 'apple', 'Chabahil', '', '<p>adiubsajduisbsadiud</p>', '', 'images/admin/36086897_2091613447830773_7880814708083654656_n.jpg', 4, 1, '2018/06/25', 'package', 'Explore Nepal Travels', '27.719463596925966', '85.35268099277346'),
(44, 'htlbarahi', '', '', 'hotelbarahi@gmail.com', '123456789', 'apple', 'Lakeside,Pokhara', 'Pokhara', '', '', 'images/admin/hotel-3.jpg', 4, 1, '2018/06/25', 'hotel', 'Hotel Barahi', '', ''),
(45, 'htlhimalaya', '', '', 'hotelhimalaya@gmail.com', '12132122', 'apple', 'Kupondole, Lalitpur', 'Kathmandu', '', '', 'images/admin/6e9e68abc6707d1042b9bddf0a5253b3.jpg', 4, 1, '2018/06/25', 'hotel', 'Hotel Himalaya', '', ''),
(46, 'htlannapurna', '', '', 'hotelannapurna@gmail.com', '1332154', 'apple', 'DurbarMarg, Kathmandu', 'Kathmandu', '', '', 'images/admin/35086064.jpg', 4, 1, '2018/06/25', 'hotel', 'Hotel Annapurna', '27.71124107289867', '85.31735897064209'),
(47, 'htlsamrat', '', '', 'hotelsamrat@gmail.com', '13123213', 'apple', 'Kusma', 'Pokhara', '', '', 'images/admin/homestay-nepal-alice-mcconnell.jpg', 4, 1, '2018/06/25', 'hotel', 'Hotel Samrat', '', ''),
(48, 'htlyac', '', '', 'hotelyac@gmail.com', '68465231', 'apple', 'Kagbeni, Mustang', 'Kathmandu', '', '', 'images/admin/hotel-yac-donalds-7.png', 4, 1, '2018/06/25', 'hotel', 'Hotel MacDonalds', '', ''),
(49, 'htldream', '', '', 'hoteldream@gmail.com', '8516555', 'apple', ' Paknajol Marg, Kathmandu', 'Lalitpur', '<p>adsad</p>', '', 'images/admin/entry-way-from-the-street.jpg', 4, 1, '2018/06/25', 'hotel', 'Hotel Dream', '27.71124107289867', '85.31735897064209'),
(50, 'hotelabc', '', '', 'hotelabc@gmail.com', '57251', 'apple', 'adasda', '', '<p>asdsad</p>', '', 'images/admin/homeslide_big04.jpg', 0, 1, '2018/08/28', 'hotel', 'hotelabc', '27.737849299999997', '85.3286484'),
(54, 'abhash', '', '', 'asdas@asd.com', '123', 'apple', 'asdas', '', '<p>asd</p>', '', 'images/admin/Screenshot (10).png', 4, 1, '2018/08/28', 'ecommerce', 'asda', '27.737849299999997', '85.3286484'),
(55, 'htlstlawrencea', '', '', 'stlawrence@gmail.com', '846156', 'apple', 'Chabahil', 'Kathmandu', '', '', 'images/admin/tea1.jpg', 4, 1, '2018/08/29', 'hotel', 'Hotel StLawrence', '27.737849299999997', '85.32864840000002'),
(56, 'namastevehicles', '', '', 'namastey@gmail.com', '1212331', 'apple', 'MAharajgunj', '', '', '', 'images/admin/namaste-hand-posture-background_23-2147707402.jpg', 4, 1, '2018/08/31', 'rental', 'Namastey Vehicles', '27.737849299999997', '85.3286484');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `bid` int(11) NOT NULL,
  `btitle` varchar(100) NOT NULL,
  `blocation` varchar(300) NOT NULL,
  `bdescription` text NOT NULL,
  `bdate` varchar(20) DEFAULT NULL,
  `bimg` varchar(50) DEFAULT NULL,
  `bkeyword` varchar(100) DEFAULT NULL,
  `bstatus` tinyint(4) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `bcounter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`bid`, `btitle`, `blocation`, `bdescription`, `bdate`, `bimg`, `bkeyword`, `bstatus`, `cid`, `bcounter`) VALUES
(15, 'Experience of Pokhara', 'Pokhara', '<p>Pokhara is an awesome place to visit.While visiting pokhara i found that there are lots of natural resources thrilling your mind.</p>', '2018-06-25 06:10:46p', 'images/blog/ghandruk2.jpg', 'Pokhara', 1, 21, 2),
(16, ' Ghalegaun tour experience', 'Others', '<p>Ghalegaun is the place full of entire natural beauty which really fascinated me.Ghalegaun is the place full of entire natural beauty which really fascinated me.Ghalegaun is the place full of entire natural beauty which really fascinated me.vGhalegaun is the place full of entire natural beauty which really fascinated meGhalegaun is the place full of entire natural beauty which really fascinated me.Ghalegaun is the place full of entire natural beauty which really fascinated me.Ghalegaun is the place full of entire natural beauty which really fascinated me.Ghalegaun is the place full of entire natural beauty which really fascinated me.</p>', '2018-06-25 06:15:03p', 'images/blog/ghandruk3.jpg', 'Ghalegaun', 1, 21, 0),
(17, 'Trishuli Rafting', 'Others', '<p>Rafting in trishuli river gave me an adventurous feelingRafting in trishuli river gave me an adventurous feeling.Rafting in trishuli river gave me an adventurous feeling.Rafting in trishuli river gave me an adventurous feeling.Rafting in trishuli river gave me an adventurous feeling.Rafting in trishuli river gave me an adventurous feeling.Rafting in trishuli river gave me an adventurous feeling.Rafting in trishuli river gave me an adventurous feeling.Rafting in trishuli river gave me an adventurous feeling.Rafting in trishuli river gave me an adventurous feeling.</p>', '2018-06-25 06:18:33p', 'images/blog/j.jpg', 'Rafting', 1, 22, 0),
(18, 'Annapurna Trekking ', 'Others', '<p>Annapurna trekking provided me a new experience.Annapurna trekking provided me a new experience.Annapurna trekking provided me a new experience.Annapurna trekking provided me a new experience.Annapurna trekking provided me a new experience.Annapurna trekking provided me a new experience.Annapurna trekking provided me a new experience.Annapurna trekking provided me a new experience.</p>', '2018-06-25 06:22:11p', 'images/blog/langtang1.jpg', 'Annapurna , trekking', 1, 23, 2),
(19, 'Hiking To sundarijal', 'Kathmandu', '<p><span style=\"font-weight: bold; color: #6a6a6a; font-family: arial, sans-serif; font-size: small;\">sundarijal</span><span style=\"color: #545454; font-family: arial, sans-serif; font-size: small;\">&nbsp;is one of the coolest places in Nepal where one can have wild thrill and trekking experience. s</span><span style=\"font-weight: bold; color: #6a6a6a; font-family: arial, sans-serif; font-size: small;\">undarijal</span><span style=\"color: #545454; font-family: arial, sans-serif; font-size: small;\">&nbsp;is one of the coolest places in Nepal where one can have wild thrill and trekking experience. s</span><span style=\"font-weight: bold; color: #6a6a6a; font-family: arial, sans-serif; font-size: small;\">undarijal</span><span style=\"color: #545454; font-family: arial, sans-serif; font-size: small;\">&nbsp;is one of the coolest places in Nepal where one can have wild thrill and trekking experience.&nbsp;</span></p>', '2018-06-25 06:25:36p', 'images/blog/s.jpg', '', 1, 24, 4);

-- --------------------------------------------------------

--
-- Table structure for table `book_hotel`
--

CREATE TABLE `book_hotel` (
  `bid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `rno` int(11) NOT NULL,
  `hbook_date` varchar(100) NOT NULL,
  `checkin` varchar(50) DEFAULT NULL,
  `checkout` varchar(50) DEFAULT NULL,
  `bduration` varchar(500) NOT NULL,
  `b_h_cost` int(11) DEFAULT NULL,
  `b_h_status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book_package`
--

CREATE TABLE `book_package` (
  `pbid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `totalno` int(11) DEFAULT NULL,
  `startdate` varchar(250) NOT NULL,
  `pduration` int(11) NOT NULL,
  `pcost` varchar(500) NOT NULL,
  `booked_date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_package`
--

INSERT INTO `book_package` (`pbid`, `cid`, `pid`, `status`, `totalno`, `startdate`, `pduration`, `pcost`, `booked_date`) VALUES
(1, 21, 19, 2, 2, '2018-06-27', 15, '476000', '2018-06-25 11:14:28pm'),
(2, 25, 19, 2, 2, '2018-06-30', 15, '476000', '2018-06-25 11:33:16pm'),
(3, 27, 19, 2, 2, '2018-06-29', 15, '476000', '2018-06-26 07:57:45am'),
(4, 21, 23, 2, 3, '2018-08-31', 3, '9000', '2018-08-29 12:22:57pm');

-- --------------------------------------------------------

--
-- Table structure for table `book_vehicle`
--

CREATE TABLE `book_vehicle` (
  `vbid` int(11) NOT NULL,
  `vid` int(11) DEFAULT NULL,
  `cid` int(11) DEFAULT NULL,
  `vbbook_date` varchar(50) DEFAULT NULL,
  `vbstart_date` varchar(50) DEFAULT NULL,
  `vbduration` int(11) DEFAULT NULL,
  `vbtotal_cost` int(11) DEFAULT NULL,
  `vbstatus` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `fid` int(10) NOT NULL,
  `fques` longtext NOT NULL,
  `fans` longtext NOT NULL,
  `fdate` varchar(20) NOT NULL,
  `fstatus` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`fid`, `fques`, `fans`, `fdate`, `fstatus`) VALUES
(1, '<p>what is your name? my name is</p>', '<p>my name is amisha</p>', '2018/06/23', 1),
(3, '<p>hahahahahahahaha bla bla rey bla</p>', '<p>hehahahahahaha&nbsp; &nbsp;bbababbas</p>', '2018/06/23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `homestay`
--

CREATE TABLE `homestay` (
  `hsid` int(50) NOT NULL,
  `aid` int(11) NOT NULL,
  `hstitle` varchar(100) NOT NULL,
  `hslocation` varchar(100) NOT NULL,
  `hsdescription` longtext NOT NULL,
  `hscost` varchar(100) NOT NULL,
  `hslatitude` varchar(300) NOT NULL,
  `hslongitude` varchar(300) NOT NULL,
  `hsadded_date` varchar(50) NOT NULL,
  `hsimg1` varchar(100) NOT NULL,
  `hsimg2` varchar(100) NOT NULL,
  `hsstatus` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homestay`
--

INSERT INTO `homestay` (`hsid`, `aid`, `hstitle`, `hslocation`, `hsdescription`, `hscost`, `hslatitude`, `hslongitude`, `hsadded_date`, `hsimg1`, `hsimg2`, `hsstatus`) VALUES
(12, 1, 'chapro', 'Nagarkot', '<p>hotel</p>', '1321', '', '', '2018/08/29', 'images/homestay/30-08-2018-1535611068car1.jpg', 'images/homestay/30-08-2018-1535610921img_9.jpg', 1),
(14, 0, 'Basanta ko Ghar', 'Kathmandu', '<p>asdsahuyudtgavshdaslidokhjn</p>', '1500', '', '', '2018-08-30 10:20:35', 'images/homestay/30-08-2018-1535617235p3.jpg', '', 1),
(15, 1, 'adasd', 'Pokhara', '<p>ada</p>', '21321', '', '', '2018/08/30', 'images/homestay/31-08-2018-1535683980hotel-3.jpg', '', 1),
(16, 9, 'asdasd', 'Bhaktapur', '<p>asd</p>', '231312', '', '', '2018-08-30 10:47:44', 'images/homestay/30-08-2018-1535618864white.jpg', '', 1),
(17, 9, 'sdadas', 'Kathmandu', '', '121', '27.737849299999997', '85.3286484', '2018/08/30', 'images/homestay/31-08-2018-15356838486e9e68abc6707d1042b9bddf0a5253b3.jpg', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hid` int(11) NOT NULL,
  `hname` varchar(100) NOT NULL,
  `husername` varchar(200) NOT NULL,
  `haddress` varchar(500) NOT NULL,
  `hlocation` varchar(250) NOT NULL,
  `hcontact` varchar(250) NOT NULL,
  `hcontact2` varchar(50) DEFAULT NULL,
  `hemail` varchar(100) NOT NULL,
  `hdescription` varchar(1000) NOT NULL,
  `hrating` tinyint(4) DEFAULT NULL,
  `himage` varchar(500) NOT NULL,
  `hcoverimage` varchar(500) NOT NULL,
  `added_date` varchar(1000) DEFAULT NULL,
  `hlatitude` varchar(200) NOT NULL,
  `hlongitude` varchar(200) NOT NULL,
  `hstatus` tinyint(4) DEFAULT NULL,
  `htype` int(11) NOT NULL,
  `hkeyword` varchar(1000) DEFAULT NULL,
  `aid` int(11) NOT NULL,
  `ausername` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hid`, `hname`, `husername`, `haddress`, `hlocation`, `hcontact`, `hcontact2`, `hemail`, `hdescription`, `hrating`, `himage`, `hcoverimage`, `added_date`, `hlatitude`, `hlongitude`, `hstatus`, `htype`, `hkeyword`, `aid`, `ausername`) VALUES
(1, 'test', 'test', 'test', 'test', '123456', NULL, 'aaa@gmail.com', 'dggdgdggdd', 1, 'ss', 'sss', '2018/11/11', '11', '11', 11, 1, NULL, 11, '44');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `lid` int(11) NOT NULL,
  `lname` varchar(300) NOT NULL,
  `limage` varchar(500) NOT NULL,
  `limage2` varchar(500) NOT NULL,
  `lstatus` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`lid`, `lname`, `limage`, `limage2`, `lstatus`) VALUES
(1, 'Kathmandu', 'images/location/kathmandu.jpg', '', '1'),
(2, 'Lalitpur', 'images/location/lalitpur.jpg', '', '1'),
(3, 'Bhaktapur', 'images/location/bhaktapur.jpg', '', '1'),
(4, 'Pokhara', 'images/location/pokhara,jpg\r\n', '', '1'),
(5, 'Lumbini', 'images/location/lumbini.jpg', '', '1'),
(8, 'Chitwan', 'images/location/chitwan.jpg\r\n', '', '1'),
(50, 'Others', '', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `pid` int(11) NOT NULL,
  `vid` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `paddress` varchar(50) DEFAULT NULL,
  `plocation` varchar(500) NOT NULL,
  `pdescription` text NOT NULL,
  `pcost` varchar(50) NOT NULL,
  `pduration` varchar(50) NOT NULL,
  `pstartdate` varchar(50) NOT NULL,
  `pexpiry` varchar(50) NOT NULL,
  `pcategory` varchar(50) NOT NULL,
  `pitinerary` text NOT NULL,
  `pstatus` tinyint(4) DEFAULT NULL,
  `pimg1` varchar(100) NOT NULL,
  `pimg2` varchar(100) NOT NULL,
  `pimg3` varchar(100) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `username` varchar(200) NOT NULL,
  `pmap` varchar(500) NOT NULL,
  `pkeyword` varchar(500) NOT NULL,
  `pcounter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`pid`, `vid`, `pname`, `paddress`, `plocation`, `pdescription`, `pcost`, `pduration`, `pstartdate`, `pexpiry`, `pcategory`, `pitinerary`, `pstatus`, `pimg1`, `pimg2`, `pimg3`, `id`, `username`, `pmap`, `pkeyword`, `pcounter`) VALUES
(19, 0, 'Kailesh Manshorer visit from Lhasa 2018:', 'Manshorer', 'Others', '<p>kailash mansarovar yatra is also the spiritual journey,it for a large fresh water.it us located in the kailesh range a lake mansarobar (88k circumstances with 90mtr depth.kailash mansarovar yatra is also the spiritual journey,it for a large fresh water.it us located in the kailesh range a lake mansarobar (88k circumstances with 90mtr depth.kailash mansarovar yatra is also the spiritual journey,it for a large fresh water.it us located in the kailesh range a lake mansarobar (88k circumstances with 90mtr depth.kailash mansarovar yatra is also the spiritual journey,it for a large fresh water.it us located in the kailesh range a lake mansarobar (88k circumstances with 90mtr depth.kailash mansarovar yatra is also the spiritual journey,it for a large fresh water.it us located in the kailesh range a lake mansarobar (88k circumstances with 90mtr depth.</p>', '238000', '15', '', '', 'religious', '<p>day1:arrive at kathmandu over night at kathmandu.</p>\r\n<p>day2:sightseeing around kathmandu</p>\r\n<p>day3:sightseeing around kathmandu</p>\r\n<p>day4:sightseeing around kathmandu</p>\r\n<p>day5:sightseeing around kathmandu</p>', 1, 'images/package/25-06-2018-1529927137kailash2.jpg', 'images/package/25-06-2018-1529927137kailash1.jpg', NULL, 41, 'namastetravel', '', 'Mansarovar', 0),
(23, 0, 'Janakpur Darsan', 'janakpur', 'Others', '<p>janakpur is a birth place of sita(janaki).daughter of king janak and wife of lord rama.<span style=\"background-color: #f0fbff; font-family: Calibri, sans-serif; font-size: 12pt;\">&nbsp;</span><span style=\"background-color: #f0fbff; font-family: Calibri, sans-serif; font-size: 12pt;\">It is said to be the place of Lord Ram and Sita&rsquo;s wedding. It is a religious place of historical importance.&nbsp;</span></p>\r\n<p><span style=\"background-color: #f0fbff; font-family: Calibri, sans-serif; font-size: 12pt;\"><span style=\"font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; background-color: #ffffff;\">janakpur is a birth place of sita(janaki).daughter of king janak and wife of lord rama.</span><span style=\"background-color: #f0fbff; font-family: Calibri, sans-serif; font-size: 12pt;\">&nbsp;</span><span style=\"background-color: #f0fbff; font-family: Calibri, sans-serif; font-size: 12pt;\">It is said to be the place of Lord Ram and Sita&rsquo;s wedding. It is a religious place of historical importance.&nbsp;</span></span></p>\r\n<p><span style=\"background-color: #f0fbff; font-family: Calibri, sans-serif; font-size: 12pt;\"><span style=\"background-color: #f0fbff; font-family: Calibri, sans-serif; font-size: 12pt;\"><span style=\"font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; background-color: #ffffff;\">janakpur is a birth place of sita(janaki).daughter of king janak and wife of lord rama.</span><span style=\"background-color: #f0fbff; font-family: Calibri, sans-serif; font-size: 12pt;\">&nbsp;</span><span style=\"background-color: #f0fbff; font-family: Calibri, sans-serif; font-size: 12pt;\">It is said to be the place of Lord Ram and Sita&rsquo;s wedding. It is a religious place of historical importance.&nbsp;</span></span></span></p>', '3000', '3', '', '', 'religious', '<p>day1:</p>\r\n<p>janakpur is a birth place of sita(janaki).daughter of king janak and wife of lord rama.<span style=\"background-color: #f0fbff; font-family: Calibri, sans-serif; font-size: 12pt;\">&nbsp;</span></p>\r\n<p><span style=\"background-color: #f0fbff; font-family: Calibri, sans-serif; font-size: 12pt;\">day2:</span></p>\r\n<p><span style=\"background-color: #f0fbff; font-family: Calibri, sans-serif; font-size: 12pt;\">It is said to be the place of Lord Ram and Sita&rsquo;s wedding. It is a religious place of historical importance.&nbsp;</span>janakpur is a birth place of sita(janaki).daughter of king janak and wife of lord rama.</p>\r\n<p><span style=\"background-color: #f0fbff; font-family: Calibri, sans-serif; font-size: 12pt;\">day3:</span></p>\r\n<p><span style=\"background-color: #f0fbff; font-family: Calibri, sans-serif; font-size: 12pt;\">&nbsp;</span><span style=\"background-color: #f0fbff; font-family: Calibri, sans-serif; font-size: 12pt;\">It is said to be the place of Lord Ram and Sita&rsquo;s wedding. It is a religious place of historical importance.&nbsp;</span>janakpur is a birth place of sita(janaki).daughter of king janak and wife of lord rama.</p>\r\n<p><span style=\"background-color: #f0fbff; font-family: Calibri, sans-serif; font-size: 12pt;\">day4:</span></p>\r\n<p><span style=\"background-color: #f0fbff; font-family: Calibri, sans-serif; font-size: 12pt;\">&nbsp;</span><span style=\"background-color: #f0fbff; font-family: Calibri, sans-serif; font-size: 12pt;\">It is said to be the place of Lord Ram and Sita&rsquo;s wedding. It is a religious place of historical importance.&nbsp;</span></p>', 1, 'images/package/25-06-2018-1529929925janakpur.jpg', 'images/package/25-06-2018-1529929925janakpur2.jpg', NULL, 42, 'explorenepal', '', 'janakpur', 1),
(26, 0, 'Annapurna Base Camp Trek', 'Annapurna', 'Others', '<p>Annapurna base camp trekking is highly thrilled trekking experience.Annapurna base camp trekking is highly thrilled trekking experience,Annapurna base camp trekking is highly thrilled trekking experience,Annapurna base camp trekking is highly thrilled trekking experience,Annapurna base camp trekking is highly thrilled trekking experience,Annapurna base camp trekking is highly thrilled trekking experience,Annapurna base camp trekking is highly thrilled trekking experience,Annapurna base camp trekking is highly thrilled trekking experience,Annapurna base camp trekking is highly thrilled trekking experience,Annapurna base camp trekking is highly thrilled trekking experience,Annapurna base camp trekking is highly thrilled trekking experience,Annapurna base camp trekking is highly thrilled trekking experience,</p>', '1000', '6 days', '', '', 'trekking', '<p>Day 1: going to buspark</p>\r\n<p>Day 2: abcxyz</p>\r\n<p>Day 1: going to buspark</p>\r\n<p>Day 2: abcxyzDay 1: going to buspark</p>\r\n<p>Day 2: abcxyzDay 1: going to buspark</p>\r\n<p>Day 3: abcxyzDay 1: going to buspark</p>\r\n<p>Day 4: abcxyz</p>', 1, 'images/package/25-06-2018-1529939831anna.jpg', 'images/package/25-06-2018-1529931247a.jpg', NULL, 42, 'explorenepal', '', 'trekking', 0),
(27, 0, 'Langtang trek', '', '', '<p>Langtang is a beautiful valley.LangtaLangtang is a beautiful valley.Langtang is a beautiful valley.Langtang is a beautiful valley.Langtang is a beautiful valley.ng is a beautiful valley.Langtang is a beautiful valley.Langtang is a beautiful valley.Langtang is a beautiful valley.</p>', '9000', '6', '', '', '', '<p>Day 1: reach syaphru besi</p>\r\n<p>Day 1: reach lama hotel</p>\r\n<p>Day 1: reach syaphru besi</p>', 1, 'images/package/25-06-2018-1529931868lang.jpg', 'images/package/25-06-2018-1529931540kalinchowk1.jpg', NULL, 41, 'namastetravel', '', 'trekking', 0),
(29, 0, 'Shivapuri National park', 'nagarkot', 'Kathmandu', '<p>shivapuri national park is located near kathmandu valley.it is the home to some of the rarest birds and animal.shivapuri national park is one of the major attraction for the local as well as international tourist mainly for the hiking and sightseeing.</p>\r\n<p>shivapuri national park is located near kathmandu valley.it is the home to some of the rarest birds and animal.shivapuri national park is one of the major attraction for the local as well as international tourist mainly for the hiking and sightseeing.</p>\r\n<p>&nbsp;</p>', '1200', '1', '', '', 'hiking', '<p>10 am:everyone meet at the budhanilkantha temple ate the base of shivapuri national park</p>\r\n<p>10:30 am: hike to the monastry&nbsp;</p>\r\n<p>12 am: launch time</p>\r\n<p>4 pm:reach to sundarijal</p>\r\n<p>5pm:return to kathmandu valley</p>\r\n<p>&nbsp;</p>', 1, 'images/package/25-06-2018-1529940877shiva2.jpg', 'images/package/25-06-2018-1529940877shivapuri.jpg', NULL, 42, 'explorenepal', '', 'shivapuri', 0),
(30, 0, 'Chandragiri hike', 'kathmandu', 'Kathmandu', '<p>chandragiri is the one of the popular destiantion for local as external tourist.at the top of the chadragiri hill lies famous temple of lord shiva.provision of cable car is provided to attract more tourist.we can see entire valley from top of the hill.</p>\r\n<p>chandragiri is the one of the popular destiantion for local as external tourist.at the top of the chadragiri hill lies famous temple of lord shiva.provision of cable car is provided to attract more tourist.we can see entire valley from top of the hill.</p>', '1500', '1', '', '', 'site', '<p>10 am:everyone gather at the old bus park.</p>\r\n<p>10:30 am:departure from the bus park.</p>\r\n<p>11 am:reach thankot for the cable car</p>\r\n<p>12:30:launch&nbsp;</p>\r\n<p>3pm:back to thankot</p>\r\n<p>5pm:reach old bus park</p>', 1, 'images/package/25-06-2018-1529941450chandragiri.jpg', 'images/package/25-06-2018-1529941450chanda2.jpg', NULL, 41, 'namastetravel', '', 'chandragiri', 0),
(31, 0, 'Rara national park tour', 'Mugu', 'Others', '<p>rara national park ois located at the mid western part of nepal.one of the famous place to visit in rara national park is rara lake.due to facility of road wide range of tourist are attracted recently.</p>\r\n<p>rara national park ois located at the mid western part of nepal.one of the famous place to visit in rara national park is rara lake.due to facility of road wide range of tourist are attracted recently.</p>\r\n<p>rara national park ois located at the mid western part of nepal.one of the famous place to visit in rara national park is rara lake.due to facility of road wide range of tourist are attracted recently.</p>', '15000', '15', '', '', 'tour', '<p>rara national park ois located at the mid western part of nepal.one of the famous place to visit in rara national park is rara lake.due to facility of road wide range of tourist are attracted recently.rara national park ois located at the mid western part of nepal.one of the famous place to visit in rara national park is rara lake.due to facility of road wide range of tourist are attracted recently.rara national park ois located at the mid western part of nepal.one of the famous place to visit in rara national park is rara lake.due to facility of road wide range of tourist are attracted recently.</p>', 1, 'images/package/25-06-2018-1529941874rara.jpg', 'images/package/25-06-2018-1529941874rara2.png', NULL, 42, 'explorenepal', '', 'rara', 0),
(32, 0, 'test', 'test', 'Others', '<p>hdd</p>', '100', '1', '2015/2/2', '2015/2/2', 'hiking', '<p>hdhdhd</p>', 0, 'images/package/28-08-2018-1535429677Screenshot (7).png', 'images/package/28-08-2018-1535429677Screenshot (8).png', NULL, 41, 'namastetravel', 'test', 'tour', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prid` int(11) NOT NULL,
  `prname` varchar(100) NOT NULL,
  `prcategory` varchar(100) DEFAULT NULL,
  `prgender` varchar(200) DEFAULT NULL,
  `prbrand` varchar(100) DEFAULT NULL,
  `prcost` int(11) NOT NULL,
  `primg1` varchar(100) NOT NULL,
  `primg2` varchar(100) NOT NULL,
  `prdescription` varchar(300) NOT NULL,
  `prrecommend` varchar(100) DEFAULT NULL,
  `prstatus` tinyint(4) DEFAULT NULL,
  `psize` varchar(200) DEFAULT NULL,
  `prquantity` varchar(200) DEFAULT NULL,
  `prcolor` varchar(200) NOT NULL,
  `aid` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prid`, `prname`, `prcategory`, `prgender`, `prbrand`, `prcost`, `primg1`, `primg2`, `prdescription`, `prrecommend`, `prstatus`, `psize`, `prquantity`, `prcolor`, `aid`) VALUES
(20, 'Whiz 2003 Trekking Bag (85 Liters) - Light Brown', 'Bag', 'Unisex', 'Whiz', 6700, 'images/ecommerce/25-06-2018-1529926954bag-1-1.jpg', 'images/ecommerce/25-06-2018-1529926954bag-1-2.jpg', '', NULL, 1, '46', '19', 'Light Brown', '8'),
(21, 'Sonam Gears Karma 35L Trekking Bag-Green(453/408)', 'Bag', 'Unisex', 'Sonam', 4925, 'images/ecommerce/25-06-2018-1529927240bag-2-1.jpg', 'images/ecommerce/25-06-2018-1529927240bag-2-2.jpg', '', NULL, 1, '35', '12', 'Green', '8'),
(22, 'Wildcraft Rucksack For Trekking Dris 35L - Black', 'Bag', 'Unisex', 'Wildcraft', 11500, 'images/ecommerce/25-06-2018-1529927483bag-3-1.jpg', 'images/ecommerce/25-06-2018-1529927483bag-3-2.jpg', '', NULL, 1, '35', '20', 'Black', '8'),
(23, 'Black Quick Dry Stretchable Sports Pants For Women', 'Pant', 'Female', 'Nike', 1290, 'images/ecommerce/25-06-2018-1529927685wpant-2-1.jpg', 'images/ecommerce/25-06-2018-1529927685wpant-2-2.jpg', '', NULL, 1, 'l', '22', 'Black', '8'),
(24, 'American-Elm Navy/White Sport Wear Fish Printed Track Pant For Women', 'Pant', 'Female', 'American-Elm', 1631, 'images/ecommerce/25-06-2018-1529927787wpant-1-1.jpg', 'images/ecommerce/25-06-2018-1529927787wpant-1-2.jpg', '', NULL, 1, 'l', '22', 'Navy Blue', '8'),
(25, 'American-Elm Black/White Star Printed Sports Wear Trackpant For Men', 'Pant', 'Male', 'American-Elm', 1770, 'images/ecommerce/25-06-2018-1529927942mpant-2-1.jpg', 'images/ecommerce/25-06-2018-1529927942mpant-2-2.jpg', '', NULL, 1, 'xl', '21', 'Black', '8'),
(26, 'American-Elm Navy/Golden Zeep Printed Sports Jogger For Men', 'Pant', 'Male', 'American-Elm', 1770, 'images/ecommerce/25-06-2018-1529928041wpant-1-1.jpg', 'images/ecommerce/25-06-2018-1529928041wpant-1-2.jpg', '', NULL, 1, 'l', '44', 'Blue', '8'),
(27, 'Lugaz Pullover Windcheater Jacket For Men- Teal Blue', 'Jacket', 'Male', 'Lugaz', 1350, 'images/ecommerce/25-06-2018-15299282271.jpg', 'images/ecommerce/25-06-2018-152992822711.jpg', '', NULL, 1, 'xl', '22', 'Teal Blue', '8'),
(28, 'Army Green Front Zip Bomber Jacket For Women', 'Jacket', 'Female', 'Bastra', 725, 'images/ecommerce/25-06-2018-152992835922.jpg', 'images/ecommerce/25-06-2018-1529928359222.jpg', '', NULL, 1, 'l', '12', 'Lime', '8'),
(29, 'Sonam Gears Blue Tenzing Softshell Jacket For Men (567)', 'Jacket', 'Male', 'Sonam Gears', 7905, 'images/ecommerce/25-06-2018-152992853833.jpg', 'images/ecommerce/25-06-2018-1529928538333.jpg', '', NULL, 1, 'xl', '12', 'Blue', '8'),
(30, 'SUOYUE Black Waterproof, Windproof, Breathable, Anti-Skid, Shock Absorbtion Shoes For Men', 'Shoe', 'Male', 'SUOYUE ', 3850, 'images/ecommerce/25-06-2018-152992886144.jpg', 'images/ecommerce/25-06-2018-15299288614.jpg', '', NULL, 1, '40', '23', 'Black', '8'),
(31, 'Grey/Pink Lace-Up Sports Shoes For Women', 'Shoe', 'Female', 'Goldstar', 1600, 'images/ecommerce/25-06-2018-1529928955111.jpg', 'images/ecommerce/25-06-2018-15299289551111.jpg', '', NULL, 1, '39', '22', 'Pink', '8'),
(32, 'Grey/Blue Mesh Sports Shoes For Men - 2984', 'Shoe', 'Male', 'Mesh', 1400, 'images/ecommerce/25-06-2018-152992909712.jpg', 'images/ecommerce/25-06-2018-152992909713.jpg', '', NULL, 1, '40', '33', 'Blue', '8'),
(33, 'Yunteng Combo Of 1288 Selfie Stick With Monopod + Yt 228 Tripod', 'Equipments', 'Unisex', 'Yunteng ', 688, 'images/ecommerce/25-06-2018-152992934021.jpg', 'images/ecommerce/25-06-2018-152992934022.jpg', 'Yunteng Best quality mono pod.  Extendable Handheld Pole with Shutter Remote Control For better angled picture. ', NULL, 1, '-', '22', 'Black', '8'),
(34, 'Toread Yellow/Black Length Changeable Trekking Stick', 'Equipments', 'Unisex', 'Toread', 4990, 'images/ecommerce/25-06-2018-15299298261.jpg', 'images/ecommerce/25-06-2018-15299298262.jpg', '', NULL, 1, '-', '22', 'Yellow', '8');

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `id` int(11) NOT NULL,
  `cid` int(11) DEFAULT NULL,
  `prid` int(11) DEFAULT NULL,
  `orderdate` varchar(50) DEFAULT NULL,
  `ordertime` time NOT NULL,
  `prcost` int(11) DEFAULT NULL,
  `prquantity` varchar(200) NOT NULL,
  `prcosttotal` varchar(200) NOT NULL,
  `prtotal` int(11) DEFAULT NULL,
  `pr_orderstatus` tinyint(4) DEFAULT NULL,
  `tid` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_order`
--

INSERT INTO `product_order` (`id`, `cid`, `prid`, `orderdate`, `ordertime`, `prcost`, `prquantity`, `prcosttotal`, `prtotal`, `pr_orderstatus`, `tid`) VALUES
(39, 21, 22, '2018/06/25', '18:24:39', 11500, '1', '11500', 11500, 2, 1),
(40, 21, 25, '2018/06/25', '18:25:55', 1770, '1', '1770', 13270, 2, 2),
(41, 21, 22, '2018/06/25', '18:25:55', 11500, '1', '11500', 13270, 2, 2),
(42, 26, 20, '2018/06/26', '08:02:50', 6700, '1', '6700', 6700, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `rid` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `hname` varchar(250) NOT NULL,
  `rno` int(11) NOT NULL,
  `rtitle` varchar(250) NOT NULL,
  `rtype` varchar(100) NOT NULL,
  `totalroom` int(11) NOT NULL,
  `rhomestaycost` int(11) NOT NULL,
  `rhotelcost` int(11) NOT NULL,
  `rimage1` varchar(500) NOT NULL,
  `rimage2` varchar(500) DEFAULT NULL,
  `rimage3` varchar(500) DEFAULT NULL,
  `refrigerator` int(11) NOT NULL,
  `wifi` tinyint(2) NOT NULL,
  `hotwater` tinyint(4) NOT NULL,
  `aircondition` tinyint(4) NOT NULL,
  `tv` tinyint(4) NOT NULL,
  `private_bathroom` tinyint(4) NOT NULL,
  `noofbed` int(11) NOT NULL,
  `restaurant` tinyint(4) NOT NULL,
  `roomservice` tinyint(4) NOT NULL,
  `laundry` tinyint(4) NOT NULL,
  `rstatus` tinyint(4) DEFAULT NULL,
  `aid` int(11) NOT NULL,
  `ausername` varchar(200) NOT NULL,
  `rcounter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`rid`, `hid`, `hname`, `rno`, `rtitle`, `rtype`, `totalroom`, `rhomestaycost`, `rhotelcost`, `rimage1`, `rimage2`, `rimage3`, `refrigerator`, `wifi`, `hotwater`, `aircondition`, `tv`, `private_bathroom`, `noofbed`, `restaurant`, `roomservice`, `laundry`, `rstatus`, `aid`, `ausername`, `rcounter`) VALUES
(39, 49, '', 1001, 'Single Room', '', 2, 0, 1000, 'images/hotels/room/29-08-2018-1535512753Screenshot (19).png', NULL, NULL, 1, 1, 0, 0, 0, 1, 2, 0, 0, 0, 0, 49, 'htldream', 0),
(40, 46, '', 20, 'Luxury Room', '', 2, 0, 2500, 'images/hotels/room/29-08-2018-1535515326room-12.jpg', NULL, NULL, 1, 1, 1, 1, 1, 0, 2, 1, 1, 1, 1, 46, 'htlannapurna', 0),
(41, 46, '', 20, 'Luxury Room', '', 2, 0, 2500, 'images/hotels/room/29-08-2018-1535515373room-12.jpg', NULL, NULL, 1, 1, 1, 1, 1, 0, 2, 1, 1, 1, 1, 46, 'htlannapurna', 0),
(42, 46, '', 20, 'Luxury Room', '', 2, 0, 2500, 'images/hotels/room/29-08-2018-1535515397room-12.jpg', NULL, NULL, 1, 1, 1, 1, 1, 0, 2, 1, 1, 1, 1, 46, 'htlannapurna', 0),
(45, 46, '', 20, 'Luxury Room', '', 2, 0, 2500, 'images/hotels/room/29-08-2018-1535523556room-12.jpg', NULL, NULL, 1, 1, 1, 1, 1, 0, 2, 1, 1, 1, 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `tid` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `ausername` varchar(500) NOT NULL,
  `tlocation` varchar(500) NOT NULL,
  `ttitle` varchar(500) NOT NULL,
  `taddress` varchar(500) NOT NULL,
  `tdescription` text NOT NULL,
  `timage1` varchar(500) NOT NULL,
  `timage2` varchar(500) NOT NULL,
  `tkeyword` varchar(500) NOT NULL,
  `tlatitude` varchar(200) NOT NULL,
  `tlongitude` varchar(200) NOT NULL,
  `tadded_date` varchar(500) NOT NULL,
  `tstatus` enum('0','1') NOT NULL,
  `tcounter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`tid`, `aid`, `ausername`, `tlocation`, `ttitle`, `taddress`, `tdescription`, `timage1`, `timage2`, `tkeyword`, `tlatitude`, `tlongitude`, `tadded_date`, `tstatus`, `tcounter`) VALUES
(9, 9, 'anisha', 'Chitwan', 'Jungle Safari', 'Bharatpur, Chitwan', '<p><span style=\"color: #333333; font-family: Raleway, Helvetica, Arial, sans-serif; font-size: 15px; letter-spacing: 0.3px;\">The&nbsp;</span><span style=\"box-sizing: border-box; font-weight: 600; color: #333333; font-family: Raleway, Helvetica, Arial, sans-serif; font-size: 15px; letter-spacing: 0.3px;\">Chitwan National park</span><span style=\"color: #333333; font-family: Raleway, Helvetica, Arial, sans-serif; font-size: 15px; letter-spacing: 0.3px;\">&nbsp;is home to many wild mammals including&nbsp;</span><span style=\"box-sizing: border-box; font-weight: 600; color: #333333; font-family: Raleway, Helvetica, Arial, sans-serif; font-size: 15px; letter-spacing: 0.3px;\">One-Horned Rhino, Royal Bengal Tiger, wild Elephant, Deer, wild boar, sloth bear, leopard, bison, jackal and many more, many reptiles including Gharial Crocodile</span><span style=\"color: #333333; font-family: Raleway, Helvetica, Arial, sans-serif; font-size: 15px; letter-spacing: 0.3px;\">&nbsp;and many species of the birds including Hombill, Lesser florican and Paradise Flycastcher, so chitwan is the best destination for&nbsp;</span><span style=\"box-sizing: border-box; font-weight: 600; color: #333333; font-family: Raleway, Helvetica, Arial, sans-serif; font-size: 15px; letter-spacing: 0.3px;\">Jungle Safari and wild life adventure</span><span style=\"color: #333333; font-family: Raleway, Helvetica, Arial, sans-serif; font-size: 15px; letter-spacing: 0.3px;\">&nbsp;lover.</span></p>', 'images/todo/25-06-2018-1529926647c.jpg', 'images/todo/25-06-2018-1529926647c2.jpg', 'Chitwan , Safari', '26.85431256253655', '83.43968660800783', '2018-06-25 05:22:27pm', '1', 3),
(11, 9, 'anisha', 'Bhaktapur', 'Trying Out JUJU DHAU', 'Bhaktapur', '<p>JUJU dhau is&nbsp; means the king of curd.It is popular in bhaktapur district prepared by local people.JUJU dhau is&nbsp; means the king of curd.It is popular in bhaktapur district prepared by local peopleJUJU dhau is&nbsp; means the king of curd.It is popular in bhaktapur district prepared by local people</p>', 'images/todo/25-06-2018-1529927176j.jpg', 'images/todo/25-06-2018-1529927176j1.jpg', '', '27.707761989639167', '85.32349855869143', '2018-06-25 05:31:16pm', '1', 2),
(12, 9, 'anisha', 'Pokhara', 'Paragliding', 'Sarangkot,Pokhara', '<p>Paragliding is the most popular adventure.Sarangkot is popular for paragliding</p>', 'images/todo/25-06-2018-1529927628p.jpg', 'images/todo/25-06-2018-1529927628pp.jpg', 'Sarangkot, paragliding', '26.0335621808703', '82.6414612051758', '2018-06-25 05:38:48pm', '1', 0),
(13, 9, 'anisha', 'Pokhara', 'Sight Seeing', 'Lakeside ,pokhara', '<p>&nbsp;The most amazing views around lake side will definitely amaze you and make you happy. The most amazing views around lake side will definitely amaze you and make you happy. The most amazing views around lake side will definitely amaze you and make you happy.</p>', 'images/todo/25-06-2018-1529927796ss.jpg', 'images/todo/25-06-2018-1529927796sssss.jpg', '', '27.651515985827118', '84.88713533847658', '2018-06-25 05:41:36pm', '1', 2),
(14, 9, 'anisha', 'Bhaktapur', 'Sunrise at nagarkot', 'Nagarkot, Bhaktapur', '<p>There is a magnificient sunrise and sunset view from nagarkot situated at bhaktapur.There is a magnificient sunrise and sunset view from nagarkot situated at bhaktapurvThere is a magnificient sunrise and sunset view from nagarkot situated at bhaktapurThere is a magnificient sunrise and sunset view from nagarkot situated at bhaktapurThere is a magnificient sunrise and sunset view from nagarkot situated at bhaktapurThere is a magnificient sunrise and sunset view from nagarkot situated at bhaktapur</p>', 'images/todo/25-06-2018-1529928004s.jpg', 'images/todo/25-06-2018-1529928004sssss.jpg', '', '27.684050989930817', '85.32349855869143', '2018-06-25 05:45:04pm', '1', 5),
(15, 9, 'anisha', 'Kathmandu', 'Bhuteko Anda Chiura At Bhauju ko Bhatti', 'Patan', '<p>Bhuteko anda chiura at patan , bhauju ko bhatti will give you the feeling of local house hold dish.Bhuteko anda chiura at patan , bhauju ko bhatti will give you the feeling of local house hold dish.Bhuteko anda chiura at patan , bhauju ko bhatti will give you the feeling of local house hold dish.Bhuteko anda chiura at patan , bhauju ko bhatti will give you the feeling of local house hold dish.Bhuteko anda chiura at patan , bhauju ko bhatti will give you the feeling of local house hold dish.Bhuteko anda chiura at patan , bhauju ko bhatti will give you the feeling of local house hold dish.</p>', 'images/todo/25-06-2018-1529928179a.jpg', 'images/todo/25-06-2018-1529928179aaaa.jpg', '', '27.664896038592904', '85.31972200839846', '2018-06-25 05:47:59pm', '1', 12),
(16, 1, 'sjonchhe ', 'Kathmandu', 'Hot Lemon and Pau Baraf at Shigal', 'Shreegha, Kathmandu', '<p>The taste of delicious pau baraf which urges on to get more than 2 at&nbsp; one outing.Shreegha is a very good place to chill with your friends during eveninng time.Also the hot lemons here are famous with the youngsters</p>', 'images/todo/25-06-2018-1529937824IMG20171221150046.jpg', '', '', '27.711637336279985', '85.30882151096193', '2018-06-25 20:28:44', '1', 2),
(17, 1, 'sjonchhe ', 'Kathmandu', 'Matka Tea at Basantapur', 'Basantapur, Kathmandu', '<p><span class=\"st\"><em>Tea</em> is an aromatic beverage commonly prepared by pouring hot or boiling water over cured leaves of the Camellia sinensis, an evergreen shrub (bush) native to</span><span class=\"st\"><em>Tea</em> is an aromatic beverage commonly prepared by pouring hot or boiling water over cured leaves of the Camellia sinensis, an evergreen shrub (bush) native to</span><span class=\"st\"><em>Tea</em> is an aromatic beverage commonly prepared by pouring hot or boiling water over cured leaves of the Camellia sinensis, an evergreen shrub (bush) native to</span><span class=\"st\"><em>Tea</em> is an aromatic beverage commonly prepared by pouring hot or boiling water over cured leaves of the Camellia sinensis, an evergreen shrub (bush) native to</span></p>\r\n<p><span class=\"st\"><em>Tea</em> is an aromatic beverage commonly prepared by pouring hot or boiling water over cured leaves of the Camellia sinensis, an evergreen shrub (bush) native to</span><span class=\"st\"><em>Tea</em> is an aromatic beverage commonly prepared by pouring hot or boiling water over cured leaves of the Camellia sinensis, an evergreen shrub (bush) native to</span></p>', 'images/todo/25-06-2018-1529937887c8637883b64d846c843ccbb72798a321e2215d9d.jpg', 'images/todo/25-06-2018-1529937887tea1.jpg', '', '27.705330329300878', '85.30616075961916', '2018-06-25 08:29:47pm', '1', 9);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `cid` int(11) NOT NULL,
  `cusername` varchar(250) NOT NULL,
  `cfirst_name` varchar(100) NOT NULL,
  `clast_name` varchar(100) NOT NULL,
  `caddress` varchar(200) NOT NULL,
  `ccontact` int(20) NOT NULL,
  `cemail` varchar(200) NOT NULL,
  `cdob` varchar(20) NOT NULL,
  `cgender` varchar(10) NOT NULL,
  `cpassword` varchar(20) DEFAULT NULL,
  `cimage` varchar(500) NOT NULL,
  `cabout` varchar(500) NOT NULL,
  `cjoindate` varchar(20) NOT NULL,
  `cstatus` tinyint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`cid`, `cusername`, `cfirst_name`, `clast_name`, `caddress`, `ccontact`, `cemail`, `cdob`, `cgender`, `cpassword`, `cimage`, `cabout`, `cjoindate`, `cstatus`) VALUES
(21, 'sjonchhe', 'Sandesh', 'Jonchhe', 'Maharajgunj', 2147483647, 'sandeshjon@gmail.com', '1996-03-18', 'male', 'apple', 'images/default-avatar.png', '', '2018/06/25', 1),
(22, 'manish', 'Manish', 'Sigdel', 'Gokarna', 2147483647, 'manish@gmail.com', '', 'male', 'apple', 'images/default-avatar.png', '', '2018/06/25', 1),
(23, 'ramshrestha', 'Ram', 'Shresth', 'Kapan', 685654565, 'ramshrestha@gmail.com', '', 'male', 'apple', 'images/default-avatar.png', '', '2018/06/25', 1),
(24, 'sitashrestha', 'Sita', 'Shrestha', 'Patan', 685136856, 'sitashrestha@gmail.com', '', 'male', 'apple', 'images/default-avatar.png', '', '2018/06/25', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vid` int(11) NOT NULL,
  `vtitle` varchar(100) DEFAULT NULL,
  `vtype` varchar(100) NOT NULL,
  `vdescription` text,
  `vtotalseat` int(11) NOT NULL,
  `vcost` int(11) DEFAULT NULL,
  `vadded_date` varchar(100) DEFAULT NULL,
  `vstatus` tinyint(4) DEFAULT NULL,
  `vkeyword` varchar(100) DEFAULT NULL,
  `vimg1` varchar(100) NOT NULL,
  `vimg2` varchar(100) NOT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vid`, `vtitle`, `vtype`, `vdescription`, `vtotalseat`, `vcost`, `vadded_date`, `vstatus`, `vkeyword`, `vimg1`, `vimg2`, `id`) VALUES
(1, 'Mahindra Scorpio', '4wd', '<p><strong>Jeep </strong>is the best vehicle in Nepal if you are visiting Nepal for adventure and exotic tour. We have good conditioned jeep for rental service in Kathmandu and all over Nepal for you. The jeep has spacious room for maximum 04 pax including the driver. You can also drive the vehicle if you are 04 members or you want to drive on your own.</p>', 7, 6000, '2018/06/25', 1, '', 'images/vehicle/25-06-2018-1529935546912531_Yatriyo-Scorpio.jpg', 'images/vehicle/25-06-2018-15299355463010190.jpg', 1),
(2, 'Tiago- 4Seater hatchback', 'car', '<p><strong>Car </strong>is the most selected vehicle for all purpose from airport pick up, drop to easy and comfortable tour in Nepal. But you must be 1 to 3 member group to hire the car. Most of the car has spacious room for maximum 4 people including the driver. The driver for your journey is very friendly and well trained for the job</p>', 4, 5000, '2018/06/25', 1, '', 'images/vehicle/25-06-2018-1529935853IMG_20161020_162803308_HDR.jpg', 'images/vehicle/25-06-2018-1529935853Tata-Tiago-925792710-6042720-2.JPG', 1),
(3, 'Honda Grazia', 'motorcycle', '', 2, 1500, '2018/06/25', 1, '', 'images/vehicle/25-06-2018-1529936095v_honda-grazia-std1527083899.jpg', 'images/vehicle/25-06-2018-152993609539517_HondaGrazia-2018006.JPG', 1),
(4, 'Hornet', 'motorcycle', '', 2, 1500, '2018/06/25', 1, '', 'images/vehicle/25-06-2018-1529936245IMG_0175.jpg', 'images/vehicle/25-06-2018-1529936245Hornet-Gallery-2.jpg', 1),
(5, 'Giant Bike', 'bike', '', 1, 1000, '2018/06/25', 1, '', 'images/vehicle/25-06-2018-1529936462bicicleta-mountain-bike-mtb-Sense-Impact-Pro-2018-00013-1.jpg', 'images/vehicle/25-06-2018-1529936462cube_reaction_pro_2(1).jpg', 1),
(6, 'Mahindra Thar', '4wd', '<p><strong>Thar </strong>is the luxurious vehicle with the best environment and air conditioned spacious room for 4 to 5 pax including the driver. This Tata safari vehicle is mostly preferred by the business personnel and luxurious tourist in Nepal.</p>\r\n<p>The rental cost for this vehicle is comparatively higher than other vehicle but the service and the cool driving experience cannot be compared</p>', 4, 10000, '2018/06/25', 1, '', 'images/vehicle/25-06-2018-1529939742Mahindra-Thar-Customised-Into-Jeep-Wrangler-3.jpg', 'images/vehicle/25-06-2018-1529939742mahindra-thar-hardtop-coimbatore-500x500.jpg', 1),
(7, 'bike', 'bike', '<p>asda</p>', 2, 1500, '2018-08-31 05:12:50', 1, 'as', 'images/vehicle/31-08-2018-1535685170Hornet-Gallery-2.jpg', '', 56);

-- --------------------------------------------------------

--
-- Table structure for table `vendorinfo`
--

CREATE TABLE `vendorinfo` (
  `id` int(10) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `caddress` varchar(50) NOT NULL,
  `cemail` varchar(50) NOT NULL,
  `cphone` varchar(100) NOT NULL,
  `ctype` varchar(50) NOT NULL,
  `cdescription` longtext NOT NULL,
  `panno` varchar(50) NOT NULL,
  `dpic` varchar(2000) NOT NULL,
  `cremark` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendorinfo`
--

INSERT INTO `vendorinfo` (`id`, `cname`, `caddress`, `cemail`, `cphone`, `ctype`, `cdescription`, `panno`, `dpic`, `cremark`) VALUES
(5, 'jhabsm', 'bmamndm', 'bnmbsamnb@sdsad.com', '', 'hotel', '', '', 'images/certificate/Screenshot (9).png', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`Aid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `book_hotel`
--
ALTER TABLE `book_hotel`
  ADD PRIMARY KEY (`bid`),
  ADD KEY `cid` (`cid`),
  ADD KEY `hid` (`hid`),
  ADD KEY `rid` (`rid`);

--
-- Indexes for table `book_package`
--
ALTER TABLE `book_package`
  ADD PRIMARY KEY (`pbid`),
  ADD KEY `pid` (`pid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `book_vehicle`
--
ALTER TABLE `book_vehicle`
  ADD PRIMARY KEY (`vbid`),
  ADD KEY `vid` (`vid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `homestay`
--
ALTER TABLE `homestay`
  ADD PRIMARY KEY (`hsid`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`lid`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prid`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `prid` (`prid`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `hid` (`hid`);

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vid`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `vendorinfo`
--
ALTER TABLE `vendorinfo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `Aid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `book_hotel`
--
ALTER TABLE `book_hotel`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book_package`
--
ALTER TABLE `book_package`
  MODIFY `pbid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `book_vehicle`
--
ALTER TABLE `book_vehicle`
  MODIFY `vbid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `fid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `homestay`
--
ALTER TABLE `homestay`
  MODIFY `hsid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vendorinfo`
--
ALTER TABLE `vendorinfo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `user` (`cid`),
  ADD CONSTRAINT `blog_ibfk_2` FOREIGN KEY (`cid`) REFERENCES `user` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `book_hotel`
--
ALTER TABLE `book_hotel`
  ADD CONSTRAINT `book_hotel_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `user` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_hotel_ibfk_2` FOREIGN KEY (`hid`) REFERENCES `hotel` (`hid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_hotel_ibfk_3` FOREIGN KEY (`rid`) REFERENCES `room` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `book_vehicle`
--
ALTER TABLE `book_vehicle`
  ADD CONSTRAINT `book_vehicle_ibfk_1` FOREIGN KEY (`vid`) REFERENCES `vehicle` (`vid`),
  ADD CONSTRAINT `book_vehicle_ibfk_2` FOREIGN KEY (`vid`) REFERENCES `vehicle` (`vid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_vehicle_ibfk_3` FOREIGN KEY (`cid`) REFERENCES `user` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `package`
--
ALTER TABLE `package`
  ADD CONSTRAINT `package_ibfk_1` FOREIGN KEY (`id`) REFERENCES `admin` (`id`),
  ADD CONSTRAINT `package_ibfk_2` FOREIGN KEY (`id`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_order`
--
ALTER TABLE `product_order`
  ADD CONSTRAINT `product_order_ibfk_1` FOREIGN KEY (`prid`) REFERENCES `product` (`prid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
