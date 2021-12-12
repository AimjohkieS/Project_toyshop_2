-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2021 at 02:26 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pjts`
--

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `d_id` int(11) NOT NULL,
  `o_id` int(10) NOT NULL,
  `d_value` int(11) NOT NULL,
  `d_subtotal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`d_id`, `o_id`, `d_value`, `d_subtotal`) VALUES
(1, 45, 1, 4500),
(2, 45, 2, 4500),
(3, 46, 1, 3100),
(4, 46, 1, 3100),
(5, 47, 1, 4600),
(6, 47, 1, 4600),
(7, 47, 1, 4600),
(8, 48, 1, 4600),
(9, 48, 1, 4600),
(10, 48, 1, 4600),
(11, 49, 4, 6000),
(12, 50, 1, 3000),
(13, 50, 1, 3000),
(14, 51, 1, 3000),
(15, 51, 1, 3000),
(16, 107, 1, 4600),
(17, 107, 1, 4600),
(18, 107, 1, 4600),
(19, 108, 1, 14300),
(20, 108, 8, 14300),
(21, 109, 1, 3100),
(22, 109, 1, 3100),
(23, 110, 1, 3100),
(24, 110, 1, 3100),
(25, 111, 1, 6000),
(26, 111, 1, 6000),
(27, 111, 1, 6000),
(28, 111, 1, 6000),
(29, 112, 1, 6000),
(30, 112, 1, 6000),
(31, 112, 1, 6000),
(32, 112, 1, 6000),
(33, 113, 1, 6000),
(34, 113, 1, 6000),
(35, 113, 1, 6000),
(36, 113, 1, 6000);

-- --------------------------------------------------------

--
-- Table structure for table `order_head`
--

CREATE TABLE `order_head` (
  `o_id` int(10) NOT NULL,
  `m_id` int(11) NOT NULL COMMENT 'ไอดีสมาชิก',
  `p_name` varchar(255) NOT NULL,
  `o_dttm` datetime NOT NULL,
  `o_name` varchar(255) NOT NULL,
  `o_address` varchar(255) NOT NULL,
  `o_email` varchar(50) NOT NULL,
  `o_total` float NOT NULL,
  `o_status` int(1) NOT NULL COMMENT 'สถานะ 1=รอชำระเงิน 2=ชำระสินค้า 3=ตรวจสอบเลข EMS 4=ยกเลิก',
  `o_goal` int(1) DEFAULT NULL COMMENT '0=โอนบัญชี 1=เก็บบัญชีปลายทาง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_head`
--

INSERT INTO `order_head` (`o_id`, `m_id`, `p_name`, `o_dttm`, `o_name`, `o_address`, `o_email`, `o_total`, `o_status`, `o_goal`) VALUES
(4, 1, '', '2021-11-24 05:20:44', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 9100, 0, NULL),
(5, 1, '', '2021-11-24 05:40:43', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 9100, 0, 0),
(6, 1, '', '2021-11-24 05:41:49', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 9100, 0, 0),
(7, 1, '', '2021-11-24 05:45:11', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 9100, 0, 0),
(8, 1, '', '2021-11-24 05:53:14', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 9100, 0, 0),
(9, 1, '', '2021-11-24 05:59:36', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 9100, 0, 0),
(10, 1, '', '2021-11-24 06:00:10', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 9100, 0, 0),
(11, 1, '', '2021-11-24 06:00:29', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 9100, 0, 0),
(12, 1, '', '2021-11-24 06:01:16', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 9100, 0, 0),
(13, 1, '', '2021-11-24 06:03:44', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 9100, 0, 0),
(14, 1, '', '2021-11-24 06:04:13', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 9100, 0, 0),
(15, 1, '', '2021-11-24 06:04:27', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 9100, 0, 0),
(16, 1, '', '2021-11-24 06:04:41', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 9100, 0, 0),
(17, 1, '', '2021-11-24 06:05:18', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 9100, 0, 0),
(18, 1, '', '2021-11-24 06:05:33', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 9100, 0, 0),
(19, 1, '', '2021-11-24 06:06:02', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 9100, 0, 0),
(20, 1, '', '2021-11-24 06:07:29', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 9100, 0, 0),
(21, 1, '', '2021-11-24 06:08:09', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 9100, 0, 0),
(22, 1, '', '2021-11-24 06:08:28', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 9100, 0, 0),
(23, 1, '', '2021-11-24 06:08:55', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 9100, 0, 0),
(24, 1, '', '2021-11-24 06:09:10', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 9100, 0, 0),
(25, 1, '', '2021-11-24 06:09:21', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 9100, 0, 0),
(26, 1, '', '2021-11-24 06:09:35', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 9100, 0, 0),
(27, 1, '', '2021-11-24 06:11:09', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 9100, 0, 0),
(28, 1, '', '2021-11-24 06:11:26', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 1600, 0, 0),
(29, 1, '', '2021-11-24 06:11:48', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 3100, 0, 0),
(30, 1, '', '2021-11-24 06:12:06', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 1600, 0, 0),
(31, 1, '', '2021-11-24 06:12:13', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 1500, 0, 0),
(32, 1, '', '2021-11-24 06:12:26', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 4500, 0, 0),
(33, 1, '', '2021-11-24 06:12:38', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 4500, 0, 0),
(34, 1, '', '2021-11-24 06:12:57', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 4500, 0, 0),
(35, 1, '', '2021-11-24 06:13:06', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 4500, 0, 0),
(36, 1, '', '2021-11-24 06:13:39', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 4500, 0, 0),
(37, 1, '', '2021-11-24 06:13:56', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 4500, 0, 0),
(38, 1, '', '2021-11-24 06:14:58', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 4500, 0, 0),
(39, 1, '', '2021-11-24 06:15:50', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 4500, 0, 0),
(40, 1, '', '2021-11-24 06:18:13', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 4500, 0, 0),
(41, 1, '', '2021-11-24 06:18:44', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 4500, 0, 0),
(42, 1, '', '2021-11-24 06:18:58', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 4500, 0, 0),
(43, 1, '', '2021-11-24 06:22:32', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 4500, 0, 0),
(44, 1, '', '2021-11-24 06:24:44', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 4500, 0, 0),
(45, 1, '', '2021-11-24 06:26:21', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 4500, 0, 0),
(46, 12, '', '2021-11-24 13:33:29', 'test', '', '', 3100, 0, 0),
(47, 12, '', '2021-11-24 13:37:17', 'test', '', '', 4600, 0, 0),
(48, 12, '', '2021-11-24 13:37:52', 'test', '', '', 4600, 0, 0),
(49, 12, '', '2021-11-24 13:40:00', 'test', 'ddsa', '', 6000, 0, 0),
(50, 1, '', '2021-11-24 14:08:56', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 3000, 0, 0),
(51, 1, '', '2021-11-24 14:09:07', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 3000, 0, 0),
(52, 12, '', '2021-11-25 02:52:50', 'test', '', '', 1500, 0, 0),
(53, 12, '', '2021-11-25 02:56:16', 'test', '', '', 1500, 0, 0),
(54, 12, '', '2021-11-25 02:56:53', 'test', '', '', 1500, 0, 0),
(55, 12, '', '2021-11-25 02:57:49', 'test', '', '', 3000, 0, 0),
(56, 12, '', '2021-11-25 02:59:06', 'test', '', '', 4600, 0, 0),
(57, 12, '', '2021-11-25 02:59:21', 'test', '', '', 11000, 0, 0),
(58, 12, '', '2021-11-25 03:02:34', 'test', '', '', 11000, 0, 0),
(59, 12, '', '2021-11-25 03:03:48', 'test', '', '', 11000, 0, 0),
(60, 12, '', '2021-11-25 03:04:29', 'test', '', '', 11000, 0, 0),
(61, 12, '', '2021-11-25 03:04:34', 'test', '', '', 11000, 0, 0),
(62, 12, '', '2021-11-25 03:04:59', 'test', '', '', 11000, 0, 0),
(63, 12, '', '2021-11-25 03:05:59', 'test', '', '', 11000, 0, 0),
(64, 12, '', '2021-11-25 03:09:21', 'test', '', '', 11000, 0, 0),
(65, 12, '', '2021-11-25 03:12:14', 'test', '', '', 11000, 0, 0),
(66, 12, '', '2021-11-25 03:12:41', 'test', '', '', 11000, 0, 0),
(67, 12, '', '2021-11-25 03:12:57', 'test', '', '', 11000, 0, 0),
(68, 12, '', '2021-11-25 03:14:12', 'test', '', '', 11000, 0, 0),
(69, 12, '', '2021-11-25 03:15:25', 'test', '', '', 11000, 0, 0),
(70, 12, '', '2021-11-25 03:15:41', 'test', '', '', 11000, 0, 0),
(71, 12, '', '2021-11-25 03:16:01', 'test', '', '', 11000, 0, 0),
(72, 12, '', '2021-11-25 03:16:38', 'test', '', '', 11000, 0, 0),
(73, 12, '', '2021-11-25 03:21:32', 'test', '', '', 11000, 0, 0),
(74, 12, '', '2021-11-25 03:23:06', 'test', '', '', 11000, 0, 0),
(75, 12, '', '2021-11-25 03:25:11', 'test', '', '', 11000, 0, 0),
(76, 12, '', '2021-11-25 03:25:20', 'test', '', '', 11000, 0, 0),
(77, 12, '', '2021-11-25 03:25:54', 'test', '', '', 11000, 0, 0),
(78, 12, '', '2021-11-25 03:26:10', 'test', '', '', 11000, 0, 0),
(79, 12, '', '2021-11-25 03:27:49', 'test', '', '', 11000, 0, 0),
(80, 12, '', '2021-11-25 03:27:56', 'test', '', '', 11000, 0, 0),
(81, 12, '', '2021-11-25 03:28:10', 'test', '', '', 11000, 0, 0),
(82, 12, '', '2021-11-25 03:28:21', 'test', '', '', 11000, 0, 0),
(83, 12, '', '2021-11-25 03:29:52', 'test', '', '', 1500, 0, 0),
(84, 12, '', '2021-11-25 03:31:17', 'test', '', '', 3200, 0, 0),
(85, 12, '', '2021-11-25 03:31:30', 'test', '', '', 3200, 0, 0),
(86, 12, '', '2021-11-25 03:32:18', 'test', '', '', 10900, 0, 0),
(87, 12, '', '2021-11-25 03:34:00', 'test', '', '', 10900, 0, 0),
(88, 12, '', '2021-11-25 03:40:49', 'test', '', '', 10900, 0, 0),
(89, 12, '', '2021-11-25 03:41:37', 'test', '', '', 10900, 0, 0),
(90, 12, '', '2021-11-25 03:42:03', 'test', '', '', 10900, 0, 0),
(91, 12, '', '2021-11-25 03:42:11', 'test', '', '', 10900, 0, 0),
(92, 12, '', '2021-11-25 03:42:32', 'test', '', '', 10900, 0, 0),
(93, 12, '', '2021-11-25 03:43:36', 'test', '', '', 10900, 0, 0),
(94, 12, '', '2021-11-25 03:43:57', 'test', '', '', 10900, 0, 0),
(95, 12, '', '2021-11-26 01:41:16', 'test', '', '', 1500, 0, 0),
(96, 12, '', '2021-11-26 01:45:01', 'test', '', '', 1500, 0, 0),
(97, 12, '', '2021-11-26 01:46:48', 'test', '', '', 1500, 0, 0),
(98, 12, '', '2021-11-26 01:49:13', 'test', '', '', 1500, 0, 2),
(99, 12, '', '2021-11-26 01:49:41', 'test', '', '', 1500, 0, 2),
(100, 12, '', '2021-11-26 01:49:44', 'test', '', '', 1500, 0, 1),
(101, 12, '', '2021-11-26 01:50:07', 'test', '', '', 1500, 0, 0),
(102, 12, '', '2021-11-26 01:51:28', 'test', '', '', 1500, 0, 0),
(103, 12, '', '2021-11-26 02:50:51', 'test', '', '', 4600, 0, 1),
(104, 12, '', '2021-11-26 02:51:20', 'test', '', '', 4600, 0, 1),
(105, 12, '', '2021-11-26 02:51:36', 'test', '', '', 4600, 0, 1),
(106, 12, '', '2021-11-26 02:51:39', 'test', '', '', 4600, 0, 1),
(107, 12, '', '2021-11-26 02:53:42', 'test', '', '', 4600, 0, 1),
(108, 1, '', '2021-11-30 23:12:30', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 14300, 0, 0),
(109, 1, 'Honda S200', '2021-11-30 23:27:56', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 3100, 0, 0),
(110, 1, 'Honda S200', '2021-12-01 01:30:59', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 3100, 0, 0),
(111, 1, 'Nissan Skyline GT-R R34', '2021-12-09 00:57:48', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 6000, 0, 0),
(112, 1, 'Nissan Skyline GT-R R34', '2021-12-09 00:57:50', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 6000, 0, 0),
(113, 1, 'Nissan Skyline GT-R R34', '2021-12-09 00:57:52', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 'admin@2222.com', 6000, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `m_id` int(11) NOT NULL,
  `m_user` varchar(20) NOT NULL,
  `m_pass` varchar(20) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `m_address` varchar(255) NOT NULL,
  `m_tel` int(10) NOT NULL,
  `m_email` varchar(50) NOT NULL,
  `m_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`m_id`, `m_user`, `m_pass`, `m_name`, `m_address`, `m_tel`, `m_email`, `m_status`) VALUES
(1, 'u025', 'xxx', 'dsasa', 'ถ.สุขุมวิท ต.แพร่ง อ.พลา จ.แพร่ 1580', 89999999, 'admin@2222.com', 'Admin'),
(9, 'dsadsadsadsa', 'dsaxzxzzxzx', 'ddsa', '', 0, '', ''),
(10, 'dsadsa', 'dsadsa', 'dsasa', '', 0, '', ''),
(11, 'huyhuj', 'xxxx', 'dsasa', '', 0, '', ''),
(12, 'test', 'test', 'test', '', 0, '', 'Member'),
(13, 'zzz', 'zzz', 'zzz', 'zzz', 0, 'zzz', 'Member'),
(14, 'zzz', 'ผผผ', 'zzz', 'zzz', 0, 'zzz', 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `member_id` int(20) NOT NULL,
  `member_user` varchar(20) NOT NULL,
  `member_pass` varchar(20) NOT NULL,
  `member_name` varchar(100) NOT NULL,
  `member_email` varchar(100) NOT NULL,
  `member_tel` int(10) NOT NULL,
  `member_address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`member_id`, `member_user`, `member_pass`, `member_name`, `member_email`, `member_tel`, `member_address`) VALUES
(1, '1', '1', 'dsadsasasdad', 'dsadas@dsadsa.coxzzxm', 0, ''),
(2201, 'test', 'x', 'ซ่า ซี่', 'savase@admin.com', 0, '85/5 ถ.วิสัยทัศน์ ต.ท่าบรรทุก อ.เมือง จ.สมุทรปราการ ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(200) NOT NULL,
  `type_id` int(11) NOT NULL,
  `p_price` float NOT NULL,
  `p_detail` text NOT NULL,
  `p_img` varchar(200) NOT NULL,
  `datesave` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`p_id`, `p_name`, `type_id`, `p_price`, `p_detail`, `p_img`, `datesave`) VALUES
(3, 'Nissan Skyline GT-R R34', 2, 1500, 'รหัสสินค้า : 001\r\nอัตราส่วน 1:24', 'p_img68449970220211116_220901.jpg', '2021-11-16 15:09:01'),
(4, 'Honda S200', 1, 1600, '????โมเดลรถเหล็ก กล่องใหม่ล่าสุด ราคาโปรโมชั่น????', 'p_img27632471520211117_010417.jpg', '2021-11-16 18:04:17');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_type`
--

CREATE TABLE `tbl_type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_type`
--

INSERT INTO `tbl_type` (`type_id`, `type_name`) VALUES
(1, 'โปรโมชั่น'),
(2, 'ของเล่น');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `order_head`
--
ALTER TABLE `order_head`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `m_id` (`m_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `tbl_type`
--
ALTER TABLE `tbl_type`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `order_head`
--
ALTER TABLE `order_head`
  MODIFY `o_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `member_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2203;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_type`
--
ALTER TABLE `tbl_type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `o_id` FOREIGN KEY (`o_id`) REFERENCES `order_head` (`o_id`);

--
-- Constraints for table `order_head`
--
ALTER TABLE `order_head`
  ADD CONSTRAINT `m_id` FOREIGN KEY (`m_id`) REFERENCES `tbl_admin` (`m_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `tbl_product_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `tbl_type` (`type_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
