-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2021 at 09:01 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040161`
--

-- --------------------------------------------------------

--
-- Table structure for table `dekor`
--

CREATE TABLE `dekor` (
  `id` int(11) NOT NULL,
  `Gambar` varchar(80) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Bentuk` varchar(50) NOT NULL,
  `Warna` varchar(50) NOT NULL,
  `Harga` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dekor`
--

INSERT INTO `dekor` (`id`, `Gambar`, `Nama`, `Bentuk`, `Warna`, `Harga`) VALUES
(1, '1.png', 'Walldecor', 'Kotak, Hexagonal', 'Kuning, Krem, Coklat', 'Rp 15.000'),
(2, '2.png', 'Cermin', 'Kotak, Persegi Panjang', 'Putih', 'Rp 20.000'),
(3, '3.png', 'Frame', 'Kotak', 'Putih, Hitam, Coklat', 'Rp 10.000'),
(4, '4.png', 'Wall Grid', 'Persegi Panjang', 'Putih, Hitam', 'Rp 10.000'),
(5, '5.png', 'Lukisan', 'Kotak, Persegi Panjang', 'Custom', 'Rp 25.000'),
(6, '6.png', 'Rak Pojok', 'Sperempat Lingkaran', 'Putih, Hitam', 'Rp 38.000'),
(7, '7.png', 'Pot Tanaman', 'Bulat', 'Putih, Hitam, Coklat', 'Rp 17.000'),
(8, '8.png', 'Tanaman Kering', 'Daun', 'Coklat', 'Rp 15.000'),
(9, '9.png', 'Pulpen Karakter', 'Karakter', 'Semua Warna', 'Rp 12.000'),
(10, '10.png', 'Lampu Karakter', 'Awan, Kaktus, Unicorn, Pohon', 'Putih, Kuning, Biru, Abu-abu', 'Rp 23.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dekor`
--
ALTER TABLE `dekor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dekor`
--
ALTER TABLE `dekor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
