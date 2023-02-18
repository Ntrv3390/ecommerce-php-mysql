-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 18, 2023 at 04:32 AM
-- Server version: 10.5.15-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u893319158_swipe_right_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `about_title` varchar(255) NOT NULL,
  `about_description` text NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `about_title`, `about_description`, `meta_keyword`, `meta_description`) VALUES
(0, 'About Us | Sneaker Wipes - Swipe Right', '<p style=\"text-align:center\">As Stan Lee once said, <em><strong>&quot;With great sneakers comes great responsibilities to keep the drip clean&quot;</strong></em>.</p>\r\n\r\n<p style=\"text-align:center\">Founder by sneaker fanatics, <em><strong>Swipe Right</strong></em> aims at keeping your sneakers as good as new - just like you unboxed them on day 1!</p>\r\n\r\n<p style=\"text-align:center\">With <em><strong>Swipe Right</strong></em>, we bring to the sneaker community a sneaker cleaning product which is protable, accessible, and provides a hassle-free cleaning experience.</p>\r\n\r\n<p style=\"text-align:center\">The easiest way to clean your sneakers -<u><strong><em> Swipe It Right</em></strong></u></p>', '', '<p>kjknadfjn iasjdkias</p>');

-- --------------------------------------------------------

--
-- Table structure for table `accordian`
--

CREATE TABLE `accordian` (
  `img1` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img2` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img3` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img4` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accordian`
--

INSERT INTO `accordian` (`img1`, `img2`, `img3`, `img4`) VALUES
('Five-Social-Media-Post-Ideas-BLOG-800x321.png', 'Fortis-Healthcare_11zon.jpg', 'Marketing-Strategies-Infographic.jpg', '17-825x510.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `bg_banner` varchar(1000) NOT NULL,
  `title` varchar(100) NOT NULL,
  `h_title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `h_img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`bg_banner`, `title`, `h_title`, `description`, `h_img`) VALUES
('1ac2640e7b66d0c3158fd1e2e5c04ff9.jpg', 'Get you sneakers dirt free with', 'Swipe Right', '<p>register now and get yours delivered at home</p>', 'ps__var_1_The_sneaker_1600x-removebg-preview.png');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `alias` varchar(250) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_category` int(11) NOT NULL,
  `blog_image` varchar(1000) NOT NULL,
  `blog_description` text NOT NULL,
  `author` varchar(100) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `alias`, `blog_title`, `blog_category`, `blog_image`, `blog_description`, `author`, `added_on`, `status`, `meta_keyword`, `meta_description`) VALUES
(22, 'hello', 'jabdj', 2, 'adkjcjka', 'ksndcnad', 'ndcsn', '2022-09-03 05:08:15', 1, 'dacj', 'najdnc'),
(23, 'hii', 'jabdj zzz', 1, '364048475_70056-thank you slide-16-9.png', '<p>ksndcnad zzz</p>', 'ndcsn zzz', '2022-09-03 05:08:45', 1, '<p>dacj&nbsp; zzz</p>', '<p>najdnc zzz</p>');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(11) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `categories`, `status`) VALUES
(1, 'hello', 1),
(2, 'world', 1);

-- --------------------------------------------------------

--
-- Table structure for table `coupon_master`
--

CREATE TABLE `coupon_master` (
  `id` int(11) NOT NULL,
  `coupon_code` varchar(50) NOT NULL,
  `coupon_value` int(11) NOT NULL,
  `coupon_type` varchar(10) NOT NULL,
  `cart_min_value` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coupon_master`
--

INSERT INTO `coupon_master` (`id`, `coupon_code`, `coupon_value`, `coupon_type`, `cart_min_value`, `status`) VALUES
(1, 'FIRST50', 50, 'Rupees', 100, 1),
(11, 'First40', 40, 'Percentage', 100, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cta`
--

CREATE TABLE `cta` (
  `title_black` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_blue` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cta_img` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cta_para` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cta`
--

INSERT INTO `cta` (`title_black`, `title_blue`, `cta_img`, `cta_para`) VALUES
('The Offer Is Ending Soon!', 'Hurry Up - Buy Now', 'photo1660568483-removebg-preview (1).png', '<p>The offer is ending soon, to get maximum benfit use code first50 at checkout&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `email_subscribe`
--

CREATE TABLE `email_subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `email_subscribe`
--

INSERT INTO `email_subscribe` (`id`, `email`, `added_on`, `status`) VALUES
(36, 'mohammedputhawala793@gmail.com', '2022-09-03 08:25:54', 1),
(39, 'soundsrainy0@gmail.com', '2022-09-10 12:37:22', 1),
(40, 'mohammed', '2022-11-26 02:00:43', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE `feature` (
  `f_id` int(11) NOT NULL,
  `f_title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_img` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offer_timer`
--

CREATE TABLE `offer_timer` (
  `title_black` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_blue` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `offer_para` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `day_end` int(11) NOT NULL,
  `month_end` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offer_timer`
--

INSERT INTO `offer_timer` (`title_black`, `title_blue`, `offer_para`, `day_end`, `month_end`) VALUES
('Hurry Up!', 'Offer Is Ending', '<p>Use the code &quot;First50&quot; to get discount at checkout&nbsp;</p>', 10, 11);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `pincode` int(11) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `order_status` int(255) NOT NULL,
  `coupon_id` int(11) NOT NULL,
  `coupon_value` int(50) NOT NULL,
  `coupon_code` varchar(50) NOT NULL,
  `added_on` datetime NOT NULL,
  `total_price` float NOT NULL,
  `user_id` int(11) NOT NULL,
  `txnid` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `first_name`, `last_name`, `state`, `city`, `pincode`, `address`, `email`, `phone`, `payment_type`, `payment_status`, `order_status`, `coupon_id`, `coupon_value`, `coupon_code`, `added_on`, `total_price`, `user_id`, `txnid`) VALUES
(156, 'me', 'me', 'me', 'me', 392020, 'me', 'me@me.me', 2232323, 'Paytm', 'success', 2, 0, 0, '', '2022-09-03 05:45:46', 23233, 3223, 'qdqwd'),
(157, 'mm', 'mm', 'mm', 'mm', 392020, 'me', 'me@me.me', 2232323, 'Paytm', 'success', 1, 0, 0, '', '2022-09-03 05:45:46', 23233, 3223, 'qdqwd'),
(158, 'ye', 'ye', 'ye', 'ye', 2, 'ye', 'ye@ye.ye', 2, 'Paytm', 'success', 3, 0, 0, '', '2022-09-03 09:15:03', 3824, 1231, 'csvsb c'),
(159, 'Mohammed', 'Puthawala', 'Gujarat', 'Ahmedabad', 380055, 'Al Burooj', 'mohammedputhawala793@gmail.com', 2147483647, 'Paytm', 'success', 1, 1, 50, 'first50', '2022-09-03 09:28:57', 4441, 43758, 'ebdf17f6a2e1fb9e05aa'),
(160, 'aa', 'a', 'a', 'a', 2, 'm', 'mohammedputhawala793@gmail.com', 2, 'Paytm', 'success', 1, 1, 50, 'first50', '2022-09-05 11:20:45', 4940, 95121, '1abe224c594b1bcc44ab'),
(161, 'A', 'A', 'A', 'A', 1, 'A', 'm@m.com', 989989565, 'Paytm', 'success', 1, 1, 50, 'First50', '2022-09-06 09:34:02', 449, 50139, 'fed733656a7ab0e1d1d4'),
(162, 'a', 'a', 'a', 'a', 2, 'a', 'mohammedputhawala793@gmail.com', 2, 'Paytm', 'success', 1, 1, 50, 'first50', '2022-09-07 08:23:11', 3443, 51992, '06b306fd53ef554f4c31'),
(163, 'Y eh order', 'jad', 'djeaDJ', 'JSBJCSB', 3874837, 'jefcjb', 'mohammedputhawala793@gmail.com', 383847383, 'Paytm', 'success', 1, 1, 50, 'first50', '2022-09-07 08:27:32', 4940, 83697, 'ed6d6a9b520ea18b14d7'),
(164, 'a', 'a', 'a', 'a', 2, 'a', 'mohammedputhawala793@gmail.com', 2, 'Paytm', 'success', 1, 0, 0, '', '2022-09-07 08:29:47', 2994, 72715, '3d70bae51db88b4490d1'),
(165, 'a', 'a', 'a', 'a', 2, 'a', 'mohammedputhawala793@gmail.com', 2, 'Paytm', 'pending', 1, 0, 0, '', '2022-09-07 08:32:24', 1996, 90471, 'f38b06ee7e4d0f153b07'),
(166, 'a', 'a', 'a', 'a', 2, 'a', 'mohammedputhawala793@gmail.com', 2, 'Paytm', 'pending', 1, 0, 0, '', '2022-09-07 08:33:45', 499, 44905, 'c0aa17276361730bfbab'),
(167, 'a', 'a', 'a', 'a', 2, 'a', 'mohammedputhawala793@gmail.com', 2, 'Paytm', 'success', 1, 0, 0, '', '2022-09-07 08:34:49', 1497, 98612, 'b1383c78bcc87369718c'),
(168, 'a', 'a', 'a', 'a', 2, 'a', 'mohammedputhawala793@gmail.com', 2, 'Paytm', 'success', 1, 0, 0, '', '2022-09-07 08:35:54', 1996, 60915, '5b3d22f6e821343cce98'),
(169, 's', 's', 's', 's', 2, 'a', 'mohammedputhawala793@gmail.com', 2, 'Paytm', 'success', 1, 0, 0, '', '2022-09-07 08:37:05', 4990, 93177, '4f26c1f5022e37aa82c5'),
(170, 'Why', 'is', 'this', 'good', 2839218, 'kdn', 'mohammedputhawala793@gmail.com', 222, 'Paytm', 'success', 1, 1, 50, 'first50', '2022-09-07 08:52:31', 3443, 46328, 'cddfeb88c91738b1db10'),
(171, 'a', 'a', 'Puducherry', 'a', 22323, 'adad', 'mohammedputhawala793@gmail.com', 2232323, 'Paytm', 'success', 1, 0, 0, '', '2022-09-08 11:00:44', 499, 75994, '6c6bd29ca217305acf46'),
(172, 'a', 'a', 'Andhra Pradesh', 'a', 2, 'a', 'mohammedputhawala793@gmail.com', 2, 'Paytm', 'pending', 1, 0, 0, '', '2022-09-08 11:09:59', 499, 41474, '4932bebd1469761640c8'),
(173, 'Amm...', 'Hmm...', 'Andaman and Nicobar Islands', 'Barcelona', 586012, 'Z-101, Zao ching park, Near hide park, new york', 'mehreenputhawala@gmail.com', 2147483647, 'Paytm', 'success', 1, 1, 50, 'First50', '2022-09-13 04:00:00', 4940, 78618, '12b8a4c0a4c16c05a524'),
(174, 'TP', 'TP', 'Gujarat', 'TP', 232112, 'dnN', 'a@b.c', 2147483647, 'Paytm', 'success', 1, 1, 50, 'first50', '2022-09-14 12:27:04', 2944, 38543, '886a1870421c0a96fcbd'),
(175, 'Hello', 'World', 'Chhattisgarh', 'Iskon', 3958949, 'Wyus', 'mohammedputhawala793@gmail.com', 2147483647, 'Paytm', 'success', 1, 0, 0, '', '2022-09-15 01:55:18', 499, 72991, '0d87fe067a552b04af18'),
(176, 'Hello', 'World', 'Gujarat', 'Ahmedabad', 380055, 'A/31', 'mohammedputhawala793@gmail.com', 2147483647, 'Paytm', 'success', 1, 0, 0, '', '2022-11-06 04:54:07', 1996, 59428, '1888d937e7e44c08a238'),
(177, 'A', 'A', 'Bihar', 'A', 11, 'A', 'mohammedputhawala793@gmail.com', 1, 'Paytm', 'success', 1, 0, 0, '', '2022-12-03 09:27:05', 499, 31270, 'd68fd8e1184d882c42f1'),
(178, 'Hell0', 'Motto', 'Lakshadweep', 'Satte', 309320, 'skd', '2888@22.200', 22323232, 'Paytm', 'success', 1, 1, 50, 'first50', '2023-02-05 07:07:43', 449, 13291, '896c7fbc526620f63c18'),
(179, 'A', 'A', 'Andhra Pradesh', 'A', 2222, 'A', '22@22.22', 111, 'Paytm', 'success', 1, 0, 0, '', '2023-02-05 07:11:02', 499, 39391, '4cbdd5a2ea8a7cba898f'),
(180, 'A', 'A', 'Andhra Pradesh', 'A', 22, 'A', '22@222.22', 232, 'Paytm', 'success', 1, 0, 0, '', '2023-02-05 07:15:22', 499, 81758, '3a9dc104b89fa384fe2f');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` float NOT NULL,
  `order_txn_id` varchar(500) NOT NULL,
  `added_on` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `qty`, `price`, `order_txn_id`, `added_on`) VALUES
(155, 159, 1, 9, 499, 'ebdf17f6a2e1fb9e05aa', '2022-09-03 09:28:57'),
(156, 160, 1, 10, 499, '1abe224c594b1bcc44ab', '2022-09-05 11:20:45'),
(157, 161, 1, 1, 499, 'fed733656a7ab0e1d1d4', '2022-09-06 09:34:02'),
(158, 162, 1, 7, 499, '06b306fd53ef554f4c31', '2022-09-07 08:23:11'),
(159, 163, 1, 10, 499, 'ed6d6a9b520ea18b14d7', '2022-09-07 08:27:32'),
(160, 164, 1, 6, 499, '3d70bae51db88b4490d1', '2022-09-07 08:29:47'),
(161, 165, 1, 4, 499, 'f38b06ee7e4d0f153b07', '2022-09-07 08:32:24'),
(162, 166, 1, 1, 499, 'c0aa17276361730bfbab', '2022-09-07 08:33:45'),
(163, 167, 1, 3, 499, 'b1383c78bcc87369718c', '2022-09-07 08:34:49'),
(164, 168, 1, 4, 499, '5b3d22f6e821343cce98', '2022-09-07 08:35:54'),
(165, 169, 1, 10, 499, '4f26c1f5022e37aa82c5', '2022-09-07 08:37:05'),
(166, 170, 1, 7, 499, 'cddfeb88c91738b1db10', '2022-09-07 08:52:31'),
(167, 171, 1, 1, 499, '6c6bd29ca217305acf46', '2022-09-08 11:00:44'),
(168, 172, 1, 1, 499, '4932bebd1469761640c8', '2022-09-08 11:09:59'),
(169, 173, 1, 10, 499, '12b8a4c0a4c16c05a524', '2022-09-13 04:00:00'),
(170, 174, 1, 6, 499, '886a1870421c0a96fcbd', '2022-09-14 12:27:04'),
(171, 175, 1, 1, 499, '0d87fe067a552b04af18', '2022-09-15 01:55:18'),
(172, 176, 1, 4, 499, '1888d937e7e44c08a238', '2022-11-06 04:54:07'),
(173, 177, 1, 1, 499, 'd68fd8e1184d882c42f1', '2022-12-03 09:27:05'),
(174, 178, 1, 1, 499, '896c7fbc526620f63c18', '2023-02-05 07:07:43'),
(175, 179, 1, 1, 499, '4cbdd5a2ea8a7cba898f', '2023-02-05 07:11:02'),
(176, 180, 1, 1, 499, '3a9dc104b89fa384fe2f', '2023-02-05 07:15:22');

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`id`, `name`) VALUES
(1, 'Pending'),
(2, 'Processing'),
(3, 'Shipped'),
(4, 'Cancelled'),
(5, 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_title_black` varchar(255) NOT NULL,
  `product_title_blue` varchar(255) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `description` text NOT NULL,
  `cancel_price` int(11) NOT NULL,
  `actual_price` int(11) NOT NULL,
  `in_stock` int(11) NOT NULL,
  `meta_ptitle` text NOT NULL,
  `meta_pkey` text NOT NULL,
  `meta_pdesc` text NOT NULL,
  `why_sneaker_wipes` text NOT NULL,
  `direction_of_use` text NOT NULL,
  `warning` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_title_black`, `product_title_blue`, `image`, `description`, `cancel_price`, `actual_price`, `in_stock`, `meta_ptitle`, `meta_pkey`, `meta_pdesc`, `why_sneaker_wipes`, `direction_of_use`, `warning`) VALUES
(1, 'Sneaker', 'Wipes', 'ps__var_1_The_sneaker_1600x-removebg-preview-300x300.png', '<p><strong>Compatible </strong><em>with</em>:&nbsp;<u><strong><em> Air Jordan 1</em></strong></u>, A<strong><em>ir Jordan</em></strong> 3, Air Jordan 4, Air Jordan 12, Air Jordan Retro, Air Jordan 1 turbo green, Fear of God, Vapormax, Ultraboost, NMD, Superstar, Off-White, Huarache, Louis Vuitton, Timberlands, Reebok, Asics, Moonrock, Air Jordan, Nike, Supreme, DC, Adidas, Puma, New Balance, Saucony, Balenciaga, Yeezy slides, Yeezy 350 v2, Air Force 1, 599, Speed trainer, Skechers, Vans, Converse All Star, Chuck Taylor, Kobe, Travis Scott, Air Max, Air Max 1, Air Max 2, Air Max 27, Air Max 90, Air Max 97</p>', 599, 499, 646, 'Swipe Right', '<p><strong>Swipe </strong><em>Right</em></p>', '<p><strong>Swipe </strong><em>Right</em></p>', '<ul>\r\n	<li>The Sneaker Wipes are designed to keep your sneakers clean.</li>\r\n	<li>These wipes are suitable for travel and easy to carry in a wallet or a bag.</li>\r\n	<li>Individually packed for easy storage and preservation.</li>\r\n	<li>A vigorous cleaning or washing won&rsquo;t be needed as often with frequent wipe cleaning.</li>\r\n	<li>Convenient to Use, you can keep it in travel, office, car or home to clean your shoes whenever you want.</li>\r\n</ul>', '<ul>\r\n	<li>Use the plain side to clean the surface.</li>\r\n	<li>Use dotted side to clean tough stains and white soles.</li>\r\n	<li>Suitable for leather, vinyl &amp; knit material. Not suitable for suede.</li>\r\n	<li>Dispose of the wipes after use.</li>\r\n	<li>Do not flush the wipes.</li>\r\n</ul>', '<ul>\r\n	<li>Not for suede and nubuck.</li>\r\n	<li>Avoid contact with eyes.</li>\r\n	<li>IF IN EYE, rinse thoroughly with clean warm water or consult a doctor.</li>\r\n	<li>Keep out of reach of children.</li>\r\n</ul>');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `company_number` varchar(50) NOT NULL,
  `company_email` varchar(100) NOT NULL,
  `copyright_msg` varchar(200) NOT NULL,
  `company_logo` varchar(1000) NOT NULL,
  `title` varchar(100) NOT NULL,
  `meta_desc` text NOT NULL,
  `meta_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `company_number`, `company_email`, `copyright_msg`, `company_logo`, `title`, `meta_desc`, `meta_keywords`) VALUES
(1, '+91 93849 34322', 'swiperightsales@gmail.com', '<p style=\"text-align:center\"><span style=\"color:#ffffff\"><span style=\"background-color:#0a0759\">Copyright &copy; 2022 </span><em><strong><span style=\"background-color:#0a0759\">Swipe Right</span></stro', 'photo1660568483-removebg-preview (1).png', 'Sneaker Wipes - Swipe Right India', '<p>Best sneaker wipes for your sneakers. Swipe it right.</p>', '<p>sneaker wipes, sneaker cleaner, sneaker wipes india, sneaker cleaner india, white sneaker cleaner, sneakers cleaning wipes, indian sneaker cleaning wipes, swipe right sneaker wipes, swipe right sneaker cleaners, swipe right wipes, swipe right sneaker wipes india, sneaker wipes swipe right</p>');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE `social_links` (
  `facebook` varchar(540) NOT NULL,
  `twitter` varchar(540) NOT NULL,
  `linkedin` varchar(540) NOT NULL,
  `youtube` varchar(540) NOT NULL,
  `instagram` varchar(540) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `highlight_heading` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_links`
--

INSERT INTO `social_links` (`facebook`, `twitter`, `linkedin`, `youtube`, `instagram`, `heading`, `highlight_heading`, `description`) VALUES
('https://facebook.com/akmp.tutorials', 'https://facebook.com/akmp.tutorials', 'https://linkedin.com/company/akmp-web-developers', 'https://youtube.com/AKMPTutorials', 'https://instagram.com/akmp_tutorials', 'Follow', 'Us', '<p>Stay updated to keep your sneakers clean.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `color` varchar(30) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `client_name`, `description`, `color`, `added_on`, `status`) VALUES
(14, 'Abdullah Kagzi', '<p>Easy to use product and very pocket friendly product.</p>', '#f46c6c', '2022-09-02 04:10:16', 1),
(15, 'Mohammed Puthawala', '<p>There are 30 wipes in a pack, Amazing at this price.</p>', '#ec7ebe', '2022-09-02 04:12:18', 1),
(16, 'Client 10101', '<p>Very smooth ordering process with fast delivery and best.</p>', '#477376', '2022-09-02 04:14:02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `password` varchar(400) NOT NULL,
  `added_on` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `number`, `password`, `added_on`, `status`) VALUES
(14, 'mohammed', 'mohammed@gmail.ocm', '82495829', '4138dj', '2022-09-03 08:30:14', 1),
(15, 'abdullah', 'abdulla@gmisl.comd', '24234234', 'qjdnjb113', '2022-09-03 08:30:14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `title_black` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_blue` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video_link` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `para` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`title_black`, `title_blue`, `video_link`, `para`) VALUES
('Video', 'Title', 'https://www.youtube.com/embed/RT5E6mkQKPI', '<p>This is a paraghph for video title</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupon_master`
--
ALTER TABLE `coupon_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_subscribe`
--
ALTER TABLE `email_subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `coupon_master`
--
ALTER TABLE `coupon_master`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `email_subscribe`
--
ALTER TABLE `email_subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `feature`
--
ALTER TABLE `feature`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
