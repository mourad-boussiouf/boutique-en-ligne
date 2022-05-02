-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 02 mai 2022 à 00:52
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
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'T-shirts'),
(2, 'Couvre-chefs'),
(3, 'lolilol'),
(4, 'hhh');

-- --------------------------------------------------------

--
-- Structure de la table `droits_user`
--

DROP TABLE IF EXISTS `droits_user`;
CREATE TABLE IF NOT EXISTS `droits_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `droits_user`
--

INSERT INTO `droits_user` (`id`, `nom`) VALUES
(1, 'Utilisateur'),
(2, 'Administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `orderline` text NOT NULL,
  `totalprice` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `moyen_paiement` varchar(255) NOT NULL,
  `delivery_adress` varchar(255) NOT NULL,
  `order_status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `orders`
--

INSERT INTO `orders` (`id`, `id_user`, `orderline`, `totalprice`, `date`, `moyen_paiement`, `delivery_adress`, `order_status`) VALUES
(61, 40, ' •T-shirt \'Max ou crève\' dans la taille xs, qté : 1, prix : 20€.  ', 20, '2022-05-01 23:15:04', 'Paypal', 'Boussiouf Mourad ; 60,Boulevard Heri Barnier ,13015,Marseille', 'payée'),
(44, 40, ' •Bob \'Gamberge baba\' dans la taille s, qté : 1, prix : 15€.  ', 15, '2022-05-01 03:18:58', 'Paypal', 'Boussiouf Mourad ; 77,Boulevard Heri Barnier ,13015,Marseille', 'paid'),
(36, 40, ' •Bob \'Gamberge baba\' dans la taille m, qté : 1, prix : 15€.  ', 15, '2022-05-01 02:57:50', 'Paypal', 'Boussiouf Mourad ; 77,Boulevard Heri Barnier ,13015,Marseille', 'paid'),
(54, 40, ' •T-shirt \'Max ou crève\' dans la taille xs, qté : 1, prix : 20€.   •Bob \'Gamberge baba\' dans la taille s, qté : 1, prix : 15€.   •Bob \'Maître du game\' dans la taille s, qté : 1, prix : 15€.   •T-shirt \'Still at the bottom\' dans la taille xs, qté : 1, prix : 20€.   •T-shirt \'Version qui marche\' dans la taille xs, qté : 1, prix : 20€.  ', 90, '2022-05-01 07:01:48', 'Paypal', 'Boussiouf Mourad ; 77,Boulevard Heri Barnier ,13015,Marseille', 'paid'),
(38, 40, ' •Bob \'Gamberge baba\' dans la taille m, qté : 1, prix : 15€.  ', 15, '2022-05-01 02:58:38', 'Paypal', 'Boussiouf Mourad ; 77,Boulevard Heri Barnier ,13015,Marseille', 'paid'),
(39, 40, ' •Bob \'Gamberge baba\' dans la taille m, qté : 1, prix : 15€.  ', 15, '2022-05-01 03:03:51', 'Paypal', 'Boussiouf Mourad ; 77,Boulevard Heri Barnier ,13015,Marseille', 'paid'),
(63, 40, ' •T-shirt \'Max ou crève\' dans la taille xs, qté : 1, prix : 20€.  ', 20, '2022-05-02 01:40:34', 'Paypal', 'Boussiouf Mourad ; 60,Boulevard Heri Barnier ,13015,Marseille', 'payée'),
(62, 40, ' •T-shirt \'Max ou crève\' dans la taille xs, qté : 1, prix : 20€.   •T-shirt \'Version qui marche\' dans la taille xs, qté : 1, prix : 20€.   •Bob \'Maître du game\' dans la taille s, qté : 1, prix : 15€.   •T-shirt \'Welcome to the gouffre\' dans la taille xs, qté : 1, prix : 20€.  ', 75, '2022-05-02 01:30:38', 'Paypal', 'Boussiouf Mourad ; 60,Boulevard Heri Barnier ,13015,Marseille', 'payée'),
(60, 40, ' •T-shirt \'ACID transaction\' dans la taille l, qté : 1, prix : 20€.  ', 20, '2022-05-01 23:10:18', 'Bitcoin', 'Boussiouf Mourad ; 60,Boulevard Heri Barnier ,13015,Marseille', 'payée'),
(58, 40, ' •Bob \'Gamberge baba\' dans la taille s, qté : 50, prix : 15€.   •T-shirt \'Still at the bottom\' dans la taille xxl, qté : 31, prix : 20€.   •T-shirt \'ACID transaction\' dans la taille m, qté : 5, prix : 20€.  ', 1470, '2022-05-01 16:36:07', 'Paypal', 'Boussiouf Mourad ; 77,Boulevard Heri Barnier ,13015,Marseille', 'paid'),
(57, 40, ' •Bob \'Gamberge baba\' dans la taille s, qté : 1, prix : 15€.   •T-shirt \'Max ou crève\' dans la taille xs, qté : 1, prix : 20€.   •T-shirt \'Still at the bottom\' dans la taille xs, qté : 1, prix : 20€.  ', 55, '2022-05-01 07:56:17', 'Paypal', 'Boussiouf Mourad ; 77,Boulevard Heri Barnier ,13015,Marseille', 'paid'),
(56, 40, ' •T-shirt \'Max ou crève\' dans la taille xl, qté : 1, prix : 20€.  ', 20, '2022-05-01 07:55:29', 'Paypal', 'Boussiouf Mourad ; 77,Boulevard Heri Barnier ,13015,Marseille', 'payée'),
(55, 40, ' •T-shirt \'Max ou crève\' dans la taille l, qté : 3, prix : 20€.   •T-shirt \'Version qui marche\' dans la taille l, qté : 1, prix : 20€.   •T-shirt \'Welcome to the gouffre\' dans la taille m, qté : 2, prix : 20€.   •T-shirt \'Still at the bottom\' dans la taille l, qté : 1, prix : 20€.  ', 140, '2022-05-01 07:54:41', 'Paypal', 'Boussiouf Mourad ; 77,Boulevard Heri Barnier ,13015,Marseille', 'impayée'),
(64, 40, ' •T-shirt \'Version qui marche\' dans la taille xs, qté : 1, prix : 20€.  ', 20, '2022-05-02 01:48:28', 'Paypal', 'Boussiouf Mourad ; 60,Boulevard Heri Barnier ,13015,Marseille', 'payée'),
(65, 40, ' •T-shirt \'Masterclass\' dans la taille xxxl, qté : 45, prix : 42€.  ', 1890, '2022-05-02 02:47:31', 'Paypal', 'Boussiouf Mourad ; 60,Boulevard Heri Barnier ,13015,Marseille', 'payée');

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `price` int(11) NOT NULL,
  `date` timestamp NOT NULL,
  `image` text CHARACTER SET latin1 NOT NULL,
  `image2` text CHARACTER SET latin1 NOT NULL,
  `descr` text CHARACTER SET latin1 NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `id_souscategorie` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `foreignKeyCategorie` (`id_categorie`),
  KEY `foreignKeySousCategorie` (`id_souscategorie`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `date`, `image`, `image2`, `descr`, `id_categorie`, `id_souscategorie`) VALUES
(64, 'T-shirt \'Max ou crève\'', 20, '2022-04-17 21:05:27', 'tshirt2.jpg', 'tshirt2back.jpg', 'Get max or die ouvrier du numérique', 1, 1),
(65, 'Bob \'Gamberge baba\'', 15, '2022-04-22 16:42:19', 'bob1.jpg', 'bob1back.jpg', 'Il faut la gamberge hardcore', 2, 1),
(66, 'Bob \'Maître du game\'', 15, '2022-04-23 18:11:34', 'bob2.jpg', 'bob2back.jpg', 'Trottinette non incluse.', 2, 2),
(67, 'T-shirt \'Still at the bottom\'', 20, '2022-04-23 18:26:44', 'tshirt5.jpg', 'tshirt5back.jpg', 'En attendant des jours meilleurs', 1, 1),
(68, 'T-shirt \'Version qui marche\'', 20, '2022-04-24 00:49:09', 'tshirt6.jpg', 'tshirt6back.jpg', 'Attention à vos commits.', 1, 1),
(71, 'T-shirt \'ACID transaction\'', 20, '2022-04-25 06:14:03', 'tshirt7.jpg', 'tshirt7back.jpg', 'Acid', 1, 1),
(72, 'T-shirt \'C\'est quoi ISSET ?\'', 20, '2022-04-25 06:18:53', 'tshirt3.jpg', 'tshirt3back.jpg', 'Ça renvoi TROU OR FOLSE.', 1, 2),
(73, 'T-shirt \'Welcome to the gouffre\'', 20, '2022-04-25 06:51:23', 'tshirt1.jpg', 'tshirt1back.jpg', 'Idéal pour vos voyages interdimensionnels.', 1, 2),
(74, 'T-shirt \'Masterclass\'', 42, '2022-05-02 00:45:02', 'tshirt4.jpg', 'tshirt4back.jpg', 'J\'espère que personne ne se sent exclu.', 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `sous_categories`
--

DROP TABLE IF EXISTS `sous_categories`;
CREATE TABLE IF NOT EXISTS `sous_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sous_categories`
--

INSERT INTO `sous_categories` (`id`, `name`) VALUES
(1, 'collection_Clubber'),
(2, 'collection_Gouffre');

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
  PRIMARY KEY (`id`),
  KEY `foreignKeyDroit_User` (`id_droit`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `telephone`, `adresse`, `id_droit`, `nom`, `prenom`) VALUES
(40, 'mourad.boussiouf@gmail.com', '$2y$10$KBJVMvkSABy897AdVTe8KuaFLqWDZU.oD5my7Mw3yfI70HafBb/cK', '0651242831', '60,Boulevard Heri Barnier ,13015,Marseille', 2, 'Boussiouf', 'Mourad'),
(41, 'mourad.bdoussiouf@gmail.com', '$2y$10$62bMr5zN2b3vyfy2S5.Gy.K7lHsT76mm0nfDlKD9BrDZZeewtCsZq', '0651242800', '666,Mourad Boussiouf,13001,Marseille', 1, 'Boussiouf', 'Mourad');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `foreignKeyCategorie` FOREIGN KEY (`id_categorie`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `foreignKeySousCategorie` FOREIGN KEY (`id_souscategorie`) REFERENCES `sous_categories` (`id`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `foreignKeyDroit_User` FOREIGN KEY (`id_droit`) REFERENCES `droits_user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
