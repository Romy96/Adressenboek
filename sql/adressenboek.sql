-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 05 nov 2016 om 09:34
-- Serverversie: 5.6.17
-- PHP-versie: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `adressenboek`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `adressen`
--

CREATE TABLE IF NOT EXISTS `adressen` (
  `ID` int(11) NOT NULL DEFAULT '0',
  `Name` varchar(150) DEFAULT NULL,
  `Email_adress` varchar(250) DEFAULT NULL,
  `Home_adress` varchar(250) DEFAULT NULL,
  `Zip_code` varchar(20) DEFAULT NULL,
  `Created_at` date DEFAULT NULL,
  `Edited_at` date DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruikers`
--

CREATE TABLE IF NOT EXISTS `gebruikers` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Nickname` varchar(50) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden geëxporteerd voor tabel `gebruikers`
--

INSERT INTO `gebruikers` (`ID`, `Nickname`, `Password`) VALUES
(1, 'Romy96', 'punky1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
