-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 04 Juin 2015 à 12:09
-- Version du serveur: 5.5.41-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `mabase`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE IF NOT EXISTS `annonce` (
  `id_annonce` int(11) NOT NULL AUTO_INCREMENT,
  `codepostal` int(5) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `region` varchar(20) NOT NULL,
  `nom` varchar(12) NOT NULL,
  `mail` varchar(320) NOT NULL,
  `tel` tinyint(10) NOT NULL,
  `titre` text NOT NULL,
  `photo_annonce` blob NOT NULL,
  `variete` varchar(20) NOT NULL,
  `texte` text NOT NULL,
  `quantite` float NOT NULL,
  `prix` float NOT NULL,
  `date_ajout` datetime NOT NULL,
  `id_cat_annonce` int(11) NOT NULL,
  `id_cat_produit` int(11) NOT NULL,
  PRIMARY KEY (`id_annonce`),
  KEY `Secondary` (`id_cat_annonce`),
  KEY `id_cat_produit` (`id_cat_produit`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `annonce`
--

INSERT INTO `annonce` (`id_annonce`, `codepostal`, `ville`, `region`, `nom`, `mail`, `tel`, `titre`, `photo_annonce`, `variete`, `texte`, `quantite`, `prix`, `date_ajout`, `id_cat_annonce`, `id_cat_produit`) VALUES
(1, 75014, 'PARIS', 'Ile de France', 'benjamin', 'dubus.benjamin1@gmail.com', 127, 'topinembourg', 0x494d475f303331322e4a5047, '', '      bla', 0, 50, '0000-00-00 00:00:00', 1, 0),
(2, 75014, 'PARIS', 'Ile de France', 'benjamin', 'dubus.benjamin1@gmail.com', 127, 'tomates', 0x494d475f303331332e4a5047, '', 'pas cher', 0, 2, '2015-05-19 01:57:36', 2, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
