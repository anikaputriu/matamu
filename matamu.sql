-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 03, 2020 at 07:01 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `blindTestResults`
--

CREATE TABLE `blindTestResults` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `answers` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blindTestResults`
--

INSERT INTO `blindTestResults` (`id`, `userId`, `answers`) VALUES
(1, 24, '[{\"answer\":\"2\",\"isTrue\":false},{\"answer\":\"3\",\"isTrue\":true}]'),
(2, 24, '[{\"answer\":\"2\",\"isTrue\":false},{\"answer\":\"3\",\"isTrue\":true}]'),
(3, 24, '[{\"answer\":\"2\",\"isTrue\":false},{\"answer\":\"3\",\"isTrue\":true}]'),
(4, 24, '[{\"answer\":\"2\",\"isTrue\":false},{\"answer\":\"3\",\"isTrue\":true}]'),
(5, 24, '[{\"answer\":\"2\",\"isTrue\":false},{\"answer\":\"3\",\"isTrue\":true}]'),
(6, 24, '[{\"answer\":\"2\",\"isTrue\":false},{\"answer\":\"3\",\"isTrue\":true}]'),
(7, 24, '[{\"answer\":\"[\",\"isTrue\":false},{\"answer\":\"[\",\"isTrue\":false},{\"answer\":\"[\",\"isTrue\":false},{\"answer\":\"[\",\"isTrue\":false},{\"answer\":\"[\",\"isTrue\":false},{\"answer\":\"[\",\"isTrue\":false},{\"answer\":\"[\",\"isTrue\":false},{\"answer\":\"[\",\"isTrue\":false},{\"answer\":\"[\",\"isTrue\":false},{\"answer\":\"[\",\"isTrue\":false}]'),
(8, 24, '[{\"answer\":\"[\",\"isTrue\":false},{\"answer\":\"[\",\"isTrue\":false},{\"answer\":\"[\",\"isTrue\":false},{\"answer\":\"[\",\"isTrue\":false},{\"answer\":\"[\",\"isTrue\":false},{\"answer\":\"[\",\"isTrue\":false},{\"answer\":\"[\",\"isTrue\":false},{\"answer\":\"[\",\"isTrue\":false},{\"answer\":\"[\",\"isTrue\":false},{\"answer\":\"[\",\"isTrue\":false}]'),
(9, 24, '[{\"answer\":\"[\",\"isTrue\":false},{\"answer\":\"[\",\"isTrue\":false},{\"answer\":\"[\",\"isTrue\":false},{\"answer\":\"[\",\"isTrue\":false},{\"answer\":\"[\",\"isTrue\":false},{\"answer\":\"[\",\"isTrue\":false},{\"answer\":\"[\",\"isTrue\":false},{\"answer\":\"[\",\"isTrue\":false},{\"answer\":\"[\",\"isTrue\":false},{\"answer\":\"[\",\"isTrue\":false}]'),
(10, 24, '[{\"answer\":\"[\",\"isTrue\":false},{\"answer\":\"[\",\"isTrue\":false},{\"answer\":\"[\",\"isTrue\":false},{\"answer\":\"[\",\"isTrue\":false},{\"answer\":\"[\",\"isTrue\":false},{\"answer\":\"[\",\"isTrue\":false},{\"answer\":\"[\",\"isTrue\":false},{\"answer\":\"[\",\"isTrue\":false},{\"answer\":\"[\",\"isTrue\":false},{\"answer\":\"[\",\"isTrue\":false}]'),
(11, 24, '[{\"answer\":\"234\",\"isTrue\":false},{\"answer\":\"34\",\"isTrue\":false},{\"answer\":\"234\",\"isTrue\":false},{\"answer\":\"34\",\"isTrue\":false},{\"answer\":\"23\",\"isTrue\":false},{\"answer\":\"234\",\"isTrue\":false},{\"answer\":\"23\",\"isTrue\":false},{\"answer\":\"234\",\"isTrue\":false},{\"answer\":\"32\",\"isTrue\":false},{\"answer\":\"34\",\"isTrue\":false}]'),
(12, 24, '[{\"answer\":\"4\",\"isTrue\":true},{\"answer\":\"5\",\"isTrue\":true},{\"answer\":\"6\",\"isTrue\":true},{\"answer\":\"7\",\"isTrue\":true},{\"answer\":\"3\",\"isTrue\":true},{\"answer\":\"9\",\"isTrue\":true},{\"answer\":\"8\",\"isTrue\":true},{\"answer\":\"8\",\"isTrue\":true},{\"answer\":\"8\",\"isTrue\":true},{\"answer\":\"8\",\"isTrue\":true}]'),
(13, 24, '[{\"answer\":\"2\",\"isTrue\":false},{\"answer\":\"3\",\"isTrue\":true},{\"answer\":\"34\",\"isTrue\":false},{\"answer\":\"23\",\"isTrue\":false},{\"answer\":\"34\",\"isTrue\":false},{\"answer\":\"12\",\"isTrue\":false},{\"answer\":\"34\",\"isTrue\":false},{\"answer\":\"34\",\"isTrue\":false},{\"answer\":\"4\",\"isTrue\":false},{\"answer\":\"2\",\"isTrue\":false}]'),
(14, 24, '[{\"answer\":\"\",\"isTrue\":false},{\"answer\":\"23\",\"isTrue\":false},{\"answer\":\"23\",\"isTrue\":false},{\"answer\":\"23\",\"isTrue\":false},{\"answer\":\"23\",\"isTrue\":false},{\"answer\":\"23\",\"isTrue\":false},{\"answer\":\"23\",\"isTrue\":false},{\"answer\":\"3\",\"isTrue\":false},{\"answer\":\"123\",\"isTrue\":false},{\"answer\":\"23\",\"isTrue\":false}]'),
(15, 24, '[{\"answer\":\"2\",\"isTrue\":false},{\"answer\":\"3\",\"isTrue\":false}]'),
(16, 24, '[{\"answer\":\"1\",\"isTrue\":true},{\"answer\":\"5\",\"isTrue\":true}]'),
(17, 24, '[{\"answer\":\"8\",\"isTrue\":true},{\"answer\":\"\",\"isTrue\":false}]'),
(18, 24, '[{\"answer\":\"8\",\"isTrue\":true},{\"answer\":\"22\",\"isTrue\":false},{\"answer\":\"3\",\"isTrue\":true},{\"answer\":\"8\",\"isTrue\":true},{\"answer\":\"6\",\"isTrue\":true},{\"answer\":\"7\",\"isTrue\":true},{\"answer\":\"2\",\"isTrue\":false},{\"answer\":\"4\",\"isTrue\":true},{\"answer\":\"5\",\"isTrue\":true},{\"answer\":\"3\",\"isTrue\":true}]');

-- --------------------------------------------------------

--
-- Table structure for table `blindTests`
--

CREATE TABLE `blindTests` (
  `id` int(11) NOT NULL,
  `filePath` varchar(50) NOT NULL,
  `answer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blindTests`
--

INSERT INTO `blindTests` (`id`, `filePath`, `answer`) VALUES
(1, '1.PNG', 2),
(2, '2.PNG', 9),
(3, '3.PNG', 8),
(4, '4.PNG', 3),
(5, '5.PNG', 7),
(6, '6.PNG', 8),
(7, '7.PNG', 1),
(8, '8.PNG', 5),
(9, '9.PNG', 2),
(10, '10.PNG', 8),
(11, '11.PNG', 3),
(12, '12.PNG', 6),
(13, '13.PNG', 1),
(14, '14.PNG', 4),
(15, '15.PNG', 8);

-- --------------------------------------------------------

--
-- Table structure for table `checkups`
--

CREATE TABLE `checkups` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `dateSubmitted` date NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkups`
--

INSERT INTO `checkups` (`id`, `userId`, `dateSubmitted`, `description`) VALUES
(29, 24, '0000-00-00', '2'),
(30, 24, '0000-00-00', '2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `gender` enum('female','male') NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `phoneNumber`, `gender`, `email`, `password`, `address`) VALUES
(1, 'anika', 'putri', '123', '', 'anika@test.com', '123', 'bumi'),
(2, 'anika', 'putri', '123', '', 'anika@test.com', '123', 'bumi'),
(3, 'anika', 'putri', '123', '', 'anika@test.com', '123', 'bumi'),
(4, 'anika', 'putri', '123', '', 'anika@test.com', '123', 'bumi'),
(5, 'anika', 'putri', '123', 'male', 'anika@test.com', '123', 'bumi'),
(6, 'anika', 'putri', '123', 'female', 'anika@test.com', '123', 'bumi'),
(7, 'anika', 'putri', '123', 'female', 'anika@test.com', '$2y$10$38qUntOVKu2LU19JQ1Cxx.0TVItvrCu3jwF3p828VrbT9.8gPyiqC', 'bumi'),
(8, 'anika', 'putri', '123', 'female', 'anika@test.com', '$2y$10$38qUntOVKu2LU19JQ1Cxx.0TVItvrCu3jwF3p828VrbT9.8gPyiqC', 'bumi'),
(9, 'anika', 'putri', '123', 'female', 'anika@test.com', '$2y$10$3bD/yavMEQ70iQLY9KQtYeUr.oqxn7JzgHCnTXbvzBnX4U9U7Nqs6', 'bumi'),
(10, 'anika', 'putri', '123', 'female', 'anika@test.com', '$2y$10$3bD/yavMEQ70iQLY9KQtYeUr.oqxn7JzgHCnTXbvzBnX4U9U7Nqs6', 'bumi'),
(11, 'anika', 'putri', '123', 'female', 'anika@test.com', '$2y$10$FIL1qECBdfB3Ete1UvRoC.7IwzMKaMW4RH9ODzQ9mCEc49oMd7AsK', 'bumi'),
(12, 'anika', 'putri', '123', 'female', '', '$2y$10$ubTTK5jp4uk5mJlgDu3hFeBXUdJmIQYNkGPKmGj9ldHwbiM7fBJ/S', 'bumi'),
(13, 'anika', 'putri', '123', 'female', '', '$2y$10$QMoLqeQmrm9yoyDv6p46qO89zDu1jvCe5Vqr2rzb4.WzlA0DseMcq', 'bumi'),
(14, 'anika', 'putri', '123', 'female', '', '$2y$10$oTOlbzNQwGeS.Yoo5M2OA.Wje0p8Pl04/QW8RJpvDcq9TNj2hbMe.', 'bumi'),
(15, 'anika', 'putri', '123', 'female', 's', '$2y$10$fbyN1whAH2F1hYXUMpPQ6.CkgrB2Qqv8ydKraUJ5wyLLhi1fzAXAm', 'bumi'),
(16, 'anika', 'putri', '123', 'female', 'tetew', '$2y$10$Wdo6zZQ0XvpZhdDGUfsy3.OEFAbW1Ls20orJicqfTdjhwWw6wpEYy', 'bumi'),
(17, 'hafiz', 'jon', '123', 'female', 'tetew', '$2y$10$PBwiQclj5eI7L9i/NZkBUekfhI6RtTbHhfi2nqNLtTyDpJUeaQcrO', 'bumi'),
(18, 'hafiz', 'jon', '123', 'male', 'tetew', '$2y$10$GCsgKdphjSpYMs2G98Z5feVMQrl46vwtIKVa1LnF9Fkc.CMa1MnYa', 'bumi'),
(19, 'hafiz', 'jon', '123', '', 'tetew', '$2y$10$9l6aQDnb8nD9xSWEQqEhQ.egfclodebLhgep11fdGvhd49HEfdm/q', 'bumi'),
(20, 'hafiz', 'jon', '123', 'male', 'tetew', '$2y$10$v4EKkca8.bpn9aY2UbRMueOqQW.D.L3apevUSirMHu9Pl3g1/RZi2', 'bumi'),
(21, 'hafiz', 'jon', '123', 'male', 'tetew', '$2y$10$sqomBvHK.4mpgXuL5tBNOObACRbnf.bRrhw3zd4zBsaJQJpKVRfza', 'bumi'),
(22, 'hafiz', 'jon', '123', 'male', 'anikaanika@gmail.com', '$2y$10$vkn6H.1kzEeFWzMqfLI7HuCNJTcBDN/3WZ3LdmilPoz0swMtwqmmq', 'bumi'),
(23, 'hafiz', 'jon', '123', 'male', 'anikaanika@gmail.com', '$2y$10$RDg8CY14lAl46/Sg3tsDWuRXLGc9I3jOc7uC9R38urTBJA8O07U2S', 'bumi'),
(24, 'hafiz', 'jon', '123', 'male', 'testing@gmail.com', '$2y$10$.795NtIWR8b/I7yRQr9zQeWKZl4gsZyuEImnTrxq6VB6m74POahVO', 'bumi'),
(25, 'abc', 'abc', '081280742772', 'male', 'testing@gmail.com', '$2y$10$K7aC1Ruja62dS6/N3Cmbn.q9SWWXc446j8lYehFBT5KnU1pqXCd26', 'sdfdf'),
(26, 'hafiz', 'joundy', '081280742772', 'male', 'a@a.com', '$2y$10$VNiu8m/iLPC0bvEX3n8xx.dMQHU15kWLOiKXq8IdGlkNQRlv07gfq', 'testing alamat'),
(27, 'sdf', 'sdf', 'sdf', 'female', 'testing@gmail.com', '$2y$10$jO8up2nhD6C4psLrC662yuD2PidAOSkEgFNdNIKkJOgRu.P87apkG', 'abc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blindTestResults`
--
ALTER TABLE `blindTestResults`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blindTests`
--
ALTER TABLE `blindTests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkups`
--
ALTER TABLE `checkups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blindTestResults`
--
ALTER TABLE `blindTestResults`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `blindTests`
--
ALTER TABLE `blindTests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `checkups`
--
ALTER TABLE `checkups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
