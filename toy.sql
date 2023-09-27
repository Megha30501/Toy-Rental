-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2019 at 05:17 AM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toy`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcate`
--

CREATE TABLE IF NOT EXISTS `addcate` (
  `cate_id` int(11) NOT NULL,
  `cate_name` varchar(80) NOT NULL,
  `isactive` int(11) NOT NULL,
  `DOI` date NOT NULL,
  `DOU` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addcate`
--

INSERT INTO `addcate` (`cate_id`, `cate_name`, `isactive`, `DOI`, `DOU`) VALUES
(1, 'toys', 2, '0000-00-00', '0000-00-00'),
(2, 'barbie', 1, '0000-00-00', '0000-00-00'),
(3, 'doremon', 1, '0000-00-00', '0000-00-00'),
(4, 'abc', 1, '2019-01-28', '2019-01-28'),
(5, 'Doll', 1, '2019-02-01', '2019-02-01'),
(6, 'abcd', 1, '2019-02-04', '2019-02-04'),
(7, 'horse', 1, '2019-02-20', '2019-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `addsubcate`
--

CREATE TABLE IF NOT EXISTS `addsubcate` (
  `subcate_id` int(11) NOT NULL,
  `cate_id` int(11) NOT NULL,
  `subcate_name` varchar(80) NOT NULL,
  `isactive` int(11) NOT NULL,
  `DOI` date NOT NULL,
  `DOU` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addsubcate`
--

INSERT INTO `addsubcate` (`subcate_id`, `cate_id`, `subcate_name`, `isactive`, `DOI`, `DOU`) VALUES
(1, 3, 'toy', 1, '2019-01-29', '2019-01-29'),
(2, 4, 'pqr', 2, '2019-02-02', '2019-02-02'),
(3, 6, 'efg', 1, '2019-02-04', '2019-02-04'),
(4, 4, 'rd', 1, '2019-02-10', '2019-02-10');

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `id` int(11) NOT NULL,
  `areaname` varchar(100) NOT NULL,
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `pincode` int(11) NOT NULL,
  `isactive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` varchar(100) NOT NULL,
  `isactive` int(11) NOT NULL,
  `DOI` date NOT NULL,
  `DOU` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `package_id`, `product_id`, `user_id`, `quantity`, `price`, `isactive`, `DOI`, `DOU`) VALUES
(61, 2, 0, 5, 0, '', 1, '2019-03-28', '0000-00-00'),
(62, 2, 0, 0, 0, '', 1, '2019-03-29', '0000-00-00'),
(63, 0, 2, 0, 1, '', 1, '2019-03-29', '2019-03-29'),
(64, 0, 2, 0, 1, '', 1, '2019-03-29', '2019-03-29');

-- --------------------------------------------------------

--
-- Table structure for table `cart_package`
--

CREATE TABLE IF NOT EXISTS `cart_package` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `isactive` int(5) NOT NULL,
  `doi` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart_package`
--

INSERT INTO `cart_package` (`id`, `user_id`, `package_id`, `isactive`, `doi`) VALUES
(1, 6, 2, 1, '2019-03-26'),
(2, 6, 2, 1, '2019-03-26'),
(3, 6, 2, 1, '2019-03-26'),
(4, 6, 1, 1, '2019-03-26'),
(5, 6, 1, 1, '2019-03-26'),
(6, 6, 1, 1, '2019-03-26'),
(7, 6, 1, 1, '2019-03-26'),
(8, 6, 1, 1, '2019-03-26'),
(9, 6, 1, 1, '2019-03-26'),
(10, 6, 1, 1, '2019-03-26'),
(11, 6, 1, 1, '2019-03-26'),
(12, 6, 1, 1, '2019-03-26'),
(13, 6, 1, 1, '2019-03-26'),
(14, 6, 1, 1, '2019-03-26'),
(15, 6, 1, 1, '2019-03-26'),
(16, 6, 1, 1, '2019-03-26'),
(17, 6, 1, 1, '2019-03-26'),
(18, 6, 1, 1, '2019-03-26'),
(19, 6, 1, 1, '2019-03-26'),
(20, 6, 1, 1, '2019-03-26'),
(21, 6, 1, 1, '2019-03-26'),
(22, 6, 1, 1, '2019-03-26'),
(23, 6, 1, 1, '2019-03-26'),
(24, 6, 1, 1, '2019-03-26'),
(25, 6, 1, 1, '2019-03-26'),
(26, 6, 1, 1, '2019-03-26'),
(27, 6, 1, 1, '2019-03-26'),
(28, 6, 1, 1, '2019-03-26'),
(29, 6, 1, 1, '2019-03-26'),
(30, 6, 1, 1, '2019-03-26'),
(31, 6, 1, 1, '2019-03-26'),
(32, 6, 1, 1, '2019-03-26'),
(33, 6, 1, 1, '2019-03-26'),
(34, 6, 1, 1, '2019-03-26'),
(35, 6, 1, 1, '2019-03-26'),
(36, 6, 1, 1, '2019-03-26'),
(37, 6, 1, 1, '2019-03-26'),
(38, 6, 1, 1, '2019-03-26'),
(39, 6, 1, 1, '2019-03-26'),
(40, 6, 1, 1, '2019-03-26'),
(41, 6, 1, 1, '2019-03-26'),
(42, 6, 1, 1, '2019-03-26'),
(43, 6, 1, 1, '2019-03-26'),
(44, 6, 1, 1, '2019-03-26'),
(45, 6, 1, 1, '2019-03-26'),
(46, 6, 1, 1, '2019-03-26'),
(47, 6, 1, 1, '2019-03-26'),
(48, 6, 1, 1, '2019-03-26'),
(49, 6, 1, 1, '2019-03-26'),
(50, 6, 1, 1, '2019-03-26'),
(51, 6, 1, 1, '2019-03-26'),
(52, 6, 1, 1, '2019-03-26'),
(53, 6, 1, 1, '2019-03-26'),
(54, 6, 1, 1, '2019-03-26'),
(55, 6, 1, 1, '2019-03-26'),
(56, 6, 1, 1, '2019-03-26'),
(57, 6, 1, 1, '2019-03-26'),
(58, 6, 1, 1, '2019-03-26'),
(59, 6, 1, 1, '2019-03-26'),
(60, 6, 1, 1, '2019-03-26'),
(61, 6, 1, 1, '2019-03-26'),
(62, 6, 1, 1, '2019-03-26'),
(63, 6, 1, 1, '2019-03-26'),
(64, 6, 1, 1, '2019-03-26'),
(65, 6, 1, 1, '2019-03-26'),
(66, 6, 1, 1, '2019-03-26'),
(67, 6, 1, 1, '2019-03-26'),
(68, 6, 1, 1, '2019-03-26'),
(69, 6, 1, 1, '2019-03-26'),
(70, 6, 1, 1, '2019-03-26'),
(71, 6, 1, 1, '2019-03-26'),
(72, 6, 1, 1, '2019-03-26'),
(73, 6, 1, 1, '2019-03-26'),
(74, 6, 1, 1, '2019-03-26'),
(75, 6, 1, 1, '2019-03-26'),
(76, 6, 1, 1, '2019-03-26'),
(77, 6, 1, 1, '2019-03-26'),
(78, 6, 1, 1, '2019-03-26'),
(79, 6, 1, 1, '2019-03-26'),
(80, 6, 1, 1, '2019-03-26'),
(81, 6, 1, 1, '2019-03-26'),
(82, 6, 1, 1, '2019-03-26'),
(83, 6, 1, 1, '2019-03-26'),
(84, 6, 1, 1, '2019-03-26'),
(85, 6, 1, 1, '2019-03-26'),
(86, 6, 1, 1, '2019-03-26'),
(87, 6, 1, 1, '2019-03-26'),
(88, 6, 1, 1, '2019-03-26'),
(89, 6, 1, 1, '2019-03-26'),
(90, 6, 1, 1, '2019-03-26');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(80) NOT NULL,
  `isactive` int(11) NOT NULL,
  `DOI` date NOT NULL,
  `DOU` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`, `isactive`, `DOI`, `DOU`) VALUES
(1, 'abd', 1, '2019-02-20', '2019-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `email` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`email`, `password`) VALUES
('dhara12@gmail.com', '1205'),
('megha30@gmail.com', '3005');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE IF NOT EXISTS `packages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `DOU` date NOT NULL,
  `DOI` date NOT NULL,
  `isactive` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `price`, `image`, `DOU`, `DOI`, `isactive`) VALUES
(1, 'Sound Toys', 5000, 'uploads/category-1.png', '2019-03-26', '2019-03-26', 1),
(2, 'Floor Puzzels', 7000, 'uploads/category-2.png', '2019-03-26', '2019-03-26', 1),
(3, 'Construction', 4000, 'uploads/category-3.png', '2019-03-26', '2019-03-26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pack_order`
--

CREATE TABLE IF NOT EXISTS `pack_order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `postalcode` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `duration` varchar(80) NOT NULL,
  `DOI` date NOT NULL,
  `DOU` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pack_order`
--

INSERT INTO `pack_order` (`id`, `user_id`, `package_id`, `name`, `address`, `phone`, `postalcode`, `price`, `duration`, `DOI`, `DOU`) VALUES
(10, 6, 1, 'asd', 'sdsds', '9876543210', 878789, 5000, '4months', '2019-03-28', '2019-03-28'),
(11, 5, 2, 'dhara', 'abc', '9638527410', 65, 7000, '9months', '2019-03-28', '2019-03-28');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(80) NOT NULL,
  `price` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `DOI` date NOT NULL,
  `DOU` date NOT NULL,
  `isactive` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `price`, `package_id`, `image`, `DOI`, `DOU`, `isactive`) VALUES
(1, 'puzzel', 250, 2, 'uploads/category-5.png', '2019-03-26', '2019-03-26', 1),
(2, 'TelePhone', 200, 1, 'uploads/product-5.jpg', '2019-03-26', '2019-03-26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE IF NOT EXISTS `product_order` (
  `id` int(11) NOT NULL,
  `userorder_id` int(11) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_status` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phone` int(11) NOT NULL,
  `postalcode` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `DOI` date NOT NULL,
  `DOU` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_order`
--

INSERT INTO `product_order` (`id`, `userorder_id`, `cart_id`, `user_id`, `product_id`, `order_status`, `name`, `address`, `phone`, `postalcode`, `quantity`, `price`, `DOI`, `DOU`) VALUES
(19, 0, 0, 6, 1, '', 'milu', 'asdfg', 963822741, 12, 2, 250, '2019-03-28', '2019-03-28'),
(26, 1, 54, 6, 1, '', '', '', 0, 0, 2, 250, '2019-03-28', '2019-03-28'),
(27, 1, 56, 6, 2, '', 'kj', '', 0, 0, 1, 200, '2019-03-28', '2019-03-28'),
(28, 0, 0, 6, 1, '', 'qwe', 'sr', 0, 0, 2, 250, '2019-03-28', '2019-03-28'),
(29, 0, 0, 6, 2, '', 'qwe', 'sr', 0, 0, 1, 200, '2019-03-28', '2019-03-28'),
(30, 1, 54, 6, 1, '', '', '', 0, 0, 2, 250, '2019-03-28', '2019-03-28'),
(31, 1, 56, 6, 2, '', '', '', 0, 0, 1, 200, '2019-03-28', '2019-03-28'),
(34, 1, 57, 1, 2, '', '', '', 0, 0, 2, 200, '2019-03-28', '2019-03-28'),
(35, 0, 0, 1, 2, '', 'megha', 'vastral', 2147483647, 123, 2, 200, '2019-03-28', '2019-03-28'),
(36, 1, 58, 1, 1, '', '', '', 0, 0, 4, 250, '2019-03-28', '2019-03-28'),
(37, 0, 0, 1, 1, '', 'dhara', 'av', 1234567890, 1, 4, 250, '2019-03-28', '2019-03-28'),
(39, 0, 0, 8, 2, '', 'heti', 'abd', 2147483647, 36, 2, 200, '2019-03-28', '2019-03-28');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `usename` varchar(80) NOT NULL,
  `email` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `password` varchar(80) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `security_que`
--

CREATE TABLE IF NOT EXISTS `security_que` (
  `id` int(11) NOT NULL,
  `question` varchar(200) NOT NULL,
  `isactive` int(11) NOT NULL,
  `DOI` date NOT NULL,
  `DOU` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `security_que`
--

INSERT INTO `security_que` (`id`, `question`, `isactive`, `DOI`, `DOU`) VALUES
(1, 'what is your hobbies?', 1, '2019-03-26', '2019-03-26');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `id` int(11) NOT NULL,
  `statename` varchar(50) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` int(11) NOT NULL,
  `dod` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(80) NOT NULL,
  `address` varchar(500) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `isactive` int(11) NOT NULL,
  `DOI` datetime NOT NULL,
  `DOU` datetime NOT NULL,
  `user_type` int(11) NOT NULL,
  `age` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_name`, `address`, `email`, `password`, `mobile_no`, `isactive`, `DOI`, `DOU`, `user_type`, `age`) VALUES
(1, 'radha', 'abd', 'megha30@gmail.com', '123', 1234567890, 1, '2019-02-02 00:00:00', '2019-02-02 00:00:00', 2, ''),
(2, '', '', 'dhara@gmail.com', '', 2147483647, 2, '2019-02-02 00:00:00', '2019-02-02 00:00:00', 2, ''),
(3, 'nidhi', 'a', 'a@m.i', 'a', 1234567890, 2, '2019-02-02 00:00:00', '2019-02-02 00:00:00', 2, '12months-2years'),
(5, 'dhara', 'asdff', 'dhara@gmail.com', '123', 1234567890, 1, '2019-02-02 00:00:00', '2019-02-02 00:00:00', 2, '12months-2years'),
(6, 'milu', 'vastral', 'milu@gmail.com', 'milu', 1234567889, 1, '2019-02-04 00:00:00', '2019-02-04 00:00:00', 2, '2years-5years'),
(7, 'nidhi', 'ranip', 'nidhi@gmail.com', 'nidhi', 2147483647, 1, '2019-02-09 00:00:00', '2019-02-09 00:00:00', 2, '8years-9years'),
(8, 'heti', 'abd', 'h@g.com', '123', 2147483647, 1, '2019-03-28 00:00:00', '2019-03-28 00:00:00', 2, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcate`
--
ALTER TABLE `addcate`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `addsubcate`
--
ALTER TABLE `addsubcate`
  ADD PRIMARY KEY (`subcate_id`);

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_package`
--
ALTER TABLE `cart_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pack_order`
--
ALTER TABLE `pack_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `security_que`
--
ALTER TABLE `security_que`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcate`
--
ALTER TABLE `addcate`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `addsubcate`
--
ALTER TABLE `addsubcate`
  MODIFY `subcate_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `cart_package`
--
ALTER TABLE `cart_package`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pack_order`
--
ALTER TABLE `pack_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `security_que`
--
ALTER TABLE `security_que`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
