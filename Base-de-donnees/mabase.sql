-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 07 Mai 2015 à 11:26
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bdlebiocoin`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

CREATE TABLE IF NOT EXISTS `adresse` (
  `id_adresse` int(11) NOT NULL AUTO_INCREMENT,
  `ville` varchar(255) NOT NULL,
  `code_postal` int(11) NOT NULL,
  `region` varchar(255) NOT NULL,
  PRIMARY KEY (`id_adresse`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE IF NOT EXISTS `annonce` (
  `id_annonce` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_annonce`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `categorie_a`
--

CREATE TABLE IF NOT EXISTS `categorie_a` (
  `id_categoriea` int(11) NOT NULL AUTO_INCREMENT,
  `nom_categoriea` varchar(255) NOT NULL,
  PRIMARY KEY (`id_categoriea`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `categorie_produit`
--

CREATE TABLE IF NOT EXISTS `categorie_produit` (
  `id_categoriep` int(11) NOT NULL AUTO_INCREMENT,
  `nom_categoriep` varchar(255) NOT NULL,
  PRIMARY KEY (`id_categoriep`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `categorie_sujet`
--

CREATE TABLE IF NOT EXISTS `categorie_sujet` (
  `id_categoriesujet` int(11) NOT NULL AUTO_INCREMENT,
  `nom_categoriesujet` varchar(255) NOT NULL,
  PRIMARY KEY (`id_categoriesujet`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `forum`
--

CREATE TABLE IF NOT EXISTS `forum` (
  `id_forum` int(11) NOT NULL AUTO_INCREMENT,
  `nom_forum` varchar(255) NOT NULL,
  PRIMARY KEY (`id_forum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE IF NOT EXISTS `membre` (
  `id_membre` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(12) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `adressemail` varchar(320) CHARACTER SET ascii NOT NULL,
  `motdepasse1` varchar(12) NOT NULL,
  `motdepasse2` varchar(12) NOT NULL,
  `ville` varchar(60) NOT NULL,
  `region` varchar(30) NOT NULL,
  `photo` blob NOT NULL,
  `case` char(1) NOT NULL,
  PRIMARY KEY (`id_membre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `prenom`, `nom`, `adressemail`, `motdepasse1`, `motdepasse2`, `ville`, `region`, `photo`, `case`) VALUES
(13, 'stellina', 'epanda', 'dupontjean@gmail.com', '1233333', '33333', 'paris', '699145449', 0x316163366363332e6a7067, 'o'),
(14, '', '', 'dupontjean@gmail.com', '', '', '', '0', '', ''),
(15, '', '', 'dupontjean@gmail.com', '', '', '', '0', '', 'o'),
(16, 'aude', 'ddd', 'oppp@gmail.com', 'nnnnnnnnnnn', 'nnnnnnnnn', 'jjjjjjj', '699145449', 0x316163366363332e6a7067, 'o'),
(17, 'ff', 'fff', 'dupontjean@gmail.com', '', '', 'ff', '699145449', 0x316163366363332e6a7067, 'o'),
(18, 'stellina', 'ddd', 'dupontjean@gmail.com', 'jjjjj', 'jjjjj', 'kjj', '699145449', 0x316163366363332e6a7067, 'o'),
(19, 'stellina', 'fff', 'dupontjean@gmail.com', 'eeee', 'jjjj', 'paris', '699145449', 0x316163366363332e6a7067, 'o'),
(20, 'kkkk', 'ikikkk', 'dupontjean@gmail.com', 'eeee', 'kkkk', 'kkk ', '0', 0x31303037323031323436392e6a7067, 'o'),
(21, '', '', 'dupontjean@gmail.com', 'eeee', '', '', '0', '', ''),
(22, '', '', 'dupontjean@gmail.com', 'eeee', '', '', '0', '', ''),
(23, 'ggggggg', 'kjjjjj', 'stell@gmail.com', 'eeeeff', 'ffff', 'paris', '699145449', 0x316163366363332e6a7067, 'o'),
(24, 'aude', 'ddd', 'dupontjean@gmail.com', 'eeeekkkkkk', 'kkkkkkkkkk', 'paris', '699145449', 0x316163366363332e6a7067, 'o'),
(25, 'aude', 'ddd', 'dupontjean@gmail.com', 'eeee', 'kkk', 'paris', '699145449', 0x316163366363332e6a7067, 'o');

-- --------------------------------------------------------

--
-- Structure de la table `message_forum`
--

CREATE TABLE IF NOT EXISTS `message_forum` (
  `id_messagef` int(11) NOT NULL AUTO_INCREMENT,
  `texte_mf` text NOT NULL,
  PRIMARY KEY (`id_messagef`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `message_prive`
--

CREATE TABLE IF NOT EXISTS `message_prive` (
  `id_message` int(11) NOT NULL AUTO_INCREMENT,
  `texte_mp` text NOT NULL,
  PRIMARY KEY (`id_message`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `id_produit` int(11) NOT NULL AUTO_INCREMENT,
  `nom_produit` varchar(255) NOT NULL,
  `genre` varchar(255) NOT NULL,
  `Prix` varchar(255) NOT NULL,
  `Quantite_disponible` int(11) NOT NULL,
  PRIMARY KEY (`id_produit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `sujet_forum`
--

CREATE TABLE IF NOT EXISTS `sujet_forum` (
  `id_sujetforum` int(11) NOT NULL AUTO_INCREMENT,
  `nom_sujetforum` varchar(255) NOT NULL,
  PRIMARY KEY (`id_sujetforum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
