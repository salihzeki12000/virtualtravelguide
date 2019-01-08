-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2018 at 07:14 PM
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
  `description` text NOT NULL,
  `title` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `type` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `first_name`, `last_name`, `email`, `contact`, `password`, `address`, `description`, `title`, `image`, `type`, `status`) VALUES
(1, 'sjonchhe ', 'Sandesh', 'Jonchhe', 'sandeshjon@gmail.com', '9849128762', 'apple', 'Maharajgunj', 'Always code as if the guy who ends up maintaining your code will be violent psychopath who knows where you live', 'Founder / Descigner / Developer', '', 1, 1),
(7, 'ramasdasdrama', 'ram', 'shrestha', 'ramshrestha@gmail.com', '894685', 'apple', 'abcdef', 'abcdefgh', 'something big', '', 1, 1),
(9, 'h', 'k', 'ui', 'ui@asd.com', 'ui', 'iu', 'ii', 'i', 'asdasd', '', 1, 1),
(13, 'jhbk', 'bnk', 'bnk', 'b', 'kk', 'k', 'kj', 'kj', 'kj', '', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `book_hotel`
--

CREATE TABLE `book_hotel` (
  `cid` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `rno` int(11) NOT NULL,
  `checkin` date DEFAULT NULL,
  `checout` date DEFAULT NULL,
  `b_h_cost` int(11) DEFAULT NULL,
  `b_h_status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_hotel`
--

INSERT INTO `book_hotel` (`cid`, `hid`, `rid`, `rno`, `checkin`, `checout`, `b_h_cost`, `b_h_status`) VALUES
(2, 11, 2, 111, '0000-00-00', '0000-00-00', 111, '1');

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
  `hmap` varchar(1000) DEFAULT NULL,
  `hstatus` tinyint(4) DEFAULT NULL,
  `htype` int(11) NOT NULL,
  `hkeyword` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hid`, `hname`, `husername`, `haddress`, `hlocation`, `hcontact`, `hcontact2`, `hemail`, `hdescription`, `hrating`, `himage`, `hcoverimage`, `hmap`, `hstatus`, `htype`, `hkeyword`) VALUES
(11, 'Buddha Garden Hotel', 'htlbgh', 'Thamel', 'Kathmandu', '6155313', NULL, 'something@gmail.com', 'ituated in Kathmandu, Buddha Garden Hotel features a rooftop garden and bar, as well as free Wi-Fi. Fresh Nepali coffee or cocktails can be enjoyed there, accompanied with views of the mountains and gardens. It is a 5-minute walk from Kantipath Bus Station and the Garden of Dreams.', NULL, '', '', '', 2, 1, ''),
(12, 'Hotel Samrat', 'htlsamrat', 'Kapan', 'Kathmandu', '6841518653', NULL, 'samrat@gmail.com', 'Something about hotel samrat', NULL, '', '', '', 2, 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `ramneties`
--

CREATE TABLE `ramneties` (
  `rid` int(11) NOT NULL,
  `refrigerator` binary(1) DEFAULT NULL,
  `wifi` binary(1) DEFAULT NULL,
  `hotwater` binary(1) DEFAULT NULL,
  `aircondition` binary(1) DEFAULT NULL,
  `tv` binary(1) DEFAULT NULL,
  `private_bathroom` binary(1) DEFAULT NULL,
  `noofbeds` binary(1) DEFAULT NULL,
  `resturant` binary(1) DEFAULT NULL,
  `roomservice` binary(1) DEFAULT NULL,
  `laundry` binary(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 CHECKSUM=1 DELAY_KEY_WRITE=1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `ramneties`
--

INSERT INTO `ramneties` (`rid`, `refrigerator`, `wifi`, `hotwater`, `aircondition`, `tv`, `private_bathroom`, `noofbeds`, `resturant`, `roomservice`, `laundry`) VALUES
(2, 0x01, 0x01, 0x00, 0x00, 0x01, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `rid` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `hname` varchar(250) NOT NULL,
  `rno` int(11) NOT NULL,
  `rtype` varchar(100) NOT NULL,
  `totalroom` int(11) NOT NULL,
  `rhomestaycost` int(11) NOT NULL,
  `rhotelcost` int(11) NOT NULL,
  `rimg1` varchar(500) NOT NULL,
  `rimg2` varchar(500) NOT NULL,
  `rstatus` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`rid`, `hid`, `hname`, `rno`, `rtype`, `totalroom`, `rhomestaycost`, `rhotelcost`, `rimg1`, `rimg2`, `rstatus`) VALUES
(2, 11, '', 22222, '', 0, 123, 11111, 'aa', 'aaaa', 12),
(3, 12, 'aaaaaaaaaa11', 11, 'qqq', 11, 11, 11, '11', '111', 111);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `cid` int(11) NOT NULL,
  `cfirst_name` varchar(100) NOT NULL,
  `clast_name` varchar(100) NOT NULL,
  `caddress` varchar(200) NOT NULL,
  `ccontact` int(20) NOT NULL,
  `cemail` varchar(200) NOT NULL,
  `cdob` varchar(20) NOT NULL,
  `cgender` varchar(10) NOT NULL,
  `cpassword` varchar(20) DEFAULT NULL,
  `cjoindate` varchar(20) NOT NULL,
  `cstatus` tinyint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`cid`, `cfirst_name`, `clast_name`, `caddress`, `ccontact`, `cemail`, `cdob`, `cgender`, `cpassword`, `cjoindate`, `cstatus`) VALUES
(2, 'basanta', 'shahi', 'kapan', 12345566, 'a@yahoo.com', '2222', 'female', 'aaaaaaaaaa', '2053', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_hotel`
--
ALTER TABLE `book_hotel`
  ADD KEY `cid` (`cid`),
  ADD KEY `hid` (`hid`),
  ADD KEY `rid` (`rid`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `ramneties`
--
ALTER TABLE `ramneties`
  ADD KEY `rid` (`rid`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`rid`),
  ADD KEY `hid` (`hid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_hotel`
--
ALTER TABLE `book_hotel`
  ADD CONSTRAINT `book_hotel_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `user` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_hotel_ibfk_2` FOREIGN KEY (`hid`) REFERENCES `hotel` (`hid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_hotel_ibfk_3` FOREIGN KEY (`rid`) REFERENCES `room` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ramneties`
--
ALTER TABLE `ramneties`
  ADD CONSTRAINT `ramneties_ibfk_1` FOREIGN KEY (`rid`) REFERENCES `room` (`rid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`hid`) REFERENCES `hotel` (`hid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
