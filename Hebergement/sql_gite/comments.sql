-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 17 sep. 2020 à 21:02
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
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `comments` varchar(255) NOT NULL,
  `id_gite` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date_comment` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`comments`, `id_gite`, `id_user`, `date_comment`) VALUES
('mmmmm', 47, 20, '2020-09-17'),
('miam', 47, 20, '2020-09-17'),
('miam', 47, 20, '2020-09-17'),
('Un gout d\'amour <3', 50, 20, '2020-09-17'),
('Super ce gite je le recommande !', 53, 20, '2020-09-17'),
('Super ce gite je le recommande !', 54, 20, '2020-09-17'),
('Super ce gite je le recommande !', 54, 20, '2020-09-17'),
('TTTTOOO', 54, 20, '2020-09-17');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
