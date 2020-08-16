-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2020 at 04:35 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_monitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_proyek`
--

CREATE TABLE `detail_proyek` (
  `id_detail` int(11) NOT NULL,
  `id_proyek` int(11) NOT NULL,
  `tanggal_proyek` date NOT NULL,
  `target_proyek` date NOT NULL,
  `budget` varchar(20) NOT NULL,
  `rencana` int(11) NOT NULL,
  `realisasi` int(11) NOT NULL,
  `deviasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_proyek`
--

INSERT INTO `detail_proyek` (`id_detail`, `id_proyek`, `tanggal_proyek`, `target_proyek`, `budget`, `rencana`, `realisasi`, `deviasi`) VALUES
(11, 13, '1970-01-01', '1970-01-01', '1223333000', 10, 40, 30),
(12, 14, '2020-08-06', '2020-08-28', '12300099', 20, 0, 0),
(13, 15, '1970-01-01', '1970-01-01', '1223333000', 19, 70, 56);

-- --------------------------------------------------------

--
-- Table structure for table `dokumentasi`
--

CREATE TABLE `dokumentasi` (
  `id_file` int(11) NOT NULL,
  `id_proyek` int(11) NOT NULL,
  `nama_file` varchar(50) NOT NULL,
  `file_size` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokumentasi`
--

INSERT INTO `dokumentasi` (`id_file`, `id_proyek`, `nama_file`, `file_size`) VALUES
(3, 8, 'eb4ce64a071b7807a259e9444679105f.pdf', ''),
(5, 6, '65ec4a804c8254d8298c04caa3d9a28b.jpg', '150.01'),
(6, 11, '8c0545c85415eb8ef035a153f972e89f.jpg', '150.01'),
(7, 11, '94c9fa5592578a2bf28e32f75fbe114d.pdf', '158.45'),
(8, 13, '276bbe0f0cfab2c7ef12b47716d89121.jpg', '150.01'),
(9, 13, 'f26a494e24b6afc0ce4adf4169af08fb.pdf', '158.45'),
(10, 14, 'cb035bb0145fd8249b180530460a28e0.PNG', '30.49'),
(11, 14, 'be84d17d4e5b0054f0d1f501783f3a56.pdf', '158.45');

-- --------------------------------------------------------

--
-- Table structure for table `kontraktor`
--

CREATE TABLE `kontraktor` (
  `id_kontraktor` int(11) NOT NULL,
  `nama_kontraktor` varchar(128) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `proyek`
--

CREATE TABLE `proyek` (
  `id_proyek` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_proyek` varchar(128) NOT NULL,
  `nomor_proyek` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proyek`
--

INSERT INTO `proyek` (`id_proyek`, `id_user`, `nama_proyek`, `nomor_proyek`) VALUES
(13, 7, 'Pembuatan Jalan', '1'),
(14, 9, 'pembuatan jembatan', '2'),
(15, 7, 'proyek1', '4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(128) NOT NULL,
  `tipe` enum('administrator','satker') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`, `tipe`) VALUES
(7, 'Papua Barat', 'satker1', '$2y$10$7uRqZvrrEOzetMDe0yBf..d5SgBpi9SUf.5RHxVKJIhSbYC8JNFv.', 'satker'),
(8, 'Manokwari Selatan', 'satker2', '$2y$10$ozXBQzH4YzHrmwXkVYj.kewLwlyzXkhpFIl66Dv8WtnQYT377mLfe', 'satker'),
(9, 'Pegunungan Arfak', 'satker3', '$2y$10$Ifjy0Z0SSRhUMAiqgfur0uTTnVuzeNQfEitZgrCue47nU0kRQgYDG', 'satker'),
(10, 'Fak-fak', 'satker4', '$2y$10$3JWMs6637wBQy.ufVrfjquDSTI/ehWEV2kfbDaDCXW5YwCsdcxBwm', 'satker'),
(11, 'Kaimana', 'satker5', '$2y$10$iVz2PToISWe/NMU9LBBgmuiRLV4/PCjaBRdg1deVT7HB3L3tzpqK6', 'satker'),
(12, 'Raja Ampat', 'satker6', '$2y$10$sJanQyNFgbqym5ifVTlTTe6hhM5mqa0RIQXK4gK7S3XteKspmTMPu', 'satker'),
(13, 'Teluk Bintuni', 'satker7', '$2y$10$Wo6gnUtY.axxRSqyqVEr1.GQyY5p2zKYPLJaOZuRhLiDRYNtdHbfy', 'satker'),
(15, 'Teluk Wondama', 'satker8', '$2y$10$6m.nODZaicaANtdzm7NF5eT7fQyyWNtexAxpjJjmmSL//MC10xrM6', 'satker'),
(16, 'APRIS ESPERANZA', 'balai17', '$2y$10$7uRqZvrrEOzetMDe0yBf..d5SgBpi9SUf.5RHxVKJIhSbYC8JNFv.', 'administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_proyek`
--
ALTER TABLE `detail_proyek`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  ADD PRIMARY KEY (`id_file`);

--
-- Indexes for table `kontraktor`
--
ALTER TABLE `kontraktor`
  ADD PRIMARY KEY (`id_kontraktor`);

--
-- Indexes for table `proyek`
--
ALTER TABLE `proyek`
  ADD PRIMARY KEY (`id_proyek`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_proyek`
--
ALTER TABLE `detail_proyek`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `dokumentasi`
--
ALTER TABLE `dokumentasi`
  MODIFY `id_file` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kontraktor`
--
ALTER TABLE `kontraktor`
  MODIFY `id_kontraktor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `proyek`
--
ALTER TABLE `proyek`
  MODIFY `id_proyek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
