
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `drug_id` varchar(15) NOT NULL,
  `drug_name` varchar(50) NOT NULL,
  `drug_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE `drug_order` (
  `name` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `drug` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `delivery_addr` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drug_order`
--

INSERT INTO `drug_order` (`name`, `email`, `phone`, `drug`, `quantity`, `delivery_addr`) VALUES
('Raphael Wright Agbedanu', 'raphaelwright2003@gmail.com', '+233555083859', 'apetamin', 5, 'Gh574589'),
('sarah', 'raphaelwright2003@gmail.com', '+233555083859', 'fjhsdjms', 46, 'PO BOX NB 813'),
('tracy', 'raphaelwright2003@gmail.com', '+233555083859', 'apetamin', 223, 'PO BOX NB 813');


ALTER TABLE `drugs`
  ADD PRIMARY KEY (`drug_id`);

--
-- Indexes for table `drug_order`
--
ALTER TABLE `drug_order`
  ADD PRIMARY KEY (`name`);
COMMIT;

