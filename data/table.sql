-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Czas generowania: 16 Lis 2018, 15:27
-- Wersja serwera: 5.7.23
-- Wersja PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `data`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `table`
--

DROP TABLE IF EXISTS `table`;
CREATE TABLE IF NOT EXISTS `table` (
  `action_reason_id` int(255) NOT NULL AUTO_INCREMENT,
  `action_id` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `action_name` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `action_description` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `reason_id` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `reason_name` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `reason_description` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `action_reason_begin` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `action_reason_end` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `action_reason_create_id` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `action_reason_create_user` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `action_reason_create_date` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `action_reason_modify_id` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `action_reason_modify_user` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  `action_reason_modify_date` varchar(255) COLLATE utf8_polish_ci DEFAULT NULL,
  PRIMARY KEY (`action_reason_id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `table`
--

INSERT INTO `table` (`action_reason_id`, `action_id`, `action_name`, `action_description`, `reason_id`, `reason_name`, `reason_description`, `action_reason_begin`, `action_reason_end`, `action_reason_create_id`, `action_reason_create_user`, `action_reason_create_date`, `action_reason_modify_id`, `action_reason_modify_user`, `action_reason_modify_date`) VALUES
(13, '5', 'Przeniesienie prawa wÅ‚asnoÅ›ci do pojazdu', '', '4', 'Nabycie pojazdu w spadku', '', '2018-10-04', '', '1', 'System System', '2018-10-04', '1', 'System System', '2018-10-04'),
(14, '6', 'Rekalkulacja skÅ‚adki OCK', '', '31', 'Å»Ä…danie nabywcy', '', '2018-10-04', '', '1', 'System System', '2018-10-04', '1', 'System System', '2018-10-04'),
(15, '6', 'Rekalkulacja skÅ‚adki OCK', '', '32', 'Å»Ä…danie obdarowanego', '', '2018-10-04', '', '1', 'System System', '2018-10-04', '1', 'System System', '2018-10-04'),
(16, '6', 'Rekalkulacja skÅ‚adki OCK', '', '33', 'Å»Ä…danie spadkobiercy', '', '2018-10-04', '', '1', 'System System', '2018-10-04', '1', 'System System', '2018-10-04'),
(17, '6', 'Rekalkulacja skÅ‚adki OCK', '', '3', 'Inicjatywa ubezpieczyciela', '', '2018-10-04', '', '1', 'System System', '2018-10-04', '1', 'System System', '2018-10-04'),
(18, '7', 'Wypowiedzenie umowy OCK przez nabywcÄ™ (art. 31.1)', '', '26', 'ZgÅ‚oszenie wypowiedzenia', '', '2018-10-04', '', '1', 'System System', '2018-10-04', '1', 'System System', '2018-10-04'),
(19, '8', 'Wypowiedzenie umowy OCK z upÅ‚ywem okresu ubezpieczenia (art. 28.1)', '', '27', 'ZgÅ‚oszenie wypowiedzenia art. 28.1', '', '2018-10-04', '', '1', 'System System', '2018-10-04', '1', 'System System', '2018-10-04'),
(20, '9', 'Wypowiedzenie wznowionej OCK po zmianie ubezpieczyciela (art. 28.a)', '', '28', 'ZgÅ‚oszenie zdublowania ochrony', '', '2018-10-04', '', '1', 'System System', '2018-10-04', '1', 'System System', '2018-10-04'),
(21, '10', 'ZakoÅ„czenie umowy OCK na polisie', '', '21', 'Wyrejestrowanie pojazdu po demontaÅ¼u', '', '2018-10-04', '', '1', 'System System', '2018-10-04', '1', 'System System', '2018-10-04'),
(22, '10', 'ZakoÅ„czenie umowy OCK na polisie', '', '22', 'Wywiezienie pojazdu za granicÄ™', '', '2018-10-04', '', '1', 'System System', '2018-10-04', '1', 'System System', '2018-10-04'),
(23, '11', 'Zmiana danych kontrahenta', '', '25', 'ZgÅ‚oszenie kontrahenta', '', '2018-10-04', '', '1', 'System System', '2018-10-04', '1', 'System System', '2018-10-04'),
(24, '12', 'Zmiana danych w polisie â€“ aneks', '', '16', 'Wymiana dowodu rejestracyjnego', '', '2018-10-04', '', '1', 'System System', '2018-10-04', '1', 'System System', '2018-10-04'),
(25, '12', 'Zmiana danych w polisie â€“ aneks', '', '2', 'Dopisanie wspÃ³Å‚wÅ‚aÅ›ciciela pojazdu', '', '2018-10-04', '', '1', 'System System', '2018-10-04', '1', 'System System', '2018-10-04'),
(26, '12', 'Zmiana danych w polisie â€“ aneks', '', '15', 'WykreÅ›lenie wspÃ³Å‚wÅ‚aÅ›ciciela pojazdu', '', '2018-10-04', '', '1', 'System System', '2018-10-04', '1', 'System System', '2018-10-04'),
(27, '12', 'Zmiana danych w polisie â€“ aneks', '', '29', 'Zmiana uposaÅ¼onych', '', '2018-10-04', '', '1', 'System System', '2018-10-04', '1', 'System System', '2018-10-04'),
(28, '14', 'Zamiana wariantu w umowie', '', '14', 'Wniosek ubezpieczajÄ…cego', '', '2018-10-04', '', '1', 'System System', '2018-10-04', '1', 'System System', '2018-10-04'),
(29, '13', 'Zwrot skÅ‚adki', '', '19', 'Wypowiedzenie OCK przez nabywcÄ™ (art. 31.1)', '', '2018-10-04', '', '1', 'System System', '2018-10-04', '1', 'System System', '2018-10-04'),
(30, '13', 'Zwrot skÅ‚adki', '', '8', 'OdstÄ…pienie od umowy ubezpieczenia', '', '2018-10-04', '', '1', 'System System', '2018-10-04', '1', 'System System', '2018-10-04'),
(31, '13', 'Zwrot skÅ‚adki', '', '9', 'Przedterminowe zakoÅ„czenie dobrowolnej umowy', '', '2018-10-04', '', '1', 'System System', '2018-10-04', '1', 'System System', '2018-10-04'),
(32, '13', 'Zwrot skÅ‚adki', '', '24', 'ZakoÅ„czenie umowy OCK na polisie', '', '2018-10-04', '', '1', 'System System', '2018-10-04', '1', 'System System', '2018-10-04'),
(33, '13', 'Zwrot skÅ‚adki', '', '20', 'Wypowiedzenie wznowionej OCK po zmianie ubezpieczyciela (art. 28a)', '', '2018-10-04', '', '1', 'System System', '2018-10-04', '1', 'System System', '2018-10-04'),
(34, '13', 'Zwrot skÅ‚adki', '', '10', 'RozwiÄ…zanie umowy ubezpieczenia za porozumieniem stron', '', '2018-10-04', '', '1', 'System System', '2018-10-04', '1', 'System System', '2018-10-04'),
(35, '13', 'Zwrot skÅ‚adki', '', '7', 'OdpowiedzialnoÅ›Ä‡ TUZ przy braku opÅ‚acenia pierwszej raty /skÅ‚adki', '', '2018-10-04', '', '1', 'System System', '2018-10-04', '1', 'System System', '2018-10-04'),
(36, '13', 'Zwrot skÅ‚adki', '', '30', 'Zmiana wÅ‚aÅ›ciciela przedmiotu ubezpieczenia', '', '2018-10-04', '', '1', 'System System', '2018-10-04', '1', 'System System', '2018-10-04'),
(37, '13', 'Zwrot skÅ‚adki', '', '5', 'NadpÅ‚ata po rekalkulacji skÅ‚adki OCK', '', '2018-10-04', '', '1', 'System System', '2018-10-04', '1', 'System System', '2018-10-04'),
(64, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, 'Name', '31243r', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, 'Name', '31243', 'io', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, '2', '2', '2', '2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, '3', '3', '3', '3', '3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, '4', '4', '4', '4', '4', '4', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, '5', '5', '5', '5', '5', '5', '5', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', '6', NULL, NULL, NULL),
(75, '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7'),
(76, 'Name', 'Name', '2', '2', '3', '4', '5', '6', '6', '6', '6', '7', '7', '9'),
(77, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(78, 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd', 'd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
