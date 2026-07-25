-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2023 at 09:30 PM
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
-- Database: `ecommerce_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `admin_image` varchar(255) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_name`, `admin_email`, `admin_image`, `admin_password`) VALUES
(1, 'abdo', 'abdo@gmail.com', 'logo after 3d_2.png', '$2y$10$M/A/r5j/GSeJrAZxI8NtRu9eG5yNltfgTrfQVoClfSIF/pzNUXa2W');


--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`) VALUES
(1, 'Mobiles'),
(2, 'Books'),
(3, 'Food'),
(4, 'Clothes'),
(5, 'HeadPhones'),
(6, 'Electronics'),
(7, 'Accessories');


--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(120) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_keywords` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_image_one` varchar(255) NOT NULL,
  `product_image_two` varchar(255) NOT NULL,
  `product_image_three` varchar(255) NOT NULL,
  `product_price` float NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `product_keywords`, `category_id`, `brand_id`, `product_image_one`, `product_image_two`, `product_image_three`, `product_price`, `date`, `status`) VALUES
(1, 'HAVIT HV-G92 Gamepad', 'allows you to use the familiar layout and buttons to enjoy console control when playing games on your PC The Havit HV-G92 also has multiple game profiles for pressure and controller settings', 'gamepad , havit , hv-g92 , logistech', 6, 9, 'havit1.png', 'havit2.png', 'havit1.png', 120, '2023-08-29 18:05:15', 'true'),
(2, 'ASUS FHD Gaming Laptop', 'Laptop ASUS TUF Gaming F15 FX506HF-HN001W(11th Intel® Core™ i5 11400H - Ram 8GB - Hard 512 GB SSD - GPU Nvidia Geforce RTX™ 2050 4GB - Display 15.6 4k', 'Laptop , gaming , asus , intell 11', 6, 2, 'lap1.png', 'lap2.png', 'lap3.png', 700, '2023-10-25 02:06:58', 'true'),
(3, 'CANON EOS DSLR Camera', 'High Image Quality with 32.5 Megapixel CMOS (APS-C) Sensor DIGIC 8 Image Processor. High-Speed Continuous Shooting of up to 10 fps with no Time Lag during OVF Shooting. 4K (UHD) 30fps / FHD 120fps Video', 'Canon, camera , high quality, 4k', 6, 1, 'camera1.png', 'camera2.png', 'camera3.png', 380, '2023-08-29 18:13:22', 'true'),
(4, 'Breed Dry Dog Food', 'Chicken, chicken by-product meal, corn, wheat, chicken fat, ground grain sorghum, natural flavors, dried plain beet pulp, egg product, potassium chloride, sodium hexametaphosphate, salt, cat food, dog food', 'food, dog food, cat food', 3, 9, 'food1.png', 'food2.png', 'food3.png', 100, '2023-10-25 01:41:31', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `user_payments`
--



-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE user_table (
    id INT AUTO_INCREMENT PRIMARY KEY, -- Unique identifier for each user
    fullname VARCHAR(100) NOT NULL,    -- User's full name
    email VARCHAR(255) NOT NULL UNIQUE, -- User's email address (must be unique)
    password VARCHAR(255) NOT NULL,   -- User's hashed password
    phone VARCHAR(15),                -- User's phone number (optional if NULL is allowed)
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP -- Record creation time
);

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `username`, `user_email`, `user_password`, `user_image`, `user_ip`, `user_address`, `user_mobile`) VALUES
(1, 'abdo', 'abdo@gmail.com', '$2y$10$5ynby9fq7wf2ZmHlkvehu.JGbK6r7zZLtLzuJz9Jt5FP03rGZ9Mj.', 'new logo after Edit1920.png', '::1', 'Cairo', '123456789');


-- Indexes for table `admin_table`

ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);


-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

-- Indexes for table `user_payments`
--

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);


--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;



--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;



--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;



--
-- AUTO_INCREMENT for table `user_payments`
--

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
