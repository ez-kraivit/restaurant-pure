-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2020 at 03:38 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `idb` int(11) NOT NULL,
  `datp_up` varchar(40) NOT NULL,
  `time` varchar(40) NOT NULL,
  `people` varchar(1) NOT NULL,
  `ids` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `name` varchar(10) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT '0',
  `booking_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`idb`, `datp_up`, `time`, `people`, `ids`, `username`, `name`, `status`, `booking_number`) VALUES
(1, '2020-03-27', '19:00', '2', 1, 'kraivit', 'Table1', '1', 'S23BAS2501'),
(2, '2020-03-27', '19:00', '2', 1, 'kraivit', 'Table4', '0', '5p3LHvdpUT'),
(3, '2020-03-27', '19:00', '2', 1, 'b6040200430', 'Table3', '1', 'reC4rmzzfx'),
(4, '2020-03-26', '17:00', '1', 1, 'kraivit', 'Table3', '0', 'OHjQS6w7qh'),
(5, '2020-03-26', '17:00', '1', 1, 'kraivit', 'Table2', '1', 'brF9vjPyoh'),
(6, '2020-03-26', '17:00', '1', 1, 'criticalken', 'Table1', '0', 'baOLxNwzYV');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL COMMENT 'รหัสสมาชิก',
  `username` varchar(60) NOT NULL COMMENT 'ไอดีสมาชิก',
  `password` varchar(60) NOT NULL COMMENT 'รหัสผ่านสมาชิก',
  `update_bf` timestamp NOT NULL DEFAULT current_timestamp() COMMENT 'วันเวลาก่อนสร้าง',
  `update_at` date NOT NULL COMMENT 'วันเวลาหลังสร้าง',
  `status` varchar(2) NOT NULL COMMENT 'สถานะ',
  `ipaddress` varchar(16) NOT NULL COMMENT 'ไอพี',
  `firstname` varchar(100) NOT NULL DEFAULT 'Input firstname' COMMENT 'ชื่อ',
  `lastname` varchar(100) NOT NULL DEFAULT 'Input lastname' COMMENT 'นามสกุล',
  `email` varchar(100) NOT NULL COMMENT 'อีเมล์',
  `address` text NOT NULL COMMENT 'ที่อยู่',
  `birthday` date NOT NULL COMMENT 'วันเกิด',
  `phone` varchar(10) NOT NULL COMMENT 'โทรศัพทย์'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `update_bf`, `update_at`, `status`, `ipaddress`, `firstname`, `lastname`, `email`, `address`, `birthday`, `phone`) VALUES
(2, 'kraivit', '65e62bf56825c8d2f8a7afcaf4563531', '2020-03-25 18:12:07', '0000-00-00', '', '', 'kraivit', 'mongkhonsakunrit', 'kraivit.m@ku.th', '', '0000-00-00', '0885530057'),
(3, 'b6040200430', '65e62bf56825c8d2f8a7afcaf4563531', '2020-03-25 20:21:47', '0000-00-00', '', '', 'Input firstname', 'Input lastname', 'kraivit.m@ku.th', '', '0000-00-00', '0885530057'),
(4, 'tom', '8277d402ba11cd3b1b3962063c989082', '2020-03-26 09:40:01', '0000-00-00', '', '', 'Input firstname', 'Input lastname', 'jirapon@gmail.com', '', '0000-00-00', '0890796807'),
(5, 'criticalken', '348b49e00db0183d47cf1a8b6b69bb28', '2020-03-26 10:35:50', '0000-00-00', '', '', 'Input firstname', 'Input lastname', 'criticalken.vfx@gmail.com', '', '0000-00-00', '0800476433');

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `ids` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `img` text NOT NULL,
  `price` varchar(10) NOT NULL,
  `status` varchar(2) NOT NULL DEFAULT '0',
  `date_up` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`ids`, `name`, `detail`, `img`, `price`, `status`, `date_up`) VALUES
(1, 'เพลินพุง สกลนคร', 'แหล่งรวมความอร่อยของเนื้อหมูและเนื้อวัว เราทำการจัดสรรค์เพื่อความอร่อยสำหรับคุณลูกค้า พร้อมกับโปรโมทชั่นภายในร้ายค้า\r\n', 'https://scontent.fbkk5-3.fna.fbcdn.net/v/t1.0-9/90867757_2617714591817535_49378573282181120_n.jpg?_nc_cat=105&_nc_sid=85a577&_nc_eui2=AeGbgc9P-z4TavXmgwdzSw3WJc_KORgvPcgan0jxVD9TEhBGPN8L4xnjshwM9g2znSpXfzHLakX1efpLMYjJtjxTGraj_4ru4zebi83plLnx9A&_nc_oc=AQlQ5v6A0z98twpUfHWNJY9lxTUjQrUXF8hN4-qrX5HAwn11GfWZv-b9f7loS9uJFMs&_nc_ht=scontent.fbkk5-3.fna&oh=365226a98e0aa49ec0dcfe998aff7ff5&oe=5EA16BA0', '299', '1', '2020-03-25 21:00:33');

-- --------------------------------------------------------

--
-- Table structure for table `table_store`
--

CREATE TABLE `table_store` (
  `idt` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` varchar(10) NOT NULL,
  `number` varchar(1) NOT NULL,
  `ids` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `table_store`
--

INSERT INTO `table_store` (`idt`, `name`, `size`, `number`, `ids`) VALUES
(1, 'Table1', 'm', '1', 1),
(2, 'Table2', 'm', '1', 1),
(3, 'Table3', 'm', '2', 1),
(4, 'Table4', 'l', '2', 1),
(5, 'Table5', 'l', '2', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`idb`),
  ADD UNIQUE KEY `datp_up` (`datp_up`,`time`,`ids`,`username`,`name`),
  ADD UNIQUE KEY `booking_number` (`booking_number`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`ids`);

--
-- Indexes for table `table_store`
--
ALTER TABLE `table_store`
  ADD PRIMARY KEY (`idt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `idb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสสมาชิก', AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `ids` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table_store`
--
ALTER TABLE `table_store`
  MODIFY `idt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
