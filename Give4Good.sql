-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 18, 2024 at 12:21 PM
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
  `account_no` varchar(50) NOT NULL,
  `acc_holder` varchar(150) NOT NULL,
  `bank_code` varchar(20) DEFAULT NULL,
  `bank_name` varchar(100) DEFAULT NULL,
  `branch_code` varchar(20) DEFAULT NULL,
  `branch_name` varchar(100) DEFAULT NULL,
  `bank_pbook` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bank_details`
--

INSERT INTO `bank_details` (`bank_id`, `user_id`, `account_no`, `acc_holder`, `bank_code`, `bank_name`, `branch_code`, `branch_name`, `bank_pbook`) VALUES
(12, 60, '160200120098402', 'RASD Bandara', '7135', 'People&#39;s Bank', '160', 'Pelmadulle', '/public/Assets/Uploaded-Images/Bank-passbook/60_.jpeg'),
(13, 61, '123433230098302', 'RJ Pushpakumara', '7135', 'People&#39;s Bank', '211', 'Thimbirigasyaya', '/public/Assets/Uploaded-Images/Bank-passbook/61_.jpeg'),
(17, 64, '5526363', 'ASW Maria Puwakpitiya', '1882', 'BOC', '55', 'Galle', '/public/Assets/Uploaded-Images/Bank-passbook/64_.jpeg'),
(18, 65, '160200120012432', 'UCSC', '3222', 'HND', '121', 'Thimbirigasyaya', '/public/Assets/Uploaded-Images/Bank-passbook/65_.jpeg'),
(19, 66, '071011361161120', 'Nimal Perera', '7010', 'BOC', '670', 'Kollupitiya', '/public/Assets/Uploaded-Images/Bank-passbook/66_.jpg'),
(20, 67, '4916217501611292', 'RSD Bandara', '1232', 'BOC', '12', 'Balangoda', '/public/Assets/Uploaded-Images/Bank-passbook/67_.png'),
(21, 38, '8080', 'San', '9000', 'boc', '099', 'Balangoda', '/public/Assets/Uploaded-Images/Bank-passbook/38_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'education'),
(2, 'sport'),
(3, 'health'),
(4, 'housing'),
(5, 'animals'),
(6, 'disasters'),
(7, 'environment'),
(8, 'community');

-- --------------------------------------------------------

--
-- Table structure for table `donationpayments`
--

CREATE TABLE `donationpayments` (
  `payment_id` varchar(50) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `fundraiser_id` int(11) DEFAULT NULL,
  `donated_amount` decimal(10,2) DEFAULT NULL,
  `contribution_amount` decimal(10,2) DEFAULT 0.00,
  `payment_time` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donationpayments`
--

INSERT INTO `donationpayments` (`payment_id`, `user_id`, `fundraiser_id`, `donated_amount`, `contribution_amount`, `payment_time`) VALUES
('662a62e49bf8b', 60, 181, 211.00, 0.00, '2024-04-25 19:34:46'),
('662a684a9578f', 60, 180, 1800.00, 200.00, '2024-04-25 19:57:54'),
('662a6f60d97ac', 60, 180, 1000.00, 50.00, '2024-04-25 20:28:17'),
('662a82da69b4c', 60, 180, 10000.00, 1000.00, '2024-04-25 21:51:21'),
('662a98e695f83', 60, 181, 30000.00, 5000.00, '2024-04-25 23:25:18'),
('662f65b87b096', 61, 181, 33000.00, 0.00, '2024-04-29 14:48:52'),
('662f66cc09a9b', 61, 183, 50000.00, 0.00, '2024-04-29 14:52:37'),
('662fa7ef9bf00', 61, 184, 3000.00, 200.00, '2024-04-29 19:30:45'),
('66306632754df', 61, 188, 2000.00, 200.00, '2024-04-30 09:02:32'),
('663066a367f3b', 61, 184, 30000.00, 0.00, '2024-04-30 09:04:15'),
('6630bcac409b8', 66, 185, 48000.00, 2000.00, '2024-04-30 15:11:32'),
('663f1bc19808e', 38, 183, 31.00, 0.00, '2024-05-11 12:50:29');

--
-- Triggers `donationpayments`
--
DELIMITER $$
CREATE TRIGGER `update_fundraiser_details` AFTER INSERT ON `donationpayments` FOR EACH ROW BEGIN
    -- Update amount_collected
    UPDATE fundraiser
    SET amount_collected = amount_collected + NEW.donated_amount
    WHERE fundraiser_id = NEW.fundraiser_id;

    -- Update donationcounts
    UPDATE fundraiser
    SET donationcounts = donationcounts + 1
    WHERE fundraiser_id = NEW.fundraiser_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `executive`
--

CREATE TABLE `executive` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `nic_no` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `nic_front` varchar(255) NOT NULL,
  `nic_back` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `executive`
--

INSERT INTO `executive` (`user_id`, `fullname`, `designation`, `nic_no`, `address`, `email`, `contact`, `nic_front`, `nic_back`) VALUES
(61, 'Ranjay Jayarathna Pushpakumara', 'President', '199532109348', 'No.21, Kumara Street, Nugegoda', 'jayarathna@gmail.com', '0703421198', '/public/Assets/Uploaded-Images/Organisation/Executive_nic_front/61_.png', '/public/Assets/Uploaded-Images/Organisation/Executive_nic_back/61_.jpg'),
(65, 'Udayanthi Hansika', 'President', '200112332112', 'No.85/A, Welapara Galagoda, Kulegoda', 'udyanthi@gmail.com', '0753452343', '/public/Assets/Uploaded-Images/Organisation/Executive_nic_front/65_.jpg', '/public/Assets/Uploaded-Images/Organisation/Executive_nic_back/65_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `fundraiser`
--

CREATE TABLE `fundraiser` (
  `fundraiser_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `story` text DEFAULT NULL,
  `Category` enum('education','sport','health','housing','environment','animals','disasters','community') NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `amount_collected` decimal(10,2) DEFAULT 0.00,
  `user_id` int(11) DEFAULT NULL,
  `anonymous` tinyint(1) DEFAULT 0,
  `parent_funding` tinyint(1) NOT NULL DEFAULT 0,
  `view_counts` int(11) DEFAULT 0,
  `donationcounts` int(11) DEFAULT 0,
  `created_date` date DEFAULT current_timestamp(),
  `end_date` date NOT NULL,
  `modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` enum('Pending','Active','Deactive','End') DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fundraiser`
--

INSERT INTO `fundraiser` (`fundraiser_id`, `title`, `story`, `Category`, `amount`, `amount_collected`, `user_id`, `anonymous`, `parent_funding`, `view_counts`, `donationcounts`, `created_date`, `end_date`, `modified_date`, `status`) VALUES
(70, 'Help us to buy sports items', 'Our youth club yearns for the thrill of sports, but lacks the equipment to make it happen. Help us transform our dreams into victories by supporting our campaign to acquire essential sports items. Together, let&#39;s empower our youth to unleash their full potential on the playing field.', 'health', 20000.00, 0.00, 59, 0, 1, 0, 0, '2024-04-16', '2024-07-31', '2024-04-16 14:24:25', 'Pending'),
(180, 'Help Me Study Abroad and Reach for the Stars', 'Hello, wonderful supporters! My name is Sanduni, and I&#39;m on a thrilling journey to make my dreams come true. I am an ambitious student with a burning desire to explore the world of knowledge and make a positive impact on the lives of others. Today, I am reaching out to you for your support in making my dream of studying abroad a reality. Growing up, I have always been captivated by the magic of learning. Books, experiments, and the quest for knowledge have been my companions on this exciting adventure. Now, I have the incredible opportunity to pursue my education in Computer Science at a renowned international institution, but I can&#39;t do it alone. The path to studying abroad comes with challenges, especially financial ones. Your support will not only help cover tuition fees but also open doors to a world of possibilities that extend far beyond textbooks and classrooms. This isn&#39;t just about me; it&#39;s about breaking barriers, shattering limits, and proving that dreams can indeed take flight. Imagine the impact we can create together – a ripple effect of positive change that starts with education. Your contribution will empower me to bring back valuable knowledge and skills to our community, contributing to its growth and prosperity. Every donation, no matter how big or small, is a step toward making my dream a reality. Join me on this adventure, and let&#39;s reach for the stars together! Your support means more than words can express, and I am grateful for each and every one of you who believes in the power of education and dreams. Thank you for being a part of my journey!', 'education', 500000.00, 9900.00, 60, 0, 0, 174, 1, '2024-04-23', '2024-12-29', '2024-08-06 23:21:04', 'Active'),
(181, 'Help us to assist them walk', 'Wanted to take a moment to shed some light on an important issue that needs our attention: the living conditions in slum areas. Many individuals and families in these communities face daily challenges, from inadequate housing to limited access to basic amenities. But here&#39;s the thing: we have the power to make a difference! ✨ By coming together as a community, we can support and uplift those living in slum areas. Here are a few ways you can get involved: Volunteer your time: Consider reaching out to local organizations that work directly with these communities. You can offer your skills, whether it&#39;s teaching classes, organizing workshops, or providing mentorship. Your presence and support', 'community', 100000.00, 20000.00, 61, 1, 0, 184, 2, '2024-04-07', '2024-06-12', '2024-08-06 23:36:57', 'Active'),
(183, 'Helping a Mother Fulfill Her Son&#39;s Football Dream', 'My son, Daniel, shares his passion for football. Despite facing financial hardships\r\n\r\nDaniel&#39;s eyes light up whenever he talks about playing football. He dreams of becoming a professional player one day, just like his idols. However, the lack of proper equipment has been a hurdle in his journey.\r\n\r\nMaria knows how much Daniel desires a pair of high-quality football boots. She sees his dedication and talent on the field and believes that the right equipment could help him reach new heights in the sport.\r\n\r\nDriven by her love for her son and her unwavering belief in his potential, Maria has decided to take matters into her own hands. She is starting a fundraiser on a popular crowdfunding website to collect donations to buy football boots for Daniel.\r\n\r\nThrough her fundraiser story, Maria shares the heartwarming journey of a mother who wants nothing more than to see her son&#39;s dreams come true. She talks about Daniel&#39;s determination, his love for the game, and the obstacles they face as a family.\r\n\r\nMaria&#39;s fundraiser is not just about buying football boots; it&#39;s about nurturing a child&#39;s passion and empowering him to chase his dreams. She invites friends, family, and kind-hearted strangers to join her in making a difference in Daniel&#39;s life.\r\n\r\nWith every donation, Maria&#39;s hope grows stronger. She believes that with the community&#39;s support, Daniel will have the opportunity to shine on the football field and pursue his dreams with confidence.\r\n\r\nAs the fundraiser gains momentum, Maria is overwhelmed by the outpouring of love and support from people near and far. Their generosity gives her hope and reaffirms her belief in the goodness of humanity.\r\n\r\nTogether, Maria and Daniel&#39;s story inspires others to believe in the power of dreams and the importance of supporting each other&#39;s aspirations. It&#39;s a reminder that with love, d', 'sport', 20000.00, 5000.00, 64, 0, 1, 22, 2, '2024-04-28', '2024-05-28', '2024-08-06 23:21:54', 'Active'),
(184, 'Empowering Undergraduates: Providing Laptops for Learning', 'Dear Supporters,\r\n\r\nAt UCSC, we believe that every student deserves the opportunity to excel academically, regardless of their financial circumstances. As we continue our mission to foster an environment of learning and innovation, we are excited to announce our latest initiative: providing laptops to undergraduates in need.\r\n\r\nIn today&#39;s digital age, access to technology is essential for academic success. However, we recognize that not all students have the means to afford their own laptops. Whether it&#39;s due to financial constraints or other circumstances, many undergraduates face barriers to accessing the technology they need to fully engage in their studies.\r\n\r\nThat&#39;s why we&#39;re launching this fundraiser—to ensure that every student at UCSC has access to the tools they need to thrive. With your support, we aim to provide laptops to those who need them most, enabling them to participate fully in virtual classes, complete assignments, conduct research, and stay connected with their peers and professors.\r\n\r\nThe impact of this initiative extends far beyond the classroom. By equipping students with laptops, we are empowering them to reach their full potential and pursue their academic goals with confidence. Whether they&#39;re studying engineering, business, the arts, or any other field, access to technology opens doors to endless possibilities.\r\n\r\nYour generosity will make a difference in the lives of countless undergraduates, helping to level the playing field and ensure that every student has an equal opportunity to succeed. Together, we can break down barriers to education and empower the next generation of leaders, innovators, and changemakers.\r\n\r\nJoin us in making a difference today. Your donation—no matter how big or small—will have a lasting impact on the lives of our students. Together, we can ensure that every student at UCSC has the tools they need to thrive in today&#39;s digital world.\r\n\r\nThank you for your support.\r\n\r\nSincerely,\r\nUCSC', 'education', 200000.00, 0.00, 65, 0, 0, 36, 2, '2024-04-28', '2024-06-30', '2024-08-06 23:44:52', 'Active'),
(185, 'Rising Together Leo Organisations Tsunami Relief Fund', 'In the wake of a devastating tsunami that swept through coastal communities, Leo Organisation of the University of Colombo stands united in its mission to extend a helping hand to those in need. As the waves of destruction recede, a new wave of compassion and resilience emerges, binding hearts and minds together in a shared journey of recovery and hope.\r\n\r\nIn the early hours of the morning, as news of the disaster spreads, the members of Leo Organisation spring into action. With unwavering dedication and a sense of urgency, they gather to formulate a plan to provide relief to the affected areas. Led by a spirit of service and empathy, they set out on a mission to make a difference, one life at a time.\r\n\r\nAs they navigate through the wreckage and chaos, Leo Organisation encounters stories of loss and survival that tug at the heartstrings. They meet families who have lost everything overnight – their homes, livelihoods, and loved ones swept away by the unforgiving force of nature. Yet, amidst the despair, there is a glimmer of hope – a resilience that refuses to be extinguished.\r\n\r\nWith every step they take, Leo Organisation witnesses the power of community coming together in solidarity. Volunteers from all walks of life join hands, offering assistance and support to those in need. Together, they distribute food, water, and essential supplies, providing a lifeline to those who have been left stranded and vulnerable.\r\n\r\nBut the journey is far from over. As they continue their relief efforts, Leo Organisation recognizes the importance of long-term support and sustainable solutions. They pledge to rebuild homes, restore livelihoods, and empower communities to stand strong in the face of adversity.\r\n\r\nAs the days turn into weeks, and the weeks into months, the spirit of resilience prevails. Through the generosity of donors and the dedication of volunteers, Leo Organisation&#39;s Tsunami Relief Fund grows, bringing hope and healing to those who need it most.\r\n\r\nIn the aftermath of tragedy', 'disasters', 100000.00, 99000.00, 61, 0, 0, 19, 1, '2024-04-29', '2024-09-12', '2024-06-02 04:05:40', 'Active'),
(187, 'Green Earth, Bright Future: Let&#39;s Preserve Our Planet!', 'Hello, fellow Earth enthusiasts!\r\n\r\nWe are the UOC Leo Club, a group of passionate young individuals dedicated to making a positive impact on our planet. We believe that every small action counts in preserving our environment for future generations.\r\n\r\nOur planet is facing unprecedented challenges, from climate change to biodiversity loss. But we refuse to stand idly by. We are launching a fundraiser to support local environmental initiatives that aim to protect and restore our precious ecosystems.\r\n\r\nWith your support, we will:\r\n\r\nPlant Trees: Trees are nature&#39;s superheroes, absorbing carbon dioxide, providing oxygen, and creating habitats for countless species. Your donations will enable us to organize tree-planting events in our community, replenishing green spaces and combating deforestation.\r\nClean Up Our Community: Plastic pollution is a pressing issue threatening our oceans, rivers, and wildlife. We will organize community clean-up drives to remove litter from parks, beaches, and waterways, preventing it from harming marine life and polluting our environment.\r\nPromote Sustainability: Education is key to fostering a culture of sustainability. We will collaborate with local schools and organizations to raise awareness about environmental issues and promote eco-friendly practices like recycling, composting, and reducing single-use plastics.\r\nTogether, we can make a difference. Every dollar you donate will contribute to building a greener, healthier planet for future generations to enjoy. Let&#39;s join hands and work towards a brighter, more sustainable future for all!\r\n\r\nThank you for your support.\r\n\r\nWarm regards,\r\nThe UOC Leo Club', 'environment', 30000.00, 28000.00, 61, 0, 0, 3, 0, '2024-04-30', '2024-05-18', '2024-07-22 06:05:39', 'Active'),
(188, 'Bridging Generations: The Leo Club of UOC&#39;s Mission to Support an Elderly Home', 'Once upon a time in the heart of our community, there stood a humble abode, where the echoes of laughter and the warmth of companionship once filled every corner. It was the home to our elders, those who had weathered life&#39;s storms and embraced its joys, but now found themselves in need of a helping hand.\r\n\r\nThe Leo Club of UOC, inspired by the spirit of service and compassion, embarked on a mission to breathe life back into this cherished sanctuary. With hearts full of empathy and hands ready to serve, they envisioned a brighter future for the residents of the elder&#39;s home.\r\n\r\nTheir journey began with a simple idea - a fundraiser to spark hope and ignite change. Drawing upon the strength of their community, they rallied volunteers, supporters, and sponsors alike, each eager to play a part in this noble cause.\r\n\r\nAs the sun rose on the day of the fundraiser, the air buzzed with excitement and anticipation. Booths adorned with colorful banners and stalls brimming with homemade treats lined the streets, inviting passersby to join in the festivities.\r\n\r\nFrom bake sales to raffles, every contribution, no matter how small, became a beacon of hope for the elders who awaited the promise of a brighter tomorrow. The sounds of laughter and music filled the air, weaving a tapestry of joy and unity that bound the community together.', 'community', 30000.00, 26000.00, 61, 1, 0, 9, 1, '2024-04-30', '2024-05-12', '2024-06-02 04:03:40', 'Active'),
(190, 'Help me for my higher studies', 'Dear friends and supporters, I am reaching out to humbly request your assistance in an online fundraiser for my higher studies. As I embark on this journey of academic pursuit, I am faced with financial challenges that threaten to hinder my progress. Your contribution, no matter how small, will make a significant difference in my ability to access quality education and pursue my dreams. With your generous support, I can overcome these obstacles and realize my full potential. Your kindness and generosity will not only impact my life but also contribute to building a brighter future. Your support isn&#39;t just an investment in my future; it&#39;s a testament to the transformative power of kindness and compassion. By helping me overcome these financial barriers, you&#39;re not only impacting my life but also laying the foundation for a brighter, more equitable future for generations to come.As I stand on the threshold of this new chapter, I am filled with hope and gratitude for each and every one of you who chooses to stand by my side. Your unwavering support reaffirms my belief in the inherent goodness of humanity and gives me the strength to pursue my dreams with unwavering determination. From the depths of my heart, I extend my deepest gratitude to you for considering my plea and for your willingness to make a difference. Together, we can rewrite the narrative and create a world where education knows no bounds.', 'sport', 100000.00, 65000.00, 61, 0, 0, 9, 0, '2024-04-30', '2024-06-14', '2024-06-02 04:10:11', 'Active'),
(191, 'p', 'pp', 'sport', 9000.00, 0.00, 61, 0, 0, 0, 0, '2024-04-30', '2024-05-05', '2024-04-30 12:04:47', 'Pending'),
(192, 'm', 'm', 'health', 9000.00, 0.00, 61, 0, 0, 0, 0, '2024-04-30', '2024-05-05', '2024-04-30 12:09:04', 'Pending'),
(193, 'sa', 'zxcx', 'sport', 12.00, 0.00, 61, 0, 0, 0, 0, '2024-07-22', '2024-07-26', '2024-07-22 06:15:25', 'Pending');

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

-- --------------------------------------------------------

--
-- Table structure for table `fundraiser_images`
--

CREATE TABLE `fundraiser_images` (
  `imgid` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `fundraiser_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fundraiser_images`
--

INSERT INTO `fundraiser_images` (`imgid`, `img`, `fundraiser_id`) VALUES
(89, '/public/Assets/Uploaded-Images/Fundraisers/Images/60_Help Me Study Abroad and Reach for the Stars_1.jpg', 180),
(90, '/public/Assets/Uploaded-Images/Fundraisers/Images/60_Help Me Study Abroad and Reach for the Stars_2.png', 180),
(91, '/public/Assets/Uploaded-Images/Fundraisers/Images/61_Help us to assist them walk_1.jpg', 181),
(92, '/public/Assets/Uploaded-Images/Fundraisers/Images/61_Help us to assist them walk_2.jpg', 181),
(93, '/public/Assets/Uploaded-Images/Fundraisers/Images/61_Help us to assist them walk_3.jpeg', 181),
(94, '/public/Assets/Uploaded-Images/Fundraisers/Images/61_Help us to assist them walk_4.png', 181),
(95, '/public/Assets/Uploaded-Images/Fundraisers/Images/61_Help us to assist them walk_5.jpeg', 181),
(97, '/public/Assets/Uploaded-Images/Fundraisers/Images/64_Helping a Mother Fulfill Her Son&#39;s Football Dream_1.jpg', 183),
(98, '/public/Assets/Uploaded-Images/Fundraisers/Images/65_Empowering Undergraduates: Providing Laptops for Learning_1.jpg', 184),
(99, '/public/Assets/Uploaded-Images/Fundraisers/Images/65_Empowering Undergraduates: Providing Laptops for Learning_2.jpg', 184),
(100, '/public/Assets/Uploaded-Images/Fundraisers/Images/61_Rising Together Leo Organisations Tsunami Relief Fund_1.jpeg', 185),
(101, '/public/Assets/Uploaded-Images/Fundraisers/Images/61_Rising Together Leo Organisations Tsunami Relief Fund_2.jpeg', 185),
(102, '/public/Assets/Uploaded-Images/Fundraisers/Images/61_Rising Together Leo Organisations Tsunami Relief Fund_3.jpeg', 185),
(106, '/public/Assets/Uploaded-Images/Fundraisers/Images/61_Green Earth, Bright Future: Lets Preserve Our Planet!_1.jpg', 187),
(107, '/public/Assets/Uploaded-Images/Fundraisers/Images/61_Bridging Generations: The Leo Club of UOCs Mission to Support an Elderly Home_1.jpeg', 188),
(108, '/public/Assets/Uploaded-Images/Fundraisers/Images/61_Bridging Generations: The Leo Club of UOCs Mission to Support an Elderly Home_2.jpg', 188),
(112, '/public/Assets/Uploaded-Images/Fundraisers/Images/61_Help me for my higher studies_1.jpg', 190),
(113, '/public/Assets/Uploaded-Images/Fundraisers/Images/61_p_1.png', 191),
(114, '/public/Assets/Uploaded-Images/Fundraisers/Images/61_m_1.jpg', 192),
(115, '/public/Assets/Uploaded-Images/Fundraisers/Images/61_sa_1.png', 193);

-- --------------------------------------------------------

--
-- Table structure for table `individual_fundraiser_documents`
--

CREATE TABLE `individual_fundraiser_documents` (
  `category_id` int(11) NOT NULL,
  `document` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `document_name` varchar(255) DEFAULT NULL,
  `deleted_doc` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `individual_fundraiser_documents`
--

INSERT INTO `individual_fundraiser_documents` (`category_id`, `document`, `description`, `document_name`, `deleted_doc`) VALUES
(1, 'ApprovalofEducationalInstitute', 'The approval or endorsement obtained from an educational institute for the fundraising activity.', 'Approval of Educational Institute', 0),
(1, 'ConsentofAdministrativeOfficer', 'Official consent or authorization obtained from a regional government officer', 'Consent of Administrative Officer', 0),
(2, 'ApprovalofGovernmentcertifiedphysicalinstructor', 'The approval obtained from a physical instructor for the fundraising activity. It should confirm that the physical instructor recognizes and supports the initiative, and approve the fundraising amount', 'Approval of Government certified physical instructor', 0),
(2, 'ConsentofRegionalAdministrativeOfficer', 'Official consent or authorization obtained from a regional government officer or authority.', 'Consent of Regional Administrative Officer', 0),
(3, 'ConsentofRegionalAdministrativeOfficer', 'Official consent or approval from a government officer or authority for the fundraising activity', 'Consent of Regional Administrative Officer', 0),
(3, 'Doctorsletter', 'A formal letter issued by a doctor, providing information about the individual\'s health status', 'Doctor\'s letter', 0),
(3, 'MedicalReport', 'A detailed report about the medical condition of the individual', 'Medical Report', 0),
(4, 'ConsentofRegionalAdministrativeOfficer', 'Official consent or authorization obtained from a regional government officer or authority. It should confirm that the officer recognizes and supports the initiative, and approve the fundraising amount', 'Consent of Regional Administrative Officer', 0),
(4, 'PoliceReport', 'Police report', 'Police Report', 0),
(4, 'UtilityBill', 'A utility bill of the residence in the provided address not old than three months', 'Utility Bill', 0);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `province` varchar(100) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `zip_code` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`location_id`, `user_id`, `province`, `district`, `zip_code`) VALUES
(139, 60, 'Sabaragamuwa', 'Ratnapura', '70800'),
(140, 61, 'Western', 'Colombo', '04331'),
(144, 64, 'Southern', 'Galle', '34800'),
(145, 65, 'Western', 'Colombo', '90023'),
(146, 66, 'Northern', 'Kilinochchi', '40009'),
(147, 67, 'North Western', 'Puttalam', '20001'),
(148, 38, 'Southern', 'Galle', '00000');

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `material_id` int(11) NOT NULL,
  `fundraiser_id` int(11) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT '/public/Assets/Uploaded-Images/default_image.webp',
  `units` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`material_id`, `fundraiser_id`, `name`, `description`, `image`, `units`) VALUES
(46, 181, 'Wheelchair', 'Patient chair with commode arm decline. Convenient commode arm for easy toileting access. With sturdy construction for patient safety. Designed for those who need assistance with mobility.', '/public/Assets/Uploaded-Images/Fundraisers/Materials/61_Help us to assist them walk_1.jpeg', 35),
(47, 181, 'Armpit Crutches', 'Any general Armpit Crutches made for patients', '/public/Assets/Uploaded-Images/Fundraisers/Materials/61_Help us to assist them walk_2.jpeg', 20),
(48, 181, 'Walker', 'Any general Walkers made for patients', '/public/Assets/Uploaded-Images/Fundraisers/Materials/61_Help us to assist them walk_3.png', 13),
(50, 183, 'Football Boots', 'Football boots for tournaments Size : 41.5', '/public/Assets/Uploaded-Images/Fundraisers/Materials/64_Helping a Mother Fulfill Her Sons Football Dream_1.jpg', 1),
(51, 184, 'Laptops', '13-inch screen that can be flipped around to be used like a large tablet. It weighs 1.39kg, which is about average for a 2-in-1, 13-inch laptop. This means it’s light enough to be carried around in a bag all day without causing much bother.', '/public/Assets/Uploaded-Images/Fundraisers/Materials/65_Empowering Undergraduates: Providing Laptops for Learning_1.jpg', 6),
(52, 188, 'dialy necessities', 'The Leo Club of UOC, driven by compassion and a desire to make a tangible difference, initiated a heartfelt campaign to ensure that the daily needs of the residents of the elderly home were met with dignity and respect. With a vision to create a lifeline of support, they launched the &#34;Caring Crates&#34; initiative.', '/public/Assets/Uploaded-Images/Fundraisers/Materials/61_Bridging Generations: The Leo Club of UOCs Mission to Support an Elderly Home_1.jpeg', 23);

-- --------------------------------------------------------

--
-- Table structure for table `material_location`
--

CREATE TABLE `material_location` (
  `location_id` int(11) NOT NULL,
  `fundraiser_id` int(11) DEFAULT NULL,
  `area` varchar(50) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `material_location`
--

INSERT INTO `material_location` (`location_id`, `fundraiser_id`, `area`, `address`, `contact`) VALUES
(1, 181, 'Colombo 7', 'No.21, Dharmapala Rd, Dematagoda', '0702114332'),
(2, 181, 'Piliyandala', 'No.323/3, Polgasowita, Piliyandala', '0703223897'),
(3, 181, 'Nugegoda', 'No.10, Gamsabhahandiya, Nugegoda', '0727923897'),
(4, 181, 'Homagama', 'No.12, Godagama, Homagama', '0703232395'),
(6, 183, 'Galle', 'No. 12, Kumara Street, Galle', '0402231233'),
(7, 185, 'Colombo 7', 'No.34, Reid Avenue, UCSC', '0702114332'),
(9, 188, 'Piliyandala', '123 Elm Street, Springfield, USA', '0712301221');

-- --------------------------------------------------------

--
-- Table structure for table `material_map_location`
--

CREATE TABLE `material_map_location` (
  `location_id` int(11) NOT NULL,
  `fundraiser_id` int(11) DEFAULT NULL,
  `latitude` decimal(18,16) DEFAULT NULL,
  `longitude` decimal(19,16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `material_map_location`
--

INSERT INTO `material_map_location` (`location_id`, `fundraiser_id`, `latitude`, `longitude`) VALUES
(1, 181, 6.9061039000000000, 79.8560492000000000),
(2, 181, 6.7896036000000000, 79.8951097000000000),
(3, 181, 6.8645648000000000, 79.8950170000000000),
(6, 183, 6.0341707006994000, 80.1707972000000000),
(7, 183, 6.9126599927190000, 79.8562055000000000),
(8, 185, 5.9361779674189000, 80.4840393310950000),
(9, 185, 5.9266163952619000, 80.5884094482820000),
(10, 185, 6.8911346581408000, 79.8887039197850000),
(14, 188, 6.8522317858432000, 79.9678845180240000),
(15, 188, 6.1095771015810000, 80.1903751137220000),
(16, 188, 6.0159317144450000, 80.2494266273940000);

-- --------------------------------------------------------

--
-- Table structure for table `merchandise`
--

CREATE TABLE `merchandise` (
  `id` int(11) NOT NULL,
  `fundraiser_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `amount_for_fund` decimal(11,0) NOT NULL,
  `total_quantity` int(6) NOT NULL,
  `discount` decimal(8,0) DEFAULT NULL,
  `sold` int(6) NOT NULL DEFAULT 0,
  `description` text DEFAULT NULL,
  `merch_image` varchar(255) NOT NULL,
  `status` enum('Pending','Active','Deactive','End') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `merchandise`
--

INSERT INTO `merchandise` (`id`, `fundraiser_id`, `product_name`, `price`, `amount_for_fund`, `total_quantity`, `discount`, `sold`, `description`, `merch_image`, `status`) VALUES
(10, 181, 'Black short sleeve t-shirt', 2200.00, 200, 100, NULL, 41, 'High quality Black and Red short sleeve T-shirt for unisex gender.\r\n                                    Made from cotton cloth. High quality Black and Red short sleeve T-shirt for unisex\r\n                                    gender.\r\n                                    Madw Made from cotton cloth. High quality Black and Red short sleeve T-shirt for\r\n                                    unisex gender.\r\n                                    Madw Made from cotton cloth. High quality Black', '/public/Assets/Uploaded-Images/Fundraisers/Merchandise/61_Help us to assist them walk_1.jpeg', 'Active'),
(11, 181, 'Sport Cap(red)', 1000.00, 100, 50, NULL, 3, 'This Red NY logo Cap Baseball Unisex Adjustable is the perfect accessory for any casual outfit. Made of Poly-cotton, this baseball cap is hand washable. The adjustable strap ensures a comfortable fit for all head sizes. The plain pattern and NY logo make it a versatile accessory for any season. Color: Red', '/public/Assets/Uploaded-Images/Fundraisers/Merchandise/61_Help us to assist them walk_2.jpg', 'Active'),
(13, 185, 'White Mugs', 600.00, 50, 300, NULL, 0, 'Introducing the Unity Mug – more than just a vessel for your favorite beverage, it&#39;s a beacon of hope, a symbol of solidarity, and a catalyst for change. Crafted with care and adorned with a simple yet powerful design, this white mug serves as a reminder of our collective strength and resilience in the face of adversity', '/public/Assets/Uploaded-Images/Fundraisers/Merchandise/61_Rising Together Leo Organisations Tsunami Relief Fund_1.jpeg', 'Active'),
(15, 188, 'LEO Club Tshirts', 2000.00, 200, 123, NULL, 0, 'Designed with love and crafted with care, these T-shirts served as more than just garments; they were symbols of solidarity, carrying with them the message that no elder should ever feel alone or forgotten. With Mr. Chandie&#39;s blessing, the Leo Club set out to make these T-shirts a vehicle for change, with every purchase contributing to the well-being of our elders.', '/public/Assets/Uploaded-Images/Fundraisers/Merchandise/61_Bridging Generations: The Leo Club of UOCs Mission to Support an Elderly Home_1.jpeg', 'Active'),
(17, 191, 'Caps', 1000.00, 100, 100, NULL, 0, 'Caps', '/public/Assets/Uploaded-Images/Fundraisers/Merchandise/61_p_1.jpg', 'Pending'),
(18, 192, 'Product name', 1000.00, 20, 120, 100, 0, 'Description', '/public/Assets/Uploaded-Images/Fundraisers/Merchandise/61_m_1.jpg', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `merch_sales`
--

CREATE TABLE `merch_sales` (
  `payment_id` varchar(10) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `merch_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total_amount` decimal(10,2) DEFAULT NULL,
  `payment_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `merch_sales`
--

INSERT INTO `merch_sales` (`payment_id`, `user_id`, `merch_id`, `quantity`, `total_amount`, `payment_time`) VALUES
('12', 36, 11, 3, 3000.00, '2024-04-30 02:41:48'),
('121d7mcks', 60, 10, 1, 2200.00, '2024-04-30 02:51:53'),
('127mcks', 60, 10, 1, 2200.00, '2024-04-30 00:45:10'),
('23ds', 60, 10, 10, 2200.00, '2024-04-28 21:54:01'),
('77s', 60, 10, 1, 2200.00, '2024-04-29 18:10:30'),
('7mks', 60, 10, 1, 2200.00, '2024-04-29 18:20:37'),
('97mcks', 60, 10, 1, 2200.00, '2024-04-30 02:57:12'),
('iujdds', 60, 10, 1, 2200.00, '2024-04-29 17:55:21'),
('qiiujdds', 60, 10, 1, 2200.00, '2024-04-29 17:53:46'),
('qjdds', 60, 10, 1, 2200.00, '2024-04-29 17:45:07'),
('qjs', 60, 10, 1, 2200.00, '2024-04-29 17:44:49'),
('sajdds', 60, 10, 1, 2200.00, '2024-04-29 17:57:45'),
('sjs', 60, 10, 1, 2200.00, '2024-04-29 17:42:14'),
('ss', 60, 10, 1, 2200.00, '2024-04-29 02:25:03');

--
-- Triggers `merch_sales`
--
DELIMITER $$
CREATE TRIGGER `update_sold_count` AFTER INSERT ON `merch_sales` FOR EACH ROW BEGIN
    UPDATE merchandise
    SET sold = sold + NEW.quantity
    WHERE id = NEW.merch_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notification_id` int(11) NOT NULL,
  `notification` text DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `organisation_fundraiser_documents`
--

CREATE TABLE `organisation_fundraiser_documents` (
  `category_id` int(11) NOT NULL,
  `document` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `document_name` varchar(255) DEFAULT NULL,
  `deleted_doc` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `organisation_fundraiser_documents`
--

INSERT INTO `organisation_fundraiser_documents` (`category_id`, `document`, `description`, `document_name`, `deleted_doc`) VALUES
(1, 'FundAcceptorsStatement', 'This document should be provided by the fund acceptor, outlines their need for funds. It may include details such as the purpose of the fundraising, the amount required, and how the funds will be utilized. Your organisation could be the Fund Acceptor as well', 'Fund Acceptor\'s Statement', 0),
(1, 'RegionalAdministrativeOfficersCertification', 'This document should be provided by a regional administrative officer or authority, certifies the authenticity of the fund acceptor\'s need for funds. It verifies that the fund acceptor is recognized by the regional authority and confirms their requirement for financial assistance.', 'Regional Administrative Officer\'s Certification', 0),
(2, 'doc1', 'Doc1 des', 'doc1', 0),
(2, 'FundAcceptorsStatement', 'This document should be provided by the fund acceptor, outlines their need for funds. It may include details such as the purpose of the fundraising, the amount required, and how the funds will be utilized. Your organisation could be the Fund Acceptor as well', 'Fund Acceptor\'s Statement', 0),
(2, 'RegionalAdministrativeOfficersCertification', 'This document should be provided by a regional administrative officer or authority, certifies the authenticity of the fund acceptor\'s need for funds. It verifies that the fund acceptor is recognized by the regional authority and confirms their requirement for financial assistance.', 'Regional Administrative Officer\'s Certification', 0),
(3, 'FundAcceptorsStatement', 'This document should be provided by the fund acceptor, outlines their need for funds. It may include details such as the purpose of the fundraising, the amount required, and how the funds will be utilized. Your organisation could be the Fund Acceptor as well', 'Fund Acceptor\'s Statement', 0),
(3, 'RegionalAdministrativeOfficersCertification', 'This document should be provided by a regional administrative officer or authority, certifies the authenticity of the fund acceptor\'s need for funds. It verifies that the fund acceptor is recognized by the regional authority and confirms their requirement for financial assistance.', 'Regional Administrative Officer\'s Certification', 0),
(4, 'FundAcceptorsStatement', 'This document should be provided by the fund acceptor, outlines their need for funds. It may include details such as the purpose of the fundraising, the amount required, and how the funds will be utilized. Your organisation could be the Fund Acceptor as well', 'Fund Acceptor\'s Statement', 0),
(4, 'RegionalAdministrativeOfficersCertification', 'This document should be provided by a regional administrative officer or authority, certifies the authenticity of the fund acceptor\'s need for funds. It verifies that the fund acceptor is recognized by the regional authority and confirms their requirement for financial assistance.', 'Regional Administrative Officer\'s Certification', 0),
(5, 'DocumentTest', 'Test description', 'Document Test', 1),
(5, 'FundAcceptorsStatement', 'This document should be provided by the fund acceptor, outlines their need for funds. It may include details such as the purpose of the fundraising, the amount required, and how the funds will be utilized. Your organisation could be the Fund Acceptor as well', 'Fund Acceptor\'s Statement', 0),
(5, 'RegionalAdministrativeOfficersCertification', 'This document should be provided by a regional administrative officer or authority, certifies the authenticity of the fund acceptor\'s need for funds. It verifies that the fund acceptor is recognized by the regional authority and confirms their requirement for financial assistance.', 'Regional Administrative Officer\'s Certification', 0),
(6, 'FundAcceptorsStatement', 'This document should be provided by the fund acceptor, outlines their need for funds. It may include details such as the purpose of the fundraising, the amount required, and how the funds will be utilized. Your organisation could be the Fund Acceptor as well', 'Fund Acceptor\'s Statement', 0),
(6, 'RegionalAdministrativeOfficersCertification', 'This document should be provided by a regional administrative officer or authority, certifies the authenticity of the fund acceptor\'s need for funds. It verifies that the fund acceptor is recognized by the regional authority and confirms their requirement for financial assistance.', 'Regional Administrative Officer\'s Certification', 0),
(7, 'FundAcceptorsStatement', 'This document should be provided by the fund acceptor, outlines their need for funds. It may include details such as the purpose of the fundraising, the amount required, and how the funds will be utilized. Your organisation could be the Fund Acceptor as well', 'Fund Acceptor\'s Statement', 0),
(7, 'RegionalAdministrativeOfficersCertification', 'This document should be provided by a regional administrative officer or authority, certifies the authenticity of the fund acceptor\'s need for funds. It verifies that the fund acceptor is recognized by the regional authority and confirms their requirement for financial assistance.', 'Regional Administrative Officer\'s Certification', 0),
(8, 'FundAcceptorsStatement', 'This document should be provided by the fund acceptor, outlines their need for funds. It may include details such as the purpose of the fundraising, the amount required, and how the funds will be utilized. Your organisation could be the Fund Acceptor as well', 'Fund Acceptor\'s Statement', 0),
(8, 'RegionalAdministrativeOfficersCertification', 'This document should be provided by a regional administrative officer or authority, certifies the authenticity of the fund acceptor\'s need for funds. It verifies that the fund acceptor is recognized by the regional authority and confirms their requirement for financial assistance.', 'Regional Administrative Officer\'s Certification', 0);

-- --------------------------------------------------------

--
-- Table structure for table `parentfundraising`
--

CREATE TABLE `parentfundraising` (
  `fundraiser_id` int(11) NOT NULL,
  `child_fullname` varchar(255) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `relationship_to_user` varchar(100) DEFAULT NULL,
  `edu_work` varchar(255) NOT NULL,
  `birth_certificate` varchar(255) DEFAULT NULL,
  `dependent_note` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parentfundraising`
--

INSERT INTO `parentfundraising` (`fundraiser_id`, `child_fullname`, `birthdate`, `relationship_to_user`, `edu_work`, `birth_certificate`, `dependent_note`) VALUES
(183, 'Daniel De Silva', '2009-03-12', 'Mother', 'Richmond College', '/public/Assets/Uploaded-Images/Fundraisers/Birth-Certificates/64_Helping a Mother Fulfill Her Son&#39;s Football Dream.jpg', 'I am really greatful if you could help me');

-- --------------------------------------------------------

--
-- Table structure for table `secretary`
--

CREATE TABLE `secretary` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `nic_no` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `nic_front` varchar(255) NOT NULL,
  `nic_back` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `secretary`
--

INSERT INTO `secretary` (`user_id`, `fullname`, `designation`, `nic_no`, `address`, `email`, `contact`, `nic_front`, `nic_back`) VALUES
(61, 'Pransha Vedalage Sachin Bandara', 'Secretary', '199821023912', 'No.2, Main Street, Balangoda', 'sachi@gmail.com', '0721233219', '/public/Assets/Uploaded-Images/Organisation/Secretary_nic_front/61_.jpg', '/public/Assets/Uploaded-Images/Organisation/Secretary_nic_back/61_.jpg'),
(65, 'Keesha Kaushalya', 'Secretary', '200134723902', 'No431, Karawketiya Rd, Balangoda', 'keesha@gmail.com', '0452270321', '/public/Assets/Uploaded-Images/Organisation/Secretary_nic_front/65_.jpeg', '/public/Assets/Uploaded-Images/Organisation/Secretary_nic_back/65_.png');

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
(15, 58, 'Give support to find a medicine', 'We\'re on a mission to find a critical medicine that seems to be elusive. If you have any information or leads on where we can locate this medicine, please don\'t hesitate to contact us. Lives may depend on it. Together, we can make a difference and bring hope to those in need. Thank you for your support and assistance in this urgent quest.', '0115548141', 'bhagyaliyanage99@gmail.com', 'app/Uploaded-Images/Stories/medicine.jpg', 'Deactive'),
(40, 39, 'Sahurda Wiyamana', 'ොළඹ විශ්ව විද්‍යාලයීය ලියෝ සමාජය මගින් සංවිධානය කල සහෘද වියමන අදියර 6කින් යුතු ව්‍යාපෘතියේ දෙවන අදියර ඉතා සාර්ථකව නිමකරන කරන ලදී. එම කටයුතු සාර්ථක කර ගැනීම උදෙසා උපකාර කළ ඔබ සැමට ස්තූතියි.❤ Facebook: https://bit.ly/3udizp5', '0705760021', 'sdbandara@gmail.com', '/public/Assets/Uploaded-Images/Stories/39_Sahurda Wiyamana.jpeg', 'Active'),
(44, 39, 'Kadurata Law', '‼️Happening Today‼️\r\n\r\n-දෙනෙත් අග ගිලී යන යුක්තියට පිළියම -\r\n\r\n&#34;කදුරට ට Law&#34; \r\n\r\nකදු අතර සැඟව යන අපේම මිනිසුන්ගේ ජීවන ගැටලු නීතිමය ඇසෙන් දකිනු වස්, \r\n\r\n📌පෙබරවාරි 17 වන සෙනසුරාදා ( අද )\r\n🕑 පෙ.ව.11.30 සිට ප.ව. 4.00 දක්වා\r\n📍නුවරඑළිය, ආගරපතන, ශ්‍රී සුධර්ශනාරාමයේදී\r\n\r\nවිසඳමු ව්‍යාපෘතියේ දෙවන අදියර,\r\n\r\nඋදාවූ අද දිනේ සුන්දර තේ වතු අතර නීති ගැටළු විමසනු ලැබේ.\r\n\r\n👣🫂⚖\r\n\r\nFacebook: https://bit.ly/3udizp5\r\nInstagram: https://bit.ly/3OSSfdk\r\nLinkedin: https://bit.ly/3UnQ1ne\r\nTwitter: https://bit.ly/3BnWybd\r\n#𝘄𝗶𝘀𝗮𝗱𝗮𝗺𝘂\r\n#𝗜𝗴𝗻𝗶𝘁𝗲𝘁𝗵𝗲𝗦𝗽𝗮𝗿𝗸𝗼𝗳𝗦𝗲𝗿𝘃𝗶𝗰𝗲\r\n#𝗨𝗼𝗖𝗟𝗲𝗼𝘀\r\n#𝗹𝗲𝗼𝘀𝗼𝗳𝘀𝗿𝗶𝗹𝗮𝗻𝗸𝗮𝗺𝗮𝗹𝗱𝗶𝘃𝗲𝘀\r\n#𝗹𝗲𝗼𝘀𝗼𝗳𝗰𝟭 \r\n#𝗟𝗶𝗼𝗻𝘀𝗜𝗻𝘁𝗲𝗿𝗻𝗮𝘁𝗶𝗼𝗻𝗮𝗹\r\n#𝗣𝗿𝗼𝘂𝗱𝗟𝗲𝗼', '0724321234356', 'kd@gmail.com', '/public/Assets/Uploaded-Images/Stories/39_Kadurata Law.jpeg', 'Active'),
(45, 36, 'In need of a kidney', '‼️Happening Today‼️ -දෙනෙත් අග ගිලී යන යුක්තියට පිළියම - &#34;කදුරට ට Law&#34; කදු අතර සැඟව යන අපේම මිනිසුන්ගේ ජීවන ගැටලු නීතිමය ඇසෙන් දකිනු වස්, 📌පෙබරවාරි 17 වන සෙනසුරාදා ( අද ) 🕑 පෙ.ව.11.30 සිට ප.ව. 4.00 දක්වා 📍නුවරඑළිය, ආගරපතන, ශ්‍රී සුධර්ශනාරාමයේදී විසඳමු ව්‍යාපෘතියේ දෙවන අදියර, උදාවූ අද දිනේ සුන්දර තේ වතු අතර නීති ගැටළු විමසනු ලැබේ. 👣🫂⚖ Facebook: https://bit.ly/3udizp5 Instagram: https://bit.ly/3OSSfdk Linkedin: https://bit.ly/3UnQ1ne Twitter: https://bit.ly/3BnWybd #𝘄𝗶𝘀𝗮𝗱𝗮𝗺𝘂 #𝗜𝗴𝗻𝗶', '0754322345432', '2sam@gmail.com', '/public/Assets/Uploaded-Images/Stories/36_In need of a kidney.png', 'Active'),
(46, 36, 'Nisagini 6.0', 'ොළඹ විශ්ව විද්‍යාලයීය ලියෝ සමාජය මගින් සංවිධානය කල සහෘද වියමන අදියර 6කින් යුතු ව්‍යාපෘතියේ දෙවන අදියර ඉතා සාර්ථකව නිමකරන කරන ලදී. එම කටයුතු සාර්ථක කර ගැනීම උදෙසා උපකාර කළ ඔබ සැමට ස්තූතියි.❤ Facebook: https://bit.ly/3udizp5', '0705760021', 'sd@dilsss.com', '/public/Assets/Uploaded-Images/Stories/36_Nisagini 6.0.jpeg', 'Deactive'),
(47, 38, 'Aarogya 6.0', 'ොccළඹ විශ්ව විද්‍යාලයීය ලියෝ සමාජය මගින් සංවිධානය කල සහෘද වියමන අදියර 6කින් යුතු ව්‍යාපෘතියේ දෙවන අදියර ඉතා සාර්ථකව නිමකරන කරන ලදී. එම කටයුතු සාර්ථක කර ගැනීම උදෙසා උපකාර කළ ඔබ සැමට ස්තූතියි.❤ Facebook: https://bit.ly/3udizp5', '078 2111211', 'arogya@gmail.com', '/public/Assets/Uploaded-Images/Stories/38_Aarogya 6.0.jpeg', 'Active'),
(54, 38, 'Project සත්කාර', 'ොළඹ විශ්වවිද්‍යාලයීය ලියෝ සමාජය හා ගොතටුව නව ශතක ලියෝ සිංහ සමාජය ඒකාබද්ධව දියත් කරනු ලබන &#34;සත්කාර&#34; ව්‍යාපෘතිය ළඟදීම......\r\n\r\nහරිතවත් ශ්‍රී ලංකාවක් බිහිකිරීම උදෙසා වූ මෙම වෑයමේ කොටස්කරුවෙකු වීමට ශ්‍රී ලාංකීය පුරවැසි ඔබ සැමට ගෞරවයෙන් ආරාධනා කර සිටිමු 🫶🏻♥️.\r\n\r\nWhatsApp group link\r\nhttps://chat.whatsapp.com/EE6WfEa5cGYCfDNYxnXCum\r\n\r\nFacebook: https://bit.ly/3udizp5\r\nInstagram: https://bit.ly/3OSSfdk\r\nLinkedin: https://bit.ly/3UnQ1ne\r\nTwitter: https://bit.ly/3BnWybd\r\n\r\n#Project සත්කාර\r\n#𝗜𝗴𝗻𝗶𝘁𝗲𝘁𝗵𝗲𝗦𝗽', '0482333132', 'hansi@gmail.com', '/public/Assets/Uploaded-Images/Stories/38_Project සත්කාර.jpeg', 'Active'),
(62, 61, 'Help find pressure Medicine', 'Hello everyone, I&#39;m reaching out to ask for your help. Recently, a family member has been diagnosed with a rare medical condition, and their doctor has recommended a specific medication that could greatly improve their quality of life. Unfortunately, this medication is quite expensive and not covered by insurance.', '0701223212', 'leo@gmail.com', '/public/Assets/Uploaded-Images/Stories/61_Help find pressure Medicine.jpg', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `SuccessStories`
--

CREATE TABLE `SuccessStories` (
  `successstory_id` int(11) NOT NULL,
  `fundraiser_id` int(11) DEFAULT NULL,
  `story` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(38, '200122828187', '/public/Assets/Uploaded-Images/NIC-front/38_.jpg', '/public/Assets/Uploaded-Images/NIC-back/38_.jpg', 'Pending'),
(60, '200172903781', '/public/Assets/Uploaded-Images/NIC-front/60_.jpeg', '/public/Assets/Uploaded-Images/NIC-back/60_.png', 'Pending'),
(64, '197312382910', '/public/Assets/Uploaded-Images/NIC-front/64_.jpg', '/public/Assets/Uploaded-Images/NIC-back/64_.jpg', 'Pending'),
(66, '201100011047', '/public/Assets/Uploaded-Images/NIC-front/66_.png', '/public/Assets/Uploaded-Images/NIC-back/66_.jpg', 'Pending'),
(67, '200119211111', '/public/Assets/Uploaded-Images/NIC-front/67_.jpeg', '/public/Assets/Uploaded-Images/NIC-back/67_.jpeg', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `super_organisation`
--

CREATE TABLE `super_organisation` (
  `user_id` int(11) NOT NULL,
  `reg_date` date NOT NULL,
  `reg_certificate` varchar(255) NOT NULL,
  `certification` varchar(255) NOT NULL,
  `status` enum('Pending','Active','Deactive') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `super_organisation`
--

INSERT INTO `super_organisation` (`user_id`, `reg_date`, `reg_certificate`, `certification`, `status`) VALUES
(61, '2005-06-25', '/public/Assets/Uploaded-Images/Organisation/Registration/61_.png', '/public/Assets/Uploaded-Images/Organisation/Certification/61_.png', 'Active'),
(65, '2002-12-12', '/public/Assets/Uploaded-Images/Organisation/Registration/65_.png', '/public/Assets/Uploaded-Images/Organisation/Certification/65_.png', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `treasurer`
--

CREATE TABLE `treasurer` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `nic_no` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `nic_front` varchar(255) NOT NULL,
  `nic_back` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `treasurer`
--

INSERT INTO `treasurer` (`user_id`, `fullname`, `designation`, `nic_no`, `address`, `email`, `contact`, `nic_front`, `nic_back`) VALUES
(61, 'Konara Mudhiyanselage Sandamali Tharika', 'Vice Treasurer', '199523109876', 'No.431/2, Huffsdrop Street, Colombo 12', 'sandamali@gmail.com', '0782312239', '/public/Assets/Uploaded-Images/Organisation/Treasurer_nic_front/61_.jpg', '/public/Assets/Uploaded-Images/Organisation/Treasurer_nic_back/61_.jpg'),
(65, 'Steve Rockston', 'Vice Treasurer', '200048332132', 'No.12, Balangoda Rd, Oluganthota', 'steve@gmail.com', '0777631659', '/public/Assets/Uploaded-Images/Organisation/Treasurer_nic_front/65_.png', '/public/Assets/Uploaded-Images/Organisation/Treasurer_nic_back/65_.png');

-- --------------------------------------------------------

--
-- Table structure for table `uploaded_documents`
--

CREATE TABLE `uploaded_documents` (
  `id` int(11) NOT NULL,
  `fundraiser_id` int(11) DEFAULT NULL,
  `document_name` varchar(255) DEFAULT NULL,
  `document_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uploaded_documents`
--

INSERT INTO `uploaded_documents` (`id`, `fundraiser_id`, `document_name`, `document_image`) VALUES
(5, 180, 'Approval of Educational Institute', '/public/Assets/Uploaded-Images/Fundraisers/Document/60_Help Me Study Abroad and Reach for the Stars_ApprovalofEducationalInstitute.png'),
(6, 180, 'Consent of Administrative Officer', '/public/Assets/Uploaded-Images/Fundraisers/Document/60_Help Me Study Abroad and Reach for the Stars_ConsentofAdministrativeOfficer.png'),
(7, 181, 'Fund Acceptor\'s Statement', '/public/Assets/Uploaded-Images/Fundraisers/Document/61_Help us to assist them walk_FundAcceptorsStatement.png'),
(8, 181, 'Regional Administrative Officer\'s Certification', '/public/Assets/Uploaded-Images/Fundraisers/Document/61_Help us to assist them walk_RegionalAdministrativeOfficersCertification.png'),
(11, 183, 'Approval of Government certified physical instructor', '/public/Assets/Uploaded-Images/Fundraisers/Document/64_Helping a Mother Fulfill Her Son&#39;s Football Dream_ApprovalofGovernmentcertifiedphysicalinstructor.png'),
(12, 183, 'Consent of Regional Administrative Officer', '/public/Assets/Uploaded-Images/Fundraisers/Document/64_Helping a Mother Fulfill Her Son&#39;s Football Dream_ConsentofRegionalAdministrativeOfficer.png'),
(13, 184, 'Fund Acceptor\'s Statement', '/public/Assets/Uploaded-Images/Fundraisers/Document/65_Empowering Undergraduates: Providing Laptops for Learning_FundAcceptorsStatement.png'),
(14, 184, 'Regional Administrative Officer\'s Certification', '/public/Assets/Uploaded-Images/Fundraisers/Document/65_Empowering Undergraduates: Providing Laptops for Learning_RegionalAdministrativeOfficersCertification.png'),
(15, 185, 'Fund Acceptor\'s Statement', '/public/Assets/Uploaded-Images/Fundraisers/Document/61_Rising Together Leo Organisations Tsunami Relief Fund_FundAcceptorsStatement.png'),
(16, 185, 'Regional Administrative Officer\'s Certification', '/public/Assets/Uploaded-Images/Fundraisers/Document/61_Rising Together Leo Organisations Tsunami Relief Fund_RegionalAdministrativeOfficersCertification.png'),
(17, 185, 'Fund Acceptor\'s Statement', '/public/Assets/Uploaded-Images/Fundraisers/Document/61_Rising Together Leo Organisations Tsunami Relief Fund_FundAcceptorsStatement.png'),
(18, 185, 'Regional Administrative Officer\'s Certification', '/public/Assets/Uploaded-Images/Fundraisers/Document/61_Rising Together Leo Organisations Tsunami Relief Fund_RegionalAdministrativeOfficersCertification.png'),
(19, 187, 'Fund Acceptor\'s Statement', '/public/Assets/Uploaded-Images/Fundraisers/Document/61_Green Earth, Bright Future: Lets Preserve Our Planet!_FundAcceptorsStatement.png'),
(20, 187, 'Regional Administrative Officer\'s Certification', '/public/Assets/Uploaded-Images/Fundraisers/Document/61_Green Earth, Bright Future: Lets Preserve Our Planet!_RegionalAdministrativeOfficersCertification.png'),
(21, 188, 'Fund Acceptor\'s Statement', '/public/Assets/Uploaded-Images/Fundraisers/Document/61_Bridging Generations: The Leo Club of UOCs Mission to Support an Elderly Home_FundAcceptorsStatement.png'),
(22, 188, 'Regional Administrative Officer\'s Certification', '/public/Assets/Uploaded-Images/Fundraisers/Document/61_Bridging Generations: The Leo Club of UOCs Mission to Support an Elderly Home_RegionalAdministrativeOfficersCertification.png'),
(25, 190, 'doc1', '/public/Assets/Uploaded-Images/Fundraisers/Document/61_Help me for my higher studies_doc1.png'),
(26, 190, 'Fund Acceptor\'s Statement', '/public/Assets/Uploaded-Images/Fundraisers/Document/61_Help me for my higher studies_FundAcceptorsStatement.png'),
(27, 190, 'Regional Administrative Officer\'s Certification', '/public/Assets/Uploaded-Images/Fundraisers/Document/61_Help me for my higher studies_RegionalAdministrativeOfficersCertification.png'),
(28, 191, 'doc1', '/public/Assets/Uploaded-Images/Fundraisers/Document/61_p_doc1.jpg'),
(29, 191, 'Fund Acceptor\'s Statement', '/public/Assets/Uploaded-Images/Fundraisers/Document/61_p_FundAcceptorsStatement.png'),
(30, 191, 'Regional Administrative Officer\'s Certification', '/public/Assets/Uploaded-Images/Fundraisers/Document/61_p_RegionalAdministrativeOfficersCertification.png'),
(31, 192, 'Fund Acceptor\'s Statement', '/public/Assets/Uploaded-Images/Fundraisers/Document/61_m_FundAcceptorsStatement.png'),
(32, 192, 'Regional Administrative Officer\'s Certification', '/public/Assets/Uploaded-Images/Fundraisers/Document/61_m_RegionalAdministrativeOfficersCertification.jpg'),
(33, 193, 'doc1', '/public/Assets/Uploaded-Images/Fundraisers/Document/61_sa_doc1.png'),
(34, 193, 'Fund Acceptor\'s Statement', '/public/Assets/Uploaded-Images/Fundraisers/Document/61_sa_FundAcceptorsStatement.jpeg'),
(35, 193, 'Regional Administrative Officer\'s Certification', '/public/Assets/Uploaded-Images/Fundraisers/Document/61_sa_RegionalAdministrativeOfficersCertification.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` char(20) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `signup_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_login_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `type` enum('individual','organisation','admin','superadmin') DEFAULT NULL,
  `user_level` tinyint(1) NOT NULL DEFAULT 1,
  `profile_image` varchar(255) DEFAULT '/public/Assets/images/default-profile.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `Address`, `password`, `signup_time`, `last_login_time`, `type`, `user_level`, `profile_image`) VALUES
(36, 'Manusath Derana', 'manusathderana@derana.co', '212', 'as', '$2y$10$9vDjSAWXvhj5yV6NaPEjo.bZZX0tHDJ48G0q0CspFKRn/A7ruGljK', '2024-02-08 00:03:24', '2024-08-06 23:15:14', 'organisation', 1, '/public/Assets/images/default-org-profile.png'),
(38, 'Hansi Perera', 'hansi@gmail.com', '7098890878', 'hu', '$2y$10$fkKBtTVk9CdigeX45YG.R.nCmRq2Jgc/s/oUG478UuH6pZMB1U.Va', '2024-02-08 00:20:45', '2024-05-11 07:17:19', 'individual', 2, '/public/Assets/Uploaded-Images/Profile-image/38_.jpg'),
(39, 'Youth Association Bambalapitiya', 'ya@bambalapitiya.com', NULL, NULL, '$2y$10$7Koik1rXDA1C2HFJUkNIHOYzr1nmTWVZDo1rDL.hVGFcqgMPNjYWK', '2024-02-08 00:34:54', '2024-04-29 17:30:05', 'organisation', 1, '/public/Assets/images/default-org-profile.png'),
(40, 'admin1', 'admin@1.x', NULL, NULL, '$2y$10$5wVQP/09eVQhHC7Y23wvU.u8QcdZ6SmpMqC/JhKd.Sp8SG0Ir16d6', '2024-02-08 09:00:11', '2024-04-25 17:54:11', 'admin', 1, '/public/Assets/images/default-profile.png'),
(51, 'admin2', 'as@s.kl', NULL, NULL, '$2y$10$kVd8jJt4j3G5PuASF.eJyO5N8lVt29lJbl4LJ085Yzgra1ogHsyE.', '2024-02-28 23:33:13', '0000-00-00 00:00:00', 'admin', 2, '/public/Assets/images/default-profile.png'),
(58, 'bhagya', 'bhagyaliyanage99@gmail.com', NULL, NULL, '$2y$10$tbHChhWhbJKWdUJRVG.XwekkqDqT4KdFWzdA7gO1QtslNfM7gAz4u', '2024-04-11 02:58:39', '0000-00-00 00:00:00', 'individual', 1, '/public/Assets/images/default-profile.png'),
(59, 'Lion Hearts', 'lionhearts20@gmail.com', NULL, NULL, '$2y$10$AcZCgt8ku7xDIOKV.BYm9ummOaFf4AkxoCYXD5qyR6LpKVfDHGu5i', '2024-04-16 14:09:53', '0000-00-00 00:00:00', 'organisation', 1, '/public/Assets/images/default-org-profile.png'),
(60, 'Sanduni Dilhara', 'sdilharabandara@gmail.com', '0705760022', 'No.82, Main Street, Opanayaka', '$2y$10$7jfT/oPYkb8CTAbJCZZ.8uMNTYuR5I.wQ9/ExPLdR/7b.zCz.7VYG', '2024-04-23 12:40:55', '2024-08-06 23:09:24', 'individual', 2, '/public/Assets/Uploaded-Images/Profile-image/60_.jpg'),
(61, 'LEO Club UOC', 'leo@gmail.com', '0701223212', 'University of Colombo', '$2y$10$GMJcg90zZfJ9zv7OdjK8berHymm.ArhlV.HXveu5E/ZE6bJHDSXaa', '2024-04-23 14:16:30', '2024-08-06 23:38:21', 'organisation', 2, '/public/Assets/images/default-org-profile.png'),
(64, 'Maria', 'maria@gmail.com', '0762390453', 'No.21, Kumara Street, Galle', '$2y$10$s6Db9b.pZA70tAbyZNr.N.vxAj3c/Mn.4PDhDBYV5oaV6XyZuj76q', '2024-04-28 09:44:51', '2024-04-29 06:50:53', 'individual', 2, '/public/Assets/Uploaded-Images/Profile-image/64_.jpg'),
(65, 'UCSC', 'ucsc@gmail.com', '0703200323', 'UCSC Building Complex, 35 Reid Ave, Colombo 00700', '$2y$10$U9OmOZM8EBOlEPmxRaB7J.VBun9txomH6hKtuVD7dSh/v13cqbjFe', '2024-04-28 12:56:25', '2024-04-28 13:23:00', 'organisation', 2, '/public/Assets/images/default-org-profile.png'),
(66, 'Dilhara Bandara', 'dilhara@gmail.com', '0777074072', '29, Alfred place 00300', '$2y$10$Qm/dpMyRevHgIxiUIwr03e77I/hemR0.XyKGW5AeahOXLTlxSX3dK', '2024-04-30 07:35:02', '2024-08-06 23:09:09', 'individual', 2, '/public/Assets/images/default-profile.png'),
(67, 'Sanduni', 's@gmail.com', '0777074072', '29, Alfred place 00300', '$2y$10$cMXcuXuI7n5BsbFrhsto4e10.Ho8cuOdZdUGshfUBQJegOJajlcA.', '2024-04-30 09:49:13', '2024-04-30 09:51:47', 'individual', 2, '/public/Assets/images/default-profile.png');

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `insert_user_trigger` AFTER INSERT ON `users` FOR EACH ROW BEGIN
    IF NEW.type = 'individual' THEN
        INSERT INTO users_individual (user_id) VALUES (NEW.id);
    ELSEIF NEW.type = 'organisation' THEN
        INSERT INTO users_organisation (user_id) VALUES (NEW.id);
    END IF;
END
$$
DELIMITER ;

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
(38, '2001-06-09', 'gfg'),
(58, '1999-04-07', 'Kombala Liyanage Hansini Bhagya'),
(60, '2001-08-16', 'Ranathunge Arachillage Sanduni Dilhari Bandara'),
(64, '1974-03-12', 'Maria Puwakpitiya'),
(66, '1993-02-01', 'Ranathunge Arachillage Sanduni Dilhari Bandara'),
(67, '2001-04-13', 'Ranathunge Arachillage Sanduni Dilhari Bandara');

-- --------------------------------------------------------

--
-- Table structure for table `users_organisation`
--

CREATE TABLE `users_organisation` (
  `user_id` int(11) NOT NULL,
  `regno` varchar(255) DEFAULT NULL,
  `about` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_organisation`
--

INSERT INTO `users_organisation` (`user_id`, `regno`, `about`) VALUES
(59, NULL, NULL),
(61, '30029', 'One of the affiliates of Lions Club International, Leo Club of the University of Colombo is an Omega Leo Club in Leo District 306C1. It was established with 22 founding members based on the Faculty of Management and Finance on 25th of June 2015.'),
(65, 'Co/23/222', 'A faculty of University of Colombo dedicated to the upliftment of Computer Studies in Sri Lanka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank_details`
--
ALTER TABLE `bank_details`
  ADD PRIMARY KEY (`bank_id`),
  ADD UNIQUE KEY `account_no` (`account_no`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `donationpayments`
--
ALTER TABLE `donationpayments`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `fundraiser_id` (`fundraiser_id`);

--
-- Indexes for table `executive`
--
ALTER TABLE `executive`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `nic_no` (`nic_no`);

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
-- Indexes for table `fundraiser_images`
--
ALTER TABLE `fundraiser_images`
  ADD PRIMARY KEY (`imgid`),
  ADD KEY `fundraiser_id` (`fundraiser_id`);

--
-- Indexes for table `individual_fundraiser_documents`
--
ALTER TABLE `individual_fundraiser_documents`
  ADD PRIMARY KEY (`category_id`,`document`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`material_id`),
  ADD KEY `fundraiser_id` (`fundraiser_id`);

--
-- Indexes for table `material_location`
--
ALTER TABLE `material_location`
  ADD PRIMARY KEY (`location_id`),
  ADD KEY `fundraiser_id` (`fundraiser_id`);

--
-- Indexes for table `material_map_location`
--
ALTER TABLE `material_map_location`
  ADD PRIMARY KEY (`location_id`),
  ADD KEY `fundraiser_id` (`fundraiser_id`);

--
-- Indexes for table `merchandise`
--
ALTER TABLE `merchandise`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `merch_sales`
--
ALTER TABLE `merch_sales`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `merch_id` (`merch_id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notification_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `organisation_fundraiser_documents`
--
ALTER TABLE `organisation_fundraiser_documents`
  ADD PRIMARY KEY (`category_id`,`document`);

--
-- Indexes for table `parentfundraising`
--
ALTER TABLE `parentfundraising`
  ADD PRIMARY KEY (`fundraiser_id`);

--
-- Indexes for table `secretary`
--
ALTER TABLE `secretary`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `nic_no` (`nic_no`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `SuccessStories`
--
ALTER TABLE `SuccessStories`
  ADD PRIMARY KEY (`successstory_id`),
  ADD KEY `fundraiser_id` (`fundraiser_id`);

--
-- Indexes for table `super_individual`
--
ALTER TABLE `super_individual`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `treasurer`
--
ALTER TABLE `treasurer`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `nic_no` (`nic_no`);

--
-- Indexes for table `uploaded_documents`
--
ALTER TABLE `uploaded_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fundraiser_id` (`fundraiser_id`);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank_details`
--
ALTER TABLE `bank_details`
  MODIFY `bank_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fundraiser`
--
ALTER TABLE `fundraiser`
  MODIFY `fundraiser_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT for table `fundraiser_images`
--
ALTER TABLE `fundraiser_images`
  MODIFY `imgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `material`
--
ALTER TABLE `material`
  MODIFY `material_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `material_location`
--
ALTER TABLE `material_location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `material_map_location`
--
ALTER TABLE `material_map_location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `merchandise`
--
ALTER TABLE `merchandise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `SuccessStories`
--
ALTER TABLE `SuccessStories`
  MODIFY `successstory_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uploaded_documents`
--
ALTER TABLE `uploaded_documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

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
-- Constraints for table `executive`
--
ALTER TABLE `executive`
  ADD CONSTRAINT `executive_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

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
-- Constraints for table `fundraiser_images`
--
ALTER TABLE `fundraiser_images`
  ADD CONSTRAINT `fundraiser_images_ibfk_1` FOREIGN KEY (`fundraiser_id`) REFERENCES `fundraiser` (`fundraiser_id`);

--
-- Constraints for table `individual_fundraiser_documents`
--
ALTER TABLE `individual_fundraiser_documents`
  ADD CONSTRAINT `individual_fundraiser_documents_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `material`
--
ALTER TABLE `material`
  ADD CONSTRAINT `material_ibfk_1` FOREIGN KEY (`fundraiser_id`) REFERENCES `fundraiser` (`fundraiser_id`);

--
-- Constraints for table `material_location`
--
ALTER TABLE `material_location`
  ADD CONSTRAINT `material_location_ibfk_1` FOREIGN KEY (`fundraiser_id`) REFERENCES `fundraiser` (`fundraiser_id`);

--
-- Constraints for table `material_map_location`
--
ALTER TABLE `material_map_location`
  ADD CONSTRAINT `material_map_location_ibfk_1` FOREIGN KEY (`fundraiser_id`) REFERENCES `fundraiser` (`fundraiser_id`);

--
-- Constraints for table `merch_sales`
--
ALTER TABLE `merch_sales`
  ADD CONSTRAINT `merch_sales_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `merch_sales_ibfk_2` FOREIGN KEY (`merch_id`) REFERENCES `merchandise` (`id`);

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `organisation_fundraiser_documents`
--
ALTER TABLE `organisation_fundraiser_documents`
  ADD CONSTRAINT `organisation_fundraiser_documents_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`);

--
-- Constraints for table `parentfundraising`
--
ALTER TABLE `parentfundraising`
  ADD CONSTRAINT `fk_fundraiser_id` FOREIGN KEY (`fundraiser_id`) REFERENCES `fundraiser` (`fundraiser_id`);

--
-- Constraints for table `secretary`
--
ALTER TABLE `secretary`
  ADD CONSTRAINT `secretary_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `SuccessStories`
--
ALTER TABLE `SuccessStories`
  ADD CONSTRAINT `successstories_ibfk_1` FOREIGN KEY (`fundraiser_id`) REFERENCES `fundraiser` (`fundraiser_id`);

--
-- Constraints for table `super_individual`
--
ALTER TABLE `super_individual`
  ADD CONSTRAINT `super_individual_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `treasurer`
--
ALTER TABLE `treasurer`
  ADD CONSTRAINT `treasurer_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `uploaded_documents`
--
ALTER TABLE `uploaded_documents`
  ADD CONSTRAINT `uploaded_documents_ibfk_1` FOREIGN KEY (`fundraiser_id`) REFERENCES `fundraiser` (`fundraiser_id`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
