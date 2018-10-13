-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 13 Octobre 2018 à 07:55
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `pw2`
--

-- --------------------------------------------------------

--
-- Structure de la table `evaluer`
--

CREATE TABLE IF NOT EXISTS `evaluer` (
  `id_eval` int(11) NOT NULL AUTO_INCREMENT,
  `id_evaluateur_eval` int(11) NOT NULL,
  `id_evaluer_eval` int(11) NOT NULL,
  `note_eval` varchar(11) NOT NULL,
  PRIMARY KEY (`id_eval`),
  KEY `evaluer_utilisateur0_FK` (`id_evaluer_eval`),
  KEY `id_evaluateur_eval` (`id_evaluateur_eval`,`id_evaluer_eval`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS POUR LA TABLE `evaluer`:
--   `id_evaluer_eval`
--       `utilisateur` -> `id_ut`
--   `id_evaluateur_eval`
--       `utilisateur` -> `id_ut`
--

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id_msg` int(11) NOT NULL AUTO_INCREMENT,
  `message_msg` text NOT NULL,
  `titre_msg` text NOT NULL,
  `date_msg` date NOT NULL,
  `id_expediteur_msg` int(11) NOT NULL,
  `id_destinateur_msg` int(11) NOT NULL,
  PRIMARY KEY (`id_msg`),
  KEY `message_utilisateur_FK` (`id_expediteur_msg`),
  KEY `message_utilisateur0_FK` (`id_destinateur_msg`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS POUR LA TABLE `message`:
--   `id_expediteur_msg`
--       `utilisateur` -> `id_ut`
--   `id_destinateur_msg`
--       `utilisateur` -> `id_ut`
--

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE IF NOT EXISTS `projet` (
  `id_prj` int(11) NOT NULL AUTO_INCREMENT,
  `titre_prj` varchar(50) NOT NULL,
  `type_prj` varchar(50) NOT NULL,
  `description_prj` varchar(50) NOT NULL,
  `lieu_realisation_prj` varchar(50) NOT NULL,
  `budget_indicatif_prj` varchar(50) NOT NULL,
  `date_debut_prj` date NOT NULL,
  `date_fin_prj` date NOT NULL,
  `id_ut_prj` int(11) NOT NULL,
  `id_secteur_prj` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_prj`),
  KEY `projet_utilisateur_FK` (`id_ut_prj`),
  KEY `projet_secteur0_FK` (`id_secteur_prj`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS POUR LA TABLE `projet`:
--   `id_ut_prj`
--       `utilisateur` -> `id_ut`
--   `id_secteur_prj`
--       `secteur` -> `id_secteur`
--

-- --------------------------------------------------------

--
-- Structure de la table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `titre_role` varchar(50) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `secteur`
--

CREATE TABLE IF NOT EXISTS `secteur` (
  `id_secteur` int(11) NOT NULL AUTO_INCREMENT,
  `nom_secteur` text NOT NULL,
  PRIMARY KEY (`id_secteur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `soumissioner`
--

CREATE TABLE IF NOT EXISTS `soumissioner` (
  `id_soum` int(11) NOT NULL AUTO_INCREMENT,
  `id_prj_soum` int(11) NOT NULL,
  `id_ut_soum` int(11) NOT NULL,
  `tarif_soum` varchar(50) NOT NULL,
  PRIMARY KEY (`id_soum`),
  KEY `id_ut_soum` (`id_ut_soum`),
  KEY `id_prj_soum` (`id_prj_soum`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS POUR LA TABLE `soumissioner`:
--   `id_prj_soum`
--       `projet` -> `id_prj`
--   `id_ut_soum`
--       `utilisateur` -> `id_ut`
--

-- --------------------------------------------------------

--
-- Structure de la table `type_entreprise`
--

CREATE TABLE IF NOT EXISTS `type_entreprise` (
  `id_type_etse` int(11) NOT NULL AUTO_INCREMENT,
  `nom_type_etse` varchar(50) NOT NULL,
  PRIMARY KEY (`id_type_etse`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_ut` int(11) NOT NULL AUTO_INCREMENT,
  `nom_ut` varchar(50) NOT NULL,
  `prenom_ut` varchar(50) NOT NULL,
  `nom_entreprise_ut` varchar(50) NOT NULL,
  `numero_entreprise_ut` varchar(50) NOT NULL,
  `adresse_ut` varchar(50) NOT NULL,
  `telephone_ut` varchar(50) NOT NULL,
  `courriel_ut` varchar(50) NOT NULL,
  `site_web_ut` varchar(50) NOT NULL,
  `lien_facebook_ut` varchar(50) NOT NULL,
  `lien_linkedin_ut` varchar(50) NOT NULL,
  `validation_ut` tinyint(1) NOT NULL,
  `suspension_ut` tinyint(1) NOT NULL,
  `mdp_ut` varchar(50) NOT NULL,
  `competence_ut` varchar(50) NOT NULL,
  `taux_horaire_ut` varchar(50) NOT NULL,
  `annee_experience_ut` varchar(50) NOT NULL,
  `disponibilite_ut` varchar(50) NOT NULL,
  `situation_pro_ut` varchar(50) NOT NULL,
  `apropos_ut` varchar(250) NOT NULL,
  `neq_ut` varchar(50) NOT NULL,
  `photo_ut` longblob NOT NULL,
  `id_role_ut` int(11) NOT NULL,
  `id_secteur_ut` int(11) DEFAULT NULL,
  `id_type_etse_ut` int(11) DEFAULT NULL,
  `id_ville_ut` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_ut`),
  KEY `utilisateur_role_FK` (`id_role_ut`),
  KEY `utilisateur_secteur0_FK` (`id_secteur_ut`),
  KEY `utilisateur_type_entreprise1_FK` (`id_type_etse_ut`),
  KEY `utilisateur_ville2_FK` (`id_ville_ut`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- RELATIONS POUR LA TABLE `utilisateur`:
--   `id_role_ut`
--       `role` -> `id_role`
--   `id_secteur_ut`
--       `secteur` -> `id_secteur`
--   `id_type_etse_ut`
--       `type_entreprise` -> `id_type_etse`
--   `id_ville_ut`
--       `ville` -> `id_ville`
--

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE IF NOT EXISTS `ville` (
  `id_ville` int(11) NOT NULL AUTO_INCREMENT,
  `nom_ville` varchar(50) NOT NULL,
  PRIMARY KEY (`id_ville`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `evaluer`
--
ALTER TABLE `evaluer`
  ADD CONSTRAINT `evaluer_utilisateur0_FK` FOREIGN KEY (`id_evaluer_eval`) REFERENCES `utilisateur` (`id_ut`),
  ADD CONSTRAINT `evaluer_utilisateur_FK` FOREIGN KEY (`id_evaluateur_eval`) REFERENCES `utilisateur` (`id_ut`);

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_utilisateur_FK` FOREIGN KEY (`id_expediteur_msg`) REFERENCES `utilisateur` (`id_ut`),
  ADD CONSTRAINT `message_utilisateur0_FK` FOREIGN KEY (`id_destinateur_msg`) REFERENCES `utilisateur` (`id_ut`);

--
-- Contraintes pour la table `projet`
--
ALTER TABLE `projet`
  ADD CONSTRAINT `projet_utilisateur_FK` FOREIGN KEY (`id_ut_prj`) REFERENCES `utilisateur` (`id_ut`),
  ADD CONSTRAINT `projet_secteur0_FK` FOREIGN KEY (`id_secteur_prj`) REFERENCES `secteur` (`id_secteur`);

--
-- Contraintes pour la table `soumissioner`
--
ALTER TABLE `soumissioner`
  ADD CONSTRAINT `soumissioner_projet_FK` FOREIGN KEY (`id_prj_soum`) REFERENCES `projet` (`id_prj`),
  ADD CONSTRAINT `soumissioner_utilisateur0_FK` FOREIGN KEY (`id_ut_soum`) REFERENCES `utilisateur` (`id_ut`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `utilisateur_role_FK` FOREIGN KEY (`id_role_ut`) REFERENCES `role` (`id_role`),
  ADD CONSTRAINT `utilisateur_secteur0_FK` FOREIGN KEY (`id_secteur_ut`) REFERENCES `secteur` (`id_secteur`),
  ADD CONSTRAINT `utilisateur_type_entreprise1_FK` FOREIGN KEY (`id_type_etse_ut`) REFERENCES `type_entreprise` (`id_type_etse`),
  ADD CONSTRAINT `utilisateur_ville2_FK` FOREIGN KEY (`id_ville_ut`) REFERENCES `ville` (`id_ville`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
