-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : ven. 22 avr. 2022 à 19:12
-- Version du serveur : 5.7.34
-- Version de PHP : 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `forum`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`category_id`, `name`, `description`, `image`, `user_id`) VALUES
(1, 'DB Legends', 'Venez discuter autour du jeu mobile DB Legends !', 'https://styles.redditmedia.com/t5_5q9iz/styles/profileIcon_haxfdp66tka51.png?width=256&height=256&crop=256:256,smart&s=9de52c49622c8285ad51e89cbe3bfb9fb4b0dd00', 9),
(3, 'Animes', 'Venez discuter autour de l\'anime de Dragon Ball !', 'https://cachedimages.podchaser.com/256x256/aHR0cHM6Ly9zc2wtc3RhdGljLmxpYnN5bi5jb20vcC9hc3NldHMvYy84LzEvMC9jODEwMmYyYWIxNTAwZmQ4L2Riem5leHRkaW1lbnNpb25fMDEuanBn/aHR0cHM6Ly93d3cucG9kY2hhc2VyLmNvbS9pbWFnZXMvbWlzc2luZy1pbWFnZS5wbmc%3D', 9),
(4, 'Mangas', 'Venez discuter du mangas Dragon Ball', 'https://i.pinimg.com/564x/d6/99/6b/d6996bf47817e4ebf1a461af754dd29e.jpg', 9);

-- --------------------------------------------------------

--
-- Structure de la table `commentary`
--

CREATE TABLE `commentary` (
  `commentary_id` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `commentary_date` date DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentary`
--

INSERT INTO `commentary` (`commentary_id`, `message`, `commentary_date`, `user_id`, `post_id`) VALUES
(1, 'Ma team est composé de Whis, Beerus, Majin Vegeta, Goku SSJ Blue et enfin EL FAMOSO Gogeta Ultra haha !', '2022-04-22', 9, 2);

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `post_date` date NOT NULL,
  `user_id` int(11) NOT NULL,
  `subcategory_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`post_id`, `title`, `message`, `post_date`, `user_id`, `subcategory_id`) VALUES
(1, 'Legends All Star Vol.13', 'J\'ai dropé Whis et Golden Freezer et vous ?', '2022-04-19', 9, 1),
(2, 'Vos Teams', 'Montrez-nous vos teams pour le PvP !!', '2022-04-20', 9, 2);

-- --------------------------------------------------------

--
-- Structure de la table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcategory_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `subcategory`
--

INSERT INTO `subcategory` (`subcategory_id`, `title`, `description`, `category_id`, `user_id`) VALUES
(1, 'Invocations', 'Partager vos dernières invocations !', 1, 9),
(2, 'PvP', 'Vous souhaitez faire des combats en ligne ? C\'est ici que ça se passe !', 1, 9),
(3, 'PvE', 'Des difficultés dans l\'histoire ? Faites-vous aider 😀', 1, 9),
(4, 'Dragon Ball ', 'Nostalgique ? C\'est ici que ça se passe !', 3, 9),
(5, 'Dragon Ball Z', 'Venez discuter de la suite de la saison de Dragon Ball Z', 3, 9),
(6, 'Dragon Ball Super', 'Fanboy ou hater de Dragon Ball Super ? À vos débats !', 3, 9),
(7, 'Dragon Ball', 'Venez discuter du mangas japonais écrit et illustré par Akira Toriyama', 4, 9),
(8, 'Naruto', 'Vous avez lu le manga écrit et dessiné par Masashi Kishimoto ? Venez en parler !', 4, 9);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `pseudo` varchar(30) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) DEFAULT NULL COMMENT 'True/False (1 = true ; 0 = false)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`user_id`, `lastname`, `firstname`, `pseudo`, `email`, `password`, `admin`) VALUES
(9, 'Merazga', 'Sammy', 'Smy', 'smy@test.com', '4813494d137e1631bba301d5acab6e7bb7aa74ce1185d456565ef51d737677b2', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `fk_user__id` (`user_id`);

--
-- Index pour la table `commentary`
--
ALTER TABLE `commentary`
  ADD PRIMARY KEY (`commentary_id`),
  ADD KEY `user_id_fk` (`user_id`),
  ADD KEY `post_id_fk` (`post_id`);

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `fk_user_id` (`user_id`),
  ADD KEY `fk_category_id` (`subcategory_id`);

--
-- Index pour la table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcategory_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `fk_user___id` (`user_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `UC_email` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `commentary`
--
ALTER TABLE `commentary`
  MODIFY `commentary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcategory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `fk_user__id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Contraintes pour la table `commentary`
--
ALTER TABLE `commentary`
  ADD CONSTRAINT `post_id_fk` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`),
  ADD CONSTRAINT `user_id_fk` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Contraintes pour la table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `fk_subcategory_id` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategory` (`subcategory_id`),
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Contraintes pour la table `subcategory`
--
ALTER TABLE `subcategory`
  ADD CONSTRAINT `category_id` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`),
  ADD CONSTRAINT `fk_user___id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
