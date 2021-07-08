-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 28, 2021 at 06:38 AM
-- Server version: 8.0.24
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cours_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

CREATE TABLE `produits` (
  `id_produit` int NOT NULL,
  `nom` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `prix` decimal(10,2) NOT NULL DEFAULT '2.00',
  `deleted_at` datetime DEFAULT NULL,
  `type` varchar(5) COLLATE utf8mb4_general_ci NOT NULL,
  `etat` varchar(12) COLLATE utf8mb4_general_ci NOT NULL,
  `categorie` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`id_produit`, `nom`, `description`, `prix`, `deleted_at`, `type`, `etat`, `categorie`) VALUES
(1, 'Ma tarte au citron', 'Très bon produit', '2.50', '2021-02-17 09:36:33', 'froid', 'disponible', 'fruit'),
(2, 'Tarte citron 3', '', '2999.00', NULL, 'chaud', 'indisponible', ''),
(3, 'Ma tarte à la fraise', 'Une bonne tarte', '3.65', NULL, 'froid', 'indisponible', ''),
(4, 'Ma tarte aux pommes', 'Encore un produit pour l\'armateur', '3.65', NULL, 'froid', 'disponible', 'légume'),
(5, 'Ma tarte aux framboises', 'Un produit savoureux', '5.60', NULL, '', '', ''),
(6, 'test', 'test', '0.03', NULL, '', '', ''),
(7, 'Chausson aux pommes', 'En promo', '2999.00', NULL, '', '', ''),
(8, 'test', 'TGRGRG', '34.00', NULL, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id_produit`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produits`
--
ALTER TABLE `produits`
  MODIFY `id_produit` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
