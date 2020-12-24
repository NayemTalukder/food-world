-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 11, 2019 at 11:47 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `food_id` int(10) NOT NULL,
  `restaurant_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `item_no` int(10) NOT NULL,
  `category` varchar(255) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `food_availability` varchar(10) NOT NULL,
  `restaurant_fk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`item_no`, `category`, `food_name`, `price`, `food_availability`, `restaurant_fk`) VALUES
(1, 'Burger', 'Chicken Burger', '160', 'yes', 'Chillox'),
(1, 'Pizza', 'Spicy Garlic Mushrooms ', '470', 'yes', 'Pizza Hut'),
(2, 'Burger', 'Beef Burger', '160', 'yes', 'Chillox'),
(2, 'Chicken', 'BBQ Chicken Wings', '390', 'yes', 'Pizza Hut'),
(3, 'Burger', 'Chicken Cheese Burger', '180', 'yes', 'Chillox'),
(3, 'Rolls', 'Chicken Stuffed Rolls', '344', 'yes', 'Pizza Hut'),
(4, 'Burger', 'Beef Cheese Burger', '180', 'yes', 'Chillox'),
(4, 'Pizza', 'Garlic Spicy Supreme', '280', 'yes', 'Pizza Hut');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `res_name` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `restaurant_aviablity` varchar(10) NOT NULL,
  `food_fk` int(10) NOT NULL,
  `rating` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`res_name`, `branch`, `restaurant_aviablity`, `food_fk`, `rating`) VALUES
('Chillox', 'Banani', 'yes', 0, 7.8),
('Chillox', 'Dhanmondi', 'yes', 0, 7.8),
('Chillox', 'Mirpur', 'No', 0, 7.8),
('Chillox', 'Mohakhali', 'yes', 0, 7.8),
('Chillox', 'Uttora', 'yes', 0, 7.8),
('Pizza Hut', 'Baily Road', 'yes', 0, 7.5),
('Pizza Hut', 'Banani', 'yes', 0, 7.5),
('Pizza Hut', 'Bashundhara', 'yes', 0, 7.5),
('Pizza Hut', 'Gulshan-1', 'yes', 0, 7.5),
('Pizza Hut ', 'Wari', 'No', 0, 7.5);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `taste` int(1) NOT NULL,
  `interior` int(1) NOT NULL,
  `food_quality` int(1) NOT NULL,
  `cost` int(1) NOT NULL,
  `services` int(1) NOT NULL,
  `user_fk` int(10) NOT NULL,
  `res_fk` varchar(255) NOT NULL,
  `summ` int(10) DEFAULT NULL,
  `rating` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`taste`, `interior`, `food_quality`, `cost`, `services`, `user_fk`, `res_fk`, `summ`, `rating`) VALUES
(9, 8, 7, 6, 6, 38, 'Chillox', 36, 7.8),
(10, 9, 9, 8, 7, 38, 'Pizza Hut', 43, 7.5),
(8, 9, 8, 8, 7, 38, 'Chillox', 40, 7.8),
(7, 8, 7, 8, 7, 38, 'Chillox', 37, 7.8),
(7, 6, 7, 6, 5, 38, 'Pizza Hut', 31, 7.5),
(9, 8, 8, 7, 7, 38, 'Chillox', 39, 7.8),
(8, 7, 6, 5, 5, 38, 'Pizza Hut', 31, 7.5),
(9, 8, 9, 7, 6, 38, 'Pizza Hut', 39, 7.5),
(9, 8, 9, 7, 6, 38, 'Pizza Hut ', 39, 7.5),
(9, 8, 9, 7, 6, 38, 'Pizza Hut ', 39, 7.5),
(9, 8, 9, 7, 6, 38, 'Pizza Hut ', 39, 7.5),
(9, 8, 9, 7, 6, 38, 'Pizza Hut ', 39, 7.5),
(9, 8, 9, 7, 6, 38, 'Pizza Hut ', 39, 7.5),
(10, 9, 9, 8, 7, 38, 'Chillox', 43, 7.8),
(7, 6, 7, 8, 7, 38, 'Pizza Hut', 35, 7.5),
(9, 8, 7, 7, 8, 38, 'Pizza Hut', 39, 7.5),
(9, 8, 9, 6, 6, 38, 'Pizza Hut', 38, 7.5),
(9, 8, 7, 7, 6, 38, 'Pizza Hut', 37, 7.5),
(7, 8, 9, 8, 7, 38, 'Pizza Hut ', 39, 7.5),
(7, 7, 7, 7, 7, 38, 'Pizza Hut', 35, 7.5),
(9, 8, 7, 7, 5, 38, 'Pizza Hut', 36, 7.5),
(9, 8, 7, 7, 5, 38, 'Pizza Hut', 36, 7.5),
(9, 8, 7, 7, 5, 38, 'Chillox', 36, 7.8),
(9, 8, 7, 7, 6, 38, 'Chillox', 37, 7.8),
(9, 7, 7, 6, 8, 38, 'Chillox', 37, 7.8),
(9, 7, 7, 6, 6, 38, 'Pizza Hut', 35, 7.5),
(7, 8, 7, 6, 8, 38, 'Chillox', 36, 7.8),
(9, 8, 7, 7, 6, 38, 'Pizza Hut ', 37, 7.5),
(10, 9, 9, 9, 8, 38, 'Chillox', 45, 7.8),
(9, 8, 7, 8, 7, 38, 'Pizza Hut', 39, 7.5),
(8, 9, 8, 8, 7, 38, 'Chillox', 40, 7.8),
(8, 9, 8, 8, 7, 38, 'Chillox', 40, 7.8),
(8, 9, 8, 8, 7, 38, 'Pizza Hut', 40, 7.5),
(9, 8, 9, 8, 7, 38, 'Chillox', 41, 7.8),
(9, 9, 9, 8, 7, 38, 'Chillox', 42, 7.8);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `user_password`, `fname`, `lname`, `phone`) VALUES
(38, 'Test123', 'Test@gmail.com', 'test', 'Test', 'Test', 1679895124);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `restaurant_id` (`restaurant_id`),
  ADD KEY `food_id` (`food_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`item_no`,`restaurant_fk`),
  ADD KEY `food_ibfk_1` (`restaurant_fk`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`res_name`,`branch`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD KEY `user_fk` (`user_fk`),
  ADD KEY `res_fk` (`res_fk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `item_no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurant` (`res_name`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_3` FOREIGN KEY (`food_id`) REFERENCES `food` (`item_no`) ON UPDATE CASCADE;

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`restaurant_fk`) REFERENCES `restaurant` (`res_name`) ON UPDATE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`user_fk`) REFERENCES `user` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`res_fk`) REFERENCES `restaurant` (`res_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
