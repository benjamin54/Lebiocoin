-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 19 Mai 2015 à 02:07
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `mabase`
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
  `codepostal` int(5) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `region` varchar(20) NOT NULL,
  `nom` varchar(12) NOT NULL,
  `mail` varchar(320) NOT NULL,
  `tel` tinyint(10) NOT NULL,
  `titre` text NOT NULL,
  `photo_annonce` blob NOT NULL,
  `texte` text NOT NULL,
  `prix` float NOT NULL,
  `date_ajout` datetime NOT NULL,
  PRIMARY KEY (`id_annonce`)  
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `annonce`
--

INSERT INTO `annonce` (`id_annonce`, `codepostal`, `ville`, `region`, `nom`, `mail`, `tel`, `titre`, `photo_annonce`, `texte`, `prix`, `date_ajout`) VALUES
(1, 75014, 'PARIS', 'Ile de France', 'benjamin', 'dubus.benjamin1@gmail.com', 127, 'topinembourg', 0x494d475f303331322e4a5047, '      bla', 50, '0000-00-00 00:00:00'),
(2, 75014, 'PARIS', 'Ile de France', 'benjamin', 'dubus.benjamin1@gmail.com', 127, 'tomates', 0x494d475f303331332e4a5047, 'pas cher', 2, '2015-05-19 01:57:36');

-- --------------------------------------------------------

--
-- Structure de la table `categorie_a`
--

CREATE TABLE IF NOT EXISTS `categorie_a` (
  `id_categoriea` int(11) NOT NULL AUTO_INCREMENT,
  `nom_categoriea` varchar(255) NOT NULL,
  PRIMARY KEY (`id_categoriea`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 

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
  `num` int(10) NOT NULL,
  `photo` blob NOT NULL,
  PRIMARY KEY (`id_membre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=89 ;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `prenom`, `nom`, `adressemail`, `motdepasse1`, `motdepasse2`, `ville`, `num`, `photo`) VALUES
(64, 'jj', 'jj', 'jj', 'kk', 'kk', 'kk', 0, 0x31313039383336315f313338353331303330313739353830395f313130333733363337365f612e6a7067),
(65, 'll', 'ddd', 'l@hk.fr', 'll', 'kk', 'kk', 0, ''),
(66, 'stellina', 'ddd', 'dupontjean@gmail.com', 'zz', 'zz', 'paris', 699145449, ''),
(67, 'stellina', 'ddd', 'dupontjean@gmail.com', 'e', 'e', 'paris', 699145449, ''),
(68, 'stellina', 'ddd', 'dupontjean@gmail.com', 'e', 'e', 'paris', 699145449, ''),
(69, 'stellina', 'ddd', 'dupontjean@gmail.com', 'e', 'e', 'paris', 699145449, ''),
(70, 'stellina', 'ddd', 'dupontjean@gmail.com', 'ee', 'ee', 'paris', 699145449, ''),
(71, 'stellina', 'ddd', 'dupontjean@gmail.com', 'e', 'e', 'paris', 699145449, ''),
(72, 'jj', 'stell', 'dupontjean@gmail.com', 'jj', 'jj', 'paris', 0, ''),
(73, 'po', 'stell', 'dupontjean@gmail.com', 'jj', 'kk', 'paris', 0, ''),
(74, 'ij', 'k', 'epaude@gmail.com', 'mmmmmmmm', 'mmmmmmmm', 'llllllllllllllll', 699145449, ''),
(75, 'ij', 'k', 'epaude@gmail.com', 'localementmp', 'localementjj', 'llllllllllllllll', 699145449, ''),
(76, 'ij', 'k', 'epaude@gmail.com', 'qsdfghjk', 'azertyui', 'llllllllllllllll', 699145449, ''),
(77, 'aude', 'stell', 'epaude@gmail.com', 'azertyui', 'qsdfghjk', 'paris', 699145449, ''),
(78, 'epanda', 'stell', 'stellinaepanda@gmail.com', 'audetumsoule', 'audetumsoule', 'sucy en brie', 699145449, ''),
(79, 'stellina', 'ddd', 'epaude@gmail.com', 'mlkjhgfd', 'mlkjhgfd', 'nn', 699145449, ''),
(80, 'stellina', 'ddd', 'epaude@gmail.com', 'mlkjhgfd', 'mlkjhgfd', 'nn', 699145449, ''),
(81, 'stellina', 'ddd', 'epaude@gmail.com', 'kkkkkkkk', 'kkkkkkkk', 'paris', 699145449, ''),
(82, 'stellina', 'ddd', 'epaude@gmail.com', 'kkkkkkkk', 'kkkkkkkk', 'paris', 699145449, ''),
(83, 'stellina', 'ddd', 'epaude@gmail.com', 'kkkkkkkk', 'kkkkkkkk', 'paris', 699145449, ''),
(84, 'stellina', 'ddd', 'epaude@gmail.com', 'kkkkkkkk', 'kkkkkkkk', 'paris', 699145449, ''),
(85, 'stellina', 'ddd', 'epaude@gmail.com', 'llllllll', 'llllllll', 'paris', 699145449, ''),
(86, 'stellina', 'ddd', 'epaude@gmail.com', 'llllllll', 'llllllll', 'paris', 699145449, ''),
(87, 'stellina', 'ddd', 'epaude@gmail.com', 'llllllll', 'llllllll', 'paris', 699145449, ''),
(88, 'stellina', 'ddd', 'epaude@gmail.com', 'jjjjjjjj', 'jjjjjjjj', 'paris', 699145449, '');

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

---------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS `membre` (
  `id_membre` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `adressemail` varchar(320) CHARACTER SET ascii NOT NULL,
  `motdepasse1` text NOT NULL,
  `motdepasse2` text NOT NULL,
  `num` int(11) NOT NULL,
  `ville` varchar(60) NOT NULL,
  `region` varchar(30) NOT NULL,
  `case` char(1) NOT NULL,
  PRIMARY KEY (`id_membre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;
