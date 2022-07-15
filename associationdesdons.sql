-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 15 juil. 2022 à 04:59
-- Version du serveur :  5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `associationdesdons`
--

-- --------------------------------------------------------

--
-- Structure de la table `association`
--

DROP TABLE IF EXISTS `association`;
CREATE TABLE IF NOT EXISTS `association` (
  `idAssociation` int(11) NOT NULL AUTO_INCREMENT,
  `nomAssociation` varchar(50) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `region_idRegion` int(11) NOT NULL,
  PRIMARY KEY (`idAssociation`),
  UNIQUE KEY `idRegion` (`region_idRegion`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `association`
--

INSERT INTO `association` (`idAssociation`, `nomAssociation`, `adresse`, `region_idRegion`) VALUES
(1, 'Association1', 'montréal', 1),
(2, 'Association2', 'laval', 2);

-- --------------------------------------------------------

--
-- Structure de la table `don`
--

DROP TABLE IF EXISTS `don`;
CREATE TABLE IF NOT EXISTS `don` (
  `idDon` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `montant` int(11) NOT NULL,
  `idDonateur` int(11) NOT NULL,
  `Association_idAssociation` int(11) NOT NULL,
  PRIMARY KEY (`idDon`),
  KEY `fk_Don_Donateur1_idx` (`idDonateur`),
  KEY `fk_Don_Association1_idx` (`Association_idAssociation`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `donateur`
--

DROP TABLE IF EXISTS `donateur`;
CREATE TABLE IF NOT EXISTS `donateur` (
  `idDonateur` int(10) NOT NULL AUTO_INCREMENT,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) DEFAULT NULL,
  `adresse` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idDonateur`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `donateur`
--

INSERT INTO `donateur` (`idDonateur`, `nom`, `prenom`, `adresse`) VALUES
(1, 'yamina', 'aberbour', 'aberbouryamina@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

DROP TABLE IF EXISTS `region`;
CREATE TABLE IF NOT EXISTS `region` (
  `idRegion` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  PRIMARY KEY (`idRegion`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `region`
--

INSERT INTO `region` (`idRegion`, `nom`) VALUES
(1, 'montréal'),
(2, 'laval');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
