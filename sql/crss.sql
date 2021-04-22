-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2021 at 03:20 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(11) NOT NULL,
  `applicationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(200) NOT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------


-- --------------------------------------------------------



-- --------------------------------------------------------

--
-- Table structure for table `trip`
--

CREATE TABLE `trip` (
  `id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `tripDate` varchar(200) NOT NULL,
  `location` varchar(180) NOT NULL,
  `numVolunteers` varchar(180) NOT NULL,
  `minDuration` varchar(255) NOT NULL,
  `requirements` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `trip` (`id`, `description`, `tripDate`, `location`, `numVolunteers`, `minDuration`, `requirements`) VALUES
(1, 'Forest fire', '11-02-2021', 'Brazil', '4',  '3 weeks', 'Experience with forest fire'),
(2, 'Flood', '27-02-2021', 'Myanmar', '5',  '1 month', 'Experience with floods');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `Fullname` varchar(150) NOT NULL,
  `username` varchar(200) NOT NULL,
  `Password` varchar(180) NOT NULL,
  `Phone` varchar(180) NOT NULL,
  `Status` int(1) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `doctype` varchar(150) DEFAULT NULL,
  `docDate` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Fullname`, `username`, `Password`, `Phone`, `Status`, `RegDate`, `doctype`, `docDate`) VALUES
(1, 'Manager', 'manager', 'e1a7c4358706c6202e95d0356b9d7672', '',  3, '2020-11-04 08:59:56', '', ''),
(2, 'Admin', 'admin', 'e1a7c4358706c6202e95d0356b9d7672', '',  1, '2020-11-04 09:20:00', '', ''),
(3, 'Sam H.', 'samh', 'e1a7c4358706c6202e95d0356b9d7672', '', 2, '2020-11-04 09:30:56', '', ''),
(4, 'Alex Dote', 'alexd', 'e1a7c4358706c6202e95d0356b9d7672', '', 2, '2020-11-04 09:47:15', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);



--
-- Indexes for table `trip`
--
ALTER TABLE `trip`
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
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


-- AUTO_INCREMENT for table `trip`
--
ALTER TABLE `trip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
