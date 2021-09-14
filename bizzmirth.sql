-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2021 at 06:39 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bizzmirth`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(11) NOT NULL,
  `branch_name` varchar(99) NOT NULL,
  `region_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '	0-deleted 1-present'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `branch_name`, `region_id`, `status`) VALUES
(1, 'Panjim', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `branch_manager`
--

CREATE TABLE `branch_manager` (
  `id` int(11) NOT NULL,
  `branch_manager_id` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country_code` varchar(3) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `head_office` varchar(99) NOT NULL,
  `zone` varchar(99) NOT NULL,
  `region` varchar(99) NOT NULL,
  `branch` int(11) NOT NULL,
  `date_of_birth` date NOT NULL,
  `age` varchar(5) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` varchar(8) NOT NULL,
  `address` text NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `kyc` varchar(255) NOT NULL,
  `pan_card` varchar(255) NOT NULL,
  `aadhar_card` varchar(255) NOT NULL,
  `voting_card` varchar(255) NOT NULL,
  `bank_passbook` varchar(255) NOT NULL,
  `registrant` varchar(100) NOT NULL,
  `reference_no` varchar(255) NOT NULL,
  `register_by` varchar(100) NOT NULL,
  `user_type` int(11) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_date` varchar(99) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 2 COMMENT '0-deleted 1-registered 2-pending 3-removed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branch_manager`
--

INSERT INTO `branch_manager` (`id`, `branch_manager_id`, `firstname`, `lastname`, `email`, `country_code`, `contact_no`, `head_office`, `zone`, `region`, `branch`, `date_of_birth`, `age`, `gender`, `country`, `state`, `city`, `pincode`, `address`, `profile_pic`, `kyc`, `pan_card`, `aadhar_card`, `voting_card`, `bank_passbook`, `registrant`, `reference_no`, `register_by`, `user_type`, `register_date`, `deleted_date`, `status`) VALUES
(1, 'BMGA213', 'Joel', 'Sequeira', 'joel@gmail.com', '91', '8769870987', '', '2', '1', 1, '1996-07-22', '25', 'male', '1', '6', '55', '403 507', 'Mapusa, Goa', 'profile_pic/12082021135315blog4.jpg', 'undefined', '', '', '', '', 'Lendl Dsouza', 'RMGA741', '7', 6, '2021-08-12 11:53:38', '', 1),
(2, 'BMGA768', 'pratiksha', 'gawas', 'pratiksha.gawas@mirthtrip.com', '91', '9168376463', '', '2', '1', 1, '1996-07-28', '25', 'female', '1', '6', '55', '403 507', 'nhsfjhklgnshlfkgks', 'profile_pic/12082021140033blog4.jpg', 'undefined', '', '', '', '', 'Lendl Dsouza', 'RMGA741', '7', 6, '2021-08-12 12:00:43', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `picture` varchar(299) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_date` varchar(99) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1-present 2-deleted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `district` varchar(99) NOT NULL,
  `pincode` varchar(7) NOT NULL,
  `state_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0-deleted 1-allow 2-not allow'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `city_name`, `district`, `pincode`, `state_id`, `status`) VALUES
(1, 'Airport, Dabolim', 'South Goa', '403 801', 6, 1),
(2, 'Aldona', 'North Goa', '403 508', 6, 1),
(3, 'Altinho', 'North Goa', '403 001', 6, 1),
(4, 'Alto Porvorim', 'North Goa', '403 521', 6, 1),
(5, 'Anjuna', 'North Goa', '403 509', 6, 1),
(6, 'Aquem', 'South Goa', '403 601', 6, 1),
(7, 'Arambol', 'North Goa', '403 524', 6, 1),
(8, 'Arpora', 'North Goa', '403 518', 6, 1),
(9, 'Assonora', 'North Goa', '403 503', 6, 1),
(10, 'Assolna', 'South Goa', '403 701', 6, 1),
(11, 'Baina', 'South Goa', '403 808', 6, 1),
(12, 'Bambolim Camp', 'North Goa', '403 201', 6, 1),
(13, 'Bambolim Complex', 'North Goa', '403 202', 6, 1),
(14, 'Bazar Ponda', 'North Goa', '403 401', 6, 1),
(15, 'Benaulim', 'South Goa', '403 716', 6, 1),
(16, 'Betim', 'North Goa', '403 101', 6, 1),
(17, 'Betora Ind Estate', 'South Goa', '403 409', 6, 1),
(18, 'Betul', 'South Goa', '403 603', 6, 1),
(19, 'Bicholim', 'North Goa', '403 504', 6, 1),
(20, 'Bogmalo', 'South Goa', '403 806', 6, 1),
(21, 'Calangute', 'North Goa', '403 516', 6, 1),
(22, 'Canacona', 'South Goa', '403 702', 6, 1),
(23, 'Candolim', 'North Goa', '403 515', 6, 1),
(24, 'Cansaulim', 'South Goa', '403 712', 6, 1),
(25, 'Caranzalem', 'North Goa', '403 002', 6, 1),
(26, 'Carmona', 'South Goa', '403 523', 6, 1),
(27, 'Cavelossim', 'South Goa', '403 731', 6, 1),
(28, 'Chandor', 'South Goa', '403 174', 6, 1),
(29, 'Chicalim', 'South Goa', '403 711', 6, 1),
(30, 'Chinchinim', 'South Goa', '403 715', 6, 1),
(31, 'Chorao', 'North Goa', '404 102', 6, 1),
(32, 'Collem', 'South Goa', '403 410', 6, 1),
(33, 'Colva', 'South Goa', '403 708', 6, 1),
(34, 'Colvale', 'North Goa', '403 513', 6, 1),
(35, 'Complex Altinho', 'North Goa', '403 001', 6, 1),
(36, 'Corlim Ind. Estate', 'North Goa', '403 110', 6, 1),
(37, 'Carmona', 'South Goa', '403 717', 6, 1),
(38, 'Cortalim', 'South Goa', '403 710', 6, 1),
(39, 'Cuncolim', 'South Goa', '403 703', 6, 1),
(40, 'Curchorem', 'South Goa', '403 706', 6, 1),
(41, 'Dona Paula', 'North Goa', '403 004', 6, 1),
(42, 'Dramapur', 'South Goa', '403 725', 6, 1),
(43, 'Duler', 'North Goa', '403 527', 6, 1),
(44, 'Farmagudi', 'South Goa', '403 405', 6, 1),
(45, 'Fatorda', 'South Goa', '403 602', 6, 1),
(46, 'Fontainhas', 'North Goa', '403 001', 6, 1),
(47, 'Goa University', 'North Goa', '403 206', 6, 1),
(48, 'Goa Velha', 'North Goa', '403 108', 6, 1),
(49, 'Honda Ind Estate', 'North Goa', '403 530', 6, 1),
(50, 'Kundaim Ind Estate', 'South Goa', '403 110', 6, 1),
(51, 'Loliem', 'South Goa', '403 728', 6, 1),
(52, 'Loutulim', 'South Goa', '403 718', 6, 1),
(53, 'Majorda', 'South Goa', '403 713', 6, 1),
(54, 'Mandrem', 'North Goa', '403 527', 6, 1),
(55, 'Mapuca', 'North Goa', '403 507', 6, 1),
(56, 'Marcel', 'North Goa', '403 107', 6, 1),
(57, 'Mardol', 'North Goa', '403 404', 6, 1),
(58, 'Margao', 'South Goa', '403 601', 6, 1),
(59, 'Moira', 'North Goa', '403 514', 6, 1),
(60, 'Mormugao', 'South Goa', '403 803', 6, 1),
(61, 'Naval Base Verem', 'North Goa', '403 109', 6, 1),
(62, 'Navelim', 'South Goa', '403 707', 6, 1),
(63, 'Navelim Camp', 'South Goa', '403 707', 6, 1),
(64, 'Neura', 'North Goa', '403 104', 6, 1),
(65, 'Nuvem', 'South Goa', '403 604', 6, 1),
(66, 'Orlim', 'South Goa', '403 724', 6, 1),
(67, 'Panaji', 'North Goa', '403 001', 6, 1),
(68, 'Pernem', 'North Goa', '403 512', 6, 1),
(69, 'Ponda', 'North Goa', '403 401', 6, 1),
(70, 'Quepem', 'South Goa', '403 405', 6, 1),
(71, 'Reis Magos', 'North Goa', '403 114', 6, 1),
(72, 'Ribandar', 'North Goa', '403 006', 6, 1),
(73, 'Saligao', 'North Goa', '403 531', 6, 1),
(74, 'Sanguem', 'South Goa', '403 704', 6, 1),
(75, 'Santa Cruz', 'North Goa', '403 005', 6, 1),
(76, 'Sinquerim', 'North Goa', '403 519', 6, 1),
(77, 'Siolim', 'North Goa', '403 517', 6, 1),
(78, 'Taleigao', 'North Goa', '403 003', 6, 1),
(79, 'Tisca (Ponda)', 'South Goa', '403 406', 6, 1),
(80, 'Tivim', 'North Goa', '403 502', 6, 1),
(81, 'Usgao', 'North Goa', '403 407', 6, 1),
(82, 'Vaddem', 'South Goa', '403 802', 6, 1),
(83, 'Valpoi', 'North Goa', '403 506', 6, 1),
(84, 'Varca', 'South Goa', '403 721', 6, 1),
(85, 'Vasco da Gama', 'South Goa', '403 802', 6, 1),
(86, 'Velim', 'South Goa', '403 722', 6, 1),
(87, 'Verna', 'South Goa', '403 722', 6, 1),
(88, 'Zuarinagar', 'South Goa', '403 726', 6, 1),
(89, 'Sanquelim', 'North Goa', '403505', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `sortname` varchar(3) NOT NULL,
  `country_name` varchar(255) NOT NULL,
  `country_code` varchar(5) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0-deleted 1-allow 2-not allow'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `sortname`, `country_name`, `country_code`, `status`) VALUES
(1, 'IN', 'India', '91', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `cust_id` varchar(255) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country_code` varchar(3) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `date_of_birth` date NOT NULL,
  `age` varchar(5) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` varchar(8) NOT NULL,
  `address` text NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `kyc` varchar(255) NOT NULL,
  `pan_card` varchar(255) NOT NULL,
  `aadhar_card` varchar(255) NOT NULL,
  `voting_card` varchar(255) NOT NULL,
  `bank_passbook` varchar(255) NOT NULL,
  `level` varchar(70) NOT NULL,
  `user_type` int(11) NOT NULL,
  `registrant` varchar(100) NOT NULL,
  `reference_no` varchar(255) NOT NULL,
  `customer_reference_no` varchar(255) NOT NULL,
  `register_by` varchar(99) NOT NULL COMMENT '1. admin 3.Travel Agent',
  `register_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_date` varchar(99) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 2 COMMENT '0-deleted 1-registered 2-pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `cust_id`, `firstname`, `lastname`, `email`, `country_code`, `contact_no`, `date_of_birth`, `age`, `gender`, `country`, `state`, `city`, `pincode`, `address`, `profile_pic`, `kyc`, `pan_card`, `aadhar_card`, `voting_card`, `bank_passbook`, `level`, `user_type`, `registrant`, `reference_no`, `customer_reference_no`, `register_by`, `register_date`, `deleted_date`, `status`) VALUES
(1, 'CU2100001', 'Niki', 'Chipkar', 'niki@mirthtrip.com', '91', '9089765889', '1992-08-08', '29', 'female', '1', '6', '10', '403 701', 'Assolna, Goa', 'profile_pic/12082021141021blog4.jpg', 'undefined', '', '', '', '', '', 2, 'Sushanti Shirodkar', 'TA21001', '', '3', '2021-08-12 12:11:57', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `franchisee`
--

CREATE TABLE `franchisee` (
  `id` int(11) NOT NULL,
  `franchisee_id` varchar(255) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country_code` varchar(3) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `date_of_birth` date NOT NULL,
  `age` varchar(5) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` varchar(8) NOT NULL,
  `address` text NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `kyc` varchar(255) NOT NULL,
  `pan_card` varchar(255) NOT NULL,
  `aadhar_card` varchar(255) NOT NULL,
  `voting_card` varchar(255) NOT NULL,
  `bank_passbook` varchar(255) NOT NULL,
  `registrant` varchar(100) NOT NULL,
  `reference_no` varchar(255) NOT NULL,
  `register_by` varchar(100) NOT NULL COMMENT '1. admin 5.Sales Manager',
  `user_type` int(11) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_date` varchar(99) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 2 COMMENT '0-deleted 1-registered 2-pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `franchisee`
--

INSERT INTO `franchisee` (`id`, `franchisee_id`, `firstname`, `lastname`, `email`, `country_code`, `contact_no`, `date_of_birth`, `age`, `gender`, `country`, `state`, `city`, `pincode`, `address`, `profile_pic`, `kyc`, `pan_card`, `aadhar_card`, `voting_card`, `bank_passbook`, `registrant`, `reference_no`, `register_by`, `user_type`, `register_date`, `deleted_date`, `status`) VALUES
(1, 'F21001', 'Apurva', 'Naik', 'apurva@mirthtrip.com', '91', '9870989765', '1993-09-08', '27', 'female', '1', '6', '23', '403 515', 'Gokulwadi, Ponda Goa', 'profile_pic/12082021140604blog4.jpg', 'undefined', '', '', '', '', 'Upasana Pandit', 'SMGA143', '5', 4, '2021-08-12 12:06:37', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `user_type_id` varchar(30) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '3-removed 1-present 0-deleted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `user_id`, `user_type_id`, `register_date`, `status`) VALUES
(1, 'admin', 'admin@32', '1', '1', '2021-08-12 11:46:38', 1),
(2, 'lendl@gmail.com', '!wNpluzo', 'RMGA741', '7', '2021-08-12 11:51:37', 1),
(3, 'joel@gmail.com', '(8ZkIVxl', 'BMGA213', '6', '2021-08-12 11:53:38', 1),
(4, 'datta@gmail.com', ')kRf43gl', 'SMGA029', '5', '2021-08-12 11:55:57', 1),
(5, 'pratiksha.gawas@mirthtrip.com', 'Uv6IMayk', 'BMGA768', '6', '2021-08-12 12:00:43', 1),
(6, 'UPasana@mirtrip.com', 'x67D3gcf', 'SMGA143', '5', '2021-08-12 12:03:57', 1),
(7, 'apurva@mirthtrip.com', '(8W0tcXU', 'F21001', '4', '2021-08-12 12:06:37', 1),
(8, 'sushanti@mirthtrip.com', '^TrKDyUu', 'TA21001', '3', '2021-08-12 12:09:21', 1),
(9, 'niki@mirthtrip.com', 'NVkRP^xM', 'CU2100001', '2', '2021-08-12 12:12:10', 1);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `user_id` varchar(99) NOT NULL,
  `title` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `message2` text NOT NULL,
  `reference_no` varchar(255) NOT NULL,
  `register_by` varchar(100) NOT NULL COMMENT '	0-deleted 1-admin 2-customer 3-TA 4-F 5-SM 6-BM 7-RM',
  `from_whom` int(11) NOT NULL,
  `operation` varchar(99) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(99) NOT NULL DEFAULT '1' COMMENT '	0-deleted 1-registered 2- Deleted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `user_id`, `title`, `message`, `message2`, `reference_no`, `register_by`, `from_whom`, `operation`, `register_date`, `status`) VALUES
(1, '', 'Add Regional Manager', 'Added New Regional Manager', 'Added New Regional Manager', '1', '1', 1, '', '2021-08-12 11:51:31', '1'),
(2, 'RMGA741', 'Confirm Regional Manager', 'RMGA741 has been approved', 'RMGA741 has been approved', '1', '1', 1, '', '2021-08-12 11:51:37', '1'),
(3, '', 'Add Franchisee Manager', 'Added New Franchisee Manager by RMGA741', 'Added New Franchisee Manager by RMGA741', 'RMGA741', '7', 1, '', '2021-08-12 11:53:24', '1'),
(4, 'BMGA213', 'Confirm Franchisee Manager', 'BMGA213 has been approved', 'BMGA213 has been approved', 'RMGA741', '7', 1, '', '2021-08-12 11:53:38', '1'),
(5, '', 'Add Floor Manager', 'Added New Floor Manager by BMGA213', 'Added New Floor Manager by BMGA213', 'BMGA213', '6', 1, '', '2021-08-12 11:55:51', '1'),
(6, 'SMGA029', 'Confirm Floor Manager', 'SMGA029 has been approved', 'SMGA029 has been approved', 'BMGA213', '6', 1, '', '2021-08-12 11:55:57', '1'),
(7, '', 'Add Franchisee Manager', 'Added New Franchisee Manager by RMGA741', 'Added New Franchisee Manager by RMGA741', 'RMGA741', '7', 1, '', '2021-08-12 12:00:37', '1'),
(8, 'BMGA768', 'Confirm Franchisee Manager', 'BMGA768 has been approved', 'BMGA768 has been approved', 'RMGA741', '7', 1, '', '2021-08-12 12:00:43', '1'),
(9, '', 'Add Floor Manager', 'Added New Floor Manager by You', '', 'BMGA768', '6', 6, 'add', '2021-08-12 12:03:42', '1'),
(10, 'SMGA143', 'Confirm Floor Manager', 'SMGA143 has been approved', 'SMGA143 has been approved', 'BMGA768', '6', 1, '', '2021-08-12 12:03:57', '1'),
(11, '', 'Add Franchisee', 'Added New Franchisee by You', '', 'SMGA143', '5', 5, 'add', '2021-08-12 12:06:21', '1'),
(12, 'F21001', 'Confirm Franchisee', 'F21001 has been approved', 'F21001 has been approved', 'SMGA143', '5', 1, '', '2021-08-12 12:06:37', '1'),
(13, '', 'Add Travel Agent', 'Added New Travel Agent by You', '', 'F21001', '4', 4, 'add', '2021-08-12 12:09:09', '1'),
(14, 'TA21001', 'Confirm Travel Agent', 'TA21001 has been approved', 'TA21001 has been approved', 'F21001', '4', 1, '', '2021-08-12 12:09:21', '1'),
(15, '', 'Add Customer', 'Added New Customer by You', '', 'TA21001', '3', 3, 'add', '2021-08-12 12:11:57', '1'),
(16, 'CU2100001', 'Confirm Customer', 'CU2100001 has been approved', 'CU2100001 has been approved', 'TA21001', '3', 1, '', '2021-08-12 12:12:10', '1'),
(17, 'CU2100001', 'Edit Customer', 'CU2100001 Details has been updated from registered list', 'CU2100001 Details has been updated from registered list', 'TA21001', '3', 1, '', '2021-08-12 12:12:55', '1'),
(18, 'CU2100001', 'Edit Customer', 'CU2100001 Details has been updated from registered list', 'CU2100001 Details has been updated from registered list', 'TA21001', '3', 1, '', '2021-08-12 12:13:06', '1');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `id` int(11) NOT NULL,
  `region_name` varchar(99) NOT NULL,
  `zone_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '	0-deleted 1-present	'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`id`, `region_name`, `zone_id`, `status`) VALUES
(1, 'Goa', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `regional_manager`
--

CREATE TABLE `regional_manager` (
  `id` int(11) NOT NULL,
  `regional_manager_id` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country_code` varchar(3) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `head_office` varchar(99) NOT NULL,
  `zone` varchar(99) NOT NULL,
  `region` varchar(99) NOT NULL,
  `branch` int(11) NOT NULL,
  `date_of_birth` date NOT NULL,
  `age` varchar(5) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` varchar(8) NOT NULL,
  `address` text NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `kyc` varchar(255) NOT NULL,
  `pan_card` varchar(255) NOT NULL,
  `aadhar_card` varchar(255) NOT NULL,
  `voting_card` varchar(255) NOT NULL,
  `bank_passbook` varchar(255) NOT NULL,
  `registrant` varchar(100) NOT NULL,
  `reference_no` varchar(255) NOT NULL,
  `register_by` varchar(100) NOT NULL,
  `user_type` int(11) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_date` varchar(99) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 2 COMMENT '0-deleted 1-registered 2-pending 3-removed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regional_manager`
--

INSERT INTO `regional_manager` (`id`, `regional_manager_id`, `firstname`, `lastname`, `email`, `country_code`, `contact_no`, `head_office`, `zone`, `region`, `branch`, `date_of_birth`, `age`, `gender`, `country`, `state`, `city`, `pincode`, `address`, `profile_pic`, `kyc`, `pan_card`, `aadhar_card`, `voting_card`, `bank_passbook`, `registrant`, `reference_no`, `register_by`, `user_type`, `register_date`, `deleted_date`, `status`) VALUES
(1, 'RMGA741', 'Lendl', 'Dsouza', 'lendl@gmail.com', '91', '9876545672', '', '2', '1', 1, '1998-06-05', '23', 'male', '1', '6', '21', '403 516', 'Calangute, Goa', 'profile_pic/12082021135128blog4.jpg', 'undefined', '', '', '', '', '', '', '', 7, '2021-08-12 11:51:37', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sales_manager`
--

CREATE TABLE `sales_manager` (
  `id` int(11) NOT NULL,
  `sales_manager_id` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country_code` varchar(3) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `head_office` varchar(99) NOT NULL,
  `zone` varchar(99) NOT NULL,
  `region` varchar(99) NOT NULL,
  `branch` int(11) NOT NULL,
  `date_of_birth` date NOT NULL,
  `age` varchar(5) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` varchar(8) NOT NULL,
  `address` text NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `kyc` varchar(255) NOT NULL,
  `pan_card` varchar(255) NOT NULL,
  `aadhar_card` varchar(255) NOT NULL,
  `voting_card` varchar(255) NOT NULL,
  `bank_passbook` varchar(255) NOT NULL,
  `registrant` varchar(100) NOT NULL,
  `reference_no` varchar(255) NOT NULL,
  `register_by` varchar(100) NOT NULL,
  `user_type` int(11) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_date` varchar(99) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 2 COMMENT '0-deleted 1-registered 2-pending 3-removed'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_manager`
--

INSERT INTO `sales_manager` (`id`, `sales_manager_id`, `firstname`, `lastname`, `email`, `country_code`, `contact_no`, `head_office`, `zone`, `region`, `branch`, `date_of_birth`, `age`, `gender`, `country`, `state`, `city`, `pincode`, `address`, `profile_pic`, `kyc`, `pan_card`, `aadhar_card`, `voting_card`, `bank_passbook`, `registrant`, `reference_no`, `register_by`, `user_type`, `register_date`, `deleted_date`, `status`) VALUES
(1, 'SMGA029', 'Datta', 'Thakur', 'datta@gmail.com', '91', '7898708860', '', '2', '1', 1, '1993-09-06', '27', 'male', '1', '6', '68', '403 512', 'Pernem, Goa', 'profile_pic/12082021135534blog4.jpg', 'undefined', '', '', '', '', 'Joel Sequeira', 'BMGA213', '6', 5, '2021-08-12 11:55:57', '', 1),
(2, 'SMGA143', 'Upasana', 'Pandit', 'UPasana@mirtrip.com', '91', '8976789770', '', '2', '1', 1, '1996-09-23', '24', 'female', '1', '6', '14', '403 401', 'Bazar POnda, Goa', 'profile_pic/12082021140232blog4.jpg', 'undefined', '', '', '', '', 'pratiksha gawas', 'BMGA768', '6', 5, '2021-08-12 12:03:57', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `short_name` varchar(5) NOT NULL,
  `state_name` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 2 COMMENT '0-deleted 1-allow 2-not allow'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `short_name`, `state_name`, `country_id`, `status`) VALUES
(1, 'AP', 'Andhra Pradesh', 1, 2),
(2, 'AR', 'Arunachal Pradesh', 1, 2),
(3, 'AS', 'Assam', 1, 2),
(4, 'BR', 'Bihar', 1, 2),
(5, 'CG', 'Chhattisgarh', 1, 2),
(6, 'GA', 'Goa', 1, 1),
(7, 'GJ', 'Gujarat', 1, 2),
(8, 'HR', 'Haryana', 1, 2),
(9, 'HP', 'Himachal Pradesh', 1, 2),
(10, 'JH', 'Jharkhand', 1, 2),
(11, 'KA', 'Karnataka', 1, 2),
(12, 'KL', 'Kerala', 1, 2),
(13, 'MP', 'Madhya Pradesh', 1, 2),
(14, 'MH', 'Maharashtra', 1, 2),
(15, 'MN', 'Manipur', 1, 2),
(16, 'ML', 'Meghalaya', 1, 2),
(17, 'MZ', 'Mizoram', 1, 2),
(18, 'NL', 'Nagaland', 1, 2),
(19, 'OR', 'Odisha', 1, 2),
(20, 'PB', 'Punjab', 1, 2),
(21, 'RJ', 'Rajasthan', 1, 2),
(22, 'SK', 'Sikkim', 1, 2),
(23, 'TN', 'Tamil Nadu', 1, 2),
(24, 'TS', 'Telangana', 1, 2),
(25, 'TR', 'Tripura', 1, 2),
(26, 'UP', 'Uttar Pradesh', 1, 2),
(27, 'UK', 'Uttarakhand', 1, 2),
(28, 'WB', 'West Bengal', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `sub_category_name` varchar(299) NOT NULL,
  `description` text NOT NULL,
  `picture` varchar(299) NOT NULL,
  `category_id` int(11) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_date` varchar(99) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1-present 2-deleted'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `travel_agent`
--

CREATE TABLE `travel_agent` (
  `id` int(11) NOT NULL,
  `travel_agent_id` varchar(255) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country_code` varchar(3) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `date_of_birth` date NOT NULL,
  `age` varchar(5) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` varchar(8) NOT NULL,
  `address` text NOT NULL,
  `profile_pic` varchar(255) NOT NULL,
  `kyc` varchar(255) NOT NULL,
  `pan_card` varchar(255) NOT NULL,
  `aadhar_card` varchar(255) NOT NULL,
  `voting_card` varchar(255) NOT NULL,
  `bank_passbook` varchar(255) NOT NULL,
  `registrant` varchar(100) NOT NULL,
  `reference_no` varchar(255) NOT NULL,
  `register_by` varchar(100) NOT NULL COMMENT '1. admin 4.Franchisee',
  `user_type` int(11) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_date` varchar(99) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 2 COMMENT '	0-deleted 1-registered 2-pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travel_agent`
--

INSERT INTO `travel_agent` (`id`, `travel_agent_id`, `firstname`, `lastname`, `email`, `country_code`, `contact_no`, `date_of_birth`, `age`, `gender`, `country`, `state`, `city`, `pincode`, `address`, `profile_pic`, `kyc`, `pan_card`, `aadhar_card`, `voting_card`, `bank_passbook`, `registrant`, `reference_no`, `register_by`, `user_type`, `register_date`, `deleted_date`, `status`) VALUES
(1, 'TA21001', 'Sushanti', 'Shirodkar', 'sushanti@mirthtrip.com', '91', '8900089000', '1994-08-23', '26', 'female', '1', '6', '15', '403 716', 'Benaulim Goa', 'profile_pic/12082021140812blog4.jpg', 'undefined', '', '', '', '', 'Apurva Naik', 'F21001', '4', 3, '2021-08-12 12:09:09', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_details`
--

CREATE TABLE `users_details` (
  `id` int(11) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `firstname` varchar(70) NOT NULL,
  `lastname` varchar(70) NOT NULL,
  `email` varchar(90) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `date_of_birth` varchar(30) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` text NOT NULL,
  `profile_pic` varchar(200) NOT NULL,
  `id_proof` varchar(200) NOT NULL,
  `user_type` int(11) NOT NULL,
  `registrant` varchar(70) NOT NULL,
  `register_by` varchar(11) NOT NULL COMMENT '1. admin 2.Travel Agent\r\n',
  `register_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_date` varchar(30) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 2 COMMENT ' 0-deleted  1-registered 2-pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_details`
--

INSERT INTO `users_details` (`id`, `user_id`, `firstname`, `lastname`, `email`, `contact_no`, `date_of_birth`, `gender`, `address`, `profile_pic`, `id_proof`, `user_type`, `registrant`, `register_by`, `register_date`, `deleted_date`, `status`) VALUES
(1, '1', 'Admin', 'Bizzmirth', 'bizzmirth.admin@gmail.com', '2377676909', '', 'male', 'xyz', '', '', 1, '', '1', '2021-05-27 13:43:28', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(11) NOT NULL,
  `name` varchar(70) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0-deleted 1-present'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `name`, `status`) VALUES
(1, 'admin', 1),
(2, 'Customer', 1),
(3, 'Travel Agent', 1),
(4, 'Franchisee', 1),
(5, 'Floor Manager', 1),
(6, 'Franchisee Manager', 1),
(7, 'Regional Manager', 1);

-- --------------------------------------------------------

--
-- Table structure for table `zone`
--

CREATE TABLE `zone` (
  `id` int(11) NOT NULL,
  `zone_name` varchar(30) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0-deleted 1-present'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `zone`
--

INSERT INTO `zone` (`id`, `zone_name`, `status`) VALUES
(1, 'East', 1),
(2, 'West', 1),
(3, 'North', 1),
(4, 'South', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch_manager`
--
ALTER TABLE `branch_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `franchisee`
--
ALTER TABLE `franchisee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regional_manager`
--
ALTER TABLE `regional_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_manager`
--
ALTER TABLE `sales_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_agent`
--
ALTER TABLE `travel_agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_details`
--
ALTER TABLE `users_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zone`
--
ALTER TABLE `zone`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `branch_manager`
--
ALTER TABLE `branch_manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `franchisee`
--
ALTER TABLE `franchisee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `regional_manager`
--
ALTER TABLE `regional_manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sales_manager`
--
ALTER TABLE `sales_manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `travel_agent`
--
ALTER TABLE `travel_agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_details`
--
ALTER TABLE `users_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `zone`
--
ALTER TABLE `zone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
