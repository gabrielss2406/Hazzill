-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 12-Dez-2019 às 17:12
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `id11897792_db_hazzill`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_area`
--

CREATE TABLE `tb_area` (
  `are_id` int(11) NOT NULL,
  `are_area` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_area`
--

INSERT INTO `tb_area` (`are_id`, `are_area`) VALUES
(1, 'Construção Civil'),
(2, 'Tecnologia da Informação'),
(3, 'Alvenaria'),
(4, 'Finanças'),
(5, ' Designer Gráfico');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_contato`
--

CREATE TABLE `tb_contato` (
  `con_id` int(11) NOT NULL,
  `con_nome` varchar(100) NOT NULL,
  `con_email` varchar(100) NOT NULL,
  `con_assunto` varchar(50) DEFAULT NULL,
  `con_mensagem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_contato`
--

INSERT INTO `tb_contato` (`con_id`, `con_nome`, `con_email`, `con_assunto`, `con_mensagem`) VALUES
(2, 'Leonardo Maia', 'gabrielss2406@gmail.com', 'sadda', 'dsadas'),
(3, 'ERICKLOCHAIDERALMEIDA', 'ERICKLOCHAIDERALMEIDA@GMAIL.COM', 'Carlos Augusto', 'Pai'),
(4, 'Aurio Nascimento', 'aparecidameperdoe@bol.org', 'Teste', 'TESTE'),
(5, 'bb', 'jahnkebarbara15@gmail.com', 'betoneeera', 'quero contratar um betonera, tem sobrando no estoque rapá?');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_imagem`
--

CREATE TABLE `tb_imagem` (
  `img_id` int(11) NOT NULL,
  `img_url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_imagem`
--

INSERT INTO `tb_imagem` (`img_id`, `img_url`) VALUES
(1, '8455203_7054a77782_m.jpg'),
(2, '9165802_ede816a2ec_m.jpg'),
(3, '8940796_dbc9e750da_m.jpg'),
(4, '8455038_49f70a2f5c_m.jpg'),
(5, '9165667_625160a3fc_m.jpg'),
(6, '9167912_7819787607_m.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_relacionamento`
--

CREATE TABLE `tb_relacionamento` (
  `rel_id_usu1_id_usu2` varchar(11) NOT NULL,
  `rel_estado` int(11) NOT NULL DEFAULT 1,
  `rel_id_usuario_1` int(11) DEFAULT NULL,
  `rel_id_usuario_2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tipo`
--

CREATE TABLE `tb_tipo` (
  `tip_id` int(11) NOT NULL,
  `tip_tipo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_tipo`
--

INSERT INTO `tb_tipo` (`tip_id`, `tip_tipo`) VALUES
(1, 'Funcionário'),
(2, 'Cliente'),
(3, 'Empresa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `usu_id` int(11) NOT NULL,
  `usu_tipo` int(11) DEFAULT NULL,
  `usu_area` int(11) DEFAULT NULL,
  `usu_img_url` int(11) DEFAULT 1,
  `usu_nome` varchar(100) NOT NULL,
  `usu_email` varchar(100) NOT NULL,
  `usu_senha` varchar(128) NOT NULL,
  `usu_data_nascimento` varchar(10) NOT NULL,
  `usu_descricao` varchar(800) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_usuario`
--

INSERT INTO `tb_usuario` (`usu_id`, `usu_tipo`, `usu_area`, `usu_img_url`, `usu_nome`, `usu_email`, `usu_senha`, `usu_data_nascimento`, `usu_descricao`) VALUES
(1, 1, 2, 1, 'Gabriel de Souza Siqueira', 'gabrielss2406@gmail.com', 'de2a8e6b82e15ee723ba0a83144b4be336914a7e5a05f21aaba116a4d0c7a9cbfb5a28dff5d42b7054f0c540fb4638bb870a3717b9a52be1ffb6b9ef2b127209', '2003-06-24', 'Técnico em Informática no  Senai Barbacena.\r\nDesenvolvedor Junior em BackEnd especializado em PHP e aplicações Web.'),
(2, 1, 2, 1, 'Gabriel Caetano da Silva Lodi', 'lodi8042@gmail.com', '1095fbf506d1d71cc63f8cdc3075db4651f91d6d228db504c67c07614593f08431bc918e161e411f3426f7e86ecae44426e0b3baf2bb7ee4ab2b36cf71dcda6c', '2003-03-19', '-Técnico em Informática\r\n'),
(3, 3, 3, 4, 'Leonardo Henrique Maia da Conceição', 'gamesworld62@gmail.com', 'e3f099946099e40c4dea2fc37f7acf321f136e8f51d06287ff22c64a522f9df35164d0799c7de0642dfc5bceb0791afd666901408b9488280109f865b2e612b5', '2003-04-22', NULL),
(22, 3, 2, 1, 'Ana Luiza Meira Alves', 'analulumeiraalves@gmail.com', '8c98fef24b9b20f995d1b1afe38e47a3a5c82ef39918a45cea6eaa58354627fc57d7563723f723fb0f6855c23d65f86a75a96d0bb13cba25e576d04fd2a6c872', '2002-11-15', NULL),
(23, 2, 2, 3, 'Lucas Rodrigues Matheus Silva', 'lucasrmsilvaSENAI@gmail.com', '18008c04aa8544a5d717112f7ce64a50376d2dd17e5fdc77363aed9a03afc9a4f92af54f0283dfedc4fa28f51e1b028234c8023eb0e7e2cc2cacba63392b7411', '2003-04-14', 'Preciso de um Técnico em Informática para formatar meu pc.');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_area`
--
ALTER TABLE `tb_area`
  ADD PRIMARY KEY (`are_id`);

--
-- Índices para tabela `tb_contato`
--
ALTER TABLE `tb_contato`
  ADD PRIMARY KEY (`con_id`);

--
-- Índices para tabela `tb_imagem`
--
ALTER TABLE `tb_imagem`
  ADD PRIMARY KEY (`img_id`);

--
-- Índices para tabela `tb_relacionamento`
--
ALTER TABLE `tb_relacionamento`
  ADD PRIMARY KEY (`rel_id_usu1_id_usu2`),
  ADD KEY `rel_id_usuario_1` (`rel_id_usuario_1`),
  ADD KEY `rel_id_usuario_2` (`rel_id_usuario_2`);

--
-- Índices para tabela `tb_tipo`
--
ALTER TABLE `tb_tipo`
  ADD PRIMARY KEY (`tip_id`);

--
-- Índices para tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`usu_id`),
  ADD KEY `usu_tipo` (`usu_tipo`),
  ADD KEY `usu_area` (`usu_area`),
  ADD KEY `usu_img_url` (`usu_img_url`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_area`
--
ALTER TABLE `tb_area`
  MODIFY `are_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_contato`
--
ALTER TABLE `tb_contato`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb_imagem`
--
ALTER TABLE `tb_imagem`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tb_tipo`
--
ALTER TABLE `tb_tipo`
  MODIFY `tip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `usu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_relacionamento`
--
ALTER TABLE `tb_relacionamento`
  ADD CONSTRAINT `tb_relacionamento_ibfk_1` FOREIGN KEY (`rel_id_usuario_1`) REFERENCES `tb_usuario` (`usu_id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `tb_relacionamento_ibfk_2` FOREIGN KEY (`rel_id_usuario_2`) REFERENCES `tb_usuario` (`usu_id`) ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD CONSTRAINT `tb_usuario_ibfk_1` FOREIGN KEY (`usu_tipo`) REFERENCES `tb_tipo` (`tip_id`),
  ADD CONSTRAINT `tb_usuario_ibfk_2` FOREIGN KEY (`usu_area`) REFERENCES `tb_area` (`are_id`),
  ADD CONSTRAINT `tb_usuario_ibfk_3` FOREIGN KEY (`usu_img_url`) REFERENCES `tb_imagem` (`img_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
