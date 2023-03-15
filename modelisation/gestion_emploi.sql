-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 09 mars 2023 à 14:10
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
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `sexe` varchar(255) NOT NULL,
  `date_de_naissance` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `est_actif` int(11) NOT NULL,
  `profil` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `est_supprimer` int(11) NOT NULL,
  `creer_le` int(11) NOT NULL,
  `mis_a_jour_le` timestamp NOT NULL,
  `email_valide` varchar(255) NOT NULL,
  `telephone_valide` int(11) NOT NULL,
  `nom_utilisateur` varchar(255) NOT NULL,
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

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
