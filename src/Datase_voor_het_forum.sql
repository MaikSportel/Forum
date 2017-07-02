-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 02 jul 2017 om 23:12
-- Serverversie: 10.1.21-MariaDB
-- PHP-versie: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forumtwd`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `categorieën`
--

CREATE TABLE `categorieën` (
  `cat_id` int(3) UNSIGNED NOT NULL,
  `cat_titel` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `categorieën`
--

INSERT INTO `categorieën` (`cat_id`, `cat_titel`) VALUES
(1, 'serie'),
(2, 'cast'),
(3, 'comics'),
(4, 'games');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reacties`
--

CREATE TABLE `reacties` (
  `reactie_id` int(3) UNSIGNED NOT NULL,
  `cat_id` int(3) UNSIGNED NOT NULL,
  `subcat_id` int(3) UNSIGNED NOT NULL,
  `topic_id` int(3) UNSIGNED NOT NULL,
  `auteur` varchar(24) NOT NULL,
  `inhoud` text NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `subcategorieën`
--

CREATE TABLE `subcategorieën` (
  `subcat_id` int(3) UNSIGNED NOT NULL,
  `parent_id` int(3) UNSIGNED NOT NULL,
  `subcat_titel` varchar(128) NOT NULL,
  `subcat_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `subcategorieën`
--

INSERT INTO `subcategorieën` (`subcat_id`, `parent_id`, `subcat_titel`, `subcat_desc`) VALUES
(1, 4, 'games', 'Games'),
(2, 2, 'cast', 'cast'),
(3, 3, 'comics', 'comics'),
(4, 1, 'serie', 'serie');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `topics`
--

CREATE TABLE `topics` (
  `topic_id` int(8) UNSIGNED NOT NULL,
  `cat_id` int(3) UNSIGNED NOT NULL,
  `subcat_id` int(3) UNSIGNED NOT NULL,
  `auteur` varchar(24) NOT NULL,
  `titel` varchar(128) NOT NULL,
  `inhoud` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `topics`
--

INSERT INTO `topics` (`topic_id`, `cat_id`, `subcat_id`, `auteur`, `titel`, `inhoud`) VALUES
(2, 4, 1, 'test', 'Tester', 'dit os eentest'),
(3, 4, 1, 'test', 'afdsfa', 'dsafasdfasd            Typ hier uw tekst...\r\n        '),
(4, 4, 1, 'tester', 'Test', 'Dit is een test'),
(5, 4, 1, 'tester', 'Test', 'Dit is een test'),
(6, 4, 1, 'test', 'test', 'Dit is nog een test'),
(7, 4, 1, 'hoi', 'ho', 'hoii            Typ hier uw tekst...\r\n        '),
(8, 4, 1, 'test', 'test', 'tetststst            Typ hier uw tekst...\r\n        '),
(9, 2, 2, 'test', 'test', 'Dit is weer een test'),
(10, 3, 3, 'test', 'test', 'test'),
(11, 1, 4, 'uhmweereentest', 'weer test', 'Weer test');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `username` varchar(24) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL COMMENT 'SHA512'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `firstname`, `surname`, `username`, `email`, `password`) VALUES
(1, '', '', 'test', 'maiksportel64@gmail.com', '125d6d03b32c84d492747f79cf0bf6e179d287f341384eb5d6d3197525ad6be8e6df0116032935698f99a09e265073d1d6c32c274591bf1d0a20ad67cba921bc'),
(2, '', '', 'hoi', 'hoi@hoi.hoi', 'ca287c3169eb483dd79a8a648f05e0669e957d9d2d8caf63473fcc5e9599e92fd3a7cce56dba02d8570397800bf34baa673587a9d9774ece56bcabe2039c0757'),
(3, '', '', 'gegroet', 'hoi@hoi.hio', '50281219b6d628250a82c51caed62a2ba8736592bfda77ad4783fb771a5b8301a37b4b181709c0521b105bc32c3267fee8dbefb87f42a4df7faac578c4127b74'),
(4, '', '', 'test1', 'test@test.test', 'daef4953b9783365cad6615223720506cc46c5167cd16ab500fa597aa08ff964eb24fb19687f34d7665f778fcb6c5358fc0a5b81e1662cf90f73a2671c53f991'),
(5, '', '', 'tester', 'tester@tester.test', 'e13efc991a9bf44bbb4da87cdbb725240184585ccaf270523170e008cf2a3b85f45f86c3da647f69780fb9e971caf5437b3d06d418355a68c9760c70a31d05c7'),
(6, '', '', 'test2', 'test2@test.test', 'e13efc991a9bf44bbb4da87cdbb725240184585ccaf270523170e008cf2a3b85f45f86c3da647f69780fb9e971caf5437b3d06d418355a68c9760c70a31d05c7'),
(7, '', '', 'test3', 'test3@test.test', 'e13efc991a9bf44bbb4da87cdbb725240184585ccaf270523170e008cf2a3b85f45f86c3da647f69780fb9e971caf5437b3d06d418355a68c9760c70a31d05c7'),
(8, '', '', 'test4', 'test4@test.test', 'e13efc991a9bf44bbb4da87cdbb725240184585ccaf270523170e008cf2a3b85f45f86c3da647f69780fb9e971caf5437b3d06d418355a68c9760c70a31d05c7'),
(9, '', '', 'tes6', 'test6@test.test', 'e13efc991a9bf44bbb4da87cdbb725240184585ccaf270523170e008cf2a3b85f45f86c3da647f69780fb9e971caf5437b3d06d418355a68c9760c70a31d05c7');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `categorieën`
--
ALTER TABLE `categorieën`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexen voor tabel `reacties`
--
ALTER TABLE `reacties`
  ADD PRIMARY KEY (`reactie_id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `subcat_id` (`subcat_id`),
  ADD KEY `topic_id` (`topic_id`),
  ADD KEY `subcat_id_2` (`subcat_id`),
  ADD KEY `topic_id_2` (`topic_id`);

--
-- Indexen voor tabel `subcategorieën`
--
ALTER TABLE `subcategorieën`
  ADD PRIMARY KEY (`subcat_id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- Indexen voor tabel `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`topic_id`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `subcat_id` (`subcat_id`),
  ADD KEY `subcat_id_2` (`subcat_id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `categorieën`
--
ALTER TABLE `categorieën`
  MODIFY `cat_id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `reacties`
--
ALTER TABLE `reacties`
  MODIFY `reactie_id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `subcategorieën`
--
ALTER TABLE `subcategorieën`
  MODIFY `subcat_id` int(3) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT voor een tabel `topics`
--
ALTER TABLE `topics`
  MODIFY `topic_id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `reacties`
--
ALTER TABLE `reacties`
  ADD CONSTRAINT `reacties_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categorieën` (`cat_id`),
  ADD CONSTRAINT `reacties_ibfk_2` FOREIGN KEY (`subcat_id`) REFERENCES `subcategorieën` (`subcat_id`),
  ADD CONSTRAINT `reacties_ibfk_3` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`topic_id`);

--
-- Beperkingen voor tabel `subcategorieën`
--
ALTER TABLE `subcategorieën`
  ADD CONSTRAINT `subcategorieën_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `categorieën` (`cat_id`);

--
-- Beperkingen voor tabel `topics`
--
ALTER TABLE `topics`
  ADD CONSTRAINT `topics_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categorieën` (`cat_id`),
  ADD CONSTRAINT `topics_ibfk_2` FOREIGN KEY (`subcat_id`) REFERENCES `subcategorieën` (`subcat_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
