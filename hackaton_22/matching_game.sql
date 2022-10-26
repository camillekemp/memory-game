-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 26 oct. 2022 à 11:40
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
-- Base de données : `hackathon`
--

-- --------------------------------------------------------

--
-- Structure de la table `scoreshtml`
--

CREATE TABLE `scoreshtml` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `pointHTML` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `scoresphp`
--

CREATE TABLE `scoresphp` (
  `id` int(11) NOT NULL,
  `iduser` int(11) NOT NULL,
  `pointPHP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `pass` int(200) NOT NULL,
  `pointsUtilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `email`, `pass`, `pointsUtilisateur`) VALUES
(15, 'anissa', 'anissa@hotmail.com', 0, 0),
(16, 'anissa', 'anissa@gmail.com', 0, 0),
(17, 'anissa', 'anissa@gmail.com', 0, 0),
(18, 'anissa', 'anissa@gmail.com', 0, 0),
(19, 'Anissa', 'anissa@gmail.com', 0, 0),
(20, 'Anissa', 'anissa@gmail.com', 0, 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `scoreshtml`
--
ALTER TABLE `scoreshtml`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `pointHTML` (`pointHTML`);

--
-- Index pour la table `scoresphp`
--
ALTER TABLE `scoresphp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `pointPHP` (`pointPHP`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `scoreshtml`
--
ALTER TABLE `scoreshtml`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `scoresphp`
--
ALTER TABLE `scoresphp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `scoreshtml`
--
ALTER TABLE `scoreshtml`
  ADD CONSTRAINT `scoreshtml_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `scoresphp`
--
ALTER TABLE `scoresphp`
  ADD CONSTRAINT `scoresphp_ibfk_1` FOREIGN KEY (`iduser`) REFERENCES `user` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
