-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2018 at 08:05 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supply_office`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_pass`) VALUES
(1, '$2y$10$.BagJOQ2967hM.S7KKRrmOW04hCg4fpYE8womEBDc.1sUnNkGT9FC');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(255) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_total`) VALUES
(1, 'qeqw', 0),
(2, 'reted', 0),
(3, 'ikaw pa', 0),
(4, 'doraemon', 0);

-- --------------------------------------------------------

--
-- Table structure for table `deleted`
--

CREATE TABLE `deleted` (
  `del_id` int(11) NOT NULL,
  `des` varchar(255) NOT NULL,
  `article` varchar(255) NOT NULL,
  `prop_num` varchar(255) NOT NULL,
  `total_amt` int(255) NOT NULL,
  `date_del` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cat_id` int(255) NOT NULL,
  `off_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deleted`
--

INSERT INTO `deleted` (`del_id`, `des`, `article`, `prop_num`, `total_amt`, `date_del`, `cat_id`, `off_id`) VALUES
(1, 'sawee', 'sawe', '2020', 0, '2018-06-07 12:05:03', 8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `form_id` int(255) NOT NULL,
  `form_name` varchar(255) NOT NULL,
  `date_assump` date NOT NULL,
  `form_total` int(255) NOT NULL,
  `person_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`form_id`, `form_name`, `date_assump`, `form_total`, `person_id`) VALUES
(29, 'CS E', '0000-00-00', 0, 1),
(30, 'IT', '0000-00-00', 0, 1),
(31, 'BIO', '0000-00-00', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `history_id` int(11) NOT NULL,
  `item_no` int(11) NOT NULL,
  `date_trans` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `form_id` int(11) NOT NULL,
  `office_id` int(11) NOT NULL,
  `person_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`history_id`, `item_no`, `date_trans`, `form_id`, `office_id`, `person_id`) VALUES
(1, 1, '2018-06-19 00:56:27', 26, 1, 1),
(2, 1, '2018-06-19 01:41:06', 26, 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `cat_id` int(255) NOT NULL,
  `item_no` int(255) NOT NULL,
  `article` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `date_acquire` date NOT NULL,
  `prop_num` varchar(255) NOT NULL,
  `unit_measure` varchar(255) NOT NULL COMMENT 'unit/set',
  `unit_value` varchar(255) NOT NULL,
  `total_amt` float NOT NULL,
  `qty_prop_card` int(255) NOT NULL,
  `qty_phys_count` int(255) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `office_id` int(255) NOT NULL,
  `form_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`cat_id`, `item_no`, `article`, `des`, `date_acquire`, `prop_num`, `unit_measure`, `unit_value`, `total_amt`, `qty_prop_card`, `qty_phys_count`, `remarks`, `office_id`, `form_id`) VALUES
(7, 1, 'wohoo', 'sample', '2018-12-31', 'BU #1010', 'unit(s)', '100', 100, 1, 1, '11', 0, 0),
(7, 2, 'wohoo', 'sample', '2018-12-31', 'BU #1010', 'unit(s)', '100', 0, 0, 0, 'Select Personnel', 0, 0),
(8, 3, 'sawe', 'sawee', '2018-12-31', '2020', 'unit(s)', '100', 0, 0, 0, 'Select Personnel', 1, 1),
(7, 4, 'wohoo', 'sample', '2018-12-31', 'BU #1010', 'unit(s)', '100', 100, 1, 1, '13', 1, 1),
(8, 6, 'sawe', 'sawee', '2018-12-31', '2020', 'unit(s)', '100', 100, 1, 1, '1', 1, 1),
(1, 7, 'wohoo', 'sample', '2018-12-31', 'BU #1010', 'unit(s)', '100', 0, 0, 0, 'Select Personnel', 0, 0),
(8, 8, 'sawe', 'sawee', '2018-12-31', '2020', 'unit(s)', '100', 0, 0, 0, 'Select Personnel', 0, 0),
(8, 9, 'sawe', 'sawee', '2018-12-31', '2020', 'unit(s)', '100', 0, 0, 0, 'Select Personnel', 0, 0),
(8, 10, 'sawe', 'sawee', '2018-12-31', '2020', 'unit(s)', '100', 0, 0, 0, 'Select Personnel', 0, 0),
(7, 11, 'wohoo', 'sample', '2018-12-31', 'BU #1010', 'unit(s)', '100', 0, 0, 0, 'Select Personnel', 0, 0),
(1, 12, 'Lets sit and dance', 'GG', '2018-06-14', 'BU#101', 'set', '250', 500, 2, 2, '1', 1, 26),
(1, 13, 'Lets sit and dance', 'GG', '2018-06-14', 'BU#101', 'set', '250', 500, 2, 2, '1', 1, 26),
(1, 14, 'Lets sit and dance', 'GG', '2018-06-14', 'BU#101', 'set', '250', 500, 2, 2, '1', 1, 26),
(1, 15, 'Lets sit and dance', 'GG', '2018-06-14', 'BU#101', 'set', '250', 250, 1, 1, '9', 1, 26);

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE `office` (
  `off_id` int(255) NOT NULL,
  `form_id` int(255) NOT NULL,
  `off_name` varchar(255) NOT NULL,
  `off_total` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`off_id`, `form_id`, `off_name`, `off_total`) VALUES
(2, 29, 'HI koji', '0'),
(3, 30, 'PLITO', '0'),
(4, 31, 'DODOD', '0');

-- --------------------------------------------------------

--
-- Table structure for table `personnel`
--

CREATE TABLE `personnel` (
  `person_id` int(255) NOT NULL,
  `off_name` varchar(255) NOT NULL,
  `person_name` varchar(255) NOT NULL,
  `person_position` varchar(255) NOT NULL,
  `person_status` set('On-Job','Retired','Fired') NOT NULL DEFAULT 'On-Job'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personnel`
--

INSERT INTO `personnel` (`person_id`, `off_name`, `person_name`, `person_position`, `person_status`) VALUES
(1, 'the great', 'Koji Adriano Jr', 'sample man of the ph', 'On-Job'),
(4, '4', 'Dokebissssdsds', 'dorea', 'On-Job'),
(9, '0', 'samplers', '', 'On-Job'),
(10, '0', 's', 's', 'Fired'),
(11, '11', 'Koji Wariwa', 'S', 'On-Job'),
(13, '0', 'franco', '', 'On-Job'),
(14, 'asdsad', 'AL james', 'Sase', 'On-Job');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `cat_id` int(255) NOT NULL,
  `item_no` int(255) NOT NULL,
  `article` varchar(255) NOT NULL,
  `des` varchar(255) NOT NULL,
  `date_acquire` date NOT NULL,
  `prop_num` varchar(255) NOT NULL,
  `unit_measure` set('unit(s)','set','piece') NOT NULL,
  `unit_value` varchar(255) NOT NULL,
  `total_amt` int(255) NOT NULL,
  `qty_prop_card` int(255) NOT NULL,
  `qty_phys_count` int(255) NOT NULL,
  `office_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`cat_id`, `item_no`, `article`, `des`, `date_acquire`, `prop_num`, `unit_measure`, `unit_value`, `total_amt`, `qty_prop_card`, `qty_phys_count`, `office_id`) VALUES
(1, 1, 'Lets sit and dance', 'GG', '2018-06-14', 'BU#101', 'set', '250', 0, 5, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `deleted`
--
ALTER TABLE `deleted`
  ADD PRIMARY KEY (`del_id`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`history_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_no`);

--
-- Indexes for table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`off_id`);

--
-- Indexes for table `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`person_id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`item_no`),
  ADD KEY `office_id` (`office_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `deleted`
--
ALTER TABLE `deleted`
  MODIFY `del_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `form_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `office`
--
ALTER TABLE `office`
  MODIFY `off_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `personnel`
--
ALTER TABLE `personnel`
  MODIFY `person_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `item_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `stocks`
--
ALTER TABLE `stocks`
  ADD CONSTRAINT `stocks_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
