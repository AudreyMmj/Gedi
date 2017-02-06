-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 16 Novembre 2016 à 11:59
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  5.6.24

-- ==========================
-- Base de données : GEDI
-- ==========================

-- ====================================================================================================
-- Données de la table Utilisateur
--
INSERT INTO Utilisateur (id_utilisateur, login, mot_de_passe, nom, prenom, salt, role, actif, date_creation, date_modification) VALUES
(4, 'anthony@email.fr', '$2y$13$LrssCwYymE2Uir9DeFKZzOXiZ.yqFI87lyGz5C2cHs1sXQ7BO/8wS', 'Gumb', 'Anthony', '4645d69b9cb6e93c1b4a32f', 'ROLE_ADMIN', 1, '2017-02-02 13:17:33', '2017-02-02 13:17:46'),
(2, 'yasmine@email.fr', '$2y$13$xK22su06V.PyqfV1JJegV.BDd9MzkBgSBODVuJXeq36xi5j9b5QQy', 'Amar', 'Yasmine', '7e73d7731d88e74141609b4', 'ROLE_USER', 1, '2017-01-31 16:58:51', '2017-01-31 16:58:51'),
(3, 'sofiane@email.fr', '$2y$13$muywvr0bLudB6V14JHcdrOEFjYqHHZTVTS7FAbaXWvLIPRiMYyPq2', 'Abidi', 'Sofiane', 'ebcca079406d4206bfec116', 'ROLE_USER', 1, '2017-01-31 16:58:30', '2017-01-31 16:58:30'),
(1, 'admin@admin.com', '$2y$13$YpmnkOeWQt9f.VU5sfzkWujwao3Z0/ysimu7xiST0I2go3RSBiLrW', 'Wayne', 'John', '8bcebdbdeeb5d77b5ab2f38', 'ROLE_USER', 1, '2017-02-04 16:22:26', '2017-02-04 16:22:26'),
(5, 'audrey@email.com', '$2y$13$nOyN8ho/HkxJ4XTP99dzr.5Gj4iJ4/YhJPOqdaHxCoZ.JUgauaIry', 'Mommeja', 'Audrey', '9a56bdbfeab8ecb89c6384a', 'ROLE_USER', 0, '2017-01-31 16:58:01', '2017-02-05 08:42:55');

-- ====================================================================================================
-- Données de la table Projet
--

INSERT INTO Projet (nom, id_utilisateur_fk_projet) VALUES
  ('Projet1', 1),
  ('Projet2', 2),
  ('Projet3', 3),
  ('Projet4', 4);

-- ====================================================================================================
-- Données de la table Document
--

INSERT INTO Document (nom, type_doc, tag, resume, id_projet_fk_document, id_utilisateur_fk_document) VALUES
  ('Document1', 'doc', 'tag1', 'resume1', 1, 1),
  ('Document2', 'pdf', 'tag2', 'resume2', 2, 2),
  ('Document3', 'xlsx', 'tag3', 'resume3', 3, 3),
  ('Document4', 'avi', 'tag4', 'resume4', 4, 4);

-- ====================================================================================================
-- Données de la table Groupe
--

INSERT INTO Groupe (nom, id_utilisateur_fk_groupe) VALUES
  ('Groupe1', 1),
  ('Groupe2', 2),
  ('Groupe3', 3),
  ('Groupe4', 4);

-- ====================================================================================================
-- Données de la table Utilisateur_Groupe
--

INSERT INTO Utilisateur_Groupe (id_utilisateur_ug, id_groupe_ug) VALUES
  (1, 1),
  (2, 2),
  (3, 3),
  (4, 4);

-- ====================================================================================================
-- Données de la table Groupe_Document
--

INSERT INTO Groupe_Document (habilitation, id_groupe_gd, id_document_gd) VALUES
  ('ADMIN', 1, 1),
  ('ADMIN', 2, 2),
  ('USER', 3, 3),
  ('GUEST', 4, 4);

-- ====================================================================================================
-- Données de la table Document_Utilisateur
--

INSERT INTO Document_Utilisateur (habilitation, id_document_du, id_utilisateur_du) VALUES
  ('ADMIN', 1, 1),
  ('ADMIN', 2, 2),
  ('USER', 3, 3),
  ('GUEST', 4, 4);

-- ====================================================================================================
-- Données de la table Groupe_Projet
--

INSERT INTO Groupe_Projet (habilitation, id_groupe_gp, id_projet_gp) VALUES
  ('ADMIN', 1, 1),
  ('ADMIN', 2, 2),
  ('USER', 3, 3),
  ('GUEST', 4, 4);

-- /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
-- /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
-- /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
