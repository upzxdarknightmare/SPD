-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2020 at 09:12 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `oppa`
--

CREATE TABLE `oppa` (
  `id` int(30) NOT NULL,
  `book` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `nk` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `co` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ao` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `oppa`
--

INSERT INTO `oppa` (`id`, `book`, `nk`, `co`, `ao`) VALUES
(1, 'ImageBook', 'One piece', 'https://bci.kinokuniya.com/jsp/images/book-img/97814/97814215/9781421598505.JPG', 'https://www.ceochannels.com/wp-content/uploads/2018/01/Eiichiro_Oda_Infobox.png'),
(2, 'ImageBook', 'Test', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRLJA0w4IRBxexYGLlXYka0oV6O4j-llF29cA&usqp=CAU', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcRLJA0w4IRBxexYGLlXYka0oV6O4j-llF29cA&usqp=CAU'),
(3, 'Anime', 'Ninja', 'https://d126drxy0lew0u.cloudfront.net/catalog/category/20200830_20SS_UT_MANGA_UT_SPORTS_SquareImage_GL.jpg', 'https://d126drxy0lew0u.cloudfront.net/catalog/category/20200816_20FW_UT_MangaUT-DemonSlayer_SquareImage_GL.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
