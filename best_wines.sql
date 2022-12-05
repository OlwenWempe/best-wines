-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 05 déc. 2022 à 13:57
-- Version du serveur : 8.0.27
-- Version de PHP : 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `best_wines`
--

-- --------------------------------------------------------

--
-- Structure de la table `accord_tag`
--

DROP TABLE IF EXISTS `accord_tag`;
CREATE TABLE IF NOT EXISTS `accord_tag` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `picture_link` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `id_employee` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_employee` (`id_employee`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

DROP TABLE IF EXISTS `client`;
CREATE TABLE IF NOT EXISTS `client` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `joined_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_role` int NOT NULL,
  `id_ticket_de_vente` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_role` (`id_role`),
  KEY `id_ticket_de_vente` (`id_ticket_de_vente`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `id_product` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_product` (`id_product`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `currencies`
--

DROP TABLE IF EXISTS `currencies`;
CREATE TABLE IF NOT EXISTS `currencies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `country` varchar(58) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `currency` varchar(39) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `code` varchar(14) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `minor_unit` varchar(9) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=267 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `currencies`
--

INSERT INTO `currencies` (`id`, `country`, `currency`, `code`, `minor_unit`) VALUES
(2, 'AFGHANISTAN', 'Afghani', 'AFN', '2'),
(3, 'ÃLAND ISLANDS', 'Euro', 'EUR', '2'),
(4, 'ALBANIA', 'Lek', 'ALL', '2'),
(5, 'ALGERIA', 'Algerian Dinar', 'DZD', '2'),
(6, 'AMERICAN SAMOA', 'US Dollar', 'USD', '2'),
(7, 'ANDORRA', 'Euro', 'EUR', '2'),
(8, 'ANGOLA', 'Kwanza', 'AOA', '2'),
(9, 'ANGUILLA', 'East Caribbean Dollar', 'XCD', '2'),
(10, 'ANTIGUA AND BARBUDA', 'East Caribbean Dollar', 'XCD', '2'),
(11, 'ARGENTINA', 'Argentine Peso', 'ARS', '2'),
(12, 'ARMENIA', 'Armenian Dram', 'AMD', '2'),
(13, 'ARUBA', 'Aruban Florin', 'AWG', '2'),
(14, 'AUSTRALIA', 'Australian Dollar', 'AUD', '2'),
(15, 'AUSTRIA', 'Euro', 'EUR', '2'),
(16, 'AZERBAIJAN', 'Azerbaijan Manat', 'AZN', '2'),
(17, 'BAHAMAS (THE)', 'Bahamian Dollar', 'BSD', '2'),
(18, 'BAHRAIN', 'Bahraini Dinar', 'BHD', '3'),
(19, 'BANGLADESH', 'Taka', 'BDT', '2'),
(20, 'BARBADOS', 'Barbados Dollar', 'BBD', '2'),
(21, 'BELARUS', 'Belarusian Ruble', 'BYN', '2'),
(22, 'BELGIUM', 'Euro', 'EUR', '2'),
(23, 'BELIZE', 'Belize Dollar', 'BZD', '2'),
(24, 'BENIN', 'CFA Franc BCEAO', 'XOF', '0'),
(25, 'BERMUDA', 'Bermudian Dollar', 'BMD', '2'),
(26, 'BHUTAN', 'Indian Rupee', 'INR', '2'),
(27, 'BHUTAN', 'Ngultrum', 'BTN', '2'),
(28, 'BOLIVIA (PLURINATIONAL STATE OF)', 'Boliviano', 'BOB', '2'),
(29, 'BOLIVIA (PLURINATIONAL STATE OF)', 'Mvdol', 'BOV', '2'),
(30, 'BONAIRE, SINT EUSTATIUS AND SABA', 'US Dollar', 'USD', '2'),
(31, 'BOSNIA AND HERZEGOVINA', 'Convertible Mark', 'BAM', '2'),
(32, 'BOTSWANA', 'Pula', 'BWP', '2'),
(33, 'BOUVET ISLAND', 'Norwegian Krone', 'NOK', '2'),
(34, 'BRAZIL', 'Brazilian Real', 'BRL', '2'),
(35, 'BRITISH INDIAN OCEAN TERRITORY (THE)', 'US Dollar', 'USD', '2'),
(36, 'BRUNEI DARUSSALAM', 'Brunei Dollar', 'BND', '2'),
(37, 'BULGARIA', 'Bulgarian Lev', 'BGN', '2'),
(38, 'BURKINA FASO', 'CFA Franc BCEAO', 'XOF', '0'),
(39, 'BURUNDI', 'Burundi Franc', 'BIF', '0'),
(40, 'CABO VERDE', 'Cabo Verde Escudo', 'CVE', '2'),
(41, 'CAMBODIA', 'Riel', 'KHR', '2'),
(42, 'CAMEROON', 'CFA Franc BEAC', 'XAF', '0'),
(43, 'CANADA', 'Canadian Dollar', 'CAD', '2'),
(44, 'CAYMAN ISLANDS (THE)', 'Cayman Islands Dollar', 'KYD', '2'),
(45, 'CENTRAL AFRICAN REPUBLIC (THE)', 'CFA Franc BEAC', 'XAF', '0'),
(46, 'CHAD', 'CFA Franc BEAC', 'XAF', '0'),
(47, 'CHILE', 'Chilean Peso', 'CLP', '0'),
(48, 'CHILE', 'Unidad de Fomento', 'CLF', '4'),
(49, 'CHINA', 'Yuan Renminbi', 'CNY', '2'),
(50, 'CHRISTMAS ISLAND', 'Australian Dollar', 'AUD', '2'),
(51, 'COCOS (KEELING) ISLANDS (THE)', 'Australian Dollar', 'AUD', '2'),
(52, 'COLOMBIA', 'Colombian Peso', 'COP', '2'),
(53, 'COLOMBIA', 'Unidad de Valor Real', 'COU', '2'),
(54, 'COMOROS (THE)', 'Comorian Franc ', 'KMF', '0'),
(55, 'CONGO (THE DEMOCRATIC REPUBLIC OF THE)', 'Congolese Franc', 'CDF', '2'),
(56, 'CONGO (THE)', 'CFA Franc BEAC', 'XAF', '0'),
(57, 'COOK ISLANDS (THE)', 'New Zealand Dollar', 'NZD', '2'),
(58, 'COSTA RICA', 'Costa Rican Colon', 'CRC', '2'),
(59, 'CÃTE D\'IVOIRE', 'CFA Franc BCEAO', 'XOF', '0'),
(60, 'CROATIA', 'Kuna', 'HRK', '2'),
(61, 'CUBA', 'Cuban Peso', 'CUP', '2'),
(62, 'CUBA', 'Peso Convertible', 'CUC', '2'),
(63, 'CURAÃAO', 'Netherlands Antillean Guilder', 'ANG', '2'),
(64, 'CYPRUS', 'Euro', 'EUR', '2'),
(65, 'CZECHIA', 'Czech Koruna', 'CZK', '2'),
(66, 'DENMARK', 'Danish Krone', 'DKK', '2'),
(67, 'DJIBOUTI', 'Djibouti Franc', 'DJF', '0'),
(68, 'DOMINICA', 'East Caribbean Dollar', 'XCD', '2'),
(69, 'DOMINICAN REPUBLIC (THE)', 'Dominican Peso', 'DOP', '2'),
(70, 'ECUADOR', 'US Dollar', 'USD', '2'),
(71, 'EGYPT', 'Egyptian Pound', 'EGP', '2'),
(72, 'EL SALVADOR', 'El Salvador Colon', 'SVC', '2'),
(73, 'EL SALVADOR', 'US Dollar', 'USD', '2'),
(74, 'EQUATORIAL GUINEA', 'CFA Franc BEAC', 'XAF', '0'),
(75, 'ERITREA', 'Nakfa', 'ERN', '2'),
(76, 'ESTONIA', 'Euro', 'EUR', '2'),
(77, 'ESWATINI', 'Lilangeni', 'SZL', '2'),
(78, 'ETHIOPIA', 'Ethiopian Birr', 'ETB', '2'),
(79, 'EUROPEAN UNION', 'Euro', 'EUR', '2'),
(80, 'FALKLAND ISLANDS (THE) [MALVINAS]', 'Falkland Islands Pound', 'FKP', '2'),
(81, 'FAROE ISLANDS (THE)', 'Danish Krone', 'DKK', '2'),
(82, 'FIJI', 'Fiji Dollar', 'FJD', '2'),
(83, 'FINLAND', 'Euro', 'EUR', '2'),
(84, 'FRANCE', 'Euro', 'EUR', '2'),
(85, 'FRENCH GUIANA', 'Euro', 'EUR', '2'),
(86, 'FRENCH POLYNESIA', 'CFP Franc', 'XPF', '0'),
(87, 'FRENCH SOUTHERN TERRITORIES (THE)', 'Euro', 'EUR', '2'),
(88, 'GABON', 'CFA Franc BEAC', 'XAF', '0'),
(89, 'GAMBIA (THE)', 'Dalasi', 'GMD', '2'),
(90, 'GEORGIA', 'Lari', 'GEL', '2'),
(91, 'GERMANY', 'Euro', 'EUR', '2'),
(92, 'GHANA', 'Ghana Cedi', 'GHS', '2'),
(93, 'GIBRALTAR', 'Gibraltar Pound', 'GIP', '2'),
(94, 'GREECE', 'Euro', 'EUR', '2'),
(95, 'GREENLAND', 'Danish Krone', 'DKK', '2'),
(96, 'GRENADA', 'East Caribbean Dollar', 'XCD', '2'),
(97, 'GUADELOUPE', 'Euro', 'EUR', '2'),
(98, 'GUAM', 'US Dollar', 'USD', '2'),
(99, 'GUATEMALA', 'Quetzal', 'GTQ', '2'),
(100, 'GUERNSEY', 'Pound Sterling', 'GBP', '2'),
(101, 'GUINEA', 'Guinean Franc', 'GNF', '0'),
(102, 'GUINEA-BISSAU', 'CFA Franc BCEAO', 'XOF', '0'),
(103, 'GUYANA', 'Guyana Dollar', 'GYD', '2'),
(104, 'HAITI', 'Gourde', 'HTG', '2'),
(105, 'HAITI', 'US Dollar', 'USD', '2'),
(106, 'HEARD ISLAND AND McDONALD ISLANDS', 'Australian Dollar', 'AUD', '2'),
(107, 'HOLY SEE (THE)', 'Euro', 'EUR', '2'),
(108, 'HONDURAS', 'Lempira', 'HNL', '2'),
(109, 'HONG KONG', 'Hong Kong Dollar', 'HKD', '2'),
(110, 'HUNGARY', 'Forint', 'HUF', '2'),
(111, 'ICELAND', 'Iceland Krona', 'ISK', '0'),
(112, 'INDIA', 'Indian Rupee', 'INR', '2'),
(113, 'INDONESIA', 'Rupiah', 'IDR', '2'),
(114, 'INTERNATIONAL MONETARY FUND (IMF)', 'SDR (Special Drawing Right)', 'XDR', '-'),
(115, 'IRAN (ISLAMIC REPUBLIC OF)', 'Iranian Rial', 'IRR', '2'),
(116, 'IRAQ', 'Iraqi Dinar', 'IQD', '3'),
(117, 'IRELAND', 'Euro', 'EUR', '2'),
(118, 'ISLE OF MAN', 'Pound Sterling', 'GBP', '2'),
(119, 'ISRAEL', 'New Israeli Sheqel', 'ILS', '2'),
(120, 'ITALY', 'Euro', 'EUR', '2'),
(121, 'JAMAICA', 'Jamaican Dollar', 'JMD', '2'),
(122, 'JAPAN', 'Yen', 'JPY', '0'),
(123, 'JERSEY', 'Pound Sterling', 'GBP', '2'),
(124, 'JORDAN', 'Jordanian Dinar', 'JOD', '3'),
(125, 'KAZAKHSTAN', 'Tenge', 'KZT', '2'),
(126, 'KENYA', 'Kenyan Shilling', 'KES', '2'),
(127, 'KIRIBATI', 'Australian Dollar', 'AUD', '2'),
(128, 'KOREA (THE DEMOCRATIC PEOPLE\'S REPUBLIC OF)', 'North Korean Won', 'KPW', '2'),
(129, 'KOREA (THE REPUBLIC OF)', 'Won', 'KRW', '0'),
(130, 'KUWAIT', 'Kuwaiti Dinar', 'KWD', '3'),
(131, 'KYRGYZSTAN', 'Som', 'KGS', '2'),
(132, 'LAO PEOPLE\'S DEMOCRATIC REPUBLIC (THE)', 'Lao Kip', 'LAK', '2'),
(133, 'LATVIA', 'Euro', 'EUR', '2'),
(134, 'LEBANON', 'Lebanese Pound', 'LBP', '2'),
(135, 'LESOTHO', 'Loti', 'LSL', '2'),
(136, 'LESOTHO', 'Rand', 'ZAR', '2'),
(137, 'LIBERIA', 'Liberian Dollar', 'LRD', '2'),
(138, 'LIBYA', 'Libyan Dinar', 'LYD', '3'),
(139, 'LIECHTENSTEIN', 'Swiss Franc', 'CHF', '2'),
(140, 'LITHUANIA', 'Euro', 'EUR', '2'),
(141, 'LUXEMBOURG', 'Euro', 'EUR', '2'),
(142, 'MACAO', 'Pataca', 'MOP', '2'),
(143, 'NORTH MACEDONIA', 'Denar', 'MKD', '2'),
(144, 'MADAGASCAR', 'Malagasy Ariary', 'MGA', '2'),
(145, 'MALAWI', 'Malawi Kwacha', 'MWK', '2'),
(146, 'MALAYSIA', 'Malaysian Ringgit', 'MYR', '2'),
(147, 'MALDIVES', 'Rufiyaa', 'MVR', '2'),
(148, 'MALI', 'CFA Franc BCEAO', 'XOF', '0'),
(149, 'MALTA', 'Euro', 'EUR', '2'),
(150, 'MARSHALL ISLANDS (THE)', 'US Dollar', 'USD', '2'),
(151, 'MARTINIQUE', 'Euro', 'EUR', '2'),
(152, 'MAURITANIA', 'Ouguiya', 'MRU', '2'),
(153, 'MAURITIUS', 'Mauritius Rupee', 'MUR', '2'),
(154, 'MAYOTTE', 'Euro', 'EUR', '2'),
(155, 'MEMBER COUNTRIES OF THE AFRICAN DEVELOPMENT BANK GROUP', 'ADB Unit of Account', 'XUA', '-'),
(156, 'MEXICO', 'Mexican Peso', 'MXN', '2'),
(157, 'MEXICO', 'Mexican Unidad de Inversion (UDI)', 'MXV', '2'),
(158, 'MICRONESIA (FEDERATED STATES OF)', 'US Dollar', 'USD', '2'),
(159, 'MOLDOVA (THE REPUBLIC OF)', 'Moldovan Leu', 'MDL', '2'),
(160, 'MONACO', 'Euro', 'EUR', '2'),
(161, 'MONGOLIA', 'Tugrik', 'MNT', '2'),
(162, 'MONTENEGRO', 'Euro', 'EUR', '2'),
(163, 'MONTSERRAT', 'East Caribbean Dollar', 'XCD', '2'),
(164, 'MOROCCO', 'Moroccan Dirham', 'MAD', '2'),
(165, 'MOZAMBIQUE', 'Mozambique Metical', 'MZN', '2'),
(166, 'MYANMAR', 'Kyat', 'MMK', '2'),
(167, 'NAMIBIA', 'Namibia Dollar', 'NAD', '2'),
(168, 'NAMIBIA', 'Rand', 'ZAR', '2'),
(169, 'NAURU', 'Australian Dollar', 'AUD', '2'),
(170, 'NEPAL', 'Nepalese Rupee', 'NPR', '2'),
(171, 'NETHERLANDS (THE)', 'Euro', 'EUR', '2'),
(172, 'NEW CALEDONIA', 'CFP Franc', 'XPF', '0'),
(173, 'NEW ZEALAND', 'New Zealand Dollar', 'NZD', '2'),
(174, 'NICARAGUA', 'Cordoba Oro', 'NIO', '2'),
(175, 'NIGER (THE)', 'CFA Franc BCEAO', 'XOF', '0'),
(176, 'NIGERIA', 'Naira', 'NGN', '2'),
(177, 'NIUE', 'New Zealand Dollar', 'NZD', '2'),
(178, 'NORFOLK ISLAND', 'Australian Dollar', 'AUD', '2'),
(179, 'NORTHERN MARIANA ISLANDS (THE)', 'US Dollar', 'USD', '2'),
(180, 'NORWAY', 'Norwegian Krone', 'NOK', '2'),
(181, 'OMAN', 'Rial Omani', 'OMR', '3'),
(182, 'PAKISTAN', 'Pakistan Rupee', 'PKR', '2'),
(183, 'PALAU', 'US Dollar', 'USD', '2'),
(184, 'PANAMA', 'Balboa', 'PAB', '2'),
(185, 'PANAMA', 'US Dollar', 'USD', '2'),
(186, 'PAPUA NEW GUINEA', 'Kina', 'PGK', '2'),
(187, 'PARAGUAY', 'Guarani', 'PYG', '0'),
(188, 'PERU', 'Sol', 'PEN', '2'),
(189, 'PHILIPPINES (THE)', 'Philippine Peso', 'PHP', '2'),
(190, 'PITCAIRN', 'New Zealand Dollar', 'NZD', '2'),
(191, 'POLAND', 'Zloty', 'PLN', '2'),
(192, 'PORTUGAL', 'Euro', 'EUR', '2'),
(193, 'PUERTO RICO', 'US Dollar', 'USD', '2'),
(194, 'QATAR', 'Qatari Rial', 'QAR', '2'),
(195, 'RÃUNION', 'Euro', 'EUR', '2'),
(196, 'ROMANIA', 'Romanian Leu', 'RON', '2'),
(197, 'RUSSIAN FEDERATION (THE)', 'Russian Ruble', 'RUB', '2'),
(198, 'RWANDA', 'Rwanda Franc', 'RWF', '0'),
(199, 'SAINT BARTHÃLEMY', 'Euro', 'EUR', '2'),
(200, 'SAINT HELENA, ASCENSION AND TRISTAN DA CUNHA', 'Saint Helena Pound', 'SHP', '2'),
(201, 'SAINT KITTS AND NEVIS', 'East Caribbean Dollar', 'XCD', '2'),
(202, 'SAINT LUCIA', 'East Caribbean Dollar', 'XCD', '2'),
(203, 'SAINT MARTIN (FRENCH PART)', 'Euro', 'EUR', '2'),
(204, 'SAINT PIERRE AND MIQUELON', 'Euro', 'EUR', '2'),
(205, 'SAINT VINCENT AND THE GRENADINES', 'East Caribbean Dollar', 'XCD', '2'),
(206, 'SAMOA', 'Tala', 'WST', '2'),
(207, 'SAN MARINO', 'Euro', 'EUR', '2'),
(208, 'SAO TOME AND PRINCIPE', 'Dobra', 'STN', '2'),
(209, 'SAUDI ARABIA', 'Saudi Riyal', 'SAR', '2'),
(210, 'SENEGAL', 'CFA Franc BCEAO', 'XOF', '0'),
(211, 'SERBIA', 'Serbian Dinar', 'RSD', '2'),
(212, 'SEYCHELLES', 'Seychelles Rupee', 'SCR', '2'),
(213, 'SIERRA LEONE', 'Leone', 'SLL', '2'),
(214, 'SINGAPORE', 'Singapore Dollar', 'SGD', '2'),
(215, 'SINT MAARTEN (DUTCH PART)', 'Netherlands Antillean Guilder', 'ANG', '2'),
(216, 'SLOVAKIA', 'Euro', 'EUR', '2'),
(217, 'SLOVENIA', 'Euro', 'EUR', '2'),
(218, 'SOLOMON ISLANDS', 'Solomon Islands Dollar', 'SBD', '2'),
(219, 'SOMALIA', 'Somali Shilling', 'SOS', '2'),
(220, 'SOUTH AFRICA', 'Rand', 'ZAR', '2'),
(221, 'SOUTH SUDAN', 'South Sudanese Pound', 'SSP', '2'),
(222, 'SPAIN', 'Euro', 'EUR', '2'),
(223, 'SRI LANKA', 'Sri Lanka Rupee', 'LKR', '2'),
(224, 'SUDAN (THE)', 'Sudanese Pound', 'SDG', '2'),
(225, 'SURINAME', 'Surinam Dollar', 'SRD', '2'),
(226, 'SVALBARD AND JAN MAYEN', 'Norwegian Krone', 'NOK', '2'),
(227, 'SWEDEN', 'Swedish Krona', 'SEK', '2'),
(228, 'SWITZERLAND', 'Swiss Franc', 'CHF', '2'),
(229, 'SWITZERLAND', 'WIR Euro', 'CHE', '2'),
(230, 'SWITZERLAND', 'WIR Franc', 'CHW', '2'),
(231, 'SYRIAN ARAB REPUBLIC', 'Syrian Pound', 'SYP', '2'),
(232, 'TAIWAN (PROVINCE OF CHINA)', 'New Taiwan Dollar', 'TWD', '2'),
(233, 'TAJIKISTAN', 'Somoni', 'TJS', '2'),
(234, 'TANZANIA, UNITED REPUBLIC OF', 'Tanzanian Shilling', 'TZS', '2'),
(235, 'THAILAND', 'Baht', 'THB', '2'),
(236, 'TIMOR-LESTE', 'US Dollar', 'USD', '2'),
(237, 'TOGO', 'CFA Franc BCEAO', 'XOF', '0'),
(238, 'TOKELAU', 'New Zealand Dollar', 'NZD', '2'),
(239, 'TONGA', 'Pa\'anga', 'TOP', '2'),
(240, 'TRINIDAD AND TOBAGO', 'Trinidad and Tobago Dollar', 'TTD', '2'),
(241, 'TUNISIA', 'Tunisian Dinar', 'TND', '3'),
(242, 'TURKEY', 'Turkish Lira', 'TRY', '2'),
(243, 'TURKMENISTAN', 'Turkmenistan New Manat', 'TMT', '2'),
(244, 'TURKS AND CAICOS ISLANDS (THE)', 'US Dollar', 'USD', '2'),
(245, 'TUVALU', 'Australian Dollar', 'AUD', '2'),
(246, 'UGANDA', 'Uganda Shilling', 'UGX', '0'),
(247, 'UKRAINE', 'Hryvnia', 'UAH', '2'),
(248, 'UNITED ARAB EMIRATES (THE)', 'UAE Dirham', 'AED', '2'),
(249, 'UNITED KINGDOM OF GREAT BRITAIN AND NORTHERN IRELAND (THE)', 'Pound Sterling', 'GBP', '2'),
(250, 'UNITED STATES MINOR OUTLYING ISLANDS (THE)', 'US Dollar', 'USD', '2'),
(251, 'UNITED STATES OF AMERICA (THE)', 'US Dollar', 'USD', '2'),
(252, 'UNITED STATES OF AMERICA (THE)', 'US Dollar (Next day)', 'USN', '2'),
(253, 'URUGUAY', 'Peso Uruguayo', 'UYU', '2'),
(254, 'URUGUAY', 'Uruguay Peso en Unidades Indexadas (UI)', 'UYI', '0'),
(255, 'URUGUAY', 'Unidad Previsional', 'UYW', '4'),
(256, 'UZBEKISTAN', 'Uzbekistan Sum', 'UZS', '2'),
(257, 'VANUATU', 'Vatu', 'VUV', '0'),
(258, 'VENEZUELA (BOLIVARIAN REPUBLIC OF)', 'BolÃ­var Soberano', 'VES', '2'),
(259, 'VIET NAM', 'Dong', 'VND', '0'),
(260, 'VIRGIN ISLANDS (BRITISH)', 'US Dollar', 'USD', '2'),
(261, 'VIRGIN ISLANDS (U.S.)', 'US Dollar', 'USD', '2'),
(262, 'WALLIS AND FUTUNA', 'CFP Franc', 'XPF', '0'),
(263, 'WESTERN SAHARA', 'Moroccan Dirham', 'MAD', '2'),
(264, 'YEMEN', 'Yemeni Rial', 'YER', '2'),
(265, 'ZAMBIA', 'Zambian Kwacha', 'ZMW', '2'),
(266, 'ZIMBABWE', 'Zimbabwe Dollar', 'ZWL', '2');

-- --------------------------------------------------------

--
-- Structure de la table `discount`
--

DROP TABLE IF EXISTS `discount`;
CREATE TABLE IF NOT EXISTS `discount` (
  `id` int NOT NULL AUTO_INCREMENT,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `pourcentage` int NOT NULL,
  `id_user` int NOT NULL,
  `id_product` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `grape_variety`
--

DROP TABLE IF EXISTS `grape_variety`;
CREATE TABLE IF NOT EXISTS `grape_variety` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `ligne_de_vente`
--

DROP TABLE IF EXISTS `ligne_de_vente`;
CREATE TABLE IF NOT EXISTS `ligne_de_vente` (
  `id` int NOT NULL AUTO_INCREMENT,
  `quantity` int NOT NULL,
  `id_article` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_article` (`id_article`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

DROP TABLE IF EXISTS `note`;
CREATE TABLE IF NOT EXISTS `note` (
  `id` int NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `note` int NOT NULL,
  `id_customer` int NOT NULL,
  `id-product` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

DROP TABLE IF EXISTS `pays`;
CREATE TABLE IF NOT EXISTS `pays` (
  `id` smallint UNSIGNED NOT NULL AUTO_INCREMENT,
  `alpha3` varchar(3) NOT NULL,
  `nom_en_gb` varchar(45) NOT NULL,
  `nom_fr_fr` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `alpha3` (`alpha3`)
) ENGINE=MyISAM AUTO_INCREMENT=242 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`id`, `alpha3`, `nom_en_gb`, `nom_fr_fr`) VALUES
(1, 'AFG', 'Afghanistan', 'Afghanistan'),
(2, 'ALB', 'Albania', 'Albanie'),
(3, 'ATA', 'Antarctica', 'Antarctique'),
(4, 'DZA', 'Algeria', 'Algérie'),
(5, 'ASM', 'American Samoa', 'Samoa Américaines'),
(6, 'AND', 'Andorra', 'Andorre'),
(7, 'AGO', 'Angola', 'Angola'),
(8, 'ATG', 'Antigua and Barbuda', 'Antigua-et-Barbuda'),
(9, 'AZE', 'Azerbaijan', 'Azerbaïdjan'),
(10, 'ARG', 'Argentina', 'Argentine'),
(11, 'AUS', 'Australia', 'Australie'),
(12, 'AUT', 'Austria', 'Autriche'),
(13, 'BHS', 'Bahamas', 'Bahamas'),
(14, 'BHR', 'Bahrain', 'Bahreïn'),
(15, 'BGD', 'Bangladesh', 'Bangladesh'),
(16, 'ARM', 'Armenia', 'Arménie'),
(17, 'BRB', 'Barbados', 'Barbade'),
(18, 'BEL', 'Belgium', 'Belgique'),
(19, 'BMU', 'Bermuda', 'Bermudes'),
(20, 'BTN', 'Bhutan', 'Bhoutan'),
(21, 'BOL', 'Bolivia', 'Bolivie'),
(22, 'BIH', 'Bosnia and Herzegovina', 'Bosnie-Herzégovine'),
(23, 'BWA', 'Botswana', 'Botswana'),
(24, 'BVT', 'Bouvet Island', 'Île Bouvet'),
(25, 'BRA', 'Brazil', 'Brésil'),
(26, 'BLZ', 'Belize', 'Belize'),
(27, 'IOT', 'British Indian Ocean Territory', 'Territoire Britannique de l\'Océan Indien'),
(28, 'SLB', 'Solomon Islands', 'Îles Salomon'),
(29, 'VGB', 'British Virgin Islands', 'Îles Vierges Britanniques'),
(30, 'BRN', 'Brunei Darussalam', 'Brunéi Darussalam'),
(31, 'BGR', 'Bulgaria', 'Bulgarie'),
(32, 'MMR', 'Myanmar', 'Myanmar'),
(33, 'BDI', 'Burundi', 'Burundi'),
(34, 'BLR', 'Belarus', 'Bélarus'),
(35, 'KHM', 'Cambodia', 'Cambodge'),
(36, 'CMR', 'Cameroon', 'Cameroun'),
(37, 'CAN', 'Canada', 'Canada'),
(38, 'CPV', 'Cape Verde', 'Cap-vert'),
(39, 'CYM', 'Cayman Islands', 'Îles Caïmanes'),
(40, 'CAF', 'Central African', 'République Centrafricaine'),
(41, 'LKA', 'Sri Lanka', 'Sri Lanka'),
(42, 'TCD', 'Chad', 'Tchad'),
(43, 'CHL', 'Chile', 'Chili'),
(44, 'CHN', 'China', 'Chine'),
(45, 'TWN', 'Taiwan', 'Taïwan'),
(46, 'CXR', 'Christmas Island', 'Île Christmas'),
(47, 'CCK', 'Cocos (Keeling) Islands', 'Îles Cocos (Keeling)'),
(48, 'COL', 'Colombia', 'Colombie'),
(49, 'COM', 'Comoros', 'Comores'),
(50, 'MYT', 'Mayotte', 'Mayotte'),
(51, 'COG', 'Republic of the Congo', 'République du Congo'),
(52, 'COD', 'The Democratic Republic Of The Congo', 'République Démocratique du Congo'),
(53, 'COK', 'Cook Islands', 'Îles Cook'),
(54, 'CRI', 'Costa Rica', 'Costa Rica'),
(55, 'HRV', 'Croatia', 'Croatie'),
(56, 'CUB', 'Cuba', 'Cuba'),
(57, 'CYP', 'Cyprus', 'Chypre'),
(58, 'CZE', 'Czech Republic', 'République Tchèque'),
(59, 'BEN', 'Benin', 'Bénin'),
(60, 'DNK', 'Denmark', 'Danemark'),
(61, 'DMA', 'Dominica', 'Dominique'),
(62, 'DOM', 'Dominican Republic', 'République Dominicaine'),
(63, 'ECU', 'Ecuador', 'Équateur'),
(64, 'SLV', 'El Salvador', 'El Salvador'),
(65, 'GNQ', 'Equatorial Guinea', 'Guinée Équatoriale'),
(66, 'ETH', 'Ethiopia', 'Éthiopie'),
(67, 'ERI', 'Eritrea', 'Érythrée'),
(68, 'EST', 'Estonia', 'Estonie'),
(69, 'FRO', 'Faroe Islands', 'Îles Féroé'),
(70, 'FLK', 'Falkland Islands', 'Îles (malvinas) Falkland'),
(71, 'SGS', 'South Georgia and the South Sandwich Islands', 'Géorgie du Sud et les Îles Sandwich du Sud'),
(72, 'FJI', 'Fiji', 'Fidji'),
(73, 'FIN', 'Finland', 'Finlande'),
(74, 'ALA', 'Åland Islands', 'Îles Åland'),
(75, 'FRA', 'France', 'France'),
(76, 'GUF', 'French Guiana', 'Guyane Française'),
(77, 'PYF', 'French Polynesia', 'Polynésie Française'),
(78, 'ATF', 'French Southern Territories', 'Terres Australes Françaises'),
(79, 'DJI', 'Djibouti', 'Djibouti'),
(80, 'GAB', 'Gabon', 'Gabon'),
(81, 'GEO', 'Georgia', 'Géorgie'),
(82, 'GMB', 'Gambia', 'Gambie'),
(83, 'PSE', 'Occupied Palestinian Territory', 'Territoire Palestinien Occupé'),
(84, 'DEU', 'Germany', 'Allemagne'),
(85, 'GHA', 'Ghana', 'Ghana'),
(86, 'GIB', 'Gibraltar', 'Gibraltar'),
(87, 'KIR', 'Kiribati', 'Kiribati'),
(88, 'GRC', 'Greece', 'Grèce'),
(89, 'GRL', 'Greenland', 'Groenland'),
(90, 'GRD', 'Grenada', 'Grenade'),
(91, 'GLP', 'Guadeloupe', 'Guadeloupe'),
(92, 'GUM', 'Guam', 'Guam'),
(93, 'GTM', 'Guatemala', 'Guatemala'),
(94, 'GIN', 'Guinea', 'Guinée'),
(95, 'GUY', 'Guyana', 'Guyana'),
(96, 'HTI', 'Haiti', 'Haïti'),
(97, 'HMD', 'Heard Island and McDonald Islands', 'Îles Heard et Mcdonald'),
(98, 'VAT', 'Vatican City State', 'Saint-Siège (état de la Cité du Vatican)'),
(99, 'HND', 'Honduras', 'Honduras'),
(100, 'HKG', 'Hong Kong', 'Hong-Kong'),
(101, 'HUN', 'Hungary', 'Hongrie'),
(102, 'ISL', 'Iceland', 'Islande'),
(103, 'IND', 'India', 'Inde'),
(104, 'IDN', 'Indonesia', 'Indonésie'),
(105, 'IRN', 'Islamic Republic of Iran', 'République Islamique d\'Iran'),
(106, 'IRQ', 'Iraq', 'Iraq'),
(107, 'IRL', 'Ireland', 'Irlande'),
(108, 'ISR', 'Israel', 'Israël'),
(109, 'ITA', 'Italy', 'Italie'),
(110, 'CIV', 'Côte d\'Ivoire', 'Côte d\'Ivoire'),
(111, 'JAM', 'Jamaica', 'Jamaïque'),
(112, 'JPN', 'Japan', 'Japon'),
(113, 'KAZ', 'Kazakhstan', 'Kazakhstan'),
(114, 'JOR', 'Jordan', 'Jordanie'),
(115, 'KEN', 'Kenya', 'Kenya'),
(116, 'PRK', 'Democratic People\'s Republic of Korea', 'République Populaire Démocratique de Corée'),
(117, 'KOR', 'Republic of Korea', 'République de Corée'),
(118, 'KWT', 'Kuwait', 'Koweït'),
(119, 'KGZ', 'Kyrgyzstan', 'Kirghizistan'),
(120, 'LAO', 'Lao People\'s Democratic Republic', 'République Démocratique Populaire Lao'),
(121, 'LBN', 'Lebanon', 'Liban'),
(122, 'LSO', 'Lesotho', 'Lesotho'),
(123, 'LVA', 'Latvia', 'Lettonie'),
(124, 'LBR', 'Liberia', 'Libéria'),
(125, 'LBY', 'Libyan Arab Jamahiriya', 'Jamahiriya Arabe Libyenne'),
(126, 'LIE', 'Liechtenstein', 'Liechtenstein'),
(127, 'LTU', 'Lithuania', 'Lituanie'),
(128, 'LUX', 'Luxembourg', 'Luxembourg'),
(129, 'MAC', 'Macao', 'Macao'),
(130, 'MDG', 'Madagascar', 'Madagascar'),
(131, 'MWI', 'Malawi', 'Malawi'),
(132, 'MYS', 'Malaysia', 'Malaisie'),
(133, 'MDV', 'Maldives', 'Maldives'),
(134, 'MLI', 'Mali', 'Mali'),
(135, 'MLT', 'Malta', 'Malte'),
(136, 'MTQ', 'Martinique', 'Martinique'),
(137, 'MRT', 'Mauritania', 'Mauritanie'),
(138, 'MUS', 'Mauritius', 'Maurice'),
(139, 'MEX', 'Mexico', 'Mexique'),
(140, 'MCO', 'Monaco', 'Monaco'),
(141, 'MNG', 'Mongolia', 'Mongolie'),
(142, 'MDA', 'Republic of Moldova', 'République de Moldova'),
(143, 'MSR', 'Montserrat', 'Montserrat'),
(144, 'MAR', 'Morocco', 'Maroc'),
(145, 'MOZ', 'Mozambique', 'Mozambique'),
(146, 'OMN', 'Oman', 'Oman'),
(147, 'NAM', 'Namibia', 'Namibie'),
(148, 'NRU', 'Nauru', 'Nauru'),
(149, 'NPL', 'Nepal', 'Népal'),
(150, 'NLD', 'Netherlands', 'Pays-Bas'),
(151, 'ANT', 'Netherlands Antilles', 'Antilles Néerlandaises'),
(152, 'ABW', 'Aruba', 'Aruba'),
(153, 'NCL', 'New Caledonia', 'Nouvelle-Calédonie'),
(154, 'VUT', 'Vanuatu', 'Vanuatu'),
(155, 'NZL', 'New Zealand', 'Nouvelle-Zélande'),
(156, 'NIC', 'Nicaragua', 'Nicaragua'),
(157, 'NER', 'Niger', 'Niger'),
(158, 'NGA', 'Nigeria', 'Nigéria'),
(159, 'NIU', 'Niue', 'Niué'),
(160, 'NFK', 'Norfolk Island', 'Île Norfolk'),
(161, 'NOR', 'Norway', 'Norvège'),
(162, 'MNP', 'Northern Mariana Islands', 'Îles Mariannes du Nord'),
(163, 'UMI', 'United States Minor Outlying Islands', 'Îles Mineures Éloignées des États-Unis'),
(164, 'FSM', 'Federated States of Micronesia', 'États Fédérés de Micronésie'),
(165, 'MHL', 'Marshall Islands', 'Îles Marshall'),
(166, 'PLW', 'Palau', 'Palaos'),
(167, 'PAK', 'Pakistan', 'Pakistan'),
(168, 'PAN', 'Panama', 'Panama'),
(169, 'PNG', 'Papua New Guinea', 'Papouasie-Nouvelle-Guinée'),
(170, 'PRY', 'Paraguay', 'Paraguay'),
(171, 'PER', 'Peru', 'Pérou'),
(172, 'PHL', 'Philippines', 'Philippines'),
(173, 'PCN', 'Pitcairn', 'Pitcairn'),
(174, 'POL', 'Poland', 'Pologne'),
(175, 'PRT', 'Portugal', 'Portugal'),
(176, 'GNB', 'Guinea-Bissau', 'Guinée-Bissau'),
(177, 'TLS', 'Timor-Leste', 'Timor-Leste'),
(178, 'PRI', 'Puerto Rico', 'Porto Rico'),
(179, 'QAT', 'Qatar', 'Qatar'),
(180, 'REU', 'Réunion', 'Réunion'),
(181, 'ROU', 'Romania', 'Roumanie'),
(182, 'RUS', 'Russian Federation', 'Fédération de Russie'),
(183, 'RWA', 'Rwanda', 'Rwanda'),
(184, 'SHN', 'Saint Helena', 'Sainte-Hélène'),
(185, 'KNA', 'Saint Kitts and Nevis', 'Saint-Kitts-et-Nevis'),
(186, 'AIA', 'Anguilla', 'Anguilla'),
(187, 'LCA', 'Saint Lucia', 'Sainte-Lucie'),
(188, 'SPM', 'Saint-Pierre and Miquelon', 'Saint-Pierre-et-Miquelon'),
(189, 'VCT', 'Saint Vincent and the Grenadines', 'Saint-Vincent-et-les Grenadines'),
(190, 'SMR', 'San Marino', 'Saint-Marin'),
(191, 'STP', 'Sao Tome and Principe', 'Sao Tomé-et-Principe'),
(192, 'SAU', 'Saudi Arabia', 'Arabie Saoudite'),
(193, 'SEN', 'Senegal', 'Sénégal'),
(194, 'SYC', 'Seychelles', 'Seychelles'),
(195, 'SLE', 'Sierra Leone', 'Sierra Leone'),
(196, 'SGP', 'Singapore', 'Singapour'),
(197, 'SVK', 'Slovakia', 'Slovaquie'),
(198, 'VNM', 'Vietnam', 'Viet Nam'),
(199, 'SVN', 'Slovenia', 'Slovénie'),
(200, 'SOM', 'Somalia', 'Somalie'),
(201, 'ZAF', 'South Africa', 'Afrique du Sud'),
(202, 'ZWE', 'Zimbabwe', 'Zimbabwe'),
(203, 'ESP', 'Spain', 'Espagne'),
(204, 'ESH', 'Western Sahara', 'Sahara Occidental'),
(205, 'SDN', 'Sudan', 'Soudan'),
(206, 'SUR', 'Suriname', 'Suriname'),
(207, 'SJM', 'Svalbard and Jan Mayen', 'Svalbard etÎle Jan Mayen'),
(208, 'SWZ', 'Swaziland', 'Swaziland'),
(209, 'SWE', 'Sweden', 'Suède'),
(210, 'CHE', 'Switzerland', 'Suisse'),
(211, 'SYR', 'Syrian Arab Republic', 'République Arabe Syrienne'),
(212, 'TJK', 'Tajikistan', 'Tadjikistan'),
(213, 'THA', 'Thailand', 'Thaïlande'),
(214, 'TGO', 'Togo', 'Togo'),
(215, 'TKL', 'Tokelau', 'Tokelau'),
(216, 'TON', 'Tonga', 'Tonga'),
(217, 'TTO', 'Trinidad and Tobago', 'Trinité-et-Tobago'),
(218, 'ARE', 'United Arab Emirates', 'Émirats Arabes Unis'),
(219, 'TUN', 'Tunisia', 'Tunisie'),
(220, 'TUR', 'Turkey', 'Turquie'),
(221, 'TKM', 'Turkmenistan', 'Turkménistan'),
(222, 'TCA', 'Turks and Caicos Islands', 'Îles Turks et Caïques'),
(223, 'TUV', 'Tuvalu', 'Tuvalu'),
(224, 'UGA', 'Uganda', 'Ouganda'),
(225, 'UKR', 'Ukraine', 'Ukraine'),
(226, 'MKD', 'The Former Yugoslav Republic of Macedonia', 'L\'ex-République Yougoslave de Macédoine'),
(227, 'EGY', 'Egypt', 'Égypte'),
(228, 'GBR', 'United Kingdom', 'Royaume-Uni'),
(229, 'IMN', 'Isle of Man', 'Île de Man'),
(230, 'TZA', 'United Republic Of Tanzania', 'République-Unie de Tanzanie'),
(231, 'USA', 'United States', 'États-Unis'),
(232, 'VIR', 'U.S. Virgin Islands', 'Îles Vierges des États-Unis'),
(233, 'BFA', 'Burkina Faso', 'Burkina Faso'),
(234, 'URY', 'Uruguay', 'Uruguay'),
(235, 'UZB', 'Uzbekistan', 'Ouzbékistan'),
(236, 'VEN', 'Venezuela', 'Venezuela'),
(237, 'WLF', 'Wallis and Futuna', 'Wallis et Futuna'),
(238, 'WSM', 'Samoa', 'Samoa'),
(239, 'YEM', 'Yemen', 'Yémen'),
(240, 'SCG', 'Serbia and Montenegro', 'Serbie-et-Monténégro'),
(241, 'ZMB', 'Zambia', 'Zambie');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `link_picture_mini` varchar(255) DEFAULT NULL,
  `link_picture_max` varchar(255) DEFAULT NULL,
  `prix_d_achat` decimal(2,0) NOT NULL,
  `prix_de_vente` decimal(2,0) NOT NULL,
  `stock` int NOT NULL,
  `id_note` int DEFAULT NULL,
  `id_region` int NOT NULL,
  `id_grape_variety` int NOT NULL,
  `id_type_wine` int NOT NULL,
  `id_taste_tag` int NOT NULL,
  `id_accord_tag` int NOT NULL,
  `id_discount` int DEFAULT NULL,
  `id_supplier` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_note` (`id_note`),
  KEY `id_region` (`id_region`),
  KEY `id_grape_variety` (`id_grape_variety`),
  KEY `id_type_wine` (`id_type_wine`),
  KEY `id_taste_tag` (`id_taste_tag`),
  KEY `id_accord_tag` (`id_accord_tag`),
  KEY `id_discount` (`id_discount`),
  KEY `id_supplier` (`id_supplier`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `promotional_code`
--

DROP TABLE IF EXISTS `promotional_code`;
CREATE TABLE IF NOT EXISTS `promotional_code` (
  `id` int NOT NULL AUTO_INCREMENT,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `name` varchar(12) NOT NULL,
  `percentage` int NOT NULL,
  `id_employee` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `id_employee` (`id_employee`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `purchase_order`
--

DROP TABLE IF EXISTS `purchase_order`;
CREATE TABLE IF NOT EXISTS `purchase_order` (
  `id` int NOT NULL AUTO_INCREMENT,
  `comment` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_delivery` datetime NOT NULL,
  `date_last_update` datetime NOT NULL,
  `id_supplier` int NOT NULL,
  `currency_code` varchar(4) NOT NULL,
  `send` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_supplier` (`id_supplier`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `purchase_order_line`
--

DROP TABLE IF EXISTS `purchase_order_line`;
CREATE TABLE IF NOT EXISTS `purchase_order_line` (
  `id` int NOT NULL AUTO_INCREMENT,
  `quantity` int NOT NULL,
  `id_product` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_product` (`id_product`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

DROP TABLE IF EXISTS `region`;
CREATE TABLE IF NOT EXISTS `region` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `id_country` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_country` (`id_country`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE IF NOT EXISTS `supplier` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `adress` varchar(255) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone_number` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `siren` varchar(14) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `taste_tag`
--

DROP TABLE IF EXISTS `taste_tag`;
CREATE TABLE IF NOT EXISTS `taste_tag` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `ticket_de_vente`
--

DROP TABLE IF EXISTS `ticket_de_vente`;
CREATE TABLE IF NOT EXISTS `ticket_de_vente` (
  `id` int NOT NULL AUTO_INCREMENT,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_ligne_de_vente` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Structure de la table `type_wine`
--

DROP TABLE IF EXISTS `type_wine`;
CREATE TABLE IF NOT EXISTS `type_wine` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
