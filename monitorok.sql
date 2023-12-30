-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Dec 30. 01:29
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
-- Adatbázis: `monitorok`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `monitorok`
--

CREATE TABLE `monitorok` (
  `ID` int(11) NOT NULL,
  `Típus` varchar(30) NOT NULL,
  `Kiadás éve` year(4) NOT NULL,
  `Készlet` int(11) NOT NULL,
  `Ár` int(11) NOT NULL,
  `Eladott darab` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_hungarian_ci;

--
-- A tábla adatainak kiíratása `monitorok`
--

INSERT INTO `monitorok` (`ID`, `Típus`, `Kiadás éve`, `Készlet`, `Ár`, `Eladott darab`) VALUES
(1, 'Samsung GS23-A', '2023', 50, 89999, 13),
(3, 'Samsung GS23-B', '2023', 30, 67999, 20),
(5, 'SamsungGS23-B', '2023', 30, 67999, 20);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `monitorok`
--
ALTER TABLE `monitorok`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Típus` (`Típus`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `monitorok`
--
ALTER TABLE `monitorok`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
