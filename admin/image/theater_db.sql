-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2022 at 05:49 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theater_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(10) NOT NULL,
  `AdminName` varchar(120) DEFAULT NULL,
  `UserName` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `Security_Code` int(55) NOT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL,
  `AdminRegdate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `AdminName`, `UserName`, `MobileNumber`, `Security_Code`, `Email`, `Password`, `AdminRegdate`) VALUES
(1, 'Administrator', 'admin', 7854445410, 1100, 'admin@gmail.com', 'd00f5d5217896fb7fd601412cb890830', '2021-01-05 05:38:23');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `msg` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `msg`) VALUES
(1, 'Jasmin', 'jasminjoseph1997@gmail.com', 'good'),
(2, 'Jasmin', 'jasminjoseph1997@gmail.com', 'eflewoiweyoklheoiy fjkewf wefuhewf'),
(3, 'Jasmin', 'jasminjoseph1997@gmail.com', 'jhgfgd'),
(4, 'Neena', '123@gmail.com', 'klll');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `u_password` varchar(30) DEFAULT NULL,
  `user_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `u_password`, `user_status`) VALUES
(3, 'admin@admin', 'admin123', 'admin'),
(4, 'sasi', 'sasi123', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `newsletterlog`
--

CREATE TABLE `newsletterlog` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(52) DEFAULT NULL,
  `subject` varchar(100) DEFAULT NULL,
  `news` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) DEFAULT NULL,
  `title` varchar(5) DEFAULT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `troom` varchar(30) DEFAULT NULL,
  `tbed` varchar(30) DEFAULT NULL,
  `nroom` int(11) DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `cout` date DEFAULT NULL,
  `ttot` double(8,2) DEFAULT NULL,
  `fintot` double(8,2) DEFAULT NULL,
  `mepr` double(8,2) DEFAULT NULL,
  `meal` varchar(30) DEFAULT NULL,
  `btot` double(8,2) DEFAULT NULL,
  `noofdays` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  `bedding` varchar(10) DEFAULT NULL,
  `place` varchar(10) DEFAULT NULL,
  `cusid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `type`, `bedding`, `place`, `cusid`) VALUES
(1, 'Superior Room', 'Single', 'Free', NULL),
(2, 'Superior Room', 'Double', 'Free', NULL),
(3, 'Superior Room', 'Triple', 'Free', NULL),
(4, 'Single Room', 'Quad', 'Free', NULL),
(5, 'Superior Room', 'Quad', 'Free', NULL),
(6, 'Deluxe Room', 'Single', 'Free', NULL),
(7, 'Deluxe Room', 'Double', 'Free', NULL),
(8, 'Deluxe Room', 'Triple', 'Free', NULL),
(9, 'Deluxe Room', 'Quad', 'Free', NULL),
(10, 'Guest House', 'Single', 'Free', NULL),
(11, 'Guest House', 'Double', 'Free', NULL),
(12, 'Guest House', 'Quad', 'Free', NULL),
(13, 'Single Room', 'Single', 'Free', NULL),
(14, 'Single Room', 'Double', 'Free', NULL),
(15, 'Single Room', 'Triple', 'Free', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roombook`
--

CREATE TABLE `roombook` (
  `id` int(10) UNSIGNED NOT NULL,
  `Troom` varchar(20) DEFAULT NULL,
  `Rno` varchar(10) DEFAULT NULL,
  `license_no` varchar(10) DEFAULT NULL,
  `Slot` varchar(15) DEFAULT NULL,
  `Amount` int(50) NOT NULL,
  `Nation` varchar(11) NOT NULL,
  `Cout` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roombook`
--

INSERT INTO `roombook` (`id`, `Troom`, `Rno`, `license_no`, `Slot`, `Amount`, `Nation`, `Cout`) VALUES
(24, 'CAR', '45632', 'FG369', '9', 30, 'Germany', '2021-12-16'),
(25, 'CAR', '45632', 'FG369', '9', 30, 'Germany', '2021-12-16'),
(26, 'CAR', '45632', 'FG369', '9', 30, 'Germany', '2021-12-16'),
(27, 'CAR', '45632', 'FG369', '9', 30, 'Germany', '2021-12-16'),
(28, 'CAR', '32654', 'sdsa2', '', 30, 'INDIA', '2021-12-16'),
(29, 'CAR', 'KL122', '964KJ', '18', 30, 'INDIA', '2021-12-22'),
(30, 'CAR', 'KL6589', 'KH452', '19', 30, 'INDIA', '2021-12-14'),
(31, 'CAR', 'khghf', '326657', '18', 30, '', '2022-02-06'),
(32, 'CAR', 'hajhjh', '45775', '19', 30, '', '2022-02-22'),
(33, 'CAR', 'hajhjh', '45775', '19', 30, '', '2022-02-22'),
(34, 'TWO WHEELER', 'jhgds', '6553', '21', 30, '', '2022-02-02'),
(35, 'AUTO', 'ygygyus', '32656', '18', 30, '', '2022-02-15'),
(36, 'AUTO', 'ygygyus', '32656', '18', 30, '', '2022-02-15'),
(37, 'AUTO', 'jhj', '254', '19', 30, '', '2022-02-18'),
(38, 'CAR', 'KL024', '964KJ', '19', 30, '', '2022-02-23'),
(39, 'AUTO', 'km,hmj', '2555', '18', 30, '', '2022-03-04');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_email` varchar(55) NOT NULL,
  `c_website` varchar(55) NOT NULL,
  `c_address` varchar(255) NOT NULL,
  `last_update` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `c_name`, `c_email`, `c_website`, `c_address`, `last_update`) VALUES
(1, 'Demo Company', 'vparksystem@company.com', 'codeastro.com', '8169 Geigeer St NW', '2021-06-08 20:48:52');

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE `slots` (
  `slot_id` int(11) NOT NULL,
  `slot_name` varchar(200) NOT NULL,
  `isvacant` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`slot_id`, `slot_name`, `isvacant`) VALUES
(18, 'A', 1),
(19, 'B', 1),
(20, 'C', 1),
(21, 'D', 1),
(22, 'E', 1),
(24, 'F', 0);

-- --------------------------------------------------------

--
-- Table structure for table `theater`
--

CREATE TABLE `theater` (
  `vechile_id` int(10) NOT NULL,
  `m_name` varchar(20) NOT NULL,
  `license` varchar(20) NOT NULL,
  `phno` int(10) NOT NULL,
  `email` varchar(10) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theater`
--

INSERT INTO `theater` (`vechile_id`, `m_name`, `license`, `phno`, `email`, `status`) VALUES
(0, 'jas', 'RESUME.pdf', 698745325, 'jasminjose', 1),
(0, 'DMC', 'pcr.pdf', 2147483647, 'ghf@gmail.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `u_password` varchar(50) NOT NULL,
  `create_datetime` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `u_password`, `create_datetime`) VALUES
(27, 'linsa', 'linsa@123', '9605409403', '123', '2021-12-06 05:08:44.000000'),
(28, '', 'sujithl@gmail.com', '9605409403', '1234', '2021-12-06 07:23:18.000000'),
(31, 'antu', 'antu@gmail.com', '9605409403', '123', '2021-12-06 17:18:12.000000'),
(32, 'admin', '', '', '123', '0000-00-00 00:00:00.000000'),
(35, 'linsa', 'athira@gmail.com', '9605409403', '123', '2021-12-07 07:58:59.000000'),
(36, 'Ancy', 'ancy@gamil.com', '8659754123', '963', '2021-12-07 08:00:02.000000'),
(37, 'paapu', 'papu@gmail.com', '8521469632', 'Paapu123', '2021-12-14 18:18:42.000000'),
(38, 'anoop', 'jasminjoseph1997@gmail.com', '9605409403', '2d7eb1d7cdcf1b408a136123a1701838', '2021-12-14 18:32:11.000000'),
(39, 'blessy', 'blesy@gmail.com', '8564792156', ' blessy123 ', '2021-12-14 18:40:15.000000'),
(40, 'anu', 'anu@gmail.com', '7894561237', ' anu123 ', '2021-12-14 18:42:17.000000'),
(41, 'asha', 'asha@gmail.com', '7894562317', 'asha123', '2021-12-14 18:44:33.000000'),
(42, 'dona', 'dona@gmail.com', '9645254563', 'Dona123', '2021-12-15 07:33:40.000000'),
(43, 'alfy', 'alfy@gmail.com', '9645253698', 'Alfy*1234', '2022-02-16 05:26:29.000000'),
(44, 'Antu', 'antu@gmail.com', '9685742351', 'Antu@123', '2022-02-16 06:37:43.000000'),
(45, 'lince', 'lince@gmail.com', '9632587415', 'Lince@123', '2022-02-24 04:42:35.000000');

-- --------------------------------------------------------

--
-- Table structure for table `vcategory`
--

CREATE TABLE `vcategory` (
  `ID` int(10) NOT NULL,
  `VehicleCat` varchar(120) DEFAULT NULL,
  `shortDescription` varchar(50) NOT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vcategory`
--

INSERT INTO `vcategory` (`ID`, `VehicleCat`, `shortDescription`, `CreationDate`) VALUES
(1, 'Four Wheeler', 'Demo 4W', '2019-07-05 11:06:50'),
(2, 'Two Wheeler', 'Demo 2W', '2019-07-05 11:07:09'),
(6, 'Three Wheeler', 'MTCL 2W', '2021-03-07 16:41:57');

-- --------------------------------------------------------

--
-- Table structure for table `vechiles`
--

CREATE TABLE `vechiles` (
  `vechile_id` int(20) NOT NULL,
  `m_name` varchar(30) NOT NULL,
  `p_image` varchar(50) NOT NULL,
  `two_w_price` double NOT NULL,
  `auto_w_price` double NOT NULL,
  `car_w_price` double NOT NULL,
  `bus_w_price` double NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vechiles`
--

INSERT INTO `vechiles` (`vechile_id`, `m_name`, `p_image`, `two_w_price`, `auto_w_price`, `car_w_price`, `bus_w_price`, `status`) VALUES
(87, 'MAJESTIC', 'img4.jpg', 10, 25, 30, 40, 0),
(88, 'SN', 'img2.jpg', 15, 25, 35, 55, 0),
(90, 'DMC', 'img5.jpg', 10, 15, 25, 50, 0),
(93, 'CHICAGO', 'img1.jpg', 15, 20, 25, 50, 0),
(97, 'REGAL', 'img6.jpg', 10, 25, 30, 50, 0),
(99, 'CINIPLUS', 'img1.jpg', 10, 15, 25, 60, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_info`
--

CREATE TABLE `vehicle_info` (
  `ID` int(10) NOT NULL,
  `ParkingNumber` varchar(120) DEFAULT NULL,
  `VehicleCategory` varchar(120) NOT NULL,
  `VehicleCompanyname` varchar(120) DEFAULT NULL,
  `RegistrationNumber` varchar(120) DEFAULT NULL,
  `OwnerName` varchar(120) DEFAULT NULL,
  `OwnerContactNumber` bigint(10) DEFAULT NULL,
  `InTime` timestamp NULL DEFAULT current_timestamp(),
  `OutTime` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `ParkingCharge` varchar(120) NOT NULL,
  `Remark` mediumtext NOT NULL,
  `Status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_info`
--

INSERT INTO `vehicle_info` (`ID`, `ParkingNumber`, `VehicleCategory`, `VehicleCompanyname`, `RegistrationNumber`, `OwnerName`, `OwnerContactNumber`, `InTime`, `OutTime`, `ParkingCharge`, `Remark`, `Status`) VALUES
(1, '96069', 'Four Wheeler', 'Hyundai', 'GGZ-1155', 'Jamie Macon', 8956232528, '2021-03-09 05:58:38', '2021-03-09 10:15:43', '34', 'NA', 'Out'),
(2, '52796', 'Two Wheeler', 'KTM', 'GTM-1069', 'Dan Wilson', 8989898989, '2021-03-09 08:58:38', '2021-03-09 14:16:26', '20', 'NA', 'Out'),
(3, '65023', 'Two Wheeler', 'Yamaha', 'JFF-7888', 'Lynn Roberts\n', 7845123697, '2021-03-09 08:58:38', '2021-03-09 12:16:31', '20', 'Vehicle Out', 'Out'),
(4, '90880', 'Two Wheeler', 'Suzuki', 'PLO-8507', 'Charles Mathew', 2132654447, '2021-03-09 08:58:38', '2021-03-09 13:58:38', '20', 'Vehicle Out', 'Out'),
(5, '09894', 'Two Wheeler', 'Piaggio', 'DLE-7701', 'Theresa Hay\n', 4654654654, '2021-03-09 08:58:38', '2021-03-09 14:58:38', '15', 'none', 'Out'),
(6, '78915', 'Two Wheeler', 'Aprilia', 'GZG-7896', 'Susie Eller', 7978999879, '2021-03-09 08:58:38', NULL, '', '', ''),
(7, '25207', 'Two Wheeler', 'Honda', 'LDC-7019', 'Shannon Pinson\n', 1234567890, '2021-03-09 11:03:05', '2021-03-09 11:58:38', '5', 'none', 'Out'),
(8, '58836', 'Two Wheeler', 'Yamaha', 'FYS-6969', 'Mark Paull', 1234567890, '2021-03-09 11:32:02', '2021-03-09 12:58:38', '5', 'Vehicle Out', 'Out'),
(9, '52207', 'Four Wheeler', 'Ford ', 'CAS-7850', 'Bernice Willilams\n', 7411112000, '2021-03-07 10:42:52', '2021-03-09 11:58:38', '7', 'none', 'Out'),
(10, '47648', 'Four Wheeler', 'Tesla', 'CST-6907', 'Myra Warnke\n', 8541112500, '2021-03-07 14:54:03', NULL, '', '', ''),
(11, '03289', 'Four Wheeler', 'Volkswagen', 'STT-7002', 'Colin Greenwood', 2574442560, '2021-03-08 13:50:15', NULL, '', '', ''),
(12, '62450', 'Two Wheeler', 'KTM', 'ILS-2580', 'Bruno Denn', 1254447850, '2021-03-08 09:34:55', '2021-03-08 15:58:38', '30', 'none', 'Out'),
(13, '28913', 'Four Wheeler', 'Hyundai', 'SSO-8800', 'Tanya Chilton\n', 2570005640, '2021-03-09 13:09:16', NULL, '', '', ''),
(14, '63879', 'Four Wheeler', 'Hyundai', 'GEP-7805', 'Matthew  Foust\n', 6667869500, '2021-07-16 15:28:32', '2021-07-16 17:17:19', '5', 'none', 'Out'),
(15, '37066', 'Four Wheeler', 'Tesla', 'QWE-9602', 'Paul Nicholls', 7412589658, '2021-07-17 16:18:01', '2021-07-17 16:49:40', '5', 'none', 'Out'),
(16, '19803', 'Four Wheeler', 'Renault', 'ABE-3470', 'Alyse Conn', 7896547850, '2021-07-17 16:59:26', '2021-07-17 17:20:22', '2', 'none', 'Out'),
(17, '25088', 'Four Wheeler', 'Volkswagen', 'TRS-8027', 'Bonnie Jackson', 7014741470, '2021-07-17 17:40:22', NULL, '', '', ''),
(18, '37496', 'Four Wheeler', 'Chevrolet', 'VNT-9135', 'Larry Clark', 7890240001, '2021-07-17 17:43:16', NULL, '', '', ''),
(19, '99316', 'Four Wheeler', 'MG', 'PIJ-8802', 'Jessica Garner', 7012560025, '2021-07-17 17:44:07', '2021-07-17 17:45:05', '3', 'none.', 'Out'),
(20, '59268', 'Two Wheeler', 'Kawasaki', 'LLL-8987', 'James', 7014569980, '2021-07-17 17:46:37', NULL, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombook`
--
ALTER TABLE `roombook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
  ADD PRIMARY KEY (`slot_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vcategory`
--
ALTER TABLE `vcategory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `vechiles`
--
ALTER TABLE `vechiles`
  ADD PRIMARY KEY (`vechile_id`);

--
-- Indexes for table `vehicle_info`
--
ALTER TABLE `vehicle_info`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roombook`
--
ALTER TABLE `roombook`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slots`
--
ALTER TABLE `slots`
  MODIFY `slot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `vcategory`
--
ALTER TABLE `vcategory`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vechiles`
--
ALTER TABLE `vechiles`
  MODIFY `vechile_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `vehicle_info`
--
ALTER TABLE `vehicle_info`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
