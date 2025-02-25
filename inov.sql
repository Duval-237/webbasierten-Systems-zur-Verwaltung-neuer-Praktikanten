-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 11 mars 2023 à 10:23
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `inov`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrator`
--

CREATE TABLE `administrator` (
  `ID` int(11) NOT NULL,
  `NOM` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `PASS` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `administrator`
--

INSERT INTO `administrator` (`ID`, `NOM`, `EMAIL`, `PASS`) VALUES
(1, 'azaph', 'azaphine@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Structure de la table `stagiaire`
--

CREATE TABLE `stagiaire` (
  `ID` int(11) NOT NULL,
  `NOM` varchar(255) NOT NULL,
  `PRENOM` varchar(255) NOT NULL,
  `SEXE` varchar(1) NOT NULL,
  `DOMAINE` varchar(255) NOT NULL,
  `AGE` int(11) NOT NULL,
  `ENCADREUR` varchar(255) NOT NULL,
  `TELEPHONE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `stagiaire`
--

INSERT INTO `stagiaire` (`ID`, `NOM`, `PRENOM`, `SEXE`, `DOMAINE`, `AGE`, `ENCADREUR`, `TELEPHONE`) VALUES
(1, 'Nzouekeu', 'Azaph', 'M', 'Programmation', 17, 'Mr Didier', 693596171),
(4, 'Salomon', 'Lopez', 'M', 'Infographie', 19, 'Mr Cedric', 656658423),
(5, 'Deffo', 'Ina', 'F', 'Cloud Computing', 16, 'Mr Cyril', 698215487),
(6, 'Fotso', 'Tatoum', 'M', 'Audio Visuel', 20, 'Mr Cedric', 684521898),
(8, 'Nguiawa', 'Michelle', 'F', 'Infographie', 20, 'Mr Cedric', 684521458),
(9, 'Matane', 'Murielle', 'F', 'Reseau', 20, 'Mr Frank', 678830510),
(10, 'Emassu', 'Emassu', 'M', 'Infographie', 19, 'Mr Cedric', 687452138),
(11, 'Yimen', 'Daril', 'M', 'Marketing Digital', 20, 'Mme Lilliane', 685123497),
(12, 'Meliego', 'anaisse', 'F', 'Cloud Computing', 17, 'Mr Cyril', 652148795),
(13, 'Z', 'z', 'M', 'Programmation', 0, 'Mr Didier', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `stagiaire`
--
ALTER TABLE `stagiaire`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `stagiaire`
--
ALTER TABLE `stagiaire`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
