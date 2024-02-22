-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220508.7aa512c357
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2022 at 10:23 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_kel2`
--

-- --------------------------------------------------------

--
-- Table structure for table `avail_flight`
--

CREATE TABLE `avail_flight` (
  `flight_id` int(11) NOT NULL,
  `airline_id` varchar(10) NOT NULL,
  `flight_departure` varchar(30) NOT NULL,
  `flight_arrival` varchar(30) NOT NULL,
  `class_id` varchar(3) NOT NULL,
  `seats_left` int(11) NOT NULL,
  `flight_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `avail_flight`
--

INSERT INTO `avail_flight` (`flight_id`, `airline_id`, `flight_departure`, `flight_arrival`, `class_id`, `seats_left`, `flight_price`) VALUES
(20220001, 'BATI', 'Jakarta', 'Bali', 'ECO', 4, 1188000),
(20220002, 'CITY', 'Jakarta', 'Surabaya', 'ECO', 16, 900000),
(20220003, 'GRDA', 'Surabaya', 'Bali', 'ECO', 11, 825000),
(20220004, 'LION', 'Surabaya', 'Jakarta', 'ECO', 8, 877000),
(20220005, 'BATI', 'Bali', 'Surabaya', 'ECO', 9, 610000),
(20220006, 'GRDA', 'Bali', 'Jakarta', 'BSN', 4, 7439000),
(20220007, 'BATI', 'Jakarta', 'Surabaya', 'BSN', 7, 3445000),
(20220008, 'GRDA', 'Jakarta', 'Bali', 'BSN', 12, 6600000),
(20220009, 'GRDA', 'Surabaya', 'Bali', 'BSN', 10, 3529000),
(20220010, 'BATI', 'Surabaya', 'Jakarta', 'BSN', 15, 3487000),
(20220011, 'GRDA', 'Bali', 'Jakarta', 'FRS', 1, 10942000),
(20220012, 'GRDA', 'Jakarta', 'Bali', 'FRS', 6, 10189000);

-- --------------------------------------------------------

--
-- Table structure for table `avail_hotel`
--

CREATE TABLE `avail_hotel` (
  `avail_id` int(11) NOT NULL,
  `hotel_id` varchar(4) NOT NULL,
  `room_id` int(11) NOT NULL,
  `bed_id` int(11) NOT NULL,
  `avail_room` int(3) NOT NULL,
  `hotel_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `avail_hotel`
--

INSERT INTO `avail_hotel` (`avail_id`, `hotel_id`, `room_id`, `bed_id`, `avail_room`, `hotel_price`) VALUES
(1, 'H001', 1, 1, 6, 575000),
(2, 'H001', 2, 3, 4, 789000),
(3, 'H001', 3, 3, 6, 950000),
(4, 'H001', 4, 4, 3, 1390000),
(5, 'H001', 5, 5, 2, 3590000),
(6, 'H002', 1, 2, 10, 631000),
(7, 'H002', 2, 3, 6, 837000),
(8, 'H002', 3, 3, 2, 1480000),
(9, 'H002', 3, 2, 7, 1200000),
(10, 'H002', 4, 4, 16, 1759000),
(11, 'H003', 2, 2, 5, 719000),
(12, 'H003', 2, 1, 10, 695000),
(13, 'H003', 3, 3, 2, 925000),
(14, 'H003', 3, 4, 1, 1015000),
(15, 'H003', 4, 4, 4, 1340000),
(16, 'H004', 1, 2, 9, 550000),
(17, 'H004', 2, 3, 14, 875000),
(18, 'H004', 2, 1, 12, 700000),
(19, 'H004', 3, 1, 6, 999000),
(20, 'H004', 3, 4, 2, 1299000),
(21, 'H005', 1, 1, 8, 650000),
(22, 'H005', 1, 3, 4, 790000),
(23, 'H005', 4, 2, 9, 1159000),
(24, 'H005', 5, 4, 3, 2399000),
(25, 'H005', 5, 5, 2, 3295000),
(26, 'H006', 4, 1, 16, 699000),
(27, 'H006', 5, 5, 6, 2765000),
(28, 'H006', 5, 4, 2, 2399000),
(29, 'H006', 4, 2, 16, 900000),
(30, 'H006', 5, 5, 5, 2899000);

-- --------------------------------------------------------

--
-- Table structure for table `avail_train`
--

CREATE TABLE `avail_train` (
  `train_id` int(11) NOT NULL,
  `class_id` varchar(3) NOT NULL,
  `train_departure` varchar(30) NOT NULL,
  `train_arrival` varchar(30) NOT NULL,
  `train_seats` int(11) NOT NULL,
  `train_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `avail_train`
--

INSERT INTO `avail_train` (`train_id`, `class_id`, `train_departure`, `train_arrival`, `train_seats`, `train_price`) VALUES
(20220001, 'EXC', 'Jakarta', 'Semarang', 11, 450000),
(20220002, 'ECO', 'Jakarta', 'Yogyakarta', 8, 230000),
(20220003, 'EXC', 'Jakarta', 'Yogyakarta', 3, 530000),
(20220004, 'EXC', 'Jakarta', 'Surabaya', 8, 615000),
(20220005, 'BSN', 'Jakarta', 'Semarang', 6, 370000),
(20220006, 'ECO', 'Jakarta', 'Surabaya', 5, 300000),
(20220007, 'BSN', 'Semarang', 'Jakarta', 10, 270000),
(20220008, 'BSN', 'Yogyakarta', 'Jakarta', 4, 320000),
(20220009, 'ECO', 'Yogyakarta', 'Jakarta', 2, 220000),
(20220010, 'ECO', 'Surabaya', 'Jakarta', 6, 200000);

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` varchar(3) NOT NULL,
  `class_name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`) VALUES
('BSN', 'Business'),
('ECO', 'Economy'),
('EXC', 'Executive'),
('FRS', 'First Class');

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `airline_id` varchar(10) NOT NULL,
  `airline_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`airline_id`, `airline_name`) VALUES
('BATI', 'Batik Air'),
('CITY', 'Citilink'),
('GRDA', 'Garuda Indonesia'),
('LION', 'Lion Air');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hotel_id` varchar(4) NOT NULL,
  `hotel_name` varchar(30) NOT NULL,
  `hotel_city` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`hotel_id`, `hotel_name`, `hotel_city`) VALUES
('H001', 'Hotel Jasmine', 'Jakarta'),
('H002', 'Hotel Lily', 'Jakarta'),
('H003', 'Hotel Dianthus', 'Yogyakarta'),
('H004', 'Hotel Anggrek', 'Yogyakarta'),
('H005', 'Hotel Bougenville', 'Bali'),
('H006', 'Hotel Viola Odorata', 'Bali');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_bed`
--

CREATE TABLE `hotel_bed` (
  `bed_id` int(11) NOT NULL,
  `bed_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel_bed`
--

INSERT INTO `hotel_bed` (`bed_id`, `bed_type`) VALUES
(1, 'Single Bed'),
(2, 'Twin Bed'),
(3, 'Double Bed'),
(4, 'Queen Bed'),
(5, 'King Bed');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_room`
--

CREATE TABLE `hotel_room` (
  `room_id` int(11) NOT NULL,
  `room_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel_room`
--

INSERT INTO `hotel_room` (`room_id`, `room_type`) VALUES
(1, 'Standard Room'),
(2, 'Deluxe Room'),
(3, 'Junior Suite'),
(4, 'Suite'),
(5, 'Presidential Suite');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_hotel`
--

CREATE TABLE `transaksi_hotel` (
  `transaksi_id` varchar(8) NOT NULL,
  `username` varchar(20) NOT NULL,
  `avail_id` int(11) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `total_room` int(11) NOT NULL,
  `grand_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `transaksi_hotel`
--
DELIMITER $$
CREATE TRIGGER `TrHotel` AFTER INSERT ON `transaksi_hotel` FOR EACH ROW BEGIN
	UPDATE avail_hotel SET avail_room=avail_room-NEW.total_room
    WHERE avail_id = NEW.avail_id; 
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_kereta`
--

CREATE TABLE `transaksi_kereta` (
  `transaksi_id` varchar(8) NOT NULL,
  `username` varchar(20) NOT NULL,
  `train_id` int(11) NOT NULL,
  `departure_date` date NOT NULL,
  `total_seats` int(11) NOT NULL,
  `grand_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `transaksi_kereta`
--
DELIMITER $$
CREATE TRIGGER `TrKereta` AFTER INSERT ON `transaksi_kereta` FOR EACH ROW BEGIN
	UPDATE avail_train SET train_seats=train_seats-NEW.total_seats
    WHERE train_id=NEW.train_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_pesawat`
--

CREATE TABLE `transaksi_pesawat` (
  `transaksi_id` varchar(8) NOT NULL,
  `username` varchar(20) NOT NULL,
  `flight_id` int(11) NOT NULL,
  `departure_date` date NOT NULL,
  `total_seats` int(11) NOT NULL,
  `grand_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Triggers `transaksi_pesawat`
--
DELIMITER $$
CREATE TRIGGER `TrPesawat` AFTER INSERT ON `transaksi_pesawat` FOR EACH ROW BEGIN
	UPDATE avail_flight SET seats_left=seats_left - NEW.total_seats
    WHERE flight_id = NEW.flight_id;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  `phone_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `email`, `password`, `phone_number`) VALUES
('anthony', 'anthony@gmail.com', '$2y$10$Jv9QxBbxcih04Jv00cP88OuW/V9GQsBBdHi4aEZ12Yq', '081127917421'),
('cindy', 'cindy@gmail.com', '$2y$10$xSbxI6MyA.fOeEYCfyMpduv13H4o1OQLdecRKHq18ES', '08127314974312'),
('gladys', 'gladys@gmail.com', '$2y$10$WwDOrdMzKFTb3bcQcJftS.itab/57z/GOwUrHNV8G.Y', '08129349832742'),
('michelle', 'michelle@gmail.com', '$2y$10$rr99wrqmZ3rwE7NeiLs0O.57yfXpfUO0/IMezLNJps8', '0819735091435'),
('rafael', 'rafael@gmail.com', '$2y$10$dilX.W0sJTIrcHN8jUXzN.VkI.ClZh2wdzrOBrwJJ79', '08109218032');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `avail_flight`
--
ALTER TABLE `avail_flight`
  ADD PRIMARY KEY (`flight_id`),
  ADD KEY `airline_id` (`airline_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `avail_hotel`
--
ALTER TABLE `avail_hotel`
  ADD PRIMARY KEY (`avail_id`),
  ADD KEY `room_id` (`room_id`),
  ADD KEY `bed_id` (`bed_id`),
  ADD KEY `hotel_id` (`hotel_id`);

--
-- Indexes for table `avail_train`
--
ALTER TABLE `avail_train`
  ADD PRIMARY KEY (`train_id`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`airline_id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `hotel_bed`
--
ALTER TABLE `hotel_bed`
  ADD PRIMARY KEY (`bed_id`);

--
-- Indexes for table `hotel_room`
--
ALTER TABLE `hotel_room`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `transaksi_hotel`
--
ALTER TABLE `transaksi_hotel`
  ADD PRIMARY KEY (`transaksi_id`),
  ADD UNIQUE KEY `avail_id` (`avail_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `transaksi_kereta`
--
ALTER TABLE `transaksi_kereta`
  ADD PRIMARY KEY (`transaksi_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `train_id` (`train_id`);

--
-- Indexes for table `transaksi_pesawat`
--
ALTER TABLE `transaksi_pesawat`
  ADD PRIMARY KEY (`transaksi_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `flight_id` (`flight_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `avail_flight`
--
ALTER TABLE `avail_flight`
  MODIFY `flight_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20220013;

--
-- AUTO_INCREMENT for table `avail_hotel`
--
ALTER TABLE `avail_hotel`
  MODIFY `avail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `avail_train`
--
ALTER TABLE `avail_train`
  MODIFY `train_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20220011;

--
-- AUTO_INCREMENT for table `hotel_bed`
--
ALTER TABLE `hotel_bed`
  MODIFY `bed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hotel_room`
--
ALTER TABLE `hotel_room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `avail_flight`
--
ALTER TABLE `avail_flight`
  ADD CONSTRAINT `avail_flight_ibfk_1` FOREIGN KEY (`airline_id`) REFERENCES `flight` (`airline_id`),
  ADD CONSTRAINT `avail_flight_ibfk_2` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`);

--
-- Constraints for table `avail_hotel`
--
ALTER TABLE `avail_hotel`
  ADD CONSTRAINT `avail_hotel_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `hotel_room` (`room_id`),
  ADD CONSTRAINT `avail_hotel_ibfk_3` FOREIGN KEY (`bed_id`) REFERENCES `hotel_bed` (`bed_id`),
  ADD CONSTRAINT `avail_hotel_ibfk_4` FOREIGN KEY (`hotel_id`) REFERENCES `hotel` (`hotel_id`);

--
-- Constraints for table `avail_train`
--
ALTER TABLE `avail_train`
  ADD CONSTRAINT `avail_train_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`class_id`);

--
-- Constraints for table `transaksi_hotel`
--
ALTER TABLE `transaksi_hotel`
  ADD CONSTRAINT `transaksi_hotel_ibfk_1` FOREIGN KEY (`avail_id`) REFERENCES `avail_hotel` (`avail_id`),
  ADD CONSTRAINT `transaksi_hotel_ibfk_2` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `transaksi_kereta`
--
ALTER TABLE `transaksi_kereta`
  ADD CONSTRAINT `transaksi_kereta_ibfk_1` FOREIGN KEY (`train_id`) REFERENCES `avail_train` (`train_id`),
  ADD CONSTRAINT `transaksi_kereta_ibfk_2` FOREIGN KEY (`username`) REFERENCES `users` (`username`);

--
-- Constraints for table `transaksi_pesawat`
--
ALTER TABLE `transaksi_pesawat`
  ADD CONSTRAINT `transaksi_pesawat_ibfk_1` FOREIGN KEY (`flight_id`) REFERENCES `avail_flight` (`flight_id`),
  ADD CONSTRAINT `transaksi_pesawat_ibfk_2` FOREIGN KEY (`username`) REFERENCES `users` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



