-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 19 Mai 2022 à 02:58
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `gestion_des_etudiants`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE IF NOT EXISTS `administrateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Contenu de la table `administrateur`
--

INSERT INTO `administrateur` (`id`, `nom`, `prenom`, `email`, `password`) VALUES
(29, 'kientega', 'brigitte', 'kientiono1254@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `numero` int(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `id_tuteur` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_tuteur` (`id_tuteur`),
  KEY `id_tuteur_2` (`id_tuteur`),
  KEY `id_tuteur_3` (`id_tuteur`),
  KEY `id_tuteur_4` (`id_tuteur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `nom`, `prenom`, `numero`, `email`, `id_tuteur`) VALUES
(5, 'kinda', 'alimantou', 78564211, 'alimantou@gmail.com', 14),
(7, 'bagre', 'farida', 78526398, 'farida@gmail.com', 19),
(8, 'zore', 'yacouba', 56451236, 'zore@gmail.com', 20),
(9, 'kinda', 'Barnabas', 78635214, 'kinda@gmail.com', 14),
(10, 'sawadogo', 'merveille', 789654321, 'sawadogo@gmail.com', 22),
(11, 'valea', 'cynthia', 78635233, 'valea@gmail.com', 6),
(12, 'namountougou', 'boureima', 67750236, 'naboure@gmail.comghj', 23),
(14, 'bationo', 'mathieu', 52123602, 'mathino@gmail.com', 5),
(15, 'bonkoungo', 'emilda', 51124478, 'emilda@gmail.fr', 24);

-- --------------------------------------------------------

--
-- Structure de la table `tuteur`
--

CREATE TABLE IF NOT EXISTS `tuteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom_tuteur` varchar(255) NOT NULL,
  `prenom_tuteur` varchar(255) NOT NULL,
  `numero` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Contenu de la table `tuteur`
--

INSERT INTO `tuteur` (`id`, `nom_tuteur`, `prenom_tuteur`, `numero`) VALUES
(2, 'ouedraogo', 'nopoko', 48655666),
(3, 'bationo', 'eluera christiane', 78965412),
(4, 'bationo', 'eluera christiane', 78965412),
(5, 'bationo', 'moise', 78849027),
(6, 'bationo', 'odile', 78849015),
(7, 'da', 'ali', 2147483647),
(8, 'some', 'nadine', 78963521),
(9, 'konombo ', 'germain', 50262623),
(10, 'kieta', 'gaoussou', 56126699),
(14, 'kinda', 'fleur', 78564212),
(15, 'zore', 'moussa', 78526321),
(19, 'bagre', 'dominique', 78963214),
(20, 'zore', 'august', 78965412),
(21, 'ki', 'august', 78965588),
(22, 'sawadogo', 'nobert', 66554411),
(23, 'namountougou', 'boukary', 78963214),
(24, 'boukoungou', 'severin', 63369889);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `etudiant_ibfk_1` FOREIGN KEY (`id_tuteur`) REFERENCES `tuteur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
