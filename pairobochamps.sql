-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2024 at 02:47 PM
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
-- Database: `pairobochamps`
--

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `id` int(11) NOT NULL,
  `school_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `std` varchar(10) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`id`, `school_id`, `name`, `std`, `contact_no`, `created_at`) VALUES
(1, 1, 'Noah Goodman', 'Vero in si', 'Doloremque volu', '2024-09-26 09:18:40'),
(2, 1, 'Destiny Peters', 'Sint volup', 'At molestias ut', '2024-09-26 09:18:40'),
(3, 1, 'Reese Coffey', 'Asperiores', 'Illo accusantiu', '2024-09-26 09:18:40'),
(4, 1, 'Paul Salas', 'Nisi nemo ', 'Atque in quis i', '2024-09-26 09:18:40'),
(5, 1, 'Tamara Justice', 'Minus dolo', 'Excepteur liber', '2024-09-26 09:18:40'),
(6, 2, 'Tara Pittman', 'Similique ', 'Voluptate modi ', '2024-09-26 10:35:22'),
(7, 2, 'Ingrid Summers', 'Nobis veli', 'Nisi perferendi', '2024-09-26 10:35:22'),
(8, 2, 'Ingrid Atkins', 'Sit volupt', 'Porro velit bla', '2024-09-26 10:35:22'),
(9, 2, 'Tashya Strickland', 'Nisi aut c', 'Error id fugiat', '2024-09-26 10:35:22'),
(10, 2, 'Ciara Raymond', 'Ullam nece', 'In provident ex', '2024-09-26 10:35:22'),
(11, 3, 'Yvette Bradley', 'Sunt ut ne', 'Suscipit id sim', '2024-09-26 10:35:49'),
(12, 3, 'Justine Avila', 'Nostrum lo', 'Veritatis aut a', '2024-09-26 10:35:49'),
(13, 3, 'Rana Kirk', 'Deserunt n', 'Labore consequa', '2024-09-26 10:35:49'),
(14, 3, 'Armando Jenkins', 'Magnam dol', 'Ut est omnis qu', '2024-09-26 10:35:49'),
(15, 3, 'Christen Odom', 'Cupiditate', 'Vero qui est ne', '2024-09-26 10:35:49'),
(16, 4, 'Nauman Inamdar', '12', '9876543215', '2024-09-26 11:09:20'),
(17, 4, 'Aman', '12', '9876543215', '2024-09-26 11:09:20'),
(18, 4, 'Gahim', '12', '3216549875', '2024-09-26 11:09:20'),
(19, 4, 'Saikishor', '12', '9876543215', '2024-09-26 11:09:20'),
(20, 4, 'Amin', '12', '987654321', '2024-09-26 11:09:20'),
(21, 5, 'Fritz Simmons', 'Sed ut atq', 'Quis magna repr', '2024-09-26 11:15:14'),
(22, 5, 'Todd Villarreal', 'Omnis maxi', 'Enim iste sint ', '2024-09-26 11:15:14'),
(23, 5, 'Jenna Baldwin', 'Non repell', 'In atque minus ', '2024-09-26 11:15:14'),
(24, 5, 'Brooke Sampson', 'Nisi et es', 'Consequatur Qui', '2024-09-26 11:15:14'),
(25, 5, 'Xavier Schwartz', 'Inventore ', 'Et aut repellen', '2024-09-26 11:15:14'),
(26, 6, 'Nauman Inamdar', '12', '9876543215', '2024-09-26 11:47:31'),
(27, 6, 'Aman', '12', '9876543215', '2024-09-26 11:47:31'),
(28, 6, 'Gahim', '12', '3216549875', '2024-09-26 11:47:31'),
(29, 6, 'Saikishor', '12', '9876543215', '2024-09-26 11:47:31'),
(30, 6, 'Amin', '12', '987654321', '2024-09-26 11:47:31'),
(31, 7, 'Virginia Mcknight', 'Similique ', 'Aliquip harum n', '2024-09-26 11:50:23'),
(32, 7, 'Tanisha Best', 'Deserunt e', 'Doloremque corp', '2024-09-26 11:50:23'),
(33, 7, 'Hilel Hodges', 'Dolore mol', 'Dicta quaerat e', '2024-09-26 11:50:23'),
(34, 7, 'Noel Marquez', 'Maiores cu', 'Eum et culpa qu', '2024-09-26 11:50:23'),
(35, 7, 'Ayanna Head', 'Veniam fug', 'Qui pariatur Au', '2024-09-26 11:50:23'),
(36, 8, 'Lawrence Fitzgerald', 'Voluptates', 'Quae ut eos sed', '2024-09-26 11:50:58'),
(37, 8, 'Asher Jacobs', 'Aut deseru', 'Id do dolore in', '2024-09-26 11:50:58'),
(38, 8, 'Quemby Conley', 'Quia nostr', 'Sed sed aut ali', '2024-09-26 11:50:58'),
(39, 8, 'Ashely Patterson', 'Consectetu', 'Tempor mollit e', '2024-09-26 11:50:58'),
(40, 8, 'Shelley Black', 'Iste proid', 'Amet qui repreh', '2024-09-26 11:50:58'),
(41, 9, 'Sylvia Schultz', 'Exercitati', 'Magna quibusdam', '2024-09-26 12:28:01'),
(42, 9, 'Philip Garner', 'Qui vitae ', 'Sed sit ex accu', '2024-09-26 12:28:01'),
(43, 9, 'Remedios Forbes', 'Corporis a', 'Labore et perfe', '2024-09-26 12:28:01'),
(44, 9, 'Fitzgerald Sweeney', 'Cum Nam of', 'Aliquid consequ', '2024-09-26 12:28:01'),
(45, 9, 'Sade Pollard', 'Incidunt n', 'Maiores commodo', '2024-09-26 12:28:01'),
(46, 12, 'Dominique Mcconnell', 'Modi in ni', 'Ex tempore aliq', '2024-09-26 12:35:30'),
(47, 12, 'Lysandra Chaney', 'Mollitia e', 'Aliqua Sit nequ', '2024-09-26 12:35:30'),
(48, 12, 'Martina Schmidt', 'Esse et au', 'Amet rerum volu', '2024-09-26 12:35:30'),
(49, 12, 'Leo Yates', 'Et Nam duc', 'Assumenda fugit', '2024-09-26 12:35:30'),
(50, 12, 'Sylvia Alexander', 'Nobis reru', 'Qui quae animi ', '2024-09-26 12:35:30'),
(51, 13, 'Darryl Sullivan', 'Tenetur id', 'Eu minima bland', '2024-09-26 12:37:33'),
(52, 13, 'Liberty Stephenson', 'Sed ut nul', 'Earum quo dicta', '2024-09-26 12:37:33'),
(53, 13, 'Halla Landry', 'Enim tempo', 'Cumque qui magn', '2024-09-26 12:37:33'),
(54, 13, 'Amal Callahan', 'At sint ve', 'Quis magni repr', '2024-09-26 12:37:33'),
(55, 13, 'Wynne Crosby', 'Est cupidi', 'Ratione ea culp', '2024-09-26 12:37:33'),
(56, 14, 'Wilma Banks', 'Nostrum qu', 'Adipisicing deb', '2024-09-26 12:39:57'),
(57, 14, 'Price Armstrong', 'Maxime et ', 'Enim eaque veli', '2024-09-26 12:39:57'),
(58, 14, 'Theodore Farley', 'Sed quia o', 'Quia repellendu', '2024-09-26 12:39:57'),
(59, 14, 'Rae Avila', 'Voluptatib', 'Voluptatem nesc', '2024-09-26 12:39:57'),
(60, 14, 'Hillary Rosales', 'Magnam ad ', 'Aperiam qui occ', '2024-09-26 12:39:57'),
(61, 15, 'Rae Rogers', 'Qui tempor', 'Beatae a itaque', '2024-09-26 12:40:57'),
(62, 15, 'Akeem Hodges', 'Laboris si', 'Sed placeat sin', '2024-09-26 12:40:57'),
(63, 15, 'Indira Golden', 'Ut id amet', 'Molestias persp', '2024-09-26 12:40:57'),
(64, 15, 'Imogene Luna', 'Quisquam e', 'Unde lorem nequ', '2024-09-26 12:40:57'),
(65, 15, 'Barry Hutchinson', 'Et minima ', 'Deserunt praese', '2024-09-26 12:40:57');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `school_name` varchar(255) NOT NULL,
  `principal_name` varchar(255) NOT NULL,
  `school_address` text NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `mobile_no` varchar(15) NOT NULL,
  `school_telephone` varchar(15) DEFAULT NULL,
  `mentor_name` varchar(255) NOT NULL,
  `mentor_contact` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `school_name`, `principal_name`, `school_address`, `contact_no`, `mobile_no`, `school_telephone`, `mentor_name`, `mentor_contact`, `created_at`) VALUES
(1, 'Cathleen Soto', 'Willow Goodman', 'Ipsam vitae nostrum ', 'Velit ex repreh', 'Vero molestias ', '+1 (462) 133-59', 'Ocean Christensen', 'Aut sint volupt', '2024-09-26 09:18:40'),
(2, 'Tatum Daniel', 'Sonya Stone', 'Ut enim odit ab numq', 'Architecto sed ', 'Eu corporis rem', '+1 (173) 491-37', 'Kylee Castaneda', 'Eos sint deseru', '2024-09-26 10:35:22'),
(3, 'Brent Horn', 'Ezra Shannon', 'Dolore eaque exercit', 'Facere dignissi', 'Iure quos archi', '+1 (933) 708-62', 'Celeste Barker', 'Labore tempora ', '2024-09-26 10:35:49'),
(4, 'AUBHS', 'RAJ ', 'AZAM CAMPUS', '9876543215', '9876543215', '9876543215', 'Rameez Shaikh', '9876543215', '2024-09-26 11:09:20'),
(5, 'Marvin Sexton', 'Priscilla Vazquez', 'Qui pariatur Porro ', 'Culpa ut conseq', 'Commodi porro s', '+1 (311) 263-51', 'Grady Duncan', 'Sed labore fuga', '2024-09-26 11:15:14'),
(6, 'AUBHS', 'RAJ ', 'AZAM CAMPUS', '9876543215', '9876543215', '9876543215', 'Rameez Shaikh', '9876543215', '2024-09-26 11:47:31'),
(7, 'Brenden Mckay', 'Madison Hays', 'Enim Nam nihil sit i', 'Facere laborum ', 'Animi nulla rep', '+1 (647) 661-13', 'Oliver Romero', 'Ea libero omnis', '2024-09-26 11:50:23'),
(8, 'Marcia Dalton', 'Aubrey Murray', 'Non quibusdam qui ip', 'Molestiae commo', 'Omnis asperiore', '+1 (881) 583-85', 'Elaine Franklin', 'Quis quia est o', '2024-09-26 11:50:58'),
(9, 'Zorita Sosa', 'Isaiah Roach', 'Accusamus nemo qui e', 'Nulla molestiae', 'Tempor temporib', '+1 (976) 718-70', 'Peter Reilly', 'Quasi esse accu', '2024-09-26 12:28:01'),
(10, 'Leroy Contreras', 'Chaney Barnett', 'Commodo quasi sit q', 'Voluptate ut ma', 'Id aut in ut qu', NULL, '', '', '2024-09-26 12:34:25'),
(11, 'Maya Freeman', 'Amity Huffman', 'Quia consequatur Do', 'Qui ullam porro', 'Ullamco dolorem', NULL, '', '', '2024-09-26 12:34:33'),
(12, 'Odette Patton', 'Clio Harrell', 'Vel quos in recusand', 'Ut voluptatum n', 'Sit fugiat sunt', '+1 (421) 715-46', 'Veronica Owens', 'Consequatur cor', '2024-09-26 12:35:30'),
(13, 'Curran Long', 'Jameson Frost', 'Praesentium eos odit', 'Vitae amet cons', 'Enim ipsum cill', '+1 (397) 995-87', 'Jamal Mcfadden', 'Fugiat consequa', '2024-09-26 12:37:33'),
(14, 'Jackson Hull', 'Sage Delacruz', 'Delectus do et mole', 'Reprehenderit s', 'Consequuntur ad', '+1 (771) 107-77', 'Oscar Bolton', 'Aliquam nulla o', '2024-09-26 12:39:57'),
(15, 'Kaden Vaughan', 'Cole Stone', 'Natus pariatur Laud', 'Voluptate tempo', 'Nobis unde ut a', '+1 (344) 788-23', 'Brian Osborn', 'Architecto veri', '2024-09-26 12:40:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `school_id` (`school_id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `participants`
--
ALTER TABLE `participants`
  ADD CONSTRAINT `participants_ibfk_1` FOREIGN KEY (`school_id`) REFERENCES `schools` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
