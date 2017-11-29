-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 24 Novembre 2017 à 13:47
-- Version du serveur :  5.7.20-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `phprigolo`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date_naissance` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `date_naissance`) VALUES
(1, 'Stoeckle', 'Corentin', '1994-10-16'),
(2, 'Bertin', 'Théo', '1998-03-01'),
(3, 'Marchand', 'Christopher', '1991-09-12'),
(4, 'Lément', 'Aymeric', '1995-06-05'),
(5, 'Moussaid', 'Samir', '1990-08-01'),
(6, 'Balayn', 'Laurence', '1983-09-21'),
(7, 'Mouton', 'Charline', '1998-11-20'),
(8, 'Dargent', 'Alexandre', '1991-01-11'),
(9, 'Lembach', 'Celine', '1979-08-21'),
(10, 'Loegel', 'Ludovic', '1993-10-28'),
(11, 'Dieudonné', 'Michael', '1985-02-03'),
(12, 'Ikhelf', 'Fares', '1998-01-17'),
(13, 'Georgel', 'Yann', '1997-02-27'),
(14, 'Sandancourt', 'Eric', '1980-07-12'),
(15, 'Maucotel', 'Romain', '1997-08-07'),
(16, 'Aliémart', 'Justine', '1998-02-03'),
(17, 'Mtalsi', 'Salima', '1991-08-18');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
