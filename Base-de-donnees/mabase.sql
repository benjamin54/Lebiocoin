-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 09 Juin 2015 à 23:08
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
  `variete` varchar(20) NOT NULL,
  `photo_annonce` blob NOT NULL,
  `texte` text NOT NULL,
  `quantite` int(11) NOT NULL,
  `prix` float NOT NULL,
  `date_ajout` datetime NOT NULL,
  `id_cat_annonce` int(11) NOT NULL,
  `id_cat_produit` int(11) NOT NULL,
  PRIMARY KEY (`id_annonce`),
  KEY `id_cat_annonce` (`id_cat_annonce`),
  KEY `id_cat_produit` (`id_cat_produit`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=79 ;

--
-- Contenu de la table `annonce`
--

INSERT INTO `annonce` (`id_annonce`, `codepostal`, `ville`, `region`, `nom`, `mail`, `tel`, `titre`, `variete`, `photo_annonce`, `texte`, `quantite`, `prix`, `date_ajout`, `id_cat_annonce`, `id_cat_produit`) VALUES
(60, 75244, 'lille', 'Alsace', 'jer', 'jer@mail.fr', 127, 'avocat', '', 0x39323066396163343263303830386532326534623363366533656334393233662e6a7067, 'azdad', 0, 7, '2015-05-25 17:41:42', 0, 0),
(61, 75014, 'PARIS', 'Ile de France', 'benjamin', 'dubus.benjamin1@gmail.com', 127, 'pommes', '', 0x61383839366637396162646435626131356561343361643565326561393734652e6a7067, 'variÃ©tÃ© granny smith\r\n5 kg', 0, 5, '2015-05-27 13:39:33', 0, 0),
(62, 75014, 'PARIS', 'Ile de France', 'benjamin', 'dubus.benjamin1@gmail.com', 127, 'pommes', '', 0x66643230333536626634373164303332313532383763336231633031623062642e6a7067, 'variÃ©tÃ© granny smith\r\n5 kg', 0, 5, '2015-05-27 13:45:32', 0, 0),
(63, 75014, 'PARIS', 'Ile de France', 'benjamin', 'dubus.benjamin1@gmail.com', 127, 'pommes', '', 0x62646230333739666565383737613434346637653330323536343531383730372e6a7067, 'variÃ©tÃ© granny smith\r\n5 kg', 0, 5, '2015-05-27 13:47:00', 0, 0),
(64, 75214, 'paris', 'Ile de France', 'benjamin', 'dubus.benjamin1@gmail.com', 127, 'pomme', '', 0x30666433356233373731343566363130323738616633373364376265383535632e6a7067, 'variÃ©tÃ© granny', 0, 5, '2015-05-27 13:50:17', 0, 0),
(65, 785, '87587', 'Alsace', '8757', '87578', 127, '8757', '', 0x34366236636165633231306562366237653166303532643933663565316465362e6a7067, '875', 0, 7785, '2015-05-27 23:08:22', 0, 0),
(66, 75014, 'PARIS', 'Ile de France', 'benji', 'dubus.benjamin1@gmail.com', 127, 'pomme', '', 0x32326133626361396330336162616136656636636231353138323230356135652e6a7067, 'granny', 0, 10, '2015-05-28 01:00:33', 0, 0),
(67, 75014, 'PARIS', 'Ile de France', 'benji', 'dubus.benjamin1@gmail.com', 127, 'pomme', '', 0x31663937343661346534313633363262353866316630356335396530613461332e6a7067, 'granny', 0, 10, '2015-05-28 01:03:59', 0, 0),
(68, 75014, 'PARIS', 'Ile de France', 'benji', 'dubus.benjamin1@gmail.com', 127, 'pomme', '', 0x65303764653430346337633764326464376662633636663038656236313333302e6a7067, 'granny', 0, 10, '2015-05-28 01:06:39', 0, 0),
(69, 75014, 'PARIS', 'Ile de France', 'benji', 'dubus.benjamin1@gmail.com', 127, 'pomme', '', 0x32646133313466383132346464636334383665323461326266336234366637622e6a7067, 'granny', 0, 10, '2015-05-28 01:06:56', 0, 0),
(70, 75014, 'PARIS', 'Ile de France', 'benji', 'dubus.benjamin1@gmail.com', 127, 'pommes', '', 0x65363261666562656262616439313036636363333632653637356666623931632e6a7067, 'gran', 0, 10, '2015-05-28 01:10:19', 0, 0),
(71, 75014, 'PARIS', 'Ile de France', 'benji', 'dubus.benjamin1@gmail.com', 127, 'pommes', '', 0x61613038613838633865316366363239363432343532626635663638643734372e6a7067, 'gran', 0, 10, '2015-05-28 01:10:47', 0, 0),
(72, 75014, 'PARIS', 'Ile de France', 'benji', 'dubus.benjamin1@gmail.com', 127, 'pommes', '', 0x64353838653838303063646463306166633831323931653664396531363236332e6a7067, 'gran', 0, 10, '2015-05-28 01:14:29', 0, 0),
(73, 75014, 'PARIS', 'Alsace', 'benjamin', 'dubus.benjamin1@gmail.com', 127, 'pomme', '', 0x61396130663366656133393037323636303361323335336130616433386564612e6a7067, 'zezez', 0, 8, '2015-06-01 17:12:29', 0, 0),
(74, 75014, 'PARIS', 'Alsace', 'benjamin', 'dubus.benjamin1@gmail.com', 127, 'pomme', '', 0x65623633623766313432353030623066376665616332376532623466363239342e6a7067, 'zezez', 0, 8, '2015-06-01 17:15:42', 0, 0),
(75, 75014, 'PARIS', 'Alsace', 'benjamin', 'dubus.benjamin1@gmail.com', 127, 'pomme', '', 0x39623738666531356539383161666163303362616164666462663234323930362e6a7067, 'zezez', 0, 8, '2015-06-01 17:24:50', 0, 0),
(76, 75014, 'PARIS', 'Alsace', 'dubus', 'dubus.benjamin1@gmail.com', 127, 'avocat', '', 0x61316336343963653961653365343062383866356330633738643462316633322e6a7067, 'qseaqq', 0, 3, '2015-06-01 17:29:47', 0, 0),
(77, 75014, 'PARIS', 'Ile de France', 'dubus', 'dubus.benjamin1@gmail.com', 127, 'pommes de terre', '', 0x31323632313633326364373466346632653632646631386362613865353739312e6a7067, 'qseaqq', 0, 3, '2015-06-01 17:31:58', 0, 0),
(78, 75014, 'PARIS', 'Ile de France', 'dubus', 'dubus.benjamin1@gmail.com', 127, 'pomme', '', 0x34346265326532383735353936646136366338353730363162373266646532302e6a7067, 'qseaqq', 0, 5, '2015-06-01 17:32:52', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `categorie_a`
--

CREATE TABLE IF NOT EXISTS `categorie_a` (
  `id_categoriea` int(11) NOT NULL AUTO_INCREMENT,
  `nom_categoriea` varchar(255) NOT NULL,
  PRIMARY KEY (`id_categoriea`),
  KEY `nom_categoriea` (`nom_categoriea`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `categorie_a`
--

INSERT INTO `categorie_a` (`id_categoriea`, `nom_categoriea`) VALUES
(1, ''),
(2, ''),
(3, ''),
(4, ''),
(5, ''),
(6, ''),
(7, ''),
(8, ''),
(9, 'achat'),
(10, 'achat'),
(11, 'achat'),
(12, 'achat'),
(13, 'achat'),
(14, 'achat'),
(15, 'achat');

-- --------------------------------------------------------

--
-- Structure de la table `categorie_produit`
--

CREATE TABLE IF NOT EXISTS `categorie_produit` (
  `id_categoriep` int(11) NOT NULL AUTO_INCREMENT,
  `nom_categoriep` varchar(255) NOT NULL,
  PRIMARY KEY (`id_categoriep`),
  KEY `nom_categoriep` (`nom_categoriep`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `categorie_produit`
--

INSERT INTO `categorie_produit` (`id_categoriep`, `nom_categoriep`) VALUES
(1, ''),
(2, ''),
(3, ''),
(4, ''),
(5, ''),
(6, ''),
(7, ''),
(8, ''),
(9, ''),
(10, ''),
(11, ''),
(12, ''),
(13, 'legume'),
(14, 'legume'),
(15, 'legume');

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
-- Structure de la table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `id_chat` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id_chat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `chat`
--

INSERT INTO `chat` (`id_chat`, `pseudo`, `message`) VALUES
(1, 'stelloh', 'coucpu\r\n'),
(2, 'aude', ''),
(3, 'aude   ', 'ca va'),
(4, 'aude   ', 'ca va');

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
