-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 18 juil. 2024 à 14:38
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
-- Structure de la table `avis`
--

DROP TABLE IF EXISTS `avis`;
CREATE TABLE IF NOT EXISTS `avis` (
  `idCommentaire` int NOT NULL,
  `commentaire` varchar(250) NOT NULL,
  `note` int NOT NULL,
  `idLivre` int NOT NULL,
  `idUtilisateur` int NOT NULL,
  PRIMARY KEY (`idCommentaire`),
  KEY `idLivre` (`idLivre`),
  KEY `idUtilisateur` (`idUtilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

DROP TABLE IF EXISTS `genre`;
CREATE TABLE IF NOT EXISTS `genre` (
  `idGenre` int NOT NULL,
  `genre` varchar(20) NOT NULL,
  PRIMARY KEY (`idGenre`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`idGenre`, `genre`) VALUES
(0, 'Romant'),
(1, 'poesie'),
(2, 'Fantastisque'),
(3, 'Sci-fi');

-- --------------------------------------------------------

--
-- Structure de la table `listegenres`
--

DROP TABLE IF EXISTS `listegenres`;
CREATE TABLE IF NOT EXISTS `listegenres` (
  `idLivre` int NOT NULL,
  `idGenre` int NOT NULL,
  PRIMARY KEY (`idLivre`,`idGenre`),
  KEY `idGenre` (`idGenre`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

DROP TABLE IF EXISTS `livre`;
CREATE TABLE IF NOT EXISTS `livre` (
  `idLivre` int NOT NULL AUTO_INCREMENT,
  `titre` varchar(100) NOT NULL,
  `nomAuteur` varchar(50) NOT NULL,
  `livreContenu` varchar(255) NOT NULL,
  `prenomAuteur` varchar(50) NOT NULL,
  `anneeParution` int NOT NULL,
  `images` varchar(255) NOT NULL,
  `idGenre` int NOT NULL,
  PRIMARY KEY (`idLivre`),
  KEY `idGenre` (`idGenre`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `roleutilisateur`
--

DROP TABLE IF EXISTS `roleutilisateur`;
CREATE TABLE IF NOT EXISTS `roleutilisateur` (
  `idRole` bigint NOT NULL,
  `role` int NOT NULL,
  PRIMARY KEY (`idRole`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `statut`
--

DROP TABLE IF EXISTS `statut`;
CREATE TABLE IF NOT EXISTS `statut` (
  `idStatut` int NOT NULL,
  `statut` varchar(20) NOT NULL,
  PRIMARY KEY (`idStatut`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `idUtilisateur` int NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mdp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `idStatut` int NOT NULL,
  `idRole` bigint NOT NULL,
  PRIMARY KEY (`idUtilisateur`),
  KEY `idStatut` (`idStatut`),
  KEY `idRole` (`idRole`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idUtilisateur`, `pseudo`, `email`, `mdp`, `idStatut`, `idRole`) VALUES
(1, 'Laza', 'LK@lep.fut', '$2y$10$A9yzw68cMpD9FuEU7iRRSeez5dm1WUYfE.OeFGF14Nm', 0, 0),
(2, 'Laza', 'jk@op.com', '$2y$10$xVQpwM2P7PYFMwHNSXDME.7iHikbTLc1Hn.vEh5rgvt', 0, 0),
(3, 'op', 'op@p.fr', '$2y$10$LNJAkI20UO.RHx/Dr0Ey6.pNU9sPp42.yJVZRuY1pzH', 0, 0),
(4, 'i', 'i@i.i', '$2y$10$Eh7ofBnmorIlMG.zkax2KeeGlZjrnvIsuwEMy6r0kOl', 0, 0),
(5, 'u', 'u@u.u', '$2y$10$IO9EqDRFyqyE6EzyYTDbCu5s2.1cuatjV20whN4wzoa', 0, 0),
(6, 't', 't@t.t', '$2y$10$Ez/4eUxFNDX7l3zkdcfFZ.KjDZ6xH6r/jzDEmAnFZB3', 0, 0),
(7, 'e', 'e@e.e', '$2y$10$UqoOnARqUsvr4no4sR7ULe9mqrggX0o3w.fai3EwTSZ', 0, 0),
(8, 'a', 'a@a.a', '$2y$10$/3E4sMcKLA/DYbG4JY5aa.UBsZ7MslnP4Xi2wQ0zh8z', 0, 0),
(9, 'd', 'd@d.d', '$2y$10$MzQt6Vd/2ydhFXD1S9FPLuhIWLA13bhAIJNPDhPsaeumwNRsxiEJ.', 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
