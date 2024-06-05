-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 30 juin 2023 à 22:20
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `crud_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `booking_name` varchar(30) NOT NULL,
  `booking_age` int(11) NOT NULL,
  `booking_date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `phone` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comment` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `comment`) VALUES
(1, 'Lam Maurice', 'maurice@yh.fr', 'Hello World'),
(2, 'Kevin Bilong', 'kevbi@hh.cs', 'Please how do i go about all this?'),
(3, 'Ngan Dav', 'dav@lp.com', ' Beautiful Site'),
(5, 'atango', 'atango@yh.bh', 'Ynok ionjvjunjnjvnugmujx'),
(6, 'Jeffery', 'itsme2334@gmail.com', 'Please how do i get an appointment with your manager??'),
(7, '..', 'jzv@ouh.jh', 'kjhgdsfghjkl;kjhgfd');

-- --------------------------------------------------------

--
-- Structure de la table `corp_db`
--

CREATE TABLE `corp_db` (
  `corp_id` int(11) NOT NULL,
  `f_name` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `l_name` varchar(20) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `A_date` date NOT NULL,
  `D_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `corp_db`
--

INSERT INTO `corp_db` (`corp_id`, `f_name`, `l_name`, `A_date`, `D_date`) VALUES
(8, 'yuhvhjj', 'hjvhbjkb', '2023-02-01', '2023-02-04');

-- --------------------------------------------------------

--
-- Structure de la table `c_booking`
--

CREATE TABLE `c_booking` (
  `corps_id` int(11) NOT NULL,
  `C_name` varchar(35) NOT NULL,
  `Religion` varchar(35) NOT NULL,
  `Marital_status` text NOT NULL,
  `Gender` text NOT NULL,
  `Profession` varchar(35) NOT NULL,
  `Arr_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `D_name` varchar(35) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `CNI_number` int(11) NOT NULL,
  `Retrievement_date` datetime NOT NULL,
  `Relationship_with_deceased` text NOT NULL,
  `Telephone` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `c_booking`
--

INSERT INTO `c_booking` (`corps_id`, `C_name`, `Religion`, `Marital_status`, `Gender`, `Profession`, `Arr_date`, `D_name`, `Email`, `CNI_number`, `Retrievement_date`, `Relationship_with_deceased`, `Telephone`) VALUES
(1, 'bilong marcus', 'protestant', 'Married', 'Male', 'Carpenter', '2022-10-05 23:00:00', 'Mohamed Mubarak', 'mubarak@in.pl', 2147483647, '2022-12-02 00:00:00', 'Brother', '0'),
(2, 'Wanki Tala Kelvin', 'Christian', 'Married', 'Male', 'Professor', '2023-02-01 23:00:00', 'Atangana Jean', 'freddjefferson487@gmail.com', 2147483647, '2022-12-09 00:00:00', 'Father', '655178454'),
(3, 'Wanki Jefferson', 'protestant', 'Married', 'Male', 'Professor', '2022-12-06 23:00:00', 'Mohamed Mubarak', 'freddjefferson487@gmail.com', 2147483647, '2023-02-10 00:00:00', 'Father', '0'),
(4, 'Wanki Tala Kelvin', 'Muslim', 'Single', 'Male', 'Professor', '2023-02-02 23:00:00', 'Atangana Jean', 'freddjefferson487@gmail.com', 2147483647, '2023-02-03 00:00:00', 'Brother', '237'),
(5, 'Wanki Jefferson', 'Muslim', 'Single', 'Male', 'Professor', '2022-12-12 23:00:00', 'Atangana Jean', 'freddjefferson487@gmail.com', 1231231231, '2023-02-03 00:00:00', 'Father', '655178454'),
(6, 'Wanki Jefferson', 'Muslim', 'Married', 'Male', 'Teacher', '2022-12-08 23:00:00', 'Atangana Jean', 'freddjefferson487@gmail.com', 2147483647, '2023-02-03 00:00:00', 'Father', '237'),
(7, 'Wanki Jefferson', 'Muslim', 'Single', 'Male', 'Theif', '2022-12-01 23:00:00', 'Atangana Jean', 'freddjefferson487@gmail.com', 2147483647, '2022-12-09 00:00:00', 'Brother', '2147483647');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `lastname` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `address` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`userid`, `firstname`, `lastname`, `address`) VALUES
(11, 'Noah', 'Franco', 'Tempore cupidatat r'),
(12, 'Astra', 'Maddox', 'Labore praesentium e'),
(13, 'Zelda', 'sfdsf', 'Eu excepteur et qui '),
(18, 'Burton', 'Stewart', 'Sapiente occaecat of');

-- --------------------------------------------------------

--
-- Structure de la table `user1`
--

CREATE TABLE `user1` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `user_pwd` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `user_type` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `user_email` varchar(255) CHARACTER SET latin1 COLLATE latin1_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user1`
--

INSERT INTO `user1` (`user_id`, `user_name`, `user_pwd`, `user_type`, `user_email`) VALUES
(1, 'Jeffery', 'c35db768439312eb33b97515ba560611', 'user', 'freddjefferson487@gmail.com'),
(2, 'kefyc', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'user', 'bimifufo@mailinator.com'),
(3, 'king', 'king', 'admin', 'admin@gmail.com'),
(4, 'momoyvan', '06c56a89949d617def52f371c357b6db', 'admin', 'alextagny@gmail.com'),
(5, 'yan', '911f6332e7f90b94b87f15377263995c', 'user', 'yan@gmail.com'),
(6, 'king', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'king@gmail.com'),
(7, 'Influ007', 'c35db768439312eb33b97515ba560611', 'user', 'influ@gmail.com'),
(8, 'LAM MAURICE', '1c6d6ca22cc31cb79e6e1f5277ef06e0', 'user', 'maurice@yh.fr'),
(9, 'Bilongo Jean-Marie', 'c35db768439312eb33b97515ba560611', 'user', 'bilongo@bg.com'),
(10, 'Thibaut', '936835e2f0e39bca579dd244989c6de5', 'user', 'thibaut@yahoo.com'),
(11, 'Jefferson', 'e10adc3949ba59abbe56e057f20f883e', 'user', 'freddjefferson487@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Index pour la table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `corp_db`
--
ALTER TABLE `corp_db`
  ADD PRIMARY KEY (`corp_id`);

--
-- Index pour la table `c_booking`
--
ALTER TABLE `c_booking`
  ADD PRIMARY KEY (`corps_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- Index pour la table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `c_booking`
--
ALTER TABLE `c_booking`
  MODIFY `corps_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `user1`
--
ALTER TABLE `user1`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
