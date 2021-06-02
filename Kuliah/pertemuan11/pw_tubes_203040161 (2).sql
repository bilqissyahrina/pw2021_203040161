-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2021 at 03:42 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'iqis', '$2y$10$8qiP/yIvSrovsSw/qF/9YOLdJ/mXKP8Fhwim24ARZNv7EXYC5OFge');

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
(1, '5.png', 'Walldecor', 'Kotak, Hexagonal', 'Kuning, Krem, Coklat', 'Rp 15.000'),
(2, '2.png', 'Cermin', 'Kotak, Persegi Panjang', 'Putih', 'Rp 20.000'),
(3, '3.png', 'Frame', 'Kotak', 'Putih, Hitam, Coklat', 'Rp 10.000'),
(4, '4.png', 'Wall Grid', 'Persegi Panjang', 'Putih, Hitam', 'Rp 10.000'),
(5, '5.png', 'Lukisan', 'Kotak, Persegi Panjang', 'Custom', 'Rp 25.000'),
(6, '6.png', 'Rak Pojok', 'Sperempat Lingkaran', 'Putih, Hitam', 'Rp 38.000'),
(7, '7.png', 'Pot Tanaman', 'Bulat', 'Putih, Hitam, Coklat', 'Rp 17.000'),
(8, '8.png', 'Tanaman Kering', 'Daun', 'Coklat', 'Rp 15.000'),
(9, '9.png', 'Pulpen Karakter', 'Karakter', 'Semua Warna', 'Rp 12.000'),
(10, '10.png', 'Lampu Karakter', 'Awan, Kaktus, Unicorn, Pohon', 'Putih, Kuning, Biru, Abu-abu', 'Rp 23.000'),
(21, '2.png', 'cermin', 'kotak', 'hijau', 'Rp 15.000'),
(22, '3.png', 'lukisan', 'kotak', 'putih', 'Rp 15.000');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `Gambar` varchar(30) NOT NULL,
  `NRP` int(30) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Jurusan` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `Gambar`, `NRP`, `Nama`, `Jurusan`, `Email`) VALUES
(1, '1.png', 2030161, 'Bilqis', 'Teknik Informatika', 'syahrinabilqis@gmal.com'),
(2, '2.png', 2030162, 'Syahrina', 'Teknik Informatika', 'bilqissyahrina2206@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'iqis', '$2y$10$scR6fiHDHb7yonQRAfbv4e/r/RxVLn/7MmFChFVlQAZzha7QDT9I2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dekor`
--
ALTER TABLE `dekor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dekor`
--
ALTER TABLE `dekor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
