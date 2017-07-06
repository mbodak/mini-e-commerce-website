-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 18, 2017 at 10:29 AM
-- Server version: 5.6.36
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cid` int(11) NOT NULL,
  `type` int(1) NOT NULL,
  `date` int(20) NOT NULL,
  `tovar_id` int(5) NOT NULL,
  `action` int(1) NOT NULL,
  `user` varchar(30) NOT NULL,
  `count` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tovar`
--

CREATE TABLE `tovar` (
  `tid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` int(20) NOT NULL,
  `params` text NOT NULL,
  `action` int(1) NOT NULL DEFAULT '1',
  `type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tovar`
--

INSERT INTO `tovar` (`tid`, `name`, `date`, `params`, `action`, `type`) VALUES
(1, 'Lili', 1497717749, '{\"name\":\"Lili\",\"age\":25,\"skills\":\"Java\",\"level\":4,\"forces\":1,\"weight\":52,\"img\":\"img/9.jpg\",\"price\":3000,\"status\":\"middle\"}', 1, 1),
(2, 'Viki', 1497717749, '{\"name\":\"Viki\",\"age\":36,\"skills\":\"C/C++\",\"level\":6,\"forces\":1,\"weight\":60,\"img\":\"img/1.jpg\",\"price\":2000,\"status\":\"senior\"}', 1, 1),
(3, 'Nelli', 1497717749, '{\"name\":\"Nelli\",\"age\":25,\"skills\":\"HTML, CSS, JS\",\"level\":3,\"forces\":1,\"weight\":51,\"img\":\"img/3.jpg\",\"price\":2000,\"status\":\"junior\"}', 1, 1),
(4, 'Miranda', 1497717749, '{\"name\":\"Miranda\",\"age\":27,\"skills\":\"JS, NODE.JS\",\"level\":5,\"forces\":1,\"weight\":53,\"img\":\"img/8.jpg\",\"price\":2800,\"status\":\"middle\"}', 1, 1),
(5, 'Kelli', 1497717749, '{\"name\":\"Kelli\",\"age\":28,\"skills\":\"C#, UNITY 3D\",\"level\":4,\"forces\":1,\"weight\":55,\"img\":\"img/4.jpg\",\"price\":3500,\"status\":\"senior\"}', 1, 1),
(6, 'Gita', 1497717749, '{\"name\":\"Gita\",\"age\":32,\"skills\":\"Doing All\",\"level\":10,\"forces\":1,\"weight\":73,\"img\":\"img/111.jpg\",\"price\":4000,\"status\":\"senior+\"}', 1, 1),
(7, 'Automat AK-47', 1497717749, '{\"name\":\"AK-47\",\"caliber\":\"5.45\",\"length\":120,\"fire\":\"8000\",\"weight\":1.8,\"img\":\"img/1.png\",\"price\":520}', 1, 2),
(8, 'Gun SMG-PK', 1497717749, '{\"name\":\"Gun SMG-PK\",\"caliber\":\"9 x 19 mm Para\",\"length\":115,\"fire\":\"900\",\"weight\":2.0,\"img\":\"img/20.jpg\",\"price\":700}', 1, 2),
(9, 'G3A3 & G3P4', 1497717749, '{\"name\":\"G3A3 & G3P4\",\"caliber\":\"7.62mm x 51 NATO\",\"length\":450,\"fire\":\"500-600\",\"weight\":4.70,\"img\":\"img/22.jpg\",\"price\":1500}', 1, 2),
(10, 'Gun MG3 (MG1A3)', 1497717749, '{\"name\":\"Gun MG3 (MG1A3)\",\"caliber\":\"7.62 mm x 51 NATO\",\"length\":565,\"fire\":\"Approx 1150 \",\"weight\":11.50,\"img\":\"img/21.jpg\",\"price\":3000}', 1, 2),
(11, 'Extazy', 1497717749, '{\"name\":\"Ecstasy\",\"purity\":84,\"time\":24,\"weight\":150,\"img\":\"img/31.jpg\",\"price\":10}', 1, 3),
(12, 'Cannabis', 1497717749, '{\"name\":\"Cannabis\",\"purity\":99,\"time\":5,\"weight\":100,\"img\":\"img/12.jpg\",\"price\":5}', 1, 3),
(13, 'Amphetamine', 1497717749, '{\"name\":\"Amphetamine\",\"purity\":92,\"time\":10,\"weight\":50,\"img\":\"img/32.jpg\",\"price\":15}', 1, 3),
(14, 'Heroin', 1497717749, '{\"name\":\"Heroin\",\"purity\":90,\"time\":\"all\",\"weight\":\"20\",\"img\":\"img/34.jpg\",\"price\":150}', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(6) UNSIGNED NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `admin` int(1) DEFAULT '0',
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `login`, `password`, `admin`, `reg_date`) VALUES
(5, 'admin', 'c7ad44cbad762a5da0a452f9e854fdc1e0e7a52a38015f23f3eab1d80b931dd472634dfac71cd34ebc35d16ab7fb8a90c81f975113d6c7538dc69dd8de9077ec', 1, '2017-06-18 17:29:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tovar`
--
ALTER TABLE `tovar`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `tovar`
--
ALTER TABLE `tovar`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
