-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2018 at 07:32 PM
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
(1, 'sjonchhe ', 'Sandesh', 'Jonchhe', 'sandeshjon@gmail.com', '9849128762', 'apple', 'Maharajgunj', 'Always code as if the guy who ends up maintaining your code will be violent psychopath who knows where you live', 'Founder / Designer / Developer', '', 1, 1),
(16, 'Abaas', 'Abhash', 'DC', 'abhashdc@gmail.com', '984566513', 'apple', 'Basundhara', '', '', '', 1, 1),
(17, 'Anisha', 'Anisha', 'Shrestha', 'anishashrestha@gmail.com', '5816853651', 'apple', 'Sankhu', '', '', '', 1, 1),
(18, 'bsnta', 'Basanta', 'Shahi', 'basantashahi@gmail.com', '987468513', 'apple', 'Kapan', '', '', '', 1, 1),
(21, 'Ramey', 'Ram', 'Shrestha', 'ramshrestha@gmail.com', '56133321', 'apple', 'Nepal', '', 'Dummy', '', 3, 1);

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
(10, 'Hotel Himalaya', 'HTLHimalaya', 'Kupondole', 'Lalitpur', '01556262', NULL, 'something@gmail.com', 'Something about hotel himalaya', NULL, '', '', '', 2, 1, ''),
(11, 'Buddha Garden Hotel', 'htlbgh', 'Thamel', 'Kathmandu', '6155313', NULL, 'something@gmail.com', 'ituated in Kathmandu, Buddha Garden Hotel features a rooftop garden and bar, as well as free Wi-Fi. Fresh Nepali coffee or cocktails can be enjoyed there, accompanied with views of the mountains and gardens. It is a 5-minute walk from Kantipath Bus Station and the Garden of Dreams.', NULL, '', '', '', 2, 1, ''),
(12, 'Hotel Samrat', 'htlsamrat', 'Kapan', 'Kathmandu', '6841518653', NULL, 'samrat@gmail.com', 'Something about hotel samrat', NULL, '', '', '', 2, 2, '');

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
  `rhomestaycost` int(11) NOT NULL,
  `rhotelcost` int(11) NOT NULL,
  `totalroom` int(11) NOT NULL,
  `rimg1` varchar(500) NOT NULL,
  `rimg2` varchar(500) NOT NULL,
  `rstatus` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`rid`, `hid`, `hname`, `rno`, `rtype`, `rhomestaycost`, `rhotelcost`, `totalroom`, `rimg1`, `rimg2`, `rstatus`) VALUES
(7, 10, 'Hotel Barahi', 5, 'hotel', 3, 2, 0, '', '', 2),
(16, 12, '', 1, 'homestay', 1500, 0, 0, '', '', 2),
(17, 12, '', 2, 'homestay', 1000, 0, 0, '', '', 2),
(18, 12, '', 3, 'homestay', 1500, 0, 0, '', '', 2),
(19, 11, '', 1, 'hotel', 0, 2500, 2, '', '', 2);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
