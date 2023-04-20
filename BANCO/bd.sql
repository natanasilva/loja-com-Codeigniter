-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 19, 2023 at 08:31 PM
-- Server version: 10.6.12-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id_client` int(11) NOT NULL,
  `client_name` varchar(50) DEFAULT NULL,
  `client_email` varchar(50) DEFAULT NULL,
  `client_password` varchar(50) DEFAULT NULL,
  `client_cpf` varchar(15) DEFAULT NULL,
  `client_phone` varchar(20) DEFAULT NULL,
  `client_type` varchar(10) DEFAULT NULL,
  `client_adddress` varchar(50) DEFAULT NULL,
  `client_created_in` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id_client`, `client_name`, `client_email`, `client_password`, `client_cpf`, `client_phone`, `client_type`, `client_adddress`, `client_created_in`) VALUES
(5, 'Nataniel de Aguiar da Silva', 'natan@natanet.xyz', '12345', '99999999999', '85992402007', 'Bronze', 'Centro', '2023-04-16 02:45:41');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id_item` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `item_quantity` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `item_created_in` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id_item`, `product_id`, `item_quantity`, `order_id`, `item_created_in`) VALUES
(1, 1, 2, 1, '2023-03-23 23:27:46'),
(2, 3, 1, 1, '2023-03-23 23:27:46'),
(3, 5, 3, 1, '2023-03-23 23:27:46'),
(4, 6, 2, 2, '2023-03-24 00:02:02'),
(5, 7, 5, 2, '2023-03-24 00:02:02'),
(6, 2, 3, 2, '2023-03-24 00:02:02');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id_log` int(11) NOT NULL,
  `log_content` text NOT NULL,
  `log_type` varchar(30) NOT NULL,
  `log_created_in` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `order_number` varchar(10) DEFAULT NULL,
  `client_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `order_created_in` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_order`, `order_number`, `client_id`, `user_id`, `order_created_in`) VALUES
(1, '0000000001', 1, 1, '2023-03-23 23:27:42'),
(2, '0000000002', 2, 1, '2023-03-24 00:02:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id_product` int(11) NOT NULL,
  `product_name` varchar(40) DEFAULT NULL,
  `product_code` varchar(12) DEFAULT NULL,
  `product_price` float(6,2) DEFAULT NULL,
  `product_stock` int(11) DEFAULT NULL,
  `product_created_in` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id_product`, `product_name`, `product_code`, `product_price`, `product_stock`, `product_created_in`) VALUES
(1, 'Biscoito Rechado Morango', '000000000001', 2.99, 100, '2023-03-24 23:42:30'),
(2, 'Biscoito Rechado Chocolate', '000000000002', 2.99, 100, '2023-03-24 23:42:30'),
(3, 'Biscoito Rechado Escureto', '000000000003', 2.99, 100, '2023-03-24 23:42:30'),
(4, 'Refrigerante Coca Cola Lata', '000000000004', 3.99, 100, '2023-03-24 23:42:30'),
(5, 'Refrigerante Fanta Uva Lata', '000000000005', 3.59, 100, '2023-03-24 23:42:30'),
(6, 'Refrigerante Fanta Laranja Lata', '000000000006', 3.59, 100, '2023-03-24 23:42:30'),
(7, 'Salgadinho Cheetos Onda Requeijao P', '000000000007', 1.99, 100, '2023-03-24 23:42:30'),
(8, 'Salgadinho Cheetos Lua Requeijao P', '000000000008', 1.99, 100, '2023-03-24 23:42:30'),
(9, 'Ref São Geraldo 2lt', '000000000009', 8.99, 100, '2023-03-24 23:42:30'),
(10, 'Salgadinho Fandangos Presunto P', '000000000010', 1.99, 100, '2023-03-24 23:42:30'),
(15, 'Refrigerante Pepsi Black Pet 2L', '257272578638', 3.99, 5000, '2023-04-15 18:45:11'),
(16, 'Biscoito Rechado Morango', '000000000001', 2.99, 100, '2023-03-24 23:42:30'),
(17, 'Biscoito Rechado Chocolate', '000000000002', 2.99, 100, '2023-03-24 23:42:30'),
(18, 'Biscoito Rechado Escureto', '000000000003', 2.99, 100, '2023-03-24 23:42:30'),
(19, 'Refrigerante Coca Cola Lata', '000000000004', 3.99, 100, '2023-03-24 23:42:30'),
(20, 'Refrigerante Fanta Uva Lata', '000000000005', 3.59, 100, '2023-03-24 23:42:30'),
(21, 'Refrigerante Fanta Laranja Lata', '000000000006', 3.59, 100, '2023-03-24 23:42:30'),
(22, 'Salgadinho Cheetos Onda Requeijao P', '000000000007', 1.99, 100, '2023-03-24 23:42:30'),
(23, 'Salgadinho Cheetos Lua Requeijao P', '000000000008', 1.99, 100, '2023-03-24 23:42:30'),
(24, 'Ref São Geraldo 2lt', '000000000009', 8.99, 100, '2023-03-24 23:42:30'),
(25, 'Salgadinho Fandangos Presunto P', '000000000010', 1.99, 100, '2023-03-24 23:42:30'),
(26, 'Refrigerante Pepsi Black Pet 2L', '257272578638', 3.99, 5000, '2023-04-15 18:45:11'),
(27, 'Biscoito Rechado Morango', '000000000001', 2.99, 100, '2023-03-24 23:42:30'),
(28, 'Biscoito Rechado Chocolate', '000000000002', 2.99, 100, '2023-03-24 23:42:30'),
(29, 'Biscoito Rechado Escureto', '000000000003', 2.99, 100, '2023-03-24 23:42:30'),
(30, 'Refrigerante Coca Cola Lata', '000000000004', 3.99, 100, '2023-03-24 23:42:30'),
(31, 'Refrigerante Fanta Uva Lata', '000000000005', 3.59, 100, '2023-03-24 23:42:30'),
(32, 'Refrigerante Fanta Laranja Lata', '000000000006', 3.59, 100, '2023-03-24 23:42:30'),
(33, 'Salgadinho Cheetos Onda Requeijao P', '000000000007', 1.99, 100, '2023-03-24 23:42:30'),
(34, 'Salgadinho Cheetos Lua Requeijao P', '000000000008', 1.99, 100, '2023-03-24 23:42:30'),
(35, 'Ref São Geraldo 2lt', '000000000009', 8.99, 100, '2023-03-24 23:42:30'),
(36, 'Salgadinho Fandangos Presunto P', '000000000010', 1.99, 100, '2023-03-24 23:42:30'),
(37, 'Refrigerante Pepsi Black Pet 2L', '257272578638', 3.99, 5000, '2023-04-15 18:45:11'),
(38, 'Biscoito Rechado Morango', '000000000001', 2.99, 100, '2023-03-24 23:42:30'),
(39, 'Biscoito Rechado Chocolate', '000000000002', 2.99, 100, '2023-03-24 23:42:30'),
(40, 'Biscoito Rechado Escureto', '000000000003', 2.99, 100, '2023-03-24 23:42:30'),
(41, 'Refrigerante Coca Cola Lata', '000000000004', 3.99, 100, '2023-03-24 23:42:30'),
(42, 'Refrigerante Fanta Uva Lata', '000000000005', 3.59, 100, '2023-03-24 23:42:30'),
(43, 'Refrigerante Fanta Laranja Lata', '000000000006', 3.59, 100, '2023-03-24 23:42:30'),
(44, 'Salgadinho Cheetos Onda Requeijao P', '000000000007', 1.99, 100, '2023-03-24 23:42:30'),
(45, 'Salgadinho Cheetos Lua Requeijao P', '000000000008', 1.99, 100, '2023-03-24 23:42:30'),
(46, 'Ref São Geraldo 2lt', '000000000009', 8.99, 100, '2023-03-24 23:42:30'),
(47, 'Salgadinho Fandangos Presunto P', '000000000010', 1.99, 100, '2023-03-24 23:42:30'),
(48, 'Refrigerante Pepsi Black Pet 2L', '257272578638', 3.99, 5000, '2023-04-15 18:45:11');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id_suppliers` int(11) NOT NULL,
  `suppliers_name` varchar(40) DEFAULT NULL,
  `suppliers_code` varchar(12) DEFAULT NULL,
  `cnpj_suppliers` varchar(15) DEFAULT NULL,
  `suppliers_created_in` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id_suppliers`, `suppliers_name`, `suppliers_code`, `cnpj_suppliers`, `suppliers_created_in`) VALUES
(1, 'Pepsi do Brasil 1', '123465874415', '132564979879797', '2023-04-01 20:53:42'),
(3, 'Pepsi do Brasil 3', '123465874415', '132564979879797', '2023-04-01 20:53:42'),
(4, 'Pepsi do Brasil 3', '123465874415', '132564979879797', '2023-04-01 20:53:42'),
(5, 'Pepsi do Brasil 3', '123465874415', '132564979879797', '2023-04-01 20:53:42'),
(6, 'Pepsi do Brasil 3', '123465874415', '132564979879797', '2023-04-01 20:53:42'),
(7, 'Pepsi do Brasil 3', '123465874415', '132564979879797', '2023-04-01 20:53:42'),
(8, 'Pepsi do Brasil 3', '123465874415', '132564979879797', '2023-04-01 20:53:42'),
(9, 'Pepsi do Brasil 3', '123465874415', '132564979879797', '2023-04-01 20:53:42'),
(10, 'Pepsi do Brasil 3', '123465874415', '132564979879797', '2023-04-01 20:53:42'),
(11, 'Pepsi do Brasil 3', '123465874415', '132564979879797', '2023-04-01 20:53:42'),
(12, 'Pepsi do Brasil 3', '123465874415', '132564979879797', '2023-04-01 20:53:42');

-- --------------------------------------------------------

--
-- Table structure for table `_users`
--

CREATE TABLE `_users` (
  `id_user` int(11) NOT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `user_password` varchar(50) DEFAULT NULL,
  `user_cpf` varchar(15) DEFAULT NULL,
  `user_phone` varchar(20) DEFAULT NULL,
  `user_type` varchar(10) DEFAULT NULL,
  `user_adddress` varchar(50) DEFAULT NULL,
  `user_created_in` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `_users`
--

INSERT INTO `_users` (`id_user`, `user_name`, `user_email`, `user_password`, `user_cpf`, `user_phone`, `user_type`, `user_adddress`, `user_created_in`) VALUES
(1, 'Natan Aguiar', 'natan@natanet.xyz', '8cb2237d0679ca88db6464eac60da96345513964', '60393507335', '85999544262', 'ADMIN', 'RUA BEM ALI 222', '2023-03-24 02:10:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id_item`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_product`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id_suppliers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id_item` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id_suppliers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
