-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2025 at 08:48 AM
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
-- Database: `sneaker_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `imagini`
--

CREATE TABLE `imagini` (
  `id_imagine` int(11) NOT NULL,
  `id_sneaker` int(11) NOT NULL,
  `nume_imagine` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `imagini`
--

INSERT INTO `imagini` (`id_imagine`, `id_sneaker`, `nume_imagine`) VALUES
(1, 1, 'af1.png'),
(2, 2, 'tracks.png'),
(3, 3, 'Jordan1.png'),
(4, 4, 'sk8.png'),
(5, 5, 'lanvinc.png'),
(6, 6, 'BRB.png'),
(7, 7, 'diorb30.png'),
(8, 8, 'timbs.png'),
(9, 9, 'oof.png'),
(10, 10, 'CLA.png'),
(11, 11, 'ro.png'),
(12, 12, 'mm.png');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `postal_code` varchar(20) NOT NULL,
  `street` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sneakers`
--

CREATE TABLE `sneakers` (
  `id` int(11) NOT NULL,
  `Model` text NOT NULL,
  `Marimi` text NOT NULL,
  `Pret` int(11) NOT NULL,
  `Marca` text NOT NULL,
  `Descriere` text NOT NULL,
  `Site` text NOT NULL,
  `Site_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sneakers`
--

INSERT INTO `sneakers` (`id`, `Model`, `Marimi`, `Pret`, `Marca`, `Descriere`, `Site`, `Site_img`) VALUES
(1, 'Nike Air Force 1', '38, 39, 42, 43, 44 ', 550, 'Nike', 'Unul dintre cele mai iconice modele Nike, Air Force 1 este apreciat pentru designul său clasic și versatilitatea sa. Conceput inițial ca un sneaker de baschet, a devenit un must-have în moda streetwear.', 'https://www.nike.com/ro/men', 'nikes.png'),
(2, 'Balenciaga Track', '41, 43, 44', 3500, 'Balenciaga', 'Un sneaker futurist, robust și extravagant, perfect pentru cei care iubesc moda high-fashion și stilul chunky sneakers.','https://www.balenciaga.com/en-ro', 'balenciaga.png'),
(3, 'Nike Air Jordan 1', '38, 42, 43, 44', 750, 'Nike', 'Primul model din seria Jordan, lansat în 1985. Este considerat unul dintre cele mai influente sneakers din toate timpurile, purtat de Michael Jordan în primul său sezon NBA.', 'https://www.nike.com/ro/men', 'nikes.png'),
(4, 'Louis Vuitton Skate', '37, 42, 43', 1900, 'Louis Vuitton', 'O reinterpretare de lux a sneaker-urilor inspirate din cultura skateboarding-ului, combinând materiale premium cu un design modern și elegant.', 'https://fr.louisvuitton.com/fra-fr/homepage', 'LV.png'),
(5, 'Lanvin Curb', '40, 42, 43', 2000, 'Lanvin', 'Un sneaker masiv, cu influențe din anii ’90, renumit pentru șireturile late și designul statement. O alegere perfectă pentru cei care iubesc stilul extravagant.','https://us.lanvin.com/', 'lanvin.png'),
(6, 'Off-White Be Right Back', '42, 44', 2700, 'Off-White', 'Un sneaker modern, cu elemente de design specifice brandului Off-White, cum ar fi detaliile industriale și inscripțiile vizibile.','https://www.off---white.com/en-ro/', 'Off-White.png'),
(7, 'Dior B30', '41', 2650, 'Dior', 'Un sneaker sport-elegant, care combină estetica luxoasă Dior cu inspirații din pantofii de alergare.', 'https://www.dior.com/en_ro/fashion', 'dior.png'),
(8, 'Timberland 6 Inch Boot', '41, 45', 800, 'Timberland', 'O pereche de boots legendari, inițial creați pentru muncitori, dar deveniți un simbol al stilului urban și al modei hip-hop.', 'https://www.timberland.ca/en-ca', 'timberlands.png'),
(9, 'Off-White Out Of Office', '42, 44, 45', 2900, 'Off-White', 'Un sneaker casual, creat de Virgil Abloh pentru Off-White, combinând estetica anilor ’90 cu detalii moderne.', 'https://www.off---white.com/en-ro/', 'Off-White'),
(10, 'Christian Louboutin Astroloub', '42, 43, 44', 1200, 'Christian Louboutin', 'Un sneaker high-fashion, semnat de celebrul designer Christian Louboutin, cu influențe futuriste și elemente de design premium.', 'https://eu.christianlouboutin.com/ro_en/', 'CL.png'),
(11, 'Rick Owens DRKSHDW', '40, 41, 43, 44, 45', 3000, 'Rick Owens', 'Un sneaker avant-garde, cunoscut pentru silueta sa alungită și stilul neconvențional, specific lui Rick Owens.', 'https://www.rickowens.eu/en/US', 'RickOwens.png'),
(12, 'Maison Mihara Yasuhiro', '39', 4500, 'Maison Mihara', 'Un sneaker conceptual, care combină estetica vintage cu elemente deconstructive, creând un look artistic și unic.', 'https://en.miharayasuhiro.jp/', 'miharayasuhiro.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `imagini`
--
ALTER TABLE `imagini`
  ADD PRIMARY KEY (`id_imagine`),
  ADD KEY `id_sneaker` (`id_sneaker`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `sneakers`
--
ALTER TABLE `sneakers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `imagini`
--
ALTER TABLE `imagini`
  MODIFY `id_imagine` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sneakers`
--
ALTER TABLE `sneakers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `imagini`
--
ALTER TABLE `imagini`
  ADD CONSTRAINT `imagini_ibfk_1` FOREIGN KEY (`id_sneaker`) REFERENCES `sneakers` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `sneakers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
