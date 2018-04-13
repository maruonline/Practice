-- phpMyAdmin SQL Dump
-- version 4.7.8
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Апр 13 2018 г., 09:03
-- Версия сервера: 5.7.21-log
-- Версия PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `practis`
--

-- --------------------------------------------------------

--
-- Структура таблицы `answers`
--

CREATE TABLE `answers` (
  `id_answer` int(11) NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `answers`
--

INSERT INTO `answers` (`id_answer`, `answer`) VALUES
(1, '1'),
(2, '2'),
(3, 'м'),
(4, 'Ж'),
(5, 'Неудовлетрительная организация учебного процесса'),
(6, 'Необходимость зарабатывать на свое обучение'),
(7, 'Послевузовское трудоустройство по специальности'),
(8, 'Отсутствие современной материальной базы'),
(9, 'Особых претензий нет'),
(10, 'Изучаемые дисциплины не соответствуют получаемой специальности'),
(11, 'Значимость некоторых предметов не соответствуют объему выделенных часов'),
(12, 'Ощущается перегруженность аудиторными занятиями'),
(13, 'Качество преподавания некоторых предметов неудовлетворительно'),
(14, 'содержание занятия'),
(15, 'обеспечение дисциплин учебниками'),
(16, 'использование элементов наглядности и технических средств обучения'),
(17, 'информированность об изменениях в учебном процессе'),
(18, 'процесс обучения в целом'),
(19, 'еще не определился, профессия не имеет значения'),
(20, 'по полученной специальности'),
(21, 'не имеющей отношения к специальности'),
(22, 'частная предпринимательская деятельность'),
(23, 'другое'),
(24, 'до 10 000 рублей'),
(25, 'от 10 000 до 20 000 рублей'),
(26, 'от 20 000 до 35 000 рублей'),
(27, 'больше 35 000 рублей');

-- --------------------------------------------------------

--
-- Структура таблицы `entries`
--

CREATE TABLE `entries` (
  `id` int(11) NOT NULL,
  `id_question` int(11) NOT NULL,
  `id_answer` int(11) NOT NULL,
  `id_student` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `entries`
--

INSERT INTO `entries` (`id`, `id_question`, `id_answer`, `id_student`) VALUES
(1, 3, 4, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE `questions` (
  `id_question` int(11) NOT NULL,
  `question` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id_question`, `question`) VALUES
(1, 'Курс, на котором Вы обучаетесь'),
(2, 'Ваш пол'),
(3, 'Какие из перечисленных проблем волнуют Вас больше всего'),
(4, 'С какими из предлагаемых мнений Вы согласны'),
(5, 'Оцените по 5-балльной шкале, на сколько Вас удовлетворяет постановка следующих сторон учебного процесса'),
(6, 'Приходится ли Вам совмещать в данный момент учебу с оплачиваемой работой?'),
(7, 'В какой сфере деятельности Вы планируете работать после получения диплома?'),
(8, 'На какую заработную плату Вы рассчитываете в первый год последипломной трудовой деятельности?'),
(9, 'Существует ли взаимопонимание между Вами и преподавателями?'),
(10, ' Довольны ли Вы выбором факультета?');

-- --------------------------------------------------------

--
-- Структура таблицы `student`
--

CREATE TABLE `student` (
  `id_student` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id_answer`);

--
-- Индексы таблицы `entries`
--
ALTER TABLE `entries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id_question`);

--
-- Индексы таблицы `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id_student`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `answers`
--
ALTER TABLE `answers`
  MODIFY `id_answer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблицы `entries`
--
ALTER TABLE `entries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id_question` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `student`
--
ALTER TABLE `student`
  MODIFY `id_student` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
