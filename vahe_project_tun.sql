-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 20 2018 г., 21:41
-- Версия сервера: 5.7.19
-- Версия PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `vahe_project_tun`
--

-- --------------------------------------------------------

--
-- Структура таблицы `about`
--

DROP TABLE IF EXISTS `about`;
CREATE TABLE IF NOT EXISTS `about` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `about_title_arm` text NOT NULL,
  `about_title_rus` text NOT NULL,
  `about_title_eng` text NOT NULL,
  `mini_title_arm` text NOT NULL,
  `mini_title_rus` text NOT NULL,
  `mini_title_eng` text NOT NULL,
  `about_text1_arm` longtext NOT NULL,
  `about_text1_rus` longtext NOT NULL,
  `about_text1_eng` longtext NOT NULL,
  `about_text2_arm` longtext NOT NULL,
  `about_text2_rus` longtext NOT NULL,
  `about_text2_eng` longtext NOT NULL,
  `about_image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `about`
--

INSERT INTO `about` (`id`, `about_title_arm`, `about_title_rus`, `about_title_eng`, `mini_title_arm`, `mini_title_rus`, `mini_title_eng`, `about_text1_arm`, `about_text1_rus`, `about_text1_eng`, `about_text2_arm`, `about_text2_rus`, `about_text2_eng`, `about_image`) VALUES
(1, 'asdf', 'asdfg', 'A FEW WORDS ABOUT ME', 'asdfg', 'asdfg', 'WHO IS THE PHOTOGRAPHER?', 'asdfg       ', 'asdf       ', 'Artist. instead of an easel - a tripod. instead of brushes - a camera that transmits feelings and emotions in one shot. and one day opening the album, reviewing pictures in the minds memories begin to emerge, the same emotions that had been on the day of the shooting. And by the will of a smile appears on the face, and maybe even tears, tears of joy.     ', 'asdf       ', 'asdf       ', 'And you realize that there is something to show our grandchildren proudly saying, \"it is me\" this site is a small part of my work, i want to show you. with each pair, with every man, i have shot, watching their emotions, feelings - i was feeling the same and tried to show these feelings in the photos. That is how i see this world. enjoy watching      ', 'aboutimg1.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Структура таблицы `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `arm_title` text NOT NULL,
  `arm_text` longtext NOT NULL,
  `rus_title` text NOT NULL,
  `rus_text` longtext NOT NULL,
  `eng_title` text NOT NULL,
  `eng_text` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `events`
--

INSERT INTO `events` (`id`, `arm_title`, `arm_text`, `rus_title`, `rus_text`, `eng_title`, `eng_text`, `image`) VALUES
(1, 'events11', ' events11', 'events11', ' events11', 'events11', ' events111', 'q1fbr2uwDS0.jpg'),
(2, 'ev', ' ev', 'ev', ' ev ', 'ev2', ' ev2', 'received_922020411168130.gif'),
(3, 'ev', ' ev', 'ev', ' ev ', 'ev2', ' ev2', 'received_922020411168130.gif');

-- --------------------------------------------------------

--
-- Структура таблицы `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `gallery`
--

INSERT INTO `gallery` (`id`, `image`) VALUES
(1, '111.jpg'),
(2, 'events.jpg'),
(3, 'mt-0231-gallery-img5-bg.jpg'),
(4, 'mt-0231-gallery-img7-bg.jpg'),
(5, 'mt-0231-gallery-img8-bg.jpg'),
(6, 'mt-0231-gallery-parallax1.jpg'),
(7, 'mt-0231-gallery-parallax2.jpg'),
(8, 'newspar.jpg'),
(9, 'slider01.jpg'),
(10, 'slider02.jpg'),
(12, 'mt-0231-gallery-parallax1.jpg'),
(13, 'mt-0231-gallery-parallax2.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `home`
--

DROP TABLE IF EXISTS `home`;
CREATE TABLE IF NOT EXISTS `home` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `home_title_arm` text NOT NULL,
  `home_title_rus` text NOT NULL,
  `home_title_eng` text NOT NULL,
  `home_text_arm` longtext NOT NULL,
  `home_text_rus` longtext NOT NULL,
  `home_text_eng` longtext NOT NULL,
  `home_image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `home`
--

INSERT INTO `home` (`id`, `home_title_arm`, `home_title_rus`, `home_title_eng`, `home_text_arm`, `home_text_rus`, `home_text_eng`, `home_image`) VALUES
(1, '1111', '1111', 'Hello there!!!!', '111                  ', '111                  ', 'Instead of an easel - a tripod. Instead of brushes - a camera that transmits feelings and emotions in one shot. And one day opening the album, reviewing pictures in the minds memories begin to emerge, the same emotions that had been on the day of the shooting. And by the will of a smile appears on the face, and maybe even tears, tears of joy.And you realize that there is something to show our grandchildren proudly saying, \"It is Me\" This site is a small part of my work, I want to show you. With each pair, with every man, I have shot, watching their emotions, feelings - I was feeling the same and tried to show these feelings in the photos. That is how I see this world. Enjoy watchingInstead of an easel - a tripod. Instead of brushes - a camera that transmits feelings and emotions in one shot. And one day opening the album, reviewing pictures in the minds memories begin to emerge, the same emotions that had been on the day of the shooting. And by the will of a smile appears on the face, and maybe even tears, tears of joy.And you realize that there is something to show our grandchildren proudly saying, \"It is Me\" This site is a small part of my work, I want to show you. With each pair, with every man, I have shot, watching their emotions, feelings - I was feeling the same and tried to show these feelings in the photos. That is how I see this world. Enjoy watching...               ', 'img04.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `arm_title` text NOT NULL,
  `arm_text` longtext NOT NULL,
  `rus_title` text NOT NULL,
  `rus_text` longtext NOT NULL,
  `eng_title` text NOT NULL,
  `eng_text` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `arm_title`, `arm_text`, `rus_title`, `rus_text`, `eng_title`, `eng_text`, `image`) VALUES
(33, '', ' ', '', ' ', 'What is Lorem Ipsum?', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'received_922020411168130.gif'),
(34, '', ' ', '', ' ', 'What is Lorem Ipsum?', ' Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'received_922268614476643.gif'),
(35, '', ' ', '', ' ', 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. ', '10492060_679488435434118_7768583538426895076_n.jpg'),
(36, '', ' ', '', ' ', 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. ', '1920629_407640639406916_9194879075014431317_n.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
