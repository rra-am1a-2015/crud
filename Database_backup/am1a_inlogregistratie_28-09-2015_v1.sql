-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 28 sep 2015 om 09:06
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `am1a_inlogregistratie`
--
CREATE DATABASE IF NOT EXISTS `am1a_inlogregistratie` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `am1a_inlogregistratie`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `personalia`
--

CREATE TABLE IF NOT EXISTS `personalia` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `voornaam` varchar(100) NOT NULL,
  `tussenvoegsel` varchar(50) NOT NULL,
  `achternaam` varchar(200) NOT NULL,
  `email` varchar(346) NOT NULL,
  `haarkleur` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Gegevens worden geëxporteerd voor tabel `personalia`
--

INSERT INTO `personalia` (`id`, `voornaam`, `tussenvoegsel`, `achternaam`, `email`, `haarkleur`) VALUES
(1, 'Arjanus', 'de', 'Ruijter', 'adruijter@gmail.com', 'grijs'),
(11, 'Frank', 'van', 'De Helder', 'dehelder@gmail.com', 'blond'),
(18, 'Vivian', 'de', 'Beer', 'beer@gmail.com', 'zwart'),
(19, 'Sander', 'van', 'Bokhoven', 'bokhoven@gmail.com', ''),
(20, 'bert', 'van', 'Donkenstein', 'donkenstein@gmail.com', ''),
(21, 'sdkfj', 'slkdf', 'lksjdf', 'lk@skljdf.nl', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
