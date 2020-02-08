-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  sam. 08 fév. 2020 à 01:10
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet_yedimin`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `date_time_publication` datetime NOT NULL,
  `date_time_edition` datetime NOT NULL DEFAULT '2020-02-07 12:51:25',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contenu`, `date_time_publication`, `date_time_edition`) VALUES
(1, 'Entre-Amoureux', 'Sortie sur la plage chaque samedi soir afin de profiter de du couchÃ© de soleil en bordure de mer. Quoi de mieux que d\'Ãªtre avec son ou sa compagne pour vivre ce moment de bonheur. Diner au chandelle rien que pour vous accompagnÃ© d\'une nuit magnifique dans l\'une de nos suites. Profitez au max, nous vous l\'offrons.  ', '2020-02-07 12:42:42', '2020-02-07 12:51:25'),
(2, 'Astuces-Natation ', 'Apprenez Ã  nager avec nous. Passez pro en quelques semaines avec nos maÃ®tres nageurs experts et qualifiÃ©s. Remportez les dÃ©fis et les compÃ©titions avec nous.', '2020-02-07 12:51:25', '2020-02-07 12:51:25'),
(3, 'Massage-Spa', 'Venez vous relaxer dans notre espace spa et massage Ã  l\'appui, ne vous en faites pas, dÃ©tendez vous tout simplement et laisser nos experts faire le travail. Vous vous sentirez comme neuf.', '2020-02-07 12:53:45', '2020-02-07 12:51:25'),
(5, 'Natation-Enfants', '                                                  \r\n                                                Apprenez aux enfants Ã  nager.                                             ', '2020-02-07 14:59:02', '2020-02-07 15:16:54');

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `lieu` varchar(255) NOT NULL,
  `debut` varchar(255) NOT NULL,
  `fin` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`id`, `nom`, `prenom`, `adresse`, `mail`, `contact`, `lieu`, `debut`, `fin`) VALUES
(1, 'kouassi', 'davy Aymard', 'Cocody/riviera 2', 'admin@gmail.com', 78546923, 'Yediminh', '2020-02-07', '2020-02-29'),
(2, 'kouassi', 'davy Aymard', 'Cocody/riviera 2', 'admin@gmail.com', 78546923, 'Yediminh', '2020-02-07', '2020-02-29'),
(3, 'Yao', 'Boula', 'Cocody/', 'lesyd@gmail.com', 45696321, 'Domicile', '2020-02-15', '2020-02-29'),
(4, 'Babou', 'Laris', 'Cocody/riviera 2', 'test@test.com', 78546923, 'Yediminh', '2020-02-15', '2020-02-15'),
(5, 'Babou', 'Laris', 'Cocody/riviera 2', 'test@test.com', 78546923, 'Yediminh', '2020-02-15', '2020-02-15'),
(6, 'niamson', 'nelly', 'Cocody/', 'test@test.com', 78546923, 'Yediminh', '2020-02-07', '2020-02-15');

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

DROP TABLE IF EXISTS `membres`;
CREATE TABLE IF NOT EXISTS `membres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `motdepasse` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `pseudo`, `mail`, `motdepasse`, `avatar`) VALUES
(1, 'dundalk', 'admin@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '1.png');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `civilite` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `contact` int(11) NOT NULL,
  `personne` varchar(255) NOT NULL,
  `reservation` varchar(255) NOT NULL,
  `debut` varchar(255) NOT NULL,
  `fin` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `nom`, `prenom`, `civilite`, `mail`, `contact`, `personne`, `reservation`, `debut`, `fin`) VALUES
(1, 'kouassi', 'davy Aymard', 'Mr', 'admin@gmail.com', 78546923, 'Famille', 'ComplÃ¨te', '2020-02-22', '2020-02-07'),
(2, 'Yao', 'Boula', 'Mr', 'lesyd@gmail.com', 45696321, '1', 'Mini', '2020-02-07', '2020-02-22'),
(3, 'Niamson', 'nelly', 'Mme', 'nelly@gmail.com', 55696566, '2', 'ComplÃ¨te', '2020-02-07', '2020-03-05'),
(4, 'tuo', 'solange', 'Mme', 'test@test.com', 78546923, '1', 'ComplÃ¨te', '2020-02-07', '2020-02-15');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
