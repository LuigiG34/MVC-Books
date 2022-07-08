-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 08 juil. 2022 à 11:34
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tp_poo_mvc`
--

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

CREATE TABLE `livre` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `nbPages` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`id`, `titre`, `nbPages`, `image`) VALUES
(1, 'La Tour de l\'Hirondelle', 550, 'public/images/La-Tour-de-l-Hirondelle.jpg'),
(2, 'Le denier voeu', 500, 'public/images/Le-dernier-voeu.jpg'),
(3, 'PHP et MYSQL pour les nuls', 600, 'public/images/phplivre.jpg'),
(4, 'Javascript pour les nuls', 623, 'public/images/javascriptlivre.jpg'),
(5, 'Complete Node.js', 430, 'public/images/nodejs.jpg'),
(6, 'Apprendre React.js de la base à la maitrise', 895, 'public/images/reactjs.jpg'),
(7, 'DELETE THIS BOOK', 9999, 'public/images/deleteBook.jpg'),
(29, 'Symfony 5 : THE FAST TRACK', 526, 'public/images/symfony.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `livre`
--
ALTER TABLE `livre`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `livre`
--
ALTER TABLE `livre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
