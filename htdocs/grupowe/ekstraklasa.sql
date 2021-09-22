-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Czas generowania: 22 Wrz 2021, 18:21
-- Wersja serwera: 10.4.19-MariaDB
-- Wersja PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `ekstraklasa`
--
CREATE DATABASE IF NOT EXISTS `ekstraklasa` DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci;
USE `ekstraklasa`;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kluby`
--

CREATE TABLE `kluby` (
  `Id_k` int(11) NOT NULL,
  `Kraj` varchar(50) COLLATE utf8_polish_ci DEFAULT NULL,
  `Miasto` varchar(50) COLLATE utf8_polish_ci DEFAULT NULL,
  `Nazwa` varchar(50) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `kluby`
--

INSERT INTO `kluby` (`Id_k`, `Kraj`, `Miasto`, `Nazwa`) VALUES
(1, 'Polska', 'Warszawa', 'Legia Warszawa'),
(2, 'Polska', 'Poznań', 'Lech Poznań'),
(3, 'Polska', 'Wrocław', 'Śląsk Wrocław'),
(4, 'Polska', 'Częstochowa', 'Raków Częstochowa');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pilkarze`
--

CREATE TABLE `pilkarze` (
  `Id_p` int(11) NOT NULL,
  `Imie` varchar(50) COLLATE utf8_polish_ci DEFAULT NULL,
  `Nazwisko` varchar(50) COLLATE utf8_polish_ci DEFAULT NULL,
  `Rok_urodzenia` int(11) DEFAULT NULL,
  `Id_k` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `pilkarze`
--

INSERT INTO `pilkarze` (`Id_p`, `Imie`, `Nazwisko`, `Rok_urodzenia`, `Id_k`) VALUES
(1, 'Joel', 'Pereira', 1996, 2),
(2, 'Mickey ', 'van der Hart', 1994, 2),
(3, 'Barry', 'Douglas', 1989, 2),
(4, 'Thomas', 'Rogne', 1990, 2),
(5, 'Pedro', 'Rebocho', 1995, 2),
(6, 'Jesper ', 'Karlstrom', 1995, 2),
(7, 'Jakub', 'Kamiński', 2002, 2),
(8, 'Mikael', 'Ishak', 1993, 2),
(9, 'Dani', 'Ramirez', 1992, 2),
(10, 'Filip', 'Marchwiński', 2002, 2),
(11, 'Antonio', 'Milić', 1994, 2),
(12, 'Filip ', 'Wilak', 1998, 2),
(13, 'Bartosz', 'Salamon', 1991, 2),
(14, 'Norbert', 'Pacławski', 2000, 2),
(15, 'Michał', 'Skóraś', 2002, 2),
(16, 'Radosław', 'Murawski ', 1994, 2),
(17, 'Artur ', 'Boruc', 1980, 1),
(18, 'Mateusz ', 'Hołownia ', 1998, 1),
(19, 'Mateusz ', 'Wieteska ', 1997, 1),
(20, 'Yuri ', 'Ribeiro', 1997, 1),
(21, 'Mattias ', 'Johansson', 1992, 1),
(22, 'Lirim ', 'Kastrati', 1990, 1),
(23, 'Andre', 'Martins', 1990, 1),
(24, 'Tomas', 'Pekhart', 1980, 1),
(25, 'Mahir', 'Emreli', 1997, 1),
(26, 'Ihor ', 'Charatin', 1995, 1),
(27, 'Jurgen', 'Aelhaka', 2000, 1),
(28, 'Maik ', 'Nawrocki ', 1990, 1),
(29, 'Wojciech ', 'Muzyk', 1998, 1),
(30, 'Ernest ', 'Musi', 2001, 1),
(31, 'Rafael ', 'Lopes', 1991, 1),
(32, 'Matai', 'Putnocki', 1984, 3),
(33, 'Diogo ', 'Verdasca', 1990, 3),
(34, 'Piotr', 'Celeban', 1985, 3),
(35, 'Dino ', 'Atiglec', 1990, 3),
(36, 'Waldemar ', 'Sobota', 1987, 3),
(37, 'Rafał', 'Makowski', 1996, 3),
(38, 'Robert ', 'Pich', 1988, 3),
(39, 'Mateusz', 'Praszelik', 1998, 3),
(40, 'Erik', 'Expasito', 1996, 3),
(41, 'Bartłomiej ', 'Pawłowski', 1992, 3),
(42, 'Fabian ', 'Piasecki', 1998, 3),
(43, 'Maksymilian ', 'Boruc', 1997, 3),
(44, 'Wojciech', 'Golla', 1992, 3),
(45, 'Mark ', 'Tamas', 1993, 3),
(46, 'Javier', 'Hyjek', 1998, 3),
(47, 'Petr ', 'Schwarz', 1991, 3),
(48, 'Lubambo', 'Musonda', 1995, 3),
(49, 'Jakub', 'Mądrzyk', 2003, 4),
(50, 'Tomas', 'Petrasek', 1992, 4),
(51, 'Milan', 'Rundic', 1992, 4),
(52, 'Oskar', 'Krzyżak', 2002, 4),
(53, 'Dominik', 'Wydra', 1994, 4),
(54, 'Igor', 'Sapała', 1995, 4),
(55, 'Mateusz', 'Wdowiak', 1996, 4),
(56, 'Marcin', 'Cebula', 1995, 4),
(57, 'Patryk', 'Kun', 1995, 4),
(58, 'Walerian', 'Gwilia', 1994, 4),
(59, 'Sebastian', 'Musiolik', 1996, 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `trener`
--

CREATE TABLE `trener` (
  `Id_t` int(11) NOT NULL,
  `Imie` varchar(50) COLLATE utf8_polish_ci DEFAULT NULL,
  `Nazwisko` varchar(50) COLLATE utf8_polish_ci DEFAULT NULL,
  `Rok_urodzenia` varchar(50) COLLATE utf8_polish_ci DEFAULT NULL,
  `Id_k` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `trener`
--

INSERT INTO `trener` (`Id_t`, `Imie`, `Nazwisko`, `Rok_urodzenia`, `Id_k`) VALUES
(1, 'Czesław', 'Michniewicz', '1970', 1),
(2, 'Maciej', 'Skorża', '1972', 2),
(3, 'Jacek', 'Magiera', '1977', 3),
(4, 'Marek', 'Papszun', '1974', 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wypozyczenia`
--

CREATE TABLE `wypozyczenia` (
  `Id_w` int(11) NOT NULL,
  `Id_k` int(11) DEFAULT NULL,
  `Id_p` int(11) DEFAULT NULL,
  `Do_kiedy` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `wypozyczenia`
--

INSERT INTO `wypozyczenia` (`Id_w`, `Id_k`, `Id_p`, `Do_kiedy`) VALUES
(1, 3, 6, '2021-10-31'),
(2, 1, 34, '2021-11-28'),
(3, 1, 50, '2022-09-30'),
(4, 3, 49, '2021-12-31'),
(5, 4, 23, '2021-12-31'),
(6, 1, 1, '2021-11-11'),
(7, 3, 26, '2022-02-28'),
(8, 2, 34, '2022-04-30'),
(9, 2, 59, '2021-12-31'),
(10, 4, 22, '2022-06-30');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `kluby`
--
ALTER TABLE `kluby`
  ADD PRIMARY KEY (`Id_k`);

--
-- Indeksy dla tabeli `pilkarze`
--
ALTER TABLE `pilkarze`
  ADD PRIMARY KEY (`Id_p`),
  ADD KEY `Id_k` (`Id_k`);

--
-- Indeksy dla tabeli `trener`
--
ALTER TABLE `trener`
  ADD PRIMARY KEY (`Id_t`),
  ADD KEY `Id_k` (`Id_k`);

--
-- Indeksy dla tabeli `wypozyczenia`
--
ALTER TABLE `wypozyczenia`
  ADD PRIMARY KEY (`Id_w`),
  ADD KEY `Id_k` (`Id_k`),
  ADD KEY `Id_p` (`Id_p`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `kluby`
--
ALTER TABLE `kluby`
  MODIFY `Id_k` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `pilkarze`
--
ALTER TABLE `pilkarze`
  MODIFY `Id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT dla tabeli `trener`
--
ALTER TABLE `trener`
  MODIFY `Id_t` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `wypozyczenia`
--
ALTER TABLE `wypozyczenia`
  MODIFY `Id_w` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `pilkarze`
--
ALTER TABLE `pilkarze`
  ADD CONSTRAINT `pilkarze_ibfk_1` FOREIGN KEY (`Id_k`) REFERENCES `kluby` (`Id_k`);

--
-- Ograniczenia dla tabeli `trener`
--
ALTER TABLE `trener`
  ADD CONSTRAINT `trener_ibfk_1` FOREIGN KEY (`Id_k`) REFERENCES `kluby` (`Id_k`);

--
-- Ograniczenia dla tabeli `wypozyczenia`
--
ALTER TABLE `wypozyczenia`
  ADD CONSTRAINT `wypozyczenia_ibfk_1` FOREIGN KEY (`Id_k`) REFERENCES `kluby` (`Id_k`),
  ADD CONSTRAINT `wypozyczenia_ibfk_2` FOREIGN KEY (`Id_p`) REFERENCES `pilkarze` (`Id_p`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
