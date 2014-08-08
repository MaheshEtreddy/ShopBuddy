-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.16 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             8.0.0.4396
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for sbdata
DROP DATABASE IF EXISTS `sbdata`;
CREATE DATABASE IF NOT EXISTS `sbdata` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `sbdata`;


-- Dumping structure for table sbdata.countries
DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `idCountry` int(5) NOT NULL AUTO_INCREMENT,
  `countryCode` char(2) NOT NULL DEFAULT '',
  `countryName` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`idCountry`)
) ENGINE=MyISAM AUTO_INCREMENT=253 DEFAULT CHARSET=utf8;

-- Dumping data for table sbdata.countries: 230 rows
DELETE FROM `countries`;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` (`idCountry`, `countryCode`, `countryName`) VALUES
	(1, 'AD', 'Andorra'),
	(2, 'AE', 'United Arab Emirates'),
	(3, 'AF', 'Afghanistan'),
	(4, 'AG', 'Antigua and Barbuda'),
	(5, 'AI', 'Anguilla'),
	(6, 'AL', 'Albania'),
	(7, 'AM', 'Armenia'),
	(8, 'AO', 'Angola'),
	(9, 'AQ', 'Antarctica'),
	(10, 'AR', 'Argentina'),
	(11, 'AS', 'American Samoa'),
	(12, 'AT', 'Austria'),
	(13, 'AU', 'Australia'),
	(14, 'AW', 'Aruba'),
	(16, 'AZ', 'Azerbaijan'),
	(17, 'BA', 'Bosnia and Herzegovina'),
	(18, 'BB', 'Barbados'),
	(19, 'BD', 'Bangladesh'),
	(20, 'BE', 'Belgium'),
	(21, 'BF', 'Burkina Faso'),
	(22, 'BG', 'Bulgaria'),
	(23, 'BH', 'Bahrain'),
	(24, 'BI', 'Burundi'),
	(25, 'BJ', 'Benin'),
	(27, 'BM', 'Bermuda'),
	(28, 'BN', 'Brunei'),
	(29, 'BO', 'Bolivia'),
	(30, 'BQ', 'Bonaire'),
	(31, 'BR', 'Brazil'),
	(32, 'BS', 'Bahamas'),
	(33, 'BT', 'Bhutan'),
	(34, 'BV', 'Bouvet Island'),
	(35, 'BW', 'Botswana'),
	(36, 'BY', 'Belarus'),
	(37, 'BZ', 'Belize'),
	(38, 'CA', 'Canada'),
	(40, 'CD', 'Democratic Republic of the Congo'),
	(41, 'CF', 'Central African Republic'),
	(42, 'CG', 'Republic of the Congo'),
	(43, 'CH', 'Switzerland'),
	(44, 'CI', 'Ivory Coast'),
	(45, 'CK', 'Cook Islands'),
	(46, 'CL', 'Chile'),
	(47, 'CM', 'Cameroon'),
	(48, 'CN', 'China'),
	(49, 'CO', 'Colombia'),
	(50, 'CR', 'Costa Rica'),
	(51, 'CU', 'Cuba'),
	(52, 'CV', 'Cape Verde'),
	(53, 'CW', 'Curacao'),
	(54, 'CX', 'Christmas Island'),
	(55, 'CY', 'Cyprus'),
	(56, 'CZ', 'Czech Republic'),
	(57, 'DE', 'Germany'),
	(58, 'DJ', 'Djibouti'),
	(59, 'DK', 'Denmark'),
	(60, 'DM', 'Dominica'),
	(61, 'DO', 'Dominican Republic'),
	(62, 'DZ', 'Algeria'),
	(63, 'EC', 'Ecuador'),
	(64, 'EE', 'Estonia'),
	(65, 'EG', 'Egypt'),
	(66, 'EH', 'Western Sahara'),
	(67, 'ER', 'Eritrea'),
	(68, 'ES', 'Spain'),
	(69, 'ET', 'Ethiopia'),
	(70, 'FI', 'Finland'),
	(71, 'FJ', 'Fiji'),
	(72, 'FK', 'Falkland Islands'),
	(73, 'FM', 'Micronesia'),
	(74, 'FO', 'Faroe Islands'),
	(75, 'FR', 'France'),
	(76, 'GA', 'Gabon'),
	(77, 'GB', 'United Kingdom'),
	(78, 'GD', 'Grenada'),
	(79, 'GE', 'Georgia'),
	(80, 'GF', 'French Guiana'),
	(81, 'GG', 'Guernsey'),
	(82, 'GH', 'Ghana'),
	(83, 'GI', 'Gibraltar'),
	(84, 'GL', 'Greenland'),
	(89, 'GR', 'Greece'),
	(90, 'GS', 'South Georgia and the South Sandwich Islands'),
	(91, 'GT', 'Guatemala'),
	(92, 'GU', 'Guam'),
	(93, 'GW', 'Guinea-Bissau'),
	(94, 'GY', 'Guyana'),
	(95, 'HK', 'Hong Kong'),
	(96, 'HM', 'Heard Island and McDonald Islands'),
	(97, 'HN', 'Honduras'),
	(98, 'HR', 'Croatia'),
	(99, 'HT', 'Haiti'),
	(100, 'HU', 'Hungary'),
	(101, 'ID', 'Indonesia'),
	(102, 'IE', 'Ireland'),
	(103, 'IL', 'Israel'),
	(104, 'IM', 'Isle of Man'),
	(105, 'IN', 'India'),
	(106, 'IO', 'British Indian Ocean Territory'),
	(107, 'IQ', 'Iraq'),
	(108, 'IR', 'Iran'),
	(109, 'IS', 'Iceland'),
	(110, 'IT', 'Italy'),
	(111, 'JE', 'Jersey'),
	(112, 'JM', 'Jamaica'),
	(113, 'JO', 'Jordan'),
	(114, 'JP', 'Japan'),
	(115, 'KE', 'Kenya'),
	(116, 'KG', 'Kyrgyzstan'),
	(117, 'KH', 'Cambodia'),
	(118, 'KI', 'Kiribati'),
	(119, 'KM', 'Comoros'),
	(120, 'KN', 'Saint Kitts and Nevis'),
	(121, 'KP', 'North Korea'),
	(122, 'KR', 'South Korea'),
	(123, 'KW', 'Kuwait'),
	(124, 'KY', 'Cayman Islands'),
	(125, 'KZ', 'Kazakhstan'),
	(126, 'LA', 'Laos'),
	(127, 'LB', 'Lebanon'),
	(128, 'LC', 'Saint Lucia'),
	(129, 'LI', 'Liechtenstein'),
	(130, 'LK', 'Sri Lanka'),
	(131, 'LR', 'Liberia'),
	(132, 'LS', 'Lesotho'),
	(133, 'LT', 'Lithuania'),
	(134, 'LU', 'Luxembourg'),
	(135, 'LV', 'Latvia'),
	(136, 'LY', 'Libya'),
	(137, 'MA', 'Morocco'),
	(138, 'MC', 'Monaco'),
	(139, 'MD', 'Moldova'),
	(140, 'ME', 'Montenegro'),
	(141, 'MF', 'Saint Martin'),
	(142, 'MG', 'Madagascar'),
	(143, 'MH', 'Marshall Islands'),
	(144, 'MK', 'Macedonia'),
	(145, 'ML', 'Mali'),
	(146, 'MM', 'Myanmar [Burma]'),
	(147, 'MN', 'Mongolia'),
	(148, 'MO', 'Macao'),
	(149, 'MP', 'Northern Mariana Islands'),
	(150, 'MQ', 'Martinique'),
	(151, 'MR', 'Mauritania'),
	(152, 'MS', 'Montserrat'),
	(153, 'MT', 'Malta'),
	(154, 'MU', 'Mauritius'),
	(155, 'MV', 'Maldives'),
	(156, 'MW', 'Malawi'),
	(157, 'MX', 'Mexico'),
	(158, 'MY', 'Malaysia'),
	(159, 'MZ', 'Mozambique'),
	(160, 'NA', 'Namibia'),
	(161, 'NC', 'New Caledonia'),
	(162, 'NE', 'Niger'),
	(163, 'NF', 'Norfolk Island'),
	(164, 'NG', 'Nigeria'),
	(165, 'NI', 'Nicaragua'),
	(166, 'NL', 'Netherlands'),
	(167, 'NO', 'Norway'),
	(168, 'NP', 'Nepal'),
	(169, 'NR', 'Nauru'),
	(170, 'NU', 'Niue'),
	(171, 'NZ', 'New Zealand'),
	(172, 'OM', 'Oman'),
	(173, 'PA', 'Panama'),
	(174, 'PE', 'Peru'),
	(175, 'PF', 'French Polynesia'),
	(176, 'PG', 'Papua New Guinea'),
	(177, 'PH', 'Philippines'),
	(178, 'PK', 'Pakistan'),
	(179, 'PL', 'Poland'),
	(180, 'PM', 'Saint Pierre and Miquelon'),
	(181, 'PN', 'Pitcairn Islands'),
	(182, 'PR', 'Puerto Rico'),
	(183, 'PS', 'Palestine'),
	(184, 'PT', 'Portugal'),
	(185, 'PW', 'Palau'),
	(186, 'PY', 'Paraguay'),
	(187, 'QA', 'Qatar'),
	(188, 'RE', 'Réunion'),
	(189, 'RO', 'Romania'),
	(190, 'RS', 'Serbia'),
	(191, 'RU', 'Russia'),
	(192, 'RW', 'Rwanda'),
	(193, 'SA', 'Saudi Arabia'),
	(194, 'SB', 'Solomon Islands'),
	(195, 'SC', 'Seychelles'),
	(196, 'SD', 'Sudan'),
	(197, 'SE', 'Sweden'),
	(198, 'SG', 'Singapore'),
	(199, 'SH', 'Saint Helena'),
	(200, 'SI', 'Slovenia'),
	(201, 'SJ', 'Svalbard and Jan Mayen'),
	(202, 'SK', 'Slovakia'),
	(203, 'SL', 'Sierra Leone'),
	(204, 'SM', 'San Marino'),
	(205, 'SN', 'Senegal'),
	(206, 'SO', 'Somalia'),
	(207, 'SR', 'Suriname'),
	(208, 'SS', 'South Sudan'),
	(210, 'SV', 'El Salvador'),
	(211, 'SX', 'Sint Maarten'),
	(212, 'SY', 'Syria'),
	(213, 'SZ', 'Swaziland'),
	(214, 'TC', 'Turks and Caicos Islands'),
	(215, 'TD', 'Chad'),
	(216, 'TF', 'French Southern Territories'),
	(217, 'TG', 'Togo'),
	(218, 'TH', 'Thailand'),
	(219, 'TJ', 'Tajikistan'),
	(220, 'TK', 'Tokelau'),
	(221, 'TL', 'East Timor'),
	(222, 'TM', 'Turkmenistan'),
	(223, 'TN', 'Tunisia'),
	(224, 'TO', 'Tonga'),
	(225, 'TR', 'Turkey'),
	(226, 'TT', 'Trinidad and Tobago'),
	(227, 'TV', 'Tuvalu'),
	(228, 'TW', 'Taiwan'),
	(229, 'TZ', 'Tanzania'),
	(230, 'UA', 'Ukraine'),
	(231, 'UG', 'Uganda'),
	(232, 'UM', 'U.S. Minor Outlying Islands'),
	(233, 'US', 'United States'),
	(234, 'UY', 'Uruguay'),
	(235, 'UZ', 'Uzbekistan'),
	(236, 'VA', 'Vatican City'),
	(251, 'ZW', 'Zimbabwe'),
	(252, 'US', 'United States Of America');
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;


-- Dumping structure for table sbdata.customers
DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `customerID` int(11) NOT NULL AUTO_INCREMENT,
  `customerMail` varchar(50) NOT NULL,
  `customerName` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `addressLine1` varchar(50) NOT NULL,
  `addressLine2` varchar(50) DEFAULT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `postalCode` varchar(15) NOT NULL,
  `country` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `creditLimit` double DEFAULT NULL,
  `deletedYN` int(10) NOT NULL DEFAULT '0',
  `createdDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`customerID`)
) ENGINE=MyISAM AUTO_INCREMENT=128 DEFAULT CHARSET=latin1;

-- Dumping data for table sbdata.customers: 126 rows
DELETE FROM `customers`;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
INSERT INTO `customers` (`customerID`, `customerMail`, `customerName`, `phone`, `addressLine1`, `addressLine2`, `city`, `state`, `postalCode`, `country`, `password`, `creditLimit`, `deletedYN`, `createdDate`) VALUES
	(1, 'Anna@vu.com', 'Annette ', '61.77.6555', '1 rue Alsace-Lorraine', NULL, 'Toulouse', 'Houstan', '31000', 'France', '123', 61100, 0, '2014-08-01 11:47:05'),
	(2, 'Keith@vu.com', 'Keith', '2035557845', '149 Spinnaker Dr.', 'Suite 101', 'New Haven', 'CT', '97823', 'USA', '1286', 0, 0, '2014-07-25 16:34:38'),
	(3, 'Paolo@vu.com', 'Paolo ', '011-4988555', 'Via Monte Bianco 34', NULL, 'Torino', '', '10100', 'Italy', '1401', 113000, 0, '2014-07-28 16:06:12'),
	(4, 'Alejandra@vu.com', 'Alejandra ', '(91) 745 6555', 'Gran Vía, 1', NULL, 'Madrid', '', '28001', 'Spain', '', 0, 0, '2014-07-28 16:06:12'),
	(6, 'Carmen@vu.com', 'Carmen', '+34 913 728555', 'c/ Gobelas, 19-1 Urb. La Florida', NULL, 'Madrid', '', '28023', 'Spain', '', 0, 0, '2014-07-28 16:06:12'),
	(7, 'Brydey@vu.com', 'Brydey', '+612 9411 1555', 'Suntec Tower Three', '8 Temasek', 'Singapore', '', '038988', 'Singapore', '', 0, 0, '2014-07-31 15:42:40'),
	(8, 'Patricia@vu.com', 'Patricia ', '2967 555', '8 Johnstown Road', NULL, 'Cork', 'Co. Cork', '', 'Ireland', '', 0, 0, '2014-07-31 15:42:43'),
	(9, 'Carine@vu.com', 'Carine ', '40.32.2555', '54, rue Royale', NULL, 'Nantes', '', '44000', 'France', '1370', 21000, 0, '2014-07-31 15:42:47'),
	(10, 'Sean@vu.com', 'Sean', '61-9-3844-6555', '7 Allen Street', NULL, 'Glen Waverly', 'Victoria', '3150', 'Australia', '1611', 60300, 0, '2014-07-28 16:06:12'),
	(11, 'Peter@vu.com', 'Peter', '03 9520 4555', '636 St Kilda Road', 'Level 3', 'Melbourne', 'Victoria', '3004', 'Australia', '1611', 117300, 0, '2014-07-25 16:42:31'),
	(12, 'Ben@vu.com', 'Ben', '61-7-3844-6555', '31 Duncan St. West End', NULL, 'South Brisbane', 'Queensland', '4101', 'Australia', '1611', 51600, 0, '2014-07-25 16:42:31'),
	(13, 'Daniel@vu.com', 'Daniel ', '30.59.8555', '67, avenue de l\'Europe', NULL, 'Versailles', '', '78000', 'France', '1370', 77900, 0, '2014-07-28 16:06:12'),
	(14, 'Dominique@vu.com', 'Dominique', '(1) 47.55.6555', '25, rue Lauriston', NULL, 'Paris', '', '75016', 'France', '1337', 95000, 0, '2014-07-25 16:43:22'),
	(15, 'guest@vu.com', 'Guest', '6175558428', '16780 Pompton St.', NULL, 'Brickhaven', 'MA', '58339', 'USA', 'guest', 23000, 0, '2014-08-04 17:23:47'),
	(16, 'Rachel@vu.com', 'Rachel', '(171) 555-1555', 'Fauntleroy Circus', NULL, 'Manchester', '', 'EC2 5NT', 'UK', '1501', 136800, 0, '2014-07-25 16:43:22'),
	(17, 'Jonas@vu.com', 'Jonas ', '07-98 9555', 'Erling Skakkes gate 78', NULL, 'Stavern', '', '4110', 'Norway', '1504', 81700, 0, '2014-07-25 16:43:22'),
	(18, 'Michael@vu.com', 'Michael', ' +49 89 61 08 9555', 'Hansastr. 15', NULL, 'Munich', '', '80686', 'Germany', '1504', 77000, 0, '2014-07-25 16:43:22'),
	(19, 'Ed@vu.com', 'Ed', '+41 26 425 50 01', 'Rte des Arsenaux 41 ', NULL, 'Fribourg', '', '1700', 'Switzerland', '', 0, 0, '2014-07-25 16:43:22'),
	(20, 'Roland@vu.com', 'Roland', '+49 69 66 90 2555', 'Lyonerstr. 34', NULL, 'Frankfurt', '', '60528', 'Germany', '1504', 59700, 0, '2014-07-25 16:43:22'),
	(21, 'Mary@vu.com', 'Mary', '3105552373', '4097 Douglas Av.', NULL, 'Glendale', 'CA', '92561', 'USA', '1166', 11000, 0, '2014-07-25 16:34:38'),
	(22, 'Jesus@vu.com', 'Jesus', '+34 913 728 555', 'Merchants House', '27-30 Merchant\'s Quay', 'Madrid', '', '28023', 'Spain', '1702', 59600, 0, '2014-07-25 16:43:22'),
	(23, 'Jerry@vu.com', 'Jerry', '6175555555', '4658 Baden Av.', NULL, 'Cambridge', 'MA', '51247', 'USA', '1188', 43400, 0, '2014-07-25 16:34:38'),
	(24, 'Yoshi@vu.com', 'Yoshi ', '(604) 555-3392', '1900 Oak St.', NULL, 'Vancouver', 'BC', 'V3F 2K1', 'Canada', '1323', 90300, 0, '2014-07-25 16:43:22'),
	(25, 'Francisca@vu.com', 'Francisca', '2155554695', '782 First Street', NULL, 'Philadelphia', 'PA', '71270', 'USA', '1188', 81100, 0, '2014-07-25 16:34:38'),
	(26, 'Maria@vu.com', 'Maria', '2125558493', '5905 Pompton St.', 'Suite 750', 'NYC', 'NY', '10022', 'USA', '1286', 67500, 0, '2014-07-25 16:34:38'),
	(27, 'Dean@vu.com', 'Dean', '+353 1862 1555', '25 Maiden Lane', 'Floor No. 4', 'Dublin', '', '2', 'Ireland', '1504', 69400, 0, '2014-07-25 16:43:22'),
	(28, 'Valarie@vu.com', 'Valarie', '7605558146', '361 Furth Circle', NULL, 'San Diego', 'CA', '91217', 'USA', '1166', 105000, 0, '2014-07-25 16:34:38'),
	(29, 'Allen@vu.com', 'Allen', '6175558555', '7825 Douglas Av.', NULL, 'Brickhaven', 'MA', '58339', 'USA', '1188', 70700, 0, '2014-07-25 16:34:38'),
	(30, 'Julie@vu.com', 'Julie', '6505551386', '7734 Strong St.', NULL, 'San Francisco', 'CA', '94217', 'USA', '1165', 105000, 0, '2014-07-25 16:34:38'),
	(31, 'Martín@vu.com', 'Martín ', '(91) 555 22 82', 'C/ Araquil, 67', NULL, 'Madrid', '', '28023', 'Spain', '1702', 104600, 0, '2014-07-25 16:43:22'),
	(32, 'Philip@vu.com', 'Philip ', '0555-09555', 'Maubelstr. 90', NULL, 'Brandenburg', '', '14776', 'Germany', '', 0, 0, '2014-07-25 16:43:22'),
	(33, 'Arnold@vu.com', 'Arnold', '+63 2 555 3587', '15 McCallum Street', 'NatWest Center #13-03', 'Makati City', '', '1227 MM', 'Philippines', '1621', 81500, 0, '2014-07-25 16:43:22'),
	(34, 'Martine@vu.com', 'Martine ', '20.16.1555', '184, chaussée de Tournai', NULL, 'Lille', '', '59000', 'France', '1370', 82900, 0, '2014-07-25 16:43:22'),
	(35, 'Jytte@vu.com', 'Jytte ', '31 12 3555', 'Vinbæltet 34', NULL, 'Kobenhavn', '', '1734', 'Denmark', '1401', 83400, 0, '2014-07-25 16:43:22'),
	(36, 'Mel@vu.com', 'Mel', '030-0074555', 'Obere Str. 57', NULL, 'Berlin', '', '12209', 'Germany', '', 0, 0, '2014-07-25 16:43:22'),
	(37, 'Kelvin@vu.com', 'Kelvin', '2155551555', '7586 Pompton St.', NULL, 'Allentown', 'PA', '70267', 'USA', '1216', 100600, 0, '2014-07-25 16:34:38'),
	(38, 'Valarie@vu.com', 'Valarie', '6175552555', '6251 Ingle Ln.', NULL, 'Boston', 'MA', '51003', 'USA', '1188', 85100, 0, '2014-07-25 16:34:38'),
	(39, 'Thomas@vu.com', 'Thomas ', '(171) 555-7555', '120 Hanover Sq.', NULL, 'London', '', 'WA1 1DP', 'UK', '1501', 43300, 0, '2014-07-25 16:43:22'),
	(40, 'Mike@vu.com', 'Mike', '+64 9 312 5555', '162-164 Grafton Road', 'Level 2', 'Auckland  ', '', '', 'New Zealand', '1612', 88000, 0, '2014-07-25 16:43:22'),
	(41, 'Eric@vu.com', 'Eric', '+65 221 7555', 'Bronz Sok.', 'Bronz Apt. 3/6 Tesvikiye', 'Singapore', '', '079903', 'Singapore', '1621', 103800, 0, '2014-07-25 16:43:22'),
	(42, 'Eduardo@vu.com', 'Eduardo ', '(93) 203 4555', 'Rambla de Cataluña, 23', NULL, 'Barcelona', '', '08022', 'Spain', '1702', 60300, 0, '2014-07-25 16:43:22'),
	(43, 'Diego@vu.com', 'Diego ', '(91) 555 94 44', 'C/ Moralzarzal, 86', NULL, 'Madrid', '', '28034', 'Spain', '1370', 227600, 0, '2014-07-25 16:43:22'),
	(44, 'Sarah@vu.com', 'Sarah', '04 499 9555', '101 Lambton Quay', 'Level 11', 'Wellington', '', '', 'New Zealand', '1612', 86800, 0, '2014-07-25 16:43:22'),
	(45, 'Alexander@vu.com', 'Alexander ', '0342-555176', 'Heerstr. 22', NULL, 'Leipzig', '', '04179', 'Germany', '', 0, 0, '2014-07-25 16:43:22'),
	(46, 'Peter@vu.com', 'Peter ', '089-0877555', 'Berliner Platz 43', NULL, 'München', '', '80805', 'Germany', '', 0, 0, '2014-07-25 16:43:22'),
	(47, 'Franco@vu.com', 'Franco', '+39 022515555', '20093 Cologno Monzese', 'Alessandro Volta 16', 'Milan', '', '', 'Italy', '1401', 34800, 0, '2014-07-25 16:43:22'),
	(48, 'Violeta@vu.com', 'Violeta', '5085552555', '1785 First Street', NULL, 'New Bedford', 'MA', '50553', 'USA', '1216', 85800, 0, '2014-07-25 16:34:38'),
	(49, 'Julie@vu.com', 'Julie', '2035552570', '25593 South Bay Ln.', NULL, 'Bridgewater', 'CT', '97562', 'USA', '1323', 84300, 0, '2014-07-25 16:34:38'),
	(50, 'Dan@vu.com', 'Dan', '2035554407', '2440 Pompton St.', NULL, 'Glendale', 'CT', '97561', 'USA', '1323', 49700, 0, '2014-07-25 16:34:38'),
	(51, 'Juri@vu.com', 'Juri', '6175559555', '8616 Spinnaker Dr.', NULL, 'Boston', 'MA', '51003', 'USA', '1216', 41900, 0, '2014-07-25 16:34:38'),
	(52, 'Helen@vu.com', 'Helen ', '(198) 555-8888', 'Garden House', 'Crowther Way 23', 'Cowes', 'Isle of Wight', 'PO31 7PJ', 'UK', '1501', 93900, 0, '2014-07-25 16:43:22'),
	(53, 'Wales@vu.com', 'Wales', '64-9-3763555', '199 Great North Road', NULL, 'Auckland', '', '', 'New Zealand', '1612', 77700, 0, '2014-07-25 16:43:22'),
	(54, 'Wendy@vu.com', 'Wendy', '+65 224 1555', '106 Linden Road Sandown', '2nd Floor', 'Singapore', '', '069045', 'Singapore', '1612', 97900, 0, '2014-07-25 16:43:22'),
	(55, 'Zbyszek@vu.com', 'Zbyszek ', '(26) 642-7555', 'ul. Filtrowa 68', NULL, 'Warszawa', '', '01-012', 'Poland', '', 0, 0, '2014-07-25 16:43:22'),
	(56, 'Palle@vu.com', 'Palle', '86 21 3555', 'Smagsloget 45', NULL, 'Århus', '', '8200', 'Denmark', '1401', 120800, 0, '2014-07-25 16:43:22'),
	(57, 'Veysel@vu.com', 'Veysel', '+47 2267 3215', 'Brehmen St. 121', 'PR 334 Sentrum', 'Bergen', '', 'N 5804', 'Norway  ', '1504', 96800, 0, '2014-07-25 16:43:22'),
	(58, 'José Pedro@vu.com', 'José Pedro ', '(95) 555 82 82', 'C/ Romero, 33', NULL, 'Sevilla', '', '41101', 'Spain', '1702', 65700, 0, '2014-07-25 16:43:22'),
	(59, 'Tony@vu.com', 'Tony', '+64 9 5555500', 'Arenales 1938 3\'A\'', NULL, 'Auckland  ', '', '', 'New Zealand', '1612', 110000, 0, '2014-07-25 16:43:22'),
	(60, 'Mike@vu.com', 'Mike', '+852 2251 1555', 'Bank of China Tower', '1 Garden Road', 'Central Hong Kong', '', '', 'Hong Kong', '1621', 58600, 0, '2014-07-25 16:43:22'),
	(61, 'Karin@vu.com', 'Karin', '0251-555259', 'Luisenstr. 48', NULL, 'Münster', '', '44087', 'Germany', '', 0, 0, '2014-07-25 16:43:22'),
	(62, 'Alexander@vu.com', 'Alexander ', '+7 812 293 0521', '2 Pobedy Square', NULL, 'Saint Petersburg', '', '196143', 'Russia', '', 0, 0, '2014-07-25 16:43:22'),
	(63, 'Maurizio@vu.com', 'Maurizio ', '0522-556555', 'Strada Provinciale 124', NULL, 'Reggio Emilia', '', '42100', 'Italy', '1401', 121400, 0, '2014-07-25 16:43:22'),
	(64, 'Marie@vu.com', 'Marie', '(1) 42.34.2555', '265, boulevard Charonne', NULL, 'Paris', '', '75012', 'France', '1337', 84300, 0, '2014-07-25 16:43:22'),
	(65, 'Janine@vu.com', 'Janine ', '40.67.8555', '67, rue des Cinquante Otages', NULL, 'Nantes', '', '44000', 'France', '1370', 118200, 0, '2014-07-25 16:43:22'),
	(66, 'Kwai@vu.com', 'Kwai', '2125557818', '897 Long Airport Avenue', NULL, 'NYC', 'NY', '10022', 'USA', '1323', 114900, 0, '2014-07-25 16:34:38'),
	(67, 'Lino@vu.com', 'Lino ', '(1) 354-2555', 'Jardim das rosas n. 32', NULL, 'Lisboa', '', '1675', 'Portugal', '', 0, 0, '2014-07-25 16:43:22'),
	(68, 'Daniel@vu.com', 'Daniel', '+33 1 46 62 7555', '27 rue du Colonel Pierre Avia', NULL, 'Paris', '', '75508', 'France', '1337', 68100, 0, '2014-07-25 16:43:22'),
	(69, 'Laurence@vu.com', 'Laurence ', '91.24.4555', '12, rue des Bouchers', NULL, 'Marseille', '', '13008', 'France', '1337', 65000, 0, '2014-07-25 16:43:22'),
	(70, 'Marta@vu.com', 'Marta', '6175558555', '39323 Spinnaker Dr.', NULL, 'Cambridge', 'MA', '51247', 'USA', '1216', 123700, 0, '2014-07-25 16:34:38'),
	(71, 'Brian@vu.com', 'Brian', '2155554369', '6047 Douglas Av.', NULL, 'Los Angeles', 'CA', '91003', 'USA', '1166', 57700, 0, '2014-07-25 16:34:38'),
	(72, 'Renate@vu.com', 'Renate ', '069-0555984', 'Magazinweg 7', NULL, 'Frankfurt', '', '60528', 'Germany', '', 0, 0, '2014-07-25 16:43:22'),
	(73, 'Yu@vu.com', 'Yu', '2125551957', '5290 North Pendale Street', 'Suite 200', 'NYC', 'NY', '10022', 'USA', '1286', 39800, 0, '2014-07-25 16:34:38'),
	(74, 'Roland@vu.com', 'Roland ', '7675-3555', 'Kirchgasse 6', NULL, 'Graz', '', '8010', 'Austria', '1401', 45300, 0, '2014-07-25 16:43:22'),
	(75, 'Frédérique@vu.com', 'Frédérique ', '88.60.1555', '24, place Kléber', NULL, 'Strasbourg', '', '67000', 'France', '1370', 53800, 0, '2014-07-25 16:43:22'),
	(76, 'Steve@vu.com', 'Steve', '9145554562', '3758 North Pendale Street', NULL, 'White Plains', 'NY', '24067', 'USA', '1323', 102700, 0, '2014-07-25 16:34:38'),
	(77, 'Wing@vu.com', 'Wing', '5085559555', '4575 Hillside Dr.', NULL, 'New Bedford', 'MA', '50553', 'USA', '1188', 94500, 0, '2014-07-25 16:34:38'),
	(78, 'Susan@vu.com', 'Susan', '4155551450', '5677 Strong St.', NULL, 'San Rafael', 'CA', '97562', 'USA', '1165', 210500, 0, '2014-07-25 16:34:38'),
	(79, 'Julie@vu.com', 'Julie', '6505555787', '5557 North Pendale Street', NULL, 'San Francisco', 'CA', '94217', 'USA', '1165', 64600, 0, '2014-07-25 16:34:38'),
	(80, 'Hanna@vu.com', 'Hanna ', '0621-08555', 'Forsterstr. 57', NULL, 'Mannheim', '', '68306', 'Germany', '', 0, 0, '2014-07-25 16:43:22'),
	(81, 'Rosa@vu.com', 'Rosa', '2155559857', '11328 Douglas Av.', NULL, 'Philadelphia', 'PA', '71270', 'USA', '1323', 72600, 0, '2014-07-25 16:34:38'),
	(82, 'Jeff@vu.com', 'Jeff', '2125557413', '4092 Furth Circle', 'Suite 400', 'NYC', 'NY', '10022', 'USA', '1286', 138500, 0, '2014-07-25 16:34:38'),
	(83, 'Horst@vu.com', 'Horst ', '0372-555188', 'Taucherstraße 10', NULL, 'Cunewalde', '', '01307', 'Germany', '', 0, 0, '2014-07-25 16:43:22'),
	(84, 'Jan@vu.com', 'Jan', '+47 2212 1555', 'Drammensveien 126A', 'PB 211 Sentrum', 'Oslo', '', 'N 0106', 'Norway  ', '1504', 95100, 0, '2014-07-25 16:43:22'),
	(85, 'Dorothy@vu.com', 'Dorothy', '6035558647', '2304 Long Airport Avenue', NULL, 'Nashua', 'NH', '62005', 'USA', '1216', 114200, 0, '2014-07-25 16:34:38'),
	(86, 'Miguel@vu.com', 'Miguel', '6175557555', '7635 Spinnaker Dr.', NULL, 'Brickhaven', 'MA', '58339', 'USA', '1188', 68700, 0, '2014-07-25 16:34:38'),
	(87, 'Mory@vu.com', 'Mory', '+81 06 6342 5555', '1-6-20 Dojima', NULL, 'Kita-ku', 'Osaka', ' 530-0003', 'Japan', '1621', 81200, 0, '2014-07-25 16:43:22'),
	(88, 'Pirkko@vu.com', 'Pirkko', '981-443655', 'Torikatu 38', NULL, 'Oulu', '', '90110', 'Finland', '1501', 90500, 0, '2014-07-25 16:43:22'),
	(89, 'Catherine@vu.com', 'Catherine ', '(02) 5554 67', 'Rue Joseph-Bens 532', NULL, 'Bruxelles', '', 'B-1180', 'Belgium', '1401', 79900, 0, '2014-07-25 16:43:22'),
	(90, 'Isabel@vu.com', 'Isabel ', '(1) 356-5555', 'Estrada da saúde n. 58', NULL, 'Lisboa', '', '1756', 'Portugal', '', 0, 0, '2014-07-25 16:43:22'),
	(91, 'Braun@vu.com', 'Braun', '0452-076555', 'Hauptstr. 29', NULL, 'Bern', '', '3012', 'Switzerland', '1702', 0, 0, '2014-07-25 16:43:22'),
	(92, 'Jean@vu.com', 'Jean ', '(514) 555-8054', '43 rue St. Laurent', NULL, 'Montréal', 'Québec', 'H1J 1C3', 'Canada', '1286', 48700, 0, '2014-07-25 16:43:22'),
	(93, 'Raanan@vu.com', 'Raanan', '+ 972 9 959 8555', '3 Hagalim Blv.', NULL, 'Herzlia', '', '47625', 'Israel', '', 0, 0, '2014-07-25 16:43:22'),
	(94, 'Paul@vu.com', 'Paul ', '26.47.1555', '59 rue de l\'Abbaye', NULL, 'Reims', '', '51100', 'France', '1337', 81100, 0, '2014-07-25 16:43:22'),
	(95, 'Giovanni@vu.com', 'Giovanni ', '035-640555', 'Via Ludovico il Moro 22', NULL, 'Bergamo', '', '24100', 'Italy', '1401', 119600, 0, '2014-07-25 16:43:22'),
	(96, 'Elizabeth@vu.com', 'Elizabeth ', '(604) 555-4555', '23 Tsawassen Blvd.', NULL, 'Tsawassen', 'BC', 'T2F 8M4', 'Canada', '1323', 89600, 0, '2014-07-25 16:43:22'),
	(97, 'Pascale@vu.com', 'Pascale ', '(071) 23 67 2555', 'Boulevard Tirou, 255', NULL, 'Charleroi', '', 'B-6000', 'Belgium', '1401', 23500, 0, '2014-07-25 16:43:22'),
	(98, 'Georg@vu.com', 'Georg ', '6562-9555', 'Geislweg 14', NULL, 'Salzburg', '', '5020', 'Austria', '1401', 71700, 0, '2014-07-25 16:43:22'),
	(99, 'Armand@vu.com', 'Armand', '+27 21 550 3555', '1250 Pretorius Street', NULL, 'Hatfield', 'Pretoria', '0028', 'South Africa', '', 0, 0, '2014-07-25 16:43:22'),
	(100, 'Mary@vu.com', 'Mary ', '78.32.5555', '2, rue du Commerce', NULL, 'Lyon', '', '69004', 'France', '1337', 123900, 0, '2014-07-25 16:43:22'),
	(101, 'Martha@vu.com', 'Martha', '0695-34 6555', 'Åkergatan 24', NULL, 'Bräcke', '', 'S-844 67', 'Sweden', '1504', 116400, 0, '2014-07-25 16:43:22'),
	(102, 'Bradley@vu.com', 'Bradley', '+31 20 491 9555', 'Kingsfordweg 151', NULL, 'Amsterdam', '', '1043 GR', 'Netherlands', '', 0, 0, '2014-07-25 16:41:45'),
	(103, 'Sue@vu.com', 'Sue', '4155554312', '2793 Furth Circle', NULL, 'Brisbane', 'CA', '94217', 'USA', '1165', 60300, 0, '2014-07-25 16:34:38'),
	(104, 'Jean@vu.com', 'Jean', '7025551838', '8489 Strong St.', NULL, 'Las Vegas', 'NV', '83030', 'USA', '1166', 71800, 0, '2014-07-25 16:34:38'),
	(105, 'Adrian@vu.com', 'Adrian', '+61 2 9495 8555', 'Monitor Money Building', '815 Pacific Hwy', 'Chatswood', 'NSW', '2067', 'Australia', '1611', 93300, 0, '2014-07-25 16:42:31'),
	(106, 'Rita@vu.com', 'Rita ', '0711-555361', 'Adenauerallee 900', NULL, 'Stuttgart', '', '70563', 'Germany', '', 0, 0, '2014-07-25 16:43:22'),
	(107, 'Ann@vu.com', 'Ann ', '(171) 555-0297', '35 King George', NULL, 'London', '', 'WX3 6FW', 'UK', '1501', 77000, 0, '2014-07-25 16:43:22'),
	(108, 'Kalle@vu.com', 'Kalle', '+358 9 8045 555', 'Software Engineering Center', 'SEC Oy', 'Espoo', '', 'FIN-02271', 'Finland', '1501', 98800, 0, '2014-07-25 16:43:22'),
	(109, 'Leslie@vu.com', 'Leslie', '2035559545', '567 North Pendale Street', NULL, 'New Haven', 'CT', '97823', 'USA', '1286', 95400, 0, '2014-07-25 16:34:38'),
	(110, 'Juri@vu.com', 'Juri', '6505556809', '9408 Furth Circle', NULL, 'Burlingame', 'CA', '94217', 'USA', '1165', 84600, 0, '2014-07-25 16:34:38'),
	(111, 'William@vu.com', 'William', '2015559350', '7476 Moss Rd.', NULL, 'Newark', 'NJ', '94019', 'USA', '1323', 43000, 0, '2014-07-25 16:34:38'),
	(112, 'Sue@vu.com', 'Sue', '4085553659', '3086 Ingle Ln.', NULL, 'San Jose', 'CA', '94217', 'USA', '1165', 77600, 0, '2014-07-25 16:34:38'),
	(113, 'Akiko@vu.com', 'Akiko', '+81 3 3584 0555', '2-2-8 Roppongi', NULL, 'Minato-ku', 'Tokyo', '106-0032', 'Japan', '1621', 94400, 0, '2014-07-25 16:43:22'),
	(114, 'Henriette@vu.com', 'Henriette ', '0221-5554327', 'Mehrheimerstr. 369', NULL, 'Köln', '', '50739', 'Germany', '1504', 120400, 0, '2014-07-25 16:43:22'),
	(115, 'Matti@vu.com', 'Matti', '90-224 8555', 'Keskuskatu 45', NULL, 'Helsinki', '', '21240', 'Finland', '1501', 96500, 0, '2014-07-25 16:43:22'),
	(116, 'Julie@vu.com', 'Julie', '6265557265', '78934 Hillside Dr.', NULL, 'Pasadena', 'CA', '90003', 'USA', '1166', 90700, 0, '2014-07-25 16:34:38'),
	(117, 'Elizabeth@vu.com', 'Elizabeth', '(171) 555-2282', '12, Berkeley Gardens Blvd', NULL, 'Liverpool', '', 'WX1 6LT', 'UK', '1501', 92700, 0, '2014-07-25 16:43:22'),
	(118, 'Mihael@vu.com', 'Mihael', '0897-034555', 'Grenzacherweg 237', NULL, 'Genève', '', '1203', 'Switzerland', '1702', 141300, 0, '2014-07-25 16:43:22'),
	(119, 'Michael@vu.com', 'Michael', '2125551500', '2678 Kingston Rd.', 'Suite 101', 'NYC', 'NY', '10022', 'USA', '1286', 76400, 0, '2014-07-25 16:34:38'),
	(120, 'Christina@vu.com', 'Christina ', '0921-12 3555', 'Berguvsvägen  8', NULL, 'Luleå', '', 'S-958 22', 'Sweden', '1504', 53100, 0, '2014-07-25 16:43:22'),
	(121, 'Sven@vu.com', 'Sven ', '0241-039123', 'Walserweg 21', NULL, 'Aachen', '', '52066', 'Germany', '', 0, 0, '2014-07-25 16:43:22'),
	(122, 'Steve@vu.com', 'Steve', '3105553722', '3675 Furth Circle', NULL, 'Burbank', 'CA', '94019', 'USA', '1166', 55400, 0, '2014-07-25 16:34:38'),
	(123, 'user@vu.com', 'user', '12345678910', '13 downing street', NULL, 'Liverpool', 'California', '07148', 'USA', 'user', NULL, 0, '2014-07-25 16:34:38'),
	(124, '123@123.com', '123', '123456', '123', NULL, '123', '123', '123456', 'Anguilla', '123456', NULL, 0, '2014-07-25 16:43:22'),
	(125, '123@123.com', '123', '123456', '123', NULL, '123', '123', '123456', 'Afghanistan', '123456', NULL, 0, '2014-07-25 16:43:22'),
	(126, '123@12j3.com', '1234', '8476545', '123', NULL, '123', '123', '123456', 'Barbados', '123456', NULL, 0, '2014-07-25 16:43:22'),
	(127, 'user@vu.com', 'user', '123456', 'street1', NULL, 'Houstan', 'California', '01748', 'Georgia', '123456', NULL, 0, '2014-07-25 16:43:22');
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;


-- Dumping structure for table sbdata.employees
DROP TABLE IF EXISTS `employees`;
CREATE TABLE IF NOT EXISTS `employees` (
  `employeeNumber` int(11) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jobTitle` varchar(50) NOT NULL,
  PRIMARY KEY (`employeeNumber`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table sbdata.employees: 23 rows
DELETE FROM `employees`;
/*!40000 ALTER TABLE `employees` DISABLE KEYS */;
INSERT INTO `employees` (`employeeNumber`, `lastName`, `firstName`, `password`, `email`, `jobTitle`) VALUES
	(1002, 'Murphy', 'Diane', 'x5800', 'dmurphy@classicmodelcars.com', 'President'),
	(1056, 'Patterson', 'Mary', 'x4611', 'mpatterso@classicmodelcars.com', 'VP Sales'),
	(1076, 'Firrelli', 'Jeff', 'x9273', 'jfirrelli@classicmodelcars.com', 'VP Marketing'),
	(1088, 'Patterson', 'William', 'x4871', 'wpatterson@classicmodelcars.com', 'Sales Manager (APAC)'),
	(1102, 'Bondur', 'Gerard', 'x5408', 'gbondur@classicmodelcars.com', 'Sale Manager (EMEA)'),
	(1143, 'Bow', 'Anthony', 'x5428', 'abow@classicmodelcars.com', 'Sales Manager (NA)'),
	(1165, 'Jennings', 'Leslie', 'x3291', 'ljennings@classicmodelcars.com', 'Sales Rep'),
	(1166, 'Thompson', 'Leslie', 'x4065', 'lthompson@classicmodelcars.com', 'Sales Rep'),
	(1188, 'Firrelli', 'Julie', 'x2173', 'jfirrelli@classicmodelcars.com', 'Sales Rep'),
	(1216, 'Patterson', 'Steve', 'x4334', 'spatterson@classicmodelcars.com', 'Sales Rep'),
	(1286, 'Tseng', 'Foon Yue', 'x2248', 'ftseng@classicmodelcars.com', 'Sales Rep'),
	(1323, 'Vanauf', 'George', 'x4102', 'gvanauf@classicmodelcars.com', 'Sales Rep'),
	(1337, 'Bondur', 'Loui', 'x6493', 'lbondur@classicmodelcars.com', 'Sales Rep'),
	(1370, 'Hernandez', 'Gerard', 'x2028', 'ghernande@classicmodelcars.com', 'Sales Rep'),
	(1401, 'Castillo', 'Pamela', 'x2759', 'pcastillo@classicmodelcars.com', 'Sales Rep'),
	(1501, 'Bott', 'Larry', 'x2311', 'lbott@classicmodelcars.com', 'Sales Rep'),
	(1504, 'Jones', 'Barry', 'x102', 'bjones@classicmodelcars.com', 'Sales Rep'),
	(1611, 'Fixter', 'Andy', 'x101', 'afixter@classicmodelcars.com', 'Sales Rep'),
	(1612, 'Marsh', 'Peter', 'x102', 'pmarsh@classicmodelcars.com', 'Sales Rep'),
	(1619, 'King', 'Tom', 'x103', 'tking@classicmodelcars.com', 'Sales Rep'),
	(1621, 'Nishi', 'Mami', 'x101', 'mnishi@classicmodelcars.com', 'Sales Rep'),
	(1625, 'Kato', 'Yoshimi', 'x102', 'ykato@classicmodelcars.com', 'Sales Rep'),
	(1702, 'Gerard', 'Martin', 'x2312', 'mgerard@classicmodelcars.com', 'Sales Rep');
/*!40000 ALTER TABLE `employees` ENABLE KEYS */;


-- Dumping structure for table sbdata.orderdetails
DROP TABLE IF EXISTS `orderdetails`;
CREATE TABLE IF NOT EXISTS `orderdetails` (
  `cartID` int(11) NOT NULL AUTO_INCREMENT,
  `orderNumber` varchar(150) NOT NULL,
  `productCode` varchar(15) NOT NULL,
  `checkout` bit(1) NOT NULL DEFAULT b'0',
  `quantityOrdered` int(11) DEFAULT NULL,
  `priceEach` double NOT NULL,
  `customerID` int(11) NOT NULL,
  PRIMARY KEY (`cartID`,`orderNumber`),
  KEY `productCode` (`productCode`),
  KEY `FK_orderdetails_customers` (`customerID`)
) ENGINE=MyISAM AUTO_INCREMENT=199 DEFAULT CHARSET=latin1;

-- Dumping data for table sbdata.orderdetails: 1 rows
DELETE FROM `orderdetails`;
/*!40000 ALTER TABLE `orderdetails` DISABLE KEYS */;
INSERT INTO `orderdetails` (`cartID`, `orderNumber`, `productCode`, `checkout`, `quantityOrdered`, `priceEach`, `customerID`) VALUES
	(198, '1BMWX50120140807233900', 'BMWX501', b'10000000', NULL, 56025, 1),
	(197, '1HUAC0120140807233836', 'HUAC01', b'10000000', NULL, 16645, 1),
	(196, '1HUAC0120140807233439', 'HUAC01', b'10000000', NULL, 16645, 1);
/*!40000 ALTER TABLE `orderdetails` ENABLE KEYS */;


-- Dumping structure for table sbdata.orders
DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `orderNumber` varchar(150) NOT NULL,
  `orderDate` datetime NOT NULL,
  `requiredDate` datetime DEFAULT NULL,
  `shippedDate` datetime DEFAULT NULL,
  `shippingStatus` varchar(15) DEFAULT NULL,
  `shipAddr` varchar(50) DEFAULT NULL,
  `shipMethod` varchar(50) DEFAULT NULL,
  `payMethod` varchar(50) DEFAULT NULL,
  `OrderStatus` text,
  `customerID` int(11) NOT NULL,
  `productCode` varchar(50) NOT NULL,
  PRIMARY KEY (`orderNumber`),
  KEY `customerNumber` (`customerID`),
  KEY `orderNumber` (`orderNumber`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table sbdata.orders: 1 rows
DELETE FROM `orders`;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`orderNumber`, `orderDate`, `requiredDate`, `shippedDate`, `shippingStatus`, `shipAddr`, `shipMethod`, `payMethod`, `OrderStatus`, `customerID`, `productCode`) VALUES
	('1HUAC0120140807233836', '2014-08-07 23:38:41', NULL, NULL, 'Order Placed', '1 rue Alsace-Lorraine', '0', 'Paypal', NULL, 1, 'HUAC01'),
	('1HUAC0120140807233439', '2014-08-07 23:35:05', NULL, NULL, 'Order Placed', '1 rue Alsace-Lorraine', '0', 'Paypal', NULL, 1, 'HUAC01'),
	('1BMWX50120140807233900', '2014-08-07 23:39:16', NULL, NULL, 'Order Placed', 'River side', '0', 'Paypal', NULL, 1, 'BMWX501');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;


-- Dumping structure for table sbdata.payments
DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `customerID` int(11) NOT NULL,
  `paymentDate` date NOT NULL,
  `paymentStatus` varchar(50) NOT NULL,
  `amount` double NOT NULL,
  `orderNumber` varchar(150) NOT NULL,
  PRIMARY KEY (`orderNumber`),
  KEY `FK_payments_orderdetails` (`orderNumber`),
  KEY `customerID` (`customerID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table sbdata.payments: 2 rows
DELETE FROM `payments`;
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
INSERT INTO `payments` (`customerID`, `paymentDate`, `paymentStatus`, `amount`, `orderNumber`) VALUES
	(1, '2014-08-07', 'Paypal', 16645, '1HUAC0120140807233439'),
	(1, '2014-08-07', 'Paypal', 16645, '1HUAC0120140807233836'),
	(1, '2014-08-07', 'Paypal', 56025, '1BMWX50120140807233900');
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;


-- Dumping structure for table sbdata.productlines
DROP TABLE IF EXISTS `productlines`;
CREATE TABLE IF NOT EXISTS `productlines` (
  `productLine` varchar(50) NOT NULL,
  `textDescription` longtext,
  `image` mediumblob,
  `deleted` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`productLine`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table sbdata.productlines: 13 rows
DELETE FROM `productlines`;
/*!40000 ALTER TABLE `productlines` DISABLE KEYS */;
INSERT INTO `productlines` (`productLine`, `textDescription`, `image`, `deleted`) VALUES
	('Hachback', 'A hatchback is a car body configuration with a rear door that swings upward to provide access to a cargo area. Hatchbacks may feature fold-down second row seating, where the interior can be flexibly reconfigured to prioritize passenger vs. cargo volume. Hatchbacks may feature two- or three-box design.				  ', _binary 0x6879756E6461692D6932302D333030783230302E6A7067, b'00000000'),
	('Sedan', 'A sedan /sÉ¨ËˆdÃ¦n/ (American, Canadian, Australian and New Zealand English) or saloon (British and Irish English) is a passenger car in a three-box configuration with A, B & C-pillars and principal volumes articulated in separate compartments for engine, passenger and cargo.[1] The passenger compartment features two rows of seats and adequate passenger space in the rear compartment for adult passengers. The cargo compartment is typically in the rear, with the exception of some rear-engined models, such as the Renault Dauphine, Tatra T613, Volkswagen Type 3 and Chevrolet Corvair. It is one of the most common car body styles					  ', _binary 0x323031335F6B69615F666F7274655F736564616E5F73785F66715F6F656D5F325F3330302E6A7067, b'00000000'),
	('Vintage', 'A vintage car is, in the most general sense, an old automobile, and in the narrower senses of car enthusiasts and collectors, it is a car from the period of 1919 to 1930. Such enthusiasts have categorization schemes for ages of cars that enforce distinctions between antique cars, vintage cars, classic cars, and so on. The classification criteria vary, but consensus within any country is often maintained by major car clubs.		  ', _binary 0x51617461722D436C61737369632D436172732D333030783230302E6A7067, b'00000000'),
	('Station Wagon', 'A station wagon (also known as an estate or estate car) is an automobile with a body style variant of a sedan/saloon with its roof extended rearward over a shared passenger/cargo volume with access at the back via a third or fifth door (the liftgate or tailgate), instead of a trunk lid. The body style transforms a standard three-box design into a two-box designâ€”to include an A, B, and C-pillar, as well as a D-pillar. Station wagons can flexibly reconfigure their interior volume via fold-down rear seats to prioritize either passenger or cargo volume.					  ', _binary 0x33323070782D417564695F41365F4176616E745F322E305F5444495F44616B6F7461677261755F53656974652E4A5047, b'00000000'),
	('Sports cars', 'The term "sports car" does not appear to have a clear definition.[17] It is commonly used to describe vehicles which prioritise acceleration and handling; however, some people claim it is also defined as a vehicle with two seats.[18]\r\nA sports car (sportscar or sport car) is a small, usually two-seat, two-door automobile designed for spirited performance and nimble handling.[19] Sports cars may be spartan or luxurious but high maneuverability and minimum weight are requisite.					  ', _binary 0x6E697373616E5F67742D725F6E69736D6F5F73706F7274735F6361722D333030783230302E6A7067, b'00000000'),
	('Grand tourer', 'Larger, more powerful and heavier than sports cars, these vehicles typically have a FR layout and seating for four passengers (2+2). These are more expensive than sports cars but not as expensive as supercars. Some grand tourers are hand-built.					  ', _binary 0x31313034375F6D2E6A7067, b'00000000'),
	('Supercar', 'Supercar is a term generally used for ultra-high-end exotic cars, whose performance is superior to that of its contemporaries. The proper application of the term is subjective and disputed, especially among enthusiasts.					  ', _binary 0x33303070782D477261795F4C616D626F726768696E695F4C503634302E6A7067, b'00000000'),
	('Muscle car', 'The muscle car term generally refers to rear wheel drive mid-size cars with powerful V8 engines, manufactured in the USA.[21][22] Some people define it as a 2-door vehicle;[23] however, others include 4-door vehicles in the definition.[24] Although opinions vary, it is generally accepted that classic muscle cars were produced in the late 1960s and early 1970s.[25][26][27][28] Muscle cars were also produced in Australia and other nations.					  ', _binary 0x556C74696D6174652D426573742D6F662D53686F772D383830372D333030783230302E6A7067, b'00000000'),
	('Pony car', 'The pony car is a class of American[29] automobile launched and inspired by the Ford Mustang in 1964. It describes an affordable, compact, highly styled car with a sporty or performance-oriented image.					  ', _binary 0x43686576726F6C65742D43616D61726F322D323031342E6A7067, b'00000000'),
	('Roadster', 'A roadster is an open (without a fixed roof or side weather protection) two-seat car with emphasis on sporty handling. While roadsters often have soft-tops, retractable hard-tops are becoming more common.					  ', _binary 0x686F6E64612D73323030302D333030783230302E6A7067, b'00000000'),
	('SUV', 'Sport utility vehicles are off-road vehicles with four-wheel drive and true off-road capability. They most often feature high ground clearance and an upright, boxy body design. Sport Utilities are typically defined by a body on frame construction which offers more off-road capability but reduced on-road ride comfort and handling compared to a cross-over or car based utility vehicle.					  ', _binary 0x323031322D646973636F766572792D342D696E6475732D73696C7665722D333030783230302E6A7067, b'00000000'),
	('Crossover SUV', 'Crossover SUVs are derived from an automobile platform using a monocoque construction with light off-road capability and lower ground clearance than SUVs. They may be styled similar to conventional "off-roaders", or may be look similar to an estate car or station wagon.					  ', _binary 0x31303431365F6D2E6A7067, b'00000000'),
	('MPV', 'Multi Purpose Vehicles are also known as "people carriers", this class of cars resembles tall estate cars. Larger MPVs may have seating for up to eight passengers. (Beyond that size, similar vehicles tend to be derived from vans (see below) and in Europe are called minibuses.)\r\n\r\nBeing taller than a family car improves visibility for the driver (while reducing visibility for other road users) and may help access for the elderly or disabled. They also offer more seats and increased load capacity than hatchbacks or estate cars.					  ', _binary 0x682D6E6F74652D333030783230302E6A7067, b'00000000');
/*!40000 ALTER TABLE `productlines` ENABLE KEYS */;


-- Dumping structure for table sbdata.products
DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `productCode` varchar(15) NOT NULL,
  `productName` varchar(70) NOT NULL,
  `productLine` varchar(50) NOT NULL,
  `productBrand` varchar(10) NOT NULL,
  `productVendor` varchar(50) NOT NULL,
  `productDescription` longtext NOT NULL,
  `quantityInStock` int(11) NOT NULL,
  `buyPrice` double NOT NULL,
  `MSRP` double NOT NULL,
  `ProductImage` longblob,
  `deleted` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`productCode`),
  KEY `productLine` (`productLine`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table sbdata.products: 6 rows
DELETE FROM `products`;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` (`productCode`, `productName`, `productLine`, `productBrand`, `productVendor`, `productDescription`, `quantityInStock`, `buyPrice`, `MSRP`, `ProductImage`, `deleted`) VALUES
	('HUAC01', 'Hundai Accent', 'Hachback', 'Hundai', 'Vamsy', 'Hyundai has pruned its Accent small car range with the previous flagship Premium model being dropped due to its closeness in price to the slightly larger i30 model. Only four variants are now offered, entry-level Active as either hatch or sedan, mid-spec Elite sedan, and the semi-sporty SR hatch.					  ', 210, 16645, 14645, _binary 0x323031332D4879756E6461692D416363656E742E6A7067, b'00000000'),
	('TACS01', 'Tata Aria', 'Crossover SUV', 'Tata', 'Tata Motor Corp.', 'The Tata Aria is a crossover SUV produced by Tata Motors of India. Tata Aria was launched on 5 January 2010 at Auto Expo, Delhi, and was launched to customers on 12 October 2010 and priced at 1 to 1.5 Million Indian Rupees or ($20 to $30K ).[1] The Price of Tata Aria starts from Rs. 9.95 Lakhs.[2] It is based upon the Tata Xover concept showcased in 2006 Geneva Motor Show. Tata Aria was also a series of concept cars introduced by Tata Motors at Geneva Auto Show 2000. 					  ', 12, 24438.157, 26438.157, _binary 0x3836383830303737345F4C535F617269612E676966, b'00000000'),
	('CHEQ01', 'Chevrolet Equinox', 'Crossover SUV', 'Chevrolet', 'Chevrolet', 'The Chevrolet Equinox is a mid-size crossover SUV from Chevrolet based on GM\'s Theta unibody platform, manufactured at CAMI Automotive (formerly a GM/Suzuki joint venture, now wholly owned by GM) plant in Ingersoll, Ontario, Canada, and introduced in 2004 for the 2005 model year.', 11, 21000, 23000, _binary 0x30392D63686576726F6C65742D657175696E6F7873706F72742D30316633342E6A7067, b'00000000'),
	('BMWX501', 'BMW X5', 'SUV', 'BMW', 'BMW', 'The BMW X5 is a midsize luxury SUV (Sport Utility Vehicle) (J-segment in Europe) produced by BMW. The first generation of the X5, with the chassis code E53, made its debut in 1999. It was BMW\'s first SUV (Sport Utility Vehicle), also known as "Four-by-Four" (4x4) in the UK, which featured 4WD all-wheel drive and was available with either manual or automatic transmission. In 2006 the second generation X5 was launched, known internally as the E70, featuring the torque-split capable xDrive all-wheel drive system mated to an automatic transmission, and in 2009 the X5 M performance variant was released as a 2010 model.\r\n\r\nBMW branded the X5 as a Sport Activity Vehicle (SAV) rather than an SUV, to emphasize its on-road ability despite its size. Like the Lexus RX 300, the X5 heralded the shift from light truck-based body-on-frame SUVs to crossovers underpinned by unibody car platforms that would come to fruition in the late 2000s. Among German luxury automakers, while the Mercedes-Benz M-Class had beaten the X5 to the market by a year, the X5 was the first to use a unibody chassis whereas the M-Class used a light truck platform until its second generation. While the Lexus RX is based on the Toyota Camry mass market sedan, the X5 shares its underpinnings with the BMW 5 Series performance luxury sedan.[1][2]\r\n\r\nX5s are manufactured in Greer, South Carolina at the Spartanburg BMW plant and modified for armoured, security versions in Mexico at the BMW de MÃ©xico Toluca plant.[3] Since July 2009, some assembly operations are also performed in Kaliningrad, Russia by Avtotor.\r\n\r\nStarting with the X5, BMW\'s Sport Activity Vehicle (SAV) series has since expanded to be derivatives of other BMW number-series models, first in 2003 with the BMW X3 compact luxury crossover, and then in 2008 with the BMW X6 midsize coupe luxury crossover which shares its platform with the X5.					  ', 13, 56025, 58000, _binary 0x31313435355F6D2E6A7067, b'00000000'),
	('JGXJ01', 'Jaguar XJ', 'Sedan', 'Jaguar', 'Jaguar', 'The Jaguar XJ is the name of a series of flagship, full-size, luxury cars sold by the British automobile company, Jaguar. The XJ line has had a long history, with the first model released in 1968. The original model was the last Jaguar saloon to have had the input of Sir William Lyons, the company\'s founder, and the model has been featured in countless media and high profile appearances. The current Jaguar XJ was launched in 2009. It is one of the official cars of the royal families and UK Prime Minister.					  ', 5, 376000, 386000, _binary 0x4B35573131412E6A7067, b'00000000'),
	('CDXT01', 'Cadillac XTS', 'Sedan', 'Cadillac', 'General Motors', 'The Cadillac XTS is a full-size luxury sedan from the Cadillac brand of General Motors.[1] It is based on an enlarged version of the Epsilon II platform. The XTS replaces both the Cadillac STS and DTS,[2] and is smaller than the DTS but larger than the STS. It began production in May 2012 at the Oshawa Assembly Plant and launched in June. The XTS is available with both front-wheel drive and all-wheel drive.\r\n\r\nFor the Chinese market, the Cadillac XTS is being assembled by Shanghai GM. Production began in February 2013. In addition to the LFX 3.6 V6, Cadillac XTS also comes with an LTG 2.0 turbo engine in the Chinese market. In the Chinese market, the Cadillac XTS with an LFX 3.6 V6 engine is called XTS 36S, and the version with LTG 2.0 turbo engine is called XTS 2.0T. This vehicle may be partially marketed in Europe, though the only LWB car based on the Epsilon II platform sold in Europe was Saab 9-5 which ceased production in 2012.					  ', 0, 52800, 55000, _binary 0x323630345F63726F705F333030783230305F323031335F636164696C6C61635F7874732D322E6A7067, b'00000000');
/*!40000 ALTER TABLE `products` ENABLE KEYS */;


-- Dumping structure for table sbdata.reviews
DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `revID` int(11) NOT NULL AUTO_INCREMENT,
  `Review` longtext NOT NULL,
  `productCode` varchar(50) NOT NULL,
  PRIMARY KEY (`revID`),
  KEY `productCode` (`productCode`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table sbdata.reviews: 1 rows
DELETE FROM `reviews`;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT INTO `reviews` (`revID`, `Review`, `productCode`) VALUES
	(1, 'I doubt that Accent is cheaper to maintain than Alto. Alto has one of the least cost of spares and service.', 'HUAC01');
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
