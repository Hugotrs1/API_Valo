-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 21 oct. 2024 à 13:25
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `agents_valorant`
--

-- --------------------------------------------------------

--
-- Structure de la table `agents`
--

CREATE TABLE `agents` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `classe` text NOT NULL,
  `nationalite` text NOT NULL,
  `annee_sortie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `agents`
--

INSERT INTO `agents` (`id`, `nom`, `classe`, `nationalite`, `annee_sortie`) VALUES
(1, 'Brimstone', 'Contrôleur', 'USA', 2020),
(2, 'Viper', 'Contrôleur', 'USA', 2020),
(3, 'Omen', 'Contrôleur', 'Inconnu', 2020),
(4, 'Killjoy', 'Sentinelle', 'Allemagne', 2020),
(5, 'Cypher', 'Sentinelle', 'Maroc', 2020),
(6, 'Sova', 'Initiateur', 'Russie', 2020),
(7, 'Sage', 'Sentinelle', 'Chine', 2020),
(8, 'Phoenix', 'Dueliste', 'Royaume-Uni', 2020),
(9, 'Jett', 'Dueliste', 'Corée du Sud', 2020),
(10, 'Reyna', 'Dueliste', 'Mexique', 2020),
(11, 'Raze', 'Dueliste', 'Brésil', 2020),
(12, 'Breach', 'Initiateur', 'Suède', 2020),
(13, 'Skye', 'Initiateur', 'Australie', 2020),
(14, 'Yoru', 'Dueliste', 'Japon', 2021),
(15, 'Astra', 'Contrôleur', 'Ghana', 2021),
(16, 'KAYO', 'Initiateur', 'Inconnue', 2021),
(17, 'Chamber', 'Sentinelle', 'France', 2021),
(18, 'Neon', 'Dueliste', 'Philippine', 2022),
(19, 'Fade', 'Initiateur', 'Turquie', 2022),
(20, 'Harbor', 'Contrôleur', 'Inde', 2022),
(21, 'Gekko', 'Initiateur', 'USA', 2023),
(22, 'Deadlock', 'Sentinelle', 'Norvège', 2023),
(23, 'Iso', 'Dueliste', 'Chine', 2024),
(24, 'Clove', 'Contrôleur', 'Royaume-Uni', 2024),
(25, 'Vyse', 'Sentinelle', 'Corée du Sud', 2024);

-- --------------------------------------------------------

--
-- Structure de la table `armes`
--

CREATE TABLE `armes` (
  `id` int(11) NOT NULL,
  `nom` text NOT NULL,
  `prix` int(11) NOT NULL,
  `typee` text NOT NULL,
  `mode_de_tir` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `armes`
--

INSERT INTO `armes` (`id`, `nom`, `prix`, `typee`, `mode_de_tir`) VALUES
(1, 'Vandal', 2900, 'fm', 'Automatique'),
(2, 'Phantom', 2900, 'fm', 'Automatique'),
(3, 'Operator', 4700, 'fpr', 'Coup par Coup'),
(4, 'Sheriff', 800, 'ap', 'Semi-automatique'),
(5, 'Ghost', 500, 'ap', 'Semi-automatique'),
(6, 'Classic', 0, 'ap', 'Semi-automatique'),
(7, 'Spectre', 1600, 'pm', 'Automatique'),
(8, 'Bulldog', 2050, 'fm', 'Rafale / Automatique'),
(9, 'Guardian', 2250, 'fm', 'Semi-automatique'),
(10, 'Marshal', 950, 'fpr', 'Coup par Coup'),
(11, 'Frenzy', 450, 'ap', 'Automatique'),
(12, 'Bucky', 850, 'fp', 'Pompe'),
(13, 'Judge', 1850, 'fp', 'Automatique'),
(14, 'Shorty', 150, 'ap', 'Pompe'),
(15, 'Ares', 1600, 'ml', 'Automatique'),
(16, 'Odin', 3200, 'ml', 'Automatique'),
(17, 'Stinger', 1100, 'pm', 'Automatique'),
(18, 'Outlaw', 2400, 'fpr', 'Coup par Coup');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `armes`
--
ALTER TABLE `armes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `agents`
--
ALTER TABLE `agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `armes`
--
ALTER TABLE `armes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
