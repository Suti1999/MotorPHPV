-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Nov 04. 20:37
-- Kiszolgáló verziója: 10.4.28-MariaDB
-- PHP verzió: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `eladomotorok`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `motor`
--

CREATE TABLE `motor` (
  `gyarto` varchar(8) NOT NULL,
  `tipus` varchar(12) NOT NULL,
  `evjarat` int(4) NOT NULL,
  `allapot` varchar(2) NOT NULL,
  `kobcenti` int(4) NOT NULL,
  `jogositvany` varchar(9) NOT NULL,
  `ar` varchar(10) NOT NULL,
  `kW` varchar(5) NOT NULL,
  `nalunk` date NOT NULL DEFAULT current_timestamp(),
  `motorid` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- A tábla adatainak kiíratása `motor`
--

INSERT INTO `motor` (`gyarto`, `tipus`, `evjarat`, `allapot`, `kobcenti`, `jogositvany`, `ar`, `kW`, `nalunk`, `motorid`) VALUES
('Kawasaki', 'Ninja H2R', 2023, 'uj', 998, 'A', '22 900 000', '228', '2023-10-05', 1),
('Kawasaki', 'Ninja 400', 2023, 'uj', 399, 'A2', '2 790 000', '33,4', '2023-09-15', 2),
('Kawasaki', 'Ninja ZX-10R', 2023, 'uj', 998, 'A', '8 390 000', '149,3', '2023-09-28', 3),
('Kawasaki', 'Ninja Z125', 2023, 'uj', 125, 'B, A1, A2', '2 090 000', '11', '2023-10-20', 4),
('Suzuki', 'Hayabusa', 2022, 'uj', 1340, 'A', '6 499 000', '140', '2023-04-01', 5),
('Yamaha', 'R1', 2023, 'uj', 998, 'A', '7 998 000', '147,1', '2023-06-14', 6),
('Yamaha', 'R125', 2022, 'uj', 125, 'B, A1, A2', '2 198 000', '11', '2023-08-08', 7),
('Yamaha', 'R7', 2023, 'uj', 689, 'A', '3 798 000', '54', '2023-07-24', 8),
('Aprilia', 'RS660', 2023, 'uj', 659, 'A', '4 177 000', '75,5', '2023-10-25', 9),
('Aprilia', 'RSV4', 2023, 'uj', 1100, 'A', '6 905 000', '150', '2023-06-02', 10);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `vezeteknev` varchar(50) NOT NULL,
  `keresztnev` varchar(50) NOT NULL,
  `e-mail_cim` varchar(50) NOT NULL,
  `jelszo` varchar(255) NOT NULL,
  `userid` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`vezeteknev`, `keresztnev`, `e-mail_cim`, `jelszo`, `userid`) VALUES
('Maták', 'Zétény', 'zeteny.matak01@pelda.hu', '$2y$10$r9A6Kpc2DpCaRKVyMJDsVeY22CG/.hFVC4SFrJXrZ/fvEEnYX6PwK', 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `vasarlas`
--

CREATE TABLE `vasarlas` (
  `vasarlas_idopontja` date NOT NULL DEFAULT current_timestamp(),
  `userid` int(10) UNSIGNED NOT NULL,
  `motorid` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`motorid`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- A tábla indexei `vasarlas`
--
ALTER TABLE `vasarlas`
  ADD UNIQUE KEY `userid` (`userid`),
  ADD UNIQUE KEY `motorid` (`motorid`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `motor`
--
ALTER TABLE `motor`
  MODIFY `motorid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Megkötések a kiírt táblákhoz
--

--
-- Megkötések a táblához `vasarlas`
--
ALTER TABLE `vasarlas`
  ADD CONSTRAINT `vasarlas_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vasarlas_ibfk_2` FOREIGN KEY (`motorid`) REFERENCES `motor` (`motorid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
