-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 01 sep. 2020 à 18:20
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gites_hebergement`
--

-- --------------------------------------------------------

--
-- Structure de la table `gites`
--

CREATE TABLE `gites` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `localisation` varchar(255) NOT NULL,
  `note` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `gites`
--

INSERT INTO `gites` (`id`, `nom`, `localisation`, `note`) VALUES
(1, 'Ecogites du bivosque', 'Bivosque', 5),
(2, 'Ecogite Mercantour', 'Mercantour', 3),
(3, 'Ecogite et yourtes de Villeplane', 'Guillaumes', 4),
(4, 'roxane gîte', 'puget sur argens', 5),
(5, 'Test', 'test', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `gites`
--
ALTER TABLE `gites`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `gites`
--
ALTER TABLE `gites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
