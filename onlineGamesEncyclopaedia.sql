-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 19 Cze 2020, 21:00
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `encyklopedia gier sieciowych`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `admins`
--
-- Utworzenie: 13 Cze 2020, 09:48
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `idUser` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- RELATIONSHIPS FOR TABLE `admins`:
--   `idUser`
--       `users` -> `id`
--

--
-- Zrzut danych tabeli `admins`
--

INSERT INTO `admins` (`id`, `idUser`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `categorytable`
--
-- Utworzenie: 11 Cze 2020, 09:22
--

CREATE TABLE `categorytable` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(15) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- RELATIONSHIPS FOR TABLE `categorytable`:
--

--
-- Zrzut danych tabeli `categorytable`
--

INSERT INTO `categorytable` (`id`, `category`) VALUES
(1, 'Akcji'),
(2, 'Strzelanki'),
(3, 'MMORPG'),
(4, 'Strategie'),
(5, 'Symulacje'),
(6, 'Wyścigowe'),
(7, 'Przeglądarkowe'),
(8, 'Inne');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `games`
--
-- Utworzenie: 19 Cze 2020, 17:33
-- Ostatnia aktualizacja: 19 Cze 2020, 17:33
--

CREATE TABLE `games` (
  `id` int(10) UNSIGNED NOT NULL,
  `idCategory` int(10) UNSIGNED NOT NULL,
  `idSubcategory` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_polish_ci NOT NULL,
  `description` varchar(2000) COLLATE utf8mb4_polish_ci NOT NULL,
  `platforms` varchar(100) COLLATE utf8mb4_polish_ci NOT NULL,
  `releasedDate` varchar(12) COLLATE utf8mb4_polish_ci NOT NULL,
  `producent` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `publisher` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `language` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `requirements` varchar(400) COLLATE utf8mb4_polish_ci NOT NULL,
  `galleryFolder` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `moviesFolder` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- RELATIONSHIPS FOR TABLE `games`:
--   `idCategory`
--       `categorytable` -> `id`
--   `idSubcategory`
--       `subcategories` -> `id`
--

--
-- Zrzut danych tabeli `games`
--

INSERT INTO `games` (`id`, `idCategory`, `idSubcategory`, `title`, `description`, `platforms`, `releasedDate`, `producent`, `publisher`, `language`, `status`, `requirements`, `galleryFolder`, `moviesFolder`) VALUES
(1, 2, 1, 'Team Fortress 2', 'Gruby!', 'PC (Steam), PS3, XBOX360', '10-10-2007', 'Valve Software', 'Valve Corporation', 'Polski (napisy), angielski', 'Aktywna, rozwijana', 'komputer', '../media/games/1/img/', '../media/games/1/movies/'),
(2, 2, 1, 'Paladins', 'Paladyni', 'PC, XBOX One, PS4, Switch', '08-05-2018', 'Evil Mojo Games', 'Hi-Rez Studios', 'Polski (napisy), angielski', 'Aktywna, rozwijana', 'Komputer', '../media/games/2/img/', '../media/games/2/movies/'),
(3, 2, 1, 'Overwatch', 'Strzelanka wieloosobowa opracowana przez Blizzard Enternainment.', 'PC, XBOX One, PS4, Switch', '24-05-2016', 'Blizzard Enternaiment', 'Activision Blizzard', 'Polski (głosy i napisy), angielski', 'Aktywna, rozwijana', 'Zalecane: Intel Core i5 3.2 GHz/AMD Phenom II X3 2.8 GHz, 6 GB RAM, karta grafiki 2 GB GeForce GTX 660/Radeon HD 7950 lub lepsza, 5 GB HDD, Windows Vista/7/8/10 64-bit <br> Minimalne: Intel Core i3 3.1 GHz/AMD Phenom X3 2.4 GHz, 4 GB RAM, karta grafiki 768 MB GeForce GTX 460/Radeon HD 4850 lub lepsza, 5 GB HDD, Windows Vista/7/8/10 64-bit', '../media/games/3/img/', '../media/games/3/movies/'),
(4, 3, NULL, 'Ultima Online', 'Pierwszy MMORPG na skalę światową.', 'PC', '29-04-1997', 'Origin System', 'Origin System', 'Angielski', 'Aktywna, rozwijana', '', '../media/games/4/img/', '../media/games/4/movies/'),
(5, 4, 5, 'League of Legends', 'Pierwsza szeroko rozpoznawalna MOBA.', 'PC', '06-10-2009', 'Riot Games', 'Riot Games', 'Polski (głosy i napisy), angielski', 'Aktywna, rozwijana', 'Zalecane: Dual Core 3.0 GHz, 4 GB RAM, karta grafiki 512 MB GeForce 8800 / Radeon HD 5670 lub lepsza, 16 GB HDD, Windows 7/8.1/10 <br> Minimalne: CPU 3.0 GHz, 2 GB RAM, karta grafiki 256 MB GeForce 8600 lub lepsza, 12 GB HDD, Windows 7/8/10', '../media/games/5/img/', '../media/games/5/movies/'),
(6, 2, 4, 'Playerunknown\'s Battlegrounds', '', '', '--', '', '', '', 'Aktywna, rozwijana', '', '../media/games/6/img/', '../media/games/6/movies/'),
(7, 2, 4, 'Fortnite', '', '', '--', '', '', '', 'Aktywna, rozwijana', '', '../media/games/7/img/', '../media/games/7/movies/'),
(8, 3, NULL, 'World of Warcraft', 'MMORPG', 'PC', '23-11-2007', 'Blizzard Enternaiment', 'Blizzard Enternainment', 'Angielski', 'Aktywna, rozwijana', 'Komputer', '../media/games/8/img/', '../media/games/8/movies/');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `news`
--
-- Utworzenie: 17 Cze 2020, 19:01
-- Ostatnia aktualizacja: 19 Cze 2020, 12:19
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `idGame` int(10) UNSIGNED NOT NULL,
  `author` varchar(20) COLLATE utf8mb4_polish_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `title` varchar(100) COLLATE utf8mb4_polish_ci NOT NULL,
  `image` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `text` varchar(1000) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- RELATIONSHIPS FOR TABLE `news`:
--   `idGame`
--       `games` -> `id`
--

--
-- Zrzut danych tabeli `news`
--

INSERT INTO `news` (`id`, `idGame`, `author`, `date`, `title`, `image`, `text`) VALUES
(1, 1, 'Puchaty', '2020-06-13 09:50:22', 'Wyciek kodu źródłowego Team Fortress 2 nie zaszkodzi grze.', '../media/news/1/1.jpg', 'Tak twierdzą przedstawiciele Valve.'),
(2, 2, 'Puchaty', '2020-06-17 19:01:55', 'Paladins z cross-play na PlayStation 4', '../media/news/2/1.jpg', 'Od 12 września 2019 roku gracze PlayStation 4 mogą grać wspólnie z graczami PC, XBOX One i Nintendo Switch.'),
(3, 3, 'Puchaty', '2020-06-17 19:07:44', 'Robot Echo nową postacią', '../media/news/3/1.jpg', 'Będzie to 32. grywalny bohater.'),
(4, 8, 'Puchaty', '2020-06-19 12:19:11', 'Czy WoW dostanie Ray-tracing?', '../media/news/4/1.jpg', ' hjghjghjghjkjhk');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `subcategories`
--
-- Utworzenie: 16 Cze 2020, 19:28
-- Ostatnia aktualizacja: 19 Cze 2020, 10:51
--

CREATE TABLE `subcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `idCategory` int(10) UNSIGNED NOT NULL,
  `subcategory` varchar(15) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- RELATIONSHIPS FOR TABLE `subcategories`:
--   `idCategory`
--       `categorytable` -> `id`
--

--
-- Zrzut danych tabeli `subcategories`
--

INSERT INTO `subcategories` (`id`, `idCategory`, `subcategory`) VALUES
(1, 2, 'Hero shooter'),
(2, 2, 'Looter shooter'),
(3, 2, 'FPS'),
(4, 2, 'Battle Royale'),
(5, 4, 'MOBA'),
(6, 4, 'Karcianki'),
(7, 4, 'Samobijak'),
(8, 1, 'Przetrwanie'),
(9, 5, 'Wojskowe');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--
-- Utworzenie: 19 Cze 2020, 10:04
-- Ostatnia aktualizacja: 19 Cze 2020, 12:15
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user` varchar(20) COLLATE utf8mb4_polish_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_polish_ci NOT NULL,
  `password` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `avatar` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL,
  `background` varchar(50) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- RELATIONSHIPS FOR TABLE `users`:
--

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `user`, `email`, `password`, `avatar`, `background`) VALUES
(1, 'Puchaty', 'Puchaty@wp.pl', 'mle', '../media/users/1/avatar.png', '../media/users/1/background.jpg'),
(2, 'Jakubowaty', 'E-poczta@wp.pl', 'asd', '../media/users/default_avatar.png', ''),
(3, 'bobrowy', 'bober154@onet.pl', 'has', '../media/users/3/avatar.png', '../media/users/3/background.jpg'),
(4, 'jghjghjgj', 'as@fgfgfg.pl', 'lkj', '../media/users/4/avatar.png', '../media/users/4/background.jpg');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`idUser`);

--
-- Indeksy dla tabeli `categorytable`
--
ALTER TABLE `categorytable`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCategory` (`idCategory`) USING BTREE,
  ADD KEY `idSubcategory` (`idSubcategory`) USING BTREE;

--
-- Indeksy dla tabeli `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idGame` (`idGame`) USING BTREE;

--
-- Indeksy dla tabeli `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCategory` (`idCategory`) USING BTREE;

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `categorytable`
--
ALTER TABLE `categorytable`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `games`
--
ALTER TABLE `games`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `admins`
--
ALTER TABLE `admins`
  ADD CONSTRAINT `admins_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `games_ibfk_1` FOREIGN KEY (`idCategory`) REFERENCES `categorytable` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `games_ibfk_2` FOREIGN KEY (`idSubcategory`) REFERENCES `subcategories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`idGame`) REFERENCES `games` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ograniczenia dla tabeli `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_ibfk_1` FOREIGN KEY (`idCategory`) REFERENCES `categorytable` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
