-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 05 sep. 2024 à 20:45
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_bibliotheque`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrator`
--

DROP TABLE IF EXISTS `administrator`;
CREATE TABLE IF NOT EXISTS `administrator` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `code` varchar(200) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `administrator`
--

INSERT INTO `administrator` (`id`, `name`, `code`, `email`, `password`) VALUES
(1, 'admin', 'SECURITY', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `books`
--

DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `Descriptions` text,
  `id_admin` int NOT NULL DEFAULT '1',
  `profil` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_admin` (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `Descriptions`, `id_admin`, `profil`) VALUES
(1, 'Hubs', 'Nasaina', 'jeune développeur ', 1, '/Lofi-Desktop-Man-Studying.png'),
(2, 'Nata', 'Nas', 'jeune IGGLIA', 1, '/Anime-Girl2.png'),
(3, 'La Dona', 'Denis', 'Livre d\'histoire de femme Ameriquaine', 1, '/112190493.webp'),
(4, 'Le Tombeau des Lucioles ', 'Asakusa', 'Histoire de deux enfants orphelins durant la guerre au japon', 1, '/toombeau.jpg'),
(5, 'Le Vent se Lève ', 'Yjachi', 'Histoire Romantique de 2 personnes qui se revois sur le coup du destin après avoirs pris leur route ', 1, '/le-vent-se-leve-affiche.jpg'),
(6, 'José Le Tigre et Les Poissons', 'Neijiro', 'Histoir de rencontre entre 2 personnes qui se sont tombeux amoureux l\'un de l\'autre au fils du temps', 1, '/jose.jpg'),
(7, 'Your Name', 'Ichimaru', 'Histoire entre des personnes du présent et du futur en interaction grâce au sentiment ', 1, '/images.jpg'),
(8, 'I Want to eat Your Pancreas', 'Itochii', 'Histoire d\'un ados au port de la mort vivre pleinement sa vie', 1, '/je-veux-manger-ton-pancreas-dvd-anime.webp'),
(9, 'Marvel\'s Books', 'Peter', 'Histoire de Heros fantaisiste pour tous type de Héros ', 1, '/farany.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `books_command`
--

DROP TABLE IF EXISTS `books_command`;
CREATE TABLE IF NOT EXISTS `books_command` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_books` int NOT NULL,
  `id_command` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_books` (`id_books`),
  KEY `id_command` (`id_command`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `books_command`
--

INSERT INTO `books_command` (`id`, `id_books`, `id_command`) VALUES
(1, 1, 1),
(2, 3, 2),
(3, 5, 3);

-- --------------------------------------------------------

--
-- Structure de la table `command`
--

DROP TABLE IF EXISTS `command`;
CREATE TABLE IF NOT EXISTS `command` (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_user` int NOT NULL,
  `id_admin` int NOT NULL DEFAULT '1',
  `duration` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_user` (`id_user`),
  KEY `id_admin` (`id_admin`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `command`
--

INSERT INTO `command` (`id`, `id_user`, `id_admin`, `duration`) VALUES
(1, 1, 1, '2024-09-03'),
(2, 2, 1, '2024-09-04'),
(3, 1, 1, '2024-09-04');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'nasaina', 'nasaina@gmail.com', '1234'),
(2, 'fiankinana', 'fy@gmail.com', 'azerty'),
(3, 'ando', 'ando@gmail.com', '12345'),
(4, 'nas', 'nas@gmail.com', 'azerty'),
(5, 'hubs', 'hubs@gmail.com', 'wxcv'),
(6, 'hubs', 'hubs@gmail.com', 'wxcv'),
(7, 'hubs', 'hubs@gmail.com', 'wxcv'),
(10, 'fadhel', 'fadhel@gmail.com', 'qsdfg'),
(11, 'Lova', 'Lova@gmail.com', 'AZERTY'),
(12, 'Mendrika', 'Mendrika@gmail.com', 'Mendrika');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
