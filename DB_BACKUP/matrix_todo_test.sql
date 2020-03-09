-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2020 at 03:23 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matrix_todo_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(256) NOT NULL,
  `article` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `type`, `article`, `status`, `updated_at`, `created_at`) VALUES
(1, 'Refactoring Web Services', 'Task', 'text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,', 1, '2020-03-09 14:46:19', '2020-03-09 14:46:19'),
(2, 'WordPress Landing Pages', 'Feature', 'sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first li', 1, '2020-03-09 14:46:19', '2020-03-09 14:46:19'),
(3, 'EU none EU Project', 'Task', 'over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney Co', 1, '2020-03-09 14:46:19', '2020-03-09 14:46:19'),
(4, 'CSS- match height', 'Bug', ' the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore alway', 1, '2020-03-09 14:46:19', '2020-03-09 14:46:19'),
(5, 'QR at home page dosent work', 'Bug', ' opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors n', 0, '2020-03-09 14:46:19', '2020-03-09 14:46:19'),
(6, 'Don\'t forget to eat', 'Task', 'roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through ', 1, '2020-03-09 14:46:19', '2020-03-09 14:46:19'),
(7, 'Build user system', 'Bug', 'f you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of ', 0, '2020-03-09 14:46:19', '2020-03-09 14:46:19'),
(8, 'New Site Footer', 'Task', 'ontent of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a se', 0, '2020-03-09 14:46:19', '2020-03-09 14:46:19'),
(9, 'Change site logo', 'Feature', 'ce the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essen', 1, '2020-03-09 14:46:19', '2020-03-09 14:46:19'),
(10, 'Testing', 'Bug', 'long text long text long text long text long text long text long text long text long text', 1, '2020-03-09 14:46:19', '2020-03-09 14:46:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `tasks` ADD FULLTEXT KEY `article` (`article`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
