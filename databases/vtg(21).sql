-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2018 at 08:05 AM
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
  `adescription` longtext NOT NULL,
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
(10, 'basanta', 'Basanta', 'Shahi', 'basanta999s@gmail.com', '9843312532', '1f3870be274f6c49b3e31a0c6728957f', 'Kapan', '', '', '', 'images/admin/33575130_1913070718724670_989777021544431616_n.jpg', 1, 1, '', '', '', '', ''),
(60, 'abhash', 'Abhash', 'DC', 'abhashdc@gmail.com', '98485156', '1f3870be274f6c49b3e31a0c6728957f', 'Basundhara', '', '', '', 'images/admin/23755503_1484198664950489_8204578438821019205_n.jpg', 1, 1, '2018/09/02', '', '', '', ''),
(71, 'namastetravel', '', '', 'namastetrael@gmail.com', '9845666635', '1f3870be274f6c49b3e31a0c6728957f', 'Boudha', '', '', '', 'images/admin/04-09-2018-1536053178namaste-hand-posture-background_23-2147707402.jpg', 4, 1, '2018/09/05', 'package', 'Namaste Travel', '27.721818963473538', '85.35757334201651'),
(72, 'htlannapurna', '', '', 'hotelannapurna@gmail.com', '9849125155', '1f3870be274f6c49b3e31a0c6728957f', 'Durbar Marga', 'Kathmandu', '<p>aadsd</p>', '', 'images/admin/25-06-2018-152992813435086064.jpg', 4, 1, '2018/09/05', 'hotel', 'Hotel Annapurna', '27.713726926844732', '85.32255442111807'),
(73, 'hotelcityinn', '', '', 'htlcity@gmail.com', '9843359857', '1f3870be274f6c49b3e31a0c6728957f', 'Pokhara', 'Pokhara', '', '', 'images/admin/cityinn.jpg', 4, 1, '2018/09/05', 'hotel', 'Hotel City Inn', '28.219322678400527', '83.9814499136719'),
(74, 'hotellakeview', '', '', 'lake@gmail.com', '9843359845', '1f3870be274f6c49b3e31a0c6728957f', 'Pokhara', 'Pokhara', '', '', 'images/admin/25-06-2018-1529930203hotel-temple-tree.jpg', 4, 1, '2018/09/05', 'hotel', 'HOTEL LAKE VIEW', '28.213272171034316', '83.98007662265627'),
(75, 'hotelbarahi', '', '', 'barahi12@gmail.com', '9843327135', '1f3870be274f6c49b3e31a0c6728957f', 'Pokhara', 'Pokhara', '', '', 'images/admin/barahi1.jpg', 4, 1, '2018/09/05', 'hotel', 'Hotel Barahi', '28.22779281270546', '84.00204927890627'),
(76, 'hoteldwarika', '', '', 'dwarika@gmail.com', '9843312582', '1f3870be274f6c49b3e31a0c6728957f', 'Gaushala,Kathmandu', 'Kathmandu', '', '', 'images/admin/dwarika2.jpg', 4, 1, '2018/09/05', 'hotel', 'Dwarika Hotel', '27.714752711199374', '85.32590181796877'),
(77, 'hotellandmark', '', '', 'land@gmail.com', '9843312532', '1f3870be274f6c49b3e31a0c6728957f', 'Kathmandu', 'Kathmandu', '', '', 'images/admin/landmark1.jpg', 4, 1, '2018/09/05', 'hotel', 'Hotel Landmark', '27.737849299999997', '85.3286484'),
(78, 'hoteleverest', '', '', 'eve@gmail.com', '9841424070', '1f3870be274f6c49b3e31a0c6728957f', 'Nagarkot,Bhaktapur', 'Bhaktapur', '', '', 'images/admin/EVERESTMANLA.jpg', 4, 1, '2018/09/05', 'hotel', 'Everest Manla', '27.669000953736266', '85.43078691928713'),
(79, 'hotelmirabel', '', '', 'mirable@gmail.com', '9813177028', '1f3870be274f6c49b3e31a0c6728957f', 'Dhulikhel', 'Kathmandu', '', '', 'images/admin/viber image.jpg', 4, 1, '2018/09/06', 'hotel', 'Hotel Mirabel', '27.624750968999255', '85.55489809482424'),
(80, 'hoteldhulikhel', '', '', 'dhulikhel@gmail.com', '9861367758', '1f3870be274f6c49b3e31a0c6728957f', 'Dhulikhel', 'Kathmandu', '', '', 'images/admin/25-06-2018-1529927896homestay-nepal-alice-mcconnell.jpg', 4, 1, '2018/09/06', 'hotel', 'Dhulikhel Mountain Resort', '27.62505515368982', '85.55352480384317'),
(81, 'ktmcity', '', '', 'ktm12@gmail.com', '9841949448', '1f3870be274f6c49b3e31a0c6728957f', 'Chabahil', '', '', '', 'images/admin/aaa.png', 4, 1, '2018/09/06', 'ecommerce', 'Ktm City', '27.718399866324077', '85.32418520419924'),
(82, 'hamropasal', '', '', 'hamro@gmail.com', '9860060642', '1f3870be274f6c49b3e31a0c6728957f', 'Kathmandu', '', '', '', 'images/admin/Letter_u.svg.png', 4, 1, '2018/09/06', 'ecommerce', 'Hamro Pasal', '27.72052731715102', '85.32521517246096'),
(83, 'ufo', '', '', 'UFO@GMAIL.COM', '9813177025', '1f3870be274f6c49b3e31a0c6728957f', 'kATHMANDU', '', '', '', 'images/admin/index.png', 4, 1, '2018/09/06', 'ecommerce', 'UFO', '27.718399866324077', '85.32624514072268'),
(84, 'sherpalugapasal', '', '', 'sherpa@gmail.com', '9849235659', '1f3870be274f6c49b3e31a0c6728957f', 'Boudha', '', '', '', 'images/admin/images.png', 4, 1, '2018/09/06', 'ecommerce', 'Sherpa Luga Pasal', '27.7202233981456', '85.32418520419924'),
(85, 'nepaltours', '', '', 'nepaltour@gmail.com', '9851062596', '1f3870be274f6c49b3e31a0c6728957f', 'Thamel', '', '', '', 'images/admin/nepal.png', 4, 1, '2018/09/06', 'package', 'Nepal Tours', '27.71566451141534', '85.3272751089844'),
(86, 'friendshipnepal', '', '', 'friendship@gmail.com', '9851115689', '1f3870be274f6c49b3e31a0c6728957f', 'Ashok Galli', '', '', '', 'images/admin/viber image.jpg', 4, 1, '2018/09/06', 'package', 'Friendship Nepal Tours', '27.71900771365291', '85.32624514072268'),
(87, 'hamrotrekking', '', '', 'hamrotrek@gmail.com', '9841648419', '1f3870be274f6c49b3e31a0c6728957f', 'Thamel', '', '', '', 'images/admin/gg.jpg', 4, 1, '2018/09/06', 'package', 'Hamro Trekking Agency', '27.719919478293054', '85.32487184970705'),
(88, 'pokhareli', '', '', 'pokhareli@gmail.com', '9851115834', '1f3870be274f6c49b3e31a0c6728957f', 'Pokhara', '', '', '', 'images/admin/kk.png', 4, 1, '2018/09/06', 'package', 'Pokhareli Travels', '28.2169025165941', '83.99518282382815'),
(89, 'overlandvehicle', '', '', 'overland@hotmail.com', '9843312177', '1f3870be274f6c49b3e31a0c6728957f', 'Kathmandu', '', '', '', 'images/admin/logo.png', 4, 1, '2018/09/06', 'rental', 'Overland Vehicle Service', '27.71931163604672', '85.32693178623049'),
(90, 'bluemountain', '', '', 'blue@gmail.com', '9813009436', '1f3870be274f6c49b3e31a0c6728957f', 'Kathmandu', '', '', '', 'images/admin/blue mountain.png', 4, 1, '2018/09/06', 'rental', 'Blue Mountain Rental Service', '27.72174298470161', '85.32315523593752'),
(91, 'nepalcar', '', '', 'nepalcar@gmail.com', '9847070330', '1f3870be274f6c49b3e31a0c6728957f', 'Pokhara', '', '', '', 'images/admin/nepal car jeep.png', 4, 1, '2018/09/06', 'rental', 'Nepal Car Jeep Rental Service', '28.240042794162736', '83.9966721224423'),
(92, 'himalayanvehicles', '', '', 'himalayan@gmail.com', '9807282178', '1f3870be274f6c49b3e31a0c6728957f', 'Kathmandu', '', '', '', 'images/admin/himalayan car.png', 4, 1, '2018/09/06', 'rental', 'Himalayan Vehicles Rental Nepal', '27.71353696572026', '85.32418520419924'),
(93, 'yatranepal', '', '', 'yatra@outlook.com', '9843241111', '1f3870be274f6c49b3e31a0c6728957f', 'Pokhara', '', '', '', 'images/admin/yatra.jpg', 4, 1, '2018/09/06', 'rental', 'Yatra Nepal', '28.224131468633434', '83.99153046411743');

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
(11, 32, 72, 53, 2, '2018-09-05 06:00:45pm', '2018-09-06', '2018-09-08', 2, 6000, 3),
(12, 32, 72, 53, 2, '2018-09-05 06:05:16pm', '2018-09-13', '2018-10-19', 36, 108000, 1),
(13, 32, 72, 53, 1, '2018-09-05 06:37:40pm', '2018-09-07', '2018-09-10', 3, 4500, 4),
(14, 32, 72, 53, 1, '2018-09-06 08:39:45am', '2018-09-13', '2018-09-15', 2, 3000, 2);

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
(33, 0, 'Illam Tour', 'Illam', 'Others', '<p>Ilam has many educational institutions. The major campus of Ilam is Mahendra Ratna Multiple Campus, a first QAA certified constituent Campus of <a title=\"Tribhuvan University\" href=\"https://en.wikipedia.org/wiki/Tribhuvan_University\">Tribhuvan University</a>, Nepal. It has four faculty; Science, Humanities, Education and Commerce. It provides education in undergraduation and Post graduation subjects.</p>', '15000', '5', '', '', 'tour', '<p><strong>Day 1:</strong> This is the first itenarary.We start the trip from here.At other sites near Lumbini, earlier Buddhas were, according to tradition, born, then achieved ultimate Enlightenment and finally relinquished their earthly forms.</p>\r\n<p><strong>Day 2:</strong> This is the second itenarary.We start the trip from here.At other sites near Lumbini, earlier Buddhas were, according to tradition, born, then achieved ultimate Enlightenment and finally relinquished their earthly forms.</p>\r\n<p><strong>Day 3:</strong> This is the third itenarary.We start the trip from here.At other sites near Lumbini, earlier Buddhas were, according to tradition, born, then achieved ultimate Enlightenment and finally relinquished their earthly forms.</p>\r\n<p><strong>Day 4:</strong> This is the fourth itenarary.We start the trip from here.At other sites near Lumbini, earlier Buddhas were, according to tradition, born, then achieved ultimate Enlightenment and finally relinquished their earthly forms.</p>', 1, 'images/package/05-09-2018-1536148977Ilam1.jpg', 'images/package/05-09-2018-1536148977illam2.jpg', NULL, 71, 'namastetravel', '', '', 13),
(34, 0, 'Pokhara Tour', 'Pokhara', 'Pokhara', '<p class=\"MsoNoSpacing\">Pokhara is situated at an elevation of 915m above sea level and 200m west of Kathmandu, the capital city of Nepal. The richness of the valley in pure natural beauty is indeed one of the main attractions to the visitors from all over the world. Just imagine the joy of observing the majestic Himalayas, three peaks above 8000m from an elevation of below 1000m within a very close aerial, distance. The valley is equally superb giving as they do elevated close-ups to the snowy peaks. The serenity of Phewa Lake and the magnificence summits like Machhapuchhre (Fishtail) (6977m) and the five peaks of Annapurna range rising behind it create an ambience of peace and magic.</p>\r\n<p>&nbsp;</p>\r\n<!-- [if gte mso 9]><xml>\r\n <o:OfficeDocumentSettings>\r\n  <o:AllowPNG/>\r\n </o:OfficeDocumentSettings>\r\n</xml><![endif]--><!-- [if gte mso 9]><xml>\r\n <w:WordDocument>\r\n  <w:View>Normal</w:View>\r\n  <w:Zoom>0</w:Zoom>\r\n  <w:TrackMoves/>\r\n  <w:TrackFormatting/>\r\n  <w:PunctuationKerning/>\r\n  <w:ValidateAgainstSchemas/>\r\n  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>\r\n  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>\r\n  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>\r\n  <w:DoNotPromoteQF/>\r\n  <w:LidThemeOther>EN-US</w:LidThemeOther>\r\n  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>\r\n  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>\r\n  <w:Compatibility>\r\n   <w:BreakWrappedTables/>\r\n   <w:SnapToGridInCell/>\r\n   <w:WrapTextWithPunct/>\r\n   <w:UseAsianBreakRules/>\r\n   <w:DontGrowAutofit/>\r\n   <w:SplitPgBreakAndParaMark/>\r\n   <w:EnableOpenTypeKerning/>\r\n   <w:DontFlipMirrorIndents/>\r\n   <w:OverrideTableStyleHps/>\r\n  </w:Compatibility>\r\n  <m:mathPr>\r\n   <m:mathFont m:val=\"Cambria Math\"/>\r\n   <m:brkBin m:val=\"before\"/>\r\n   <m:brkBinSub m:val=\"--\"/>\r\n   <m:smallFrac m:val=\"off\"/>\r\n   <m:dispDef/>\r\n   <m:lMargin m:val=\"0\"/>\r\n   <m:rMargin m:val=\"0\"/>\r\n   <m:defJc m:val=\"centerGroup\"/>\r\n   <m:wrapIndent m:val=\"1440\"/>\r\n   <m:intLim m:val=\"subSup\"/>\r\n   <m:naryLim m:val=\"undOvr\"/>\r\n  </m:mathPr></w:WordDocument>\r\n</xml><![endif]--><!-- [if gte mso 9]><xml>\r\n <w:LatentStyles DefLockedState=\"false\" DefUnhideWhenUsed=\"false\"\r\n  DefSemiHidden=\"false\" DefQFormat=\"false\" DefPriority=\"99\"\r\n  LatentStyleCount=\"375\">\r\n  <w:LsdException Locked=\"false\" Priority=\"0\" QFormat=\"true\" Name=\"Normal\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 7\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 8\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 9\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index 4\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index 5\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index 6\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index 7\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index 8\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index 9\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"toc 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"toc 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"toc 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"toc 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"toc 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"toc 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"toc 7\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"toc 8\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"toc 9\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Normal Indent\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"footnote text\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"annotation text\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"header\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"footer\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index heading\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"35\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"caption\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"table of figures\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"envelope address\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"envelope return\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"footnote reference\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"annotation reference\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"line number\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"page number\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"endnote reference\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"endnote text\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"table of authorities\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"macro\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"toa heading\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Bullet\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Number\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List 4\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List 5\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Bullet 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Bullet 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Bullet 4\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Bullet 5\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Number 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Number 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Number 4\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Number 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"10\" QFormat=\"true\" Name=\"Title\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Closing\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Signature\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"1\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"Default Paragraph Font\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Body Text\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Body Text Indent\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Continue\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Continue 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Continue 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Continue 4\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Continue 5\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Message Header\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"11\" QFormat=\"true\" Name=\"Subtitle\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Salutation\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Date\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Body Text First Indent\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Body Text First Indent 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Note Heading\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Body Text 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Body Text 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Body Text Indent 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Body Text Indent 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Block Text\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Hyperlink\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"FollowedHyperlink\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"22\" QFormat=\"true\" Name=\"Strong\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"20\" QFormat=\"true\" Name=\"Emphasis\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Document Map\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Plain Text\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"E-mail Signature\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Top of Form\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Bottom of Form\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Normal (Web)\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Acronym\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Address\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Cite\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Code\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Definition\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Keyboard\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Preformatted\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Sample\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Typewriter\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Variable\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Normal Table\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"annotation subject\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"No List\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Outline List 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Outline List 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Outline List 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Simple 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Simple 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Simple 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Classic 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Classic 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Classic 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Classic 4\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Colorful 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Colorful 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Colorful 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Columns 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Columns 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Columns 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Columns 4\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Columns 5\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Grid 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Grid 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Grid 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Grid 4\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Grid 5\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Grid 6\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Grid 7\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Grid 8\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table List 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table List 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table List 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table List 4\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table List 5\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table List 6\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table List 7\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table List 8\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table 3D effects 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table 3D effects 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table 3D effects 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Contemporary\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Elegant\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Professional\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Subtle 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Subtle 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Web 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Web 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Web 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Balloon Text\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"Table Grid\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Theme\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" Name=\"Placeholder Text\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"1\" QFormat=\"true\" Name=\"No Spacing\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"60\" Name=\"Light Shading\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"61\" Name=\"Light List\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"62\" Name=\"Light Grid\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"63\" Name=\"Medium Shading 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"64\" Name=\"Medium Shading 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"65\" Name=\"Medium List 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"66\" Name=\"Medium List 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"67\" Name=\"Medium Grid 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"68\" Name=\"Medium Grid 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"69\" Name=\"Medium Grid 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"70\" Name=\"Dark List\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"71\" Name=\"Colorful Shading\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"72\" Name=\"Colorful List\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"73\" Name=\"Colorful Grid\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"60\" Name=\"Light Shading Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"61\" Name=\"Light List Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"62\" Name=\"Light Grid Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"63\" Name=\"Medium Shading 1 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"64\" Name=\"Medium Shading 2 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"65\" Name=\"Medium List 1 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" Name=\"Revision\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"34\" QFormat=\"true\"\r\n   Name=\"List Paragraph\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"29\" QFormat=\"true\" Name=\"Quote\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"30\" QFormat=\"true\"\r\n   Name=\"Intense Quote\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"66\" Name=\"Medium List 2 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"67\" Name=\"Medium Grid 1 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"68\" Name=\"Medium Grid 2 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"69\" Name=\"Medium Grid 3 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"70\" Name=\"Dark List Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"71\" Name=\"Colorful Shading Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"72\" Name=\"Colorful List Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"73\" Name=\"Colorful Grid Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"60\" Name=\"Light Shading Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"61\" Name=\"Light List Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"62\" Name=\"Light Grid Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"63\" Name=\"Medium Shading 1 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"64\" Name=\"Medium Shading 2 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"65\" Name=\"Medium List 1 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"66\" Name=\"Medium List 2 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"67\" Name=\"Medium Grid 1 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"68\" Name=\"Medium Grid 2 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"69\" Name=\"Medium Grid 3 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"70\" Name=\"Dark List Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"71\" Name=\"Colorful Shading Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"72\" Name=\"Colorful List Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"73\" Name=\"Colorful Grid Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"60\" Name=\"Light Shading Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"61\" Name=\"Light List Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"62\" Name=\"Light Grid Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"63\" Name=\"Medium Shading 1 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"64\" Name=\"Medium Shading 2 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"65\" Name=\"Medium List 1 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"66\" Name=\"Medium List 2 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"67\" Name=\"Medium Grid 1 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"68\" Name=\"Medium Grid 2 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"69\" Name=\"Medium Grid 3 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"70\" Name=\"Dark List Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"71\" Name=\"Colorful Shading Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"72\" Name=\"Colorful List Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"73\" Name=\"Colorful Grid Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"60\" Name=\"Light Shading Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"61\" Name=\"Light List Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"62\" Name=\"Light Grid Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"63\" Name=\"Medium Shading 1 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"64\" Name=\"Medium Shading 2 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"65\" Name=\"Medium List 1 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"66\" Name=\"Medium List 2 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"67\" Name=\"Medium Grid 1 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"68\" Name=\"Medium Grid 2 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"69\" Name=\"Medium Grid 3 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"70\" Name=\"Dark List Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"71\" Name=\"Colorful Shading Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"72\" Name=\"Colorful List Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"73\" Name=\"Colorful Grid Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"60\" Name=\"Light Shading Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"61\" Name=\"Light List Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"62\" Name=\"Light Grid Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"63\" Name=\"Medium Shading 1 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"64\" Name=\"Medium Shading 2 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"65\" Name=\"Medium List 1 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"66\" Name=\"Medium List 2 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"67\" Name=\"Medium Grid 1 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"68\" Name=\"Medium Grid 2 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"69\" Name=\"Medium Grid 3 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"70\" Name=\"Dark List Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"71\" Name=\"Colorful Shading Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"72\" Name=\"Colorful List Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"73\" Name=\"Colorful Grid Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"60\" Name=\"Light Shading Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"61\" Name=\"Light List Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"62\" Name=\"Light Grid Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"63\" Name=\"Medium Shading 1 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"64\" Name=\"Medium Shading 2 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"65\" Name=\"Medium List 1 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"66\" Name=\"Medium List 2 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"67\" Name=\"Medium Grid 1 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"68\" Name=\"Medium Grid 2 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"69\" Name=\"Medium Grid 3 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"70\" Name=\"Dark List Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"71\" Name=\"Colorful Shading Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"72\" Name=\"Colorful List Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"73\" Name=\"Colorful Grid Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"19\" QFormat=\"true\"\r\n   Name=\"Subtle Emphasis\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"21\" QFormat=\"true\"\r\n   Name=\"Intense Emphasis\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"31\" QFormat=\"true\"\r\n   Name=\"Subtle Reference\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"32\" QFormat=\"true\"\r\n   Name=\"Intense Reference\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"33\" QFormat=\"true\" Name=\"Book Title\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"37\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"Bibliography\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"TOC Heading\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"41\" Name=\"Plain Table 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"42\" Name=\"Plain Table 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"43\" Name=\"Plain Table 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"44\" Name=\"Plain Table 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"45\" Name=\"Plain Table 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"40\" Name=\"Grid Table Light\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\" Name=\"Grid Table 1 Light\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"Grid Table 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"Grid Table 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"Grid Table 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"Grid Table 5 Dark\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\" Name=\"Grid Table 6 Colorful\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\" Name=\"Grid Table 7 Colorful\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"Grid Table 1 Light Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"Grid Table 2 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"Grid Table 3 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"Grid Table 4 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"Grid Table 5 Dark Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"Grid Table 6 Colorful Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"Grid Table 7 Colorful Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"Grid Table 1 Light Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"Grid Table 2 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"Grid Table 3 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"Grid Table 4 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"Grid Table 5 Dark Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"Grid Table 6 Colorful Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"Grid Table 7 Colorful Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"Grid Table 1 Light Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"Grid Table 2 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"Grid Table 3 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"Grid Table 4 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"Grid Table 5 Dark Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"Grid Table 6 Colorful Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"Grid Table 7 Colorful Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"Grid Table 1 Light Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"Grid Table 2 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"Grid Table 3 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"Grid Table 4 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"Grid Table 5 Dark Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"Grid Table 6 Colorful Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"Grid Table 7 Colorful Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"Grid Table 1 Light Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"Grid Table 2 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"Grid Table 3 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"Grid Table 4 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"Grid Table 5 Dark Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"Grid Table 6 Colorful Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"Grid Table 7 Colorful Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"Grid Table 1 Light Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"Grid Table 2 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"Grid Table 3 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"Grid Table 4 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"Grid Table 5 Dark Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"Grid Table 6 Colorful Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"Grid Table 7 Colorful Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\" Name=\"List Table 1 Light\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"List Table 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"List Table 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"List Table 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"List Table 5 Dark\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\" Name=\"List Table 6 Colorful\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\" Name=\"List Table 7 Colorful\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"List Table 1 Light Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"List Table 2 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"List Table 3 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"List Table 4 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"List Table 5 Dark Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"List Table 6 Colorful Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"List Table 7 Colorful Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"List Table 1 Light Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"List Table 2 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"List Table 3 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"List Table 4 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"List Table 5 Dark Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"List Table 6 Colorful Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"List Table 7 Colorful Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"List Table 1 Light Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"List Table 2 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"List Table 3 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"List Table 4 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"List Table 5 Dark Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"List Table 6 Colorful Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"List Table 7 Colorful Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"List Table 1 Light Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"List Table 2 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"List Table 3 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"List Table 4 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"List Table 5 Dark Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"List Table 6 Colorful Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"List Table 7 Colorful Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"List Table 1 Light Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"List Table 2 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"List Table 3 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"List Table 4 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"List Table 5 Dark Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"List Table 6 Colorful Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"List Table 7 Colorful Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"List Table 1 Light Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"List Table 2 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"List Table 3 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"List Table 4 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"List Table 5 Dark Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"List Table 6 Colorful Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"List Table 7 Colorful Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Mention\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Smart Hyperlink\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Hashtag\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Unresolved Mention\"/>\r\n </w:LatentStyles>\r\n</xml><![endif]--><!-- [if gte mso 10]>\r\n<style>\r\n /* Style Definitions */\r\n table.MsoNormalTable\r\n	{mso-style-name:\"Table Normal\";\r\n	mso-tstyle-rowband-size:0;\r\n	mso-tstyle-colband-size:0;\r\n	mso-style-noshow:yes;\r\n	mso-style-priority:99;\r\n	mso-style-parent:\"\";\r\n	mso-padding-alt:0in 5.4pt 0in 5.4pt;\r\n	mso-para-margin-top:0in;\r\n	mso-para-margin-right:0in;\r\n	mso-para-margin-bottom:8.0pt;\r\n	mso-para-margin-left:0in;\r\n	line-height:107%;\r\n	mso-pagination:widow-orphan;\r\n	font-size:11.0pt;\r\n	font-family:\"Calibri\",sans-serif;\r\n	mso-ascii-font-family:Calibri;\r\n	mso-ascii-theme-font:minor-latin;\r\n	mso-hansi-font-family:Calibri;\r\n	mso-hansi-theme-font:minor-latin;\r\n	mso-bidi-font-family:\"Times New Roman\";\r\n	mso-bidi-theme-font:minor-bidi;}\r\n</style>\r\n<![endif]-->', '10000', '5', '', '', 'tour', '<p><strong>Day 1:</strong> This is the first itenarary.We start the trip from here.At other sites near Pokhara, earlier Lakeside were, according to tradition, born, then achieved ultimate Enlightenment and finally relinquished their earthly forms.</p>\r\n<p><strong>Day 2:</strong> This is the second itenarary.We start the trip from here.At other sites near Pokhara, earlier Davis Fall were, according to tradition, born, then achieved ultimate Enlightenment and finally relinquished their earthly forms.</p>\r\n<p><strong>Day 3:</strong> This is the third itenarary.We start the trip from here.At other sites near Pokhara, earlier Lakeside were, according to tradition, born, then achieved ultimate Enlightenment and finally relinquished their earthly forms.</p>\r\n<p><strong>Day 4:</strong> This is the fourth itenarary.We start the trip from here.At other sites near Pokhara, earlier Buddhas were, according to tradition, born, then achieved ultimate Enlightenment and finally relinquished their earthly forms.</p>', 1, 'images/package/06-09-2018-153620286510-06-2018-1528654422t5.jpg', 'images/package/06-09-2018-1536202865pa5.jpg', NULL, 88, 'pokhareli', '', '', 17);
INSERT INTO `package` (`pid`, `vid`, `pname`, `paddress`, `plocation`, `pdescription`, `pcost`, `pduration`, `pstartdate`, `pexpiry`, `pcategory`, `pitinerary`, `pstatus`, `pimg1`, `pimg2`, `pimg3`, `id`, `username`, `pmap`, `pkeyword`, `pcounter`) VALUES
(35, 0, 'Lumbini Tour', 'Lumbini', 'Lumbini', '<p class=\"MsoNoSpacing\">Lumbini has a number of temples, including the <a title=\"Maya Devi Temple, Lumbini\" href=\"https://en.wikipedia.org/wiki/Maya_Devi_Temple,_Lumbini\">Mayadevi Temple</a> and several others which are still under repair. Many monuments, <a title=\"Buddhist monasticism\" href=\"https://en.wikipedia.org/wiki/Buddhist_monasticism\">monasteries</a> and a museum, the Lumbini International Research Institute, are also within the holy site. Also there is the Puskarini, or Holy Pond, where the Buddhas mother took the ritual dip prior to his birth and where he had his first bath. At other sites near Lumbini, earlier Buddhas were, according to tradition, born, then achieved ultimate Enlightenment and finally relinquished their earthly forms.</p>\r\n<p>&nbsp;</p>\r\n<!-- [if gte mso 9]><xml>\r\n <o:OfficeDocumentSettings>\r\n  <o:AllowPNG/>\r\n </o:OfficeDocumentSettings>\r\n</xml><![endif]--><!-- [if gte mso 9]><xml>\r\n <w:WordDocument>\r\n  <w:View>Normal</w:View>\r\n  <w:Zoom>0</w:Zoom>\r\n  <w:TrackMoves/>\r\n  <w:TrackFormatting/>\r\n  <w:PunctuationKerning/>\r\n  <w:ValidateAgainstSchemas/>\r\n  <w:SaveIfXMLInvalid>false</w:SaveIfXMLInvalid>\r\n  <w:IgnoreMixedContent>false</w:IgnoreMixedContent>\r\n  <w:AlwaysShowPlaceholderText>false</w:AlwaysShowPlaceholderText>\r\n  <w:DoNotPromoteQF/>\r\n  <w:LidThemeOther>EN-US</w:LidThemeOther>\r\n  <w:LidThemeAsian>X-NONE</w:LidThemeAsian>\r\n  <w:LidThemeComplexScript>X-NONE</w:LidThemeComplexScript>\r\n  <w:Compatibility>\r\n   <w:BreakWrappedTables/>\r\n   <w:SnapToGridInCell/>\r\n   <w:WrapTextWithPunct/>\r\n   <w:UseAsianBreakRules/>\r\n   <w:DontGrowAutofit/>\r\n   <w:SplitPgBreakAndParaMark/>\r\n   <w:EnableOpenTypeKerning/>\r\n   <w:DontFlipMirrorIndents/>\r\n   <w:OverrideTableStyleHps/>\r\n  </w:Compatibility>\r\n  <m:mathPr>\r\n   <m:mathFont m:val=\"Cambria Math\"/>\r\n   <m:brkBin m:val=\"before\"/>\r\n   <m:brkBinSub m:val=\"--\"/>\r\n   <m:smallFrac m:val=\"off\"/>\r\n   <m:dispDef/>\r\n   <m:lMargin m:val=\"0\"/>\r\n   <m:rMargin m:val=\"0\"/>\r\n   <m:defJc m:val=\"centerGroup\"/>\r\n   <m:wrapIndent m:val=\"1440\"/>\r\n   <m:intLim m:val=\"subSup\"/>\r\n   <m:naryLim m:val=\"undOvr\"/>\r\n  </m:mathPr></w:WordDocument>\r\n</xml><![endif]--><!-- [if gte mso 9]><xml>\r\n <w:LatentStyles DefLockedState=\"false\" DefUnhideWhenUsed=\"false\"\r\n  DefSemiHidden=\"false\" DefQFormat=\"false\" DefPriority=\"99\"\r\n  LatentStyleCount=\"375\">\r\n  <w:LsdException Locked=\"false\" Priority=\"0\" QFormat=\"true\" Name=\"Normal\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"9\" QFormat=\"true\" Name=\"heading 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 7\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 8\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"9\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"heading 9\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index 4\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index 5\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index 6\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index 7\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index 8\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index 9\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"toc 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"toc 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"toc 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"toc 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"toc 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"toc 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"toc 7\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"toc 8\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"toc 9\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Normal Indent\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"footnote text\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"annotation text\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"header\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"footer\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"index heading\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"35\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"caption\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"table of figures\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"envelope address\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"envelope return\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"footnote reference\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"annotation reference\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"line number\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"page number\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"endnote reference\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"endnote text\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"table of authorities\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"macro\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"toa heading\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Bullet\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Number\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List 4\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List 5\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Bullet 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Bullet 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Bullet 4\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Bullet 5\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Number 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Number 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Number 4\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Number 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"10\" QFormat=\"true\" Name=\"Title\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Closing\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Signature\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"1\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"Default Paragraph Font\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Body Text\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Body Text Indent\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Continue\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Continue 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Continue 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Continue 4\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"List Continue 5\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Message Header\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"11\" QFormat=\"true\" Name=\"Subtitle\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Salutation\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Date\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Body Text First Indent\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Body Text First Indent 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Note Heading\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Body Text 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Body Text 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Body Text Indent 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Body Text Indent 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Block Text\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Hyperlink\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"FollowedHyperlink\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"22\" QFormat=\"true\" Name=\"Strong\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"20\" QFormat=\"true\" Name=\"Emphasis\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Document Map\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Plain Text\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"E-mail Signature\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Top of Form\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Bottom of Form\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Normal (Web)\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Acronym\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Address\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Cite\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Code\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Definition\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Keyboard\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Preformatted\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Sample\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Typewriter\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"HTML Variable\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Normal Table\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"annotation subject\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"No List\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Outline List 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Outline List 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Outline List 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Simple 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Simple 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Simple 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Classic 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Classic 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Classic 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Classic 4\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Colorful 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Colorful 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Colorful 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Columns 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Columns 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Columns 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Columns 4\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Columns 5\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Grid 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Grid 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Grid 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Grid 4\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Grid 5\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Grid 6\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Grid 7\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Grid 8\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table List 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table List 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table List 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table List 4\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table List 5\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table List 6\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table List 7\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table List 8\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table 3D effects 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table 3D effects 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table 3D effects 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Contemporary\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Elegant\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Professional\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Subtle 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Subtle 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Web 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Web 2\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Web 3\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Balloon Text\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" Name=\"Table Grid\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Table Theme\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" Name=\"Placeholder Text\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"1\" QFormat=\"true\" Name=\"No Spacing\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"60\" Name=\"Light Shading\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"61\" Name=\"Light List\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"62\" Name=\"Light Grid\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"63\" Name=\"Medium Shading 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"64\" Name=\"Medium Shading 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"65\" Name=\"Medium List 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"66\" Name=\"Medium List 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"67\" Name=\"Medium Grid 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"68\" Name=\"Medium Grid 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"69\" Name=\"Medium Grid 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"70\" Name=\"Dark List\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"71\" Name=\"Colorful Shading\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"72\" Name=\"Colorful List\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"73\" Name=\"Colorful Grid\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"60\" Name=\"Light Shading Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"61\" Name=\"Light List Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"62\" Name=\"Light Grid Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"63\" Name=\"Medium Shading 1 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"64\" Name=\"Medium Shading 2 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"65\" Name=\"Medium List 1 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" Name=\"Revision\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"34\" QFormat=\"true\"\r\n   Name=\"List Paragraph\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"29\" QFormat=\"true\" Name=\"Quote\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"30\" QFormat=\"true\"\r\n   Name=\"Intense Quote\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"66\" Name=\"Medium List 2 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"67\" Name=\"Medium Grid 1 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"68\" Name=\"Medium Grid 2 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"69\" Name=\"Medium Grid 3 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"70\" Name=\"Dark List Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"71\" Name=\"Colorful Shading Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"72\" Name=\"Colorful List Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"73\" Name=\"Colorful Grid Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"60\" Name=\"Light Shading Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"61\" Name=\"Light List Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"62\" Name=\"Light Grid Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"63\" Name=\"Medium Shading 1 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"64\" Name=\"Medium Shading 2 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"65\" Name=\"Medium List 1 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"66\" Name=\"Medium List 2 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"67\" Name=\"Medium Grid 1 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"68\" Name=\"Medium Grid 2 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"69\" Name=\"Medium Grid 3 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"70\" Name=\"Dark List Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"71\" Name=\"Colorful Shading Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"72\" Name=\"Colorful List Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"73\" Name=\"Colorful Grid Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"60\" Name=\"Light Shading Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"61\" Name=\"Light List Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"62\" Name=\"Light Grid Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"63\" Name=\"Medium Shading 1 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"64\" Name=\"Medium Shading 2 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"65\" Name=\"Medium List 1 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"66\" Name=\"Medium List 2 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"67\" Name=\"Medium Grid 1 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"68\" Name=\"Medium Grid 2 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"69\" Name=\"Medium Grid 3 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"70\" Name=\"Dark List Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"71\" Name=\"Colorful Shading Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"72\" Name=\"Colorful List Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"73\" Name=\"Colorful Grid Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"60\" Name=\"Light Shading Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"61\" Name=\"Light List Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"62\" Name=\"Light Grid Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"63\" Name=\"Medium Shading 1 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"64\" Name=\"Medium Shading 2 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"65\" Name=\"Medium List 1 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"66\" Name=\"Medium List 2 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"67\" Name=\"Medium Grid 1 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"68\" Name=\"Medium Grid 2 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"69\" Name=\"Medium Grid 3 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"70\" Name=\"Dark List Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"71\" Name=\"Colorful Shading Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"72\" Name=\"Colorful List Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"73\" Name=\"Colorful Grid Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"60\" Name=\"Light Shading Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"61\" Name=\"Light List Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"62\" Name=\"Light Grid Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"63\" Name=\"Medium Shading 1 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"64\" Name=\"Medium Shading 2 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"65\" Name=\"Medium List 1 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"66\" Name=\"Medium List 2 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"67\" Name=\"Medium Grid 1 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"68\" Name=\"Medium Grid 2 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"69\" Name=\"Medium Grid 3 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"70\" Name=\"Dark List Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"71\" Name=\"Colorful Shading Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"72\" Name=\"Colorful List Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"73\" Name=\"Colorful Grid Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"60\" Name=\"Light Shading Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"61\" Name=\"Light List Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"62\" Name=\"Light Grid Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"63\" Name=\"Medium Shading 1 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"64\" Name=\"Medium Shading 2 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"65\" Name=\"Medium List 1 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"66\" Name=\"Medium List 2 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"67\" Name=\"Medium Grid 1 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"68\" Name=\"Medium Grid 2 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"69\" Name=\"Medium Grid 3 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"70\" Name=\"Dark List Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"71\" Name=\"Colorful Shading Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"72\" Name=\"Colorful List Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"73\" Name=\"Colorful Grid Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"19\" QFormat=\"true\"\r\n   Name=\"Subtle Emphasis\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"21\" QFormat=\"true\"\r\n   Name=\"Intense Emphasis\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"31\" QFormat=\"true\"\r\n   Name=\"Subtle Reference\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"32\" QFormat=\"true\"\r\n   Name=\"Intense Reference\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"33\" QFormat=\"true\" Name=\"Book Title\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"37\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" Name=\"Bibliography\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"39\" SemiHidden=\"true\"\r\n   UnhideWhenUsed=\"true\" QFormat=\"true\" Name=\"TOC Heading\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"41\" Name=\"Plain Table 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"42\" Name=\"Plain Table 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"43\" Name=\"Plain Table 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"44\" Name=\"Plain Table 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"45\" Name=\"Plain Table 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"40\" Name=\"Grid Table Light\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\" Name=\"Grid Table 1 Light\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"Grid Table 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"Grid Table 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"Grid Table 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"Grid Table 5 Dark\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\" Name=\"Grid Table 6 Colorful\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\" Name=\"Grid Table 7 Colorful\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"Grid Table 1 Light Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"Grid Table 2 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"Grid Table 3 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"Grid Table 4 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"Grid Table 5 Dark Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"Grid Table 6 Colorful Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"Grid Table 7 Colorful Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"Grid Table 1 Light Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"Grid Table 2 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"Grid Table 3 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"Grid Table 4 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"Grid Table 5 Dark Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"Grid Table 6 Colorful Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"Grid Table 7 Colorful Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"Grid Table 1 Light Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"Grid Table 2 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"Grid Table 3 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"Grid Table 4 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"Grid Table 5 Dark Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"Grid Table 6 Colorful Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"Grid Table 7 Colorful Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"Grid Table 1 Light Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"Grid Table 2 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"Grid Table 3 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"Grid Table 4 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"Grid Table 5 Dark Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"Grid Table 6 Colorful Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"Grid Table 7 Colorful Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"Grid Table 1 Light Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"Grid Table 2 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"Grid Table 3 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"Grid Table 4 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"Grid Table 5 Dark Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"Grid Table 6 Colorful Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"Grid Table 7 Colorful Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"Grid Table 1 Light Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"Grid Table 2 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"Grid Table 3 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"Grid Table 4 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"Grid Table 5 Dark Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"Grid Table 6 Colorful Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"Grid Table 7 Colorful Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\" Name=\"List Table 1 Light\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"List Table 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"List Table 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"List Table 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"List Table 5 Dark\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\" Name=\"List Table 6 Colorful\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\" Name=\"List Table 7 Colorful\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"List Table 1 Light Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"List Table 2 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"List Table 3 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"List Table 4 Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"List Table 5 Dark Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"List Table 6 Colorful Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"List Table 7 Colorful Accent 1\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"List Table 1 Light Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"List Table 2 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"List Table 3 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"List Table 4 Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"List Table 5 Dark Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"List Table 6 Colorful Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"List Table 7 Colorful Accent 2\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"List Table 1 Light Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"List Table 2 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"List Table 3 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"List Table 4 Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"List Table 5 Dark Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"List Table 6 Colorful Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"List Table 7 Colorful Accent 3\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"List Table 1 Light Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"List Table 2 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"List Table 3 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"List Table 4 Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"List Table 5 Dark Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"List Table 6 Colorful Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"List Table 7 Colorful Accent 4\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"List Table 1 Light Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"List Table 2 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"List Table 3 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"List Table 4 Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"List Table 5 Dark Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"List Table 6 Colorful Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"List Table 7 Colorful Accent 5\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"46\"\r\n   Name=\"List Table 1 Light Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"47\" Name=\"List Table 2 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"48\" Name=\"List Table 3 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"49\" Name=\"List Table 4 Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"50\" Name=\"List Table 5 Dark Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"51\"\r\n   Name=\"List Table 6 Colorful Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" Priority=\"52\"\r\n   Name=\"List Table 7 Colorful Accent 6\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Mention\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Smart Hyperlink\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Hashtag\"/>\r\n  <w:LsdException Locked=\"false\" SemiHidden=\"true\" UnhideWhenUsed=\"true\"\r\n   Name=\"Unresolved Mention\"/>\r\n </w:LatentStyles>\r\n</xml><![endif]--><!-- [if gte mso 10]>\r\n<style>\r\n /* Style Definitions */\r\n table.MsoNormalTable\r\n	{mso-style-name:\"Table Normal\";\r\n	mso-tstyle-rowband-size:0;\r\n	mso-tstyle-colband-size:0;\r\n	mso-style-noshow:yes;\r\n	mso-style-priority:99;\r\n	mso-style-parent:\"\";\r\n	mso-padding-alt:0in 5.4pt 0in 5.4pt;\r\n	mso-para-margin-top:0in;\r\n	mso-para-margin-right:0in;\r\n	mso-para-margin-bottom:8.0pt;\r\n	mso-para-margin-left:0in;\r\n	line-height:107%;\r\n	mso-pagination:widow-orphan;\r\n	font-size:11.0pt;\r\n	font-family:\"Calibri\",sans-serif;\r\n	mso-ascii-font-family:Calibri;\r\n	mso-ascii-theme-font:minor-latin;\r\n	mso-hansi-font-family:Calibri;\r\n	mso-hansi-theme-font:minor-latin;\r\n	mso-bidi-font-family:\"Times New Roman\";\r\n	mso-bidi-theme-font:minor-bidi;}\r\n</style>\r\n<![endif]-->', '10000', '4', '', '', 'tour', '<p><strong>Day 1:</strong> This is the first itenarary.We start the trip from here.At other sites near Lumbini, earlier Buddhas were, according to tradition, born, then achieved ultimate Enlightenment and finally relinquished their earthly forms.</p>\r\n<p><strong>Day 2:</strong> This is the second itenarary.We start the trip from here.At other sites near Lumbini, earlier Buddhas were, according to tradition, born, then achieved ultimate Enlightenment and finally relinquished their earthly forms.</p>\r\n<p><strong>Day 3:</strong> This is the third itenarary.We start the trip from here.At other sites near Lumbini, earlier Buddhas were, according to tradition, born, then achieved ultimate Enlightenment and finally relinquished their earthly forms.</p>\r\n<p><strong>Day 4:</strong> This is the fourth itenarary.We start the trip from here.At other sites near Lumbini, earlier Buddhas were, according to tradition, born, then achieved ultimate Enlightenment and finally relinquished their earthly forms.</p>', 1, 'images/package/06-09-2018-1536203846p3.jpg', 'images/package/06-09-2018-1536203846lumbini1.jpg', NULL, 85, 'nepaltours', '', '', 11),
(36, 0, 'Rara National Park', 'Mugu', 'Others', '<p>Rara Lake, being surrounded by Rara National Park, has unique floral and faunal importance with rare and vulnerable species. The park was established in 1976 to preserve the beauty of the lake and protect it from sedimentation and adverse human activities. The Park flora consists of 1074 species, of which 16 are endemic to Nepal; the fauna includes 51 species of mammals</p>', '18000', '7', '', '', 'trekking', '<p>&nbsp;</p>\r\n<p>Day 01: Drive Kathmandu - Surkhet. Overnight at Surkhet.<br /><br /></p>\r\n<p>Day 02: Drive Surkhet - Kalikot. Overnight at Kalikot.<br /><br /></p>\r\n<p>Day 03: Drive Kalikot - Rara. Overnight at Rara.<br /><br /></p>\r\n<p>Day 04: Rara Lake Excursion. Overnight at Rara.<br /><br /></p>\r\n<p>Day 05: Drive Rara - Kalikot. Overnight at Kalikot.<br /><br /></p>\r\n<p>Day 06: Drive Kalikot - Surkhet. Overnight at Surkhet.</p>\r\n<p>&nbsp;</p>\r\n<p>Day 07: Drive Surkhet - Kathmandu and our Rara Lake Tour ends.</p>', 1, 'images/package/06-09-2018-153620584125-06-2018-1529941874rara.jpg', 'images/package/06-09-2018-153620584125-06-2018-1529941874rara2.png', NULL, 85, 'nepaltours', '', '', 6),
(37, 0, 'Langtang Trek', 'Langtang', 'Others', '<p>The <a title=\"Langtang National Park\" href=\"https://en.wikipedia.org/wiki/Langtang_National_Park\">Langtang National Park</a> is located in the area. About 4,500 people live inside the park, and many more depend on it for timber and firewood. The majority of the residents are <a class=\"mw-redirect\" title=\"Tamang\" href=\"https://en.wikipedia.org/wiki/Tamang\">Tamang</a>. The park contains a wide variety of climatic zones, from subtropical to alpine. Approximately 25% of the park is forested. Trees include the deciduous <a title=\"Oak\" href=\"https://en.wikipedia.org/wiki/Oak\">oak</a> and <a title=\"Maple\" href=\"https://en.wikipedia.org/wiki/Maple\">maple</a>, and evergreens like <a title=\"Pine\" href=\"https://en.wikipedia.org/wiki/Pine\">pine</a>, and various types of <a title=\"Rhododendron\" href=\"https://en.wikipedia.org/wiki/Rhododendron\">rhododendron</a>. Animal life includes <a class=\"mw-redirect\" title=\"Asiatic black bear\" href=\"https://en.wikipedia.org/wiki/Asiatic_black_bear\">Himalayan black bear</a>, the goat-like <a title=\"Himalayan tahr\" href=\"https://en.wikipedia.org/wiki/Himalayan_tahr\">Himalayan tahr</a>, <a title=\"Rhesus macaque\" href=\"https://en.wikipedia.org/wiki/Rhesus_macaque\">rhesus monkeys</a> and <a title=\"Red panda\" href=\"https://en.wikipedia.org/wiki/Red_panda\">red pandas</a>. There are also stories of <a title=\"Yeti\" href=\"https://en.wikipedia.org/wiki/Yeti\">Yeti</a> sightings.</p>', '10000', '5', '', '', 'trekking', '<div class=\"productItirow\">\r\n<div><span class=\"itiDay\">Day 01:</span>&nbsp;Arrival in Kathmandu (1,350m/4,428ft)</div>\r\n</div>\r\n<div class=\"productItirow\">\r\n<div><span class=\"itiDay\">Day 02:</span>&nbsp;Kathmandu: sightseeing and trek preparation</div>\r\n</div>\r\n<div class=\"productItirow\">\r\n<div><span class=\"itiDay\">Day 03:</span>&nbsp;Drive from Kathmandu to Syabrubesi (1,550m/5,100ft): 7-8 hours</div>\r\n</div>\r\n<div class=\"productItirow\">\r\n<div><span class=\"itiDay\">Day 04:</span>&nbsp;Trek from Syabrubesi to Lama Hotel (2,380m/7,830ft): 6 hours</div>\r\n</div>\r\n<div class=\"productItirow\">\r\n<div><span class=\"itiDay\">Day 05:</span>&nbsp;Trek to Mundu (3543m/11,621ft) via Langtang village: 6-7 hours</div>\r\n</div>\r\n<div class=\"productItirow\">\r\n<div><span class=\"itiDay\">Day 06:</span>&nbsp; Mundu to Kyangjin Gompa (3,870m/12,697ft): 4-5 hours</div>\r\n</div>\r\n<div class=\"productItirow\">\r\n<div><span class=\"itiDay\">Day 07:</span>&nbsp;Acclimatization- Explore Tserko Ri (5000m/16,404ft) 7-8 hours</div>\r\n</div>', 1, 'images/package/06-09-2018-153620617226-05-2018-1527301216p10.jpg', 'images/package/06-09-2018-153620617226-05-2018-1527309970kalinchowk1.jpg', NULL, 71, 'namastetravel', '', '', 2),
(38, 0, 'Janakpur Darshan', 'Janakpur', 'Others', '<p>This city is also known as <strong>Janakpurdham</strong>, which was founded in the early 18th century. According to oral tradition, an earlier city existed in the area, also known as Janakpurdham, which was the capital of the <a class=\"mw-redirect\" title=\"Videha\" href=\"https://en.wikipedia.org/wiki/Videha\">Videha</a> dynasty that ruled <a title=\"Mithila (region)\" href=\"https://en.wikipedia.org/wiki/Mithila_(region)\">Mithila region</a> in the ancient times.</p>', '4000', '3', '', '', 'religious', '<p>Day 01: Arrive Kathmandu and transfer to hotel.<br />Day 02: Fly/drive Kathmandu - Janakpur, Janakpur Sightseeing.<br />Day 03: Fly/drive Janakpur - Kathmandu.<br />Day 04: Departure.</p>', 1, 'images/package/06-09-2018-153620634225-06-2018-1529929640janakpur.jpg', 'images/package/06-09-2018-153620634225-06-2018-1529929640janakpur2.jpg', NULL, 71, 'namastetravel', '', '', 4),
(39, 0, 'Chandragiri Hike', 'Thankot', 'Kathmandu', '<p><strong>Chandragiri Hill</strong> which is situated&nbsp;Situated at an altitude of 2540m height is the picturesque hill station of Kathmandu Valley. 7 km away from the Kathmandu Valley, you shall find restaurants, cable car, resort, branded shops, and multipurpose hall at Chandragiri Hill. The cable car runs from 8:00 AM to 5:00 PM during the week and 7:00 AM to 6:00 PM on public holidays and weekends. It shall take about 10-12 minutes to cover the 2.5 km of distance.</p>', '1500', '1', '', '', 'religious', '<div>Situated at 7 km away from the Kathmandu Valley, you shall find restaurants, cable car, resort, branded shops, and multipurpose hall at Chandragiri Hill. The cable car runs from 8:00 AM to 5:00 PM during the week and 7:00 AM to 6:00 PM on public holidays and weekends. It shall take about 10-12 minutes to cover the 2.5 km of distance.</div>\r\n<p>The great King Prithvi Narayan Shah of Nepal who is credited with unifying smaller states into greater Nepal has the history with this hill. Once returning from this maternal house in Makwanpur he rested in the hill. The beautiful scenery of then Malla ruled valley caught his eyes. From there on rest is history and he got victory over Kathmandu making Nepal the larger country.</p>', 1, 'images/package/06-09-2018-153620699125-06-2018-1529941450chandragiri.jpg', 'images/package/06-09-2018-153620699125-06-2018-1529941450chanda2.jpg', NULL, 71, 'namastetravel', '', '', 2);
INSERT INTO `package` (`pid`, `vid`, `pname`, `paddress`, `plocation`, `pdescription`, `pcost`, `pduration`, `pstartdate`, `pexpiry`, `pcategory`, `pitinerary`, `pstatus`, `pimg1`, `pimg2`, `pimg3`, `id`, `username`, `pmap`, `pkeyword`, `pcounter`) VALUES
(40, 0, 'Manakamana Darshan', 'Gorkha', 'Others', '<p>The Manakamana temple lies 12&nbsp;km south of the town Gorkha.<sup id=\"cite_ref-2\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Manakamana#cite_note-2\">[2]</a></sup> The temple is located on a distinguished ridge 1,302 metres (4,272&nbsp;ft) above sea level and overlooks the river valleys of <a class=\"mw-redirect\" title=\"Trisuli River\" href=\"https://en.wikipedia.org/wiki/Trisuli_River\">Trisuli</a> in the south and <a class=\"mw-redirect\" title=\"Marsyangdi\" href=\"https://en.wikipedia.org/wiki/Marsyangdi\">Marsyangdi</a> in the west. The Manaslu- Himachali and Annapurna ranges can be viewed to the north of the temple. The temple is approximately a 140 kilometres (87&nbsp;mi) from Kathmandu and can also be reached via bus east from Pokhara in around three to four hours.<a href=\"https://en.wikipedia.org/wiki/Manakamana#cite_note-Cable_car_ride-3\">[</a></p>', '1500', '1', '', '', 'religious', '<p>he legend of Manakamana Goddess dates back to the reign of the Gorkha king Ram Shah during the 17th century. It is said that his queen possessed divine powers, which only her devotee Lakhan Thapa knew about. One day, the king witnessed his queen in Goddess incarnation, and Lakhan Thapa in the form of a lion.<sup id=\"cite_ref-4\" class=\"reference\"><a href=\"https://en.wikipedia.org/wiki/Manakamana#cite_note-4\">[4]</a></sup> Upon mentioning the revelation to his queen, a mysterious death befell the king. As per the custom of that time, the queen committed <a title=\"Sati (practice)\" href=\"https://en.wikipedia.org/wiki/Sati_(practice)\">Sati</a> (ritual immolation) on her husband&rsquo;s funeral pyre. Before her sati the queen had assured Lakhan Thapa that she would reappear in the near future. Six months later, a farmer while ploughing his fields cleaved a stone. From the stone he saw a stream of blood and milk flow. When Lakhan heard an account of this event, he immediately started performing Hindu tantric rituals at the site where the stone had been discovered thus ceasing the flow of blood and milk. The site became the foundation of the present shrine. According to tradition, the priest at the temple must be a descendent of Lakhan Thapa.</p>', 1, 'images/package/06-09-2018-1536207601car-for-manakamana.jpg', 'images/package/06-09-2018-1536207722Manakamana Temple.jpg', NULL, 71, 'namastetravel', '', '', 2),
(41, 0, 'Ghandruk ', 'Ghandruk', 'Others', '<p>Ghandruk is a popular place for treks in the <a class=\"mw-redirect\" title=\"Annapurna\" href=\"https://en.wikipedia.org/wiki/Annapurna\">Annapurna</a> range of Nepal (i.e. specially for Annapurna Base camp trek), with easy trails and various accommodation possibilities. From Ghandruk there are views to the mountains of <a class=\"mw-redirect\" title=\"Annapurna\" href=\"https://en.wikipedia.org/wiki/Annapurna\">Annapurna</a> including <a title=\"Machapuchare\" href=\"https://en.wikipedia.org/wiki/Machapuchare\">Machapuchare</a> and Himchuli. It is the route to Annapurna Base Camp and Poon hill. <a class=\"mw-redirect\" title=\"Gurungs\" href=\"https://en.wikipedia.org/wiki/Gurungs\">Gurungs</a> people are abundantly in this village. People are very friendly. We can enjoy a pleasent night at Ghandruk. Transportation facilities are seen upto <a class=\"new\" title=\"Kimche (page does not exist)\" href=\"https://en.wikipedia.org/w/index.php?title=Kimche&amp;action=edit&amp;redlink=1\">Kimche</a> and it is one of the beautiful village.</p>', '8000', '4', '', '', 'hiking', '<p>Day 1: Drive to Pokhara O/N stay at Hotel in Pokhara(B+L+D)</p>\r\n<p>Day 2: Drive to Nayapul Trek to Ghandruk and O/N stay at Tea House (B+L+D)</p>\r\n<p>Day 3: Trek down to Nayapul Transfer to Pokhara O/N stay at Hotel in Pokhara (B+L+D)</p>\r\n<p>Day 4: Drive to Kathmandu and Rafting in Trishuli River (3-4 Hrs) and same day Kathmandu arrival. (B+L)</p>', 1, 'images/package/06-09-2018-153620800230-08-2018-1535610348packages.jpg', 'images/package/06-09-2018-1536207968pa2.jpg', NULL, 85, 'nepaltours', '', '', 0),
(42, 0, 'Shivapuri National Park', 'Budhanilkantha', 'Kathmandu', '<p>Shivapuri Heights Cottages provide an ideal escape from the hustle and bustle of the City whilst having the advantage of being only 30 minutes drive plus a short walk away from the city centre. Situated in the Himalayan foothills at an altitude of just under 6000 feet and surrounded by trees this Kathmandu homestay allows for tranquil rejuvenation in a quiet rural setting without traffic jams and urban pollution. Enjoy healthy home cooked meals made with fresh locally grown ingredients. Stretch your legs whilst hiking to nearby Monasteries.</p>', '2500', '2', '', '', 'hiking', '<p>We pride ourselves on providing delicious meals at Shivapuri Heights Cottage and our Chef JB and our Manager Ramita will provide you with the best home-cooked meals in Nepal.</p>\r\n<p>We don&rsquo;t have a menu available at the Cottage and meals are left to the the discretion of our chef, depending on what produce is available on the day. &nbsp;Meals are generally taken &ldquo;family-style&rdquo;.</p>', 1, 'images/package/06-09-2018-153620824525-06-2018-1529940371shiva2.jpg', 'images/package/06-09-2018-153620824525-06-2018-1529940371shivapuri.jpg', NULL, 85, 'nepaltours', '', '', 1);

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
(54, 73, '', 101, 'Delux Room', '', 5, 0, 2000, 'images/hotels/room/06-09-2018-1536203577images.jpg', 'images/hotels/room/06-09-2018-1536203539city.jpg', NULL, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 1, 73, 'hotelcityinn', 0),
(55, 73, '', 202, 'Family Delux', '', 4, 0, 3000, 'images/hotels/room/06-09-2018-1536203710cityinnfamilydelux.jpg', 'images/hotels/room/06-09-2018-1536203710city1.jpg', NULL, 1, 1, 1, 1, 1, 1, 4, 1, 1, 1, 1, 73, 'hotelcityinn', 0),
(56, 75, '', 1001, 'Barahi Delux', '', 3, 0, 1700, 'images/hotels/room/06-09-2018-1536204236barahidelux.jpg', 'images/hotels/room/06-09-2018-1536204236city.jpg', NULL, 0, 1, 1, 0, 1, 1, 3, 0, 0, 0, 1, 75, 'hotelbarahi', 0),
(57, 75, '', 1002, 'Barahi Suite', '', 3, 0, 3000, 'images/hotels/room/06-09-2018-1536204351barahi1.jpg', 'images/hotels/room/06-09-2018-1536204351barahi2.jpg', NULL, 1, 1, 1, 1, 1, 1, 2, 0, 1, 0, 1, 75, 'hotelbarahi', 0),
(58, 75, '', 1003, 'Barahi Suite Wing', '', 4, 0, 4000, 'images/hotels/room/06-09-2018-1536204437b1.jpg', 'images/hotels/room/06-09-2018-1536204437b2.jpg', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 75, 'hotelbarahi', 0),
(60, 76, '', 201, 'Delux Suite', '', 4, 0, 1900, 'images/hotels/room/06-09-2018-1536204789d1.jpg', 'images/hotels/room/06-09-2018-1536204757dwarikadeluxesuite.jpg', NULL, 1, 1, 1, 1, 1, 1, 2, 1, 0, 0, 1, 76, 'hoteldwarika', 0),
(62, 76, '', 204, 'Executive Suite', '', 3, 0, 2500, 'images/hotels/room/06-09-2018-1536204952d2.jpg', 'images/hotels/room/06-09-2018-1536204952dwarikaexecutivesuite.jpg', NULL, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 1, 76, 'hoteldwarika', 0),
(63, 76, '', 203, 'Junior Suite', '', 4, 0, 2600, 'images/hotels/room/06-09-2018-1536205038dwarikajuniorsuite.jpg', 'images/hotels/room/06-09-2018-1536205038d3.jpg', NULL, 1, 1, 1, 0, 1, 1, 1, 0, 0, 0, 1, 76, 'hoteldwarika', 0),
(64, 77, '', 404, 'Single Room', '', 5, 0, 1200, 'images/hotels/room/06-09-2018-1536205220landmarksingle.jpg', 'images/hotels/room/06-09-2018-1536205220d3.jpg', NULL, 0, 1, 0, 0, 1, 1, 1, 0, 0, 0, 1, 77, 'hotellandmark', 0),
(65, 77, '', 402, 'Double', '', 4, 0, 1800, 'images/hotels/room/06-09-2018-1536205311landmarkdouble.jpg', 'images/hotels/room/06-09-2018-1536205311barahidelux.jpg', NULL, 0, 1, 1, 0, 1, 1, 2, 0, 0, 0, 1, 77, 'hotellandmark', 0),
(66, 78, '', 501, 'Single Room', '', 4, 0, 1700, 'images/hotels/room/06-09-2018-1536205532e1.jpg', 'images/hotels/room/06-09-2018-1536205532s2.jpg', NULL, 0, 1, 1, 0, 1, 1, 1, 0, 0, 0, 1, 78, 'hoteleverest', 0),
(67, 78, '', 503, 'Twin Room', '', 4, 0, 1900, 'images/hotels/room/06-09-2018-1536205643MIRABELSTANDARD.jpg', 'images/hotels/room/06-09-2018-1536205611LAKEVIEWSUPERDELUX.jpg', NULL, 0, 1, 1, 0, 1, 1, 2, 0, 0, 0, 1, 78, 'hoteleverest', 0),
(69, 79, '', 601, 'Mirabel Delux', '', 4, 0, 2200, 'images/hotels/room/06-09-2018-1536205738MIRABELDELUX.jpg', 'images/hotels/room/06-09-2018-1536205738barahidelux.jpg', NULL, 1, 1, 1, 1, 1, 1, 1, 0, 0, 0, 1, 79, 'hotelmirabel', 0),
(70, 79, '', 602, 'Mirabel Standard', '', 4, 0, 2900, 'images/hotels/room/06-09-2018-1536205808MIRABELSTANDARD.jpg', 'images/hotels/room/06-09-2018-1536205808cityinnroom1.jpg', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 0, 0, 1, 79, 'hotelmirabel', 0),
(71, 80, '', 701, 'Single', '', 4, 0, 2100, 'images/hotels/room/06-09-2018-1536205896cityinnroom1.jpg', 'images/hotels/room/06-09-2018-1536205896barahisuitewingdelux.jpg', NULL, 0, 1, 1, 1, 1, 1, 1, 0, 0, 0, 1, 80, 'hoteldhulikhel', 0),
(72, 80, '', 708, 'Double', '', 3, 0, 2200, 'images/hotels/room/06-09-2018-1536205942barahidelux.jpg', 'images/hotels/room/06-09-2018-1536205942LAKEVIEWSUPERDELUX.jpg', NULL, 0, 1, 1, 1, 1, 1, 2, 0, 0, 0, 1, 80, 'hoteldhulikhel', 0),
(73, 74, '', 901, 'Single', '', 4, 0, 1800, 'images/hotels/room/06-09-2018-1536206215l1.jpg', 'images/hotels/room/06-09-2018-1536206215l2.jpg', NULL, 0, 1, 1, 1, 1, 1, 1, 0, 0, 0, 1, 74, 'hotellakeview', 0),
(74, 74, '', 907, 'Double', '', 4, 0, 2200, 'images/hotels/room/06-09-2018-1536206271l3.jpg', 'images/hotels/room/06-09-2018-1536206271l4.jpg', NULL, 0, 1, 1, 0, 1, 1, 2, 0, 0, 0, 1, 74, 'hotellakeview', 0),
(75, 72, '', 2001, 'Heritage Room', '', 5, 0, 5000, 'images/hotels/room/06-09-2018-1536206868heritage1.jpg', 'images/hotels/room/06-09-2018-1536206868heritage2.jpg', NULL, 0, 1, 1, 1, 1, 1, 1, 0, 0, 1, 1, 72, 'htlannapurna', 0),
(77, 72, '', 3001, 'Delux Room', '', 5, 0, 6000, 'images/hotels/room/06-09-2018-1536207143anna1.jpg', 'images/hotels/room/06-09-2018-1536207143anna2.jpg', NULL, 0, 1, 1, 1, 1, 1, 2, 0, 0, 1, 1, 72, 'htlannapurna', 0),
(78, 72, '', 3009, 'Club Room', '', 4, 0, 7000, 'images/hotels/room/06-09-2018-1536207187anna3.jpg', 'images/hotels/room/06-09-2018-1536207187anna4.jpg', NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 72, 'htlannapurna', 0);

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

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`vid`, `vtitle`, `vtype`, `vdescription`, `vtotalseat`, `vcost`, `vadded_date`, `vstatus`, `vkeyword`, `vimg1`, `vimg2`, `id`, `vcounter`) VALUES
(9, 'Honda Hornet', 'motorcycle', '<p>This 160cc pocket rocket is among the biggest surprises to come out of the Honda stables. The bike is designed unlike any other, and is sure to make heads turn every time you ride down the roads. Looks aside, the bike also performs quite satisfactorily on city roads as well as the highways. The ergonomic seating position, easy to reach handlebars and comfy foot rests makes it a delight to go on long rides aboard the Hornet. If you want something inexpensive that performs and behaves like a pro on the roads, then this is your best bet. </p>', 2, 1500, '2018/09/06', 1, '', 'images/vehicle/06-09-2018-1536211743IMG_0175.jpg', 'images/vehicle/06-09-2018-1536211743Hornet-Gallery-2.jpg', 93, 6),
(10, 'Mahindra Thar ', '4wd', '<p>If you are a fearless person than Mahindra Thar is perfect car for you and it doubles your joy if you get it for self drives. We provide Thar for selfdrives. Its a 4x4 car which is best of any road condition, while you are planning to go for a adventures trip, &nbsp;highway ride or on hill area, you will feel&nbsp;comfortable what ever the road condition are. We have best&nbsp;condition&nbsp;Thar and will provide you on very&nbsp;economical price. Book you Thar for&nbsp;self drive and we are sure you are going to enjoy it.</p>', 6, 6000, '2018/09/06', 1, '', 'images/vehicle/06-09-2018-1536212643Mahindra-Thar-Customised-Into-Jeep-Wrangler-3.jpg', 'images/vehicle/06-09-2018-1536212643mahindra-thar-hardtop-coimbatore-500x500.jpg', 93, 0),
(11, 'Mahindra Scorpio', '4wd', '<p>We offer&nbsp;Scorpio jeep on Hire, you can rent and enjoy your trip in Kathmandu and outside the Kathmandu valley. We 2WD jeep and 4WD (four wheel) Scorpio jeep on rent. Maximum 7&nbsp;people (including driver) can be seated in the Jeep.</p>', 7, 4000, '2018/09/06', 1, '', 'images/vehicle/06-09-2018-1536212878912531_Yatriyo-Scorpio.jpg', 'images/vehicle/06-09-2018-15362128783010190.jpg', 93, 0),
(12, 'Honda Grazia', 'motorcycle', '<p>There are 3 new Honda Grazia Scooters available for sale online in Fixed Price. All new Honda Grazia Scooters come with 100% Refundable Token Amount. New Honda Grazia Scooters are available starting from Rs. 57,557 to Rs. 66,401.</p>', 2, 1500, '2018/09/06', 1, '', 'images/vehicle/06-09-2018-153621301239517_HondaGrazia-2018006.JPG', 'images/vehicle/06-09-2018-1536213012v_honda-grazia-std1527083899.jpg', 93, 0),
(13, 'Hyundai i20', 'car', '<p>Reserve an economy vehicle, including the Ford Fiesta or similar with Avis. Vehicle make and model is subject to location and availability. Similar make and models include the following: Fiat 500, Hyundai Accent, Mazda 2, Mitsubishi Mirage, Kia Rio, Chevrolet Sonic and Ford Yaris.</p>', 5, 4000, '2018/09/06', 1, '', 'images/vehicle/06-09-2018-153621317431265533_1891722400859825_14969730553085952_n.jpg', 'images/vehicle/06-09-2018-1536213174i20.jpg', 93, 0),
(14, 'Tata Tiago', 'car', '', 5, 4500, '2018/09/06', 1, '', 'images/vehicle/06-09-2018-1536213344Tata-Tiago-925792710-6042720-2.JPG', 'images/vehicle/06-09-2018-1536213344IMG_20161020_162803308_HDR.jpg', 92, 0),
(15, 'Royan Enfeild', 'bike', '<ul>\r\n<li>For many, a bike ride, if it is on the majestic Royal Enfield, the excitement will reach till the sky, is something unique and lasts a lifetime.</li>\r\n<li>Here is an amazing opportunity to rent a Royal Enfield Himalayan to experience a smart, comfortable ride as you wish to have.&nbsp;</li>\r\n<li>The basic feature of this particular bullet is the natural upright seating position combined with the long-travel suspension and the low seating position will make the long rides quite comfortable.</li>\r\n<li>The bike is highlighted with the dual purpose tires and agile handling that give the vehicle the ability to tackle any terrain at ease.</li>\r\n</ul>', 2, 5000, '2018/09/06', 1, '', 'images/vehicle/06-09-2018-153621348175B4034-2-copy.jpg', 'images/vehicle/06-09-2018-153621348150e7492a3be05b9118b4a54947067848.jpg', 92, 1),
(16, 'Triumph Tiger', 'motorcycle', '<p>Whatever the road, whatever the distance, whatever the challenge, the new Tiger 800 range has been built to excel. Featuring a host of rider focused technology such as the standard fitment of Triumph Traction Control and switchable ABS, the new Tiger with its powerful and more fuel efficient 95PS triple engine is up for any task.</p>', 2, 10000, '2018/09/06', 1, '', 'images/vehicle/06-09-2018-1536213604maxresdefault.jpg', 'images/vehicle/06-09-2018-1536213604Triumph-Tiger-XCA-White.jpg', 92, 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `book_hotel`
--
ALTER TABLE `book_hotel`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

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
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

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
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
