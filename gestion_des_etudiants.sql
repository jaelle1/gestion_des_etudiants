-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 17 Mai 2022 à 22:43
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Contenu de la table `administrateur`
--

INSERT INTO `administrateur` (`id`, `nom`, `prenom`, `email`, `password`) VALUES
(21, 'bationo', 'jaelle', 'jaelle@gmail.com', 'fa64b8dfc9ec91ed11966832554f18ec');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `nom`, `prenom`, `numero`, `email`, `id_tuteur`) VALUES
(1, 'some', 'brice', 79632584, 'some@gmail.fr', 7),
(2, 'fofana', 'neimata', 78541236, 'fofananeimata@gmail.com', 7),
(3, 'sankara', 'alimantou', 75800204, 'sankaraalimantou6@gmail.com', 2);

-- --------------------------------------------------------

--
-- Structure de la table `tuteur`
--

CREATE TABLE IF NOT EXISTS `tuteur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `numero` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `tuteur`
--

INSERT INTO `tuteur` (`id`, `nom`, `prenom`, `numero`) VALUES
(1, 'vhbjnk', 'ghjkl', 48655555),
(2, 'ouedraogo', 'nopoko', 48655666),
(3, 'bationo', 'eluera christiane', 78965412),
(4, 'bationo', 'eluera christiane', 78965412),
(5, 'bationo', 'moise', 78849027),
(6, 'bationo', 'odile', 78849015),
(7, 'da', 'ali', 2147483647),
(8, 'some', 'nadine', 78963521),
(9, 'konombo ', 'germain', 50262623),
(10, 'kieta', 'gaoussou', 56126699);

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
