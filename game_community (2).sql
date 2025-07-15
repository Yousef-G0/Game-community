-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2024 at 10:47 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game community`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_quantity` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_name`, `product_price`, `product_quantity`, `username`) VALUES
(4, 'PC Ultimate Edition ', 1057, '2', 'me'),
(5, ' Good of War Rangnarok', 70, '1', 'me'),
(6, ' Good of War Rangnarok', 70, '1', 'me'),
(7, ' PS5 White Edition ', 528, '1', 'Test'),
(8, 'xbox 360  ', 528, '1', 'Test'),
(9, ' PC (Personal Computer ) ', 528, '1', 'Test'),
(10, ' PlayStation 5 Black Edition ', 528, '1', 'Test'),
(11, ' xbox series x', 528, '1', 'Test'),
(12, 'PC Ultimate Edition ', 528, '1', 'Test'),
(13, 'HeadSet', 50, '1', 'Test'),
(14, 'Cooling fan', 30, '1', 'Test'),
(15, 'Battery Controller', 20, '1', 'Test'),
(16, ' Controller', 10, '1', 'Test'),
(17, ' Good of War Rangnarok', 70, '1', 'Test'),
(18, ' Spiderman 2', 80, '1', 'Test'),
(19, ' Phantomliberty', 50, '1', 'Test'),
(20, ' Last of Us Remastered<', 100, '1', 'Test'),
(22, ' PS5 White Edition ', 528, '1', 'Yousef'),
(23, ' PS5 White Edition ', 528, '1', 'Yousef'),
(24, 'xbox 360  ', 528, '1', 'Yousef'),
(25, ' Good of War Rangnarok', 70, '1', 'Yousef');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `emailaddress` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `notes` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `lastname`, `emailaddress`, `phone`, `notes`) VALUES
(1, 'yousef', 'feery', 'me@me.com', 55505, 'Ammazing'),
(2, 'yousef', 'feery', 'me@me.com', 55505, 'Amazng \r\n'),
(3, 'yousef', 'feery', 'me@me.com', 55505, 'kveenkn'),
(4, 'Test', 'Test', 'Test@Test.com', 0, 'Its been a pleasure to know this website');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `gameselected` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `username`, `gameselected`) VALUES
(15, 'Yousef', 'Resident Evil 4'),
(16, 'Yousef', 'Dead space'),
(17, 'Yousef', 'Dead space'),
(18, 'Yousef', 'Cyberpunk 2077'),
(19, 'Yousef', 'Dead space'),
(20, 'Yousef', 'Cyberpunk 2077'),
(21, 'Yousef', 'Resident Evil 4'),
(22, 'Test', 'Cyberpunk 2077');

-- --------------------------------------------------------

--
-- Table structure for table `sign`
--

CREATE TABLE `sign` (
  `ID` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sign`
--

INSERT INTO `sign` (`ID`, `Username`, `Email`, `Password`) VALUES
(1, 'Yousef', 'Yousef@mail.com', '123456'),
(2, 'Ahmad', 'Ahmad@mail.com', '789456'),
(4, 'Yousef 2', 'Yousef2@mail.com', '123456'),
(6, 'me', 'me@me.com', '123'),
(7, 'Test', 'Test@Test.com', '123'),
(8, 'mem', 'meme@mail', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sign`
--
ALTER TABLE `sign`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `sign`
--
ALTER TABLE `sign`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
