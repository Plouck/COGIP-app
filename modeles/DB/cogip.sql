-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 29 août 2018 à 13:37
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `cogip`
--

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

DROP TABLE IF EXISTS `facture`;
CREATE TABLE IF NOT EXISTS `facture` (
  `idFacture` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Numero de la commande',
  `date` date NOT NULL,
  `details` text,
  `societe_idSociete` int(11) NOT NULL,
  `personne_idPersonne` int(11) NOT NULL,
  PRIMARY KEY (`idFacture`,`societe_idSociete`,`personne_idPersonne`),
  KEY `fk_facture_societe1_idx` (`societe_idSociete`),
  KEY `fk_facture_personne1_idx` (`personne_idPersonne`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `facture`
--

INSERT INTO `facture` (`idFacture`, `date`, `details`, `societe_idSociete`, `personne_idPersonne`) VALUES
(1, '2018-03-13', '-écran de TV', 4, 5),
(2, '2018-08-22', 'vsdsfqsfdqs', 2, 1);

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

DROP TABLE IF EXISTS `personne`;
CREATE TABLE IF NOT EXISTS `personne` (
  `idPersonne` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `phone` int(10) UNSIGNED ZEROFILL DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `societe_idSociete` int(11) NOT NULL,
  PRIMARY KEY (`idPersonne`,`societe_idSociete`),
  KEY `fk_personne_societe1_idx` (`societe_idSociete`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`idPersonne`, `name`, `firstName`, `phone`, `email`, `societe_idSociete`) VALUES
(1, 'Sakurai', 'Masahiro', 0000021564, 'Masahiro_sakurai@gmail.jpp', 2),
(2, 'Gabe', 'Newell', 0000545656, 'GabeNewell@gmail.us', 6),
(3, 'Trip', 'Hawkins', 0000456465, 'Trip_hawkins@gmail.us', 1),
(4, 'Guillemot', 'Yves', 0000656165, 'Yves_guillemot@hotmail.fr', 3),
(5, 'Nakamura', 'Masaya', 0000156655, 'Masaya_nakamura@bandai.jp', 4),
(6, 'fdsgs', 'fgsd', 0000008785, 'qfsdf,oqjze@gmiod.ge', 5);

-- --------------------------------------------------------

--
-- Structure de la table `societe`
--

DROP TABLE IF EXISTS `societe`;
CREATE TABLE IF NOT EXISTS `societe` (
  `idSociete` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `adresse` varchar(90) NOT NULL,
  `pays` varchar(45) NOT NULL,
  `tva` int(10) UNSIGNED ZEROFILL NOT NULL,
  `phone` int(10) UNSIGNED ZEROFILL NOT NULL,
  `type_idType` int(11) NOT NULL,
  PRIMARY KEY (`idSociete`,`type_idType`),
  KEY `fk_societe_type_idx` (`type_idType`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `societe`
--

INSERT INTO `societe` (`idSociete`, `name`, `adresse`, `pays`, `tva`, `phone`, `type_idType`) VALUES
(1, 'Electronic Arts', 'Redwood City, Californie', 'États-Unis', 0654685654, 0046546546, 1),
(2, 'Nintendo', 'Kyoto, Préfecture de Kyoto', 'Japon', 0001685465, 0001635465, 1),
(3, 'Ubisoft', 'Montreuil', 'France', 0001656516, 0056431541, 1),
(4, 'Bandai-Namco', 'Shinagawa, Tokyo', 'Japon', 0000521632, 0000135541, 1),
(5, 'Steam', 'Bellevue', 'États-Unis', 0000351654, 0000351351, 2),
(6, 'Origin', 'Redwood City', 'États-Unis', 0000021651, 0000035163, 2);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `idType` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) NOT NULL,
  PRIMARY KEY (`idType`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`idType`, `type`) VALUES
(1, 'Fournisseur'),
(2, 'Client');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `fk_facture_personne1` FOREIGN KEY (`personne_idPersonne`) REFERENCES `personne` (`idPersonne`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_facture_societe1` FOREIGN KEY (`societe_idSociete`) REFERENCES `societe` (`idSociete`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `personne`
--
ALTER TABLE `personne`
  ADD CONSTRAINT `fk_personne_societe1` FOREIGN KEY (`societe_idSociete`) REFERENCES `societe` (`idSociete`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `societe`
--
ALTER TABLE `societe`
  ADD CONSTRAINT `fk_societe_type` FOREIGN KEY (`type_idType`) REFERENCES `type` (`idType`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
