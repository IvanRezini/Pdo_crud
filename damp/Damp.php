-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema saep_senai
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema saep_senai
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `saep_senai` DEFAULT CHARACTER SET utf8 ;
USE `saep_senai` ;

-- -----------------------------------------------------
-- Table `saep_senai`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `saep_senai`.`cliente` (
  `codCli` INT(5) NOT NULL AUTO_INCREMENT,
  `nomCli` VARCHAR(60) NOT NULL,
  `endCli` VARCHAR(120) NULL DEFAULT NULL,
  `telCli` VARCHAR(11) NULL DEFAULT NULL,
  PRIMARY KEY (`codCli`))


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
