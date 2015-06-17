-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Genereertijd: 17 jun 2015 om 14:33
-- Serverversie: 5.6.14
-- PHP-versie: 5.5.6

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
  `bedrijf_id` int(11) NOT NULL AUTO_INCREMENT,
  `ref_nummer` int(11) NOT NULL,
  `soort` int(1) NOT NULL,
  `bedrijf_naam` varchar(25) NOT NULL,
  `Adres` varchar(50) NOT NULL,
  `Postcode` varchar(7) NOT NULL,
  `Plaats` varchar(50) NOT NULL,
  `Telefoonnummer` int(11) NOT NULL,
  `Website` varchar(50) NOT NULL,
  `Contactpersoon_telefoon` int(10) NOT NULL,
  `Contactpersoon_email` varchar(30) NOT NULL,
  `Praktijkbegeleider` varchar(30) NOT NULL,
  `Praktijkbegeleider_telefoon` int(10) NOT NULL,
  PRIMARY KEY (`bedrijf_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Gegevens worden uitgevoerd voor tabel `bedrijven`
--

INSERT INTO `bedrijven` (`bedrijf_id`, `ref_nummer`, `soort`, `bedrijf_naam`, `Adres`, `Postcode`, `Plaats`, `Telefoonnummer`, `Website`, `Contactpersoon_telefoon`, `Contactpersoon_email`, `Praktijkbegeleider`, `Praktijkbegeleider_telefoon`) VALUES
(3, 9812355, 0, '!CL Web', 'Winthontlaan 200 ', '3526 KV', 'UTRECHT', 2147483647, '  ', 2147483647, ' info@clweb.nlÂ ', 'Dhr. C. (Cyril) Loosjes ', 2147483647),
(4, 9812355, 0, '!CL Web', 'Winthontlaan 200 ', '3526 KV', 'UTRECHT', 2147483647, '  ', 2147483647, ' info@clweb.nlÂ ', 'Dhr. C. (Cyril) Loosjes ', 2147483647),
(5, 9812355, 0, '!CL Web', 'Winthontlaan 200 ', '3526 KV', 'UTRECHT', 2147483647, '  ', 2147483647, ' info@clweb.nlÂ ', 'Dhr. C. (Cyril) Loosjes ', 2147483647),
(6, 9812355, 0, '!CL Web', 'Winthontlaan 200 ', '3526 KV', 'UTRECHT', 2147483647, '  ', 2147483647, ' info@clweb.nlÂ ', 'Dhr. C. (Cyril) Loosjes ', 2147483647),
(7, 9812355, 0, '!CL Web', 'Winthontlaan 200 ', '3526 KV', 'UTRECHT', 2147483647, '  ', 2147483647, ' info@clweb.nlÂ ', 'Dhr. C. (Cyril) Loosjes ', 2147483647),
(8, 9812355, 0, '!CL Web', 'Winthontlaan 200 ', '3526 KV', 'UTRECHT', 2147483647, '  ', 2147483647, ' info@clweb.nlÂ ', 'Dhr. C. (Cyril) Loosjes ', 2147483647),
(9, 9812355, 0, '!CL Web', 'Winthontlaan 200 ', '3526 KV', 'UTRECHT', 2147483647, '  ', 2147483647, ' info@clweb.nlÂ ', 'Dhr. C. (Cyril) Loosjes ', 2147483647),
(10, 9812355, 0, '!CL Web', 'Winthontlaan 200 ', '3526 KV', 'UTRECHT', 2147483647, '  ', 2147483647, ' info@clweb.nlÂ ', 'Dhr. C. (Cyril) Loosjes ', 2147483647),
(11, 9812355, 0, '!CL Web', 'Winthontlaan 200 ', '3526 KV', 'UTRECHT', 2147483647, '  ', 2147483647, ' info@clweb.nlÂ ', 'Dhr. C. (Cyril) Loosjes ', 2147483647),
(12, 9812355, 0, '!CL Web', 'Winthontlaan 200 ', '3526 KV', 'UTRECHT', 2147483647, '  ', 2147483647, ' info@clweb.nlÂ ', 'Dhr. C. (Cyril) Loosjes ', 2147483647),
(13, 9812355, 0, '!CL Web', 'Winthontlaan 200 ', '3526 KV', 'UTRECHT', 2147483647, '  ', 2147483647, ' info@clweb.nlÂ ', 'Dhr. C. (Cyril) Loosjes ', 2147483647),
(14, 9812355, 0, '!CL Web', 'Winthontlaan 200 ', '3526 KV', 'UTRECHT', 2147483647, '  ', 2147483647, ' info@clweb.nlÂ ', 'Dhr. C. (Cyril) Loosjes ', 2147483647),
(15, 9812355, 0, '!CL Web', 'Winthontlaan 200 ', '3526 KV', 'UTRECHT', 2147483647, '  ', 2147483647, ' info@clweb.nlÂ ', 'Dhr. C. (Cyril) Loosjes ', 2147483647),
(16, 9812355, 0, '!CL Web', 'Winthontlaan 200 ', '3526 KV', 'UTRECHT', 2147483647, '  ', 2147483647, ' info@clweb.nlÂ ', 'Dhr. C. (Cyril) Loosjes ', 2147483647),
(17, 9812355, 0, '!CL Web', 'Winthontlaan 200 ', '3526 KV', 'UTRECHT', 2147483647, '  ', 2147483647, ' info@clweb.nlÂ ', 'Dhr. C. (Cyril) Loosjes ', 2147483647),
(18, 9812355, 0, '!CL Web', 'Winthontlaan 200 ', '3526 KV', 'UTRECHT', 2147483647, '  ', 2147483647, ' info@clweb.nlÂ ', 'Dhr. C. (Cyril) Loosjes ', 2147483647),
(19, 9812355, 0, '!CL Web', 'Winthontlaan 200 ', '3526 KV', 'UTRECHT', 2147483647, '  ', 2147483647, ' info@clweb.nlÂ ', 'Dhr. C. (Cyril) Loosjes ', 2147483647),
(20, 9812355, 0, '!CL Web', 'Winthontlaan 200 ', '3526 KV', 'UTRECHT', 2147483647, '  ', 2147483647, ' info@clweb.nlÂ ', 'Dhr. C. (Cyril) Loosjes ', 2147483647),
(21, 9769861, 0, '12Build', 'Nijverdalseweg 143 ', '7461 AG', 'RIJSSEN', 548, ' http://www.12build.com ', 548, ' r.vanbloem@12build.comÂ ', 'Dhr. R.G.J. (Robert) van Bloem', 548),
(22, 9800875, 0, '12Tune International B.V.', 'Jagerserf 5 A ', '3851 SM', 'ERMELO', 341, ' http://www.12tune.com ', 0, '+31 (0)341-550119 ext 201Â ', 'Dhr. R.D.C. (Richard) Fruitman', 31),
(23, 9814859, 0, '2 Monkeys', 'Laboratoriumplein 43 ', '7411 CH', 'DEVENTER', 6, '  ', 0, '', '', 0),
(24, 9746333, 0, '2Complex B.V.', 'K J Blokstraat 49 ', '8384 EV', 'WILHELMINAOORD', 521, '  ', 521, ' cor@hilbrink.nlÂ ', 'Dhr. C. Hilbrink ', 521),
(25, 9758761, 0, '2G BV', 'Essenkamp 2 ', '3888 LL', 'UDDEL', 577, ' http://www.2g.it.nl ', 577, ' jcgeuze@2g-it.nlÂ ', 'Dhr. J.C. (Joost) Geuze ', 577),
(26, 9783133, 0, '4ITpoint', 'Dokter van Deenweg 13 ', '8025 BP', 'ZWOLLE', 38, ' http://www.4itpoint.nl ', 38, ' eeller@4itpoint.nlÂ ', 'Dhr. E. (Eric) Eller ', 38),
(27, 9805254, 0, '8internet', 'Schweitzerstraat 31 ', '7909 AV', 'HOOGEVEEN', 528, ' http://8internet.nl/ ', 528, ' info@8internet.nlÂ ', 'Dhr. R.C. (Ramon) Mol ', 528),
(28, 9725415, 0, 'A-Vision', 'IJzerweg 53 ', '7335 DH', 'APELDOORN', 55, ' http://www.a-vision.nu ', 55, ' mvankleef@a-vision.nuÂ ', 'Mw. H. (Hermien) Lubbers-Jurri', 55),
(29, 9814859, 0, '2 Monkeys', 'Laboratoriumplein 43 ', '7411 CH', 'DEVENTER', 6, '  ', 0, '', '', 0),
(30, 9504620, 0, 'Aannemingsmaatschappij va', 'J.P. Broekhovenstraat 36 ', '8081 HC', 'ELBURG', 525, ' http://www.gelder.com ', 0, ' m.dejonghe@gelder.comÂ ', 'Mw. J. (Jelly) Oost ', 0),
(31, 9812355, 0, '!CL Web', 'Winthontlaan 200 ', '3526 KV', 'UTRECHT', 2147483647, '  ', 2147483647, ' info@clweb.nlÂ ', 'Dhr. C. (Cyril) Loosjes ', 2147483647),
(32, 9812355, 0, '!CL Web', 'Winthontlaan 200 ', '3526 KV', 'UTRECHT', 2147483647, '  ', 2147483647, ' info@clweb.nlÂ ', 'Dhr. C. (Cyril) Loosjes ', 2147483647),
(33, 9812355, 0, '!CL Web', 'Winthontlaan 200 ', '3526 KV', 'UTRECHT', 2147483647, '  ', 2147483647, ' info@clweb.nlÂ ', 'Dhr. C. (Cyril) Loosjes ', 2147483647),
(34, 9812355, 0, '!CL Web', 'Winthontlaan 200 ', '3526 KV', 'UTRECHT', 2147483647, '  ', 2147483647, ' info@clweb.nlÂ ', 'Dhr. C. (Cyril) Loosjes ', 2147483647);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `calender`
--

CREATE TABLE IF NOT EXISTS `calender` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `timestamp` int(32) NOT NULL,
  `afspraak` varchar(500) NOT NULL,
  `leerlingnummer` int(11) NOT NULL,
  `leraren_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Gegevens worden uitgevoerd voor tabel `calender`
--

INSERT INTO `calender` (`id`, `timestamp`, `afspraak`, `leerlingnummer`, `leraren_id`) VALUES
(2, 2147483647, 'test', 1, 1),
(3, 0, 'test', 9, 1),
(4, 0, 'test', 9, 1),
(5, 0, '1', 9, 1),
(6, 0, 'anus', 3, 1),
(14, 1422745200, '', 2, 1),
(15, 1422745201, '', 2, 1),
(16, 1422752400, '', 2, 1),
(17, 702950400, 'koekjes', 6, 1),
(18, 697078800, 'terst', 6, 1),
(19, 704937600, 'aids', 6, 1),
(20, 694314000, '', 6, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `bedrijf_id` int(11) NOT NULL,
  `leerlingnummer` int(11) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `rating` int(1) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Gegevens worden uitgevoerd voor tabel `comments`
--

INSERT INTO `comments` (`comment_id`, `bedrijf_id`, `leerlingnummer`, `comment`, `rating`) VALUES
(10, 26, 1, 'test', 2),
(11, 26, 2, 'test2', 5),
(12, 21, 1, 'test', 3),
(13, 21, 1, '', 0),
(14, 25, 1, 'rsedghgfd', 4),
(15, 25, 1, 'sdfdgwer', 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `leraren`
--

CREATE TABLE IF NOT EXISTS `leraren` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `leraar_voornaam` varchar(25) NOT NULL,
  `leraar_achternaam` varchar(25) NOT NULL,
  `wachtwoord` varchar(256) NOT NULL,
  `leraar_email` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden uitgevoerd voor tabel `leraren`
--

INSERT INTO `leraren` (`id`, `leraar_voornaam`, `leraar_achternaam`, `wachtwoord`, `leraar_email`) VALUES
(1, 'Paul', 'Woerlee', '098f6bcd4621d373cade4e832627b4f6', '');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `pokaanvraag`
--

CREATE TABLE IF NOT EXISTS `pokaanvraag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `leerlingnummer` int(11) NOT NULL,
  `bedrijfNaam` varchar(50) NOT NULL,
  `bedrijfAdres` varchar(50) NOT NULL,
  `bedrijfPostcode` varchar(10) NOT NULL,
  `bedrijfPlaats` varchar(50) NOT NULL,
  `bedrijfTelefoon` varchar(20) NOT NULL,
  `bedrijfWebsite` varchar(50) NOT NULL,
  `bedrijfContactPersoon` varchar(50) NOT NULL,
  `bedrijfContactPersoonTelefoon` varchar(20) NOT NULL,
  `bedrijfContactPersoonEmail` varchar(50) NOT NULL,
  `bedrijfPraktijkBegeleider` varchar(50) NOT NULL,
  `bedrijfPraktijkBegeleiderTelefoon` varchar(20) NOT NULL,
  `bedrijfKennisCentrum` varchar(50) NOT NULL,
  `bedrijfCode` varchar(20) NOT NULL,
  `studentNaam` varchar(50) NOT NULL,
  `studentKlas` varchar(20) NOT NULL,
  `studentOpleiding` varchar(50) NOT NULL,
  `studentCreboNummerOpleiding` varchar(20) NOT NULL,
  `studentRichting` varchar(50) NOT NULL,
  `studentInleverdatum` varchar(50) NOT NULL,
  `onderwijsBegeleider` varchar(50) NOT NULL,
  `vertegenwoordigerLandstede` varchar(50) NOT NULL,
  `bpvPeriodeBegin` int(11) NOT NULL,
  `bpvPeriodeEind` int(11) NOT NULL,
  `bpvSbu` int(11) NOT NULL,
  `werkprocessen` varchar(240) NOT NULL,
  `begeleidingTeam` varchar(240) NOT NULL,
  `begeleidingBedrijf` varchar(240) NOT NULL,
  `pokStatus` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Gegevens worden uitgevoerd voor tabel `pokaanvraag`
--

INSERT INTO `pokaanvraag` (`id`, `leerlingnummer`, `bedrijfNaam`, `bedrijfAdres`, `bedrijfPostcode`, `bedrijfPlaats`, `bedrijfTelefoon`, `bedrijfWebsite`, `bedrijfContactPersoon`, `bedrijfContactPersoonTelefoon`, `bedrijfContactPersoonEmail`, `bedrijfPraktijkBegeleider`, `bedrijfPraktijkBegeleiderTelefoon`, `bedrijfKennisCentrum`, `bedrijfCode`, `studentNaam`, `studentKlas`, `studentOpleiding`, `studentCreboNummerOpleiding`, `studentRichting`, `studentInleverdatum`, `onderwijsBegeleider`, `vertegenwoordigerLandstede`, `bpvPeriodeBegin`, `bpvPeriodeEind`, `bpvSbu`, `werkprocessen`, `begeleidingTeam`, `begeleidingBedrijf`, `pokStatus`) VALUES
(33, 6, '12Build', 'Nijverdalseweg 143 ', '7461 AG', 'RIJSSEN', '548', ' http://www.12build.com ', 'Dhr. R.G.J. (Robert) van Bloem ', '548', ' r.vanbloem@12build.comÂ ', 'Dhr. R.G.J. (Robert) van Bloem ', '548', '', '', 'Jonas Muilwijk', 'IT13A', '', '', '', '', '', '', 0, 0, 0, '', '', '', 0),
(36, 4, '2Complex B.V.', 'K J Blokstraat 49 ', '8384 EV', 'WILHELMINAOORD', '521', '  ', 'Dhr. C. Hilbrink ', '521', ' cor@hilbrink.nlÂ ', 'Dhr. C. Hilbrink ', '521', '', '', 'test kaas', 'IT13A', '', '', '', '', '', '', 0, 0, 0, '', '', '', 1),
(37, 8, '2G BV', 'Essenkamp 2 ', '3888 LL', 'UDDEL', '577', ' http://www.2g.it.nl ', 'Dhr. J.C. (Joost) Geuze ', '577', ' jcgeuze@2g-it.nlÂ ', 'Dhr. J.C. (Joost) Geuze ', '577', '', '', 'kees gup', '1', '', '', '', '', '', '', 1423695600, 1531640800, 0, '', '', '', 3),
(38, 3, '4ITpoint', 'Dokter van Deenweg 13 ', '8025 BP', 'ZWOLLE', '38', ' http://www.4itpoint.nl ', 'Dhr. E. (Eric) Eller ', '38', ' eeller@4itpoint.nlÂ ', 'Dhr. E. (Eric) Eller ', '38', '', '', 'Lubbert Kramer', 'IT13A', '', '', '', '', 'test', 'test', 0, 0, 0, 'test', 'test', 'test', 0),
(39, 5, '8internet', 'Schweitzerstraat 31 ', '7909 AV', 'HOOGEVEEN', '528', ' http://8internet.nl/ ', 'Dhr. R.C. (Ramon) Mol ', '528', ' info@8internet.nlÂ ', 'Dhr. R.C. (Ramon) Mol ', '528', '', '', 'kop tulp', '1', '', '', '', '', '', '', 0, 0, 0, '', '', '', 0),
(40, 7, 'A-Vision', 'IJzerweg 53 ', '7335 DH', 'APELDOORN', '55', ' http://www.a-vision.nu ', 'Mw. M. (Marjan) van Kleef ', '55', ' mvankleef@a-vision.nuÂ ', 'Mw. H. (Hermien) Lubbers-Jurrien ', '55', '', '', 'tulp kop', '1', '', '', '', '', '', '', 1423695600, 1531640800, 0, '', '', '', 3),
(41, 2, '2 Monkeys', 'Laboratoriumplein 43 ', '7411 CH', 'DEVENTER', '6', '  ', '', '0', '', '', '0', '', '', 'Stefan Koekdeeg', 'IT13A', '', '', '', '', '', '', -3600, -3600, 0, '', '', '', 0),
(42, 9, 'input bedrijf naam hier', 'J.P. Broekhovenstraat 36 ', '8081 HC', 'ELBURG', '0525-659888', ' http://www.gelder.com ', 'Mw. M. (Mariet) de Jonghe ', 'Â ', ' m.dejonghe@gelder.comÂ ', 'Mw. J. (Jelly) Oost ', 'Â ', '', '', 'Jonas Muilwijk', 'IT13A', '', '', '', '', '', '', 1423695600, 1531640800, 0, '', '', '', 3),
(43, 1, '!CL Web', 'Winthontlaan 200 ', '3526 KV', 'UTRECHT', '+31308506080', '  ', 'Dhr. C. (Cyril) Loosjes ', '+31308506080Â ', ' info@clweb.nlÂ ', 'Dhr. C. (Cyril) Loosjes ', '+31308506080Â ', '', '', 'Jonas Muilwijk', 'IT13A', '', '', '', '', '', '', 0, 0, 0, '', '', '', 1),
(44, 1, '!CL Web', 'Winthontlaan 200 ', '3526 KV', 'UTRECHT', '+31308506080', '  ', 'Dhr. C. (Cyril) Loosjes ', '+31308506080Â ', ' info@clweb.nlÂ ', 'Dhr. C. (Cyril) Loosjes ', '+31308506080Â ', '', '', 'Jonas Muilwijk', 'IT13A', '', '', '', '', '', '', 0, 0, 0, '', '', '', 0);

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
  `leraar_id` int(11) NOT NULL,
  PRIMARY KEY (`leerlingnummer`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `studenten`
--

INSERT INTO `studenten` (`leerlingnummer`, `voornaam`, `achternaam`, `wachtwoord`, `email`, `geboortedatum`, `telefoonnummer`, `klas`, `leraar_id`) VALUES
(1, 'Jonas', 'Muilwijk', '098f6bcd4621d373cade4e832627b4f6', 'test@test.test', '2015-04-10 07:14:17', 632443, 'IT13A', 1),
(2, 'Stefan', 'Koekdeeg', '098f6bcd4621d373cade4e832627b4f6', 'test@test.test', '2015-04-10 07:14:20', 65436435, 'IT13A', 1),
(3, 'Lubbert', 'Kramer', '098f6bcd4621d373cade4e832627b4f6', 'test@test.test', '2015-04-10 07:16:12', 123, 'IT13A', 1),
(4, 'test', 'kaas', '098f6bcd4621d373cade4e832627b4f6', 'test@test', '2015-04-10 07:16:18', 1234, 'IT13A', 1),
(5, 'kaas', 'test', '098f6bcd4621d373cade4e832627b4f6', 'test@test', '2015-04-10 07:16:23', 4321, 'IT13A', 1),
(6, 'kees', 'gup', '098f6bcd4621d373cade4e832627b4f6', 'test@test', '2015-04-10 07:16:25', 66, 'IT13A', 1),
(7, 'gup', 'kees', '098f6bcd4621d373cade4e832627b4f6', 'test@test', '2015-04-10 07:16:28', 55, 'IT13A', 1),
(8, 'kop', 'tulp', '098f6bcd4621d373cade4e832627b4f6', 'test@test', '2015-04-10 07:16:31', 99, 'IT13A', 1),
(9, 'tulp', 'kop', '098f6bcd4621d373cade4e832627b4f6', 'test@test', '2015-04-10 07:16:34', 77, 'IT13A', 1);

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
-- Gegevens worden uitgevoerd voor tabel `studenten_extern`
--

INSERT INTO `studenten_extern` (`studentnummer`, `email`, `first_name`, `middle_name`, `last_name`, `password`, `class_code`) VALUES
(0, 'jonasmuilwijk@gmail.com', 'Jonas', '', 'Muilwijk', '', 'ZCM-IT14A2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
