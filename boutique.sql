-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 17 avr. 2022 à 21:12
-- Version du serveur :  5.7.31
-- Version de PHP : 7.4.9

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
-- Structure de la table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_product` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=141 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_categories` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name_categories`) VALUES
(1, 'Couvre-chef'),
(2, 'T-shirts');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
CREATE TABLE IF NOT EXISTS `commandes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `achat` text NOT NULL,
  `date` datetime NOT NULL,
  `price` int(11) NOT NULL,
  `moyen_paiement` varchar(255) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

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
-- Structure de la table `historique`
--

DROP TABLE IF EXISTS `historique`;
CREATE TABLE IF NOT EXISTS `historique` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `prices` int(11) NOT NULL,
  `moyen_de_paiement` varchar(255) NOT NULL,
  `date` timestamp NOT NULL,
  `id_commande` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `image2` text NOT NULL,
  `image3` text NOT NULL,
  `descr` text NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `id_souscategorie` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `date`, `image`, `image2`, `image3`, `descr`, `id_categorie`, `id_souscategorie`) VALUES
(1, 't shirt welcome to the gouffre', 20, '2022-04-16 01:57:35', 'tshirt1.jpg', '', '', 'Ce t-shirt confortable et 100% coton est idéal pour vos voyages interdimensionnels pour aller dire bonjour à Karin dans la salle du temps.', 1, 1),
(2, 't shirt \"c\'est quoi ISSET ?\"', 20, '2022-04-16 01:57:35', 'tshirt3.jpg', '', '', 'ça renvoi TROUORFOLSE', 1, 1),
(64, 'T-shirt \"Max ou crève\"', 20, '2022-04-17 21:05:27', 'tshirt2.jpg', '', '', 'Get max or die ouvrier du numérique', 1, 1);

-- --------------------------------------------------------

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
(1, 'collection_Quotes', 1);

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
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `telephone`, `adresse`, `id_droit`, `nom`, `prenom`) VALUES
(38, 'mourad.boussiouf@gmail.com', '$2y$10$SLB3WCqJNmPpkHTA.W.MkOPVgAg3fsfQfiW8F9ipsrNdHLo/PwvKm', '0651242831', '44,Mourad Boussiouf13015Marseille', 1, 'Boussiouf', 'Mourad');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
