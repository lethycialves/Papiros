-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21/06/2026 às 04:25
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_papiros`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nome_categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nome_categoria`) VALUES
(1, 'Cadeiras'),
(2, 'Mesas'),
(3, 'Armários'),
(4, 'Longarinas');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `nome_produto` varchar(100) NOT NULL,
  `descricao` text DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `nome_produto`, `descricao`, `imagem`) VALUES
(1, 'Cadeira Secretária Fixa', 'Prática e funcional, ideal para escritórios, recepções e ambientes corporativos.', 'cadeira-secretaria-fixa.png'),
(2, 'Cadeira Presidente', 'Elegante e confortável, perfeita para escritórios e home offices.', 'cadeira-presidente.png'),
(3, 'Cadeira Diretor', 'Moderna e confortável, ideal para ambientes corporativos e home office.', 'cadeira-diretor.png'),
(4, 'Cadeira Secretária Giratória', 'Confortável e versátil, ideal para escritórios e ambientes de trabalho.', 'cadeira-secretaria-giratoria.png'),
(5, 'Cadeira Gamer', 'Desenvolvida para máximo conforto e desempenho.', 'cadeira-gamer.png'),
(6, 'Cadeira Reunião', 'Elegante e confortável, ideal para salas de reunião.', 'cadeira-reuniao.png'),
(7, 'Cadeira de Plástico', 'Leve, resistente e prática para diversos ambientes.', 'cadeira-plastico.png'),
(8, 'Cadeira Obeso', 'Desenvolvida para oferecer maior resistência, segurança e conforto.', 'cadeira-obeso.png'),
(9, 'Cadeira Universitária', 'Prática e funcional, ideal para salas de aula, treinamentos e palestras.', 'cadeira-universitaria.png'),
(10, 'Mocho', 'Assento prático e confortável para diversos ambientes.', 'mocho.png'),
(11, 'Longarina Estofada 3 Lugares', 'Ideal para recepções, clínicas e salas de espera. Possui assentos estofados e capacidade para 3 pessoas.', 'longarina-estofada-3.png'),
(12, 'Longarina Estofada 4 Lugares', 'Ideal para recepções, clínicas e salas de espera. Possui assentos estofados e capacidade para 4 pessoas.', 'longarina-estofada-4.png'),
(13, 'Longarina Estofada 5 Lugares', 'Ideal para recepções, clínicas e salas de espera. Possui assentos estofados e capacidade para 5 pessoas.', 'longarina-estofada-5.png'),
(14, 'Longarina Metalizada 3 Lugares', 'Estrutura metálica resistente com capacidade para 3 pessoas.', 'longarina-metalizada-3.png'),
(15, 'Longarina Metalizada 4 Lugares', 'Estrutura metálica resistente com capacidade para 4 pessoas.', 'longarina-metalizada-4.png'),
(16, 'Longarina Metalizada 5 Lugares', 'Estrutura metálica resistente com capacidade para 5 pessoas.', 'longarina-metalizada-5.png'),
(17, 'Longarina Polipropileno 3 Lugares', 'Fabricada em polipropileno de alta durabilidade, com 3 lugares.', 'longarina-polipropileno-3.png'),
(18, 'Longarina Polipropileno 4 Lugares', 'Fabricada em polipropileno de alta durabilidade, com 4 lugares.', 'longarina-polipropileno-4.png'),
(19, 'Longarina Polipropileno 5 Lugares', 'Fabricada em polipropileno de alta durabilidade, com 5 lugares.', 'longarina-polipropileno-5.png'),
(20, 'Mesa em L', 'Mesa em formato L, ideal para escritórios e ambientes corporativos.', 'mesa-L.png'),
(21, 'Mesa Escolar Infantil', 'Mesa desenvolvida para crianças, ideal para escolas e espaços educativos.', 'mesa-escolar-infantil.png'),
(22, 'Mesa para Computador', 'Mesa prática e funcional para computadores e home office.', 'mesa-computador.png'),
(23, 'Mesa Escolar', 'Mesa resistente e funcional para salas de aula e ambientes educacionais.', 'mesa-escolar.png'),
(24, 'Mesa Secretária', 'Mesa compacta e versátil para escritórios e ambientes de trabalho.', 'mesa-secretaria.png'),
(25, 'Mesa Executiva', 'Mesa sofisticada e espaçosa para ambientes corporativos e executivos.', 'mesa-executiva.png'),
(26, 'Armário Alto com Porta', 'Armário alto com portas, ideal para armazenamento em escritórios e escolas.', 'armario-alto-porta.png'),
(27, 'Armário de Aço para Escritório', 'Armário de aço resistente para organização de documentos e materiais.', 'armario-aco-escritorio.png'),
(28, 'Armário Baixo para Escritório', 'Armário baixo funcional para apoio e armazenamento em ambientes corporativos.', 'armario-baixo-escritorio.png'),
(29, 'Armário Arquivo', 'Armário desenvolvido para arquivamento e organização de documentos.', 'armario-arquivo.png'),
(30, 'Armário Escolar', 'Armário resistente para armazenamento de materiais escolares.', 'armario-escolar.png'),
(31, 'Armário Guarda-Volume', 'Ideal para guarda de pertences em escolas, empresas e vestiários.', 'armario-guarda-volume.png'),
(32, 'Armário de Madeira para Escritório', 'Armário elegante em madeira para ambientes corporativos.', 'armario-madeira-escritorio.png'),
(33, 'Armário Biblioteca', 'Armário projetado para organização de livros e materiais didáticos.', 'armario-biblioteca.png'),
(34, 'Armário Porta de Correr', 'Armário com portas deslizantes para melhor aproveitamento de espaço.', 'armario-porta-correr.png'),
(35, 'Armário Professor', 'Armário funcional para uso em salas de aula e ambientes educacionais.', 'armario-prof.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto_categoria`
--

CREATE TABLE `produto_categoria` (
  `id_produto` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produto_categoria`
--

INSERT INTO `produto_categoria` (`id_produto`, `id_categoria`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 4),
(12, 4),
(13, 4),
(14, 4),
(15, 4),
(16, 4),
(17, 4),
(18, 4),
(19, 4),
(20, 2),
(21, 2),
(22, 2),
(23, 2),
(24, 2),
(25, 2),
(26, 3),
(27, 3),
(28, 3),
(29, 3),
(30, 3),
(31, 3),
(32, 3),
(33, 3),
(34, 3),
(35, 3);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices de tabela `produto_categoria`
--
ALTER TABLE `produto_categoria`
  ADD PRIMARY KEY (`id_produto`,`id_categoria`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `produto_categoria`
--
ALTER TABLE `produto_categoria`
  ADD CONSTRAINT `produto_categoria_ibfk_1` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id_produto`),
  ADD CONSTRAINT `produto_categoria_ibfk_2` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
