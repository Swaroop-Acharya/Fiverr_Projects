-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 12:40 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hotel_id` int(11) NOT NULL,
  `hotel_name` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `rating` varchar(50) NOT NULL,
  `stars` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotel_id`, `hotel_name`, `description`, `rating`, `stars`) VALUES
(1, ' The Venetian in Las Vegas', 'The Venetian is a renowned luxury hotel situated on the iconic Las Vegas Strip in Nevada. Drawing in', '9.2/10 Excellent', '5');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `image_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `image_url` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`image_id`, `hotel_id`, `image_url`) VALUES
(1, 1, 'Fountain.png'),
(2, 1, 'lobby.png'),
(3, 1, 'Outside.png'),
(4, 1, 'Sundeck.png'),
(5, 1, 'view_from_room.png');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `res_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `cust_name` varchar(100) NOT NULL,
  `cust_email` varchar(100) NOT NULL,
  `cust_phone` varchar(100) NOT NULL,
  `res_from` date NOT NULL,
  `res_to` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`res_id`, `room_id`, `cust_name`, `cust_email`, `cust_phone`, `res_from`, `res_to`) VALUES
(29, 1, 'Swaroop', 'swaroop@gmail.com', '9353393942', '2023-06-01', '2023-06-05'),
(30, 7, 'Jorge', 'jorge@gmail.com', '9353393942', '2023-06-10', '2023-06-13'),
(31, 1, 'Swaroop', 'swaroop@gmail.com', '9353393942', '2023-06-17', '2023-06-29'),
(32, 1, 'Jorge', 'jorge@gmail.com', '9353393942', '2023-07-15', '2023-07-30'),
(33, 2, 'Jorge', 'jorge@gmail.com', '9353393942', '2023-06-01', '2023-06-10'),
(34, 2, 'Swaroop', 'swaroop@gmail.com', '9353393942', '2023-06-12', '2023-06-24'),
(35, 1, 'Sri', 'sri@gmail.com', '9449966992', '2023-11-09', '2023-11-17'),
(36, 3, 'Jorge', 'swaroop@gmail.com', '9353393942', '2023-06-01', '2023-06-10'),
(37, 3, 'Jorge', 'jorge@gmail.com', '9449966992', '2023-06-17', '2023-06-24');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `hotel_id` int(11) NOT NULL,
  `room_image` varchar(100) NOT NULL,
  `room_name` varchar(100) NOT NULL,
  `room_price` decimal(10,2) NOT NULL,
  `room_rating` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_id`, `hotel_id`, `room_image`, `room_name`, `room_price`, `room_rating`) VALUES
(1, 1, '10829769.jpg\r\n', 'Luxury King Suite City View', 343.00, '9.2/10 Wonderful'),
(2, 1, 'ff76f628.jpg\r\n', 'Luxury Two Queen Suite City View\r\n', 359.00, '8.8/10 Excellent'),
(3, 1, '01066662.jpg\r\n', 'Premium Two Queen Suite\r\n', 375.00, '8.5/10 Very Good\r\n'),
(4, 1, 'd1bcdecd.jpg\r\n', 'Premium Two Queen Suite City View\r\n', 407.00, '7.9/10 Good\r\n'),
(5, 1, 'dc882e48.jpg\r\n', 'Grand King Suite\r\n', 431.00, '9/10 Excellent\r\n'),
(6, 1, '64ddc853.jpg\r\n', 'Prestige Club Lounge Luxury Two Queen Suite\r\n', 441.00, '7.9/10 Good\r\n\r\n'),
(7, 1, 'f0a26054.jpg\r\n', 'Prestige Club Lounge Grand King Suite\r\n', 561.00, '8.5/10 Very Good\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `roomamenities`
--

CREATE TABLE `roomamenities` (
  `amenity_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `icon_image` varchar(100) NOT NULL,
  `amenity_text` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roomamenities`
--

INSERT INTO `roomamenities` (`amenity_id`, `room_id`, `icon_image`, `amenity_text`) VALUES
(1, 1, 'area_icon.jpg', '650 sq ft'),
(2, 1, 'cityview_icon.jpg', 'City view'),
(3, 1, 'sleeps_icon.jpg', 'Sleeps 4'),
(4, 1, 'num_beds_icon.jpg', '1 King Bed'),
(5, 1, 'parking_icon.jpg', 'Free self parking'),
(6, 2, 'area_icon.jpg', '750 sq ft'),
(7, 2, 'cityview_icon.jpg', 'City view'),
(8, 2, 'sleeps_icon.jpg', 'Sleeps 4'),
(9, 2, 'num_beds_icon.jpg', '2 Queen Beds'),
(10, 2, 'parking_icon.jpg', 'Free self parking'),
(11, 3, 'area_icon.jpg', '1100 sq ft'),
(12, 3, 'sleeps_icon.jpg', 'Sleeps 4'),
(13, 3, 'num_beds_icon.jpg', '2 Queen Beds'),
(14, 3, 'parking_icon.jpg', 'Free self parking'),
(15, 4, 'area_icon.jpg', '1100 sq ft'),
(16, 4, 'cityview_icon.jpg', 'City view'),
(17, 4, 'sleeps_icon.jpg', 'Sleeps 4'),
(18, 4, 'num_beds_icon.jpg', '2 Queen Beds'),
(19, 4, 'parking_icon.jpg', 'Free self parking'),
(20, 5, 'area_icon.jpg', '1500 sq ft'),
(21, 5, 'sleeps_icon.jpg', 'Sleeps 4'),
(22, 5, 'num_beds_icon.jpg', '1 King Bed'),
(23, 5, 'parking_icon.jpg', 'Free self parking'),
(24, 6, 'area_icon.jpg', '750 sq ft'),
(25, 6, 'cityview_icon.jpg', 'City view'),
(26, 6, 'sleeps_icon.jpg', 'Sleeps 4'),
(27, 6, 'num_beds_icon.jpg', '2 Queen Beds'),
(28, 6, 'breakfast_icon.jpg', 'Free breakfast'),
(29, 6, 'parking_icon.jpg', 'Free self parking'),
(30, 6, 'included_icon.jpg', 'Free welcome drink'),
(31, 6, 'included_icon.jpg', 'Drink and hors d\'oeuvres'),
(32, 7, 'area_icon.jpg', '1500 sq ft'),
(33, 7, 'cityview_icon.jpg', 'City view'),
(34, 7, 'sleeps_icon.jpg', 'Sleeps 3'),
(35, 7, 'num_beds_icon.jpg', '1 King Bed'),
(36, 7, 'breakfast_icon.jpg', 'Free breakfast'),
(37, 7, 'parking_icon.jpg', 'Free self parking'),
(38, 7, 'included_icon.jpg', 'Free welcome drink'),
(39, 7, 'included_icon.jpg', 'Drink and hors d\'oeuvres');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `DDfdh` (`hotel_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`res_id`),
  ADD KEY `DDfdhd` (`room_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `DDf` (`hotel_id`);

--
-- Indexes for table `roomamenities`
--
ALTER TABLE `roomamenities`
  ADD PRIMARY KEY (`amenity_id`),
  ADD KEY `DDfd` (`room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `res_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `DDfdh` FOREIGN KEY (`hotel_id`) REFERENCES `hotel` (`hotel_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `DDfdhd` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `DDf` FOREIGN KEY (`hotel_id`) REFERENCES `hotel` (`hotel_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `roomamenities`
--
ALTER TABLE `roomamenities`
  ADD CONSTRAINT `DDfd` FOREIGN KEY (`room_id`) REFERENCES `room` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
