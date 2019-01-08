-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2018 at 04:31 PM
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
  `status` tinyint(4) NOT NULL,
  `joindate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `first_name`, `last_name`, `email`, `contact`, `password`, `address`, `description`, `title`, `image`, `type`, `status`, `joindate`) VALUES
(1, 'sjonchhe ', 'Sandesh', 'Jonchhe', 'sandeshjon@gmail.com', '9849128762', 'apple', 'Maharajgunj', 'Always code as if the guy who ends up maintaining your code will be violent psychopath who knows where you live', 'Founder / Designer / Developer', 'images/admin/11.jpg', 1, 1, ''),
(8, 'abhash', 'Abhash', 'Dc', 'abhashdc@gmail.com', '9843547062', 'apple', 'Basundhara', '', 'Founder / Developer', 'images/admin/23755503_1484198664950489_8204578438821019205_n.jpg', 1, 1, ''),
(9, 'anisha', 'Anisha', 'Shrestha', 'anisha@gmail.com', '9843327132', 'apple', 'Gokarna', '', 'Founder / Database Admin / Developer', 'images/admin/33595629_2067820053543446_9789720821235712_n.jpg', 1, 1, ''),
(10, 'basanta', 'Basanta', 'Shahi', 'bsnta@gmail.com', '9843312532', 'apple', 'Kapan', '', 'Founder / Developer', 'images/admin/33575130_1913070718724670_989777021544431616_n.jpg', 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `book_hotel`
--

CREATE TABLE `book_hotel` (
  `cid` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `rno` int(11) NOT NULL,
  `hbook_date` varchar(100) NOT NULL,
  `checkin` date DEFAULT NULL,
  `checkout` date DEFAULT NULL,
  `b_h_cost` int(11) DEFAULT NULL,
  `b_h_status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book_package`
--

CREATE TABLE `book_package` (
  `cid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `bookdate` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `totalno` int(11) DEFAULT NULL
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
(20, 'Hotel Barahi', 'htlbarahi', 'LakeSide, Pokhara', 'Pokhara', ' 061-460617', NULL, 'hotelbarahi@gmail.com', 'Conveniently located on Pokharaâ€™s prominent place â€œLakesideâ€, Hotel Barahi boasts some stunning views of the Annapurna & Machapuchare Himalayans, Phewa Lake as well as easy access to the thriving lake street. We are 3 KMS away from Pokhara domestic airport. We offer 85 deluxe and suite rooms, fusion fine dining restaurant with every evening authentic live cultural dance show, cake shop, swimming pool, public bar, meeting rooms, and SPA decorated with comfort and elegance in mind.', NULL, 'images/hotels/hotel/hotel-1.jpg', '', '', 1, 1, ''),
(25, 'Hotel Himalaya', 'htlhimalaya', 'Patan, Lalitpur', 'Lalitpur', '01-5523900', NULL, 'hotelhimalaya@gmail.com', 'Hotel Himalaya Located 2 km from the city centre and market, Hotel Himalaya offers boutique accommodation with free private parking. It is nestled within 10 acres of landscaped garden. ', NULL, 'images/hotels/hotel/hotel-2.jpg', '', '', 1, 1, ''),
(32, 'Hotel Annapurna', 'htlannapurna', 'DurbarMarg', 'Kathmandu', '01-4221711', NULL, 'hotelannapurna@gmail.com', 'Set on a 2-hectare property with landscaped gardens, this upscale hotel is 1 km from the landmark Kathmandu Durbar Square and 5 km from Tribhuvan International Airport. ', NULL, 'images/hotels/hotel/26-05-2018-152730444535086064.jpg', '', '', 1, 1, ''),
(42, 'hotel shambala', 'basanta ', 'Bansbari Rd, Kathmandu 44600', 'Kathmandu', '01-4650251', NULL, 'shambalahotel@gmail.com', 'Along a main road with shops, eateries and embassies, this relaxed hotel with Himalayan views lies 5 km from Boudhanath Stupa, a domed Buddhist shrine, and 6 km from Tribhuvan International Airport.\r\n\r\nFeaturing colourful Tibetan rugs, the down-to-earth rooms offer flat-screens, free Wi-Fi, sitting areas, and tea and coffeemaking facilities. Upgraded rooms add mountain views. Suites come with living rooms and microwaves; some have in-room baths or ornately carved wooden furnishings. Room service is available 24/7.\r\n\r\nBreakfast is included. Amenities consist of a warm restaurant, a bar and a spa, plus a rooftop infinity pool (fee) flanked by a cafe\r\n', NULL, 'images/hotels/hotel/25-05-2018-1527248992sh.jpg', 'images/hotels/cover/25-05-2018-1527248602shambala.jpg', '', 1, 1, 'shambala'),
(43, 'sunny guest house and cafe', 'basanta ', 'Taumadhi Square - 11, BhaktapurØŒ Bhaktapur 44800', 'Bhaktapur', '01-6616094', NULL, 'sunnyguesth@gmail.com', 'Located in Downtown Ho Chi Minh City, this guesthouse is steps from Pham Ngu Lao Backpacker Area, September 23 Park, and Bui Vien Walking Street. Zen Plaza and Saigon Culinary Arts Centre are also within 10 minutes.\r\nThis guesthouse features dry cleaning, a 24-hour front desk, and tour/ticket assistance. WiFi in public areas is free. Other amenities include a front-desk safe.', NULL, 'images/hotels/hotel/25-05-2018-1527250684sunnycover.jpg', 'images/hotels/cover/25-05-2018-1527250684sunny-guest-house.jpg', '', 1, 1, 'sunny'),
(44, 'lumbini hokke hotel', 'basaa', 'Lumbini Sanskritik 32914', 'Lumbini', ' 071-580136', NULL, 'hotelhokke@gmail.com', '', NULL, 'images/hotels/hotel/25-05-2018-1527252637Hotel-hokke.jpg', 'images/hotels/cover/25-05-2018-1527252637hokkee.jpg', '', 1, 1, 'hokke'),
(45, 'sangrila hotel', 'htlsangrila', 'Lazimpat Rd Lazimpat, Kathmandu 44600', 'Kathmandu', '01-4412999', NULL, 'sangrila@gmail.com', '', NULL, 'images/hotels/hotel/25-05-2018-1527253441sangrila.jpg', 'images/hotels/cover/25-05-2018-1527253441sang.jpg', 'aa', 1, 1, 'sangrila');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `pid` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `paddress` varchar(50) DEFAULT NULL,
  `plocation` varchar(500) NOT NULL,
  `pdescription` varchar(500) NOT NULL,
  `pcost` varchar(50) NOT NULL,
  `pduration` varchar(50) NOT NULL,
  `pstartdate` varchar(50) NOT NULL,
  `pexpiry` varchar(50) NOT NULL,
  `pcategory` varchar(50) NOT NULL,
  `pstatus` tinyint(4) DEFAULT NULL,
  `pimg1` varchar(100) NOT NULL,
  `pimg2` varchar(100) NOT NULL,
  `pimg3` varchar(100) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `username` varchar(200) NOT NULL,
  `pmap` varchar(500) NOT NULL,
  `pkeyword` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`pid`, `pname`, `paddress`, `plocation`, `pdescription`, `pcost`, `pduration`, `pstartdate`, `pexpiry`, `pcategory`, `pstatus`, `pimg1`, `pimg2`, `pimg3`, `id`, `username`, `pmap`, `pkeyword`) VALUES
(5, 'Mardi Himal Trek', 'Mardi', 'Pokhara', '', '15000', '10', '', '', 'Trekking', 1, 'images/package/26-05-2018-1527301216p10.jpg', '', NULL, 1, 'sjonchhe ', '', 'b'),
(6, 'Ghandruk Trek', 'Ghandruk', 'Pokhara', '', '10000', '8', '', '', 'Hiking', 1, 'images/package/26-05-2018-1527301092p6.jpg', 'images/package/26-05-2018-1527301149t3.jpg', NULL, 1, 'sjonchhe ', '', ''),
(8, 'Kalinchowk Tour', 'Kalinchowk', 'Kathmandu', 'Kalinchowk is belongs to the Rolwaling trekking region. This trek is lies in the eastern part of Nepal and is known for its immense natural beauty. Those who go for the Kalinchowk Tour can enjoy panoramic views of Annapurna, Manaslu, Ganesh Himal, Lamjung, Jugal Himal, Shisha Panga, Gauri Shankar etc.  There is a temple named Kalinchowk Bhagawati temple  at 3780m â€“ the highest altitude of this trek. Kalinchowk tour is ideal for the exploration of culture as well as natural beauty. Kalinchowk t', '3500', '2', '', '', 'Religious', 1, 'images/package/26-05-2018-1527309970kalinchowk1.jpg', 'images/package/26-05-2018-1527309970Kalinchowk2.jpg', NULL, 9, 'anisha', '', 'Kalinchowk'),
(9, 'Halesi Mahadev Darshan', 'Khotang', 'Kathmandu', 'Halesi Mahadev Temple is situated at the hilly region of Khotang district of the country in between the holy rivers Dudh Koshi and Sunkoshi . The location is so pleasant and beautiful. The temple is situated at the top of a small hill inside a beautiful cave with the image of God Shiva. It is the natural cave, which lies in 4th remote hilly region and is believed to be in existence since 6000 years and people from different countries visit this place, popular among the Hindus as well as the Budd', '3000', '2', '', '', 'Religious', 0, 'images/package/26-05-2018-1527310362halesi1.jpg', 'images/package/26-05-2018-1527310362halesi3.jpg', NULL, 9, 'anisha', '', 'Halesi, , Religious '),
(10, 'LANGTANG VALLEY TREKKING:', 'Langtang', 'Kathmandu', 'Langtang is one of the nearest trekking destinations from Kathmandu and is an unparalleled combination of natural beauty and cultural riches. Langtang lies about 130 km north of the Kathmandu Valley close to the border with Tibet, China. It is Nepalâ€™s first National Park, and lies between the Himalayan range to the North, dominated by Langtang Lirung (7,245 m), the highest peak in the area, and smaller peaks to the South â€“ Chimse Danda (ridge), Ganja La pass (5,122 m), Jugal Himal and Dorje ', '10000', '8', '', '', 'Trekking', 1, 'images/package/26-05-2018-1527310523langtang1.jpg', 'images/package/26-05-2018-1527310523langtang3.jpg', NULL, 9, 'anisha', '', 'Langtang , Trekking'),
(11, 'Pokhara-Lumbini Tour', 'Pokhara-Lumbini', 'Pokhara', 'We move to visit birth place of Lord Buddha, Lumbini, and situated 300km from Kathmandu. Lumbini is the foundation of world peace and pilgrimage for all peace loving people, bearing significance to the life, enlightenment and death of Buddha.\r\n\r\nWe will travel to the worldâ€™s best touristic destination, Pokhara. As Nepal is a Himalayan country, tour to Pokhara will be a fantastic journey where traveler posses enough time to enjoy this lake city and the Himalayan views at the same time.', '7000', '5', '', '', 'Tour', 1, 'images/package/26-05-2018-1527311197pokharal1.jpg', 'images/package/26-05-2018-1527311197pokharal2.jpg', NULL, 9, 'anisha', '', 'Pokhara , Lumbini ,Tour'),
(12, 'Muktinath Tour', 'Mustang', 'Kathmandu', 'Muktinath is a lord of Salvation. Muktinath temple lies in the district of Mustang. Muktinath is a pilgrimage place for both Buddhist and Hindu. It is situated 48 km north east of Jomsom at an altitude of 3749 m.Lord Narayan of Muktinath Temple Its main shrine is a pagoda-shaped temple dedicated to lord Vishnu. Behind the temple there are 108 waterspouts cast in the shape of cow headed pour holy water. Here lots of pilgrimage takes bath from the ice-cold holy water. The temple is situated on a h', '11000', '6', '', '', 'Religious', 1, 'images/package/26-05-2018-1527311599Muktinath1.jpg', 'images/package/26-05-2018-1527311599Muktinath2.jpg', NULL, 9, 'anisha', '', 'Muktinath ,Manang, Religious'),
(13, 'Chitlang Trek', 'Chitlang ', 'Kathmandu', 'Chitlang  Organic Village Resort is organic village the way of living life in organic style. It is located at Makawanpur district Chitlang VDC. CHITLANG is about 22 KM from Kathmandu in the South West direction.It offers an amazing experience with the combination of natural beauty and cultural heritage. Famous as the gate way of motor cars carried on the back of people. Chitlang offers visitors with an opportunity of village home stay where you can interact and get insight of the rural life in N', '3000', '2', '', '', 'Hiking', 1, 'images/package/26-05-2018-1527312108Chitlang1.jpg', 'images/package/26-05-2018-1527312108Chitlang2.jpg', NULL, 9, 'anisha', '', 'Trekking ,Kulekhani ,Chitlang'),
(14, 'Nagarkot Trip', 'Nagarkot', 'Bhaktapur', 'Nagarkot has a reputation as the top spot for enjoying Himalayan views from the comfort of your hotel balcony. Just 32km from Kathmandu, the village is packed with hotels lining a ridge, affording one of the broadest possible views of the Himalaya, with eight ranges visible (Annapurna, Manaslu, Ganesh Himal, Langtang, Jugal, Rolwaling, Everest and Numbur). However, timing is everything, as the mountains are notorious for disappearing behind cloudy skies. The', '3000', '2', '', '', 'Site', 1, 'images/package/26-05-2018-1527312777nagarkot1.jpg', 'images/package/26-05-2018-1527312777nagarkot2.jpg', NULL, 9, 'anisha', '', ''),
(15, 'Devghat Darsan Tour', 'chitwan', 'Kathmandu', 'Devghat is located at the border of the three districts of Tanahu, Chitwan and Nawalparasi. It is the confluence of three main holy rivers: Kali Gandaki, Seti Gandaki and Trishuli. Hind religion followers consider this point sacred and considers as a pilgrimage site by the Hindus. The very first day of the Nepali month of Magh, hundreds of people from  Nepal and India visit this place to immerse themselves in the river to celebrate the Hindu festival of Magh Sankranti. ', '5000', '5', '', '', 'Religious', 0, 'images/package/26-05-2018-1527313076devghat3.jpg', 'images/package/26-05-2018-1527313076devghat3.jpg', NULL, 9, 'anisha', '', 'Devghat, Chitwan , Religious');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prid` int(11) NOT NULL,
  `prname` varchar(100) NOT NULL,
  `prcategory` varchar(100) DEFAULT NULL,
  `prbrand` varchar(100) DEFAULT NULL,
  `prcost` int(11) NOT NULL,
  `primg1` varchar(100) NOT NULL,
  `primg2` varchar(100) NOT NULL,
  `prdescription` varchar(300) NOT NULL,
  `prrecommend` varchar(100) DEFAULT NULL,
  `prstatus` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `cid` int(11) DEFAULT NULL,
  `prid` int(11) DEFAULT NULL,
  `orderdate` varchar(50) DEFAULT NULL,
  `prcost` int(11) DEFAULT NULL,
  `prdeliverycharge` int(11) DEFAULT NULL,
  `prtotal` int(11) DEFAULT NULL,
  `pr_orderstatus` tinyint(4) DEFAULT NULL
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
  `rstatus` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`rid`, `hid`, `hname`, `rno`, `rtitle`, `rtype`, `totalroom`, `rhomestaycost`, `rhotelcost`, `rimage1`, `rimage2`, `rimage3`, `refrigerator`, `wifi`, `hotwater`, `aircondition`, `tv`, `private_bathroom`, `noofbed`, `restaurant`, `roomservice`, `laundry`, `rstatus`) VALUES
(11, 42, '', 101, 'double bed room', '', 1, 0, 7000, 'images/hotels/room/sroom1.jpg', NULL, NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1),
(17, 43, '', 2, 'view side room', '', 1, 0, 3061, 'images/hotels/room/sunnyroom1.jpg', NULL, NULL, 0, 1, 1, 1, 1, 1, 2, 1, 1, 1, 1),
(18, 43, '', 3, 'couple room', '', 3, 0, 3500, 'images/hotels/room/sunnyroom3.jpg', NULL, NULL, 0, 1, 1, 1, 1, 0, 2, 1, 1, 1, 1),
(19, 44, '', 21, 'family bedroom', '', 3, 0, 13, 'images/hotels/room/LHH.jpg', NULL, NULL, 1, 1, 1, 1, 1, 1, 2, 1, 1, 1, 1),
(20, 44, '', 0, 'double bed bedroom', '', 3, 0, 13, 'images/hotels/room/lumbini_hokke_hotelroom1.jpg', NULL, NULL, 0, 1, 1, 1, 1, 1, 2, 1, 1, 0, 1),
(21, 45, '', 52, 'single bedroom', '', 4, 0, 5000, 'images/hotels/room/sangroom2.jpg', NULL, NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
(22, 45, '', 61, 'Double bed bedroom', '', 2, 0, 7000, 'images/hotels/room/sanroom1.jpg', NULL, NULL, 1, 1, 1, 1, 1, 1, 2, 1, 1, 1, 1);

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
  `tmap` varchar(500) NOT NULL,
  `tstatus` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`tid`, `aid`, `ausername`, `tlocation`, `ttitle`, `taddress`, `tdescription`, `timage1`, `timage2`, `tkeyword`, `tmap`, `tstatus`) VALUES
(2, 1, 'sjonchhe ', 'Pokhara', 'Lake Side Exploring', 'uh', 'juhaidsaudsbdhi', 'images/todo/26-05-2018-1527305300pa5.jpg', '', 'ikh', 'h', '1'),
(3, 1, 'sjonchhe ', 'Chitlang', 'Goat Cheese Factory', 'sdfg', 'sdfg', 'images/todo/26-05-2018-1527305384cheese1.jpg', 'images/todo/25-05-2018-152723454135086064.jpg', 'f', 'f', '1');

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
(2, 'bsnta', 'basanta', 'shahi', 'kapan', 12345566, 'a@yahoo.com', '2222', 'male', 'aaaaaaaaaa', '', '', '2053', 1),
(8, 'sjonchhe', 'sandesh', 'jonchhe', 'maharajgunj', 2147483647, 'sandeshjon@gmail.com', '2232323', 'male', 'apple', '', 'about here', '2018/05/15', 1),
(9, 'sjonchhe', 'sandesh', 'jonchhe', 'maharajgunj', 2147483647, 'sandeshjon@gmail.com', '2232323', 'male', 'apple', '', '', '2018/05/15', 1),
(10, 'test', '', 'jhg', 'hj', 0, 'hj', 'h', 'male', 'apple', '../images/user/avatar-01.jpg', '', '2018/05/17', 1);

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
-- Indexes for table `book_package`
--
ALTER TABLE `book_package`
  ADD KEY `pid` (`pid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hid`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- Constraints for table `book_package`
--
ALTER TABLE `book_package`
  ADD CONSTRAINT `book_package_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `user` (`cid`),
  ADD CONSTRAINT `book_package_ibfk_2` FOREIGN KEY (`pid`) REFERENCES `package` (`pid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_package_ibfk_3` FOREIGN KEY (`cid`) REFERENCES `user` (`cid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `package`
--
ALTER TABLE `package`
  ADD CONSTRAINT `package_ibfk_1` FOREIGN KEY (`id`) REFERENCES `admin` (`id`),
  ADD CONSTRAINT `package_ibfk_2` FOREIGN KEY (`id`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`hid`) REFERENCES `hotel` (`hid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
