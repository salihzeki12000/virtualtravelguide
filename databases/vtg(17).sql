-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2018 at 12:17 PM
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

INSERT INTO `admin` (`id`, `username`, `first_name`, `last_name`, `email`, `contact`, `password`, `address`, `description`, `title`, `image`, `type`, `status`, `joindate`, `vtype`, `company_name`, `latitude`, `longitude`) VALUES
(1, 'sjonchhe ', 'Sandesh', 'Jonchhe', 'sandeshjon@gmail.com', '9849128762', 'apple', 'Maharajgunj', 'Always code as if the guy who ends up maintaining your code will be violent psychopath who knows where you live', 'Founder / Designer / Developer', 'images/admin/11.jpg', 1, 1, '', '', '', '', ''),
(8, 'abhash', 'Abhash', 'Dc', 'abhashdc@gmail.com', '9843547062', 'apple', 'Basundhara', '', 'Founder / Developer', 'images/admin/23755503_1484198664950489_8204578438821019205_n.jpg', 1, 1, '', '', '', '', ''),
(9, 'anisha', 'Anisha', 'Shrestha', 'anisha@gmail.com', '9843327132', 'apple', 'Gokarna', '', 'Founder / Database Admin / Developer', 'images/admin/33595629_2067820053543446_9789720821235712_n.jpg', 1, 1, '', '', '', '', ''),
(10, 'basanta', 'Basanta', 'Shahi', 'bsnta@gmail.com', '9843312532', 'apple', 'Kapan', '<p>adsad</p>', 'Founder / Developer', 'images/admin/33575130_1913070718724670_989777021544431616_n.jpg', 1, 1, '', '', '', '', ''),
(19, 'shyam', 'Shyam', 'Shrestha', 'shyamshrestha@gmail.com', '864646', 'apple', 'Chabahil', '', 'Owner', 'images/admin/market_seller-512.png', 4, 1, '2018/05/30', 'package', '', '', ''),
(23, 'harishrestha', 'Hari', 'Shrestha', 'harishrestha@gmail.com', '684156513', 'apple', 'Chabahil', '', 'Owner', 'images/admin/product-min-03.jpg', 4, 1, '2018/06/05', 'hotel', 'Hotel Stlawrence', '', ''),
(35, 'abctour', '', '', 'abc@gmail.com', '98896568', 'apple', 'Maharajgunj', '<p>adsad</p>', 'sad', 'images/admin/product-min-03.jpg', 4, 1, '2018/06/10', 'package', 'ABC Tour Company2241', '27.7378492999999971', '85.32864841'),
(37, 'xyztravel', '', '', 'xyz@gmail.com', '946146394', 'apple', 'Chakrapath', '<p><span style=\"color: #545454; font-family: arial, sans-serif; font-size: small;\">Leading&nbsp;</span><span style=\"font-weight: bold; color: #6a6a6a; font-family: arial, sans-serif; font-size: small;\">travel</span><span style=\"color: #545454; font-family: arial, sans-serif; font-size: small;\">&nbsp;agency in Nepal with specialization in&nbsp;</span><span style=\"font-weight: bold; color: #6a6a6a; font-family: arial, sans-serif; font-size: small;\">tour</span><span style=\"color: #545454; font-family: arial, sans-serif; font-size: small;\">&nbsp;and trekking activities.</span></p>', '', 'images/admin/FIFA-World-Cup-2018.jpg', 4, 1, '2018/06/14', 'package', 'XYZ Tours & Travels', '27.737849299999997', '85.3286484'),
(40, 'hoteltest', '', '', 'test@gmail.com', '85151', 'apple', 'Maharajgunj', '', '', 'images/admin/market_seller-512.png', 4, 1, '2018/06/21', 'hotel', 'Hotel Test & Casino', '27.737849299999997', '85.3286484');

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
(13, 'My Experience in Pokhara', 'Pokhara', '<p><span class=\"entry-content\">After arriving in Kathmandu from Biratnagar, we were welcomed with Kathmandu being closed (bandha). After we got off our plane and got our suitcases, we were told that Kathmandu was closed. Luckily, we happened to be the first people that a very kind taxi driver approached. He told us that we didn&rsquo;t have much time to make it out of the Airport so we half-heartedly loaded our luggage onto the taxi. The driver navigated us through a big traffic jam of cars trying to leave the airport. Outside the airport, I saw a sight to be beheld. There were over 100 police officers shoving cars away from the road to clear it. Many YCL (Young Communist League) members were attempting to throw rocks and beer bottles at outbound cars. Luckily, we escaped unscathed. As I saw those events unfold, I thought about how tourists and visitors would think of Nepal. I was kinda disappointed at the behavior of people in my home country. Hopefully, It&rsquo;ll get better. Due to the dangers of driving on the main road that day, our taxi driver used a series of small hidden roads to get us back home. When we arrived home safely, we were very thankful and breathed a sigh of relief.</span></p>\r\n<p><span class=\"entry-content\"><span class=\"entry-content\">After getting some rest and spending some time in Kathmandu, we got ready to drive to Pokhara. We drove along with my uncle. As we drove on the &ldquo;highway&rdquo;, I saw the real natural beauties of Nepal. Along the road, one could see majestic mountains, valleys, hills, and waterfalls as far as the eye could see. The &ldquo;highway&rdquo; that we traveled on was actually very well paved compared to Kathmandu&rsquo;s roads. After a four hour drive (luckily, we didn&rsquo;t get caught in traffic), we arrived at our hotel in Pokhara. I couldn&rsquo;t judge Pokhara just yet because it was very dark, so I just anticipated the best. The hotel was very nice and clean. Unfortunately, we got drenched in rain on our way to our room. The following day, we started our sightseeing in Pokhara. Our first stop was the famous and well-acclaimed Devis Falls. It was raining all day and we were soaked. Luckily, the rain intensified the force of Devis Falls. The view was spectacular. One could wonder where all that water goes, as it just disappears under your feet. After seeing the falls, we bought some Umbrellas (they were very necessary). After wandering around the city, looking at the beautiful white Seti River and some temples, we went canoeing in Fewa Taal Lake. We took a trip around the beautiful lake. It was a very clean lake, unlike what most people had said. We took some pictures and gandered at the views. Afterwards, we grabbed some Lunch at the Fewa park restaurant. Let me tell you, that place is terrible. If you are in the Pokhara area, don&rsquo;t eat there. As our final destination, we visited the Bindhyabasini temple. Upon completing our prayers, we headed over to my dad&rsquo;s friend&rsquo;s house for dinner. We enjoyed our time there and had a nice meal before we left. We went back to our hotel and fell asleep after a long (and wet) day.</span></span></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '2018-06-08 02:07:20p', 'images/blog/t5.jpg', '', 1, 14, 3),
(14, 'Trekking in Annapurna, Annapurna Base Camp Trekking\r\nPokhara', 'kathmandu', '<p>Trekking Precautions: <br />The following precautions are helpful to minimize the risk of accidents which might occur while trekking in remote areas: <br /><br />1. Do not trek alone. If possible, join other trekkers on the trail. <br />2. Do not pick up a porter or a guide off the street. They may not be reliable. <br />3. Try to avoid walking after nightfall in remote areas. <br />4. Keep your passport always with you, for it may be required any time and anywhere. <br />5. Register at all police and immigration check posts along the trail. If possible, register your trekking destinations and schedule at your embassy. <br />6. Report your problems to the nearest police of immigrations posts. When you return to Kathmandu, report also to your trekking agency as well as to the police and the Ministry of Tourism. <br />7. For safe trekking, join any of the reputed trekking agencies in town.</p>', '2018-06-08 03:52:29p', 'images/blog/26-05-2018-1527310523langtang1.jpg', '', 1, 14, 29);

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
  `checkin` date DEFAULT NULL,
  `checkout` date DEFAULT NULL,
  `bduration` varchar(500) NOT NULL,
  `b_h_cost` int(11) DEFAULT NULL,
  `b_h_status` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_hotel`
--

INSERT INTO `book_hotel` (`bid`, `cid`, `hid`, `rid`, `rno`, `hbook_date`, `checkin`, `checkout`, `bduration`, `b_h_cost`, `b_h_status`) VALUES
(58, 20, 42, 11, 1, '2018-06-05 04:48:39pm', '2018-06-20', '2018-06-22', '2', 14000, '3'),
(59, 20, 44, 19, 1, '2018-06-05 08:36:05pm', '2018-06-12', '2018-06-16', '4', 52, '2'),
(60, 15, 57, 26, 1, '2018-06-05 10:18:29pm', '2018-06-10', '2018-06-20', '2', 5000, '2'),
(61, 15, 57, 26, 2, '2018-06-11 01:32:07pm', '2018-06-20', '2018-06-21', '1', 5000, '3'),
(67, 15, 43, 17, 1, '2018-06-13 11:15:19pm', '2018-06-15', '2018-06-18', '3', 9183, '2'),
(68, 15, 44, 19, 1, '2018-06-21 01:54:00pm', '2018-06-26', '2018-06-28', '2', 26, '2'),
(69, 15, 59, 27, 1, '2018-06-23 11:57:11pm', '2018-06-05', '2018-06-06', '1', 1000, '2'),
(71, 20, 44, 19, 3, '2018-06-25 03:21:02pm', '2018-06-27', '2018-06-29', '2', 78, '2'),
(72, 20, 59, 27, 1, '2018-06-25 03:21:45pm', '2018-06-26', '2018-06-28', '2', 2000, '2');

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
(1, 15, 12, 2, 2, '2018-06-20', 6, '66000', '2018-06-13 01:20:17pm'),
(2, 15, 8, 4, 2, '2018-06-14', 2, '3500;', '2018-06-13 01:24:20pm'),
(3, 15, 8, 3, 2, '2018-06-13', 2, '7000', '2018-06-13 01:25:02pm'),
(4, 15, 8, 4, 2, '2018-06-10', 2, '7000', '2018-06-13 01:30:58pm'),
(5, 20, 11, 2, 2, '2018-06-21', 5, '14000', '2018-06-13 01:43:27pm'),
(6, 20, 16, 2, 2, '2018-06-28', 2, '2000', '2018-06-14 08:50:44pm'),
(8, 15, 8, 2, 2, '2018-06-26', 2, '7000', '2018-06-21 01:46:47pm'),
(9, 20, 17, 2, 4, '2018-06-28', 5, '40000', '2018-06-21 03:25:13pm');

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
(20, 'Hotel Barahi', 'htlbarahi', 'LakeSide, Pokhara', 'Pokhara', ' 061-460617', NULL, 'hotelbarahi@gmail.com', 'Conveniently located on Pokharaâ€™s prominent place â€œLakesideâ€, Hotel Barahi boasts some stunning views of the Annapurna & Machapuchare Himalayans, Phewa Lake as well as easy access to the thriving lake street. We are 3 KMS away from Pokhara domestic airport. We offer 85 deluxe and suite rooms, fusion fine dining restaurant with every evening authentic live cultural dance show, cake shop, swimming pool, public bar, meeting rooms, and SPA decorated with comfort and elegance in mind.', NULL, 'images/hotels/hotel/hotel-1.jpg', '', '', '', '', 1, 1, '', 0, ''),
(25, 'Hotel Himalaya', 'htlhimalaya', 'Patan, Lalitpur', 'Lalitpur', '01-5523900', NULL, 'hotelhimalaya@gmail.com', 'Hotel Himalaya Located 2 km from the city centre and market, Hotel Himalaya offers boutique accommodation with free private parking. It is nestled within 10 acres of landscaped garden. ', NULL, 'images/hotels/hotel/hotel-2.jpg', '', '', '', '', 1, 1, '', 0, ''),
(32, 'Hotel Annapurna', 'htlannapurna', 'DurbarMarg', 'Kathmandu', '01-4221711', NULL, 'hotelannapurna@gmail.com', 'Set on a 2-hectare property with landscaped gardens, this upscale hotel is 1 km from the landmark Kathmandu Durbar Square and 5 km from Tribhuvan International Airport. ', NULL, 'images/hotels/hotel/26-05-2018-152730444535086064.jpg', '', '', '', '', 1, 1, '', 0, ''),
(42, 'hotel shambala', 'htlshambala', 'Bansbari Rd, Kathmandu 44600', 'Kathmandu', '01-4650251', NULL, 'shambalahotel@gmail.com', 'Along a main road with shops, eateries and embassies, this relaxed hotel with Himalayan views lies 5 km from Boudhanath Stupa, a domed Buddhist shrine, and 6 km from Tribhuvan International Airport.\r\n\r\nFeaturing colourful Tibetan rugs, the down-to-earth rooms offer flat-screens, free Wi-Fi, sitting areas, and tea and coffeemaking facilities. Upgraded rooms add mountain views. Suites come with living rooms and microwaves; some have in-room baths or ornately carved wooden furnishings. Room service is available 24/7.\r\n\r\nBreakfast is included. Amenities consist of a warm restaurant, a bar and a spa, plus a rooftop infinity pool (fee) flanked by a cafe\r\n', NULL, 'images/hotels/hotel/25-05-2018-1527248992sh.jpg', 'images/hotels/cover/25-05-2018-1527248602shambala.jpg', '', '', '', 1, 1, 'shambala', 0, ''),
(43, 'sunny guest house and cafe', 'sunnyguesth', 'Taumadhi Square - 11, BhaktapurØŒ Bhaktapur 44800', 'Bhaktapur', '01-6616094', NULL, 'sunnyguesth@gmail.com', 'Located in Downtown Ho Chi Minh City, this guesthouse is steps from Pham Ngu Lao Backpacker Area, September 23 Park, and Bui Vien Walking Street. Zen Plaza and Saigon Culinary Arts Centre are also within 10 minutes.\r\nThis guesthouse features dry cleaning, a 24-hour front desk, and tour/ticket assistance. WiFi in public areas is free. Other amenities include a front-desk safe.', NULL, 'images/hotels/hotel/25-05-2018-1527250684sunnycover.jpg', 'images/hotels/cover/25-05-2018-1527250684sunny-guest-house.jpg', '', '', '', 1, 1, 'sunny', 0, ''),
(44, 'lumbini hokke hotel', 'lumbinihh', 'Lumbini Sanskritik 32914', 'Lumbini', ' 071-580136', NULL, 'hotelhokke@gmail.com', '', NULL, 'images/hotels/hotel/25-05-2018-1527252637Hotel-hokke.jpg', 'images/hotels/cover/25-05-2018-1527252637hokkee.jpg', '', '27.7172453', '85.3239605', 1, 1, 'hokke', 0, ''),
(57, 'Hotel StLawrencea', 'htlstlawrence', 'Chabahil', 'Kathmandu', '68415326', NULL, 'stlawrence@gmail.com', 'desc', NULL, 'images/hotels/hotel/05-06-2018-1528216080hotel-3.jpg', '', '', '27.737889499999998', '85.3286437', 1, 1, '', 0, 'sjonchhe '),
(58, 'HotelPractice', 'htlpractice', '', 'Kathmandu', '9153', NULL, 'samrat@gmail.com', '', NULL, 'images/hotels/hotel/23-06-2018-1529748848c8637883b64d846c843ccbb72798a321e2215d9d.jpg', '', '2018-06-23 15:59:08', '27.737849299999997', '85.3286484', 1, 1, '', 1, 'sjonchhe '),
(59, 'harikohotel', 'harikohotel', 'asdsa', 'Kathmandu', '6315685', NULL, 'sada@sda.com', '', NULL, 'images/hotels/hotel/23-06-2018-152974979420180114043753599631554chitlang nepal 2.jpg', '', '2018-06-23 16:14:54', '27.737849299999997', '85.3286484', 1, 1, '', 23, 'sjonchhe ');

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
(5, 0, 'Mardi Himal Trek', 'Mardi', 'Pokhara', '', '15000', '10', '35155', '', 'Trekking', '', 1, 'images/package/29-05-2018-152759888526-05-2018-152733429326-05-2018-1527301216p10.jpg', '', NULL, 1, 'sjonchhe ', '', 'b', 8),
(6, 0, 'Ghandruk Trek', 'Ghandruk', 'Pokhara', '', '10000', '8', '', '', 'Hiking', '', 1, 'images/package/26-05-2018-1527301092p6.jpg', 'images/package/26-05-2018-1527301149t3.jpg', NULL, 1, 'sjonchhe ', '', '', 8),
(8, 0, 'Kalinchowk Tour', 'Kalinchowk', 'Kathmandu', 'Kalinchowk is belongs to the Rolwaling trekking region. This trek is lies in the eastern part of Nepal and is known for its immense natural beauty. Those who go for the Kalinchowk Tour can enjoy panoramic views of Annapurna, Manaslu, Ganesh Himal, Lamjung, Jugal Himal, Shisha Panga, Gauri Shankar etc.  There is a temple named Kalinchowk Bhagawati temple  at 3780m â€“ the highest altitude of this trek. Kalinchowk tour is ideal for the exploration of culture as well as natural beauty. Kalinchowk t', '3500', '2', '', '', 'Religious', '', 1, 'images/package/26-05-2018-1527309970kalinchowk1.jpg', 'images/package/26-05-2018-1527309970Kalinchowk2.jpg', NULL, 9, 'anisha', '', 'Kalinchowk', 8),
(9, 0, 'Halesi Mahadev Darshan', 'Khotang', 'Kathmandu', 'Halesi Mahadev Temple is situated at the hilly region of Khotang district of the country in between the holy rivers Dudh Koshi and Sunkoshi . The location is so pleasant and beautiful. The temple is situated at the top of a small hill inside a beautiful cave with the image of God Shiva. It is the natural cave, which lies in 4th remote hilly region and is believed to be in existence since 6000 years and people from different countries visit this place, popular among the Hindus as well as the Budd', '3000', '2', '', '', 'Religious', '', 0, 'images/package/26-05-2018-1527310362halesi1.jpg', 'images/package/26-05-2018-1527310362halesi3.jpg', NULL, 9, 'anisha', '', 'Halesi, , Religious ', 0),
(10, 0, 'LANGTANG VALLEY TREKKING:', 'Langtang', 'Kathmandu', 'Langtang is one of the nearest trekking destinations from Kathmandu and is an unparalleled combination of natural beauty and cultural riches. Langtang lies about 130 km north of the Kathmandu Valley close to the border with Tibet, China. It is Nepalâ€™s first National Park, and lies between the Himalayan range to the North, dominated by Langtang Lirung (7,245 m), the highest peak in the area, and smaller peaks to the South â€“ Chimse Danda (ridge), Ganja La pass (5,122 m), Jugal Himal and Dorje ', '10000', '8', '', '', 'Trekking', '', 1, 'images/package/26-05-2018-1527310523langtang1.jpg', 'images/package/26-05-2018-1527310523langtang3.jpg', NULL, 9, 'anisha', '', 'Langtang , Trekking', 8),
(11, 0, 'Pokhara-Lumbini Tour', 'Pokhara-Lumbini', 'Pokhara', 'We move to visit birth place of Lord Buddha, Lumbini, and situated 300km from Kathmandu. Lumbini is the foundation of world peace and pilgrimage for all peace loving people, bearing significance to the life, enlightenment and death of Buddha.\r\n\r\nWe will travel to the worldâ€™s best touristic destination, Pokhara. As Nepal is a Himalayan country, tour to Pokhara will be a fantastic journey where traveler posses enough time to enjoy this lake city and the Himalayan views at the same time.', '7000', '5', '', '', 'Tour', '', 1, 'images/package/26-05-2018-1527311197pokharal1.jpg', 'images/package/26-05-2018-1527311197pokharal2.jpg', NULL, 9, 'anisha', '', 'Pokhara , Lumbini ,Tour', 8),
(12, 0, 'Muktinath Tour', 'Mustang', 'Pokhara', '<p>Muktinath is a lord of Salvation. Muktinath temple lies in the district of Mustang. Muktinath is a pilgrimage place for both Buddhist and Hindu. It is situated 48 km north east of Jomsom at an altitude of 3749 m.Lord Narayan of Muktinath Temple Its main shrine is a pagoda-shaped temple dedicated to lord Vishnu. Behind the temple there are 108 waterspouts cast in the shape of cow headed pour holy water. Here lots of pilgrimage takes bath from the ice-cold holy water. The temple is situated on a h</p>', '11000', '6', '', '', 'Religious', '<p><strong>Day 1: Arrival in Kathmandu, Transfer to hotel</strong><br />You will be welcomed by our representatives there at the Airport upon your arrival at the Tribhuvan International Airport in Kathmandu. You will then be transferred to the Hotel where you will be briefed about the travel itinerary. Overnight stay at the Hotel.</p>\r\n<p><strong>Day 2: Sightseeing in Kathmandu</strong><br />On the second day of the itinerary package, you will be engaged in the sightseeing tour of the Kathmandu Valley. After finishing breakfast at the Hotel in the morning, you will begin the sightseeing tour visiting the Durbar Squares of Kathmandu, Patan and Bhaktapur and enjoying the ancient art and architecture of the monuments. Likewise, the tourists can also visit the Pashupatinath Temple, Swyambhunath Temple and also the Bouddhanath Stupa which are important destinations for both Hindu and Buddhist pilgrims. You will return back to the Hotel in the evening.</p>\r\n<p><strong>Day 3: Kathmandu to bhulbhule by Jeep</strong><br />On the third day of the itinerary, you will take a drive from the Capital City of Kathmandu to Besisahar, the district headquarters of Lamjung district. The drive will take around six hours and you will enjoy the scenic drive along the banks of Trishuli River. After reaching Besisahar, you will again take another short drive to Bhulbhule taking only 2 hours in a local jeep. Overnight stay at a guesthouse.</p>\r\n<p><strong>Day 04&nbsp;&ndash;Bhulbhule &ndash; Khansar &ndash; Sirukharka&nbsp;</strong><br />On th forth day of the itinerary, You will take drive from bhulbhule to khansar after 4-5&nbsp;hour deive trekkers will reach to khansar and take 3-4 hour trek to sirukharka.Overnight stay at sirukharka.&nbsp;</p>\r\n<p><strong>Day 05&nbsp;&ndash; Sirukharka &ndash; Tilicho base camp Trek</strong></p>\r\n<p>On the fifth day of the itinerary trekkers will go for 5-6 hour trek for tilicho base camp from Sirukharka, Overnight stay at tilicho base camp.</p>\r\n<p><strong>Day 06 &ndash; Tilicho base camp &ndash; Tilicho Lake &ndash; Tilicho base camp Trek ( 6 Hour)</strong></p>\r\n<p>On the sixth day of the itinerary early morning trek will heading towards the tilicho lake. Trekkers will enjoy beautiful tilicho lake view at morning and come back to tilicho base camp, Overnightstay at tilicho base camp</p>\r\n<p><strong>Day 07&nbsp;Sirukharka to yekkharka to Thorng phedi ( 6-7 Hour)</strong><br />The path from Yak Kharka (4035 m asl) rises only slowly through Thorong Khola valley up to the base camp in Thorong Phedi (4538 m asl) (sometimes written as Thorung Phedi). Among treks around the Annapurnas this one belongs to the shortest ones. In Thorong Phedi, from where every day early in the morning tourists set off to conquer Thorong La Pass, the highest point of the trek, is plenty of time to have a rest or an acclimatization trip up to High Camp.&nbsp;</p>\r\n<p><strong>Day 08&nbsp;Thorangphedi to thorongpass to muktinath (4-5 Hour Trek)</strong><br />From thorong phedi you will then move ahead to the Thorong Phedi. You can choose several routes to reach Phedi and after around three hours of trekking, you will finally reach Thorong Phedi (4450m), the destination of the day. This is the highest elevation you will reach on the day. Overnight stay at a guesthouse.</p>\r\n<p><strong>Day 09- Trek to Muktinath (7hrs) (3800m)</strong><br />On this day, the trekkers will cross Thorong Phedi and head towards the popular Hindu shrine of Muktinath which is located at an altitude of 3,800 meters. Muktinath is a sacred place for both Hindu and Buddhist pilgrims. Thousands of Hindu pilgrims visit the holy temple and worship the goddess every year. The walking can be difficult on the day, but you will enjoy the adventure and also the natural beauty of the region. Overnight stay at a guesthouse.</p>', 1, 'images/package/26-05-2018-1527311599Muktinath1.jpg', 'images/package/26-05-2018-1527311599Muktinath2.jpg', NULL, 35, 'abctour', '', 'Muktinath ,Manang, Religious', 8),
(13, 0, 'Chitlang Trek', 'Chitlang ', 'Kathmandu', 'Chitlang  Organic Village Resort is organic village the way of living life in organic style. It is located at Makawanpur district Chitlang VDC. CHITLANG is about 22 KM from Kathmandu in the South West direction.It offers an amazing experience with the combination of natural beauty and cultural heritage. Famous as the gate way of motor cars carried on the back of people. Chitlang offers visitors with an opportunity of village home stay where you can interact and get insight of the rural life in N', '3000', '2', '', '', 'Hiking', '', 1, 'images/package/26-05-2018-1527312108Chitlang1.jpg', 'images/package/26-05-2018-1527312108Chitlang2.jpg', NULL, 37, 'anisha', '', 'Trekking ,Kulekhani ,Chitlang', 8),
(14, 0, 'Nagarkot Trip', 'Nagarkot', 'Bhaktapur', 'Nagarkot has a reputation as the top spot for enjoying Himalayan views from the comfort of your hotel balcony. Just 32km from Kathmandu, the village is packed with hotels lining a ridge, affording one of the broadest possible views of the Himalaya, with eight ranges visible (Annapurna, Manaslu, Ganesh Himal, Langtang, Jugal, Rolwaling, Everest and Numbur). However, timing is everything, as the mountains are notorious for disappearing behind cloudy skies. The', '3000', '2', '', '', 'Site', '', 1, 'images/package/26-05-2018-1527312777nagarkot1.jpg', 'images/package/26-05-2018-1527312777nagarkot2.jpg', NULL, 9, 'anisha', '', '', 8),
(15, 0, 'Devghat Darsan Tour', 'chitwan', 'Kathmandu', 'Devghat is located at the border of the three districts of Tanahu, Chitwan and Nawalparasi. It is the confluence of three main holy rivers: Kali Gandaki, Seti Gandaki and Trishuli. Hind religion followers consider this point sacred and considers as a pilgrimage site by the Hindus. The very first day of the Nepali month of Magh, hundreds of people from  Nepal and India visit this place to immerse themselves in the river to celebrate the Hindu festival of Magh Sankranti. ', '5000', '5', '', '', 'Religious', '', 0, 'images/package/26-05-2018-1527313076devghat3.jpg', 'images/package/26-05-2018-1527313076devghat3.jpg', NULL, 37, 'anisha', '', 'Devghat, Chitwan , Religious', 0),
(16, 0, 'MArdi', 'adsad', 'Pokhara', '', '1000', '2', '', '', 'hiking', '', 1, 'images/package/10-06-2018-1528654422t5.jpg', '', NULL, 35, 'abctour', 'dasd', '', 8),
(17, 0, 'TEst', 'test', 'Pokhara', '<p>adasdasdsd</p>', '10000', '5', '', '', 'tour', '<p>asdasd</p>', 1, 'images/package/19-06-2018-152940569109-06-2018-152855184326-05-2018-1527309970kalinchowk1.jpg', '', NULL, 35, 'abctour', '', '', 8);

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
(14, 'Ruffle Shirt', 'Jacket', 'Male', 'Esprit ', 4999, 'images/ecommerce/12-06-2018-1528787525product-01.jpg', 'images/ecommerce/21-06-2018-15295704671.jpg', 'Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.', NULL, 1, 'xl', '4', 'Grey', '8'),
(15, 'Herschel supply', 'Jacket', 'Male', 'Herschel ', 40000, 'images/ecommerce/12-06-2018-1528787601product-02.jpg', '', 'Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.', NULL, 1, 'xl', '3', 'Green', '8'),
(16, 'Only Check Trouser', 'Pant', 'Female', 'Nike', 2000, 'images/ecommerce/12-06-2018-1528787680product-03.jpg', '', 'Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.', NULL, 1, 'xxl', '0', 'Pink', '8'),
(17, 'Classic Trench Coat', 'Jacket', 'Female', 'Nike', 666, 'images/ecommerce/12-06-2018-1528787748product-04.jpg', '', 'Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.', NULL, 0, 'xl', '8', 'Blue', '8'),
(18, 'Front Pocket Jumper', 'Bag', 'Unisex', 'Addidas', 4000, 'images/ecommerce/12-06-2018-1528787953product-05.jpg', '', 'Nulla eget sem vitae eros pharetra viverra. Nam vitae luctus ligula. Mauris consequat ornare feugiat.', NULL, 1, 'l', '8', 'Green', '9'),
(19, 'asdsa', 'Bag', 'Male', 'asdad', 52, '', '', '<p>asd</p>', NULL, 1, '39', '10', 'red', '1');

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
(32, 21, 14, '2018/06/25', '12:41:29', 4999, '1', '4999', 4999, 0, 1),
(33, 21, 15, '2018/06/25', '12:42:01', 40000, '1', '40000', 44000, 0, 2),
(34, 21, 16, '2018/06/25', '12:42:01', 2000, '2', '4000', 44000, 0, 2),
(35, 21, 18, '2018/06/25', '12:44:06', 4000, '1', '4000', 4000, 0, 3),
(36, 21, 16, '2018/06/25', '13:26:29', 2000, '1', '2000', 2000, 2, 4),
(37, 15, 15, '2018/06/25', '13:51:00', 40000, '2', '80000', 80000, 2, 5),
(38, 15, 19, '2018/06/25', '14:44:10', 52, '2', '104', 104, 2, 6),
(39, 15, 16, '2018/06/25', '15:12:29', 2000, '1', '2000', 2000, 2, 7);

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
(11, 42, '', 101, 'double bed room', '', 1, 0, 7000, 'images/hotels/room/sroom1.jpg', NULL, NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 0, 'sjonchhe', 0),
(17, 43, '', 2, 'view side room', '', 1, 0, 3061, 'images/hotels/room/sunnyroom1.jpg', NULL, NULL, 0, 1, 1, 1, 1, 1, 2, 1, 1, 1, 1, 0, 'sjonchhe', 0),
(18, 43, '', 3, 'couple room', '', 3, 0, 3500, 'images/hotels/room/sunnyroom3.jpg', NULL, NULL, 0, 1, 1, 1, 1, 0, 2, 1, 1, 1, 1, 0, '', 0),
(19, 44, '', 21, 'family bedroom', '', 3, 0, 13, 'images/hotels/room/LHH.jpg', NULL, NULL, 1, 1, 1, 1, 1, 1, 2, 1, 1, 1, 1, 0, '', 0),
(20, 44, '', 0, 'double bed bedroom', '', 3, 0, 13, 'images/hotels/room/lumbini_hokke_hotelroom1.jpg', NULL, NULL, 0, 1, 1, 1, 1, 1, 2, 1, 1, 0, 1, 0, '', 0),
(26, 57, '', 101, 'Single Bedroom Deluxe', '', 2, 0, 2500, 'images/hotels/room/05-06-2018-1528216309room-5.jpg', NULL, NULL, 0, 1, 1, 1, 1, 1, 2, 0, 0, 0, 1, 22, 'ramshrestha', 15),
(27, 59, '', 101, 'sadasd', '', 1, 0, 1000, 'images/hotels/room/23-06-2018-1529777144room-12.jpg', NULL, NULL, 1, 0, 0, 0, 0, 0, 1, 0, 0, 0, 1, 23, 'harishrestha', 5),
(28, 59, '', 102, 'Double Bed', '', 2, 0, 2000, 'images/hotels/room/23-06-2018-1529778390sroom1.jpg', NULL, NULL, 1, 0, 0, 1, 0, 0, 1, 1, 0, 0, 1, 23, 'harishrestha', 8);

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
(2, 1, 'sjonchhe ', 'Pokhara', 'Lake Side Exploring', 'uh', 'juhaidsaudsbdhi', 'images/todo/26-05-2018-1527305300pa5.jpg', '', 'ikh', '', '', 'h', '1', 4),
(3, 1, 'sjonchhe ', 'Chitlang', 'Visiting Goat Cheese Factory', 'sdfg', 'sdfg', 'images/todo/26-05-2018-1527305384cheese1.jpg', 'images/todo/25-05-2018-152723454135086064.jpg', 'f', '', '', 'f', '1', 0),
(4, 1, 'sjonchhe ', 'Kathmandu', 'Trying out Newari Cuisine', 'Kirtipur', 'Sasa: is Synonymous with typical Newari Food Culture. You all may know that we have in-lawsâ€™ house (Sasa:) after amarriage. Wifeâ€™s parental house is in-lawsâ€™ house for the husband. We can take in-law relationship as a strong and intimate of marriage. There is a system of offering respect and hospitality to the son-in-law as per caste/ethnic tradition when he goes to the in-lawsâ€™ house. if the son-in-law is asked on the way, as to where he is going he replies with pride that he is going to the in-lawsâ€™ house. On the way back, people also tease him accordingly. So, the meaning of in-lawsâ€™s house is not only the wifeâ€™s parental house, it is a symbol of strong and intimate relationship built between two families via marriage. In-lawsâ€™ house is an excellent example of high level respect and hospitality.', 'images/todo/04-06-2018-1528129575newari-food.jpg', '', '', '27.678894689275573', '85.27278335063772', '', '1', 1),
(6, 1, 'sjonchhe ', 'Kathmandu', 'Matka Tea at Basantapur', 'Basantapur, Kathmandu', '', 'images/todo/04-06-2018-1528130181c8637883b64d846c843ccbb72798a321e2215d9d.jpg', 'images/todo/04-06-2018-1528130181tea1.jpg', '', '27.70388916851667', '85.30742676227419', '', '1', 10),
(7, 1, 'sjonchhe ', 'Lalitpur', 'Bhuteko Anda Chiura at Bhauju ko Bhatii', 'Gabahal, Lalitpur', '', 'images/todo/04-06-2018-15281302699b5941808a997f4de62ad132ae96610ecb293604.jpg', '', '', '27.672728314649483', '85.32540829151003', '', '1', 5);

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
(14, 'rama', 'ram', 'shrestha', 'ason', 965618, 'asdasda@asdsa.com', '', 'male', 'apple', 'images/user/product-min-01.jpg', '', '2018/05/31', 1),
(15, 'sjonchhe', 'Sandesh', 'Jonchhe', 'Maharajgunj', 2147483647, 'sandeshjon@gmail.com', '1996-03-18', 'male', 'apple', 'images/user/11.jpg', 'Always code as if the guy who ends up maintaining your code will be violent psychopath who knows where you live', '2018/06/01', 1),
(20, 'anisha123', 'anisha', 'shrestha', 'kathmandu', 2147483647, 'aa@gmail.com', '2018-06-03', 'female', 'anisha123', 'images/default-avatar.png', '', '2018/06/03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vid` int(11) NOT NULL,
  `vtitle` varchar(100) DEFAULT NULL,
  `vtype` varchar(100) NOT NULL,
  `vdescription` varchar(100) DEFAULT NULL,
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
(18, 'Toyota Hiace', '4wd', '<p>this is toyota hiace</p>', 12, 20000, '2018/06/21', 1, 'hiace', 'images/vehicle/21-06-2018-1529580520tata-safari.jpg', 'images/vehicle/21-06-2018-1529580520toyota-hiace.jpg', 10),
(19, 'sagha yatayat', 'bike', '<p>sagha yatayatri</p>', 26, 5000, '2018/06/21', 1, 'bus', 'images/vehicle/21-06-2018-1529581211Screenshot (1).png', 'images/vehicle/21-06-2018-1529581211Screenshot (2).png', 10),
(20, 'asdasd', 'micro', '', 0, 0, '2018/06/24', 1, 'asdasd', '', '', 1),
(21, 'Harley', 'bike', '<p>adaasd</p>', 2, 2500, '2018-06-24 21:32:14', 1, '', 'images/vehicle/24-06-2018-1529868734Screenshot (19).png', '', 1);

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
  `cphoto` varchar(2000) NOT NULL,
  `cpassword` varchar(20) NOT NULL,
  `cremark` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vendorinfo`
--

INSERT INTO `vendorinfo` (`id`, `cname`, `caddress`, `cemail`, `cphone`, `ctype`, `cdescription`, `cphoto`, `cpassword`, `cremark`) VALUES
(11, 'blab', 'kapan', 'basanta@gmail.com', '12313', 'package', '<p>hahahaha</p>', 'images/vendor/Screenshot (2).png', 'password', '<p>password</p>'),
(12, 'Stlawrence ', 'Chabahil', 'sadas@asdsa.com', '213213123', 'Ecommerce', '', 'images/vendor/Screenshot (7).png', '', '');

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
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`fid`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `book_hotel`
--
ALTER TABLE `book_hotel`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `book_package`
--
ALTER TABLE `book_package`
  MODIFY `pbid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `fid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `lid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `vendorinfo`
--
ALTER TABLE `vendorinfo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `blog_ibfk_1` FOREIGN KEY (`cid`) REFERENCES `user` (`cid`);

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
-- Constraints for table `product_order`
--
ALTER TABLE `product_order`
  ADD CONSTRAINT `product_order_ibfk_1` FOREIGN KEY (`prid`) REFERENCES `product` (`prid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_ibfk_1` FOREIGN KEY (`hid`) REFERENCES `hotel` (`hid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `vehicle_ibfk_1` FOREIGN KEY (`id`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
