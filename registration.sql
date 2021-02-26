-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2020 at 09:33 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phonenumber` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `water_bill` varchar(255) NOT NULL DEFAULT '200',
  `electric_bill` varchar(255) NOT NULL DEFAULT '500',
  `rent_bill` varchar(255) NOT NULL DEFAULT '2000'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `name`, `email`, `address`, `phonenumber`, `gender`, `birthdate`, `water_bill`, `electric_bill`, `rent_bill`) VALUES
(1, 'Atienza, John Howell P.', 'howell@gmail.com', 'Quezon City', '094541215', 'Male', '2020-12-16', '200', '500', '2000'),
(2, 'Castro, Reyven B.', 'reyven@gmail.com', 'Tabangao', '0945148151581', 'Male', '2020-12-03', '200', '500', '2000'),
(3, 'Asiado, John Troy', 'troy@gmail.com', 'Bauan', '09545015168', 'Male', '2020-12-02', '200', '500', '2000'),
(5, 'Villarama, Jhayneil H.', 'jhayneil@gmail.com', 'Batangas City', '09445659649', 'Male', '2020-12-04', '200', '500', '2000'),
(17, 'Malabanan, Allen Iverson', 'allen@gmail.com', 'Batangas City', '0956745646', 'Male', '2020-12-02', '200', '500', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Howell', 'howell@gmail.com', '7515d5843074a84978fc97328a831aca'),
(2, 'reyven', 'reyven@gmail.com', '50eca1bed29002247740352bf1194d4e'),
(3, 'troy', 'troy@gmail.com', 'c58c23e808c8f830ce26f877ab6a6c7d'),
(5, 'Jhayneil', 'jhayneil@gmail.com', '15d59c872732576477928186e485b90a'),
(18, 'allen', 'allen@gmail.com', 'a34c3d45b6018d3fd5560b103c2a00e2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
