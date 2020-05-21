-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2020 at 10:45 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dem`
--

-- --------------------------------------------------------

--
-- Table structure for table `a_users`
--

CREATE TABLE `a_users` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(128) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `a_users`
--

INSERT INTO `a_users` (`id`, `nama`, `username`, `password`, `email`) VALUES
(2, 'admin', 'admin', '$2y$10$toaEltZHAPB7y.5LLaSc6.gMCIunisZKR2qZo/pHK8KvhFe4tLDI6', 'admin@gmial.com');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start_date` varchar(12) NOT NULL,
  `end_date` varchar(12) NOT NULL,
  `created_date` varchar(12) NOT NULL,
  `modified_date` varchar(12) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `start_date`, `end_date`, `created_date`, `modified_date`, `status`) VALUES
(1, 'Pergi berburu ali hidayat', '1590091850', '1590091850', '1590091850', '1590091850', 1),
(2, 'Event 2', '1575457201', '1575457201', '1575457201', '1575457201', 1),
(3, 'Event 3', '1575537085', '1575537085', '1575537085', '1575537085', 1),
(4, 'Event 4', '1575709885', '1575709885', '1575709885', '1575709885', 1);

-- --------------------------------------------------------

--
-- Table structure for table `kategori_post`
--

CREATE TABLE `kategori_post` (
  `id` int(11) NOT NULL,
  `nama_kat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_post`
--

INSERT INTO `kategori_post` (`id`, `nama_kat`) VALUES
(2, 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `log_admin`
--

CREATE TABLE `log_admin` (
  `id_log` int(11) NOT NULL,
  `ip` text NOT NULL,
  `id_admin` int(11) NOT NULL,
  `waktu` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_admin`
--

INSERT INTO `log_admin` (`id_log`, `ip`, `id_admin`, `waktu`, `status`) VALUES
(1, '::1', 2, '2020-05-21 10:44:52', 'Login Admin'),
(2, '::1', 2, '2020-05-21 10:45:54', 'Login Admin'),
(3, '::1', 2, '2020-05-21 10:46:36', 'Login Admin'),
(4, '::1', 2, '2020-05-21 10:47:48', 'Login Admin'),
(5, '::1', 2, '2020-05-21 13:49:16', 'Login Admin'),
(6, '::1', 2, '2020-05-21 13:49:30', 'Login Admin');

-- --------------------------------------------------------

--
-- Table structure for table `log_users`
--

CREATE TABLE `log_users` (
  `id_log_users` int(11) NOT NULL,
  `ip` text NOT NULL,
  `id_user` int(11) NOT NULL,
  `waktu` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_users`
--

INSERT INTO `log_users` (`id_log_users`, `ip`, `id_user`, `waktu`, `status`) VALUES
(1, '::1', 1, '2020-03-12', 'Normal user login'),
(2, '::1', 1, '2020-03-12 08:52:44', 'Normal user login'),
(3, '::1', 1, '2020-03-12 08:58:12', 'Normal user login'),
(4, '::1', 1, '2020-03-12 08:58:32', 'Normal user login'),
(5, '::1', 1, '2020-03-12 09:00:52', 'Normal user login'),
(6, '::1', 1, '2020-03-12 09:04:19', 'Normal user login'),
(7, '::1', 1, '2020-03-12 09:04:47', 'Normal user login'),
(8, '::1', 1, '2020-03-13 12:21:33', 'Normal user login'),
(9, '::1', 2, '2020-03-22 15:58:08', 'Normal user login');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `judul` text,
  `isi` text,
  `kategori` text NOT NULL,
  `waktu` text NOT NULL,
  `author` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id_post`, `judul`, `isi`, `kategori`, `waktu`, `author`) VALUES
(2, 'test', '<p>test</p>\n', '2', '2020-05-21 12:24:47', 2);

-- --------------------------------------------------------

--
-- Table structure for table `repo`
--

CREATE TABLE `repo` (
  `id_rep` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `abstract` text NOT NULL,
  `time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `repo_kategori`
--

CREATE TABLE `repo_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kat` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `repo_kategori`
--

INSERT INTO `repo_kategori` (`id_kategori`, `nama_kat`) VALUES
(1, 'Books'),
(2, 'Papers'),
(3, 'Talks'),
(4, 'Teaching Documents'),
(5, 'Drafts'),
(6, 'Thesis Chapter'),
(7, 'Books reviews'),
(8, 'Conference Persentations');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `password` varchar(128) NOT NULL,
  `full_name` text NOT NULL,
  `email` text NOT NULL,
  `status` enum('a','p','n') NOT NULL DEFAULT 'n',
  `verifikasi` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `password`, `full_name`, `email`, `status`, `verifikasi`) VALUES
(2, '$2y$10$l/p7cbHxdiKjwOc8.caErOXiQVCQOrYIghbwkGh5mKuuKYs26bvIG', 'Muhammad Bayhaqi Daulay', 'bayhaqi101@gmail.com', 'n', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `a_users`
--
ALTER TABLE `a_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_post`
--
ALTER TABLE `kategori_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_admin`
--
ALTER TABLE `log_admin`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `log_users`
--
ALTER TABLE `log_users`
  ADD PRIMARY KEY (`id_log_users`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `repo`
--
ALTER TABLE `repo`
  ADD PRIMARY KEY (`id_rep`);

--
-- Indexes for table `repo_kategori`
--
ALTER TABLE `repo_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `a_users`
--
ALTER TABLE `a_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori_post`
--
ALTER TABLE `kategori_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `log_admin`
--
ALTER TABLE `log_admin`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `log_users`
--
ALTER TABLE `log_users`
  MODIFY `id_log_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `repo`
--
ALTER TABLE `repo`
  MODIFY `id_rep` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `repo_kategori`
--
ALTER TABLE `repo_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
