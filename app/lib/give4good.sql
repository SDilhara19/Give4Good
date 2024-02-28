-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 17, 2024 at 03:07 AM
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
-- Database: `Give4Good`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank_details`
--

CREATE TABLE `bank_details` (
  `bank_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `bank_code` varchar(20) DEFAULT NULL,
  `bank_name` varchar(100) DEFAULT NULL,
  `branch_code` varchar(20) DEFAULT NULL,
  `branch_name` varchar(100) DEFAULT NULL,
  `bank_acc_no` varchar(50) DEFAULT NULL,
  `bank_pbook` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bank_details`
--

INSERT INTO `bank_details` (`bank_id`, `user_id`, `bank_code`, `bank_name`, `branch_code`, `branch_name`, `bank_acc_no`, `bank_pbook`) VALUES
(122236, 12, '123', 'BOC panadura', '23', 'Panadura Super', '123456778', 'hiiiii'),
(122237, 39, '0', 'lk', '9', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `donationpayments`
--

CREATE TABLE `donationpayments` (
  `payment_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fundraiser_id` int(11) DEFAULT NULL,
  `donated_amount` decimal(10,2) DEFAULT NULL,
  `contribution_amount` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donationpayments`
--

INSERT INTO `donationpayments` (`payment_id`, `user_id`, `fundraiser_id`, `donated_amount`, `contribution_amount`) VALUES
(123, 13, 1236, 10.00, 20.00);

-- --------------------------------------------------------

--
-- Table structure for table `edu_documents_individual`
--

CREATE TABLE `edu_documents_individual` (
  `fundraiser_id` int(11) NOT NULL,
  `cer_head_edu_institute` varchar(255) DEFAULT NULL,
  `cer_govt_adm_officer` varchar(255) DEFAULT NULL,
  `doc3` varchar(255) DEFAULT NULL,
  `doc4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `edu_documents_individual`
--

INSERT INTO `edu_documents_individual` (`fundraiser_id`, `cer_head_edu_institute`, `cer_govt_adm_officer`, `doc3`, `doc4`) VALUES
(1236, 'hiii', 'Mr. Hello Hi', 'Doc.pdf', 'Doc2.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `fundraiser`
--

CREATE TABLE `fundraiser` (
  `fundraiser_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `story` text DEFAULT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `amount_collected` decimal(10,2) DEFAULT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `image4` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `anonymous` tinyint(1) DEFAULT NULL,
  `view_counts` int(11) DEFAULT NULL,
  `donationcounts` int(11) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fundraiser`
--

INSERT INTO `fundraiser` (`fundraiser_id`, `title`, `story`, `amount`, `amount_collected`, `image1`, `image2`, `image3`, `image4`, `user_id`, `anonymous`, `view_counts`, `donationcounts`, `created_date`, `end_date`, `modified_date`, `status`) VALUES
(12, 'Urgent Request for Financial Support - Inter School Championship Games Final', 'My name is Hasitha, and I am a proud member of the Thomas College 4x400 relay team. I am writing to you with a mix of excitement and a heavy heart as our team has successfully qualified for the final round of the Inter School Championship Games.\r\n\r\nParticipating in this prestigious event is a dream come true for me and my teammates. We have dedicated countless hours to training, and our hard work has paid off with this opportunity to represent our school in the final competition.\r\n\r\nHowever, I find myself in a challenging situation. Regrettably, my parents are currently facing financial difficulties and are unable to provide the necessary support for my participation in the championship. The expenses include registration fees, transportation, and accommodation for the duration of the event.\r\n\r\nI am reaching out to you with a humble request for financial assistance to help cover these costs. Your support would not only mean the world to me but also contribute to the success of our school\'s relay team in the final competition.\r\n\r\nI understand that times are tough for many, and any assistance, no matter how small, would be immensely appreciated. I am more than willing to provide additional details or documentation if needed to assure you of the legitimacy of this request.\r\n\r\nIf you are unable to contribute financially, I completely understand, and your moral support alone would mean a great deal to me and my teammates. Please feel free to share this message with anyone who may be in a position to help.\r\n\r\nThank you so much for taking the time to read my appeal. I am hopeful that with the support of our community, I can continue to pursue my passion for athletics and make our school proud in the upcoming championship.', 17500.00, 3000.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-21', '2024-01-26 09:12:05', 'active'),
(16, ' Help us to give lives', 'We have a Dog care center in Galle. We try to give lives to dogs who are faced to accidents and who have physical cases from birth. Now we are facing some difficulties of giving foods and medicine with this economic crisis. We are hoping your kind attention for this.', 40000.00, 0.00, NULL, NULL, NULL, NULL, 8, NULL, NULL, NULL, '2024-01-26', '2024-02-29', '2024-01-27 02:47:01', 'pending'),
(1236, 'Mr.Hiiiii', 'Hello', 100.00, 10.00, 'photo', 'photo', 'photo', 'photo', NULL, NULL, NULL, NULL, '2024-01-04', '2024-03-21', '2024-01-13 13:47:25', 'wanted');

-- --------------------------------------------------------

--
-- Table structure for table `fundraiser_complain`
--

CREATE TABLE `fundraiser_complain` (
  `complaint_id` int(11) NOT NULL,
  `complain_userID` int(11) DEFAULT NULL,
  `fundraiser_id` int(11) DEFAULT NULL,
  `fundraiser_name` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL,
  `others` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fundraiser_complain`
--

INSERT INTO `fundraiser_complain` (`complaint_id`, `complain_userID`, `fundraiser_id`, `fundraiser_name`, `user_id`, `reason`, `others`) VALUES
(1, 13, 1236, '', 13, 'Fraud', ''),
(3, 5, 12, '', 7, 'Not a team member', '');

-- --------------------------------------------------------

--
-- Table structure for table `health_documents_individual`
--

CREATE TABLE `health_documents_individual` (
  `fundraiser_id` int(11) NOT NULL,
  `medical` varchar(255) DEFAULT NULL,
  `cer_govt_adm_officer` varchar(255) DEFAULT NULL,
  `doc3` varchar(255) DEFAULT NULL,
  `doc4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `health_documents_individual`
--

INSERT INTO `health_documents_individual` (`fundraiser_id`, `medical`, `cer_govt_adm_officer`, `doc3`, `doc4`) VALUES
(1236, 'dnjjk12', 'iiii', 'doc.pdf', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `house_documents_individual`
--

CREATE TABLE `house_documents_individual` (
  `fundraiser_id` int(11) NOT NULL,
  `cer_govt_adm_officer` varchar(255) DEFAULT NULL,
  `store_exp_verification` varchar(255) DEFAULT NULL,
  `doc3` varchar(255) DEFAULT NULL,
  `doc4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `house_documents_individual`
--

INSERT INTO `house_documents_individual` (`fundraiser_id`, `cer_govt_adm_officer`, `store_exp_verification`, `doc3`, `doc4`) VALUES
(1236, 'hi', 'hi', 'doc3.pdf', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `province` varchar(100) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `zip_code` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `user_id`, `address`, `province`, `district`, `zip_code`) VALUES
(123, 12, 'No:88, Dishh, PPPPP', 'Western', 'Kalutara', '12000'),
(124, 39, '2', 'dd', '2', '2d');

-- --------------------------------------------------------

--
-- Table structure for table `material_locations`
--

CREATE TABLE `material_locations` (
  `id` int(11) NOT NULL,
  `fundraiser_id` int(11) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `material_locations`
--

INSERT INTO `material_locations` (`id`, `fundraiser_id`, `location`, `address`, `contact`) VALUES
(2, 1236, 'panadura', '60, panadura', '0770006789'),
(6, 12, 'No.12, Silva Rd, Mathara', NULL, '0789564142'),
(15, 12, 'No.12, Silva Rd, Mathara', NULL, '0789564142');

-- --------------------------------------------------------

--
-- Table structure for table `merchandise`
--

CREATE TABLE `merchandise` (
  `id` int(11) NOT NULL,
  `fundraiser_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `initial_stock` int(11) DEFAULT NULL,
  `current_stock` int(11) NOT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `amount_for_fund` decimal(11,0) NOT NULL,
  `description` text DEFAULT NULL,
  `colour1` varchar(50) DEFAULT NULL,
  `colour2` varchar(50) DEFAULT NULL,
  `colour3` varchar(50) DEFAULT NULL,
  `colour4` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `merchandise`
--

INSERT INTO `merchandise` (`id`, `fundraiser_id`, `title`, `initial_stock`, `current_stock`, `price`, `amount_for_fund`, `description`, `colour1`, `colour2`, `colour3`, `colour4`) VALUES
(1, NULL, 'T-Shirt', 50, 0, 1800.00, 0, NULL, 'Black', 'Navy blue', 'White', NULL),
(2, NULL, 'Tshirt', 30, 0, 3000.00, 0, 'tshirt', 'pink', 'purple', 'green', 'yello'),
(8, NULL, 'Wrist Band', 180, 0, 250.00, 0, NULL, 'Black', 'White', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `parentfundraising`
--

CREATE TABLE `parentfundraising` (
  `fundraiser_id` int(11) NOT NULL,
  `relationship_to_user` varchar(100) DEFAULT NULL,
  `relationship_proof` varchar(255) DEFAULT NULL,
  `child_fullname` varchar(255) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `child_verification` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parentfundraising`
--

INSERT INTO `parentfundraising` (`fundraiser_id`, `relationship_to_user`, `relationship_proof`, `child_fullname`, `birthdate`, `child_verification`) VALUES
(1236, 'parent', 'birth_certificate.pdf', 'mina', '2014-01-15', 'birthCertificate.png');

-- --------------------------------------------------------

--
-- Table structure for table `sport_documents_individual`
--

CREATE TABLE `sport_documents_individual` (
  `fundraiser_id` int(11) NOT NULL,
  `cer_govt_coach` varchar(255) DEFAULT NULL,
  `cer_govt_adm_officer` varchar(255) DEFAULT NULL,
  `doc3` varchar(255) DEFAULT NULL,
  `doc4` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sport_documents_individual`
--

INSERT INTO `sport_documents_individual` (`fundraiser_id`, `cer_govt_coach`, `cer_govt_adm_officer`, `doc3`, `doc4`) VALUES
(1236, 'G.pdf', 'o.pdf', 'doc.pdf', 'd.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `id` int(11) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `contact` varchar(100) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` enum('Pending','Active','Deactive','') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`id`, `user_id`, `title`, `description`, `contact`, `email`, `image`, `status`) VALUES
(25, NULL, 'Storiene', 'adnoec. thisv so', '231', 'eed@c.d', 'app/Uploaded-Images/Stories/es/Story1.jpeg', 'Pending'),
(26, NULL, 'xx', 'xs', '', '', 'app/Uploaded-Images/Stories/es/Story1.jpeg', 'Pending'),
(27, NULL, 'story1', 'sde eryoqd', '', '', 'Cyan Modern Professional Technology Company Logo-2.png', 'Pending'),
(28, NULL, 'fde', 'dfre vun', '', '', 'WhatsApp Image 2024-01-07 at 19.31.58.jpeg', 'Pending'),
(31, 13, 'sdw', 'asqw1', '', '', 'WhatsApp Image 2024-01-07 at 19.31.58.jpeg', 'Active'),
(32, 13, 'm', 'm', '', '', 'WhatsApp Image 2024-01-07 at 19.31.58.jpeg', 'Deactive'),
(34, 13, 'as', 'x', '', '', 'WhatsApp Image 2024-01-07 at 19.31.58.jpeg', 'Pending'),
(35, 13, 'as', 'x', '', '', '../public/Assets/Uploaded-Images/Stories/13_as', 'Pending'),
(36, 13, 'as', 'x', '', '', '../public/Assets/Uploaded-Images/Stories/13_as.jpeg', 'Pending'),
(37, NULL, 'Sahurda Wiyamana', 'ොළඹ විශ්ව විද්‍යාලයීය ලියෝ සමාජය මගින් සංවිධානය කල සහෘද වියමන අදියර 6කින් යුතු ව්‍යාපෘතියේ දෙවන අදියර ඉතා සාර්ථකව නිමකරන කරන ලදී. එම කටයුතු සාර්ථක කර ගැනීම උදෙසා උපකාර කළ ඔබ සැමට ස්තූතියි.❤ Facebook: https://bit.ly/3udizp5', '+9470 576 0021', 'leos@gmail.com', '../public/Assets/Uploaded-Images/Stories/_Sahurda Wiyamana.jpeg', 'Pending'),
(38, 13, 'sdz', 'qaxzz', '', '', '../public/Assets/Uploaded-Images/Stories/13_sdz.png', 'Deactive'),
(39, 12, 'Story1', 'description', '123', 'as@sa.com', '../public/Assets/Uploaded-Images/Stories/12_Story1.jpg', 'Pending'),
(40, 39, 'Sahurda Wiyamana', 'ොළඹ විශ්ව විද්‍යාලයීය ලියෝ සමාජය මගින් සංවිධානය කල සහෘද වියමන අදියර 6කින් යුතු ව්‍යාපෘතියේ දෙවන අදියර ඉතා සාර්ථකව නිමකරන කරන ලදී. එම කටයුතු සාර්ථක කර ගැනීම උදෙසා උපකාර කළ ඔබ සැමට ස්තූතියි.❤ Facebook: https://bit.ly/3udizp5', '0705760021', 'sdbandara@gmail.com', 'public/Assets/Uploaded-Images/Stories/39_Sahurda Wiyamana.jpeg', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `super_individual`
--

CREATE TABLE `super_individual` (
  `user_id` int(11) NOT NULL,
  `nic_no` varchar(12) NOT NULL,
  `nic_front` varchar(255) NOT NULL,
  `nic_back` varchar(255) NOT NULL,
  `status` enum('Pending','Active','Deactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `super_individual`
--

INSERT INTO `super_individual` (`user_id`, `nic_no`, `nic_front`, `nic_back`, `status`) VALUES
(1, '199832500234', 'front_image_1.jpg', 'back_image_1.jpg', 'Active'),
(2, '985623147V', 'front_image_2.jpg', 'back_image_2.jpg', 'Deactive'),
(3, '784516351V', 'front_image_3.jpg', 'back_image_3.jpg', 'Pending'),
(6, '685742132V', 'front_image_3.jpg', 'back_image_3.jpg', 'Pending'),
(8, '200012454124', 'front_image_3.jpg', 'back_image_3.jpg', 'Active'),
(39, 'n', 's', 'j', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `super_organisation`
--

CREATE TABLE `super_organisation` (
  `user_id` int(11) NOT NULL,
  `reg_certificate_img1` varchar(255) DEFAULT NULL,
  `reg_certificate_img2` varchar(255) DEFAULT NULL,
  `reg_expire_date` date DEFAULT NULL,
  `registration_date` varchar(255) DEFAULT NULL,
  `status` enum('pending','active','deactive') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` char(20) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `signup_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_login_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type` enum('individual','organisation','admin') DEFAULT NULL,
  `profile_image` varchar(255) DEFAULT 'public/Assets/images/default-profile.webp'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `password`, `signup_time`, `last_login_time`, `type`, `profile_image`) VALUES
(1, 'user1', 'user1@example.com', '1234567890', 'password1', '2021-12-31 18:30:00', '2021-12-31 18:30:00', 'individual', 'profile1.jpg'),
(2, 'user2', 'user2@example.com', '9876543210', 'password2', '2022-01-01 18:30:00', '2022-01-01 18:30:00', 'individual', 'profile2.jpg'),
(3, 'user3', 'user3@example.com', '5551112222', 'password3', '2022-01-02 18:30:00', '2022-01-02 18:30:00', 'individual', 'profile3.jpg'),
(4, 'user4', 'user4@example.com', '1239874560', 'password4', '2022-01-03 18:30:00', '2022-01-03 18:30:00', 'individual', 'profile4.jpg'),
(5, 'user5', 'user5@example.com', '9998887777', 'password5', '2022-01-04 18:30:00', '2022-01-04 18:30:00', 'individual', 'profile5.jpg'),
(6, 'user6', 'user6@example.com', '1112223333', 'password6', '2022-01-05 18:30:00', '2022-01-05 18:30:00', 'individual', 'profile6.jpg'),
(7, 'user7', 'user7@example.com', '4445556666', 'password7', '2022-01-06 18:30:00', '2022-01-06 18:30:00', 'individual', 'profile7.jpg'),
(8, 'user8', 'user8@example.com', '7896543210', 'password8', '2022-01-07 18:30:00', '2022-01-07 18:30:00', 'individual', 'profile8.jpg'),
(9, 'user9', 'user9@example.com', '1110009999', 'password9', '2022-01-08 18:30:00', '2022-01-08 18:30:00', 'individual', 'profile9.jpg'),
(10, 'user10', 'user10@example.com', '2223334444', 'password10', '2022-01-09 18:30:00', '2022-01-09 18:30:00', 'individual', 'profile10.jpg'),
(12, 'admin', 'user1@g.com', NULL, '$2y$10$fxQ4QrP4ND.WqjSGXjpj4OEXtnXIIDuFUgp6K1CuhsYxvCAz76DRu', '2024-01-14 02:01:46', '2024-01-14 02:06:41', NULL, '<?php echo URLROOT ?>/public/Assets/images/default-profile.webp'),
(13, 'user1', 'sd@d.n', NULL, '$2y$10$MTvXVBUPEZJs9QbF6ac0u.3zaDqeMbIzBU7OCxADLmfU68LyCRxAC', '2024-01-14 02:01:46', '2024-01-14 02:06:41', NULL, NULL),
(25, 'guru', 'guru2002@gmail.com', '0775684535', '5678', '2024-01-14 02:01:46', '2024-01-14 02:06:41', NULL, NULL),
(29, 'john_doe', 'john@example.com', NULL, 'password123', '2024-01-14 04:35:54', '0000-00-00 00:00:00', 'admin', NULL),
(30, 'jane_smith', 'jane@example.com', NULL, 'pass456', '2024-01-14 04:35:54', '0000-00-00 00:00:00', 'individual', NULL),
(31, 'bob_jackson', 'bob@example.com', NULL, 'securepass', '2024-01-14 04:35:54', '0000-00-00 00:00:00', 'organisation', NULL),
(32, 'user4', 'user4@g4g.c', NULL, '$2y$10$iSYUiX.mv6UG8WPtzlLSku7.ienk3czQ6o/BT4Aug29u3.6dnzKM6', '2024-02-06 23:42:33', '0000-00-00 00:00:00', 'individual', '../public/Assets/images/default-profile.webp'),
(33, 'User5', 'user5@g4g.c', NULL, '$2y$10$gQKsz4Meboa73YJwkpL16ur2eAV573GRztdmyiCTxrsPfWMHBx7dq', '2024-02-06 23:44:06', '0000-00-00 00:00:00', 'individual', '../public/Assets/images/default-profile.webp'),
(34, 'user4', 'user4@g.g', NULL, '$2y$10$5rS1cCPSPu9De582.CzWQOmGU5pL3zVLOgx5jQ4VWbB6kpzi52prC', '2024-02-07 14:29:58', '0000-00-00 00:00:00', 'individual', '../public/Assets/images/default-profile.webp'),
(35, 'sdf', 'ss@d.d', NULL, '$2y$10$XOD4KQQeU/ffMzw6A5eAPOTgsuD8vysLlT7nR8n/DR6u30Sfmv1N2', '2024-02-07 14:31:20', '0000-00-00 00:00:00', 'individual', '../public/Assets/images/default-profile.webp'),
(36, 'Manusath Derana', 'manusathderana@derana.co', NULL, '$2y$10$9vDjSAWXvhj5yV6NaPEjo.bZZX0tHDJ48G0q0CspFKRn/A7ruGljK', '2024-02-08 00:03:24', '0000-00-00 00:00:00', 'organisation', '/public/Assets/images/default-profile.webp'),
(37, 'Sanduni Dilhara', 'sdbandara@gmail.com', NULL, '$2y$10$9zlCVsu2kCHGDZGM6.Ml.ObTR/s9oWNgBFQZg2uuCUt4mFc8dzhW6', '2024-02-08 00:19:09', '0000-00-00 00:00:00', 'individual', '/public/Assets/images/default-profile.webp'),
(38, 'Hansi Perera', 'hansi@gmail.com', NULL, '$2y$10$fkKBtTVk9CdigeX45YG.R.nCmRq2Jgc/s/oUG478UuH6pZMB1U.Va', '2024-02-08 00:20:45', '0000-00-00 00:00:00', 'individual', 'public/Assets/images/default-profile.webp'),
(39, 'Youth Association Bambalapitiya', 'ya@bambalapitiya.com', NULL, '$2y$10$7Koik1rXDA1C2HFJUkNIHOYzr1nmTWVZDo1rDL.hVGFcqgMPNjYWK', '2024-02-08 00:34:54', '0000-00-00 00:00:00', 'organisation', 'public/Assets/images/default-profile.webp'),
(40, 'admin1', 'admin@1.x', NULL, '$2y$10$5wVQP/09eVQhHC7Y23wvU.u8QcdZ6SmpMqC/JhKd.Sp8SG0Ir16d6', '2024-02-08 09:00:11', '0000-00-00 00:00:00', 'admin', 'public/Assets/images/default-profile.webp'),
(41, 'Asarana Sarana', 'asarana@sarana.com', NULL, '$2y$10$P6Ln/G9f2BW/3PF5Y6NpZOF0esKad7ooWObr76PqvVbxwdErezSb2', '2024-02-08 09:07:18', '0000-00-00 00:00:00', 'organisation', 'public/Assets/images/default-org-profile.webp');

-- --------------------------------------------------------

--
-- Table structure for table `users_individual`
--

CREATE TABLE `users_individual` (
  `user_id` int(11) NOT NULL,
  `dob` date DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_individual`
--

INSERT INTO `users_individual` (`user_id`, `dob`, `fullname`) VALUES
(39, '2024-02-16', 'i');

-- --------------------------------------------------------

--
-- Table structure for table `users_organisation`
--

CREATE TABLE `users_organisation` (
  `user_id` int(11) NOT NULL,
  `regno` varchar(255) NOT NULL,
  `website` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `website_contribution`
--

CREATE TABLE `website_contribution` (
  `payment_id` int(11) NOT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `website_contribution`
--

INSERT INTO `website_contribution` (`payment_id`, `amount`, `user_id`, `time`) VALUES
(123, 20.00, 25, '2024-01-14 02:44:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank_details`
--
ALTER TABLE `bank_details`
  ADD PRIMARY KEY (`bank_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `donationpayments`
--
ALTER TABLE `donationpayments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `fundraiser_id` (`fundraiser_id`);

--
-- Indexes for table `edu_documents_individual`
--
ALTER TABLE `edu_documents_individual`
  ADD PRIMARY KEY (`fundraiser_id`);

--
-- Indexes for table `fundraiser`
--
ALTER TABLE `fundraiser`
  ADD PRIMARY KEY (`fundraiser_id`),
  ADD KEY `organizer_id` (`user_id`);

--
-- Indexes for table `fundraiser_complain`
--
ALTER TABLE `fundraiser_complain`
  ADD PRIMARY KEY (`complaint_id`),
  ADD KEY `complain_userID` (`complain_userID`),
  ADD KEY `fundraiser_id` (`fundraiser_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `health_documents_individual`
--
ALTER TABLE `health_documents_individual`
  ADD PRIMARY KEY (`fundraiser_id`);

--
-- Indexes for table `house_documents_individual`
--
ALTER TABLE `house_documents_individual`
  ADD PRIMARY KEY (`fundraiser_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `material_locations`
--
ALTER TABLE `material_locations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fundraiser_id` (`fundraiser_id`);

--
-- Indexes for table `merchandise`
--
ALTER TABLE `merchandise`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_fundraiser_id` (`fundraiser_id`);

--
-- Indexes for table `parentfundraising`
--
ALTER TABLE `parentfundraising`
  ADD PRIMARY KEY (`fundraiser_id`);

--
-- Indexes for table `sport_documents_individual`
--
ALTER TABLE `sport_documents_individual`
  ADD PRIMARY KEY (`fundraiser_id`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `super_individual`
--
ALTER TABLE `super_individual`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `super_organisation`
--
ALTER TABLE `super_organisation`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_individual`
--
ALTER TABLE `users_individual`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_organisation`
--
ALTER TABLE `users_organisation`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `website_contribution`
--
ALTER TABLE `website_contribution`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank_details`
--
ALTER TABLE `bank_details`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122238;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `merchandise`
--
ALTER TABLE `merchandise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bank_details`
--
ALTER TABLE `bank_details`
  ADD CONSTRAINT `bank_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `donationpayments`
--
ALTER TABLE `donationpayments`
  ADD CONSTRAINT `donationpayments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `donationpayments_ibfk_2` FOREIGN KEY (`fundraiser_id`) REFERENCES `fundraiser` (`fundraiser_id`);

--
-- Constraints for table `edu_documents_individual`
--
ALTER TABLE `edu_documents_individual`
  ADD CONSTRAINT `edu_documents_individual_ibfk_1` FOREIGN KEY (`fundraiser_id`) REFERENCES `fundraiser` (`fundraiser_id`);

--
-- Constraints for table `fundraiser`
--
ALTER TABLE `fundraiser`
  ADD CONSTRAINT `fundraiser_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `fundraiser_complain`
--
ALTER TABLE `fundraiser_complain`
  ADD CONSTRAINT `fundraiser_complain_ibfk_1` FOREIGN KEY (`complain_userID`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `fundraiser_complain_ibfk_2` FOREIGN KEY (`fundraiser_id`) REFERENCES `fundraiser` (`fundraiser_id`),
  ADD CONSTRAINT `fundraiser_complain_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `health_documents_individual`
--
ALTER TABLE `health_documents_individual`
  ADD CONSTRAINT `health_documents_individual_ibfk_1` FOREIGN KEY (`fundraiser_id`) REFERENCES `fundraiser` (`fundraiser_id`);

--
-- Constraints for table `house_documents_individual`
--
ALTER TABLE `house_documents_individual`
  ADD CONSTRAINT `house_documents_individual_ibfk_1` FOREIGN KEY (`fundraiser_id`) REFERENCES `fundraiser` (`fundraiser_id`);

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `material_locations`
--
ALTER TABLE `material_locations`
  ADD CONSTRAINT `material_locations_ibfk_1` FOREIGN KEY (`fundraiser_id`) REFERENCES `fundraiser` (`fundraiser_id`);

--
-- Constraints for table `merchandise`
--
ALTER TABLE `merchandise`
  ADD CONSTRAINT `fk_fundraiser_id` FOREIGN KEY (`fundraiser_id`) REFERENCES `fundraiser` (`fundraiser_id`);

--
-- Constraints for table `parentfundraising`
--
ALTER TABLE `parentfundraising`
  ADD CONSTRAINT `parentfundraising_ibfk_1` FOREIGN KEY (`fundraiser_id`) REFERENCES `fundraiser` (`fundraiser_id`);

--
-- Constraints for table `sport_documents_individual`
--
ALTER TABLE `sport_documents_individual`
  ADD CONSTRAINT `sport_documents_individual_ibfk_1` FOREIGN KEY (`fundraiser_id`) REFERENCES `fundraiser` (`fundraiser_id`);

--
-- Constraints for table `super_individual`
--
ALTER TABLE `super_individual`
  ADD CONSTRAINT `super_individual_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `super_organisation`
--
ALTER TABLE `super_organisation`
  ADD CONSTRAINT `super_organisation_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users_individual`
--
ALTER TABLE `users_individual`
  ADD CONSTRAINT `users_individual_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `users_organisation`
--
ALTER TABLE `users_organisation`
  ADD CONSTRAINT `users_organisation_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `website_contribution`
--
ALTER TABLE `website_contribution`
  ADD CONSTRAINT `website_contribution_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `website_contribution_ibfk_2` FOREIGN KEY (`payment_id`) REFERENCES `donationpayments` (`payment_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
