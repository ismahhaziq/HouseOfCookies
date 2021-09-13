-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 03:59 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hocdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cookies`
--

CREATE TABLE `cookies` (
  `product_id` int(2) NOT NULL,
  `product_name` varchar(40) NOT NULL,
  `details` varchar(100) NOT NULL,
  `qty` varchar(6) NOT NULL,
  `product_category` varchar(50) NOT NULL,
  `product_status` varchar(20) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `picture` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cookies`
--

INSERT INTO `cookies` (`product_id`, `product_name`, `details`, `qty`, `product_category`, `product_status`, `price`, `picture`) VALUES
(1, 'Semperit Klasik', 'Ingredients: Tepung Jagung, Tepung Custard, Tepung Gandum, Gula, Telur, Margerin\r\n\r\n', '40 pcs', '1', '1', '25.00', 'semperit.jpg'),
(2, 'Oreo Crunchie Cookies', 'Ingredients: Tepung Jagung, Minyak Sapi, Tepung Gandum, Gula, Oreo, Marjerin\r\n\r\n', '50 pcs', '1', '1', '25.00', 'oreo.jpg'),
(3, 'Brownies Oat', 'Ingredients: Tepung Gandum, Gula, Telur, Oat, Serbuk Koko, Margerin\r\n\r\n', '40 pcs', '1', '1', '25.00', 'browni.jpg'),
(4, 'Tart Strawberry', 'Ingredients: Tepung Jagung, Tepung Custard, Tepung Gandum, Gula, Telur, Margerin, Jem Strawberry\r\n\r\n', '40 pcs', '1', '1', '25.00', 'tartstraw.jpg'),
(5, 'Ombak Rindu', 'Ingredients: Tepung Jagung, Tepung Custard, Tepung Gandum, Gula, Telur, Marjerin, Badam, White Choco', '40 pcs', '1', '1', '25.00', 'ombakrindu.jpg'),
(6, 'Tart Nenas', 'Ingredients: Tepung Jagung, Tepung Custard, Tepung Gandum, Gula, Telur, Jem Nenas, Marjerin\r\n', '40 pcs', '1', '1', '25.00', 'tartnenas.jpg'),
(7, 'Nestum Ball', 'Ingredients: Tepung Gandum, Nestum, Gula, Telur, Serbuk Koko, Margerin\r\n', '380 g', '1', '1', '25.00', 'nestumball.jpg'),
(8, 'Aiskrim Strawberry', 'Ingredients: Tepung Jagung, Tepung Gandum, Coklat, Gula, Telur, Margerin\r\n', '55 pcs', '1', '1', '25.00', 'aiskrimstraw.jpg'),
(9, 'Moon Cake ', 'Ingredients: Golden Syrup, Sugar, Peanut Oil, Lemon, Cake Flour, Salted Egg Yolks, Salt\r\n', '20 pcs', '2', '1', '22.80', 'heightmooncke.jpg'),
(10, 'Fortune Cookies', 'Ingredients: Egg, Butter, Sugar, Vanilla Extract, Almond Extract\r\n\r\n\r\n', '20 pcs', '2', '1', '22.80', 'heightfortunecookies.jpg'),
(11, 'Golden Ingot Pineapple Tart', 'Ingredients: Pineapples, Sugar, Butter, Egg Yolk, Flour, Corn Flour, Custord Powder, Butter, Essence', '20 pcs', '2', '1', '22.80', 'heightgoldeningot.jpg'),
(12, 'Maple Walnut Short Bread Cookies', 'Ingredients: Walnuts, Maple Sugar, Pure Maple Extract, Flour, Cornstarch, Butter\r\n', '30 pcs', '2', '1', '25.00', 'Heightmaple-walnut-shortbread-cookies.jpg'),
(13, 'Assorted Pineapple Tart', 'Ingredients: Pineapples, Sugar, Butter, Egg Yolk, Flour, Corn Flour, Custord Powder, Milk Powder, Es', '20 pcs', '2', '1', '22.80', 'heightassorted.jpg'),
(14, 'Mandarin Almond Cookies', 'Ingredients: Almond Flour, Sugar, Peanut Oil, Egg Yolks, Salt\r\n', '40 pcs', '2', '1', '25.00', 'heightalmondcookies.jpg'),
(15, 'Santa\'s Whiskers Cookies', 'Ingredients: Butter, Sugar, Milk, Vanilla, Flour, Flaked Coconut, Pecans, Maraschino Cherries', '30 pcs', '3', '1', '27.00', 'heightsantawhiskerscookies.jpg'),
(16, 'Chocolate Sugar Cookies', 'Ingredients: Cocoa Powder, Baking Soda, Royal Icing, Glaze Icing, Vanilla Extract, Flour\r\n', '30 pcs', '3', '1', '27.00', 'heightChocolate-Sugar-Cookies.jpg'),
(17, 'Chocolate Truffles ', 'Ingredients: Whipping Cream, Minyak Sapi, Semi Sweet Chocolate Bars, Butter\r\n', '30 pcs', '3', '1', '26.00', 'heightDark-Chocolate-Truffle.jpg'),
(18, 'Christmas Cookie Sparkles ', 'Ingredients: Flour, Salt, Butter, Cream Cheese, Sugar, Vanilla + Almond Extract, Egg', '30 pcs', '3', '1', '25.00', 'heightchristmas-sugar-cookies.jpg'),
(19, 'Neapolitan Cookies ', 'Ingredients: Strawberry Jam, Almond Extract, Cocoa Powder, Coarse Sugar, Vanilla Extract, Egg, Flour', '40 pcs', '3', '1', '26.00', 'heightneapolitancookies.jpg'),
(20, 'Cherry Almond Cookies', 'Ingredients: Tepung Jagung, Minyak Sapi, Tepung Gandum, Gula, Oreo, Marjerin', '50 pcs', '3', '1', '25.00', 'heightcherry-almond-christmas-shortbread-cookies.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `level_id` int(10) NOT NULL,
  `level_des` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`level_id`, `level_des`) VALUES
(1, 'Admin'),
(2, 'Customer'),
(1, 'Admin'),
(2, 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orders_id` int(4) NOT NULL,
  `user_id` int(4) NOT NULL,
  `orders_date` date NOT NULL,
  `orders_pickup_date` date NOT NULL,
  `orders_pickup_time` time(4) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orders_id`, `user_id`, `orders_date`, `orders_pickup_date`, `orders_pickup_time`, `status`) VALUES
(1, 31, '2021-07-06', '0000-00-00', '00:00:00.0000', 'processing'),
(2, 31, '2021-07-06', '2021-07-06', '21:49:00.0000', 'processing'),
(3, 31, '2021-07-06', '0000-00-00', '00:00:00.0000', 'processing');

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
--

CREATE TABLE `orders_detail` (
  `detail_id` int(4) NOT NULL,
  `orders_id` int(4) NOT NULL,
  `product_id` int(4) NOT NULL,
  `quant` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders_detail`
--

INSERT INTO `orders_detail` (`detail_id`, `orders_id`, `product_id`, `quant`) VALUES
(1, 1, 9, 1),
(119, 2, 19, 1),
(120, 3, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(4) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phoneNo` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `address`, `phoneNo`, `email`, `level_id`) VALUES
(1, 'admin', 'a', 'Dayang', 'Gunung Semanggol, Perak', '0103935284', 'dayang@gmail.com', 1),
(3, 'piqah', 'piqah', 'Syafiqah', 'Jalan Mati, Kamunting, Perak', '0166359202', 'piqah@gmail', 2),
(4, 'haru', 'haru', 'Haru Haru', 'Bayan Lepas, Penang', '0174252581', 'haru@gmail.com', 2),
(28, 'husna', 'husna', 'Madam Husna Cantik', 'United Kingdom', '0198253', 'husna@gmail.com', 2),
(31, 'keid', 'keid', 'Keid Oria', 'Baling', '0174267654', 'keid@gmail.com', 2),
(32, 'akmasu', 'akma', 'Akma Suhaini', 'teluk bahang', '0198765432', 'akma@gmail.com', 2),
(33, 'tehah', 'tehah', 'Fatehah', 'semanngol', '0198726534', 'teha@gmail.com', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cookies`
--
ALTER TABLE `cookies`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orders_id`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`detail_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cookies`
--
ALTER TABLE `cookies`
  MODIFY `product_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orders_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `detail_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
