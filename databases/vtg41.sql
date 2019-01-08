-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2018 at 03:10 AM
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
(1, 'sjonchhe ', 'Sandesh', 'Jonchhe', 'sandeshjon@gmail.com', '9849128762', '1f3870be274f6c49b3e31a0c6728957f', 'Maharajgunj', '', '<p>Always code as if the guy who ends up maintaining your code will be violent psychopath who knows where you live</p>', 'Founder / Designer / Developer', 'images/admin/11.jpg', 1, 1, '', '', '', '', ''),
(9, 'anisha', 'Anisha', 'Shrestha', 'anisha@gmail.com', '9843327132', '1f3870be274f6c49b3e31a0c6728957f', 'Gokarna', '', '', 'Founder / Database Admin / Developer', 'images/admin/asd.jpg', 1, 1, '', '', '', '', ''),
(10, '', 'Basanta', 'Shahi', 'basanta999s@gmail.com', '9843312532', '1f3870be274f6c49b3e31a0c6728957f', 'Kapan', '', '', '', 'images/admin/33575130_1913070718724670_989777021544431616_n.jpg', 1, 1, '', '', '', '', ''),
(60, 'abhash', 'Abhash', 'DC', 'abhashdc@gmail.com', '98485156', '1f3870be274f6c49b3e31a0c6728957f', 'Basundhara', '', '', '', 'images/admin/23755503_1484198664950489_8204578438821019205_n.jpg', 1, 1, '2018/09/02', '', '', '', ''),
(71, 'namastetravel', '', '', 'namastetrael@gmail.com', '9845666635', '1f3870be274f6c49b3e31a0c6728957f', 'Boudha', '', '', '', 'images/admin/04-09-2018-1536053178namaste-hand-posture-background_23-2147707402.jpg', 4, 1, '2018/09/05', 'package', 'Namaste Travel', '27.721818963473538', '85.35757334201651'),
(72, 'htlannapurna', '', '', 'hotelannapurna@gmail.com', '9849125155', '1f3870be274f6c49b3e31a0c6728957f', 'Durbar Marga', 'Kathmandu', '', '', 'images/admin/25-06-2018-152992813435086064.jpg', 4, 1, '2018/09/05', 'hotel', 'Hotel Annapurna', '27.713726926844732', '85.32255442111807'),
(73, 'hotelcityinn', '', '', 'htlcity@gmail.com', '9843359857', '1f3870be274f6c49b3e31a0c6728957f', 'Pokhara', '', '', '', 'images/admin/cityinn.jpg', 4, 1, '2018/09/05', 'hotel', 'Hotel City Inn', '28.219322678400527', '83.9814499136719'),
(74, 'hotellakeview', '', '', 'lake@gmail.com', '9843359845', '21232f297a57a5a743894a0e4a801fc3', 'Pokhara', '', '', '', 'images/admin/LAKEVIEWDELUX.jpg', 4, 1, '2018/09/05', 'hotel', 'HOTEL LAKE VIEW', '28.213272171034316', '83.98007662265627'),
(75, 'hotelbarahi', '', '', 'barahi12@gmail.com', '9843327135', '1f3870be274f6c49b3e31a0c6728957f', 'Pokhara', '', '', '', 'images/admin/barahi1.jpg', 4, 1, '2018/09/05', 'hotel', 'Hotel Barahi', '28.22779281270546', '84.00204927890627'),
(76, 'hoteldwarika', '', '', 'dwarika@gmail.com', '9843312582', '1f3870be274f6c49b3e31a0c6728957f', 'Gaushala,Kathmandu', '', '', '', 'images/admin/dwarika2.jpg', 4, 1, '2018/09/05', 'hotel', 'Dwarika Hotel', '27.714752711199374', '85.32590181796877'),
(77, 'hotellandmark', '', '', 'land@gmail.com', '9843312532', '1f3870be274f6c49b3e31a0c6728957f', 'Kathmandu', '', '', '', 'images/admin/landmark1.jpg', 4, 1, '2018/09/05', 'hotel', 'Hotel Landmark', '27.737849299999997', '85.3286484'),
(78, 'hoteleverest', '', '', 'eve@gmail.com', '9841424070', '1f3870be274f6c49b3e31a0c6728957f', 'Nagarkot,Bhaktapur', '', '', '', 'images/admin/EVERESTMANLA.jpg', 4, 1, '2018/09/05', 'hotel', 'Everest Manla', '27.669000953736266', '85.43078691928713');

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
(15, 'Experience of Pokhara', 'Pokhara', '<p>Pokhara is an awesome place to visit.While visiting pokhara i found that there are lots of natural resources thrilling your mind.</p>', '2018-06-25 06:10:46p', 'images/blog/ghandruk2.jpg', 'Pokhara', 1, 21, 3),
(16, ' Ghalegaun tour experience', 'Others', '<p>Ghalegaun is the place full of entire natural beauty which really fascinated me.Ghalegaun is the place full of entire natural beauty which really fascinated me.Ghalegaun is the place full of entire natural beauty which really fascinated me.vGhalegaun is the place full of entire natural beauty which really fascinated meGhalegaun is the place full of entire natural beauty which really fascinated me.Ghalegaun is the place full of entire natural beauty which really fascinated me.Ghalegaun is the place full of entire natural beauty which really fascinated me.Ghalegaun is the place full of entire natural beauty which really fascinated me.</p>', '2018-06-25 06:15:03p', 'images/blog/ghandruk3.jpg', 'Ghalegaun', 1, 21, 0),
(18, 'Annapurna Trekking ', 'Others', '<p>Annapurna trekking provided me a new experience.Annapurna trekking provided me a new experience.Annapurna trekking provided me a new experience.Annapurna trekking provided me a new experience.Annapurna trekking provided me a new experience.Annapurna trekking provided me a new experience.Annapurna trekking provided me a new experience.Annapurna trekking provided me a new experience.</p>', '2018-06-25 06:22:11p', 'images/blog/langtang1.jpg', 'Annapurna , trekking', 1, 23, 2);

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
  `hbook_date` varchar(500) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `bduration` int(11) NOT NULL,
  `b_h_cost` int(11) NOT NULL,
  `b_h_status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_hotel`
--

INSERT INTO `book_hotel` (`bid`, `cid`, `hid`, `rid`, `rno`, `hbook_date`, `checkin`, `checkout`, `bduration`, `b_h_cost`, `b_h_status`) VALUES
(10, 29, 72, 53, 2, '2018-09-05 05:22:50pm', '2018-09-07', '2018-09-11', 4, 12000, 3),
(11, 32, 72, 53, 2, '2018-09-05 06:00:45pm', '2018-09-06', '2018-09-08', 2, 6000, 2),
(12, 32, 72, 53, 2, '2018-09-05 06:05:16pm', '2018-09-13', '2018-10-19', 36, 108000, 2),
(13, 32, 72, 53, 1, '2018-09-05 06:37:40pm', '2018-09-07', '2018-09-10', 3, 4500, 1);

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
(30, 32, 33, 1, 8, '2018-09-28', 5, '120000', '2018-09-05 06:05:48pm');

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
(50, 'Others', '', '', '1'),
(52, 'Kapan', 'images/location/02-09-2018-153587562225-06-2018-1529927016j.jpg', 'images/location/02-09-2018-153587562225-06-2018-1529927176j1.jpg', '1');

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
(33, 0, 'Illam Tour', 'Illam', 'Others', '<p>This is description</p>', '15000', '5', '', '', 'tour', '<p><strong>This is the itenaryadsad</strong></p>', 1, 'images/package/05-09-2018-1536148977Ilam1.jpg', 'images/package/05-09-2018-1536148977illam2.jpg', NULL, 71, 'namastetravel', '', '', 2);

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
(46, 46, '', 102, 'Single Bedroom', '', 3, 0, 1500, 'images/hotels/room/01-09-2018-1535796711Hanoi-la-suite-room-4.jpg', NULL, NULL, 0, 1, 0, 0, 1, 0, 1, 0, 0, 0, 1, 46, 'htlannapurna', 0),
(48, 46, '', 201, 'Suite Room', '', 2, 0, 2500, 'images/hotels/room/04-09-2018-1536053272room-12.jpg', 'images/hotels/room/04-09-2018-1536053247Hanoi-la-suite-room-4.jpg', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 46, 'htlannapurna', 0),
(53, 72, '', 101, 'Single Bedroom', '', 2, 0, 1500, 'images/hotels/room/05-09-2018-153614686404-09-2018-1536053272room-12.jpg', 'images/hotels/room/05-09-2018-153614686404-09-2018-153606979623-06-2018-1529778390sroom1.jpg', NULL, 1, 1, 1, 1, 0, 1, 1, 0, 0, 1, 1, 72, 'htlannapurna', 0);

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
(17, 1, 'sjonchhe ', 'Kathmandu', 'Matka Tea at Basantapur', 'Basantapur, Kathmandu', '<p><span class=\"st\"><em>Tea</em> is an aromatic beverage commonly prepared by pouring hot or boiling water over cured leaves of the Camellia sinensis, an evergreen shrub (bush) native to</span><span class=\"st\"><em>Tea</em> is an aromatic beverage commonly prepared by pouring hot or boiling water over cured leaves of the Camellia sinensis, an evergreen shrub (bush) native to</span><span class=\"st\"><em>Tea</em> is an aromatic beverage commonly prepared by pouring hot or boiling water over cured leaves of the Camellia sinensis, an evergreen shrub (bush) native to</span><span class=\"st\"><em>Tea</em> is an aromatic beverage commonly prepared by pouring hot or boiling water over cured leaves of the Camellia sinensis, an evergreen shrub (bush) native to</span></p>\r\n<p><span class=\"st\"><em>Tea</em> is an aromatic beverage commonly prepared by pouring hot or boiling water over cured leaves of the Camellia sinensis, an evergreen shrub (bush) native to</span><span class=\"st\"><em>Tea</em> is an aromatic beverage commonly prepared by pouring hot or boiling water over cured leaves of the Camellia sinensis, an evergreen shrub (bush) native to</span></p>', 'images/todo/25-06-2018-1529937887c8637883b64d846c843ccbb72798a321e2215d9d.jpg', 'images/todo/25-06-2018-1529937887tea1.jpg', '', '27.705330329300878', '85.30616075961916', '2018-06-25 08:29:47pm', '1', 10),
(18, 1, 'sjonchhe ', 'Kathmandu', 'asda', 'asda', '', 'images/todo/04-09-2018-1536053545Hornet-Gallery-2.jpg', 'images/todo/04-09-2018-1536053545bicicleta-mountain-bike-mtb-Sense-Impact-Pro-2018-00013-1.jpg', '', '27.737849299999997', '85.3286484', '2018-09-02 23:16:22', '1', 0);

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
  `cpassword` varchar(200) DEFAULT NULL,
  `cimage` varchar(500) NOT NULL,
  `cabout` varchar(500) NOT NULL,
  `cjoindate` varchar(20) NOT NULL,
  `cstatus` tinyint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`cid`, `cusername`, `cfirst_name`, `clast_name`, `caddress`, `ccontact`, `cemail`, `cdob`, `cgender`, `cpassword`, `cimage`, `cabout`, `cjoindate`, `cstatus`) VALUES
(29, 'ramshrestha', 'ram', 'shrestha', 'kapan', 685153153, 'ramshrestha@gmail.com', '2018-09-22', 'male', '1f3870be274f6c49b3e31a0c6728957f', 'images/default-avatar.png', '', '2018/09/05', 1),
(32, 'sjonchhe', 'sandesh', 'jonchhe', 'Maharajgunj', 2147483647, 'sandeshjon@gmail.com', '2018-09-14', 'male', '1f3870be274f6c49b3e31a0c6728957f', 'images/default-avatar.png', '', '2018/09/05', 1);

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
  `id` int(11) DEFAULT NULL,
  `vcounter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD PRIMARY KEY (`bid`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `book_hotel`
--
ALTER TABLE `book_hotel`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `book_package`
--
ALTER TABLE `book_package`
  MODIFY `pbid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `book_vehicle`
--
ALTER TABLE `book_vehicle`
  MODIFY `vbid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `fid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vendorinfo`
--
ALTER TABLE `vendorinfo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- Constraints for table `book_package`
--
ALTER TABLE `book_package`
  ADD CONSTRAINT `book_package_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `user` (`cid`),
  ADD CONSTRAINT `book_package_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `package` (`pid`);

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
