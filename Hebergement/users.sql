-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 11 sep. 2020 à 14:50
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gites_hebergement`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmation_token` varchar(60) DEFAULT NULL,
  `confirmed_at` datetime DEFAULT NULL,
  `role` varchar(5) NOT NULL DEFAULT 'user',
  `reset_token` varchar(60) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `confirmation_token`, `confirmed_at`, `role`, `reset_token`, `reset_at`) VALUES
(20, 'JEREMY', 'jeremvk@outlook.fr', '$2y$10$pwFFjXsVq3BfQVnKvuQBOuLFAbpHz0qzkjzPQKYqfkJYEqdBeqYim', NULL, '2020-09-09 09:24:12', 'user', NULL, '2020-09-11 09:54:55'),
(19, 'Kenji_Yasuo', 'nguyen.kenji83700@gmail.com', '$2y$10$sf6Rkma/cd29to/k.h6QV.xxsEj0tH0HRu/v9GNoWe0aFwBHwRWeq', 'xsBUR1zwcE1SY9Rh6O5rGERtYhFJpRhsHpgWWIktySeuO4zn1z6pFJFoRmZ2', NULL, 'user', NULL, NULL),
(21, 'aaa', 'aaa@aaa.fr', '$2y$10$UidaI86x1iqmdxIw21/jRObKjFuyGj5bEe.5NoBYXBfypFvkPYR3e', 'caAVBDFOsT9mdqcQo5ycJADu6B8rKvbg3P8cUXeYgkQ97kZrXXnG5VzUaNeh', NULL, 'user', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
