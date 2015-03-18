-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 04 mrt 2015 om 15:05
-- Serverversie: 5.6.21
-- PHP-versie: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `bpv-website`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `pokaanvraag`
--

CREATE TABLE IF NOT EXISTS `pokaanvraag` (
  `leerlingnummer` int(11) NOT NULL,
  `bedrijfNaam` varchar(50) NOT NULL,
  `bedrijfAdres` varchar(50) NOT NULL,
  `bedrijfPostcode` varchar(10) NOT NULL,
  `bedrijfPlaats` varchar(50) NOT NULL,
  `bedrijfTelefoon` int(20) NOT NULL,
  `bedrijfWebsite` varchar(50) NOT NULL,
  `bedrijfContactPersoon` varchar(50) NOT NULL,
  `bedrijfContactPersoonTelefoon` int(20) NOT NULL,
  `bedrijfContactPersoonEmail` varchar(50) NOT NULL,
  `bedrijfPraktijkBegeleider` varchar(50) NOT NULL,
  `bedrijfPraktijkBegeleiderTelefoon` int(20) NOT NULL,
  `bedrijfKennisCentrum` varchar(50) NOT NULL,
  `bedrijfCode` varchar(20) NOT NULL,
  `studentNaam` varchar(50) NOT NULL,
  `studentKlas` varchar(20) NOT NULL,
  `studentOpleiding` varchar(50) NOT NULL,
  `studentCreboNummerOpleiding` varchar(20) NOT NULL,
  `studentRichting` varchar(50) NOT NULL,
  `studentInleverdatum` varchar(50) NOT NULL,
  `bpvCoordinator` varchar(50) NOT NULL,
  `bpvBegeleider` varchar(50) NOT NULL,
  `bpvPeriode` varchar(20) NOT NULL,
  `bpvSbu` int(11) NOT NULL,
  `bpvBrin` varchar(20) NOT NULL,
  `bpvCrebo` varchar(20) NOT NULL,
  `bpvOpmerking` varchar(500) NOT NULL,
  `pokStatus` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `pokaanvraag`
--

INSERT INTO `pokaanvraag` (`leerlingnummer`, `bedrijfNaam`, `bedrijfAdres`, `bedrijfPostcode`, `bedrijfPlaats`, `bedrijfTelefoon`, `bedrijfWebsite`, `bedrijfContactPersoon`, `bedrijfContactPersoonTelefoon`, `bedrijfContactPersoonEmail`, `bedrijfPraktijkBegeleider`, `bedrijfPraktijkBegeleiderTelefoon`, `bedrijfKennisCentrum`, `bedrijfCode`, `studentNaam`, `studentKlas`, `studentOpleiding`, `studentCreboNummerOpleiding`, `studentRichting`, `studentInleverdatum`, `bpvCoordinator`, `bpvBegeleider`, `bpvPeriode`, `bpvSbu`, `bpvBrin`, `bpvCrebo`, `bpvOpmerking`, "pokStatus") VALUES
(1, '!CL Web', 'Winthontlaan 200 ', '3526 KV', 'UTRECHT', 2147483647, '  ', 'Dhr. C. (Cyril) Loosjes ', 2147483647, ' info@clweb.nlÂ ', 'Dhr. C. (Cyril) Loosjes ', 2147483647, '', '', 'jonas ', '', '', '', '', '', '', '', '', 0, '', '', '', 0);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
