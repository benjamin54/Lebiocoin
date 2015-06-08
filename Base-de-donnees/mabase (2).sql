-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 08 Juin 2015 à 12:42
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
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `adressemail` varchar(320) CHARACTER SET ascii NOT NULL,
  `token` int(11) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `motdepasse1` text NOT NULL,
  `motdepasse2` text NOT NULL,
  `num` int(11) NOT NULL,
  `region` varchar(30) NOT NULL,
  `ville` varchar(60) NOT NULL,
  PRIMARY KEY (`id_membre`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id_membre`, `prenom`, `nom`, `pseudo`, `adressemail`, `token`, `active`, `motdepasse1`, `motdepasse2`, `num`, `region`, `ville`) VALUES
(26, 'Gregoire', 'Pasquier', 'Greg', 'greg@paquier.com', 0, 0, '1f7c5c428fb85b44b3a49ef96fa84a5d2154e773', '1f7c5c428fb85b44b3a49ef96fa84a5d2154e773', 611111111, 'Ile de france ', 'Paris'),
(27, 'Margaux', 'Pasquier', 'gomar', 'margaux@pasquier-desvignes.com', 0, 0, 'c5286886d435f3a633af89af3e2c9933634b96d6', '36decd9a51ac0534bdc6fccc7ef312dce65181b4', 622222222, 'Ile de france ', 'P'),
(28, 'Margaux', 'Pasquier', 'gomar', 'margaux@pasquier-desvignes.com', 0, 0, 'c5286886d435f3a633af89af3e2c9933634b96d6', '36decd9a51ac0534bdc6fccc7ef312dce65181b4', 622222222, 'Ile de france ', 'P'),
(29, 'Margaux', 'Pasquier', 'gomar', 'margaux@pasquier-desvignes.com', 0, 0, 'c5286886d435f3a633af89af3e2c9933634b96d6', '36decd9a51ac0534bdc6fccc7ef312dce65181b4', 622222222, 'Ile de france ', 'P'),
(30, 'Margaux', 'Pasquier-Desvignes', 'gomar', 'margaux@pasquier-desvignes.com', 0, 0, 'c5286886d435f3a633af89af3e2c9933634b96d6', '36decd9a51ac0534bdc6fccc7ef312dce65181b4', 622222222, 'Ile de france ', 'Paris'),
(31, 'Stell', 'Epan', 'Stell', 'stell@gmail.com', 0, 0, '27ec13f5df514ba0aed34430804e31062e3f4b6f', '02db0894d744ffec80293f85a359547bd33deef6', 622222222, 'Ile-de-France', 'Paris'),
(32, 'Stell', 'Epan', 'Stell', 'stell@gmail.com', 0, 0, '27ec13f5df514ba0aed34430804e31062e3f4b6f', '02db0894d744ffec80293f85a359547bd33deef6', 622222222, 'Ile-de-France', 'Paris'),
(33, 'Ben', 'Du', 'ben', 'ben@gmail.com', 207, 0, '9e7bc6878f15155f664887f5952d257c0d032745', '9e7bc6878f15155f664887f5952d257c0d032745', 611111111, 'Ile-de-France', 'Paris'),
(34, 'Ben', 'Du', 'ben', 'ben@gmail.com', 224, 0, '9e7bc6878f15155f664887f5952d257c0d032745', '9e7bc6878f15155f664887f5952d257c0d032745', 611111111, 'Ile-de-France', 'Paris'),
(35, 'Margaux', 'Pasquier', 'godmar', 'mar1@pasquier-desvignes.com', 165, 0, 'margaux1', 'margaux1', 611111111, 'Ile-de-France', 'Paris'),
(36, 'Margaux', 'Pas', 'godmar1', 'mar2@pasquier-desvignes.com', 138, 0, 'margaux1', 'margaux1', 611111111, 'Ile-de-France', 'Paris'),
(37, 'M', 'Pas', 'godmar2', 'mar3@pasquier-desvignes.com', 200, 0, 'margaux1', 'margaux1', 611111111, 'Ile-de-France', 'Paris'),
(38, 'M', 'Pas', 'mar', 'mar4@pasquier-desvignes.com', 207, 0, 'margaux1', 'margaux1', 611111111, 'Ile-de-France', 'Paris');

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
