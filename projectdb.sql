-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2025 at 02:10 PM
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
-- Database: `projectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` varchar(20) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `publication_year` int(4) DEFAULT NULL,
  `price` int(20) DEFAULT NULL,
  `stock` int(10) DEFAULT NULL,
  `supplier_id` varchar(20) DEFAULT NULL,
  `publisher_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `title`, `author`, `publication_year`, `price`, `stock`, `supplier_id`, `publisher_id`) VALUES
('BOOK003', 'You Do You', 'Fallexandra Ruby', 2020, 98000, 50, 'SUPP004', 'PUBL002'),
('BOOK004', 'Cantik Itu Luka', 'Eka Kurniawan', 2018, 90000, 100, 'SUPP002', 'PUBL002'),
('BOOK006', 'BUMI', 'Tere Liye', 2014, 120000, 73, 'SUPP004', 'PUBL006'),
('BOOK008', 'Malioboro at Midnight', 'Skyphire', 2023, 89000, 36, 'SUPP009', 'PUBL006'),
('BOOK012', 'Hello(again), Cello', 'Nadia Ristivani', 2022, 93000, 92, 'SUPP009', 'PUBL008'),
('BOOK034', 'Hilmy Milan', 'Nadia Ristivani', 2021, 89000, 87, 'SUPP009', 'PUBL008'),
('BOOK045', 'My Youth', 'Giantara Alam', 2022, 110000, 24, 'SUPP023', 'PUBL008'),
('BOOK048', 'Aster Lake', 'Auryn Vientania', 2021, 99000, 100, 'SUPP015', 'PUBL006');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` varchar(20) NOT NULL,
  `cust_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `cust_name`, `email`, `phone_number`, `address`) VALUES
('123876445', 'Ruka Asananra', 'rukaasa@baemon.com', '082144325433', 'Hakata Street no.68'),
('124792648', 'Wonhe', 'wonhecute@illit.com', '089867362718', 'Hybe Street no. 87'),
('130839284', 'Na Yuna', 'yunana@itzy.com', '085682738726', 'Soul Street no. 23'),
('153728362', 'Rinjan', 'rinjanlee@dream.com', '086572635726', 'Lucid Street no. 56'),
('162738137', 'Jungmin', 'jungmin@wish.com', '084656272635', 'Itaewon Street no. 12'),
('163925446', 'Yeji Calista', 'yejical@itzy.com', '088947368821', 'Gangnam Street no.19'),
('172354221', 'Haruto Watanabe', 'watanabe.haruto@treasure.com', '082236748821', 'Tenjin Street no.6'),
('186352782', 'Ningsih', 'ningning@aespa.com', '081262837261', 'Sima Street no. 157'),
('192836253', 'Suni', 'sunio@enhypen.com', '084234245623', 'Limau Street no. 78');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `manager_name` varchar(50) NOT NULL,
  `manager_id` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`manager_name`, `manager_id`, `password`) VALUES
('Aruna Kartini', 'MNG001', '10012005'),
('Caramel Firtina', 'MNG002', '29032005');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `publisher_id` varchar(20) NOT NULL,
  `publisher_name` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`publisher_id`, `publisher_name`, `address`, `phone_number`) VALUES
('PUBL002', 'Gramedia', 'Ginaro Street no.53', '088976432567'),
('PUBL003', 'Coconut Books', 'Ginaro Street no.53', '088976432567'),
('PUBL006', 'Mizan Pustaka', 'Cinambo Street no. 135', '087738292734'),
('PUBL008', 'Kata Depan', 'Janur Street no. 2', '087782537281'),
('PUBL009', 'Dolphin', 'Kebagusan Raya Street', '085773927364'),
('PUBL010', 'Bentang Pustaka', 'Pesanggrahan Street no. 8', '081373925635');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` varchar(20) NOT NULL,
  `staff_name` varchar(50) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `shift` varchar(20) DEFAULT NULL,
  `salary` int(20) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `staff_name`, `position`, `shift`, `salary`, `phone_number`) VALUES
('021893554', 'Karina Serina', 'Administation Staff', 'Night', 6000000, '088976432567'),
('027381197', 'Mahen Ranendra', 'Inventory Staff', 'Night', 6000000, '085156395933'),
('039847209', 'David Tiresa', 'Customer Service', 'Morning', 4500000, '085567868754'),
('045367235', 'Crystal Gwensa', 'Manager', 'Night', 8000000, '086609879221'),
('054829003', 'Zidane Hamizan', 'Quality Control Staff', 'Morning', 5000000, '087745980001'),
('065634569', 'Gisela Lami', 'Finance Staff', 'Morning', 6500000, '081723458789'),
('083498675', 'Abian Jeno', 'Marketing Staff', 'Morning', 5500000, '081523264345');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` varchar(20) NOT NULL,
  `supplier_name` varchar(50) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `manufacturer` varchar(50) DEFAULT NULL,
  `phone_number` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`, `title`, `manufacturer`, `phone_number`) VALUES
('SUPP001', 'Rinjana', 'MeloDylan', 'Rinjana Group', '081236478889'),
('SUPP002', 'Salaun', 'Cantik Itu Luka', 'Salaun Co.', '087827368989'),
('SUPP003', 'Dragonew', 'Atomic Habits', 'Dragonew Printer', '087764228912'),
('SUPP004', 'Puspita', 'You Do You', 'Puspita Sarana', '087592746378'),
('SUPP009', 'Larasati', 'Malioboro at Midnight', 'Larasati Riu', '087783567325'),
('SUPP015', 'Miyaka', 'Aster Lake', 'Maya Miyaka', '081682765678'),
('SUPP023', 'Nia', 'My Youth', 'Nana Nia', '087728972697');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `trx_id` varchar(20) NOT NULL,
  `book_id` varchar(20) DEFAULT NULL,
  `cust_id` varchar(20) DEFAULT NULL,
  `staff_id` varchar(20) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `total` int(50) DEFAULT NULL,
  `method` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`trx_id`, `book_id`, `cust_id`, `staff_id`, `date`, `total`, `method`) VALUES
('TRX001', 'BOOK002', '123876445', '039847209', '2024-03-22', 87000, 'Transfer Mandiri'),
('TRX002', 'BOOK004', '163925446', '097658335', '2024-03-23', 96000, 'Transfer BCA'),
('TRX010', 'BOOK006', '130839284', '039847209', '2024-03-22', 120000, 'Transfer BCA'),
('TRX011', 'BOOK004', '124792648', '039847209', '2024-03-22', 96000, 'Transfer BRI'),
('TRX012', 'BOOK008', '186352782', '039847209', '2024-03-22', 89000, 'Cash'),
('TRX013', 'BOOK008', '153728362', '039847209', '2024-03-22', 89000, 'Transfer BCA'),
('TRX014', 'BOOK048', '192836253', '039847209', '2024-03-22', 99000, 'Transfer BCA'),
('TRX025', 'BOOK048', '162738137', '039847209', '2024-03-22', 99000, 'Cash');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `supplier_id` (`supplier_id`),
  ADD KEY `publisher_id` (`publisher_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisher_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`trx_id`),
  ADD KEY `book_id` (`book_id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `staff_id` (`staff_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
