-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2023 at 03:54 PM
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
-- Database: `dbbukutamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `ttamu`
--

CREATE TABLE `ttamu` (
  `id` int(3) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nope` varchar(20) NOT NULL,
  `komentar` varchar(285) NOT NULL,
  `pengguna` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `pp` varchar(285) NOT NULL DEFAULT 'default-img.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ttamu`
--

INSERT INTO `ttamu` (`id`, `tanggal`, `nama`, `email`, `alamat`, `nope`, `komentar`, `pengguna`, `password`, `status`, `pp`) VALUES
(67, '2023-01-26', 'M Anas Baihaqi Yuliadi', 'nhazytb1@gmail.com', 'Jl Dr Cipto Mangunkusumo 4 B RT 003/013, Dki', '085233749280', 'Mantap', 'nhazlipse', 'nhazlipse', 'non-aktif', 'logo-nas.png'),
(70, '2023-01-26', 'Fara Carmila', 'Faracarmila@gmail.com', 'Jl Dr Cipto Mangunkusumo 4 B RT 003/013, Dki', '213123231', '“Tindakan menyalahkan hanya akan membuang waktu. Sebesar apapun kesalahan yang kamu timpakan ke orang lain, dan sebesar apapun kamu menyalahkannya, hal tersebut tidak akan mengubahmu” - Wayne Dyer', 'Fara', 'Fara', 'aktif', '20335be5-a8d0-4ab7-9264-93bebfe9f09d__store_cover__2022__12__15__04__32__48 copy.png'),
(71, '2023-01-26', 'Rodeo Danu A', 'Rodeodanu@gmail.com', 'Jl Dr Cipto Mangunkusumo 4 B RT 003/013, Dki', '0822354125123', '“Ambillah risiko yang lebih besar dari apa yang dipikirkan orang lain aman. Berilah perhatian lebih dari apa yang orang lain pikir bijak. Bermimpilah lebih dari apa yang orang lain pikir masuk akal” - Claude T. Bissell', 'Rodeo', 'Rodeo', 'non-aktif', 'download (1).jfif');

-- --------------------------------------------------------

--
-- Table structure for table `tuser`
--

CREATE TABLE `tuser` (
  `id_user` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama_pengguna` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tuser`
--

INSERT INTO `tuser` (`id_user`, `username`, `password`, `nama_pengguna`, `status`) VALUES
(1, 'admin', '4acb4bc224acbbe3c2bfdcaa39a4324e', 'Administrator', 'Aktif'),
(3, 'administrator', '200ceb26807d6bf99fd6f4f0d1ca54d4', 'Administrator', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ttamu`
--
ALTER TABLE `ttamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ttamu`
--
ALTER TABLE `ttamu`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `tuser`
--
ALTER TABLE `tuser`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
