-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Dim 19 Avril 2015 à 21:29
-- Version du serveur :  5.5.38
-- Version de PHP :  5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `Stadline`
--

-- --------------------------------------------------------

--
-- Structure de la table `Champs`
--

CREATE TABLE `Champs` (
`id` int(11) NOT NULL,
  `textField1` varchar(255) NOT NULL,
  `textField2` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Champs`
--

INSERT INTO `Champs` (`id`, `textField1`, `textField2`) VALUES
(19, '19', 'le permis'),
(22, '40', 'été dans un parc d''attraction');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Champs`
--
ALTER TABLE `Champs`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Champs`
--
ALTER TABLE `Champs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;