-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 15 déc. 2022 à 18:25
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
-- Structure de la table `accord_tag_wine`
--

CREATE TABLE `accord_tag_wine` (
  `id_accord_tag` int(11) NOT NULL,
  `id_wine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Déchargement des données de la table `accord_tag_wine`
--

INSERT INTO `accord_tag_wine` (`id_accord_tag`, `id_wine`) VALUES
(2, 8),
(4, 8),
(9, 8),
(11, 8),
(12, 8),
(2, 40001),
(5, 40001),
(11, 40001),
(12, 40001),
(13, 40001),
(2, 40002),
(3, 40002),
(4, 40002),
(8, 40002),
(10, 40002),
(14, 40002),
(2, 40003),
(5, 40003),
(10, 40003),
(11, 40003),
(13, 40003),
(2, 40004),
(4, 40004),
(11, 40004),
(12, 40004),
(13, 40004),
(14, 40004),
(3, 40005),
(4, 40005),
(5, 40005),
(11, 40005),
(13, 40005),
(3, 40006),
(5, 40006),
(7, 40006),
(11, 40006),
(15, 40006),
(3, 40007),
(4, 40007),
(5, 40007),
(7, 40007),
(10, 40007),
(13, 40007),
(15, 40007),
(16, 40007),
(17, 40007),
(18, 40007),
(3, 40008),
(4, 40008),
(5, 40008),
(15, 40008),
(18, 40008),
(3, 40009),
(4, 40009),
(5, 40009),
(7, 40009),
(10, 40009),
(15, 40009),
(17, 40009),
(3, 40010),
(4, 40010),
(5, 40010),
(7, 40010),
(9, 40010),
(15, 40010),
(3, 40011),
(4, 40011),
(7, 40011),
(10, 40011),
(15, 40011),
(5, 40012),
(18, 40012),
(3, 40013),
(4, 40013),
(5, 40013),
(7, 40013),
(10, 40013),
(5, 40014),
(15, 40014),
(17, 40014),
(5, 40015),
(3, 40016),
(5, 40016),
(10, 40016),
(14, 40016),
(15, 40016),
(3, 40017),
(4, 40017),
(5, 40017),
(10, 40017),
(12, 40017),
(15, 40017),
(16, 40017),
(18, 40017);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `accord_tag_wine`
--
ALTER TABLE `accord_tag_wine`
  ADD KEY `id_accord_tag` (`id_accord_tag`),
  ADD KEY `id_wine` (`id_wine`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
