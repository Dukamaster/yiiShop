-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2014 at 04:50 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bootshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `banner_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `index` varchar(150) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`banner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `parent` int(10) unsigned DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `status` smallint(5) unsigned DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `name`, `parent`, `description`, `created_date`, `updated_date`, `status`) VALUES
(1, 'All', 0, NULL, NULL, '2014-08-13 23:04:03', NULL),
(2, 'CLOTHES', 0, NULL, NULL, '2014-08-13 23:04:05', NULL),
(3, 'FOOD AND BEVERAGES', 0, NULL, NULL, '2014-08-13 23:04:05', NULL),
(4, 'HEALTH & BEAUTY ', 0, NULL, NULL, '2014-08-13 23:04:06', NULL),
(5, 'SPORTS & LEISURE ', 1, NULL, NULL, '2014-08-13 23:10:24', NULL),
(6, 'BOOKS & ENTERTAINMENTS ', 0, NULL, NULL, '2014-08-13 23:04:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account_id` int(10) unsigned DEFAULT NULL,
  `content` text,
  `created_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `comment_parent` int(11) DEFAULT NULL,
  `status` smallint(5) unsigned DEFAULT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(70) DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `subject` varchar(150) DEFAULT NULL,
  `content` text,
  `created_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `viewed` smallint(6) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `image_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `message_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `to` int(10) unsigned DEFAULT NULL,
  `from` int(10) unsigned DEFAULT NULL,
  `message` longtext,
  `read` smallint(5) unsigned DEFAULT '1',
  `status` smallint(5) unsigned DEFAULT '1',
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `total_price` double DEFAULT NULL,
  `total_tax` double DEFAULT NULL,
  `voucher` int(11) unsigned DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `postcode` varchar(50) DEFAULT NULL,
  `shipping_cost` double DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `order_detail_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `order_id` int(10) unsigned DEFAULT NULL,
  `product_id` int(10) unsigned DEFAULT NULL,
  `description` text,
  `quantity` int(10) unsigned DEFAULT NULL,
  `price` double DEFAULT NULL,
  `discount` double unsigned DEFAULT NULL,
  `tax` double unsigned DEFAULT NULL,
  PRIMARY KEY (`order_detail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) DEFAULT NULL,
  `short_parameters` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL,
  `stock_amount` int(11) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `description` text,
  `category_id` int(11) DEFAULT NULL,
  `discount` double DEFAULT NULL,
  `product_image` varchar(255) DEFAULT NULL,
  `created_date` timestamp NULL DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `product_state` smallint(6) DEFAULT NULL,
  `like` smallint(6) DEFAULT NULL,
  `dislike` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `short_parameters`, `price`, `stock_amount`, `color`, `short_description`, `description`, `category_id`, `discount`, `product_image`, `created_date`, `updated_date`, `product_state`, `like`, `dislike`) VALUES
(1, 'Iphone 5s', NULL, NULL, 3, NULL, NULL, NULL, 1, NULL, '1.jpg', NULL, '2014-08-16 03:47:10', 1, NULL, NULL),
(2, 'Ipad', NULL, NULL, 3, NULL, NULL, NULL, 1, NULL, 'b1.jpg', NULL, '2014-08-16 03:47:14', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_detail`
--

CREATE TABLE IF NOT EXISTS `product_detail` (
  `product_detail_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(10) unsigned DEFAULT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `model` varchar(100) DEFAULT NULL,
  `released` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `dimenstions` varchar(100) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`product_detail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `site`
--

CREATE TABLE IF NOT EXISTS `site` (
  `sitename` varchar(100) NOT NULL DEFAULT '',
  `facebook` varchar(150) DEFAULT NULL,
  `twitter` varchar(150) DEFAULT NULL,
  `youtube` varchar(150) DEFAULT NULL,
  `footer` varchar(255) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `tagline` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`sitename`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site`
--

INSERT INTO `site` (`sitename`, `facebook`, `twitter`, `youtube`, `footer`, `title`, `tagline`) VALUES
('Yii Shop', 'https://www.facebook.com/duka.tran', 'https://twitter.com/dukawebnet', 'https://www.youtube.com/user/DuKaTran', 'Yii Bootshop', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `role` smallint(6) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `salt`, `role`, `status`) VALUES
(2, 'sdfds@gmail.com', 'ed3faa442f85f97a0518df114bcbb054', 'CMI', 1, 1),
(3, 'sdfsds@gmail.com', '4d4bef6b89136f1e967731011763e377', 'PQb', 1, 1),
(8, 'admin@example.com', '37f9d7aaf2583c4a1dcd1835908e0b1c', 'zqF', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_detail`
--

CREATE TABLE IF NOT EXISTS `user_detail` (
  `user_detail_id` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `address2` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `postal_code` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `additional_information` mediumtext,
  `home_phone` int(11) DEFAULT NULL,
  `mobile_phone` int(11) DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `status` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`user_detail_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user_detail`
--

INSERT INTO `user_detail` (`user_detail_id`, `user_id`, `title`, `first_name`, `last_name`, `email`, `dob`, `company`, `address`, `address2`, `city`, `state`, `postal_code`, `country`, `additional_information`, `home_phone`, `mobile_phone`, `create_date`, `updated_date`, `status`) VALUES
(1, 4, NULL, 'Canh', 'Tran', 'admin@example.com', '0000-00-00', 'Dukaweb', 'vietnam', 'vietnam', NULL, NULL, NULL, NULL, 'information', 938085381, NULL, '2014-08-10 14:39:04', '2014-08-10 14:39:04', 1),
(2, 5, NULL, 'Canh', 'Tran', 'admin@example.com', '0000-00-00', 'Dukaweb', 'vietnam', 'vietnam', NULL, NULL, NULL, NULL, 'information', 938085381, NULL, '2014-08-10 14:40:46', '2014-08-10 14:40:46', 1),
(3, 8, NULL, 'Canh', 'Tran', 'admin@example.com', '0000-00-00', 'Dukaweb', 'vietnam', 'vietnam', NULL, NULL, NULL, NULL, 'information', 938085381, NULL, '2014-08-10 14:44:24', '2014-08-11 15:56:52', 1);

-- --------------------------------------------------------

--
-- Table structure for table `voucher`
--

CREATE TABLE IF NOT EXISTS `voucher` (
  `voucher_id` int(11) NOT NULL DEFAULT '0',
  `code` varchar(100) DEFAULT NULL,
  `name` varchar(150) DEFAULT NULL,
  `active` smallint(5) unsigned DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`voucher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
