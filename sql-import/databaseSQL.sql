-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 26 jan 2018 om 14:53
-- Serverversie: 10.1.23-MariaDB
-- PHP-versie: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zijlspu40_port`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `adminuser` varchar(500) NOT NULL,
  `adminpassword` varchar(999) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `admin`
--

INSERT INTO `admin` (`id`, `adminuser`, `adminpassword`) VALUES
(1, 'demo', '5f4dcc3b5aa765d61d8327deb882cf99');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `coins`
--

CREATE TABLE `coins` (
  `id` int(11) NOT NULL,
  `coin` varchar(5) NOT NULL,
  `coinfull` varchar(100) NOT NULL,
  `date` varchar(600) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `valuebuy` decimal(10,3) NOT NULL,
  `trashbin` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `coins`
--

INSERT INTO `coins` (`id`, `coin`, `coinfull`, `date`, `amount`, `valuebuy`, `trashbin`) VALUES
(1, 'LTC', 'Litecoin', '22-11-2013', '0.73', '9.480', 0),
(3, 'XRP', 'Ripple', '31-08-2017', '79.90', '0.230', 0),
(17, 'NXT', 'NXT', '11-12-2017', '73.00', '0.660', 0),
(19, 'PIVX', 'Pivx', '04-09-2017', '50.00', '3.050', 0),
(22, 'ARK', 'Ark', '13-12-2017', '32.95', '3.930', 0),
(25, 'XVG', 'Verge', '07-09-2017', '25000.00', '0.007', 0),
(26, 'STRAT', 'Stratis', '01-12-2017', '45.00', '5.050', 0),
(29, 'DASH', 'Dash', '15-03-2017', '5.00', '81.000', 0);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `coins`
--
ALTER TABLE `coins`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `coins`
--
ALTER TABLE `coins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
