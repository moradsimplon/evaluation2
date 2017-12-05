-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost
-- Généré le :  Mar 05 Décembre 2017 à 11:41
-- Version du serveur :  5.7.20
-- Version de PHP :  7.1.11-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `evaluation2`
--

-- --------------------------------------------------------

--
-- Structure de la table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `Title` text NOT NULL,
  `Author` text NOT NULL,
  `RealeaseDate` date NOT NULL,
  `Resume` text NOT NULL,
  `Category` text NOT NULL,
  `borrowedBook` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `books`
--

INSERT INTO `books` (`id`, `Title`, `Author`, `RealeaseDate`, `Resume`, `Category`, `borrowedBook`) VALUES
(3, 'le lac', 'julien aurua', '2017-11-07', 'l\'histoire d\'une femme ', 'documentaire', NULL),
(5, 'gfjhfjh', 'jhgjkjhgh', '2017-12-13', 'jsdcjsdsfk', 'documentaire', NULL),
(6, 'sdvs', 'sdgsd', '2017-12-13', 'sdgsdgs', 'Thriller', NULL),
(7, 'lkazeiodefip', 'odohds', '2017-12-15', 'vw<wxvxwcvwxbxw', 'Roman', NULL),
(8, 'gfjhfjh', 'sdsssd', '2017-10-04', 'sdxdsc vssdswvcs', 'History', NULL),
(9, 'mksdmlpsdml', 'doidsoi', '2017-10-03', 'ojsdjohsdpijiszdmkjk', 'Literary', NULL),
(10, 'lkjjsdklsc', 'ohsslkdkhsdm', '2017-12-06', 'kjnsdlknscmlkhn', 'Thriller', '112345');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `codeUser` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `adress` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `codeUser`, `name`, `firstname`, `adress`) VALUES
(2, 43456, 'cathie', 'gerard', '123 rue de la mouette 59100 roubaix'),
(3, 213456, 'samir', 'samos', '23 rue geridot 59000 Lille');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
