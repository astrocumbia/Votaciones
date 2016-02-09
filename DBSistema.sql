SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `DBSistema` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `DBSistema` ;

-- -----------------------------------------------------
-- Table `DBSistema`.`Partido`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DBSistema`.`Partido` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(150) NULL,
  `logo` VARCHAR(70) NULL,
  `created_at` TIMESTAMP NOT NULL,
  `updated_at` TIMESTAMP NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DBSistema`.`Candidato`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DBSistema`.`Candidato` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(100) NULL,
  `Partido_id` INT NOT NULL,
  `created_at` TIMESTAMP NOT NULL,
  `updated_at` TIMESTAMP NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Candidato_Partido_idx` (`Partido_id` ASC),
  CONSTRAINT `fk_Candidato_Partido`
    FOREIGN KEY (`Partido_id`)
    REFERENCES `DBSistema`.`Partido` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DBSistema`.`Administrador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DBSistema`.`Administrador` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(150) NULL,
  `password` VARCHAR(255) NULL,
  `created_at` TIMESTAMP NOT NULL,
  `updated_at` TIMESTAMP NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DBSistema`.`Jornada`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DBSistema`.`Jornada` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `inicio` DATETIME NULL,
  `fin` DATETIME NULL,
  `nombre` VARCHAR(100) NULL,
  `created_at` TIMESTAMP NOT NULL,
  `updated_at` TIMESTAMP NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DBSistema`.`lugar`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DBSistema`.`lugar` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `estado` INT NULL,
  `municipio` INT NULL,
  `localidad` INT NULL,
  `seccion` INT NULL,
  `created_at` TIMESTAMP NOT NULL,
  `updated_at` TIMESTAMP NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DBSistema`.`Casilla`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DBSistema`.`Casilla` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `MAC` VARCHAR(45) NULL,
  `password` VARCHAR(255) NULL,
  `Jornada_id` INT NOT NULL,
  `lugar_id` INT NOT NULL,
  `created_at` TIMESTAMP NOT NULL,
  `updated_at` TIMESTAMP NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Casilla_Jornada1_idx` (`Jornada_id` ASC),
  INDEX `fk_Casilla_lugar1_idx` (`lugar_id` ASC),
  CONSTRAINT `fk_Casilla_Jornada1`
    FOREIGN KEY (`Jornada_id`)
    REFERENCES `DBSistema`.`Jornada` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Casilla_lugar1`
    FOREIGN KEY (`lugar_id`)
    REFERENCES `DBSistema`.`lugar` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DBSistema`.`Voto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DBSistema`.`Voto` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `time` TIMESTAMP NULL,
  `Candidato_id` INT NOT NULL,
  `Casilla_id` INT NOT NULL,
  `created_at` TIMESTAMP NOT NULL,
  `updated_at` TIMESTAMP NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Voto_Candidato1_idx` (`Candidato_id` ASC),
  INDEX `fk_Voto_Casilla1_idx` (`Casilla_id` ASC),
  CONSTRAINT `fk_Voto_Candidato1`
    FOREIGN KEY (`Candidato_id`)
    REFERENCES `DBSistema`.`Candidato` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Voto_Casilla1`
    FOREIGN KEY (`Casilla_id`)
    REFERENCES `DBSistema`.`Casilla` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DBSistema`.`Funcionario_casilla`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DBSistema`.`Funcionario_casilla` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(145) NULL,
  `huella` VARCHAR(300) NULL,
  `password` VARCHAR(255) NULL,
  `Casilla_id` INT NOT NULL,
  `created_at` TIMESTAMP NOT NULL,
  `updated_at` TIMESTAMP NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Funcionario_casilla_Casilla1_idx` (`Casilla_id` ASC),
  CONSTRAINT `fk_Funcionario_casilla_Casilla1`
    FOREIGN KEY (`Casilla_id`)
    REFERENCES `DBSistema`.`Casilla` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DBSistema`.`Votado`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DBSistema`.`Votado` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `clave_elector` VARCHAR(255) NULL,
  `created_at` TIMESTAMP NOT NULL,
  `updated_at` TIMESTAMP NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
