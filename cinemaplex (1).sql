-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2023 at 05:54 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinemaplex`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'Maheesha', '$1$tHNCc65F$5rEHygpOW5aERz/3f6Onl/'),
(2, 'Dilma', '$1$6KQ4x10a$aSg0nbnhJyio0zRi1qSLO1');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `movie_name` varchar(200) DEFAULT NULL,
  `movie_date` varchar(100) DEFAULT NULL,
  `movie_time` varchar(100) DEFAULT NULL,
  `reserved_seats` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `movie_name`, `movie_date`, `movie_time`, `reserved_seats`) VALUES
(1, 'AFTER', '2023-11-03', '10:00 AM', 'A5,A6'),
(9, 'The nun', '2023-12-03', '04:00 PM', 'A6,B6'),
(10, 'The nun', '2023-12-03', '04:00 PM', 'B5,C5'),
(11, 'The nun', '2023-12-03', '04:00 PM', 'B5,C5'),
(12, 'The nun', '2023-12-03', '04:00 PM', 'B5,C5'),
(13, 'The nun', '2023-12-03', '04:00 PM', 'A6,B6'),
(14, 'The nun', '2023-12-03', '04:00 PM', 'C6,D6'),
(15, 'AFTER', '2023-11-01', '04.00 PM', 'A6,B6'),
(16, 'AFTER', '2023-11-01', '04.00 PM', 'A6,B6'),
(17, 'The nun', '2023-12-03', '04:00 PM', 'D7'),
(19, 'AFTER', '2023-11-03', '10:00 AM', 'C7'),
(20, 'The nun', '2023-11-08', '10.00 AM', 'B3,B4'),
(21, 'The nun', '2023-11-08', '10.00 AM', 'B3,B4'),
(22, 'AFTER', '2023-11-03', '10:00 AM', 'D2');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `movie_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `release_date` date NOT NULL,
  `genre` varchar(100) NOT NULL,
  `runtime` varchar(100) NOT NULL,
  `image_path` longblob DEFAULT NULL,
  `trailer` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`movie_id`, `title`, `description`, `release_date`, `genre`, `runtime`, `image_path`, `trailer`) VALUES
(1, 'AFTER', 'A young woman falls for a guy with a dark secret and the two embark on a rocky relationship. Based on the novel by Anna Todd', '2023-10-12', 'Romance', '1h 30m', 0x75706c6f6164732f61667465722e706e67, 'https://www.youtube.com/embed/baeusCkoMjU?si=0iVcpzEvqlfKKIXD'),
(2, 'THE NUN', 'A priest with a haunted past and a novice on the threshold of her final vows are sent by the Vatican to investigate the death of a young nun in Romania and confront a malevolent force in the form of a demonic nun.', '2023-10-13', 'Horrar', '1h 36m', 0x75706c6f6164732f6e756e2e706e67, 'https://www.youtube.com/embed/dV3mYMRifSk?si=ltx_mcFeTfDdzdz8'),
(3, 'KATHURU MITHURU', 'Kathuru Mithuru directed by Giriraj Kaushalya tells the tale of a friendship developed between a tailor and barber over a common tool.', '2023-10-08', 'Comedy', '1h 55m', 0x75706c6f6164732f6b6174687572752e706e67, 'https://www.youtube.com/embed/wP7zxSIkJOU?si=WdeFRbx6oKvUToVl'),
(4, 'JAWAN', 'A high-octane action thriller which outlines the emotional journey of a man who is set to rectify the wrongs in the society.', '2023-10-05', 'Action', '2h 45m', 0x75706c6f6164732f6a6177616e2e706e67, 'https://www.youtube.com/embed/sFZ95FH_iAw?si=v8sTH0CJatSvhYaY'),
(5, 'KEE', 'A man falls in love with a girl and tries to impress her. However, their life takes a serious turn when they fall victim to cyber-bullying.', '2023-10-31', 'Action', '2h 18m', 0x75706c6f6164732f6b65652e706e67, 'https://www.youtube.com/embed/iNVy6_9JqfA?si=f1a5tPomiMekMH2C'),
(6, 'ANNABELLA', 'A couple begins to experience terrifying supernatural occurrences involving a vintage doll shortly after their home is invaded by satanic cultists.', '2023-11-02', 'Horrar', '1h 38m', 0x75706c6f6164732f616e6562656c6c612e706e67, 'https://www.youtube.com/embed/KisPhy7T__Q?si=IqfRiYRZ3lOm6Yon'),
(7, 'JAILER', 'A retired jailer goes on a manhunt to find his son\'s killers. But the road leads him to a familiar, albeit a bit darker place. Can he emerge from this complex situation successfully?', '2023-11-01', 'Action', '2h 48m', 0x75706c6f6164732f6a61696c65722e706e67, 'https://www.youtube.com/embed/5VOnM0SPgB8?si=ea-aAUxOWTcDW6KT'),
(8, 'AVATAR', 'A young woman falls for a guy with a dark secret and the two embark on a rocky relationship. Based on the novel by Anna Todd.', '2023-10-30', 'Action', '3h 12m', 0x75706c6f6164732f6176617461722e706e67, 'https://www.youtube.com/embed/d9MyW72ELq0?si=VeYzogWFt7In66Iy'),
(9, 'SHREK', 'A mean lord exiles fairytale creatures to the swamp of a grumpy ogre, who must go on a quest and rescue a princess for the lord in order to get his land back.', '2023-11-01', 'Kids and Family Comedy', '1h 29m', 0x75706c6f6164732f73686572656b2e706e67, 'https://www.youtube.com/embed/enHYcGQAB9w?si=Sj2uOyI8nZPZuW2c'),
(10, 'BLACK ADAM', 'With the power of the gods stripped from him, Teth-Adam is on a quest to find both the magical word that will restore him as Black Adam and the one thing that has always kept his heart from turning completely black with rage—his deceased wife.', '2023-11-02', 'Action', '2h 5m', 0x75706c6f6164732f626c61636b2e706e67, 'https://www.youtube.com/embed/X0tOpBuYasI?si=oC372_5O6-SqKBmY'),
(11, 'fghj', 'ttt', '0000-00-00', 'dd', 'dd', 0x75706c6f6164732f61667265726e6577772e706e67, 'dd');

-- --------------------------------------------------------

--
-- Table structure for table `showtimes`
--

CREATE TABLE `showtimes` (
  `show_time_id` int(11) NOT NULL,
  `movie_id` int(11) DEFAULT NULL,
  `movie_name` varchar(200) NOT NULL,
  `start_time` varchar(200) NOT NULL,
  `movie_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `showtimes`
--

INSERT INTO `showtimes` (`show_time_id`, `movie_id`, `movie_name`, `start_time`, `movie_date`) VALUES
(1, 1, 'After', '10:00 AM', '2023-11-03'),
(2, 2, 'The nun', '10.00am', '2023-11-08'),
(3, 3, 'Kathuru Mithuru', '10:00 AM', '2023-11-01'),
(4, 4, 'Jawan', '04:00 PM', '2023-11-02'),
(5, 1, 'After', '04.00 PM', '2023-11-01'),
(6, 2, 'The nun', '04.00pm', '2023-11-09'),
(7, 5, 'Kee', '10.00am', '2023-11-07'),
(8, 5, 'Kee', '04.00pm', '2023-11-12'),
(9, 6, 'Annabella', '10.00am', '2023-11-17'),
(10, 6, 'Annabella', '04.00pm', '2023-11-18'),
(11, 6, 'Annabella', '10.00am', '2023-11-19'),
(12, 7, 'Jailer', '10.00am', '2023-11-20'),
(13, 7, 'Jailer', '10.00am', '2023-11-21'),
(14, 8, 'Avatar', '04.00pm', '2023-11-20'),
(15, 8, 'Avatar', '04.00pm', '2023-11-21'),
(16, 9, 'Shrek', '10.00pm', '2023-11-22'),
(17, 10, 'Black Adam', '10.00am', '2023-11-25'),
(18, 10, 'Black Adam', '10.00am', '2023-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(5, 'Thusitha', 'thusitha321kumara@gmail.com', '$2y$10$43DS38Yhjr1GoMsUN80rMODLp0cSRo3RSk0uGVgR8dFcS5HMh9XGq', '2023-10-24 16:57:11'),
(32, 'thanu', 'neee@gmail.com', '$2y$10$qmXlGKLpmch8JOmz69ItIOGo0eD5GUBTLW5wrui.dzE5DGUsz72FW', '2023-10-31 12:27:13'),
(33, 'thenu', 'thenu@gmail.com', '$2y$10$oExkvdy7iwgB2dqoFvP.JuW8DjK2v2bqxQ8ZF2tZQWM4956EbM0GO', '2023-10-31 14:11:07');

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
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `showtimes`
--
ALTER TABLE `showtimes`
  ADD PRIMARY KEY (`show_time_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

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
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `showtimes`
--
ALTER TABLE `showtimes`
  MODIFY `show_time_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
