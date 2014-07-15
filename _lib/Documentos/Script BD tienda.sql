SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema a5843318_BDSTORE
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `a5843318_BDSTORE` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `a5843318_BDSTORE` ;

-- -----------------------------------------------------
-- Table `a5843318_BDSTORE`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `a5843318_BDSTORE`.`usuario` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `usuario` VARCHAR(20) NOT NULL,
  `clave` VARCHAR(50) NULL,
  `nombre` VARCHAR(50) NULL,
  `permiso` VARCHAR(20) NULL,
  `activo` INT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  UNIQUE INDEX `usuario_UNIQUE` (`usuario` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `a5843318_BDSTORE`.`categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `a5843318_BDSTORE`.`categoria` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NOT NULL,
  `descripcion` TEXT NULL,
  `imagen` VARCHAR(100) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  UNIQUE INDEX `nombre_UNIQUE` (`nombre` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `a5843318_BDSTORE`.`producto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `a5843318_BDSTORE`.`producto` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NULL,
  `precio` DECIMAL NULL,
  `cantidad` INT NULL,
  `imagen` VARCHAR(100) NULL,
  `id_categoria` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  UNIQUE INDEX `nombre_UNIQUE` (`nombre` ASC),
  INDEX `fk_producto_categoria1_idx` (`id_categoria` ASC),
  CONSTRAINT `fk_producto_categoria1`
    FOREIGN KEY (`id_categoria`)
    REFERENCES `a5843318_BDSTORE`.`categoria` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `a5843318_BDSTORE`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `a5843318_BDSTORE`.`cliente` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(50) NOT NULL,
  `direccion` VARCHAR(50) NULL,
  `telefono` VARCHAR(15) NULL,
  `id_usuario` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  UNIQUE INDEX `nombre_UNIQUE` (`nombre` ASC),
  INDEX `fk_cliente_usuario_idx` (`id_usuario` ASC),
  CONSTRAINT `fk_cliente_usuario`
    FOREIGN KEY (`id_usuario`)
    REFERENCES `a5843318_BDSTORE`.`usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = '			';


-- -----------------------------------------------------
-- Table `a5843318_BDSTORE`.`venta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `a5843318_BDSTORE`.`venta` (
  `id` INT NOT NULL,
  `producto` VARCHAR(100) NOT NULL,
  `precio` DECIMAL NULL,
  `cantidad` INT NULL,
  `fechahora` TIMESTAMP NULL,
  `id_usuario` INT NOT NULL,
  `id_cliente` INT NOT NULL,
  `producto_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `producto_UNIQUE` (`producto` ASC),
  INDEX `fk_venta_usuario1_idx` (`id_usuario` ASC),
  INDEX `fk_venta_cliente1_idx` (`id_cliente` ASC),
  INDEX `fk_venta_producto1_idx` (`producto_id` ASC),
  CONSTRAINT `fk_venta_usuario1`
    FOREIGN KEY (`id_usuario`)
    REFERENCES `a5843318_BDSTORE`.`usuario` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_venta_cliente1`
    FOREIGN KEY (`id_cliente`)
    REFERENCES `a5843318_BDSTORE`.`cliente` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_venta_producto1`
    FOREIGN KEY (`producto_id`)
    REFERENCES `a5843318_BDSTORE`.`producto` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
