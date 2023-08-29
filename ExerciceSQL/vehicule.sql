-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 29 Août 2023 à 21:28
-- Version du serveur :  5.7.11
-- Version de PHP :  7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `vehicule`
--

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

CREATE TABLE `voiture` (
  `id` int(11) NOT NULL,
  `marque` varchar(50) CHARACTER SET utf16 NOT NULL,
  `modele` varchar(50) CHARACTER SET utf16 NOT NULL,
  `prix` decimal(10,0) NOT NULL,
  `url` varchar(255) CHARACTER SET utf16 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `voiture`
--

INSERT INTO `voiture` (`id`, `marque`, `modele`, `prix`, `url`) VALUES
(1, 'Toyota', 'Corolla', '20000', 'https://www.motorbiscuit.com/wp-content/uploads/2022/02/2003-to-2006-Toyota-Corolla.jpg'),
(2, 'Ford', 'Mustang', '40000', 'https://www.hdcarwallpapers.com/walls/2015_roush_ford_mustang_rs-HD.jpg'),
(3, 'Honda', 'Civic', '18000', 'https://cdn-fastly.thetruthaboutcars.com/media/2022/06/30/8752519/2017-honda-civic-hatchback-pricing-power-announced-for-compact-cavern-on-wheels.jpg?size=720x845&nocrop=1'),
(4, 'BMW', 'Série 3', '22000', 'https://images.caradisiac.com/images/2/5/0/1/172501/S0-essai-video-bmw-serie-3-574286.jpg');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `voiture`
--
ALTER TABLE `voiture`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `voiture`
--
ALTER TABLE `voiture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
