-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 18 mrt 2015 om 10:19
-- Serverversie: 5.6.20
-- PHP-versie: 5.5.15

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
-- Tabelstructuur voor tabel `bedrijven`
--

CREATE TABLE IF NOT EXISTS `bedrijven` (
`bedrijf_id` int(11) NOT NULL,
  `ref_nummer` int(11) NOT NULL,
  `soort` int(1) NOT NULL,
  `wachtwoord` varchar(256) NOT NULL,
  `bedrijf_naam` varchar(25) NOT NULL,
  `omschrijving` varchar(500) NOT NULL,
  `Adres` varchar(50) NOT NULL,
  `Postcode` varchar(7) NOT NULL,
  `Plaats` varchar(50) NOT NULL,
  `Telefoonnummer` int(11) NOT NULL,
  `Website` varchar(50) NOT NULL,
  `Contactpersoon_telefoon` int(10) NOT NULL,
  `Concactpersoon_email` varchar(30) NOT NULL,
  `Praktijkbegeleider` varchar(30) NOT NULL,
  `Praktijkbegeleider_telefoon` int(10) NOT NULL,
  `kenniscentrum` varchar(10) NOT NULL,
  `Bedrijfscode_van_accreditatie` int(20) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden geëxporteerd voor tabel `bedrijven`
--

INSERT INTO `bedrijven` (`bedrijf_id`, `ref_nummer`, `soort`, `wachtwoord`, `bedrijf_naam`, `omschrijving`, `Adres`, `Postcode`, `Plaats`, `Telefoonnummer`, `Website`, `Contactpersoon_telefoon`, `Concactpersoon_email`, `Praktijkbegeleider`, `Praktijkbegeleider_telefoon`, `kenniscentrum`, `Bedrijfscode_van_accreditatie`) VALUES
(1, 9812355, 0, '098f6bcd4621d373cade4e832627b4f6', '!CL Web', '', 'Winthontlaan 200 ', '3526 KV', 'Utrecht', 308506080, '', 308506080, 'info@clweb.nl ', 'C. Loosjes ', 308506080, '', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `calender`
--

CREATE TABLE IF NOT EXISTS `calender` (
`id` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `afspraak` varchar(500) NOT NULL,
  `leerlingnummer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
`comment_id` int(11) NOT NULL,
  `bedrijf_id` int(11) NOT NULL,
  `leerlingnummer` int(11) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `rating` int(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Gegevens worden geëxporteerd voor tabel `comments`
--

INSERT INTO `comments` (`comment_id`, `bedrijf_id`, `leerlingnummer`, `comment`, `rating`) VALUES
(1, 1, 124523, 'asdfgh', 0),
(2, 0, 123456, 'asdfghgfdsa', 0),
(3, 1, 321, 'testtser', 0),
(4, 1, 1234, 'testttredfgfdfgfrgbfgfr', 0),
(5, 1, 123456789, 'ratingtest', 0),
(6, 1, 2345432, 'extratest', 2),
(7, 0, 0, '', 4),
(8, 0, 0, '', 4);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `leraren`
--

CREATE TABLE IF NOT EXISTS `leraren` (
`id` int(11) NOT NULL,
  `voornaam` varchar(25) NOT NULL,
  `achternaam` varchar(25) NOT NULL,
  `wachtwoord` varchar(256) NOT NULL,
  `email` varchar(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden geëxporteerd voor tabel `leraren`
--

INSERT INTO `leraren` (`id`, `voornaam`, `achternaam`, `wachtwoord`, `email`) VALUES
(1, 'Jonas', '', '098f6bcd4621d373cade4e832627b4f6', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `pokaanvraag`
--

CREATE TABLE IF NOT EXISTS `pokaanvraag` (
`id` int(11) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden geëxporteerd voor tabel `pokaanvraag`
--

INSERT INTO `pokaanvraag` (`id`, `leerlingnummer`, `bedrijfNaam`, `bedrijfAdres`, `bedrijfPostcode`, `bedrijfPlaats`, `bedrijfTelefoon`, `bedrijfWebsite`, `bedrijfContactPersoon`, `bedrijfContactPersoonTelefoon`, `bedrijfContactPersoonEmail`, `bedrijfPraktijkBegeleider`, `bedrijfPraktijkBegeleiderTelefoon`, `bedrijfKennisCentrum`, `bedrijfCode`, `studentNaam`, `studentKlas`, `studentOpleiding`, `studentCreboNummerOpleiding`, `studentRichting`, `studentInleverdatum`, `bpvCoordinator`, `bpvBegeleider`, `bpvPeriode`, `bpvSbu`, `bpvBrin`, `bpvCrebo`, `bpvOpmerking`, `pokStatus`) VALUES
(1, 1, '1-zero-1', 'Ilsham road 5 ', 'TQ1 2JG', 'Devon', 44, ' http://www.1-zero-1.co.uk ', 'Dhr. C. Thompson ', 0, ' chris@1-zero-1.co.ukÂ ', 'Dhr. C. Thompson ', 0, '', '', 'jonas ', '', '', '', '', '', '', '', '', 0, '', '', '', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `studenten`
--

CREATE TABLE IF NOT EXISTS `studenten` (
  `leerlingnummer` int(11) NOT NULL,
  `voornaam` varchar(25) NOT NULL,
  `achternaam` varchar(25) NOT NULL,
  `wachtwoord` varchar(256) NOT NULL,
  `email` varchar(30) NOT NULL,
  `geboortedatum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `telefoonnummer` int(11) NOT NULL,
  `klas` varchar(11) NOT NULL,
  `leraar_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `studenten`
--

INSERT INTO `studenten` (`leerlingnummer`, `voornaam`, `achternaam`, `wachtwoord`, `email`, `geboortedatum`, `telefoonnummer`, `klas`, `leraar_id`) VALUES
(0, 'Jonas', 'Muilwijk', '098f6bcd4621d373cade4e832627b4f6', '', '2015-03-18 08:55:28', 0, 'IT13A', 1),
(1, 'jonas', '', '098f6bcd4621d373cade4e832627b4f6', '', '2015-03-18 08:55:31', 0, 'IT13A', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `studenten_extern`
--

CREATE TABLE IF NOT EXISTS `studenten_extern` (
  `studentnummer` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `class_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `studenten_extern`
--

INSERT INTO `studenten_extern` (`studentnummer`, `email`, `first_name`, `middle_name`, `last_name`, `password`, `class_code`) VALUES
(0, 'jonasmuilwijk@gmail.com', 'Jonas', '', 'Muilwijk', '', 'ZCM-IT14A2');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `bedrijven`
--
ALTER TABLE `bedrijven`
 ADD PRIMARY KEY (`bedrijf_id`);

--
-- Indexen voor tabel `calender`
--
ALTER TABLE `calender`
 ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `comments`
--
ALTER TABLE `comments`
 ADD PRIMARY KEY (`comment_id`);

--
-- Indexen voor tabel `leraren`
--
ALTER TABLE `leraren`
 ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `pokaanvraag`
--
ALTER TABLE `pokaanvraag`
 ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `studenten`
--
ALTER TABLE `studenten`
 ADD PRIMARY KEY (`leerlingnummer`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `bedrijven`
--
ALTER TABLE `bedrijven`
MODIFY `bedrijf_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `calender`
--
ALTER TABLE `calender`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `comments`
--
ALTER TABLE `comments`
MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT voor een tabel `leraren`
--
ALTER TABLE `leraren`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT voor een tabel `pokaanvraag`
--
ALTER TABLE `pokaanvraag`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
