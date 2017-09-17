-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 17, 2017 at 01:43 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_omms`
--

-- --------------------------------------------------------

--
-- Table structure for table `assets`
--

CREATE TABLE `assets` (
  `id` int(11) NOT NULL,
  `file_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อไฟล์',
  `file_type` varchar(15) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชนิดของไฟล์',
  `full_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ลักษณะเต็มของไฟล์',
  `full_path` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ที่อยู่ไฟล์แบบเต็ม',
  `raw_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อไฟล์',
  `orig_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อไฟล์เดิม',
  `client_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชื่อไฟล์ใหม่',
  `file_ext` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT 'นามสกุลไฟล์',
  `file_size` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ขนาดไฟล์',
  `is_image` int(1) NOT NULL COMMENT 'เป็นรูปภาพ',
  `image_width` varchar(4) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ความกว้าง',
  `image_height` varchar(4) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ความสูง',
  `image_type` varchar(8) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ชนิดรูปภาพ',
  `image_size_str` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ขนาดไฟล์แบบข้อความ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `assets`
--

INSERT INTO `assets` (`id`, `file_name`, `file_type`, `full_type`, `full_path`, `raw_name`, `orig_name`, `client_name`, `file_ext`, `file_size`, `is_image`, `image_width`, `image_height`, `image_type`, `image_size_str`) VALUES
(15, 'a66505aa3fc78c80fb9c4588035de9de.jpg', 'image/jpeg', '', '/Applications/XAMPP/xamppfiles/htdocs/omms/uploads/attachments/a66505aa3fc78c80fb9c4588035de9de.jpg', 'a66505aa3fc78c80fb9c4588035de9de', '21192819_10203732376066715_661543635585608329_n.jpg', '21192819_10203732376066715_661543635585608329_n.jpg', '.jpg', '27.85', 1, '540', '303', 'jpeg', 'width=\"540\" height=\"303\"'),
(16, 'baf116928715097273042839217347f8.jpg', 'image/jpeg', '', '/Applications/XAMPP/xamppfiles/htdocs/omms/uploads/attachments/baf116928715097273042839217347f8.jpg', 'baf116928715097273042839217347f8', '21192819_10203732376066715_661543635585608329_n.jpg', '21192819_10203732376066715_661543635585608329_n.jpg', '.jpg', '27.85', 1, '540', '303', 'jpeg', 'width=\"540\" height=\"303\"'),
(17, '2c50a7c4746a250a947d7aa8cd74bcf6.jpg', 'image/jpeg', '', '/Applications/XAMPP/xamppfiles/htdocs/omms/uploads/attachments/2c50a7c4746a250a947d7aa8cd74bcf6.jpg', '2c50a7c4746a250a947d7aa8cd74bcf6', '21192819_10203732376066715_661543635585608329_n.jpg', '21192819_10203732376066715_661543635585608329_n.jpg', '.jpg', '27.85', 1, '540', '303', 'jpeg', 'width=\"540\" height=\"303\"'),
(18, '0c9911ffa0abab7820fa56d656d1a161.jpg', 'image/jpeg', '', '/Applications/XAMPP/xamppfiles/htdocs/omms/uploads/attachments/0c9911ffa0abab7820fa56d656d1a161.jpg', '0c9911ffa0abab7820fa56d656d1a161', '21192819_10203732376066715_661543635585608329_n.jpg', '21192819_10203732376066715_661543635585608329_n.jpg', '.jpg', '27.85', 1, '540', '303', 'jpeg', 'width=\"540\" height=\"303\"'),
(19, '08b481139297f005b98ed75663cbe83d.jpg', 'image/jpeg', '', '/Applications/XAMPP/xamppfiles/htdocs/omms/uploads/attachments/08b481139297f005b98ed75663cbe83d.jpg', '08b481139297f005b98ed75663cbe83d', '21192819_10203732376066715_661543635585608329_n.jpg', '21192819_10203732376066715_661543635585608329_n.jpg', '.jpg', '27.85', 1, '540', '303', 'jpeg', 'width=\"540\" height=\"303\"'),
(20, '84b2cb7848d60edc6b1aa4b4f113d295.jpg', 'image/jpeg', '', '/Applications/XAMPP/xamppfiles/htdocs/omms/uploads/attachments/84b2cb7848d60edc6b1aa4b4f113d295.jpg', '84b2cb7848d60edc6b1aa4b4f113d295', '21192819_10203732376066715_661543635585608329_n.jpg', '21192819_10203732376066715_661543635585608329_n.jpg', '.jpg', '27.85', 1, '540', '303', 'jpeg', 'width=\"540\" height=\"303\"'),
(21, 'def45fafa5e5df0ecd50e48f37e00db8.jpg', 'image/jpeg', '', '/Applications/XAMPP/xamppfiles/htdocs/omms/uploads/attachments/def45fafa5e5df0ecd50e48f37e00db8.jpg', 'def45fafa5e5df0ecd50e48f37e00db8', '21192819_10203732376066715_661543635585608329_n.jpg', '21192819_10203732376066715_661543635585608329_n.jpg', '.jpg', '27.85', 1, '540', '303', 'jpeg', 'width=\"540\" height=\"303\"');

-- --------------------------------------------------------

--
-- Table structure for table `assets_by`
--

CREATE TABLE `assets_by` (
  `id` int(11) NOT NULL,
  `asset_id` int(11) NOT NULL COMMENT 'ไอดีไฟล์',
  `user_id` int(11) NOT NULL COMMENT 'ไอดีผู้อัพโหลด',
  `upload_date` varchar(11) COLLATE utf8_unicode_ci NOT NULL COMMENT 'วันที่อัพโหลด',
  `is_avatar` int(1) NOT NULL COMMENT 'เป็นรูปโปรไฟล์'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `assets_by`
--

INSERT INTO `assets_by` (`id`, `asset_id`, `user_id`, `upload_date`, `is_avatar`) VALUES
(11, 11, 2, '1504547490', 0),
(12, 12, 2, '1504547490', 0),
(13, 13, 2, '1504547490', 0),
(14, 14, 2, '1504547491', 0);

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` int(6) NOT NULL,
  `name` varchar(100) NOT NULL COMMENT 'ชื่ออุปกรณ์',
  `type` varchar(100) NOT NULL COMMENT 'ชนิดอุปกรณ์',
  `category` varchar(100) NOT NULL COMMENT 'ประเภทอุปกรณ์',
  `description` text NOT NULL COMMENT 'ข้อมูลอุปกรณ์',
  `attributes` text NOT NULL COMMENT 'ข้อมูลจำเพาะ',
  `attachments` text NOT NULL COMMENT 'เอกสารที่เกี่ยวข้อง',
  `date_create` varchar(11) NOT NULL COMMENT 'วันที่บันทึก',
  `date_update` varchar(11) NOT NULL COMMENT 'วันที่อัพเดท',
  `status` varchar(50) NOT NULL COMMENT 'สถานะอุปกรณ์'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `devices`
--

INSERT INTO `devices` (`id`, `name`, `type`, `category`, `description`, `attributes`, `attachments`, `date_create`, `date_update`, `status`) VALUES
(1, 'ข้อมูลทดสอบ1', '', '', '<p></p><div><h2>What is Lorem Ipsum?</h2><p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div><div><h2>Why do we use it?</h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p></div><br><div><h2>Where does it come from?</h2><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p></div><div><h2>Where can I get some?</h2><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p></div><p></p>', '', 'a:1:{i:0;s:2:\"15\";}', '1505582423', '1505584030', '');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL COMMENT 'ชื่อกลุ่ม',
  `description` varchar(100) NOT NULL COMMENT 'คำอธิบายกลุ่ม'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'ผู้ดูแลระบบ'),
(2, 'members', 'สมาชิกทั่วไป'),
(3, 'technician', 'ช่างเทคนิคซ่อมบำรุง');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL COMMENT 'ไอพีแอดเดรส',
  `login` varchar(100) NOT NULL COMMENT 'รหัสล็อกอิน',
  `time` int(11) UNSIGNED DEFAULT NULL COMMENT 'จำนวนครั้ง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(6) NOT NULL,
  `admin_id` int(6) NOT NULL COMMENT 'ไอดีแอดมินผู้รับเรื่อง',
  `fullname` varchar(200) NOT NULL COMMENT 'ชื่อผู้บันทึก',
  `ip_address` varchar(50) NOT NULL COMMENT 'ไอพีแอดเดรสผู้แจ้ง',
  `date_create` varchar(11) NOT NULL COMMENT 'วันที่บันทึก',
  `date_update` varchar(11) NOT NULL COMMENT 'วันที่อัพเดท',
  `title` varchar(100) NOT NULL COMMENT 'หัวข้อเรื่อง',
  `detail` text NOT NULL COMMENT 'เนื้อหา',
  `device_id` int(6) NOT NULL COMMENT 'ไอดีอุปกรณ์',
  `status` varchar(50) NOT NULL DEFAULT 'รอดำเนินการ' COMMENT 'สถานะการรับเรื่อง'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `admin_id`, `fullname`, `ip_address`, `date_create`, `date_update`, `title`, `detail`, `device_id`, `status`) VALUES
(1, 4, '', '::1', '15324651244', '1505370119', 'ทดสอบหัวข้อเรื่องที่1', '<p></p><div><h2>What is Lorem Ipsum?</h2><p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div><div><h2>Why do we use it?</h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p></div><br><div><h2>Where does it come from?</h2><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p></div><div><h2>Where can I get some?</h2><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p></div><br><p></p>', 0, 'รอดำเนินการ');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL COMMENT 'ไอพีแอดเดรส',
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT 'เวลาล็อกอิน',
  `data` blob NOT NULL COMMENT 'รหัสล็อกอิน'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('15m8nmu9rluig9dapvsm1kgnj0p7d0h0', '::1', 1505578932, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530353537383638333b6964656e746974797c733a31353a2261646d696e40656d61696c2e636f6d223b656d61696c7c733a31353a2261646d696e40656d61696c2e636f6d223b757365725f69647c733a313a2234223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353035343437383634223b6c6173745f636865636b7c693a313530353533343330393b),
('2tmjhk36pipr4ps9i0ej56946kdn4kcq', '::1', 1505583402, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530353538333131383b6964656e746974797c733a31353a2261646d696e40656d61696c2e636f6d223b656d61696c7c733a31353a2261646d696e40656d61696c2e636f6d223b757365725f69647c733a313a2234223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353035353737363234223b6c6173745f636865636b7c693a313530353538303832313b7761726e696e677c733a303a22223b5f5f63695f766172737c613a313a7b733a373a227761726e696e67223b733a333a226e6577223b7d),
('30a7ovibmla5jbbhm91sj9tldpssq72c', '::1', 1505583100, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530353538323831353b6964656e746974797c733a31353a2261646d696e40656d61696c2e636f6d223b656d61696c7c733a31353a2261646d696e40656d61696c2e636f6d223b757365725f69647c733a313a2234223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353035353737363234223b6c6173745f636865636b7c693a313530353538303832313b7761726e696e677c733a303a22223b5f5f63695f766172737c613a313a7b733a373a227761726e696e67223b733a333a226e6577223b7d),
('35a9ts82jncdtapkk6mrucil4nrsreft', '::1', 1505584040, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530353538333736343b6964656e746974797c733a31353a2261646d696e40656d61696c2e636f6d223b656d61696c7c733a31353a2261646d696e40656d61696c2e636f6d223b757365725f69647c733a313a2234223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353035353737363234223b6c6173745f636865636b7c693a313530353538303832313b7761726e696e677c733a303a22223b5f5f63695f766172737c613a313a7b733a373a227761726e696e67223b733a333a226f6c64223b7d),
('4phf1n5khoacha1aq08h6vb1donug1oa', '::1', 1505586624, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530353538363631313b6964656e746974797c733a31353a2261646d696e40656d61696c2e636f6d223b656d61696c7c733a31353a2261646d696e40656d61696c2e636f6d223b757365725f69647c733a313a2234223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353035353737363234223b6c6173745f636865636b7c693a313530353538303832313b),
('5183inoiqvtivb94a9m1nfti639mcrsi', '::1', 1505625333, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530353632353133353b6964656e746974797c733a31353a2261646d696e40656d61696c2e636f6d223b656d61696c7c733a31353a2261646d696e40656d61696c2e636f6d223b757365725f69647c733a313a2234223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353035353830383231223b6c6173745f636865636b7c693a313530353632353134333b),
('62n8kqjpe0hnfvpp1fhns1tekguch67t', '::1', 1505648515, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530353634383430313b),
('7prampomj5a8h73s57g9vtj7jidbj68k', '::1', 1505576905, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530353537363732313b6964656e746974797c733a31353a2261646d696e40656d61696c2e636f6d223b656d61696c7c733a31353a2261646d696e40656d61696c2e636f6d223b757365725f69647c733a313a2234223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353035343437383634223b6c6173745f636865636b7c693a313530353533343330393b),
('8ff7pupec9u2nbq3bai41h17a4b01908', '::1', 1505577636, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530353537373631353b6964656e746974797c733a31353a2261646d696e40656d61696c2e636f6d223b656d61696c7c733a31353a2261646d696e40656d61696c2e636f6d223b757365725f69647c733a313a2234223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353035353334333039223b6c6173745f636865636b7c693a313530353537373632343b),
('93loembqsq1ip7dvppcek99rrfe20auj', '::1', 1505626319, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530353632363131323b6964656e746974797c733a31353a2261646d696e40656d61696c2e636f6d223b656d61696c7c733a31353a2261646d696e40656d61696c2e636f6d223b757365725f69647c733a313a2234223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353035353830383231223b6c6173745f636865636b7c693a313530353632353134333b),
('9aehmcba1491e32tjftcvri2iuq5lqal', '::1', 1505587251, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530353538373136313b6964656e746974797c733a31353a2261646d696e40656d61696c2e636f6d223b656d61696c7c733a31353a2261646d696e40656d61696c2e636f6d223b757365725f69647c733a313a2234223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353035353737363234223b6c6173745f636865636b7c693a313530353538303832313b),
('9gtsfnn6fik724k7ki0u2uid4av7h7ph', '::1', 1505578569, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530353537383334313b6964656e746974797c733a31353a2261646d696e40656d61696c2e636f6d223b656d61696c7c733a31353a2261646d696e40656d61696c2e636f6d223b757365725f69647c733a313a2234223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353035343437383634223b6c6173745f636865636b7c693a313530353533343330393b),
('d5qadq8dv61gdj889bmcgu2i1c240bg8', '::1', 1505577944, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530353537373730313b6964656e746974797c733a31353a2261646d696e40656d61696c2e636f6d223b656d61696c7c733a31353a2261646d696e40656d61696c2e636f6d223b757365725f69647c733a313a2234223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353035343437383634223b6c6173745f636865636b7c693a313530353533343330393b),
('gajl35nm7bohfuvdf6palso5p2dfpd8s', '::1', 1505581293, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530353538313233353b6964656e746974797c733a31353a2261646d696e40656d61696c2e636f6d223b656d61696c7c733a31353a2261646d696e40656d61696c2e636f6d223b757365725f69647c733a313a2234223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353035353737363234223b6c6173745f636865636b7c693a313530353538303832313b7761726e696e677c733a303a22223b5f5f63695f766172737c613a313a7b733a373a227761726e696e67223b733a333a226e6577223b7d),
('i93ks6tvq91sc5e5lidpea3jtt51c4gg', '::1', 1505626730, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530353632363434393b6964656e746974797c733a31353a2261646d696e40656d61696c2e636f6d223b656d61696c7c733a31353a2261646d696e40656d61696c2e636f6d223b757365725f69647c733a313a2234223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353035353830383231223b6c6173745f636865636b7c693a313530353632353134333b7761726e696e677c733a303a22223b5f5f63695f766172737c613a313a7b733a373a227761726e696e67223b733a333a226f6c64223b7d),
('ivfqvhmao4d28spo4cu6ge82fvhmucmk', '::1', 1505582007, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530353538313736393b6964656e746974797c733a31353a2261646d696e40656d61696c2e636f6d223b656d61696c7c733a31353a2261646d696e40656d61696c2e636f6d223b757365725f69647c733a313a2234223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353035353737363234223b6c6173745f636865636b7c693a313530353538303832313b7761726e696e677c733a303a22223b5f5f63695f766172737c613a313a7b733a373a227761726e696e67223b733a333a226f6c64223b7d),
('jum025a2upmkk70lt3oaoqscb5a90pig', '::1', 1505626093, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530353632353739333b6964656e746974797c733a31353a2261646d696e40656d61696c2e636f6d223b656d61696c7c733a31353a2261646d696e40656d61696c2e636f6d223b757365725f69647c733a313a2234223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353035353830383231223b6c6173745f636865636b7c693a313530353632353134333b),
('k3b7454k77uhtgag7vrffq38qig2q4d0', '::1', 1505625741, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530353632353438323b6964656e746974797c733a31353a2261646d696e40656d61696c2e636f6d223b656d61696c7c733a31353a2261646d696e40656d61696c2e636f6d223b757365725f69647c733a313a2234223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353035353830383231223b6c6173745f636865636b7c693a313530353632353134333b),
('ljejq6ccemeb12ofbarobrh0o1bi63ef', '::1', 1505648334, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530353634383034383b6964656e746974797c733a31353a2261646d696e40656d61696c2e636f6d223b656d61696c7c733a31353a2261646d696e40656d61696c2e636f6d223b757365725f69647c733a313a2234223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353035363235313433223b6c6173745f636865636b7c693a313530353634383238393b7761726e696e677c733a303a22223b5f5f63695f766172737c613a313a7b733a373a227761726e696e67223b733a333a226e6577223b7d),
('lk2jidngdcqsofo6qtf16efafj0sf3vh', '::1', 1505578309, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530353537383033353b6964656e746974797c733a31353a2261646d696e40656d61696c2e636f6d223b656d61696c7c733a31353a2261646d696e40656d61696c2e636f6d223b757365725f69647c733a313a2234223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353035343437383634223b6c6173745f636865636b7c693a313530353533343330393b),
('lshiuckf5t0pidba644apok2bbh5dmiq', '::1', 1505586517, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530353538363234303b6964656e746974797c733a31353a2261646d696e40656d61696c2e636f6d223b656d61696c7c733a31353a2261646d696e40656d61696c2e636f6d223b757365725f69647c733a313a2234223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353035353737363234223b6c6173745f636865636b7c693a313530353538303832313b7761726e696e677c733a303a22223b5f5f63695f766172737c613a313a7b733a373a227761726e696e67223b733a333a226e6577223b7d),
('nn51qur4nb7khuapm5s5tp57teb8s34d', '::1', 1505588292, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530353538383239323b),
('ock6q8ovq66vj9scjvuqussbkenicjk1', '::1', 1505587775, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530353538373634363b6964656e746974797c733a31353a2261646d696e40656d61696c2e636f6d223b656d61696c7c733a31353a2261646d696e40656d61696c2e636f6d223b757365725f69647c733a313a2234223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353035353737363234223b6c6173745f636865636b7c693a313530353538303832313b),
('odck793tppvp9cuqsk9dbd7m0nhf58dp', '::1', 1505585544, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530353538353238333b6964656e746974797c733a31353a2261646d696e40656d61696c2e636f6d223b656d61696c7c733a31353a2261646d696e40656d61696c2e636f6d223b757365725f69647c733a313a2234223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353035353737363234223b6c6173745f636865636b7c693a313530353538303832313b),
('ou6rptlpslordgf85oh3gkspgmsff8i7', '::1', 1505579175, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530353537393039313b6964656e746974797c733a31353a2261646d696e40656d61696c2e636f6d223b656d61696c7c733a31353a2261646d696e40656d61696c2e636f6d223b757365725f69647c733a313a2234223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353035343437383634223b6c6173745f636865636b7c693a313530353533343330393b),
('p8er82ba3c0fqe72jc322kg0hf7o8o31', '::1', 1505583682, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530353538333432303b6964656e746974797c733a31353a2261646d696e40656d61696c2e636f6d223b656d61696c7c733a31353a2261646d696e40656d61696c2e636f6d223b757365725f69647c733a313a2234223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353035353737363234223b6c6173745f636865636b7c693a313530353538303832313b7761726e696e677c733a303a22223b5f5f63695f766172737c613a313a7b733a373a227761726e696e67223b733a333a226e6577223b7d),
('q03356s9ks271um1siuqt8fpcbmkesj5', '::1', 1505582619, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530353538323333393b6964656e746974797c733a31353a2261646d696e40656d61696c2e636f6d223b656d61696c7c733a31353a2261646d696e40656d61696c2e636f6d223b757365725f69647c733a313a2234223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353035353737363234223b6c6173745f636865636b7c693a313530353538303832313b),
('rmaceq8msv51amu4819b2ii13koe7p10', '::1', 1505584678, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530353538343530333b6964656e746974797c733a31353a2261646d696e40656d61696c2e636f6d223b656d61696c7c733a31353a2261646d696e40656d61696c2e636f6d223b757365725f69647c733a313a2234223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353035353737363234223b6c6173745f636865636b7c693a313530353538303832313b),
('s72u8don1kqs0pu6ciidoorhenolklji', '::1', 1505577568, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530353537373238333b6964656e746974797c733a31353a2261646d696e40656d61696c2e636f6d223b656d61696c7c733a31353a2261646d696e40656d61696c2e636f6d223b757365725f69647c733a313a2234223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353035343437383634223b6c6173745f636865636b7c693a313530353533343330393b),
('snopvbg5qv3mgfaajh6bbve66ibkdn9l', '::1', 1505580137, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530353537393933343b6964656e746974797c733a31353a2261646d696e40656d61696c2e636f6d223b656d61696c7c733a31353a2261646d696e40656d61696c2e636f6d223b757365725f69647c733a313a2234223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353035343437383634223b6c6173745f636865636b7c693a313530353533343330393b),
('v2agtq5bo2nk7c4il1ltplvkihmj9sp7', '::1', 1505580825, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530353538303533363b6964656e746974797c733a31353a2261646d696e40656d61696c2e636f6d223b656d61696c7c733a31353a2261646d696e40656d61696c2e636f6d223b757365725f69647c733a313a2234223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353035353737363234223b6c6173745f636865636b7c693a313530353538303832313b),
('vfnnteue3p5v3sm3f9shmh89eilk7uie', '::1', 1505579783, 0x5f5f63695f6c6173745f726567656e65726174657c693a313530353537393438393b6964656e746974797c733a31353a2261646d696e40656d61696c2e636f6d223b656d61696c7c733a31353a2261646d696e40656d61696c2e636f6d223b757365725f69647c733a313a2234223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231353035343437383634223b6c6173745f636865636b7c693a313530353533343330393b7761726e696e677c733a303a22223b5f5f63695f766172737c613a313a7b733a373a227761726e696e67223b733a333a226e6577223b7d);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL COMMENT 'ไอพีแอดเดรส',
  `username` varchar(100) DEFAULT NULL COMMENT 'ชื่อล็อกอิน',
  `password` varchar(255) NOT NULL COMMENT 'รหัสผ่าน',
  `title` varchar(20) NOT NULL COMMENT 'คำนำหน้า',
  `firstname` varchar(10) NOT NULL COMMENT 'ชื่อ',
  `lastname` varchar(100) NOT NULL COMMENT 'นามสกุล',
  `phone` varchar(10) NOT NULL COMMENT 'โทรศัพท์',
  `salt` varchar(255) DEFAULT NULL COMMENT 'คีย์เวิร์ดรหัสผ่าน',
  `email` varchar(100) NOT NULL COMMENT 'อีเมล์',
  `activation_code` varchar(40) DEFAULT NULL COMMENT 'รหัสยืนยันการลงทะเบียน',
  `forgotten_password_code` varchar(40) DEFAULT NULL COMMENT 'รหัสยืนยันการลืมรหัสผ่าน',
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL COMMENT 'เวลายืนยันการลืมรหัสผ่าน',
  `remember_code` varchar(40) DEFAULT NULL COMMENT 'การจดจำ',
  `created_on` int(11) UNSIGNED NOT NULL COMMENT 'วันที่สมัคร',
  `last_login` int(11) UNSIGNED DEFAULT NULL COMMENT 'วันที่ล็อกอิน',
  `active` tinyint(1) UNSIGNED DEFAULT NULL COMMENT 'สถานะ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `title`, `firstname`, `lastname`, `phone`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`) VALUES
(2, '::1', 'note@email.com', '$2y$08$HE.moGh00E8Y1ETaGqN.2eUyCoLYOp/ls0iFwiSsG.i9gvw.LWuJa', '', '', '', '', NULL, 'note@email.com', 'a7c4e2e49930d60b771f865521130c5037db4ddd', NULL, NULL, NULL, 1503303079, 1505024365, 0),
(3, '::1', 'pop@email.com', '$2y$08$j12Y8j/o3PFiiheN.wyO9O4SSMEUQytEk0sucl4gBqRXphof8XxnW', '', '', '', '', NULL, 'pop@email.com', '29c8421e09bf031432aa43a2856b51a8ea362bae', NULL, NULL, NULL, 1503303097, 1504586108, 0),
(4, '::1', 'admin@email.com', '$2y$08$RI5YYa/PZj7F52e119k8fu/QzxCqET/IYf6z9mduWx/I1MIktFXS.', 'นาย', 'Admin', 'Istrator', '0000000000', NULL, 'admin@email.com', NULL, NULL, NULL, NULL, 1503325808, 1505648289, 1),
(5, '::1', 'test@email.com', '$2y$08$YUgx7tSTBILHj.FEdS3EeOlr5PFk6XwjeoeB4QFJRcBA1J.Xf5C6O', 'นาย', '', '', '', NULL, 'test@email.com', NULL, NULL, NULL, NULL, 1505060447, 1505060454, 1),
(6, '::1', 'test2@email.com', '$2y$08$aApJyq5XlFfKlFHMn6XRXuGGH8vIwDgZpMT59OymxPZ/ujDQCF7Oa', 'นาย', 'test2', 'test2', '', NULL, 'test2@email.com', NULL, NULL, NULL, NULL, 1505403605, 1505403616, 1),
(7, '::1', 'test3@email.com', '$2y$08$i7E72RxcWGnoP46IfeMUzO1AFVC5TwSYtWoL5qMzJQ3EsmSrOw.xm', 'นางสาว', 'test3', 'test3', '', NULL, 'test3@email.com', NULL, NULL, NULL, NULL, 1505544462, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL COMMENT 'ไอดีผู้ใช้',
  `group_id` mediumint(8) UNSIGNED NOT NULL COMMENT 'ไอดีกลุ่ม'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(3, 2, 2),
(4, 3, 2),
(18, 4, 1),
(19, 4, 2),
(20, 4, 3),
(22, 5, 3),
(21, 6, 3),
(15, 7, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assets`
--
ALTER TABLE `assets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `assets_by`
--
ALTER TABLE `assets_by`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`,`ip_address`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assets`
--
ALTER TABLE `assets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `assets_by`
--
ALTER TABLE `assets_by`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
