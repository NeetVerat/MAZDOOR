-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2022 at 09:29 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mazdoor`
--

-- --------------------------------------------------------

--
-- Table structure for table `logindetails`
--

CREATE TABLE `logindetails` (
  `id` int(11) NOT NULL,
  `clientemail` varchar(255) NOT NULL,
  `clientusername` varchar(255) NOT NULL,
  `clientpassword` varchar(255) NOT NULL,
  `clientmobilenum` int(10) NOT NULL,
  `clientaadharnum` int(10) NOT NULL,
  `clientpannum` varchar(10) NOT NULL,
  `clientadrsline1` varchar(65) NOT NULL,
  `clientadrsline2` varchar(65) NOT NULL,
  `clientcity` text NOT NULL,
  `clientsstate` text NOT NULL,
  `clientpincode` int(6) NOT NULL,
  `clientaltno` int(10) DEFAULT NULL,
  `caadharfront` varchar(15) NOT NULL,
  `caadharback` varchar(15) NOT NULL,
  `cpancardfront` varchar(15) NOT NULL,
  `cpancardback` varchar(15) NOT NULL,
  `clientadrsline3` varchar(65) DEFAULT NULL,
  `clientfirst` varchar(65) NOT NULL,
  `clientlast` varchar(65) NOT NULL,
  `clientmiddle` varchar(65) NOT NULL,
  `clientbday` date NOT NULL,
  `clientaddfront` varchar(65) NOT NULL,
  `clientaddback` varchar(65) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logindetails`
--

INSERT INTO `logindetails` (`id`, `clientemail`, `clientusername`, `clientpassword`, `clientmobilenum`, `clientaadharnum`, `clientpannum`, `clientadrsline1`, `clientadrsline2`, `clientcity`, `clientsstate`, `clientpincode`, `clientaltno`, `caadharfront`, `caadharback`, `cpancardfront`, `cpancardback`, `clientadrsline3`, `clientfirst`, `clientlast`, `clientmiddle`, `clientbday`, `clientaddfront`, `clientaddback`) VALUES
(1, 'veratnatie@gmail.com', 'neet', '202cb962ac59075b964b07152d234b70', 2147483647, 2147483647, '1234568asd', 'bldg no 24, regency sarwam, titwala, east', 'uoahsdlkjffheowh', 'titwala', 'Maharashtra', 421605, 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ''),
(2, 'veratnatie1@gmail.com', 'neet', '827ccb0eea8a706c4c34a16891f84e7b', 2147483647, 2134243241, '324ewrq123', 'bldg no 24, regency sarwam, titwala, east', 'uoahsdlkjffheowh', 'titwala', 'Maharashtra', 421605, 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ''),
(3, 'QWERTY@GMAIL.COM', 'QWERTY', '81dc9bdb52d04dc20036dbd8313ed055', 2147483647, 1343243241, 'DFDSAF123', 'bldg no 24, regency sarwam, titwala, east', 'uoahsdlkjffheowh', 'titwala', 'Maharashtra', 421605, 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ''),
(4, 'a@h.i', 'a', '123', 4, 4, '4', '4a', 'a', 'a', 'a', 154879, 4, 'upload check.jp', 'upload check.jp', '2021-08-11', 'upload check.jp', 'a', 'a', 'a', 'a', '0000-00-00', 'upload check.jpg', 'upload check.jpg'),
(5, 'ad@m.b', 'as', '202cb962ac59075b964b07152d234b70', 3, 3, '3', '3', '3', '3', '3', 7, 3, '', '', '2021-08-11', '', '3', 'a', 'a', 'a', '0000-00-00', '', ''),
(6, 'sdfkjb@gsubdfn.com', 'adminboi', '550a141f12de6341fba65b0ad0433500', 0, 0, '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ''),
(7, '', '', '202cb962ac59075b964b07152d234b70', 0, 0, '', '', '', '', '', 0, 0, '', '', '', '', '', '', '', '', '0000-00-00', '', ''),
(8, 'udfgin@g.hoi', 'sfgsdhfb', '698d51a19d8a121ce581499d7b701668', 0, 0, '', '', '', '', '', 0, 0, '', '', '2021-02-11', '', '', '', '', '', '0000-00-00', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `token` varchar(255) NOT NULL,
  `projectname` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `bigdescription` varchar(255) NOT NULL,
  `frommoney` int(11) NOT NULL,
  `tomoney` int(11) NOT NULL,
  `cardimage` varchar(255) NOT NULL,
  `descimg1` varchar(255) NOT NULL,
  `descimg2` varchar(255) NOT NULL,
  `descimg3` varchar(255) NOT NULL,
  `descimg4` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`token`, `projectname`, `description`, `bigdescription`, `frommoney`, `tomoney`, `cardimage`, `descimg1`, `descimg2`, `descimg3`, `descimg4`, `id`) VALUES
('GCvCGS2TGAVfADSn', 'q', 'q', 'q', 1, 2, 'upload check.jpg', 'uploadcheck.jpg', 'upload check.jpg', 'upload check.jpg', 'upload check.jpg', 1),
('v17q9siyrUQZ1TKP', 'charms height', 'sadfasd', 'ewrwefds', 435, 123435, 'ben-allan-BIeC4YK2MTA-unsplash.jpg', 'billy-freeman-V38rMuljw2Y-unsplash.jpg', 'brett-jordan-nz-cBSChvUw-unsplash.jpg', 'clay-leconey-J9AgM47fVDU-unsplash.jpg', 'l-steward-masweneng-KnB--1wimeA-unsplash.jpg', 2),
('v8Tg9iliUyA90DK3', 'QWERTY', 'ASDFASF', 'A DSFVVVVVVVVVVVVVVVEWQ DASSSSSSSSSSSSSS AWEEEEEEEEEEEEEEEEEEE', 1234132, 4352345, 'ben-allan-BIeC4YK2MTA-unsplash.jpg', 'billy-freeman-V38rMuljw2Y-unsplash.jpg', 'clay-leconey-J9AgM47fVDU-unsplash.jpg', 'mark-potterton-sNVkn3507Oo-unsplash.jpg', 'scott-blake-x-ghf9LjrVg-unsplash.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'piyush', 'veratnatie@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(2, 'piyush', 'piyush@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'jay', 'jay@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 'jayp', 'jay@gmail.comp', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `workerlogin`
--

CREATE TABLE `workerlogin` (
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `bdate` date NOT NULL,
  `add1` varchar(255) NOT NULL,
  `add2` varchar(255) NOT NULL,
  `add3` varchar(255) DEFAULT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `phoneno` int(12) NOT NULL,
  `altno` int(12) DEFAULT NULL,
  `aadharcard` int(11) NOT NULL,
  `aadharfront` varchar(255) NOT NULL,
  `aadharback` varchar(255) NOT NULL,
  `workerpanno` varchar(10) NOT NULL,
  `panfront` varchar(255) NOT NULL,
  `panback` varchar(255) NOT NULL,
  `addfront` varchar(255) NOT NULL,
  `addback` varchar(255) NOT NULL,
  `id` int(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `pincode` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `workerlogin`
--

INSERT INTO `workerlogin` (`email`, `username`, `password`, `bdate`, `add1`, `add2`, `add3`, `city`, `state`, `phoneno`, `altno`, `aadharcard`, `aadharfront`, `aadharback`, `workerpanno`, `panfront`, `panback`, `addfront`, `addback`, `id`, `firstname`, `lastname`, `middlename`, `pincode`) VALUES
('a@a.in', 'as', '81dc9bdb52d04dc20036dbd8313ed055', '2022-01-04', 'a', 'a', 'a', '', 'a', 956230147, 956230147, 956230147, 'upload check.jpg', 'upload check.jpg', '956230147', 'upload check.jpg', 'upload check.jpg', 'upload check.jpg', 'upload check.jpg', 1, 'a', 'a', 'a', 956874),
('aaaa@a.i', 'a', '202cb962ac59075b964b07152d234b70', '2022-01-06', '3', '3', '3', '', '3', 3, 3, 3, 'upload check.jpg', 'upload check.jpg', '3', 'upload check.jpg', 'upload check.jpg', 'upload check.jpg', 'upload check.jpg', 2, 'a', 'a', 'a', 3),
('q@q.i', 'q', '81dc9bdb52d04dc20036dbd8313ed055', '0000-00-00', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', 3, '', '', '', 0),
('a@u.i', 'a', '202cb962ac59075b964b07152d234b70', '0000-00-00', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', 4, '', '', '', 0),
('asrsgs@k.i', 'rfseftsf', '698d51a19d8a121ce581499d7b701668', '2022-05-12', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', 5, '', '', '', 0),
('fdsfsdf@gisjb.ub', 'fsdf', '698d51a19d8a121ce581499d7b701668', '2021-08-11', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', 6, '', '', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logindetails`
--
ALTER TABLE `logindetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`token`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workerlogin`
--
ALTER TABLE `workerlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logindetails`
--
ALTER TABLE `logindetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `workerlogin`
--
ALTER TABLE `workerlogin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
