-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 07 août 2018 à 11:10
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `simplemvc`
--
CREATE DATABASE IF NOT EXISTS `simplemvc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `simplemvc`;

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `imgurl` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `imgurl`, `date`) VALUES
(1, 'Mercury', 'Sun-scorched Mercury is only slightly larger than Earth\'s Moon. Like the Moon, Mercury has very little atmosphere to stop impacts and it is covered with craters. Mercury\'s dayside is super heated by the Sun, but at night temperatures drop hundreds of degrees below freezing. Ice may even exist in craters. Mercury\'s egg-shaped orbit takes it around the Sun every 88 days.', './img/mercury.jpg', '2018-03-27 11:25:13'),
(2, 'Venus', 'Venus is a dim world of intense heat and volcanic activity. Similar in structure and size to Earth, Venus\' thick, toxic atmosphere traps heat in a runaway \'greenhouse effect.\' The scorched world has temperatures hot enough to melt lead. Glimpses below the clouds reveal volcanoes and deformed mountains. Venus spins slowly in the opposite direction of most planets.', './img/venus.jpg', '2018-03-27 11:25:52'),
(3, 'Earth', 'Earth is an ocean planet. Our home world\'s abundance of water - and life - makes it unique in our solar system. Other planets, plus a few moons, have ice, atmospheres, seasons and even weather, but only on Earth does the whole complicated mix come together in a way that encourages life - and lots of it.', './img/earth.jpg', '2018-03-27 11:26:05'),
(4, 'Mars', 'Though details of Mars\' surface are difficult to see from Earth, telescope observations show seasonally changing features and white patches at the poles. For decades, people speculated that bright and dark areas on Mars were patches of vegetation, that Mars could be a likely place for life-forms, and that water might exist in the polar caps. When the Mariner 4 spacecraft flew by Mars in 1965, many were shocked to see photographs of a bleak, cratered surface. Mars seemed to be a dead planet. Later missions, however, have shown that Mars is a complex member of the solar system and holds many mysteries yet to be solved.', './img/mars.jpg', '2018-03-27 11:26:24'),
(5, 'Asteroid Belt', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, veritatis architecto iusto maiores, quasi minus nemo deleniti maxime laudantium reprehenderit neque voluptates perspiciatis ullam error non molestiae, vitae qui laboriosam.', './img/asteroid.jpg', '2018-03-27 11:26:54'),
(6, 'Jupiter', 'The most massive planet in our solar system, with four large moons and many smaller moons, Jupiter forms a kind of miniature solar system. Jupiter resembles a star in composition. In fact, if it had been about 80 times more massive, it would have become a star rather than a planet.', './img/jupiter.jpg', '2018-03-27 11:27:21'),
(7, 'Saturn', 'Saturn was the most distant of the five planets known to the ancients. Like Jupiter, Saturn is made mostly of hydrogen and helium. Its volume is 755 times greater than that of Earth. Winds in the upper atmosphere reach 500 meters (1,600 feet) per second in the equatorial region. These super-fast winds, combined with heat rising from within the planet\'s interior, cause the yellow and gold bands visible in the atmosphere.', './img/saturn.jpg', '2018-03-27 11:27:40'),
(8, 'Uranus', 'The first planet found with the aid of a telescope, Uranus was discovered in 1781 by astronomer William Herschel. The seventh planet from the Sun is so distant that it takes 84 years to complete one orbit.', './img/uranus.jpg', '2018-03-27 11:27:52'),
(9, 'Neptune', 'Nearly 4.5 billion kilometers (2.8 billion miles) from the Sun, Neptune orbits the Sun once every 165 years. It is invisible to the naked eye because of its extreme distance from Earth. Interestingly, the unusual elliptical orbit of the dwarf planet Pluto brings Pluto inside Neptune\'s orbit for a 20-year period out of every 248 Earth years.', './img/neptune.jpg', '2018-03-27 11:28:11');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `admin`) VALUES
(1, 'admin', '$2y$10$Y8KZUidVPg8hzEn8qORdc.HyWC5FbSPfZQAfOs2z4WidBlX4tG7FC', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
