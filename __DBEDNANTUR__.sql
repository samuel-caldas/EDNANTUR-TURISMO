-- phpMyAdmin SQL Dump
-- version 2.11.10
-- http://www.phpmyadmin.net
--
-- Servidor: localhost:3306
-- Tempo de Geração: Out 26, 2011 as 08:23 AM
-- Versão do Servidor: 5.0.45
-- Versão do PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `ednantur`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `cd` int(200) NOT NULL auto_increment,
  `i` text,
  `n` text,
  `rg` text,
  `f` text,
  `e` text,
  `o` text,
  `ido` text,
  PRIMARY KEY  (`cd`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `clientes`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `cd` int(200) NOT NULL auto_increment,
  `m` text,
  `n` text,
  `f` text,
  `e` text,
  `o` text,
  `tipo` text,
  `lido` text,
  PRIMARY KEY  (`cd`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Extraindo dados da tabela `contato`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `feira`
--

CREATE TABLE `feira` (
  `cd` int(255) NOT NULL auto_increment,
  `titulo` text,
  `img` varchar(255) default NULL,
  `ds` text,
  `hs` text,
  `dr` text,
  `hr` text,
  `local` text,
  `pac` text,
  `val` text,
  `pag` text,
  `rot` text,
  `tipo` text,
  PRIMARY KEY  (`cd`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Extraindo dados da tabela `feira`
--

INSERT INTO `feira` (`cd`, `titulo`, `img`, `ds`, `hs`, `dr`, `hr`, `local`, `pac`, `val`, `pag`, `rot`, `tipo`) VALUES
(17, 'Santos', NULL, 'indefinida', 'indefinida', 'indefinido', 'indefinido', 'ednantur', 'A\r\nB\r\nC\r\nD\r\nE\r\nF\r\nG\r\nH\r\nI\r\nJ', '650', '10x\r\n20x\r\n30x\r\n40x', '*\r\n*\r\n\r\n\r\n*\r\n*\r\n*\r\n*\r\n*\r\n', NULL),
(18, 'sdafasdf', NULL, 'asdfasdf', 'asdfasdf', 'dsfasdf', 'asdfasdf', 'asdfasdf', 'adsfasdf', 'asdfadsf', 'adsfadsf', 'dsfasdf', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `fotos`
--

CREATE TABLE `fotos` (
  `cd` int(11) NOT NULL auto_increment,
  `id` int(11) NOT NULL,
  `img` text,
  `cat` text,
  PRIMARY KEY  (`cd`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Extraindo dados da tabela `fotos`
--

INSERT INTO `fotos` (`cd`, `id`, `img`, `cat`) VALUES
(15, 17, '4374arraial-d-ajuda-bahia-brasil-brazil (26).jpg', 'feiras'),
(16, 17, '5694arraial-d-ajuda-bahia-brasil-brazil (26).jpg', 'feiras');

-- --------------------------------------------------------

--
-- Estrutura da tabela `frete`
--

CREATE TABLE `frete` (
  `cd` int(11) NOT NULL auto_increment,
  `to` text,
  `m` text,
  `n` text,
  `f` text,
  `e` text,
  `ds` text,
  `dr` text,
  `o` text,
  `lido` text,
  `tipo` text,
  PRIMARY KEY  (`cd`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `frete`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `frota`
--

CREATE TABLE `frota` (
  `cd` int(200) NOT NULL auto_increment,
  `img` text,
  `n` text,
  `ma` text,
  `mo` text,
  `a` text,
  `l` text,
  `i` text,
  `esp` text,
  `tipo` text,
  PRIMARY KEY  (`cd`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `frota`
--

INSERT INTO `frota` (`cd`, `img`, `n`, `ma`, `mo`, `a`, `l`, `i`, `esp`, `tipo`) VALUES
(1, NULL, 'asas', 'asasas', 'sasas', 'asasa', 'asas', 'sas', 'asasas', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE `login` (
  `cd` int(200) NOT NULL auto_increment,
  `n` text,
  `s` text,
  PRIMARY KEY  (`cd`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`cd`, `n`, `s`) VALUES
(1, 'ednantur', 'ed123'),
(4, 'samuel', 'samuel17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `orcamento`
--

CREATE TABLE `orcamento` (
  `cd` int(200) NOT NULL auto_increment,
  `r` text,
  `n` text,
  `rg` text,
  `f` text,
  `e` text,
  `o` text,
  `lido` text,
  `Tipo` text NOT NULL,
  PRIMARY KEY  (`cd`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Extraindo dados da tabela `orcamento`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `pacotes`
--

CREATE TABLE `pacotes` (
  `cd` int(255) NOT NULL auto_increment,
  `titulo` text,
  `img` int(255) default NULL,
  `ds` text,
  `hs` text,
  `dr` text,
  `hr` text,
  `local` text,
  `pac` text,
  `val` mediumtext,
  `pag` text,
  `rot` text,
  `tipo` text,
  PRIMARY KEY  (`cd`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `pacotes`
--

