-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2019 at 04:27 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mr_guide`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(12) NOT NULL,
  `admin_name` varchar(40) DEFAULT NULL,
  `admin_email` varchar(40) NOT NULL,
  `admin_password` varchar(40) NOT NULL,
  `user_access_user_access_id` int(12) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hotel_id` int(12) NOT NULL,
  `hotel_name` varchar(40) NOT NULL,
  `pic_1` varchar(200) DEFAULT NULL,
  `pic_2` varchar(200) DEFAULT NULL,
  `pic_3` varchar(200) DEFAULT NULL,
  `pic_4` varchar(200) DEFAULT NULL,
  `pic_5` varchar(200) DEFAULT NULL,
  `manager_manager_id` int(11) NOT NULL,
  `hotel_catagory_id` int(11) NOT NULL,
  `hotel_address` varchar(100) DEFAULT NULL,
  `hotel_description` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotel_id`, `hotel_name`, `pic_1`, `pic_2`, `pic_3`, `pic_4`, `pic_5`, `manager_manager_id`, `hotel_catagory_id`, `hotel_address`, `hotel_description`) VALUES
(86, 'Grand Sultan', 'best_western_hotel_hungaria_17icon.jpg', 'home-inset-first-new-5b3511c83755b.jpg', 'index.jpg', '97448734.jpg', NULL, 52, 4, 'Srimangla', 'Nice Environment'),
(87, 'Sonar Tori', '', '', 'a-skull-620x451.jpg', '', NULL, 53, 2, 'Sylhet', 'Nice'),
(88, 's', '', 'best_western_hotel_hungaria_17icon.jpg', '', '', NULL, 54, 1, 'vv', 's');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_catagory`
--

CREATE TABLE `hotel_catagory` (
  `hotel_catagory_id` int(11) NOT NULL,
  `hotel_catagory_star` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel_catagory`
--

INSERT INTO `hotel_catagory` (`hotel_catagory_id`, `hotel_catagory_star`) VALUES
(1, '1 Star'),
(2, '2 Star'),
(3, '3 Star'),
(4, '4 Star'),
(5, '5 Star'),
(6, '6 Star'),
(7, '7 Star');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `manager_id` int(11) NOT NULL,
  `manager_name` varchar(40) NOT NULL,
  `manager_nid` varchar(40) NOT NULL,
  `manager_email` varchar(40) NOT NULL,
  `manager_password` varchar(40) NOT NULL,
  `manager_phone` varchar(40) DEFAULT NULL,
  `manager_address` varchar(40) NOT NULL,
  `manager_gender` char(8) NOT NULL,
  `user_access_user_access_id` int(12) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`manager_id`, `manager_name`, `manager_nid`, `manager_email`, `manager_password`, `manager_phone`, `manager_address`, `manager_gender`, `user_access_user_access_id`) VALUES
(52, 'X', '1445', 'x@gmail.com', '111111', '01798435813', 'Sylhet', 'Male', 2),
(53, 'y', '123456789', 'y@gmail.com', '111111', '01798435813', 'Sylhet', 'Male', 2),
(54, 'a', 'ww', 'bq@gmail.com', '111111', '01798435813', 'dd', 'Male', 2);

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rating_id` int(12) NOT NULL,
  `ratings` int(12) NOT NULL,
  `hotel_hotel_id` int(12) NOT NULL,
  `visitor_visitor_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `region_id` int(12) NOT NULL,
  `region_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`region_id`, `region_name`) VALUES
(-1, 'Not Set'),
(1, 'Dhaka'),
(2, 'Sylhet'),
(3, 'Chittagong'),
(4, 'Rangpur'),
(5, 'Rajshahi'),
(6, 'Khulna'),
(7, 'Barisal');

-- --------------------------------------------------------

--
-- Table structure for table `regions_to_hotels`
--

CREATE TABLE `regions_to_hotels` (
  `region_region_id` int(12) NOT NULL,
  `hotel_hotel_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regions_to_hotels`
--

INSERT INTO `regions_to_hotels` (`region_region_id`, `hotel_hotel_id`) VALUES
(1, 88),
(2, 86),
(2, 87);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservation_id` int(12) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `room_type_room_type_id` int(12) NOT NULL,
  `total_payment` decimal(12,2) DEFAULT NULL,
  `payment_status` varchar(40) DEFAULT NULL,
  `visitor_visitor_id` int(12) NOT NULL,
  `hotel_hotel_id` int(12) NOT NULL,
  `room_room_id` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservation_id`, `check_in`, `check_out`, `room_type_room_type_id`, `total_payment`, `payment_status`, `visitor_visitor_id`, `hotel_hotel_id`, `room_room_id`) VALUES
(92, '2019-08-20', '2019-08-22', 422, '24000.00', 'Done', 96, 86, 131),
(93, '2019-08-06', '2019-08-08', 423, '48000.00', 'Done', 96, 86, 132),
(94, '2019-08-20', '2019-08-23', 422, '32000.00', 'Done', 96, 86, 131),
(95, '2019-08-21', '2019-08-30', 422, '80000.00', 'Not Done', 96, 86, 135),
(96, '2019-08-20', '2019-08-29', 422, '80000.00', 'Done', 96, 86, 135);

-- --------------------------------------------------------

--
-- Table structure for table `reservation_history`
--

CREATE TABLE `reservation_history` (
  `reservation_history_id` int(12) NOT NULL,
  `trans_id` varchar(12) DEFAULT NULL,
  `reservation_id` varchar(40) DEFAULT NULL,
  `manager_id` int(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservation_history`
--

INSERT INTO `reservation_history` (`reservation_history_id`, `trans_id`, `reservation_id`, `manager_id`) VALUES
(22, '12345', '94', 52),
(23, '123456', '96', 52);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(12) NOT NULL,
  `room_no` int(12) NOT NULL,
  `room_availablity` varchar(40) NOT NULL,
  `room_photo` varchar(200) NOT NULL,
  `room_description` varchar(95) NOT NULL,
  `room_type_room_type_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `room_no`, `room_availablity`, `room_photo`, `room_description`, `room_type_room_type_id`) VALUES
(131, 1, 'No', 'index.jpg', 'Nice Room', 422),
(132, 2, 'No', '64025470.jpg', 'Nice Room', 423),
(133, 15, 'Yes', 'HOME_6966.jpg', 'double bed room', 423),
(134, 20, 'Yes', 'HOME_6966.jpg', 'delux room', 424),
(135, 2, 'No', '97448734.jpg', 'dd', 422);

-- --------------------------------------------------------

--
-- Table structure for table `room_type`
--

CREATE TABLE `room_type` (
  `room_type_id` int(12) NOT NULL,
  `room_type_catagory` varchar(40) NOT NULL,
  `room_type_price` decimal(12,2) NOT NULL,
  `hotel_hotel_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room_type`
--

INSERT INTO `room_type` (`room_type_id`, `room_type_catagory`, `room_type_price`, `hotel_hotel_id`) VALUES
(422, 'Single Bed Room', '8000.00', 86),
(423, 'Double Bed Room', '16000.00', 86),
(424, 'Delux Room', '30000.00', 86);

-- --------------------------------------------------------

--
-- Table structure for table `user_access`
--

CREATE TABLE `user_access` (
  `user_access_id` int(12) NOT NULL,
  `user_access_catagory` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access`
--

INSERT INTO `user_access` (`user_access_id`, `user_access_catagory`) VALUES
(1, 'Admin'),
(2, 'Manager'),
(3, 'Visitors');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `visitor_id` int(12) NOT NULL,
  `visitor_name` varchar(40) NOT NULL,
  `visitor_email` varchar(40) NOT NULL,
  `visitor_password` varchar(40) NOT NULL,
  `visitor_phone` varchar(40) DEFAULT NULL,
  `user_access_user_access_id` int(12) NOT NULL DEFAULT 3,
  `visitor_gender` char(8) DEFAULT NULL,
  `visitor_address` varchar(100) NOT NULL,
  `visitor_dob` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`visitor_id`, `visitor_name`, `visitor_email`, `visitor_password`, `visitor_phone`, `user_access_user_access_id`, `visitor_gender`, `visitor_address`, `visitor_dob`) VALUES
(96, 'Kishor', 'a@gmail.com', '111111', '01724687819', 3, 'Male', 'Dhaka', '2019-04-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `admin_user_access_fk` (`user_access_user_access_id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotel_id`),
  ADD KEY `hotel_hotel_catagory_fk` (`hotel_catagory_id`),
  ADD KEY `hotel_manager_fk` (`manager_manager_id`);

--
-- Indexes for table `hotel_catagory`
--
ALTER TABLE `hotel_catagory`
  ADD PRIMARY KEY (`hotel_catagory_id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`manager_id`),
  ADD KEY `manager_user_access_fk` (`user_access_user_access_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rating_id`),
  ADD KEY `rating_hotel_fk` (`hotel_hotel_id`),
  ADD KEY `rating_visitor_fk` (`visitor_visitor_id`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`region_id`);

--
-- Indexes for table `regions_to_hotels`
--
ALTER TABLE `regions_to_hotels`
  ADD PRIMARY KEY (`region_region_id`,`hotel_hotel_id`),
  ADD KEY `regions_to_hotels_hotel_fk` (`hotel_hotel_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `reservation_hotel_fk` (`hotel_hotel_id`),
  ADD KEY `reservation_room_type_fk` (`room_type_room_type_id`),
  ADD KEY `reservation_visitor_fk` (`visitor_visitor_id`),
  ADD KEY `room_roomid` (`room_room_id`);

--
-- Indexes for table `reservation_history`
--
ALTER TABLE `reservation_history`
  ADD PRIMARY KEY (`reservation_history_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `room_room_type_fk` (`room_type_room_type_id`);

--
-- Indexes for table `room_type`
--
ALTER TABLE `room_type`
  ADD PRIMARY KEY (`room_type_id`),
  ADD KEY `room_type_hotel_fk` (`hotel_hotel_id`);

--
-- Indexes for table `user_access`
--
ALTER TABLE `user_access`
  ADD PRIMARY KEY (`user_access_id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`visitor_id`),
  ADD KEY `visitor_user_access_fk` (`user_access_user_access_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hotel_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `hotel_catagory`
--
ALTER TABLE `hotel_catagory`
  MODIFY `hotel_catagory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `manager_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rating_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `region_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservation_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `reservation_history`
--
ALTER TABLE `reservation_history`
  MODIFY `reservation_history_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `room_type`
--
ALTER TABLE `room_type`
  MODIFY `room_type_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=426;

--
-- AUTO_INCREMENT for table `user_access`
--
ALTER TABLE `user_access`
  MODIFY `user_access_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `visitor_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_user_access_fk` FOREIGN KEY (`user_access_user_access_id`) REFERENCES `user_access` (`user_access_id`);

--
-- Constraints for table `hotel`
--
ALTER TABLE `hotel`
  ADD CONSTRAINT `hotel_hotel_catagory_fk` FOREIGN KEY (`hotel_catagory_id`) REFERENCES `hotel_catagory` (`hotel_catagory_id`),
  ADD CONSTRAINT `hotel_manager_fk` FOREIGN KEY (`manager_manager_id`) REFERENCES `manager` (`manager_id`);

--
-- Constraints for table `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `manager_user_access_fk` FOREIGN KEY (`user_access_user_access_id`) REFERENCES `user_access` (`user_access_id`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_hotel_fk` FOREIGN KEY (`hotel_hotel_id`) REFERENCES `hotel` (`hotel_id`),
  ADD CONSTRAINT `rating_visitor_fk` FOREIGN KEY (`visitor_visitor_id`) REFERENCES `visitor` (`visitor_id`);

--
-- Constraints for table `regions_to_hotels`
--
ALTER TABLE `regions_to_hotels`
  ADD CONSTRAINT `regions_to_hotels_hotel_fk` FOREIGN KEY (`hotel_hotel_id`) REFERENCES `hotel` (`hotel_id`),
  ADD CONSTRAINT `regions_to_hotels_region_fk` FOREIGN KEY (`region_region_id`) REFERENCES `region` (`region_id`);

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_hotel_fk` FOREIGN KEY (`hotel_hotel_id`) REFERENCES `hotel` (`hotel_id`),
  ADD CONSTRAINT `reservation_room_type_fk` FOREIGN KEY (`room_type_room_type_id`) REFERENCES `room_type` (`room_type_id`),
  ADD CONSTRAINT `reservation_visitor_fk` FOREIGN KEY (`visitor_visitor_id`) REFERENCES `visitor` (`visitor_id`),
  ADD CONSTRAINT `room_roomid` FOREIGN KEY (`room_room_id`) REFERENCES `room` (`room_id`);

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `room_room_type_fk` FOREIGN KEY (`room_type_room_type_id`) REFERENCES `room_type` (`room_type_id`);

--
-- Constraints for table `room_type`
--
ALTER TABLE `room_type`
  ADD CONSTRAINT `room_type_hotel_fk` FOREIGN KEY (`hotel_hotel_id`) REFERENCES `hotel` (`hotel_id`);

--
-- Constraints for table `visitor`
--
ALTER TABLE `visitor`
  ADD CONSTRAINT `visitor_user_access_fk` FOREIGN KEY (`user_access_user_access_id`) REFERENCES `user_access` (`user_access_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
