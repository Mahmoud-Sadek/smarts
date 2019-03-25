-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2019 at 10:32 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartmall`
--

-- --------------------------------------------------------

--
-- Table structure for table `adresses`
--

CREATE TABLE `adresses` (
  `id` int(11) NOT NULL,
  `country` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `address_detail_ar` varchar(255) DEFAULT NULL,
  `address_detail_en` varchar(255) DEFAULT NULL,
  `nearst_landman` varchar(255) DEFAULT NULL,
  `location_type` varchar(255) DEFAULT NULL,
  `mobile_number1` varchar(255) DEFAULT NULL,
  `mobile_number2` varchar(255) DEFAULT NULL,
  `shopping_note` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adresses`
--

INSERT INTO `adresses` (`id`, `country`, `state`, `city`, `street`, `address_detail_ar`, `address_detail_en`, `nearst_landman`, `location_type`, `mobile_number1`, `mobile_number2`, `shopping_note`, `whatsapp`, `user_id`, `order_id`, `created_at`, `updated_at`) VALUES
(1, '123', '12312312', '23', '12312', NULL, NULL, '123123', '3123', '123', '123', '3123', '123', 123, NULL, '2019-03-20 10:17:49', '2019-03-20 10:17:49'),
(2, '123', '12312312', '23', '12312', NULL, '312', '123123', '3123', '123', '123', '3123', '123', 5, NULL, '2019-03-20 10:18:31', '2019-03-20 10:18:31'),
(3, '123', '12312312', '23', '12312', NULL, '312', '123123', '3123', '123', '123', '3123', '123', 123, NULL, '2019-03-22 13:51:06', '2019-03-22 13:51:06'),
(4, '123', '12312312', '23', '12312', NULL, '312', '123123', '3123', '123', '123', '3123', '123', 123, '2', '2019-03-22 13:51:19', '2019-03-22 13:51:19'),
(5, '123', '12312312', '23', '12312', NULL, '312', '123123', '3123', '123', '123', '3123', '123', 123, '2', '2019-03-24 10:13:07', '2019-03-24 10:13:07'),
(6, '123', '12312312', '23', '12312', NULL, '312', '123123', '3123', '123', '123', '3123', '123', 123, '2', '2019-03-24 10:13:09', '2019-03-24 10:13:09');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `publisher` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `title_ar`, `title_en`, `image`, `time`, `publisher`, `created_at`, `updated_at`) VALUES
(8, 'adidas', 'adidas', 'images/1553004651.png', '2019-03-16 12:01:00', 'abcd', '2019-03-19 12:10:51', '2019-03-19 12:10:51');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `quantity` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `total_price` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `order_id`, `time`, `quantity`, `price`, `total_price`, `created_at`, `updated_at`) VALUES
(42, 52, 54, '11', '2019-03-24 22:18:16', '2', '14', '28', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `photo_option` varchar(255) DEFAULT '""',
  `image` varchar(255) DEFAULT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `publisher` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT '0',
  `son_id` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title_ar`, `title_en`, `photo_option`, `image`, `time`, `publisher`, `parent_id`, `son_id`, `created_at`, `updated_at`) VALUES
(26, 'ملابس', 'clothes', '2', 'images/1553001115.jpg', '2019-03-20 00:01:00', 'abcd', 0, 0, '2019-03-19 11:11:55', '2019-03-19 11:11:55'),
(27, 'ملابس رجالى', 'Men\'s Clothes', '3', 'images/1553001255.jpg', '2019-03-19 00:01:00', 'abcd', 26, 0, '2019-03-19 11:14:15', '2019-03-19 11:14:15'),
(28, 'ملابس حريمى', 'Woman\'s Clothes', '1', 'images/1553001583.jpg', '2019-03-15 13:01:00', 'abcd', 26, 0, '2019-03-19 11:19:43', '2019-03-19 11:19:43'),
(29, 'العاب اطفال', 'kids & toy', '\"\"', 'images/1553015494.jpg', '2019-03-21 02:01:00', 'abcd', 0, 0, '2019-03-19 15:11:34', '2019-03-19 15:11:34'),
(30, 'احذيه', 'shoes', '\"\"', 'images/1553097189.jpg', '2019-03-08 03:02:00', 'abcd', 26, 27, '2019-03-20 13:53:09', '2019-03-20 13:53:09');

-- --------------------------------------------------------

--
-- Table structure for table `color_images`
--

CREATE TABLE `color_images` (
  `id` int(11) NOT NULL,
  `color` varchar(255) NOT NULL,
  `text_ar` int(11) NOT NULL,
  `text_en` int(11) NOT NULL,
  `time` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `copons`
--

CREATE TABLE `copons` (
  `id` int(11) NOT NULL,
  `name_ar` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `flash_option` varchar(255) DEFAULT NULL,
  `description_ar` varchar(255) DEFAULT NULL,
  `description_en` varchar(255) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `title_ar`, `title_en`, `image`, `flash_option`, `description_ar`, `description_en`, `category_id`, `publisher`, `time`, `created_at`, `updated_at`) VALUES
(15, 'Clothes offer', 'Clothes offer', 'images/en_banner-HP.gif', '1', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 27, NULL, NULL, '2019-03-19 11:53:50', '2019-03-19 11:53:50'),
(16, 'mother\'s day', 'mother\'s day', 'images/en_banner-02.gif', '1', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 27, NULL, NULL, '2019-03-20 09:43:52', '2019-03-20 09:43:52'),
(17, 'adidas', 'adidas', 'images/en_banner-01.jpg', '1', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 27, NULL, NULL, '2019-03-20 09:50:39', '2019-03-20 09:50:39'),
(18, 'toy\'s offers', 'adidas', 'images/en_banner-01.gif', '1', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 29, NULL, NULL, '2019-03-20 09:51:23', '2019-03-20 09:51:23'),
(19, 'summer offers', 'summer offers', 'images/1553082908.jpg', NULL, 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 28, NULL, NULL, '2019-03-20 09:55:08', '2019-03-20 09:55:08'),
(20, 'toys', 'toys', 'images/1553083016.jpg', NULL, 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 29, NULL, NULL, '2019-03-20 09:56:56', '2019-03-20 09:56:56'),
(21, 'winter offers', 'winter offers', 'images/1553083097.jpg', 'NULL', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 28, NULL, NULL, '2019-03-20 09:58:17', '2019-03-20 09:58:17'),
(22, 'fash1', 'fash1', 'images/1553192215.jpg', '2', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 27, NULL, NULL, '2019-03-21 16:16:55', '2019-03-21 16:16:55'),
(23, 'fash2', 'fash2', 'images/1553192281.jpg', '2', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 28, NULL, NULL, '2019-03-21 16:18:01', '2019-03-21 16:18:01'),
(24, 'fash3', 'fash3', 'images/1553192310.jpg', '2', 'fash3', 'fash3', 28, NULL, NULL, '2019-03-21 16:18:30', '2019-03-21 16:18:30'),
(25, 'adidas', 'fash4', 'images/1553192340.jpg', '2', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 27, NULL, NULL, '2019-03-21 16:19:00', '2019-03-21 16:19:00');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `details` varchar(255) DEFAULT NULL,
  `payment_id` varchar(255) DEFAULT NULL,
  `payment_type` varchar(255) DEFAULT NULL,
  `shipping_id` varchar(255) DEFAULT NULL,
  `address_id` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT 'pending',
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `details`, `payment_id`, `payment_type`, `shipping_id`, `address_id`, `status`, `time`, `created_at`, `updated_at`) VALUES
(11, '47', 'abcdabcd', NULL, NULL, NULL, NULL, 'pending', '2019-03-22 15:09:44', '2019-03-22 13:09:44', '2019-03-22 13:09:44'),
(26, '48', 'asd', '123', '123', '123', '123', 'pending', '2019-03-23 14:01:22', '2019-03-23 14:01:22', '2019-03-23 14:01:22'),
(27, '40', NULL, NULL, NULL, NULL, NULL, 'pending', '2019-03-24 12:12:10', '2019-03-24 10:12:10', '2019-03-24 10:12:10');

-- --------------------------------------------------------

--
-- Table structure for table `orders_products`
--

CREATE TABLE `orders_products` (
  `id` int(11) NOT NULL,
  `product_id` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `price` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders_products`
--

INSERT INTO `orders_products` (`id`, `product_id`, `user_id`, `order_id`, `price`, `amount`, `created_at`, `updated_at`) VALUES
(1, '4', '3', '4', '223', '23', '2019-03-20 13:01:56', '2019-03-20 13:01:56'),
(2, '4', '5', '11', '144', '15', '2019-03-20 11:04:57', '2019-03-20 11:04:57'),
(3, '4', '5', '11', '144', '15', '2019-03-24 10:13:36', '2019-03-24 10:13:36'),
(4, '4', '5', '11', '144', '15', '2019-03-24 10:13:39', '2019-03-24 10:13:39');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name_ar` varchar(255) DEFAULT NULL,
  `name_en` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `offer_price` int(11) DEFAULT NULL,
  `photo_option` varchar(255) DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `image4` varchar(255) DEFAULT NULL,
  `image5` varchar(255) DEFAULT NULL,
  `quantity` varchar(11) DEFAULT NULL,
  `selling_quantity` varchar(11) DEFAULT NULL,
  `infromation_ar` text,
  `infromation_en` text,
  `likes` int(11) DEFAULT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `detail_ar` text,
  `detail_en` text,
  `freeshing` varchar(255) DEFAULT NULL,
  `discount` varchar(255) DEFAULT NULL,
  `links` varchar(255) DEFAULT NULL,
  `publisher` varchar(255) DEFAULT NULL,
  `offer_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `son_id` int(11) DEFAULT NULL,
  `brand_id` varchar(255) DEFAULT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name_ar`, `name_en`, `price`, `offer_price`, `photo_option`, `user_id`, `image1`, `image2`, `image3`, `image4`, `image5`, `quantity`, `selling_quantity`, `infromation_ar`, `infromation_en`, `likes`, `sku`, `detail_ar`, `detail_en`, `freeshing`, `discount`, `links`, `publisher`, `offer_id`, `category_id`, `son_id`, `brand_id`, `time`, `updated_at`, `created_at`) VALUES
(40, 'ملابس رجالى', 'T-Shirt Black', 14, 1, NULL, NULL, 'images/1553004828.jpg', 'images/1553004828.jpg', 'images/1553004828.jpg', 'images/1553004828.jpg', NULL, '14', NULL, 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', NULL, NULL, 'itMen\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', NULL, NULL, NULL, NULL, 15, 26, 27, '8', '2019-03-15 00:01:00', '2019-03-19 12:13:48', '2019-03-19 12:13:48'),
(41, 'ملابس رجالى', 'T-Shirt white', 44, 4, NULL, NULL, 'images/1553006047.jpg', 'images/1553006047.jpg', 'images/1553004828.jpg', 'images/1553004828.jpg', NULL, '14', NULL, 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', NULL, NULL, 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', NULL, NULL, NULL, NULL, 15, 26, 27, '8', '2019-03-16 01:01:00', '2019-03-19 12:34:07', '2019-03-19 12:34:07'),
(42, 'ملابس رجالى', 'T-Shirt sport', 66, 6, NULL, NULL, 'images/1553006611.jpg', 'images/1553006262.jpg', 'images/1553006262.jpg', 'images/1553006262.jpg', NULL, '14', NULL, 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', NULL, NULL, 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', NULL, NULL, NULL, NULL, 16, 26, 27, '8', '2019-03-23 00:01:00', '2019-03-19 12:43:31', '2019-03-19 12:37:42'),
(43, 'ملابس حريمى', 'T-Shirt Black sport', 18, 8, NULL, NULL, 'images/1553007140.jpg', 'images/1553007140.jpg', 'images/1553007140.jpg\r\n', 'images/1553007140.jpg \r\n', NULL, '14', NULL, 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', NULL, NULL, 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', NULL, NULL, NULL, NULL, 17, 26, 28, '8', '2019-03-22 00:01:00', '2019-03-19 12:52:20', '2019-03-19 12:52:20'),
(44, 'ملابس حريمى', 'T-Shirt purpe', 11, 14, NULL, NULL, 'images/1553007213.jpg', 'images/1553007213.jpg', 'images/1553007213.jpg', 'images/1553007213.jpg\r\n', NULL, '14', NULL, 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', NULL, NULL, 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', NULL, NULL, NULL, NULL, 17, 26, 28, '8', '2019-03-21 00:01:00', '2019-03-19 12:53:33', '2019-03-19 12:53:33'),
(45, 'ملابس حريمى', 'T-Shirt purpe 2', 10, 10, NULL, NULL, 'images/1553007307.png', 'images/1553007307.png', 'images/1553007307.png\r\n', 'images/1553007307.png\r\n', NULL, '14', NULL, 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', NULL, NULL, 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', NULL, NULL, NULL, NULL, 16, 26, 28, '8', '2019-03-08 00:01:00', '2019-03-19 12:55:07', '2019-03-19 12:55:07'),
(46, 'ملابس رجالى', 'T-Shirt purpe 3', 14, 2, NULL, NULL, 'images/1553008079.jpg', 'images/1553008079.jpg', 'images/1553008079.jpg', 'images/1553008079.jpg', NULL, '12', NULL, 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', NULL, NULL, 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', NULL, NULL, NULL, NULL, 18, 26, 27, '8', '2019-03-21 00:01:00', '2019-03-19 13:07:59', '2019-03-19 13:07:59'),
(47, 'shoes', 'T-Shirt purpe 4', 55, 10, NULL, NULL, 'images/1553119838.jpg', 'images/1553119838.jpg', 'images/1553119838.jpg', 'images/1553119838.jpg', NULL, '14', NULL, 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', NULL, NULL, 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded PulloverMen\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded PulloverMen\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', NULL, NULL, NULL, NULL, 17, 26, 30, '8', '2019-03-14 01:01:00', '2019-03-20 20:10:38', '2019-03-20 20:10:38'),
(48, 't-shirt catual', 't-shirt catual', 55, 10, NULL, NULL, 'images/1553192779.jpg', 'images/1553192779.jpg', 'images/1553192779.jpg', 'images/1553192779.jpg', NULL, '14', NULL, 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded PulloverMen\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded PulloverMen\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', NULL, NULL, 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', NULL, NULL, NULL, NULL, 22, 26, 27, '8', '2019-03-15 00:01:00', '2019-03-21 16:26:19', '2019-03-21 16:26:19'),
(49, 't-shirt catual', 't-shirt catual', 14, 10, NULL, NULL, 'images/1553192855.jpg', 'images/1553192855.jpg', 'images/1553192855.jpg', 'images/1553192855.jpg', NULL, '14', NULL, 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded PulloverMen\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', NULL, NULL, 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded PulloverMen\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', NULL, NULL, NULL, NULL, 22, 26, 27, '8', '2019-03-22 00:00:00', '2019-03-21 16:27:35', '2019-03-21 16:27:35'),
(50, 'makeup', 'makeup', 14, 2, NULL, NULL, 'images/1553192930.jpg', 'images/1553192930.jpg', 'images/1553192930.jpg', 'images/1553192930.jpg', NULL, '14', NULL, 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', NULL, NULL, 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover\r\nMen\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', NULL, NULL, NULL, NULL, 23, 26, 28, '0', '2019-03-15 00:01:00', '2019-03-21 16:28:50', '2019-03-21 16:28:50'),
(52, 'makeup', 'makeup', 14, 10, NULL, NULL, 'images/1553192994.jpg', 'images/1553192994.jpg', 'images/1553192994.jpg', 'images/1553192994.jpg', NULL, '14', NULL, 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', NULL, NULL, 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover\r\nMen\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', NULL, NULL, NULL, NULL, 23, 26, 28, '8', '2019-03-29 00:01:00', '2019-03-21 16:29:54', '2019-03-21 16:29:54'),
(53, 'makeup', 'makeup', 14, 2, NULL, NULL, 'images/1553193053.jpg', 'images/1553193053.jpg', 'images/1553193053.jpg', 'images/1553193053.jpg', NULL, '12', NULL, 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover\r\nMen\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', NULL, NULL, 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover\r\nMen\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover\r\nMen\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', NULL, NULL, NULL, NULL, 24, 26, 28, '0', '2019-03-22 00:01:00', '2019-03-21 16:30:53', '2019-03-21 16:30:53'),
(54, 'watch', 'watch', 14, 2, NULL, NULL, 'images/1553193125.jpg', 'images/1553193126.jpg', 'images/1553193126.jpg', 'images/1553193126.jpg', NULL, '12', NULL, 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover\r\nMen\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover\r\nMen\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', NULL, NULL, 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', NULL, NULL, NULL, NULL, 25, 26, 27, '8', '2019-03-22 00:00:00', '2019-03-21 16:32:06', '2019-03-21 16:32:06'),
(55, 't-shirt cat', 't-shirt cat', 14, 2, NULL, NULL, 'images/1553193450.jpg', 'images/1553193450.jpg', 'images/1553193450.jpg', 'images/1553193450.jpg', NULL, '12', NULL, 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded PulloverMen\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded PulloverMen\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', NULL, NULL, 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded PulloverMen\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', 'Men\'s Hoodie Camouflage Patchwork Long Sleeve Hooded PulloverMen\'s Hoodie Camouflage Patchwork Long Sleeve Hooded PulloverMen\'s Hoodie Camouflage Patchwork Long Sleeve Hooded Pullover', NULL, NULL, NULL, NULL, 22, 26, 28, '8', '2019-05-17 00:01:00', '2019-03-21 16:37:30', '2019-03-21 16:37:30'),
(56, 'حذاء', 'shoes', 55, 10, NULL, '47', 'images/1553372291.png', 'images/1553372291.png', 'images/1553372291.png', 'images/1553372291.png', 'images/1553372291.png', '14', NULL, 'asdasd', 'asdasd', NULL, NULL, 'asdasdasd', 'asdasd', NULL, NULL, NULL, NULL, 19, 26, 27, '8', '2019-03-23 20:18:11', '2019-03-23 18:18:11', '2019-03-23 18:18:11');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `text_ar` varchar(255) DEFAULT NULL,
  `text_en` varchar(255) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rating` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `text_ar`, `text_en`, `product_id`, `time`, `updated_at`, `created_at`, `rating`) VALUES
(1, 32, NULL, 'it is very fantastic', 41, '02/26/2019', '2019-03-20 17:21:51', '2019-03-20 17:21:51', '2.5'),
(2, 32, NULL, 'very nice', 41, '02/26/2019', '2019-03-20 17:31:08', '2019-03-20 17:31:08', '4'),
(3, 32, NULL, 'nice', 41, NULL, '2019-03-20 17:56:03', '2019-03-20 17:56:03', '4'),
(4, 32, NULL, 'it so nice', 41, NULL, '2019-03-21 15:46:40', '2019-03-21 15:46:40', '2.5'),
(5, 32, NULL, 'it\'s fantastic shoes', 47, NULL, '2019-03-21 19:05:41', '2019-03-21 19:05:41', '3'),
(6, 32, NULL, 'asd', 41, NULL, '2019-03-21 19:30:33', '2019-03-21 19:30:33', '1');

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` int(11) NOT NULL,
  `title_ar` varchar(255) NOT NULL,
  `title_en` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isadmin` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `admin_email`, `password`, `token`, `country_id`, `gender`, `fullname`, `city`, `job`, `birth_date`, `phone`, `created_at`, `updated_at`, `remember_token`, `isadmin`) VALUES
(40, 'mostafa', NULL, 'mostafa@gmail.com', '$2y$10$CwVYN9Kl0UCOi7zFNDCuyOY4oaUbzKvhw05Qvbs05A2XnNEmPNyCK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-23 09:31:48', '2019-03-23 09:31:48', 'CxdkWdh6tiXKgQvypryUjPjRudWAHJ268FP1ZeJl8je8ydux4trI5Qsr4Bti', 4),
(47, 'smartmall', NULL, 'smartmall@gmail.com', '$2y$10$8lY06x1Ty2XwWfDM7keKEOyVbzB0A0UwX3ypNQcFFPiccnF.Axfti', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-23 11:10:54', '2019-03-23 11:10:54', 'ECtlCxQJ1R7HnT4mwdV6cPdl8UVi434EDGVQQW1UHSDYmTU6BohRBTCsfHcz', 6),
(48, 'ahmed', NULL, 'ahmed@gmail.com', '$2y$10$0fhDUiEGUr3NStWMX27yjO7Fiwsr/ieAfkwEjOOQK.vCdX2owErtS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-23 11:12:05', '2019-03-23 11:12:05', '7bmaJdgBrUkmmOdwTC2cbX8ZFQ8VmNlwk07G2aSmKyNdGwwazH4cw61o76Lu', 5),
(49, 'abcd', 'abcd@gmail.com', NULL, '$2y$10$Sos4N.coloujor6vIJA7xus11G8ifZUCY8WPTESODikwkLtJV1.OG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-23 20:15:50', '2019-03-23 20:15:50', NULL, 0),
(50, 'asdasd', 'abcdaa@gmail.com', NULL, '$2y$10$WKzBR1zQegeGrFaPXWSfGuEZvnpWmWeXdzA1BgBdl6V8m0lBxvgxW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-24 08:02:21', '2019-03-24 08:02:21', NULL, 0),
(51, 'asdasd', 'abcdasd@gmail.com', NULL, '$2y$10$d3aaAr8Tj01Ugg0VhNHOyuVw2mtinQM4PkbE.WZSOYeIRJESgqR3u', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-24 08:41:56', '2019-03-24 08:41:56', NULL, 0),
(52, 'abcd', 'aabcd@gmail.comaa', NULL, '$2y$10$TLQ19dPGTZhYorVRs8YF/eJZZAdLY4qAafmDIZYIgHUAIuT5iyUC2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-24 20:18:05', '2019-03-24 20:18:05', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adresses`
--
ALTER TABLE `adresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color_images`
--
ALTER TABLE `color_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `copons`
--
ALTER TABLE `copons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_products`
--
ALTER TABLE `orders_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_1` (`category_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adresses`
--
ALTER TABLE `adresses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `color_images`
--
ALTER TABLE `color_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `copons`
--
ALTER TABLE `copons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `orders_products`
--
ALTER TABLE `orders_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `product_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
