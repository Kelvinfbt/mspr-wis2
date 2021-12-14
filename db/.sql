-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 14, 2021 at 08:29 AM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
                              `id` int(11) UNSIGNED NOT NULL,
                              `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
                                            (1, 'Ecigarettes'),
                                            (2, 'Eliquides');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
                            `id` int(10) UNSIGNED NOT NULL,
                            `name` varchar(255) NOT NULL,
                            `description` text NOT NULL,
                            `price` decimal(6,2) NOT NULL,
                            `stock` int(10) UNSIGNED NOT NULL,
                            `categorie_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `stock`, `categorie_id`) VALUES
                                                                                           (1, 'Kit Aegis LegendA', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget ligula cursus, vehicula massa quis, viverra risus. Morbi nec laoreet dui. Integer varius lorem tempor, ultrices sem et, volutpat metus.', '67.90', 24, 2),
                                                                                           (2, 'Kit Aegis LegendDJHSGFJHS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget ligula cursus, vehicula massa quis, viverra risus. Morbi nec laoreet dui. Integer varius lorem tempor, ultrices sem et, volutpat metus.', '67.90', 24, 2),
                                                                                           (3, 'Kit Aegis LegendDJHSGFJHS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget ligula cursus, vehicula massa quis, viverra risus. Morbi nec laoreet dui. Integer varius lorem tempor, ultrices sem et, volutpat metus.', '67.90', 24, 2),
                                                                                           (4, 'Kit Aegis LegendDJHSGFJHS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget ligula cursus, vehicula massa quis, viverra risus. Morbi nec laoreet dui. Integer varius lorem tempor, ultrices sem et, volutpat metus.', '67.90', 24, 2),
                                                                                           (5, 'Kit Aegis LegendDJHSGFJHS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget ligula cursus, vehicula massa quis, viverra risus. Morbi nec laoreet dui. Integer varius lorem tempor, ultrices sem et, volutpat metus.', '67.90', 24, 2),
                                                                                           (6, 'Kit Aegis LegendDJHSGFJHS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget ligula cursus, vehicula massa quis, viverra risus. Morbi nec laoreet dui. Integer varius lorem tempor, ultrices sem et, volutpat metus.', '67.90', 24, 2),
                                                                                           (7, 'Kit Aegis LegendDJHSGFJHS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget ligula cursus, vehicula massa quis, viverra risus. Morbi nec laoreet dui. Integer varius lorem tempor, ultrices sem et, volutpat metus.', '67.90', 24, 2),
                                                                                           (8, 'Kit Aegis LegendDJHSGFJHS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget ligula cursus, vehicula massa quis, viverra risus. Morbi nec laoreet dui. Integer varius lorem tempor, ultrices sem et, volutpat metus.', '67.90', 24, 2),
                                                                                           (9, 'Kit Aegis LegendDJHSGFJHS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget ligula cursus, vehicula massa quis, viverra risus. Morbi nec laoreet dui. Integer varius lorem tempor, ultrices sem et, volutpat metus.', '67.90', 24, 2),
                                                                                           (10, 'Kit Aegis LegendDJHSGFJHS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget ligula cursus, vehicula massa quis, viverra risus. Morbi nec laoreet dui. Integer varius lorem tempor, ultrices sem et, volutpat metus.', '67.90', 24, 2),
                                                                                           (11, 'Kit Aegis LegendDJHSGFJHS', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eget ligula cursus, vehicula massa quis, viverra risus. Morbi nec laoreet dui. Integer varius lorem tempor, ultrices sem et, volutpat metus.', '67.90', 24, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
                         `id` int(10) UNSIGNED NOT NULL,
                         `name` varchar(255) NOT NULL,
                         `email` varchar(255) NOT NULL,
                         `password` varchar(255) NOT NULL,
                         `admin` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `admin`) VALUES
                                                                     (1, 'Test2', 'test@gmail.fr', 'test', 0),
                                                                     (2, 'test24', 'coline.cabuspro@gmail.com', 'test2', 0),
                                                                     (3, 'Test Admin', 'admin.test@gmail.com', 'testadmin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
    ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
    ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
    MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
    MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
    MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
