-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2021 at 08:07 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moneytransfer`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `current_balance` bigint(20) NOT NULL,
  `account_number` bigint(20) NOT NULL,
  `ifsc_code` varchar(25) NOT NULL,
  `contact` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `current_balance`, `account_number`, `ifsc_code`, `contact`) VALUES
(1, 'Aazad Prasad', 'aazad@gmail.com', 5000, 256207868607744, 'BKID5325471', 9910866761),
(2, 'Aman Kumar', 'aman@gmail.com', 5000, 584638575679337, 'BKID2337999', 9905931508),
(3, 'Arya Ranjan Prasad', 'arya@gmail.com', 5000, 978273855479028, 'BKID5020762', 9977328828),
(4, 'Gaurav Sonakar', 'gaurav@gmail.com', 5000, 989932547894742, 'BKID6697693', 9900847260),
(5, 'Mukund Prashar', 'mukund@gmail.com', 5000, 436616768688206, 'BKID5778717', 9908820003),
(6, 'Nisha Kumari', 'nisha@gmail.com', 5000, 392848112514608, 'BKID2002577', 9999332908),
(7, 'Pankaj Minz', 'pankaj@gmail.com', 5000, 266116947647802, 'BKID8058995', 9904269819),
(8, 'Priyanka Sharma', 'priyanka@gmail.com', 5000, 474098664886590, 'BKID3446607', 9910519879),
(9, 'Rishika Sinha', 'rishika@gmail.com', 5000, 300872333139234, 'BKID8339980', 9922846334),
(10, 'Ritik Kumar', 'ritik@gmail.com', 5000, 709069792512979, 'BKID2930513', 9920437020),
(11, 'Sonu Raj Singh', 'sonu@gmail.com', 5000, 823930379598750, 'BKID7131522', 9978845285),
(12, 'Vishal Kumar', 'vishal@gmail.com', 5000, 442874610607629, 'BKID5043730', 9934521735);

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `transaction_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- Indexes for table `transfers`
--
ALTER TABLE `transfers`
  ADD PRIMARY KEY (`transaction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `transfers`
--
ALTER TABLE `transfers`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
