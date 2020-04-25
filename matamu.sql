-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 24, 2020 at 06:29 PM
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
-- Table structure for table `blindTest`
--

CREATE TABLE `blindTest` (
  `id` int(11) NOT NULL,
  `filePath` varchar(50) NOT NULL,
  `answer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blindTest`
--

INSERT INTO `blindTest` (`id`, `filePath`, `answer`) VALUES
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
(24, 'hafiz', 'jon', '123', 'male', 'testing@gmail.com', '$2y$10$.795NtIWR8b/I7yRQr9zQeWKZl4gsZyuEImnTrxq6VB6m74POahVO', 'bumi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blindTest`
--
ALTER TABLE `blindTest`
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
-- AUTO_INCREMENT for table `blindTest`
--
ALTER TABLE `blindTest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
