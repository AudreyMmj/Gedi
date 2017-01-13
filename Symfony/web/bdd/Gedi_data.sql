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

INSERT INTO Utilisateur (login, mot_de_passe, nom, prenom, salt, role) VALUES
  ('anthony@email.com', 'azerty', 'gumb', 'ANTHONY', '22112a577edbc6141a01ee6', 'ROLE_USER'),
  ('yasmine@email.com', 'azerty', 'aMar', 'yasmine', '22112a577edbc6141a01ee6', 'ROLE_USER'),
  ('sofiane@email.fr', 'azerty', 'abidi', 'sofiane', '22112a577edbc6141a01ee6', 'ROLE_USER'),
  ('admin@admin.com', '$2y$13$F9v8pl5u5WMrCorP9MLyJeyIsOLj.0/xqKd/hqa5440kyeB7FQ8te', 'John', 'John',
   '22112a577edbc6141a01ee6', 'ROLE-ADMIN'),
  ('audrey@email.eu', 'azerty', 'mommeja', 'audrey', '22112a577edbc6141a01ee6', 'ROLE_USER');

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
