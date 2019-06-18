-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Hôte : racoonstwwromain.mysql.db
-- Généré le :  mar. 18 juin 2019 à 10:00
-- Version du serveur :  5.6.39-log
-- Version de PHP :  7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `racoonstwwromain`
--

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  `author` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `date_creation` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modification` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `report` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `id_article`, `author`, `comment`, `date_creation`, `date_modification`, `report`) VALUES
(1, 1, 'Romain', 'Le texte de l\'article est bien rentré en bdd et ressort dans la liste des articles, je teste maintenant le commentaire.', '2019-06-10 09:03:45', '2019-06-10 09:03:45', 0),
(2, 1, 'Thomas', 'Merci de signaler ce commentaire pour le test administration', '2019-06-10 09:05:45', '2019-06-10 09:05:45', 1),
(3, 3, 'Romain', 'Ce commentaire est à signaler !', '2019-06-10 10:38:56', '2019-06-10 10:41:39', 1),
(4, 1, 'Bastien', 'On peut aussi modifier le commentaire', '2019-06-10 10:44:46', '2019-06-10 10:44:46', 0),
(5, 3, 'Thomas', 'Ce commentaire se trouve dans l\'article qui a pour id 3', '2019-06-10 10:46:27', '2019-06-10 10:46:27', 0),
(6, 3, 'Bastien', 'Même si c\'est le deuxième chapitre', '2019-06-10 10:46:41', '2019-06-10 10:46:41', 0),
(7, 4, 'Romain', 'Trop content l\'article est enfin sorti !', '2019-06-10 10:48:34', '2019-06-10 10:48:34', 0),
(8, 4, 'Thomas', 'Commentaire numéro 10 ?', '2019-06-10 10:48:48', '2019-06-10 10:48:48', 0),
(9, 4, 'Bastien', 'Nul ce chapitre', '2019-06-10 10:48:57', '2019-06-10 10:48:57', 0),
(10, 5, 'Romain', 'Génial ce chapitre ! ', '2019-06-10 11:21:30', '2019-06-10 11:21:30', 0),
(11, 5, 'Thomas', 'Très sombre ce passage', '2019-06-10 11:21:38', '2019-06-10 11:21:38', 0),
(12, 5, 'Bastien', 'A refaire !', '2019-06-10 11:21:47', '2019-06-10 11:21:47', 1),
(13, 7, 'Romain', 'Génial !', '2019-06-10 12:43:18', '2019-06-10 12:43:18', 0),
(14, 7, 'Thomas', 'C\'est mal écrit !', '2019-06-10 12:43:31', '2019-06-10 12:43:31', 1),
(15, 7, 'Bastien', 'Signalez moi !', '2019-06-10 12:43:42', '2019-06-10 12:43:42', 1),
(16, 8, 'Romain', 'What the fuck ?!', '2019-06-10 12:43:58', '2019-06-10 12:43:58', 0),
(17, 8, 'Thomas', 'Je vends des pièces d\'or dans WoW', '2019-06-10 12:44:19', '2019-06-10 12:44:19', 1),
(18, 8, 'Bastien', 'Je veux bien t\'en acheter !', '2019-06-10 12:44:29', '2019-06-12 13:32:00', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
