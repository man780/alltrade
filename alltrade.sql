-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 11 2016 г., 15:48
-- Версия сервера: 5.7.11
-- Версия PHP: 5.5.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `alltrade`
--

-- --------------------------------------------------------

--
-- Структура таблицы `at_ads`
--

CREATE TABLE IF NOT EXISTS `at_ads` (
  `id` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_currency` int(11) NOT NULL,
  `id_states` int(3) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `text` text NOT NULL,
  `count` int(11) DEFAULT NULL,
  `cost` float DEFAULT NULL,
  `like` int(11) DEFAULT NULL,
  `dislike` int(11) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `delivery` int(3) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` tinyint(3) NOT NULL,
  `id_viloyat` int(11) DEFAULT NULL,
  `id_tuman` int(11) DEFAULT NULL,
  `contact_name` varchar(255) DEFAULT NULL,
  `contact_phone` varchar(255) DEFAULT NULL,
  `contact_phone_attributes` varchar(255) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `dcreated` int(11) NOT NULL,
  `bycreated` int(11) DEFAULT NULL,
  `dmodified` int(11) DEFAULT NULL,
  `bymodified` int(11) DEFAULT NULL,
  `ddeleted` int(11) DEFAULT NULL,
  `bydeleted` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `at_ads`
--

INSERT INTO `at_ads` (`id`, `id_category`, `id_currency`, `id_states`, `name`, `description`, `text`, `count`, `cost`, `like`, `dislike`, `rate`, `delivery`, `image`, `status`, `id_viloyat`, `id_tuman`, `contact_name`, `contact_phone`, `contact_phone_attributes`, `contact_email`, `view`, `dcreated`, `bycreated`, `dmodified`, `bymodified`, `ddeleted`, `bydeleted`) VALUES
(1, 304, 1, 0, 'Perviy ', '', 'hkhkhkhkh', NULL, 45221200, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 13, 180, 'Rasul', '{"contact_phone1":"+998 (99) 999-99-91","telegram1":"telegram","contact_phone2":"+998 (90) 738-95-58"}', NULL, 'rasul@outlook.com', 178, 1468908683, 1, 1478867911, 1, NULL, NULL),
(2, 304, 1, 0, 'vtoroy', '', 'hkhkhkhkh', NULL, 45221, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 1, 6, 'mnfhjgh', '{"contact_phone1":"+998 (90) 738-95-58","telegram1":"telegram"}', NULL, '', 36, 1468908683, 1, 1476886692, NULL, NULL, NULL),
(3, 304, 1, 0, 'tretiy', '', 'hkhkhkhkh', NULL, 45221, 0, 0, 0, 0, '{"0":{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},"2":{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"},"4":{"max":"img_4_750x750.JPG","min":"img_4_250x250.JPG"}}', 1, 1, 6, 'mnfhjgh', '{"contact_phone1":"+998 (90) 738-95-58"}', NULL, '', 32, 1468908683, 1, 1476881414, NULL, NULL, NULL),
(4, 304, 1, 0, 'fourth', '', 'hkhkhkhkh', NULL, 45221, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.JPG","min":"img_1_250x250.JPG"}]', 1, 1, 6, 'mnfhjgh', '{"contact_phone1":"+998 (90) 738-95-58","telegram1":"telegram"}', NULL, '', 28, 1468908683, 1, 1476886680, NULL, NULL, NULL),
(5, 304, 1, 0, 'uyjhkjhkjhk', '', 'hkhkhkhkh', NULL, 45221, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 1, 6, 'mnfhjgh', NULL, NULL, '', 26, 1468908683, 1, 1476886686, NULL, NULL, NULL),
(6, 304, 1, 0, 'uyjhkjhkjhk', '', 'hkhkhkhkh', NULL, 45221, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 1, 6, 'mnfhjgh', '{"contact_phone1":"+998 (97) 123-54-65"}', NULL, '', 22, 1468908683, 1, 1476881849, NULL, NULL, NULL),
(7, 304, 1, 0, 'uyjhkjhkjhk', '', 'hkhkhkhkh', NULL, 45221, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"}]', 1, 1, 6, 'mnfhjgh', '{"contact_phone1":"+998 (90) 738-95-58"}', NULL, '', 17, 1468908683, 1, 1476863147, NULL, NULL, NULL),
(8, 304, 1, 0, 'uyjhkjhkjhk', '', 'hkhkhkhkh', NULL, 45221, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.JPG","min":"img_2_250x250.JPG"}]', 1, 1, 6, 'mnfhjgh', '{"contact_phone1":"+998 (90) 738-95-58"}', NULL, '', 19, 1468908683, 1, 1476863256, NULL, NULL, NULL),
(9, 304, 1, 0, 'uyjhkjhkjhk', '', 'hkhkhkhkh', NULL, 45221, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 1, 6, 'mnfhjgh', NULL, NULL, '', 20, 1468908683, 1, 1470653555, NULL, NULL, NULL),
(10, 304, 1, 0, 'uyjhkjhkjhk', '', 'hkhkhkhkh', NULL, 45221, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 1, 6, 'mnfhjgh', NULL, NULL, '', 16, 1468908683, 1, 1468911319, NULL, NULL, NULL),
(11, 304, 1, 0, 'uyjhkjhkjhk', '', 'hkhkhkhkh', NULL, 45221, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 1, 6, 'mnfhjgh', NULL, NULL, '', 16, 1468908683, 1, 1468911319, NULL, NULL, NULL),
(12, 304, 1, 0, 'uyjhkjhkjhk', '', 'hkhkhkhkh', NULL, 45221, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 1, 6, 'mnfhjgh', NULL, NULL, '', 16, 1468908683, 1, 1468911319, NULL, NULL, NULL),
(13, 304, 1, 0, 'uyjhkjhkjhk', '', 'hkhkhkhkh', NULL, 45221, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 1, 6, 'mnfhjgh', NULL, NULL, '', 16, 1468908683, 1, 1468911319, NULL, NULL, NULL),
(14, 304, 1, 0, 'uyjhkjhkjhk', '', 'hkhkhkhkh', NULL, 45221, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 1, 6, 'mnfhjgh', NULL, NULL, '', 18, 1468908683, 1, 1476879718, NULL, NULL, NULL),
(15, 304, 1, 0, 'uyjhkjhkjhk', '', 'hkhkhkhkh', NULL, 45221, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 1, 6, 'mnfhjgh', NULL, NULL, '', 16, 1468908683, 1, 1468911319, NULL, NULL, NULL),
(16, 304, 1, 0, 'uyjhkjhkjhk', '', 'hkhkhkhkh', NULL, 45221, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 1, 6, 'mnfhjgh', NULL, NULL, '', 16, 1468908683, 1, 1468911319, NULL, NULL, NULL),
(17, 304, 1, 0, 'uyjhkjhkjhk', '', 'hkhkhkhkh', NULL, 45221, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 1, 6, 'mnfhjgh', NULL, NULL, '', 16, 1468908683, 1, 1468911319, NULL, NULL, NULL),
(18, 304, 1, 0, 'uyjhkjhkjhk', '', 'hkhkhkhkh', NULL, 45221, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 1, 6, 'mnfhjgh', NULL, NULL, '', 16, 1468908683, 1, 1468911319, NULL, NULL, NULL),
(19, 304, 1, 0, 'uyjhkjhkjhk', '', 'hkhkhkhkh', NULL, 45221, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 1, 6, 'mnfhjgh', NULL, NULL, '', 16, 1468908683, 1, 1468911319, NULL, NULL, NULL),
(20, 304, 1, 0, 'uyjhkjhkjhk', '', 'hkhkhkhkh', NULL, 45221, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 1, 6, 'mnfhjgh', NULL, NULL, '', 16, 1468908683, 1, 1468911319, NULL, NULL, NULL),
(21, 304, 1, 0, 'uyjhkjhkjhk', '', 'hkhkhkhkh', NULL, 45221, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 1, 6, 'mnfhjgh', NULL, NULL, '', 17, 1468908683, 1, 1476682918, NULL, NULL, NULL),
(22, 304, 1, 0, 'uyjhkjhkjhk', '', 'hkhkhkhkh', NULL, 45221, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 1, 6, 'mnfhjgh', NULL, NULL, '', 17, 1468908683, 1, 1476682923, NULL, NULL, NULL),
(23, 304, 1, 0, 'uyjhkjhkjhk', '', 'hkhkhkhkh', NULL, 45221, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 1, 6, 'mnfhjgh', NULL, NULL, '', 16, 1468908683, 1, 1468911319, NULL, NULL, NULL),
(24, 304, 1, 0, 'uyjhkjhkjhk', '', 'hkhkhkhkh', NULL, 45221, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 1, 6, 'mnfhjgh', NULL, NULL, '', 16, 1468908683, 1, 1468911319, NULL, NULL, NULL),
(25, 304, 1, 0, 'uyjhkjhkjhk', '', 'hkhkhkhkh', NULL, 45221, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 1, 6, 'mnfhjgh', NULL, NULL, '', 16, 1468908683, 1, 1468911319, NULL, NULL, NULL),
(26, 304, 1, 0, 'uyjhkjhkjhk', '', 'hkhkhkhkh', NULL, 45221, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 1, 6, 'mnfhjgh', NULL, NULL, '', 16, 1468908683, 1, 1468911319, NULL, NULL, NULL),
(27, 304, 1, 0, 'uyjhkjhkjhk', '', 'hkhkhkhkh', NULL, 45221, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 1, 6, 'mnfhjgh', NULL, NULL, '', 17, 1468908683, 1, 1469094531, NULL, NULL, NULL),
(28, 304, 1, 0, 'uyjhkjhkjhk', '', 'hkhkhkhkh', NULL, 45221, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 1, 6, 'mnfhjgh', NULL, NULL, '', 17, 1468908683, 1, 1468913319, NULL, NULL, NULL),
(29, 304, 2, 0, 'Moshina', '', 'Moshina', NULL, 10000, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 1, 6, 'Rasul', NULL, NULL, 'rasul@mail.ru', 3, 1468910778, 1, 1476784869, NULL, NULL, NULL),
(30, 304, 2, 0, 'Mash', '', 'mash', NULL, 1000, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 1, 5, 'Rasul', NULL, NULL, 'rasul@mail.ru', 2, 1468910887, 1, 1468911007, NULL, NULL, NULL),
(31, 304, 2, 0, 'asdasd', '', 'asdasdasd', NULL, 10000, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"},{"max":"img_3_750x750.jpg","min":"img_3_250x250.jpg"}]', 1, 1, 5, 'Rasul', NULL, NULL, 'rasul@mail.ru', 1, 1468910972, 1, 1468910973, NULL, NULL, NULL),
(32, 94, 2, 0, 'Rasul', '', 'asdasdasd', NULL, 10000, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"},{"max":"img_3_750x750.jpg","min":"img_3_250x250.jpg"},{"max":"img_4_750x750.jpg","min":"img_', 1, 1, 7, 'Rasul', NULL, NULL, 'rasul@mail.ru', 1, 1468911147, 1, 1468911147, NULL, NULL, NULL),
(33, 304, 2, 0, 'testtest', '', 'asdasd', NULL, 12212, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 1, 5, 'Rasul', NULL, NULL, 'rasul@mail.ru', 1, 1468911312, 1, 1468911312, NULL, NULL, NULL),
(34, 304, 1, 0, 'uyjhkjhkjhk', '', 'hkhkhkhkh', NULL, 45221, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 1, 6, 'mnfhjgh', NULL, NULL, '', 16, 1468908683, 1, 1468911319, NULL, NULL, NULL),
(35, 304, 1, 0, 'uyjhkjhkjhk', '', 'hkhkhkhkh', NULL, 45221, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 1, 6, 'mnfhjgh', NULL, NULL, '', 16, 1468908683, 1, 1468911319, NULL, NULL, NULL),
(36, 304, 1, 0, 'uyjhkjhkjhk', '', 'hkhkhkhkh', NULL, 45221, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 1, 6, 'mnfhjgh', NULL, NULL, '', 19, 1468908683, 1, 1476795585, NULL, NULL, NULL),
(37, 17, 2, 0, 'askdjfhakdjfh', '', 'asdasdfadf', NULL, 20000, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 1, 15, 'Rasul', NULL, NULL, '', 39, 1468913253, 1, 1478006568, NULL, NULL, NULL),
(38, 17, 2, 0, 'Rasul', '', 'asdasd', NULL, 20000, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 1, 12, 'Rasul', NULL, NULL, '', 2, 1468913591, 1, 1468913643, NULL, NULL, NULL),
(39, 17, 2, 0, 'sdfsf', '', 'sdfasdf', NULL, 20000, 0, 0, 0, 0, '[{"max":"img_0_1000x1000.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_1000x1000.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_1000x1000.jpg","min":"img_2_250x250.jpg"}]', 1, 1, 13, 'Rasul', NULL, NULL, '', 9, 1468913736, 1, 1470814806, NULL, NULL, NULL),
(40, 17, 2, 0, 'Dom', '', 'Dom', NULL, 20000, 0, 0, 0, 0, '[{"max":"img_0_1000x1000.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_1000x1000.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_1000x1000.jpg","min":"img_2_250x250.jpg"}]', 1, 1, 7, 'Rasul', NULL, NULL, 'rasul@mail.ru', 3, 1468919599, 1, 1476784893, NULL, NULL, NULL),
(41, 17, 2, 0, 'UYUY', '', 'UYUY', NULL, 20000, 0, 0, 0, 0, '[{"max":"img_0_1000x1000.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_1000x1000.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_1000x1000.jpg","min":"img_2_250x250.jpg"}]', 1, 1, 6, 'Rasul', '{"contact_phone1":"+998 (90) 738-95-58","whatsapp1":"whatsapp","contact_phone2":"+998 (91) 425-94-97","whatsapp2":"whatsapp","telegram2":"telegram","contact_phone3":"+998 (91) 996-09-83","whatsapp3":"whatsapp"}', NULL, 'rasul@mail.ru', 2, 1468921848, 1, 1469094618, NULL, NULL, NULL),
(42, 17, 2, 0, 'Rasul', '', 'Rasul', NULL, 20000, 0, 0, 0, 0, '[{"max":"img_0_1000x1000.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_1000x1000.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_1000x1000.jpg","min":"img_2_250x250.jpg"}]', 1, 1, 7, 'Rasul', '{"contact_phone1":"+998 (90) 738-95-58","whatsapp1":"whatsapp","contact_phone2":"+998 (91) 425-94-97","whatsapp2":"whatsapp","telegram2":"telegram","contact_phone3":"+998 (97) 123-45-67","whatsapp3":"whatsapp"}', NULL, 'rasul@mail.ru', 32, 1468921935, 1, 1476798168, NULL, NULL, NULL),
(43, 18, 2, 0, 'Дом 1', '', 'Очень хороший дом', NULL, 45000, 0, 0, 0, 0, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"}]', 1, 1, 5, 'murod', '{"contact_phone1":"+998 (93) 574-75-96","whatsapp1":"whatsapp","telegram1":"telegram","contact_phone2":"+998 (93) 123-45-67","telegram2":"telegram","contact_phone3":"+998 (97) 654-32-21","whatsapp3":"whatsapp"}', NULL, 'man780@mail.ru', 36, 1469277815, 1, 1476684156, NULL, NULL, NULL),
(44, 17, 2, NULL, 'UyEshchanov', NULL, 'UyEshchanov', NULL, 3000, NULL, NULL, NULL, NULL, NULL, 1, 1, 8, 'Rasul', '{"contact_phone1":"+998 (90) 738-95-58","whatsapp1":"whatsapp"}', NULL, 'rasul@mail.ru', 5, 1471088972, NULL, 1476784950, NULL, NULL, NULL),
(45, 304, 2, NULL, 'Noviy Nexia', NULL, 'Noviy Nexia', NULL, 10000, NULL, NULL, NULL, NULL, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 13, 178, 'Rasul', '{"contact_phone1":"+998 (90) 738-95-58","whatsapp1":"whatsapp","telegram1":"telegram"}', NULL, 'rasul@outlook.com', 6, 1476785276, NULL, 1476789480, NULL, NULL, NULL),
(46, 304, 2, NULL, 'Noviy Matiz', NULL, 'Noviy Matiz', NULL, 10000, NULL, NULL, NULL, NULL, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 13, 172, 'Rasul', '{"contact_phone1":"+998 (91) 425-94-97","telegram1":"telegram"}', NULL, 'rasul@outlook.com', 2, 1476786510, NULL, 1476786692, NULL, NULL, NULL),
(47, 304, 2, NULL, 'Noviy Matiz1', NULL, 'Noviy Matiz', NULL, 10000, NULL, NULL, NULL, NULL, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"},{"max":"img_3_750x750.jpg","min":"img_3_250x250.jpg"}]', 1, 13, 173, 'Rasul', '{"contact_phone1":"+998 (90) 738-95-58"}', NULL, 'rasul@outlook.com', 17, 1476788750, NULL, 1476866297, NULL, NULL, NULL),
(48, 305, 2, NULL, 'Noviy Damaz', NULL, 'Noviy Damaz', NULL, 12000, NULL, NULL, NULL, NULL, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"}]', 1, 13, 172, 'Rasul', '{"contact_phone1":"+998 (90) 738-95-58","telegram1":"telegram"}', NULL, 'rasul@outlook.com', 33, 1476794647, NULL, 1477038108, 17, NULL, NULL),
(49, 305, 2, NULL, 'Noviy Damas2', NULL, 'Damas noviy 2013', NULL, 9000, NULL, NULL, NULL, NULL, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 13, 177, 'Rasul', '{"contact_phone1":"+998 (90) 738-95-58"}', NULL, 'rasul@outlook.com', 2, 1476864449, NULL, 1476864571, NULL, NULL, NULL),
(50, 305, 2, NULL, 'Noviy Damas3', NULL, 'Damas 3 2012', NULL, 5000, NULL, NULL, NULL, NULL, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"}]', 1, 13, 175, 'Rasul', '{"contact_phone1":"+998 (90) 738-95-58","telegram1":"telegram"}', NULL, 'rasul@outlook.com', 4, 1476864773, NULL, 1476866618, NULL, NULL, NULL),
(51, 305, 2, NULL, 'Noviy Damas3', NULL, 'jhgjhgjhgjhgjhg', NULL, 10000, NULL, NULL, NULL, NULL, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"},{"max":"img_3_750x750.jpg","min":"img_3_250x250.jpg"}]', 1, 5, 64, 'Rasul', '{"contact_phone1":"+998 (90) 738-95-58","telegram1":"telegram"}', NULL, 'rasul@outlook.com', 2, 1476866410, NULL, 1476866433, NULL, NULL, NULL),
(52, 180, 2, NULL, 'Highscreen Spider', NULL, 'Zo''r telefon', NULL, 100, NULL, NULL, NULL, NULL, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 13, 180, 'Rasul', '{"contact_phone1":"+998 (90) 738-95-58","telegram1":"telegram"}', NULL, 'rasul@outlook.com', 3, 1476942832, 17, 1477722527, 17, NULL, NULL),
(53, 157, 2, NULL, 'Acer NetBook', NULL, 'Acer netbook', NULL, 300, NULL, NULL, NULL, NULL, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 13, 180, 'Rasul', '{"contact_phone1":"+998 (90) 738-95-58","telegram1":"telegram"}', NULL, 'rasul@outlook.com', 1, 1476944006, 17, 1476944006, 17, NULL, NULL),
(54, 183, 2, NULL, 'Zo''r telefon', NULL, 'zzzzz', NULL, 100, NULL, NULL, NULL, NULL, '[{"max":"img_0_750x750.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_750x750.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_750x750.jpg","min":"img_2_250x250.jpg"}]', 1, 13, 180, 'Rasul', '{"contact_phone1":"+998 (90) 738-95-58","telegram1":"telegram"}', NULL, 'rasul@outlook.com', 1, 1476944068, 17, 1476944069, 17, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `at_ads_costs`
--

CREATE TABLE IF NOT EXISTS `at_ads_costs` (
  `id` int(11) NOT NULL,
  `id_ad` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `id_currency` int(1) NOT NULL,
  `id_user` int(11) NOT NULL,
  `dcreated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `at_auth_assignment`
--

CREATE TABLE IF NOT EXISTS `at_auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `at_auth_assignment`
--

INSERT INTO `at_auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '1', 1437080407),
('moderator', '5', 1437261589),
('user', '4', 1437261550);

-- --------------------------------------------------------

--
-- Структура таблицы `at_auth_item`
--

CREATE TABLE IF NOT EXISTS `at_auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `at_auth_item`
--

INSERT INTO `at_auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('admin', 1, 'can do everything', NULL, NULL, 1437080113, 1437262903),
('indexView', 2, 'show only list and each product', NULL, NULL, 1437260074, 1437260074),
('moderator', 1, 'Role: Site moderator', NULL, NULL, 1437261439, 1437261439),
('user', 1, 'Role user', NULL, NULL, 1437261488, 1437261488);

-- --------------------------------------------------------

--
-- Структура таблицы `at_auth_item_child`
--

CREATE TABLE IF NOT EXISTS `at_auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `at_auth_item_child`
--

INSERT INTO `at_auth_item_child` (`parent`, `child`) VALUES
('admin', 'indexView'),
('admin', 'moderator'),
('admin', 'user');

-- --------------------------------------------------------

--
-- Структура таблицы `at_auth_rule`
--

CREATE TABLE IF NOT EXISTS `at_auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `at_brands`
--

CREATE TABLE IF NOT EXISTS `at_brands` (
  `id` int(11) NOT NULL,
  `id_category` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `gallery` text NOT NULL,
  `rate` int(5) NOT NULL,
  `text` text NOT NULL,
  `id_country` int(11) NOT NULL,
  `dcreated` int(11) DEFAULT NULL,
  `bycreated` int(11) DEFAULT NULL,
  `dmodified` int(11) DEFAULT NULL,
  `bymodified` int(11) DEFAULT NULL,
  `ddeleted` int(11) DEFAULT NULL,
  `bydeleted` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=702 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `at_brands`
--

INSERT INTO `at_brands` (`id`, `id_category`, `name`, `image`, `gallery`, `rate`, `text`, `id_country`, `dcreated`, `bycreated`, `dmodified`, `bymodified`, `ddeleted`, `bydeleted`) VALUES
(40, 180, 'Выбрать', '', '', 1, '', 1, 1465977973, 1, NULL, NULL, NULL, NULL),
(42, 267, 'Выбрать', '', '', 1, '', 1, 1465977973, 1, NULL, NULL, NULL, NULL),
(43, 266, 'Выбрать', '', '', 1, '', 1, 1465977973, 1, NULL, NULL, NULL, NULL),
(44, 265, 'Выбрать', '', '', 1, '', 1, 1465977973, 1, NULL, NULL, NULL, NULL),
(45, 1488, 'Выбрать', '', '', 1, '', 1, 1465977973, 1, NULL, NULL, NULL, NULL),
(46, 340, 'Выбрать', '', '', 1, '', 1, 1465977973, 1, NULL, NULL, NULL, NULL),
(47, 305, 'Выбрать', '', '', 1, '', 1, 1465977973, 1, NULL, NULL, NULL, NULL),
(48, 304, 'Выбрать', '', '', 1, '', 1, 1465977973, 1, NULL, NULL, NULL, NULL),
(49, 340, 'Avia', '', '', 1, '<p>Avia</p>\r\n', 1, 1463984657, 1, NULL, NULL, NULL, NULL),
(50, 340, 'BAW', '', '', 1, '<p>BAW</p>\r\n', 1, 1463984682, 1, NULL, NULL, NULL, NULL),
(51, 340, 'CAMC', '', '', 1, '<p>CAMC</p>\r\n', 1, 1463984704, 1, NULL, NULL, NULL, NULL),
(52, 340, 'Daewoo', '', '', 1, '<p>Daewoo</p>\r\n', 1, 1463984735, 1, NULL, NULL, NULL, NULL),
(53, 340, 'DAF', '', '', 1, '<p>DAF</p>\r\n', 1, 1463984756, 1, NULL, NULL, NULL, NULL),
(54, 340, 'DongFeng', '', '', 1, '<p>DongFeng</p>\r\n', 1, 1463984777, 1, NULL, NULL, NULL, NULL),
(55, 340, 'FAW', '', '', 1, '<p>FAW</p>\r\n', 1, 1463984840, 1, NULL, NULL, NULL, NULL),
(56, 340, 'Ford', '', '', 1, '<p>Ford</p>\r\n', 1, 1463984900, 1, NULL, NULL, NULL, NULL),
(57, 340, 'Foton', '', '', 1, '<p>Foton</p>\r\n', 1, 1463984922, 1, NULL, NULL, NULL, NULL),
(58, 340, 'Freightliner', '', '', 1, '<p>Freightliner</p>\r\n', 1, 1463984941, 1, NULL, NULL, NULL, NULL),
(59, 340, 'Hania', '', '', 1, '<p>Hania</p>\r\n', 1, 1463984965, 1, NULL, NULL, NULL, NULL),
(60, 340, 'HOWO', '', '', 1, '<p>HOWO</p>\r\n', 1, 1463984992, 1, NULL, NULL, NULL, NULL),
(61, 340, 'Hyundai', '', '', 1, '<p>Hyundai</p>\r\n', 1, 1463985010, 1, NULL, NULL, NULL, NULL),
(62, 340, 'IFA', '', '', 1, '<p>IFA</p>\r\n', 1, 1463985032, 1, NULL, NULL, NULL, NULL),
(63, 340, 'International', '', '', 1, '<p>International</p>\r\n', 1, 1463985051, 1, NULL, NULL, NULL, NULL),
(64, 340, 'Isuzu', '', '', 1, '<p>Isuzu</p>\r\n', 1, 1463985072, 1, NULL, NULL, NULL, NULL),
(65, 340, 'IVECO', '', '', 1, '<p>IVECO</p>\r\n', 1, 1463985094, 1, NULL, NULL, NULL, NULL),
(66, 340, 'Kia', '', '', 1, '<p>Kia</p>\r\n', 1, 1463985110, 1, NULL, NULL, NULL, NULL),
(67, 340, 'MAN', '', '', 1, '<p>MAN</p>\r\n', 1, 1463985129, 1, NULL, NULL, NULL, NULL),
(68, 340, 'Mazda', '', '', 1, '<p>Mazda</p>\r\n', 1, 1463985167, 1, NULL, NULL, NULL, NULL),
(69, 340, 'Mercedes', '', '', 1, '<p>Mercedes</p>\r\n', 1, 1463985185, 1, NULL, NULL, NULL, NULL),
(70, 340, 'Mitsubishi', '', '', 1, '<p>Mitsubishi</p>\r\n', 1, 1463985203, 1, NULL, NULL, NULL, NULL),
(71, 340, 'Nissan', '', '', 1, '<p>Nissan</p>\r\n', 1, 1463985224, 1, NULL, NULL, NULL, NULL),
(72, 340, 'Renault', '', '', 1, '<p>Renault</p>\r\n', 1, 1463985244, 1, NULL, NULL, NULL, NULL),
(73, 340, 'Scania', '', '', 1, '<p>Scania</p>\r\n', 1, 1463985268, 1, NULL, NULL, NULL, NULL),
(74, 340, 'Shaanxi-MAN', '', '', 1, '<p>Shaanxi-MAN</p>\r\n', 1, 1463985291, 1, NULL, NULL, NULL, NULL),
(75, 340, 'Tatra', '', '', 1, '<p>Tatra</p>\r\n', 1, 1463985321, 1, NULL, NULL, NULL, NULL),
(76, 340, 'YueJin', '', '', 1, '<p>YueJin</p>\r\n', 1, 1463985339, 1, NULL, NULL, NULL, NULL),
(77, 340, 'Volvo', '', '', 1, '<p>Volvo</p>\r\n', 1, 1463985598, 1, NULL, NULL, NULL, NULL),
(78, 340, 'ГАЗ', '', '', 1, '<p>ГАЗ</p>\r\n', 1, 1463985615, 1, NULL, NULL, NULL, NULL),
(79, 340, 'ЗИЛ', '', '', 1, '<p>ЗИЛ</p>\r\n', 1, 1463985638, 1, NULL, NULL, NULL, NULL),
(80, 340, 'КАМАЗ', '', '', 1, '<p>КАМАЗ</p>\r\n', 1, 1463985658, 1, NULL, NULL, NULL, NULL),
(81, 340, 'КРАЗ', '', '', 1, '<p>КРАЗ</p>\r\n', 1, 1463985730, 1, NULL, NULL, NULL, NULL),
(82, 340, 'МАЗ', '', '', 1, '<p>МАЗ</p>\r\n', 1, 1463985748, 1, NULL, NULL, NULL, NULL),
(83, 340, 'МЗКТ', '', '', 1, '<p>МЗКТ</p>\r\n', 1, 1463985828, 1, NULL, NULL, NULL, NULL),
(84, 340, 'УРАЛ', '', '', 1, '<p>УРАЛ</p>\r\n', 1, 1463985849, 1, NULL, NULL, NULL, NULL),
(85, 340, 'Другая марка', '', '', 1, '<p>Другая марка</p>\r\n', 1, 1463985885, 1, NULL, NULL, NULL, NULL),
(86, 304, 'Alfa Romeo', '', '', 1, '', 1, 1465977973, 1, NULL, NULL, NULL, NULL),
(87, 304, 'Audi', '', '', 1, '', 1, 1465978016, 1, NULL, NULL, NULL, NULL),
(88, 304, 'Bentley', '', '', 1, '', 1, 1465978045, 1, NULL, NULL, NULL, NULL),
(89, 304, 'BMW', '', '', 1, '', 1, 1465978073, 1, NULL, NULL, NULL, NULL),
(90, 304, 'Cadillac', '', '', 1, '', 1, 1465978159, 1, NULL, NULL, NULL, NULL),
(91, 304, 'Chery', '', '', 1, '', 1, 1465978188, 1, NULL, NULL, NULL, NULL),
(92, 304, 'Chevrolet', '', '', 1, '', 1, 1465978219, 1, NULL, NULL, NULL, NULL),
(93, 304, 'Chrysler', '', '', 1, '', 1, 1465978247, 1, NULL, NULL, NULL, NULL),
(94, 304, 'Citroen', '', '', 1, '', 1, 1465978276, 1, NULL, NULL, NULL, NULL),
(95, 304, 'Dacia', '', '', 1, '', 1, 1465978299, 1, NULL, NULL, NULL, NULL),
(96, 304, 'Daewoo', '', '', 1, '', 1, 1465978323, 1, NULL, NULL, NULL, NULL),
(97, 304, 'Dodge', '', '', 1, '', 1, 1465978345, 1, NULL, NULL, NULL, NULL),
(98, 304, 'Fiat', '', '', 1, '', 1, 1465978371, 1, NULL, NULL, NULL, NULL),
(99, 304, 'Ford', '', '', 1, '', 1, 1465978386, 1, NULL, NULL, NULL, NULL),
(100, 304, 'GMC', '', '', 1, '', 1, 1465978420, 1, NULL, NULL, NULL, NULL),
(101, 304, 'Honda', '', '', 1, '', 1, 1465978443, 1, NULL, NULL, NULL, NULL),
(102, 304, 'Hummer', '', '', 1, '', 1, 1465978459, 1, NULL, NULL, NULL, NULL),
(103, 304, 'Hyundai', '', '', 1, '', 1, 1465978480, 1, NULL, NULL, NULL, NULL),
(104, 304, 'Infiniti', '', '', 1, '', 1, 1465978495, 1, NULL, NULL, NULL, NULL),
(105, 304, 'Isuzu', '', '', 1, '', 1, 1465978542, 1, NULL, NULL, NULL, NULL),
(106, 304, 'Jaguar', '', '', 1, '', 1, 1465978562, 1, NULL, NULL, NULL, NULL),
(107, 304, 'Jeep', '', '', 1, '', 1, 1465978584, 1, NULL, NULL, NULL, NULL),
(108, 304, 'Kia', '', '', 1, '', 1, 1465978614, 1, NULL, NULL, NULL, NULL),
(109, 304, 'Land Rover', '', '', 1, '', 1, 1465978630, 1, NULL, NULL, NULL, NULL),
(110, 304, 'Lexus', '', '', 1, '', 1, 1465978655, 1, NULL, NULL, NULL, NULL),
(111, 304, 'Lincoln', '', '', 1, '', 1, 1465978686, 1, NULL, NULL, NULL, NULL),
(112, 304, 'Mazda', '', '', 1, '', 1, 1465978715, 1, NULL, NULL, NULL, NULL),
(113, 304, 'Mercedes', '', '', 1, '', 1, 1465978732, 1, NULL, NULL, NULL, NULL),
(114, 304, 'Mitsubishi', '', '', 1, '', 1, 1465978754, 1, NULL, NULL, NULL, NULL),
(115, 304, 'Nissan', '', '', 1, '', 1, 1465978777, 1, NULL, NULL, NULL, NULL),
(116, 304, 'Opel', '', '', 1, '', 1, 1465978826, 1, NULL, NULL, NULL, NULL),
(117, 304, 'Peugeot', '', '', 1, '', 1, 1465978848, 1, NULL, NULL, NULL, NULL),
(118, 304, 'Porsche', '', '', 1, '', 1, 1465978872, 1, NULL, NULL, NULL, NULL),
(119, 304, 'Renault', '', '', 1, '', 1, 1465978902, 1, NULL, NULL, NULL, NULL),
(120, 304, 'Saab', '', '', 1, '', 1, 1465978926, 1, NULL, NULL, NULL, NULL),
(121, 304, 'Seat', '', '', 1, '', 1, 1465978941, 1, NULL, NULL, NULL, NULL),
(122, 304, 'Skoda', '', '', 1, '', 1, 1465978962, 1, NULL, NULL, NULL, NULL),
(123, 304, 'Smart', '', '', 1, '', 1, 1465978987, 1, NULL, NULL, NULL, NULL),
(124, 304, 'Subaru', '', '', 1, '', 1, 1465979013, 1, NULL, NULL, NULL, NULL),
(125, 304, 'Suzuki', '', '', 1, '', 1, 1465979025, 1, NULL, NULL, NULL, NULL),
(126, 304, 'Toyota', '', '', 1, '', 1, 1465979110, 1, NULL, NULL, NULL, NULL),
(127, 304, 'Volkswagen', '', '', 1, '', 1, 1465979142, 1, NULL, NULL, NULL, NULL),
(128, 304, 'Volvo', '', '', 1, '', 1, 1465979154, 1, NULL, NULL, NULL, NULL),
(129, 304, 'ВАЗ', '', '', 1, '', 1, 1465979182, 1, NULL, NULL, NULL, NULL),
(130, 304, 'ГАЗ', '', '', 1, '', 1, 1465979198, 1, NULL, NULL, NULL, NULL),
(131, 304, 'ЗАЗ', '', '', 1, '', 1, 1465979211, 1, NULL, NULL, NULL, NULL),
(132, 304, 'ИЖ', '', '', 1, '', 1, 1465979230, 1, NULL, NULL, NULL, NULL),
(133, 304, 'Москвич', '', '', 1, '', 1, 1465979248, 1, NULL, NULL, NULL, NULL),
(134, 304, 'Таврия', '', '', 1, '', 1, 1465979272, 1, NULL, NULL, NULL, NULL),
(135, 304, 'УАЗ', '', '', 1, '', 1, 1465979288, 1, NULL, NULL, NULL, NULL),
(136, 304, 'Другая марка', '', '', 1, '', 1, 1465979322, 1, NULL, NULL, NULL, NULL),
(137, 265, 'Aprilia', '', '', 1, '', 1, 1465982615, 1, NULL, NULL, NULL, NULL),
(138, 265, 'Blata', '', '', 1, '', 1, 1465982646, 1, NULL, NULL, NULL, NULL),
(139, 265, 'BMW', '', '', 1, '', 1, 1465982673, 1, NULL, NULL, NULL, NULL),
(140, 265, 'Buell', '', '', 1, '', 1, 1465982712, 1, NULL, NULL, NULL, NULL),
(141, 265, 'Cagiva', '', '', 1, '', 1, 1465982748, 1, NULL, NULL, NULL, NULL),
(142, 265, 'CPI', '', '', 1, '', 1, 1465982774, 1, NULL, NULL, NULL, NULL),
(143, 265, 'CZ', '', '', 1, '', 1, 1465982787, 1, NULL, NULL, NULL, NULL),
(144, 265, 'Ducati', '', '', 1, '', 1, 1465982811, 1, NULL, NULL, NULL, NULL),
(145, 265, 'Harley-Davidson', '', '', 1, '', 1, 1465982849, 1, NULL, NULL, NULL, NULL),
(146, 265, 'Honda', '', '', 1, '', 1, 1465982883, 1, NULL, NULL, NULL, NULL),
(147, 265, 'Husqvama', '', '', 1, '', 1, 1465982910, 1, NULL, NULL, NULL, NULL),
(148, 265, 'Hyosung', '', '', 1, '', 1, 1465982943, 1, NULL, NULL, NULL, NULL),
(149, 265, 'Jawa', '', '', 1, '', 1, 1465982970, 1, NULL, NULL, NULL, NULL),
(150, 265, 'Kawasaki', '', '', 1, '', 1, 1465983004, 1, NULL, NULL, NULL, NULL),
(151, 265, 'KTM', '', '', 1, '', 1, 1465983021, 1, NULL, NULL, NULL, NULL),
(152, 265, 'Kymco', '', '', 1, '', 1, 1465983051, 1, NULL, NULL, NULL, NULL),
(153, 265, 'Moto Guzzi', '', '', 1, '', 1, 1465983079, 1, NULL, NULL, NULL, NULL),
(154, 265, 'MV Agusta', '', '', 1, '', 1, 1465983124, 1, NULL, NULL, NULL, NULL),
(155, 265, 'Pannonia', '', '', 1, '', 1, 1465983167, 1, NULL, NULL, NULL, NULL),
(156, 265, 'Regal-Raptor', '', '', 1, '', 1, 1465983193, 1, NULL, NULL, NULL, NULL),
(157, 265, 'Suzuki', '', '', 1, '', 1, 1465983227, 1, NULL, NULL, NULL, NULL),
(158, 265, 'Triumph', '', '', 1, '', 1, 1465983276, 1, NULL, NULL, NULL, NULL),
(159, 265, 'Yamaha', '', '', 1, '', 1, 1465983334, 1, NULL, NULL, NULL, NULL),
(160, 265, 'Днепр', '', '', 1, '', 1, 1465983366, 1, NULL, NULL, NULL, NULL),
(161, 265, 'ЗИД', '', '', 1, '', 1, 1465983402, 1, NULL, NULL, NULL, NULL),
(162, 265, 'Иж', '', '', 1, '', 1, 1465983419, 1, NULL, NULL, NULL, NULL),
(163, 265, 'Минск', '', '', 1, '', 1, 1465983440, 1, NULL, NULL, NULL, NULL),
(164, 265, 'Тула', '', '', 1, '', 1, 1465983468, 1, NULL, NULL, NULL, NULL),
(165, 265, 'Урал', '', '', 1, '', 1, 1465983493, 1, NULL, NULL, NULL, NULL),
(166, 265, 'Другая марка', '', '', 1, '', 1, 1465983514, 1, NULL, NULL, NULL, NULL),
(167, 180, 'Acer', '', '', 1, '', 1, 1466057916, 1, NULL, NULL, NULL, NULL),
(168, 180, 'Alcatel-Lucent', '', '', 1, '', 1, 1466057971, 1, NULL, NULL, NULL, NULL),
(169, 180, 'Apple', '', '', 1, '', 1, 1466058020, 1, NULL, NULL, NULL, NULL),
(170, 180, 'Asus', '', '', 1, '', 1, 1466058088, 1, NULL, NULL, NULL, NULL),
(171, 180, 'BenQ-Siemens', '', '', 1, '', 1, 1466058121, 1, NULL, NULL, NULL, NULL),
(172, 180, 'BlackBerry', '', '', 1, '', 1, 1466058149, 1, NULL, NULL, NULL, NULL),
(173, 180, 'Fly', '', '', 1, '', 1, 1466058203, 1, NULL, NULL, NULL, NULL),
(174, 180, 'Fujitsu Siemens', '', '', 1, '', 1, 1466058238, 1, NULL, NULL, NULL, NULL),
(175, 180, 'GIGABYTE', '', '', 1, '', 1, 1466058272, 1, NULL, NULL, NULL, NULL),
(176, 180, 'Google', '', '', 1, '', 1, 1466058323, 1, NULL, NULL, NULL, NULL),
(177, 180, 'Highscreen', '', '', 1, '', 1, 1466058373, 1, NULL, NULL, NULL, NULL),
(178, 180, 'Hisense', '', '', 1, '', 1, 1466058486, 1, NULL, NULL, NULL, NULL),
(179, 180, 'HP', '', '', 1, '', 1, 1466058517, 1, NULL, NULL, NULL, NULL),
(180, 180, 'HTC', '', '', 1, '', 1, 1466058533, 1, NULL, NULL, NULL, NULL),
(181, 180, 'Huawei', '', '', 1, '', 1, 1466058567, 1, NULL, NULL, NULL, NULL),
(182, 180, 'Lenovo', '', '', 1, '', 1, 1466058589, 1, NULL, NULL, NULL, NULL),
(183, 180, 'LG', '', '', 1, '', 1, 1466058601, 1, NULL, NULL, NULL, NULL),
(184, 180, 'Meizu', '', '', 1, '', 1, 1466058684, 1, NULL, NULL, NULL, NULL),
(185, 180, 'Motorola', '', '', 1, '', 1, 1466058710, 1, NULL, NULL, NULL, NULL),
(186, 180, 'NEC', '', '', 1, '', 1, 1466058777, 1, NULL, NULL, NULL, NULL),
(187, 180, 'Nokia', '', '', 1, '', 1, 1466058808, 1, NULL, NULL, NULL, NULL),
(188, 180, 'Palm', '', '', 1, '', 1, 1466058853, 1, NULL, NULL, NULL, NULL),
(189, 180, 'Panasonic', '', '', 1, '', 1, 1466058901, 1, NULL, NULL, NULL, NULL),
(190, 180, 'Pantech', '', '', 1, '', 1, 1466058929, 1, NULL, NULL, NULL, NULL),
(191, 180, 'Philips', '', '', 1, '', 1, 1466063667, 1, NULL, NULL, NULL, NULL),
(192, 180, 'RIM', '', '', 1, '', 1, 1466063700, 1, NULL, NULL, NULL, NULL),
(193, 180, 'Rover', '', '', 1, '', 1, 1466063717, 1, NULL, NULL, NULL, NULL),
(194, 180, 'Sagem', '', '', 1, '', 1, 1466063748, 1, NULL, NULL, NULL, NULL),
(195, 180, 'Samsung', '', '', 1, '', 1, 1466063769, 1, NULL, NULL, NULL, NULL),
(196, 180, 'Sky', '', '', 1, '', 1, 1466063796, 1, NULL, NULL, NULL, NULL),
(197, 180, 'Siemens', '', '', 1, '', 1, 1466063828, 1, NULL, NULL, NULL, NULL),
(198, 180, 'Sony Ericsson', '', '', 1, '', 1, 1466063851, 1, NULL, NULL, NULL, NULL),
(199, 180, 'Toshiba', '', '', 1, '', 1, 1466063879, 1, NULL, NULL, NULL, NULL),
(200, 180, 'Vertu', '', '', 1, '', 1, 1466063916, 1, NULL, NULL, NULL, NULL),
(201, 180, 'Sony', '', '', 1, '', 1, 1466063948, 1, NULL, NULL, NULL, NULL),
(202, 180, 'Xiaomi', '', '', 1, '', 1, 1466063997, 1, NULL, NULL, NULL, NULL),
(203, 180, 'ZTE', '', '', 1, '', 1, 1466064074, 1, NULL, NULL, NULL, NULL),
(204, 180, 'Другая марка', '', '', 1, '', 1, 1466064198, 1, NULL, NULL, NULL, NULL),
(205, 266, 'ABM', '', '', 1, '', 1, 1466072378, 1, NULL, NULL, NULL, NULL),
(206, 266, 'Aprilia', '', '', 1, '', 1, 1466072403, 1, NULL, NULL, NULL, NULL),
(207, 266, 'ASA', '', '', 1, '', 1, 1466072829, 1, NULL, NULL, NULL, NULL),
(208, 266, 'Atlant', '', '', 1, '', 1, 1466072850, 1, NULL, NULL, NULL, NULL),
(209, 266, 'Baotian Scooters', '', '', 1, '', 1, 1466072867, 1, NULL, NULL, NULL, NULL),
(210, 266, 'Benelli', '', '', 1, '', 1, 1466072887, 1, NULL, NULL, NULL, NULL),
(211, 266, 'BM', '', '', 1, '', 1, 1466072906, 1, NULL, NULL, NULL, NULL),
(212, 266, 'Corsa', '', '', 1, '', 1, 1466072926, 1, NULL, NULL, NULL, NULL),
(213, 266, 'CPI', '', '', 1, '', 1, 1466072943, 1, NULL, NULL, NULL, NULL),
(214, 266, 'Daelim', '', '', 1, '', 1, 1466072965, 1, NULL, NULL, NULL, NULL),
(215, 266, 'Derbi', '', '', 1, '', 1, 1466073013, 1, NULL, NULL, NULL, NULL),
(216, 266, 'Forsage', '', '', 1, '', 1, 1466073035, 1, NULL, NULL, NULL, NULL),
(217, 266, 'Geely', '', '', 1, '', 1, 1466073062, 1, NULL, NULL, NULL, NULL),
(218, 266, 'Honda', '', '', 1, '', 1, 1466073085, 1, NULL, NULL, NULL, NULL),
(219, 266, 'Honling', '', '', 1, '', 1, 1466073105, 1, NULL, NULL, NULL, NULL),
(220, 266, 'IRBIS', '', '', 1, '', 1, 1466073123, 1, NULL, NULL, NULL, NULL),
(221, 266, 'Italjet', '', '', 1, '', 1, 1466073143, 1, NULL, NULL, NULL, NULL),
(222, 266, 'Jialing', '', '', 1, '', 1, 1466073170, 1, NULL, NULL, NULL, NULL),
(223, 266, 'Keeway', '', '', 1, '', 1, 1466073187, 1, NULL, NULL, NULL, NULL),
(224, 266, 'Kinlon', '', '', 1, '', 1, 1466073209, 1, NULL, NULL, NULL, NULL),
(225, 266, 'Kymco', '', '', 1, '', 1, 1466073230, 1, NULL, NULL, NULL, NULL),
(226, 266, 'Lifan', '', '', 1, '', 1, 1466073248, 1, NULL, NULL, NULL, NULL),
(227, 266, 'Malaguti', '', '', 1, '', 1, 1466073266, 1, NULL, NULL, NULL, NULL),
(228, 266, 'Nexus', '', '', 1, '', 1, 1466073289, 1, NULL, NULL, NULL, NULL),
(229, 266, 'Peugeot', '', '', 1, '', 1, 1466073309, 1, NULL, NULL, NULL, NULL),
(230, 266, 'Piaggio', '', '', 1, '', 1, 1466073332, 1, NULL, NULL, NULL, NULL),
(231, 266, 'Sagitta', '', '', 1, '', 1, 1466073349, 1, NULL, NULL, NULL, NULL),
(232, 266, 'Stels', '', '', 1, '', 1, 1466073367, 1, NULL, NULL, NULL, NULL),
(233, 266, 'Suzuki', '', '', 1, '', 1, 1466073384, 1, NULL, NULL, NULL, NULL),
(234, 266, 'Tornado', '', '', 1, '', 1, 1466073411, 1, NULL, NULL, NULL, NULL),
(235, 266, 'Vento', '', '', 1, '', 1, 1466073434, 1, NULL, NULL, NULL, NULL),
(236, 266, 'Vespa', '', '', 1, '', 1, 1466073449, 1, NULL, NULL, NULL, NULL),
(237, 266, 'Yamaha', '', '', 1, '', 1, 1466073465, 1, NULL, NULL, NULL, NULL),
(238, 266, 'Вятка', '', '', 1, '', 1, 1466073482, 1, NULL, NULL, NULL, NULL),
(239, 266, 'ЗиД', '', '', 1, '', 1, 1466073498, 1, NULL, NULL, NULL, NULL),
(240, 266, 'Карпаты', '', '', 1, '', 1, 1466073511, 1, NULL, NULL, NULL, NULL),
(241, 266, 'Рига', '', '', 1, '', 1, 1466073528, 1, NULL, NULL, NULL, NULL),
(242, 266, 'Другая марка', '', '', 1, '', 1, 1466073545, 1, NULL, NULL, NULL, NULL),
(243, 267, 'ABM', '', '', 1, '', 1, 1466073862, 1, NULL, NULL, NULL, NULL),
(244, 267, 'Arctic Cat', '', '', 1, '', 1, 1466073878, 1, NULL, NULL, NULL, NULL),
(245, 267, 'Armada', '', '', 1, '', 1, 1466073893, 1, NULL, NULL, NULL, NULL),
(246, 267, 'BASHAN', '', '', 1, '', 1, 1466073909, 1, NULL, NULL, NULL, NULL),
(247, 267, 'BM', '', '', 1, '', 1, 1466073927, 1, NULL, NULL, NULL, NULL),
(248, 267, 'BRP', '', '', 1, '', 1, 1466073942, 1, NULL, NULL, NULL, NULL),
(249, 267, 'Dinli', '', '', 1, '', 1, 1466073958, 1, NULL, NULL, NULL, NULL),
(250, 267, 'Forsage', '', '', 1, '', 1, 1466073978, 1, NULL, NULL, NULL, NULL),
(251, 267, 'Godzilla', '', '', 1, '', 1, 1466073994, 1, NULL, NULL, NULL, NULL),
(252, 267, 'Honda', '', '', 1, '', 1, 1466074009, 1, NULL, NULL, NULL, NULL),
(253, 267, 'HSUN', '', '', 1, '', 1, 1466074026, 1, NULL, NULL, NULL, NULL),
(254, 267, 'IRBIS', '', '', 1, '', 1, 1466074042, 1, NULL, NULL, NULL, NULL),
(255, 267, 'Jianshe-Yamaha', '', '', 1, '', 1, 1466074057, 1, NULL, NULL, NULL, NULL),
(256, 267, 'Kawasaki', '', '', 1, '', 1, 1466074073, 1, NULL, NULL, NULL, NULL),
(257, 267, 'Kazuma', '', '', 1, '', 1, 1466074089, 1, NULL, NULL, NULL, NULL),
(258, 267, 'Kymco', '', '', 1, '', 1, 1466074139, 1, NULL, NULL, NULL, NULL),
(259, 267, 'Lokker', '', '', 1, '', 1, 1466074155, 1, NULL, NULL, NULL, NULL),
(260, 267, 'Nissamaran', '', '', 1, '', 1, 1466074173, 1, NULL, NULL, NULL, NULL),
(261, 267, 'Polaris', '', '', 1, '', 1, 1466074188, 1, NULL, NULL, NULL, NULL),
(262, 267, 'Reggy', '', '', 1, '', 1, 1466074204, 1, NULL, NULL, NULL, NULL),
(263, 267, 'Stels', '', '', 1, '', 1, 1466074229, 1, NULL, NULL, NULL, NULL),
(264, 267, 'Suzuki', '', '', 1, '', 1, 1466074245, 1, NULL, NULL, NULL, NULL),
(265, 267, 'Tramp', '', '', 1, '', 1, 1466074257, 1, NULL, NULL, NULL, NULL),
(266, 267, 'Yamaha', '', '', 1, '', 1, 1466074272, 1, NULL, NULL, NULL, NULL),
(267, 267, 'ЗиД', '', '', 1, '', 1, 1466074289, 1, NULL, NULL, NULL, NULL),
(268, 267, 'Русская Механика', '', '', 1, '', 1, 1466074307, 1, NULL, NULL, NULL, NULL),
(269, 267, 'ТМЗ', '', '', 1, '', 1, 1466074321, 1, NULL, NULL, NULL, NULL),
(270, 267, 'Другая марка', '', '', 1, '', 1, 1466074338, 1, NULL, NULL, NULL, NULL),
(271, 157, 'Выбрать', '', '', 1, '', 1, 1466143659, 1, NULL, NULL, NULL, NULL),
(272, 157, 'Acer', '', '', 1, '', 1, 1466143683, 1, NULL, NULL, NULL, NULL),
(273, 157, 'Apple', '', '', 1, '', 1, 1466143948, 1, NULL, NULL, NULL, NULL),
(274, 157, 'Asus', '', '', 1, '', 1, 1466143969, 1, NULL, NULL, NULL, NULL),
(275, 157, 'BenQ', '', '', 1, '', 1, 1466143986, 1, NULL, NULL, NULL, NULL),
(276, 157, 'Bliss', '', '', 1, '', 1, 1466144003, 1, NULL, NULL, NULL, NULL),
(277, 157, 'Compaq', '', '', 1, '', 1, 1466144023, 1, NULL, NULL, NULL, NULL),
(278, 157, 'Dell', '', '', 1, '', 1, 1466144038, 1, NULL, NULL, NULL, NULL),
(279, 157, 'DESTEN', '', '', 1, '', 1, 1466144059, 1, NULL, NULL, NULL, NULL),
(280, 157, 'eMachines', '', '', 1, '', 1, 1466144074, 1, NULL, NULL, NULL, NULL),
(281, 157, 'Fujitsu-Siemens', '', '', 1, '', 1, 1466144282, 1, NULL, NULL, NULL, NULL),
(282, 157, 'GigaByte', '', '', 1, '', 1, 1466144303, 1, NULL, NULL, NULL, NULL),
(283, 157, 'HP', '', '', 1, '', 1, 1466144321, 1, NULL, NULL, NULL, NULL),
(284, 157, 'IBM/ThinkPad', '', '', 1, '', 1, 1466144338, 1, NULL, NULL, NULL, NULL),
(285, 157, 'iRU', '', '', 1, '', 1, 1466144353, 1, NULL, NULL, NULL, NULL),
(286, 157, 'Lenovo', '', '', 1, '', 1, 1466144373, 1, NULL, NULL, NULL, NULL),
(287, 157, 'LG', '', '', 1, '', 1, 1466144391, 1, NULL, NULL, NULL, NULL),
(288, 157, 'MSI', '', '', 1, '', 1, 1466144408, 1, NULL, NULL, NULL, NULL),
(289, 157, 'NEC', '', '', 1, '', 1, 1466144422, 1, NULL, NULL, NULL, NULL),
(290, 157, 'Packard Bell', '', '', 1, '', 1, 1466144435, 1, NULL, NULL, NULL, NULL),
(291, 157, 'Panasonic', '', '', 1, '', 1, 1466144448, 1, NULL, NULL, NULL, NULL),
(292, 157, 'RoverBook', '', '', 1, '', 1, 1466144464, 1, NULL, NULL, NULL, NULL),
(293, 157, 'Samsung', '', '', 1, '', 1, 1466144479, 1, NULL, NULL, NULL, NULL),
(294, 157, 'Sony', '', '', 1, '', 1, 1466144494, 1, NULL, NULL, NULL, NULL),
(295, 157, 'Toshiba', '', '', 1, '', 1, 1466144508, 1, NULL, NULL, NULL, NULL),
(296, 157, 'Другая марка', '', '', 1, '', 1, 1466144535, 1, NULL, NULL, NULL, NULL),
(297, 195, 'Выбрать', '', '', 1, '', 1, 1466147227, 1, NULL, NULL, NULL, NULL),
(298, 195, 'Acer', '', '', 1, '', 1, 1466147258, 1, NULL, NULL, NULL, NULL),
(299, 195, 'Akai', '', '', 1, '', 1, 1466147282, 1, NULL, NULL, NULL, NULL),
(300, 195, 'Akira', '', '', 1, '', 1, 1466147298, 1, NULL, NULL, NULL, NULL),
(301, 195, 'Aquavision', '', '', 1, '', 1, 1466147316, 1, NULL, NULL, NULL, NULL),
(302, 195, 'BEKO', '', '', 1, '', 1, 1466147340, 1, NULL, NULL, NULL, NULL),
(303, 195, 'BenQ', '', '', 1, '', 1, 1466147360, 1, NULL, NULL, NULL, NULL),
(304, 195, 'Daewoo', '', '', 1, '', 1, 1466147384, 1, NULL, NULL, NULL, NULL),
(305, 195, 'Digital', '', '', 1, '', 1, 1466147403, 1, NULL, NULL, NULL, NULL),
(306, 195, 'Elenberg', '', '', 1, '', 1, 1466147422, 1, NULL, NULL, NULL, NULL),
(307, 195, 'Erisson', '', '', 1, '', 1, 1466147437, 1, NULL, NULL, NULL, NULL),
(308, 195, 'Fujitsu', '', '', 1, '', 1, 1466147455, 1, NULL, NULL, NULL, NULL),
(309, 195, 'Hitachi', '', '', 1, '', 1, 1466147474, 1, NULL, NULL, NULL, NULL),
(310, 195, 'Hyundai', '', '', 1, '', 1, 1466147496, 1, NULL, NULL, NULL, NULL),
(311, 195, 'JVC', '', '', 1, '', 1, 1466147515, 1, NULL, NULL, NULL, NULL),
(312, 195, 'LG', '', '', 1, '', 1, 1466147532, 1, NULL, NULL, NULL, NULL),
(313, 195, 'Mystery', '', '', 1, '', 1, 1466147554, 1, NULL, NULL, NULL, NULL),
(314, 195, 'NEC', '', '', 1, '', 1, 1466147580, 1, NULL, NULL, NULL, NULL),
(315, 195, 'Orion', '', '', 1, '', 1, 1466147598, 1, NULL, NULL, NULL, NULL),
(316, 195, 'Panasonic', '', '', 1, '', 1, 1466147616, 1, NULL, NULL, NULL, NULL),
(317, 195, 'Philips', '', '', 1, '', 1, 1466147640, 1, NULL, NULL, NULL, NULL),
(318, 195, 'Pioneer', '', '', 1, '', 1, 1466147670, 1, NULL, NULL, NULL, NULL),
(319, 195, 'Rolsen', '', '', 1, '', 1, 1466147707, 1, NULL, NULL, NULL, NULL),
(320, 195, 'Roison', '', '', 1, '', 1, 1466147740, 1, NULL, NULL, NULL, NULL),
(321, 195, 'SAGA', '', '', 1, '', 1, 1466147763, 1, NULL, NULL, NULL, NULL),
(322, 195, 'Samsung', '', '', 1, '', 1, 1466147798, 1, NULL, NULL, NULL, NULL),
(323, 195, 'Saturn', '', '', 1, '', 1, 1466147816, 1, NULL, NULL, NULL, NULL),
(324, 195, 'Sharp', '', '', 1, '', 1, 1466147833, 1, NULL, NULL, NULL, NULL),
(325, 195, 'Shivaki', '', '', 1, '', 1, 1466147854, 1, NULL, NULL, NULL, NULL),
(326, 195, 'Sony', '', '', 1, '', 1, 1466147871, 1, NULL, NULL, NULL, NULL),
(327, 195, 'Supra', '', '', 1, '', 1, 1466147894, 1, NULL, NULL, NULL, NULL),
(328, 195, 'TCL', '', '', 1, '', 1, 1466147911, 1, NULL, NULL, NULL, NULL),
(329, 195, 'Thomson', '', '', 1, '', 1, 1466147926, 1, NULL, NULL, NULL, NULL),
(330, 195, 'Toshiba', '', '', 1, '', 1, 1466147941, 1, NULL, NULL, NULL, NULL),
(331, 195, 'Vestel', '', '', 1, '', 1, 1466147959, 1, NULL, NULL, NULL, NULL),
(332, 195, 'Горизонт', '', '', 1, '', 1, 1466147983, 1, NULL, NULL, NULL, NULL),
(333, 195, 'Рубин', '', '', 1, '', 1, 1466148002, 1, NULL, NULL, NULL, NULL),
(334, 195, 'Электрон', '', '', 1, '', 1, 1466148017, 1, NULL, NULL, NULL, NULL),
(335, 195, 'Другая марка', '', '', 1, '', 1, 1466148031, 1, NULL, NULL, NULL, NULL),
(337, 305, 'Alfa Romeo', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(338, 305, 'Audi', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(339, 305, 'Bentley', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(340, 305, 'BMW', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(341, 305, 'Cadillac', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(342, 305, 'Chery', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(343, 305, 'Chevrolet', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(344, 305, 'Chrysler', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(345, 305, 'Citroen', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(346, 305, 'Dacia', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(347, 305, 'Daewoo', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(348, 305, 'Dodge', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(349, 305, 'Fiat', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(350, 305, 'Ford', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(351, 305, 'GMC', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(352, 305, 'Honda', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(353, 305, 'Hummer', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(354, 305, 'Hyundai', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(355, 305, 'Infiniti', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(356, 305, 'Isuzu', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(357, 305, 'Jaguar', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(358, 305, 'Jeep', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(359, 305, 'Kia', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(360, 305, 'Land Rover', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(361, 305, 'Lexus', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(362, 305, 'Lincoln', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(363, 305, 'Mazda', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(364, 305, 'Mercedes', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(365, 305, 'Mitsubishi', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(366, 305, 'Nissan', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(367, 305, 'Opel', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(368, 305, 'Peugeot', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(369, 305, 'Porsche', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(370, 305, 'Renault', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(371, 305, 'Saab', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(372, 305, 'Seat', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(373, 305, 'Skoda', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(374, 305, 'Smart', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(375, 305, 'Subaru', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(376, 305, 'Suzuki', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(377, 305, 'Toyota', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(378, 305, 'Volkswagen', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(379, 305, 'Volvo', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(380, 305, 'ВАЗ', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(381, 305, 'ГАЗ', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(382, 305, 'ЗАЗ', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(383, 305, 'ИЖ', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(384, 305, 'Москвич', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(385, 305, 'Таврия', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(386, 305, 'УАЗ', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(387, 305, 'Другая марка', '', '', 1, '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(476, 1488, 'ПАЗ\r\n', '', '', 1, 'ПАЗ', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(477, 1488, 'РАФ', '', '', 1, 'РАФ', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(478, 1488, 'Bova', '', '', 1, 'Bova', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(479, 1488, 'Daewoo', '', '', 1, 'Daewoo', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(480, 1488, 'Ford', '', '', 1, 'Ford', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(481, 1488, 'Golden Dragon', '', '', 1, 'Golden Dragon', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(482, 1488, 'Higer', '', '', 1, 'Higer', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(483, 1488, 'Hyundai', '', '', 1, 'Hyundai', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(484, 1488, 'Ikarus', '', '', 1, 'Ikarus', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(485, 1488, 'IVECO', '', '', 1, 'IVECO', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(486, 1488, 'Kia', '', '', 1, 'Kia', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(487, 1488, 'King Long', '', '', 1, 'King Long', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(488, 1488, 'MAN', '', '', 1, 'MAN', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(489, 1488, 'Mercedes-Benz', '', '', 1, 'Mercedes-Benz', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(490, 1488, 'Neoplan', '', '', 1, 'Neoplan', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(491, 1488, 'Nissan', '', '', 1, 'Nissan', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(492, 1488, 'Scania', '', '', 1, 'Scania', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(493, 1488, 'Setra', '', '', 1, 'Setra', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(494, 1488, 'Shen Long', '', '', 1, 'Shen Long', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(495, 1488, 'SsangYong', '', '', 1, 'SsangYong', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(496, 1488, 'TAM', '', '', 1, 'TAM', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(497, 1488, 'Volvo', '', '', 1, 'Volvo', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(498, 1488, 'Yutong', '', '', 1, 'Yutong', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(499, 1488, 'Богдан', '', '', 1, 'Богдан', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(500, 1488, 'Волжанин', '', '', 1, 'Волжанин', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(501, 1488, 'ЗИЛ', '', '', 1, 'ЗИЛ', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(502, 1488, 'КАвЗ', '', '', 1, 'КАвЗ', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(503, 1488, 'КамАЗ', '', '', 1, 'КамАЗ', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(504, 1488, 'ЛАЗ', '', '', 1, 'ЛАЗ', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(505, 1488, 'ЛиАЗ', '', '', 1, 'ЛиАЗ', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(506, 1488, 'МАЗ', '', '', 1, 'МАЗ', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(507, 1488, 'МАРЗ', '', '', 1, 'МАРЗ', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(508, 1488, 'НефАЗ', '', '', 1, 'НефАЗ', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(509, 1488, 'Другая марка', '', '', 1, 'Другая марка', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(640, 356, 'Выбрать', '', '', 1, 'vibrat', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(641, 356, 'МТЗ', '', '', 1, 'МТЗ', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(642, 356, 'БЕЛАРУС', '', '', 1, 'БЕЛАРУС', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(643, 356, 'ТТЗ', '', '', 1, 'ТТЗ', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(644, 356, 'New Holland', '', '', 1, 'New Holland', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(645, 356, 'Kubota', '', '', 1, 'Kubota', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(646, 356, 'Mccormick', '', '', 1, 'Mccormick', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(647, 356, 'Claas', '', '', 1, 'Claas', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(648, 356, 'Mahindra', '', '', 1, 'Mahindra', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(649, 356, 'Escorts', '', '', 1, 'Escorts', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(650, 356, 'Kioti', '', '', 1, 'Kioti', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(651, 356, 'Беларусь', '', '', 1, 'Беларусь', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(652, 356, 'Allis Chalmers', '', '', 1, 'Allis Chalmers', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(653, 356, 'Sonalika', '', '', 1, 'Sonalika', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(654, 356, 'Indo', '', '', 1, 'Indo', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(655, 356, 'Eicher', '', '', 1, 'Eicher', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(656, 356, 'TAFE', '', '', 1, 'TAFE', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(657, 356, 'Yanmar', '', '', 1, 'Yanmar', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(658, 356, 'Agco', '', '', 1, 'Agco', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(659, 356, 'Case IH', '', '', 1, 'Case IH', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(660, 356, 'Massey Ferguson', '', '', 1, 'Massey Ferguson', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(661, 356, 'Jinma', '', '', 1, 'Jinma', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(662, 356, 'Renault', '', '', 1, 'Renault', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(663, 356, 'Farmall', '', '', 1, 'Farmall', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(664, 356, 'Deutz-Fahr', '', '', 1, 'Deutz-Fahr', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(665, 356, 'Apollo', '', '', 1, 'Apollo', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(666, 356, 'Avery', '', '', 1, 'Avery', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(667, 356, 'Big Bud', '', '', 1, 'Big Bud', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(668, 356, 'Bolens', '', '', 1, 'Bolens', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(669, 356, 'Fendt', '', '', 1, 'Fendt', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(670, 356, 'Lamborghini', '', '', 1, 'Lamborghini', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(671, 356, 'Oliver', '', '', 1, 'Oliver', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(672, 356, 'Mitsubishi', '', '', 1, 'Mitsubishi', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(673, 356, 'TYM', '', '', 1, 'TYM', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(674, 356, 'Branson', '', '', 1, 'Branson', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(675, 356, 'Foton', '', '', 1, 'Foton', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(676, 356, 'Fiat', '', '', 1, 'Fiat', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(677, 356, 'Iseki', '', '', 1, 'Iseki', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(678, 356, 'Chimgan', '', '', 1, 'Chimgan', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(679, 356, 'John Deere', '', '', 1, 'John Deere', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(680, 356, 'Другая марка', '', '', 1, 'Другая марка', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(681, 1489, 'Выбрать', '', '', 1, '', 1, 1465977973, 1, NULL, NULL, NULL, NULL),
(682, 1489, 'Другая марка', '', '', 1, 'Другая марка', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(683, 188, 'Выбрать', '', '', 1, '', 1, 1465977973, 1, NULL, NULL, NULL, NULL),
(684, 188, 'AOC', '', '', 1, '', 1, 1465977973, 1, NULL, NULL, NULL, NULL),
(685, 188, 'ASUS', '', '', 1, '', 1, 1465977973, 1, NULL, NULL, NULL, NULL),
(686, 188, 'Acer', '', '', 1, '', 1, 1465977973, 1, NULL, NULL, NULL, NULL),
(687, 188, 'Apple', '', '', 1, '', 1, 1465977973, 1, NULL, NULL, NULL, NULL),
(688, 188, 'BenQ', '', '', 1, '', 1, 1465977973, 1, NULL, NULL, NULL, NULL),
(689, 188, 'DELL', '', '', 1, '', 1, 1465977973, 1, NULL, NULL, NULL, NULL),
(690, 188, 'Eizo', '', '', 1, '', 1, 1465977973, 1, NULL, NULL, NULL, NULL),
(691, 188, 'Fujitsu-Siemens', '', '', 1, '<p>CAMC</p>\r\n', 1, 1463984704, 1, NULL, NULL, NULL, NULL),
(692, 188, 'HP', '', '', 1, '', 1, 1465977973, 1, NULL, NULL, NULL, NULL),
(693, 188, 'LG', '', '', 1, '', 1, 1465977973, 1, NULL, NULL, NULL, NULL),
(694, 188, 'Lenovo', '', '', 1, '<p>Avia</p>\r\n', 1, 1463984657, 1, NULL, NULL, NULL, NULL),
(695, 188, 'NEC', '', '', 1, '<p>Avia</p>\r\n', 1, 1463984657, 1, NULL, NULL, NULL, NULL),
(696, 188, 'Philips', '', '', 1, '<p>Avia</p>\r\n', 1, 1463984657, 1, NULL, NULL, NULL, NULL),
(697, 188, 'Samsung', '', '', 1, '<p>CAMC</p>\r\n', 1, 1463984704, 1, NULL, NULL, NULL, NULL),
(698, 188, 'Sony', '', '', 1, '', 1, 1465977973, 1, NULL, NULL, NULL, NULL),
(699, 188, 'Toshiba', '', '', 1, '<p>Daewoo</p>\r\n', 1, 1463984735, 1, NULL, NULL, NULL, NULL),
(700, 188, 'Viewsonic', '', '', 1, '', 1, 1465977973, 1, NULL, NULL, NULL, NULL),
(701, 188, 'Другая марка', '', '', 1, '', 1, 1465977973, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `at_cart`
--

CREATE TABLE IF NOT EXISTS `at_cart` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_good` int(11) NOT NULL,
  `id_shop` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `size` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `at_cart`
--

INSERT INTO `at_cart` (`id`, `id_user`, `id_good`, `id_shop`, `date`, `count`, `size`, `color`) VALUES
(19, 17, 27, 11, 1477115761, 1, 'XXXL', 'Белый'),
(25, 1, 6, 3, 1477121467, 1, 'XL', 'Белый'),
(27, 1, 16, 3, 1477121558, 1, 'XL', 'Черный'),
(29, 1, 25, 9, 1477462028, 2, 'XXXL', 'Белый'),
(30, 16, 28, 12, 1477724286, 1, 'XL', 'Белый');

-- --------------------------------------------------------

--
-- Структура таблицы `at_category`
--

CREATE TABLE IF NOT EXISTS `at_category` (
  `id` int(11) NOT NULL,
  `id_parent` int(11) NOT NULL,
  `id_menu` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `decription` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(3) NOT NULL,
  `dcreated` int(11) DEFAULT NULL,
  `bycreated` int(11) DEFAULT NULL,
  `dmodified` int(11) DEFAULT NULL,
  `bymodified` int(11) DEFAULT NULL,
  `ddeleted` int(11) DEFAULT NULL,
  `bydeleted` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=1579 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `at_category`
--

INSERT INTO `at_category` (`id`, `id_parent`, `id_menu`, `name`, `decription`, `text`, `image`, `status`, `dcreated`, `bycreated`, `dmodified`, `bymodified`, `ddeleted`, `bydeleted`) VALUES
(1, 0, 1, 'Недвижимость', 'Недвижимость', '<p>Недвижимость</p>\r\n', '', 1, 1463032221, NULL, 1463843155, 1, NULL, NULL),
(2, 1, 1, 'Продажа', 'Продажа', '<p>Продажа</p>\r\n', '', 1, 1463032341, NULL, 1463749558, 1, NULL, NULL),
(3, 1, 1, 'Аренда', 'Аренда', 'Аренда', '', 1, 1463032369, NULL, 1463234819, 1, NULL, NULL),
(4, 1, 1, 'Обмен', 'Обмен', 'Обмен', '', 1, 1463032521, NULL, 1466153920, 1, 1466153920, 1),
(5, 0, 1, 'Транспорт', 'Транспорт', 'Транспорт', '', 1, 1463032631, NULL, 1463234819, 1, NULL, NULL),
(6, 5, 1, 'Легковые автомобили', 'Легковые автомобили', 'Легковые автомобили', '', 1, 1463032792, NULL, 1463234819, 1, NULL, NULL),
(7, 5, 1, 'Грузовые автомобили', 'Грузовые автомобили', 'Грузовые автомобили', '', 1, 1463032837, NULL, 1463234819, 1, NULL, NULL),
(8, 5, 1, 'Автобусы / маршрутки', 'Автобусы / маршрутки', '<p>Автобусы / маршрутки</p>\r\n', '', 1, 1463032869, NULL, 1466488437, 1, NULL, NULL),
(9, 5, 1, 'Мотоциклы и мототехника', 'Мотоциклы и мототехника', 'Мотоциклы и мототехника', '', 1, 1463032916, NULL, 1463234820, 1, NULL, NULL),
(10, 5, 1, 'Сельхозтехника', 'Сельхозтехника', 'Сельхозтехника', '', 1, 1463032960, NULL, 1463234820, 1, NULL, NULL),
(11, 5, 1, 'Спецтехника', 'Спецтехника', 'Спецтехника', '', 1, 1463032992, NULL, 1463234820, 1, NULL, NULL),
(12, 5, 1, 'Водный транспорт', 'Водный транспорт', 'Водный транспорт', '', 1, 1463033024, NULL, 1463234820, 1, NULL, NULL),
(13, 5, 1, 'Велосипеды', 'Велосипеды', 'Велосипеды', '', 1, 1463033115, NULL, 1463234820, 1, NULL, NULL),
(15, 5, 1, 'Прицепы', 'Прицепы', 'Прицепы', '', 1, 1463033188, NULL, 1463234820, 1, NULL, NULL),
(16, 5, 1, 'Другой транспорт', 'Другой транспорт', 'Другой транспорт', '', 1, 1463033235, NULL, 1463234820, 1, NULL, NULL),
(17, 2, 1, 'Продажа домов', 'Продажа домов', 'Продажа домов', '', 1, 1463033319, NULL, 1463234820, 1, NULL, NULL),
(18, 2, 1, 'Продажа квартир', 'Продажа квартир', 'Продажа квартир', '', 1, 1463033362, NULL, 1463234820, 1, NULL, NULL),
(19, 2, 1, 'Продажа офисов', 'Продажа офисов', 'Продажа офисов', '', 1, 1463033438, NULL, 1463234820, 1, NULL, NULL),
(20, 2, 1, 'Продажа помещений', 'Продажа помещений', 'Продажа помещений', '', 1, 1463033467, NULL, 1463234820, 1, NULL, NULL),
(21, 2, 1, 'Продажа дачных участков', 'Продажа дачных участков', 'Продажа дачных участков', '', 1, 1463033537, NULL, 1463234820, 1, NULL, NULL),
(22, 2, 1, 'Продажа земли', 'Продажа земли', 'Продажа земли', '', 1, 1463033587, NULL, 1463234820, 1, NULL, NULL),
(23, 2, 1, 'Продажа магазинов / салонов', 'Продажа магазинов / салонов', 'Продажа магазинов / салонов', '', 1, 1463034542, NULL, 1463234820, 1, NULL, NULL),
(24, 2, 1, 'Продажа гаражей / стоянок', 'Продажа гаражей / стоянок', 'Продажа гаражей / стоянок', '', 1, 1463034566, NULL, 1463234820, 1, NULL, NULL),
(25, 2, 1, 'Прочая недвижимость', 'Прочая недвижимость', 'Прочая недвижимость', '', 1, 1463034597, NULL, 1463234820, 1, NULL, NULL),
(26, 3, 1, 'Аренда домов', 'Аренда домов', 'Аренда домов', '', 1, 1463034740, NULL, 1463234820, 1, NULL, NULL),
(27, 3, 1, 'Аренда квартир', 'Аренда квартир', 'Аренда квартир', '', 1, 1463034759, NULL, 1463234820, 1, NULL, NULL),
(28, 3, 1, 'Аренда офисов', 'Аренда офисов', 'Аренда офисов', '', 1, 1463034816, NULL, 1463234820, 1, NULL, NULL),
(29, 3, 1, 'Аренда помещений', 'Аренда помещений', 'Аренда помещений', '', 1, 1463034946, NULL, 1463234820, 1, NULL, NULL),
(30, 3, 1, 'Аренда дачных участков', 'Аренда дачных участков', 'Аренда дачных участков', '', 1, 1463035033, NULL, 1463234820, 1, NULL, NULL),
(31, 3, 1, 'Аренда земли', 'Аренда земли', 'Аренда земли', '', 1, 1463035089, NULL, 1463726651, 1, 1463726650, 1),
(32, 3, 1, 'Аренда магазинов / салонов', 'Аренда магазинов / салонов', 'Аренда магазинов / салонов', '', 1, 1463035130, NULL, 1463234820, 1, NULL, NULL),
(33, 0, 1, 'Работа', 'Работа', 'Работа', '', 1, 1463035218, NULL, 1463234820, 1, NULL, NULL),
(34, 0, 1, 'Электроника', 'Электроника', 'Электроника', '', 1, 1463035337, NULL, 1463234820, 1, NULL, NULL),
(35, 0, 1, 'Для дома и сада', 'Для дома и сада', 'Для дома и сада', '', 1, 1463035365, NULL, 1463234820, 1, NULL, NULL),
(36, 0, 1, 'Детям и мамам', 'Детям и мамам', 'Детям и мамам', '', 1, 1463035388, NULL, 1463234820, 1, NULL, NULL),
(37, 0, 1, 'Одежда, обувь, аксессуары', 'Одежда, обувь, аксессуары', 'Одежда, обувь, аксессуары', '', 1, 1463035415, NULL, 1463234820, 1, NULL, NULL),
(38, 0, 1, 'Производство и оборудование ', 'Производство и оборудование', 'Производство и оборудование', '', 1, 1463035477, NULL, 1463234820, 1, NULL, NULL),
(39, 0, 1, 'Красота и здоровье', 'Красота и здоровье', 'Красота и здоровье', '', 1, 1463035547, NULL, 1463234820, 1, NULL, NULL),
(40, 0, 1, 'Спорт, хобби, развлечения', 'Спорт, хобби, развлечения', 'Спорт, хобби, развлечения', '', 1, 1463035566, NULL, 1463234820, 1, NULL, NULL),
(41, 0, 1, 'Антиквариат и искусство', 'Антиквариат и искусство', 'Антиквариат и искусство', '', 1, 1463035592, NULL, 1463234820, 1, NULL, NULL),
(42, 0, 1, 'Ремонт и Услуги', 'Ремонт и Услуги', 'Ремонт и Услуги', '', 1, 1463035623, NULL, 1463234820, 1, NULL, NULL),
(43, 0, 1, 'Жывотные и зоотовары', 'Жывотные и зоотовары', 'Жывотные и зоотовары', '', 1, 1463035667, NULL, 1463234820, 1, NULL, NULL),
(44, 34, 1, 'Телефоны', 'Телефоны', 'Телефоны', '', 1, 1463035832, NULL, 1463234820, 1, NULL, NULL),
(45, 34, 1, 'Компьютеры', 'Компьютеры', 'Компьютеры', '', 1, 1463035860, NULL, 1463234820, 1, NULL, NULL),
(46, 34, 1, 'Тв / видеотехника', 'Тв / видеотехника', 'Тв / видеотехника', '', 1, 1463035933, NULL, 1463234820, 1, NULL, NULL),
(47, 34, 1, 'Фото / видео', 'Фото / видео', 'Фото / видео', '', 1, 1463035957, NULL, 1463234820, 1, NULL, NULL),
(48, 34, 1, 'Аудиотехника', 'Аудиотехника', 'Аудиотехника', '', 1, 1463036008, NULL, 1463234820, 1, NULL, NULL),
(49, 34, 1, 'Игры и игровые приставки', 'Игры и игровые приставки', 'Игры и игровые приставки', '', 1, 1463036082, NULL, 1463234820, 1, NULL, NULL),
(50, 34, 1, 'Техника для дома', 'Техника для дома', 'Техника для дома', '', 1, 1463036126, NULL, 1463234820, 1, NULL, NULL),
(51, 34, 1, 'Техника для кухни', 'Техника для кухни', 'Техника для кухни', '', 1, 1463036155, NULL, 1463234820, 1, NULL, NULL),
(52, 34, 1, 'Климатическое оборудование', 'Климатическое оборудование', 'Климатическое оборудование', '', 1, 1463036200, NULL, 1463234820, 1, NULL, NULL),
(53, 34, 1, 'Носители информации', 'Носители информации', 'Носители информации', '', 1, 1463036263, NULL, 1463234820, 1, NULL, NULL),
(54, 39, 1, 'Для красоты и здоровья', 'Для красоты и здоровья', 'Для красоты и здоровья', '', 1, 1463036318, NULL, 1463234820, 1, NULL, NULL),
(56, 34, 1, 'Прочая электроника', 'Прочая электроника', 'Прочая электроника', '', 1, 1463036451, NULL, 1463234820, 1, NULL, NULL),
(57, 35, 1, 'Мебель', 'Мебель', 'Мебель', '', 1, 1463037373, NULL, 1463234820, 1, NULL, NULL),
(58, 35, 1, 'Сад / огород', 'Сад / огород', 'Сад / огород', '', 1, 1463037422, NULL, 1463234820, 1, NULL, NULL),
(59, 35, 1, 'Предметы интерьера', 'Предметы интерьера', 'Предметы интерьера', '', 1, 1463037459, NULL, 1463234820, 1, NULL, NULL),
(60, 35, 1, 'Товары для строительства/ремонта', 'Товары для строительства/ремонта', 'Товары для строительства/ремонта', '', 1, 1463037560, NULL, 1463234820, 1, NULL, NULL),
(61, 35, 1, 'Инструменты', 'Инструменты', 'Инструменты', '', 1, 1463037601, NULL, 1463234820, 1, NULL, NULL),
(62, 35, 1, 'Комнатные растения', 'Комнатные растения', 'Комнатные растения', '', 1, 1463037674, NULL, 1463234820, 1, NULL, NULL),
(63, 36, 1, 'Детская одежда', 'Детская одежда', 'Детская одежда', '', 1, 1463038001, NULL, 1463234820, 1, NULL, NULL),
(64, 36, 1, 'Детская обувь', 'Детская обувь', 'Детская обувь', '', 1, 1463038030, NULL, 1463234820, 1, NULL, NULL),
(65, 36, 1, 'Детские коляски', 'Детские коляски', 'Детские коляски', '', 1, 1463038060, NULL, 1463234820, 1, NULL, NULL),
(66, 36, 1, 'Детские автокресла', 'Детские автокресла', 'Детские автокресла', '', 1, 1463038102, NULL, 1463234820, 1, NULL, NULL),
(68, 36, 1, 'Игрушки', 'Игрушки', 'Игрушки', '', 1, 1463038193, NULL, 1463234820, 1, NULL, NULL),
(69, 36, 1, 'Детский транспорт', 'Детский транспорт', 'Детский транспорт', '', 1, 1463038228, NULL, 1463234820, 1, NULL, NULL),
(71, 61, 1, 'Аккумуляторные инструменты', 'Аккумуляторные инструменты', '<p>Аккумуляторные инструменты</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(73, 36, 1, 'Кормящим и будущим мамам', 'Кормящим и будущим мамам', 'Кормящим и будущим мамам', '', 1, 1463038403, NULL, 1463234820, 1, NULL, NULL),
(74, 36, 1, 'Товары для новорожденных', 'Товары для новорожденных', 'Товары для новорожденных', '', 1, 1463038440, NULL, 1463234820, 1, NULL, NULL),
(76, 37, 1, 'Женская одежда', 'Женская одежда', 'Женская одежда', '', 1, 1463038536, NULL, 1463234820, 1, NULL, NULL),
(77, 37, 1, 'Мужская одежда', 'Мужская одежда', 'Мужская одежда', '', 1, 1463038575, NULL, 1463234820, 1, NULL, NULL),
(78, 37, 1, 'Обувь', 'Обувь', 'Обувь', '', 1, 1463038721, NULL, 1463234820, 1, NULL, NULL),
(81, 40, 1, 'Спортивная одежда', 'Спортивная одежда', 'Спортивная одежда', '', 1, 1463038862, NULL, 1463234820, 1, NULL, NULL),
(82, 37, 1, 'Для свадьбы', 'Для свадьбы', 'Для свадьбы', '', 1, 1463038890, NULL, 1463234820, 1, NULL, NULL),
(83, 37, 1, 'Наручные часы', 'Наручные часы', 'Наручные часы', '', 1, 1463038964, NULL, 1463234820, 1, NULL, NULL),
(84, 37, 1, 'Аксессуары', 'Аксессуары', 'Аксессуары', '', 1, 1463038998, NULL, 1463234820, 1, NULL, NULL),
(85, 37, 1, 'Ювелирные изделия', 'Ювелирные изделия', 'Ювелирные изделия', '', 1, 1463039030, NULL, 1463234820, 1, NULL, NULL),
(86, 41, 1, 'Антикварные книги', 'Антикварные книги', 'Антикварные книги', '', 1, 1463039198, NULL, 1463234820, 1, NULL, NULL),
(87, 41, 1, 'Коллекционирование', 'Коллекционирование', 'Коллекционирование', '', 1, 1463039253, NULL, 1463234820, 1, NULL, NULL),
(88, 41, 1, 'Предметы искусства', 'Предметы искусства', 'Предметы искусства', '', 1, 1463039321, NULL, 1463234820, 1, NULL, NULL),
(89, 0, 2, 'Авто и мототовары', 'Авто и мототовары', 'Авто и мототовары', '', 1, 1463388519, NULL, NULL, NULL, NULL, NULL),
(90, 41, 1, 'Авторские работы, Hand Made', 'Авторские работы, Hand Made', 'Авторские работы, Hand Made', '', 1, 1463039446, NULL, 1463234820, 1, NULL, NULL),
(91, 41, 1, 'Бижутерия, аксессуары', 'Бижутерия, аксессуары', 'Бижутерия, аксессуары', '', 1, 1463039513, NULL, 1463234820, 1, NULL, NULL),
(92, 41, 1, 'Винтаж', 'Винтаж', 'Винтаж', '', 1, 1463039552, NULL, 1463234820, 1, NULL, NULL),
(93, 41, 1, 'Антиквариат', 'Антиквариат', 'Антиквариат', '', 1, 1463039616, NULL, 1463234820, 1, NULL, NULL),
(94, 33, 1, 'Розничная торговля / Продажи', 'Розничная торговля / Продажи', 'Розничная торговля / Продажи', '', 1, 1463049603, NULL, 1463234820, 1, NULL, NULL),
(95, 33, 1, 'Бары / рестораны', 'Бары / рестораны', 'Бары / рестораны', '', 1, 1463049659, NULL, 1463234820, 1, NULL, NULL),
(96, 33, 1, 'Домашний персонал', 'Домашний персонал', 'Домашний персонал', '', 1, 1463049713, NULL, 1463234820, 1, NULL, NULL),
(97, 33, 1, 'Образование', 'Образование', 'Образование', '', 1, 1463049749, NULL, 1463234820, 1, NULL, NULL),
(98, 33, 1, 'ИТ / телеком / компьютеры', 'ИТ / телеком / компьютеры', 'ИТ / телеком / компьютеры', '', 1, 1463049787, NULL, 1463234820, 1, NULL, NULL),
(99, 33, 1, 'Производство / энергетика', 'Производство / энергетика', 'Производство / энергетика', '', 1, 1463049828, NULL, 1463234820, 1, NULL, NULL),
(100, 33, 1, 'Начало карьеры / Студенты', 'Начало карьеры / Студенты', 'Начало карьеры / Студенты', '', 1, 1463049857, NULL, 1463234820, 1, NULL, NULL),
(101, 33, 1, 'Транспорт / логистика', 'Транспорт / логистика', 'Транспорт / логистика', '', 1, 1463049974, NULL, 1463234820, 1, NULL, NULL),
(102, 33, 1, 'Юриспруденция и бухгалтерия', 'Юриспруденция и бухгалтерия', 'Юриспруденция и бухгалтерия', '', 1, 1463050009, NULL, 1463234820, 1, NULL, NULL),
(103, 33, 1, 'Красота / фитнес / спорт', 'Красота / фитнес / спорт', 'Красота / фитнес / спорт', '', 1, 1463050036, NULL, 1463234820, 1, NULL, NULL),
(104, 33, 1, 'Культура / искусство', 'Культура / искусство', 'Культура / искусство', '', 1, 1463050069, NULL, 1463234820, 1, NULL, NULL),
(105, 33, 1, 'Недвижимость', 'Недвижимость', 'Недвижимость', '', 1, 1463050103, NULL, 1463234820, 1, NULL, NULL),
(106, 33, 1, 'Cекретариат / АХО', 'Cекретариат / АХО', 'Cекретариат / АХО', '', 1, 1463050129, NULL, 1463234820, 1, NULL, NULL),
(107, 33, 1, 'Сервис и быт', 'Сервис и быт', 'Сервис и быт', '', 1, 1463050150, NULL, 1463234820, 1, NULL, NULL),
(108, 33, 1, 'Строительство', 'Строительство', 'Строительство', '', 1, 1463050195, NULL, 1463234820, 1, NULL, NULL),
(109, 33, 1, 'Охрана / безопасность', 'Охрана / безопасность', 'Охрана / безопасность', '', 1, 1463050227, NULL, 1463234820, 1, NULL, NULL),
(110, 33, 1, 'Туризм / отдых / развлечения', 'Туризм / отдых / развлечения', 'Туризм / отдых / развлечения', '', 1, 1463050258, NULL, 1463234820, 1, NULL, NULL),
(111, 33, 1, 'Медицина / фармация', 'Медицина / фармация', 'Медицина / фармация', '', 1, 1463050278, NULL, 1463234820, 1, NULL, NULL),
(112, 33, 1, 'Маркетинг / реклама / дизайн', 'Маркетинг / реклама / дизайн', 'Маркетинг / реклама / дизайн', '', 1, 1463050302, NULL, 1463234820, 1, NULL, NULL),
(113, 33, 1, 'Частичная занятость', 'Частичная занятость', 'Частичная занятость', '', 1, 1463050334, NULL, 1463234820, 1, NULL, NULL),
(114, 33, 1, 'Другие сферы занятий', 'Другие сферы занятий', 'Другие сферы занятий', '', 1, 1463050356, NULL, 1463234820, 1, NULL, NULL),
(115, 43, 1, 'Собаки', 'Собаки', 'Собаки', '', 1, 1463051042, NULL, 1463234820, 1, NULL, NULL),
(116, 43, 1, 'Птицы', 'Птицы', 'Птицы', '', 1, 1463051071, NULL, 1463234820, 1, NULL, NULL),
(117, 43, 1, 'Животные даром', 'Животные даром', 'Животные даром', '', 1, 1463051121, NULL, 1463234820, 1, NULL, NULL),
(118, 43, 1, 'Бюро находок', 'Бюро находок', 'Бюро находок', '', 1, 1463051172, NULL, 1463234820, 1, NULL, NULL),
(119, 43, 1, 'Кошки', 'Кошки', 'Кошки', '', 1, 1463051205, NULL, 1463234820, 1, NULL, NULL),
(120, 43, 1, 'Грызуны', 'Грызуны', 'Грызуны', '', 1, 1463051238, NULL, 1463234820, 1, NULL, NULL),
(121, 43, 1, 'Зоотовары', 'Зоотовары', 'Зоотовары', '', 1, 1463051263, NULL, 1463234820, 1, NULL, NULL),
(122, 43, 1, 'Аквариумистика', 'Аквариумистика', 'Аквариумистика', '', 1, 1463051292, NULL, 1463234820, 1, NULL, NULL),
(123, 43, 1, 'Сельхоз животные', 'Сельхоз животные', 'Сельхоз животные', '', 1, 1463051332, NULL, 1463234820, 1, NULL, NULL),
(124, 43, 1, 'Вязка', 'Вязка', 'Вязка', '', 1, 1463051357, NULL, 1463234820, 1, NULL, NULL),
(125, 43, 1, 'Другие животные', 'Другие животные', 'Другие животные', '', 1, 1463051393, NULL, 1463234820, 1, NULL, NULL),
(126, 39, 1, 'Макияж', 'Макияж', 'Макияж', '', 1, 1463051572, NULL, 1463234820, 1, NULL, NULL),
(127, 39, 1, 'Волосы', 'Волосы', 'Волосы', '', 1, 1463051611, NULL, 1463234820, 1, NULL, NULL),
(128, 39, 1, 'Контактные линзы', 'Контактные линзы', 'Контактные линзы', '', 1, 1463051643, NULL, 1463234820, 1, NULL, NULL),
(129, 39, 1, 'Лицо', 'Лицо', 'Лицо', '', 1, 1463051672, NULL, 1463234820, 1, NULL, NULL),
(130, 39, 1, 'Парфюмерия', 'Парфюмерия', 'Парфюмерия', '', 1, 1463051699, NULL, 1463234820, 1, NULL, NULL),
(131, 39, 1, 'Аппаратная косметология', 'Аппаратная косметология', 'Аппаратная косметология', '', 1, 1463051729, NULL, 1463234820, 1, NULL, NULL),
(132, 39, 1, 'Тело', 'Тело', 'Тело', '', 1, 1463051761, NULL, 1463234820, 1, NULL, NULL),
(133, 39, 1, 'Гигиена', 'Гигиена', 'Гигиена', '', 1, 1463051810, NULL, 1463234820, 1, NULL, NULL),
(134, 39, 1, 'Для мужчин', 'Для мужчин', 'Для мужчин', '', 1, 1463051855, NULL, 1463234820, 1, NULL, NULL),
(135, 39, 1, 'Наборы', 'Наборы', 'Наборы', '', 1, 1463051895, NULL, 1463234820, 1, NULL, NULL),
(136, 40, 1, 'Одежда для отдыха', 'Одежда для отдыха', 'Одежда для отдыха', '', 1, 1463038890, NULL, 1463234820, 1, NULL, NULL),
(137, 139, 1, 'Роликовые коньки', 'Роликовые коньки', 'Роликовые коньки', '', 1, 1463052007, NULL, 1463234821, 1, NULL, NULL),
(138, 40, 1, 'Спортивная обувь', 'Спортивная обувь', 'Спортивная обувь', '', 1, 1463052040, NULL, 1463234821, 1, NULL, NULL),
(139, 40, 1, 'Активный отдых', 'Активный отдых', 'Активный отдых', '', 1, 1463052144, NULL, 1463234821, 1, NULL, NULL),
(141, 40, 1, 'Тренажеры', 'Тренажеры', 'Тренажеры', '', 1, 1463052475, NULL, 1463234821, 1, NULL, NULL),
(142, 40, 1, 'Спортивное питание', 'Спортивное питание', 'Спортивное питание', '', 1, 1463052561, NULL, 1463234821, 1, NULL, NULL),
(143, 40, 1, 'Туризм', 'Туризм', 'Туризм', '', 1, 1463052630, NULL, 1463234821, 1, NULL, NULL),
(144, 40, 1, 'Рыбалка', 'Рыбалка', 'Рыбалка', '', 1, 1463052723, NULL, 1463234821, 1, NULL, NULL),
(145, 40, 1, 'Охота', 'Охота', 'Охота', '', 1, 1463387733, NULL, NULL, NULL, NULL, NULL),
(146, 40, 1, 'Стрелковый спорт', 'Стрелковый спорт', 'Стрелковый спорт', '', 1, 1463387771, NULL, NULL, NULL, NULL, NULL),
(147, 0, 2, 'Электроника', 'Электроника', 'Электроника', '', 1, 1463387891, NULL, NULL, NULL, NULL, NULL),
(148, 0, 2, 'Одежда, обувь, аксессуары', 'Одежда, обувь, аксессуары', 'Одежда, обувь, аксессуары', '', 1, 1463388005, NULL, NULL, NULL, NULL, NULL),
(149, 0, 2, 'Для дома и сада', 'Для дома и сада', 'Для дома и сада', '', 1, 1463388240, NULL, NULL, NULL, NULL, NULL),
(150, 0, 2, 'Детям и мамам', 'Детям и мамам', 'Детям и мамам', '', 1, 1463388261, NULL, NULL, NULL, NULL, NULL),
(151, 0, 2, 'Спорт, хобби, развлечения', 'Спорт, хобби, развлечения', 'Спорт, хобби, развлечения', '', 1, 1463388283, NULL, NULL, NULL, NULL, NULL),
(152, 0, 2, 'Красота и здоровье', 'Красота и здоровье', 'Красота и здоровье', '', 1, 1463388303, NULL, NULL, NULL, NULL, NULL),
(153, 0, 2, 'Канцелярские товары', 'Канцелярские товары', 'Канцелярские товары', '', 1, 1463388424, NULL, NULL, NULL, NULL, NULL),
(155, 0, 2, 'Продукты питания', 'Продукты питания', 'Продукты питания', '', 1, 1463388537, NULL, NULL, NULL, NULL, NULL),
(156, 0, 2, 'Зоотовары', 'Зоотовары', 'Зоотовары', '', 1, 1463388555, NULL, NULL, NULL, NULL, NULL),
(157, 45, 1, 'Ноутбуки/нетбуки', 'Ноутбуки/нетбуки', '<p>Ноутбуки/нетбуки</p>\r\n', '', 1, 1463571475, NULL, 1466142070, 1, NULL, NULL),
(159, 0, 3, 'Электроника', 'Электроника', 'Электроника', '', 1, 1463388668, NULL, NULL, NULL, NULL, NULL),
(160, 0, 3, 'Одежда, обувь, аксессуары', 'Одежда, обувь, аксессуары', 'Одежда, обувь, аксессуары', '', 1, 1463388690, NULL, NULL, NULL, NULL, NULL),
(161, 0, 3, 'Продукты питания', 'Продукты питания', 'Продукты питания', '', 1, 1463388710, NULL, NULL, NULL, NULL, NULL),
(162, 0, 3, 'Канцелярские товары', 'Канцелярские товары', 'Канцелярские товары', '', 1, 1463388732, NULL, NULL, NULL, NULL, NULL),
(163, 0, 3, 'Красота и здоровье', 'Красота и здоровье', 'Красота и здоровье', '', 1, 1463388757, NULL, NULL, NULL, NULL, NULL),
(164, 0, 3, 'Для дома и сада', 'Для дома и сада', 'Для дома и сада', '', 1, 1463388780, NULL, NULL, NULL, NULL, NULL),
(165, 0, 3, 'Детям и мамам', 'Детям и мамам', 'Детям и мамам', '', 1, 1463388811, NULL, NULL, NULL, NULL, NULL),
(166, 0, 3, 'Спортивные товары', 'Спортивные товары', 'Спортивные товары', '', 1, 1463388832, NULL, NULL, NULL, NULL, NULL),
(167, 0, 3, 'Зоотовары', 'Зоотовары', 'Зоотовары', '', 1, 1463388851, NULL, NULL, NULL, NULL, NULL),
(168, 0, 3, 'Книги', 'Книги', 'Книги', '', 1, 1463388872, NULL, NULL, NULL, NULL, NULL),
(169, 0, 3, 'Кино и Музыка', 'Кино и Музыка', 'Кино и Музыка', '', 1, 1463388892, NULL, NULL, NULL, NULL, NULL),
(170, 0, 4, 'Торжественные услуги', 'Торжественные услуги', 'Торжественные услуги', '', 1, 1463388922, NULL, NULL, NULL, NULL, NULL),
(171, 0, 4, 'Медицинские услуги', 'Медицинские услуги', 'Медицинские услуги', '', 1, 1463388941, NULL, NULL, NULL, NULL, NULL),
(172, 0, 4, 'Авто услуги', 'Авто услуги', 'Авто услуги', '', 1, 1463388961, NULL, NULL, NULL, NULL, NULL),
(173, 0, 4, 'Услуги для дома и сада', 'Услуги для дома и сада', 'Услуги для дома и сада', '', 1, 1463388980, NULL, NULL, NULL, NULL, NULL),
(174, 0, 4, 'Строительные услуги', 'Строительные услуги', 'Строительные услуги', '', 1, 1463389000, NULL, NULL, NULL, NULL, NULL),
(175, 0, 4, 'Компьютерные услуги', 'Компьютерные услуги', 'Компьютерные услуги', '', 1, 1463389022, NULL, NULL, NULL, NULL, NULL),
(176, 27, 1, ' Квартиры посуточно', ' Квартиры посуточно', '\r\nКвартиры посуточно', '', 1, 1463569539, NULL, NULL, NULL, NULL, NULL),
(177, 27, 1, 'Долгосрочная аренда квартир', 'Долгосрочная аренда квартир', 'Долгосрочная аренда квартир', '', 1, 1463569571, NULL, NULL, NULL, NULL, NULL),
(178, 26, 1, 'Дома посуточно', 'Дома посуточно', 'Дома посуточно', '', 1, 1463569679, NULL, NULL, NULL, NULL, NULL),
(179, 26, 1, ' Долгосрочная аренда домов', ' Долгосрочная аренда домов', '\r\nДолгосрочная аренда домов', '', 1, 1463569715, NULL, NULL, NULL, NULL, NULL),
(180, 44, 1, 'Мобильные телефоны', 'Мобильные телефоны', 'Мобильные телефоны', '', 1, 1463571167, NULL, NULL, NULL, NULL, NULL),
(181, 44, 1, 'Сим-карты / номера', 'Сим-карты / номера', '<p>Сим-карты &nbsp;/ номера</p>\r\n', '', 1, 1463570252, NULL, 1466234732, 1, NULL, NULL),
(182, 44, 1, 'Стационарные телефоны', 'Стационарные телефоны', 'Стационарные телефоны', '', 1, 1463570302, NULL, NULL, NULL, NULL, NULL),
(183, 44, 1, 'Прочие телефоны', 'Прочие телефоны', 'Прочие телефоны', '', 1, 1463570360, NULL, NULL, NULL, NULL, NULL),
(185, 45, 1, ' Настольные', ' Настольные', '\r\nНастольные', '', 1, 1463571276, NULL, NULL, NULL, NULL, NULL),
(186, 45, 1, 'Планшетные компьютеры', 'Планшетные компьютеры', 'Планшетные компьютеры', '', 1, 1463571338, NULL, NULL, NULL, NULL, NULL),
(187, 45, 1, 'Комплектующие', 'Комплектующие', 'Комплектующие', '', 1, 1463571374, NULL, NULL, NULL, NULL, NULL),
(188, 45, 1, 'Мониторы', 'Мониторы', 'Мониторы', '', 1, 1463571412, NULL, NULL, NULL, NULL, NULL),
(190, 45, 1, 'Аксессуары', 'Аксессуары', 'Аксессуары', '', 1, 1463571568, NULL, NULL, NULL, NULL, NULL),
(191, 45, 1, 'Периферийные устройства', 'Периферийные устройства', 'Периферийные устройства', '', 1, 1463571608, NULL, 1466165092, 1, 1466165092, 1),
(192, 45, 1, 'Внешние накопители', 'Внешние накопители', 'Внешние накопители', '', 1, 1463571652, NULL, NULL, NULL, NULL, NULL),
(193, 45, 1, 'Серверы', 'Серверы', 'Серверы', '', 1, 1463571696, NULL, NULL, NULL, NULL, NULL),
(194, 45, 1, 'Расходные материалы', 'Расходные материалы', 'Расходные материалы', '', 1, 1463571796, NULL, NULL, NULL, NULL, NULL),
(195, 46, 1, 'Телевизоры', 'Телевизоры', 'Телевизоры', '', 1, 1463572195, NULL, NULL, NULL, NULL, NULL),
(196, 46, 1, 'Медиаплееры', 'Медиаплееры', 'Медиаплееры', '', 1, 1463572226, NULL, 1463572490, NULL, NULL, NULL),
(197, 46, 1, 'Домашние кинотеатры', 'Домашние кинотеатры', 'Домашние кинотеатры', '', 1, 1463572545, NULL, NULL, NULL, NULL, NULL),
(198, 46, 1, 'Спутниковое тв', 'Спутниковое тв', 'Спутниковое тв', '', 1, 1463572698, NULL, NULL, NULL, NULL, NULL),
(199, 46, 1, 'Проекторы', 'Проекторы', 'Проекторы', '', 1, 1463572763, NULL, NULL, NULL, NULL, NULL),
(200, 17, 1, 'Продажа домов в городе', 'Продажа домов в городе', '<p>Продажа домов в городе</p>\r\n', '', 1, 1463725090, 1, NULL, NULL, NULL, NULL),
(201, 17, 1, 'Продажа домов за городом', 'Продажа домов за городом', '<p>Продажа домов за городом</p>\r\n', '', 1, 1463725143, 1, NULL, NULL, NULL, NULL),
(202, 17, 1, 'Продажа дач', 'Продажа дач', '<p>Продажа дач</p>\r\n', '', 1, 1463725204, 1, NULL, NULL, NULL, NULL),
(203, 22, 1, 'Продажа земли под индивидуальное строительство', 'Продажа земли под индивидуальное строительство', '<p><br />\r\nПродажа земли под индивидуальное строительство</p>\r\n', '', 1, 1463725277, 1, NULL, NULL, NULL, NULL),
(204, 22, 1, 'Продажа земли промышленного назначения', 'Продажа земли промышленного назначения', '<p>Продажа земли промышленного назначения</p>\r\n', '', 1, 1463725522, 1, NULL, NULL, NULL, NULL),
(205, 29, 1, 'Аренда складов', 'Аренда складов', '<p>Аренда складов</p>\r\n', '', 1, 1463725841, 1, NULL, NULL, NULL, NULL),
(206, 3, 1, 'Аренда ресторанов / баров', 'Аренда ресторанов / баров', '<p>Аренда ресторанов / баров</p>\r\n', '', 1, 1463728593, 1, NULL, NULL, NULL, NULL),
(207, 20, 1, 'Аренда отдельно стоящих зданий', 'Аренда отдельно стоящих зданий', '<p>Аренда отдельно стоящих зданий</p>\r\n', '', 1, 1463728835, 1, NULL, NULL, NULL, NULL),
(208, 29, 1, 'Аренда помещений промышленного назначения', 'Аренда помещений промышленного назначения', '<p>Аренда помещений промышленного назначения</p>\r\n', '', 1, 1463728878, 1, NULL, NULL, NULL, NULL),
(209, 29, 1, 'Прочее', 'Прочее', '<p>Прочее</p>\r\n', '', 1, 1463728921, 1, NULL, NULL, NULL, NULL),
(210, 35, 1, 'Ковры и шкуры', 'Ковры и шкуры', '<p>Ковры и шкуры</p>\r\n', '', 1, 1463809139, 1, 1466499287, 1, NULL, NULL),
(211, 42, 1, 'Ремонт компьютеров', 'Ремонт компьютеров', '<p>Ремонт компьютеров</p>\r\n', '', 1, 1463809360, 1, NULL, NULL, NULL, NULL),
(212, 42, 1, 'Ремонт сотовых телефонов', 'Ремонт сотовых телефонов', '<p>Ремонт сотовых телефонов</p>\r\n', '', 1, 1463809413, 1, NULL, NULL, NULL, NULL),
(213, 42, 1, 'Строительство / ремонт / уборка', 'Строительство / ремонт / уборка', '<p>Строительство / ремонт / уборка</p>\r\n', '', 1, 1463809568, 1, NULL, NULL, NULL, NULL),
(214, 42, 1, 'Финансовые услуги / партнерство', 'Финансовые услуги / партнерство', '<p>Финансовые услуги / партнерство</p>\r\n', '', 1, 1463810001, 1, NULL, NULL, NULL, NULL),
(215, 42, 1, 'Перевозки / аренда транспорта', 'Перевозки / аренда транспорта', '<p>Перевозки / аренда транспорта</p>\r\n', '', 1, 1463810302, 1, NULL, NULL, NULL, NULL),
(216, 42, 1, 'Реклама / полиграфия / маркетинг / интернет', 'Реклама / полиграфия / маркетинг / интернет', '<p>Реклама / полиграфия / маркетинг / интернет</p>\r\n', '', 1, 1463810363, 1, NULL, NULL, NULL, NULL),
(217, 42, 1, 'Няни / сиделки', 'Няни / сиделки', '<p>Няни / сиделки</p>\r\n', '', 1, 1463810466, 1, NULL, NULL, NULL, NULL),
(218, 42, 1, 'Красота / здоровье', 'Красота / здоровье', '<p>Красота / здоровье</p>\r\n', '', 1, 1463810516, 1, NULL, NULL, NULL, NULL),
(219, 42, 1, 'Образование / Спорт', 'Образование / Спорт', '<p>Образование / Спорт</p>\r\n', '', 1, 1463810547, 1, NULL, NULL, NULL, NULL),
(220, 42, 1, 'Услуги для животных', 'Услуги для животных', '<p>Услуги для животных</p>\r\n', '', 1, 1463810576, 1, NULL, NULL, NULL, NULL),
(221, 42, 1, 'Развлечения / Искусство', 'Развлечения / Искусство', '<p>Развлечения / Искусство</p>\r\n', '', 1, 1463810705, 1, NULL, NULL, NULL, NULL),
(222, 42, 1, 'Услуги переводчиков / набор текста', 'Услуги переводчиков / набор текста', '<p>Услуги переводчиков / набор текста</p>\r\n', '', 1, 1463810782, 1, NULL, NULL, NULL, NULL),
(223, 42, 1, 'Авто / мото услуги', 'Авто / мото услуги', '<p>Авто / мото услуги</p>\r\n', '', 1, 1463810813, 1, NULL, NULL, NULL, NULL),
(224, 42, 1, 'Обслуживание, ремонт техники', 'Обслуживание, ремонт техники', '<p>Обслуживание, ремонт техники</p>\r\n', '', 1, 1463810838, 1, NULL, NULL, NULL, NULL),
(225, 42, 1, 'Юридические услуги', 'Юридические услуги', '<p>Юридические услуги</p>\r\n', '', 1, 1463810867, 1, NULL, NULL, NULL, NULL),
(228, 49, 1, 'Игровые приставки', 'Игровые приставки', '<p>Игровые приставки</p>\r\n', '', 1, 1463986203, 1, NULL, NULL, NULL, NULL),
(229, 49, 1, 'Игры для приставок', 'Игры для приставок', '<p>Игры для приставок</p>\r\n', '', 1, 1463986274, 1, NULL, NULL, NULL, NULL),
(230, 49, 1, 'Игры для PC', 'Игры для PC', '<p>Игры для PC</p>\r\n', '', 1, 1463986321, 1, NULL, NULL, NULL, NULL),
(239, 226, 1, 'Куплю гараж / стоянку', 'Куплю гараж / стоянку', '<p>Куплю гараж&nbsp;/ стоянку</p>\r\n', '', 1, 1464933512, 1, 1464934945, 1, NULL, NULL),
(241, 4, 1, 'Обмен домов', 'Обмен домов', '<p>Обмен домов</p>\r\n', '', 1, 1464934413, 1, NULL, NULL, NULL, NULL),
(242, 4, 1, 'Обмен квартир', 'Обмен квартир', '<p>Обмен квартир</p>\r\n', '', 1, 1464934441, 1, NULL, NULL, NULL, NULL),
(243, 4, 1, 'Обмен офисов', 'Обмен офисов', '<p>Обмен офисов</p>\r\n', '', 1, 1464934461, 1, NULL, NULL, NULL, NULL),
(244, 4, 1, 'Обмен помещений', 'Обмен помещений', '<p>Обмен помещений</p>\r\n', '', 1, 1464934478, 1, NULL, NULL, NULL, NULL),
(245, 4, 1, 'Обмен дачных участков', 'Обмен дачных участков', '<p>Обмен дачных участков</p>\r\n', '', 1, 1464934498, 1, NULL, NULL, NULL, NULL),
(246, 4, 1, 'Обмен земли', 'Обмен земли', '<p>Обмен земли</p>\r\n', '', 1, 1464934518, 1, NULL, NULL, NULL, NULL),
(247, 4, 1, 'Обмен магазинов / салонов', 'Обмен магазинов / салонов', '<p>Обмен магазинов / салонов</p>\r\n', '', 1, 1464934552, 1, NULL, NULL, NULL, NULL),
(248, 4, 1, 'Обмен гаражей / стоянок', 'Обмен гаражей / стоянок', '<p>Обмен гаражей / стоянок</p>\r\n', '', 1, 1464934572, 1, NULL, NULL, NULL, NULL),
(249, 4, 1, 'Обмен Прочая недвижимость', 'Обмен Прочая недвижимость', '<p>Обмен Прочая недвижимость</p>\r\n', '', 1, 1464934590, 1, NULL, NULL, NULL, NULL),
(250, 38, 1, 'Энергетические и Генераторные Установки', 'Энергетические и Генераторные Установки', '<p>Энергетические и Генераторные Установки</p>\r\n', '', 1, 1464935786, 1, NULL, NULL, NULL, NULL),
(251, 38, 1, 'Насос и Вакуумное Оборудование', 'Насос и Вакуумное Оборудование', '<p>Насос и Вакуумное Оборудование</p>\r\n', '', 1, 1465016600, 1, NULL, NULL, NULL, NULL),
(252, 38, 1, 'Фильтрационное Оборудование и Запчасти', 'Фильтрационное Оборудование и Запчасти', '<p>Фильтрационное Оборудование и Запчасти</p>\r\n', '', 1, 1465017357, 1, NULL, NULL, NULL, NULL),
(253, 38, 1, 'Вентиляционное Оборудование', 'Вентиляционное Оборудование', '<p>Вентиляционное Оборудование</p>\r\n', '', 1, 1465017378, 1, NULL, NULL, NULL, NULL),
(254, 38, 1, 'Оборудование для Производства Бумаги', 'Оборудование для Производства Бумаги', '<p>Оборудование для Производства Бумаги</p>\r\n', '', 1, 1465017471, 1, NULL, NULL, NULL, NULL),
(255, 38, 1, 'Химическое Оборудование', 'Химическое Оборудование', '<p>Химическое Оборудование</p>\r\n', '', 1, 1465018493, 1, NULL, NULL, NULL, NULL),
(256, 38, 1, 'Сборочная и Производственная Линия', 'Сборочная и Производственная Линия', '<p>Сборочная и Производственная Линия</p>\r\n', '', 1, 1465018521, 1, NULL, NULL, NULL, NULL),
(257, 38, 1, 'Инженерно-Строительная Техника', 'Инженерно-Строительная Техника', '<p>Инженерно-Строительная Техника</p>\r\n', '', 1, 1465018548, 1, NULL, NULL, NULL, NULL),
(258, 38, 1, 'Оборудование для Обработки Пищи, Напитков и Продовольствия', 'Оборудование для Обработки Пищи, Напитков и Продовольствия', '<p>Оборудование для Обработки Пищи, Напитков и Продовольствия</p>\r\n', '', 1, 1465018617, 1, NULL, NULL, NULL, NULL),
(259, 38, 1, 'Деревообрабатывающее Оборудование', 'Деревообрабатывающее Оборудование', '<p>Деревообрабатывающее Оборудование</p>\r\n', '', 1, 1465018657, 1, NULL, NULL, NULL, NULL),
(260, 38, 1, 'Оборудование для Одежды, Обуви и Прикладов', 'Оборудование для Одежды, Обуви и Прикладов', '<p>Оборудование для Одежды, Обуви и Прикладов</p>\r\n', '', 1, 1465018684, 1, NULL, NULL, NULL, NULL),
(261, 38, 1, 'Камнеобрабатывающее Оборудование', 'Камнеобрабатывающее Оборудование', '<p>Камнеобрабатывающее Оборудование</p>\r\n', '', 1, 1465018717, 1, NULL, NULL, NULL, NULL),
(262, 38, 1, 'Оборудование для Обработки Пластмассы', 'Оборудование для Обработки Пластмассы', '<p>Оборудование для Обработки Пластмассы</p>\r\n', '', 1, 1465018772, 1, NULL, NULL, NULL, NULL),
(263, 38, 1, 'Оборудование для альтернативных источников энергии', 'Оборудование для альтернативных источников энергии', '<p>Оборудование для альтернативных источников энергии</p>\r\n', '', 1, 1465018844, 1, NULL, NULL, NULL, NULL),
(264, 35, 1, 'Шторы, жалюзи и ткани', 'Шторы, жалюзи и ткани', '<p>Шторы, жалюзи и ткани</p>\r\n', '', 1, 1465020028, 1, NULL, NULL, NULL, NULL),
(265, 9, 1, 'Мотоциклы', 'Мотоциклы\r\n', '<p>Мотоциклы</p>\n', '', 1, 1465982175, 1, NULL, NULL, NULL, NULL),
(266, 9, 1, ' Мопеды / скутеры', 'Мопеды / скутеры', '<p>Мопеды / скутеры</p>\r\n', '', 1, 1465982220, 1, NULL, NULL, NULL, NULL),
(267, 9, 1, 'Квадроциклы', 'Квадроциклы', '<p>Квадроциклы</p>\r\n', '', 1, 1465982258, 1, NULL, NULL, NULL, NULL),
(268, 9, 1, 'Прочие', 'Прочие', '<p>Прочие</p>\r\n', '', 1, 1465982329, 1, 1466488845, 1, NULL, NULL),
(269, 57, 1, 'Мебель для гостиной', 'Мебель для гостиной', '<p>Мебель для гостиной</p>\r\n', '', 1, 1466152868, 1, NULL, NULL, NULL, NULL),
(270, 57, 1, 'Мебель для спальни', 'Мебель для спальни', '<p>Мебель для спальни</p>\r\n', '', 1, 1466152892, 1, NULL, NULL, NULL, NULL),
(271, 57, 1, 'Офисная мебель', 'Офисная мебель', '<p>Офисная мебель</p>\r\n', '', 1, 1466152921, 1, NULL, NULL, NULL, NULL),
(272, 57, 1, 'Кухонная мебель', 'Кухонная мебель', '<p>Кухонная мебель</p>\r\n', '', 1, 1466152955, 1, NULL, NULL, NULL, NULL),
(273, 57, 1, 'Мебель для прихожей', 'Мебель для прихожей', '<p>Мебель для прихожей</p>\r\n', '', 1, 1466152986, 1, NULL, NULL, NULL, NULL),
(274, 57, 1, 'Мебель для ванной комнаты', 'Мебель для ванной комнаты', '<p>Мебель для ванной комнаты</p>\r\n', '', 1, 1466153008, 1, NULL, NULL, NULL, NULL),
(275, 57, 1, 'Детская мебель', 'Детская мебель', '<p>Детская мебель</p>\r\n', '', 1, 1466153101, 1, NULL, NULL, NULL, NULL),
(276, 57, 1, 'Мягкая мебель', 'Мягкая мебель', '<p>Мягкая мебель</p>\r\n', '', 1, 1466153148, 1, NULL, NULL, NULL, NULL),
(277, 57, 1, 'Столы и стулья', 'Столы и стулья', '<p><span style="color:rgb(34, 34, 34); font-family:consolas,lucida console,monospace; font-size:12px">Столы и стулья</span></p>\r\n', '', 1, 1466153197, 1, NULL, NULL, NULL, NULL),
(278, 57, 1, 'Дачный мебель', 'Дачный мебель', '<p><span style="color:rgb(34, 34, 34); font-family:consolas,lucida console,monospace; font-size:12px">Дачный мебель</span></p>\r\n', '', 1, 1466153252, 1, NULL, NULL, NULL, NULL),
(279, 57, 1, 'Садовая мебель', 'Садовая мебель', '<p>Садовая мебель</p>\r\n', '', 1, 1466153378, 1, NULL, NULL, NULL, NULL),
(280, 57, 1, 'Специализированная мебель', 'Специализированная мебель', '<p>Специализированная мебель</p>\r\n', '', 1, 1466153401, 1, NULL, NULL, NULL, NULL),
(282, 57, 1, 'Мебель на заказ', 'Мебель на заказ', '<p>Мебель на заказ</p>\r\n', '', 1, 1466153456, 1, NULL, NULL, NULL, NULL),
(283, 45, 1, 'Принтеры и МФУ', 'Принтеры и МФУ', '<p>Принтеры и МФУ</p>\r\n', '', 1, 1466165267, 1, 1466165450, 1, NULL, NULL),
(284, 45, 1, 'Клавиатуры и мыши', 'Клавиатуры и мыши', '<p>Клавиатуры и мыши</p>\r\n', '', 1, 1466165299, 1, NULL, NULL, NULL, NULL),
(285, 45, 1, 'Сетевое оборудование', 'Сетевое оборудование', '<p>Сетевое оборудование</p>\r\n', '', 1, 1466165343, 1, NULL, NULL, NULL, NULL),
(286, 53, 1, 'Внешние жесткие диски', 'Внешние жесткие диски', '<p>Внешние жесткие диски</p>\r\n', '', 1, 1466166242, 1, NULL, NULL, NULL, NULL),
(287, 53, 1, 'USB-флешки', 'USB-флешки', '<p>USB-флешки</p>\r\n', '', 1, 1466166289, 1, NULL, NULL, NULL, NULL),
(288, 53, 1, 'SSD-накопители', 'SSD-накопители', '<p>SSD-накопители</p>\r\n', '', 1, 1466166310, 1, NULL, NULL, NULL, NULL),
(289, 53, 1, 'Карты памяти', 'Карты памяти', '<p>Карты памяти</p>\r\n', '', 1, 1466166337, 1, NULL, NULL, NULL, NULL),
(290, 52, 1, 'Обогреватели', 'Обогреватели', '<p>Обогреватели</p>\r\n', '', 1, 1466166540, 1, NULL, NULL, NULL, NULL),
(291, 52, 1, 'Водонагреватели', 'Водонагреватели', '<p>Водонагреватели</p>\r\n', '', 1, 1466166557, 1, NULL, NULL, NULL, NULL),
(292, 52, 1, 'Кондиционирование', 'Кондиционирование', '<p>Кондиционирование</p>\r\n', '', 1, 1466166586, 1, NULL, NULL, NULL, NULL),
(293, 52, 1, 'Увлажнители воздуха', 'Увлажнители воздуха', '<p>Увлажнители воздуха</p>\r\n', '', 1, 1466166631, 1, NULL, NULL, NULL, NULL),
(294, 52, 1, 'Воздухоочистители', 'Воздухоочистители', '<p>Воздухоочистители</p>\r\n', '', 1, 1466166653, 1, NULL, NULL, NULL, NULL),
(295, 52, 1, 'Вентиляторы', 'Вентиляторы', '<p>Вентиляторы</p>\r\n', '', 1, 1466166674, 1, NULL, NULL, NULL, NULL),
(296, 48, 1, 'Наушники и гарнитуры', 'Наушники и гарнитуры', '<p>Наушники и гарнитуры</p>\r\n', '', 1, 1466227086, 1, NULL, NULL, NULL, NULL),
(297, 48, 1, 'Акустические системы', 'Акустические системы', '<p>Акустические системы</p>\r\n', '', 1, 1466227113, 1, NULL, NULL, NULL, NULL),
(298, 48, 1, 'Портативная акустика', 'Портативная акустика', '<p>Портативная акустика</p>\r\n', '', 1, 1466227147, 1, NULL, NULL, NULL, NULL),
(299, 48, 1, 'MP3-плееры и диктофоны', 'MP3-плееры и диктофоны', '<p>MP3-плееры и диктофоны</p>\r\n', '', 1, 1466227170, 1, NULL, NULL, NULL, NULL),
(300, 47, 1, 'Цифровые фотоаппараты', 'Цифровые фотоаппараты', '<p>Цифровые фотоаппараты</p>\r\n', '', 1, 1466227389, 1, NULL, NULL, NULL, NULL),
(301, 47, 1, 'Зеркальные фотоаппараты', 'Зеркальные фотоаппараты', '<p>Зеркальные фотоаппараты</p>\r\n', '', 1, 1466227408, 1, NULL, NULL, NULL, NULL),
(302, 47, 1, 'Видеокамеры', 'Видеокамеры', '<p>Видеокамеры</p>\r\n', '', 1, 1466227431, 1, NULL, NULL, NULL, NULL),
(303, 47, 1, 'Экшн-камеры', 'Экшн-камеры', '<p>Экшн-камеры</p>\r\n', '', 1, 1466227483, 1, NULL, NULL, NULL, NULL),
(304, 6, 1, 'Автомобили с пробегом', 'Автомобили с пробегом', '<p>Автомобили с пробегом</p>\r\n', '', 1, 1466231624, 1, NULL, NULL, NULL, NULL),
(305, 6, 1, 'Новые автомобили', 'Новые автомобили', '<p>Новые автомобили</p>\r\n', '', 1, 1466231661, 1, NULL, NULL, NULL, NULL),
(306, 6, 1, 'Запчасти / аксессуары', 'Запчасти / аксессуары', '<p><a href="http://alltrade.loc/category/view?id=14" style="font-weight: bold; border-bottom-width: 1px; border-bottom-style: solid; border-bottom-color: rgb(221, 221, 221); color: rgb(85, 85, 85); text-decoration: none; font-family: open-sans; line-height: normal;">Запчасти / аксессуары</a></p>\r\n', '', 1, 1466231793, 1, NULL, NULL, NULL, NULL),
(307, 15, 1, 'Прицепы для легковых авто', 'Прицепы для легковых авто', '<p>Прицепы для&nbsp;легковых авто</p>\r\n', '', 0, 1466232408, 1, NULL, NULL, NULL, NULL),
(308, 15, 1, 'Бортовые прицепы', 'Бортовые прицепы', '<p><br />\r\nБортовые прицепы</p>\r\n', '', 0, 1466232493, 1, NULL, NULL, NULL, NULL),
(309, 15, 1, 'Изотермические прицепы', 'Изотермические прицепы', '<p>Изотермические прицепы</p>\r\n', '', 0, 1466232738, 1, NULL, NULL, NULL, NULL),
(310, 15, 1, 'Прицепы-автовозы', 'Прицепы-автовозы', '<p>Прицепы-автовозы</p>\r\n', '', 0, 1466232841, 1, NULL, NULL, NULL, NULL),
(311, 15, 1, 'Прицепы-зерновозы', 'Прицепы-зерновозы', '<p>Прицепы-зерновозы</p>\r\n', '', 0, 1466232864, 1, NULL, NULL, NULL, NULL),
(312, 15, 1, 'Прицепы-контейнеровозы', 'Прицепы-контейнеровозы', '<p>Прицепы-контейнеровозы</p>\r\n', '', 0, 1466232891, 1, NULL, NULL, NULL, NULL),
(313, 15, 1, 'Прицепы-лесовозы', 'Прицепы-лесовозы', '<p>Прицепы-лесовозы</p>\r\n', '', 0, 1466232921, 1, NULL, NULL, NULL, NULL),
(314, 15, 1, 'Прицепы-рефрижераторы', 'Прицепы-рефрижераторы', '<p>Прицепы-рефрижераторы</p>\r\n', '', 0, 1466232940, 1, NULL, NULL, NULL, NULL),
(315, 15, 1, 'Прицепы-фургоны', 'Прицепы-фургоны', '<p>Прицепы-фургоны</p>\r\n', '', 0, 1466232985, 1, NULL, NULL, NULL, NULL),
(316, 15, 1, 'Прицепы-цистерны', 'Прицепы-цистерны', '<p>Прицепы-цистерны</p>\r\n', '', 0, 1466233006, 1, NULL, NULL, NULL, NULL),
(317, 15, 1, 'Самосвальные прицепы', 'Самосвальные прицепы', '<p>Самосвальные прицепы</p>\r\n', '', 0, 1466233045, 1, NULL, NULL, NULL, NULL),
(318, 15, 1, 'Тентованные прицепы', 'Тентованные прицепы', '<p>Тентованные прицепы</p>\r\n', '', 0, 1466233069, 1, NULL, NULL, NULL, NULL),
(319, 15, 1, 'Прицепы', 'Прицепы', '<p>Прицепы</p>', '', 1, 1466233300, 1, NULL, NULL, NULL, NULL),
(320, 15, 1, 'Запчасти / аксессуары', 'Запчасти / аксессуары', '<p>Запчасти / аксессуары</p>\r\n', '', 1, 1466233328, 1, NULL, NULL, NULL, NULL),
(321, 44, 1, 'Запчасти / аксессуары', 'Запчасти / аксессуары', '<p>&nbsp;</p>\r\n\r\n<p>Запчасти / аксессуары</p>\r\n', '', 1, 1466234292, 1, NULL, NULL, NULL, NULL),
(322, 46, 1, 'Запчасти / аксессуары', 'Запчасти / аксессуары', '<p>Запчасти / аксессуары</p>\r\n', '', 1, 1466234328, 1, NULL, NULL, NULL, NULL),
(323, 47, 1, 'Запчасти / аксессуары', 'Запчасти / аксессуары', '<p>Запчасти / аксессуары</p>\r\n', '', 1, 1466234347, 1, NULL, NULL, NULL, NULL),
(324, 48, 1, 'Запчасти / аксессуары', 'Запчасти / аксессуары', '<p>Запчасти / аксессуары</p>\r\n', '', 1, 1466234370, 1, NULL, NULL, NULL, NULL),
(325, 49, 1, 'Запчасти / аксессуары', 'Запчасти / аксессуары', '<p>Запчасти / аксессуары</p>\r\n', '', 1, 1466234393, 1, NULL, NULL, NULL, NULL),
(327, 9, 1, 'Запчасти / аксессуары', 'Запчасти / аксессуары', '<p>Запчасти / аксессуары</p>\r\n', '', 1, 1466237255, 1, NULL, NULL, NULL, NULL),
(328, 58, 1, 'Ягодные деревья', 'Ягодные деревья', '<p>Ягодные деревья</p>\r\n', '', 1, 1466237836, 1, NULL, NULL, NULL, NULL),
(329, 58, 1, 'Декоративные деревья', 'Декоративные деревья', '<p>Декоративные деревья</p>\r\n', '', 1, 1466237873, 1, NULL, NULL, NULL, NULL),
(330, 58, 1, 'Газоны', 'Газоны', '<p>Газоны</p>\r\n', '', 1, 1466238057, 1, NULL, NULL, NULL, NULL),
(331, 58, 1, 'Цветы', 'Цветы', '<p>Цветы</p>\r\n', '', 1, 1466238150, 1, NULL, NULL, NULL, NULL),
(332, 7, 1, 'Бортовые', 'Бортовые', '<p>Бортовые</p>\r\n', '', 0, 1466485361, 1, NULL, NULL, NULL, NULL),
(333, 7, 1, 'Самосвалы', 'Самосвалы', '<p>Самосвалы</p>\r\n', '', 0, 1466485416, 1, NULL, NULL, NULL, NULL),
(334, 7, 1, 'Рефрижераторные', 'Рефрижераторные', '<p>Рефрижераторные</p>\r\n', '', 0, 1466485578, 1, NULL, NULL, NULL, NULL),
(335, 7, 1, 'Контейнеровозы', 'Контейнеровозы', '<p>Контейнеровозы</p>\r\n', '', 0, 1466485640, 1, NULL, NULL, NULL, NULL),
(336, 7, 1, 'Автовозы', 'Автовозы', '<p>Автовозы</p>\r\n', '', 0, 1466485676, 1, NULL, NULL, NULL, NULL),
(337, 7, 1, 'Цистерновые', 'Цистерновые', '<p>Цистерновые</p>\r\n', '', 0, 1466485785, 1, NULL, NULL, NULL, NULL),
(338, 7, 1, 'Тентованные', 'Тентованные', '<p>Тентованные</p>\r\n', '', 0, 1466485842, 1, NULL, NULL, NULL, NULL),
(339, 7, 1, 'Фургоны', 'Фургоны', '<p>Фургоны</p>\r\n', '', 0, 1466486029, 1, NULL, NULL, NULL, NULL),
(340, 7, 1, 'Грузовые автомобили', 'Грузовые автомобили', '<p>Грузовые автомобили</p>', '', 1, 1466486307, 1, NULL, NULL, NULL, NULL),
(341, 7, 1, ' Запчасти / аксессуары', 'Запчасти / аксессуары', '<p>Запчасти / аксессуары</p>\n', '', 1, 1466486325, 1, NULL, NULL, NULL, NULL),
(342, 13, 1, 'Горные', 'Горные', '<p>Горные</p>\r\n', '', 1, 1466486775, 1, NULL, NULL, NULL, NULL),
(343, 13, 1, 'Дорожные', 'Дорожные', '<p>Дорожные</p>\r\n', '', 1, 1466486804, 1, NULL, NULL, NULL, NULL),
(344, 13, 1, 'Трюковые', 'Трюковые', '<p>Трюковые</p>\r\n', '', 1, 1466486891, 1, NULL, NULL, NULL, NULL),
(345, 13, 1, 'Прочие', 'Прочие', '<p>Прочие</p>\r\n', '', 1, 1466487051, 1, NULL, NULL, NULL, NULL),
(346, 13, 1, ' Запчасти / аксессуары', '\r\nЗапчасти / аксессуары', '<p><br />\r\nЗапчасти / аксессуары</p>\r\n', '', 1, 1466487067, 1, NULL, NULL, NULL, NULL),
(347, 11, 1, 'Автокраны', 'Автокраны', '<p>Автокраны</p>\r\n', '', 1, 1466487536, 1, NULL, NULL, NULL, NULL),
(348, 11, 1, 'Бетоновозы', 'Бетоновозы', '<p>Бетоновозы</p>\r\n', '', 1, 1466487590, 1, NULL, NULL, NULL, NULL),
(349, 11, 1, 'Бульдозеры', 'Бульдозеры', '<p>Бульдозеры</p>\r\n', '', 1, 1466487637, 1, NULL, NULL, NULL, NULL),
(350, 11, 1, 'Экскаваторы', 'Экскаваторы', '<p>Экскаваторы</p>\r\n', '', 1, 1466487770, 1, NULL, NULL, NULL, NULL),
(351, 11, 1, 'Погрузчики', 'Погрузчики', '<p>Погрузчики</p>\r\n', '', 1, 1466488152, 1, NULL, NULL, NULL, NULL),
(354, 11, 1, 'Прочие', 'Прочие', '<p>Прочие</p>\r\n', '', 1, 1466487811, 1, NULL, NULL, NULL, NULL),
(355, 11, 1, ' Запчасти / аксессуары', '\r\nЗапчасти / аксессуары', '<p><br />\r\nЗапчасти / аксессуары</p>\r\n', '', 1, 1466487834, 1, NULL, NULL, NULL, NULL),
(356, 10, 1, 'Тракторы', 'Тракторы', '<p>Тракторы</p>\r\n', '', 1, 1466490185, 1, NULL, NULL, NULL, NULL),
(357, 10, 1, 'Cеялки', 'Cеялки', '<p>Cеялки</p>\r\n', '', 1, 1466490213, 1, NULL, NULL, NULL, NULL),
(358, 10, 1, 'Культиваторы', 'Культиваторы', '<p>Культиваторы</p>\r\n', '', 1, 1466490246, 1, NULL, NULL, NULL, NULL),
(359, 10, 1, 'Комбайны', 'Комбайны', '<p>Комбайны</p>\r\n', '', 1, 1466490278, 1, NULL, NULL, NULL, NULL),
(360, 10, 1, 'Плуги', 'Плуги', '<p>Плуги</p>\r\n', '', 1, 1466490399, 1, NULL, NULL, NULL, NULL),
(361, 10, 1, 'Прочие', 'Прочие', '<p>Прочие</p>\r\n', '', 1, 1466490425, 1, NULL, NULL, NULL, NULL),
(362, 10, 1, 'Запчасти / аксессуары', 'Запчасти / аксессуары', '<p>Запчасти / аксессуары</p>\r\n', '', 1, 1466490440, 1, NULL, NULL, NULL, NULL),
(363, 50, 1, ' Пылесосы', 'Пылесосы', '<p>Пылесосы</p>\r\n', '', 1, 1466491230, 1, NULL, NULL, NULL, NULL),
(364, 50, 1, 'Стиральные машины', 'Стиральные машины', '<p>Стиральные машины</p>\r\n', '', 1, 1466491339, 1, NULL, NULL, NULL, NULL),
(366, 50, 1, 'Швейные машины', 'Швейные машины', '<p><br />\r\nШвейные машины</p>\r\n', '', 1, 1466491467, 1, NULL, NULL, NULL, NULL),
(367, 50, 1, 'Вязальные машины', 'Вязальные машины', '<p>Вязальные машины</p>\r\n', '', 1, 1466491613, 1, NULL, NULL, NULL, NULL),
(368, 50, 1, 'Утюги', 'Утюги', '<p>Утюги</p>\r\n', '', 1, 1466491651, 1, NULL, NULL, NULL, NULL),
(369, 50, 1, 'Фильтры для воды', 'Фильтры для воды', '<p>Фильтры для воды</p>\r\n', '', 1, 1466491692, 1, NULL, NULL, NULL, NULL),
(370, 50, 1, 'Прочая техника для дома', 'Прочая техника для дома', '<p>Прочая техника для дома</p>\r\n', '', 1, 1466491917, 1, NULL, NULL, NULL, NULL),
(371, 50, 1, 'Запчасти / аксессуары', 'Запчасти / аксессуары', '<p>Запчасти / аксессуары</p>\r\n', '', 1, 1466491958, 1, NULL, NULL, NULL, NULL),
(372, 51, 1, 'Микроволновые печи', 'Микроволновые печи', '<p>Микроволновые печи</p>\r\n', '', 1, 1466493490, 1, NULL, NULL, NULL, NULL),
(373, 51, 1, 'Холодильники', 'Холодильники', '<p>Холодильники</p>\r\n', '', 1, 1466493514, 1, NULL, NULL, NULL, NULL),
(374, 51, 1, 'Плиты / печи', 'Плиты / печи', '<p>Плиты / печи</p>\r\n', '', 1, 1466493535, 1, NULL, NULL, NULL, NULL),
(375, 51, 1, 'Электрочайники', 'Электрочайники', '<p>Электрочайники</p>\r\n', '', 1, 1466493554, 1, NULL, NULL, NULL, NULL),
(376, 51, 1, 'Кофеварки / кофемолки', 'Кофеварки / кофемолки', '<p>Кофеварки / кофемолки</p>\r\n', '', 1, 1466493573, 1, NULL, NULL, NULL, NULL),
(377, 51, 1, 'Кухонные комбайны и измельчители', 'Кухонные комбайны и измельчители', '<p>Кухонные комбайны и измельчители</p>\r\n', '', 1, 1466493605, 1, NULL, NULL, NULL, NULL),
(379, 51, 1, 'Пароварки, мультиварки', 'Пароварки, мультиварки', '<p>Пароварки, мультиварки</p>\r\n', '', 1, 1466493686, 1, NULL, NULL, NULL, NULL),
(380, 51, 1, 'Прочая техника для кухни', 'Прочая техника для кухни', '<p>Прочая техника для кухни</p>\r\n', '', 1, 1466493721, 1, NULL, NULL, NULL, NULL),
(381, 51, 1, 'Запчасти / аксессуары', 'Запчасти / аксессуары', '<p>Запчасти / аксессуары</p>\r\n', '', 1, 1466493744, 1, NULL, NULL, NULL, NULL),
(382, 54, 1, 'Фены', 'Фены', '<p>Фены</p>\r\n', '', 1, 1466496764, 1, NULL, NULL, NULL, NULL),
(383, 54, 1, 'Машинки для стрижки', 'Машинки для стрижки', '<p>Машинки для стрижки</p>\r\n', '', 1, 1466496811, 1, NULL, NULL, NULL, NULL),
(384, 54, 1, 'Выпрямители и щипцы для волос', 'Выпрямители и щипцы для волос', '<p>Выпрямители и щипцы для волос</p>\r\n', '', 1, 1466496851, 1, NULL, NULL, NULL, NULL),
(385, 54, 1, 'Бритвы', 'Бритвы', '<p>Бритвы</p>\r\n', '', 1, 1466496873, 1, NULL, NULL, NULL, NULL),
(386, 54, 1, 'Эпиляторы', 'Эпиляторы', '<p>Эпиляторы</p>\r\n', '', 1, 1466496907, 1, NULL, NULL, NULL, NULL),
(387, 54, 1, 'Прочие', 'Прочие', '<p>Прочие</p>\r\n', '', 1, 1466496978, 1, NULL, NULL, NULL, NULL),
(388, 59, 1, 'Праздничные украшения', 'Праздничные украшения', '<p><br />\r\nПраздничные украшения</p>\r\n', '', 1, 1466499351, 1, NULL, NULL, NULL, NULL),
(389, 59, 1, 'Часы', 'Часы', '<p>Часы</p>\r\n', '', 1, 1466499394, 1, NULL, NULL, NULL, NULL),
(390, 59, 1, 'Картины и постеры', 'Картины и постеры', '<p>Картины и постеры</p>\r\n', '', 1, 1466499435, 1, NULL, NULL, NULL, NULL),
(391, 59, 1, 'Камины', 'Камины', '<p>Камины</p>\r\n', '', 1, 1466501068, 1, NULL, NULL, NULL, NULL),
(392, 59, 1, 'Декоративные фонтаны', 'Декоративные фонтаны', '<p><br />\r\nДекоративные фонтаны</p>\r\n', '', 1, 1466501166, 1, NULL, NULL, NULL, NULL),
(393, 59, 1, 'Зеркала', 'Зеркала', '<p>Зеркала</p>\r\n', '', 1, 1466501205, 1, NULL, NULL, NULL, NULL),
(394, 59, 1, 'Люстры', 'Люстры', 'Люстры', '', 1, 1463037560, NULL, 1463234820, 1, NULL, NULL),
(395, 58, 1, 'Семена', 'Семена', '<p>Семена</p>\r\n', '', 1, 1466572116, 1, NULL, NULL, NULL, NULL),
(396, 58, 1, 'Садовая техника', 'Садовая техника', '<p>Садовая техника</p>\r\n', '', 1, 1466572144, 1, NULL, NULL, NULL, NULL),
(397, 58, 1, 'Для полива', 'Для полива', '<p>Для полива</p>', '', 1, 1466572217, 1, NULL, NULL, NULL, NULL),
(398, 58, 1, 'Инструменты', 'Инструменты', '<p>Инструменты</p>\r\n', '', 1, 1466572255, 1, NULL, NULL, NULL, NULL),
(399, 58, 1, 'Садовая химия', 'Садовая химия', '<p>Садовая химия</p>\r\n', '', 1, 1466572309, 1, NULL, NULL, NULL, NULL),
(400, 35, 1, 'Домашний текстиль', 'Домашний текстиль', '<p>Домашний текстиль</p>\r\n', '', 1, 1466573214, 1, NULL, NULL, NULL, NULL),
(401, 400, 1, 'Постельное белье', 'Постельное белье', '<p>Постельное белье</p>\r\n', '', 1, 1466573405, 1, NULL, NULL, NULL, NULL),
(402, 400, 1, 'Полотенца', 'Полотенца', '<p>Полотенца</p>\r\n', '', 1, 1466573465, 1, NULL, NULL, NULL, NULL),
(403, 400, 1, 'Пледы и покрывала', 'Пледы и покрывала', '<p>Пледы и покрывала</p>\r\n', '', 1, 1466573518, 1, NULL, NULL, NULL, NULL),
(404, 400, 1, 'Подушки и курпача', 'Подушки и курпача', '<p>Подушки и курпача</p>\r\n', '', 1, 1466573629, 1, NULL, NULL, NULL, NULL),
(405, 400, 1, 'Одеяла', 'Одеяла', '<p>Одеяла</p>\r\n', '', 1, 1466573653, 1, NULL, NULL, NULL, NULL),
(406, 400, 1, 'Кухонный текстиль', 'Кухонный текстиль', '<p>Кухонный текстиль</p>\r\n', '', 1, 1466573675, 1, NULL, NULL, NULL, NULL),
(407, 63, 1, 'Для девочек', 'Для девочек', '<p>Для девочек</p>\r\n', '', 1, 1466574083, 1, NULL, NULL, NULL, NULL),
(408, 63, 1, 'Для мальчиков', 'Для мальчиков', '<p>Для мальчиков</p>\r\n', '', 1, 1466574117, 1, NULL, NULL, NULL, NULL),
(409, 63, 1, 'Школьная одежда', 'Школьная одежда', '<p>Школьная одежда</p>\r\n', '', 1, 1466574147, 1, NULL, NULL, NULL, NULL),
(410, 63, 1, 'Одежда для новорожденных', 'Одежда для новорожденных', '<p>Одежда для новорожденных</p>\r\n', '', 1, 1466574170, 1, NULL, NULL, NULL, NULL),
(411, 74, 1, 'Подгузники и пеленки', 'Подгузники и пеленки', '<p>Подгузники и пеленки</p>\r\n', '', 1, 1466575079, 1, NULL, NULL, NULL, NULL),
(412, 74, 1, 'Все для кормления', 'Все для кормления', '<p>Все для кормления</p>\r\n', '', 1, 1466575104, 1, NULL, NULL, NULL, NULL),
(413, 74, 1, 'Детское питание', 'Детское питание', '<p>Детское питание</p>\r\n', '', 1, 1466575130, 1, NULL, NULL, NULL, NULL);
INSERT INTO `at_category` (`id`, `id_parent`, `id_menu`, `name`, `decription`, `text`, `image`, `status`, `dcreated`, `bycreated`, `dmodified`, `bymodified`, `ddeleted`, `bydeleted`) VALUES
(414, 74, 1, 'Все для купания', 'Все для купания', '<p>Все для купания</p>\r\n', '', 1, 1466575155, 1, NULL, NULL, NULL, NULL),
(417, 74, 1, 'Безопасность ребенка', 'Безопасность ребенка', '<p>Безопасность ребенка</p>\r\n', '', 1, 1466575256, 1, NULL, NULL, NULL, NULL),
(418, 74, 1, 'Бытовая химия', 'Бытовая химия', '<p>Бытовая химия</p>\r\n', '', 1, 1466575283, 1, NULL, NULL, NULL, NULL),
(419, 64, 1, 'Для девочек', 'Для девочек', '<p>Для девочек</p>\r\n', '', 1, 1466575470, 1, NULL, NULL, NULL, NULL),
(420, 64, 1, 'Для мальчиков', 'Для мальчиков', '<p>Для мальчиков</p>\r\n', '', 1, 1466575498, 1, NULL, NULL, NULL, NULL),
(421, 64, 1, 'Школьная обувь', 'Школьная обувь', '<p>Школьная обувь</p>\r\n', '', 1, 1466575526, 1, NULL, NULL, NULL, NULL),
(422, 73, 1, 'Уход и гигиена', 'Уход и гигиена', '<p>Уход и гигиена</p>\r\n', '', 1, 1466575719, 1, NULL, NULL, NULL, NULL),
(423, 73, 1, 'Белье и одежда', 'Белье и одежда', '<p>Белье и одежда</p>\r\n', '', 1, 1466575743, 1, NULL, NULL, NULL, NULL),
(424, 73, 1, 'Рюкзаки, слинги и кенгуру', 'Рюкзаки, слинги и кенгуру', '<p>Рюкзаки, слинги и кенгуру</p>\r\n', '', 1, 1466575772, 1, NULL, NULL, NULL, NULL),
(425, 73, 1, 'Молокоотсосы', 'Молокоотсосы', '<p>Молокоотсосы</p>\r\n', '', 1, 1466575810, 1, NULL, NULL, NULL, NULL),
(426, 73, 1, 'Прочие', 'Прочие', '<p>Прочие</p>\r\n', '', 1, 1466575847, 1, NULL, NULL, NULL, NULL),
(427, 68, 1, 'Игрушки для малышей', 'Игрушки для малышей', '<p>Игрушки для малышей</p>\r\n', '', 1, 1466576042, 1, NULL, NULL, NULL, NULL),
(428, 68, 1, 'Куклы и аксессуары', 'Куклы и аксессуары', '<p>Куклы и аксессуары</p>\r\n', '', 1, 1466576060, 1, NULL, NULL, NULL, NULL),
(429, 68, 1, 'Конструкторы', 'Конструкторы', '<p>Конструкторы</p>\r\n', '', 1, 1466576079, 1, NULL, NULL, NULL, NULL),
(430, 68, 1, 'Транспорт', 'Транспорт', '<p>Транспорт</p>\r\n', '', 1, 1466576099, 1, NULL, NULL, NULL, NULL),
(431, 68, 1, 'Радиоуправляемые игрушки', 'Радиоуправляемые игрушки', '<p>Радиоуправляемые игрушки</p>\r\n', '', 1, 1466576117, 1, NULL, NULL, NULL, NULL),
(432, 68, 1, 'Мягкие игрушки', 'Мягкие игрушки', '<p>Мягкие игрушки</p>\r\n', '', 1, 1466576139, 1, NULL, NULL, NULL, NULL),
(433, 68, 1, 'Прочие игрушки', 'Прочие игрушки', '<p>Прочие игрушки</p>\r\n', '', 1, 1466576170, 1, NULL, NULL, NULL, NULL),
(434, 69, 1, 'Детские велосипеды', 'Детские велосипеды', '<p>Детские велосипеды</p>\r\n', '', 1, 1466576547, 1, NULL, NULL, NULL, NULL),
(435, 69, 1, 'Каталки', 'Каталки', '<p>Каталки</p>\r\n', '', 1, 1466576576, 1, NULL, NULL, NULL, NULL),
(436, 69, 1, 'Качалки', 'Качалки', '<p>Качалки</p>\r\n', '', 1, 1466576597, 1, NULL, NULL, NULL, NULL),
(437, 69, 1, 'Электромобили', 'Электромобили', '<p>Электромобили</p>\r\n', '', 1, 1466576616, 1, NULL, NULL, NULL, NULL),
(438, 69, 1, 'Ходунки', 'Ходунки', '<p>Ходунки</p>\r\n', '', 1, 1466576644, 1, NULL, NULL, NULL, NULL),
(439, 69, 1, 'Прочие', 'Прочие', '<p>Прочие</p>\r\n', '', 1, 1466576686, 1, NULL, NULL, NULL, NULL),
(440, 122, 1, 'Грунты и грунтоочистители', 'Грунты и грунтоочистители', '<p>Грунты и грунтоочистители</p>\r\n', '', 1, 1466578485, 1, NULL, NULL, NULL, NULL),
(441, 122, 1, 'Растения', 'Растения', '<p>Растения</p>\r\n', '', 1, 1466578523, 1, NULL, NULL, NULL, NULL),
(442, 122, 1, 'Фоны и декорации', 'Фоны и декорации', '<p>Фоны и декорации</p>\r\n', '', 1, 1466578543, 1, NULL, NULL, NULL, NULL),
(443, 122, 1, 'Фильтры', 'Фильтры', '<p>Фильтры</p>\r\n', '', 1, 1466578563, 1, NULL, NULL, NULL, NULL),
(444, 122, 1, 'Оборудование СО2', 'Оборудование СО2', '<p>Оборудование СО2</p>\r\n', '', 1, 1466578585, 1, NULL, NULL, NULL, NULL),
(445, 122, 1, 'Аксессуары для аквариумов', 'Аксессуары для аквариумов', '<p>Аксессуары для аквариумов</p>\r\n', '', 1, 1466578610, 1, NULL, NULL, NULL, NULL),
(446, 84, 1, 'Сумки и рюкзаки', 'Сумки и рюкзаки', '<p>Сумки и рюкзаки</p>\r\n', '', 1, 1466585076, 1, NULL, NULL, NULL, NULL),
(447, 84, 1, 'Очки и оправы', 'Очки и оправы', '<p>Очки и оправы</p>\r\n', '', 1, 1466585099, 1, NULL, NULL, NULL, NULL),
(448, 84, 1, 'Кошельки и косметички', 'Кошельки и косметички', '<p>Кошельки и косметички</p>\r\n', '', 1, 1466585117, 1, NULL, NULL, NULL, NULL),
(449, 84, 1, 'Платки и шарфы', 'Платки и шарфы', '<p>Платки и шарфы</p>\r\n', '', 1, 1466585146, 1, NULL, NULL, NULL, NULL),
(450, 84, 1, 'Головные уборы', 'Головные уборы', '<p>Головные уборы</p>\r\n', '', 1, 1466585174, 1, NULL, NULL, NULL, NULL),
(451, 84, 1, 'Перчатки и варежки', 'Перчатки и варежки', '<p>Перчатки и варежки</p>\r\n', '', 1, 1466585197, 1, NULL, NULL, NULL, NULL),
(452, 84, 1, 'Ремни', 'Ремни', '<p>Ремни</p>\r\n', '', 1, 1466585229, 1, NULL, NULL, NULL, NULL),
(453, 84, 1, 'Зонты', 'Зонты', '<p>Зонты</p>\r\n', '', 1, 1466585246, 1, NULL, NULL, NULL, NULL),
(454, 84, 1, 'Аксессуары для волос', 'Аксессуары для волос', '<p>Аксессуары для волос</p>\r\n', '', 1, 1466585267, 1, NULL, NULL, NULL, NULL),
(455, 84, 1, 'Багаж и чемоданы', 'Багаж и чемоданы', '<p>Багаж и чемоданы</p>\r\n', '', 1, 1466585284, 1, NULL, NULL, NULL, NULL),
(456, 84, 1, 'Прочие аксессуары', 'Прочие аксессуары', '<p>Прочие аксессуары</p>\r\n', '', 1, 1466585344, 1, NULL, NULL, NULL, NULL),
(457, 77, 1, 'Верхняя одежда', 'Верхняя одежда', '<p>Верхняя одежда</p>\r\n', '', 1, 1466586171, 1, NULL, NULL, NULL, NULL),
(458, 77, 1, 'Свитеры и водолазки', 'Свитеры и водолазки', '<p>Свитеры и водолазки</p>\r\n', '', 1, 1466586197, 1, NULL, NULL, NULL, NULL),
(459, 77, 1, 'Толстовки и свитшоты', 'Толстовки и свитшоты', '<p>Толстовки и свитшоты</p>\r\n', '', 1, 1466586219, 1, NULL, NULL, NULL, NULL),
(460, 77, 1, 'Пиджаки и костюмы', 'Пиджаки и костюмы', '<p>Пиджаки и костюмы</p>\r\n', '', 1, 1466586239, 1, NULL, NULL, NULL, NULL),
(461, 77, 1, 'Джинсы и брюки', 'Джинсы и брюки', '<p>Джинсы и брюки</p>\r\n', '', 1, 1466586256, 1, NULL, NULL, NULL, NULL),
(462, 77, 1, 'Рубашки', 'Рубашки', '<p>Рубашки</p>\r\n', '', 1, 1466586289, 1, NULL, NULL, NULL, NULL),
(463, 77, 1, 'Футболки и поло', 'Футболки и поло', '<p>Футболки и поло</p>\r\n', '', 1, 1466586307, 1, NULL, NULL, NULL, NULL),
(464, 77, 1, 'Нижнее бельё', 'Нижнее бельё', '<p>Нижнее бельё</p>\r\n', '', 1, 1466586326, 1, NULL, NULL, NULL, NULL),
(465, 77, 1, 'Шорты', 'Шорты', '<p>Шорты</p>\r\n', '', 1, 1466586349, 1, NULL, NULL, NULL, NULL),
(466, 77, 1, 'Носки', 'Носки', '<p>Носки</p>\r\n', '', 1, 1466586374, 1, NULL, NULL, NULL, NULL),
(467, 85, 1, 'Кольца', 'Кольца', '<p>Кольца</p>\r\n', '', 1, 1466586772, 1, NULL, NULL, NULL, NULL),
(468, 85, 1, 'Серьги', 'Серьги', '<p>Серьги</p>\r\n', '', 1, 1466586799, 1, NULL, NULL, NULL, NULL),
(469, 85, 1, 'Подвески и кулоны', 'Подвески и кулоны', '<p>Подвески и кулоны</p>\r\n', '', 1, 1466586820, 1, NULL, NULL, NULL, NULL),
(470, 85, 1, 'Тросы', 'Тросы', '<p>Тросы</p>\r\n', '', 1, 1466586843, 1, NULL, NULL, NULL, NULL),
(471, 85, 1, 'Браслеты', 'Браслеты', '<p>Браслеты</p>\r\n', '', 1, 1466586870, 1, NULL, NULL, NULL, NULL),
(472, 85, 1, 'Ювелирные часы ', 'Ювелирные часы ', '<p>Ювелирные часы&nbsp;</p>\r\n', '', 1, 1466586892, 1, NULL, NULL, NULL, NULL),
(473, 85, 1, 'Прочие', 'Прочие', '<p>Прочие</p>\r\n', '', 1, 1466586915, 1, NULL, NULL, NULL, NULL),
(474, 83, 1, 'Мужские часы', 'Мужские часы', '<p>Мужские часы</p>\r\n', '', 1, 1466587241, 1, NULL, NULL, NULL, NULL),
(475, 83, 1, 'Женские часы', 'Женские часы', '<p>Женские часы</p>\r\n', '', 1, 1466587274, 1, NULL, NULL, NULL, NULL),
(476, 78, 1, 'Женская обувь', 'Женская обувь', '<p><br />\r\nЖенская обувь</p>\r\n', '', 1, 1466587464, 1, NULL, NULL, NULL, NULL),
(477, 78, 1, 'Мужская обувь ', 'Мужская обувь', '<p>Мужская обувь</p>\r\n', '', 1, 1466587489, 1, NULL, NULL, NULL, NULL),
(478, 78, 1, 'Обувь для спорта и отдыха', 'Обувь для спорта и отдыха', '<p>Обувь для спорта и отдыха</p>\r\n', '', 1, 1466587537, 1, NULL, NULL, NULL, NULL),
(479, 76, 1, 'Верхняя одежда', 'Верхняя одежда', '<p>Верхняя одежда</p>\r\n', '', 1, 1466590082, 1, NULL, NULL, NULL, NULL),
(480, 76, 1, 'Верхняя одежда', 'Верхняя одежда', '<p>Верхняя одежда</p>\r\n', '', 1, 1466590083, 1, NULL, NULL, NULL, NULL),
(481, 76, 1, 'Платья и сарафаны', 'Платья и сарафаны', '<p>Платья и сарафаны</p>\r\n', '', 1, 1466590104, 1, NULL, NULL, NULL, NULL),
(482, 76, 1, 'Юбки', 'Юбки', '<p>Юбки</p>\r\n', '', 1, 1466590146, 1, NULL, NULL, NULL, NULL),
(483, 76, 1, 'Блузки', 'Блузки', '<p>Блузки</p>\r\n', '', 1, 1466590163, 1, NULL, NULL, NULL, NULL),
(484, 76, 1, 'Рубашки', 'Рубашки', '<p>Рубашки</p>\r\n', '', 1, 1466590183, 1, NULL, NULL, NULL, NULL),
(485, 76, 1, 'Брюки и Джинсы', 'Брюки и Джинсы', '<p>Брюки и Джинсы</p>\r\n', '', 1, 1466590202, 1, NULL, NULL, NULL, NULL),
(486, 76, 1, 'Свитеры и водолазки', 'Свитеры и водолазки', '<p>Свитеры и водолазки</p>\r\n', '', 1, 1466590217, 1, NULL, NULL, NULL, NULL),
(487, 76, 1, 'Толстовки и свитшоты', 'Толстовки и свитшоты', '<p>Толстовки и свитшоты</p>\r\n', '', 1, 1466590242, 1, NULL, NULL, NULL, NULL),
(488, 76, 1, 'Пиджаки и костюмы', 'Пиджаки и костюмы', '<p>Пиджаки и костюмы</p>\r\n', '', 1, 1466590263, 1, NULL, NULL, NULL, NULL),
(489, 76, 1, 'Футболки, майки и поло', 'Футболки, майки и поло', '<p>Футболки, майки и поло</p>\r\n', '', 1, 1466590287, 1, NULL, NULL, NULL, NULL),
(490, 76, 1, 'Шорты', 'Шорты', '<p>Шорты</p>\r\n', '', 1, 1466590306, 1, NULL, NULL, NULL, NULL),
(491, 76, 1, 'Нижнее бельё', 'Нижнее бельё', '<p>Нижнее бельё</p>\r\n', '', 1, 1466590326, 1, NULL, NULL, NULL, NULL),
(492, 76, 1, 'Колготки и чулки', 'Колготки и чулки', '<p>Колготки и чулки</p>\r\n', '', 1, 1466590344, 1, NULL, NULL, NULL, NULL),
(493, 76, 1, 'Носки', 'Носки', '<p>Носки</p>\r\n', '', 1, 1466590375, 1, NULL, NULL, NULL, NULL),
(494, 76, 1, 'Купальники', 'Купальники', '<p>Купальники</p>\r\n', '', 1, 1466590401, 1, NULL, NULL, NULL, NULL),
(495, 76, 1, 'Прочие', 'Прочие', '<p>Прочие</p>\r\n', '', 1, 1466590421, 1, NULL, NULL, NULL, NULL),
(496, 126, 1, 'Для лица', 'Для лица', '<p>Для лица</p>\r\n', '', 1, 1466590677, 1, NULL, NULL, NULL, NULL),
(497, 126, 1, 'Для глаз', 'Для глаз', '<p>Для глаз</p>\r\n', '', 1, 1466590708, 1, NULL, NULL, NULL, NULL),
(498, 126, 1, 'Для губ', 'Для губ', '<p>Для губ</p>\r\n', '', 1, 1466590724, 1, NULL, NULL, NULL, NULL),
(499, 126, 1, 'Для ногтей', 'Для ногтей', '<p>Для ногтей</p>\r\n', '', 1, 1466590743, 1, NULL, NULL, NULL, NULL),
(500, 126, 1, 'Аксессуары', 'Аксессуары', '<p>Аксессуары</p>\r\n', '', 1, 1466590763, 1, NULL, NULL, NULL, NULL),
(501, 126, 1, 'Прочие для макияжа', 'Прочие для макияжа', '<p>Прочие для макияжа</p>\r\n', '', 1, 1466590808, 1, NULL, NULL, NULL, NULL),
(502, 130, 1, 'Женская', 'Женская', '<p>Женская</p>\r\n', '', 1, 1466590952, 1, NULL, NULL, NULL, NULL),
(503, 130, 1, 'Мужская', 'Мужская', '<p>Мужская</p>\r\n', '', 1, 1466590972, 1, NULL, NULL, NULL, NULL),
(505, 130, 1, 'Унисекс', 'Унисекс', '<p>Унисекс</p>\r\n', '', 1, 1466591005, 1, NULL, NULL, NULL, NULL),
(507, 130, 1, 'Прочие парфюмерия', 'Прочие парфюмерия', '<p>Прочие парфюмерия</p>\r\n', '', 1, 1466591078, 1, NULL, NULL, NULL, NULL),
(508, 132, 1, 'Скрабы и пилинги', 'Скрабы и пилинги', '<p>Скрабы и пилинги</p>\r\n', '', 1, 1466591254, 1, NULL, NULL, NULL, NULL),
(509, 132, 1, 'Кремы, масла, лосьоны', 'Кремы, масла, лосьоны', '<p>Кремы, масла, лосьоны</p>\r\n', '', 1, 1466591269, 1, NULL, NULL, NULL, NULL),
(510, 132, 1, 'Маски и обертывания', 'Маски и обертывания', '<p>Маски и обертывания</p>\r\n', '', 1, 1466591288, 1, NULL, NULL, NULL, NULL),
(511, 132, 1, 'Прочие для тела', 'Прочие для тела', '<p>Прочие для тела</p>\r\n', '', 1, 1466591339, 1, NULL, NULL, NULL, NULL),
(512, 129, 1, 'Очищение', 'Очищение', '<p>Очищение</p>\r\n', '', 1, 1466591437, 1, NULL, NULL, NULL, NULL),
(513, 129, 1, 'Увлажнение и питание', 'Увлажнение и питание', '<p>Увлажнение и питание</p>\r\n', '', 1, 1466591457, 1, NULL, NULL, NULL, NULL),
(514, 129, 1, 'Антивозрастной уход', 'Антивозрастной уход', '<p>Антивозрастной уход</p>\r\n', '', 1, 1466591497, 1, NULL, NULL, NULL, NULL),
(515, 129, 1, 'Солнечная линия', 'Солнечная линия', '<p>Солнечная линия</p>\r\n', '', 1, 1466591519, 1, NULL, NULL, NULL, NULL),
(516, 129, 1, 'Прочие для лица', 'Прочие для лица', '<p>Прочие для лица</p>\r\n', '', 1, 1466591553, 1, NULL, NULL, NULL, NULL),
(517, 127, 1, 'Шампуни, сухие шампуни', 'Шампуни, сухие шампуни', '<p>Шампуни, сухие шампуни</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(518, 127, 1, 'Кондиционеры и бальзамы', 'Кондиционеры и бальзамы', '<p>Кондиционеры и бальзамы</p>\r\n', '', 1, 1466591780, 1, NULL, NULL, NULL, NULL),
(519, 127, 1, 'Маски и сыворотки', 'Маски и сыворотки', '<p>Маски и сыворотки</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(520, 127, 1, 'Лаки, гели и спреи', 'Лаки, гели и спреи', '<p>Лаки, гели и спреи</p>\r\n', '', 1, 1466591829, 1, NULL, NULL, NULL, NULL),
(521, 127, 1, 'Краски и тонирование', 'Краски и тонирование', '<p>Краски и тонирование</p>\r\n', '', 1, 1466591847, 1, NULL, NULL, NULL, NULL),
(522, 127, 1, 'Защита цвета', 'Защита цвета', '<p>Защита цвета</p>\r\n', '', 1, 1466591869, 1, NULL, NULL, NULL, NULL),
(523, 127, 1, 'Аксессуары', 'Аксессуары', '<p>Аксессуары</p>\r\n', '', 1, 1466591886, 1, NULL, NULL, NULL, NULL),
(524, 127, 1, 'Прочие для волос', 'Прочие для волос', '<p>Прочие для волос</p>\r\n', '', 1, 1466591914, 1, NULL, NULL, NULL, NULL),
(525, 133, 1, 'Дезодоранты', 'Дезодоранты', '<p>Дезодоранты</p>\r\n', '', 1, 1466592107, 1, NULL, NULL, NULL, NULL),
(526, 133, 1, 'Для душа и ванны', 'Для душа и ванны', '<p>Для душа и ванны</p>\r\n', '', 1, 1466592142, 1, NULL, NULL, NULL, NULL),
(527, 133, 1, 'Для полости рта', 'Для полости рта', '<p>Для полости рта</p>\r\n', '', 1, 1466592157, 1, NULL, NULL, NULL, NULL),
(528, 133, 1, 'Депиляция и бритье', 'Депиляция и бритье', '<p>Депиляция и бритье</p>\r\n', '', 1, 1466592175, 1, NULL, NULL, NULL, NULL),
(529, 133, 1, 'Контрацепция', 'Контрацепция', '<p>Контрацепция</p>\r\n', '', 1, 1466592203, 1, NULL, NULL, NULL, NULL),
(530, 133, 1, 'Прочие для гигиены', 'Прочие для гигиены', '<p>Прочие для гигиены</p>\r\n', '', 1, 1466592230, 1, NULL, NULL, NULL, NULL),
(531, 131, 1, 'Для тела', 'Для тела', '<p>Для тела</p>\r\n', '', 1, 1466592402, 1, NULL, NULL, NULL, NULL),
(532, 131, 1, 'Для лица', 'Для лица', '<p>Для лица</p>\r\n', '', 1, 1466592418, 1, NULL, NULL, NULL, NULL),
(533, 131, 1, 'Для кожи головы и волос', 'Для кожи головы и волос', '<p>Для кожи головы и волос</p>\r\n', '', 1, 1466592438, 1, NULL, NULL, NULL, NULL),
(534, 131, 1, 'Мед.техника', 'Мед.техника', '<p>Мед.техника</p>\r\n', '', 1, 1466592453, 1, NULL, NULL, NULL, NULL),
(535, 128, 1, 'Линзы', 'Линзы', '<p>Линзы</p>\r\n', '', 1, 1466592557, 1, NULL, NULL, NULL, NULL),
(536, 128, 1, 'Аксессуары', 'Аксессуары', '<p>Аксессуары</p>\r\n', '', 1, 1466592571, 1, NULL, NULL, NULL, NULL),
(537, 141, 1, 'Минитренажеры', 'Минитренажеры', '<p>Минитренажеры</p>\r\n', '', 1, 1466592968, 1, NULL, NULL, NULL, NULL),
(538, 141, 1, 'Кистевые тренажеры', 'Кистевые тренажеры', '<p>Кистевые тренажеры</p>\r\n', '', 1, 1466592991, 1, NULL, NULL, NULL, NULL),
(539, 141, 1, 'Кардиотренажеры', 'Кардиотренажеры', '<p>Кардиотренажеры</p>\r\n', '', 1, 1466593015, 1, NULL, NULL, NULL, NULL),
(540, 141, 1, 'Силовые тренажеры', 'Силовые тренажеры', '<p>Силовые тренажеры</p>\r\n', '', 1, 1466593031, 1, NULL, NULL, NULL, NULL),
(541, 141, 1, 'Турники и брусья', 'Турники и брусья', '<p>Турники и брусья</p>\r\n', '', 1, 1466593085, 1, NULL, NULL, NULL, NULL),
(542, 141, 1, 'Диски, грифы, гантели', 'Диски, грифы, гантели', '<p>Диски, грифы, гантели</p>\r\n', '', 1, 1466593118, 1, NULL, NULL, NULL, NULL),
(543, 141, 1, 'Браслеты и гаджеты', 'Браслеты и гаджеты', '<p>Браслеты и гаджеты</p>\r\n', '', 1, 1466593154, 1, NULL, NULL, NULL, NULL),
(544, 141, 1, 'Прочие тренажеры', 'Прочие тренажеры', '<p>Прочие тренажеры</p>\r\n', '', 1, 1466593180, 1, NULL, NULL, NULL, NULL),
(545, 87, 1, 'Монеты и жетоны', 'Монеты и жетоны', '<p>Монеты и жетоны</p>\r\n', '', 1, 1466658883, 1, NULL, NULL, NULL, NULL),
(546, 87, 1, 'Марки и почтовые блоки', 'Марки и почтовые блоки', '<p>Марки и почтовые блоки</p>\r\n', '', 1, 1466658911, 1, NULL, NULL, NULL, NULL),
(547, 87, 1, 'Значки и медали', 'Значки и медали', '<p>Значки и медали</p>\r\n', '', 1, 1466658936, 1, NULL, NULL, NULL, NULL),
(548, 87, 1, 'Банкноты и ценные бумаги', 'Банкноты и ценные бумаги', '<p>Банкноты и ценные бумаги</p>\r\n', '', 1, 1466658959, 1, NULL, NULL, NULL, NULL),
(549, 87, 1, 'Игральные карты', 'Игральные карты', '<p>Игральные карты</p>\r\n', '', 1, 1466658981, 1, NULL, NULL, NULL, NULL),
(550, 87, 1, 'Прочие', 'Прочие', '<p>Прочие</p>\r\n', '', 1, 1466659028, 1, NULL, NULL, NULL, NULL),
(551, 142, 1, 'Протеины', 'Протеины', '<p>Протеины</p>\r\n', '', 1, 1466659279, 1, NULL, NULL, NULL, NULL),
(552, 142, 1, 'Креатин', 'Креатин', '<p>Креатин</p>\r\n', '', 1, 1466659295, 1, NULL, NULL, NULL, NULL),
(553, 142, 1, 'Аминокислоты', 'Аминокислоты', '<p>Аминокислоты</p>\r\n', '', 1, 1466659316, 1, NULL, NULL, NULL, NULL),
(554, 142, 1, 'ВСАА', 'ВСАА', '<p>ВСАА</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(555, 142, 1, 'Снижение веса', 'Снижение веса', '<p>Снижение веса</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(556, 142, 1, 'Витамины', 'Витамины', '<p>Витамины</p>\r\n', '', 1, 1466659384, 1, NULL, NULL, NULL, NULL),
(557, 142, 1, 'Гейнеры', 'Гейнеры', '<p>Гейнеры</p>\r\n', '', 1, 1466659402, 1, NULL, NULL, NULL, NULL),
(558, 142, 1, 'Здоровая еда', 'Здоровая еда', '<p>Здоровая еда</p>\r\n', '', 1, 1466659430, 1, NULL, NULL, NULL, NULL),
(559, 142, 1, 'Аксессуары', 'Аксессуары', '<p>Аксессуары</p>\r\n', '', 1, 1466659453, 1, NULL, NULL, NULL, NULL),
(560, 142, 1, 'Прочие', ' Прочие', '<p>Прочие</p>\r\n', '', 1, 1466659628, 1, NULL, NULL, NULL, NULL),
(561, 566, 2, 'Активный отдых', 'Активный отдых', '<p>Активный отдых</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(562, 148, 2, 'Женская одежда', 'Женская одежда', 'Женская одежда', '', 1, 1463038536, NULL, 1463234820, 1, NULL, NULL),
(563, 148, 2, 'Мужская одежда', 'Мужская одежда', 'Мужская одежда', '', 1, 1463038575, NULL, 1463234820, 1, NULL, NULL),
(564, 148, 2, 'Обувь', 'Обувь', 'Обувь', '', 1, 1463038721, NULL, 1463234820, 1, NULL, NULL),
(565, 151, 2, 'Спортивная одежда', 'Спортивная одежда', 'Спортивная одежда', '', 1, 1463038862, NULL, 1463234820, 1, NULL, NULL),
(566, 151, 2, 'Одежда для отдыха', 'Одежда для отдыха', 'Одежда для отдыха', '', 1, 1463038890, NULL, 1463234820, 1, NULL, NULL),
(567, 148, 2, 'Наручные часы', 'Наручные часы', 'Наручные часы', '', 1, 1463038964, NULL, 1463234820, 1, NULL, NULL),
(568, 148, 2, 'Аксессуары', 'Аксессуары', 'Аксессуары', '', 1, 1463038998, NULL, 1463234820, 1, NULL, NULL),
(569, 148, 2, 'Ювелирные изделия', 'Ювелирные изделия', 'Ювелирные изделия', '', 1, 1463039030, NULL, 1463234820, 1, NULL, NULL),
(570, 562, 2, 'Верхняя одежда', 'Верхняя одежда', '<p>Верхняя одежда</p>\r\n', '', 1, 1466590082, 1, NULL, NULL, NULL, NULL),
(571, 562, 2, 'Верхняя одежда', 'Верхняя одежда', '<p>Верхняя одежда</p>\r\n', '', 1, 1466590083, 1, NULL, NULL, NULL, NULL),
(572, 562, 2, 'Платья и сарафаны', 'Платья и сарафаны', '<p>Платья и сарафаны</p>\r\n', '', 1, 1466590104, 1, NULL, NULL, NULL, NULL),
(573, 562, 2, 'Юбки', 'Юбки', '<p>Юбки</p>\r\n', '', 1, 1466590146, 1, NULL, NULL, NULL, NULL),
(574, 562, 2, 'Блузки', 'Блузки', '<p>Блузки</p>\r\n', '', 1, 1466590163, 1, NULL, NULL, NULL, NULL),
(575, 562, 2, 'Рубашки', 'Рубашки', '<p>Рубашки</p>\r\n', '', 1, 1466590183, 1, NULL, NULL, NULL, NULL),
(576, 562, 2, 'Брюки и Джинсы', 'Брюки и Джинсы', '<p>Брюки и Джинсы</p>\r\n', '', 1, 1466590202, 1, NULL, NULL, NULL, NULL),
(577, 562, 2, 'Свитеры и водолазки', 'Свитеры и водолазки', '<p>Свитеры и водолазки</p>\r\n', '', 1, 1466590217, 1, NULL, NULL, NULL, NULL),
(578, 562, 2, 'Толстовки и свитшоты', 'Толстовки и свитшоты', '<p>Толстовки и свитшоты</p>\r\n', '', 1, 1466590242, 1, NULL, NULL, NULL, NULL),
(579, 562, 2, 'Пиджаки и костюмы', 'Пиджаки и костюмы', '<p>Пиджаки и костюмы</p>\r\n', '', 1, 1466590263, 1, NULL, NULL, NULL, NULL),
(580, 562, 2, 'Футболки, майки и поло', 'Футболки, майки и поло', '<p>Футболки, майки и поло</p>\r\n', '', 1, 1466590287, 1, NULL, NULL, NULL, NULL),
(581, 562, 2, 'Шорты', 'Шорты', '<p>Шорты</p>\r\n', '', 1, 1466590306, 1, NULL, NULL, NULL, NULL),
(582, 562, 2, 'Нижнее бельё', 'Нижнее бельё', '<p>Нижнее бельё</p>\r\n', '', 1, 1466590326, 1, NULL, NULL, NULL, NULL),
(583, 562, 2, 'Колготки и чулки', 'Колготки и чулки', '<p>Колготки и чулки</p>\r\n', '', 1, 1466590344, 1, NULL, NULL, NULL, NULL),
(584, 562, 2, 'Носки', 'Носки', '<p>Носки</p>\r\n', '', 1, 1466590375, 1, NULL, NULL, NULL, NULL),
(585, 562, 2, 'Купальники', 'Купальники', '<p>Купальники</p>\r\n', '', 1, 1466590401, 1, NULL, NULL, NULL, NULL),
(586, 562, 2, 'Прочие', 'Прочие', '<p>Прочие</p>\r\n', '', 1, 1466590421, 1, NULL, NULL, NULL, NULL),
(587, 563, 2, 'Верхняя одежда', 'Верхняя одежда', '<p>Верхняя одежда</p>\r\n', '', 1, 1466586171, 1, NULL, NULL, NULL, NULL),
(588, 563, 2, 'Свитеры и водолазки', 'Свитеры и водолазки', '<p>Свитеры и водолазки</p>\r\n', '', 1, 1466586197, 1, NULL, NULL, NULL, NULL),
(589, 563, 2, 'Толстовки и свитшоты', 'Толстовки и свитшоты', '<p>Толстовки и свитшоты</p>\r\n', '', 1, 1466586219, 1, NULL, NULL, NULL, NULL),
(590, 563, 2, 'Толстовки и свитшоты', 'Толстовки и свитшоты', '<p>Толстовки и свитшоты</p>\r\n', '', 1, 1466586219, 1, NULL, NULL, NULL, NULL),
(591, 563, 2, 'Пиджаки и костюмы', 'Пиджаки и костюмы', '<p>Пиджаки и костюмы</p>\r\n', '', 1, 1466586239, 1, NULL, NULL, NULL, NULL),
(592, 563, 2, 'Джинсы и брюки', 'Джинсы и брюки', '<p>Джинсы и брюки</p>\r\n', '', 1, 1466586256, 1, NULL, NULL, NULL, NULL),
(593, 563, 2, 'Рубашки', 'Рубашки', '<p>Рубашки</p>\r\n', '', 1, 1466586289, 1, NULL, NULL, NULL, NULL),
(594, 563, 2, 'Футболки и поло', 'Футболки и поло', '<p>Футболки и поло</p>\r\n', '', 1, 1466586307, 1, NULL, NULL, NULL, NULL),
(595, 563, 2, 'Нижнее бельё', 'Нижнее бельё', '<p>Нижнее бельё</p>\r\n', '', 1, 1466586326, 1, NULL, NULL, NULL, NULL),
(596, 563, 2, 'Шорты', 'Шорты', '<p>Шорты</p>\r\n', '', 1, 1466586349, 1, NULL, NULL, NULL, NULL),
(597, 563, 2, 'Купальники', 'Купальники', '<p>Купальники</p>\r\n', '', 1, 1466590401, 1, NULL, NULL, NULL, NULL),
(598, 563, 2, 'Носки', 'Носки', '<p>Носки</p>\r\n', '', 1, 1466586374, 1, NULL, NULL, NULL, NULL),
(599, 147, 2, 'Телефоны', 'Телефоны', 'Телефоны', '', 1, 1463035832, NULL, 1463234820, 1, NULL, NULL),
(600, 147, 2, 'Компьютеры', 'Компьютеры', 'Компьютеры', '', 1, 1463035860, NULL, 1463234820, 1, NULL, NULL),
(601, 147, 2, 'Тв / видеотехника', 'Тв / видеотехника', 'Тв / видеотехника', '', 1, 1463035933, NULL, 1463234820, 1, NULL, NULL),
(602, 147, 2, 'Фото / видео', 'Фото / видео', 'Фото / видео', '', 1, 1463035957, NULL, 1463234820, 1, NULL, NULL),
(603, 147, 2, 'Аудиотехника', 'Аудиотехника', 'Аудиотехника', '', 1, 1463036008, NULL, 1463234820, 1, NULL, NULL),
(604, 147, 2, 'Игры и игровые приставки', 'Игры и игровые приставки', 'Игры и игровые приставки', '', 1, 1463036082, NULL, 1463234820, 1, NULL, NULL),
(605, 147, 2, 'Техника для дома', 'Техника для дома', 'Техника для дома', '', 1, 1463036126, NULL, 1463234820, 1, NULL, NULL),
(606, 147, 2, 'Техника для кухни', 'Техника для кухни', 'Техника для кухни', '', 1, 1463036155, NULL, 1463234820, 1, NULL, NULL),
(607, 147, 2, 'Климатическое оборудование', 'Климатическое оборудование', 'Климатическое оборудование', '', 1, 1463036200, NULL, 1463234820, 1, NULL, NULL),
(608, 147, 2, 'Носители информации', 'Носители информации', 'Носители информации', '', 1, 1463036263, NULL, 1463234820, 1, NULL, NULL),
(609, 152, 2, 'Для красоты и здоровья', 'Для красоты и здоровья', 'Для красоты и здоровья', '', 1, 1463036318, NULL, 1463234820, 1, NULL, NULL),
(610, 599, 2, 'Смартфоны', 'Смартфоны', 'Смартфоны', '', 1, 1463571167, NULL, NULL, NULL, NULL, NULL),
(611, 599, 2, 'Мобильные телефоны', 'Мобильные телефоны', 'Мобильные телефоны', '', 1, 1463570302, NULL, NULL, NULL, NULL, NULL),
(612, 599, 2, 'Стационарные телефоны', 'Стационарные телефоны', 'Стационарные телефоны', '', 1, 1463570302, NULL, NULL, NULL, NULL, NULL),
(613, 600, 2, 'Настольные компьютеры', 'Настольные компьютеры', 'Настольные компьютеры', '', 1, 1463571276, NULL, NULL, NULL, NULL, NULL),
(614, 600, 2, 'Ноутбуки/нетбуки', 'Ноутбуки/нетбуки', '<p>Ноутбуки/нетбуки</p>\r\n', '', 1, 1463571475, NULL, 1466142070, 1, NULL, NULL),
(615, 600, 2, 'Планшетные компьютеры', 'Планшетные компьютеры', 'Планшетные компьютеры', '', 1, 1463571338, NULL, NULL, NULL, NULL, NULL),
(616, 600, 2, 'Моноблоки', 'Моноблоки', 'Моноблоки', '', 1, 1463571412, NULL, NULL, NULL, NULL, NULL),
(617, 600, 2, 'Мониторы', 'Мониторы', 'Мониторы', '', 1, 1463571412, NULL, NULL, NULL, NULL, NULL),
(618, 600, 2, 'Серверы', 'Серверы', 'Серверы', '', 1, 1463571696, NULL, NULL, NULL, NULL, NULL),
(619, 600, 2, 'Комплектующие', 'Комплектующие', 'Комплектующие', '', 1, 1463571374, NULL, NULL, NULL, NULL, NULL),
(620, 600, 2, 'Периферийные устройства', 'Периферийные устройства', 'Периферийные устройства', '', 1, 1463571608, NULL, 1466165092, 1, 1466165092, 1),
(621, 600, 2, 'Аксессуары', 'Аксессуары', 'Аксессуары', '', 1, 1463571568, NULL, NULL, NULL, NULL, NULL),
(622, 600, 2, 'Расходные материалы', 'Расходные материалы', 'Расходные материалы', '', 1, 1463571796, NULL, NULL, NULL, NULL, NULL),
(623, 599, 2, 'Рации и радиосвязь', 'Рации и радиосвязь', 'Рации и радиосвязь', '', 1, 1463570360, NULL, NULL, NULL, NULL, NULL),
(624, 149, 2, 'Мебель', 'Мебель', 'Мебель', '', 1, 1463037373, NULL, 1463234820, 1, NULL, NULL),
(625, 149, 2, 'Сад / огород', 'Сад / огород', 'Сад / огород', '', 1, 1463037422, NULL, 1463234820, 1, NULL, NULL),
(626, 149, 2, 'Предметы интерьера', 'Предметы интерьера', 'Предметы интерьера', '', 1, 1463037459, NULL, 1463234820, 1, NULL, NULL),
(627, 149, 2, 'Товары для строительства/ремонта', 'Товары для строительства/ремонта', 'Товары для строительства/ремонта', '', 1, 1463037560, NULL, 1463234820, 1, NULL, NULL),
(628, 149, 2, 'Инструменты', 'Инструменты', 'Инструменты', '', 1, 1463037601, NULL, 1463234820, 1, NULL, NULL),
(629, 149, 2, 'Комнатные растения', 'Комнатные растения', 'Комнатные растения', '', 1, 1463037674, NULL, 1463234820, 1, NULL, NULL),
(630, 624, 2, 'Мебель для гостиной', 'Мебель для гостиной', '<p>Мебель для гостиной</p>\r\n', '', 1, 1466152868, 1, NULL, NULL, NULL, NULL),
(631, 624, 2, 'Мебель для спальни', 'Мебель для спальни', '<p>Мебель для спальни</p>\r\n', '', 1, 1466152892, 1, NULL, NULL, NULL, NULL),
(632, 624, 2, 'Офисная мебель', 'Офисная мебель', '<p>Офисная мебель</p>\r\n', '', 1, 1466152921, 1, NULL, NULL, NULL, NULL),
(633, 624, 2, 'Кухонная мебель', 'Кухонная мебель', '<p>Кухонная мебель</p>\r\n', '', 1, 1466152955, 1, NULL, NULL, NULL, NULL),
(634, 624, 2, 'Мебель для прихожей', 'Мебель для прихожей', '<p>Мебель для прихожей</p>\r\n', '', 1, 1466152986, 1, NULL, NULL, NULL, NULL),
(635, 624, 2, 'Мебель для ванной комнаты', 'Мебель для ванной комнаты', '<p>Мебель для ванной комнаты</p>\r\n', '', 1, 1466153008, 1, NULL, NULL, NULL, NULL),
(636, 624, 2, 'Детская мебель', 'Детская мебель', '<p>Детская мебель</p>\r\n', '', 1, 1466153101, 1, NULL, NULL, NULL, NULL),
(637, 624, 2, 'Мягкая мебель', 'Мягкая мебель', '<p>Мягкая мебель</p>\r\n', '', 1, 1466153148, 1, NULL, NULL, NULL, NULL),
(638, 624, 2, 'Столы и стулья', 'Столы и стулья', '<p><span style="color:rgb(34, 34, 34); font-family:consolas,lucida console,monospace; font-size:12px">Столы и стулья</span></p>\r\n', '', 1, 1466153197, 1, NULL, NULL, NULL, NULL),
(639, 624, 2, 'Дачный мебель', 'Дачный мебель', '<p><span style="color:rgb(34, 34, 34); font-family:consolas,lucida console,monospace; font-size:12px">Дачный мебель</span></p>\r\n', '', 1, 1466153252, 1, NULL, NULL, NULL, NULL),
(640, 624, 2, 'Садовая мебель', 'Садовая мебель', '<p>Садовая мебель</p>\r\n', '', 1, 1466153378, 1, NULL, NULL, NULL, NULL),
(641, 624, 2, 'Специализированная мебель', 'Специализированная мебель', '<p>Специализированная мебель</p>\r\n', '', 1, 1466153401, 1, NULL, NULL, NULL, NULL),
(642, 624, 2, ' Матрасы', ' Матрасы', '<p><span style="color:rgb(34, 34, 34); font-family:consolas,lucida console,monospace; font-size:12px">Матрасы</span></p>\r\n', '', 1, 1466153439, 1, NULL, NULL, NULL, NULL),
(643, 150, 2, 'Детская одежда', 'Детская одежда', 'Детская одежда', '', 1, 1463038001, NULL, 1463234820, 1, NULL, NULL),
(644, 150, 2, 'Детская обувь', 'Детская обувь', 'Детская обувь', '', 1, 1463038030, NULL, 1463234820, 1, NULL, NULL),
(645, 150, 2, 'Детские коляски', 'Детские коляски', 'Детские коляски', '', 1, 1463038060, NULL, 1463234820, 1, NULL, NULL),
(646, 150, 2, 'Детские автокресла', 'Детские автокресла', 'Детские автокресла', '', 1, 1463038102, NULL, 1463234820, 1, NULL, NULL),
(647, 150, 2, 'Игрушки', 'Игрушки', 'Игрушки', '', 1, 1463038193, NULL, 1463234820, 1, NULL, NULL),
(648, 150, 2, 'Детский транспорт', 'Детский транспорт', 'Детский транспорт', '', 1, 1463038228, NULL, 1463234820, 1, NULL, NULL),
(649, 599, 2, 'Запчасти / аксессуары', 'Запчасти / аксессуары', '<p>&nbsp;</p>\r\n\r\n<p>Запчасти / аксессуары</p>\r\n', '', 1, 1466234292, 1, NULL, NULL, NULL, NULL),
(650, 150, 2, 'Кормящим и будущим мамам', 'Кормящим и будущим мамам', 'Кормящим и будущим мамам', '', 1, 1463038403, NULL, 1463234820, 1, NULL, NULL),
(651, 150, 2, 'Товары для новорожденных', 'Товары для новорожденных', 'Товары для новорожденных', '', 1, 1463038440, NULL, 1463234820, 1, NULL, NULL),
(652, 644, 2, 'Для девочек', 'Для девочек', '<p>Для девочек</p>\r\n', '', 1, 1466575470, 1, NULL, NULL, NULL, NULL),
(653, 644, 2, 'Для мальчиков', 'Для мальчиков', '<p>Для мальчиков</p>\r\n', '', 1, 1466575498, 1, NULL, NULL, NULL, NULL),
(654, 644, 2, 'Школьная обувь', 'Школьная обувь', '<p>Школьная обувь</p>\r\n', '', 1, 1466575526, 1, NULL, NULL, NULL, NULL),
(655, 152, 2, 'Макияж', 'Макияж', 'Макияж', '', 1, 1463051572, NULL, 1463234820, 1, NULL, NULL),
(656, 152, 2, 'Волосы', 'Волосы', 'Волосы', '', 1, 1463051611, NULL, 1463234820, 1, NULL, NULL),
(657, 152, 2, 'Контактные линзы', 'Контактные линзы', 'Контактные линзы', '', 1, 1463051643, NULL, 1463234820, 1, NULL, NULL),
(658, 152, 2, 'Лицо', 'Лицо', 'Лицо', '', 1, 1463051672, NULL, 1463234820, 1, NULL, NULL),
(659, 152, 2, 'Парфюмерия', 'Парфюмерия', 'Парфюмерия', '', 1, 1463051699, NULL, 1463234820, 1, NULL, NULL),
(660, 152, 2, 'Аппаратная косметология', 'Аппаратная косметология', 'Аппаратная косметология', '', 1, 1463051729, NULL, 1463234820, 1, NULL, NULL),
(661, 152, 2, 'Тело', 'Тело', 'Тело', '', 1, 1463051761, NULL, 1463234820, 1, NULL, NULL),
(662, 152, 2, 'Гигиена', 'Гигиена', 'Гигиена', '', 1, 1463051810, NULL, 1463234820, 1, NULL, NULL),
(663, 152, 2, 'Для мужчин', 'Для мужчин', 'Для мужчин', '', 1, 1463051855, NULL, 1463234820, 1, NULL, NULL),
(664, 152, 2, 'Наборы', 'Наборы', 'Наборы', '', 1, 1463051895, NULL, 1463234820, 1, NULL, NULL),
(665, 660, 2, 'Для тела', 'Для тела', '<p>Для тела</p>\r\n', '', 1, 1466592402, 1, NULL, NULL, NULL, NULL),
(666, 660, 2, 'Для лица', 'Для лица', '<p>Для лица</p>\r\n', '', 1, 1466592418, 1, NULL, NULL, NULL, NULL),
(667, 660, 2, 'Для кожи головы и волос', 'Для кожи головы и волос', '<p>Для кожи головы и волос</p>\r\n', '', 1, 1466592438, 1, NULL, NULL, NULL, NULL),
(668, 660, 2, 'Мед.техника', 'Мед.техника', '<p>Мед.техника</p>\r\n', '', 1, 1466592453, 1, NULL, NULL, NULL, NULL),
(669, 601, 2, 'Телевизоры', 'Телевизоры', 'Телевизоры', '', 1, 1463572195, NULL, NULL, NULL, NULL, NULL),
(670, 601, 2, 'Видеоплееры', 'Видеоплееры', 'Видеоплееры', '', 1, 1463572226, NULL, 1463572490, NULL, NULL, NULL),
(671, 601, 2, 'Домашние кинотеатры', 'Домашние кинотеатры', 'Домашние кинотеатры', '', 1, 1463572545, NULL, NULL, NULL, NULL, NULL),
(672, 601, 2, 'Спутниковое тв', 'Спутниковое тв', 'Спутниковое тв', '', 1, 1463572698, NULL, NULL, NULL, NULL, NULL),
(673, 601, 2, 'Проекторы', 'Проекторы', 'Проекторы', '', 1, 1463572763, NULL, NULL, NULL, NULL, NULL),
(674, 601, 2, 'Аксессуары', 'Аксессуары', 'Аксессуары', '', 1, 1466234328, 1, NULL, NULL, NULL, NULL),
(675, 602, 2, 'Цифровые фотоаппараты', 'Цифровые фотоаппараты', '<p>Цифровые фотоаппараты</p>\r\n', '', 1, 1466227389, 1, NULL, NULL, NULL, NULL),
(676, 602, 2, 'Зеркальные фотоаппараты', 'Зеркальные фотоаппараты', '<p>Зеркальные фотоаппараты</p>\r\n', '', 1, 1466227408, 1, NULL, NULL, NULL, NULL),
(677, 602, 2, 'Видеокамеры', 'Видеокамеры', '<p>Видеокамеры</p>\r\n', '', 1, 1466227431, 1, NULL, NULL, NULL, NULL),
(678, 602, 2, 'Экшн-камеры', 'Экшн-камеры', '<p>Экшн-камеры</p>\r\n', '', 1, 1466227483, 1, NULL, NULL, NULL, NULL),
(679, 602, 2, 'Цифровые фоторамки', 'Цифровые фоторамки', 'Цифровые фоторамки', '', 1, 1466234328, 1, NULL, NULL, NULL, NULL),
(680, 604, 2, 'Игровые приставки', 'Игровые приставки', '<p>Игровые приставки</p>\r\n', '', 1, 1463986203, 1, NULL, NULL, NULL, NULL),
(681, 604, 2, 'Игры для приставок', 'Игры для приставок', '<p>Игры для приставок</p>\r\n', '', 1, 1463986274, 1, NULL, NULL, NULL, NULL),
(682, 604, 2, 'Игры для ПК', 'Игры для ПК', '<p>Игры для ПК</p>', '', 1, 1463986321, 1, NULL, NULL, NULL, NULL),
(683, 604, 2, 'Аксессуары', 'Аксессуары', 'Аксессуары', '', 1, 1466234328, 1, NULL, NULL, NULL, NULL),
(684, 603, 2, 'Наушники и гарнитуры', 'Наушники и гарнитуры', '<p>Наушники и гарнитуры</p>\r\n', '', 1, 1466227086, 1, NULL, NULL, NULL, NULL),
(685, 603, 2, 'Акустические системы', 'Акустические системы', '<p>Акустические системы</p>\r\n', '', 1, 1466227113, 1, NULL, NULL, NULL, NULL),
(686, 603, 2, 'MP3-плееры и диктофоны', 'MP3-плееры и диктофоны', 'MP3-плееры и диктофоны', '', 1, 1466227147, 1, NULL, NULL, NULL, NULL),
(687, 603, 2, 'Студийное аудиотехники', 'Студийное аудиотехники', 'Студийное аудиотехники', '', 1, 1466227170, 1, NULL, NULL, NULL, NULL),
(688, 603, 2, 'Караоке и микрофоны', 'Аксессуары', 'Аксессуары', '', 1, 1466227170, 1, NULL, NULL, NULL, NULL),
(689, 606, 2, 'Микроволновые печи', 'Микроволновые печи', '<p>Микроволновые печи</p>\r\n', '', 1, 1466493490, 1, NULL, NULL, NULL, NULL),
(690, 606, 2, 'Холодильники', 'Холодильники', '<p>Холодильники</p>\r\n', '', 1, 1466493514, 1, NULL, NULL, NULL, NULL),
(691, 606, 2, 'Плиты / печи', 'Плиты / печи', '<p>Плиты / печи</p>\r\n', '', 1, 1466493535, 1, NULL, NULL, NULL, NULL),
(692, 606, 2, 'Электрочайники', 'Электрочайники', '<p>Электрочайники</p>\r\n', '', 1, 1466493554, 1, NULL, NULL, NULL, NULL),
(693, 606, 2, 'Кофеварки / кофемолки', 'Кофеварки / кофемолки', '<p>Кофеварки / кофемолки</p>\r\n', '', 1, 1466493573, 1, NULL, NULL, NULL, NULL),
(694, 606, 2, 'Кухонные комбайны и измельчители', 'Кухонные комбайны и измельчители', '<p>Кухонные комбайны и измельчители</p>\r\n', '', 1, 1466493605, 1, NULL, NULL, NULL, NULL),
(695, 606, 2, 'Пароварки, мультиварки', 'Пароварки, мультиварки', '<p>Пароварки, мультиварки</p>\r\n', '', 1, 1466493686, 1, NULL, NULL, NULL, NULL),
(696, 606, 2, 'Прочая техника для кухни', 'Прочая техника для кухни', '<p>Прочая техника для кухни</p>\r\n', '', 1, 1466493721, 1, NULL, NULL, NULL, NULL),
(697, 605, 2, ' Пылесосы', 'Пылесосы', '<p>Пылесосы</p>\r\n', '', 1, 1466491230, 1, NULL, NULL, NULL, NULL),
(698, 605, 2, 'Стиральные машины', 'Стиральные машины', '<p>Стиральные машины</p>\r\n', '', 1, 1466491339, 1, NULL, NULL, NULL, NULL),
(699, 605, 2, 'Швейные машины', 'Швейные машины', '<p><br />\r\nШвейные машины</p>\r\n', '', 1, 1466491467, 1, NULL, NULL, NULL, NULL),
(700, 605, 2, 'Вязальные машины', 'Вязальные машины', '<p>Вязальные машины</p>\r\n', '', 1, 1466491613, 1, NULL, NULL, NULL, NULL),
(701, 605, 2, 'Утюги', 'Утюги', '<p>Утюги</p>\r\n', '', 1, 1466491651, 1, NULL, NULL, NULL, NULL),
(702, 605, 2, 'Фильтры для воды', 'Фильтры для воды', '<p>Фильтры для воды</p>\r\n', '', 1, 1466491692, 1, NULL, NULL, NULL, NULL),
(703, 605, 2, 'Прочая техника для дома', 'Прочая техника для дома', '<p>Прочая техника для дома</p>\r\n', '', 1, 1466491917, 1, NULL, NULL, NULL, NULL),
(704, 608, 2, 'Внешние жесткие диски', 'Внешние жесткие диски', '<p>Внешние жесткие диски</p>\r\n', '', 1, 1466166242, 1, NULL, NULL, NULL, NULL),
(705, 608, 2, 'USB-флешки', 'USB-флешки', '<p>USB-флешки</p>\r\n', '', 1, 1466166289, 1, NULL, NULL, NULL, NULL),
(706, 608, 2, 'SSD-накопители', 'SSD-накопители', '<p>SSD-накопители</p>\r\n', '', 1, 1466166310, 1, NULL, NULL, NULL, NULL),
(707, 608, 2, 'Карты памяти', 'Карты памяти', '<p>Карты памяти</p>\r\n', '', 1, 1466166337, 1, NULL, NULL, NULL, NULL),
(708, 609, 2, 'Фены', 'Фены', '<p>Фены</p>\r\n', '', 1, 1466496764, 1, NULL, NULL, NULL, NULL),
(709, 609, 2, 'Машинки для стрижки', 'Машинки для стрижки', '<p>Машинки для стрижки</p>\r\n', '', 1, 1466496811, 1, NULL, NULL, NULL, NULL),
(710, 609, 2, 'Выпрямители и щипцы для волос', 'Выпрямители и щипцы для волос', '<p>Выпрямители и щипцы для волос</p>\r\n', '', 1, 1466496851, 1, NULL, NULL, NULL, NULL),
(711, 609, 2, 'Бритвы', 'Бритвы', '<p>Бритвы</p>\r\n', '', 1, 1466496873, 1, NULL, NULL, NULL, NULL),
(712, 609, 2, 'Эпиляторы', 'Эпиляторы', '<p>Эпиляторы</p>\r\n', '', 1, 1466496907, 1, NULL, NULL, NULL, NULL),
(714, 607, 2, 'Обогреватели', 'Обогреватели', '<p>Обогреватели</p>\r\n', '', 1, 1466166540, 1, NULL, NULL, NULL, NULL),
(715, 607, 2, 'Водонагреватели', 'Водонагреватели', '<p>Водонагреватели</p>\r\n', '', 1, 1466166557, 1, NULL, NULL, NULL, NULL),
(716, 607, 2, 'Кондиционирование', 'Кондиционирование', '<p>Кондиционирование</p>\r\n', '', 1, 1466166586, 1, NULL, NULL, NULL, NULL),
(717, 607, 2, 'Увлажнители воздуха', 'Увлажнители воздуха', '<p>Увлажнители воздуха</p>\r\n', '', 1, 1466166631, 1, NULL, NULL, NULL, NULL),
(718, 607, 2, 'Вентиляторы', 'Вентиляторы', '<p>Вентиляторы</p>\r\n', '', 1, 1466166674, 1, NULL, NULL, NULL, NULL),
(719, 564, 2, 'Женская обувь', 'Женская обувь', '<p><br />\r\nЖенская обувь</p>\r\n', '', 1, 1466587464, 1, NULL, NULL, NULL, NULL),
(720, 564, 2, 'Мужская обувь ', 'Мужская обувь', '<p>Мужская обувь</p>\r\n', '', 1, 1466587489, 1, NULL, NULL, NULL, NULL),
(721, 564, 2, 'Обувь для спорта и отдыха', 'Обувь для спорта и отдыха', '<p>Обувь для спорта и отдыха</p>\r\n', '', 1, 1466587537, 1, NULL, NULL, NULL, NULL),
(722, 568, 2, 'Сумки и рюкзаки', 'Сумки и рюкзаки', '<p>Сумки и рюкзаки</p>\r\n', '', 1, 1466585076, 1, NULL, NULL, NULL, NULL),
(723, 568, 2, 'Головные уборы', 'Головные уборы', '<p>Головные уборы</p>\r\n', '', 1, 1466585174, 1, NULL, NULL, NULL, NULL),
(724, 568, 2, 'Очки и оправы', 'Очки и оправы', '<p>Очки и оправы</p>\r\n', '', 1, 1466585099, 1, NULL, NULL, NULL, NULL),
(725, 568, 2, 'Кошельки и косметички', 'Кошельки и косметички', '<p>Кошельки и косметички</p>\r\n', '', 1, 1466585117, 1, NULL, NULL, NULL, NULL),
(726, 568, 2, 'Платки и шарфы', 'Платки и шарфы', '<p>Платки и шарфы</p>\r\n', '', 1, 1466585146, 1, NULL, NULL, NULL, NULL),
(727, 568, 2, 'Перчатки и варежки', 'Перчатки и варежки', '<p>Перчатки и варежки</p>\r\n', '', 1, 1466585197, 1, NULL, NULL, NULL, NULL),
(728, 568, 2, 'Ремни', 'Ремни', '<p>Ремни</p>\r\n', '', 1, 1466585229, 1, NULL, NULL, NULL, NULL),
(729, 568, 2, 'Зонты', 'Зонты', '<p>Зонты</p>\r\n', '', 1, 1466585246, 1, NULL, NULL, NULL, NULL),
(730, 568, 2, 'Аксессуары для волос', 'Аксессуары для волос', '<p>Аксессуары для волос</p>\r\n', '', 1, 1466585267, 1, NULL, NULL, NULL, NULL),
(731, 568, 2, 'Багаж и чемоданы', 'Багаж и чемоданы', '<p>Багаж и чемоданы</p>\r\n', '', 1, 1466585284, 1, NULL, NULL, NULL, NULL),
(732, 567, 2, 'Мужские часы', 'Мужские часы', '<p>Мужские часы</p>\r\n', '', 1, 1466587241, 1, NULL, NULL, NULL, NULL),
(733, 567, 2, 'Женские часы', 'Женские часы', '<p>Женские часы</p>\r\n', '', 1, 1466587274, 1, NULL, NULL, NULL, NULL),
(734, 569, 2, 'Кольца', 'Кольца', '<p>Кольца</p>\r\n', '', 1, 1466586772, 1, NULL, NULL, NULL, NULL),
(735, 569, 2, 'Серьги', 'Серьги', '<p>Серьги</p>\r\n', '', 1, 1466586799, 1, NULL, NULL, NULL, NULL),
(736, 569, 2, 'Подвески и кулоны', 'Подвески и кулоны', '<p>Подвески и кулоны</p>\r\n', '', 1, 1466586820, 1, NULL, NULL, NULL, NULL),
(737, 569, 2, 'Тросы', 'Тросы', '<p>Тросы</p>\r\n', '', 1, 1466586843, 1, NULL, NULL, NULL, NULL),
(738, 569, 2, 'Браслеты', 'Браслеты', '<p>Браслеты</p>\r\n', '', 1, 1466586870, 1, NULL, NULL, NULL, NULL),
(739, 569, 2, 'Ювелирные часы ', 'Ювелирные часы ', '<p>Ювелирные часы&nbsp;</p>\r\n', '', 1, 1466586892, 1, NULL, NULL, NULL, NULL),
(740, 148, 2, 'Одежда для свадьбы', 'Одежда для свадьбы', 'Одежда для свадьбы', '', 1, 1463038998, NULL, 1463234820, 1, NULL, NULL),
(741, 565, 2, 'Фитнес и тренировки', 'Фитнес и тренировки', '<p>Фитнес и тренировки</p>', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(742, 565, 2, 'Пилатес и йога', 'Пилатес и йога', '<p>Пилатес и йога</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(743, 565, 2, 'Танцы', 'Танцы', '<p>Танцы</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(744, 565, 2, 'Плавание', 'Плавание', '<p>Плавание</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(745, 565, 2, 'Бег', 'Бег', '<p>Бег</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(746, 565, 2, 'Футбол', 'Футбол', '<p>Футбол</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(747, 565, 2, 'Баскетбол', 'Баскетбол', '<p>Баскетбол</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(748, 565, 2, 'Теннис', 'Теннис', '<p>Теннис</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(749, 565, 2, 'Велоспорт', 'Велоспорт', '<p>Велоспорт</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(750, 565, 2, 'Горные лыжи', 'Горные лыжи', '<p>Горные лыжи</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(751, 566, 2, 'Туризм', 'Туризм', '<p>Туризм</p>\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(752, 566, 2, 'Пляжный отдых', 'Пляжный отдых', '<p>Пляжный отдых</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(753, 566, 2, 'Горный отдых', 'Горный отдых', '<p>Горный отдых</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(754, 566, 2, 'Охота', 'Охота', '<p>Охота</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(755, 566, 2, 'Рыбалка', 'Рыбалка', '<p>Рыбалка</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(756, 619, 2, 'Процессоры', 'Процессоры', '<p>Процессоры</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(757, 619, 2, 'Материнские платы', 'Материнские платы', '<p>Материнские платы</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(758, 619, 2, 'Оперативные памяти', 'Оперативные памяти', '<p>Оперативные памяти</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(759, 619, 2, 'Жесткие диски', 'Жесткие диски', '<p>Жесткие диски</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(760, 619, 2, 'Оптические приводы', 'Оптические приводы', '<p>Оптические приводы</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(761, 619, 2, 'Корпуса', 'Корпуса', '<p>Корпуса</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(762, 619, 2, 'Блоки питания', 'Блоки питания', '<p>Блоки питания</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(763, 619, 2, 'Звуковые карты', 'Звуковые карты', '<p>Звуковые карты</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(764, 643, 2, 'Для девочек', 'Для девочек', '<p>Для девочек</p>\r\n', '', 1, 1466574083, 1, NULL, NULL, NULL, NULL),
(765, 643, 2, 'Для мальчиков', 'Для мальчиков', '<p>Для мальчиков</p>\r\n', '', 1, 1466574117, 1, NULL, NULL, NULL, NULL),
(766, 643, 2, 'Школьная одежда', 'Школьная одежда', '<p>Школьная одежда</p>\r\n', '', 1, 1466574147, 1, NULL, NULL, NULL, NULL),
(767, 643, 2, 'Одежда для новорожденных', 'Одежда для новорожденных', '<p>Одежда для новорожденных</p>\r\n', '', 1, 1466574170, 1, NULL, NULL, NULL, NULL),
(768, 651, 2, 'Подгузники и пеленки', 'Подгузники и пеленки', '<p>Подгузники и пеленки</p>\r\n', '', 1, 1466575079, 1, NULL, NULL, NULL, NULL),
(769, 651, 2, 'Все для кормления', 'Все для кормления', '<p>Все для кормления</p>\r\n', '', 1, 1466575104, 1, NULL, NULL, NULL, NULL),
(770, 651, 2, 'Детское питание', 'Детское питание', '<p>Детское питание</p>\r\n', '', 1, 1466575130, 1, NULL, NULL, NULL, NULL),
(771, 651, 2, 'Все для купания', 'Все для купания', '<p>Все для купания</p>\r\n', '', 1, 1466575155, 1, NULL, NULL, NULL, NULL),
(772, 651, 2, 'Безопасность ребенка', 'Безопасность ребенка', '<p>Безопасность ребенка</p>\r\n', '', 1, 1466575256, 1, NULL, NULL, NULL, NULL),
(773, 651, 2, 'Бытовая химия', 'Бытовая химия', '<p>Бытовая химия</p>\r\n', '', 1, 1466575283, 1, NULL, NULL, NULL, NULL),
(774, 602, 2, 'Аксессуары', 'Аксессуары', 'Аксессуары', '', 1, 1466234328, 1, NULL, NULL, NULL, NULL),
(775, 655, 2, 'Для лица', 'Для лица', '<p>Для лица</p>\r\n', '', 1, 1466590677, 1, NULL, NULL, NULL, NULL),
(782, 151, 2, 'Велосипеды', 'Велосипеды', 'Велосипеды', '', 1, 1463033115, NULL, 1463234820, 1, NULL, NULL),
(785, 1384, 2, 'Автосигнализация', 'Автосигнализация', 'Автосигнализация', '', 1, 1464934572, 1, NULL, NULL, NULL, NULL),
(823, 12, 1, 'Катеры', 'Катеры', 'Катеры', '', 1, 1463033537, NULL, 1463234820, 1, NULL, NULL),
(824, 12, 1, 'Лотки', 'Лотки', 'Лотки', '', 1, 1463033024, NULL, 1463234820, 1, NULL, NULL),
(825, 12, 1, 'Гидроциклы', 'Гидроциклы', 'Гидроциклы', '', 1, 1463033115, NULL, 1463234820, 1, NULL, NULL),
(826, 12, 1, 'Моторы', 'Моторы', 'Моторы', '', 1, 1463033024, NULL, 1463234820, 1, NULL, NULL),
(827, 12, 1, 'Другие', 'Другие', 'Другие\r\n', '', 1, 1466227389, 1, NULL, NULL, NULL, NULL),
(828, 12, 1, 'Запчасти / аксессуары', 'Запчасти / аксессуары', '<p>Запчасти / аксессуары</p>\r\n', '', 1, 1466234347, 1, NULL, NULL, NULL, NULL),
(830, 859, 2, 'Лотки', 'Лотки', 'Лотки', '', 1, 1463033024, NULL, 1463234820, 1, NULL, NULL),
(832, 859, 2, 'Моторы', 'Моторы', 'Моторы', '', 1, 1463033024, NULL, 1463234820, 1, NULL, NULL),
(834, 82, 1, 'Для невесты', 'Для невесты', '<p>Для невесты</p>\r\n', '', 1, 1466591914, 1, NULL, NULL, NULL, NULL),
(835, 82, 1, 'Для жениха', 'Для жениха', '<p>Для жениха</p>\r\n', '', 1, 1466591869, 1, NULL, NULL, NULL, NULL),
(836, 82, 1, 'Обувь для свадьбы', 'Обувь для свадьбы', '<p>Обувь для свадьбы</p>\r\n', '', 1, 1466591886, 1, NULL, NULL, NULL, NULL),
(837, 740, 2, 'Для невесты', 'Для невесты', '<p>Для невесты</p>\r\n', '', 1, 1466591914, 1, NULL, NULL, NULL, NULL),
(838, 740, 2, 'Для жениха', 'Для жениха', '<p>Для жениха</p>\r\n', '', 1, 1466591869, 1, NULL, NULL, NULL, NULL),
(839, 740, 2, 'Обувь для свадьбы', 'Обувь для свадьбы', '<p>Обувь для свадьбы</p>\r\n', '', 1, 1466591886, 1, NULL, NULL, NULL, NULL),
(840, 61, 1, 'Набор инструментов', 'Набор инструментов', '<p>Набор инструментов</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(841, 61, 1, 'Электроинструменты', 'Электроинструменты', '<p>Электроинструменты</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(842, 61, 1, 'Силовое оборудование', 'Силовое оборудование', '<p>Силовое оборудование</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(843, 61, 1, 'Пневмоинструменты', 'Пневмоинструменты', '<p>Пневмоинструменты</p>\r\n', '', 1, 1466591780, 1, NULL, NULL, NULL, NULL),
(844, 61, 1, 'Пилы и режущие инструменты', 'Пилы и режущие инструменты', '<p>Пилы и режущие инструменты</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(845, 61, 1, 'Ручные инструменты', 'Ручные инструменты', '<p>Ручные инструменты</p>', '', 1, 1466591829, 1, NULL, NULL, NULL, NULL),
(846, 61, 1, 'Измерительные инструменты', '\r\nИзмерительные инструменты', '<p><br />\r\nИзмерительные инструменты</p>\r\n', '', 1, 1466487067, 1, NULL, NULL, NULL, NULL),
(847, 61, 1, 'Прочие', 'Прочие', '<p>Прочие</p>\r\n', '', 1, 1466591829, 1, NULL, NULL, NULL, NULL),
(848, 35, 1, 'Сантехника', 'Сантехника', '<p>Сантехника</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(849, 149, 2, 'Сантехника', 'Сантехника', '<p>Сантехника</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(851, 35, 1, 'Безопасность и защита', 'Безопасность и защита', 'Безопасность и защита', '', 1, 1463051855, NULL, 1463234820, 1, NULL, NULL),
(852, 149, 2, 'Безопасность и защита', 'Безопасность и защита', 'Безопасность и защита', '', 1, 1463032369, NULL, 1463234819, 1, NULL, NULL),
(853, 855, 2, 'Роликовые коньки', 'Роликовые коньки', 'Роликовые коньки', '', 1, 1463052007, NULL, 1463234821, 1, NULL, NULL),
(854, 151, 2, 'Спортивная обувь', 'Спортивная обувь', 'Спортивная обувь', '', 1, 1463052040, NULL, 1463234821, 1, NULL, NULL),
(855, 151, 2, 'Активный отдых', 'Активный отдых', 'Активный отдых', '', 1, 1463052144, NULL, 1463234821, 1, NULL, NULL),
(856, 151, 2, 'Тренажеры', 'Тренажеры', 'Тренажеры', '', 1, 1463052475, NULL, 1463234821, 1, NULL, NULL),
(857, 151, 2, 'Спортивное питание', 'Спортивное питание', 'Спортивное питание', '', 1, 1463052561, NULL, 1463234821, 1, NULL, NULL),
(858, 151, 2, 'Туризм', 'Туризм', 'Туризм', '', 1, 1463052630, NULL, 1463234821, 1, NULL, NULL),
(859, 151, 2, 'Рыбалка', 'Рыбалка', 'Рыбалка', '', 1, 1463052723, NULL, 1463234821, 1, NULL, NULL),
(860, 151, 2, 'Охота', 'Охота', 'Охота', '', 1, 1463387733, NULL, NULL, NULL, NULL, NULL),
(861, 151, 2, 'Стрелковый спорт', 'Стрелковый спорт', 'Стрелковый спорт', '', 1, 1463387771, NULL, NULL, NULL, NULL, NULL),
(862, 647, 2, 'Игрушки для малышей', 'Игрушки для малышей', '<p>Игрушки для малышей</p>\r\n', '', 1, 1466576042, 1, NULL, NULL, NULL, NULL),
(863, 647, 2, 'Куклы и аксессуары', 'Куклы и аксессуары', '<p>Куклы и аксессуары</p>\r\n', '', 1, 1466576060, 1, NULL, NULL, NULL, NULL),
(864, 647, 2, 'Конструкторы', 'Конструкторы', '<p>Конструкторы</p>\r\n', '', 1, 1466576079, 1, NULL, NULL, NULL, NULL),
(865, 647, 2, 'Радиоуправляемые игрушки', 'Радиоуправляемые игрушки', '<p>Радиоуправляемые игрушки</p>\r\n', '', 1, 1466576117, 1, NULL, NULL, NULL, NULL),
(866, 647, 2, 'Мягкие игрушки', 'Мягкие игрушки', '<p>Мягкие игрушки</p>\r\n', '', 1, 1466576139, 1, NULL, NULL, NULL, NULL),
(867, 648, 2, 'Детские велосипеды', 'Детские велосипеды', '<p>Детские велосипеды</p>\r\n', '', 1, 1466576547, 1, NULL, NULL, NULL, NULL),
(868, 648, 2, 'Каталки', 'Каталки', '<p>Каталки</p>\r\n', '', 1, 1466576576, 1, NULL, NULL, NULL, NULL),
(869, 648, 2, 'Электромобили', 'Электромобили', '<p>Электромобили</p>\r\n', '', 1, 1466576616, 1, NULL, NULL, NULL, NULL),
(870, 648, 2, 'Ходунки', 'Ходунки', '<p>Ходунки</p>\r\n', '', 1, 1466576644, 1, NULL, NULL, NULL, NULL),
(871, 776, 2, 'Бортовые', 'Бортовые', '<p>Бортовые</p>\r\n', '', 0, 1466485361, 1, NULL, NULL, NULL, NULL),
(872, 776, 2, 'Самосвалы', 'Самосвалы', '<p>Самосвалы</p>\r\n', '', 0, 1466485416, 1, NULL, NULL, NULL, NULL),
(873, 776, 2, 'Рефрижераторные', 'Рефрижераторные', '<p>Рефрижераторные</p>\r\n', '', 0, 1466485578, 1, NULL, NULL, NULL, NULL);
INSERT INTO `at_category` (`id`, `id_parent`, `id_menu`, `name`, `decription`, `text`, `image`, `status`, `dcreated`, `bycreated`, `dmodified`, `bymodified`, `ddeleted`, `bydeleted`) VALUES
(874, 776, 2, 'Контейнеровозы', 'Контейнеровозы', '<p>Контейнеровозы</p>\r\n', '', 0, 1466485640, 1, NULL, NULL, NULL, NULL),
(875, 776, 2, 'Автовозы', 'Автовозы', '<p>Автовозы</p>\r\n', '', 0, 1466485676, 1, NULL, NULL, NULL, NULL),
(876, 776, 2, 'Цистерновые', 'Цистерновые', '<p>Цистерновые</p>\r\n', '', 0, 1466485785, 1, NULL, NULL, NULL, NULL),
(877, 776, 2, 'Тентованные', 'Тентованные', '<p>Тентованные</p>\r\n', '', 0, 1466485842, 1, NULL, NULL, NULL, NULL),
(880, 626, 2, 'Праздничные украшения', 'Праздничные украшения', '<p><br />\r\nПраздничные украшения</p>\r\n', '', 1, 1466499351, 1, NULL, NULL, NULL, NULL),
(881, 626, 2, 'Часы', 'Часы', '<p>Часы</p>\r\n', '', 1, 1466499394, 1, NULL, NULL, NULL, NULL),
(882, 626, 2, 'Картины и постеры', 'Картины и постеры', '<p>Картины и постеры</p>\r\n', '', 1, 1466499435, 1, NULL, NULL, NULL, NULL),
(883, 626, 2, 'Камины', 'Камины', '<p>Камины</p>\r\n', '', 1, 1466501068, 1, NULL, NULL, NULL, NULL),
(884, 626, 2, 'Декоративные фонтаны', 'Декоративные фонтаны', '<p><br />\r\nДекоративные фонтаны</p>\r\n', '', 1, 1466501166, 1, NULL, NULL, NULL, NULL),
(885, 626, 2, 'Зеркала', 'Зеркала', '<p>Зеркала</p>\r\n', '', 1, 1466501205, 1, NULL, NULL, NULL, NULL),
(886, 626, 2, 'Люстры', 'Люстры', '<p>Люстры</p>\r\n', '', 1, 1466234328, 1, NULL, NULL, NULL, NULL),
(887, 626, 2, 'Элементы интерьера', 'Элементы интерьера', '<p>Элементы интерьера</p>\r\n', '', 1, 1466501246, 1, NULL, NULL, NULL, NULL),
(889, 59, 1, 'Элементы интерьера', 'Элементы интерьера', '<p>Элементы интерьера</p>\r\n', '', 1, 1466501246, 1, NULL, NULL, NULL, NULL),
(890, 625, 2, 'Ягодные деревья', 'Ягодные деревья', '<p>Ягодные деревья</p>\r\n', '', 1, 1466237836, 1, NULL, NULL, NULL, NULL),
(891, 625, 2, 'Декоративные деревья', 'Декоративные деревья', '<p>Декоративные деревья</p>\r\n', '', 1, 1466237873, 1, NULL, NULL, NULL, NULL),
(892, 625, 2, 'Газоны', 'Газоны', '<p>Газоны</p>\r\n', '', 1, 1466238057, 1, NULL, NULL, NULL, NULL),
(893, 625, 2, 'Цветы', 'Цветы', '<p>Цветы</p>\r\n', '', 1, 1466238150, 1, NULL, NULL, NULL, NULL),
(894, 625, 2, 'Семена', 'Семена', '<p>Семена</p>\r\n', '', 1, 1466572116, 1, NULL, NULL, NULL, NULL),
(895, 625, 2, 'Садовая техника', 'Садовая техника', '<p>Садовая техника</p>\r\n', '', 1, 1466572144, 1, NULL, NULL, NULL, NULL),
(896, 625, 2, 'Все для полива', 'Все для полива', '<p>Все для полива</p>\r\n', '', 1, 1466572217, 1, NULL, NULL, NULL, NULL),
(897, 625, 2, 'Инструменты', 'Инструменты', '<p>Инструменты</p>\r\n', '', 1, 1466572255, 1, NULL, NULL, NULL, NULL),
(898, 625, 2, 'Садовая химия', 'Садовая химия', '<p>Садовая химия</p>\r\n', '', 1, 1466572309, 1, NULL, NULL, NULL, NULL),
(899, 628, 2, 'Аккумуляторные инструменты', 'Аккумуляторные инструменты', '<p>Аккумуляторные инструменты</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(900, 628, 2, 'Набор инструментов', 'Набор инструментов', '<p>Набор инструментов</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(901, 628, 2, 'Электроинструменты', 'Электроинструменты', '<p>Электроинструменты</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(902, 628, 2, 'Силовое оборудование', 'Силовое оборудование', '<p>Силовое оборудование</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(903, 628, 2, 'Пневмоинструменты', 'Пневмоинструменты', '<p>Пневмоинструменты</p>\r\n', '', 1, 1466591780, 1, NULL, NULL, NULL, NULL),
(904, 628, 2, 'Пилы и режущие инструменты', 'Пилы и режущие инструменты', '<p>Пилы и режущие инструменты</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(905, 628, 2, 'Ручные инструменты', 'Ручные инструменты', '<p>Ручные инструменты</p>', '', 1, 1466591829, 1, NULL, NULL, NULL, NULL),
(906, 628, 2, 'Измерительные инструменты', '\r\nИзмерительные инструменты', '<p><br />\r\nИзмерительные инструменты</p>\r\n', '', 1, 1466487067, 1, NULL, NULL, NULL, NULL),
(907, 848, 1, 'Ванны', 'Ванны', '<p>Ванны</p>\r\n', '', 1, 1466501246, 1, NULL, NULL, NULL, NULL),
(908, 848, 1, 'Душевые кабины', 'Душевые кабины', '<p>Душевые кабины</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(909, 848, 1, 'Умывальники', 'Умывальники', '<p>Умывальники</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(910, 848, 1, 'Унитазы', 'Унитазы', '<p>Унитазы</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(911, 848, 1, 'Смесители', 'Смесители', '<p>Смесители</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(912, 848, 1, 'Мебель для ванной комнаты', 'Мебель для ванной комнаты', '<p>Мебель для ванной комнаты</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(913, 848, 1, 'Душевое оборудование', 'Душевое оборудование', '<p>Душевое оборудование</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(914, 848, 1, 'Запчасти / аксессуары', 'Запчасти / аксессуары', '<p>Запчасти / аксессуары</p>', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(915, 849, 2, 'Ванны', 'Ванны', '<p>Ванны</p>\r\n', '', 1, 1466501246, 1, NULL, NULL, NULL, NULL),
(916, 849, 2, 'Душевые кабины', 'Душевые кабины', '<p>Душевые кабины</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(917, 849, 2, 'Умывальники', 'Умывальники', '<p>Умывальники</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(918, 849, 2, 'Унитазы', 'Унитазы', '<p>Унитазы</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(919, 849, 2, 'Смесители', 'Смесители', '<p>Смесители</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(920, 849, 2, 'Мебель для ванной комнаты', 'Мебель для ванной комнаты', '<p>Мебель для ванной комнаты</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(921, 849, 2, 'Душевое оборудование', 'Душевое оборудование', '<p>Душевое оборудование</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(922, 849, 2, 'Запчасти / аксессуары', 'Запчасти / аксессуары', '<p>Запчасти / аксессуары</p>', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(923, 851, 1, 'Видеонаблюдение', 'Видеонаблюдение', '<p>Видеонаблюдение</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(924, 851, 1, 'Охранная сигнализация', 'Охранная сигнализация', '<p>Охранная сигнализация</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(925, 851, 1, 'Умный дом', 'Умный дом', '<p>Умный дом</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(926, 851, 1, 'Защита от пожара', 'Защита от пожара', '<p>Защита от пожара</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(927, 852, 2, 'Видеонаблюдение', 'Видеонаблюдение', '<p>Видеонаблюдение</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(928, 852, 2, 'Охранная сигнализация', 'Охранная сигнализация', '<p>Охранная сигнализация</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(929, 852, 2, 'Умный дом', 'Умный дом', '<p>Умный дом</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(930, 852, 2, 'Защита от пожара', 'Защита от пожара', '<p>Защита от пожара</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(931, 149, 2, 'Ковры и шкуры', 'Ковры и шкуры', '<p>Ковры и шкуры</p>\r\n', '', 1, 1463809139, 1, 1466499287, 1, NULL, NULL),
(932, 149, 2, 'Шторы, жалюзи и ткани', 'Шторы, жалюзи и ткани', '<p>Шторы, жалюзи и ткани</p>\r\n', '', 1, 1465020028, 1, NULL, NULL, NULL, NULL),
(933, 149, 2, 'Домашний текстиль', 'Домашний текстиль', '<p>Домашний текстиль</p>\r\n', '', 1, 1466573214, 1, NULL, NULL, NULL, NULL),
(934, 933, 2, 'Постельное белье', 'Постельное белье', '<p>Постельное белье</p>\r\n', '', 1, 1466573405, 1, NULL, NULL, NULL, NULL),
(935, 933, 2, 'Полотенца', 'Полотенца', '<p>Полотенца</p>\r\n', '', 1, 1466573465, 1, NULL, NULL, NULL, NULL),
(936, 933, 2, 'Пледы и покрывала', 'Пледы и покрывала', '<p>Пледы и покрывала</p>\r\n', '', 1, 1466573518, 1, NULL, NULL, NULL, NULL),
(937, 933, 2, 'Подушки и курпача', 'Подушки и курпача', '<p>Подушки и курпача</p>\r\n', '', 1, 1466573629, 1, NULL, NULL, NULL, NULL),
(938, 933, 2, 'Одеяла', 'Одеяла', '<p>Одеяла</p>\r\n', '', 1, 1466573653, 1, NULL, NULL, NULL, NULL),
(939, 933, 2, 'Кухонный текстиль', 'Кухонный текстиль', '<p>Кухонный текстиль</p>\r\n', '', 1, 1466573675, 1, NULL, NULL, NULL, NULL),
(940, 264, 1, 'Шторы', 'Шторы', '<p>Шторы</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(941, 264, 1, 'Жалюзи', 'Жалюзи', '<p>Жалюзи</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(942, 264, 1, 'Ткани', 'Ткани', '<p>Ткани</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(943, 264, 1, 'Карнизы', 'Карнизы', '<p>Карнизы</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(944, 932, 2, 'Шторы', 'Шторы', '<p>Шторы</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(945, 932, 2, 'Жалюзи', 'Жалюзи', '<p>Жалюзи</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(946, 932, 2, 'Ткани', 'Ткани', '<p>Ткани</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(947, 932, 2, 'Карнизы', 'Карнизы', '<p>Карнизы</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(948, 210, 1, 'Ковры', 'Ковры', '<p>Ковры</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(949, 210, 1, 'Паласы', 'Паласы', '<p>Паласы</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(950, 210, 1, 'Дорожки', 'Дорожки', '<p>Дорожки</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(951, 210, 1, 'Шкуры', 'Шкуры', '<p>Шкуры</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(952, 931, 2, 'Ковры', 'Ковры', '<p>Ковры</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(953, 931, 2, 'Паласы', 'Паласы', '<p>Паласы</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(954, 931, 2, 'Дорожки', 'Дорожки', '<p>Дорожки</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(955, 931, 2, 'Шкуры', 'Шкуры', '<p>Шкуры</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(956, 60, 1, 'Стройматериалы', 'Стройматериалы', '<p>Стройматериалы</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(957, 60, 1, 'Окна и двери', 'Окна и двери', '<p>Окна и двери</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(958, 60, 1, 'Ворота и решетки', 'Ворота и решетки', '<p>Ворота и решетки</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(959, 60, 1, 'Напольные покрытия', 'Напольные покрытия', '<p>Напольные покрытия</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(960, 60, 1, 'Электротовары', 'Электротовары', '<p>Электротовары</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(961, 60, 1, 'Водоснабжение и отопление', 'Водоснабжение и отопление', '<p>Водоснабжение и отопление</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(962, 60, 1, 'Скобяные изделия', 'Скобяные изделия', '<p>Скобяные изделия</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(963, 60, 1, 'Плитки и брусчатки', 'Плитки и брусчатки', '<p>Плитки и брусчатки</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(964, 627, 2, 'Стройматериалы', 'Стройматериалы', '<p>Стройматериалы</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(965, 627, 2, 'Окна и двери', 'Окна и двери', '<p>Окна и двери</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(966, 627, 2, 'Ворота и решетки', 'Ворота и решетки', '<p>Ворота и решетки</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(967, 627, 2, 'Напольные покрытия', 'Напольные покрытия', '<p>Напольные покрытия</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(968, 627, 2, 'Электротовары', 'Электротовары', '<p>Электротовары</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(969, 627, 2, 'Водоснабжение и отопление', 'Водоснабжение и отопление', '<p>Водоснабжение и отопление</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(970, 627, 2, 'Скобяные изделия', 'Скобяные изделия', '<p>Скобяные изделия</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(971, 627, 2, 'Плитки и брусчатки', 'Плитки и брусчатки', '<p>Плитки и брусчатки</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(972, 650, 2, 'Уход и гигиена', 'Уход и гигиена', '<p>Уход и гигиена</p>\r\n', '', 1, 1466575719, 1, NULL, NULL, NULL, NULL),
(973, 650, 2, 'Белье и одежда', 'Белье и одежда', '<p>Белье и одежда</p>\r\n', '', 1, 1466575743, 1, NULL, NULL, NULL, NULL),
(974, 650, 2, 'Рюкзаки, слинги и кенгуру', 'Рюкзаки, слинги и кенгуру', '<p>Рюкзаки, слинги и кенгуру</p>\r\n', '', 1, 1466575772, 1, NULL, NULL, NULL, NULL),
(975, 650, 2, 'Молокоотсосы', 'Молокоотсосы', '<p>Молокоотсосы</p>\r\n', '', 1, 1466575810, 1, NULL, NULL, NULL, NULL),
(976, 36, 1, 'Детская косметика', 'Детская косметика', 'Детская косметика', '', 1, 1463036263, NULL, 1463234820, 1, NULL, NULL),
(977, 36, 1, 'Хобби и творчество', 'Хобби и творчество', '<p>Хобби и творчество</p>\r\n', '', 1, 1466591829, 1, NULL, NULL, NULL, NULL),
(978, 36, 1, 'Ортопедические товары', 'Ортопедические товары', '<p>Ортопедические товары</p>\r\n', '', 1, 1466593015, 1, NULL, NULL, NULL, NULL),
(979, 36, 1, 'Прочие детские товары', 'Прочие детские товары', 'Прочие детские товары', '', 1, 1463038468, NULL, 1463234820, 1, NULL, NULL),
(980, 976, 1, 'Шампуни и милы', 'Шампуни и милы', '<p>Шампуни и милы</p>\r\n', '', 1, 1463032341, NULL, 1463749558, 1, NULL, NULL),
(981, 150, 2, 'Детская косметика', 'Детская косметика', 'Детская косметика', '', 1, 1463036263, NULL, 1463234820, 1, NULL, NULL),
(982, 150, 2, 'Ортопедические товары', 'Ортопедические товары', '<p>Ортопедические товары</p>\r\n', '', 1, 1466593015, 1, NULL, NULL, NULL, NULL),
(983, 981, 2, 'Шампуни и милы', 'Шампуни и милы', '<p>Шампуни и милы</p>\r\n', '', 1, 1463032341, NULL, 1463749558, 1, NULL, NULL),
(984, 976, 1, 'Косметика по уходу за кожей', 'Косметика по уходу за кожей', 'Косметика по уходу за кожей', '', 1, 1463052630, NULL, 1463234821, 1, NULL, NULL),
(985, 976, 1, 'Косметика по уходу за волосами', 'Косметика по уходу за волосами', '<p>Косметика по уходу за волосами</p>\r\n', '', 1, 1466591829, 1, NULL, NULL, NULL, NULL),
(986, 976, 1, 'Наборы', 'Наборы', '<p>Наборы</p>\r\n', '', 1, 1466591829, 1, NULL, NULL, NULL, NULL),
(987, 976, 1, 'Декоративная косметика', 'Декоративная косметика', '<p>Декоративная косметика</p>\r\n', '', 1, 1466592142, 1, NULL, NULL, NULL, NULL),
(988, 976, 1, 'Парфюмерия', 'Парфюмерия', '<p>Парфюмерия</p>\r\n', '', 1, 1466591886, 1, NULL, NULL, NULL, NULL),
(989, 976, 1, 'Аппаратная косметология', 'Аппаратная косметология', '<p>Аппаратная косметология</p>\r\n', '', 1, 1466592142, 1, NULL, NULL, NULL, NULL),
(990, 981, 2, 'Косметика по уходу за кожей', 'Косметика по уходу за кожей', 'Косметика по уходу за кожей', '', 1, 1463052630, NULL, 1463234821, 1, NULL, NULL),
(991, 981, 2, 'Косметика по уходу за волосами', 'Косметика по уходу за волосами', '<p>Косметика по уходу за волосами</p>\r\n', '', 1, 1466591829, 1, NULL, NULL, NULL, NULL),
(992, 981, 2, 'Наборы', 'Наборы', '<p>Наборы</p>\r\n', '', 1, 1466591829, 1, NULL, NULL, NULL, NULL),
(993, 981, 2, 'Декоративная косметика', 'Декоративная косметика', '<p>Декоративная косметика</p>\r\n', '', 1, 1466592142, 1, NULL, NULL, NULL, NULL),
(994, 981, 2, 'Парфюмерия', 'Парфюмерия', '<p>Парфюмерия</p>\r\n', '', 1, 1466591886, 1, NULL, NULL, NULL, NULL),
(995, 981, 2, 'Аппаратная косметология', 'Аппаратная косметология', '<p>Аппаратная косметология</p>\r\n', '', 1, 1466592142, 1, NULL, NULL, NULL, NULL),
(996, 976, 1, 'Зубные пасты и щетки', 'Зубные пасты и щетки', '<p>Зубные пасты и щетки</p>\r\n', '', 1, 1466591847, 1, NULL, NULL, NULL, NULL),
(997, 981, 2, 'Зубные пасты и щетки', 'Зубные пасты и щетки', '<p>Зубные пасты и щетки</p>\r\n', '', 1, 1466591847, 1, NULL, NULL, NULL, NULL),
(999, 150, 2, 'Хобби и творчество', 'Хобби и творчество', '<p>Хобби и творчество</p>\r\n', '', 1, 1466591829, 1, NULL, NULL, NULL, NULL),
(1000, 977, 1, 'Пазлы', 'Пазлы', '<p>Пазлы</p>\r\n', '', 1, 1466592142, 1, NULL, NULL, NULL, NULL),
(1001, 977, 1, 'Головоломки', 'Головоломки', '<p>Головоломки</p>\r\n', '', 1, 1466591914, 1, NULL, NULL, NULL, NULL),
(1002, 977, 1, 'Моделирование', 'Моделирование', '<p>Моделирование</p>\r\n', '', 1, 1466592142, 1, NULL, NULL, NULL, NULL),
(1003, 977, 1, 'Наборы для рисования', 'Наборы для рисования', '<p>Наборы для рисования</p>\r\n', '', 1, 1466592142, 1, NULL, NULL, NULL, NULL),
(1004, 977, 1, 'Наборы для лепки', 'Наборы для лепки', '<p>Наборы для лепки</p>\r\n', '', 1, 1466592418, 1, NULL, NULL, NULL, NULL),
(1005, 977, 1, 'Рукоделие', 'Рукоделие', '<p>Рукоделие</p>\r\n', '', 1, 1466592107, 1, NULL, NULL, NULL, NULL),
(1006, 977, 1, 'Мозаика', 'Мозаика', '<p>Мозаика</p>\r\n', '', 1, 1466591869, 1, NULL, NULL, NULL, NULL),
(1007, 977, 1, 'Музыка', 'Музыка', '<p>Музыка</p>\r\n', '', 1, 1466591869, 1, NULL, NULL, NULL, NULL),
(1008, 999, 2, 'Пазлы', 'Пазлы', '<p>Пазлы</p>\r\n', '', 1, 1466592142, 1, NULL, NULL, NULL, NULL),
(1009, 999, 2, 'Головоломки', 'Головоломки', '<p>Головоломки</p>\r\n', '', 1, 1466591914, 1, NULL, NULL, NULL, NULL),
(1010, 999, 2, 'Моделирование', 'Моделирование', '<p>Моделирование</p>\r\n', '', 1, 1466592142, 1, NULL, NULL, NULL, NULL),
(1011, 999, 2, 'Наборы для рисования', 'Наборы для рисования', '<p>Наборы для рисования</p>\r\n', '', 1, 1466592142, 1, NULL, NULL, NULL, NULL),
(1012, 999, 2, 'Наборы для лепки', 'Наборы для лепки', '<p>Наборы для лепки</p>\r\n', '', 1, 1466592418, 1, NULL, NULL, NULL, NULL),
(1013, 999, 2, 'Рукоделие', 'Рукоделие', '<p>Рукоделие</p>\r\n', '', 1, 1466592107, 1, NULL, NULL, NULL, NULL),
(1014, 999, 2, 'Мозаика', 'Мозаика', '<p>Мозаика</p>\r\n', '', 1, 1466591869, 1, NULL, NULL, NULL, NULL),
(1015, 999, 2, 'Музыка', 'Музыка', '<p>Музыка</p>\r\n', '', 1, 1466591869, 1, NULL, NULL, NULL, NULL),
(1016, 856, 2, 'Минитренажеры', 'Минитренажеры', '<p>Минитренажеры</p>\r\n', '', 1, 1466592968, 1, NULL, NULL, NULL, NULL),
(1017, 856, 2, 'Кистевые тренажеры', 'Кистевые тренажеры', '<p>Кистевые тренажеры</p>\r\n', '', 1, 1466592991, 1, NULL, NULL, NULL, NULL),
(1018, 856, 2, 'Кардиотренажеры', 'Кардиотренажеры', '<p>Кардиотренажеры</p>\r\n', '', 1, 1466593015, 1, NULL, NULL, NULL, NULL),
(1019, 856, 2, 'Силовые тренажеры', 'Силовые тренажеры', '<p>Силовые тренажеры</p>\r\n', '', 1, 1466593031, 1, NULL, NULL, NULL, NULL),
(1020, 856, 2, 'Турники и брусья', 'Турники и брусья', '<p>Турники и брусья</p>\r\n', '', 1, 1466593085, 1, NULL, NULL, NULL, NULL),
(1021, 856, 2, 'Диски, грифы, гантели', 'Диски, грифы, гантели', '<p>Диски, грифы, гантели</p>\r\n', '', 1, 1466593118, 1, NULL, NULL, NULL, NULL),
(1022, 856, 2, 'Браслеты и гаджеты', 'Браслеты и гаджеты', '<p>Браслеты и гаджеты</p>\r\n', '', 1, 1466593154, 1, NULL, NULL, NULL, NULL),
(1023, 857, 2, 'Протеины', 'Протеины', '<p>Протеины</p>\r\n', '', 1, 1466659279, 1, NULL, NULL, NULL, NULL),
(1024, 857, 2, 'Креатин', 'Креатин', '<p>Креатин</p>\r\n', '', 1, 1466659295, 1, NULL, NULL, NULL, NULL),
(1025, 857, 2, 'Аминокислоты', 'Аминокислоты', '<p>Аминокислоты</p>\r\n', '', 1, 1466659316, 1, NULL, NULL, NULL, NULL),
(1026, 857, 2, 'ВСАА', 'ВСАА', '<p>ВСАА</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1027, 857, 2, 'Снижение веса', 'Снижение веса', '<p>Снижение веса</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1028, 857, 2, 'Витамины', 'Витамины', '<p>Витамины</p>\r\n', '', 1, 1466659384, 1, NULL, NULL, NULL, NULL),
(1029, 857, 2, 'Гейнеры', 'Гейнеры', '<p>Гейнеры</p>\r\n', '', 1, 1466659402, 1, NULL, NULL, NULL, NULL),
(1030, 857, 2, 'Здоровая еда', 'Здоровая еда', '<p>Здоровая еда</p>\r\n', '', 1, 1466659430, 1, NULL, NULL, NULL, NULL),
(1031, 857, 2, 'Аксессуары', 'Аксессуары', '<p>Аксессуары</p>\r\n', '', 1, 1466659453, 1, NULL, NULL, NULL, NULL),
(1032, 81, 1, 'Фитнес и тренировки', 'Фитнес и тренировки', '<p>Фитнес и тренировки</p>', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1033, 81, 1, 'Пилатес и йога', 'Пилатес и йога', '<p>Пилатес и йога</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1034, 81, 1, 'Танцы', 'Танцы', '<p>Танцы</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1035, 81, 1, 'Плавание', 'Плавание', '<p>Плавание</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1036, 81, 1, 'Бег', 'Бег', '<p>Бег</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1037, 81, 1, 'Футбол', 'Футбол', '<p>Футбол</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1038, 81, 1, 'Баскетбол', 'Баскетбол', '<p>Баскетбол</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1039, 81, 1, 'Теннис', 'Теннис', '<p>Теннис</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1040, 81, 1, 'Велоспорт', 'Велоспорт', '<p>Велоспорт</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1041, 81, 1, 'Горные лыжи', 'Горные лыжи', '<p>Горные лыжи</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1042, 138, 1, 'Женская', 'Женская', '<p>Женская</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1043, 138, 1, 'Мужская', 'Мужская', '<p>Мужская</p>\r\n', '', 1, 1466592107, 1, NULL, NULL, NULL, NULL),
(1044, 138, 1, 'Детская', 'Детская', '<p>Детская</p>\r\n', '', 1, 1466592175, 1, NULL, NULL, NULL, NULL),
(1045, 854, 2, 'Женская', 'Женская', '<p>Женская</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1046, 854, 2, 'Мужская', 'Мужская', '<p>Мужская</p>\r\n', '', 1, 1466592107, 1, NULL, NULL, NULL, NULL),
(1047, 854, 2, 'Детская', 'Детская', '<p>Детская</p>\r\n', '', 1, 1466592175, 1, NULL, NULL, NULL, NULL),
(1048, 144, 1, 'Эхолоты', 'Эхолоты', '<p>Эхолоты</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1049, 144, 1, 'Катушки', 'Катушки', '<p>Катушки</p>', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1050, 144, 1, 'Удилища', 'Удилища', '<p>Удилища</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1051, 144, 1, 'Сумки', 'Сумки', '<p>Сумки</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1052, 144, 1, 'Приманки', 'Приманки', '<p>Приманки</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1053, 144, 1, 'Оснастка', 'Оснастка', '<p>Оснастка</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1054, 144, 1, 'Лески', 'Лески', '<p>Лески</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1055, 151, 2, 'Книги', 'Книги', 'Книги', '', 1, 1463388593, NULL, NULL, NULL, NULL, NULL),
(1057, 859, 2, 'Эхолоты', 'Эхолоты', '<p>Эхолоты</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1058, 859, 2, 'Катушки', 'Катушки', '<p>Катушки</p>', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1059, 859, 2, 'Удилища', 'Удилища', '<p>Удилища</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1060, 859, 2, 'Сумки', 'Сумки', '<p>Сумки</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1061, 859, 2, 'Приманки', 'Приманки', '<p>Приманки</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1062, 859, 2, 'Оснастка', 'Оснастка', '<p>Оснастка</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1063, 859, 2, 'Лески', 'Лески', '<p>Лески</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1066, 146, 1, 'Пневматическое оружие', 'Пневматическое оружие', '<p>Пневматическое оружие</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1067, 146, 1, 'Аксессуары', 'Аксессуары', '<p>Аксессуары</p>', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1068, 861, 2, 'Пневматическое оружие', 'Пневматическое оружие', '<p>Пневматическое оружие</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1069, 861, 2, 'Аксессуары', 'Аксессуары', '<p>Аксессуары</p>', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1070, 145, 1, 'Охотничье оружие', 'Охотничье оружие', '<p>Охотничье оружие</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1071, 145, 1, 'Охотничье ножи', 'Охотничье ножи', '<p>Охотничье ножи</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1072, 145, 1, 'Боеприпасы', 'Боеприпасы', '<p>Боеприпасы</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1073, 145, 1, 'Чучела, манки, капканы', 'Чучела, манки, капканы', '<p>Чучела, манки, капканы</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1074, 145, 1, 'Бинокли', 'Бинокли', '<p>Бинокли</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1075, 1387, 2, 'Экипировка, одежда и обувь', 'Экипировка, одежда и обувь', '<p>Экипировка, одежда и обувь</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1076, 1379, 2, 'Моторное масла', 'Моторное масла', '<p>Моторное масла</p>\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1077, 145, 1, 'Аксессуары', 'Аксессуары', '<p>Аксессуары</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1078, 860, 2, 'Охотничье оружие', 'Охотничье оружие', '<p>Охотничье оружие</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1079, 860, 2, 'Охотничье ножи', 'Охотничье ножи', '<p>Охотничье ножи</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1080, 860, 2, 'Боеприпасы', 'Боеприпасы', '<p>Боеприпасы</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1081, 860, 2, 'Чучела, манки, капканы', 'Чучела, манки, капканы', '<p>Чучела, манки, капканы</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1082, 860, 2, 'Бинокли', 'Бинокли', '<p>Бинокли</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1083, 149, 2, 'Ароматы для дома', 'Ароматы для дома', '<p>Ароматы для дома</p>\r\n', '', 1, 1466591042, 1, NULL, NULL, NULL, NULL),
(1084, 1321, 2, 'Торты и кондитерские изделия', 'Торты и кондитерские изделия', '<p>Торты и кондитерские изделия</p>\r\n', '', 1, 1466659384, 1, NULL, NULL, NULL, NULL),
(1085, 860, 2, 'Аксессуары', 'Аксессуары', '<p>Аксессуары</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1086, 143, 1, 'Палатки', 'Палатки', '<p>Палатки</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1087, 143, 1, 'Спальные мешки', 'Спальные мешки', '<p>Спальные мешки</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1088, 143, 1, 'Рюкзаки', 'Рюкзаки', '<p>Рюкзаки</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1089, 143, 1, 'Фонари', 'Фонари', '<p>Фонари</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1090, 143, 1, 'Горелки', 'Горелки', '<p>Горелки</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1091, 143, 1, 'Кемпинговая мебель', 'Кемпинговая мебель', '<p>Кемпинговая мебель</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1092, 143, 1, 'Термосы, ножи, посуда ', 'Термосы, ножи, посуда ', '<p>Термосы, ножи, посуда </p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1093, 858, 2, 'Палатки', 'Палатки', '<p>Палатки</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1094, 858, 2, 'Спальные мешки', 'Спальные мешки', '<p>Спальные мешки</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1095, 858, 2, 'Рюкзаки', 'Рюкзаки', '<p>Рюкзаки</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1096, 858, 2, 'Фонари', 'Фонари', '<p>Фонари</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1097, 858, 2, 'Горелки', 'Горелки', '<p>Горелки</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1098, 858, 2, 'Кемпинговая мебель', 'Кемпинговая мебель', '<p>Кемпинговая мебель</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1099, 858, 2, 'Термосы, ножи, посуда ', 'Термосы, ножи, посуда ', '<p>Термосы, ножи, посуда </p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1101, 136, 1, 'Активный отдых', 'Активный отдых', '<p>Активный отдых</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1102, 136, 1, 'Туризм', 'Туризм', '<p>Туризм</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1103, 136, 1, 'Пляжный отдых', 'Пляжный отдых', '<p>Пляжный отдых</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1104, 136, 1, 'Горный отдых', 'Горный отдых', '<p>Горный отдых</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1105, 136, 1, 'Охота', 'Охота', '<p>Охота</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1106, 136, 1, 'Рыбалка', 'Рыбалка', '<p>Рыбалка</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1107, 139, 1, 'Скейтборды', 'Скейтборды', '<p>Скейтборды</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1108, 139, 1, 'Гироскутеры', 'Гироскутеры', '<p>Гироскутеры</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1109, 139, 1, 'Самокаты', 'Самокаты', '<p>Самокаты</p>', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1110, 855, 2, 'Скейтборды', 'Скейтборды', '<p>Скейтборды</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1111, 855, 2, 'Гироскутеры', 'Гироскутеры', '<p>Гироскутеры</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1112, 855, 2, 'Самокаты', 'Самокаты', '<p>Самокаты</p>', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1113, 655, 2, 'Для глаз', 'Для глаз', '<p>Для глаз</p>\r\n', '', 1, 1466590708, 1, NULL, NULL, NULL, NULL),
(1114, 655, 2, 'Для губ', 'Для губ', '<p>Для губ</p>\r\n', '', 1, 1466590724, 1, NULL, NULL, NULL, NULL),
(1115, 655, 2, 'Аксессуары', 'Аксессуары', '<p>Аксессуары</p>\r\n', '', 1, 1466590763, 1, NULL, NULL, NULL, NULL),
(1116, 656, 2, 'Шампуни, сухие шампуни', 'Шампуни, сухие шампуни', '<p>Шампуни, сухие шампуни</p>\r\n', '', 1, 1466591764, 1, NULL, NULL, NULL, NULL),
(1117, 656, 2, 'Кондиционеры и бальзамы', 'Кондиционеры и бальзамы', '<p>Кондиционеры и бальзамы</p>\r\n', '', 1, 1466591780, 1, NULL, NULL, NULL, NULL),
(1118, 656, 2, 'Маски и сыворотки', 'Маски и сыворотки', '<p>Маски и сыворотки</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1119, 656, 2, 'Лаки, гели и спреи', 'Лаки, гели и спреи', '<p>Лаки, гели и спреи</p>\r\n', '', 1, 1466591829, 1, NULL, NULL, NULL, NULL),
(1120, 656, 2, 'Краски и тонирование', 'Краски и тонирование', '<p>Краски и тонирование</p>\r\n', '', 1, 1466591847, 1, NULL, NULL, NULL, NULL),
(1121, 656, 2, 'Защита цвета', 'Защита цвета', '<p>Защита цвета</p>\r\n', '', 1, 1466591869, 1, NULL, NULL, NULL, NULL),
(1122, 656, 2, 'Аксессуары', 'Аксессуары', '<p>Аксессуары</p>\r\n', '', 1, 1466591886, 1, NULL, NULL, NULL, NULL),
(1123, 657, 2, 'Линзы', 'Линзы', '<p>Линзы</p>\r\n', '', 1, 1466592557, 1, NULL, NULL, NULL, NULL),
(1124, 657, 2, 'Аксессуары', 'Аксессуары', '<p>Аксессуары</p>\r\n', '', 1, 1466592571, 1, NULL, NULL, NULL, NULL),
(1125, 658, 2, 'Очищение', 'Очищение', '<p>Очищение</p>\r\n', '', 1, 1466591437, 1, NULL, NULL, NULL, NULL),
(1126, 658, 2, 'Увлажнение и питание', 'Увлажнение и питание', '<p>Увлажнение и питание</p>\r\n', '', 1, 1466591457, 1, NULL, NULL, NULL, NULL),
(1127, 658, 2, 'Антивозрастной уход', 'Антивозрастной уход', '<p>Антивозрастной уход</p>\r\n', '', 1, 1466591497, 1, NULL, NULL, NULL, NULL),
(1128, 658, 2, 'Солнечная линия', 'Солнечная линия', '<p>Солнечная линия</p>\r\n', '', 1, 1466591519, 1, NULL, NULL, NULL, NULL),
(1129, 35, 1, 'Ароматы для дома', 'Ароматы для дома', '<p>Ароматы для дома</p>\r\n', '', 1, 1466591042, 1, NULL, NULL, NULL, NULL),
(1130, 659, 2, 'Женская', 'Женская', '<p>Женская</p>\r\n', '', 1, 1466590952, 1, NULL, NULL, NULL, NULL),
(1131, 659, 2, 'Мужская', 'Мужская', '<p>Мужская</p>\r\n', '', 1, 1466590972, 1, NULL, NULL, NULL, NULL),
(1132, 659, 2, 'Унисекс', 'Унисекс', '<p>Унисекс</p>\r\n', '', 1, 1466591005, 1, NULL, NULL, NULL, NULL),
(1133, 661, 2, 'Скрабы и пилинги', 'Скрабы и пилинги', '<p>Скрабы и пилинги</p>\r\n', '', 1, 1466591254, 1, NULL, NULL, NULL, NULL),
(1134, 661, 2, 'Кремы, масла, лосьоны', 'Кремы, масла, лосьоны', '<p>Кремы, масла, лосьоны</p>\r\n', '', 1, 1466591269, 1, NULL, NULL, NULL, NULL),
(1135, 661, 2, 'Маски и обертывания', 'Маски и обертывания', '<p>Маски и обертывания</p>\r\n', '', 1, 1466591288, 1, NULL, NULL, NULL, NULL),
(1136, 662, 2, 'Дезодоранты', 'Дезодоранты', '<p>Дезодоранты</p>\r\n', '', 1, 1466592107, 1, NULL, NULL, NULL, NULL),
(1137, 662, 2, 'Для душа и ванны', 'Для душа и ванны', '<p>Для душа и ванны</p>\r\n', '', 1, 1466592142, 1, NULL, NULL, NULL, NULL),
(1138, 662, 2, 'Для полости рта', 'Для полости рта', '<p>Для полости рта</p>\r\n', '', 1, 1466592157, 1, NULL, NULL, NULL, NULL),
(1139, 662, 2, 'Депиляция и бритье', 'Депиляция и бритье', '<p>Депиляция и бритье</p>\r\n', '', 1, 1466592175, 1, NULL, NULL, NULL, NULL),
(1140, 662, 2, 'Контрацепция', 'Контрацепция', '<p>Контрацепция</p>\r\n', '', 1, 1466592203, 1, NULL, NULL, NULL, NULL),
(1141, 135, 1, 'Для женщин', 'Для женщин', '<p>Для женщин</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1142, 135, 1, 'Для мужчин', 'Для мужчин', '<p>Для мужчин</p>', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1143, 664, 2, 'Для женщин', 'Для женщин', '<p>Для женщин</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1144, 664, 2, 'Для мужчин', 'Для мужчин', '<p>Для мужчин</p>', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1145, 134, 1, 'Бритва', 'Бритва', '<p>Бритва</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1146, 134, 1, 'Электробритва', 'Электробритва', '<p>Электробритва</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1147, 134, 1, 'Для бритья', 'Для бритья', '<p>Для бритья</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1148, 134, 1, 'После бритья', 'После бритья', '<p>После бритья</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1149, 663, 2, 'Бритва', 'Бритва', '<p>Бритва</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1150, 663, 2, 'Электробритва', 'Электробритва', '<p>Электробритва</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1151, 663, 2, 'Для бритья', 'Для бритья', '<p>Для бритья</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1152, 663, 2, 'После бритья', 'После бритья', '<p>После бритья</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1153, 153, 2, 'Школьные товары', 'Школьные товары', '<p>Школьные товары</p>\r\n', '', 1, 1466659295, 1, NULL, NULL, NULL, NULL),
(1154, 153, 2, 'Бумажная продукция', 'Бумажная продукция', '<p>Бумажная продукция</p>\r\n', '', 1, 1466659316, 1, NULL, NULL, NULL, NULL),
(1155, 153, 2, 'Офисные принадлежности', 'Офисные принадлежности', '<p>Офисные принадлежности</p>\r\n', '', 1, 1466659316, 1, NULL, NULL, NULL, NULL),
(1156, 153, 2, 'Письменные принадлежности', 'Письменные принадлежности', '<p>Письменные принадлежности</p>\r\n', '', 1, 1466659316, 1, NULL, NULL, NULL, NULL),
(1157, 153, 2, 'Демонстрационное оборудование', 'Демонстрационное оборудование', '<p>Демонстрационное оборудование</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1158, 153, 2, 'Чертежные принадлежности', 'Чертежные принадлежности', '<p>Чертежные принадлежности</p>\r\n', '', 1, 1466659295, 1, NULL, NULL, NULL, NULL),
(1159, 153, 2, 'Папки и портфели', 'Папки и портфели', '<p>Папки и портфели</p>\r\n', '', 1, 1466659316, 1, NULL, NULL, NULL, NULL),
(1160, 153, 2, 'Штемпельная продукция', 'Штемпельная продукция', '<p>Штемпельная продукция</p>\r\n', '', 1, 1466659295, 1, NULL, NULL, NULL, NULL),
(1161, 1153, 2, 'Пеналы', 'Пеналы', '<p>Пеналы</p>\r\n', '', 1, 1466659279, 1, NULL, NULL, NULL, NULL),
(1162, 1153, 2, 'Дневники', 'Дневники', '<p>Дневники</p>\r\n', '', 1, 1466659316, 1, NULL, NULL, NULL, NULL),
(1163, 1153, 2, 'Обложки', 'Обложки', '<p>Обложки</p>\r\n', '', 1, 1466659316, 1, NULL, NULL, NULL, NULL),
(1164, 1153, 2, 'Подставки для учебников', 'Подставки для учебников', '<p>Подставки для учебников</p>\r\n', '', 1, 1466659316, 1, NULL, NULL, NULL, NULL),
(1165, 1153, 2, 'Глобусы', 'Глобусы', '<p>Глобусы</p>\r\n', '', 1, 1466659295, 1, NULL, NULL, NULL, NULL),
(1166, 1153, 2, 'Бумага цветная, картон', 'Бумага цветная, картон', '<p>Бумага цветная, картон</p>\r\n', '', 1, 1466659316, 1, NULL, NULL, NULL, NULL),
(1167, 1153, 2, 'Альбомы', 'Альбомы', '<p>Альбомы</p>\r\n', '', 1, 1466659316, 1, NULL, NULL, NULL, NULL),
(1168, 1153, 2, 'Краски', 'Краски', '<p>Краски</p>\r\n', '', 1, 1466659316, 1, NULL, NULL, NULL, NULL),
(1169, 1153, 2, 'Пластилин', 'Пластилин', '<p>Пластилин</p>\r\n', '', 1, 1466659295, 1, NULL, NULL, NULL, NULL),
(1170, 1153, 2, 'Счетные материалы', 'Счетные материалы', '<p>Счетные материалы</p>\r\n', '', 1, 1466659316, 1, NULL, NULL, NULL, NULL),
(1171, 1153, 2, 'Канцелярские наборы', 'Канцелярские наборы', '<p>Канцелярские наборы</p>\r\n', '', 1, 1466659316, 1, NULL, NULL, NULL, NULL),
(1172, 1154, 2, 'Тетради', 'Тетради', '<p>Тетради</p>\r\n', '', 1, 1466659316, 1, NULL, NULL, NULL, NULL),
(1173, 1154, 2, 'Бумага для печати', 'Бумага для печати', '<p>Бумага для печати</p>\r\n', '', 1, 1466659316, 1, NULL, NULL, NULL, NULL),
(1174, 1154, 2, 'Блокноты и записные книжки', 'Блокноты и записные книжки', '<p>Блокноты и записные книжки</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1175, 1154, 2, 'Бумага для рисования и черчения', 'Бумага для рисования и черчения', '<p>Бумага для рисования и черчения</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1176, 1154, 2, 'Бумага масштабная и калька', 'Бумага масштабная и калька', '<p>Бумага масштабная и калька</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1177, 1154, 2, 'Бумага для заметок и закладки', 'Бумага для заметок и закладки', '<p>Бумага для заметок и закладки</p>\r\n', '', 1, 1466659316, 1, NULL, NULL, NULL, NULL),
(1178, 1154, 2, 'Календари', 'Календари', '<p>Календари</p>\r\n', '', 1, 1466659295, 1, NULL, NULL, NULL, NULL),
(1179, 1155, 2, 'Бумага для принтера', 'Бумага для принтера', '<p>Бумага для принтера</p>\r\n', '', 1, 1466659295, 1, NULL, NULL, NULL, NULL),
(1180, 1155, 2, 'Органайзеры и настольные наборы', 'Органайзеры и настольные наборы', '<p>Органайзеры и настольные наборы</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1181, 1155, 2, 'Лотки и подставки для бумаг', 'Лотки и подставки для бумаг', '<p>Лотки и подставки для бумаг</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1182, 1155, 2, 'Степлеры и дыроколы', 'Степлеры и дыроколы', '<p>Степлеры и дыроколы</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1183, 1155, 2, 'Ножи и ножницы', 'Ножи и ножницы', '<p>Ножи и ножницы</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1184, 1155, 2, 'Скрепки, скобы, кнопки и зажимы', 'Скрепки, скобы, кнопки и зажимы', '<p>Скрепки, скобы, кнопки и зажимы</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1185, 1155, 2, 'Корректоры', 'Корректоры', '<p>Корректоры</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1186, 1155, 2, 'Корзины для бумаг', 'Корзины для бумаг', '<p>Корзины для бумаг</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1187, 1155, 2, 'Клей', 'Клей', '<p>Клей</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1188, 1155, 2, 'Клейкие ленты', 'Клейкие ленты', '<p>Клейкие ленты</p>\r\n', '', 1, 1466659316, 1, NULL, NULL, NULL, NULL),
(1189, 1155, 2, 'Калькуляторы', 'Калькуляторы', '<p>Калькуляторы</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1190, 1156, 2, 'Ручки', 'Ручки', '<p>Ручки</p>\r\n', '', 1, 1466659316, 1, NULL, NULL, NULL, NULL),
(1191, 1156, 2, 'Карандаши', 'Карандаши', '<p>Карандаши</p>\r\n', '', 1, 1466659295, 1, NULL, NULL, NULL, NULL),
(1192, 1156, 2, 'Маркеры и текстовыделители', 'Маркеры и текстовыделители', '<p>Маркеры и текстовыделители</p>\r\n', '', 1, 1466659295, 1, NULL, NULL, NULL, NULL),
(1193, 1156, 2, 'Фломастеры', 'Фломастеры', '<p>Фломастеры</p>\r\n', '', 1, 1466659316, 1, NULL, NULL, NULL, NULL),
(1194, 1156, 2, 'Кисти для рисования', 'Кисти для рисования', '<p>Кисти для рисования</p>\r\n', '', 1, 1466659279, 1, NULL, NULL, NULL, NULL),
(1195, 1156, 2, 'Чернила и тушь', 'Чернила и тушь', '<p>Чернила и тушь</p>\r\n', '', 1, 1466659295, 1, NULL, NULL, NULL, NULL),
(1196, 1157, 2, 'Доски и флипчарты', 'Доски и флипчарты', '<p>Доски и флипчарты</p>\r\n', '', 1, 1466659295, 1, NULL, NULL, NULL, NULL),
(1197, 1157, 2, 'Аксессуары для досок', 'Аксессуары для досок', '<p>Аксессуары для досок</p>\r\n', '', 1, 1466659295, 1, NULL, NULL, NULL, NULL),
(1198, 1157, 2, 'Бэйджи', 'Бэйджи', '<p>Бэйджи</p>\r\n', '', 1, 1466659279, 1, NULL, NULL, NULL, NULL),
(1199, 1158, 2, 'Ластики и точилки', 'Ластики и точилки', '<p>Ластики и точилки</p>\r\n', '', 1, 1466659295, 1, NULL, NULL, NULL, NULL),
(1200, 1158, 2, 'Геометрические принадлежности', 'Геометрические принадлежности', '<p>Геометрические принадлежности</p>\r\n', '', 1, 1466659295, 1, NULL, NULL, NULL, NULL),
(1201, 1158, 2, 'Циркули и готовальни', 'Циркули и готовальни', '<p>Циркули и готовальни</p>\r\n', '', 1, 1466659295, 1, NULL, NULL, NULL, NULL),
(1202, 1158, 2, 'Тубусы и портфели', 'Тубусы и портфели', '<p>Тубусы и портфели</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1203, 1159, 2, 'Папки', 'Папки', '<p>Папки</p>\r\n', '', 1, 1466659295, 1, NULL, NULL, NULL, NULL),
(1204, 1159, 2, 'Портфели', 'Портфели', '<p>Портфели</p>\r\n', '', 1, 1466659295, 1, NULL, NULL, NULL, NULL),
(1205, 1159, 2, 'Перфофайлы и разделители', 'Перфофайлы и разделители', '<p>Перфофайлы и разделители</p>\r\n', '', 1, 1466659295, 1, NULL, NULL, NULL, NULL),
(1206, 1159, 2, 'Для хранения документов', 'Для хранения документов', '<p>Для хранения документов</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1207, 40, 1, 'Музыкальные инструменты', 'Музыкальные инструменты', '<p>Музыкальные инструменты</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1208, 151, 2, 'Музыкальные инструменты', 'Музыкальные инструменты', '<p>Музыкальные инструменты</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1209, 139, 1, 'Лыжи, сноуборды', 'Лыжи, сноуборды', '<p>Лыжи, сноуборды</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1210, 855, 2, 'Лыжи, сноуборды', 'Лыжи, сноуборды', '<p>Лыжи, сноуборды</p>\r\n', '', 1, 1466659316, 1, NULL, NULL, NULL, NULL),
(1211, 40, 1, 'Настольные игры', 'Настольные игры', '<p>Настольные игры</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1212, 151, 2, 'Настольные игры', 'Настольные игры', '<p>Настольные игры</p>\r\n', '', 1, 1466659384, 1, NULL, NULL, NULL, NULL),
(1215, 156, 2, 'Для кошек', 'Для кошек', 'Для кошек', '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(1216, 156, 2, 'Для собак', 'Для собак', '<p>Для собак</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1217, 156, 2, 'Для рыб', 'Для рыб', '<p>Для рыб</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1218, 156, 2, 'Для птиц', 'Для птиц', '<p>Для птиц</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1219, 156, 2, 'Для грызунов и мелких животных', 'Для грызунов и мелких животных', '<p>Для грызунов и мелких животных</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1220, 156, 2, 'Для рептилий', 'Для рептилий', '<p>Для рептилий</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1221, 156, 2, 'Ветеринарная аптека', 'Ветеринарная аптека', '<p>Ветеринарная аптека</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1222, 156, 2, 'Все для ухода и гигиены', 'Все для ухода и гигиены', '<p>Все для ухода и гигиены</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1223, 156, 2, 'Лежаки, домики', 'Лежаки, домики', '<p>Лежаки, домики</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1224, 1215, 2, 'Корм и аксессуары для кормления', 'Корм и аксессуары для кормления', '<p>Корм и аксессуары для кормления</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1225, 1215, 2, 'Наполнители, лотки', 'Наполнители, лотки', '<p>Наполнители, лотки</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1226, 1215, 2, 'Для прогулки', 'Для прогулки', '<p>Для прогулки</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1227, 1215, 2, 'Одежда, обувь, украшения', 'Одежда, обувь, украшения', '<p>Одежда, обувь, украшения</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1228, 1215, 2, 'Когтеточки', 'Когтеточки', '<p>Когтеточки</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1229, 1215, 2, 'Игрушки', 'Игрушки', '<p>Игрушки</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1230, 1216, 2, 'Корм и аксессуары для кормления', 'Корм и аксессуары для кормления', '<p>Корм и аксессуары для кормления</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1231, 1216, 2, 'Для прогулки', 'Для прогулки', '<p>Для прогулки</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1232, 1216, 2, 'Одежда, обувь, украшения', 'Одежда, обувь, украшения', '<p>Одежда, обувь, украшения</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1233, 1216, 2, 'Товары для ухода', 'Товары для ухода', '<p>Товары для ухода</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1234, 1216, 2, 'Игрушки', 'Игрушки', '<p>Игрушки</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1235, 1217, 2, 'Корм и аксессуары для кормления', 'Корм и аксессуары для кормления', '<p>Корм и аксессуары для кормления</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1236, 1217, 2, 'Аквариумы, Тумбы', 'Аквариумы, Тумбы', '<p>Аквариумы, Тумбы</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1237, 1217, 2, 'Декорации', 'Декорации', '<p>Декорации</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1238, 1217, 2, 'Грунты', 'Грунты', '<p>Грунты</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1239, 1217, 2, 'Химия для аквариума и пруда', 'Химия для аквариума и пруда', '<p>Химия для аквариума и пруда</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1240, 1218, 2, 'Корм и аксессуары для кормления', 'Корм и аксессуары для кормления', '<p>Корм и аксессуары для кормления</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1241, 1218, 2, 'Клетки, переноски', 'Клетки, переноски', '<p>Клетки, переноски</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1242, 1218, 2, 'Игрушки', 'Игрушки', '<p>Игрушки</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1243, 1219, 2, 'Корм и аксессуары для кормления', 'Корм и аксессуары для кормления', '<p>Корм и аксессуары для кормления</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1244, 1219, 2, 'Клетки, переноски', 'Клетки, переноски', '<p>Клетки, переноски</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1245, 1220, 2, 'Корм и аксессуары для кормления', 'Корм и аксессуары для кормления', '<p>Корм и аксессуары для кормления</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1246, 1220, 2, 'Террариумы, Тумбы', 'Террариумы, Тумбы', '<p>Террариумы, Тумбы</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1247, 1220, 2, 'Декорации, грунты, наполнители', 'Декорации, грунты, наполнители', '<p>Декорации, грунты, наполнители</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1248, 1221, 2, 'Витамины, Капли, Таблетки', 'Витамины, Капли, Таблетки', '<p>Витамины, Капли, Таблетки</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1249, 1221, 2, 'Воротники, Ошейники, Попоны, Бандажи', 'Воротники, Ошейники, Попоны, Бандажи', '<p>Воротники, Ошейники, Попоны, Бандажи</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1250, 1221, 2, 'Кремы, Мази, Лосьоны', 'Кремы, Мази, Лосьоны', '<p>Кремы, Мази, Лосьоны</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1251, 1222, 2, 'Расчески, фурминаторы, машинки для стрижки', 'Расчески, фурминаторы, машинки для стрижки', '<p>Расчески, фурминаторы, машинки для стрижки</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1252, 1222, 2, 'Ножницы, когтерезы', 'Ножницы, когтерезы', '<p>Ножницы, когтерезы</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1253, 1223, 2, 'Лежаки, Домики', 'Лежаки, Домики', '<p>Лежаки, Домики</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1254, 1223, 2, 'Переноски', 'Переноски', '<p>Переноски</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1255, 1223, 2, 'Клетки, вольеры, будки', 'Клетки, вольеры, будки', '<p>Клетки, вольеры, будки</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1256, 1222, 2, 'Шампуни, бальзамы,крема ', 'Шампуни, бальзамы,крема ', '<p>Шампуни, бальзамы,крема </p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1257, 93, 1, 'Фарфор, фаянс, керамика', 'Фарфор, фаянс, керамика', '<p>Фарфор, фаянс, керамика</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1258, 93, 1, 'Металл, мельхиор', 'Металл, мельхиор', '<p>Металл, мельхиор</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1259, 93, 1, 'Бронза, медь, латунь', 'Бронза, медь, латунь', '<p>Бронза, медь, латунь</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1260, 93, 1, 'Стекло, хрусталь', 'Стекло, хрусталь', '<p>Стекло, хрусталь</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1261, 93, 1, 'Предметы интерьера', 'Предметы интерьера', '<p>Предметы интерьера</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1262, 93, 1, 'Посуда и сервировка', 'Посуда и сервировка', '<p>Посуда и сервировка</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1263, 93, 1, 'Галантерея', 'Галантерея', '<p>Галантерея</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1264, 93, 1, 'Мебель', 'Мебель', '<p>Мебель</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1265, 93, 1, 'Предметы культа', 'Предметы культа', '<p>Предметы культа</p>\r\n', '', 1, 1466659384, 1, NULL, NULL, NULL, NULL),
(1266, 93, 1, 'Приборы и инструменты', 'Приборы и инструменты', '<p>Приборы и инструменты</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1267, 90, 1, 'Открытки', 'Открытки', 'Открытки', '', 1, 1463050129, NULL, 1463234820, 1, NULL, NULL),
(1268, 90, 1, 'Калейдоскопы', 'Калейдоскопы', '<p>Калейдоскопы</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1269, 90, 1, 'Дивеевские иконы', 'Дивеевские иконы', '<p>Дивеевские иконы</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1270, 90, 1, 'Матрёшки', 'Матрёшки', '<p>Матрёшки</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1271, 90, 1, 'Декоративные подушки', 'Декоративные подушки', '<p>Декоративные подушки</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1272, 90, 1, 'Галантерея', 'Галантерея', '<p>Галантерея</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1273, 90, 1, 'Шкатулки', 'Шкатулки', '<p>Шкатулки</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1274, 90, 1, 'Ёлочные игрушки', 'Ёлочные игрушки', '<p>Ёлочные игрушки</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1275, 88, 1, 'Картины', 'Картины', '<p>Картины</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1276, 88, 1, 'Статуэтки', 'Статуэтки', '<p>Статуэтки</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1277, 88, 1, 'Скульптура', 'Скульптура', '<p>Скульптура</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1278, 88, 1, 'Вазы', 'Вазы', '<p>Вазы</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1279, 88, 1, 'Бронза', 'Бронза', '<p>Бронза</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1280, 92, 1, 'Фарфор, фаянс, керамика', 'Фарфор, фаянс, керамика', '<p>Фарфор, фаянс, керамика</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1281, 92, 1, 'Металл, мельхиор', 'Металл, мельхиор', '<p>Металл, мельхиор</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL);
INSERT INTO `at_category` (`id`, `id_parent`, `id_menu`, `name`, `decription`, `text`, `image`, `status`, `dcreated`, `bycreated`, `dmodified`, `bymodified`, `ddeleted`, `bydeleted`) VALUES
(1282, 92, 1, 'Бронза, медь, латунь', 'Бронза, медь, латунь', '<p>Бронза, медь, латунь</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1283, 92, 1, 'Стекло, хрусталь', 'Стекло, хрусталь', '<p>Стекло, хрусталь</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1284, 92, 1, 'Предметы интерьера', 'Предметы интерьера', '<p>Предметы интерьера</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1285, 92, 1, 'Посуда и сервировка', 'Посуда и сервировка', '<p>Посуда и сервировка</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1286, 92, 1, 'Галантерея', 'Галантерея', '<p>Галантерея</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1287, 92, 1, 'Игрушки', 'Игрушки', '<p>Игрушки</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1288, 92, 1, 'Товары для курения', 'Товары для курения', '<p>Товары для курения</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1289, 92, 1, 'Предметы культа', 'Предметы культа', '<p>Предметы культа</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1290, 92, 1, 'Приборы и инструменты', 'Приборы и инструменты', '<p>Приборы и инструменты</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1291, 91, 1, 'Авторская бижутерия', 'Авторская бижутерия', '<p>Авторская бижутерия</p>\r\n', '', 1, 1466659316, 1, NULL, NULL, NULL, NULL),
(1292, 91, 1, 'Винтажная бижутерия', 'Винтажная бижутерия', '<p>Винтажная бижутерия</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1293, 91, 1, 'Украшения из натуральных камней', 'Украшения из натуральных камней', '<p>Украшения из натуральных камней</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1294, 91, 1, 'Аксессуары для волос', 'Аксессуары для волос', '<p>Аксессуары для волос</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1295, 91, 1, 'Часы наручные, карманные', 'Часы наручные, карманные', '<p>Часы наручные, карманные</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1296, 91, 1, 'Шкатулки для украшений', 'Шкатулки для украшений', '<p>Шкатулки для украшений</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1297, 86, 1, 'Художественная литература', 'Художественная литература', '<p>Художественная литература</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1298, 86, 1, 'Искусство. Культура', 'Искусство. Культура', '<p>Искусство. Культура</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1299, 86, 1, 'Гуманитарные науки', 'Гуманитарные науки', '<p>Гуманитарные науки</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1300, 86, 1, 'Книги по истории', 'Книги по истории', '<p>Книги по истории</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1301, 86, 1, 'Путешествия, хобби', 'Путешествия, хобби', '<p>Путешествия, хобби</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1302, 86, 1, 'Периодические издания', 'Периодические издания', '<p>Периодические издания</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1303, 41, 1, 'Гравюры и открытки', 'Гравюры и открытки', '<p>Гравюры и открытки</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1304, 1303, 1, 'Гравюры', 'Гравюры', '<p>Гравюры</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1305, 1303, 1, 'Литографии', 'Литографии', '<p>Литографии</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1306, 1303, 1, 'Географические карты', 'Географические карты', '<p>Географические карты</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1307, 1303, 1, 'Открытки', 'Открытки', '<p>Открытки</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1308, 1303, 1, 'Фотографии', 'Фотографии', '<p>Фотографии</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1309, 43, 1, 'Для кошек', 'Для кошек', 'Для кошек', '', 1, NULL, NULL, NULL, NULL, NULL, NULL),
(1310, 43, 1, 'Для собак', 'Для собак', '<p>Для собак</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1311, 43, 1, 'Для рыб', 'Для рыб', '<p>Для рыб</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1312, 43, 1, 'Для птиц', 'Для птиц', '<p>Для птиц</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1313, 43, 1, 'Для грызунов и мелких животных', 'Для грызунов и мелких животных', '<p>Для грызунов и мелких животных</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1314, 43, 1, 'Для рептилий', 'Для рептилий', '<p>Для рептилий</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1315, 43, 1, 'Ветеринарная аптека', 'Ветеринарная аптека', '<p>Ветеринарная аптека</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1316, 43, 1, 'Все для ухода и гигиены', 'Все для ухода и гигиены', '<p>Все для ухода и гигиены</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1317, 43, 1, 'Лежаки, домики', 'Лежаки, домики', '<p>Лежаки, домики</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1318, 155, 2, 'Чай', 'Чай', '<p>Чай</p>\r\n', '', 1, 1466659430, 1, NULL, NULL, NULL, NULL),
(1319, 155, 2, 'Кофе', 'Кофе', '<p>Кофе</p>\r\n', '', 1, 1466659384, 1, NULL, NULL, NULL, NULL),
(1320, 155, 2, 'Напитки', 'Напитки', '<p>Напитки</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1321, 155, 2, 'Вкусности и Сладости', 'Вкусности и Сладости', '<p>Вкусности и Сладости</p>\r\n', '', 1, 1466659384, 1, NULL, NULL, NULL, NULL),
(1322, 155, 2, 'Макаронные изделия', 'Макаронные изделия', '<p>Макаронные изделия</p>\r\n', '', 1, 1466659384, 1, NULL, NULL, NULL, NULL),
(1323, 155, 2, 'Крупы, зерновые и бобовые культуры', 'Крупы, зерновые и бобовые культуры', '<p>Крупы, зерновые и бобовые культуры</p>\r\n', '', 1, 1466659384, 1, NULL, NULL, NULL, NULL),
(1324, 155, 2, 'Мука и отруби', 'Мука и отруби', '<p>Мука и отруби</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1325, 155, 2, 'Здоровое питание', 'Здоровое питание', '<p>Здоровое питание</p>\r\n', '', 1, 1466659384, 1, NULL, NULL, NULL, NULL),
(1326, 155, 2, 'Сухие завтраки, мюсли, хлопья', 'Сухие завтраки, мюсли, хлопья', '<p>Сухие завтраки, мюсли, хлопья</p>\r\n', '', 1, 1466659384, 1, NULL, NULL, NULL, NULL),
(1327, 155, 2, 'Масла, соусы, уксус', 'Масла, соусы, уксус', '<p>Масла, соусы, уксус</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1328, 155, 2, 'Приправы, специи', 'Приправы, специи', '<p>Приправы, специи</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1329, 155, 2, 'Орехи, ягоды, сухофрукты', 'Орехи, ягоды, сухофрукты', '<p>Орехи, ягоды, сухофрукты</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1330, 155, 2, 'Чипсы и Снеки', 'Чипсы и Снеки', '<p>Чипсы и Снеки</p>\r\n', '', 1, 1466659384, 1, NULL, NULL, NULL, NULL),
(1331, 155, 2, 'Детское питание', 'Детское питание', '<p>Детское питание</p>\r\n', '', 1, 1466659384, 1, NULL, NULL, NULL, NULL),
(1332, 155, 2, 'Фермерские продукты', 'Фермерские продукты', '<p>Фермерские продукты</p>\r\n', '', 1, 1466659402, 1, NULL, NULL, NULL, NULL),
(1333, 1332, 2, 'Мясо, птица, рыба', 'Мясо, птица, рыба', '<p>Мясо, птица, рыба</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1334, 1332, 2, 'Овощи, фрукты, зелень', 'Овощи, фрукты, зелень', '<p>Овощи, фрукты, зелень</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1335, 1332, 2, 'Молочная продукция', 'Молочная продукция', '<p>Молочная продукция</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1336, 1332, 2, 'Ягоды', 'Ягоды', '<p>Ягоды</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1337, 1318, 2, 'Черный', 'Черный', '<p>Черный</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1338, 1318, 2, 'Зеленый', 'Зеленый', '<p>Зеленый</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1339, 1318, 2, 'Ароматизированный', 'Ароматизированный', '<p>Ароматизированный</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1340, 1318, 2, 'Цветочный', 'Цветочный', '<p>Цветочный</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1341, 1318, 2, 'Фруктовый', 'Фруктовый', '<p>Фруктовый</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1342, 1318, 2, 'Ягодный', 'Ягодный', '<p>Ягодный</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1343, 1318, 2, 'В пакетиках', 'В пакетиках', '<p>В пакетиках</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1344, 1318, 2, 'Травяной', 'Травяной', '<p>Травяной</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1345, 1319, 2, 'Зерновой', 'Зерновой', '<p>Зерновой</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1346, 1319, 2, 'Молотый', 'Молотый', '<p>Молотый</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1347, 1319, 2, 'Растворимый', 'Растворимый', '<p>Растворимый</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1348, 1319, 2, 'Капсульный', 'Капсульный', '<p>Капсульный</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1349, 1320, 2, 'Напитки', 'Напитки', '<p>Напитки</p>', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1350, 1320, 2, 'Кофейный напиток', 'Кофейный напиток', '<p>Кофейный напиток</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1351, 1320, 2, 'Горячий шоколад', 'Горячий шоколад', '<p>Горячий шоколад</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1352, 1319, 2, 'Какао', 'Какао', '<p>Какао</p>\r\n', '', 1, 1466659384, 1, NULL, NULL, NULL, NULL),
(1353, 1320, 2, 'Минеральные воды', 'Минеральные воды', '<p>Минеральные воды</p>', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1354, 1320, 2, 'Соки', 'Соки', '<p>Соки</p>\r\n', '', 1, 1466659402, 1, NULL, NULL, NULL, NULL),
(1355, 1320, 2, 'Сиропы и топпинги ', 'Сиропы и топпинги ', '<p>Сиропы и топпинги </p>\r\n', '', 1, 1466659384, 1, NULL, NULL, NULL, NULL),
(1356, 1321, 2, 'Шоколад', 'Шоколад', '<p>Шоколад</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1357, 1321, 2, 'Конфеты', 'Конфеты', '<p>Конфеты</p>\n', '', 1, 1466659316, 1, NULL, NULL, NULL, NULL),
(1358, 1321, 2, 'Печенье, пряники, вафли', 'Печенье, пряники, вафли', '<p>Печенье, пряники, вафли</p>', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1359, 1321, 2, 'Крекеры', 'Крекеры', '<p>Крекеры</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1360, 1321, 2, 'Мармелад', 'Мармелад', '<p>Мармелад</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1361, 1321, 2, 'Зефир и маршмеллоу', 'Зефир и маршмеллоу', '<p>Зефир и маршмеллоу</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1362, 1321, 2, 'Жевательная резинка', 'Жевательная резинка', '<p>Жевательная резинка</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1363, 1322, 2, 'Спагетти', 'Спагетти', '<p>Спагетти</p>\r\n', '', 1, 1466659384, 1, NULL, NULL, NULL, NULL),
(1364, 1322, 2, 'Лапша', 'Лапша', '<p>Лапша</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1365, 1322, 2, 'Буккатини, трубочки, Перья', 'Буккатини, трубочки, Перья', '<p>Буккатини, трубочки, Перья</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1366, 1322, 2, 'Лазанья, каннелони', 'Лазанья, каннелони', '<p>Лазанья, каннелони</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1367, 1322, 2, 'Вермишель, паутинка', 'Вермишель, паутинка', '<p>Вермишель, паутинка</p>\r\n', '', 1, 1466659384, 1, NULL, NULL, NULL, NULL),
(1368, 1331, 2, 'Вода и напитки', 'Вода и напитки', '<p>Вода и напитки</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1369, 1331, 2, 'Сухое молоко, смеси', 'Сухое молоко, смеси', '<p>Сухое молоко, смеси</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1370, 1331, 2, 'Каши и пюре', 'Каши и пюре', '<p>Каши и пюре</p>\r\n', '', 1, 1466659430, 1, NULL, NULL, NULL, NULL),
(1371, 1331, 2, 'Печенье, десерты', 'Печенье, десерты', '<p>Печенье, десерты</p>\r\n', '', 1, 1466659453, 1, NULL, NULL, NULL, NULL),
(1372, 1327, 2, 'Масла', 'Масла', '<p>Масла</p>\r\n', '', 1, 1466659384, 1, NULL, NULL, NULL, NULL),
(1373, 1327, 2, 'Уксусы', 'Уксусы', '<p>Уксусы</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1374, 1327, 2, 'Соусы, аджика', 'Соусы, аджика', '<p>Соусы, аджика</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1375, 1327, 2, 'Горчица, васаби', 'Горчица, васаби', '<p>Горчица, васаби</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1376, 1327, 2, 'Маринады, заправки', 'Маринады, заправки', '<p>Маринады, заправки</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1377, 1327, 2, 'Хрен, имбирь', 'Хрен, имбирь', '<p>Хрен, имбирь</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1378, 89, 2, 'Автохимия и косметика', 'Автохимия и косметика', '<p>Автохимия и косметика</p>', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1379, 89, 2, 'Моторные масла и жидкости', 'Моторные масла и жидкости', '<p>Моторные масла и жидкости</p>', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1380, 89, 2, 'Оборудование и инструменты', 'Оборудование и инструменты', '<p>Оборудование и инструменты</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1381, 89, 2, 'Запчасти', 'Запчасти', '<p>Запчасти</p>', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1382, 89, 2, 'Шины и диски', 'Шины и диски', '<p>Шины и диски</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1383, 89, 2, 'Акустика и видео', 'Акустика и видео', '<p>Акустика и видео</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1384, 89, 2, 'Электроника', 'Электроника', '<p>Электроника</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1385, 89, 2, 'Тюнинг и защита', 'Тюнинг и защита', '<p>Тюнинг и защита</p>', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1386, 89, 2, 'Аксессуары', 'Аксессуары', '<p>Аксессуары</p>', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1387, 89, 2, 'Мототовары', 'Мототовары', '<p>Мототовары</p>', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1388, 1378, 2, 'Ароматизаторы', 'Ароматизаторы', '<p>Ароматизаторы</p>', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1389, 1378, 2, 'Очистители', 'Очистители', '<p>Очистители</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1390, 1378, 2, 'Автошампуни и полироли', 'Автошампуни и полироли', '<p>Автошампуни и полироли</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1391, 1378, 2, 'Стеклоомыватели, щетки, скребки', 'Стеклоомыватели, щетки, скребки', '<p>Стеклоомыватели, щетки, скребки</p>\r\n', '', 1, 1466659384, 1, NULL, NULL, NULL, NULL),
(1392, 1378, 2, 'Клеи и герметики', 'Клеи и герметики', '<p>Клеи и герметики</p>', '', 1, 1466659384, 1, NULL, NULL, NULL, NULL),
(1393, 1380, 2, 'Компрессоры, насосы и манометры', 'Компрессоры, насосы и манометры', '<p>Компрессоры, насосы и манометры</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1394, 1380, 2, 'Домкраты и лебедки', 'Домкраты и лебедки', '<p>Домкраты и лебедки</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1395, 1380, 2, 'Тросы и цепи', 'Тросы и цепи', '<p>Тросы и цепи</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1396, 1380, 2, 'Минимойки', 'Минимойки', '<p>Минимойки</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1397, 1380, 2, 'Противоугонные замки и иммобилайзеры', 'Противоугонные замки и иммобилайзеры', '<p>Противоугонные замки и иммобилайзеры</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1398, 1380, 2, 'Пылесосы', 'Пылесосы', '<p>Пылесосы</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1399, 1379, 2, 'Трансмиссионное масла', 'Трансмиссионное масла', '<p>Трансмиссионное масла</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1400, 1379, 2, 'Смазки', 'Смазки', '<p>Смазки</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1401, 1379, 2, 'Присадки и добавки', 'Присадки и добавки', '<p>Присадки и добавки</p>\r\n', '', 1, 1466659384, 1, NULL, NULL, NULL, NULL),
(1402, 1379, 2, 'Антифризы', 'Антифризы', '<p>Антифризы</p>\r\n', '', 1, 1466659384, 1, NULL, NULL, NULL, NULL),
(1403, 1379, 2, 'Тормозные жидкости', 'Тормозные жидкости', '<p>Тормозные жидкости</p>\r\n', '', 1, 1466659384, 1, NULL, NULL, NULL, NULL),
(1404, 1379, 2, 'Жидкости для ГУР', 'Жидкости для ГУР', '<p>Жидкости для ГУР</p>\r\n', '', 1, 1466659384, 1, NULL, NULL, NULL, NULL),
(1405, 1382, 2, 'Авто шины', 'Авто шины', '<p>Авто шины</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1406, 1382, 2, 'Колесные диски', 'Колесные диски', '<p>Колесные диски</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1407, 1382, 2, 'Шинные принадлежности', 'Шинные принадлежности', '<p>Шинные принадлежности</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1408, 1382, 2, 'Колпаки на колеса', 'Колпаки на колеса', '<p>Колпаки на колеса</p>\r\n', '', 1, 1466659402, 1, NULL, NULL, NULL, NULL),
(1409, 1381, 2, 'Щетки стеклоочистителя', 'Щетки стеклоочистителя', '<p>Щетки стеклоочистителя</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1410, 1381, 2, 'Автосвет', 'Автосвет', '<p>Автосвет</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1411, 1381, 2, 'Аккумуляторы', 'Аккумуляторы', '<p>Аккумуляторы</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1412, 1381, 2, 'Инверторы и зарядные устройства ', 'Инверторы и зарядные устройства ', '<p>Инверторы и зарядные устройства </p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1413, 1383, 2, 'Автоакустика и усилители', 'Автоакустика и усилители', '<p>Автоакустика и усилители</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1414, 1383, 2, 'Автомагнитолы', 'Автомагнитолы', '<p>Автомагнитолы</p>\r\n', '', 1, 1466659384, 1, NULL, NULL, NULL, NULL),
(1415, 1383, 2, 'Антенны', 'Антенны', '<p>Антенны</p>\r\n', '', 1, 1466659384, 1, NULL, NULL, NULL, NULL),
(1416, 1383, 2, 'FM-модуляторы', 'FM-модуляторы', '<p>FM-модуляторы</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1417, 1383, 2, 'Автомобильные мониторы', 'Автомобильные мониторы', '<p>Автомобильные мониторы</p>\r\n', '', 1, 1466659384, 1, NULL, NULL, NULL, NULL),
(1418, 1383, 2, 'Громкая связь', 'Громкая связь', '<p>Громкая связь</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1419, 1383, 2, 'Радиостанции', 'Радиостанции', '<p>Радиостанции</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1420, 1384, 2, 'Автоэлектрика', 'Автоэлектрика', '<p>Автоэлектрика</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1421, 1384, 2, 'Видеорегистраторы', 'Видеорегистраторы', '<p>Видеорегистраторы</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1422, 1384, 2, 'Радар-детекторы', 'Радар-детекторы', '<p>Радар-детекторы</p>\r\n', '', 1, 1466659384, 1, NULL, NULL, NULL, NULL),
(1423, 1384, 2, 'Алкотестеры', 'Алкотестеры', '<p>Алкотестеры</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1424, 1384, 2, 'Парктроники', 'Парктроники', '<p>Парктроники</p>\r\n', '', 1, 1466659402, 1, NULL, NULL, NULL, NULL),
(1425, 1384, 2, 'GPS-автонавигаторы', 'GPS-автонавигаторы', '<p>GPS-автонавигаторы</p>\r\n', '', 1, 1466659384, 1, NULL, NULL, NULL, NULL),
(1426, 1384, 2, 'Камеры заднего вида', 'Камеры заднего вида', '<p>Камеры заднего вида</p>\r\n', '', 1, 1466659402, 1, NULL, NULL, NULL, NULL),
(1427, 1385, 2, 'Защита внешних частей', 'Защита внешних частей', '<p>Защита внешних частей</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1428, 1385, 2, 'Багажники и боксы', 'Багажники и боксы', '<p>Багажники и боксы</p>', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1429, 1385, 2, 'Спойлеры', 'Спойлеры', '<p>Спойлеры</p>', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1430, 1385, 2, 'Спортивные тормоза', 'Спортивные тормоза', '<p>Спортивные тормоза</p>', '', 1, 1466659384, 1, NULL, NULL, NULL, NULL),
(1431, 1385, 2, 'Решетки радиатора', 'Решетки радиатора', '<p>Решетки радиатора</p>', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1433, 1386, 2, 'Коврики', 'Коврики', '<p>Коврики</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1434, 1386, 2, 'Чехлы и накидки', 'Чехлы и накидки', '<p>Чехлы и накидки</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1435, 1386, 2, 'Чехлы для торпеды', 'Чехлы для торпеды', '<p>Чехлы для торпеды</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1436, 1386, 2, 'Наклейки, стикеры, внешний декор', 'Наклейки, стикеры, внешний декор', '<p>Наклейки, стикеры, внешний декор</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1437, 1386, 2, 'Органайзеры и сетки', 'Органайзеры и сетки', '<p>Органайзеры и сетки</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1438, 1386, 2, 'Оплетки на руль', 'Оплетки на руль', '<p>Оплетки на руль</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1439, 1387, 2, 'Аксессуары', 'Аксессуары', '<p>Аксессуары</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1440, 1386, 2, 'Автохолодильники, термосы, кружки', 'Автохолодильники, термосы, кружки', '<p>Автохолодильники, термосы, кружки</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1441, 1386, 2, 'Шторки солнцезащитные', 'Шторки солнцезащитные', '<p>Шторки солнцезащитные</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1442, 1386, 2, 'Аптечки и аварийные наборы', 'Аптечки и аварийные наборы', '<p>Аптечки и аварийные наборы</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1443, 1386, 2, 'Держатели и крепления', 'Держатели и крепления', '<p>Держатели и крепления</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1444, 1386, 2, 'Канистры', 'Канистры', '<p>Канистры</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1445, 1386, 2, 'Прочие автоаксессуары', 'Прочие автоаксессуары', '<p>Прочие автоаксессуары</p>\r\n', '', 1, 1466659384, 1, NULL, NULL, NULL, NULL),
(1446, 1385, 2, 'Карбоновые натяжки', 'Карбоновые натяжки', '<p>Карбоновые натяжки</p>', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1447, 1385, 2, 'Амортизаторы капота', 'Амортизаторы капота', '<p>Амортизаторы капота</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1448, 1329, 2, 'Орехи', 'Орехи', '<p>Орехи</p>\r\n', '', 1, 1466659402, 1, NULL, NULL, NULL, NULL),
(1449, 1329, 2, 'Вяленые овощи', 'Вяленые овощи', '<p>Вяленые овощи</p>\r\n', '', 1, 1466659337, 1, NULL, NULL, NULL, NULL),
(1450, 1329, 2, 'Сухофрукты', 'Сухофрукты', '<p>Сухофрукты</p>\r\n', '', 1, 1466659430, 1, NULL, NULL, NULL, NULL),
(1451, 1329, 2, 'Сухие водоросли', 'Сухие водоросли', '<p>Сухие водоросли</p>\r\n', '', 1, 1466659384, 1, NULL, NULL, NULL, NULL),
(1452, 1329, 2, 'Ягоды', 'Ягоды', '<p>Ягоды</p>\r\n', '', 1, 1466659402, 1, NULL, NULL, NULL, NULL),
(1453, 1321, 2, 'Восточные сладости', 'Восточные сладости', '<p>Восточные сладости</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1454, 306, 1, 'Автохимия и косметика', 'Автохимия и косметика', '<p>Автохимия и косметика</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1455, 306, 1, 'Моторные масла и жидкости', 'Моторные масла и жидкости', '<p>Моторные масла и жидкости</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1456, 306, 1, 'Оборудование и инструменты', 'Оборудование и инструменты', '<p>Оборудование и инструменты</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1457, 306, 1, 'Шины и диски', 'Шины и диски', '<p>Шины и диски</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1458, 306, 1, 'Акустика и видео', 'Акустика и видео', '<p>Акустика и видео</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1459, 306, 1, 'Автоэлектроника', 'Автоэлектроника', '<p>Автоэлектроника</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1460, 306, 1, 'Тюнинг и защита', 'Тюнинг и защита', '<p>Тюнинг и защита</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1461, 306, 1, 'Запчасти', 'Запчасти', '<p>Запчасти</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1462, 306, 1, 'Аксессуары', 'Аксессуары', '<p>Аксессуары</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1463, 306, 1, 'Прочие', 'Прочие', '<p>Прочие</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1464, 321, 1, 'Запчасти', 'Запчасти', '<p>Запчасти</p>', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1465, 321, 1, 'Корпуса', 'Корпуса', '<p>Корпуса</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1466, 321, 1, 'Чехлы и бамперы', 'Чехлы и бамперы', '<p>Чехлы и бамперы</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1467, 321, 1, 'Наушники', 'Наушники', '<p>Наушники</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1468, 321, 1, 'Защитные стекла и пленки', 'Защитные стекла и пленки', '<p>Защитные стекла и пленки</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1469, 321, 1, 'Кабели и переходники', 'Кабели и переходники', '<p>Кабели и переходники</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1470, 321, 1, 'Зарядные устройства', 'Зарядные устройства', '<p>Зарядные устройства</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1471, 321, 1, 'Аккумуляторы', 'Аккумуляторы', '<p>Аккумуляторы</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1472, 321, 1, 'Карты памяти', 'Карты памяти', '<p>Карты памяти</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1473, 321, 1, 'Автомобильные держатели', 'Автомобильные держатели', '<p>Автомобильные держатели</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1474, 321, 1, 'Bluetooth-гарнитуры', 'Bluetooth-гарнитуры', '<p>Bluetooth-гарнитуры</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1475, 321, 1, 'Стилусы', 'Стилусы', '<p>Стилусы</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1476, 649, 2, 'Запчасти', 'Запчасти', '<p>Запчасти</p>', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1477, 649, 2, 'Корпуса', 'Корпуса', '<p>Корпуса</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1478, 649, 2, 'Чехлы и бамперы', 'Чехлы и бамперы', '<p>Чехлы и бамперы</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1479, 649, 2, 'Наушники', 'Наушники', '<p>Наушники</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1480, 649, 2, 'Защитные стекла и пленки', 'Защитные стекла и пленки', '<p>Защитные стекла и пленки</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1481, 649, 2, 'Кабели и переходники', 'Кабели и переходники', '<p>Кабели и переходники</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1482, 649, 2, 'Зарядные устройства', 'Зарядные устройства', '<p>Зарядные устройства</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1483, 649, 2, 'Аккумуляторы', 'Аккумуляторы', '<p>Аккумуляторы</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1484, 649, 2, 'Карты памяти', 'Карты памяти', '<p>Карты памяти</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1486, 649, 2, 'Bluetooth-гарнитуры', 'Bluetooth-гарнитуры', '<p>Bluetooth-гарнитуры</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1487, 649, 2, 'Стилусы', 'Стилусы', '<p>Стилусы</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1488, 8, 1, 'Автобусы', 'Автобусы', 'Автобусы', '', 1, 1463035860, NULL, 1463234820, 1, NULL, NULL),
(1489, 8, 1, 'Маршрутки', 'Маршрутки', 'Маршрутки', '', 1, 1463035592, NULL, 1463234820, 1, NULL, NULL),
(1490, 8, 1, 'Запчасти / аксессуары', 'Запчасти / аксессуары', 'Запчасти / аксессуары', '', 1, 1463035860, NULL, 1463234820, 1, NULL, NULL),
(1491, 1207, 1, 'Гитары', 'Гитары', '<p>Гитары</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1492, 1207, 1, 'Пианино, фортепиано, рояли', 'Пианино, фортепиано, рояли', '<p>Пианино, фортепиано, рояли</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1493, 1207, 1, 'Скрипки', 'Скрипки', '<p>Скрипки</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1494, 1207, 1, 'Духовые инструменты', 'Духовые инструменты', '<p>Духовые инструменты</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1495, 1207, 1, 'Ударные инструменты', 'Ударные инструменты', '<p>Ударные инструменты</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1496, 1207, 1, 'Комбоусилители', 'Комбоусилители', '<p>Комбоусилители</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1497, 1207, 1, 'Синтезаторы', 'Синтезаторы', '<p>Синтезаторы</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1498, 1207, 1, 'Студийное оборудование', 'Студийное оборудование', '<p>Студийное оборудование</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1499, 1207, 1, 'Прочее', 'Прочее', '<p>Прочее</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1500, 1207, 1, 'Аксессуары', 'Аксессуары', '<p>Аксессуары</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1501, 1208, 2, 'Гитары', 'Гитары', '<p>Гитары</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1502, 1208, 2, 'Пианино, фортепиано, рояли', 'Пианино, фортепиано, рояли', '<p>Пианино, фортепиано, рояли</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1503, 1208, 2, 'Скрипки', 'Скрипки', '<p>Скрипки</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1504, 1208, 2, 'Духовые инструменты', 'Духовые инструменты', '<p>Духовые инструменты</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1505, 1208, 2, 'Ударные инструменты', 'Ударные инструменты', '<p>Ударные инструменты</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1506, 1208, 2, 'Комбоусилители', 'Комбоусилители', '<p>Комбоусилители</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1507, 1208, 2, 'Синтезаторы', 'Синтезаторы', '<p>Синтезаторы</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1508, 1208, 2, 'Студийное оборудование', 'Студийное оборудование', '<p>Студийное оборудование</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1509, 1208, 2, 'Аксессуары', 'Аксессуары', '<p>Аксессуары</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1510, 40, 1, 'Книги', 'Книги', 'Книги', '', 1, 1463388593, NULL, NULL, NULL, NULL, NULL),
(1512, 40, 1, 'Кино', 'Кино', 'Кино', '', 1, 1463388593, NULL, NULL, NULL, NULL, NULL),
(1513, 40, 1, 'Музыка', 'Музыка', 'Музыка', '', 1, 1463388593, NULL, NULL, NULL, NULL, NULL),
(1514, 151, 2, 'Кино', 'Кино', 'Кино', '', 1, 1463388593, NULL, NULL, NULL, NULL, NULL),
(1515, 151, 2, 'Музыка', 'Музыка', 'Музыка', '', 1, 1463388593, NULL, NULL, NULL, NULL, NULL),
(1516, 1378, 2, 'Прочая автохимия', 'Прочая автохимия', '<p>Прочая автохимия</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1517, 1380, 2, 'Наборы инструментов', 'Наборы инструментов', '<p>Наборы инструментов</p>\r\n', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1518, 1432, 2, 'Спортивная подвеска', 'Спортивная подвеска', '<p>Спортивная подвеска</p>', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1519, 0, 3, 'Деловые услуги', 'Деловые услуги', '<p>Деловые услуги</p>', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1520, 0, 3, 'Торжество и мероприятие', 'Торжество и мероприятие', '<p>Торжество и мероприятие</p>', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1521, 0, 3, 'Транспортные услуги', 'Транспортные услуги', '<p>Транспортные услуги</p>', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1522, 0, 3, 'Строительство и ремонт', 'Строительство и ремонт', '<p>Строительство и ремонт</p>', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1523, 0, 3, 'Уборка и очистка', 'Уборка и очистка', '<p>Уборка и очистка</p>', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1524, 0, 3, 'Ремонт и обслуживание', 'Ремонт и обслуживание', '<p>Ремонт и обслуживание</p>', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1525, 0, 3, 'Установка и настройка', 'Установка и настройка', '<p>Установка и настройка</p>', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1526, 0, 3, 'Красота и здоровье', 'Красота и здоровье', '<p>Красота и здоровье</p>', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1527, 0, 3, 'Реклама и полиграфия', 'Реклама и полиграфия', '<p>Реклама и полиграфия</p>', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1528, 0, 3, 'IT, интернет, телеком', 'IT, интернет, телеком', '<p>IT, интернет, телеком</p>', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1529, 0, 3, 'Образование и обучение', 'Образование и обучение', '<p>Образование и обучение</p>', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1530, 0, 3, 'Туризм и отдых', 'Туризм и отдых', '<p>Туризм и отдых</p>', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1531, 0, 3, 'Прочие услуги', 'Прочие услуги', '<p>Прочие услуги</p>', '', 1, 1466659366, 1, NULL, NULL, NULL, NULL),
(1532, 619, 2, 'Кулеры и системы охлаждения', 'Кулеры и системы охлаждения', '<p>Кулеры и системы охлаждения</p>\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1533, 620, 2, 'Принтеры и МФУ', 'Принтеры и МФУ', 'Принтеры и МФУ\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1534, 620, 2, 'Сетевое оборудование', 'Сетевое оборудование', 'Сетевое оборудование\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1535, 620, 2, 'Клавиатуры и мыши', 'Клавиатуры и мыши', 'Клавиатуры и мыши\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1536, 620, 2, 'Джойстики и манипуляторы', 'Джойстики и манипуляторы', 'Джойстики и манипуляторы\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1537, 620, 2, 'Веб-камеры и микрофоны', 'Веб-камеры и микрофоны', 'Веб-камеры и микрофоны\r\n', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1538, 620, 2, 'Компьютерные колонки и наушники', 'Компьютерные колонки и наушники', 'Компьютерные колонки и наушники', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1539, 620, 2, 'Сканеры и копиры', 'Сканеры и копиры', 'Сканеры и копиры', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1540, 620, 2, 'Калькуляторы', 'Калькуляторы', 'Калькуляторы', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1542, 621, 2, 'Сумки для ноутбуков', 'Сумки для ноутбуков', 'Сумки для ноутбуков', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1543, 621, 2, 'Сумки и чехлы для планшетов', 'Сумки и чехлы для планшетов', 'Сумки и чехлы для планшетов', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1544, 621, 2, 'Прочие для ПК', 'Аксессуары для пк', 'Аксессуары для пк', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1546, 621, 2, 'Прочие для ноутбуков', 'Аксессуары для ноутбуков', 'Аксессуары для ноутбуков', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1547, 621, 2, 'Прочие для планшетов', 'Аксессуары для планшетов', 'Аксессуары для планшетов', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1549, 672, 2, 'Готовый комплект', 'Готовый комплект', 'Готовый комплект', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1550, 672, 2, 'Ресиверы', 'Ресиверы', 'Ресиверы', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1551, 672, 2, 'Конвертеры', 'Конвертеры', 'Конвертеры', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1552, 672, 2, 'Аксессуары', 'Аксессуары', 'Аксессуары', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1553, 774, 2, 'Объективы', 'Объективы', 'Объективы', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1554, 774, 2, 'Светофильтры', 'Светофильтры', 'Светофильтры', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1555, 774, 2, 'Фотоаксессуары', 'Фотоаксессуары', 'Фотоаксессуары', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1556, 774, 2, 'Свет для фотостудии', 'Свет для фотостудии', 'Свет для фотостудии', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1557, 774, 2, 'Вспышки', 'Вспышки', 'Вспышки', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1558, 685, 2, 'Музыкальные центры', 'Музыкальные центры', 'Музыкальные центры', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1559, 685, 2, 'Магнитолы, радиоприемники', 'Магнитолы, радиоприемники', 'Магнитолы, радиоприемники', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1560, 685, 2, 'Портативная акустика', 'Портативная акустика', 'Портативная акустика', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1561, 685, 2, 'Проигрыватели виниловых дисков', 'Проигрыватели виниловых дисков', 'Проигрыватели виниловых дисков', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1562, 685, 2, 'Усилители и ресиверы', 'Усилители и ресиверы', 'Усилители и ресиверы', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1563, 685, 2, 'Радиотюнеры и эквалайзеры', 'Радиотюнеры и эквалайзеры', 'Радиотюнеры и эквалайзеры', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1564, 686, 2, 'MP3-плееры', 'MP3-плееры', 'MP3-плееры', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1565, 686, 2, 'Диктофоны', 'Диктофоны', 'Диктофоны', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1566, 688, 2, 'Системы караоке', 'Системы караоке', 'Системы караоке', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1567, 688, 2, 'Микрофоны', 'Микрофоны', 'Микрофоны', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1568, 687, 2, 'Акустические системы', 'Акустические системы', 'Акустические системы', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1569, 687, 2, 'Микшерные пульты', 'Микшерные пульты', 'Микшерные пульты', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1570, 687, 2, 'Студийные микрофоны', 'Студийные микрофоны', 'Студийные микрофоны', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1571, 687, 2, 'Студийные наушники', 'Студийные наушники', 'Студийные наушники', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1572, 687, 2, 'Звуковые карты и аудио интерфейсы', 'Звуковые карты и аудио интерфейсы', 'Звуковые карты и аудио интерфейсы', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1573, 687, 2, 'Усилители', 'Усилители', 'Усилители', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1574, 687, 2, 'Обработка звука', 'Обработка звука', 'Обработка звука', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1575, 687, 2, 'Воспроизводящие устройства', 'Воспроизводящие устройства', 'Воспроизводящие устройства', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1576, 687, 2, 'Конференц-системы', 'Конференц-системы', 'Конференц-системы', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1577, 687, 2, 'Трансляционное оборудование', 'Трансляционное оборудование', 'Трансляционное оборудование', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL),
(1578, 603, 2, 'DJ-Cистемы', 'DJ-Cистемы', 'DJ-Cистемы', '', 1, 1466591797, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `at_comments`
--

CREATE TABLE IF NOT EXISTS `at_comments` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  `like` int(11) NOT NULL,
  `dislike` int(11) NOT NULL,
  `id_table` int(11) DEFAULT NULL,
  `table_name` int(11) DEFAULT NULL,
  `file` varchar(255) NOT NULL,
  `dcreated` int(11) DEFAULT NULL,
  `bycreated` int(11) DEFAULT NULL,
  `dmodified` int(11) DEFAULT NULL,
  `bymodified` int(11) DEFAULT NULL,
  `ddeleted` int(11) DEFAULT NULL,
  `bydeleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `at_companies`
--

CREATE TABLE IF NOT EXISTS `at_companies` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `id_shablon` int(3) DEFAULT NULL,
  `cats` varchar(255) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `status` int(3) DEFAULT NULL,
  `dcreated` int(11) DEFAULT NULL,
  `bycreated` int(11) DEFAULT NULL,
  `dmodified` int(11) DEFAULT NULL,
  `bymodified` int(11) DEFAULT NULL,
  `ddeleted` int(11) DEFAULT NULL,
  `bydeleted` int(11) DEFAULT NULL,
  `text` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `id_country` int(11) DEFAULT NULL,
  `gallery` text,
  `rate` int(3) DEFAULT NULL,
  `like` int(11) DEFAULT NULL,
  `dislike` int(11) DEFAULT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `at_companies`
--

INSERT INTO `at_companies` (`id`, `name`, `link`, `id_shablon`, `cats`, `id_user`, `status`, `dcreated`, `bycreated`, `dmodified`, `bymodified`, `ddeleted`, `bydeleted`, `text`, `image`, `address`, `phone`, `id_country`, `gallery`, `rate`, `like`, `dislike`, `mail`) VALUES
(1, 'Euromebel1', '', 3, '["147","599","600","152","664"]', 8, 0, 1467024599, 8, 1467712442, 1, NULL, NULL, 'Euromebel', '', 'Euromebel1', '998971234567', 1, '', 0, 0, 0, 'Euromebel@Euromebel.uz'),
(2, 'Company 2', '', 1, '["149","624","625","626","153"]', 7, 0, 1467026265, 7, 1468173655, 7, NULL, NULL, 'Company 2', '', 'test', '333', 1, '', 0, 0, 0, 'Euromebel@Euromebel.uz'),
(3, 'admin-company', '', 3, '["147","599","610","611","612","623","649","1476","1477","1478","1479","600","613","614"]', 1, 0, 1467642802, 1, 1478858702, 1, NULL, NULL, 'admin-company', '', 'Some adres', '+998901234567', 0, '', 3, 0, 0, 'admin@alltrade.loc'),
(4, 'AvTech', '', 2, '["147","600","613","615","756","757","758","759","761","762","616","617"]', 9, 0, 1470057192, 9, 1470057292, 9, NULL, NULL, 'Компьютеры и ноутбуки', '', 'г.Ташкент, Юнусабатский район, Машиносозлар 15/7', '+998974418161', 0, '', 0, 0, 0, 'Oqilxon1991@GMAIL.CO'),
(5, 'AvTech', '', 0, '', 9, 0, 1470057218, 9, NULL, NULL, NULL, NULL, 'Компьютеры и ноутбуки', '', 'г.Ташкент, Юнусабатский район, Машиносозлар 15/7', '+998974418161', 0, '', 0, 0, 0, 'Oqilxon1991@gmail.com'),
(6, 'Apple', NULL, 3, '["147","600","613","614","616"]', 10, NULL, 1470900820, 10, 1470901372, 10, NULL, NULL, 'Apple', '', 'Apple', '+998909090909', NULL, NULL, NULL, NULL, NULL, 'apple@mail.ru'),
(7, 'LG', NULL, 3, '["147","601","669","670"]', 11, NULL, 1470902780, 11, 1470902834, 11, NULL, NULL, 'LG', '', 'Tashkent', '+9980120012012', NULL, NULL, NULL, NULL, NULL, 'lg@MAIL.RU'),
(8, 'Samsung', NULL, 3, '["147","603","684","685"]', 12, NULL, 1470903010, 12, 1470903035, 12, NULL, NULL, 'Samsung', '', 'Tashkent', '+9989000100101', NULL, NULL, NULL, NULL, NULL, 'samsung@mail.ru'),
(9, 'Sony', NULL, 3, '["147","599","610"]', 13, NULL, 1470903956, 13, 1470904001, 13, NULL, NULL, 'Sony', '', ' Tashkent', '+998901236789', NULL, NULL, NULL, NULL, NULL, 'sony@mail.ru'),
(10, 'Nokia', NULL, 3, '["147","599","610"]', 14, NULL, 1470904226, 14, 1470904245, 14, NULL, NULL, 'Nokia', '', 'tashkent', '+9989788888888', NULL, NULL, NULL, NULL, NULL, 'nokia@mail.ru'),
(11, 'Philips', NULL, 3, '["147","607","716"]', 15, NULL, 1470904454, 15, 1470904527, 15, NULL, NULL, 'Philips', '', 'Tashkent', '+998989090909', NULL, NULL, NULL, NULL, NULL, 'philips@mail.ru'),
(12, 'toshiba', NULL, 3, '["147","600","617"]', 16, NULL, 1470904730, 16, 1470904750, 16, NULL, NULL, 'toshiba', '', 'Tashkent', '+998975558899', NULL, NULL, NULL, NULL, NULL, 'toshiba@mail.ru'),
(13, 'shivaki', NULL, 3, '["80","774","784"]', 17, NULL, 1470904940, 17, 1470905023, 17, NULL, NULL, 'shivaki', '', 'Tashkent', '+998995558423', NULL, NULL, NULL, NULL, NULL, 'shivaki@mail.ru');

-- --------------------------------------------------------

--
-- Структура таблицы `at_countries`
--

CREATE TABLE IF NOT EXISTS `at_countries` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `at_countries`
--

INSERT INTO `at_countries` (`id`, `name`, `img`) VALUES
(1, 'Англия', NULL),
(2, 'Испания', NULL),
(3, 'Россия', NULL),
(4, 'Узбекистан', NULL),
(5, 'Китай', NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `at_currency`
--

CREATE TABLE IF NOT EXISTS `at_currency` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `at_currency`
--

INSERT INTO `at_currency` (`id`, `name`) VALUES
(1, 'Сум'),
(2, 'у.е.');

-- --------------------------------------------------------

--
-- Структура таблицы `at_currency_eshop`
--

CREATE TABLE IF NOT EXISTS `at_currency_eshop` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `at_currency_eshop`
--

INSERT INTO `at_currency_eshop` (`id`, `name`) VALUES
(1, 'Сум');

-- --------------------------------------------------------

--
-- Структура таблицы `at_desired`
--

CREATE TABLE IF NOT EXISTS `at_desired` (
  `id` int(111) NOT NULL,
  `ip_user` text NOT NULL,
  `id_good` int(11) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `at_desired`
--

INSERT INTO `at_desired` (`id`, `ip_user`, `id_good`, `date`) VALUES
(27, '127.0.0.1', 25, 1477033011),
(44, '127.0.0.1', 6, 1477724250),
(45, '127.0.0.1', 27, 1477724257);

-- --------------------------------------------------------

--
-- Структура таблицы `at_discounting`
--

CREATE TABLE IF NOT EXISTS `at_discounting` (
  `id` int(11) NOT NULL,
  `id_good` int(11) NOT NULL,
  `dbegin` int(11) NOT NULL,
  `dend` int(11) NOT NULL,
  `count` int(11) NOT NULL,
  `cost` float NOT NULL,
  `type` int(3) NOT NULL COMMENT 'акция, распродажа',
  `dcreated` int(11) DEFAULT NULL,
  `bycreated` int(11) DEFAULT NULL,
  `dmodified` int(11) DEFAULT NULL,
  `bymodified` int(11) DEFAULT NULL,
  `ddeleted` int(11) DEFAULT NULL,
  `bydeleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `at_elect`
--

CREATE TABLE IF NOT EXISTS `at_elect` (
  `id` int(11) NOT NULL,
  `ip_user` text NOT NULL,
  `id_ad` int(11) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `at_elect`
--

INSERT INTO `at_elect` (`id`, `ip_user`, `id_ad`, `date`) VALUES
(38, '127.0.0.1', 48, 1476941733),
(39, '127.0.0.1', 52, 1476942885),
(40, '127.0.0.1', 54, 1476944074),
(42, '127.0.0.1', 37, 1478006573);

-- --------------------------------------------------------

--
-- Структура таблицы `at_goods`
--

CREATE TABLE IF NOT EXISTS `at_goods` (
  `id` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_brand` int(11) DEFAULT NULL,
  `id_company` int(11) NOT NULL,
  `id_country` int(11) DEFAULT NULL,
  `id_currency` int(11) NOT NULL,
  `id_states` int(3) DEFAULT NULL,
  `manufacturer` text,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `text` text NOT NULL,
  `count` int(11) DEFAULT NULL,
  `count_all` int(11) DEFAULT NULL,
  `type_count_sale` varchar(255) DEFAULT NULL,
  `old_cost` float DEFAULT NULL,
  `cost` float NOT NULL,
  `type_sale` varchar(255) NOT NULL,
  `color` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `like` int(11) DEFAULT NULL,
  `dislike` int(11) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `delivery` int(3) DEFAULT NULL,
  `delivery_vil` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `gallery` text,
  `status` tinyint(3) NOT NULL DEFAULT '1',
  `is_bestsale` int(3) DEFAULT NULL,
  `is_promotion` varchar(255) DEFAULT NULL,
  `is_discount` varchar(255) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `orders` int(11) DEFAULT NULL,
  `dcreated` int(11) DEFAULT NULL,
  `bycreated` int(11) DEFAULT NULL,
  `dmodified` int(11) DEFAULT NULL,
  `bymodified` int(11) DEFAULT NULL,
  `ddeleted` int(11) DEFAULT NULL,
  `bydeleted` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `at_goods`
--

INSERT INTO `at_goods` (`id`, `id_category`, `id_brand`, `id_company`, `id_country`, `id_currency`, `id_states`, `manufacturer`, `name`, `description`, `text`, `count`, `count_all`, `type_count_sale`, `old_cost`, `cost`, `type_sale`, `color`, `size`, `like`, `dislike`, `rate`, `delivery`, `delivery_vil`, `image`, `gallery`, `status`, `is_bestsale`, `is_promotion`, `is_discount`, `discount`, `orders`, `dcreated`, `bycreated`, `dmodified`, `bymodified`, `ddeleted`, `bydeleted`) VALUES
(1, 611, 38, 3, NULL, 1, 1, '', 'Nokia 515', '', '<p>Nokia 515</p>\r\n', 0, 50, '', 451250, 384750, '', NULL, NULL, 0, 0, 0, 0, '', '{"max":"img_500x500.jpg","min":"img_100x100.jpg"}', '', 1, NULL, NULL, '[1467320400,1468789200]', 5, 10, NULL, NULL, 1468848580, 1, NULL, NULL),
(2, 599, 37, 3, NULL, 1, 1, '', 'Новый Меузу', '', '<p>Новый Меузу</p>\r\n', 0, 85, '', 200, 122, '', NULL, NULL, 0, 0, 0, 0, '', '{"max":"img_500x500.jpg","min":"img_100x100.jpg"}', '', 1, 1, NULL, '[false,false]', 39, 8, 1468007382, 1, 1477983449, 1, NULL, NULL),
(3, 610, 3, 3, NULL, 1, 2, '', 'Новый LG', '', '<p>Новый LG ТЕЛЕфон&nbsp;</p>\r\n', 0, 5, '', 600000, 600000, '', NULL, NULL, 0, 0, 0, 0, '', '{"max":"img_500x500.jpg","min":"img_100x100.jpg"}', '[{"max":"img_0_500x500.jpg","min":"img_0_100x100.jpg"},{"max":"img_1_500x500.jpg","min":"img_1_100x100.jpg"},{"max":"img_2_500x500.jpg","min":"img_2_100x100.jpg"}]', 1, NULL, '[1467320400,1469912400,"\\u0425\\u043e\\u0440\\u043e\\u0448\\u0430\\u044f \\u0430\\u043a\\u0446\\u0438\\u044f"]', NULL, NULL, NULL, 1468053715, 1, 1469269056, 1, NULL, NULL),
(4, 599, 3, 3, NULL, 1, 2, '', 'Новый LG1', '', '<p>Новый LG ТЕЛЕфон&nbsp;</p>\r\n', 0, 5, '', NULL, 600000, '', NULL, NULL, 0, 0, 0, 0, '', '{"max":"img_500x500.jpg","min":"img_100x100.jpg"}', NULL, 1, 1, NULL, NULL, NULL, NULL, 1468053745, 1, NULL, NULL, NULL, NULL),
(5, 599, 3, 3, NULL, 1, 2, '', 'Новый LG2', '', '<p>Новый LG ТЕЛЕфон&nbsp;</p>\r\n', 0, 5, '', NULL, 600000, '', NULL, NULL, 0, 0, 0, 0, '', '{"max":"img_500x500.jpg","min":"img_100x100.jpg"}', NULL, 1, 1, NULL, NULL, NULL, NULL, 1468053762, 1, NULL, NULL, NULL, NULL),
(6, 599, 3, 3, NULL, 1, 2, '', 'Новый Samsung', '', '<p>Новый LG ТЕЛЕфон&nbsp;</p>\r\n', 0, 5, '', NULL, 600000, '', NULL, NULL, 0, 0, 0, 0, '', '{"max":"img_500x500.jpg","min":"img_100x100.jpg"}', NULL, 1, 1, NULL, NULL, NULL, NULL, 1468053766, 1, NULL, NULL, NULL, NULL),
(7, 599, 3, 3, NULL, 1, 2, '', 'Новый LG', '', '<p>Новый LG ТЕЛЕфон&nbsp;</p>\r\n', 0, 5, '', 600000, 540000, '', NULL, NULL, 0, 0, 0, 0, '', '{"max":"img_500x500.jpg","min":"img_100x100.jpg"}', NULL, 1, NULL, NULL, '[1464728400,1472590800]', 10, 5, 1468053770, 1, 1468848603, 1, NULL, NULL),
(8, 599, 3, 3, NULL, 1, 2, '', 'Новый LG', '', '<p>Новый LG ТЕЛЕфон&nbsp;</p>\r\n', 0, 5, '', NULL, 600000, '', NULL, NULL, 0, 0, 0, 0, '', '{"max":"img_500x500.jpg","min":"img_100x100.jpg"}', NULL, 1, NULL, NULL, NULL, NULL, NULL, 1468053774, 1, NULL, NULL, NULL, NULL),
(9, 599, 3, 3, NULL, 1, 2, '', 'Новый LG', '', '<p>Новый LG ТЕЛЕфон&nbsp;</p>\r\n', 0, 5, '', 600000, 600000, '', NULL, NULL, 0, 0, 0, 0, '', '{"max":"img_500x500.jpg","min":"img_100x100.jpg"}', NULL, 1, NULL, '[1467406800,1472590800,"\\u0410\\u043a\\u0446\\u0438\\u044f 2"]', NULL, NULL, NULL, 1468053776, 1, 1468916251, 1, NULL, NULL),
(10, 599, 3, 3, NULL, 1, 2, '', 'Новый LG', '', '<p>Новый LG ТЕЛЕфон&nbsp;</p>\r\n', 0, 5, '', NULL, 600000, '', NULL, NULL, 0, 0, 0, 0, '', '{"max":"img_500x500.jpg","min":"img_100x100.jpg"}', NULL, 1, NULL, NULL, NULL, NULL, NULL, 1468053781, 1, NULL, NULL, NULL, NULL),
(11, 599, 3, 3, NULL, 1, 2, '', 'Новый LG', '', '<p>Новый LG ТЕЛЕфон&nbsp;</p>\r\n', 0, 5, '', NULL, 600000, '', NULL, NULL, 0, 0, 0, 0, '', '{"max":"img_500x500.jpg","min":"img_100x100.jpg"}', NULL, 1, NULL, NULL, NULL, NULL, NULL, 1468053790, 1, NULL, NULL, NULL, NULL),
(12, 599, 3, 3, NULL, 1, 2, '', 'Новый LG', '', '<p>Новый LG ТЕЛЕфон&nbsp;</p>\r\n', 0, 5, '', NULL, 600000, '', NULL, NULL, 0, 0, 0, 0, '', '{"max":"img_500x500.jpg","min":"img_100x100.jpg"}', NULL, 1, NULL, NULL, NULL, NULL, NULL, 1468053794, 1, NULL, NULL, NULL, NULL),
(13, 599, 3, 3, NULL, 1, 2, '', 'Новый LG', '', '<p>Новый LG ТЕЛЕфон&nbsp;</p>\r\n', 0, 5, '', NULL, 600000, '', NULL, NULL, 0, 0, 0, 0, '', '{"max":"img_500x500.jpg","min":"img_100x100.jpg"}', NULL, 1, NULL, NULL, NULL, NULL, NULL, 1468053799, 1, NULL, NULL, NULL, NULL),
(14, 599, 3, 3, NULL, 1, 2, '', 'Новый LG', '', '<p>Новый LG ТЕЛЕфон&nbsp;</p>\r\n', 0, 5, '', NULL, 600000, '', NULL, NULL, 0, 0, 0, 0, '', '{"max":"img_500x500.jpg","min":"img_100x100.jpg"}', NULL, 1, NULL, NULL, NULL, NULL, NULL, 1468053806, 1, NULL, NULL, NULL, NULL),
(15, 599, 3, 3, NULL, 1, 2, '', 'Новый LG nvfjkdgvlf', '', '<p>Новый LG ТЕЛЕфон&nbsp;</p>\r\n', 0, 5, '', NULL, 600000, '', NULL, NULL, 0, 0, 0, 0, '', '{"max":"img_500x500.jpg","min":"img_100x100.jpg"}', NULL, 1, NULL, NULL, NULL, NULL, NULL, 1468053819, 1, NULL, NULL, NULL, NULL),
(16, 599, 3, 3, NULL, 1, 2, 'Uzbekistan', 'fdfjkdslhfdsplk', '', '<p>Новый LG ТЕЛЕфон&nbsp;</p>\r\n', 0, 5, '', NULL, 600000, 'null', NULL, NULL, 0, 0, 0, 0, '', '{"max":"img_1000x1000.jpg","min":"img_250x250.jpg"}', '[{"max":"img_0_500x500.jpg","min":"img_0_100x100.jpg"},{"max":"img_1_500x500.jpg","min":"img_1_100x100.jpg"},{"max":"img_2_500x500.jpg","min":"img_2_100x100.jpg"}]', 1, NULL, NULL, NULL, NULL, NULL, 1468053835, 1, 1477143018, 1, NULL, NULL),
(17, 890, NULL, 2, NULL, 1, 1, '', 'Классный огород', '', '<p>Классный огород</p>\r\n', 0, 60, '', 600000, 950000, '', NULL, NULL, 0, 0, 0, 0, '', '{"max":"img_500x500.jpg","min":"img_100x100.jpg"}', '[{"max":"img_0_500x500.jpg","min":"img_0_100x100.jpg"},{"max":"img_1_500x500.jpg","min":"img_1_100x100.jpg"},{"max":"img_2_500x500.jpg","min":"img_2_100x100.jpg"}]', 1, NULL, NULL, '[1467320400,1468789200]', 20, NULL, 1468174465, 7, NULL, NULL, NULL, NULL),
(18, 625, NULL, 2, NULL, 1, 1, '', 'Классный огород 2', '', '<p>Классный огород 2</p>\r\n', 0, 99, '', 841500, 990000, '', NULL, NULL, 0, 0, 0, 0, '', '{"max":"img_500x500.jpg","min":"img_100x100.jpg"}', '[{"max":"img_0_500x500.jpg","min":"img_0_100x100.jpg"},{"max":"img_1_500x500.jpg","min":"img_1_100x100.jpg"},{"max":"img_2_500x500.jpg","min":"img_2_100x100.jpg"},{"max":"img_3_500x500.jpg","min":"img_3_100x100.jpg"}]', 1, NULL, NULL, '[1467320400,1468789200]', 15, NULL, 1468174626, 7, 1468176708, 7, NULL, NULL),
(19, 613, 278, 4, NULL, 1, 1, '', 'Компьютер DELL ', '', 'Компьютер DELL, Комплект входить( кейс, монитор, клавиатура и мишка)\r\n', 0, 30, '', NULL, 2450000, '', NULL, NULL, 0, 0, 0, 0, '', '{"max":"img_1000x1000.jpg","min":"img_250x250.jpg"}', '[{"max":"img_0_1000x1000.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_1000x1000.jpg","min":"img_1_250x250.jpg"}]', 1, NULL, NULL, NULL, NULL, NULL, 1470057925, 9, NULL, NULL, NULL, NULL),
(20, 617, 11, 4, NULL, 1, 1, '', 'Samsung R508-DA01', '', 'Samsung R508-DA01\r\n(черный)', 0, 10, '', NULL, 450, '', NULL, NULL, 0, 0, 0, 0, '', '{"max":"img_1000x1000.jpg","min":"img_250x250.jpg"}', '[{"max":"img_0_1000x1000.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_1000x1000.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_1000x1000.jpg","min":"img_2_250x250.jpg"}]', 1, NULL, NULL, NULL, NULL, NULL, 1470058428, 9, NULL, NULL, NULL, NULL),
(21, 613, 22, 6, NULL, 1, 1, '', 'monitor', NULL, '<p>monitor</p>\r\n', NULL, 10, '', 1200, 240, '', NULL, NULL, NULL, NULL, NULL, NULL, '', '{"max":"img_1000x1000.jpg","min":"img_250x250.jpg"}', NULL, 1, NULL, NULL, '[false,false]', 80, NULL, 1470901912, 10, 1470902164, 10, NULL, NULL),
(22, 670, 3, 7, NULL, 1, 1, '', 'LG Player', NULL, '<p>LG Player</p>\r\n', NULL, 10, '', 100, 75, '', NULL, NULL, NULL, NULL, NULL, NULL, '', '{"max":"img_1000x1000.jpg","min":"img_250x250.jpg"}', NULL, 1, NULL, NULL, '[false,false]', 25, NULL, 1470902902, 11, 1470902918, 11, NULL, NULL),
(23, 684, 29, 8, NULL, 1, 1, '', 'Naushnik', NULL, '<p>Naushnik</p>\r\n', NULL, 22, '', 25, 16, '', NULL, NULL, NULL, NULL, NULL, NULL, '', '{"max":"img_1000x1000.jpg","min":"img_250x250.jpg"}', NULL, 1, NULL, NULL, '[false,false]', 36, NULL, 1470903096, 12, 1470903116, 12, NULL, NULL),
(24, 685, 11, 8, NULL, 1, 1, '', 'Akustika', NULL, '<p>Akustika</p>\r\n', NULL, 11, '', 29, 12.18, '', NULL, NULL, NULL, NULL, NULL, NULL, '', '{"max":"img_1000x1000.jpeg","min":"img_250x250.jpeg"}', NULL, 1, 1, NULL, '[false,false]', 58, NULL, 1470903249, 12, 1470903277, 12, NULL, NULL),
(25, 610, 12, 9, NULL, 1, 1, '', 'Telefon', NULL, '<p>telefon</p>\r\n', NULL, 32, '', 300, 66, '', NULL, NULL, NULL, NULL, NULL, NULL, '', '{"max":"img_1000x1000.jpg","min":"img_250x250.jpg"}', NULL, 1, 1, NULL, '[false,false]', 78, NULL, 1470904112, 13, 1470904127, 13, NULL, NULL),
(26, 610, 38, 10, NULL, 1, 1, '', '6233', NULL, '<p>nokia</p>\r\n', NULL, 55, '', 50, 17, '', NULL, NULL, NULL, NULL, NULL, NULL, '', '{"max":"img_1000x1000.jpg","min":"img_250x250.jpg"}', NULL, 1, 1, NULL, '[false,false]', 66, NULL, 1470904304, 14, 1470904328, 14, NULL, NULL),
(27, 716, 13, 11, NULL, 1, 1, '', 'Kondisioner', NULL, '<p>Kondisioner</p>\r\n', NULL, 66, '', 500, 370, '', NULL, NULL, NULL, NULL, NULL, NULL, '', '{"max":"img_1000x1000.jpg","min":"img_250x250.jpg"}', NULL, 1, 1, NULL, '[false,false]', 26, NULL, 1470904613, 15, 1470904628, 15, NULL, NULL),
(28, 617, 24, 12, NULL, 1, 1, '', 'netbook', NULL, '<p>netbook</p>\r\n', NULL, 44, '', 235, 28.2, '', NULL, NULL, NULL, NULL, NULL, NULL, '', '{"max":"img_1000x1000.jpg","min":"img_250x250.jpg"}', NULL, 1, 1, NULL, '[false,false]', 88, NULL, 1470904853, 16, 1470904862, 16, NULL, NULL),
(29, 784, 325, 13, NULL, 1, 1, '', 'shivaki', NULL, '<p><span style="color:rgb(0, 0, 0); font-family:open sans,sans-serif">shivaki</span></p>\r\n', NULL, 10, '', 35000, 12250, '', NULL, NULL, NULL, NULL, NULL, NULL, '', '{"max":"img_1000x1000.jpeg","min":"img_250x250.jpeg"}', NULL, 1, 1, NULL, '[false,false]', 65, 4, 1470905118, 17, 1470905129, 17, NULL, NULL),
(30, 616, 3, 6, NULL, 1, 1, '', 'asasas', NULL, '<p>asasasas</p>\r\n', NULL, 21, '', NULL, 123, '', NULL, NULL, NULL, NULL, NULL, NULL, '', '{"max":"img_1000x1000.jpg","min":"img_250x250.jpg"}', NULL, 1, 1, NULL, NULL, NULL, 2, 1470990221, 10, NULL, NULL, NULL, NULL),
(31, 613, NULL, 6, NULL, 1, NULL, '', 'Rasul', NULL, '<p>Rasul</p>\r\n', NULL, 123, '', NULL, 200, '', NULL, NULL, NULL, NULL, NULL, NULL, '', '{"max":"img_1000x1000.jpg","min":"img_250x250.jpg"}', '[{"max":"img_0_1000x1000.jpg","min":"img_0_250x250.jpg"},{"max":"img_1_1000x1000.jpg","min":"img_1_250x250.jpg"},{"max":"img_2_1000x1000.jpg","min":"img_2_250x250.jpg"}]', 1, NULL, NULL, NULL, NULL, 1, 1471087286, 10, NULL, NULL, NULL, NULL),
(32, 610, NULL, 3, NULL, 1, NULL, NULL, 'Highscreen', NULL, '<p>fghfdg hfghd dfgh fghfdghdf gh dfgh</p>\r\n', NULL, NULL, NULL, NULL, 100000, '["\\u043f\\u0440\\u043e\\u0434\\u0430\\u0436\\u0430"]', NULL, NULL, NULL, NULL, NULL, 1, '["1","2"]', '{"max":"img_1000x1000.jpg","min":"img_250x250.jpg"}', NULL, 1, NULL, NULL, NULL, NULL, NULL, 1478862439, 1, NULL, NULL, NULL, NULL),
(33, 610, NULL, 3, NULL, 1, NULL, NULL, 'Highscreen', NULL, '<p>rtdyrtyertyretyertyertyertyerty retw ert ert wert</p>\r\n', NULL, NULL, NULL, NULL, 100000, '["\\u043f\\u0440\\u043e\\u0434\\u0430\\u0436\\u0430"]', NULL, NULL, NULL, NULL, NULL, 1, '["1","2"]', '{"max":"img_1000x1000.jpg","min":"img_250x250.jpg"}', NULL, 1, NULL, NULL, NULL, NULL, NULL, 1478864158, 1, NULL, NULL, NULL, NULL),
(34, 610, NULL, 3, NULL, 1, NULL, NULL, 'Highscreen', NULL, '<p>sdfs dfsd fsdf sdfs dfsd</p>\r\n', NULL, NULL, NULL, NULL, 1000000, '["\\u043f\\u0440\\u043e\\u0434\\u0430\\u0436\\u0430"]', NULL, NULL, NULL, NULL, NULL, 1, '["1","2","13"]', '{"max":"img_1000x1000.jpg","min":"img_250x250.jpg"}', NULL, 1, NULL, NULL, NULL, NULL, NULL, 1478865009, 1, 1478865161, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `at_goods_fields`
--

CREATE TABLE IF NOT EXISTS `at_goods_fields` (
  `id` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nameEn` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `option` text
) ENGINE=InnoDB AUTO_INCREMENT=1077 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `at_goods_fields`
--

INSERT INTO `at_goods_fields` (`id`, `id_category`, `name`, `nameEn`, `type`, `option`) VALUES
(0, 305, 'Пробег (км.)', 'probeg', 'text', ''),
(1, 18, 'Количество комнат', 'kolichestvokomnat', 'radio', '1, 2, 3, 4, 5,Больше 5'),
(2, 18, 'Жилая площадь (м<sup>2</sup>)', 'zhilayaploshhad', 'text', ''),
(3, 18, 'Тип', 'tip', 'radio', 'Кирпичный, Панельный, Блочный\r\n'),
(4, 18, 'Этаж', 'etazh', 'text', ''),
(5, 18, 'Этажность дома', 'etazhnostdoma', 'text', ''),
(6, 17, 'Площадь дома (сот.)', 'ploshhaddoma', 'text', ''),
(7, 17, 'Количество комнат', 'udalyonnostotgoroda', 'text', ''),
(8, 304, 'Марка', 'marka', 'select', 'Brands'),
(9, 304, 'Модель', 'model', 'text', ''),
(10, 304, 'Тип кузова', 'tipkuzova', 'select', 'Выбрать,Седан,Универсал,Хетчбэк,Купе,Микроавтобус,Минивэн,Кабриолет,Пикап,Фургон'),
(11, 304, 'Год выпуска', 'godvypuska', 'select', '1900:Y'),
(12, 304, 'Пробег (км.)', 'probeg', 'text', ''),
(13, 304, 'Цвет', 'svet', 'select', 'Выбрать,Белый,Черный,Асфальт,Бежевый,Вишнёвый,Голубой,Желтый,Коричневый,Синий,Серебристый,Красный,Зеленый'),
(14, 304, 'Объем двигателя (см<sup>3</sup>)', 'obemdvigatelya', 'text', ''),
(15, 304, 'Коробка передач', 'korobkaperedach', 'radio', 'Механический,Автомат,Типтроник'),
(16, 304, 'Вид топлива', 'vidtopliva', 'radio', 'Бензин, Газ, Дизель'),
(17, 340, 'Марка', 'marka', 'select', 'Brands'),
(18, 340, 'Год выпуска', 'godvypuska', 'select', '1900:Y'),
(19, 340, 'Тип кузова', 'tip', 'select', 'Выбрать,Бортовые,Самосвалы,Рефрижераторные,Контейнеровозы,Автовозы,Термокузов,Цистерновые,Тентованные,Фургоны,Прочие грузовики'),
(21, 9, 'Объем двигателя  (см<sup>3</sup>)', 'obemdvigatelya', 'text', ''),
(22, 9, 'Пробег (км.)', 'probeg', 'text', ''),
(23, 340, 'Грузоподъёмность', 'gruzopodyomnost', 'text', ''),
(25, 33, 'Предлагаете / ищете?', 'predlagaeteishhete', 'radio', 'Предлагаю работу,Ищу работу\r\n'),
(26, 33, 'Тип работы', 'tipraboty', 'checkbox', 'Постоянная работа,Временная работа\r\n\r\n'),
(27, 33, 'Зарплата', 'zarplata', 'text', ''),
(28, 33, 'Зарплата', 'zarplata', 'radio', 'сум,doll,euro'),
(29, 33, 'Тип занятости', 'tipzanyatosti', 'checkbox', 'Работа на полную ставку,Неполная занятость'),
(30, 44, 'Марка телефона', 'markatelefona', 'select', 'Brands'),
(31, 44, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(32, 185, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(33, 157, 'Марка ноутбука', 'markanoutbuka', 'select', 'Brands'),
(34, 157, 'Диагональ экрана', 'diagonalekrana', 'radio', '17 и больше,16-16.9,15-15.9,14-14.9,13-13.9,12-12.9,Меньше 12'),
(35, 157, 'Тип', 'tip', 'radio', 'Ноутбук,Нетбук,Ультрабук,Хромбук,Макбук'),
(36, 186, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(38, 188, 'Марка монитора', 'markamonitora', 'select', 'Brands'),
(40, 188, 'Размер монитора', 'razmermonitora', 'text', ''),
(41, 195, 'Марка телевизора', 'markatelevizora', 'select', 'Brands'),
(42, 195, 'Pазмер экрана', 'pazmerekrana', 'text', ''),
(43, 195, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(44, 305, 'Марка', 'marka', 'select', 'Brands'),
(45, 305, 'Модель', 'model', 'text', ''),
(46, 305, 'Тип кузова', 'tipkuzova', 'select', 'Выбрать,Седан,Универсал,Хетчбэк,Купе,Микроавтобус,Минивэн,Кабриолет,Пикап,Фургон'),
(47, 305, 'Год выпуска', 'godvypuska', 'select', '1900:Y'),
(49, 305, 'Цвет', 'svet', 'select', 'Выбрать,Белый,Черный,Асфальт,Бежевый,Вишнёвый,Голубой,Желтый,Коричневый,Синий,Серебристый,Красный,Зеленый'),
(51, 1488, 'Марка', 'marka', 'select', 'Brands'),
(53, 10, 'Марка', 'marka', 'select', 'Brands'),
(54, 11, 'Марка', 'marka', 'select', 'Brands'),
(55, 12, 'Марка', 'marka', 'select', 'Brands'),
(56, 13, 'Марка', 'marka', 'select', 'Brands'),
(57, 14, 'Марка', 'marka', 'select', 'Brands'),
(59, 16, 'Марка', 'marka', 'select', 'Brands'),
(60, 5, 'Марка', 'marka', 'select', 'Brands'),
(61, 4, 'Площадь', 'ploshhad', 'text', ''),
(62, 1488, 'Модель', 'model', 'text', ''),
(63, 1488, 'Год выпуска', 'godvypuska', 'select', '1900:Y'),
(64, 340, 'Пробег (км.)', 'probeg', 'text', ''),
(66, 340, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(67, 1488, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(68, 9, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(69, 10, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(70, 11, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(71, 12, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(72, 13, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(73, 14, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(74, 319, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(75, 16, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(76, 266, 'Марка', 'marka', 'select', 'Brands'),
(77, 76, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее'),
(78, 77, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее'),
(79, 78, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее'),
(80, 79, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее'),
(81, 80, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее'),
(82, 81, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее'),
(83, 82, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее'),
(84, 83, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее'),
(85, 84, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее'),
(86, 85, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее'),
(87, 37, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее'),
(88, 76, 'Размер', 'razmer', 'text', ''),
(89, 77, 'Размер', 'razmer', 'text', ''),
(90, 78, 'Размер', 'razmer', 'text', ''),
(91, 79, 'Размер', 'razmer', 'text', ''),
(92, 80, 'Размер', 'razmer', 'text', ''),
(93, 81, 'Размер', 'razmer', 'text', ''),
(94, 82, 'Размер', 'razmer', 'text', ''),
(95, 83, 'Размер', 'razmer', 'text', ''),
(96, 84, 'Размер', 'razmer', 'text', ''),
(97, 85, 'Размер', 'razmer', 'text', ''),
(98, 37, 'Размер', 'razmer', 'text', ''),
(100, 228, 'Тип приставки', 'tippristavki', 'select', 'Выбрать,Nintendo DS,Nintendo Wii,Sony PlayStation,Sony PSP,XBOX,Другая\n'),
(102, 265, 'Марка', 'marka', 'select', 'Brands'),
(103, 184, 'Марка телефона', 'markatelefona', 'select', 'Brands'),
(104, 184, 'Состояние телефона', 'sostoyanietelefona', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(105, 184, 'Тип мобильной сети', 'tipmobilnojseti', 'radio', 'GSM,CDMA'),
(106, 181, 'Тип мобильной сети', 'tipmobilnojseti', 'radio', 'GSM,CDMA'),
(107, 181, 'Мобильный оператор', 'mobilnyjoperator', 'radio', 'UMS,Beeline,Ucell,UzMobile,Perfectum'),
(108, 2, 'Площадь (м<sup>2</sup>)', 'ploshhadmsup2sup', 'text', ''),
(109, 3, 'Площадь (м<sup>2</sup>)', 'ploshhadmsup2sup', 'text', ''),
(110, 4, 'Площадь (м<sup>2</sup>)', 'ploshhadmsup2sup', 'text', ''),
(115, 19, 'Площадь (м<sup>2</sup>)', 'ploshhadmsup2sup', 'text', ''),
(116, 20, 'Площадь (м<sup>2</sup>)', 'ploshhadmsup2sup', 'text', ''),
(117, 21, 'Площадь (сот.)', 'ploshhadmsup2sup', 'text', ''),
(118, 22, 'Площадь (сот.)', 'ploshhadmsup2sup', 'text', ''),
(119, 23, 'Площадь (м<sup>2</sup>)', 'ploshhadmsup2sup', 'text', ''),
(120, 24, 'Площадь (м<sup>2</sup>)', 'ploshhadmsup2sup', 'text', ''),
(121, 265, 'Модель', 'model', 'text', ''),
(122, 2, 'Площадь (м<sup>2</sup>)', 'ploshhadmsup2sup', 'text', ''),
(123, 26, 'Площадь дома (сот.)', 'ploshhadmsup2sup', 'text', ''),
(124, 267, 'Марка', 'marka', 'select', 'Brands'),
(125, 28, 'Площадь (м<sup>2</sup>)', 'ploshhadmsup2sup', 'text', ''),
(126, 29, 'Площадь (м<sup>2</sup>)', 'ploshhadmsup2sup', 'text', ''),
(127, 30, 'Площадь (сот.)', 'ploshhadmsup2sup', 'text', ''),
(128, 31, 'Площадь (сот.)', 'ploshhadmsup2sup', 'text', ''),
(129, 32, 'Площадь (м<sup>2</sup>)', 'ploshhad', 'text', ''),
(130, 206, 'Площадь (м<sup>2</sup>)', 'ploshhadmsup2sup', 'text', ''),
(131, 3, 'Площадь (м<sup>2</sup>)', 'ploshhadmsup2sup', 'text', ''),
(132, 241, 'Площадь (сот.)', 'ploshhadmsup2sup', 'text', ''),
(133, 304, 'Состояние машины', 'sostoyaniemashiny', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(134, 243, 'Площадь (м<sup>2</sup>)', 'ploshhadmsup2sup', 'text', ''),
(135, 244, 'Площадь (м<sup>2</sup>)', 'ploshhadmsup2sup', 'text', ''),
(136, 245, 'Площадь (сот.)', 'ploshhadmsup2sup', 'text', ''),
(137, 246, 'Площадь (сот.)', 'ploshhadmsup2sup', 'text', ''),
(138, 247, 'Площадь (м<sup>2</sup>)', 'ploshhadmsup2sup', 'text', ''),
(139, 248, 'Площадь (м<sup>2</sup>)', 'ploshhadmsup2sup', 'text', ''),
(140, 304, 'Доп. опции', 'dopopczii', 'checkbox', 'Растаможена,Эл. стеклоподъемники,Охранная система,Электрозеркала,Кондиционер,Парктроник'),
(141, 4, 'Площадь (м<sup>2</sup>)', 'ploshhadmsup2sup', 'text', ''),
(142, 27, 'Количество комнат', 'kolichestvokomnat', 'radio', '1,2,3,4,5,Больше 5'),
(143, 27, 'Жилая площадь (м<sup>2</sup>)', 'zhilayaploshhad', 'text', ''),
(144, 265, 'Год выпуска', 'godvypuska', 'select', '1900:Y'),
(146, 265, 'Пробег (км.)', 'probegkm', 'text', ''),
(147, 187, 'Типы комплектующих\r\n', 'tip komplyutishe', 'select', 'Выбрать,Процессоры,Материнские платы,Оперативные памяти,Жесткие диски,Оптические приводы,Корпуса,Блоки питания,Звуковые карты,Прочие'),
(148, 265, 'Объем двигателя (см<sup>3</sup>)', 'obemdvigatelya', 'text', ''),
(149, 265, 'Тип', 'tip', 'select', 'Классик,Кросс,Спорт-турист,Спортбайк,Триал,Турист,Чоппер,Эндуро,Другой'),
(150, 266, 'Модель', 'model', 'text', ''),
(151, 266, 'Год выпуска', 'godvypuska', 'select', '1900:Y'),
(152, 266, 'Пробег (км.)', 'probeg', 'text', ''),
(153, 266, 'Объем двигателя (см<sup>3</sup>)', 'obemdvigatelya', 'text', ''),
(154, 267, 'Модель', 'model', 'text', ''),
(155, 267, 'Год выпуска', 'godvypuska', 'select', '1900:Y'),
(156, 94, 'Предлагаете / ищете?', 'predlagaeteishhete', 'radio', 'Предлагаю работу,Ищу работу'),
(157, 95, 'Предлагаете / ищете?', 'predlagaeteishhete', 'radio', 'Предлагаю работу,Ищу работу'),
(158, 96, 'Предлагаете / ищете?', 'predlagaeteishhete', 'radio', 'Предлагаю работу,Ищу работу'),
(159, 97, 'Предлагаете / ищете?', 'predlagaeteishhete', 'radio', 'Предлагаю работу,Ищу работу'),
(160, 98, 'Предлагаете / ищете?', 'predlagaeteishhete', 'radio', 'Предлагаю работу,Ищу работу'),
(161, 99, 'Предлагаете / ищете?', 'predlagaeteishhete', 'radio', 'Предлагаю работу,Ищу работу'),
(162, 100, 'Предлагаете / ищете?', 'predlagaeteishhete', 'radio', 'Предлагаю работу,Ищу работу'),
(163, 101, 'Предлагаете / ищете?', 'predlagaeteishhete', 'radio', 'Предлагаю работу,Ищу работу'),
(164, 102, 'Предлагаете / ищете?', 'predlagaeteishhete', 'radio', 'Предлагаю работу,Ищу работу'),
(165, 103, 'Предлагаете / ищете?', 'predlagaeteishhete', 'radio', 'Предлагаю работу,Ищу работу'),
(166, 104, 'Предлагаете / ищете?', 'predlagaeteishhete', 'radio', 'Предлагаю работу,Ищу работу'),
(167, 105, 'Предлагаете / ищете?', 'predlagaeteishhete', 'radio', 'Предлагаю работу,Ищу работу'),
(168, 106, 'Предлагаете / ищете?', 'predlagaeteishhete', 'radio', 'Предлагаю работу,Ищу работу'),
(169, 107, 'Предлагаете / ищете?', 'predlagaeteishhete', 'radio', 'Предлагаю работу,Ищу работу'),
(170, 108, 'Предлагаете / ищете?', 'predlagaeteishhete', 'radio', 'Предлагаю работу,Ищу работу'),
(171, 109, 'Предлагаете / ищете?', 'predlagaeteishhete', 'radio', 'Предлагаю работу,Ищу работу'),
(172, 110, 'Предлагаете / ищете?', 'predlagaeteishhete', 'radio', 'Предлагаю работу,Ищу работу'),
(173, 111, 'Предлагаете / ищете?', 'predlagaeteishhete', 'radio', 'Предлагаю работу,Ищу работу'),
(174, 112, 'Предлагаете / ищете?', 'predlagaeteishhete', 'radio', 'Предлагаю работу,Ищу работу'),
(175, 113, 'Предлагаете / ищете?', 'predlagaeteishhete', 'radio', 'Предлагаю работу,Ищу работу'),
(176, 114, 'Предлагаете / ищете?', 'predlagaeteishhete', 'radio', 'Предлагаю работу,Ищу работу'),
(177, 33, 'Предлагаете / ищете?', 'predlagaeteishhete', 'radio', 'Предлагаю работу,Ищу работу'),
(178, 182, 'Тип', 'tip', 'radio', 'Проводные телефоны,Радиотелефоны'),
(179, 182, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(180, 231, 'Состояние', 'sostoyanie', 'radio', 'Новый,Б/у'),
(181, 183, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(186, 187, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(189, 190, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(190, 191, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(191, 192, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(192, 193, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(193, 228, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(194, 188, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(195, 157, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(196, 195, 'Тип', 'tip', 'radio', 'Жидкокристаллические,Плазменные,Прочие телевизоры'),
(197, 196, 'Состояние', 'sostoyanie', 'radio', 'Новый,Б/у,Требует ремонта'),
(198, 197, 'Состояние', 'sostoyanie', 'radio', 'Новый,Б/у,Требует ремонта'),
(199, 198, 'Состояние', 'sostoyanie', 'radio', 'Новый,Б/у,Требует ремонта'),
(200, 199, 'Состояние', 'sostoyanie', 'radio', 'Новый,Б/у,Требует ремонта'),
(201, 6, 'Условия контракта', 'usloviyakontrakta', 'checkbox', 'Продажа,Аренда,Лизинг'),
(202, 6, 'Цвет', 'czvet', 'select', 'Выбрать,Асфальт,Бежевый,Бирюзовый,Бронзовый,Вишнёвый,Голубой,Желтый,Золотой,Коричневый,Магнолии,Матовый,Оливковый,Розовый,Сафари,Фиолетовый,Хамелеон,Белый,Черный,Синий,Серый,Серебристый,Красный,Зеленый,Апельсин'),
(203, 610, 'Марка телефона', 'markatelefona', 'select', 'Brands'),
(204, 610, 'Модель телефона', 'modeltelefona', 'text', ''),
(205, 610, 'Операционная система', 'operaczionnayasistema', 'select', 'Выбрать,Android‎,iOS,Tizen‎,BlackBerry OS,Windows Phone‎,Другой'),
(206, 610, 'Версия ОS', 'versiyaos', 'text', ''),
(207, 610, 'Размер экрана', 'razmerekrana', 'text', ''),
(208, 610, 'Разрешение дисплея', 'razresheniedispleya', 'select', 'Выбрать,320х480,480х800,540х960,640х960,720х1280,1080х1920,1440х2560,2160x3840'),
(209, 610, 'Количество SIM-карт', 'kolichestvosim-kart', 'radio', 'Одну SIM-карту,Две SIM-карты'),
(210, 610, 'Процессор', 'proczessor', 'radio', 'Одноядерный,Двухъядерный,Четырехъядерный,Восьмиядерный'),
(211, 610, 'ОЗУ', 'ozu', 'select', 'Выбрать,512 МБ,768 МБ,1 ГБ,1.5 ГБ,2 ГБ 3 ГБ, 4 ГБ, 6 ГБ'),
(212, 610, 'ПЗУ', 'pzu', 'select', 'Выбрать,1 ГБ,2 ГБ,4 ГБ,8 ГБ,16 ГБ,32 ГБ,64 ГБ,128 ГБ'),
(213, 610, 'Основная камера', 'osnovnayakamera', 'select', 'Выбрать,1.3 MP,2 MP,3.2 MP,5.0 MP,8.0 MP,13.0 MP,16.0 MP'),
(214, 610, 'Фронтальная камера', 'frontalnayakamera', 'select', 'Выбрать,1.3 MP,2.0 MP,3.2 MP,5.0 MP,8.0 MP'),
(215, 610, 'Поддержка карта памяти', 'podderzhkakartapamyati', 'radio', 'Есть,Нет'),
(216, 610, 'Цвет', 'czvet', 'checkbox', 'Белый,Черный,Золотой,Pозовый,Серебристый,Серый'),
(218, 614, 'Марка ноутбука', 'markanoutbuka', 'select', 'Brands'),
(219, 614, 'Модель ноутбука', 'modelnoutbuka', 'text', ''),
(220, 614, 'Тип ноутбука', 'tipnoutbuka', 'select', 'Выбрать,Ноутбук,Нетбук,Ультрабук,Хромбук,Макбук'),
(221, 614, 'Диагональ экрана', 'diagonalekrana', 'radio', '17" и больше,16"-16.9",15"-15.9",14"-14.9",13"-13.9",12"-12.9",Меньше 12'),
(222, 614, 'Разрешение экрана', 'razreshenieekrana', 'radio', '1024x600,1280x800,1366x768,1600x900,1680x1050,1920x1080,2560x1440,3840x2160'),
(223, 614, 'Тип экрана', 'tipekrana', 'radio', 'TN+Film,IPS,MVA,PVA'),
(224, 614, 'Производитель процессора', 'proizvoditelproczessora', 'radio', 'Intel,AMD'),
(225, 614, 'Модель процессора', 'modelproczessora', 'text', ''),
(226, 614, 'Число ядер процессора', 'chisloyaderproczessora', 'radio', 'Одноядерный,Двухъядерный,Четырехъядерный,Восьмиядерный'),
(227, 614, 'Оперативная память', 'operativnayapamyat', 'select', 'Выбрать,1 ГБ,2 ГБ,3 ГБ,4 ГБ,6 ГБ,8 ГБ,12 ГБ,16 ГБ,32 ГБ,'),
(228, 614, 'Тип жесткого диска', 'zhestkijdisk', 'radio', 'HDD,SSD'),
(229, 614, 'Объем жесткого диска', 'zhestkijdisk', 'select', 'Выбрать,16 Гб,32 Гб,64 Гб,128 Гб,250 Гб,320 Гб,500 Гб,750 Гб,1 Тб,1.5 Тб,2 Тб,'),
(230, 614, 'Тип видеокарты', 'tipvideokarty', 'radio', 'Встроенная,Дискретная'),
(231, 614, 'Модель видеокарти', 'modelvideokarti', 'text', ''),
(232, 614, 'Размер видеопамяти', 'razmervideopamyati', 'select', 'Выбрать,512 МБ,1 ГБ,2 ГБ,3 ГБ, 4 ГБ, 6 ГБ, 8 ГБ'),
(233, 614, 'Оптический привод', 'opticheskijprivod', 'radio', 'Есть,Нет'),
(234, 614, 'Время автономной работы', 'vremyaavtonomnojraboty', 'select', 'Выбрать,4ч.,5ч.,6ч.,8ч.,10ч.,12ч.,16ч.,24ч.'),
(235, 614, 'Цвет', 'czvet', 'select', 'Белый,Черный,Золотой,Pозовый,Серебристый,Серый'),
(237, 319, 'Вид прицепа', 'vidpriczepa', 'select', 'Прицепы для легковых авто,Бортовые прицепы,Изотермические прицепы,Прицепы-автовозы,Прицепы-зерновозы,Прицепы-контейнеровозы,Прицепы-лесовозы,Прицепы-рефрижераторы,Прицепы-фургоны,Прицепы-цистерны,Самосвальные прицепы,Тентованные прицепы,Запчасти / аксессуары'),
(238, 305, 'Объем двигателя (см<sup>3</sup>)', 'obemdvigatelya', 'text', ''),
(242, 305, 'Коробка передач', 'korobkaperedach', 'radio', 'Механический,Автомат,Типтроник'),
(243, 305, 'Вид топлива', 'vidtopliva', 'radio', 'Бензин, Газ, Дизель'),
(244, 305, 'Доп. опции', 'dopopczii', 'checkbox', 'Растаможена,Эл. стеклоподъемники,Охранная система,Электрозеркала,Кондиционер,Парктроник'),
(314, 757, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(315, 17, 'Этажность дома', 'tajnostdoma', 'radio', '1,2,3,4'),
(316, 19, 'Количество комнат', 'kolichestvokomnat', 'radio', '1,2,3,4,5,Больше 5'),
(317, 21, 'Удалённость от города (км)', 'udalyonnostotgorodakm', 'text', ''),
(318, 26, 'Количество комнат', 'kolichestvokomnat', 'text', ''),
(319, 26, 'Этажность дома', 'etazhnostdoma', 'radio', '1,2,3,4'),
(320, 27, 'Этаж', 'etazh', 'text', ''),
(321, 28, 'Количество комнат', 'kolichestvokomnat', 'radio', '1,2,3,4,5,Больше 5'),
(322, 30, 'Удалённость от города (км)', 'udalyonnostotgorodakm', 'text', ''),
(323, 241, 'Количество комнат', 'udalyonnostotgoroda', 'text', ''),
(324, 241, 'Этажность дома', 'tajnostdoma', 'radio', '1,2,3,4'),
(325, 242, 'Количество комнат', 'kolichestvokomnat', 'radio', '1, 2, 3, 4, 5,Больше 5'),
(326, 242, 'Жилая площадь (м<sup>2</sup>)', 'zhilayaploshhad', 'text', ''),
(327, 242, 'Тип', 'tip', 'radio', 'Кирпичный, Панельный, Блочный\r\n'),
(328, 242, 'Этаж', 'etazh', 'text', ''),
(329, 242, 'Этажность дома', 'etazhnostdoma', 'text', ''),
(330, 243, 'Количество комнат', 'kolichestvokomnat', 'radio', '1, 2, 3, 4, 5,Больше 5'),
(331, 245, 'Удалённость от города (км)', 'udalyonnostotgorodakm', 'text', ''),
(332, 756, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(333, 1488, 'Пробег (км.)', 'probeg', 'text', ''),
(334, 756, 'Наименование', 'naimenovaniya', 'text', ''),
(335, 1488, 'Вид топлива', 'vidtopliva', 'radio', 'Бензин, Газ, Дизель'),
(336, 1489, 'Марка', 'marka', 'select', 'Brands'),
(337, 1489, 'Модель', 'model', 'text', ''),
(338, 1489, 'Год выпуска', 'godvypuska', 'select', '1900:Y'),
(339, 1489, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(340, 1489, 'Пробег (км.)', 'probeg', 'text', ''),
(341, 1489, 'Вид топлива', 'vidtopliva', 'radio', 'Бензин, Газ, Дизель'),
(342, 1390, 'Наименование', 'naimenovaniya', 'text', ''),
(343, 265, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(344, 266, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(345, 267, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(346, 356, 'Марка', 'marka', 'select', 'Brands'),
(347, 356, 'Модель', 'model', 'text', ''),
(348, 356, 'Год выпуска', 'godvypuska', 'select', '1900:Y'),
(349, 356, 'Вид топлива', 'vidtopliva', 'radio', 'Бензин, Газ, Дизель'),
(350, 356, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(351, 357, 'Состояние', 'sostoyanie', 'radio', 'Новый,Б/у,Требует ремонта'),
(352, 358, 'Состояние', 'sostoyanie', 'radio', 'Новый,Б/у,Требует ремонта'),
(353, 359, 'Марка', 'marka', 'text', ''),
(354, 359, 'Модель', 'model', 'text', ''),
(355, 359, 'Год выпуска', 'godvypuska', 'select', '1900:Y'),
(356, 359, 'Вид топлива', 'vidtopliva', 'radio', 'Бензин, Газ, Дизель'),
(357, 359, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(358, 360, 'Состояние', 'sostoyanie', 'radio', 'Новый,Б/у,Требует ремонта'),
(359, 347, 'Марка', 'marka', 'text', ''),
(360, 347, 'Год выпуска', 'godvypuska', 'select', '1900:Y'),
(361, 347, 'Вид топлива', 'vidtopliva', 'radio', 'Бензин, Газ, Дизель'),
(362, 347, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(363, 348, 'Марка', 'marka', 'text', ''),
(364, 348, 'Год выпуска', 'godvypuska', 'select', '1900:Y'),
(365, 348, 'Пробег (км.)', 'probeg', 'text', ''),
(366, 348, 'Вид топлива', 'vidtopliva', 'radio', 'Бензин, Газ, Дизель'),
(367, 348, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(368, 349, 'Марка', 'marka', 'text', ''),
(369, 349, 'Год выпуска', 'godvypuska', 'select', '1900:Y'),
(370, 349, 'Вид топлива', 'vidtopliva', 'radio', 'Бензин, Газ, Дизель'),
(371, 349, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(372, 350, 'Марка', 'marka', 'text', ''),
(373, 350, 'Год выпуска', 'godvypuska', 'select', '1900:Y'),
(374, 350, 'Вид топлива', 'vidtopliva', 'radio', 'Бензин, Газ, Дизель'),
(375, 350, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(376, 351, 'Марка', 'marka', 'text', ''),
(377, 351, 'Год выпуска', 'godvypuska', 'select', '1900:Y'),
(378, 304, 'Вид топлива', 'vidtopliva', 'radio', 'Бензин, Газ, Дизель'),
(379, 351, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(380, 351, 'Вид топлива', 'vidtopliva', 'radio', 'Бензин, Газ, Дизель, Электроэнергия'),
(381, 823, 'Марка', 'marka', 'text', ''),
(382, 823, 'Год выпуска', 'godvypuska', 'select', '1900:Y'),
(383, 823, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(384, 824, 'Марка', 'marka', 'text', ''),
(385, 824, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(386, 825, 'Марка', 'marka', 'text', ''),
(387, 825, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(388, 826, 'Марка', 'marka', 'text', ''),
(389, 826, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(390, 342, 'Марка', 'marka', 'text', ''),
(391, 342, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(392, 343, 'Марка', 'marka', 'text', ''),
(393, 343, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(394, 344, 'Марка', 'marka', 'text', ''),
(395, 344, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(396, 180, 'Марка телефона', 'marka telefona', 'select', 'Brands'),
(397, 180, 'Модель', 'model', 'text', ''),
(398, 180, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(399, 1388, 'Наименование', 'naimenovaniye', 'text', ''),
(400, 283, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(401, 284, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(402, 285, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(403, 300, 'Состояние', 'sostoyanie', 'radio', 'Новый,Б/у,Требует ремонта'),
(404, 301, 'Состояние', 'sostoyanie', 'radio', 'Новый,Б/у,Требует ремонта'),
(405, 302, 'Состояние', 'sostoyanie', 'radio', 'Новый,Б/у,Требует ремонта'),
(406, 303, 'Состояние', 'sostoyanie', 'radio', 'Новый,Б/у,Требует ремонта'),
(407, 296, 'Состояние', 'sostoyanie', 'radio', 'Новый,Б/у,Требует ремонта'),
(408, 297, 'Состояние', 'sostoyanie', 'radio', 'Новый,Б/у,Требует ремонта'),
(409, 298, 'Состояние', 'sostoyanie', 'radio', 'Новый,Б/у,Требует ремонта'),
(410, 299, 'Состояние', 'sostoyanie', 'radio', 'Новый,Б/у,Требует ремонта'),
(411, 229, 'Состояние', 'sostoyanie', 'radio', 'Новый,Б/у'),
(412, 325, 'Состояние', 'sostoyanie', 'radio', 'Новый,Б/у,Требует ремонта'),
(413, 363, 'Марка', 'marka', 'text', ''),
(414, 364, 'Марка', 'marka', 'text', ''),
(415, 365, 'Марка', 'marka', 'text', ''),
(416, 366, 'Марка', 'marka', 'text', ''),
(417, 367, 'Марка', 'marka', 'text', ''),
(418, 368, 'Марка', 'marka', 'text', ''),
(419, 369, 'Марка', 'marka', 'text', ''),
(420, 363, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(421, 364, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(422, 365, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(423, 366, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(424, 368, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(425, 367, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(426, 369, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(427, 372, 'Марка', 'marka', 'text', ''),
(428, 373, 'Марка', 'marka', 'text', ''),
(429, 374, 'Марка', 'marka', 'text', ''),
(430, 375, 'Марка', 'marka', 'text', ''),
(431, 376, 'Марка', 'marka', 'text', ''),
(432, 377, 'Марка', 'marka', 'text', ''),
(433, 379, 'Марка', 'marka', 'text', ''),
(434, 372, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(435, 373, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(436, 374, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(437, 375, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(438, 376, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(439, 377, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(440, 379, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(441, 290, 'Марка', 'marka', 'text', ''),
(442, 291, 'Марка', 'marka', 'text', ''),
(443, 292, 'Марка', 'marka', 'text', ''),
(444, 293, 'Марка', 'marka', 'text', ''),
(445, 294, 'Марка', 'marka', 'text', ''),
(446, 295, 'Марка', 'marka', 'text', ''),
(447, 290, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(448, 291, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(449, 292, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(450, 293, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(451, 294, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(452, 295, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(453, 286, 'Марка', 'marka', 'text', ''),
(454, 287, 'Марка', 'marka', 'text', ''),
(455, 288, 'Марка', 'marka', 'text', ''),
(456, 289, 'Марка', 'marka', 'text', ''),
(457, 286, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(458, 287, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(459, 288, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(460, 289, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(461, 269, 'Тип мебели\n', 'tipi mebeli', 'radio', 'Мягкая мебель,Шкафы / стенки,Столы / стулья,Тумбы под ТВ,Прочая мебель для гостиной\n'),
(462, 269, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(463, 270, 'Тип мебели\r\n', 'tipi mebeli', 'radio', 'Гарнитуры,Кровати,Матрасы,Комоды / тумбы,Шкафы,Прочая мебель для спальни\r\n'),
(464, 270, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(465, 271, 'Тип мебели\r\n', 'tipi mebeli', 'radio', 'Столы,Кресла / стулья,Шкафы / полки,Прочая офисная мебель\r\n'),
(466, 271, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(467, 272, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(468, 273, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(469, 274, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(470, 275, 'Тип мебели\r\n', 'tipi mebeli', 'radio', 'Детский набор,Кровать,Шкафы,Столы,Матрасы,Кресло\r\n'),
(471, 275, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(472, 276, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(473, 277, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(474, 278, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(475, 279, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(476, 280, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(477, 397, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(478, 398, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(479, 396, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(480, 388, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(481, 389, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(482, 390, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(483, 391, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(484, 392, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(485, 393, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(486, 394, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(487, 889, 'Состояние', 'sostoyanie', 'radio', 'Новый,Отличное,Хорошее,Среднее,Требует ремонта'),
(488, 1388, 'Вид ароматизатора', 'vid aromatizatora', 'select', 'Выбрать,Пропитанный,Гелевый,Жидкий,Меловой,Мембранный,Натуральный,Ионный\r\n'),
(489, 1388, 'Размещение', 'razmesheniya', 'select', 'Выбрать,Универсальное,Подвесной,Вентиляционная решетка,На торпедо,Настольный,Стикер\r\n'),
(490, 1388, 'Ароматизация', 'Aromatizasiya', 'radio', 'Автоматическая,Ручная'),
(491, 1389, 'Наименование', 'naimenovaniye', 'text', ''),
(492, 1389, 'Тип', 'tip', 'checkbox', 'Нейтрализатор запахов,Очистители пластики,Очиститель грязи,Очиститель двигателя,Очиститель кузова,Очиститель от краски,Очиститель салона,Очиститель обивки,Очиститель стекол,Очиститель шин'),
(493, 1389, 'Область применения', 'oblastprimeneniya', 'checkbox', 'Салон,Кузов,Стекла,Двигатель,Сиденья и обивка,Диски и шины\r\n'),
(494, 1390, 'Тип', 'tip', 'radio', 'Полироль,Шампунь,Покрытие для кузова,Воск\r\n'),
(495, 1390, 'Назначение', 'naznacheniya', 'checkbox', 'Полировка,Очистка,Восстановление,Промывка'),
(496, 1390, 'Область применения', 'oblastprimeneniya', 'checkbox', 'Кузов,Салон,Диски и шины,Сиденья и обивка,Стекла,Освещение\r\n'),
(497, 1391, 'Наименование', 'naimenovaniya', 'text', ''),
(498, 1391, 'Тип', 'tip', 'select', 'Щетка для автомобиля,Скребок,Стеклоомыватель,Губка\r\n\r\n'),
(499, 1392, 'Наименование', 'naimenovaniya', 'text', ''),
(500, 1392, 'Тип', 'tip', 'checkbox', 'Герметик,Клей,Адгезив,Холодная сварка\r\n\r\n'),
(501, 1392, 'Область применения', 'oblastprimeneniya', 'checkbox', 'Двигатель,Система охлаждения,Кузов,Резиновые детали,Диски и шины,Освещение,Салон,Стекла\r\n\r\n'),
(502, 1516, 'Наименование', 'naimenovaniya', 'text', ''),
(503, 1516, 'Тип', 'tip', 'checkbox', 'Антидождь,Размораживатель замков и стекол,Лента для ремонта,Жидкость для быстрого запуска,Антизапотеватель,Для ремонта царапин,Набор автохимии,Антигололедное средство,Техническая паста\r\n\r\n'),
(504, 1076, 'Бренд', 'brend', 'select', 'Brands\n\n'),
(505, 1076, 'Наименование', 'naimenovaniya', 'text', ''),
(506, 1076, 'Вид масла', 'vidmasla', 'radio', 'Синтетическое,Полусинтетическое,НС-синтетическое,Минеральное\r\n\r\n'),
(507, 1076, 'Вязкость по SAE', 'vyazkostposae', 'select', 'Выбрать,5W-30,10W-40,5W-40,0W-30,0W-40,10W-60,15W-40,5W-50,10W-50,10W-30,15W-50,0W-20,5W-20\r\n'),
(508, 1076, 'Классификация по API', 'klasifikasiyapoapi', 'radio', 'SL/CF,SN/CF,SM/CF,SN,SL'),
(509, 1076, 'Вид двигателя', 'viddvigetelya', 'checkbox', 'Бензиновый 4-х тактный,Дизельный,Газовый,Бензиновый 2-х тактный'),
(510, 1076, 'Объем упаковки', 'obyomupakovki', 'radio', '1 литр,2 литр,3 литр,4 литр,5 литр\r\n'),
(511, 1399, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(512, 1399, 'Наименование', 'naimenovaniya', 'text', ''),
(513, 1399, 'Вид коробки передач', 'vidkarobkiperedach', 'checkbox', 'Автоматическая,Механическая\r\n'),
(514, 1399, 'Вид масла\r\n', 'vidmasla', 'radio', 'Синтетическое,Минеральное\r\n'),
(515, 1399, 'Объем упаковки\r\n', 'obyomupakovki', 'radio', '1 литр,2 литр,3 литр,4 литр,5 литр\r\n'),
(516, 1400, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(517, 1400, 'Наименование', 'naimenovaniya', 'text', ''),
(518, 1400, 'Область применения', 'oblastprimeneniya', 'checkbox', 'Кузов,Резиновые детали,Двигатель,Салон,Диски и шины\r\n\r\n'),
(519, 1401, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(520, 1401, 'Наименование', 'naimenovaniya', 'text', ''),
(521, 1401, 'Тип', 'tip', 'checkbox', 'Присадка в топливо,Присадка в масло,Остановка течи двигателя,Стабилизатор вязкости масла,Кондиционер приводных ремней,Остановка течи радиатора\r\n\r\n'),
(522, 1401, 'Назначение', 'naznacheniya', 'checkbox', 'Присадка,Очистка,Восстановление,Обслуживание\r\n\r\n'),
(523, 1401, 'Область применения', 'oblastprimeneniya', 'radio', 'Топливная система,Двигатель,Система охлаждения\r\n\r\n\r\n'),
(524, 1402, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(525, 1402, 'Наименование', 'naimenovaniya', 'text', ''),
(526, 1402, 'Раствор антифриза', 'rastvor antifrisa', 'radio', 'Готовый,Концентрат\r\n\r\n'),
(527, 1402, 'Объем упаковки\r\n', 'obyomupakovki', 'radio', '1 литр,2 литр,3 литр,4 литр,5 литр,10 литр\r\n'),
(528, 1403, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(529, 1403, 'Наименование', 'naimenovaniya', 'text', ''),
(530, 1403, 'Стандарт тормозной жидкости', 'standarttormoznoyjidkosti', 'radio', 'DOT 3,DOT 4,DOT 5.1'),
(531, 1404, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(532, 1404, 'Наименование', 'naimenovaniya', 'text', ''),
(533, 1393, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(534, 1393, 'Наименование', 'naimenovaniya', 'text', ''),
(535, 1393, 'Тип', 'tip', 'checkbox', 'Автомобильный компрессор,Манометр,Автомобильный насос\r\n'),
(536, 1393, 'Материал корпуса\r\n', 'materialkorpusa', 'radio', 'Пластик,Металл,Резина,Сталь,Полимер\r\n'),
(537, 1394, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(538, 1394, 'Наименование', 'naimenovaniya', 'text', ''),
(539, 1394, 'Тип', 'tip', 'radio', 'Бутылочный домкрат,Подкатной домкрат,Ромбический домкрат,Скоба буксировочная,Автомобильная лебедка,Домкрат,Страховочная опора\r\n'),
(540, 1395, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(541, 1395, 'Наименование', 'naimenovaniya', 'text', ''),
(542, 1396, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(543, 1396, 'Наименование', 'naimenovaniya', 'text', ''),
(544, 1396, 'Тип', 'tip', 'radio', 'Минимойка,Принадлежность для минимойки\r\n'),
(545, 1397, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(546, 1397, 'Наименование', 'naimenovaniya', 'text', ''),
(547, 1397, 'Материал\r\n', 'material', 'radio', 'Кожа с покрытием,Металл,Пластик,Сталь'),
(548, 1398, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(549, 1398, 'Наименование', 'naimenovaniya', 'text', ''),
(550, 1398, 'Питание', 'pitaniye', 'checkbox', 'От автомобильной сети,Встроенный аккумулятор,12В,220В'),
(551, 1398, 'Количество насадок', 'kolichestvonasadok', 'radio', '1 шт.,2 шт.,3 шт.,4 шт.,5 шт.'),
(552, 1517, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(553, 1517, 'Наименование', 'naimenovaniya', 'text', ''),
(554, 1409, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(555, 1409, 'Наименование', 'naimenovaniya', 'text', ''),
(556, 1409, 'Тип', 'tip', 'radio', 'Бескаркасные,Каркасные,Гибридные,Каркасные со спойлером'),
(557, 1409, 'Крепление щеток стеклоочистителя', 'kreoleniyashetokstekloochistitelya', 'radio', 'Крючок (Hook / J-Hook),Боковой штырь (Side pin),Кнопка (Push button),Штыковой замок (Bayonet arm),Верхний замок (Top lock),Боковой зажим (Pinch tab),Клешня (Claw),Штырь (Pin lock),Узкая кнопка (Narrow Push Button),Оригинальное (Special),Боковое крепление (Side Mounting)'),
(558, 1409, 'Сезон', 'sezon', 'radio', 'Всесезон,Лето,Зима'),
(559, 1410, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(560, 1410, 'Наименование', 'naimenovaniya', 'text', ''),
(561, 1410, 'Тип', 'tip', 'radio', 'Автолампа,Дневные ходовые огни,Противотуманные фары,Блок розжига'),
(562, 1410, 'Технология', 'texnologiya', 'radio', 'Галогенная,Ксенон (HID),Накаливания,Светодиодная'),
(563, 1410, 'Назначение лампы', 'naznacheniyalampi', 'radio', 'Для ближнего/дальнего света,Для противотуманных фар,Для габаритных огней,Для подсветки номерного знака,Для указателей поворота,Для освещения салона автомобиля,Для стоп-сигналов,Для фонарей заднего хода,Для подсветки багажника'),
(564, 1411, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(565, 1411, 'Наименование', 'naimenovaniya', 'text', ''),
(566, 1411, 'Тип', 'tip', 'radio', 'Автомобильный аккумулятор,Мото аккумулятор'),
(567, 1411, 'Полярность', 'polyarnost', 'radio', 'Обратная (-/+),Прямая (+/-),Универсальная'),
(568, 1411, 'Вид клемм', 'vidklem', 'radio', 'Стандартные,Плоские,Тонкие,Боковые'),
(569, 1412, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(570, 1412, 'Наименование', 'naimenovaniya', 'text', ''),
(571, 1412, 'Тип', 'tip', 'radio', 'Инверторы,Зарядные устройства'),
(572, 1405, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(573, 1405, 'Наименование', 'naimenovaniya', 'text', ''),
(574, 1405, 'Диаметр', 'diametr', 'radio', '12",13",14",15",16",17",18",19",20",21",22"'),
(575, 1405, 'Высота профиля', 'visotaprofila', 'radio', '10.5,25,30,35,40,45,50,55,60,65,70,75,80,85'),
(576, 1405, 'Ширина профиля', 'shirinafrofila', 'radio', '135,145,155,165,175,185,195,205,215,225,235,245,255,265,275,285,295,305,310,315,325,335,345'),
(577, 1405, 'Сезонность', 'sezonnost', 'radio', 'Зима,Лето,Всесезон'),
(578, 1405, 'Вид', 'vid', 'radio', 'Нешипованная,Шипованная'),
(579, 1405, 'Тип', 'tip', 'radio', 'Для легкового а/м,Для внедорожника,Для грузового а/м'),
(580, 1406, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(581, 1406, 'Наименование', 'naimenovaniya', 'text', ''),
(582, 1406, 'Диаметр', 'diametr', 'radio', '13",14",15",16",17",18",19",20",21"'),
(583, 1406, 'Ширина', 'shirina', 'radio', '4.5",5",5.5",6",6.5",7",7.5",8",8.5",9",9.5",10",11.5"'),
(584, 1406, 'Число крепежных отверстий (LZ)', 'chislokreplennixotverstey', 'radio', '4 шт.,5 шт.,6 шт.'),
(585, 1406, 'Вид диска', 'viddiska', 'radio', 'Литой,Штампованный'),
(586, 1406, 'Материал\r\n', 'material', 'radio', 'Алюминий,Сталь'),
(587, 1407, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(588, 1407, 'Наименование', 'naimenovaniya', 'text', ''),
(589, 1407, 'Тип', 'tip', 'radio', 'Набор для ремонта шин,Хранение колес,Колпачок для ниппеля,Ниппель,Антипрокол'),
(590, 1408, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(591, 1408, 'Наименование', 'naimenovaniya', 'text', ''),
(592, 1408, 'Диаметр колеса', 'diametrkolesa', 'radio', '12",13",14",15",16"'),
(593, 1413, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(594, 1413, 'Наименование', 'naimenovaniya', 'text', ''),
(595, 1413, 'Тип', 'tip', 'radio', 'Колонки для авто,Сабвуфер для авто,Усилитель'),
(596, 1413, 'Максимальная мощность (Вт)', 'maksimalnayamoshnost', 'text', ''),
(597, 1413, 'Номинальная мощность, Вт', 'nominalnayaamoshnost', 'text', ''),
(598, 1414, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(599, 1414, 'Наименование', 'naimenovaniya', 'text', ''),
(600, 1414, 'Типоразмер', 'tiporazmer', 'radio', '1 DIN,2 DIN'),
(601, 1414, 'Передняя панель', 'perednayapanel', 'radio', 'Съемная,Фиксированная,Моторизованная,Съемная откидная'),
(602, 1414, 'Изображение экрана', 'izobrajeniyaekrana', 'radio', 'Монохромное,Цветное'),
(603, 1414, 'Радио', 'radio', 'checkbox', 'FM,AM,УКВ,расширенный FM,SW'),
(604, 1414, 'Особенности', 'osobennosti', 'checkbox', 'Подсоединение по стандарту ISO,USB-вход на передней панели,Поддержка тэгов ID3,Сенсорный экран,Управление с кнопок на руле (SWC),Поддержка камеры заднего вида,Поддержка кириллицы,Поддержка iPod/iPhone/iPad,Поддержка Android,CD-текст,Поиск по файлам,Анти-шок,Моторизованный экран,ТВ-тюнер,24-битный ЦАП,Регулировка яркости подсветки,Поддержка CarPlay'),
(605, 1414, 'Форматы дисков', 'formatidiskov', 'checkbox', 'USB,CD-R/CD-RW,CD-DA,CD-ROM,DVD-R/-RW,DVD+R/+RW,VideoCD'),
(606, 1415, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(607, 1415, 'Наименование', 'naimenovaniya', 'text', ''),
(608, 1416, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(609, 1416, 'Наименование', 'naimenovaniya', 'text', ''),
(610, 1417, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(611, 1417, 'Наименование', 'naimenovaniya', 'text', ''),
(612, 1417, 'Диагональ экрана', 'diogonalekrana', 'radio', '4",5",6",7",8",9"'),
(613, 1418, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(614, 1418, 'Наименование', 'naimenovaniya', 'text', ''),
(615, 1419, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(616, 1419, 'Наименование', 'naimenovaniya', 'text', ''),
(617, 785, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(618, 785, 'Наименование', 'naimenovaniya', 'text', ''),
(619, 785, 'Противоугонные функции', 'protivougonniyefunksii', 'checkbox', 'Режим "паника",Бесшумное включение режима охраны,Блокировка двигателя,Автоматическое включение режима охраны,Режим Anti-HiJack,Противоугонная функция "Anti-carjacking",Контроль работы двигателя по сигналам тахометра,Бесшумный режим охраны,Включение режима охраны без брелка,Контроль работы двигателя по шумам в сети,Блокировка стартера,Световой сигнал тревоги\r\n'),
(620, 785, 'Доп. функции', 'dop.funksii', 'checkbox', 'Поиск автомобиля,Предупреждение о разряде батарейки брелка,Память на 2 последних срабатывания системы,Дистанционный запуск двигателя автомобиля,Звуковые и световые сигналы подтверждения при постановке/снятии системы с охраны,Дистанционное управление ЦЗ,Обход неисправной зоны при постановке на охрану,Дистанционное глушение двигателя,Вызов автовладельца,Самодиагностика,Пассивная постановка на охрану,Постановка системы в режим охраны с раздельным отключением зон датчиков,Дистанционное измерение температуры в моторном отсеке'),
(621, 1420, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(622, 1420, 'Наименование', 'naimenovaniya', 'text', ''),
(623, 1420, 'Тип', 'tip', 'radio', 'Разветвитель гнезда прикуривателя,Зарядное устройство,Пуско-зарядное устройство,Предохранители,Провода вспомогательного запуска,Тестер автомобильный,Автомобильный фонарь,Пусковое устройство,Звуковой сигнал,Инвертор'),
(624, 1421, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(625, 1421, 'Наименование', 'naimenovaniya', 'text', ''),
(626, 1421, 'Тип', 'tip', 'radio', 'Видеорегистратор,Видеорегистратор с радар-детектором,Видеорегистратор-зеркало'),
(627, 1421, 'Особенности', 'osobennosti', 'checkbox', 'Запись звука,Режим фотосъемки,Встроенный динамик,Порт HDMI,Запись времени и даты,Голосовые подсказки,Ночная съемка,Поворотный экран,Съемный дисплей,Поворотная камера,Камера заднего вида/вида салона,Многомодульная конструкция,Подключение мобильного устройства,Сенсорный экран'),
(628, 1421, 'Макс. разрешение видеозаписи', 'maks.razresheniyavideozapisi', 'radio', '1920x1080 FullHD,2304x1296,1280x720 HD,640x480 VGA,1920x540\r\n'),
(629, 1422, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(630, 1422, 'Наименование', 'naimenovaniya', 'text', ''),
(631, 1422, 'Особенности', 'osobennosti', 'checkbox', 'Голосовые подсказки,Запись звука,Встроенный динамик,Запись времени и даты'),
(632, 1423, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(633, 1423, 'Наименование', 'naimenovaniya', 'text', ''),
(634, 1424, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(635, 1424, 'Наименование', 'naimenovaniya', 'text', ''),
(636, 1425, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(637, 1425, 'Наименование', 'naimenovaniya', 'text', ''),
(638, 1426, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(639, 1426, 'Наименование', 'naimenovaniya', 'text', ''),
(640, 1425, 'Питание', 'pitaniye', 'radio', 'Встроенный аккумулятор,LiIon,LiPol'),
(641, 1425, 'Диагональ экрана', 'diogonalekrana', 'radio', '4",5",6",7",8",9"'),
(642, 1425, 'Особенности', 'osobennosti', 'checkbox', 'Сенсорный экран,Оповещение о скоростных камерах,Голосовые подсказки,Загрузка и обновление карт,Отображение ограничений скорости,Автоматический пересчет маршрута,Отображение дорожных развязок в 3D,Отображение макетов зданий в 3D,Достопримечательности (POI),Выбор режима для авто, пешехода, велосипеда и т.д.,Bluetooth,FM трансмиттер'),
(643, 1433, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(644, 1433, 'Наименование', 'naimenovaniya', 'text', ''),
(645, 1433, 'Для автомобиля ', 'dlyaavtomobila', 'radio', 'DAMAS,MATIZ,SPARK,NEXIA,COBALT,LACETTI,MALIBU,ORLANDO,CAPTIVA,Другая марка\r\n'),
(646, 1433, 'Назначение ковриков', 'naznacheniyakovrikov', 'radio', 'Автомобильный салон,Багажник\r\n'),
(647, 1433, 'Материал', 'material', 'radio', 'Полиуретан,Текстиль,Резина,ПВХ (поливинилхлорид),Ковролин,Полипропилен,Эластомер\r\n'),
(648, 1433, 'Особенности', 'osobennosti', 'checkbox', 'Противоскользящий,Водоотталкивающий'),
(649, 1434, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(650, 1434, 'Наименование', 'naimenovaniya', 'text', ''),
(651, 1434, 'Тип', 'tip', 'radio', 'Чехол на сиденье,Чехол на мототехнику,Подушка на сиденье,Чехол-майка,Накидка на сиденье,Защитная накидка на сиденье,Чехол на автомобиль,Чехол на ремень безопасности,Чехол на подголовник,Накидка на сиденье,Защита для обуви,Чехол на запасное колесо,Чехол-подстилка,Чехол на рычаг КПП'),
(652, 1445, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(653, 1445, 'Наименование', 'naimenovaniya', 'text', ''),
(654, 1445, 'Тип', 'tip', 'radio', 'Светоотражатель,Аксессуар для автомобиля,Коврик противоскользящий,Лента антипробуксовочная,Автозеркало,Тепловентилятор автомобильный,Автомобильные подушки,Рамки для госномера,Накладки на педали,Столик автомобильный,Пепельница,Рукоятка рычага КПП/ручного тормоза,Ареометр,Термометр автомобильный,Подлокотник'),
(655, 1436, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(656, 1436, 'Наименование', 'naimenovaniya', 'text', ''),
(657, 1435, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(658, 1435, 'Наименование', 'naimenovaniya', 'text', ''),
(659, 1435, 'Для автомобиля', 'dlyaavtomobila', 'radio', 'DAMAS,MATIZ,SPARK,NEXIA,COBALT,LACETTI,MALIBU,ORLANDO,CAPTIVA,Другая марка'),
(660, 1437, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(661, 1437, 'Наименование', 'naimenovaniya', 'text', ''),
(662, 1438, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(663, 1438, 'Наименование', 'naimenovaniya', 'text', ''),
(664, 1437, 'Тип', 'tip', 'radio', 'Органайзер,Ремень для фиксации груза,Сетка багажная,Резинка багажная,Карман для багажника,Автомобильная вешалка'),
(665, 1440, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(666, 1440, 'Наименование', 'naimenovaniya', 'text', ''),
(667, 1441, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(668, 1441, 'Наименование', 'naimenovaniya', 'text', ''),
(669, 1440, 'Тип', 'tip', 'radio', 'Автохолодильник,Термос,Автокружка'),
(670, 1442, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(671, 1442, 'Наименование', 'naimenovaniya', 'text', ''),
(672, 1443, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(673, 1443, 'Наименование', 'naimenovaniya', 'text', ''),
(674, 1442, 'Тип', 'tip', 'radio', 'Знак аварийной остановки,Светоотражащий жилет,Автомобильная аптечка,Автомобильный огнетушитель,Аварийный набор'),
(675, 1444, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(676, 1444, 'Наименование', 'naimenovaniya', 'text', ''),
(677, 1444, 'Материал', 'material', 'radio', 'Пластик,Полимер,Сталь'),
(678, 1444, 'Объем (литр)', 'obyom(litr)', 'text', ''),
(679, 1075, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(680, 1075, 'Наименование', 'naimenovaniya', 'text', ''),
(681, 1439, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(682, 1439, 'Наименование', 'naimenovaniya', 'text', ''),
(683, 1075, 'Тип', 'tip', 'radio', 'Мотозащита,Мотошлем,Очки,Мотокуртки,Брюки,Подшлемник,Мотообувь,Мотопояс,Мотоперчатки'),
(684, 1439, 'Тип', 'tip', 'radio', 'Зеркала для мотоциклов,Защита ралиатора,Чехлы для мотоциклов,Протиугонки,Спойлеры и крылья,Наклейки для мотоцикла,Мотосумка,Муфта на руль,Прочие мотоаксессуары'),
(685, 1075, 'Материал', 'material', 'radio', 'Поликарбонат,Полиэстер,Карбон,Хлопок,Пластик,Стекловолокно,Резина,Металл,Кожа,Искусственная кожа\r\n'),
(686, 1427, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(687, 1427, 'Наименование', 'naimenovaniya', 'text', ''),
(688, 1427, 'Тип', 'tip', 'radio', 'Дефлекторы,Подкрылки,Брызговики,Накладка защитная на бампер'),
(689, 1428, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(690, 1428, 'Наименование', 'naimenovaniya', 'text', ''),
(691, 1428, 'Тип', 'tip', 'radio', 'Багажник,Багажный бокс (автобокс),Велобагажник,Комплект для установки,Крепление,Ограничитель'),
(692, 1429, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(693, 1429, 'Наименование', 'naimenovaniya', 'text', ''),
(694, 1430, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(695, 1430, 'Наименование', 'naimenovaniya', 'text', ''),
(696, 1431, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(697, 1431, 'Наименование', 'naimenovaniya', 'text', ''),
(698, 1446, 'Наименование', 'naimenovaniya', 'text', ''),
(699, 1447, 'Наименование', 'naimenovaniya', 'text', ''),
(700, 611, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(701, 611, 'Наименование', 'naimenovaniya', 'text', ''),
(702, 611, 'Тип матрицы', 'tipmatrisa', 'radio', 'Цветной,Черно-белый'),
(703, 611, 'Поддержка карт памяти', 'podderjkakartapamyati', 'radio', 'Есть,Нет');
INSERT INTO `at_goods_fields` (`id`, `id_category`, `name`, `nameEn`, `type`, `option`) VALUES
(704, 611, 'Особенности', 'osobennosti', 'checkbox', 'Камера,Диктофон,Водозащищенный корпус,FM-радио,Фонарик,Громкая связь,Мультимедийный плеер,Пылезащитный корпус,Ударопрочный корпус,Конференц-связь'),
(705, 611, 'Разъемы', 'razyomi', 'checkbox', '3.5 мм,microUSB 2.0,miniUSB 2.0'),
(706, 612, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(707, 612, 'Наименование', 'naimenovaniya', 'text', ''),
(708, 612, 'Число трубок в комплекте', 'chislotrubokvkomplekte', 'radio', '1 шт.,2 шт.'),
(709, 612, 'Изображение дисплея', 'izobrajeniyadispleya', 'radio', 'Монохромное,Цветное'),
(710, 612, 'Функции', 'funksii', 'checkbox', 'Определитель номера,Автоответчик,Часы,Будильник,Спикерфон,Повтор номера,Поиск трубки,Быстрый набор номера,Дата,Радионяня,Конференц-связь,Интерком,SMS,Автодозвон,Календарь'),
(711, 623, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(712, 623, 'Наименование', 'naimenovaniya', 'text', ''),
(713, 1476, 'Наименование', 'naimenovaniya', 'text', ''),
(714, 1476, 'Для', 'dlya', 'select', ''),
(715, 1477, 'Наименование', 'naimenovaniya', 'text', ''),
(716, 1477, 'Для', 'dlya', 'select', ''),
(717, 1478, 'Наименование', 'naimenovaniya', 'text', ''),
(718, 1478, 'Для', 'dlya', 'select', ''),
(719, 1479, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(720, 1479, 'Наименование', 'naimenovaniya', 'text', ''),
(721, 1480, 'Наименование', 'naimenovaniya', 'text', ''),
(722, 1480, 'Для', 'dlya', 'select', ''),
(723, 1481, 'Наименование', 'naimenovaniya', 'text', ''),
(724, 1482, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(725, 1482, 'Наименование', 'naimenovaniya', 'text', ''),
(726, 1482, 'Для', 'dlya', 'select', ''),
(727, 1483, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(728, 1483, 'Наименование', 'naimenovaniya', 'text', ''),
(729, 1483, 'Для', 'dlya', 'select', ''),
(730, 1484, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(731, 1484, 'Наименование', 'naimenovaniya', 'text', ''),
(732, 1484, 'Объем карта памяти', 'obyomkartapamyati', 'radio', '1 гб,2 гб,4 гб,8 гб,16 гб,32 гб,64 гб,128 гб'),
(733, 1484, 'Класс карт памяти', 'klasskartapamyati', 'radio', 'SD Class 2,SD Class 4,SD Class 6,SD Class 10,SD Class 16'),
(734, 1486, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(735, 1486, 'Наименование', 'naimenovaniya', 'text', ''),
(736, 1487, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(737, 1487, 'Наименование', 'naimenovaniya', 'text', ''),
(738, 613, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(739, 613, 'Наименование', 'naimenovaniya', 'text', ''),
(740, 613, 'Комплектация', 'komplektatsiya', 'checkbox', 'Системний блок,Монитор,Клавиатура и мишка'),
(741, 615, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(742, 615, 'Наименование', 'naimenovaniya', 'text', ''),
(743, 615, 'Операционная система', 'operatsionnaya sistema', 'select', 'Выбрать,Android,iOS,Tizen,BlackBerry OS,Windows,Другой'),
(744, 615, 'Версия ОS', 'versiyaos', 'text', ''),
(745, 615, 'Размер экрана', 'razmerekrana', 'text', ''),
(746, 615, 'Слот для сим карты', 'slotdlyasimkarti', 'radio', 'Есть,Нет'),
(747, 615, 'Число ядер процессора', 'chisloyaderprosesora', 'radio', 'Одноядерный,Двухъядерный,Четырехъядерный,Восьмиядерный'),
(748, 615, 'ОЗУ', 'ozu', 'select', 'Выбрать,512 МБ,768 МБ,1 ГБ,1.5 ГБ,2 ГБ,3 ГБ,4 ГБ'),
(749, 615, 'ПЗУ', 'pzu', 'select', 'Выбрать,2 ГБ,4 ГБ,8 ГБ,16 ГБ,32 ГБ,64 ГБ,128 ГБ'),
(750, 615, 'Поддержка карта памяти', 'podderjkakartapamyati', 'select', 'Выбрать,Есть,Нет'),
(751, 615, 'Основная камера', 'osnovnayakamera', 'select', 'Выбрать,1.3 MP,2 MP,3.2 MP,5 MP,8 MP'),
(752, 615, 'Фронтальная камера', 'frontalnayakamera', 'select', 'Выбрать,1.3 MP,2 MP,3.2 MP,5 MP,8 MP'),
(753, 615, 'Цвет', 'cvet', 'checkbox', 'Белый,Черный,Золотой,Pозовый,Серебристый,Серый'),
(754, 622, 'Наименование', 'naimenovaniya', 'text', ''),
(755, 756, 'Серия', 'seria', 'select', 'Выбрать,2nd Generation,3nd Generation,4nd Generation,5nd Generation,6nd Generation,7nd Generation'),
(756, 756, 'Частота шины CPU (МГц)', 'chastotashincpu', 'text', ''),
(757, 756, 'Частота работы процессора (ГГц)', 'chastotarabotiprosesora', 'text', ''),
(758, 756, 'Макс. частота работы процессора (ГГц)', 'gnezdo', 'text', ''),
(759, 756, 'Гнездо процессора (Socket, LGA)', 'gnezdoprosesora', 'select', 'Выбрать,LGA775,LGA1567,LGA1366,LGA1156,LGA1155,LGA2011,LGA1356,LGA1366,LGA1150,LGA2011-3,LGA1151,Socket AM3,Socket AM3+,Socket FM1,Socket FM2,Socket FM2+,Socket AM1,Socket AM4,Socket F,Socket F+,Socket C32,Socket G34,Socket SP3'),
(760, 756, 'Количество ядер', 'kolichestvoyader', 'select', 'Выбрать,2,4,6,8,10,12,16,18,20'),
(761, 756, 'Количество потоков', 'kolichestvopotokov', 'select', 'Выбрать,2,4,6,8,10,12,16,20,24,32,36,40'),
(762, 756, 'Кэш L3 (Мб)', 'kesh', 'text', ''),
(763, 757, 'Наименование', 'naimenovaniya', 'text', ''),
(764, 757, 'Гнездо процессора (Socket, LGA)', 'gnezdoprosesora', 'select', 'Выбрать,LGA775,LGA1567,LGA1366,LGA1156,LGA1155,LGA2011,LGA1356,LGA1366,LGA1150,LGA2011-3,LGA1151,Socket AM3,Socket AM3+,Socket FM1,Socket FM2,Socket FM2+,Socket AM1,Socket AM4,Socket F,Socket F+,Socket C32,Socket G34,Socket SP3'),
(765, 757, 'Частота шины (МГц)', 'chastotashincpu', 'text', ''),
(766, 757, 'Формат платы', 'formatplati', 'radio', 'XL-ATX,ATX,MiniATX,MicroATX,FlexATX,MiniITX'),
(767, 757, 'Тип модуля памяти', 'razyomidlyaozu', 'select', 'Выбрать,DDR2,DDR3,DDR4,DDR5'),
(768, 757, 'Количество разъемов ОЗУ (шт.)', 'kolichestvo', 'select', 'Выбрать,2 шт.,4 шт.,6 шт.,8 шт.'),
(769, 613, 'Марка и модель корпуса', 'marka', 'text', ''),
(770, 613, 'Марка и модель блока питания', 'marka', 'text', ''),
(771, 613, 'Мощность блока питания (Вт)', 'moshnost', 'text', ''),
(772, 613, 'Марка и модель материнской платы', 'marka', 'text', ''),
(773, 613, 'Формат платы', 'format', 'select', 'Выбрать,XL-ATX,E-ATX,ATX,miniATX,microATX,FlexATX'),
(774, 613, 'Гнездо процессора', 'gnezdo', 'select', 'Выбрать,LGA775,LGA1567,LGA1366,LGA1156,LGA1155,LGA2011,LGA1356,LGA1366,LGA1150,LGA2011-3,LGA1151,Socket AM3,Socket AM3+,Socket FM1,Socket FM2,Socket FM2+,Socket AM1,Socket AM4,Socket F,Socket F+,Socket C32,Socket G34,Socket SP3'),
(775, 613, 'Частота шины (МГц)', 'chastota', 'text', ''),
(776, 613, 'Количество разъемов ОЗУ (шт.)', 'kolichestvo', 'select', 'Выбрать,2 шт.,4 шт.,6 шт.,8 шт.'),
(777, 613, 'Тип модуля памяти', 'marka', 'select', 'Выбрать,DDR2,DDR3,DDR4,DDR5'),
(778, 613, 'марка и модель процессора', 'Marka', 'text', ''),
(779, 613, 'Гнездо процессора (Socket, LGA)', 'gnezdo', 'select', 'Выбрать,LGA775,LGA1567,LGA1366,LGA1156,LGA1155,LGA2011,LGA1356,LGA1366,LGA1150,LGA2011-3,LGA1151,Socket AM3,Socket AM3+,Socket FM1,Socket FM2,Socket FM2+,Socket AM1,Socket AM4,Socket F,Socket F+,Socket C32,Socket G34,Socket SP3'),
(780, 613, 'Частота работы процессора (ГГц)', 'gnezdo', 'text', ''),
(781, 613, 'Макс. частота работы процессора (ГГц)', 'gnezdo', 'text', ''),
(782, 613, 'Серия процессора', 'gnezdo', 'select', 'Выбрать,2nd Generation,3nd Generation,4nd Generation,5nd Generation,6nd Generation,7nd Generation'),
(783, 613, 'Количество ядер', 'gnezdo', 'select', 'Выбрать,2,4,6,8,10,12,16,18,20'),
(784, 613, 'Объем кэш памяти (Мб)', 'gnezdo', 'text', ''),
(785, 613, 'Марка и модель оперативной памяти', 'marka', 'text', ''),
(786, 613, 'Объем модуля памяти', 'marka', 'select', 'Выбрать,2 Гб,4 Гб,8 Гб,16 Гб,32 Гб,64 Гб'),
(787, 613, 'Тип модуля памяти', 'marka', 'select', 'Выбрать,DDR2,DDR3,DDR4,DDR5'),
(788, 613, 'Частота функционирования (МГц)', 'marka', 'select', 'Выбрать,800 МГц,1066 МГц,1333 МГц,1600 МГц,1800 МГц,2000 МГц,2133 МГц,2200 МГц,2400 МГц,2800 МГц,3333 МГц'),
(789, 613, 'Марка и модель видеопамяти', 'marka', 'text', '\r\n'),
(790, 613, 'Тип видеокарты', 'marka', 'radio', 'Встроенный,Дискретная'),
(791, 613, 'Поддержка API', 'marka', 'select', 'Выбрать,DirectX 9,DirectX 10,DirectX 11,DirectX 12'),
(792, 613, 'Видеопамять', 'marka', 'select', 'Выбрать,512 Мб,1 Гб,2 Гб,3 Гб,4 Гб,6 Гб,8 Гб,10 Гб,12 Гб'),
(793, 613, 'Разрядность шины видеопамяти', 'marka', 'select', 'Выбрать,64 бит,128 бит,192 бит,256 бит,64 бит,384 бит,512 бит,768 бит'),
(794, 613, 'Марка и модель жесткого диска', 'marka', 'text', ''),
(795, 613, 'Тип жесткого диска', 'marka', 'radio', 'HDD,SSD,SAS'),
(796, 613, 'Объем жесткого диска', 'marka', 'select', 'Выбрать,120 Гб,250 Гб,320 Гб,500 Гб,750 Гб,1 Тб,2 Тб,3 Тб,4 Тб'),
(797, 613, 'Оптический привод', 'marka', 'radio', 'Есть,Нет'),
(798, 613, 'Марка и модель монитора', 'marka', 'text', ''),
(799, 613, 'Размер монитора', 'marka', 'select', 'Выбрать,34",32",30",29",28",27.9",27",25",24.1",24",23.8",23.6",23.5",23",22",21.5",21.3",20.7",20.1",20",19.5",19",18.5",17"'),
(800, 613, 'Разрешение монитора', 'marka', 'select', 'Выбрать,1280x1024,1366x768,1440x900,1400x1050,1680x1050,1600x1200,1920x1080,1920x1200,2560x1080,2560x1440,3840x2160'),
(801, 613, 'Марка и модель мишки', 'marka', 'text', ''),
(802, 613, 'Марка и модель клавиатуре', 'marka', 'text', ''),
(803, 613, 'Операционная система', 'marka', 'select', 'Выбрать,Нет,Windows 7 x32,Windows 7 x64,Windows 8 x32,Windows 8 x64,Windows 8.1 x32,Windows 8.1 x64,Windows 10 x32,Windows 10 x64,Linux,MacOS'),
(804, 758, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(805, 758, 'Наименование', 'naimenovaniya', 'text', ''),
(806, 758, 'Объем модуля памяти', 'naimenovaniya', 'select', 'Выбрать,1 Гб,2 Гб,4 Гб,8 Гб,16 Гб,32 Гб,64 Гб'),
(808, 758, 'Тип модуля памяти', 'marka', 'select', 'Выбрать,DDR2,DDR3,DDR4,DDR5'),
(809, 758, 'Частота функционирования (МГц)', 'marka', 'select', 'Выбрать,800 МГц,1066 МГц,1333 МГц,1600 МГц,1800 МГц,2000 МГц,2133 МГц,2200 МГц,2400 МГц,2800 МГц,3333 МГц'),
(810, 759, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(811, 759, 'Наименование', 'naimenovaniya', 'text', ''),
(812, 759, 'Тип жесткого диска', 'marka', 'radio', 'HDD,SSD,SAS'),
(813, 759, 'Объем диска', 'marka', 'select', 'Выбрать,120 Гб,250 Гб,320 Гб,500 Гб,750 Гб,1 Тб,2 Тб,3 Тб,4 Тб'),
(814, 760, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(815, 760, 'Наименование', 'naimenovaniya', 'text', ''),
(816, 760, 'Тип оптического привода', 'naimenovaniya', 'checkbox', 'Для Ноутбука,Для ПК'),
(817, 761, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(818, 761, 'Наименование', 'naimenovaniya', 'text', ''),
(819, 761, 'Цвет', 'color', 'select', 'Выбрать,Белый,Черный,Серебристый,Серый'),
(820, 761, 'Макс. формат платы', 'color', 'select', 'Выбрать,XL-ATX,E-ATX,ATX,miniATX,microATX,FlexATX'),
(821, 762, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(822, 762, 'Наименование', 'naimenovaniya', 'text', ''),
(823, 762, 'Мощность блока питания (Вт)', 'naimenovaniya', 'text', ''),
(824, 763, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(825, 763, 'Наименование', 'naimenovaniya', 'text', ''),
(826, 1532, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(827, 1532, 'Наименование', 'naimenovaniya', 'text', ''),
(828, 1532, 'Тип', 'tip', 'radio', 'Кулер для процессора,Водяная система охлаждения для процессора,Кулер для видеокарты,Кулер для жесткого диска,Система охлаждения для корпуса,Водяная система охлаждения для видеокарты,Система водяное охлаждение'),
(829, 1532, 'Для гнездо процессора', 'gnezdo', 'checkbox', 'LGA775,LGA1567,LGA1366,LGA1156,LGA1155,LGA2011,LGA1356,LGA1366,LGA1150,LGA2011-3,LGA1151,Socket AM3,Socket AM3+,Socket FM1,Socket FM2,Socket FM2+,Socket AM1,Socket AM4,Socket F,Socket F+,Socket C32,Socket G34,Socket SP3'),
(830, 617, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(831, 617, 'Наименование', 'naimenovaniya', 'text', ''),
(832, 617, 'Размер монитора', 'marka', 'select', 'Выбрать,34",32",30",29",28",27.9",27",25",24.1",24",23.8",23.6",23.5",23",22",21.5",21.3",20.7",20.1",20",19.5",19",18.5",17"'),
(833, 617, 'Разрешение монитора', 'marka', 'select', 'Выбрать,1280x1024,1366x768,1440x900,1400x1050,1680x1050,1600x1200,1920x1080,1920x1200,2560x1080,2560x1440,3840x2160'),
(834, 617, 'Тип матрицы экрана', 'marka', 'select', 'Выбрать,TN,IPS,PVA,VA\r\n\r\n'),
(835, 617, 'Led подсветка', 'marka', 'radio', 'Есть,Нет\r\n\r\n'),
(836, 617, 'Входы', 'marka', 'checkbox', 'VGA,DVI,HDMI\n\n'),
(837, 617, 'Цвет', 'color', 'checkbox', 'Белый,Черный,Серебристый,Серый'),
(838, 616, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(839, 616, 'Наименование', 'naimenovaniya', 'text', ''),
(840, 616, 'Размер монитора', 'marka', 'select', 'Выбрать,34",32",30",29",28",27.9",27",25",24.1",24",23.8",23.6",23.5",23",22",21.5",21.3",20.7",20.1",20",19.5",19",18.5",17"'),
(841, 616, 'Разрешение монитора', 'marka', 'select', 'Выбрать,1280x1024,1366x768,1440x900,1400x1050,1680x1050,1600x1200,1920x1080,1920x1200,2560x1080,2560x1440,3840x2160'),
(842, 616, 'Тип матрицы экрана', 'marka', 'select', 'Выбрать,TN,IPS,PVA,VA\r\n\r\n'),
(843, 616, 'марка и модель процессора', 'Marka', 'text', ''),
(844, 616, 'Частота работы процессора (ГГц)', 'gnezdo', 'text', ''),
(845, 616, 'Макс. частота работы процессора (ГГц)', 'gnezdo', 'text', ''),
(846, 616, 'Серия процессора', 'gnezdo', 'select', 'Выбрать,2nd Generation,3nd Generation,4nd Generation,5nd Generation,6nd Generation,7nd Generation'),
(847, 616, 'Количество ядер', 'gnezdo', 'select', 'Выбрать,2,4,6,8,10,12,16,18,20'),
(848, 616, 'Объем модуля памяти', 'marka', 'select', 'Выбрать,2 Гб,4 Гб,8 Гб,16 Гб,32 Гб,64 Гб'),
(849, 616, 'Тип модуля памяти', 'marka', 'select', 'Выбрать,DDR2,DDR3,DDR4,DDR5'),
(850, 616, 'Марка и модель видеопамяти', 'marka', 'text', '\r\n'),
(851, 616, 'Тип видеокарты', 'marka', 'radio', 'Встроенный,Дискретная'),
(852, 616, 'Поддержка API', 'marka', 'select', 'Выбрать,DirectX 9,DirectX 10,DirectX 11,DirectX 12'),
(853, 616, 'Видеопамять', 'marka', 'select', 'Выбрать,512 Мб,1 Гб,2 Гб,3 Гб,4 Гб,6 Гб,8 Гб,10 Гб,12 Гб'),
(854, 616, 'Тип жесткого диска', 'marka', 'radio', 'HDD,SSD,SAS'),
(855, 616, 'Объем диска', 'marka', 'select', 'Выбрать,120 Гб,250 Гб,320 Гб,500 Гб,750 Гб,1 Тб,2 Тб,3 Тб,4 Тб'),
(856, 616, 'Оптический привод', 'marka', 'radio', 'Есть,Нет'),
(857, 616, 'Операционная система', 'marka', 'select', 'Выбрать,Нет,Windows 7 x32,Windows 7 x64,Windows 8 x32,Windows 8 x64,Windows 8.1 x32,Windows 8.1 x64,Windows 10 x32,Windows 10 x64,Linux,MacOS'),
(858, 616, 'Цвет', 'color', 'checkbox', 'Белый,Черный,Серебристый,Серый'),
(859, 618, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(860, 618, 'Наименование', 'naimenovaniya', 'text', ''),
(861, 618, 'марка и модель процессора', 'Marka', 'text', ''),
(862, 618, 'Частота работы процессора (ГГц)', 'gnezdo', 'text', ''),
(863, 618, 'Количество ядер', 'gnezdo', 'select', 'Выбрать,2,4,6,8,10,12,16,18,20'),
(864, 618, 'Кэш L3 (Мб)', 'kesh', 'text', ''),
(865, 618, 'Объем модуля памяти', 'marka', 'select', 'Выбрать,2 Гб,4 Гб,8 Гб,16 Гб,32 Гб,64 Гб'),
(866, 618, 'Количество разъемов ОЗУ (шт.)', 'kolichestvo', 'select', 'Выбрать,2 шт.,4 шт.,6 шт.,8 шт.'),
(867, 618, 'Тип модуля памяти', 'marka', 'select', 'Выбрать,DDR2,DDR3,DDR4,DDR5'),
(868, 618, 'Частота функционирования (МГц)', 'marka', 'select', 'Выбрать,800 МГц,1066 МГц,1333 МГц,1600 МГц,1800 МГц,2000 МГц,2133 МГц,2200 МГц,2400 МГц,2800 МГц,3333 МГц'),
(869, 618, 'Тип жесткого диска', 'marka', 'radio', 'HDD,SSD,SAS'),
(870, 618, 'Объем жесткого диска', 'marka', 'select', 'Выбрать,120 Гб,250 Гб,320 Гб,500 Гб,750 Гб,1 Тб,2 Тб,3 Тб,4 Тб'),
(871, 618, 'Дисковая подсистема', 'marka', 'select', 'Выбрать,2 шт,3 шт,4 шт,5 шт,6 шт,8 шт,10 шт,12 шт,16 шт,'),
(874, 618, 'Сетевой адаптер', 'marka', 'text', ''),
(875, 618, 'Контроллер RAID', 'marka', 'text', ''),
(876, 618, 'Блок питания (Вт)', 'marka', 'text', ''),
(877, 1533, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(878, 1533, 'Наименование', 'naimenovaniya', 'text', ''),
(879, 1533, 'Тип принтера', 'naimenovaniya', 'radio', 'Лазерный,Матричный,Струйный,Сублимационный,3D-принтер'),
(880, 1533, 'Цветность печати', 'naimenovaniya', 'radio', 'Чёрно-белое,Цветное'),
(881, 1533, 'Функции', 'naimenovaniya', 'checkbox', 'Копир,Принтеp,Сканеp'),
(882, 1533, 'Форматы печати', 'naimenovaniya', 'checkbox', 'A6,A5,A4,A3,A2,A1,A0'),
(883, 1534, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(884, 1534, 'Наименование', 'naimenovaniya', 'text', ''),
(885, 1534, 'Тип оборудования', 'naimenovaniya', 'radio', 'Маршрутизаторы,Wi-Fi оборудование,Сетевые карты и адаптеры,Коммутаторы'),
(886, 1534, 'Макс. скорость, Мбит/с', 'naimenovaniya', 'text', ''),
(887, 1534, 'Количество LAN портов (шт.)', 'naimenovaniya', 'text', ''),
(888, 1535, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(889, 1535, 'Наименование', 'naimenovaniya', 'text', ''),
(890, 1535, 'Тип', 'Тип', 'radio', 'Компьютерные мыши,Клавиатуры,Коврики для мышей,Комплекты: клавиатура и мышь'),
(891, 1535, 'Тип использования', 'naimenovaniya', 'checkbox', 'Игровая,Офисная,Домашня'),
(892, 1536, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(893, 1536, 'Наименование', 'naimenovaniya', 'text', ''),
(894, 1536, 'Тип ', 'naimenovaniya', 'radio', 'Геймпад,Руль,Джойстик,Игровой контроллер '),
(895, 1536, 'Тип связи', 'naimenovaniya', 'radio', 'Проводная,Беспроводная'),
(896, 1537, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(897, 1537, 'Наименование', 'naimenovaniya', 'text', ''),
(898, 1537, 'Тип', 'naimenovaniya', 'radio', 'Веб-камера,Микрофон,Веб-камера с микрофоном'),
(899, 1538, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(900, 1538, 'Наименование', 'naimenovaniya', 'text', ''),
(901, 1538, 'Тип', 'naimenovaniya', 'radio', 'Акустическая система,Акустическая система 2.1,Акустическая система 5.1,Акустическая система 7.1,Наушник,Наушник с микрофоном'),
(902, 1539, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(903, 1539, 'Наименование', 'naimenovaniya', 'text', ''),
(904, 1540, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(905, 1540, 'Наименование', 'naimenovaniya', 'text', ''),
(908, 622, 'Тип', 'naimenovaniya', 'radio', 'Картриджи для плоттеров,Картриджи для копировальных аппаратов,Картриджи для МФУ,Картриджи для принтеров,Картриджи для факсов,Тонеры,Фотобарабаны,Фотобумага,Чернила,Краски для цветного принтера'),
(909, 1542, 'Наименование', 'naimenovaniya', 'text', ''),
(910, 1543, 'Наименование', 'naimenovaniya', 'text', ''),
(911, 1544, 'Наименование', 'naimenovaniya', 'text', ''),
(912, 1546, 'Наименование', 'naimenovaniya', 'text', ''),
(913, 1547, 'Наименование', 'naimenovaniya', 'text', ''),
(914, 1542, 'Для ноутбуков', 'diagonalekrana', 'radio', '17" и больше,16"-16.9",15"-15.9",14"-14.9",13"-13.9",12"-12.9",Меньше 12'),
(915, 669, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(916, 669, 'Наименование', 'naimenovaniya', 'text', ''),
(917, 669, 'Диагональ экрана (")', 'naimenovaniya', 'text', ''),
(918, 669, 'Макс разрешение', 'naimenovaniya', 'radio', '1280x720,1366x768 HD,1920x1080 FullHD,2560x1440 2K,3840x2160 4K'),
(919, 669, 'Частота обновления', 'naimenovaniya', 'select', 'Выбрать,50 Гц,60 Гц,100 Гц,200 Гц,400 Гц,500 Гц,700 Гц,800 Гц,1000 Гц,1400 Гц\n\n\n\n\n\n\n\n'),
(920, 669, 'Особенности', 'naimenovaniya', 'checkbox', 'Поддержка 3D,3D очки в комплекте,Android TV,Bluetooth модуль,Miracast,Skype ready (необходима web-камера),Smart TV,WiDi,WiFi модуль,Блокировка каналов,Блокировка от детей,Веб-браузер,Гид по программам,Игровой режим,Изогнутый экран,Преобразование 2D в 3D,Таймер включения,Таймер отключения,Таймер сна,Телетекст,Управление голосом,Управление жестами,Функция увеличения изображения,Цифровой тюнер\n\n\n\n\n\n\n'),
(921, 669, '3D технология', 'naimenovaniya', 'radio', 'Нет,Поляризационная,Затворная'),
(922, 669, 'Технология матрицы', 'naimenovaniya', 'radio', 'LCD,TFT,IPS,TN,VA,PLS'),
(923, 669, 'Входные интерфейсы', 'naimenovaniya', 'checkbox', '3.5 мм,DisplayPort,DVI,HDMI,VGA (D-Sub),HDMI (MHL),RCA,RF,RJ-45,S-Video,SCART,USB 2.0,USB 3.0,Аудио/видео разъем (AV),Выход на наушники 3.5,Слот CI,Слот CI+,Стерео аудио (RCA),Цифровой аудио (S/PDIF)'),
(924, 670, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(925, 670, 'Наименование', 'naimenovaniya', 'text', ''),
(926, 670, 'Тип плеера', 'naimenovaniya', 'radio', 'DVD плеер,Blu-ray плеер,Медиаплеер,Внешний ODD'),
(927, 670, 'Форматы дисков', 'naimenovaniya', 'checkbox', 'DVD+R/+RW,DVD-R/-RW,CD-R/CD-RW,CD-DA,CD-ROM,VideoCD,DualLayer DVD,Blu-ray 3D,BD-R,Picture CD,BD-Re ,USB,USB/SD/MMC'),
(928, 671, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(929, 671, 'Наименование', 'naimenovaniya', 'text', ''),
(930, 671, 'Звуковая схема', 'naimenovaniya', 'radio', 'Stereo,2.1,3.1,4.1,5.1,7.1'),
(931, 671, 'Комплект акустики', 'naimenovaniya', 'checkbox', 'Сабвуфер,Звуковая панель,Тыловые колонки,Центральный канал,Фронтальные колонки'),
(932, 671, 'Материал корпуса', 'naimenovaniya', 'radio', 'Пластик,МДФ'),
(933, 1549, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(934, 1549, 'Наименование', 'naimenovaniya', 'text', ''),
(935, 1550, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(936, 1550, 'Наименование', 'naimenovaniya', 'text', ''),
(937, 1551, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(938, 1551, 'Наименование', 'naimenovaniya', 'text', ''),
(939, 1552, 'Наименование', 'naimenovaniya', 'text', ''),
(940, 673, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(941, 673, 'Наименование', 'naimenovaniya', 'text', ''),
(942, 674, 'Наименование', 'naimenovaniya', 'text', ''),
(943, 675, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(944, 675, 'Наименование', 'naimenovaniya', 'text', ''),
(945, 675, 'Тип', 'naimenovaniya', 'radio', 'Компактная фотокамера,Фотокамера мгновенной печати'),
(946, 675, 'Технология матрицы', 'naimenovaniya', 'radio', 'CCD,CMOS,CMOS с задней подсветкой,Super HAD CCD,CMOS Exmor R 2,Другой'),
(947, 675, 'Общее кол-во пикселей (Мпикс)', 'naimenovaniya', 'text', ''),
(948, 675, 'Стабилизатор', 'naimenovaniya', 'radio', 'Оптический,Цифровой,Оптический с гиродатчиком,Гибридный'),
(949, 675, 'Интерфейс связи с ПК', 'naimenovaniya', 'checkbox', 'USB,Wi-Fi,NFC,Проводная,Беспроводная Bluetooth'),
(950, 676, 'Бренд', 'brend', 'select', 'Brands\r\n\r\n'),
(951, 676, 'Наименование', 'naimenovaniya', 'text', ''),
(952, 676, 'Технология матрицы', 'naimenovaniya', 'radio', 'CMOS APS-C,CMOS,CMOS DX,CCD APS-C,CMOS Exmor APS HD'),
(953, 676, 'Физический размер матрицы (мм)', 'naimenovaniya', 'text', ''),
(954, 676, 'Общее кол-во пикселей (Мпикс)', 'naimenovaniya', 'text', ''),
(955, 676, 'Тип дисплея', 'naimenovaniya', 'checkbox', 'TFT,Поворотный,Сенсорный,Антибликовый'),
(956, 676, 'Интерфейс связи с ПК', 'naimenovaniya', 'checkbox', 'USB,Wi-Fi,NFC,Беспроводная Bluetooth'),
(957, 676, 'Конструктивные особенности', 'naimenovaniya', 'checkbox', 'Крепление на штатив,WiFi модуль,GPS модуль,Bluetooth модуль'),
(958, 677, 'Бренд', 'brend', 'select', 'Brands'),
(959, 677, 'Наименование', 'naimenovaniya', 'text', ''),
(960, 677, 'Качество видео', 'naimenovaniya', 'radio', '30p,50p,50i,480р,720p,1080p,1440p,2160p'),
(961, 677, 'Количество матриц (шт.)', 'naimenovaniya', 'text', '\r\n\r\n'),
(962, 677, 'Общее кол-во пикселей (Мпикс)', 'naimenovaniya', 'text', ''),
(963, 677, 'Тип фокусировки', 'naimenovaniya', 'checkbox', 'Ручная,Автоматическая,Контрастная'),
(964, 677, 'Стабилизатор', 'naimenovaniya', 'checkbox', 'Гибридный,Оптический,Оптический с гиродатчиком,Цифровой'),
(965, 677, 'Тип дисплея', 'naimenovaniya', 'checkbox', 'Сенсорный,Поворотный,TFT'),
(966, 677, 'Технология матрицы', 'naimenovaniya', 'radio', 'MOS,CMOS,CMOS с задней подсветкой,CMOS,Exmor R,CMOS Pro'),
(967, 677, 'Макс. разрешение видео', 'naimenovaniya', 'radio', '1280x720,1920x1080 FullHD,2560x1440 2K,3840x2160 4K UHD'),
(968, 677, 'Интерфейс связи с ПК', 'naimenovaniya', 'checkbox', 'USB,Wi-Fi,NFC,Беспроводная Bluetooth,Проводная'),
(969, 678, 'Бренд', 'brend', 'select', 'Brands'),
(970, 678, 'Наименование', 'naimenovaniya', 'text', ''),
(971, 678, 'Качество видео', 'naimenovaniya', 'radio', '30p,50p,50i,480р,720p,1080p,1440p,2160p'),
(972, 678, 'Количество матриц (шт.)', 'naimenovaniya', 'text', ''),
(973, 678, 'Общее кол-во пикселей (Мпикс)', 'naimenovaniya', 'text', ''),
(974, 678, 'Тип фокусировки', 'naimenovaniya', 'checkbox', 'Ручная,Автоматическая,Контрастная'),
(975, 678, 'Стабилизатор', 'naimenovaniya', 'checkbox', 'Гибридный,Оптический,Оптический с гиродатчиком,Цифровой'),
(976, 678, 'Тип дисплея', 'naimenovaniya', 'checkbox', 'Сенсорный,Поворотный,TFT'),
(977, 678, 'Технология матрицы', 'naimenovaniya', 'radio', 'MOS,CMOS,CMOS с задней подсветкой,CMOS,Exmor R,CMOS Pro'),
(978, 678, 'Макс. разрешение видео', 'naimenovaniya', 'radio', '1280x720,1920x1080 FullHD,2560x1440 2K,3840x2160 4K UHD'),
(979, 678, 'Интерфейс связи с ПК', 'naimenovaniya', 'checkbox', 'USB,Wi-Fi,NFC,Беспроводная Bluetooth,Проводная'),
(980, 679, 'Бренд', 'brend', 'select', 'Brands'),
(981, 679, 'Наименование', 'naimenovaniya', 'text', ''),
(982, 679, 'Диагональ экрана (")', 'naimenovaniya', 'text', ''),
(983, 679, 'Макс разрешение (мм х мм)', 'naimenovaniya', 'text', ''),
(984, 1553, 'Бренд', 'brend', 'select', 'Brands'),
(985, 1553, 'Наименование', 'naimenovaniya', 'text', ''),
(986, 1553, 'Тип', 'naimenovaniya', 'checkbox', 'Объектив,Стандартный зум объектив,Теле зум объектив,Широкоугольный объектив,Макрообъектив,Широкоугольный зум объектив,Теле макрообъектив,Телеобъектив,Суперзум объектив'),
(987, 1553, 'Тип крепления объектива', 'naimenovaniya', 'checkbox', 'Nikon F,Canon EF,Canon EF-S,Sony A,Micro 4/3,Sony E'),
(988, 1554, 'Бренд', 'brend', 'select', 'Brands'),
(989, 1554, 'Наименование', 'naimenovaniya', 'text', ''),
(990, 1554, 'Диаметр светофильтра (мм)', 'naimenovaniya', 'text', ''),
(991, 1554, 'Тип фильтра', 'naimenovaniya', 'checkbox', 'Защитный,Поляризационный,Художественный'),
(992, 1555, 'Наименование', 'naimenovaniya', 'text', ''),
(993, 1555, 'Тип', 'naimenovaniya', 'radio', 'Крепление,Аксессуар для экшн камеры,Студийное оборудование,Рассеиватель для вспышки,Бленда 4,Для фото,Крышка,Аквабокс,Ремень для камеры,Кейс,Принадлежность,Рекордер для камеры,Переходное кольцо/адаптер'),
(994, 1556, 'Бренд', 'brend', 'select', 'Brands'),
(995, 1556, 'Наименование', 'naimenovaniya', 'text', ''),
(996, 1556, 'Вид лампы', 'naimenovaniya', 'radio', 'Галогенная,Импульсная,Светодиодная'),
(997, 1556, 'Питание', 'naimenovaniya', 'radio', 'От сети,Встроенный батарея'),
(998, 1557, 'Бренд', 'brend', 'select', 'Brands'),
(999, 1557, 'Наименование', 'naimenovaniya', 'text', ''),
(1000, 1557, 'Совместимость', 'naimenovaniya', 'checkbox', 'Canon,Nikon,Sony,Другое'),
(1001, 1557, 'Ведущее число (м)', 'naimenovaniya', 'text', ''),
(1002, 684, 'Бренд', 'brend', 'select', 'Brands'),
(1003, 684, 'Наименование', 'naimenovaniya', 'text', ''),
(1004, 684, 'Назначение наушника', 'naimenovaniya', 'checkbox', 'Для аудио- и телевизонной техники,Для мобильных телефонов,Для планшетов,Универсальные,Для электронных книг,Для ноутбуков/ультрабуков,Для устройств на Android,Для устройств Apple,Для персональных компьютеров,Для игровых приставок'),
(1005, 684, 'Подключение', 'naimenovaniya', 'radio', 'Проводное,Беспроводное Bluetooth,Беспроводное'),
(1006, 684, 'Вид', 'naimenovaniya', 'radio', 'Вставные (внутриканальные),Классические,Мониторные,Спортивные,С заушным креплением'),
(1007, 684, 'Конструкция', 'naimenovaniya', 'checkbox', 'Динамические,С микрофоном,Арматурные,Изодинамические,Гибридные,Ортодинамические,Электростатические'),
(1008, 684, 'Конструкция', 'naimenovaniya', 'radio', 'Разъемы,3.5 мм,3.5 мм (4-х пиновый),6.3 мм,Apple Lightning,microUSB 2.0,miniUSB 2.0,USB 2.0'),
(1009, 684, 'Питание', 'naimenovaniya', 'radio', 'От подключенного устройства,Встроенный аккумулятор,Сменная батарея\n\n '),
(1010, 1558, 'Бренд', 'brend', 'select', 'Brands'),
(1011, 1558, 'Наименование', 'naimenovaniya', 'text', ''),
(1012, 1558, 'Полная выходная мощность (Вт)', 'naimenovaniya', 'text', ''),
(1013, 1558, 'Беспроводные интерфейсы', 'naimenovaniya', 'checkbox', 'Bluetooth,Bluetooth 4.0,Bluetooth 3.0,Bluetooth 2.1,NFC,Wi-Fi'),
(1014, 1558, 'Входные интерфейсы', 'naimenovaniya', 'checkbox', 'USB 2.0,Линейный вход 3.5 мм / AUX,Стерео аудио (RCA),Микрофонный вход 6.3 мм,RCA,RJ-45,Оптический аудио (Toslink),Разъем для антенны,Микрофонный вход 3.5 мм\r\n'),
(1015, 1558, 'Особенности', 'naimenovaniya', 'checkbox', 'Поддежка iPod/iPhone/iPad,Таймер автоматического отключения,Запись на флеш-носитель,Док-станция для iPod/iPhone,Поддержка Интернет-радио,AirPlay\r\n'),
(1016, 1559, 'Бренд', 'brend', 'select', 'Brands'),
(1017, 1559, 'Наименование', 'naimenovaniya', 'text', ''),
(1018, 1559, 'Тип', 'naimenovaniya', 'radio', 'Магнитола,Радиоприемник '),
(1019, 1559, 'Полная выходная мощность (Вт)', 'naimenovaniya', 'text', ''),
(1020, 1559, 'Диапазоны радио', 'naimenovaniya', 'checkbox', 'FM,AM,MW,DAB,LW,КВ,SW'),
(1021, 1559, 'Входные интерфейсы', 'naimenovaniya', 'checkbox', 'USB 2.0,Линейный вход 3.5 мм / AUX'),
(1022, 1559, 'Тип питания', 'naimenovaniya', 'checkbox', 'От сети 220В,Сменная батарея,Встроенный аккумулятор,Сменный аккумулятор,От сети 220В через адаптер'),
(1023, 1560, 'Бренд', 'brend', 'select', 'Brands'),
(1024, 1560, 'Наименование', 'naimenovaniya', 'text', ''),
(1025, 1560, 'Время работы от аккумулятора (ч.)', 'naimenovaniya', 'text', ''),
(1026, 1560, 'Максимальная мощность (Вт)', 'naimenovaniya', 'text', ''),
(1027, 1560, 'Проводные подключения', 'naimenovaniya', 'checkbox', 'Линейный вход 3.5 мм / AUX,USB 2.0,3.5 мм,microUSB 2.0,miniUSB 2.0,6.3 мм,Микрофонный вход 6.3 мм'),
(1028, 1560, 'Беспроводные подключения', 'naimenovaniya', 'checkbox', 'Bluetooth,Bluetooth 4.0,Bluetooth 3.0,Bluetooth 2.1,NFC,Wi-Fi'),
(1029, 1560, 'Функциональные особенности', 'naimenovaniya', 'checkbox', 'Встроенный микрофон,Поддержка iPhone/iPod/iPad,Встроенный MP3-плеер,Интерфейс Bluetooth,NFC,Выход на наушники,LED-дисплей,Родительский контроль'),
(1030, 1561, 'Бренд', 'brend', 'select', 'Brands'),
(1031, 1561, 'Наименование', 'naimenovaniya', 'text', ''),
(1032, 1561, 'Скорость (об/мин)', 'naimenovaniya', 'text', ''),
(1033, 1561, 'Материал корпуса', 'naimenovaniya', 'radio', 'Пластик,МДФ,Искусственная кожа,Металл,Дерево'),
(1034, 1561, 'Переключение скоростей', 'naimenovaniya', 'radio', 'Ручное,Электронное'),
(1035, 1561, 'Привод проигрывателя', 'naimenovaniya', 'radio', 'Ременной,Прямой'),
(1036, 1561, 'Особенности', 'naimenovaniya', 'checkbox', 'Подключение к компьютеру,Встроенные динамики,Оцифровка звука,Встроенный фонокорректор,Антискейтинг,Запись на флэш-накопитель,Запись на оптический диск,Встроенный CD-проигрыватель,Bluetooth,Антивибрационный механизм'),
(1037, 1564, 'Бренд', 'brend', 'select', 'Brands'),
(1038, 1564, 'Наименование', 'naimenovaniya', 'text', ''),
(1039, 1565, 'Бренд', 'brend', 'select', 'Brands'),
(1040, 1565, 'Наименование', 'naimenovaniya', 'text', ''),
(1041, 1564, 'Объем памяти', 'naimenovaniya', 'radio', '2 Гб,4 Гб,8 Гб,16 Гб,32 Гб,64 Гб,128 Гб'),
(1042, 1564, 'FM-радио', 'naimenovaniya', 'radio', 'Есть,Нет'),
(1043, 1564, 'Форматы аудио', 'naimenovaniya', 'checkbox', 'MP3,AAC,WMA,AAC-LC,AIFF,APE,Apple Lossless,ASF,FLAC,LPCM,M4A,MP2,OGG,PCM,WAV'),
(1044, 1564, 'Разъем наушников', 'naimenovaniya', 'checkbox', '3.5 мм,3.5 мм (4-х пиновый),2.5 мм,2.5 мм (4-х пиновый)'),
(1045, 1564, 'Интерфейсы', 'naimenovaniya', 'checkbox', 'USB 2.0,microUSB 2.0,miniUSB 2.0,Выход на наушники 3.5 mini jack,WM-PORT,Разъем для док-станции,Apple Lightning,Композитный видео,Линейный вход 3.5 мм / AUX'),
(1046, 1564, 'Интерфейсы', 'naimenovaniya', 'checkbox', 'Bluetooth,Bluetooth 4.0,Wi-Fi,NFC'),
(1047, 1564, 'Доп. функции', 'naimenovaniya', 'checkbox', 'Блокировка управления,Просмотр изображений,Диктофон,Таймер сна,Просмотр текстовых файлов,Секундомер,Калькулятор,Календарь,Камера,Часы,Счетчик калорий,Шагомер,Вывод видео на внешние устройства,Игры,Будильник,Органайзер'),
(1048, 1565, 'Объем памяти', 'naimenovaniya', 'radio', '2 Гб,4 Гб,8 Гб,16 Гб,32 Гб'),
(1049, 1565, 'Картридер', 'naimenovaniya', 'radio', 'Нет,microSD,microSDHC,microSDXC,SDXC,SDHC,Secure Digital (SD),Memory Stick'),
(1050, 1565, 'Интерфейсы', 'naimenovaniya', 'checkbox', 'USB 2.0,Микрофонный вход 3.5 мм,miniUSB 2.0,Выход на наушники 3.5 mini jack,Линейный вход 3.5 мм / AUX,XLR,3.5 мм,microUSB 2.0'),
(1051, 1566, 'Бренд', 'brend', 'select', 'Brands'),
(1052, 1566, 'Наименование', 'naimenovaniya', 'text', ''),
(1053, 1567, 'Бренд', 'brend', 'select', 'Brands'),
(1054, 1567, 'Наименование', 'naimenovaniya', 'text', ''),
(1055, 1568, 'Бренд', 'brend', 'select', 'Brands'),
(1056, 1568, 'Наименование', 'naimenovaniya', 'text', ''),
(1057, 1569, 'Бренд', 'brend', 'select', 'Brands'),
(1058, 1569, 'Наименование', 'naimenovaniya', 'text', ''),
(1059, 1570, 'Бренд', 'brend', 'select', 'Brands'),
(1060, 1570, 'Наименование', 'naimenovaniya', 'text', ''),
(1061, 1571, 'Бренд', 'brend', 'select', 'Brands'),
(1062, 1571, 'Наименование', 'naimenovaniya', 'text', ''),
(1063, 1572, 'Бренд', 'brend', 'select', 'Brands'),
(1064, 1572, 'Наименование', 'naimenovaniya', 'text', ''),
(1065, 1573, 'Бренд', 'brend', 'select', 'Brands'),
(1066, 1574, 'Бренд', 'brend', 'select', 'Brands'),
(1067, 1573, 'Наименование', 'naimenovaniya', 'text', ''),
(1068, 1574, 'Наименование', 'naimenovaniya', 'text', ''),
(1069, 1575, 'Бренд', 'brend', 'select', 'Brands'),
(1070, 1576, 'Бренд', 'Бренд', 'select', 'Brands'),
(1071, 1575, 'Наименование', 'naimenovaniya', 'text', ''),
(1072, 1576, 'Наименование', 'naimenovaniya', 'text', ''),
(1073, 1577, 'Бренд', 'brend', 'select', 'Brands'),
(1074, 1577, 'Наименование', 'naimenovaniya', 'text', ''),
(1075, 1578, 'Бренд', 'brend', 'select', 'Brands'),
(1076, 1578, 'Наименование', 'naimenovaniya', 'text', '');

-- --------------------------------------------------------

--
-- Структура таблицы `at_goods_fields_values`
--

CREATE TABLE IF NOT EXISTS `at_goods_fields_values` (
  `id` int(11) NOT NULL,
  `id_goods_field` int(11) NOT NULL,
  `id_good` int(11) DEFAULT NULL,
  `id_ad` int(11) DEFAULT NULL,
  `value` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=256 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `at_goods_fields_values`
--

INSERT INTO `at_goods_fields_values` (`id`, `id_goods_field`, `id_good`, `id_ad`, `value`) VALUES
(1, 1, NULL, 1, '4'),
(2, 2, NULL, 1, '95'),
(3, 3, NULL, 1, 'Панельный'),
(4, 4, NULL, 1, '5'),
(5, 5, NULL, 1, '9'),
(6, 1, NULL, 1, '5'),
(7, 2, NULL, 1, 'лая пло'),
(8, 3, NULL, 1, 'Блочный'),
(9, 4, NULL, 1, 'Этаж'),
(10, 5, NULL, 1, 'ость дом'),
(11, 23, NULL, 7, '1'),
(12, 50, NULL, 7, '63'),
(13, 62, NULL, 7, 'Автовоз'),
(14, 63, NULL, 7, '2016'),
(15, 64, NULL, 7, '134'),
(16, 66, NULL, 7, 'Отличное'),
(17, 50, NULL, 6, '63'),
(18, 62, NULL, 6, 'Автовоз'),
(19, 63, NULL, 6, '2016'),
(20, 23, NULL, 6, '3'),
(21, 64, NULL, 6, '3'),
(22, 66, NULL, 6, 'Хорошее'),
(23, 8, NULL, 9, 'Alfa Romeo'),
(24, 9, NULL, 9, 'x5'),
(25, 10, NULL, 9, 'Седан'),
(26, 11, NULL, 9, '2016'),
(27, 12, NULL, 9, '36000'),
(28, 13, NULL, 9, 'Автомат'),
(29, 14, NULL, 9, 'Бензин'),
(30, 15, NULL, 9, 'Отличное'),
(31, 16, NULL, 9, 'Растаможена,Эл. стеклоподъемники,Охранная система,Электрозеркала,Кондиционер,Парктроник'),
(32, 20, NULL, 9, '3.5'),
(33, 6, NULL, NULL, '123'),
(34, 7, NULL, NULL, '10'),
(35, 1, NULL, 13, '5'),
(36, 2, NULL, 13, '11'),
(37, 3, NULL, 13, 'Панельный'),
(38, 4, NULL, 13, '1'),
(39, 5, NULL, 13, '1'),
(40, 8, NULL, 8, 'BMW'),
(41, 9, NULL, 8, 'Audi TT'),
(42, 10, NULL, 8, 'Седан'),
(43, 11, NULL, 8, '2016'),
(44, 12, NULL, 8, '10000'),
(45, 13, NULL, 8, 'Выбрать'),
(46, 14, NULL, 8, 'Бензин'),
(47, 15, NULL, 8, 'Отличное'),
(48, 16, NULL, 8, 'Эл. стеклоподъемники,Охранная система,Электрозеркала,Кондиционер,Парктроник'),
(49, 20, NULL, 8, '3,2'),
(50, 6, NULL, 10, '120'),
(51, 7, NULL, 10, '5'),
(52, 8, NULL, NULL, 'Alfa Romeo'),
(53, 9, NULL, NULL, 'Matiz'),
(54, 10, NULL, NULL, 'Седан'),
(55, 11, NULL, NULL, '2016'),
(56, 12, NULL, NULL, '10000'),
(57, 13, NULL, NULL, 'Черный'),
(58, 14, NULL, NULL, '1.6'),
(59, 15, NULL, NULL, 'Механический'),
(60, 16, NULL, NULL, 'Бензин'),
(61, 20, NULL, NULL, '3,2'),
(62, 6, NULL, 14, '150'),
(63, 7, NULL, 14, '10'),
(64, 1, NULL, NULL, '3'),
(65, 2, NULL, NULL, '100'),
(66, 3, NULL, NULL, 'Кирпичный'),
(67, 4, NULL, NULL, '1'),
(68, 5, NULL, NULL, '5'),
(69, 8, NULL, 17, 'Alfa Romeo'),
(70, 9, NULL, 17, 'x5'),
(71, 10, NULL, 17, 'Седан'),
(72, 11, NULL, 17, '2016'),
(73, 12, NULL, 17, '10000'),
(74, 13, NULL, 17, 'Механический'),
(75, 14, NULL, 17, 'Бензин'),
(76, 15, NULL, 17, 'Новый'),
(77, 16, NULL, 17, 'Растаможена,Эл. стеклоподъемники,Охранная система,Электрозеркала'),
(78, 20, NULL, 17, '3,2'),
(79, 202, NULL, 9, 'Выбрать'),
(80, 6, NULL, 18, '120'),
(81, 7, NULL, 18, '10'),
(82, 202, NULL, 17, 'Выбрать'),
(83, 1, NULL, 2, '4'),
(85, 182, NULL, 26, 'Новый'),
(86, 33, NULL, 27, 'Acer'),
(87, 34, NULL, 27, '10"-13"'),
(88, 35, NULL, 27, 'Ноутбук'),
(89, 195, NULL, 27, 'Новый'),
(90, 33, NULL, 27, 'Acer'),
(91, 34, NULL, 27, '10"-13"'),
(92, 35, NULL, 27, 'Ноутбук'),
(93, 195, NULL, 27, 'Новый'),
(94, 204, 3, NULL, 'Nokia'),
(95, 205, 3, NULL, 'Android‎'),
(96, 208, 3, NULL, '320х480'),
(97, 209, 3, NULL, 'Две SIM-карты'),
(98, 211, 3, NULL, '512 МБ'),
(99, 212, 3, NULL, '1 ГБ'),
(100, 213, 3, NULL, '1.3 MP'),
(101, 214, 3, NULL, '1.3 MP'),
(102, 210, 3, NULL, 'Двухъядерный'),
(103, 216, 3, NULL, 'Белый,Черный,Pозовый'),
(104, 215, 3, NULL, 'Нет'),
(105, 1, NULL, 43, '4'),
(106, 2, NULL, 43, '104'),
(107, 3, NULL, 43, 'Кирпичный'),
(108, 4, NULL, 43, '1'),
(109, 5, NULL, 43, '5'),
(110, 74, NULL, NULL, 'Требует ремонта'),
(111, 237, NULL, NULL, 'Прицепы для легковых авто'),
(112, 8, NULL, 6, 'Выбрать'),
(113, 10, NULL, 6, 'Выбрать'),
(114, 11, NULL, 6, '2016'),
(115, 13, NULL, 6, 'Выбрать'),
(116, 15, NULL, 6, 'Автомат'),
(117, 16, NULL, 6, 'Бензин'),
(118, 133, NULL, 6, 'Новый'),
(119, 140, NULL, 6, 'Растаможена,Эл. стеклоподъемники,Парктроник'),
(120, 8, NULL, 1, 'Chevrolet'),
(121, 9, NULL, 1, 'Nexia'),
(122, 10, NULL, 1, 'Седан'),
(123, 11, NULL, 1, '2016'),
(124, 12, NULL, 1, '100000'),
(125, 13, NULL, 1, 'Черный'),
(126, 14, NULL, 1, '1.6'),
(127, 15, NULL, 1, 'Механический'),
(128, 16, NULL, 1, 'Бензин'),
(129, 133, NULL, 1, 'Отличное'),
(130, 140, NULL, 1, 'Растаможена,Эл. стеклоподъемники,Парктроник'),
(131, 133, NULL, NULL, 'Отличное'),
(132, 140, NULL, NULL, 'Растаможена,Эл. стеклоподъемники,Охранная система,Электрозеркала'),
(133, 8, NULL, 45, 'Chevrolet'),
(134, 9, NULL, 45, 'Nexia'),
(135, 10, NULL, 45, 'Седан'),
(136, 11, NULL, 45, '2016'),
(137, 12, NULL, 45, '10000'),
(138, 13, NULL, 45, 'Черный'),
(139, 14, NULL, 45, '1.6'),
(140, 15, NULL, 45, 'Механический'),
(141, 16, NULL, 45, 'Бензин'),
(142, 133, NULL, 45, 'Отличное'),
(143, 140, NULL, 45, 'Растаможена,Эл. стеклоподъемники'),
(155, 8, NULL, 47, 'Chevrolet'),
(156, 9, NULL, 47, 'Matiz'),
(157, 10, NULL, 47, 'Седан'),
(158, 11, NULL, 47, '2014'),
(159, 12, NULL, 47, '10000'),
(160, 13, NULL, 47, 'Черный'),
(161, 14, NULL, 47, '1.6'),
(162, 15, NULL, 47, 'Механический'),
(163, 16, NULL, 47, 'Бензин'),
(164, 133, NULL, 47, 'Отличное'),
(165, 140, NULL, 47, 'Растаможена,Эл. стеклоподъемники,Охранная система,Электрозеркала,Кондиционер,Парктроник'),
(166, 0, NULL, 48, '1000'),
(167, 44, NULL, 48, 'Chevrolet'),
(168, 45, NULL, 48, 'Damaz'),
(169, 46, NULL, 48, 'Фургон'),
(170, 47, NULL, 48, '2012'),
(171, 49, NULL, 48, 'Синий'),
(172, 238, NULL, 48, '0.9'),
(173, 242, NULL, 48, 'Механический'),
(174, 243, NULL, 48, 'Бензин'),
(175, 244, NULL, 48, 'Растаможена,Эл. стеклоподъемники'),
(176, 8, NULL, 3, 'Выбрать'),
(177, 10, NULL, 3, 'Выбрать'),
(178, 11, NULL, 3, '2016'),
(179, 13, NULL, 3, 'Выбрать'),
(180, 8, NULL, 4, 'Выбрать'),
(181, 10, NULL, 4, 'Выбрать'),
(182, 11, NULL, 4, '2016'),
(183, 13, NULL, 4, 'Выбрать'),
(184, 8, NULL, 7, 'Выбрать'),
(185, 10, NULL, 7, 'Выбрать'),
(186, 11, NULL, 7, '2016'),
(187, 13, NULL, 7, 'Выбрать'),
(188, 0, NULL, 49, '20'),
(189, 44, NULL, 49, 'Chevrolet'),
(190, 45, NULL, 49, 'Damas'),
(191, 46, NULL, 49, 'Микроавтобус'),
(192, 47, NULL, 49, '2013'),
(193, 49, NULL, 49, 'Асфальт'),
(194, 238, NULL, 49, '0.9'),
(195, 242, NULL, 49, 'Механический'),
(196, 243, NULL, 49, 'Бензин'),
(197, 244, NULL, 49, 'Растаможена,Эл. стеклоподъемники,Охранная система'),
(198, 0, NULL, 50, '30'),
(199, 44, NULL, 50, 'Chevrolet'),
(200, 45, NULL, 50, 'Damas'),
(201, 46, NULL, 50, 'Микроавтобус'),
(202, 47, NULL, 50, '2012'),
(203, 49, NULL, 50, 'Бежевый'),
(204, 238, NULL, 50, '0.9'),
(205, 242, NULL, 50, 'Механический'),
(206, 243, NULL, 50, 'Бензин'),
(207, 244, NULL, 50, 'Растаможена,Эл. стеклоподъемники'),
(208, 0, NULL, 51, '1000'),
(209, 44, NULL, 51, 'BMW'),
(210, 45, NULL, 51, 'Damas'),
(211, 46, NULL, 51, 'Фургон'),
(212, 47, NULL, 51, '2000'),
(213, 49, NULL, 51, 'Коричневый'),
(214, 238, NULL, 51, '0.9'),
(215, 242, NULL, 51, 'Механический'),
(216, 243, NULL, 51, 'Бензин'),
(217, 244, NULL, 51, 'Растаможена,Эл. стеклоподъемники'),
(218, 8, NULL, 2, 'Выбрать'),
(219, 10, NULL, 2, 'Выбрать'),
(220, 11, NULL, 2, '2016'),
(221, 13, NULL, 2, 'Выбрать'),
(222, 396, NULL, 52, 'Highscreen'),
(223, 397, NULL, 52, 'Spider'),
(224, 398, NULL, 52, 'Отличное'),
(225, 33, NULL, 53, 'Acer'),
(226, 34, NULL, 53, 'Меньше 12'),
(227, 35, NULL, 53, 'Нетбук'),
(228, 195, NULL, 53, 'Отличное'),
(229, 181, NULL, 54, 'Отличное'),
(230, 204, 33, NULL, 'Highscreen'),
(231, 205, 33, NULL, 'Android‎'),
(232, 206, 33, NULL, '4.3'),
(233, 207, 33, NULL, '5'),
(234, 208, 33, NULL, '720х1280'),
(235, 209, 33, NULL, 'Одну SIM-карту'),
(236, 210, 33, NULL, 'Четырехъядерный'),
(237, 211, 33, NULL, '1 ГБ'),
(238, 212, 33, NULL, '4 ГБ'),
(239, 213, 33, NULL, '13.0 MP'),
(240, 214, 33, NULL, '8.0 MP'),
(241, 215, 33, NULL, 'Есть'),
(242, 216, 33, NULL, 'Черный'),
(243, 204, 34, NULL, 'Highscreen'),
(244, 205, 34, NULL, 'Android‎'),
(245, 206, 34, NULL, '4.3'),
(246, 207, 34, NULL, '5'),
(247, 208, 34, NULL, '720х1280'),
(248, 209, 34, NULL, 'Одну SIM-карту'),
(249, 210, 34, NULL, 'Четырехъядерный'),
(250, 211, 34, NULL, '1 ГБ'),
(251, 212, 34, NULL, '4 ГБ'),
(252, 213, 34, NULL, '8.0 MP'),
(253, 214, 34, NULL, '5.0 MP'),
(254, 215, 34, NULL, 'Есть'),
(255, 216, 34, NULL, 'Белый,Черный,Золотой');

-- --------------------------------------------------------

--
-- Структура таблицы `at_image`
--

CREATE TABLE IF NOT EXISTS `at_image` (
  `id` int(11) NOT NULL,
  `filePath` varchar(400) NOT NULL,
  `itemId` int(20) NOT NULL,
  `isMain` int(1) DEFAULT NULL,
  `modelName` varchar(150) NOT NULL,
  `urlAlias` varchar(400) NOT NULL,
  `name` varchar(80) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `at_image`
--

INSERT INTO `at_image` (`id`, `filePath`, `itemId`, `isMain`, `modelName`, `urlAlias`, `name`) VALUES
(1, 'Brands/Brands1/d1eaa7.', 1, 1, 'Brands', 'e61d6c7c40-1', ''),
(2, 'Brands/Brands1/490aaf.jpg', 1, NULL, 'Brands', '17813caa76-2', ''),
(3, 'Brands/Brands1/79e57c.jpg', 1, NULL, 'Brands', 'c5a66667be-3', ''),
(4, 'Brands/Brands2/13bbbf.png', 2, 1, 'Brands', '245480ab8a-1', ''),
(5, 'Brands/Brands3/5c4a52.png', 3, 1, 'Brands', '1f479ae3e2-1', ''),
(6, 'Brands/Brands3/7cbe11.jpg', 3, NULL, 'Brands', '75a31f3d2a-2', ''),
(7, 'Ads/Ads1/3fc184.jpg', 1, 1, 'Ads', 'ca16fd1477-1', ''),
(8, 'Ads/Ads1/65e635.jpg', 1, NULL, 'Ads', '368d1fe592-2', ''),
(9, 'Ads/Ads1/1e68da.jpg', 1, NULL, 'Ads', 'af94df3e88-3', ''),
(10, 'Ads/Ads1/991cd9.jpg', 1, NULL, 'Ads', 'd866a453aa-4', ''),
(11, 'Ads/Ads14/6946af.jpg', 14, 1, 'Ads', '40df02ca65-1', ''),
(12, 'Ads/Ads10/c36df4.jpg', 10, 1, 'Ads', '523d0640ff-1', ''),
(13, 'Ads/Ads10/b6b658.jpg', 10, NULL, 'Ads', 'ace625e8e0-2', ''),
(14, 'Ads/Ads10/fc8226.jpg', 10, NULL, 'Ads', 'b5d48ee6a0-3', ''),
(15, 'Ads/Ads13/c4ebeb.png', 13, 1, 'Ads', 'fcd249e839-1', ''),
(16, 'Ads/Ads9/0c89da.jpg', 9, 1, 'Ads', '8d434944c8-1', ''),
(17, 'Ads/Ads9/34a63d.jpg', 9, NULL, 'Ads', '8372c582ce-2', ''),
(18, 'Ads/Ads8/d4d0f7.jpg', 8, 1, 'Ads', 'b28547278b-1', ''),
(19, 'Ads/Ads8/2186ea.jpg', 8, NULL, 'Ads', '0025bf90f6-2', ''),
(20, 'Ads/Ads8/d4fcf1.jpg', 8, NULL, 'Ads', 'a73f62706a-3', ''),
(21, 'Ads/Ads9/05f499.jpg', 9, NULL, 'Ads', 'f963029f25-3', ''),
(22, 'Ads/Ads9/c84e5d.jpg', 9, NULL, 'Ads', 'c22a8ef07b-4', ''),
(23, 'Ads/Ads9/8d4c4b.jpg', 9, NULL, 'Ads', '252bb85a4e-5', ''),
(24, 'Ads/Ads9/bf1d16.jpg', 9, NULL, 'Ads', 'dc13ae53ad-6', '');

-- --------------------------------------------------------

--
-- Структура таблицы `at_menu`
--

CREATE TABLE IF NOT EXISTS `at_menu` (
  `id` int(11) NOT NULL,
  `id_parent` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `dcreated` int(11) DEFAULT NULL,
  `bycreated` int(11) DEFAULT NULL,
  `dmodified` int(11) DEFAULT NULL,
  `bymodified` int(11) DEFAULT NULL,
  `ddeleted` int(11) DEFAULT NULL,
  `bydeleted` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `at_menu`
--

INSERT INTO `at_menu` (`id`, `id_parent`, `name`, `image`, `text`, `dcreated`, `bycreated`, `dmodified`, `bymodified`, `ddeleted`, `bydeleted`) VALUES
(1, 0, 'alltrade', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 0, 'Интернет Магазины', '', '', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 0, 'Оптовые товары', '', '', 1463227838, 1, NULL, NULL, NULL, NULL),
(4, 0, 'Услуги', '', '', 1463227855, 1, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `at_migration`
--

CREATE TABLE IF NOT EXISTS `at_migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `at_migration`
--

INSERT INTO `at_migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1435776235),
('m130524_201442_init', 1435776239),
('m140209_132017_init', 1436913377),
('m140403_174025_create_account_table', 1436913378),
('m140504_113157_update_tables', 1436913384),
('m140504_130429_create_token_table', 1436913385),
('m140506_102106_rbac_init', 1437079986),
('m140830_171933_fix_ip_field', 1436913386),
('m140830_172703_change_account_table_name', 1436913386),
('m141222_110026_update_ip_field', 1436913387),
('m151206_080951_add_new_field_to_user', 1449990274),
('m151206_081807_add_login_logout_field_to_user', 1449990275),
('m151206_082133_add_new_field_to_user', 1449990275),
('m151206_082148_add_new_field_to_user', 1449990275),
('m151213_065738_add_new_field_to_user', 1449990275),
('m151213_065932_add_new_fields_to_user', 1450026050),
('m151213_163739_clubs_add_fields', 1450181651),
('m151215_101248_comments_add_fields', 1450181652);

-- --------------------------------------------------------

--
-- Структура таблицы `at_news`
--

CREATE TABLE IF NOT EXISTS `at_news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `descr` text NOT NULL,
  `text` text NOT NULL,
  `img` varchar(255) NOT NULL,
  `counter` int(11) NOT NULL DEFAULT '0',
  `count_comment` int(11) NOT NULL,
  `like` int(11) NOT NULL,
  `dislike` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `dcreated` int(11) DEFAULT NULL,
  `bycreated` int(11) DEFAULT NULL,
  `dmodified` int(11) DEFAULT NULL,
  `bymodified` int(11) DEFAULT NULL,
  `ddeleted` int(11) DEFAULT NULL,
  `bydeleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `at_orders`
--

CREATE TABLE IF NOT EXISTS `at_orders` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name` text NOT NULL,
  `id_viloyat` int(11) NOT NULL,
  `id_tuman` int(11) NOT NULL,
  `address` text NOT NULL,
  `postcode` int(20) NOT NULL,
  `phone` text NOT NULL,
  `date` int(100) NOT NULL,
  `orders` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `at_orders`
--

INSERT INTO `at_orders` (`id`, `id_user`, `name`, `id_viloyat`, `id_tuman`, `address`, `postcode`, `phone`, `date`, `orders`) VALUES
(4, 17, 'Rasul Eshchanov', 13, 180, 'Hurriyat qfy Ipakchi mahalla', 11101111, '+998 (90) 738-95-58', 1477722308, '[{"id":"16","id_user":"17","id_good":"28","id_shop":"12","date":"1477058287","count":"1","size":"XXXL","color":"\\u0411\\u0435\\u043b\\u044b\\u0439"},{"id":"18","id_user":"17","id_good":"28","id_shop":"12","date":"1477054183","count":"1","size":"XL","color":"\\u0411\\u0435\\u043b\\u044b\\u0439"},{"id":"20","id_user":"17","id_good":"28","id_shop":"12","date":"1477056962","count":"1","size":"XL","color":"\\u0427\\u0435\\u0440\\u043d\\u044b\\u0439"},{"id":"21","id_user":"17","id_good":"28","id_shop":"12","date":"1477057032","count":"5","size":"XXXL","color":"\\u0427\\u0435\\u0440\\u043d\\u044b\\u0439"}]'),
(5, 17, 'Rasul Eshchanov', 13, 180, 'Hurriyat qfy Ipakchi mahalla', 11101111, '+998 (90) 738-95-58', 1477722425, '[{"id":"22","id_user":"17","id_good":"25","id_shop":"9","date":"1477115389","count":"2","size":"XL","color":"\\u0411\\u0435\\u043b\\u044b\\u0439"},{"id":"23","id_user":"17","id_good":"25","id_shop":"9","date":"1477057599","count":"1","size":"XXXL","color":"\\u0411\\u0435\\u043b\\u044b\\u0439"}]'),
(6, 1, 'Rasul Eshchanov', 13, 179, 'Hurriyat qfy Ipakchi mahalla', 11101111, '+998 (90) 738-95-58', 1477750993, '[{"id":"11","id_user":"1","id_good":"28","id_shop":"12","date":"1477043176","count":"8","size":"XL","color":"\\u0411\\u0435\\u043b\\u044b\\u0439"},{"id":"12","id_user":"1","id_good":"28","id_shop":"12","date":"1477122006","count":"1","size":"XL","color":"\\u0427\\u0435\\u0440\\u043d\\u044b\\u0439"},{"id":"13","id_user":"1","id_good":"28","id_shop":"12","date":"1477043538","count":"1","size":"XXXL","color":"\\u0411\\u0435\\u043b\\u044b\\u0439"}]');

-- --------------------------------------------------------

--
-- Структура таблицы `at_profile`
--

CREATE TABLE IF NOT EXISTS `at_profile` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `public_email` varchar(255) DEFAULT NULL,
  `gravatar_email` varchar(255) DEFAULT NULL,
  `gravatar_id` varchar(32) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `bio` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `at_profile`
--

INSERT INTO `at_profile` (`user_id`, `name`, `public_email`, `gravatar_email`, `gravatar_id`, `location`, `website`, `bio`) VALUES
(1, NULL, NULL, 'man780@mail.ru', 'd5c43f04eb5019aebb4da12d4efd2383', NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `at_rating_companies`
--

CREATE TABLE IF NOT EXISTS `at_rating_companies` (
  `id` int(111) NOT NULL,
  `id_company` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `star` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `at_rating_companies`
--

INSERT INTO `at_rating_companies` (`id`, `id_company`, `id_user`, `star`) VALUES
(1, 3, 1, 4),
(2, 1, 3, 4),
(3, 3, 2, 5),
(4, 13, 1, 1),
(7, 3, 17, 1),
(8, 12, 17, 5),
(9, 13, 17, 5),
(10, 12, 1, 4);

-- --------------------------------------------------------

--
-- Структура таблицы `at_reviews`
--

CREATE TABLE IF NOT EXISTS `at_reviews` (
  `id` int(111) NOT NULL,
  `id_shop` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date` int(111) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `at_reviews`
--

INSERT INTO `at_reviews` (`id`, `id_shop`, `id_user`, `date`, `text`) VALUES
(1, 3, 17, 1478599720, 'Rasul'),
(2, 3, 17, 1478600090, 'Murodbek'),
(3, 3, 18, 1478601247, 'Na gap');

-- --------------------------------------------------------

--
-- Структура таблицы `at_social_account`
--

CREATE TABLE IF NOT EXISTS `at_social_account` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `provider` varchar(255) NOT NULL,
  `client_id` varchar(255) NOT NULL,
  `data` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `at_states`
--

CREATE TABLE IF NOT EXISTS `at_states` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `at_states`
--

INSERT INTO `at_states` (`id`, `name`) VALUES
(1, 'Новый'),
(2, 'Б/у');

-- --------------------------------------------------------

--
-- Структура таблицы `at_subscribe`
--

CREATE TABLE IF NOT EXISTS `at_subscribe` (
  `id` int(111) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_shop` int(11) NOT NULL,
  `date` int(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `at_subscribe`
--

INSERT INTO `at_subscribe` (`id`, `id_user`, `id_shop`, `date`) VALUES
(18, 1, 12, 1478847971);

-- --------------------------------------------------------

--
-- Структура таблицы `at_tags`
--

CREATE TABLE IF NOT EXISTS `at_tags` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `at_token`
--

CREATE TABLE IF NOT EXISTS `at_token` (
  `user_id` int(11) NOT NULL,
  `code` varchar(32) NOT NULL,
  `created_at` int(11) NOT NULL,
  `type` smallint(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `at_token`
--

INSERT INTO `at_token` (`user_id`, `code`, `created_at`, `type`) VALUES
(2, 'J1MTxHSi4SZnIxkgLJO_H3yFDVTbZmxL', 1465633044, 0),
(3, 'b9t32ybVPr1sDyeIIIOKvyHTk3is91E2', 1465652515, 0),
(4, 'pLwXn8d0n6RSkVXpj7qk58CUrI4wYsW5', 1465890518, 0),
(5, 'W6OWcXfVxEOA-M5qXiG6CsClj3ECb71m', 1465899452, 0),
(7, 'IVEC3QEvfbuwMyIgrWlNf-7Nv79KvKJs', 1466259900, 0),
(9, 'PA5NnjAIU7vVcK3QCEEYyJZb8Bucfcoo', 1470056863, 0),
(10, '9Cleif2ahgQHWLbvS9Nd0iROFmwoN4-f', 1470898794, 0),
(11, '6tdZiapyntr_wl7f9HVju8T38umG2Jtw', 1470898888, 0),
(12, 'LogPX99bbUUwDALmFjEbeLLH-Ko9f-zP', 1470898976, 0),
(13, 'odWcC6RTih6_KLSh3VhEXVf9Q5-hcUGl', 1470899119, 0),
(14, 'MhFMEfkAum-ZtEHej1dndIYa6oO4CTNj', 1470899177, 0),
(15, '8J4ahEa5ziely06NB9xN7yrXz5GhTxxl', 1470899368, 0),
(16, 'JS_ZJYiLnJ0b4xcrrJXCXPLPZ_mFRepc', 1470899969, 0),
(17, 'znVRf1gmhhzAA_taXpyarY3O22i1ABUH', 1470900022, 0),
(18, 'SybWPMwSro5ekHzlNCD4Vx9Hv__hQMwM', 1478600807, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `at_tuman`
--

CREATE TABLE IF NOT EXISTS `at_tuman` (
  `id_tuman` int(5) NOT NULL,
  `id_vil` int(3) NOT NULL,
  `name` varchar(100) NOT NULL,
  `kod` int(11) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `addr` text NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=199 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `at_tuman`
--

INSERT INTO `at_tuman` (`id_tuman`, `id_vil`, `name`, `kod`, `tel`, `addr`) VALUES
(1, 8, 'Марҳамат', 0, '', ''),
(2, 8, 'Асака', 0, '', ''),
(3, 8, 'Андижон шаҳар', 0, '', ''),
(4, 8, 'СИБ Андижон туман', 0, '+99893 1234567', 'Андижон'),
(5, 1, 'Чилонзор', 0, '', ''),
(6, 1, 'Юнусобод', 0, '', ''),
(7, 1, 'Бектемир', 0, '', ''),
(8, 1, 'Учтепа', 0, '', ''),
(9, 1, 'Сергели', 0, '', ''),
(10, 1, 'Яшнобод', 0, '', ''),
(11, 1, 'Шайхонтохур', 0, '', ''),
(12, 1, 'Миробод', 0, '', ''),
(13, 1, 'Олмазор', 0, '', ''),
(14, 1, 'Мирзо Улуғбек', 0, '', ''),
(15, 1, 'Яккасарой', 0, '', ''),
(16, 2, 'Ангрен шаҳар', 189, '', ''),
(17, 2, 'Бекобод шаҳар', 0, '', ''),
(18, 2, 'Чирчиқ шаҳар', 0, '', ''),
(19, 2, 'Олмалиқ шаҳар', 0, '', ''),
(20, 2, 'Бўстонлиқ', 0, '', ''),
(21, 2, 'Бўка', 0, '', ''),
(22, 2, 'Қуйичирчиқ', 0, '', ''),
(23, 2, 'Зангиота', 0, '', ''),
(24, 2, 'Юқоричирчиқ', 0, '', ''),
(25, 2, 'Қибрай', 0, '', ''),
(26, 2, 'Паркент', 0, '', ''),
(27, 2, 'Пскент', 0, '', ''),
(28, 2, 'Ўртачирчиқ', 0, '', ''),
(29, 2, 'Янгийўл', 0, '', ''),
(30, 2, 'Чиноз', 0, '', ''),
(31, 2, 'Оҳангарон', 0, '', ''),
(32, 2, 'Бекобод', 0, '', ''),
(33, 2, 'Оққўрғон', 0, '', ''),
(34, 3, 'Гулистон шаҳар', 0, '', ''),
(35, 3, 'Янгиер шаҳар', 0, '', ''),
(36, 3, 'Ширин шаҳар', 0, '', ''),
(37, 3, 'Ховос', 0, '', ''),
(38, 3, 'Мирзабод', 0, '', ''),
(39, 3, 'Сардоба', 0, '', ''),
(40, 3, 'Сирдарё', 0, '', ''),
(42, 3, 'Оқ-олтин', 0, '', ''),
(43, 3, 'Боёвут', 0, '', ''),
(44, 3, 'Гулистон', 0, '', ''),
(45, 3, 'Сайхунобод', 0, '', ''),
(46, 4, 'Жиззах шаҳар', 0, '', ''),
(47, 4, 'Зомин', 0, '', ''),
(48, 4, 'Жиззах', 0, '', ''),
(49, 4, 'Дўстлик', 0, '', ''),
(52, 4, 'Мирзачўл', 0, '', ''),
(53, 4, 'Арнасой', 0, '', ''),
(54, 4, 'Бахмал', 0, '', ''),
(55, 4, 'Ғаллаорол', 0, '', ''),
(56, 4, 'Зарбдор', 0, '', ''),
(57, 4, 'Пахтакор', 0, '', ''),
(58, 4, 'Янгиобод', 0, '', ''),
(59, 4, 'Зафаробод', 0, '', ''),
(60, 4, 'Фориш', 0, '', ''),
(61, 5, 'Самарқанд шаҳар', 0, '', ''),
(62, 5, 'Самарқанд тумани', 0, '', ''),
(63, 5, 'Ургут', 0, '', ''),
(64, 5, 'Жомбой', 0, '', ''),
(65, 5, 'Булунғур', 0, '', ''),
(66, 5, 'Тайлоқ', 0, '', ''),
(67, 5, 'Пайариқ', 0, '', ''),
(68, 5, 'Оқдарё', 0, '', ''),
(69, 5, 'Қўшработ', 0, '', ''),
(70, 5, 'Иштиҳон', 0, '', ''),
(71, 5, 'Каттақўрғон', 0, '', ''),
(72, 5, 'Каттақўрғон шаҳар', 0, '', ''),
(73, 5, 'Нарпай', 0, '', ''),
(74, 5, 'Пахтачи', 0, '', ''),
(75, 5, 'Пастдарғом', 0, '', ''),
(76, 5, 'Нуробод', 0, '', ''),
(77, 6, 'Наманган шаҳар', 0, '', ''),
(78, 6, 'Поп', 0, '', ''),
(79, 6, 'Наманган тумани', 0, '', ''),
(80, 6, 'Тўрақўрғон', 0, '', ''),
(81, 6, 'Уйчи', 0, '', ''),
(82, 6, 'Косон', 0, '', ''),
(83, 6, 'Янгиқўрғон', 0, '', ''),
(84, 6, 'Учқўрғон', 0, '', ''),
(85, 6, 'Норин', 0, '', ''),
(86, 6, 'Чуст', 0, '', ''),
(87, 6, 'Мингбулоқ', 0, '', ''),
(88, 6, 'Чортоқ', 0, '', ''),
(89, 7, 'Фарғона шаҳар', 373, '', ''),
(90, 7, 'Марғилон шаҳар', 0, '', ''),
(91, 7, 'Қувасой шаҳар', 0, '', ''),
(92, 7, 'Қўқон шаҳар', 0, '', ''),
(93, 7, 'Бувайда', 0, '', ''),
(94, 7, 'Боғдод', 0, '', ''),
(95, 7, 'Бешариқ', 0, '', ''),
(96, 7, 'Олтиариқ', 0, '', ''),
(97, 7, 'Риштон', 0, '', ''),
(98, 7, 'Данғара', 0, '', ''),
(99, 7, 'Сўх', 0, '', ''),
(100, 7, 'Фурқат', 0, '', ''),
(101, 7, 'Ўзбекистон', 0, '', ''),
(102, 7, 'Учкўприк', 0, '', ''),
(103, 7, 'Қўштепа', 0, '', ''),
(104, 7, 'Қува', 0, '', ''),
(105, 7, 'Тошлоқ', 0, '', ''),
(106, 7, 'Ёзёвон', 0, '', ''),
(107, 7, 'Фарғона', 0, '', ''),
(108, 8, 'Балиқчи', 0, '', ''),
(109, 8, 'Булоқбоши', 0, '', ''),
(110, 8, 'Бўз', 0, '', ''),
(111, 8, 'Жалолқудуқ', 0, '', ''),
(112, 8, 'Избоскан', 0, '', ''),
(113, 8, 'Олтинкўл', 0, '', ''),
(114, 8, 'Пахтаобод', 0, '', ''),
(115, 8, 'Улуғнор', 0, '', ''),
(116, 8, 'Хонобод шаҳар', 0, '', ''),
(117, 8, 'Ҳўжаобод', 0, '', ''),
(118, 8, 'Шаҳрихон', 0, '', ''),
(119, 8, 'Қўрғонтепа', 0, '', ''),
(120, 9, 'Навоий шаҳар', 0, '', ''),
(123, 9, 'Кармана', 0, '', ''),
(122, 9, 'Зарафшон шаҳар', 0, '', ''),
(124, 9, 'Хатирчи', 0, '', ''),
(125, 9, 'Навбаҳор', 0, '', ''),
(126, 9, 'Нурота', 0, '', ''),
(127, 9, 'Конимех', 0, '', ''),
(128, 9, 'Қизилтепа', 0, '', ''),
(129, 9, 'Учқудуқ', 0, '', ''),
(130, 9, 'Томди', 0, '', ''),
(131, 10, 'Бухоро шаҳар', 0, '', ''),
(132, 10, 'Бухоро', 0, '', ''),
(133, 10, 'Ромитон', 0, '', ''),
(134, 10, 'Пешку', 0, '', ''),
(135, 10, 'Вобкент', 0, '', ''),
(136, 10, 'Шофиркон', 0, '', ''),
(137, 10, 'Ғиждивон', 0, '', ''),
(138, 10, 'Когон', 0, '', ''),
(139, 10, 'Когон шаҳар', 0, '', ''),
(140, 10, 'Қоровулбозор ', 0, '', ''),
(141, 10, 'Қоракўл', 0, '', ''),
(142, 10, 'Жондор', 0, '', ''),
(143, 10, 'Олот', 0, '', ''),
(144, 11, 'Китоб', 0, '', ''),
(145, 11, 'Шаҳрисабз', 0, '', ''),
(146, 11, 'Қарши', 0, '', ''),
(147, 11, 'Касби', 0, '', ''),
(148, 11, 'Чироқчи', 0, '', ''),
(149, 11, 'Қамаши', 0, '', ''),
(150, 11, 'Ғузор', 0, '', ''),
(151, 11, 'Нишон', 0, '', ''),
(152, 11, 'Муборак', 0, '', ''),
(153, 11, 'Косон', 0, '', ''),
(154, 11, 'Миришкор', 0, '', ''),
(155, 11, 'Яккабоғ', 0, '', ''),
(156, 11, 'Деҳқонобод', 0, '', ''),
(157, 11, 'Қарши шаҳар', 0, '', ''),
(158, 12, 'Термиз шаҳар', 0, '', ''),
(159, 12, 'Қумқўрғон', 0, '', ''),
(160, 12, 'Музработ', 0, '', ''),
(161, 12, 'Бойсун', 0, '', ''),
(162, 12, 'Олтинсой', 0, '', ''),
(163, 12, 'Ангор', 0, '', ''),
(164, 12, 'Қизириқ', 0, '', ''),
(165, 12, 'Денов', 0, '', ''),
(166, 12, 'Термиз туман', 0, '', ''),
(167, 12, 'Узун', 0, '', ''),
(168, 12, 'Жарқўрғон', 0, '', ''),
(169, 12, 'Шўрчи', 0, '', ''),
(170, 12, 'Сариосиё', 0, '', ''),
(171, 12, 'Шеробод', 0, '', ''),
(172, 13, 'Урганч шаҳар', 0, '', ''),
(173, 13, 'Боғот', 0, '', ''),
(174, 13, 'Гурлан', 0, '', ''),
(175, 13, 'Қўшкўпир', 0, '', ''),
(176, 13, 'Урганч', 0, '', ''),
(177, 13, 'Хазорасп', 0, '', ''),
(178, 13, 'Хива', 0, '', ''),
(179, 13, 'Хонқа', 0, '', ''),
(180, 13, 'Шовот', 0, '', ''),
(181, 13, 'Янгиариқ', 0, '', ''),
(182, 13, 'Янгибозор', 0, '', ''),
(183, 14, 'Нукус шаҳар', 0, '', ''),
(184, 14, 'Таҳиаташ шаҳар', 0, '', ''),
(185, 14, 'Нукус', 0, '', ''),
(186, 14, 'Хўжайли', 0, '', ''),
(187, 14, 'Шумани', 0, '', ''),
(188, 14, 'Канлкул', 0, '', ''),
(189, 14, 'Қўнғирот', 0, '', ''),
(190, 14, 'Мўйноқ', 0, '', ''),
(191, 14, 'Таҳтакўпир', 0, '', ''),
(192, 14, 'Караузяк', 0, '', ''),
(193, 14, 'Чинбой', 0, '', ''),
(194, 14, 'Кегейли', 0, '', ''),
(195, 14, 'Тўрткўл', 0, '', ''),
(196, 14, 'Беруний', 0, '', ''),
(197, 14, 'Элликқала', 0, '', ''),
(198, 14, 'Амударё', 0, '', '');

-- --------------------------------------------------------

--
-- Структура таблицы `at_user`
--

CREATE TABLE IF NOT EXISTS `at_user` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `avatar` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(60) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `confirmed_at` int(11) DEFAULT NULL,
  `unconfirmed_email` varchar(255) DEFAULT NULL,
  `blocked_at` int(11) DEFAULT NULL,
  `registration_ip` varchar(45) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `at_user`
--

INSERT INTO `at_user` (`id`, `username`, `avatar`, `email`, `password_hash`, `auth_key`, `confirmed_at`, `unconfirmed_email`, `blocked_at`, `registration_ip`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, 'admin@alltrade.uz', '$2y$12$f7DZi7bWjYc9aLOYV7Q8O.nL8MMDE4DFLqTzB2Mk818puHU8n97yO', 'iOQjB7Kbz-uW66ZOH5bJMUEImqZNCu5Y', 1436914521, NULL, NULL, '127.0.0.1', 1436914352, 1437262866),
(2, 'user78', NULL, 'user78@mail.ru', '$2y$12$DJWQGfFtCiyL6CnA5Xrj9.4tRuU4YT/0NHUIkSh4isiRzzNsSMjay', '3Gn_YO4WUfRBODrmbo7jdBmHhIo6Algv', 1465633080, NULL, NULL, '127.0.0.1', 1465633044, 1465633044),
(3, 'user49', NULL, 'user49@mail.ru', '$2y$12$zVtuJc5GfQYpydutdXeG.OCxdKAZgAGM1/FgxDtzQEsgIaANT.ZBS', 'SNi-FiPVqnU3qxNQWAGdUi4dilt2EKcI', 1465652604, NULL, NULL, '127.0.0.1', 1465652515, 1465652515),
(4, 'man780', NULL, 'man780@mail.ru', '$2y$12$ZURi2JjyJ64Z6ECVOORQUew8eJy7DxXH5G2iGSsgCY0OmvtfCK0Ey', 'HdyOIG-OzdjdIVUNsBFWMnTF6GwhmKqu', 1465899281, NULL, NULL, '127.0.0.1', 1465890518, 1465890518),
(5, 'rasul', NULL, 'rasul@outlook.com', '$2y$12$MTtRT8CX4akli6SNyxYPVOG2xu5c4Bkcf0i.S7LUFmeg.DdMImW2y', 'cJ8fNxgT0x1mnbPKvW3l8SbNUWQMHHR8', 1465899482, NULL, NULL, '127.0.0.1', 1465899452, 1470899255),
(7, 'user781', NULL, 'user781@mail.ru', '$2y$12$4FWsuS2PHdaDJkSAEdWB8.m26Flz6jqfJlFRTA/czWLW6GODuCGK2', '0YHfTl36IZouymD4vRzg-qApbuTz_M4W', 1466262451, NULL, NULL, '127.0.0.1', 1466259900, 1466259900),
(8, 'user771', NULL, 'user771@mail.ru', '$2y$12$/qKpNb4e/MUNrhqJhJzdguwVykPUjXeQRBqNqvcQJmQkruxP4inUK', '9sSi2zmCEl6DU9m96hL4Gwx8TGbV1lwG', 1466260570, NULL, NULL, '127.0.0.1', 1466259986, 1466259986),
(9, 'oqilxon', NULL, 'Oqilxon1991@gmail.com', '$2y$12$EfUjkv6fzvfdnlAbFqBKFOgpUdJluw/hu53SB2hj7ErbfiqKWRPGK', 'exSrzJ7T1Xzdcosb5yODWEPnrUT5b2GR', 1470056948, NULL, NULL, '127.0.0.1', 1470056863, 1470056863),
(10, 'apple', NULL, 'apple@mail.ru', '$2y$12$WhzNMdXKICwq59mvHTL.7expKY80XR2cx8gONxGHGH1Hmh791kJri', '991FJUGCFUfYPgm2nJxpkeFWY06Vuz03', 1470898812, NULL, NULL, '127.0.0.1', 1470898794, 1470898794),
(11, 'lguz', NULL, 'lg@mail.ru', '$2y$12$O7ds5vOkRbZYoLLsmCvs2egY9mRmRTAc3h7NWvqIj8YuNA5cBu2w6', 'CIBMTpwB08lDv0UWQzeaqny0Skp6BgV6', 1470898903, NULL, NULL, '127.0.0.1', 1470898888, 1470898947),
(12, 'samsung', NULL, 'samsung@mail.ru', '$2y$12$wPigcqVNisnIarFTANz34uUOZFFus/FhJ728Y8rb2HFRLL0p3uHuK', 'dFw5fUssG1_jo0T_0Zu_kg92h_-oY07e', 1470898985, NULL, NULL, '127.0.0.1', 1470898976, 1470898976),
(13, 'sony', NULL, 'sony@mail.ru', '$2y$12$fov26Vf/YaxNmQuzvz8yreJwdH1Y1Do2NS1.d9F0x3nf9fhks6h32', '7YqfsA2xSLYuekOpPA8VbWixRHKKKcX1', 1470899129, NULL, NULL, '127.0.0.1', 1470899119, 1470899119),
(14, 'nokia', NULL, 'nokia@mail.ru', '$2y$12$TgbAeDmbMDZFzg5gNqkAi.aN9XLlSKne5t4YoAnCQi0fhL7ptie7C', 'Q_tV_Bnz7jtw4nurb9jtNF_cj87F7yWY', 1470899185, NULL, NULL, '127.0.0.1', 1470899177, 1470899177),
(15, 'philips', NULL, 'philips@mail.ru', '$2y$12$MMRi9rwDtjftU.35nSB9nOcZbIN4My7FADPxabXoGDbXDeJroyQlq', 'uYSm5fNHAKF0KaM_5thpu6iVEvnYljTo', 1470899379, NULL, NULL, '127.0.0.1', 1470899368, 1470899368),
(16, 'toshiba', NULL, 'toshiba@mail.ru', '$2y$12$AyvxdW0yY9rhGcAK.nBUkuYrDIARJj9hUs.iB9DxLjWpEMAR0UBda', '8UNTbqHiEOCa-XVycRB5zWaHqVvrw6v1', 1470899976, NULL, NULL, '127.0.0.1', 1470899969, 1470899969),
(17, 'shivaki', NULL, 'shivaki@mail.ru', '$2y$12$4zDbUTRxHCL2bGBdSTwpgOPhZQLioqDeQc4BHjOyL/7NwljZRmvCW', '4dsYVdWtZN_xfakbhXA_QKlrCrtW8PNT', 1470900041, NULL, NULL, '127.0.0.1', 1470900022, 1470900068),
(18, 'murodbek', NULL, 'murodbek@mail.ru', '$2y$12$hn3zD/lbA50tQZ.V5qCLYOutX6zG0iN0nYj0BfdFX/KUy4IAwje/e', 'yyl4z6afwici4CEXsywzwdpvhuugKvt6', 1478600942, NULL, NULL, '127.0.0.1', 1478600807, 1478600807);

-- --------------------------------------------------------

--
-- Структура таблицы `at_user_fields`
--

CREATE TABLE IF NOT EXISTS `at_user_fields` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `at_viloyat`
--

CREATE TABLE IF NOT EXISTS `at_viloyat` (
  `id_vil` int(3) NOT NULL,
  `name` varchar(100) NOT NULL,
  `kod` int(4) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `at_viloyat`
--

INSERT INTO `at_viloyat` (`id_vil`, `name`, `kod`) VALUES
(1, 'Тошкент шаҳар', 371),
(2, 'Тошкент вилоят', 371),
(3, 'Сирдарё', 367),
(4, 'Жиззах', 372),
(5, 'Самарқанд', 366),
(6, 'Наманган', 369),
(7, 'Фарғона', 373),
(8, 'Андижон', 374),
(9, 'Навоий', 436),
(10, 'Буҳоро', 365),
(11, 'Қашқадарё', 375),
(12, 'Сурхандарё', 376),
(13, 'Хоразм', 362),
(14, 'Қорақалпоқистон', 361);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `at_ads`
--
ALTER TABLE `at_ads`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `at_ads_costs`
--
ALTER TABLE `at_ads_costs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `at_auth_assignment`
--
ALTER TABLE `at_auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Индексы таблицы `at_auth_item`
--
ALTER TABLE `at_auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Индексы таблицы `at_auth_item_child`
--
ALTER TABLE `at_auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Индексы таблицы `at_auth_rule`
--
ALTER TABLE `at_auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Индексы таблицы `at_brands`
--
ALTER TABLE `at_brands`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `at_cart`
--
ALTER TABLE `at_cart`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `at_category`
--
ALTER TABLE `at_category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `at_comments`
--
ALTER TABLE `at_comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `at_companies`
--
ALTER TABLE `at_companies`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `at_countries`
--
ALTER TABLE `at_countries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `at_currency`
--
ALTER TABLE `at_currency`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `at_currency_eshop`
--
ALTER TABLE `at_currency_eshop`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `at_desired`
--
ALTER TABLE `at_desired`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `at_discounting`
--
ALTER TABLE `at_discounting`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `at_elect`
--
ALTER TABLE `at_elect`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `at_goods`
--
ALTER TABLE `at_goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `at_goods_fields`
--
ALTER TABLE `at_goods_fields`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `at_goods_fields_values`
--
ALTER TABLE `at_goods_fields_values`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `at_image`
--
ALTER TABLE `at_image`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `at_menu`
--
ALTER TABLE `at_menu`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `at_migration`
--
ALTER TABLE `at_migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `at_news`
--
ALTER TABLE `at_news`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `at_orders`
--
ALTER TABLE `at_orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `at_profile`
--
ALTER TABLE `at_profile`
  ADD PRIMARY KEY (`user_id`);

--
-- Индексы таблицы `at_rating_companies`
--
ALTER TABLE `at_rating_companies`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `at_reviews`
--
ALTER TABLE `at_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `at_social_account`
--
ALTER TABLE `at_social_account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account_unique` (`provider`,`client_id`),
  ADD KEY `fk_user_account` (`user_id`);

--
-- Индексы таблицы `at_states`
--
ALTER TABLE `at_states`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `at_subscribe`
--
ALTER TABLE `at_subscribe`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `at_tags`
--
ALTER TABLE `at_tags`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `at_token`
--
ALTER TABLE `at_token`
  ADD UNIQUE KEY `token_unique` (`user_id`,`code`,`type`);

--
-- Индексы таблицы `at_tuman`
--
ALTER TABLE `at_tuman`
  ADD PRIMARY KEY (`id_tuman`);

--
-- Индексы таблицы `at_user`
--
ALTER TABLE `at_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_unique_username` (`username`),
  ADD UNIQUE KEY `user_unique_email` (`email`);

--
-- Индексы таблицы `at_user_fields`
--
ALTER TABLE `at_user_fields`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `at_viloyat`
--
ALTER TABLE `at_viloyat`
  ADD PRIMARY KEY (`id_vil`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `at_ads`
--
ALTER TABLE `at_ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT для таблицы `at_ads_costs`
--
ALTER TABLE `at_ads_costs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `at_brands`
--
ALTER TABLE `at_brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=702;
--
-- AUTO_INCREMENT для таблицы `at_cart`
--
ALTER TABLE `at_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT для таблицы `at_category`
--
ALTER TABLE `at_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1579;
--
-- AUTO_INCREMENT для таблицы `at_comments`
--
ALTER TABLE `at_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `at_companies`
--
ALTER TABLE `at_companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `at_countries`
--
ALTER TABLE `at_countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `at_currency`
--
ALTER TABLE `at_currency`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `at_currency_eshop`
--
ALTER TABLE `at_currency_eshop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `at_desired`
--
ALTER TABLE `at_desired`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT для таблицы `at_discounting`
--
ALTER TABLE `at_discounting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `at_elect`
--
ALTER TABLE `at_elect`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=43;
--
-- AUTO_INCREMENT для таблицы `at_goods`
--
ALTER TABLE `at_goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT для таблицы `at_goods_fields`
--
ALTER TABLE `at_goods_fields`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1077;
--
-- AUTO_INCREMENT для таблицы `at_goods_fields_values`
--
ALTER TABLE `at_goods_fields_values`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=256;
--
-- AUTO_INCREMENT для таблицы `at_image`
--
ALTER TABLE `at_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT для таблицы `at_menu`
--
ALTER TABLE `at_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `at_news`
--
ALTER TABLE `at_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `at_orders`
--
ALTER TABLE `at_orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `at_rating_companies`
--
ALTER TABLE `at_rating_companies`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `at_reviews`
--
ALTER TABLE `at_reviews`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблицы `at_social_account`
--
ALTER TABLE `at_social_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `at_states`
--
ALTER TABLE `at_states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `at_subscribe`
--
ALTER TABLE `at_subscribe`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT для таблицы `at_tags`
--
ALTER TABLE `at_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `at_tuman`
--
ALTER TABLE `at_tuman`
  MODIFY `id_tuman` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=199;
--
-- AUTO_INCREMENT для таблицы `at_user`
--
ALTER TABLE `at_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT для таблицы `at_user_fields`
--
ALTER TABLE `at_user_fields`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `at_viloyat`
--
ALTER TABLE `at_viloyat`
  MODIFY `id_vil` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `at_auth_assignment`
--
ALTER TABLE `at_auth_assignment`
  ADD CONSTRAINT `at_auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `at_auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `at_auth_item`
--
ALTER TABLE `at_auth_item`
  ADD CONSTRAINT `at_auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `at_auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `at_auth_item_child`
--
ALTER TABLE `at_auth_item_child`
  ADD CONSTRAINT `at_auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `at_auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `at_auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `at_auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `at_profile`
--
ALTER TABLE `at_profile`
  ADD CONSTRAINT `fk_user_profile` FOREIGN KEY (`user_id`) REFERENCES `at_user` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `at_social_account`
--
ALTER TABLE `at_social_account`
  ADD CONSTRAINT `fk_user_account` FOREIGN KEY (`user_id`) REFERENCES `at_user` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `at_token`
--
ALTER TABLE `at_token`
  ADD CONSTRAINT `fk_user_token` FOREIGN KEY (`user_id`) REFERENCES `at_user` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
