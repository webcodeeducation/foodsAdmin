-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2023 at 07:55 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bigsmart_food`
--

-- --------------------------------------------------------

--
-- Table structure for table `addons_products`
--

CREATE TABLE `addons_products` (
  `id` int(10) NOT NULL,
  `foraddon` int(11) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addons_products`
--

INSERT INTO `addons_products` (`id`, `foraddon`, `pid`) VALUES
(1, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(10) NOT NULL,
  `restaurant_id` int(11) NOT NULL,
  `items` text NOT NULL,
  `total` int(10) NOT NULL,
  `delivery_type` varchar(100) NOT NULL,
  `payment_method` varchar(100) NOT NULL,
  `user_id` int(10) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp(),
  `deliveryat` text NOT NULL,
  `lat` varchar(100) NOT NULL,
  `long` varchar(100) NOT NULL,
  `order_comment` text NOT NULL,
  `booking_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `restaurant_id`, `items`, `total`, `delivery_type`, `payment_method`, `user_id`, `created_time`, `deliveryat`, `lat`, `long`, `order_comment`, `booking_time`) VALUES
(1000, 1, 'a:3:{i:0;a:4:{s:4:\"name\";s:6:\"Burger\";s:2:\"id\";i:1;s:3:\"qty\";i:2;s:5:\"price\";i:50;}i:1;a:4:{s:4:\"name\";s:8:\"Sandwich\";s:2:\"id\";i:2;s:3:\"qty\";i:2;s:5:\"price\";i:50;}i:2;a:4:{s:4:\"name\";s:8:\"Cocacola\";s:2:\"id\";i:3;s:3:\"qty\";i:2;s:5:\"price\";i:50;}}', 25, 'Dine', 'COD', 1, '2020-11-04 22:29:16', 'Shop C 1/2, Janta Mkt, Sector 23, Turbhe, Navi Mumbai', '', '', 'please add more chilli', '2020-11-06 00:00:00'),
(1001, 1, 'a:3:{i:0;a:4:{s:4:\"name\";s:6:\"Burger\";s:2:\"id\";i:1;s:3:\"qty\";i:2;s:5:\"price\";i:50;}i:1;a:4:{s:4:\"name\";s:8:\"Sandwich\";s:2:\"id\";i:2;s:3:\"qty\";i:2;s:5:\"price\";i:50;}i:2;a:4:{s:4:\"name\";s:8:\"Cocacola\";s:2:\"id\";i:3;s:3:\"qty\";i:2;s:5:\"price\";i:50;}}', 25, 'Dine', 'COD', 1, '2020-11-04 22:30:38', 'Shop C 1/2, Janta Mkt, Sector 23, Turbhe, Navi Mumbai', '', '', 'please add more chilli', '2020-11-06 00:00:00'),
(1002, 1, 'a:3:{i:0;a:4:{s:4:\"name\";s:6:\"Burger\";s:2:\"id\";i:1;s:3:\"qty\";i:2;s:5:\"price\";i:50;}i:1;a:4:{s:4:\"name\";s:8:\"Sandwich\";s:2:\"id\";i:2;s:3:\"qty\";i:2;s:5:\"price\";i:50;}i:2;a:4:{s:4:\"name\";s:8:\"Cocacola\";s:2:\"id\";i:3;s:3:\"qty\";i:2;s:5:\"price\";i:50;}}', 25, 'Dine', 'COD', 1, '2020-11-04 22:32:33', 'Shop C 1/2, Janta Mkt, Sector 23, Turbhe, Navi Mumbai', '', '', 'please add more chilli', '2020-11-06 00:00:00'),
(1003, 1, 'a:3:{i:0;a:4:{s:4:\"name\";s:6:\"Burger\";s:2:\"id\";i:1;s:3:\"qty\";i:2;s:5:\"price\";i:50;}i:1;a:4:{s:4:\"name\";s:8:\"Sandwich\";s:2:\"id\";i:2;s:3:\"qty\";i:2;s:5:\"price\";i:50;}i:2;a:4:{s:4:\"name\";s:8:\"Cocacola\";s:2:\"id\";i:3;s:3:\"qty\";i:2;s:5:\"price\";i:50;}}', 25, 'Dine', 'COD', 1, '2020-11-04 22:40:40', 'Shop C 1/2, Janta Mkt, Sector 23, Turbhe, Navi Mumbai', '', '', 'please add more chilli', '2020-11-06 00:00:00'),
(1004, 1, 'a:3:{i:0;a:4:{s:4:\"name\";s:6:\"Burger\";s:2:\"id\";i:1;s:3:\"qty\";i:2;s:5:\"price\";i:50;}i:1;a:4:{s:4:\"name\";s:8:\"Sandwich\";s:2:\"id\";i:2;s:3:\"qty\";i:2;s:5:\"price\";i:50;}i:2;a:4:{s:4:\"name\";s:8:\"Cocacola\";s:2:\"id\";i:3;s:3:\"qty\";i:2;s:5:\"price\";i:50;}}', 25, 'Dine', 'COD', 1, '2020-11-04 22:57:39', 'Shop C 1/2, Janta Mkt, Sector 23, Turbhe, Navi Mumbai', '', '', 'please add more chilli', '2020-11-06 00:00:00'),
(1005, 1, 'a:3:{i:0;a:4:{s:4:\"name\";s:6:\"Burger\";s:2:\"id\";i:1;s:3:\"qty\";i:2;s:5:\"price\";i:50;}i:1;a:4:{s:4:\"name\";s:8:\"Sandwich\";s:2:\"id\";i:2;s:3:\"qty\";i:2;s:5:\"price\";i:50;}i:2;a:4:{s:4:\"name\";s:8:\"Cocacola\";s:2:\"id\";i:3;s:3:\"qty\";i:2;s:5:\"price\";i:50;}}', 25, 'Dine', 'COD', 1, '2020-11-05 06:32:32', 'Shop C 1/2, Janta Mkt, Sector 23, Turbhe, Navi Mumbai', '', '', 'please add more chilli', '2020-11-06 00:00:00'),
(1006, 1, 'a:3:{i:0;a:4:{s:4:\"name\";s:6:\"Burger\";s:2:\"id\";i:1;s:3:\"qty\";i:2;s:5:\"price\";i:50;}i:1;a:4:{s:4:\"name\";s:8:\"Sandwich\";s:2:\"id\";i:2;s:3:\"qty\";i:2;s:5:\"price\";i:50;}i:2;a:4:{s:4:\"name\";s:8:\"Cocacola\";s:2:\"id\";i:3;s:3:\"qty\";i:2;s:5:\"price\";i:50;}}', 25, 'Dine', 'COD', 1, '2020-11-06 07:00:43', 'Shop C 1/2, Janta Mkt, Sector 23, Turbhe, Navi Mumbai', '', '', 'please add more chilli', '2020-11-06 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `image`, `is_active`) VALUES
(1, 'North India Fast Food', 'nothfastfood.jpg', 1),
(2, 'Soft Drinks', 'softdrinks.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `r_id` int(10) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `images`, `price`, `cat_id`, `r_id`, `created_time`) VALUES
(1, 'Burger', 'burger01.jpg', 85, 1, 1, '2020-11-02 21:05:49'),
(2, 'Sandwich', 'sandwich01.jpg', 60, 1, 1, '2020-11-02 21:05:49'),
(3, 'Cocacola', 'cocacola01.jpg', 45, 2, 1, '2020-11-02 21:05:49');

-- --------------------------------------------------------

--
-- Table structure for table `public_users`
--

CREATE TABLE `public_users` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` int(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `otp` int(5) NOT NULL,
  `created_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `public_users`
--

INSERT INTO `public_users` (`id`, `name`, `mobile`, `email`, `otp`, `created_time`) VALUES
(1, 'Manoj', 1234567890, 'test@gmail.com', 1234, '2020-11-02 20:18:51');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `id` int(30) NOT NULL,
  `restaurant_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `floor` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `landmark` varchar(100) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `serve_alcohol` tinyint(1) NOT NULL,
  `service` varchar(50) NOT NULL,
  `seating` varchar(30) NOT NULL,
  `no_seats` int(5) NOT NULL,
  `payment` varchar(30) NOT NULL,
  `website` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `restaurant_name`, `username`, `email`, `password`, `floor`, `city`, `zipcode`, `landmark`, `phone_no`, `serve_alcohol`, `service`, `seating`, `no_seats`, `payment`, `website`, `image`) VALUES
(1, 'Lucky Sweets Hourse', '', 'lucky@gmail.com', '', '', 'Kurukshetra', '136118', 'Opposite BSNL Exchange', '1234567890', 0, 'North India Fast Food', '1', 0, 'card and cash', 'https://www.luckywebsite.com', '1234567890.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addons_products`
--
ALTER TABLE `addons_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `public_users`
--
ALTER TABLE `public_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addons_products`
--
ALTER TABLE `addons_products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1007;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `public_users`
--
ALTER TABLE `public_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
