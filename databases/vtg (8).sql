-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2018 at 05:32 PM
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
(1, 'sjonchhe ', 'Sandesh', 'Jonchhe', 'sandeshjon@gmail.com', '9849128762', 'apple', 'Maharajgunj', 'Always code as if the guy who ends up maintaining your code will be violent psychopath who knows where you live', 'Founder / Designer / Developer', '../images/admin/32457D6E-5F99-4130-9E35-8793959C2DC4L0001.jpg', 1, 1),
(8, 'abhash', 'Abhash', 'Dc', 'abhashdc@gmail.com', '9843547062', 'apple', 'Basundhara', '', '', '', 1, 1),
(9, 'anisha', 'Anisha', 'Shrestha', 'anisha@gmail.com', '9843327132', 'apple', 'Sankhu', '', '', '', 1, 1),
(10, 'basanta', 'Basanta', 'Shahi', 'bsnta@gmail.com', '9843312532', 'apple', 'Kapan', '', '', '', 1, 1),
(11, 'ramey', 'ram', 'shrestha', 'ram@gmail.com', '65615651', 'apple', 'nepal', '', 'CEO', '', 4, 1);

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
(11, 'Buddha Garden Hotel', 'htlbgh', 'Thamel', 'Kathmandu', '6155313', NULL, 'something@gmail.com', 'ituated in Kathmandu, Buddha Garden Hotel features a rooftop garden and bar, as well as free Wi-Fi. Fresh Nepali coffee or cocktails can be enjoyed there, accompanied with views of the mountains and gardens. It is a 5-minute walk from Kantipath Bus Station and the Garden of Dreams.', NULL, '', '', '', 1, 1, ''),
(13, 'Hotel Barahi', 'htlbarahi', 'Pokhara', 'Pokhara', '3231651', NULL, 'htlbarahi@gmail.om', '', NULL, '', '', '', 1, 1, ''),
(14, 'Hotel Samrat', 'htlsamrat', 'Kapan', 'Kathmandu', '68485586', NULL, 'samrat@gmail.com', '', NULL, '', '', '', 1, 2, '');

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
  `rimg1` varchar(500) NOT NULL,
  `rimg2` varchar(500) NOT NULL,
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
  `rstatus` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`rid`, `hid`, `hname`, `rno`, `rtitle`, `rtype`, `totalroom`, `rhomestaycost`, `rhotelcost`, `rimg1`, `rimg2`, `refrigerator`, `wifi`, `hotwater`, `aircondition`, `tv`, `private_bathroom`, `noofbed`, `restaurant`, `roomservice`, `laundry`, `rstatus`) VALUES
(22, 11, '', 0, 'Single Room', 'hotel', 1, 0, 800, '', '', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 2),
(37, 11, '', 101, 'Family Room', 'hotel', 3, 0, 2500, '', '', 0, 0, 0, 0, 0, 1, 2, 0, 1, 1, 2),
(39, 13, '', 100, '', 'hotel', 3, 0, 3000, '', '', 1, 1, 1, 1, 1, 1, 2, 1, 1, 1, 2),
(40, 11, '', 102, 'PAckage', '', 1, 0, 2500, '', '', 0, 0, 0, 0, 1, 0, 1, 1, 0, 0, 2),
(41, 11, '', 102, 'Suite', '', 2, 0, 5000, '', '', 1, 1, 1, 1, 1, 1, 2, 1, 1, 1, 2),
(42, 14, '', 100, 'Bed room', '', 2, 1000, 0, '', '', 0, 1, 0, 0, 1, 1, 1, 0, 0, 0, 2);

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
(2, '', 'basanta', 'shahi', 'kapan', 12345566, 'a@yahoo.com', '2222', 'male', 'aaaaaaaaaa', '', '', '2053', 1),
(8, 'sjonchhe', 'sandesh', 'jonchhe', 'maharajgunj', 2147483647, 'sandeshjon@gmail.com', '2232323', 'male', 'apple', '', 'about here', '2018/05/15', 1),
(9, 'sjonchhe', 'sandesh', 'jonchhe', 'maharajgunj', 2147483647, 'sandeshjon@gmail.com', '2232323', 'male', 'apple', '', '', '2018/05/15', 2),
(10, 'asd', '', 'jhg', 'hj', 0, 'hj', 'h', 'male', 'apple', '../images/user/IMG_20180309_141410.jpg', '', '2018/05/17', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`hid`) REFERENCES `hotel` (`hid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
