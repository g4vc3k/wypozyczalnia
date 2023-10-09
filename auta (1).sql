-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 10 Paź 2023, 01:55
-- Wersja serwera: 10.4.27-MariaDB
-- Wersja PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `auta`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `osoba`
--

CREATE TABLE `osoba` (
  `id` int(11) NOT NULL,
  `imie` varchar(20) NOT NULL,
  `nazwisko` varchar(30) NOT NULL,
  `telefon` int(11) NOT NULL,
  `start_prawka` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `haslo` varchar(256) NOT NULL,
  `miejscowosc` varchar(30) NOT NULL,
  `ulica` varchar(30) NOT NULL,
  `nr_lokalu` int(11) NOT NULL,
  `data_ur` date NOT NULL,
  `id_roli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `osoba`
--

INSERT INTO `osoba` (`id`, `imie`, `nazwisko`, `telefon`, `start_prawka`, `email`, `haslo`, `miejscowosc`, `ulica`, `nr_lokalu`, `data_ur`, `id_roli`) VALUES
(7, 'Jan', 'Kowalski', 123456789, '2023-09-01', 'jankowalski@gmail.com', '12345', 'Testowo', 'Testowa', 1, '1988-03-23', 2),
(8, 'Gracjan', 'Knopik', 111111111, '2020-09-02', 'testowymail@gmail.com', '12345', 'Testowice', 'Testowa', 5, '2013-09-01', 1),
(9, 'a1', 'ttt', 2147483647, '2023-10-04', 'trtrtr@aaa.pl', '12345', 'fegfdf', 'sdsdds', 1, '2023-10-04', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rola`
--

CREATE TABLE `rola` (
  `id` int(11) NOT NULL,
  `rola` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Zrzut danych tabeli `rola`
--

INSERT INTO `rola` (`id`, `rola`) VALUES
(1, 'Dealer'),
(2, 'Klient');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `samochod`
--

CREATE TABLE `samochod` (
  `id` int(11) NOT NULL,
  `marka` varchar(20) NOT NULL,
  `model` varchar(20) NOT NULL,
  `skrzynia` varchar(7) NOT NULL,
  `zdjecie` varchar(32) NOT NULL,
  `cena` int(11) NOT NULL DEFAULT 300
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `samochod`
--

INSERT INTO `samochod` (`id`, `marka`, `model`, `skrzynia`, `zdjecie`, `cena`) VALUES
(1, 'Honda', 'Civic', 'automat', '1', 89),
(2, 'Opel', 'Corsa', 'manual', '2', 75),
(3, 'Renault', 'Clio', 'manual', '3', 94),
(4, 'Toyota', 'Yaris', 'manual', '4', 91),
(5, 'Volkswagen', 'Golf', 'manual', '5', 87),
(6, 'Mazda', 'Cx5', 'automat', '6', 124),
(7, 'Volkswagen', 'Scirocco', 'manual', '7', 115),
(8, 'Audi', 'A6', 'automat', '8', 145),
(9, 'Fiat', 'Panda', 'manual', '9', 49),
(10, 'Kia', 'Ceed', 'automat', '10', 108),
(11, 'Nissan', '370z', 'manual', '11', 236),
(12, 'Ford', 'Mustang', 'automat', '12', 248);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wypozyczalnia`
--

CREATE TABLE `wypozyczalnia` (
  `id` int(11) NOT NULL,
  `start_wyp` date NOT NULL,
  `koniec_wyp` date NOT NULL,
  `id_osoby` int(11) NOT NULL,
  `id_samochodu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `wypozyczalnia`
--

INSERT INTO `wypozyczalnia` (`id`, `start_wyp`, `koniec_wyp`, `id_osoby`, `id_samochodu`) VALUES
(36, '2023-10-05', '2023-10-19', 7, 3),
(37, '2023-10-20', '2023-10-28', 8, 1),
(38, '2023-10-27', '2023-10-29', 8, 6),
(39, '2023-10-01', '2023-10-12', 8, 7),
(40, '2023-10-18', '2023-10-26', 8, 4);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `osoba`
--
ALTER TABLE `osoba`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_roli` (`id_roli`);

--
-- Indeksy dla tabeli `rola`
--
ALTER TABLE `rola`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `samochod`
--
ALTER TABLE `samochod`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `wypozyczalnia`
--
ALTER TABLE `wypozyczalnia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_osoby` (`id_osoby`),
  ADD KEY `id_samochodu` (`id_samochodu`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `osoba`
--
ALTER TABLE `osoba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `rola`
--
ALTER TABLE `rola`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `samochod`
--
ALTER TABLE `samochod`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT dla tabeli `wypozyczalnia`
--
ALTER TABLE `wypozyczalnia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `osoba`
--
ALTER TABLE `osoba`
  ADD CONSTRAINT `osoba_ibfk_1` FOREIGN KEY (`id_roli`) REFERENCES `rola` (`id`);

--
-- Ograniczenia dla tabeli `wypozyczalnia`
--
ALTER TABLE `wypozyczalnia`
  ADD CONSTRAINT `wypozyczalnia_ibfk_1` FOREIGN KEY (`id_osoby`) REFERENCES `osoba` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `wypozyczalnia_ibfk_2` FOREIGN KEY (`id_samochodu`) REFERENCES `samochod` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
