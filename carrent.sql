-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 04:47 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carrent`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('Amrutha', 'Amrutha@123');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `VIN` int(11) NOT NULL,
  `location_id` int(11) DEFAULT NULL,
  `model_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `car_class`
--

CREATE TABLE `car_class` (
  `CLASS_TYPE` varchar(20) NOT NULL,
  `WEEKLY_PRICE` int(11) DEFAULT NULL,
  `DAILY_PRICE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_class`
--

INSERT INTO `car_class` (`CLASS_TYPE`, `WEEKLY_PRICE`, `DAILY_PRICE`) VALUES
('Commercial', 450, 100),
('Large', 700, 150),
('Luxury', 700, 160),
('Sedan', 600, 120),
('Small', 500, 100),
('SUV', 650, 130),
('Van', 1200, 250);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Customer_id` int(11) NOT NULL,
  `First_Name` varchar(20) DEFAULT NULL,
  `Last_Name` varchar(20) DEFAULT NULL,
  `Email` varchar(20) DEFAULT NULL,
  `H_Number` int(11) DEFAULT NULL,
  `Street_Name` varchar(20) DEFAULT NULL,
  `City` varchar(20) DEFAULT NULL,
  `State` varchar(20) DEFAULT NULL,
  `Zipcode` int(11) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Customer_id`, `First_Name`, `Last_Name`, `Email`, `H_Number`, `Street_Name`, `City`, `State`, `Zipcode`, `username`, `password`) VALUES
(1, 'WILL', 'DELEO', 'willdeleo123@gmail.c', 123, 'KINGS AVENUE', 'NEWARK', 'NJ', 7029, NULL, NULL),
(2, 'Jeswini', 'o', 'gjo@njit.edu', 615, 'Central Ave', 'Harrison', 'New Jersey', 5813, NULL, NULL),
(3, 'tharun', 'bhupathi', 'tbb@njit.edu', 615, 'Central Ave', 'Harrison', 'New Jersey', 5813, NULL, NULL),
(4, 'wi', 'ni', 'wi123@gmail.com', 123, 'qwerty', 'asdfghj', 'new jersey', 7029, NULL, 'J@123'),
(5, 'Manasa', 'Reddy', 'm@gmail.com', 123, 'rewq', 'nellore', 'andhra', 524003, 'Manu', 'M@123'),
(6, 'Hema', 'Sindhu', 'H@gmail.com', 143, 'parkstreet', 'nellore', 'Andhra', 524003, 'Hema1', 'H@123'),
(7, 'vamshi', 'p', 'v123@gmail.com', 123, 'clev', 'Harrison', 'Newjersey', 76543, 'V@123', 'V@123'),
(8, 'KIM', 'jo', 'kimjo@gmail.com', 456, 'finlandst', 'Hyugtui', 'NJ', 789065, 'Kim1', 'Kim@123');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(11) NOT NULL,
  `number` int(11) DEFAULT NULL,
  `street_name` varchar(20) DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `zipcode` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `MODEL_ID` varchar(10) NOT NULL,
  `MAKE` varchar(10) DEFAULT NULL,
  `MODEL_YEAR` int(11) DEFAULT NULL,
  `MODEL_NAME` varchar(20) DEFAULT NULL,
  `CLASS_TYPE` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`MODEL_ID`, `MAKE`, `MODEL_YEAR`, `MODEL_NAME`, `CLASS_TYPE`) VALUES
('CAR001', 'honda', 2020, 'bolt', 'Small');

--
-- Triggers `model`
--
DELIMITER $$
CREATE TRIGGER `tg_table1_insertionmod` BEFORE INSERT ON `model` FOR EACH ROW BEGIN
  INSERT INTO table1_model VALUES (NULL);
  SET NEW.MODEL_ID = CONCAT('CAR', LPAD(LAST_INSERT_ID(), 3, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `rental_agreement`
--

CREATE TABLE `rental_agreement` (
  `Rental_agreement_id` varchar(7) NOT NULL,
  `C_Name` varchar(20) DEFAULT NULL,
  `Cv_num` int(11) DEFAULT NULL,
  `Exp_date` date DEFAULT NULL,
  `Card_type` varchar(10) DEFAULT NULL,
  `License_no` varchar(20) DEFAULT NULL,
  `Licence_state` varchar(20) DEFAULT NULL,
  `Current_reading` int(11) DEFAULT NULL,
  `Updated_reading` int(11) DEFAULT NULL,
  `Total_rental_cost` int(11) DEFAULT NULL,
  `VIN` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `reservation_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rental_agreement`
--

INSERT INTO `rental_agreement` (`Rental_agreement_id`, `C_Name`, `Cv_num`, `Exp_date`, `Card_type`, `License_no`, `Licence_state`, `Current_reading`, `Updated_reading`, `Total_rental_cost`, `VIN`, `customer_id`, `reservation_id`) VALUES
('RA001', 'qwerty', 1234567890, '2022-12-31', 'visa', '12345678900', 'newjersey', 123, 234, 600, 1234567890, 5, 0);

--
-- Triggers `rental_agreement`
--
DELIMITER $$
CREATE TRIGGER `tg_table1_insertion` BEFORE INSERT ON `rental_agreement` FOR EACH ROW BEGIN
  INSERT INTO table1_rentalagreement VALUES (NULL);
  SET NEW.Rental_agreement_id = CONCAT('RA', LPAD(LAST_INSERT_ID(), 3, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `Reservation_id` varchar(7) NOT NULL DEFAULT '0',
  `Rent_timestamp_out` date DEFAULT NULL,
  `Rent_timestamp_in` date DEFAULT NULL,
  `R_location_id` int(11) DEFAULT NULL,
  `R_customer_id` int(11) DEFAULT NULL,
  `R_CLASS_TYPE` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`Reservation_id`, `Rent_timestamp_out`, `Rent_timestamp_in`, `R_location_id`, `R_customer_id`, `R_CLASS_TYPE`) VALUES
('RE001', '2008-07-04', '2008-07-04', 12, 1, 'suv');

--
-- Triggers `reservation`
--
DELIMITER $$
CREATE TRIGGER `tg_table1_insert` BEFORE INSERT ON `reservation` FOR EACH ROW BEGIN
  INSERT INTO table1_seque VALUES (NULL);
  SET NEW.Reservation_id = CONCAT('RE', LPAD(LAST_INSERT_ID(), 3, '0'));
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `table1_model`
--

CREATE TABLE `table1_model` (
  `MODEL_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table1_model`
--

INSERT INTO `table1_model` (`MODEL_ID`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `table1_rentalagreement`
--

CREATE TABLE `table1_rentalagreement` (
  `Rental_agreement_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table1_rentalagreement`
--

INSERT INTO `table1_rentalagreement` (`Rental_agreement_id`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `table1_seque`
--

CREATE TABLE `table1_seque` (
  `Reservation_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table1_seque`
--

INSERT INTO `table1_seque` (`Reservation_id`) VALUES
(1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`VIN`),
  ADD KEY `model_id` (`model_id`),
  ADD KEY `model_id_2` (`model_id`),
  ADD KEY `location_id` (`location_id`,`model_id`),
  ADD KEY `location_id_2` (`location_id`,`model_id`),
  ADD KEY `location_id_3` (`location_id`,`model_id`);

--
-- Indexes for table `car_class`
--
ALTER TABLE `car_class`
  ADD PRIMARY KEY (`CLASS_TYPE`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Customer_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`MODEL_ID`),
  ADD KEY `CLASS_TYPE` (`CLASS_TYPE`);

--
-- Indexes for table `rental_agreement`
--
ALTER TABLE `rental_agreement`
  ADD PRIMARY KEY (`Rental_agreement_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`Reservation_id`);

--
-- Indexes for table `table1_model`
--
ALTER TABLE `table1_model`
  ADD PRIMARY KEY (`MODEL_ID`);

--
-- Indexes for table `table1_rentalagreement`
--
ALTER TABLE `table1_rentalagreement`
  ADD PRIMARY KEY (`Rental_agreement_id`);

--
-- Indexes for table `table1_seque`
--
ALTER TABLE `table1_seque`
  ADD PRIMARY KEY (`Reservation_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table1_model`
--
ALTER TABLE `table1_model`
  MODIFY `MODEL_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table1_rentalagreement`
--
ALTER TABLE `table1_rentalagreement`
  MODIFY `Rental_agreement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `table1_seque`
--
ALTER TABLE `table1_seque`
  MODIFY `Reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `car`
--
ALTER TABLE `car`
  ADD CONSTRAINT `car_ibfk_1` FOREIGN KEY (`location_id`) REFERENCES `location` (`location_id`),
  ADD CONSTRAINT `car_ibfk_2` FOREIGN KEY (`model_id`) REFERENCES `model` (`MODEL_ID`);

--
-- Constraints for table `model`
--
ALTER TABLE `model`
  ADD CONSTRAINT `model_ibfk_1` FOREIGN KEY (`CLASS_TYPE`) REFERENCES `car_class` (`CLASS_TYPE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
