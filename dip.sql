-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Время создания: Мар 18 2022 г., 08:42
-- Версия сервера: 5.7.34
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dip`
--

-- --------------------------------------------------------

--
-- Структура таблицы `select_reasons`
--

CREATE TABLE `select_reasons` (
  `id` int(250) NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `select_reasons`
--

INSERT INTO `select_reasons` (`id`, `value`) VALUES
(12, 'и это правда'),
(13, 'почему'),
(15, 'dhchdhjjd'),
(16, 'пажар');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `login` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `photo` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `email`, `password`, `photo`, `address`) VALUES
(1, 'стас', '12', 'Wotlol', '123456', 'upload/1.png', ''),
(2, '', '12', '', 'Wotlol', 'upload/', 'г Смоленск, ул 1 Мая '),
(3, 'test1', 'test', 'world@gmail.com', 'test12', 'upload/1.png', 'г Смоленск ');

-- --------------------------------------------------------

--
-- Структура таблицы `variables`
--

CREATE TABLE `variables` (
  `id` int(11) NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `variables`
--

INSERT INTO `variables` (`id`, `title`, `value`) VALUES
(14, 'city', 'Москве'),
(15, 'image', 'panel/uploads/A-binary-input-image-size-40X40-px.png');

-- --------------------------------------------------------

--
-- Структура таблицы `vibor_reasons`
--

CREATE TABLE `vibor_reasons` (
  `id` int(250) NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `vibor_reasons`
--

INSERT INTO `vibor_reasons` (`id`, `image`, `title`, `text`) VALUES
(11, 'panel/uploads/1.png', 'почему', 'ладно'),
(12, 'panel/uploads/', 'dvdfvfdv', 'fvfvfvfv'),
(13, 'panel/uploads/1.png', 'rgrgrg', 'rgrgr');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `select_reasons`
--
ALTER TABLE `select_reasons`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name_2` (`name`),
  ADD UNIQUE KEY `name_3` (`name`),
  ADD KEY `name` (`name`);

--
-- Индексы таблицы `variables`
--
ALTER TABLE `variables`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vibor_reasons`
--
ALTER TABLE `vibor_reasons`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `select_reasons`
--
ALTER TABLE `select_reasons`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `variables`
--
ALTER TABLE `variables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `vibor_reasons`
--
ALTER TABLE `vibor_reasons`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
