-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 12, 2021 at 09:51 AM
-- Server version: 10.5.12-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;



CREATE TABLE `msg` (
  `mid` int(11) NOT NULL,
  `mmail` varchar(255) NOT NULL,
  `mtext` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`mid`, `mmail`, `mtext`) VALUES
(1, 'mahadi@gmail.com', 'betu sobrul a amar tk mari dise'),
(2, 'tarek@gmail.com', 'kjsdssss'),
(3, 'tarek@gmail.com', 'kjsdssss'),
(4, 'tarek@gmail.com', 'sobrul halar hala'),
(5, 'tarek@gmail.com', 'sobrul halar hala'),
(6, 'sobrul@gmail.com', 'hi chutiya '),
(7, 'sobrul@gmail.com', 'hi chutiya '),
(8, 'asifsami2000@gmail.com', 'Hello kubra'),
(9, 'asifsami2000@gmail.com', 'Hello kubra');

-- --------------------------------------------------------

--
-- Table structure for table `tadmin`
--

CREATE TABLE `tadmin` (
  `aid` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `emailadd` varchar(255) NOT NULL,
  `hline` varchar(255) NOT NULL,
  `descr` varchar(5000) NOT NULL,
  `phn` varchar(255) NOT NULL,
  `payinfo` text NOT NULL,
  `roc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tadmin`
--

INSERT INTO `tadmin` (`aid`, `uname`, `pass`, `emailadd`, `hline`, `descr`, `phn`, `payinfo`, `roc`) VALUES
(1, 'taher', 'taher', 'asss@hjska.com', 'Industrial visit of EEE-22th batch 2021', 'Lorem Ipsum is simply dummy Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum hascvcvv ', '01969696', 'kub kub kubraaaaaaaaaaaa kub kub', 'Open');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uname` varchar(255) NOT NULL,
  `sid` varchar(255) NOT NULL,
  `bno` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL,
  `phn` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `pay` varchar(255) NOT NULL,
  `trid` varchar(255) NOT NULL,
  `ieeeid` varchar(255) NOT NULL,
  `cmnt` varchar(1000) NOT NULL,
  `stats` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uname`, `sid`, `bno`, `sem`, `phn`, `mail`, `pay`, `trid`, `ieeeid`, `cmnt`, `stats`) VALUES
('Sobrul Karim', '180103020026', '12th', '12th', '0168010814', 'sobrul@gmail.com', '', 'sdfghjkl', '15', 'tum gariya hu', 'Confirmed'),
('Abu Taher Md Sayed', '180103020030', '12th', '12th', '01880593844', 'tahersayed17@gmail.com', '', '111', '55', 'tumare r kubrare ekloge bandia soraia tik kori laimu\r\n', 'Confirmed'),
('Khadem Mohammad Asif-uz-zaman', '180103020042', '12th', '12th', '01929252671', 'asifsami2000@gmail.com', 'Bkash', '865492', '566', '', 'Confirmed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msg`
--
ALTER TABLE `msg`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `tadmin`
--
ALTER TABLE `tadmin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `msg`
--
ALTER TABLE `msg`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
