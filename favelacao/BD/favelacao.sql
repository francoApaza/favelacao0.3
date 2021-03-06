-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 03-Mar-2021 às 22:52
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `favelacao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--
CREATE SCHEMA favelacao;
USE favelacao;
CREATE TABLE IF NOT EXISTS `contato` (
  `idcontato` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `assunto` varchar(200) DEFAULT NULL,
  `mensagem` varchar(800) DEFAULT NULL,
  `data` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idcontato`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `enredo`
--

DROP TABLE IF EXISTS `enredo`;
CREATE TABLE IF NOT EXISTS `enredo` (
  `idenredo` int(11) NOT NULL,
  `frase` varchar(800) NOT NULL,
  `IdPersonagem` int(11) DEFAULT NULL,
  KEY `fk_personagem` (`IdPersonagem`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `enredo`
--

INSERT INTO `enredo` (`idenredo`, `frase`, `IdPersonagem`) VALUES
(1, 'Oi, tudo bem? Prazer sou o Hélio!', 1),
(2, 'Oi, Hélio, prazer! Eu sou o X.', 4),
(3, 'Nunca te vi por aqui, você é novo?', 4),
(4, 'Sou, sim.', 4),
(5, 'Que legal você também vai estudar na EMEI Cidade do Sol?', 4),
(6, 'Sim, isso mesmo!', 4),
(7, 'Também estudo lá. Se quiser eu posso te mostrar Heliópolis, onde comprar picolé, bolinha de gude, essas coisas.', 4),
(8, 'Nossa! Quero sim, vai ser bem legal.', 4),
(9, 'Ai!', 4),
(10, 'O que aconteceu?', 5),
(11, 'Acho que pisei em um prego.', 5),
(12, 'Nossa! Você se machucou?', 5),
(13, 'Ainda bem que não, só furou meu chinelo.', 5),
(14, 'Menos mal! Infelizmente essas coisas podem acontecer mesmo, temos que prestar muita atenção onde pisamos, os adultos jogam muitos lixos na rua.', 5),
(15, 'Isso não é legal!', 5),
(16, 'Não mesmo, por isso eu e meus amigos criamos o FavelAção.', 4),
(17, 'O que é isso?', 4),
(18, 'Um grupo, formado por crianças para ajudar o meio ambiente. Você poderia participar, será bem-vindo!', 4),
(19, 'Hum! Mas o que é meio... Meio o que mesmo?', 4),
(20, 'Ambiente! É o local onde se desenvolve a vida no planeta, é a natureza com todos os seres vivos e não vivos que moram aqui.', 4),
(21, 'Ah entendi, é o local onde vivemos.', 4),
(22, 'Isso! E ai? Topa?', 4),
(23, 'Topo sim!', 4),
(24, 'Certo, mas antes você tem que concluir uma missão.', 4),
(25, 'Ok, qual missão? Missão 1: Você tem que mostrar pra sua família como separar o lixo reciclável, e fazer essa separação por pelo menos uma semana, e colocar o lixo onde a coleta seletiva possa pegar.', 4),
(26, 'Podemos chamar essa ação de separar recicláveis de reciclagem, com ela diminuímos as retiradas de matéria-prima da natureza, geramos economia de água e energia e reduzimos a disposição inadequada do lixo. É maravilhoso né?', 4),
(27, 'Mas você sabe quais são os lixos recicláveis.', 4),
(28, 'Não sei, quais são?', 4),
(29, 'Temos muitos, mas os materiais mais reciclados são o vidro, o metal, o papel e o plástico.', 4),
(30, 'Por exemplo: Garrafas de vidro, latinhas de alumínio, embalagens de leite e garrafas de refrigerante.', 4),
(31, 'Nossa! Quanta coisa.', 4),
(32, 'Ah! E a Coleta Seletiva passa de segunda, quarta e sexta lá na Rua X. ', 4),
(33, 'Vou já contar pra minha família!', 4),
(34, 'Parabéns! Agora você faz parte da turma do FavelAção.', 4),
(35, 'Teremos muito trabalho pela frente...', 4),
(36, 'Mas antes de começar quero te apresentar para a turma.', 4),
(37, 'Essa é a Babi, ela contribui muito no FavelAção.', 3),
(38, 'Esse é o João, pensa num menino gente fina, que ajuda demais.', 2),
(39, 'Oi, X, seja bem-vindo!', 4),
(40, 'Prazer, X! Que bom ter você com a gente, ajuda nunca é demais! Estamos precisando mesmo.', 4),
(41, 'Nós temos a política dos 5 R’s da sustentabilidade ela deve ser aplicada em ordem de importância, assim : reduzir, reutilizar e reciclar. ', 4),
(42, 'Reduzir o consumo ao máximo, reutilizar produtos e materiais enquanto puderem ser reutilizados e, por último, reciclar aqueles que tiverem chegado ao fim de sua vida útil.', 4),
(43, 'Pensando nisso, que tal reutilizarmos algum brinquedo?', 4),
(44, 'Missão 2 : Para completar a missão encontre algum brinquedo ou livro que você não brinca mais e doe a algum amiguinho. Assim você estará REUTILIZANDO e fazendo outra criança feliz. ', 4),
(45, 'Ajudar o meio ambiente e os outros faz bem!  Bom trabalho!!', 4),
(46, 'Lembra que eu te expliquei o que é meio ambiente?', 4),
(47, 'Vamos relembrar...', 4),
(48, 'Meio ambiente é o local onde se desenvolve a vida na terra, ou seja, é a natureza com todos os seres vivos e não vivos que nela habitam e interagem.', 4),
(49, 'Missão 3: Para essa missão, você deve desenhar algo que te lembre o meio ambiente e nos enviar. Vamos lá!', 4),
(50, 'Parabéns! Desenhar estimula a criatividade e outros sentidos, isso é fantástico!', 4),
(51, 'Você sabia que o óleo de cozinha descartado de forma incorreta contamina nosso meio ambiente podendo poluir as águas, o solo e até mesmo a atmosfera (camada de ar que envolve a Terra)?', 4),
(52, 'Vamos fazer nossa parte e descarta-lo de forma correta!', 4),
(53, 'Missão 4: Fale para sua família do mal que o mal descarte do óleo de cozinha pode causar, e pede para um adulto despejar o óleo que não será mais utilizado em uma garrafa pet, vazia e limpa, por exemplo de amaciante.', 4),
(54, 'Depois acompanhado de um adulto entregue a garrafa com o óleo a uma pessoa que queira reaproveita-lo, por exemplo, fazendo sabão em barra.', 4),
(55, 'Uau! Parabéns você avançou de fase!', 4),
(56, 'Já aprendemos muitas coisas. Vamos relembrar?', 4),
(57, 'Agora você já sabe o que é meio ambiente, e algumas atitudes que temos que pode ajuda-lo, como separar o lixo, reduzir, reutilizar e reciclar, descartar o óleo de cozinha da forma correta.', 4),
(58, 'Ah! E não podemos esquecer que você já sabe os dias da coleta seletiva de Heliópolis e onde ela passa.', 4),
(59, 'Não esqueça que nosso dever, principalmente como membro do FavelAção é de ajudar o meio ambiente e passar nosso conhecimento para outras pessoas.', 4),
(60, 'Nos vemos na próxima fase!', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `expressao`
--

DROP TABLE IF EXISTS `expressao`;
CREATE TABLE IF NOT EXISTS `expressao` (
  `idExpressao` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idExpressao`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `expressao`
--

INSERT INTO `expressao` (`idExpressao`, `descricao`) VALUES
(1, 'Triste'),
(2, 'Feliz'),
(3, 'Saudação'),
(4, 'Raiva'),
(5, 'Choro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `medalhas`
--

DROP TABLE IF EXISTS `medalhas`;
CREATE TABLE IF NOT EXISTS `medalhas` (
  `idmedalhas` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) DEFAULT NULL,
  `medalha1` varchar(45) DEFAULT NULL,
  `medalha2` varchar(45) DEFAULT NULL,
  `medalha3` varchar(45) DEFAULT NULL,
  `medalha4` varchar(45) DEFAULT NULL,
  `medalha5` varchar(45) DEFAULT NULL,
  `medalha6` varchar(45) DEFAULT NULL,
  `medalha7` varchar(45) DEFAULT NULL,
  `medalha8` varchar(45) DEFAULT NULL,
  `medalha9` varchar(45) DEFAULT NULL,
  `medalha10` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idmedalhas`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `medalhas`
--

INSERT INTO `medalhas` (`idmedalhas`, `email`, `medalha1`, `medalha2`, `medalha3`, `medalha4`, `medalha5`, `medalha6`, `medalha7`, `medalha8`, `medalha9`, `medalha10`) VALUES
(2, 'devd8727@gmail.com', 'TRUE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE');

-- --------------------------------------------------------

--
-- Estrutura da tabela `missao`
--

DROP TABLE IF EXISTS `missao`;
CREATE TABLE IF NOT EXISTS `missao` (
  `idmissao` int(11) NOT NULL AUTO_INCREMENT,
  `tituloMissao` varchar(255) NOT NULL,
  `missao` varchar(500) NOT NULL,
  `personagem` varchar(255) NOT NULL,
  `expressao` varchar(20) DEFAULT NULL,
  `posicao` varchar(255) NOT NULL,
  `cenario` varchar(55) NOT NULL,
  `data` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idmissao`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mural`
--

DROP TABLE IF EXISTS `mural`;
CREATE TABLE IF NOT EXISTS `mural` (
  `idmural` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `imagem` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idmural`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mural`
--

INSERT INTO `mural` (`idmural`, `nome`, `imagem`) VALUES
(1, 'Bárbara', 'mural1.jpg'),
(2, 'João', 'mural1.jpg'),
(3, 'Anna', 'mural1.jpg'),
(4, 'José', 'mural1.jpg'),
(5, 'Guilherme', 'mural1.jpg'),
(6, 'Ruan Lima Ribeiro', '43d107afa086281562c8636e0f3af8c3.jpg'),
(7, 'Ruan Lima Ribeiro', 'f58aec0b7b9c23bb201a5eac135ca395.png'),
(8, 'Ruan Lima Ribeiro', '4d3b150d588cc6cc665bdf733ab54d4d.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `personagens`
--

DROP TABLE IF EXISTS `personagens`;
CREATE TABLE IF NOT EXISTS `personagens` (
  `idPersonagem` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `expressaoId` int(11) NOT NULL,
  `imagem` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`idPersonagem`),
  KEY `fk_expressao` (`expressaoId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `personagens`
--

INSERT INTO `personagens` (`idPersonagem`, `nome`, `expressaoId`, `imagem`) VALUES
(1, 'Hélio', 3, 'helioSaudacao.png'),
(2, 'João', 3, 'joaoSaudacao.png'),
(3, 'Babi', 2, 'babiFeliz.png'),
(4, 'Hélio', 2, 'helioFeliz.png'),
(5, 'Hélio', 1, 'helioTriste.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `savegame`
--

DROP TABLE IF EXISTS `savegame`;
CREATE TABLE IF NOT EXISTS `savegame` (
  `idsavegame` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) DEFAULT NULL,
  `missao1` varchar(45) DEFAULT NULL,
  `missao2` varchar(45) DEFAULT NULL,
  `missao3` varchar(45) DEFAULT NULL,
  `missao4` varchar(45) DEFAULT NULL,
  `missao5` varchar(45) DEFAULT NULL,
  `missao6` varchar(45) DEFAULT NULL,
  `missao7` varchar(45) DEFAULT NULL,
  `missao8` varchar(45) DEFAULT NULL,
  `missao9` varchar(45) DEFAULT NULL,
  `missao10` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idsavegame`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `savegame`
--

INSERT INTO `savegame` (`idsavegame`, `email`, `missao1`, `missao2`, `missao3`, `missao4`, `missao5`, `missao6`, `missao7`, `missao8`, `missao9`, `missao10`) VALUES
(2, 'devd8727@gmail.com', 'TRUE', 'TRUE', 'TRUE', 'TRUE', 'TRUE', 'FALSE', 'FALSE', 'FALSE', 'FALSE', 'FALSE');

-- --------------------------------------------------------

--
-- Estrutura da tabela `teste`
--

DROP TABLE IF EXISTS `teste`;
CREATE TABLE IF NOT EXISTS `teste` (
  `idteste` int(11) NOT NULL AUTO_INCREMENT,
  `testecol` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idteste`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `teste`
--

INSERT INTO `teste` (`idteste`, `testecol`) VALUES
(1, ''),
(2, ''),
(3, ''),
(4, 'TRUE'),
(5, 'TRUE'),
(6, 'TRUE'),
(7, 'TRUE'),
(8, 'TRUE'),
(9, 'TRUE'),
(10, 'TRUE'),
(11, 'TRUE'),
(12, 'TRUE'),
(13, 'TRUE'),
(14, 'TRUE'),
(15, 'TRUE'),
(16, 'TRUE'),
(17, 'TRUE'),
(18, 'TRUE'),
(19, 'TRUE'),
(20, 'TRUE'),
(21, 'TRUE'),
(22, 'TRUE'),
(23, 'TRUE'),
(24, 'TRUE'),
(25, 'TRUE'),
(26, 'TRUE'),
(27, 'TRUE'),
(28, 'TRUE');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `dataNascimento` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `senha` varchar(34) NOT NULL,
  `confirmarSenha` varchar(34) NOT NULL,
  `categoriaSecreta` varchar(55) NOT NULL,
  `respSecreta` varchar(55) NOT NULL,
  `apelido` varchar(255) NOT NULL,
  `imgAvatar` varchar(400) DEFAULT NULL,
  `data` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--

-- Extraindo dados da tabela `usuarios`
--

-- INSERT INTO `usuarios` (`id`, `nome`, `dataNascimento`, `email`, `telefone`, `senha`, `confirmarSenha`, `categoriaSecreta`, `respSecreta`, `apelido`, `imgAvatar`, `data`) VALUES
-- (2, 'Ruan Lima Ribeiro', '2002-03-20', 'devd8727@gmail.com', '11-99999-9999', '55fc5b709962876903785fd64a6961e5', '55fc5b709962876903785fd64a6961e5', 'Nome do seu animal de estimação', 'pandora', 'dav', 'perso1.png', '2021-03-02 23:41:22');

--
-- Estrutura da tabela `usuariosdeletados`

CREATE TABLE `usuariosdeletados` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `dataNascimento` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `senha` varchar(34) NOT NULL,
  `confirmarSenha` varchar(34) NOT NULL,
  `categoriaSecreta` varchar(55) NOT NULL,
  `respSecreta` varchar(55) NOT NULL,
  `apelido` varchar(255) NOT NULL,
  `imgAvatar` varchar(400) DEFAULT NULL,
  `data` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--


-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `enredo`
--
ALTER TABLE `enredo`
  ADD CONSTRAINT `fk_personagem` FOREIGN KEY (`IdPersonagem`) REFERENCES `personagens` (`idPersonagem`);

--
-- Limitadores para a tabela `personagens`
--
ALTER TABLE `personagens`
  ADD CONSTRAINT `fk_expressao` FOREIGN KEY (`expressaoId`) REFERENCES `expressao` (`idExpressao`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
