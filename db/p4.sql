-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Sam 12 Janvier 2019 à 22:39
-- Version du serveur :  5.7.14
-- Version de PHP :  7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `p4`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `login`, `password`) VALUES
(1, 'audrey', 'audrey');

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `attente_moderation` varchar(255) NOT NULL,
  `post_id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `comment_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `attente_moderation`, `post_id`, `author`, `comment`, `comment_date`) VALUES
(1, '1', 1, 'moi', 'commentaire 1 ', '2018-11-09'),
(2, '', 2, 're moi ', 'commentaire 2 ', '2018-11-09'),
(3, '1', 20, 'moi', 'postpostpost', '2018-11-20'),
(4, '', 20, 'moi', 'commentairetest', '2018-11-20');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `img` varchar(155) NOT NULL,
  `titre` varchar(155) NOT NULL,
  `author` varchar(255) NOT NULL,
  `post` text NOT NULL,
  `post_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `img`, `titre`, `author`, `post`, `post_date`) VALUES
(16, 'jonatan-pie-183185-unsplash', 'Chapitre 1', 'Jean Forteroche', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis at consectetur lorem donec massa sapien. Et malesuada fames ac turpis. Suspendisse potenti nullam ac tortor vitae purus faucibus. Tincidunt \r\n', '2019-01-12 22:47:18'),
(17, 'mckayla-crump-675004-unsplash.jpg', 'Chapitre 2', 'Jean Forteroche', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis at consectetur lorem donec massa sapien. Et malesuada fames ac turpis. Suspendisse potenti nullam ac tortor vitae purus faucibus. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu. Sapien et ligula ullamcorper malesuada proin. Semper feugiat nibh sed pulvinar. Arcu dictum varius duis at consectetur lorem donec massa. Egestas integer eget aliquet nibh praesent tristique magna. Varius quam quisque id diam vel quam elementum pulvinar. Convallis a cras semper auctor neque vitae tempus quam pellentesque. Orci sagittis eu volutpat odio facilisis mauris. Rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Elementum pulvinar etiam non quam. Ultricies mi eget mauris pharetra et ultrices neque. Id diam maecenas ultricies mi eget mauris pharetra et ultrices. Malesuada proin libero nunc consequat interdum varius sit amet mattis. Non odio euismod lacinia at quis risus sed vulputate.\r\n\r\nVehicula ipsum a arcu cursus vitae congue mauris rhoncus. Mauris augue neque gravida in fermentum et sollicitudin ac. Eleifend quam adipiscing vitae proin sagittis. Sem fringilla ut morbi tincidunt augue interdum velit. Nibh venenatis cras sed felis eget velit aliquet sagittis id. Luctus venenatis lectus magna fringilla urna porttitor. Vitae suscipit tellus mauris a diam maecenas sed enim ut. Quis risus sed vulputate odio ut enim. Ac turpis egestas maecenas pharetra convallis posuere morbi. Tempor orci eu lobortis elementum. Dolor morbi non arcu risus quis. Amet facilisis magna etiam tempor orci eu lobortis elementum nibh. Tellus elementum sagittis vitae et leo duis ut. Massa vitae tortor condimentum lacinia quis vel eros donec ac. Amet consectetur adipiscing elit duis tristique sollicitudin nibh sit amet. Volutpat est velit egestas dui id ornare arcu. Dui accumsan sit amet nulla facilisi morbi tempus iaculis. Sagittis vitae et leo duis ut diam quam nulla.\r\n\r\nAliquam etiam erat velit scelerisque in dictum. Nec dui nunc mattis enim ut. Sit amet nisl purus in mollis nunc. Mauris ultrices eros in cursus. Elit pellentesque habitant morbi tristique senectus. Vitae aliquet nec ullamcorper sit amet. Est lorem ipsum dolor sit amet consectetur. Lectus urna duis convallis convallis tellus id interdum velit laoreet. Sapien eget mi proin sed libero. Magna fringilla urna porttitor rhoncus dolor purus non enim. Purus gravida quis blandit turpis. Aliquet nec ullamcorper sit amet risus nullam. Vitae tempus quam pellentesque nec nam aliquam sem. Enim diam vulputate ut pharetra.', '2019-01-12 22:47:27'),
(18, 'paxson-woelber-534783-unsplash.jpg', 'Chapitre 3', 'Jean Forteroche', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis at consectetur lorem donec massa sapien. Et malesuada fames ac turpis. Suspendisse potenti nullam ac tortor vitae purus faucibus. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu. Sapien et ligula ullamcorper malesuada proin. Semper feugiat nibh sed pulvinar. Arcu dictum varius duis at consectetur lorem donec massa. Egestas integer eget aliquet nibh praesent tristique magna. Varius quam quisque id diam vel quam elementum pulvinar. Convallis a cras semper auctor neque vitae tempus quam pellentesque. Orci sagittis eu volutpat odio facilisis mauris. Rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Elementum pulvinar etiam non quam. Ultricies mi eget mauris pharetra et ultrices neque. Id diam maecenas ultricies mi eget mauris pharetra et ultrices. Malesuada proin libero nunc consequat interdum varius sit amet mattis. Non odio euismod lacinia at quis risus sed vulputate.\r\n\r\nVehicula ipsum a arcu cursus vitae congue mauris rhoncus. Mauris augue neque gravida in fermentum et sollicitudin ac. Eleifend quam adipiscing vitae proin sagittis. Sem fringilla ut morbi tincidunt augue interdum velit. Nibh venenatis cras sed felis eget velit aliquet sagittis id. Luctus venenatis lectus magna fringilla urna porttitor. Vitae suscipit tellus mauris a diam maecenas sed enim ut. Quis risus sed vulputate odio ut enim. Ac turpis egestas maecenas pharetra convallis posuere morbi. Tempor orci eu lobortis elementum. Dolor morbi non arcu risus quis. Amet facilisis magna etiam tempor orci eu lobortis elementum nibh. Tellus elementum sagittis vitae et leo duis ut. Massa vitae tortor condimentum lacinia quis vel eros donec ac. Amet consectetur adipiscing elit duis tristique sollicitudin nibh sit amet. Volutpat est velit egestas dui id ornare arcu. Dui accumsan sit amet nulla facilisi morbi tempus iaculis. Sagittis vitae et leo duis ut diam quam nulla.\r\n\r\nAliquam etiam erat velit scelerisque in dictum. Nec dui nunc mattis enim ut. Sit amet nisl purus in mollis nunc. Mauris ultrices eros in cursus. Elit pellentesque habitant morbi tristique senectus. Vitae aliquet nec ullamcorper sit amet. Est lorem ipsum dolor sit amet consectetur. Lectus urna duis convallis convallis tellus id interdum velit laoreet. Sapien eget mi proin sed libero. Magna fringilla urna porttitor rhoncus dolor purus non enim. Purus gravida quis blandit turpis. Aliquet nec ullamcorper sit amet risus nullam. Vitae tempus quam pellentesque nec nam aliquam sem. Enim diam vulputate ut pharetra.', '2019-01-12 22:47:18'),
(19, 'simon-migaj-551136-unsplash.jpg', 'Chapitre 4', 'Jean Forteroche', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis at consectetur lorem donec massa sapien. Et malesuada fames ac turpis. Suspendisse potenti nullam ac tortor vitae purus faucibus. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu. Sapien et ligula ullamcorper malesuada proin. Semper feugiat nibh sed pulvinar. Arcu dictum varius duis at consectetur lorem donec massa. Egestas integer eget aliquet nibh praesent tristique magna. Varius quam quisque id diam vel quam elementum pulvinar. Convallis a cras semper auctor neque vitae tempus quam pellentesque. Orci sagittis eu volutpat odio facilisis mauris. Rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Elementum pulvinar etiam non quam. Ultricies mi eget mauris pharetra et ultrices neque. Id diam maecenas ultricies mi eget mauris pharetra et ultrices. Malesuada proin libero nunc consequat interdum varius sit amet mattis. Non odio euismod lacinia at quis risus sed vulputate.\r\n\r\nVehicula ipsum a arcu cursus vitae congue mauris rhoncus. Mauris augue neque gravida in fermentum et sollicitudin ac. Eleifend quam adipiscing vitae proin sagittis. Sem fringilla ut morbi tincidunt augue interdum velit. Nibh venenatis cras sed felis eget velit aliquet sagittis id. Luctus venenatis lectus magna fringilla urna porttitor. Vitae suscipit tellus mauris a diam maecenas sed enim ut. Quis risus sed vulputate odio ut enim. Ac turpis egestas maecenas pharetra convallis posuere morbi. Tempor orci eu lobortis elementum. Dolor morbi non arcu risus quis. Amet facilisis magna etiam tempor orci eu lobortis elementum nibh. Tellus elementum sagittis vitae et leo duis ut. Massa vitae tortor condimentum lacinia quis vel eros donec ac. Amet consectetur adipiscing elit duis tristique sollicitudin nibh sit amet. Volutpat est velit egestas dui id ornare arcu. Dui accumsan sit amet nulla facilisi morbi tempus iaculis. Sagittis vitae et leo duis ut diam quam nulla.\r\n\r\nAliquam etiam erat velit scelerisque in dictum. Nec dui nunc mattis enim ut. Sit amet nisl purus in mollis nunc. Mauris ultrices eros in cursus. Elit pellentesque habitant morbi tristique senectus. Vitae aliquet nec ullamcorper sit amet. Est lorem ipsum dolor sit amet consectetur. Lectus urna duis convallis convallis tellus id interdum velit laoreet. Sapien eget mi proin sed libero. Magna fringilla urna porttitor rhoncus dolor purus non enim. Purus gravida quis blandit turpis. Aliquet nec ullamcorper sit amet risus nullam. Vitae tempus quam pellentesque nec nam aliquam sem. Enim diam vulputate ut pharetra.', '2019-01-12 22:47:27'),
(20, 'jonatan-pie-183185-unsplash.jpg', 'Chapitre 5', 'Jean Forteroche', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis at consectetur lorem donec massa sapien. Et malesuada fames ac turpis. Suspendisse potenti nullam ac tortor vitae purus faucibus. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu. Sapien et ligula ullamcorper malesuada proin. Semper feugiat nibh sed pulvinar. Arcu dictum varius duis at consectetur lorem donec massa. Egestas integer eget aliquet nibh praesent tristique magna. Varius quam quisque id diam vel quam elementum pulvinar. Convallis a cras semper auctor neque vitae tempus quam pellentesque. Orci sagittis eu volutpat odio facilisis mauris. Rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Elementum pulvinar etiam non quam. Ultricies mi eget mauris pharetra et ultrices neque. Id diam maecenas ultricies mi eget mauris pharetra et ultrices. Malesuada proin libero nunc consequat interdum varius sit amet mattis. Non odio euismod lacinia at quis risus sed vulputate.\r\n\r\nVehicula ipsum a arcu cursus vitae congue mauris rhoncus. Mauris augue neque gravida in fermentum et sollicitudin ac. Eleifend quam adipiscing vitae proin sagittis. Sem fringilla ut morbi tincidunt augue interdum velit. Nibh venenatis cras sed felis eget velit aliquet sagittis id. Luctus venenatis lectus magna fringilla urna porttitor. Vitae suscipit tellus mauris a diam maecenas sed enim ut. Quis risus sed vulputate odio ut enim. Ac turpis egestas maecenas pharetra convallis posuere morbi. Tempor orci eu lobortis elementum. Dolor morbi non arcu risus quis. Amet facilisis magna etiam tempor orci eu lobortis elementum nibh. Tellus elementum sagittis vitae et leo duis ut. Massa vitae tortor condimentum lacinia quis vel eros donec ac. Amet consectetur adipiscing elit duis tristique sollicitudin nibh sit amet. Volutpat est velit egestas dui id ornare arcu. Dui accumsan sit amet nulla facilisi morbi tempus iaculis. Sagittis vitae et leo duis ut diam quam nulla.\r\n\r\nAliquam etiam erat velit scelerisque in dictum. Nec dui nunc mattis enim ut. Sit amet nisl purus in mollis nunc. Mauris ultrices eros in cursus. Elit pellentesque habitant morbi tristique senectus. Vitae aliquet nec ullamcorper sit amet. Est lorem ipsum dolor sit amet consectetur. Lectus urna duis convallis convallis tellus id interdum velit laoreet. Sapien eget mi proin sed libero. Magna fringilla urna porttitor rhoncus dolor purus non enim. Purus gravida quis blandit turpis. Aliquet nec ullamcorper sit amet risus nullam. Vitae tempus quam pellentesque nec nam aliquam sem. Enim diam vulputate ut pharetra.', '2019-01-12 22:47:18'),
(21, 'mckayla-crump-675004-unsplash.jpg', 'Chapitre 6', 'Jean Forteroche', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis at consectetur lorem donec massa sapien. Et malesuada fames ac turpis. Suspendisse potenti nullam ac tortor vitae purus faucibus. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu. Sapien et ligula ullamcorper malesuada proin. Semper feugiat nibh sed pulvinar. Arcu dictum varius duis at consectetur lorem donec massa. Egestas integer eget aliquet nibh praesent tristique magna. Varius quam quisque id diam vel quam elementum pulvinar. Convallis a cras semper auctor neque vitae tempus quam pellentesque. Orci sagittis eu volutpat odio facilisis mauris. Rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Elementum pulvinar etiam non quam. Ultricies mi eget mauris pharetra et ultrices neque. Id diam maecenas ultricies mi eget mauris pharetra et ultrices. Malesuada proin libero nunc consequat interdum varius sit amet mattis. Non odio euismod lacinia at quis risus sed vulputate.\r\n\r\nVehicula ipsum a arcu cursus vitae congue mauris rhoncus. Mauris augue neque gravida in fermentum et sollicitudin ac. Eleifend quam adipiscing vitae proin sagittis. Sem fringilla ut morbi tincidunt augue interdum velit. Nibh venenatis cras sed felis eget velit aliquet sagittis id. Luctus venenatis lectus magna fringilla urna porttitor. Vitae suscipit tellus mauris a diam maecenas sed enim ut. Quis risus sed vulputate odio ut enim. Ac turpis egestas maecenas pharetra convallis posuere morbi. Tempor orci eu lobortis elementum. Dolor morbi non arcu risus quis. Amet facilisis magna etiam tempor orci eu lobortis elementum nibh. Tellus elementum sagittis vitae et leo duis ut. Massa vitae tortor condimentum lacinia quis vel eros donec ac. Amet consectetur adipiscing elit duis tristique sollicitudin nibh sit amet. Volutpat est velit egestas dui id ornare arcu. Dui accumsan sit amet nulla facilisi morbi tempus iaculis. Sagittis vitae et leo duis ut diam quam nulla.\r\n\r\nAliquam etiam erat velit scelerisque in dictum. Nec dui nunc mattis enim ut. Sit amet nisl purus in mollis nunc. Mauris ultrices eros in cursus. Elit pellentesque habitant morbi tristique senectus. Vitae aliquet nec ullamcorper sit amet. Est lorem ipsum dolor sit amet consectetur. Lectus urna duis convallis convallis tellus id interdum velit laoreet. Sapien eget mi proin sed libero. Magna fringilla urna porttitor rhoncus dolor purus non enim. Purus gravida quis blandit turpis. Aliquet nec ullamcorper sit amet risus nullam. Vitae tempus quam pellentesque nec nam aliquam sem. Enim diam vulputate ut pharetra.', '2019-01-12 22:47:27'),
(22, 'paxson-woelber-534783-unsplash.jpg', 'Chapitre 7', 'Jean Forteroche', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis at consectetur lorem donec massa sapien. Et malesuada fames ac turpis. Suspendisse potenti nullam ac tortor vitae purus faucibus. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu. Sapien et ligula ullamcorper malesuada proin. Semper feugiat nibh sed pulvinar. Arcu dictum varius duis at consectetur lorem donec massa. Egestas integer eget aliquet nibh praesent tristique magna. Varius quam quisque id diam vel quam elementum pulvinar. Convallis a cras semper auctor neque vitae tempus quam pellentesque. Orci sagittis eu volutpat odio facilisis mauris. Rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Elementum pulvinar etiam non quam. Ultricies mi eget mauris pharetra et ultrices neque. Id diam maecenas ultricies mi eget mauris pharetra et ultrices. Malesuada proin libero nunc consequat interdum varius sit amet mattis. Non odio euismod lacinia at quis risus sed vulputate.\r\n\r\nVehicula ipsum a arcu cursus vitae congue mauris rhoncus. Mauris augue neque gravida in fermentum et sollicitudin ac. Eleifend quam adipiscing vitae proin sagittis. Sem fringilla ut morbi tincidunt augue interdum velit. Nibh venenatis cras sed felis eget velit aliquet sagittis id. Luctus venenatis lectus magna fringilla urna porttitor. Vitae suscipit tellus mauris a diam maecenas sed enim ut. Quis risus sed vulputate odio ut enim. Ac turpis egestas maecenas pharetra convallis posuere morbi. Tempor orci eu lobortis elementum. Dolor morbi non arcu risus quis. Amet facilisis magna etiam tempor orci eu lobortis elementum nibh. Tellus elementum sagittis vitae et leo duis ut. Massa vitae tortor condimentum lacinia quis vel eros donec ac. Amet consectetur adipiscing elit duis tristique sollicitudin nibh sit amet. Volutpat est velit egestas dui id ornare arcu. Dui accumsan sit amet nulla facilisi morbi tempus iaculis. Sagittis vitae et leo duis ut diam quam nulla.\r\n\r\nAliquam etiam erat velit scelerisque in dictum. Nec dui nunc mattis enim ut. Sit amet nisl purus in mollis nunc. Mauris ultrices eros in cursus. Elit pellentesque habitant morbi tristique senectus. Vitae aliquet nec ullamcorper sit amet. Est lorem ipsum dolor sit amet consectetur. Lectus urna duis convallis convallis tellus id interdum velit laoreet. Sapien eget mi proin sed libero. Magna fringilla urna porttitor rhoncus dolor purus non enim. Purus gravida quis blandit turpis. Aliquet nec ullamcorper sit amet risus nullam. Vitae tempus quam pellentesque nec nam aliquam sem. Enim diam vulputate ut pharetra.', '2019-01-12 22:47:18'),
(23, 'simon-migaj-551136-unsplash.jpg', 'Chapitre 8', 'Jean Forteroche', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis at consectetur lorem donec massa sapien. Et malesuada fames ac turpis. Suspendisse potenti nullam ac tortor vitae purus faucibus. Tincidunt tortor aliquam nulla facilisi cras fermentum odio eu. Sapien et ligula ullamcorper malesuada proin. Semper feugiat nibh sed pulvinar. Arcu dictum varius duis at consectetur lorem donec massa. Egestas integer eget aliquet nibh praesent tristique magna. Varius quam quisque id diam vel quam elementum pulvinar. Convallis a cras semper auctor neque vitae tempus quam pellentesque. Orci sagittis eu volutpat odio facilisis mauris. Rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. Elementum pulvinar etiam non quam. Ultricies mi eget mauris pharetra et ultrices neque. Id diam maecenas ultricies mi eget mauris pharetra et ultrices. Malesuada proin libero nunc consequat interdum varius sit amet mattis. Non odio euismod lacinia at quis risus sed vulputate.\r\n\r\nVehicula ipsum a arcu cursus vitae congue mauris rhoncus. Mauris augue neque gravida in fermentum et sollicitudin ac. Eleifend quam adipiscing vitae proin sagittis. Sem fringilla ut morbi tincidunt augue interdum velit. Nibh venenatis cras sed felis eget velit aliquet sagittis id. Luctus venenatis lectus magna fringilla urna porttitor. Vitae suscipit tellus mauris a diam maecenas sed enim ut. Quis risus sed vulputate odio ut enim. Ac turpis egestas maecenas pharetra convallis posuere morbi. Tempor orci eu lobortis elementum. Dolor morbi non arcu risus quis. Amet facilisis magna etiam tempor orci eu lobortis elementum nibh. Tellus elementum sagittis vitae et leo duis ut. Massa vitae tortor condimentum lacinia quis vel eros donec ac. Amet consectetur adipiscing elit duis tristique sollicitudin nibh sit amet. Volutpat est velit egestas dui id ornare arcu. Dui accumsan sit amet nulla facilisi morbi tempus iaculis. Sagittis vitae et leo duis ut diam quam nulla.\r\n\r\nAliquam etiam erat velit scelerisque in dictum. Nec dui nunc mattis enim ut. Sit amet nisl purus in mollis nunc. Mauris ultrices eros in cursus. Elit pellentesque habitant morbi tristique senectus. Vitae aliquet nec ullamcorper sit amet. Est lorem ipsum dolor sit amet consectetur. Lectus urna duis convallis convallis tellus id interdum velit laoreet. Sapien eget mi proin sed libero. Magna fringilla urna porttitor rhoncus dolor purus non enim. Purus gravida quis blandit turpis. Aliquet nec ullamcorper sit amet risus nullam. Vitae tempus quam pellentesque nec nam aliquam sem. Enim diam vulputate ut pharetra.', '2019-01-12 22:47:27');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
