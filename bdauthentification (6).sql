-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mar. 30 juil. 2024 à 12:09
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
-- Base de données : `bdauthentification`
--

-- --------------------------------------------------------

--
-- Structure de la table `application`
--

DROP TABLE IF EXISTS `application`;
CREATE TABLE IF NOT EXISTS `application` (
  `nomAppli` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `bdAppli` varchar(20) NOT NULL,
  `idAppli` int NOT NULL,
  PRIMARY KEY (`idAppli`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `application`
--

INSERT INTO `application` (`nomAppli`, `bdAppli`, `idAppli`) VALUES
('Gestion du parc animalier', 'bdanimaux', 1),
('Gestion des ateliers', 'bdateliers', 2);

-- --------------------------------------------------------

--
-- Structure de la table `esthabilite`
--

DROP TABLE IF EXISTS `esthabilite`;
CREATE TABLE IF NOT EXISTS `esthabilite` (
  `numMatriculePerso` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `idAppli` int NOT NULL,
  `idRoleAppli` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`numMatriculePerso`,`idAppli`,`idRoleAppli`),
  KEY `idAppli` (`idAppli`,`idRoleAppli`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `esthabilite`
--

INSERT INTO `esthabilite` (`numMatriculePerso`, `idAppli`, `idRoleAppli`) VALUES
('2', 2, 'atelier_superviseur');

-- --------------------------------------------------------

--
-- Structure de la table `personnel`
--

DROP TABLE IF EXISTS `personnel`;
CREATE TABLE IF NOT EXISTS `personnel` (
  `numMatriculePerso` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `melPerso` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `mdpPerso` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `nomPerso` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `prenomPerso` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `dateNaissancePerso` date DEFAULT NULL,
  `adresseVille` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `adresseRue` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `adressePostale` int DEFAULT NULL,
  `telPerso` int DEFAULT NULL,
  `numService` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`numMatriculePerso`),
  UNIQUE KEY `melPerso` (`melPerso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `personnel`
--

INSERT INTO `personnel` (`numMatriculePerso`, `melPerso`, `mdpPerso`, `nomPerso`, `prenomPerso`, `dateNaissancePerso`, `adresseVille`, `adresseRue`, `adressePostale`, `telPerso`, `numService`) VALUES
('1', 'laurentdupont@exemple.com', 'xxxx', 'Dupont', 'Laurent', '1967-11-03', 'Strasbourg', '10 rue Guérin', 67000, 603752985, '100'),
('2', 'adrienschmitt@expemple.com', 'zzz', 'Schmitt', 'Adrien', '1970-05-09', 'Colmar', '5 rue de la Gare', 68000, 644527820, '45'),
('3', 'luciepinaud@exemple.com', 'xyz', 'Pinaud', 'Lucie', '1985-09-11', 'Strabourg', '5 rue Khun', 67000, 603894256, '89');

-- --------------------------------------------------------

--
-- Structure de la table `roleapplicatif`
--

DROP TABLE IF EXISTS `roleapplicatif`;
CREATE TABLE IF NOT EXISTS `roleapplicatif` (
  `idAppli` int NOT NULL,
  `idRoleAppli` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mdpRoleAppli` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`idAppli`,`idRoleAppli`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `roleapplicatif`
--

INSERT INTO `roleapplicatif` (`idAppli`, `idRoleAppli`, `mdpRoleAppli`) VALUES
(2, 'atelier_superviseur', 'zzzzzz');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `esthabilite`
--
ALTER TABLE `esthabilite`
  ADD CONSTRAINT `EstHabilite_ibfk_1` FOREIGN KEY (`numMatriculePerso`) REFERENCES `personnel` (`numMatriculePerso`),
  ADD CONSTRAINT `EstHabilite_ibfk_2` FOREIGN KEY (`idAppli`,`idRoleAppli`) REFERENCES `roleapplicatif` (`idAppli`, `idRoleAppli`);

--
-- Contraintes pour la table `roleapplicatif`
--
ALTER TABLE `roleapplicatif`
  ADD CONSTRAINT `roleapplicatif_ibfk_1` FOREIGN KEY (`idAppli`) REFERENCES `application` (`idAppli`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
