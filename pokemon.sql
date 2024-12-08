-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : dim. 08 déc. 2024 à 21:13
-- Version du serveur : 8.0.30
-- Version de PHP : 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pokemonbattle`
--

-- --------------------------------------------------------

--
-- Structure de la table `pokemon`
--

CREATE TABLE `pokemon` (
  `id` int NOT NULL,
  `nom` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `pointsDeVie` float NOT NULL,
  `nomAtk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nomAtkSpe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `puissanceAttaque` int NOT NULL,
  `defense` float NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `pokemon`
--

INSERT INTO `pokemon` (`id`, `nom`, `type`, `pointsDeVie`, `nomAtk`, `nomAtkSpe`, `puissanceAttaque`, `defense`, `img`) VALUES
(1, 'Aquali', 'Eau', 150, 'Aqua-Jet', 'Hydrocanon', 40, 0.6, '/assets/image/Aquali.jpg'),
(2, 'Arcanin', 'Feu', 150, 'Crocs Feu', 'Déflagration', 40, 0.6, '/assets/image/Arcanine.jpg'),
(3, 'Phyllali', 'Plante', 150, 'Lame-Feuille', 'Tempête Verte', 40, 0.6, '/assets/image/Phyllali.jpg'),
(4, 'Moustillon', 'Eau', 75, 'Coquilame', 'Vibraqua', 60, 0.4, '/assets/image/Moustillon.jpg'),
(5, 'Héricendre', 'Feu', 100, 'Roulade', 'Lance-Flammes', 50, 0.5, '/assets/image/Héricendre.jpg'),
(6, 'Bulbizarre', 'Plante', 100, 'Fouet Lianes', 'Canon Graine', 50, 0.5, '/assets/image/Bulbizarre.jpg'),
(7, 'Tiplouf', 'Eau', 100, 'Bulle d\'O', 'Laser Glace', 50, 0.5, '/assets/image/Tiplouf.jpg'),
(8, 'Évoli', 'Feu', 75, 'Vive-Attaque', 'Ball\'Ombre', 60, 0.4, '/assets/image/Evoli.jpg'),
(9, 'Chenipan', 'Plante', 75, 'Charge', 'Sécrétion', 60, 0.4, '/assets/image/Chenipan.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `pokemon`
--
ALTER TABLE `pokemon`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `pokemon`
--
ALTER TABLE `pokemon`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
