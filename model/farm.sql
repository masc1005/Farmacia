-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 02-Mar-2020 às 21:49
-- Versão do servidor: 5.7.26
-- versão do PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farm`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicamentos`
--

DROP TABLE IF EXISTS `medicamentos`;
CREATE TABLE IF NOT EXISTS `medicamentos` (
  `idmed` int(11) NOT NULL AUTO_INCREMENT,
  `nomeV` varchar(45) NOT NULL,
  `compA` varchar(256) NOT NULL,
  `virus` varchar(45) NOT NULL,
  `obs` varchar(45) NOT NULL,
  PRIMARY KEY (`idmed`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `medicamentos`
--

INSERT INTO `medicamentos` (`idmed`, `nomeV`, `compA`, `virus`, `obs`) VALUES
(1, 'Cimegripe', '4 mg de maleato de clorfeniramina ', 'Resfriado', 'sem obs'),
(2, 'Coristina D', ' ácido acetilsalicílico, maleato de dexclorfeniramina, cloridrato de fenilefrina e cafeína', 'Resfriado', 'sem obs'),
(3, 'Benegripe', 'dipirona, maleato de clorfeniramina, cafeína ', 'Resfriado', 'não'),
(4, 'Ibuprofeno', 'celulose microcristalina + lactose, estearato de magnésio, álcool polivinílico + dióxido de titânio + talco + macrogol e água purificada.', 'Caxumba', 'nenhum'),
(5, 'Paracetamol', 'povidona, amido, amidoglicolato de sódio, amido pré-gelatinizado e ácido esteárico.', 'Caxumba', 'nenhum'),
(6, 'Coquetel', 'Inibidores de Protease, Inibidores NucleosÃ­deos da Transcriptase Reversa,  Inibidores de fusÃ£o', 'Aids', 'nenhuma');

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

DROP TABLE IF EXISTS `paciente`;
CREATE TABLE IF NOT EXISTS `paciente` (
  `idpac` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `idade` varchar(6) NOT NULL,
  `infec` varchar(45) NOT NULL,
  `dosagem` varchar(45) NOT NULL,
  PRIMARY KEY (`idpac`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`idpac`, `nome`, `idade`, `infec`, `dosagem`) VALUES
(1, 'Leoni Mascarenhas', '20', 'Resfriado', '15ml'),
(2, 'Laercio', '25', 'Aids', '30ml');

-- --------------------------------------------------------

--
-- Estrutura da tabela `virus`
--

DROP TABLE IF EXISTS `virus`;
CREATE TABLE IF NOT EXISTS `virus` (
  `idvir` int(11) NOT NULL AUTO_INCREMENT,
  `nomeC` varchar(45) NOT NULL,
  `nomeP` varchar(45) NOT NULL,
  `periodI` varchar(45) NOT NULL,
  `remedio` varchar(45) NOT NULL,
  PRIMARY KEY (`idvir`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `virus`
--

INSERT INTO `virus` (`idvir`, `nomeC`, `nomeP`, `periodI`, `remedio`) VALUES
(1, 'Rinofaringinte', 'Resfriado', '1 a 3 dias', 'Cimegripe'),
(2, 'Parotidite epidemica', 'Caxumba', '12 a 25 dias', 'Paracetamol'),
(3, 'Síndrome da imunodeficiência adquirida', 'Aids', '30 a 60 dias', 'Coquetel');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
