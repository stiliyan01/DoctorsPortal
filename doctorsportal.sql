-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Време на генериране:  4 дек 2024 в 19:08
-- Версия на сървъра: 8.0.30
-- Версия на PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данни: `doctorsportal`
--

-- --------------------------------------------------------

--
-- Структура на таблица `appointments`
--

CREATE TABLE `appointments` (
  `id` int NOT NULL,
  `doctor_id` int NOT NULL,
  `user_id` int NOT NULL,
  `time` timestamp NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Схема на данните от таблица `appointments`
--

INSERT INTO `appointments` (`id`, `doctor_id`, `user_id`, `time`, `description`) VALUES
(8, 7, 5, '2024-11-01 07:00:00', 'Час с пациент: gosho122352353 goshev1'),
(10, 7, 6, '2024-11-01 09:00:00', 'Час с пациент: pesho peshev'),
(11, 7, 6, '2024-11-01 14:00:00', 'Час с пациент: pesho peshev'),
(12, 7, 7, '2024-11-18 10:00:00', 'Час с пациент: plami plamena'),
(13, 7, 7, '2024-11-21 14:00:00', 'Час с пациент: plami plamena'),
(14, 7, 9, '2024-11-14 13:00:00', 'Час с пациент: stelio borisov'),
(15, 7, 9, '2024-11-16 10:00:00', 'Час с пациент: stelio borisov'),
(16, 5, 5, '2024-11-27 11:00:00', 'Час с пациент: gosho122352353 goshev1'),
(17, 4, 7, '2024-11-30 09:00:00', 'Час с пациент: goshodoktora3 goshev3'),
(18, 7, 7, '2024-11-04 11:00:00', 'Час с пациент: goshodoktora3 goshev3'),
(19, 7, 7, '2024-11-04 08:00:00', 'Час с пациент: goshodoktora3 goshev3'),
(22, 1, 10, '2024-11-26 10:00:00', 'Час с пациент: purviTest adf'),
(24, 5, 10, '2024-11-27 10:00:00', 'Час с пациент: purviTest adf'),
(28, 7, 5, '2024-11-12 10:00:00', 'Час с пациент: mitko goshev1'),
(29, 1, 5, '2024-11-05 10:00:00', 'Час с пациент: gosho goshev1');

-- --------------------------------------------------------

--
-- Структура на таблица `cities`
--

CREATE TABLE `cities` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Схема на данните от таблица `cities`
--

INSERT INTO `cities` (`id`, `name`) VALUES
(1, 'Варна'),
(2, 'София'),
(3, 'Пловдив'),
(4, 'Бургас'),
(5, 'Враца '),
(6, 'Велико Търново');

-- --------------------------------------------------------

--
-- Структура на таблица `doctors`
--

CREATE TABLE `doctors` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `city_id` int NOT NULL,
  `speciality_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Схема на данните от таблица `doctors`
--

INSERT INTO `doctors` (`id`, `title`, `first_name`, `last_name`, `email`, `password`, `gender`, `city_id`, `speciality_id`) VALUES
(1, 'др.', 'Георги', 'Георгиев', 'georgi@email.com', 'parola', 'мъж', 1, 1),
(2, 'др.', 'Борис ', 'Борисов', 'boris@email.com', 'parola', 'мъж', 2, 1),
(3, 'др.', 'Кирил', 'Кирилов', 'kiril@email.com', 'parola', 'мъж', 3, 1),
(4, 'др.', 'Мария ', 'Илиева', 'maria@email.com', 'parola', 'жена', 4, 4),
(5, 'др.', 'Александър', 'Петров', 'sasho@email.com', 'parola', 'мъж', 6, 3),
(6, 'др.', 'Петър', 'Аврамов', 'petar@email.com', 'parola', 'жена', 5, 4),
(7, 'dr.1', 'goshodoktora3', 'goshev3', 'goshodoktora@email.com', 'parola', 'мъж', 6, 6),
(8, 'doktor 12342134', 'testDoktor', 'doktsfdg', 'testdoktora@email.com', 'parola', 'мъж', 2, 1);

-- --------------------------------------------------------

--
-- Структура на таблица `doctors_specialties`
--

CREATE TABLE `doctors_specialties` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Схема на данните от таблица `doctors_specialties`
--

INSERT INTO `doctors_specialties` (`id`, `name`) VALUES
(1, 'Кардиолог'),
(2, 'Дерматолог'),
(3, 'Невролог'),
(4, 'Диетолог'),
(5, 'Психолог'),
(6, 'Психотерапевт');

-- --------------------------------------------------------

--
-- Структура на таблица `patients`
--

CREATE TABLE `patients` (
  `id` int NOT NULL,
  `doctor_id` int NOT NULL,
  `user_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Схема на данните от таблица `patients`
--

INSERT INTO `patients` (`id`, `doctor_id`, `user_id`) VALUES
(1, 7, 5),
(2, 7, 6),
(3, 7, 7),
(4, 5, 5),
(5, 1, 6),
(6, 2, 7);

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `file` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `is_donor` tinyint DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `gender`, `file`, `is_donor`) VALUES
(5, 'gosho', 'goshev1', 'gosho@email.com', 'parola', 'мъж', '', 1),
(6, 'pesho', 'peshev', 'pesho@email.com', 'parola', 'мъж', 'pesho dosie ', 0),
(7, 'plami', 'plamena', 'plami@email.com', 'parola', 'жена', 'plami dosie ', 0),
(8, 'plami', 'dimitrova', 'plami@gmail.com', 'parola', 'жена', NULL, 0),
(9, 'stelio', 'borisov', 'stelio@email.com', 'parola', 'мъж', NULL, 0),
(10, 'purviTest', 'adf', 'test@email.com', 'parola', 'мъж', 'asdfsadfasdf', 0);

--
-- Indexes for dumped tables
--

--
-- Индекси за таблица `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctors` (`doctor_id`),
  ADD KEY `user123` (`user_id`);

--
-- Индекси за таблица `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Индекси за таблица `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Индекси за таблица `doctors_specialties`
--
ALTER TABLE `doctors_specialties`
  ADD PRIMARY KEY (`id`);

--
-- Индекси за таблица `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor` (`doctor_id`),
  ADD KEY `users` (`user_id`);

--
-- Индекси за таблица `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `doctors_specialties`
--
ALTER TABLE `doctors_specialties`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ограничения за дъмпнати таблици
--

--
-- Ограничения за таблица `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `doctors` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user123` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения за таблица `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `doctor` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
