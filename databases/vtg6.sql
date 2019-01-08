-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2018 at 08:37 AM
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
(13, 'jhbk', 'bnk', 'bnk', 'b', 'kk', 'k', 'kj', 'kj', 'kj', '', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `book_hotel`
--

CREATE TABLE `book_hotel` (
  `cid` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `rid` int(11) DEFAULT NULL,
  `rno` int(11) NOT NULL,
  `checkin` date NOT NULL,
  `checout` date NOT NULL,
  `b_h_cost` int(11) DEFAULT NULL,
  `b_h_status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cid` int(11) NOT NULL,
  `cfname` varchar(100) NOT NULL,
  `clname` varchar(100) NOT NULL,
  `caddress` varchar(200) NOT NULL,
  `cemail` varchar(200) NOT NULL,
  `cdob` date NOT NULL,
  `cpassword` varchar(20) DEFAULT NULL,
  `cstatus` tinyint(10) NOT NULL
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

INSERT INTO `hotel` (`hid`, `hname`, `husername`, `haddress`, `hcontact`, `hcontact2`, `hemail`, `hdescription`, `hrating`, `himage`, `hcoverimage`, `hmap`, `hstatus`, `htype`, `hkeyword`) VALUES
(1, '', '', '', '', NULL, '', '', NULL, '', '', NULL, NULL, 0, NULL),
(2, 'hjb', 'hb', 'hb', 'jhb', NULL, 'jhb', 'hjbjh', NULL, 'bj', '', 'hbjh', 2, 1, 'bj');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `rid` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `rno` int(11) NOT NULL,
  `rtype` varchar(100) NOT NULL,
  `rwifi` binary(1) NOT NULL,
  `rac` binary(1) NOT NULL,
  `rhotwater` binary(1) NOT NULL,
  `rattachedtype` binary(1) NOT NULL,
  `rnoofbeds` int(11) NOT NULL,
  `rhomecost` int(11) NOT NULL,
  `rhotelcost` int(11) NOT NULL,
  `rimg1` varchar(500) NOT NULL,
  `rimg2` varchar(500) NOT NULL,
  `rstatus` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD PRIMARY KEY (`cid`,`hid`,`rno`),
  ADD KEY `hid` (`hid`),
  ADD KEY `rid` (`rid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book_hotel`
--
ALTER TABLE `book_hotel`
  ADD CONSTRAINT `book_hotel_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `customer` (`cid`),
  ADD CONSTRAINT `book_hotel_ibfk_2` FOREIGN KEY (`hid`) REFERENCES `hotel` (`hid`),
  ADD CONSTRAINT `book_hotel_ibfk_3` FOREIGN KEY (`rid`) REFERENCES `room` (`rid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
