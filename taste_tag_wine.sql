-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 15 déc. 2022 à 18:24
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
-- Structure de la table `taste_tag_wine`
--

CREATE TABLE `taste_tag_wine` (
  `id_taste_tag` int(11) NOT NULL,
  `id_wine` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Déchargement des données de la table `taste_tag_wine`
--

INSERT INTO `taste_tag_wine` (`id_taste_tag`, `id_wine`) VALUES
(2, 8),
(6, 8),
(2, 40001),
(8, 40001),
(9, 40002),
(10, 40002),
(2, 40003),
(6, 40003),
(2, 40004),
(8, 40004),
(2, 40005),
(8, 40005),
(11, 40006),
(12, 40006),
(2, 40007),
(11, 40007),
(13, 40007),
(2, 40008),
(11, 40008),
(13, 40008),
(2, 40009),
(11, 40009),
(13, 40009),
(2, 40010),
(11, 40010),
(13, 40010),
(2, 40011),
(11, 40011),
(13, 40011),
(14, 40012),
(14, 40013),
(14, 40014),
(14, 40015),
(14, 40016),
(14, 40017);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `taste_tag_wine`
--
ALTER TABLE `taste_tag_wine`
  ADD KEY `id_taste_tag` (`id_taste_tag`),
  ADD KEY `id_wine` (`id_wine`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
