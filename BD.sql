-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Fev-2022 às 14:35
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `book`
--

CREATE TABLE `book` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(255) NOT NULL,
  `Type` enum('Comic','Novel') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `book`
--

INSERT INTO `book` (`ID`, `Nome`, `Type`) VALUES
(2, 'Supreme Magus', 'Novel'),
(3, 'The Begging Atfer The End', 'Comic'),
(4, 'Rent A Girlfriend', 'Comic'),
(5, 'Harry Potter', 'Novel'),
(6, 'Jujutsu Kaisen', 'Comic'),
(7, 'Mushuko Tensei', 'Novel'),
(8, 'Solo Leveling', 'Novel'),
(10, 'Takagi-san', 'Comic'),
(11, 'Tokyo Revengers', 'Comic');

-- --------------------------------------------------------

--
-- Estrutura da tabela `bookinfo`
--

CREATE TABLE `bookinfo` (
  `ID` int(11) NOT NULL,
  `ID_Book` int(11) NOT NULL,
  `Cap_Name` varchar(255) DEFAULT NULL,
  `Cap_Number` int(11) DEFAULT NULL,
  `Cap_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `bookinfo`
--

INSERT INTO `bookinfo` (`ID`, `ID_Book`, `Cap_Name`, `Cap_Number`, `Cap_date`) VALUES
(2, 2, 'A New Beginning', 1, '2022-01-01'),
(3, 2, 'A Baby’s day', 2, '2022-01-02'),
(4, 2, 'Unrelenting Practice', 3, '2022-01-03'),
(5, 2, 'Understanding Spirit Magic', 4, '2022-01-04'),
(7, 3, 'A Luz no Fim do Túnel', 1, '2022-01-05'),
(9, 4, ' ', 1, '2022-01-05'),
(11, 4, ' ', 2, '2022-01-06'),
(12, 5, 'O menino que sobreviveu\r\n', 1, '2022-01-07'),
(14, 5, 'O vidro que sumiu', 2, '2022-01-08'),
(15, 6, ' ', 1, '2022-02-02'),
(16, 6, ' ', 2, '2022-02-03'),
(17, 6, ' ', 3, '2022-02-04'),
(18, 7, 'Poderia Ser Outro Mundo?', 1, '2022-01-18'),
(20, 7, 'A empregada inexpressiva', 2, '2022-01-19'),
(21, 8, 'Prólogo', 1, '2022-02-08'),
(23, 8, 'Covil Duplo', 2, '2022-02-20'),
(24, 10, ' ', 1, '2022-02-01'),
(25, 10, ' ', 2, '2022-02-02'),
(26, 10, ' ', 3, '2022-02-03'),
(28, 11, ' ', 1, '2022-02-01'),
(29, 11, ' ', 2, '2022-02-02'),
(30, 11, ' ', 3, '2022-02-03'),
(31, 11, ' ', 4, '2022-02-04');

-- --------------------------------------------------------

--
-- Estrutura da tabela `library`
--

CREATE TABLE `library` (
  `ID` int(11) NOT NULL,
  `ID_Books` int(11) NOT NULL,
  `ID_User` int(11) NOT NULL,
  `NumberCap` int(11) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `library`
--

INSERT INTO `library` (`ID`, `ID_Books`, `ID_User`, `NumberCap`, `Date`) VALUES
(43, 6, 4, 1, '2022-02-22 02:22:27'),
(45, 4, 4, 2, '2022-02-22 02:23:49'),
(46, 4, 5, 2, '2022-02-22 02:33:14'),
(47, 8, 5, 2, '2022-02-22 02:33:26'),
(48, 2, 5, 1, '2022-02-22 02:33:30'),
(49, 6, 5, 3, '2022-02-22 02:33:39');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Username` varchar(128) NOT NULL,
  `Email` varchar(128) NOT NULL,
  `Pass` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`ID`, `Username`, `Email`, `Pass`) VALUES
(1, 'hugo', 'hugo@gmail.com', '$2y$10$2uLipnC78xoTlQIjemsGPekfpAbv2mDNuKiUw1Qis09tLcZ5jQN7y'),
(4, 'xpto', 'xpto@gmail.com', '$2y$10$9nntLKTr1EilXVavMGCbKe4GfwKJsKp1.h1PECKpeXhkp4Ijl5S8W'),
(5, 'x', 'x@gmail.com', '$2y$10$nNwUGt/9WgHaO9d5jGkc3uu47YWFmvtWg4bnZdeDut22j.GQIbcEG');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `bookinfo`
--
ALTER TABLE `bookinfo`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Book` (`ID_Book`);

--
-- Índices para tabela `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_Books` (`ID_Books`),
  ADD KEY `ID_User` (`ID_User`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `book`
--
ALTER TABLE `book`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `bookinfo`
--
ALTER TABLE `bookinfo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de tabela `library`
--
ALTER TABLE `library`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `bookinfo`
--
ALTER TABLE `bookinfo`
  ADD CONSTRAINT `bookinfo_ibfk_1` FOREIGN KEY (`ID_Book`) REFERENCES `book` (`ID`);

--
-- Limitadores para a tabela `library`
--
ALTER TABLE `library`
  ADD CONSTRAINT `library_ibfk_1` FOREIGN KEY (`ID_Books`) REFERENCES `book` (`ID`),
  ADD CONSTRAINT `library_ibfk_2` FOREIGN KEY (`ID_User`) REFERENCES `users` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
