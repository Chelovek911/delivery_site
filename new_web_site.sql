-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 24 2022 г., 18:16
-- Версия сервера: 10.4.22-MariaDB
-- Версия PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `new_web_site`
--

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `text` text NOT NULL,
  `post_id` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id`, `name`, `text`, `post_id`) VALUES
(1, 'adsdasd', 'asdasd', '21'),
(2, 'qweq', 'qweqew', '21'),
(3, 'asdasd', 'asdasdasdasdasd', '21'),
(4, 'asdasd', 'asdasdasdasdasd', '21'),
(5, 'йцуйцуйцу', 'йцуйцуйцуйцу', '20'),
(6, 'йцуйцуйцу', 'йцуйцуйцуйцу', '20'),
(7, 'qweqwe', 'qweqweqeqe', '20'),
(8, 'qweqwe', 'qweqweqeqe', '20'),
(9, 'asdasdasdasd', 'asdasdasdasdasd', '20'),
(10, 'asdasdasdasd', 'asdasdasdasdasd', '20'),
(11, '', 'asdasdasdas', '20'),
(12, '', 'asdasdasdas', '20'),
(13, 'aasdasd', '', '20'),
(14, 'aasdasd', '', '20'),
(15, '\'', '', '20'),
(16, '\'', '', '20'),
(17, '\"', '', '20'),
(18, '\"', '', '20'),
(19, '\"', '\"', '20'),
(20, '\"', '\"', '20'),
(21, '\\', '\"', '20'),
(22, '\\', '\"', '20'),
(23, '\'\'\'\'', '\'\'\'\'', '20'),
(24, '\'\'\'\'', '\'\'\'\'', '20'),
(25, '123', '123', ''),
(26, '123', '2222', ''),
(27, '.123.', '..', ''),
(28, '.123.', '..', ''),
(29, '.123.', '.000000000.', ''),
(30, '', '', '20'),
(31, '', '', '20'),
(32, '', '', '20'),
(33, '', '', '20'),
(34, '', '', '20'),
(35, '', '', '20'),
(36, '..', '..', ''),
(37, ' ', '', '20'),
(38, ' ', '', '20'),
(39, '\'\'', '', '20'),
(40, '\'\'', '', '20'),
(41, '\'\'\'', '\'\'\'', '20'),
(42, '\'\'\'', '\'\'\'', '20'),
(43, '   ', '    ', '20'),
(44, '   ', '    ', '20'),
(45, 'asdasd', '  ', '20'),
(46, 'asdasd', '  ', '20'),
(47, '.qweqe.', '.qweqe.', ''),
(48, '.qweqe.', '.qweqe.', ''),
(49, '.qweqe.', '.000000000.', ''),
(50, '.qweqe.', '.000000000.', ''),
(51, '.   .', '.000000000.', ''),
(52, '.   .', '.000000000.', ''),
(53, '.   фывфыв.', '.000000000фывфвыэ000фывфыв.', ''),
(54, '.   фывфыв.', '.000000000фывфвыэ000фывфыв.', ''),
(55, '.йцуйцу.', '.йцуйцу000йцуйцу.', ''),
(56, '.йцуйцу.', '.йцуйцу000йцуйцу.', ''),
(57, '.   .', '.000000000.', ''),
(58, '..', '.000000000.', ''),
(59, '..', '..', ''),
(60, '.qweqwe.', '.qweqwe000qweqweqw000.', ''),
(61, '.adasdasd.', '.000000000.', ''),
(62, 'adasdasd', '   ', '21'),
(63, '.   .', '.qwqweqwe.', ''),
(64, '   ', 'qwqweqwe', '21'),
(65, '111222', '111222  ', '21'),
(66, '.111222.', '.111222000000.', ''),
(67, '111222', '111222  222  222', '21'),
(68, '.111222.', '.111222000000222000000222.', ''),
(69, '.111222.', '.111222000000222000000222.', ''),
(70, '111222', '111222  222  222', '21'),
(71, '.sssssss.', '.sssssss.', ''),
(72, 'sssssss', 'sssssss', '21'),
(73, 'ffffff', 'fffffff', '21'),
(74, 'ffffff', 'fffffff', '21'),
(75, 'ffffff', 'fffffff \'', '21'),
(76, 'ffffff', 'fffffff \'', '21'),
(77, 'ffffff', 'fffffff \'', '21'),
(78, 'ffffff', 'fffffff \'', '21'),
(79, '.ffffff.', '.fffffff000000.', ''),
(80, 'ffffff', 'fffffff \'', '21'),
(81, '.asd.', '.asd.', ''),
(82, 'asd', 'asd', '21'),
(83, '.sdsdfasdasd.', '.asdadasd000000.', ''),
(84, 'sdsdfasdasd', 'asdadasd  ', '21'),
(85, 'hjk', '0', '21'),
(86, 'hjk', '0', '21'),
(87, 'hjk', '', '21'),
(88, 'hjk', '', '21'),
(89, 'hjk', '', '21'),
(90, 'hjk', '', '21'),
(91, 'hjk', 'jhkjhk', '21'),
(92, 'hjk', 'jhkjhk', '21'),
(93, 'hjk', 'jhkjhk', '21'),
(94, 'hjk', 'jhkjhk', '21'),
(95, 'hjk', 'jhkjhkghj', '21'),
(96, 'adsadsad4324324', 'jhkjhkghj', '21'),
(97, 'adadsad4324324', 'jhkjhkghj', '21'),
(98, 'adadsad4324324hjk', 'jhkjhkghj', '21'),
(99, 'adadsad4324324hjk', 'jhkjhkghj', '21'),
(100, 'adadsad4324324hjk', 'jhkjhkghj', '21'),
(101, 'adadsad4324324hjk', 'jhkjhkghj', '21'),
(102, 'adadsad4324324hjk', 'jhkjhkghj', '21'),
(103, 'ad%26a%22dsa%5Cd+4324324%27hjk....%D1%8A%D1%8A', 'jhkjhkghj', '21'),
(104, 'ролролрол', '%D1%8D%D1%8D%D1%8D%D0%BB%D1%80%D0%BE%D0%BE%D0%BB%D0%BE%D1%80%D0%BB%D1%80%D0%BE%D0%BB%27%27%27%27%3B%3B%3B%25%5E%5E', '21');

-- --------------------------------------------------------

--
-- Структура таблицы `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`) VALUES
(1, 'имя', 'kva@mail.ru', '123'),
(2, 'йцуйу', 'kva@mail.ru', 'фывфывфывфв'),
(3, '\'', '', ''),
(4, '\'', 'kva@mail.ru', '\''),
(5, 'фвыфв', 'aasd@xn--b1aa7c0ac', 'фывфывфывфыв'),
(6, '', '', 'фывфывфывфыв'),
(7, '', '', ''),
(8, 'й', '', ''),
(9, '', '', ''),
(10, '', '', ''),
(11, '', '', ''),
(12, '', '', ''),
(13, '', '', ''),
(14, 'фвыфв', 'aasd@xn--b1aa7c0ac', 'gfh'),
(15, '', '', ''),
(16, '', '', ''),
(17, '', '', ''),
(18, '', '', ''),
(19, '', '', ''),
(20, '', '', ''),
(21, '', '', ''),
(22, '', '', ''),
(23, '', '', ''),
(24, '    ', '', ''),
(25, '    ', '', ''),
(26, '      ', '', ''),
(27, '      ', '', ''),
(28, '', '', ''),
(29, '', '', ''),
(30, '', '', ''),
(31, '       ', '', ''),
(32, '       ', '', ''),
(33, '       dasd dsadsa    sadsa', '', ''),
(34, '', '', ''),
(35, '     ', '', ''),
(36, '3213213', '', ''),
(37, 'dsadsad', '', ''),
(38, 'выфвыфвыфвы', '', ''),
(39, 'asdasd', '', ''),
(40, 'asdasd', '', '     '),
(41, 'dsadsa', 'aasd@xn--b1aa7c0ac', '321321'),
(42, 'dsadsa', 'aasd@xn--b1aa7c0ac', 'fdsfdsfdsf fdsfdsf'),
(43, 'qwdqwd', '', 'qwdqwd'),
(44, 'qwdqwd', '', 'qwdqwd'),
(45, 'qwdqwd', 'asdads@mail.ru', 'qwdqwd');

-- --------------------------------------------------------

--
-- Структура таблицы `files_id`
--

CREATE TABLE `files_id` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `files_id`
--

INSERT INTO `files_id` (`id`, `name`) VALUES
(1, ''),
(2, ''),
(3, 'misha kvasov'),
(4, 'asdasd'),
(5, 'asdasd'),
(6, 'asdasd'),
(7, 'asdasd'),
(8, 'asdasd'),
(9, 'asdasd'),
(10, 'asdasd'),
(11, ''),
(13, '');

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `text` text NOT NULL,
  `date` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `name`, `description`, `text`, `date`) VALUES
(11, 'Графік поставки води у святкові дні', '11111111111111111111111111111', '111111111111111111111111111111111111111111111111111111111111111111111111111111111111', ''),
(10, 'Графік поставки води у святкові дні', 'sdfsfdsdfsfd', 'sdfssdfsdfasfasf', ''),
(8, 'GJCNJsdfsdfsdf', 'sdfsfdsdfsfd', 'sdfssdfsdfasfasf', ''),
(9, 'Графік поставки води у святкові дні', 'sdfsfdsdfsfd', 'sdfssdfsdfasfasf', ''),
(7, 'GJCNJsdfsdfsdf', 'sdfsfdsdfsfd', 'sdfssdfsdfasfasf', ''),
(5, 'йцуйу', '1231231231231231', 'fgjfjgfjghfjhfjhgjhgjh', ''),
(6, 'jjjjjjjjjjjj', 'qqqqqqqqqwww', 'qqqqqqqqqwww', ''),
(12, 'Графік поставки води у святкові дні', 'asdddddddddddddddddddddddddddddddddddd', 'ddasdasdasdasdasdasdasda', ''),
(13, 'Графік поставки води у святкові дні', 'asdddddddddddddddddddddddddddddddddddd', 'ddasdasdasdasdasdasdasda', ''),
(14, 'aaaaaa aaaaa  aaaaaa  aaaaa aaa   aaaaaaa aaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaa', 'qweqweqweqewqwe', ''),
(15, 'rwrew  erwrw  rwerwerw', 'werwerwerdfsdfsdfsfssf', 'wrwerwerwrwerwersdfsdfssdfsdfsf', ''),
(16, 'aaaaaa aaaaa  aaaaaa  aaaaa aaa   aaaaaaa aaaaaaaaaaaaaaaaaaaa', 'qqqqqqqqqwwwqweqeqwe', 'qweqweqweqweqweqwe', ''),
(17, 'qweqeqweqweq', 'weqweqwe', 'qweqweqweqe', ''),
(18, 'qweqeqweqweq', 'weqweqwe', 'qweqweqweqe', ''),
(19, 'выаываыва', 'ываываыва', 'ываываываыва', '22 мая'),
(20, '33333', '3333', '3333333333333333333', '19 май'),
(21, 'qeqweqwe', 'qweqweqwe', 'qewqewqweqweqweqweqweqwe', '30 Травень'),
(22, 'qeqwewq', 'qweqwe', 'qeqweqweqweqwe', '19 Липень'),
(23, 'asdasdasd', 'asdasdasd', 'asdasdasdasd', '19 Липень'),
(24, '5555 1111', 'asdasdad', 'asdasdasdasd', '19 Липень');

-- --------------------------------------------------------

--
-- Структура таблицы `tovar`
--

CREATE TABLE `tovar` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` text NOT NULL,
  `descr` text NOT NULL,
  `type_tovar` text NOT NULL,
  `extra_tov` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `tovar`
--

INSERT INTO `tovar` (`id`, `name`, `price`, `descr`, `type_tovar`, `extra_tov`) VALUES
(1, 'Помпа', '100', 'Помпа для воды', 'pump', ''),
(2, 'Помпа1', '150', 'Помпа для воды', 'pump', ''),
(3, 'Помпа2', '200', 'Помпа для воды', 'pump', ''),
(8, 'Товар2', '2000', 'ывфвфывффывфывфыв', 'pump', ''),
(10, 'qweqweqwe', '222', 'qweqweqweasdasdads', 'pump1', ''),
(11, 'qweqweqwe', '222', 'qweqweqweasdasdads', 'pump1', ''),
(12, 'qweqweqwe', '222', 'qweqweqweasdasdads', 'pump1', ''),
(13, 'qweqw1eqwe', '222', 'qweqweqweasdasdads', 'pump_new', ''),
(14, 'qweqweqwe2', '222', 'qweqweqweasdasdads', 'pump_new', ''),
(15, 'qweqweqwe3', '222', 'qweqweqweasdasdads', 'pump_new', ''),
(20, 'qweqweqwe4', '555', 'ghhghghghghghghghgh', 'pump_new', ''),
(21, 'asdasdasdasdasdasdas', 'asdasdasdasd', 'asdasdasdasdasdasd', 'pump', '1'),
(22, 'asdasdasdasdasdasdas', 'asdasdasdasd', 'asdasdasdasdasdasd', 'pump', '1'),
(23, 'asdasdasdasdasdasdas', 'asdasdasdasd', 'asdasdasdasdasdasd', 'pump', ''),
(24, 'asdasdasdasdasdasdas222', 'asdasdasdasd222', 'asdasdasdasdasdasd22', 'pump', ''),
(25, 'asdasdasdasdasdasdas222', 'asdasdasdasd222', 'asdasdasdasdasdasd22', 'pump', '1'),
(26, 'a112123123123123', '223123123123', '123123123123123123123', 'pump', '1');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `files_id`
--
ALTER TABLE `files_id`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tovar`
--
ALTER TABLE `tovar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT для таблицы `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT для таблицы `files_id`
--
ALTER TABLE `files_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `tovar`
--
ALTER TABLE `tovar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
