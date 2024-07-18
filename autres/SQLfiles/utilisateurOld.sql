-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 18 juil. 2024 à 06:59
-- Version du serveur : 8.2.0
-- Version de PHP : 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `quartier_lib`
--

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `idUtilisateur` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mdp` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `idStatut` int NOT NULL,
  `idRole` bigint NOT NULL,
  PRIMARY KEY (`idUtilisateur`),
  KEY `idStatut` (`idStatut`),
  KEY `idRole` (`idRole`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idUtilisateur`, `pseudo`, `email`, `mdp`, `idStatut`, `idRole`) VALUES
(1, 'LazMan', 'lz@joke.com', '0000', 1, 1),
(2, 'kl', 'kl@po.com', '$2y$10$4AbRkTH1Epbn67fvkxbdEulLHYeGn/s.qB91g8p3Ld9', 0, 0),
(3, 'lp', 'tipi@tip.com', '$2y$10$6XxpmGg.wRJZNBpnnjlKcexTaLhLxXOyqV1TZ0wVc.E', 0, 0),
(4, 'poi', 'poipo@po.lk', '$2y$10$2d1.8k6x8h.euBF1F2NzIOk9s1cnwAslGB8RmNw1/Pk', 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
