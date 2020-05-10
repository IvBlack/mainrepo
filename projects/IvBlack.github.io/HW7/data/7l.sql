-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Май 25 2019 г., 19:19
-- Версия сервера: 5.7.21-1
-- Версия PHP: 7.2.4-1+b1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `php1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `title`, `price`, `image`, `description`) VALUES
(22, 'Товар 1', 550, 'img/5.jpg', 'описание'),
(23, 'Товар 3', 150, 'img/7.jpg', 'Тадам');

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `images`
--

INSERT INTO `images` (`id`, `url`, `views`, `title`, `size`) VALUES
(1, 'img/1.jpg', 32, 'Картинка 1', 0),
(2, 'img/2.jpg', 2, 'Картинка 2', 0),
(3, 'img/3.jpg', 0, 'Картинка 3', 0),
(4, 'img/4.jpg', 0, 'Картинка 4', 0),
(5, 'img/5.jpg', 0, 'Картинка 5', 0),
(6, 'img/6.jpg', 1, 'Картинка 6', 0),
(7, 'img/7.jpg', 0, 'Картинка 7', 0),
(8, 'img/8.jpg', 7, 'Картинка 8', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Структура таблицы `order_info`
--

CREATE TABLE `order_info` (
  `order_id` int(11) NOT NULL,
  `good_name` text NOT NULL,
  `count` int(11) NOT NULL,
  `good_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

-- --------------------------------------------------------

--
-- Структура таблицы `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Дамп данных таблицы `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `review`) VALUES
(1, 'Админ2', 'Тестовая запись'),
(2, 'Админ', 'Тестовая запись'),
(11, 'Имя', '$text3'),
(13, 'Новый отзыв', 'Тестовая запись');

-- --------------------------------------------------------

--
-- Структура таблицы `tempOrder`
--

CREATE TABLE `tempOrder` (
  `username` varchar(45) NOT NULL,
  `goodId` int(11) NOT NULL,
  `goodCount` int(11) NOT NULL,
  `goodName` varchar(128) NOT NULL,
  `goodPrice` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `image` text
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Дамп данных таблицы `tempOrder`
--

INSERT INTO `tempOrder` (`username`, `goodId`, `goodCount`, `goodName`, `goodPrice`, `id`, `image`) VALUES
('admin', 22, 1, 'Товар 1', 550, 14, 'img/5.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `Users`
--

CREATE TABLE `Users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `pass` varchar(64) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `role` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf16;

--
-- Дамп данных таблицы `Users`
--

INSERT INTO `Users` (`id`, `login`, `pass`, `Name`, `role`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', 1),
(2, 'user', '4c8b6c0b26c8a24e6cb7b60d54a5b93a', 'Andrey', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`user`);

--
-- Индексы таблицы `order_info`
--
ALTER TABLE `order_info`
  ADD KEY `order_id` (`order_id`);

--
-- Индексы таблицы `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tempOrder`
--
ALTER TABLE `tempOrder`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD KEY `Name` (`Name`) USING BTREE;

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `tempOrder`
--
ALTER TABLE `tempOrder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `Users`
--
ALTER TABLE `Users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user`) REFERENCES `Users` (`Name`);

--
-- Ограничения внешнего ключа таблицы `order_info`
--
ALTER TABLE `order_info`
  ADD CONSTRAINT `order_info_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
