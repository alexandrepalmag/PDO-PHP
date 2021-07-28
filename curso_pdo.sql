-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27-Jul-2021 às 19:38
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `curso_pdo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `user` int(11) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(150) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'Alexandre Gonçalves', 'alexandre@email.com', '123456789858', '2021-07-24 08:44:24'),
(4, 'Paul Owen', '123456', 'gyiyiuyiu', '0000-00-00 00:00:00'),
(5, 'Nome Teste', 'nometeste@nome.com', '12313255', '2021-07-25 00:29:34'),
(6, 'Joana', 'joana@email.com', '123456', '2021-07-25 00:30:30'),
(7, 'Ana Paula', 'anapaula@email.com', '123456', '2021-07-25 00:31:26'),
(8, 'Roberta Silva', 'roberta@email.com', '123456789', '2021-07-25 00:31:58'),
(9, 'Andrea', 'andrea@email.com', '1234556', '2021-07-25 01:29:06'),
(10, 'Alethea', 'aletea@email.com', '123456', '2021-07-25 01:31:50'),
(11, 'Paula', 'paula@email', '', '2021-07-25 01:39:51'),
(12, 'Robert', 'robert@email.com', '123456', '2021-07-25 12:19:21'),
(13, 'Mayra', 'mayra@email.com', '123456', '2021-07-25 12:20:14'),
(14, 'Flávia', 'flavia@email.com', '123456', '2021-07-25 14:12:26'),
(15, 'Anne Hathy Toltski', 'anne@email.com', '123456789', '2021-07-26 00:17:32'),
(16, 'Claude Ortsni', 'claude@email.com', 'jnhhh', '2021-07-26 00:17:48'),
(17, 'Nome Teste', 'nometeste@nome.com', '411', '2021-07-26 08:39:01'),
(18, 'Ana Paula Palma', 'app@email.com', 'asssss', '2021-07-26 08:39:35'),
(19, 'Thaís', 'tahis@email.com', '123456', '2021-07-26 08:41:17'),
(20, 'Nome Teste 2', 'nometeste@nome.com', '123456', '2021-07-26 08:51:17');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
