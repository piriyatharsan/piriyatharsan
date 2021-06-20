-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 03:45 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `carregister`
--

CREATE TABLE `carregister` (
  `stdid` int(11) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `condition` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carregister`
--

INSERT INTO `carregister` (`stdid`, `brand`, `model`, `condition`, `price`, `description`, `image`) VALUES
(1, 'gg', 'efbvfbffbs', 'fvffdbbffffffffffffffff', 'fbgggfsefg', 'vfcfvfsfd', 0x3f504e470d0a1a0a0000000d494844520000023f000002580806000001595e133f000000097048597300000b1300000b1301003f3f1800),
(2, 'gg', 'efbvfbffbs', 'fvffdbbffffffffffffffff', 'fbgggfsefg', 'vfcfvfsfd', 0x3f504e470d0a1a0a0000000d494844520000023f000002580806000001595e133f000000097048597300000b1300000b1301003f3f1800);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `stdid` int(6) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `city` varchar(25) NOT NULL,
  `nic` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`stdid`, `firstname`, `lastname`, `city`, `nic`, `email`, `password`) VALUES
(1, 'c', 'c', '', '', '', ''),
(2, 'c', 'c', '', '', '', ''),
(3, 'DCO', 'KKK', '', '', '', ''),
(4, 'DCO', 'KKK', '', '', '', ''),
(5, 'rakuwarn', 'piriyatharsan', '', '', '', ''),
(8, 'rakuwarn', 'piriyatharsan', '', '', '', ''),
(9, 'a', 'b', '', '', '', ''),
(20, 'rakuwarn', 'piriyatharsan', '', '', '', ''),
(21, '', '', '', '', '', ''),
(22, 'cvpj', 'zcvm ', '', '', '', ''),
(23, '', '', '', '', '', ''),
(24, 'nk', 'ev', '', '', '', ''),
(25, 'vf', 'fbf', '', '', '', ''),
(26, 'rakuwarn', 'piriyatharsan', '', '', '', ''),
(27, 'rakuwarn', 'piriyatharsan', '', '', '', ''),
(28, 'rakuwarn', 'piriyatharsan', '', '', 'xeboha2391@geekale.com', '123'),
(29, 'rakuwarn', 'piriyatharsan', '', '', 'crazytharsh@gmail.com', 'zvc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carregister`
--
ALTER TABLE `carregister`
  ADD PRIMARY KEY (`stdid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`stdid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carregister`
--
ALTER TABLE `carregister`
  MODIFY `stdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `stdid` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
