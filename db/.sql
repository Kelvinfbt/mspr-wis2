-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mer. 15 déc. 2021 à 11:20
-- Version du serveur :  5.7.26
-- Version de PHP :  7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `msprwis2`
--

-- --------------------------------------------------------

--
-- Structure de la table `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `dislikes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` longtext,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `media` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `admin` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `email`, `password`, `created_at`, `updated_at`, `admin`) VALUES
(1, 'kelvin.fabert', NULL, NULL, 'fabert.kelvin@gmail.com', 'azerty', '2021-12-14 10:40:32', '2021-12-14 10:40:32', 1),
(2, 'coline', 'coline', 'cabus', 'azerty', 'azerty', '2021-12-14 11:28:41', '2021-12-14 11:28:41', NULL),
(3, 'kelvin44', NULL, NULL, 'fab@gmail.com', 'e778226c3a53bba4e214ab009a59e96e9a27514909edd1ed2bcd6dcf23b1d66f', '2021-12-14 13:45:37', '2021-12-14 13:45:37', NULL),
(4, 'azertyhua', NULL, NULL, 'azert@m.com', '9c0ada37bf74aeefae949fdfc90db0cf6eaf90192eff67d65887771f0585e055', '2021-12-14 13:49:29', '2021-12-14 13:49:29', NULL),
(5, 'azerty', NULL, NULL, 'azerty@gmail.com', 'e778226c3a53bba4e214ab009a59e96e9a27514909edd1ed2bcd6dcf23b1d66f', '2021-12-15 10:40:54', '2021-12-15 10:40:54', NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
