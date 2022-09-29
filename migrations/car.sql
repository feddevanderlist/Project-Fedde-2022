-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2022 at 03:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project-fedde-2020`
--

-- --------------------------------------------------------


--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `merk_id`, `motor_id`, `kleur`, `gewicht`, `brandstof`, `top_snel_heid`, `bouwjaar`, `automaat`, `aantal_versnellingen`, `aantal_deuren`, `prijs`, `naam`) VALUES
(1, 10, 1, 'grijs', 1500, 'Benzine', 202, '2018-09-01', 0, 6, 5, 40000, 'C-Max'),
(2, 10, 1, 'blauw', 1200, 'benzine', 205, '2018-09-12', 1, 7, 5, 35000, 'Focus'),
(3, 10, 1, 'Zilver', 1000, 'Benzine', 196, '2021-09-01', 1, 7, 3, 30000, 'Fiesta'),
(4, 8, 2, 'Blauw', 1600, 'Benzine', 420, '2017-09-21', 1, 7, 2, 2400000, 'Bugatti Chiron'),
(5, 8, 2, 'Rood', 1550, 'Benzine', 420, '2017-09-21', 1, 7, 2, 2400000, 'Chiron Sport');

--
-- Indexes for dumped tables
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
