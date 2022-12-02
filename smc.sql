-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2021 at 10:07 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smc`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `acc_id` int(11) NOT NULL,
  `acc_name` varchar(100) NOT NULL,
  `acc_brand` varchar(100) NOT NULL,
  `acc_image` varchar(100) NOT NULL,
  `acc_price` varchar(100) NOT NULL,
  `acc_quantity` varchar(100) NOT NULL,
  `acc_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `user` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'Ajay', 'shivi');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(25) NOT NULL,
  `subjectofmessage` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `password`) VALUES
(4, 'fhhf', 'nvndv');

-- --------------------------------------------------------

--
-- Table structure for table `mobiles`
--

CREATE TABLE `mobiles` (
  `mob_id` int(11) NOT NULL,
  `mob_name` varchar(50) NOT NULL,
  `mob_brand` varchar(50) NOT NULL,
  `mob_display` varchar(50) NOT NULL,
  `mob_price` varchar(50) NOT NULL,
  `mob_ram` varchar(50) NOT NULL,
  `mob_storage` varchar(50) NOT NULL,
  `mob_front_camera` varchar(50) NOT NULL,
  `mob_rear_camera` varchar(50) NOT NULL,
  `mob_image` varchar(50) NOT NULL,
  `mob_battery` varchar(50) NOT NULL,
  `mob_processor` varchar(50) NOT NULL,
  `mob_os` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mobiles`
--

INSERT INTO `mobiles` (`mob_id`, `mob_name`, `mob_brand`, `mob_display`, `mob_price`, `mob_ram`, `mob_storage`, `mob_front_camera`, `mob_rear_camera`, `mob_image`, `mob_battery`, `mob_processor`, `mob_os`) VALUES
(1, 'Vivo V20 Pro', 'VIVO', '6.44-inch', '29990', '8', '128', '44MP + 8MP', '64MP + 8MP + 2MP', 'assets\\oppo-a15s.jpg', '4000mAh', 'Qualcomm Snapdragon ', 'Android 11'),
(2, 'Vivo V20', 'VIVO', '6.44-inch', '21699', '8', '128', '44MP', '64MP +8MP + 2MP', 'assets/vivo.jpg', '4000mAh', 'Qualcomm Snapdragon ', 'Android 11'),
(3, 'Vivo Y52s', 'VIVO', '6.58-inch', '21990', '8', '256', '8MP', '48MP + 2MP', 'assets\\Vivo-Y52s.jpg', '5000mAh', 'Qualcomm Snapdragon ', 'Android 11'),
(4, 'Vivo V21e', 'VIVO', '6.44-inch', '29990', '8', '128', '44MP', '64MP + 8MP + 2MP', 'assets\\vivo21e.png', '4000mAh', 'Qualcomm Snapdragon ', 'Android 11'),
(5, 'Vivo V21 5G', 'VIVO', '6.44-inch', '29990', '8', '128', '44MP', '64MP + 8MP + 2MP', 'assets\\Vivo-V215g.jpg', '4000mAh', 'MediaTek Dimensity 8', 'Android 11'),
(6, 'Vivo Y20s G', 'VIVO', '6.51-inch', '14990', '6', '128', '8MP', '13MP + 2MP + 2MP', 'assets\\Vivo-Y20s.jpg', '5000mAh', 'MediaTek Helio G80', 'Android 11'),
(7, 'Vivo Y30', 'VIVO', '6.47-inch', '13990', '4', '128', '8MP', '13MP + 8MP +2MP +2MP', 'assets\\Vivo-Y30.jpg', '5000mAh', 'MediaTek Helio P35', 'Android 10'),
(8, 'Vivo Y50', 'VIVO', '6.53-inch', '16490', '8', '128', '16MP', '13MP + 8MP + 2MP + 2', 'assets\\vivo-y50.jpg', '5000mAh', 'Qualcomm Snapdragon ', 'Android'),
(9, 'Vivo Y31', 'VIVO', '6.58-inch', '16490', '6', '128', '16MP', '48MP + 2MP  +2MP', 'assets\\vivo-y31.jpg', '5000mAh', 'Qualcomm Snapdragon ', 'Android 11'),
(10, 'Vivo Y91i', 'VIVO', '6.22-inch', '8490', '3', '32', '5MP ', '13MP', 'assets\\Vivo-Y91i.jpg', '4030mAh', 'MediaTek Helio P22', 'Android Oreo 8.'),
(11, 'OPPO A53', 'OPPO', '6.5-inch', '12990', '6', '128', '16MP', '13MP + 2MP + 2MP', 'assets\\Oppo-A53.jpg', '5000mAh', 'Qualcomm Snapdragon ', 'Android 10'),
(12, 'OPPO A12', 'OPPO', '6.22-inch', '9990', '4', '64', '5MP', '13MP + 2MP', 'assets\\Oppo-A12.jpg', '4230mAh', 'MediaTek Helio P35 ', 'Android Pie 9.0'),
(13, 'OPPO A33', 'OPPO', '6.5-inch', '9990', '3', '32', '8MP', '13MP + 2MP + 2MP', 'assets\\Oppo-A12.jpg', '5000mAh', 'Qualcomm Snapdragon ', 'Android 10'),
(14, 'OPPO A53', 'OPPO', '6.5-inch', '15990', '4', '64', '16MP', '13MP + 2MP + 2MP ', 'assets\\Oppo-A53.jpg', '5000mAh', 'Qualcomm Snapdragon ', 'Android 10'),
(15, 'OPPO A12', 'OPPO', '6.22-inch', '9990', '4', '64', '5MP ', '13MP + 2MP', 'assets\\Oppo-A12.jpg', '4230mAh', 'MediaTek Helio P35', 'Android Pie 9.0'),
(16, 'OPPO A53s 5G', 'OPPO', '6.52-inch', '14990', '6', '128', '8MP', '13MP + 2MP + 2MP', 'assets\\oppo-A53s.jpg', '5000mAh', 'MediaTek Dimensity 7', 'Android 11'),
(17, 'OPPO F19 Pro', 'OPPO', '6.43-inch', '23490', '8', '256', '16MP ', '48MP + 8MP + 2MP + 2', 'assets\\Oppo-F19.jpg', '4310mAh', 'MediaTek Helio P95', 'Android 11'),
(18, 'OPPO A54', 'OPPO', '6.51-inch', '13490', '4', '64', '16MP', '13MP + 2MP + 2MP', 'assets\\oppo-a54.jpg', '5000mAh', 'MediaTek Helio P35', 'Android 10'),
(19, 'OPPO A31', 'OPPO', '6.5-inch', '11990', '4', '64', '8MP', '12MP + 2MP + 2MP', 'assets\\Oppo-A31.jpg', '4230mAh', 'MediaTek Helio P35', 'Android Pie 9'),
(20, 'OPPO F19 Pro + 5G', 'OPPO', '6.43-inch', '25990', '8', '128', '16MP', '48MP + 8MP + 2MP + 2', 'assets\\Oppo-F19.jpg', '4310mAh', 'MediaTek Dimensity 8', 'Android 11'),
(21, 'OPPO F17', 'OPPO', '6.44-inch', '18460', '8', '128', '16MP', '16MP + 8MP + 2MP + 2MP', 'assets\\Oppo-F17.jpg', '4015mAh', 'Qualcomm Snapdragon 662', 'Android 10'),
(22, 'OPPO F19 ', 'OPPO', '6.43-inch', '18990', '6', '128', '16MP', '48MP + 2MP + 2MP', 'assets\\Oppo-F19.jpg', '5000mAh', 'Qualcomm Snapdragon 662', 'Android 11'),
(23, 'OPPO A15S', 'OPPO', '6.52-inch', '12499', '4', '128', '', '13MP', 'assets\\oppo-a15s.jpg', '4230mAh', '', 'Android Android Q 10'),
(24, 'REDMI Note 10 Pro Max', 'REDMI', '6.67-inch', '22949', '8', '128', '16MP', '108MP + 8MP + 5MP + 2MP', 'assets\\Redmi-Note-10-Pro-Max.jpg', '5020mAh', 'Qualcomm Snapdragon 732G', 'Android 11'),
(25, 'REDMI Note 9 Pro Max', 'REDMI', '6.67-inch', '18795', '6', '64', '32MP', '64MP + 8MP + 5MP + 2MP', 'assets\\Redmi-Note-9-Pro-Max.jpg', '5020mAh ', 'Qualcomm Snapdragon 720G', 'Android 10'),
(26, 'REALME C20', 'REALME ', '6.5-inch', '6799', '2', '32', '5MP', '8MP', 'assets\\realme-c20.jpg', '5000mAh', 'MediaTek Helio G35', 'Android 10'),
(27, 'REALME C2', 'REALME', '6.1-inch', '6499', '2', '16', '5MP', '13MP + 2MP', 'assets\\realme-c2.jpg', '4000mAh', 'MediaTek P22', 'Android Pie 9.0'),
(28, 'REALME C21', 'REALME', '6.5-inch', '8999', '4', '64', '5MP', '13MP + 2MP + 2MP', 'assets\\realme-c21.jpg', '5000mAh', 'MediaTek Helio G35', 'Android 10'),
(29, 'REALME C11', 'REALME', '6.5-inch', '7499', '2', '32', '5MP', '13MP + 2MP + ', 'assets\\realmec11.jpg', '5000mAh', 'MediaTek Helio G35', 'Android 10'),
(30, 'REALME Narzo 30A', 'REALME', '6.51-inch', '8999', '3', '32', '8MP', '13MP + 2MP', 'assets\\realme-narzo-30a.jpg', '6000mAh', 'MediaTek Helio G85', 'Android 10'),
(31, 'REALME Narzo 20', 'REALME', '6.52-nch', '10499', '4', '64', '8MP', '48MP + 8MP + 2MP', 'assets\\realme-narzo-20.jpg', '6000mAh', 'MediaTek Helio G85', 'Android 10'),
(32, 'REALME C25', 'REALME', '6.5-inch', '10999', '4', '128', '8MP', '13MP + 2MP +2MP', 'assets\\Realme-C25.jpg', '6000mAh', 'MediaTek Helio G70', 'Android 11'),
(33, 'REALME 8 ', 'REALME', '6.4-inch', '14999', '4', '128', '16MP', '64MP + 8MP +2MP +2MP', 'assets\\Realme-8.jpg', '5000mAh', 'MediaTek Helio G95', 'Android 11'),
(34, 'REALME 8 5G', 'REALME', '6.5-inch', '14999', '4', '128', '16MP', '48MP + 2MP +2MP', 'assets\\Realme-8-5G.jpg', '5000mAh', 'MediaTek Dimensity 700', 'Android 11'),
(35, 'REALME Narzo 20 Pro', 'REALME', '6.5-inch', '18999', '8', '128', '16MP', '48MP + 8MP + 2MP +2MP', 'assets\\Realme-Narzo-20pro.jpg', '4500mAh', 'MediaTek Helio G95', 'Android 10'),
(36, 'REALME 8 Pro', 'REALME', '6.4-inch', '17999', '6', '128', '16MP', '108MP + 8MP +2MP +2MP', 'assets\\Realme-8.jpg', '4500mAh', 'Qualcomm Snapdragon 720G', 'Android 11'),
(37, 'REALME Narzo 30 Pro 5G', 'REALME', '6.5-inch', '16999', '6', '64', '16MP', '48MP  + 8MP + 2MP  ', 'assets\\realme30pro.jpg', '5000mAh', 'MediaTek Dimensity 800U', 'Android 10'),
(38, 'REALME 7 ', 'REALME', '6.5-inch', '20999', '8', '128', '16MP', '64MP + 8MP +2MP +2MP', 'assets\\Realme-7.jpg', '5000mAh', 'MediaTek Helio G95', 'Android 10'),
(39, 'REALME X50 Pro', 'REALME', '6.44-inch', '47999', '12', '256', '32MP + 8MP', '64MP + 12MP +8MP +2MP ', 'assets\\Realme-X50-Pro-5G.jpg', '4200mAh', 'Qualcomm Snapdragon 865', 'Android 10'),
(40, 'REALME X7 5G', 'REALME', '6.43-inch', '19999', '6', '128', '16MP', '64MP +8MP +2MP', 'assets\\Realme-X7-Pro.jpg', '4310mAh', 'MediaTek Dimensity 800U', 'Android 10'),
(41, 'REALME C15', 'REALME', '6.52-inch', '10999', '4', '64', '8MP', '13MP + 8MP + 2MP + 2MP', 'assets\\realme-c15.jpg', '6000mAh', 'Qualcomm Snapdragon 460', 'Android 10'),
(42, 'REALME 6Pro', 'REALME', '6.6-INCH', '17999', '6', '64', '16MP ', '64MP + 12MP + 8MP + 2MP', 'assets\\Realme-6-Pro.jpg', '4300mAh', 'snapdragon 720G', 'Android 10'),
(43, 'REALME C12', 'REALME', '6.52-inch', '8999', '3', '32', '5MP ', '13MP + 2MP + 2MP', 'assets\\Realme-C12.jpg', '6000mAh', 'MediaTek Helio G35', 'Android 10'),
(44, 'REALME 7i', 'REALME', '6.5-inch', '14999', '4', '128', '16MP', '64MP +8MP +2MP +2MP', 'assets\\Realme-7i.jpg', '5000mAh', 'Qualcomm Snapdragon 662', 'Android 10'),
(45, 'REALME C3', 'REALME', '6.5-inch', '9999', '4', '64', '5MP ', '12MP + 2MP ', 'assets\\Realme-C3.jpg', '5000mAh', 'Helio G70', 'Android 10'),
(46, 'INFINIX Smart HD ', 'INFINIX ', '6.1-INCH', '6499', '2', '32', '5MP ', '8MP', 'assets\\infi1.jpg', '5000mAh', 'MediaTek Helio A20', 'Android 10'),
(47, 'INFINIX Smart 4 PLUS', 'INFINIX', '6.82-inch', '7999', '3', '32', '8MP', '13MP ', 'assets\\infi2.png', '6000mAh', 'MediaTek Helio A25', 'Android 10'),
(48, 'INFINIX Hot 10 Play', 'INFINIX', '6.82-inch', '8499', '4', '64', '8MP', '13MP', 'assets\\infi3.jpg', '6000mAh', 'MediaTek Helio  G32', 'Android 10'),
(49, 'INFINIX Hot 10', 'INFINIX', '6.78-inch', '10999', '6', '128', '8MP', '16MP + 2MP + 2MP ', 'assets\\infi4.png', '5200mAh', 'MediaTek Helio G70', 'Android 10'),
(50, 'INFINIX Note 7', 'INFINIX ', '6.95', '10999', '4', '64', '16MP', '48MP + 2MP +2MP', 'assets\\Infinix-Note-7.jpg', '5000mAh', 'MediaTek Helio G70', 'Android 10'),
(51, 'INFINIX  Zero 8i', 'INFINIX', '6.85-inch', '15999', '8', '128', '16MP +8MP', '48MP +8MP +2MP', 'assets\\Infinix-Zero-8i.jpg', '4500mAh ', 'MediaTek Helio G90T', 'Android 10'),
(52, 'INFINIX Smart HD ', 'INFINIX ', '6.1-INCH', '6499', '2', '32', '5MP ', '8MP', 'assets\\Infinix-Smart-HD.jpg', '5000mAh', 'MediaTek Helio A20', 'Android 10'),
(53, 'INFINIX Smart 4 PLUS', 'INFINIX', '6.82-inch', '7999', '3', '32', '8MP', '13MP ', 'assets\\infinix-smart-4-plus.webp', '6000mAh', 'MediaTek Helio A25', 'Android 10'),
(54, 'INFINIX S4', 'INFINIX', '6.21-inch', '10999', '4', '64', '32MP', '13MP + 2MP + 8MP', 'assets\\infinix5.jpg', '4000mAh', 'Helio P22', 'Android Pie 9'),
(55, 'INFINIX Hot 7', 'INFINIX', '6.19-inch', '9790', '4', '64', '13MP + 2MP', '13MP +2MP', 'assets\\Infinix-Hot-7.jpg', '4000mAh', 'Helio P25', 'Android Pie 9.0'),
(56, 'SAMSUNG M01 Core', 'SAMSUNG', '5.3-inch', '4999', '1', '16', '5MP', '8MP ', 'assets\\Samsung-Galax-M01-Core.jpg', '3000mAh ', 'MediaTek MT66739WW', 'Android Android Q 10'),
(57, 'SAMSUNG Galaxy J2 Core', 'SAMSUNG', '5-inch', '6200', '1', '8', '5MP', '8MP', 'assets\\Samsung-Galaxy-J2.jpg', '2600mAh', 'Exynos', 'Android Oreo 8.1'),
(58, 'SAMSUNG Galaxy J2', 'SAMSUNG', '4.7-inch', '6000', '1', '8', '2MP', '5MP', 'assets\\Samsung-Galaxy-J2.jpg', '2000mAh', '', 'Android Lollipop 5.4.1'),
(59, 'SAMSUNG Galaxy M02', 'SAMSUNG', '6.55-inch', '7890', '2', '32', '5MP', '13MP + 2MP', 'assets\\Samsung-Galaxy-m02.jpg', '5000mAh', 'MediaTek MT6739', 'Android Pie 10'),
(60, 'SAMSUNG Galaxy M01', 'SAMSUNG', '5.7-inch', '9999', '3', '32', '5MP', '13MP + 2MP', 'assets\\samsung-mo1.png', '4000mAh', 'Qualcomm Snapdragon(SDM439)', 'Android 10'),
(61, 'SAMSUNG Galaxy A10', 'SAMSUNG', '6.2-inch', '7990', '2', '32', '5MP', '13MP ', 'assets\\Samsung-Galaxy-A10.webp', '3400mAh', 'Exynos 7884', 'Android Pie 9.0'),
(62, 'SAMSUNG Galaxy S21 Plus', 'SAMSUNG', '6.7-inch', '80999', '8', '256', '10MP', '64MP + 12MP + 12MP ', 'assets\\Samsung-Galaxy-S21.jpg', '4800mAh', 'Exynos 2100', 'Android 10'),
(63, 'SAMSUNG S8 Plus', 'SAMSUNG', '6.2-inch', '53990', '4', '64', '8MP', '12MP ', 'assets\\Samsung-Galaxy-S8-Plus.jpg', '3500mAh', 'Exynos 8895', 'Android Nougat7'),
(64, 'SAMSUNG Galaxy Tab S6 Lite', 'SAMSUNG', '10.4-inch', '31999', '4', '64', '5MP', '8MP ', 'assets\\Samsung-Galaxy-Tab-S6-Lite.jpg', '7040mAh ', 'Exynos ', 'Android 10'),
(65, 'SAMSUNG Galaxy Tab A 8.0', 'SAMSUNG', '7.996-inch', '8999', '2', '32', '', '8MP', 'assets\\Samsung-Galaxy-Tab-A-8.0.jpg', '5100mAh', '', 'Android Android 9.0'),
(66, 'SAMSUNG Galaxy Tab A7 LTE ', 'SAMSUNG', '10.4-inch', '21999', '3', '32', '5MP', '8MP', 'assets\\Samsung-Galaxy-Tab-A7.jpg', '7040mAh', 'Qualcomm Snapdragon 662', 'Android 10'),
(67, 'POCO M3', 'POCO', '6.53-inch', '10999', '6', '64', '8MP', '48MP + 2MP + 2MP', 'assets\\Poco-M3.jpg', '6000mAh', 'Qualcomm Snapdragon 662', 'Android 10'),
(68, 'POCO M3', 'POCO', '6.53-inch', '11999', '6', '128', '8MP', '48MP + 2MP + 2MP', 'assets\\Poco-M3.jpg', '6000mAh', 'Qualcomm Snapdragon 662', 'Android 10'),
(69, 'POCO X3', 'POCO', '6.67-inch', '14999', '6', '64', '20MP', '64MP + 13MP +2MP +2MP', 'assets\\pocox3x.jpg', '6000mAh', 'Qualcomm Snapdragon 732G', 'Android 10'),
(70, 'POCO C3', 'POCO ', '6.53-inch', '8499', '4', '64', '5MP', '13MP + 2MP + 2MP', 'assets\\pococ3.jpg', '5000mAh', 'MediaTek Helio G35', 'Android 10'),
(71, 'POCO X3 Pro', 'POCO', '6.67-inch', '18999', '6', '128', '20MP', '48MP + 8MP + 2MP +2MP', 'assets\\pocoxpro.jpg', '5160mAh', 'Qualcomm Snapdragon 860', 'Android 11'),
(73, 'POCO M2 Pro', 'POCO', '6.67-inch', '12999', '4', '64', '16MP', '48MP + 8MP +5MP + 2MP', 'assets\\m2poco.jpg', '5000mAh', 'Qualcomm Snapdragon 720G', 'Android 10'),
(74, 'ITEL Vision 1', 'ITEL', '6.088-inch', '6549', '3', '32', '5MP', '8MP + 0.3MP', 'assets\\ITEL.jpg', '4000mAh', 'Unisoc SC9863A', 'Android Pie 9'),
(75, 'SAMSUNG  Galaxy A71 ', 'SAMSUNG ', '6.7-inch', '27499', '8', '128', '32MP', '64MP + 12MP + 5MP + 5MP', 'assets\\Samsung-Galaxy-A71.jpg', '4500mAh', 'Qualcomm SM7150', 'Android 10'),
(76, 'SAMSUNG Galaxy M40', 'SAMSUNG', '6.3-inch', '15490', '6', '128', '', '32MP', 'assets\\Samsung-Galaxy-A40.jpg', '3500mAh', '', 'Android Pie 9.0'),
(77, 'APPLE iPhone 11', 'APPLE', '6.1-inch', '56999', '', '128', '12MP', '12MP + 12MP', 'assets\\apple-iphone-11.jpg', '', 'A 13 Bionic Chip ', 'iOS 14.2'),
(78, 'APPLE iPhone XR', 'APPLE', '6.1-inch', '46999', '', '128', '7MP', '12MP', 'assets\\iphonexr.jpg', '', 'A12 Bionic Chip ', 'iOS 12'),
(79, 'NOKIA  2.4', 'NOKIA', '6.5-inch', '9999', '3', '64', '5MP', '13MP + 2MP', 'assets\\nokia2.4.jpg', '4500mAh', 'MediaTek Helio P22', 'Android 10'),
(80, 'NOKIA C3', 'NOKIA', '5.99-inch', '7799', '3', '32', '5MP', '8MP', 'assets\\NOKIA.jpg', '3040mAh', 'SC9863A', 'Android 10'),
(81, 'TECHNO Camon', 'TECHNO', '6.55-inch', '9999', '4', '64', '16MP', '48MP + 2MP + 2MP', 'assets\\TECNO-Camon.jpg', '5000mAh', 'Helio P22', 'Android 10'),
(82, 'TECHNO Cemon 16', 'TECHNO', '6.8-inch', '11499', '4', '64', '16MP', '64MP + 2MP + 2MP ', 'assets\\Tecno-Camon-16.jpg', '5000mAh', 'MediaTek Helio G70', 'Android 10'),
(83, 'TECHNO POVA', 'TECHNO', '6.8', '13499', '6', '128', '8MP', '16MP + 2MP + 2MP', 'assets\\techno pova.jpg', '6000mAh', 'MediaTek Helio G80', 'Android 10');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`) VALUES
(3, 'vbbvj', 'fh@gmail.com', 'hfv');

-- --------------------------------------------------------

--
-- Table structure for table `searchbar`
--

CREATE TABLE `searchbar` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `searchbar`
--

INSERT INTO `searchbar` (`id`, `name`, `description`) VALUES
(1, 'first name', 'description of first name'),
(2, 'second name', 'description of second name'),
(3, 'third name', 'description of third name');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobiles`
--
ALTER TABLE `mobiles`
  ADD PRIMARY KEY (`mob_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `searchbar`
--
ALTER TABLE `searchbar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mobiles`
--
ALTER TABLE `mobiles`
  MODIFY `mob_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `searchbar`
--
ALTER TABLE `searchbar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
