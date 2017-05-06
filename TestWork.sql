-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 06 2017 г., 12:19
-- Версия сервера: 5.7.16
-- Версия PHP: 5.6.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `TestWork`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users_list`
--

CREATE TABLE `users_list` (
  `id` int(11) NOT NULL,
  `Name` text,
  `Surname` text,
  `MobPhone` varchar(15) DEFAULT NULL,
  `Email` text,
  `Skype_Login` text,
  `Reg_Date` datetime DEFAULT NULL,
  `HomePhone` varchar(15) DEFAULT NULL,
  `Balance` int(11) DEFAULT NULL,
  `Balance_Sheet` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users_list`
--

INSERT INTO `users_list` (`id`, `Name`, `Surname`, `MobPhone`, `Email`, `Skype_Login`, `Reg_Date`, `HomePhone`, `Balance`, `Balance_Sheet`) VALUES
(1, 'Name', 'Surname', '0996523702', 'sergey@mail.ru', 'sergey', '2017-04-11 07:27:26', '0559263741', 12, 25),
(2, 'Vladymyr', 'Hudzhal', '0996523702', 'vladymyr@ukr.net', 'vladymyr', '2016-02-05 00:00:00', '0522965374', 25, 25),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users_list`
--
ALTER TABLE `users_list`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users_list`
--
ALTER TABLE `users_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
