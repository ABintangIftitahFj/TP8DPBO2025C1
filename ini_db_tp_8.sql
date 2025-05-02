-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2025 at 08:08 PM
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
-- Database: `ini_db_tp_8`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `no_telp` varchar(15) DEFAULT NULL,
  `tanggal_masuk` date DEFAULT NULL,
  `id_suku` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `nama`, `nim`, `no_telp`, `tanggal_masuk`, `id_suku`) VALUES
(1, 'Andi Pratama', '1234567890', '081234567890', '2023-08-15', 1),
(2, 'Siti Nurhaliza', '0987654321', '082345678901', '2024-01-10', 2),
(3, 'Budi Santoso', '1122334455', '083456789012', '2022-09-05', 3);

-- --------------------------------------------------------

--
-- Table structure for table `suku_asal`
--

CREATE TABLE `suku_asal` (
  `id_suku` int(11) NOT NULL,
  `nama_suku` varchar(100) NOT NULL,
  `asal_daerah` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suku_asal`
--

INSERT INTO `suku_asal` (`id_suku`, `nama_suku`, `asal_daerah`) VALUES
(1, 'Suku Minangkabau', 'Sumatera Barat'),
(2, 'Suku Jawa', 'Jawa Tengah'),
(3, 'Suku Batak', 'Sumatera Utara');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nim` (`nim`),
  ADD KEY `id_suku` (`id_suku`);

--
-- Indexes for table `suku_asal`
--
ALTER TABLE `suku_asal`
  ADD PRIMARY KEY (`id_suku`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `suku_asal`
--
ALTER TABLE `suku_asal`
  MODIFY `id_suku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`id_suku`) REFERENCES `suku_asal` (`id_suku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
