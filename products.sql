-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 31 jan. 2023 à 10:48
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mini-market`
--

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prix` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `image`, `nom`, `prix`) VALUES
(1, 'https://res.cloudinary.com/dcphm6bor/image/upload/w_375/v1587305610/product/989c823066e4a5f654d94b4788ec26eb.jpg', 'Pain de campagne', '11,90 DHs'),
(2, 'https://res.cloudinary.com/dcphm6bor/image/upload/w_375/v1618238415/product/fed0961f8e58817339c28e62e2b37cea.jpg', 'Mini galettes', '6,95 DHs'),
(3, 'https://res.cloudinary.com/dcphm6bor/image/upload/w_375/v1583089597/marjane_assets/april_prod/217324_1', 'Pain de mie', '17,95 DHs'),
(4, 'https://res.cloudinary.com/dcphm6bor/image/upload/w_375/v1618239118/product/c31ecb96a7503e16aa4f628e891e9a4c.jpg', 'Pain sandwich beldi', '7,70 DHs'),
(5, 'http://127.0.0.1:5500/images/produitsLaitiersItem1.jpg', 'Lait frais pasteurisé', '4,00 DHs'),
(6, 'http://127.0.0.1:5500/images/produitsLaitiersItem2.jpg', 'Fromage à tartiner', '11,95 DHs'),
(7, 'http://127.0.0.1:5500/images/produitsLaitiersItem3.jpeg', 'Yaourt brassé aux fruits', '11,95 DHs'),
(8, 'http://127.0.0.1:5500/images/produitsLaitiersItem4.jpeg', 'Beurre demi-sel', '44,95 DHs'),
(9, 'http://127.0.0.1:5500/images/charcuterieItem1.jpg', 'Luncheon de poulet', '23,95 DHs'),
(10, 'http://127.0.0.1:5500/images/charcuterieItem2.jpeg', 'Luncheon de dinde', '18,20 DHs'),
(11, 'http://127.0.0.1:5500/images/charcuterieItem3.jpeg', 'Hot Dog cuit et fumé', '20,90 DHs'),
(12, 'http://127.0.0.1:5500/images/charcuterieItem4.jpg', 'Cuisse de dinde au poivre', '11,95 DHs'),
(13, 'http://127.0.0.1:5500/images/epicerieItem1.jpeg', 'Farine finot de blé dur', '99,50 DHs'),
(14, 'http://127.0.0.1:5500/images/epicerieItem2.jpeg', 'Huile de friture', '143,90 DHs'),
(15, 'http://127.0.0.1:5500/images/epicerieItem3.jpeg', 'Champignons coupés', '20,50 DHs'),
(16, 'http://127.0.0.1:5500/images/epicerieItem4.jpeg', 'Ketchup', '13,50 DHs'),
(17, 'http://127.0.0.1:5500/images/boissonsItem1.jpg', 'Eau minérale', '2,80 DHs'),
(18, 'http://127.0.0.1:5500/images/boissonsItem2.jpg', 'Nectar d\'orange', '8,90 DHs'),
(19, 'http://127.0.0.1:5500/images/boissonsItem3.jpeg', 'Coca-Cola canette', '6,50 DHs'),
(20, 'http://127.0.0.1:5500/images/boissonsItem4.jpeg', 'Ice Tea pêche', '7,95 DHs'),
(21, 'http://127.0.0.1:5500/images/patisserieItem1.jpg', 'Forêt noire', '79,95 DHs'),
(22, 'http://127.0.0.1:5500/images/patisserieItem2.jpg', 'Tartelettes variées', '38,95 DHs'),
(23, 'http://127.0.0.1:5500/images/patisserieItem3.jpg', 'Mini Cakes', '25,95 DHs'),
(24, 'http://127.0.0.1:5500/images/patisserieItem4.jpg', 'Gâteaux sablés', '22,95 DHs');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
