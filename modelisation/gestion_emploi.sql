-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 11 mai 2023 à 11:50
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_emploi`
--

-- --------------------------------------------------------

--
-- Structure de la table `absence`
--

DROP TABLE IF EXISTS `absence`;
CREATE TABLE IF NOT EXISTS `absence` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Id_derouler_cours` int(11) NOT NULL,
  `NumIns` int(11) NOT NULL,
  `est_actif_le` int(11) NOT NULL,
  `mise_a_jour_le` timestamp NOT NULL,
  `creer_le` int(11) NOT NULL,
  `supprimer_le` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `absence_derouler_cours_id_derouler_cours` (`Id_derouler_cours`),
  KEY `absence_inscription_NumIns` (`NumIns`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `chapitre`
--

DROP TABLE IF EXISTS `chapitre`;
CREATE TABLE IF NOT EXISTS `chapitre` (
  `Num_chapitre` int(11) NOT NULL AUTO_INCREMENT,
  `Lib_chapitre` varchar(255) CHARACTER SET latin1 NOT NULL,
  `est_actif` int(11) NOT NULL,
  `mise_a_jour_le` timestamp NOT NULL,
  `est_supprimer` int(11) NOT NULL,
  `creer_le` int(11) NOT NULL,
  PRIMARY KEY (`Num_chapitre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `chapitre_matiere`
--

DROP TABLE IF EXISTS `chapitre_matiere`;
CREATE TABLE IF NOT EXISTS `chapitre_matiere` (
  `Id_chapitre` int(11) NOT NULL AUTO_INCREMENT,
  `Num_chapitre` int(11) NOT NULL,
  `Codmat` int(11) NOT NULL,
  `mise_a_jour_le` timestamp NOT NULL,
  `creer_le` int(11) NOT NULL,
  `est_supprimer` int(11) NOT NULL,
  `est_actif` int(11) NOT NULL,
  PRIMARY KEY (`Id_chapitre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

DROP TABLE IF EXISTS `cours`;
CREATE TABLE IF NOT EXISTS `cours` (
  `Numcours` int(11) NOT NULL AUTO_INCREMENT,
  `Codemat` int(11) NOT NULL,
  `Numprof` int(11) NOT NULL,
  `Codefil` int(11) NOT NULL,
  `Jour` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Heure_deb` time NOT NULL,
  `Heure_fin` time NOT NULL,
  `Numsal` int(11) NOT NULL,
  `est_actif` int(11) NOT NULL,
  `est_supprimer` int(11) NOT NULL,
  `mise_a_jour_le` timestamp NOT NULL,
  `creer_le` int(11) NOT NULL,
  PRIMARY KEY (`Numcours`),
  KEY `cours_professeur_Numprof` (`Numprof`),
  KEY `cours_filiere_Codfil` (`Codefil`),
  KEY `cours_matiere_Codmat` (`Codemat`),
  KEY `cours_salle_Numsal` (`Numsal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `derouler_cours`
--

DROP TABLE IF EXISTS `derouler_cours`;
CREATE TABLE IF NOT EXISTS `derouler_cours` (
  `Id_derouler_cours` int(11) NOT NULL AUTO_INCREMENT,
  `Numcours` int(11) NOT NULL,
  `Date_cours` timestamp NOT NULL,
  `HRdeb` time NOT NULL,
  `HRfin` time NOT NULL,
  `creer_le` int(11) NOT NULL,
  `est_supprimer` int(11) NOT NULL,
  `est_actif` int(11) NOT NULL,
  `mise_a_jour_le` timestamp NOT NULL,
  PRIMARY KEY (`Id_derouler_cours`),
  KEY `Derouler_cours_cours_Numcours` (`Numcours`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `Matricule` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Prenom` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Sexe` varchar(255) CHARACTER SET latin1 NOT NULL,
  `est_actif` int(11) NOT NULL,
  `est_supprimer` int(11) NOT NULL,
  `creer_le` int(11) NOT NULL,
  `mise_a_jour_le` timestamp NOT NULL,
  PRIMARY KEY (`Matricule`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

DROP TABLE IF EXISTS `filiere`;
CREATE TABLE IF NOT EXISTS `filiere` (
  `Codefil` int(11) NOT NULL AUTO_INCREMENT,
  `Libfil` varchar(255) CHARACTER SET latin1 NOT NULL,
  `est_actif` int(11) NOT NULL,
  `est_supprimer` int(11) NOT NULL,
  `mise_a_jour_le` timestamp NOT NULL,
  `creer_le` int(11) NOT NULL,
  PRIMARY KEY (`Codefil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `NumIns` int(11) NOT NULL AUTO_INCREMENT,
  `Matricule` int(11) NOT NULL,
  `Codfil` int(11) NOT NULL,
  `DateIns` date NOT NULL,
  `Annee_Ins` year(4) NOT NULL,
  `est_actif` int(11) NOT NULL,
  `est_supprimer` int(11) NOT NULL,
  `creer_le` int(11) NOT NULL,
  `mise_a_jour_le` timestamp NOT NULL,
  PRIMARY KEY (`NumIns`),
  KEY `inscription_etudiant_Matricule` (`Matricule`),
  KEY `inscription_filiere_Codefil` (`Codfil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

DROP TABLE IF EXISTS `matiere`;
CREATE TABLE IF NOT EXISTS `matiere` (
  `Codemat` int(11) NOT NULL AUTO_INCREMENT,
  `Libmat` varchar(255) CHARACTER SET latin1 NOT NULL,
  `coef` int(11) NOT NULL,
  `Nbmax` int(11) NOT NULL,
  `est_actif` int(11) NOT NULL,
  `est_supprimer` int(11) NOT NULL,
  `creer_le` int(11) NOT NULL,
  `mise_a_jour_le` timestamp NOT NULL,
  PRIMARY KEY (`Codemat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

DROP TABLE IF EXISTS `professeur`;
CREATE TABLE IF NOT EXISTS `professeur` (
  `numprof` int(11) NOT NULL AUTO_INCREMENT,
  `nomprof` varchar(255) CHARACTER SET latin1 NOT NULL,
  `est_actif` int(11) NOT NULL,
  `est_supprimer` int(11) NOT NULL,
  `creer_le` int(11) NOT NULL,
  `mise_a_jour_le` timestamp NOT NULL,
  PRIMARY KEY (`numprof`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `responsable`
--

DROP TABLE IF EXISTS `responsable`;
CREATE TABLE IF NOT EXISTS `responsable` (
  `Id_responsable` int(11) NOT NULL AUTO_INCREMENT,
  `NumIns` int(11) NOT NULL,
  `Codfil` int(11) NOT NULL,
  `est_actif` int(11) NOT NULL,
  `est_supprimer` int(11) NOT NULL,
  `creer_le` int(11) NOT NULL,
  `mise_a_jour_le` timestamp NOT NULL,
  PRIMARY KEY (`Id_responsable`),
  KEY `responsable_inscriptions_NumIns` (`NumIns`),
  KEY `responsable_filiere_Cod_fil` (`Codfil`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

DROP TABLE IF EXISTS `salle`;
CREATE TABLE IF NOT EXISTS `salle` (
  `Numsal` int(11) NOT NULL AUTO_INCREMENT,
  `Capacite` int(11) NOT NULL,
  `Typesal` varchar(255) CHARACTER SET latin1 NOT NULL,
  `Nbmax` int(11) NOT NULL,
  `Nb_defectueux` int(11) NOT NULL,
  `Nb_dispo` int(11) NOT NULL,
  `est_actif` int(11) NOT NULL,
  `est_supprimer` int(11) NOT NULL,
  `creer_le` int(11) NOT NULL,
  `mise_a_jour_le` timestamp NOT NULL,
  PRIMARY KEY (`Numsal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `token`
--

DROP TABLE IF EXISTS `token`;
CREATE TABLE IF NOT EXISTS `token` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `est_actif` tinyint(4) NOT NULL DEFAULT '1',
  `est_supprimer` tinyint(4) NOT NULL DEFAULT '0',
  `creer_le` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `maj_le` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `token`
--

INSERT INTO `token` (`id`, `user_id`, `type`, `token`, `est_actif`, `est_supprimer`, `creer_le`, `maj_le`) VALUES
(14, 71, 'VALIDATION_COMPTE', '644ab0559fc2c', 1, 0, '2023-04-27 17:26:45', '2023-04-27 17:26:45'),
(13, 70, 'VALIDATION_COMPTE', '644a5315e2432', 1, 0, '2023-04-27 10:48:54', '2023-04-27 10:48:54'),
(12, 69, 'VALIDATION_COMPTE', '644972e8aa97a', 0, 1, '2023-04-26 18:52:24', '2023-04-26 17:52:48'),
(11, 68, 'VALIDATION_COMPTE', '644971e02f68a', 0, 1, '2023-04-26 18:48:00', '2023-04-26 17:48:47'),
(10, 67, 'VALIDATION_COMPTE', '644970ef6bed2', 0, 1, '2023-04-26 18:43:59', '2023-04-26 17:44:27'),
(9, 66, 'VALIDATION_COMPTE', '64496f3f563e1', 1, 0, '2023-04-26 18:36:47', '2023-04-26 18:36:47'),
(8, 65, 'VALIDATION_COMPTE', '64496d290c6af', 1, 0, '2023-04-26 18:27:53', '2023-04-26 18:27:53'),
(15, 72, 'VALIDATION_COMPTE', '644ab1a469038', 0, 1, '2023-04-27 17:32:20', '2023-04-27 16:36:05'),
(16, 73, 'VALIDATION_COMPTE', '644ab3926eca4', 0, 1, '2023-04-27 17:40:34', '2023-04-27 16:41:18'),
(17, 74, 'VALIDATION_COMPTE', '644ab4c9e79a8', 0, 1, '2023-04-27 17:45:45', '2023-04-27 16:54:46');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `sexe` varchar(255) DEFAULT NULL,
  `date_de_naissance` date DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) DEFAULT NULL,
  `est_actif` int(11) DEFAULT NULL,
  `profil` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `creer_le` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `est_supprimer` int(11) DEFAULT NULL,
  `mis_a_jour_le` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `email_valide` varchar(255) DEFAULT NULL,
  `nom_utilisateur` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=MyISAM AUTO_INCREMENT=75 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `nom`, `prenom`, `sexe`, `date_de_naissance`, `email`, `mot_de_passe`, `est_actif`, `profil`, `avatar`, `creer_le`, `est_supprimer`, `mis_a_jour_le`, `email_valide`, `nom_utilisateur`) VALUES
(70, 'Ronney', 'Wayne', NULL, NULL, 'childohouedanou1998@gmail.com', 'a642a77abd7d4f51bf9226ceaf891fcbb5b299b8', NULL, 'Directeur des études', NULL, '2023-04-27 10:48:53', NULL, '2023-04-27 10:48:53', NULL, 'Ronney10'),
(74, 'Houedanou', 'Rom&eacute;o', NULL, NULL, 'educactionapp@gmail.com', '04f081741466827161bede82a374af0ec9a39e31', 1, 'Directeur des études', NULL, '2023-04-27 17:45:45', 0, '2023-05-11 07:58:34', NULL, 'Childo10');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `absence`
--
ALTER TABLE `absence`
  ADD CONSTRAINT `absence_derouler_cours_id_derouler_cours` FOREIGN KEY (`Id_derouler_cours`) REFERENCES `derouler_cours` (`Id_derouler_cours`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `absence_inscription_NumIns` FOREIGN KEY (`NumIns`) REFERENCES `inscription` (`NumIns`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `cours`
--
ALTER TABLE `cours`
  ADD CONSTRAINT `cours_filiere_Codfil` FOREIGN KEY (`Codefil`) REFERENCES `filiere` (`Codefil`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cours_matiere_Codmat` FOREIGN KEY (`Codemat`) REFERENCES `matiere` (`Codemat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cours_professeur_Numprof` FOREIGN KEY (`Numprof`) REFERENCES `professeur` (`numprof`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cours_salle_Numsal` FOREIGN KEY (`Numsal`) REFERENCES `salle` (`Numsal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `derouler_cours`
--
ALTER TABLE `derouler_cours`
  ADD CONSTRAINT `Derouler_cours_cours_Numcours` FOREIGN KEY (`Numcours`) REFERENCES `cours` (`Numcours`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD CONSTRAINT `inscription_etudiant_Matricule` FOREIGN KEY (`Matricule`) REFERENCES `etudiant` (`Matricule`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `inscription_filiere_Codefil` FOREIGN KEY (`Codfil`) REFERENCES `filiere` (`Codefil`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `responsable`
--
ALTER TABLE `responsable`
  ADD CONSTRAINT `responsable_filiere_Cod_fil` FOREIGN KEY (`Codfil`) REFERENCES `filiere` (`Codefil`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `responsable_inscriptions_NumIns` FOREIGN KEY (`NumIns`) REFERENCES `inscription` (`NumIns`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
