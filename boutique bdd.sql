-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 16 avr. 2022 à 01:59
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `boutique-en-ligne`
--

-- --------------------------------------------------------

--
-- Structure de la table `droits_user`
--

DROP TABLE IF EXISTS `droits_user`;
CREATE TABLE IF NOT EXISTS `droits_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `droits_user`
--

INSERT INTO `droits_user` (`id`, `nom`) VALUES
(1, 'Utilisateur'),
(2, 'Administrateur');

-- --------------------------------------------------------



--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `date` timestamp NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `id_souscategorie` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;





--
-- Structure de la table `sous_categories`
--

DROP TABLE IF EXISTS `sous_categories`;
CREATE TABLE IF NOT EXISTS `sous_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sous_categories`
--

INSERT INTO `sous_categories` (`id`, `name`, `id_categorie`) VALUES
(8, 'collection_Quotes', 1);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `adresse` text NOT NULL,
  `id_droit` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `telephone`, `adresse`, `id_droit`, `nom`, `prenom`) VALUES
(33, 'toto20@test.fr', '$2y$10$VJ.oJJmKWKeHCCkvB6epw.rsac.01oMU8kSoIqkG72VzsrpzfsRny', '0651242831', '44,f,efe13015fejfe', 1, 'f,efe', 'fefe'),
(34, 'mourdddddddad.boussiouf@gmail.com', '$2y$10$Zdojz9OJHD.mM/58k/rzFOz2cd5m/D3w0x0vhIpAYmul66gLfLlNe', '0651249999', '99,Mourad Boussiouf13015Marseille', 1, 'Boussiouf', 'Mourad'),
(20, 'mourad.boussiouf@gmail.com', '$2y$10$9mVG5OahgB18NIA1lDPyU.iBoiToTGm9WI0ugtWnoZnU/lCqSSk3O', '0651242831', '77,Boulevard Henri barnier13015Marseille', 2, 'Boussiouf', 'Mourad'),
(32, 'toto4@toto.fr', '$2y$10$X4/oKiP5yitL9Vi9ZYqYQufDw5JjbJKZIC6OTMKsSWwQn8pPlpgUC', 'toto4@toto.fr', '44,Boussiouf13015Lyon', 1, 'Boussiouf', 'Mourad'),
(31, 'toto5@toto.fr', '$2y$10$NUU.M4GY.Oa.Ie8Oeobw6O2nbCEn0leUHxSNcxiECvD4igz3qNt/O', '0651242899', '99,totorue13015lehood', 1, 'toto', 'toto'),
(36, 'LOuradededed.boussiouf@gmail.com', '$2y$10$vCLN/DMZOUzcDfyDLjPnMeAUAZiF4exV3COq5BXEF5aHojb/RWXC2', '0651246969', '88,Mourad Boussiouf13015Marseille', 1, 'Boussiouf', 'Mourad');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
