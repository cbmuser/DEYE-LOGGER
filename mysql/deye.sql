SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";
--
-- Datenbank: `solarlog`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `deye`
--

CREATE TABLE `deye` (
  `id` int(99) NOT NULL,
  `peak` float NOT NULL,
  `timestamp` int(12) NOT NULL,
  `kwatt` float NOT NULL,
  `alarm` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `deye`
--
ALTER TABLE `deye`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `deye`
--
ALTER TABLE `deye`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT;
COMMIT;


