-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 09 déc. 2022 à 11:56
-- Version du serveur : 10.4.24-MariaDB
-- Version de PHP : 8.0.19

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

CREATE TABLE `accord_tag` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `accord_tag_wine`
--

CREATE TABLE `accord_tag_wine` (
  `id_accord_tag` int(11) NOT NULL,
  `id_wine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `picture_link` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `city` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `joined_at` datetime NOT NULL DEFAULT current_timestamp(),
  `id_ticket_de_vente` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `coffret`
--

CREATE TABLE `coffret` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `link_picture_mini` varchar(255) NOT NULL,
  `link_picture_max` varchar(255) NOT NULL,
  `prix_d_achat` int(8) NOT NULL,
  `prix_de_vente` int(8) NOT NULL,
  `stock` int(8) NOT NULL,
  `id_discount` int(11) NOT NULL,
  `id_coffret_detail` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Structure de la table `coffret_detail`
--

CREATE TABLE `coffret_detail` (
  `id_wine` int(11) NOT NULL,
  `id_coffret` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `id_wine` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `currencies`
--

CREATE TABLE `currencies` (
  `id` int(11) NOT NULL,
  `country` varchar(58) DEFAULT NULL,
  `currency` varchar(39) DEFAULT NULL,
  `code` varchar(14) DEFAULT NULL,
  `minor_unit` varchar(9) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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

CREATE TABLE `discount` (
  `id` int(11) NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `pourcentage` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `id_wine` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ligne_de_vente`
--

CREATE TABLE `ligne_de_vente` (
  `id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `id_wine` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `note` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_wine` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `pays`
--

CREATE TABLE `pays` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `alpha3` varchar(3) NOT NULL,
  `nom_en_gb` varchar(45) NOT NULL,
  `nom_fr_fr` varchar(45) NOT NULL,
  `id_currencies` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `pays`
--

INSERT INTO `pays` (`id`, `alpha3`, `nom_en_gb`, `nom_fr_fr`, `id_currencies`) VALUES
(1, 'AFG', 'Afghanistan', 'Afghanistan', 0),
(2, 'ALB', 'Albania', 'Albanie', 0),
(3, 'ATA', 'Antarctica', 'Antarctique', 0),
(4, 'DZA', 'Algeria', 'Algérie', 0),
(5, 'ASM', 'American Samoa', 'Samoa Américaines', 0),
(6, 'AND', 'Andorra', 'Andorre', 0),
(7, 'AGO', 'Angola', 'Angola', 0),
(8, 'ATG', 'Antigua and Barbuda', 'Antigua-et-Barbuda', 0),
(9, 'AZE', 'Azerbaijan', 'Azerbaïdjan', 0),
(10, 'ARG', 'Argentina', 'Argentine', 0),
(11, 'AUS', 'Australia', 'Australie', 0),
(12, 'AUT', 'Austria', 'Autriche', 0),
(13, 'BHS', 'Bahamas', 'Bahamas', 0),
(14, 'BHR', 'Bahrain', 'Bahreïn', 0),
(15, 'BGD', 'Bangladesh', 'Bangladesh', 0),
(16, 'ARM', 'Armenia', 'Arménie', 0),
(17, 'BRB', 'Barbados', 'Barbade', 0),
(18, 'BEL', 'Belgium', 'Belgique', 0),
(19, 'BMU', 'Bermuda', 'Bermudes', 0),
(20, 'BTN', 'Bhutan', 'Bhoutan', 0),
(21, 'BOL', 'Bolivia', 'Bolivie', 0),
(22, 'BIH', 'Bosnia and Herzegovina', 'Bosnie-Herzégovine', 0),
(23, 'BWA', 'Botswana', 'Botswana', 0),
(24, 'BVT', 'Bouvet Island', 'Île Bouvet', 0),
(25, 'BRA', 'Brazil', 'Brésil', 0),
(26, 'BLZ', 'Belize', 'Belize', 0),
(27, 'IOT', 'British Indian Ocean Territory', 'Territoire Britannique de l\'Océan Indien', 0),
(28, 'SLB', 'Solomon Islands', 'Îles Salomon', 0),
(29, 'VGB', 'British Virgin Islands', 'Îles Vierges Britanniques', 0),
(30, 'BRN', 'Brunei Darussalam', 'Brunéi Darussalam', 0),
(31, 'BGR', 'Bulgaria', 'Bulgarie', 0),
(32, 'MMR', 'Myanmar', 'Myanmar', 0),
(33, 'BDI', 'Burundi', 'Burundi', 0),
(34, 'BLR', 'Belarus', 'Bélarus', 0),
(35, 'KHM', 'Cambodia', 'Cambodge', 0),
(36, 'CMR', 'Cameroon', 'Cameroun', 0),
(37, 'CAN', 'Canada', 'Canada', 0),
(38, 'CPV', 'Cape Verde', 'Cap-vert', 0),
(39, 'CYM', 'Cayman Islands', 'Îles Caïmanes', 0),
(40, 'CAF', 'Central African', 'République Centrafricaine', 0),
(41, 'LKA', 'Sri Lanka', 'Sri Lanka', 0),
(42, 'TCD', 'Chad', 'Tchad', 0),
(43, 'CHL', 'Chile', 'Chili', 0),
(44, 'CHN', 'China', 'Chine', 0),
(45, 'TWN', 'Taiwan', 'Taïwan', 0),
(46, 'CXR', 'Christmas Island', 'Île Christmas', 0),
(47, 'CCK', 'Cocos (Keeling) Islands', 'Îles Cocos (Keeling)', 0),
(48, 'COL', 'Colombia', 'Colombie', 0),
(49, 'COM', 'Comoros', 'Comores', 0),
(50, 'MYT', 'Mayotte', 'Mayotte', 0),
(51, 'COG', 'Republic of the Congo', 'République du Congo', 0),
(52, 'COD', 'The Democratic Republic Of The Congo', 'République Démocratique du Congo', 0),
(53, 'COK', 'Cook Islands', 'Îles Cook', 0),
(54, 'CRI', 'Costa Rica', 'Costa Rica', 0),
(55, 'HRV', 'Croatia', 'Croatie', 0),
(56, 'CUB', 'Cuba', 'Cuba', 0),
(57, 'CYP', 'Cyprus', 'Chypre', 0),
(58, 'CZE', 'Czech Republic', 'République Tchèque', 0),
(59, 'BEN', 'Benin', 'Bénin', 0),
(60, 'DNK', 'Denmark', 'Danemark', 0),
(61, 'DMA', 'Dominica', 'Dominique', 0),
(62, 'DOM', 'Dominican Republic', 'République Dominicaine', 0),
(63, 'ECU', 'Ecuador', 'Équateur', 0),
(64, 'SLV', 'El Salvador', 'El Salvador', 0),
(65, 'GNQ', 'Equatorial Guinea', 'Guinée Équatoriale', 0),
(66, 'ETH', 'Ethiopia', 'Éthiopie', 0),
(67, 'ERI', 'Eritrea', 'Érythrée', 0),
(68, 'EST', 'Estonia', 'Estonie', 0),
(69, 'FRO', 'Faroe Islands', 'Îles Féroé', 0),
(70, 'FLK', 'Falkland Islands', 'Îles (malvinas) Falkland', 0),
(71, 'SGS', 'South Georgia and the South Sandwich Islands', 'Géorgie du Sud et les Îles Sandwich du Sud', 0),
(72, 'FJI', 'Fiji', 'Fidji', 0),
(73, 'FIN', 'Finland', 'Finlande', 0),
(74, 'ALA', 'Åland Islands', 'Îles Åland', 0),
(75, 'FRA', 'France', 'France', 0),
(76, 'GUF', 'French Guiana', 'Guyane Française', 0),
(77, 'PYF', 'French Polynesia', 'Polynésie Française', 0),
(78, 'ATF', 'French Southern Territories', 'Terres Australes Françaises', 0),
(79, 'DJI', 'Djibouti', 'Djibouti', 0),
(80, 'GAB', 'Gabon', 'Gabon', 0),
(81, 'GEO', 'Georgia', 'Géorgie', 0),
(82, 'GMB', 'Gambia', 'Gambie', 0),
(83, 'PSE', 'Occupied Palestinian Territory', 'Territoire Palestinien Occupé', 0),
(84, 'DEU', 'Germany', 'Allemagne', 0),
(85, 'GHA', 'Ghana', 'Ghana', 0),
(86, 'GIB', 'Gibraltar', 'Gibraltar', 0),
(87, 'KIR', 'Kiribati', 'Kiribati', 0),
(88, 'GRC', 'Greece', 'Grèce', 0),
(89, 'GRL', 'Greenland', 'Groenland', 0),
(90, 'GRD', 'Grenada', 'Grenade', 0),
(91, 'GLP', 'Guadeloupe', 'Guadeloupe', 0),
(92, 'GUM', 'Guam', 'Guam', 0),
(93, 'GTM', 'Guatemala', 'Guatemala', 0),
(94, 'GIN', 'Guinea', 'Guinée', 0),
(95, 'GUY', 'Guyana', 'Guyana', 0),
(96, 'HTI', 'Haiti', 'Haïti', 0),
(97, 'HMD', 'Heard Island and McDonald Islands', 'Îles Heard et Mcdonald', 0),
(98, 'VAT', 'Vatican City State', 'Saint-Siège (état de la Cité du Vatican)', 0),
(99, 'HND', 'Honduras', 'Honduras', 0),
(100, 'HKG', 'Hong Kong', 'Hong-Kong', 0),
(101, 'HUN', 'Hungary', 'Hongrie', 0),
(102, 'ISL', 'Iceland', 'Islande', 0),
(103, 'IND', 'India', 'Inde', 0),
(104, 'IDN', 'Indonesia', 'Indonésie', 0),
(105, 'IRN', 'Islamic Republic of Iran', 'République Islamique d\'Iran', 0),
(106, 'IRQ', 'Iraq', 'Iraq', 0),
(107, 'IRL', 'Ireland', 'Irlande', 0),
(108, 'ISR', 'Israel', 'Israël', 0),
(109, 'ITA', 'Italy', 'Italie', 0),
(110, 'CIV', 'Côte d\'Ivoire', 'Côte d\'Ivoire', 0),
(111, 'JAM', 'Jamaica', 'Jamaïque', 0),
(112, 'JPN', 'Japan', 'Japon', 0),
(113, 'KAZ', 'Kazakhstan', 'Kazakhstan', 0),
(114, 'JOR', 'Jordan', 'Jordanie', 0),
(115, 'KEN', 'Kenya', 'Kenya', 0),
(116, 'PRK', 'Democratic People\'s Republic of Korea', 'République Populaire Démocratique de Corée', 0),
(117, 'KOR', 'Republic of Korea', 'République de Corée', 0),
(118, 'KWT', 'Kuwait', 'Koweït', 0),
(119, 'KGZ', 'Kyrgyzstan', 'Kirghizistan', 0),
(120, 'LAO', 'Lao People\'s Democratic Republic', 'République Démocratique Populaire Lao', 0),
(121, 'LBN', 'Lebanon', 'Liban', 0),
(122, 'LSO', 'Lesotho', 'Lesotho', 0),
(123, 'LVA', 'Latvia', 'Lettonie', 0),
(124, 'LBR', 'Liberia', 'Libéria', 0),
(125, 'LBY', 'Libyan Arab Jamahiriya', 'Jamahiriya Arabe Libyenne', 0),
(126, 'LIE', 'Liechtenstein', 'Liechtenstein', 0),
(127, 'LTU', 'Lithuania', 'Lituanie', 0),
(128, 'LUX', 'Luxembourg', 'Luxembourg', 0),
(129, 'MAC', 'Macao', 'Macao', 0),
(130, 'MDG', 'Madagascar', 'Madagascar', 0),
(131, 'MWI', 'Malawi', 'Malawi', 0),
(132, 'MYS', 'Malaysia', 'Malaisie', 0),
(133, 'MDV', 'Maldives', 'Maldives', 0),
(134, 'MLI', 'Mali', 'Mali', 0),
(135, 'MLT', 'Malta', 'Malte', 0),
(136, 'MTQ', 'Martinique', 'Martinique', 0),
(137, 'MRT', 'Mauritania', 'Mauritanie', 0),
(138, 'MUS', 'Mauritius', 'Maurice', 0),
(139, 'MEX', 'Mexico', 'Mexique', 0),
(140, 'MCO', 'Monaco', 'Monaco', 0),
(141, 'MNG', 'Mongolia', 'Mongolie', 0),
(142, 'MDA', 'Republic of Moldova', 'République de Moldova', 0),
(143, 'MSR', 'Montserrat', 'Montserrat', 0),
(144, 'MAR', 'Morocco', 'Maroc', 0),
(145, 'MOZ', 'Mozambique', 'Mozambique', 0),
(146, 'OMN', 'Oman', 'Oman', 0),
(147, 'NAM', 'Namibia', 'Namibie', 0),
(148, 'NRU', 'Nauru', 'Nauru', 0),
(149, 'NPL', 'Nepal', 'Népal', 0),
(150, 'NLD', 'Netherlands', 'Pays-Bas', 0),
(151, 'ANT', 'Netherlands Antilles', 'Antilles Néerlandaises', 0),
(152, 'ABW', 'Aruba', 'Aruba', 0),
(153, 'NCL', 'New Caledonia', 'Nouvelle-Calédonie', 0),
(154, 'VUT', 'Vanuatu', 'Vanuatu', 0),
(155, 'NZL', 'New Zealand', 'Nouvelle-Zélande', 0),
(156, 'NIC', 'Nicaragua', 'Nicaragua', 0),
(157, 'NER', 'Niger', 'Niger', 0),
(158, 'NGA', 'Nigeria', 'Nigéria', 0),
(159, 'NIU', 'Niue', 'Niué', 0),
(160, 'NFK', 'Norfolk Island', 'Île Norfolk', 0),
(161, 'NOR', 'Norway', 'Norvège', 0),
(162, 'MNP', 'Northern Mariana Islands', 'Îles Mariannes du Nord', 0),
(163, 'UMI', 'United States Minor Outlying Islands', 'Îles Mineures Éloignées des États-Unis', 0),
(164, 'FSM', 'Federated States of Micronesia', 'États Fédérés de Micronésie', 0),
(165, 'MHL', 'Marshall Islands', 'Îles Marshall', 0),
(166, 'PLW', 'Palau', 'Palaos', 0),
(167, 'PAK', 'Pakistan', 'Pakistan', 0),
(168, 'PAN', 'Panama', 'Panama', 0),
(169, 'PNG', 'Papua New Guinea', 'Papouasie-Nouvelle-Guinée', 0),
(170, 'PRY', 'Paraguay', 'Paraguay', 0),
(171, 'PER', 'Peru', 'Pérou', 0),
(172, 'PHL', 'Philippines', 'Philippines', 0),
(173, 'PCN', 'Pitcairn', 'Pitcairn', 0),
(174, 'POL', 'Poland', 'Pologne', 0),
(175, 'PRT', 'Portugal', 'Portugal', 0),
(176, 'GNB', 'Guinea-Bissau', 'Guinée-Bissau', 0),
(177, 'TLS', 'Timor-Leste', 'Timor-Leste', 0),
(178, 'PRI', 'Puerto Rico', 'Porto Rico', 0),
(179, 'QAT', 'Qatar', 'Qatar', 0),
(180, 'REU', 'Réunion', 'Réunion', 0),
(181, 'ROU', 'Romania', 'Roumanie', 0),
(182, 'RUS', 'Russian Federation', 'Fédération de Russie', 0),
(183, 'RWA', 'Rwanda', 'Rwanda', 0),
(184, 'SHN', 'Saint Helena', 'Sainte-Hélène', 0),
(185, 'KNA', 'Saint Kitts and Nevis', 'Saint-Kitts-et-Nevis', 0),
(186, 'AIA', 'Anguilla', 'Anguilla', 0),
(187, 'LCA', 'Saint Lucia', 'Sainte-Lucie', 0),
(188, 'SPM', 'Saint-Pierre and Miquelon', 'Saint-Pierre-et-Miquelon', 0),
(189, 'VCT', 'Saint Vincent and the Grenadines', 'Saint-Vincent-et-les Grenadines', 0),
(190, 'SMR', 'San Marino', 'Saint-Marin', 0),
(191, 'STP', 'Sao Tome and Principe', 'Sao Tomé-et-Principe', 0),
(192, 'SAU', 'Saudi Arabia', 'Arabie Saoudite', 0),
(193, 'SEN', 'Senegal', 'Sénégal', 0),
(194, 'SYC', 'Seychelles', 'Seychelles', 0),
(195, 'SLE', 'Sierra Leone', 'Sierra Leone', 0),
(196, 'SGP', 'Singapore', 'Singapour', 0),
(197, 'SVK', 'Slovakia', 'Slovaquie', 0),
(198, 'VNM', 'Vietnam', 'Viet Nam', 0),
(199, 'SVN', 'Slovenia', 'Slovénie', 0),
(200, 'SOM', 'Somalia', 'Somalie', 0),
(201, 'ZAF', 'South Africa', 'Afrique du Sud', 0),
(202, 'ZWE', 'Zimbabwe', 'Zimbabwe', 0),
(203, 'ESP', 'Spain', 'Espagne', 0),
(204, 'ESH', 'Western Sahara', 'Sahara Occidental', 0),
(205, 'SDN', 'Sudan', 'Soudan', 0),
(206, 'SUR', 'Suriname', 'Suriname', 0),
(207, 'SJM', 'Svalbard and Jan Mayen', 'Svalbard etÎle Jan Mayen', 0),
(208, 'SWZ', 'Swaziland', 'Swaziland', 0),
(209, 'SWE', 'Sweden', 'Suède', 0),
(210, 'CHE', 'Switzerland', 'Suisse', 0),
(211, 'SYR', 'Syrian Arab Republic', 'République Arabe Syrienne', 0),
(212, 'TJK', 'Tajikistan', 'Tadjikistan', 0),
(213, 'THA', 'Thailand', 'Thaïlande', 0),
(214, 'TGO', 'Togo', 'Togo', 0),
(215, 'TKL', 'Tokelau', 'Tokelau', 0),
(216, 'TON', 'Tonga', 'Tonga', 0),
(217, 'TTO', 'Trinidad and Tobago', 'Trinité-et-Tobago', 0),
(218, 'ARE', 'United Arab Emirates', 'Émirats Arabes Unis', 0),
(219, 'TUN', 'Tunisia', 'Tunisie', 0),
(220, 'TUR', 'Turkey', 'Turquie', 0),
(221, 'TKM', 'Turkmenistan', 'Turkménistan', 0),
(222, 'TCA', 'Turks and Caicos Islands', 'Îles Turks et Caïques', 0),
(223, 'TUV', 'Tuvalu', 'Tuvalu', 0),
(224, 'UGA', 'Uganda', 'Ouganda', 0),
(225, 'UKR', 'Ukraine', 'Ukraine', 0),
(226, 'MKD', 'The Former Yugoslav Republic of Macedonia', 'L\'ex-République Yougoslave de Macédoine', 0),
(227, 'EGY', 'Egypt', 'Égypte', 0),
(228, 'GBR', 'United Kingdom', 'Royaume-Uni', 0),
(229, 'IMN', 'Isle of Man', 'Île de Man', 0),
(230, 'TZA', 'United Republic Of Tanzania', 'République-Unie de Tanzanie', 0),
(231, 'USA', 'United States', 'États-Unis', 0),
(232, 'VIR', 'U.S. Virgin Islands', 'Îles Vierges des États-Unis', 0),
(233, 'BFA', 'Burkina Faso', 'Burkina Faso', 0),
(234, 'URY', 'Uruguay', 'Uruguay', 0),
(235, 'UZB', 'Uzbekistan', 'Ouzbékistan', 0),
(236, 'VEN', 'Venezuela', 'Venezuela', 0),
(237, 'WLF', 'Wallis and Futuna', 'Wallis et Futuna', 0),
(238, 'WSM', 'Samoa', 'Samoa', 0),
(239, 'YEM', 'Yemen', 'Yémen', 0),
(240, 'SCG', 'Serbia and Montenegro', 'Serbie-et-Monténégro', 0),
(241, 'ZMB', 'Zambia', 'Zambie', 0);

-- --------------------------------------------------------

--
-- Structure de la table `promotional_code`
--

CREATE TABLE `promotional_code` (
  `id` int(11) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `name` varchar(12) NOT NULL,
  `percentage` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `date_delivery` datetime NOT NULL,
  `date_last_update` datetime NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `currency_code` varchar(4) NOT NULL,
  `send` tinyint(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `purchase_order_line`
--

CREATE TABLE `purchase_order_line` (
  `id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `id_wine` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE `region` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_pays` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `photo_optionnelle` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `adress` varchar(255) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `city` varchar(255) NOT NULL,
  `id_pays` int(11) NOT NULL,
  `phone_number` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `siren` varchar(14) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `taste_tag`
--

CREATE TABLE `taste_tag` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `taste_tag_wine`
--

CREATE TABLE `taste_tag_wine` (
  `id_taste_tag` int(11) NOT NULL,
  `id_wine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Structure de la table `ticket_de_vente`
--

CREATE TABLE `ticket_de_vente` (
  `id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `id_ligne_de_vente` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `type_wine`
--

CREATE TABLE `type_wine` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `wine`
--

CREATE TABLE `wine` (
  `id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `grape_variety` varchar(255) NOT NULL,
  `link_picture_mini` varchar(255) DEFAULT NULL,
  `link_picture_max` varchar(255) DEFAULT NULL,
  `prix_d_achat` decimal(5,2) NOT NULL,
  `prix_de_vente` decimal(5,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `id_note` int(11) DEFAULT NULL,
  `id_region` int(11) NOT NULL,
  `id_type_wine` int(11) NOT NULL,
  `id_taste_tag` int(11) NOT NULL,
  `id_accord_tag` int(11) NOT NULL,
  `id_discount` int(11) DEFAULT NULL,
  `id_supplier` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `accord_tag`
--
ALTER TABLE `accord_tag`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `accord_tag_wine`
--
ALTER TABLE `accord_tag_wine`
  ADD KEY `id_accord_tag` (`id_accord_tag`),
  ADD KEY `id_wine` (`id_wine`);

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_employee` (`id_admin`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ticket_de_vente` (`id_ticket_de_vente`);

--
-- Index pour la table `coffret`
--
ALTER TABLE `coffret`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_discount` (`id_discount`),
  ADD KEY `id_product` (`id_coffret_detail`);

--
-- Index pour la table `coffret_detail`
--
ALTER TABLE `coffret_detail`
  ADD KEY `id_wine` (`id_wine`),
  ADD KEY `id_coffret` (`id_coffret`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_wine`);

--
-- Index pour la table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ligne_de_vente`
--
ALTER TABLE `ligne_de_vente`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_article` (`id_wine`);

--
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alpha3` (`alpha3`),
  ADD KEY `id_currencies` (`id_currencies`);

--
-- Index pour la table `promotional_code`
--
ALTER TABLE `promotional_code`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `id_employee` (`id_admin`);

--
-- Index pour la table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- Index pour la table `purchase_order_line`
--
ALTER TABLE `purchase_order_line`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_wine`);

--
-- Index pour la table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_country` (`id_pays`);

--
-- Index pour la table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_pays` (`id_pays`);

--
-- Index pour la table `taste_tag`
--
ALTER TABLE `taste_tag`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `taste_tag_wine`
--
ALTER TABLE `taste_tag_wine`
  ADD KEY `id_taste_tag` (`id_taste_tag`),
  ADD KEY `id_wine` (`id_wine`);

--
-- Index pour la table `ticket_de_vente`
--
ALTER TABLE `ticket_de_vente`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `type_wine`
--
ALTER TABLE `type_wine`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `wine`
--
ALTER TABLE `wine`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_note` (`id_note`),
  ADD KEY `id_region` (`id_region`),
  ADD KEY `id_type_wine` (`id_type_wine`),
  ADD KEY `id_taste_tag` (`id_taste_tag`),
  ADD KEY `id_accord_tag` (`id_accord_tag`),
  ADD KEY `id_discount` (`id_discount`),
  ADD KEY `id_supplier` (`id_supplier`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `accord_tag`
--
ALTER TABLE `accord_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `coffret`
--
ALTER TABLE `coffret`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=267;

--
-- AUTO_INCREMENT pour la table `discount`
--
ALTER TABLE `discount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ligne_de_vente`
--
ALTER TABLE `ligne_de_vente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pays`
--
ALTER TABLE `pays`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT pour la table `promotional_code`
--
ALTER TABLE `promotional_code`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `purchase_order_line`
--
ALTER TABLE `purchase_order_line`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `taste_tag`
--
ALTER TABLE `taste_tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ticket_de_vente`
--
ALTER TABLE `ticket_de_vente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `type_wine`
--
ALTER TABLE `type_wine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `wine`
--
ALTER TABLE `wine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
