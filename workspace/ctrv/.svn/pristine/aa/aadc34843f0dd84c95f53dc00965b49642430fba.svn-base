-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Serveur: localhost
-- Généré le : Sam 29 Juin 2013 à 16:33
-- Version du serveur: 5.5.8
-- Version de PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

set foreign_key_checks = 0;
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `projet`
--

--
-- Contenu de la table `city`
--


INSERT INTO `city` (`id`, `name`, `latitude`, `longitude`, `latitude_inf`, `latitude_sup`, `longitude_inf`, `longitude_sup`, `default_address`, `default_zipcode`, `default_address_longitude`, `default_address_latitude`) VALUES
(1, 'toulouse', '43.604652', '1.444209', '42.53689201', '44.46515101', '-1.19750977', '3.93310547', '1 place esquirol', '31000', '2', '45'),
(4, 'grenoble', '45.188529', '5.724524', '43.87413818', '45.82879925', '4.69116211', '7.77832031', '71 rue nicolas chorier', '38000', '2', '45'),
(5, 'paris', '48.856614', '2.3522219', '47.82053187', '49.88047764', '-0.43945312', '6.17431641', 'test', '0000', '0000', '0000'),
(6, 'rennes', '48.113475', '-1.675708', '47.29413373', '48.54570549', '-3.04321289', '-0.67016602', 'test', '0000', '0000', '0000'),
(7, 'bordeaux', '45', '2', '0000', '000', '0000', '000', 'test', '000', '0000', '0000'),
(8, 'lyon', '45.764043', '4.835659', '45.10454631', '46.31658418', '3.37280273', '6.15234375', 'test', '0000', '0000', '000'),
(9, 'marseille', '45', '2', '0000', '0000', '0000', '000', 'test', '0000', '0000', '0000'),
(10, 'nice', '45', '2', '0000', '0000', '000', '0000', 'test', '000', '000', '0000'),
(11, 'nantes', '45', '2', '0000', '0000', '0000', '0000', 'test', '0000', '0000', '0000'),
(12, 'strasbourg', '45', '2', '0000', '0000', '000', '0000', 'test', '000', '000', '000'),
(13, 'lille', '45', '2', '0000', '0000', '0000', '0000', 'test', '0000', '000', '0000');

--
-- Contenu de la table `cityrovers_user`
--

-- INSERT INTO `cityrovers_user` (`public_key`, `city_id`, `userid`, `login`, `password`, `first_name`, `last_name`, `email`, `registration_date`, `latitude`, `longitude`, `is_active`, `is_blocked`, `address`, `numero_rue`, `salt`, `language`, `role_id`, `state`, `last_login_date`) VALUES
-- (1, 1, '5f7086c68dcee11b64f92e256e8cb0b1918f4432', 'debugall', '908e693a068a08467d83722c341ceaa78555a8d0', 'Faye', 'Amady Diouf', 'afaye@iota-it.com', '2003-12-12 19:48:30', '43.5968122', '1.422005600000034', 1, 0, '4 avenue crampel', 0, NULL, NULL, 1, '', '0000-00-00 00:00:00'),
-- (2, 1, 'de964c71199553dbe2ec612d04d461b8af8e9eab', 'Oussou', 'b613679a0814d9ec772f95d778c35fc5ff1697c493715653c6c712144292c5ad', 'ousmane', 'seck', 'seckousmane4@gmail.com', '2003-12-12 19:52:34', '43.5968122', '1.422005600000034', 1, 0, '1 place esquirol', 0, NULL, NULL, 1, '', '0000-00-00 00:00:00')
-- ;

--
-- Contenu de la table `event_type`
--

INSERT INTO `event_type` (`id`, `label`, `code`, `language`, `img_url`) VALUES
(1, 'Soirée, boom, danse', 'SOIREE_BOOM_DANSE', 'FRENCH', ''),
(2, 'Spectacle', 'SPECTACLE', 'FRENCH', NULL),
(3, 'Sport', 'SPORT', 'FRENCH', NULL),
(4, 'Marche', 'MARCHE', 'FRENCH', NULL);

--
-- Contenu de la table `mail_template`
--

INSERT INTO `mail_template` (`id`, `sender`, `subject`, `content`, `mail_type_id`) VALUES
(1, NULL, 'Découvrir cityrovers', '<p>Bonjour,</p>\r\n<p><span>%login% vous invite &agrave; rejoindre cityrovers : une plateforme d&rsquo;&eacute;change d&rsquo;informations et de services geolocalis&eacute;s au niveau de villes ou d&rsquo;aires g&eacute;ographiques limit&eacute;es. </span></p>\r\n<p><span>Visitez&nbsp;</span>cityrover <a href="http://cityrovers.com">ici</a>.</p>\r\n<p>Merci</p>\r\n<p><a href="http://www.cityrovers.com">Cityrovers</a></p>', 3),
(2, NULL, 'Cityrovers : Changement de mot de passe', '<p>Bonjour,</p>\r\n<p>Votre mot de passe a &eacute;t&eacute; r&eacute;initialis&eacute;. Votre mot de passe temporaire est : %password%</p>\r\n<p>Veuillez vous connecter pour le changer.</p>\r\n<p>Merci.</p>\r\n<p>Cityrovers</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 2),
(3, NULL, 'Bienvenue sur cityrovers','Bonjour %login%, welcome test', 4);
--
-- Contenu de la table `mail_type`
--

INSERT INTO `mail_type` (`id`, `code`) VALUES
(1, 'NEWSLETTER'),
(2, 'RESET_PASSWORD'),
(3, 'INVITE_USER'),
(4, 'WELCOME');

--
-- Contenu de la table `message_type`
--

INSERT INTO `message_type` (`id`, `label`) VALUES
(1, 'CONTACT_DEMAND'),
(2, 'REQUEST_GROUP_FROM_USER'),
(3, 'REQUEST_GROUP_FROM_ADMIN'),
(4, 'GROUP'),
(5, 'SINGLE'),
(6, 'REQUEST_BECOME_PARTICIPANT'),
(7, 'PUBLIC_MESSAGE_ANSWER'),
(8, 'EVENT_UPDATED');

--
-- Contenu de la table `place_type`
--

INSERT INTO `place_type` (`id`, `label`, `code`, `language`, `img_url`) VALUES
(1, 'Restaurant - Fastfood', 'RESTAURANT_FASTFOOD', 'FRENCH', NULL),
(4, 'Cinéma', 'CINEMA', 'FRENCH', NULL),
(5, 'Bar - Café', 'BAR_CAFE', 'FRENCH', NULL),
(6, 'Tourisme', 'LIEU_TOURISTIQUE', 'FRENCH', NULL),
(7, 'Boutique vêtements chaussures', 'BOUTIQUE', 'FRENCH', NULL),
(8, 'Grande surface - Centre commercial', 'GRANDE_SURFACE_CENTRE_COMMERCIAL', 'FRENCH', NULL),
(9, 'Espace détente', 'ESPACE_DETENTE', 'FRENCH', NULL),
(10, 'Tabac, presse', 'TABAC_PRESSE', 'FRENCH', NULL),
(11, 'Sport', 'SPORT', 'FRENCH', NULL),
(12, 'Banque, Distributeur', 'BANQUE_DISTRIBUTEUR', 'FRENCH', NULL),
(13, 'Station, bus, tram, métro', 'STATION_BUS_TRAM_METRO', 'FRENCH', NULL);

--
-- Contenu de la table `role`
--

INSERT INTO `role` (`id`, `name`) VALUES
(1, 'ROLE_USER'),
(2, 'ROLE_ADMIN'),
(3, 'ROLE_PROFESSIONNEL');

set foreign_key_checks = 1;
