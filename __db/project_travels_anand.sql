-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2016 at 06:20 PM
-- Server version: 5.6.27-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project_travels_anand`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nikname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `users_type` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nikname`, `email`, `password`, `users_type`, `status`, `is_deleted`) VALUES
(1, 'Suman', 'suman@admin.com', '8284a7fe2ef71eb887af14c01e60417b', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rank` int(11) NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=224 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `rank`, `country`, `status`, `is_deleted`) VALUES
(1, 0, 'Afghanistan', 1, 0),
(2, 0, 'Albania', 1, 0),
(3, 0, 'Algeria', 1, 0),
(4, 0, 'American Samoa', 1, 0),
(5, 0, 'Andorra', 1, 0),
(6, 0, 'Angola', 1, 0),
(7, 0, 'Anguilla', 1, 0),
(8, 0, 'Antigua and Barbuda', 1, 0),
(9, 0, 'Argentina', 1, 0),
(10, 0, 'Armenia', 1, 0),
(11, 0, 'Aruba', 1, 0),
(12, 0, 'Australia', 1, 0),
(13, 0, 'Austria', 1, 0),
(14, 0, 'Azerbaijan', 1, 0),
(15, 0, 'Bahamas', 1, 0),
(16, 0, 'Bahrain', 1, 0),
(17, 0, 'Bangladesh', 1, 0),
(18, 0, 'Barbados', 1, 0),
(19, 0, 'Belarus', 1, 0),
(20, 0, 'Belgium', 1, 0),
(21, 0, 'Belize', 1, 0),
(22, 0, 'Benin', 1, 0),
(23, 0, 'Bermuda', 1, 0),
(24, 0, 'Bhutan', 1, 0),
(25, 0, 'Bolivia', 1, 0),
(26, 0, 'Bosnia', 1, 0),
(27, 0, 'Botswana', 1, 0),
(28, 0, 'Bougainville', 1, 0),
(29, 0, 'Brazil', 1, 0),
(30, 0, 'British Indian Ocean', 1, 0),
(31, 0, 'British Virgin Islands', 1, 0),
(32, 0, 'Brunei', 1, 0),
(33, 0, 'Bulgaria', 1, 0),
(34, 0, 'Burkina Faso', 1, 0),
(35, 0, 'Burundi', 1, 0),
(36, 0, 'Cambodia', 1, 0),
(37, 0, 'Cameroon', 1, 0),
(38, 0, 'Canada', 1, 0),
(39, 0, 'Cape Verde Islands', 1, 0),
(40, 0, 'Cayman Islands', 1, 0),
(41, 0, 'Central African Republic', 1, 0),
(42, 0, 'Chad', 1, 0),
(43, 0, 'Chile', 1, 0),
(44, 0, 'China, Hong Kong', 1, 0),
(45, 0, 'China, Macau', 1, 0),
(46, 0, 'China, People’s Republic', 1, 0),
(47, 0, 'China, Taiwan', 1, 0),
(48, 0, 'Colombia', 1, 0),
(49, 0, 'Comoros', 1, 0),
(50, 0, 'Congo, Democratic Republic of', 1, 0),
(51, 0, 'Congo, Republic of', 1, 0),
(52, 0, 'Cook Islands', 1, 0),
(53, 0, 'Costa Rica', 1, 0),
(54, 0, 'Cote d’Ivoire', 1, 0),
(55, 0, 'Croatia', 1, 0),
(56, 0, 'Cuba', 1, 0),
(57, 0, 'CyprusCzech Republic', 1, 0),
(58, 0, 'Denmark', 1, 0),
(59, 0, 'Djibouti', 1, 0),
(60, 0, 'Dominica', 1, 0),
(61, 0, 'Dominican Republic', 1, 0),
(62, 0, 'Ecuador', 1, 0),
(63, 0, 'Egypt', 1, 0),
(64, 0, 'El Salvador', 1, 0),
(65, 0, 'Equatorial Guinea', 1, 0),
(66, 0, 'Eritrea', 1, 0),
(67, 0, 'Estonia', 1, 0),
(68, 0, 'Ethiopia', 1, 0),
(69, 0, 'Faeroe Islands', 1, 0),
(70, 0, 'Federated States of Micronesia', 1, 0),
(71, 0, 'Fiji', 1, 0),
(72, 0, 'Finland', 1, 0),
(73, 0, 'France', 1, 0),
(74, 0, 'French Guiana', 1, 0),
(75, 0, 'French Polynesia', 1, 0),
(76, 0, 'Gabon', 1, 0),
(77, 0, 'Gambia, The', 1, 0),
(78, 0, 'Germany', 1, 0),
(79, 0, 'Ghana', 1, 0),
(80, 0, 'Gibraltar', 1, 0),
(81, 0, 'Greece', 1, 0),
(82, 0, 'Greenland', 1, 0),
(83, 0, 'Grenada', 1, 0),
(84, 0, 'Guadeloupe', 1, 0),
(85, 0, 'Guam', 1, 0),
(86, 0, 'Guatemala', 1, 0),
(87, 0, 'Guinea', 1, 0),
(88, 0, 'Guinea-Bissau', 1, 0),
(89, 0, 'Guyana', 1, 0),
(90, 0, 'Haiti', 1, 0),
(91, 0, 'Holy See (Vatican City State)', 1, 0),
(92, 0, 'Honduras', 1, 0),
(93, 0, 'Hungary', 1, 0),
(94, 0, 'Iceland', 1, 0),
(95, 0, 'India', 1, 0),
(96, 0, 'Indonesia', 1, 0),
(97, 0, 'Iran', 1, 0),
(98, 0, 'Iraq', 1, 0),
(99, 0, 'Ireland', 1, 0),
(100, 0, 'Israel', 1, 0),
(101, 0, 'Italy', 1, 0),
(102, 0, 'Jamaica', 1, 0),
(103, 0, 'Japan', 1, 0),
(104, 0, 'Jordan', 1, 0),
(105, 0, 'Kazakhstan', 1, 0),
(106, 0, 'Kenya', 1, 0),
(107, 0, 'Kiribati', 1, 0),
(108, 0, 'Korea, Democratic People’s Rep', 1, 0),
(109, 0, 'Korea, Republic of', 1, 0),
(110, 0, 'Kosovo', 1, 0),
(111, 0, 'KuwaitKyrgyzstan', 1, 0),
(112, 0, 'Laos', 1, 0),
(113, 0, 'Latvia', 1, 0),
(114, 0, 'Lebanon', 1, 0),
(115, 0, 'Lesotho', 1, 0),
(116, 0, 'Liberia', 1, 0),
(117, 0, 'Libya', 1, 0),
(118, 0, 'Liechtenstein', 1, 0),
(119, 0, 'Lithuania', 1, 0),
(120, 0, 'Luxembourg', 1, 0),
(121, 0, 'Macedonia', 1, 0),
(122, 0, 'Madagascar', 1, 0),
(123, 0, 'Malawi', 1, 0),
(124, 0, 'Malaysia', 1, 0),
(125, 0, 'Maldives', 1, 0),
(126, 0, 'Mali', 1, 0),
(127, 0, 'Malta', 1, 0),
(128, 0, 'Martinique', 1, 0),
(129, 0, 'Mauritania', 1, 0),
(130, 0, 'Mauritius', 1, 0),
(131, 0, 'Mayotte', 1, 0),
(132, 0, 'Mexico', 1, 0),
(133, 0, 'Moldova', 1, 0),
(134, 0, 'Monaco', 1, 0),
(135, 0, 'Mongolia', 1, 0),
(136, 0, 'Montenegro', 1, 0),
(137, 0, 'Montserrat', 1, 0),
(138, 0, 'MoroccoMozambique', 1, 0),
(139, 0, 'Myanmar', 1, 0),
(140, 0, 'Namibia', 1, 0),
(141, 0, 'Nauru', 1, 0),
(142, 0, 'Nepal', 1, 0),
(143, 0, 'Netherlands', 1, 0),
(144, 0, 'Netherlands Antilles', 1, 0),
(145, 0, 'New Caledonia', 1, 0),
(146, 0, 'New Zealand', 1, 0),
(147, 0, 'Nicaragua', 1, 0),
(148, 0, 'Niger', 1, 0),
(149, 0, 'Nigeria', 1, 0),
(150, 0, 'Norway', 1, 0),
(151, 0, 'Oman', 1, 0),
(152, 0, 'Pakistan', 1, 0),
(153, 0, 'Palestine', 1, 0),
(154, 0, 'Panama', 1, 0),
(155, 0, 'Papua New Guinea', 1, 0),
(156, 0, 'Paraguay', 1, 0),
(157, 0, 'Peru', 1, 0),
(158, 0, 'Philippines', 1, 0),
(159, 0, 'Poland', 1, 0),
(160, 0, 'Portugal', 1, 0),
(161, 0, 'Puerto Rico', 1, 0),
(162, 0, 'Qatar', 1, 0),
(163, 0, 'Réunion', 1, 0),
(164, 0, 'Romania', 1, 0),
(165, 0, 'Russia', 1, 0),
(166, 0, 'RwandaSaint Barthelemy', 1, 0),
(167, 0, 'Saint Helena', 1, 0),
(168, 0, 'Saint Kitts & Nevis', 1, 0),
(169, 0, 'Saint Lucia', 1, 0),
(170, 0, 'Saint Martin', 1, 0),
(171, 0, 'Saint Pierre & Miquelon', 1, 0),
(172, 0, 'Saint Vincent', 1, 0),
(173, 0, 'Samoa', 1, 0),
(174, 0, 'San Marino', 1, 0),
(175, 0, 'Sao Tomé & Principe', 1, 0),
(176, 0, 'Saudi Arabia', 1, 0),
(177, 0, 'Senegal', 1, 0),
(178, 0, 'Serbia', 1, 0),
(179, 0, 'Seychelles', 1, 0),
(180, 0, 'Sierra Leone', 1, 0),
(181, 0, 'Singapore', 1, 0),
(182, 0, 'Slovakia', 1, 0),
(183, 0, 'Slovenia', 1, 0),
(184, 0, 'Solomon Islands', 1, 0),
(185, 0, 'Somalia', 1, 0),
(186, 0, 'South Africa', 1, 0),
(187, 0, 'Spain', 1, 0),
(188, 0, 'Sri Lanka', 1, 0),
(189, 0, 'Sudan', 1, 0),
(190, 0, 'Suriname', 1, 0),
(191, 0, 'Swaziland', 1, 0),
(192, 0, 'Sweden', 1, 0),
(193, 0, 'Switzerland', 1, 0),
(194, 0, 'Syria', 1, 0),
(195, 0, 'Tajikistan', 1, 0),
(196, 0, 'Tanzania', 1, 0),
(197, 0, 'Thailand', 1, 0),
(198, 0, 'Timor Leste', 1, 0),
(199, 0, 'Togo', 1, 0),
(200, 0, 'Tokelau Islands', 1, 0),
(201, 0, 'Tonga', 1, 0),
(202, 0, 'Trinidad & Tobago', 1, 0),
(203, 0, 'Tunisia', 1, 0),
(204, 0, 'Turkey', 1, 0),
(205, 0, 'Turkmenistan', 1, 0),
(206, 0, 'Turks & Caicos Islands', 1, 0),
(207, 0, 'Tuvalu', 1, 0),
(208, 0, 'Uganda', 1, 0),
(209, 0, 'Ukraine', 1, 0),
(210, 0, 'United Arab Emirates', 1, 0),
(211, 0, 'United Kingdom of GB & NI', 1, 0),
(212, 0, 'United States of America', 1, 0),
(213, 0, 'Uruguay', 1, 0),
(214, 0, 'US Virgin Islands', 1, 0),
(215, 0, 'Uzbekistan', 1, 0),
(216, 0, 'Vanuatu', 1, 0),
(217, 0, 'Venezuela', 1, 0),
(218, 0, 'Vietnam', 1, 0),
(219, 0, 'Wallis & Futuna Islands', 1, 0),
(220, 0, 'Yemen', 1, 0),
(221, 0, 'Zambia', 1, 0),
(222, 0, 'Zimbabwe', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `flight_class`
--

CREATE TABLE IF NOT EXISTS `flight_class` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `flight_class` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `flight_class`
--

INSERT INTO `flight_class` (`id`, `flight_class`, `status`, `is_deleted`) VALUES
(1, 'Economic', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `flight_service`
--

CREATE TABLE IF NOT EXISTS `flight_service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `flight_service` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `flight_service`
--

INSERT INTO `flight_service` (`id`, `flight_service`, `status`, `is_deleted`) VALUES
(1, 'Indigo', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `flight_type`
--

CREATE TABLE IF NOT EXISTS `flight_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `flight_type` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `flight_type`
--

INSERT INTO `flight_type` (`id`, `flight_type`, `status`, `is_deleted`) VALUES
(1, 'International', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_type` int(11) NOT NULL,
  `location_type` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `master_password`
--

CREATE TABLE IF NOT EXISTS `master_password` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `master_password`
--

INSERT INTO `master_password` (`id`, `password`) VALUES
(1, '8284a7fe2ef71eb887af14c01e60417b');

-- --------------------------------------------------------

--
-- Table structure for table `service_type`
--

CREATE TABLE IF NOT EXISTS `service_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_type` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `service_type`
--

INSERT INTO `service_type` (`id`, `service_type`, `status`, `is_deleted`) VALUES
(1, 'Flight', 1, 0),
(2, 'Hotel', 1, 0),
(3, 'Bus', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `state` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `country_id`, `state`, `status`, `is_deleted`) VALUES
(2, 95, 'West Bengal', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `trip_type`
--

CREATE TABLE IF NOT EXISTS `trip_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trip_type` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `trip_type`
--

INSERT INTO `trip_type` (`id`, `trip_type`, `status`, `is_deleted`) VALUES
(1, 'One way', 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
