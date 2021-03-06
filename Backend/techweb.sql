-- MySQL Script generated by MySQL Workbench
-- Wed Nov 27 00:41:54 2019
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema techweb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema techweb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `techweb` DEFAULT CHARACTER SET utf8 ;
USE `techweb` ;

-- -----------------------------------------------------
-- Table `techweb`.`clientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `techweb`.`clientes` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `telefone` VARCHAR(20) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `senha` VARCHAR(12) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `techweb`.`propostas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `techweb`.`propostas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `data` VARCHAR(11) NOT NULL,
  `serviço`  VARCHAR(30) NULL,
  `urgencia` VARCHAR(3) NOT NULL,
  `obs` VARCHAR(300) NOT NULL,
  `telefone` VARCHAR(20) NOT NULL,
  /*`clientes_id` INT NOT NULL,*/
  PRIMARY KEY (`id`))  
  /*FOREIGN KEY (`clientes_id`) REFERENCES `techweb`.`clientes` (`id`)*/
  
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


----------- INSERIR DADOS NA TABELA PROPOSTAS -------------
/* INSERT INTO propostas (data, serviço, urgencia, obs, telefone) VALUES 
('05/05/2019', 'Manutenção de Hardware', 'SIM', 'Peça quebrada','9999-9999'),
('05/05/2019', 'Manutenção de Software', 'SIM', '','2222-2222'),
('10/05/2019', 'Formatação de PCs ou Notebooks', 'SIM', '','4444-4444'),
('20/03/2019', 'Configuração de Redes', 'SIM', 'Configurar IP', '3333-3333'),
('01/01/2019', 'Limpeza Preventiva', 'SIM', 'PC muito sujo','1111-1111'),
('05/12/2019', 'Manutenção de Hardware', 'SIM', '') */

-------------- INSERIR DADOS NA TABELA CLIENTES -----------

/*INSERT INTO clientes (nome, telefone, email, senha) VALUES 
('Matheus', '9999-9999', 'matheus@live.com', '123456'),
('Ana Paula', '2222-2222', 'anapaula@live.com', '456789'),
('Gabriel', '4444-4444', 'gabriel@live.com', '654321'),
('Rodrigo', '3333-3333', 'rodrigo@live.com', '123456'),
('Geraldo', '1111-1111', 'geraldo@live.com', '123456'),
*/

