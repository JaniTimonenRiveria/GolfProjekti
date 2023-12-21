-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21.12.2023 klo 17:34
-- Palvelimen versio: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `golfdb2`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `live`
--

CREATE TABLE `live` (
  `id` int(10) NOT NULL,
  `username` varchar(32) NOT NULL,
  `hcp` decimal(3,1) NOT NULL,
  `hole` varchar(2) NOT NULL,
  `swings` int(20) NOT NULL,
  `gamemode` varchar(32) NOT NULL,
  `tee` varchar(32) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `team` varchar(10) NOT NULL,
  `points` int(2) NOT NULL,
  `par` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Vedos taulusta `live`
--

INSERT INTO `live` (`id`, `username`, `hcp`, `hole`, `swings`, `gamemode`, `tee`, `gender`, `date`, `team`, `points`, `par`) VALUES
(107, 'Mikael Saari', 0.0, '5', 5, 'Tuplabogey', 'Punainen', '', '2023-12-20', '1', 50, -50),
(108, 'Mikael Saari', 0.0, '5', 5, 'Lyöntipeli', 'Punainen', '', '2023-12-20', '1', 50, -50),
(109, 'Mikael Saari', 0.0, '5', 5, 'Reikäpeli', 'Punainen', '', '2023-12-20', '1', 50, -50),
(110, 'Mikael Saari', 0.0, '5', 5, 'Scratch', 'Punainen', '', '2023-12-20', '1', 50, -50),
(111, 'Venla Nieminen', 0.0, '8', 5, 'Tuplabogey', 'Valkoinen', '', '2023-12-20', '2', 60, -40),
(112, 'Venla Nieminen', 0.0, '8', 5, 'Lyöntipeli', 'Valkoinen', '', '2023-12-20', '2', 60, -40),
(113, 'Venla Nieminen', 0.0, '8', 5, 'Reikäpeli', 'Valkoinen', '', '2023-12-20', '2', 60, -40),
(114, 'Venla Nieminen', 0.0, '8', 5, 'Scratch', 'Valkoinen', '', '2023-12-20', '2', 60, -40),
(115, 'Veikko Armas', 0.0, 'F', 12, 'Tuplabogey', 'Keltainen', '', '2023-12-20', '3', 75, -10),
(116, 'Veikko Armas', 0.0, 'F', 12, 'Lyöntipeli', 'Keltainen', '', '2023-12-20', '3', 75, -10),
(117, 'Veikko Armas', 0.0, 'F', 12, 'Reikäpeli', 'Keltainen', '', '2023-12-20', '3', 75, -10),
(118, 'Veikko Armas', 0.0, 'F', 12, 'Scratch', 'Keltainen', '', '2023-12-20', '3', 75, -10),
(119, 'Sofia Koskinen', 0.0, 'F', 12, 'Tuplabogey', 'Punainen', '', '2023-12-20', '4', 45, -20),
(120, 'Sofia Koskinen', 0.0, 'F', 12, 'Lyöntipeli', 'Punainen', '', '2023-12-20', '4', 45, -20),
(121, 'Sofia Koskinen', 0.0, 'F', 12, 'Reikäpeli', 'Punainen', '', '2023-12-20', '4', 45, -20),
(122, 'Sofia Koskinen', 0.0, 'F', 12, 'Scratch', 'Punainen', '', '2023-12-20', '4', 45, -20),
(123, 'Aukusti Savolainen', 0.0, '8', 7, 'Tuplabogey', 'Keltainen', '', '2023-12-20', '5', 55, -20),
(124, 'Aukusti Savolainen', 0.0, '8', 7, 'Lyöntipeli', 'Keltainen', '', '2023-12-20', '5', 55, -20),
(125, 'Aukusti Savolainen', 0.0, '8', 7, 'Reikäpeli', 'Keltainen', '', '2023-12-20', '5', 55, -20),
(126, 'Aukusti Savolainen', 0.0, '8', 7, 'Scratch', 'Keltainen', '', '2023-12-20', '5', 55, -20);

-- --------------------------------------------------------

--
-- Rakenne taululle `users`
--

CREATE TABLE `users` (
  `userid` int(6) NOT NULL,
  `username` varchar(32) NOT NULL,
  `usertype` varchar(5) NOT NULL,
  `userpw` varchar(32) NOT NULL,
  `gender` varchar(1) NOT NULL,
  `hcp` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Vedos taulusta `users`
--

INSERT INTO `users` (`userid`, `username`, `usertype`, `userpw`, `gender`, `hcp`) VALUES
(1, 'admin', 'admin', '', '', 0),
(2, 'user', 'user', '', '', 0),
(3, 'Mikael Saari', 'user', '', 'M', 0),
(4, 'Venla Nieminen', 'user', '', 'N', 0),
(5, 'Veikko Armas', 'user', '', 'M', 0),
(6, 'Sofia Koskinen', 'user', '', 'N', 0),
(7, 'Aukusti Savolainen', 'user', '', 'M', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `live`
--
ALTER TABLE `live`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `live`
--
ALTER TABLE `live`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
