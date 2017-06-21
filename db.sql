-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 27. Jun 2015 um 08:42
-- Server-Version: 5.6.24
-- PHP-Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `sporttag`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `benutzer_gr`
--

CREATE TABLE IF NOT EXISTS `benutzer_gr` (
  `ID` int(11) NOT NULL,
  `Benutzername` text NOT NULL,
  `Kennwort` text NOT NULL,
  `Vorname` text NOT NULL,
  `Nachname` text NOT NULL,
  `Grnr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `benutzer_gr`
--

INSERT INTO `benutzer_gr` (`ID`, `Benutzername`, `Kennwort`, `Vorname`, `Nachname`, `Grnr`) VALUES
(0, 'gruppe.1', '827ccb0eea8a706c4c34a16891f84e7b', 'Gruppe', '1', 1),
(1, 'gruppe.2', '827ccb0eea8a706c4c34a16891f84e7b', 'Gruppe', '2', 2),
(2, 'gruppe.3', '827ccb0eea8a706c4c34a16891f84e7b', 'Gruppe', '3', 3),
(3, 'gruppe.4', '827ccb0eea8a706c4c34a16891f84e7b', 'Gruppe', '4', 4),
(4, 'gruppe.5', '827ccb0eea8a706c4c34a16891f84e7b', 'Gruppe', '5', 5),
(5, 'gruppe.6', '827ccb0eea8a706c4c34a16891f84e7b', 'Gruppe', '6', 6),
(6, 'gruppe.7', '827ccb0eea8a706c4c34a16891f84e7b', 'Gruppe', '7', 7),
(7, 'gruppe.8', '827ccb0eea8a706c4c34a16891f84e7b', 'Gruppe', '8', 8),
(8, 'gruppe.9', '827ccb0eea8a706c4c34a16891f84e7b', 'Gruppe', '9', 9);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `benutzer_st`
--

CREATE TABLE IF NOT EXISTS `benutzer_st` (
  `ID` int(11) NOT NULL,
  `Benutzername` text NOT NULL,
  `Kennwort` text NOT NULL,
  `Vorname` text NOT NULL,
  `Nachname` text NOT NULL,
  `Stnr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `benutzer_st`
--

INSERT INTO `benutzer_st` (`ID`, `Benutzername`, `Kennwort`, `Vorname`, `Nachname`, `Stnr`) VALUES
(0, 'station.1', '827ccb0eea8a706c4c34a16891f84e7b', 'Station', '1', 1),
(1, 'station.2', '827ccb0eea8a706c4c34a16891f84e7b', 'Station', '2', 2),
(2, 'station.3', '827ccb0eea8a706c4c34a16891f84e7b', 'Station', '3', 3),
(3, 'station.4', '827ccb0eea8a706c4c34a16891f84e7b', 'Station', '4', 4),
(4, 'station.5', '827ccb0eea8a706c4c34a16891f84e7b', 'Station', '5', 5),
(5, 'station.6', '827ccb0eea8a706c4c34a16891f84e7b', 'Station', '6', 6),
(6, 'station.7', '827ccb0eea8a706c4c34a16891f84e7b', 'Station', '7', 7),
(7, 'station.8', '827ccb0eea8a706c4c34a16891f84e7b', 'Station', '8', 8),
(8, 'station.9', '827ccb0eea8a706c4c34a16891f84e7b', 'Station', '9', 9);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ergebnis_gr`
--

CREATE TABLE IF NOT EXISTS `ergebnis_gr` (
  `Grnr` int(2) NOT NULL,
  `Station1` float NOT NULL,
  `Station2` float NOT NULL,
  `Station3` float NOT NULL,
  `Station4` float NOT NULL,
  `Station5` float NOT NULL,
  `Station6` float NOT NULL,
  `Station7` float NOT NULL,
  `Station8` float NOT NULL,
  `Station9` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `ergebnis_gr`
--

INSERT INTO `ergebnis_gr` (`Grnr`, `Station1`, `Station2`, `Station3`, `Station4`, `Station5`, `Station6`, `Station7`, `Station8`, `Station9`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `ergebnis_st`
--

CREATE TABLE IF NOT EXISTS `ergebnis_st` (
  `Grnr` int(2) NOT NULL,
  `Station1` float NOT NULL,
  `Station2` float NOT NULL,
  `Station3` float NOT NULL,
  `Station4` float NOT NULL,
  `Station5` float NOT NULL,
  `Station6` float NOT NULL,
  `Station7` float NOT NULL,
  `Station8` float NOT NULL,
  `Station9` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `ergebnis_st`
--

INSERT INTO `ergebnis_st` (`Grnr`, `Station1`, `Station2`, `Station3`, `Station4`, `Station5`, `Station6`, `Station7`, `Station8`, `Station9`) VALUES
(1, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gegenst`
--

CREATE TABLE IF NOT EXISTS `gegenst` (
  `Nr` int(2) NOT NULL,
  `Gegenst` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `gegenst`
--

INSERT INTO `gegenst` (`Nr`, `Gegenst`) VALUES
(1, 'Tesafilm'),
(2, 'Druckerpapier'),
(3, 'Mathebuch'),
(4, 'Blume'),
(5, 'Ameise'),
(6, 'Kulli'),
(7, 'W&ouml;rterbuch'),
(8, 'Apinat'),
(9, 'Stein'),
(10, 'Tacker'),
(11, 'Taschenrechner'),
(12, 'Lineal'),
(13, 'Radiergummi'),
(14, 'Airconfernbedienung'),
(15, 'Plastikbecher');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gr_schueler`
--

CREATE TABLE IF NOT EXISTS `gr_schueler` (
  `ID` int(3) NOT NULL,
  `Name` text NOT NULL,
  `Klasse` text NOT NULL,
  `Gruppe` int(2) NOT NULL,
  `ist_da` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `gr_schueler`
--

INSERT INTO `gr_schueler` (`ID`, `Name`, `Klasse`, `Gruppe`, `ist_da`) VALUES
(0, 'Sch&uuml;ler', '3', 1, 0),
(1, 'Sch&uuml;ler', '4', 2, 0),
(2, 'Sch&uuml;ler', '5', 3, 0),
(3, 'Sch&uuml;ler', '6', 4, 0),
(4, 'Sch&uuml;ler', '7', 5, 0),
(5, 'Sch&uuml;ler', '8', 6, 0),
(6, 'Sch&uuml;ler', '9', 7, 0),
(7, 'Sch&uuml;ler', '10', 8, 0),
(8, 'Sch&uuml;ler', '11', 9, 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `gr_zeitplan`
--

CREATE TABLE IF NOT EXISTS `gr_zeitplan` (
  `Grnr` int(2) NOT NULL,
  `1` int(2) NOT NULL,
  `2` int(2) NOT NULL,
  `3` int(2) NOT NULL,
  `4` int(2) NOT NULL,
  `5` int(2) NOT NULL,
  `6` int(2) NOT NULL,
  `7` int(2) NOT NULL,
  `8` int(2) NOT NULL,
  `9` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `gr_zeitplan`
--

INSERT INTO `gr_zeitplan` (`Grnr`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`) VALUES
(1, 1, 2, 3, 4, 5, 6, 7, 8, 9),
(2, 2, 3, 4, 5, 6, 7, 8, 9, 1),
(3, 3, 4, 5, 6, 7, 8, 9, 1, 2),
(4, 4, 5, 6, 7, 8, 9, 1, 2, 3),
(5, 5, 6, 7, 8, 9, 1, 2, 3, 4),
(6, 6, 7, 8, 9, 1, 2, 3, 4, 5),
(7, 7, 8, 9, 1, 2, 3, 4, 5, 6),
(8, 8, 9, 1, 2, 3, 4, 5, 6, 7),
(9, 9, 1, 2, 3, 4, 5, 6, 7, 8);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `livingpics`
--

CREATE TABLE IF NOT EXISTS `livingpics` (
  `Nr` int(2) NOT NULL,
  `Begriff` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `livingpics`
--

INSERT INTO `livingpics` (`Nr`, `Begriff`) VALUES
(1, 'Schlange'),
(2, 'Krone'),
(3, 'Kerze'),
(4, 'Tor'),
(5, 'Stern'),
(6, 'Fenster'),
(7, 'Teetasse'),
(8, 'Elefant'),
(9, 'Eiffelturm'),
(10, 'Klavier'),
(11, 'Zaun'),
(12, 'Wasserfall'),
(13, 'Auto'),
(14, 'Kalender'),
(15, 'Suppe'),
(16, 'Uhr'),
(17, 'Regenwolke'),
(18, 'Ventilator'),
(19, 'Touristen'),
(20, 'Laptop'),
(21, 'Buch'),
(22, 'Palme'),
(23, 'Blumentopf'),
(24, 'Badeanzug'),
(25, 'Gummib&auml;rchen'),
(26, 'Schl&uuml;ssel'),
(27, 'Schere'),
(28, 'Hose'),
(29, 'Schwimmbad'),
(30, 'Drache'),
(31, 'Engel'),
(32, 'Silvester'),
(33, 'Spielplatz'),
(34, 'Multifunktionsdrucker'),
(35, 'Postkarte'),
(36, 'Pyramide'),
(37, 'Flugzeug'),
(38, 'Marktstand'),
(39, 'Aquarium'),
(40, 'Vulkanausbruch');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `st_beschreibung`
--

CREATE TABLE IF NOT EXISTS `st_beschreibung` (
  `ID` int(2) NOT NULL,
  `Stnr` int(2) NOT NULL,
  `Name` text NOT NULL,
  `Leiter` text NOT NULL,
  `Ort` text NOT NULL,
  `Material` text NOT NULL,
  `Aufbau` text NOT NULL,
  `Spielerklaerung` text CHARACTER SET utf8 NOT NULL,
  `Punktebestimmung` text NOT NULL,
  `Infos` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `st_beschreibung`
--

INSERT INTO `st_beschreibung` (`ID`, `Stnr`, `Name`, `Leiter`, `Ort`, `Material`, `Aufbau`, `Spielerklaerung`, `Punktebestimmung`, `Infos`) VALUES
(0, 1, 'Station 1', 'Leiter 1', 'ORT 1', 'Material 1', 'Aufbau', 'Erkl&auml;rung', 'Punktebestimmung', 'Nach der Station l&auml;uft die Gruppe zur n&auml;chsten Station.'),
(1, 2, 'Station 2', 'Leiter 2', 'ORT 2', 'Material 2', 'Aufbau', 'Erkl&auml;rung', 'Die Wasserbomben werden von den Sch&uuml;lern im Eimer zerplatzt und dessen Inhalt (ohne Ballonreste) in den Messbecher gef&uuml;llt. Der wird als Zahl eingetragen. Nach Ablaufen der Zeit (Klingel zum Ende der Station) wird der Milliliterstand (als Zahl, ohne &#8222;ml&#8221;, z.B. &#8222;500&#8221;) bei &#8222;Punkte eintragen&#8221; auf der Webplattform eingetragen. Stationsleiter und Gruppenleiter m&uuml;ssen beide die Punkte in ihrem jeweiligen Feld eintragen.', 'Nach der Station l&auml;uft die Gruppe zur n&auml;chsten Station.'),
(2, 3, 'Station 3', 'Leiter 3', 'ORT 3', 'Material 3', 'Aufbau', 'Erkl&auml;rung', 'Der Stationsleiter muss die Punktzahl der getroffenen Ziele notieren und am Ende zusammenz&auml;hlen. Die Gesamtpunktzahl tr&auml;gt er dann in seine Liste und die des Gruppenleiters ein. Nach Ablaufen der Zeit (Klingel zum Ende der Station) wird die Gesamtpunktzahl bei &#8222;Punkte eintragen&#8221; auf der Webplattform eingetragen. Stationsleiter und Gruppenleiter m&uuml;ssen beide die Punkte in ihrem jeweiligen Feld eintragen.', 'Nach der Station l&auml;uft die Gruppe zur n&auml;chsten Station.'),
(3, 4, 'Station 4', 'Leiter 4', 'ORT 4', 'Material 4', 'Aufbau', 'Erkl&auml;rung', 'Nach Ablaufen der Zeit (Klingel zum Ende der Station) wird der Milliliterstand (als Zahl, ohne &#8222;ml&#8221;, z.B. &#8222;500&#8221;) bei &#8222;Punkte eintragen&#8221; auf der Webplattform eingetragen. Stationsleiter und Gruppenleiter m&uuml;ssen beide die Punkte in ihrem jeweiligen Feld eintragen.', 'Nach der Station l&auml;uft die Gruppe zur n&auml;chsten Station.'),
(4, 5, 'Station 5', 'Leiter 5', 'ORT 5', 'Material 5', 'Aufbau', 'Erkl&auml;rung', 'Jeder ins Ziel gebrachte Luftballon bringt einen Punkt f&uuml;r die gesamte Gruppe. Nach Ablaufen der Zeit (Klingel zum Ende der Station) wird die Gesamtpunktzahl bei &#8222;Punkte eintragen&#8221; auf der Webplattform eingetragen. Stationsleiter und Gruppenleiter m&uuml;ssen beide die Punkte in ihrem jeweiligen Feld eintragen.', 'Nach der Station l&auml;uft die Gruppe zur n&auml;chsten Station.'),
(5, 6, 'Station 6', 'Leiter 6', 'ORT 6', 'Material 6', 'Aufbau', 'Erkl&auml;rung', 'Die Anzahl der gelaufenen Runden ist die Gesamtpunktzahl. Nach Ablaufen der Zeit (Klingel zum Ende der Station) wird die Gesamtpunktzahl bei &#8222;Punkte eintragen&#8221; auf der Webplattform eingetragen. Stationsleiter und Gruppenleiter m&uuml;ssen beide die Punkte in ihrem jeweiligen Feld eintragen.', 'Nach der Station l&auml;uft die Gruppe zur n&auml;chsten Station.'),
(6, 7, 'Station 7', 'Leiter 7', 'ORT 7', 'Material 7', 'Aufbau', 'Erkl&auml;rung', 'F&uuml;r jeden Sch&uuml;ler, der durch das Spinnennetz kommt, bekommt die Gruppe einen Punkt. Nach Ablaufen der Zeit (Klingel zum Ende der Station) wird die Gesamtpunktzahl bei &#8222;Punkte eintragen&#8221; auf der Webplattform eingetragen. Stationsleiter und Gruppenleiter m&uuml;ssen beide die Punkte in ihrem jeweiligen Feld eintragen.', 'Nach der Station l&auml;uft die Gruppe zur n&auml;chsten Station.'),
(7, 8, 'Station 8', 'Leiter 8', 'ORT 8', 'Material 8', 'Aufbau', 'Erkl&auml;rung', 'F&uuml;r jedes Geb&auml;ude, das man erkennen kann, gibt es einen Punkt.\nExtrapunkte (1-25 Extrapunkte) k&ouml;nnen f&uuml;r besonders kreative Leistungen vergeben werden. Nach Ablaufen der Zeit (Klingel zum Ende der Station) wird die Gesamtpunktzahl bei &#8222;Punkte eintragen&#8221; auf der Webplattform eingetragen. Stationsleiter und Gruppenleiter m&uuml;ssen beide die Punkte in ihrem jeweiligen Feld eintragen.', 'Nach der Station l&auml;uft die Gruppe zur n&auml;chsten Station.'),
(8, 9, 'Station 9', 'Leiter 9', 'ORT 9', 'Material 9', 'Aufbau', 'Erkl&auml;rung', 'Die Anzahl der gefundenen und hergebrachten Gegenst&auml;nde ist die Gesamtpunktzahl. Nach Ablaufen der Zeit (Klingel zum Ende der Station) wird die Gesamtpunktzahl bei &#8222;Punkte eintragen&#8221; auf der Webplattform eingetragen. Stationsleiter und Gruppenleiter m&uuml;ssen beide die Punkte in ihrem jeweiligen Feld eintragen.', 'Nach der Station l&auml;uft die Gruppe zur n&auml;chsten Station.');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `st_zeitplan`
--

CREATE TABLE IF NOT EXISTS `st_zeitplan` (
  `Stnr` int(2) NOT NULL,
  `1` int(2) NOT NULL,
  `2` int(2) NOT NULL,
  `3` int(2) NOT NULL,
  `4` int(2) NOT NULL,
  `5` int(2) NOT NULL,
  `6` int(2) NOT NULL,
  `7` int(2) NOT NULL,
  `8` int(2) NOT NULL,
  `9` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `st_zeitplan`
--

INSERT INTO `st_zeitplan` (`Stnr`, `1`, `2`, `3`, `4`, `5`, `6`, `7`, `8`, `9`) VALUES
(1, 1, 9, 8, 7, 6, 5, 4, 3, 2),
(2, 2, 1, 9, 8, 7, 6, 5, 4, 3),
(3, 3, 2, 1, 9, 8, 7, 6, 5, 4),
(4, 4, 3, 2, 1, 9, 8, 7, 6, 5),
(5, 5, 4, 3, 2, 1, 9, 8, 7, 6),
(6, 6, 5, 4, 3, 2, 1, 9, 8, 7),
(7, 7, 6, 5, 4, 3, 2, 1, 9, 8),
(8, 8, 7, 6, 5, 4, 3, 2, 1, 9),
(9, 9, 8, 7, 6, 5, 4, 3, 2, 1);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `benutzer_gr`
--
ALTER TABLE `benutzer_gr`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indizes für die Tabelle `benutzer_st`
--
ALTER TABLE `benutzer_st`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indizes für die Tabelle `ergebnis_gr`
--
ALTER TABLE `ergebnis_gr`
  ADD PRIMARY KEY (`Grnr`), ADD UNIQUE KEY `Grnr` (`Grnr`);

--
-- Indizes für die Tabelle `ergebnis_st`
--
ALTER TABLE `ergebnis_st`
  ADD PRIMARY KEY (`Grnr`), ADD UNIQUE KEY `Grnr` (`Grnr`);

--
-- Indizes für die Tabelle `gegenst`
--
ALTER TABLE `gegenst`
  ADD PRIMARY KEY (`Nr`), ADD UNIQUE KEY `Nr` (`Nr`);

--
-- Indizes für die Tabelle `gr_schueler`
--
ALTER TABLE `gr_schueler`
  ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `ID` (`ID`);

--
-- Indizes für die Tabelle `gr_zeitplan`
--
ALTER TABLE `gr_zeitplan`
  ADD PRIMARY KEY (`Grnr`), ADD UNIQUE KEY `Grnr` (`Grnr`);

--
-- Indizes für die Tabelle `livingpics`
--
ALTER TABLE `livingpics`
  ADD PRIMARY KEY (`Nr`), ADD UNIQUE KEY `Nr` (`Nr`);

--
-- Indizes für die Tabelle `st_beschreibung`
--
ALTER TABLE `st_beschreibung`
  ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `ID` (`ID`);

--
-- Indizes für die Tabelle `st_zeitplan`
--
ALTER TABLE `st_zeitplan`
  ADD PRIMARY KEY (`Stnr`), ADD UNIQUE KEY `Grnr` (`Stnr`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
