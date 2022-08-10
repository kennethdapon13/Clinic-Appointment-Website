-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2022 at 01:48 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appointment_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(256) NOT NULL,
  `admin_password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_username`, `admin_password`) VALUES
(1, 'Admin', 'admin123'),
(2, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` bigint(20) NOT NULL,
  `patientname` varchar(100) NOT NULL,
  `patientnumber` bigint(100) NOT NULL,
  `patientemail` varchar(100) NOT NULL,
  `appointmentdate` varchar(100) NOT NULL,
  `appointmenttime` time NOT NULL,
  `appointmentreason` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `patientname`, `patientnumber`, `patientemail`, `appointmentdate`, `appointmenttime`, `appointmentreason`, `date`) VALUES
(1, 'John dela Cruz', 9183049586, 'johndc@gmail.com', '01/05/22 ', '08:30:00', 'I have allergies', '2022-02-12 18:03:52'),
(2, 'Mary Santos', 9094756192, 'santos_mary@gmail.com', '02/14/22 ', '18:00:00', 'until now I still have a cold. It\'s been 2 weeks.', '2022-02-12 04:26:04'),
(3, 'William Reyes', 9274563857, 'williamreyes@gmail.com', '02/17/22', '15:00:00', 'eye irritation', '2022-02-12 11:23:38'),
(4, 'Elizabeth Mendoza', 945675832, 'elizaaj@gmail.com', '02/23/22', '12:30:00', 'Every morning I woke up with dizziness, headache, and facial pain.', '2022-02-12 15:47:46'),
(5, 'James Lopez', 9685748321, 'jlopez12@gmail.com', '03/01/22', '09:30:00', 'diarrhea', '2022-02-12 15:22:26'),
(6, 'Martha David', 9874563214, 'martha_david@gmail.com', '02/27/22', '11:00:00', 'itchy throat', '2022-02-12 15:47:31'),
(7, 'George Garcia', 9047856288, '1georgegi@gmail.com', '03/05/22', '13:00:00', 'sore eyes', '2022-02-12 15:49:23'),
(8, 'Margaret Flores', 9014785629, 'msfloresm@gmail.com', '03/10/22', '10:30:00', 'flu', '2022-02-12 15:50:04'),
(9, 'Richard Bautista', 9078542146, 'bautista_rich@gmail.com', '03/07/22', '09:00:00', 'I am experiencing stomach ache for a week', '2022-02-20 11:37:39'),
(10, 'Carl Perez', 9057863215, 'cperezz@gmail.com', '03/15/22', '14:00:00', 'skin rashes', '2022-02-20 11:37:51');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` bigint(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `contactname` varchar(100) NOT NULL,
  `contactemail` varchar(100) NOT NULL,
  `contactinquiry` varchar(200) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `user_id`, `contactname`, `contactemail`, `contactinquiry`, `date`) VALUES
(6, 10, 'Marielle Juat', 'juatmarielle@gmail.com', 'Hello! I just want to thank you for the good service.', '2022-02-12'),
(8, 0, 'Julia What', 'whatjulia@gmail.com', 'Thank you so much.', '2022-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `medicine_id` int(11) NOT NULL,
  `medicine_name` varchar(256) NOT NULL,
  `medicine_price` varchar(256) NOT NULL,
  `medicine_quantity` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`medicine_id`, `medicine_name`, `medicine_price`, `medicine_quantity`) VALUES
(1, 'Abacavir 300 mg tablet', '15.35', '49'),
(2, 'Acetazolamide 250 mg  Tablet', '13.33', '127'),
(3, 'Acetylcysteine 100 mg Sachet', '8.00', '99'),
(4, 'Acetylcysteine 100 mg/mL, 3 mL Ampule', '107.93', '83'),
(5, 'Acetylcysteine 200 mg Sachet', '8.50', '112'),
(6, 'Acetylcysteine 200 mg/mL, 25 mL Bottle', '1,280.00', '30'),
(7, 'Acetylcysteine 600 mg Effervescent Tablet', '18.90', '77'),
(8, 'Aciclovir 200 mg Tablet', '3.79', '103'),
(9, 'Aciclovir 25 mg/mL, 10 mL Vial', '826.89', '51'),
(10, 'Aciclovir 400 mg Tablet', '11.15', '98'),
(11, 'Aciclovir 800 mg Tablet', '38.38', '64'),
(12, 'Adenosine 3 mg/mL, 2 mL Vial', '221.31', '57'),
(13, 'Albendazole 400 mg chewable tablet', '1.04', '149'),
(14, 'Albumin, Human 20%, 100 mL Bottle', '1,880.00', '23'),
(15, 'Albumin, Human 20%, 50 mL Bottle', '1,648.00', '33'),
(16, 'Albumin, Human 25%, 50 mL Bottle', '2,400.00', '15'),
(17, 'Alcohol, Ethyl 70% solution, 500 mL Bottle', '48.90', '138'),
(18, 'Alendronate Sodium 70 mg Tablet', '125.00', '81'),
(19, 'Alfuzosin 10 mg Tablet', '30.00', '104'),
(20, 'All-in-One Admixtures (\"3-in-1\" or \"dual energy\" solutions) \"3 in 1\" 1000 Kcal Bottle', '2,100.00', '26'),
(21, 'All-in-One Admixtures (\"3-in-1\" or \"dual energy\" solutions) \"3 in 1\" 1300 Kcal Bottle', '2,149.00', '26'),
(22, 'All-in-One Admixtures (\"3-in-1\" or \"dual energy\" solutions) \"3 in 1\" 1400 Kcal Bottle', '1,849.00', '27'),
(23, 'All-in-One Admixtures (\"3-in-1\" or \"dual energy\" solutions) \"3 in 1\" 1900 Kcal Bottle', '2,375.00', '13'),
(24, 'Allopurinol 100 mg Tablet', '1.61', '168'),
(25, 'Allopurinol 300 mg Tablet', '2.00', '145'),
(26, 'Alprazolam 250 mcg Tablet', '4.50', '116'),
(27, 'Allopurinol 500mg Tablet', '15.75', '99'),
(28, 'Aluminum Hydroxide + Magnesium Hydroxide 200 mg + 100 mg Tablet', '1.10', '187'),
(29, 'Aluminum Hydroxide + Magnesium Hydroxide 225 mg + 200 mg/5 mL, 120 mL\r\nSuspension', '30.70', '72'),
(30, 'Aluminum Hydroxide + Magnesium\r\nHydroxide 225 mg + 200 mg/5 mL, 60 mL Suspension', '28.20', '84'),
(31, 'Amikacin (as Sulfate) 100 mg powder Vial', '15.50', '93'),
(32, 'Amikacin (as Sulfate) 125 mg/mL, 2 mL Ampule', '34.89', '75'),
(33, 'Amikacin (as Sulfate) 125 mg/mL, 2 mL Vial', '21.34', '89'),
(34, 'Amikacin (as Sulfate) 250 mg/mL, 2 mL Ampule', '43.33', '62'),
(35, 'Amikacin (as Sulfate) 250 mg/mL, 2 mL Vial', '30.74', '78'),
(36, 'Amikacin (as Sulfate) 50 mg/mL, 2 mL Ampule', '18.30', '89'),
(37, 'Amikacin (as Sulfate) 50 mg/ml, 2 ml Vial', '20.38', '77'),
(38, 'Amino acid + glucose + electrolytes + vitamin B1 1 L Solution', '844.00', '23'),
(39, 'Amino acid + glucose + electrolytes + vitamin B1 500 mL Solution', '564.00', '40'),
(40, 'Amino Acid Solutions for Hepatic Failure 8%, 500 mL Bottle', '485.65', '41'),
(41, 'Amino Acid Solutions for Infants 6%, 100 mL Bottle', '359.00', '56'),
(42, 'Amino Acid Solutions for Renal Conditions 7%, 500 mL Bottle', '392.00', '52'),
(43, 'Amino Acids, Crystalline Standard 10%, 500 mL Plastic Bottle', '730.00', '18'),
(44, 'Amino Acids, Crystalline Standard 8%, 500 mL Plastic Bottle', '506.00', '29'),
(45, 'Amino Acids, Crystalline Standard 9.12%, 20 mL Ampule', '119.10', '35'),
(46, 'Aminophylline 25 mg/mL, 10 mL Ampule', '19.23', '90'),
(47, 'Amiodarone 200 mg Tablet', '16.28', '127'),
(48, 'Amiodarone 50 mg/mL, 3 mL Ampule', '200', '54'),
(49, 'Amlodipine 10 mg Tablet', '0.53', '200'),
(50, 'Amlodipine 5 mg Tablet', '0.39', '200'),
(51, 'Amoxicillin 100 mg/mL, 15 mL Drops', '19.80', '167'),
(52, 'Amoxicillin 250 mg Capsule', '1.06', '193'),
(53, 'Amoxicillin 250 mg/5 mL, 60 mL Suspension', '20.48', '95'),
(54, 'Amoxicillin 500 mg Capsule', '1.28', '176'),
(55, 'Amphotericin B (Lipid Complex) 50 mg  Vial', '9,975.00', '4'),
(56, 'Amphotericin B (Non-Lipid Complex) 50 mg Vial', '988.00', '20'),
(57, 'Ampicillin + Sulbactam 1.5 g Vial', '58.17', '71'),
(58, 'Ampicillin + Sulbactam 500mg + 250 mg Vial', '21.14', '95'),
(59, 'Ampicillin 1 g Vial', '11.19', '102'),
(60, 'Ampicillin 250 mg Vial', '8.93', '113'),
(61, 'Ampicillin 500 mg Vial', '8.21', '119'),
(62, 'Anastrazole 1 mg Film coated tablet', '49.00', '70'),
(63, 'Aripiprazole 10 mg Orally Disintegrating Tablet', '196.80', '34'),
(64, 'Aripiprazole 10 mg Tablet', '56.00', '67'),
(65, 'Aripiprazole 15 mg Tablet', '99.00', '45'),
(66, 'Ascorbic Acid (Vitamin C) 100 mg/5 mL, 120 mL Syrup', '28.00', '198'),
(67, 'Ascorbic Acid (Vitamin C) 100 mg/5 mL, 60 mL Syrup', '20.14', '200'),
(68, 'Ascorbic Acid (Vitamin C) 100 mg/ml, 15 mL Oral Drops', '17.50', '200'),
(69, 'Ascorbic Acid (Vitamin C) 250 mg/mL, 2 mL Ampule', '28.19', '183'),
(70, 'Ascorbic Acid (Vitamin C) 500 mg Tablet', '0.80', '222'),
(71, 'Asparaginase 10,000 IU Vial', '1,140.00', '16'),
(72, 'Aspirin 80 mg Tablet', '0.65', '245'),
(73, 'Atenolol 50 mg Tablet', '1.79', '194'),
(74, 'Atorvastatin 10 mg Tablet', '4.86', '79'),
(75, 'Atorvastatin 20 mg Tablet', '4.98', '78'),
(76, 'Atorvastatin 40 mg Tablet', '9.24', '67'),
(77, 'Atorvastatin 80 mg Tablet', '19.18', '53'),
(78, 'Atracurium 10 mg/mL, 2.5 mL Ampule', '77.84', '48'),
(79, 'Atropine 1 mg/mL, 1 mL Ampule', '10.38', '70'),
(80, 'Azathioprine 50 mg tablet', '34.30', '59'),
(81, 'Azithromycin 200 mg/5 mL, 15 mL\r\nSuspension', '230.00', '21'),
(82, 'Azithromycin 500 mg Tablet', '8.98', '84'),
(83, 'Azithromycin 500 mg Vial', '322.00', '12'),
(84, 'Aztreonam 1 g Powder', '1,244.00', '5'),
(85, 'Baclofen 10 mg Tablet', '13.80', '63'),
(86, 'Basiliximab 20 mg vial', '53,969.49', '1'),
(87, 'Beractant 25 mg/mL, 4 mL Vial', '10,073.00', '3'),
(88, 'Beractant 25 mg/mL, 8 mL Vial', '14,086.00', '2'),
(89, 'Betahistine 16 mg Tablet', '11.00', '76'),
(90, 'Betahistine 24 mg Tablet', '30.00', '48'),
(91, 'Betahistine 8 mg Tablet', '9.00', '90'),
(92, 'Betamethasone Cream 0.05%, 5 g Tube', '41.74', '27'),
(93, 'Betamethasone Cream 0.1%, 5 g Tube', '41.50', '28'),
(94, 'Betamethasone Ointment 0.1%, 5 g Tube', '41.74', '25'),
(95, 'Bicalutamide 50 mg film-coated tablet', '30.00', '49'),
(96, 'Biperiden Hydrochloride 2 mg Tablet', '4.73', '101'),
(97, 'Bisacodyl 10 mg Suppository', '19.43', '64'),
(98, 'Bisacodyl 5 mg Suppository', '1.54', '113'),
(99, 'Bisacodyl 5 mg Tablet', '1.78', '102'),
(100, 'Bisoprolol 5 mg Tablet', '13.50', '50'),
(101, 'Bleomycin (as Sulfate) 15 IU Vial amp/vial', '950.00', '11'),
(102, 'Bromocriptine 2.5 mg tablet', '78.47', '27'),
(103, 'Budesonide + Formoterol 160 mcg + 4.5 mcg x 120 doses Metered Dose Inhaler', '651.14', '6'),
(104, 'Budesonide + Formoterol 160 mcg + 4.5 mcg x 60 doses Dry Powder Inhaler', '834.44', '5'),
(105, 'Budesonide + Formoterol 320 mcg + 9 mcg x 60 doses Dry Powder Inhaler', '1,533.54', '4'),
(106, 'Budesonide + Formoterol 80 mcg + 4.5 mcg x 120 doses Dry Powder Inhaler', '523.96', '10'),
(107, 'Budesonide 250 mcg/mL, 2 mL Respiratory Solution (Nebule)', '35.00', '53'),
(108, 'Bumetanide 1 mg tablet', '14.55', '86'),
(109, 'Bupivacaine 0.5%, 10 mL Ampule', '93.04', '19'),
(110, 'Bupivacaine 0.5%, 10 mL Vial', '91.23', '25'),
(111, 'Bupivacaine 0.5%, 4 mL (spinal) with 8% Dextrose (as hydrochloride) Ampule', '109.00', '12'),
(112, 'Bupivacaine 0.5%, 5 mL Ampule', '92.33\n', '21'),
(113, 'Butamirate Citrate 50mg MR Tablet', '12.50', '93'),
(114, 'Butorphanol (as Tartrate) 2 mg/mL, 1 mL Ampule', '454.02', '7'),
(115, 'Calcipotriol + Betamethasone 50 mcg + 500 mcg/g, 30 g tube', '1,221.36', '4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `number` bigint(100) NOT NULL,
  `birthdate` varchar(100) NOT NULL,
  `gender` enum('f','m') NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `fullname`, `number`, `birthdate`, `gender`, `date`) VALUES
(10, 8913874722236026, 'juatmarielle@gmail.com', 'admin1', 'Marielle Juat', 9123456789, '12/13/2001', 'f', '2022-02-12 04:23:07'),
(11, 17971049255563, 'juliajuat@gmail.com', 'admin2', 'Julia Juat', 9123456789, '12/13/2001', 'f', '2022-02-12 11:19:53'),
(12, 743, 'q', 'q', 'q', 0, 'q', 'f', '2022-02-12 15:14:17'),
(13, 6226, 'qwerty@gmail.com', 'qwerty', 'Qwerty', 9123456789, '01/26/2022', 'm', '2022-02-12 18:03:18'),
(16, 9223372036854775807, 'testing@gmail.com', 'testing123', 'Test Ing', 9123456789, '02/22/2222', 'f', '2022-02-22 17:34:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`medicine_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `date` (`date`),
  ADD KEY `email` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `medicine_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
