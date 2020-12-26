-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2020 at 04:09 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sangkuriang`
--

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id_portofolio` int(11) NOT NULL,
  `tahun` varchar(10) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `client` varchar(100) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id_portofolio`, `tahun`, `judul`, `client`, `harga`, `type`) VALUES
(1, '2018', 'Development of Business Intelligence Application', 'Capital Investment Coordinating Board Republic of Indonesia', '2,300', 'Big Data Intelligenc'),
(2, '2019', 'Development of Integrated Collection System', 'Central Bureau of Statistics Republic of Indonesia', '2,300', 'Big Data Intelligence'),
(3, '2015', 'Development of Measurement System of National Resiliency Index', 'National Resilience Institute Republic of Indonesia', '11,500', 'Big Data Intelligence'),
(4, '2019', 'Development Provisioning Server Tsel', 'PT Ericsson Indonesia', '500', 'Information System'),
(5, '2019', 'Development of Headquarter Application', 'Television of Republic of Indonesia', '1,600', 'Information System'),
(6, '2019', 'Development of SKMPP Application', 'National Land Agency Republic of Indonesia', '460', 'Information System'),
(7, '2019', 'Development of SSO Integrated Job Seeker Application', 'Ministry of Manpower Republic of Indonesia', '460', 'Information System'),
(8, '2019', 'Development of Inaportnet and Simpadu System', 'Ministry of Transportation Republic of Indonesia', '1,600', 'Information System'),
(9, '2018', 'Development of Simyanfar Application', 'Ministry of Health Republic of Indonesia', '1,800', 'Information System'),
(10, '2018', 'Development of Planning and Cooperation Application', 'National Land Agency Republic of Indonesia', '430', 'Information System');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id_portofolio`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id_portofolio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
