-- MySQL Script generated by MySQL Workbench
-- Wed Aug 29 10:11:41 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema cogip
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Table `type`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `type` (
  `idType` INT NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idType`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `societe`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `societe` (
  `idSociete` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `adresse` VARCHAR(90) NOT NULL,
  `pays` VARCHAR(45) NOT NULL,
  `tva` INT ZEROFILL NOT NULL,
  `phone` INT ZEROFILL NOT NULL,
  `type_idType` INT NOT NULL,
  PRIMARY KEY (`idSociete`, `type_idType`),
  INDEX `fk_societe_type1_idx` (`type_idType` ASC),
  CONSTRAINT `fk_societe_type1`
    FOREIGN KEY (`type_idType`)
    REFERENCES `type` (`idType`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `personne`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `personne` (
  `idPersonne` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(30) NOT NULL,
  `firstName` VARCHAR(30) NOT NULL,
  `phone` INT ZEROFILL NULL,
  `email` VARCHAR(100) NULL,
  `societe_idSociete` INT NOT NULL,
  PRIMARY KEY (`idPersonne`, `societe_idSociete`),
  INDEX `fk_personne_societe_idx` (`societe_idSociete` ASC),
  CONSTRAINT `fk_personne_societe`
    FOREIGN KEY (`societe_idSociete`)
    REFERENCES `societe` (`idSociete`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `facture`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `facture` (
  `idFacture` INT NOT NULL AUTO_INCREMENT,
  `numero` INT ZEROFILL NOT NULL,
  `date` DATE NOT NULL,
  `details` TEXT NULL,
  `societe_idSociete` INT NOT NULL,
  `societe_type_idType` INT NOT NULL,
  `personne_idPersonne` INT NOT NULL,
  `personne_societe_idSociete` INT NOT NULL,
  PRIMARY KEY (`idFacture`, `societe_idSociete`, `societe_type_idType`, `personne_idPersonne`, `personne_societe_idSociete`),
  INDEX `fk_facture_societe1_idx` (`societe_idSociete` ASC, `societe_type_idType` ASC) ,
  INDEX `fk_facture_personne1_idx` (`personne_idPersonne` ASC, `personne_societe_idSociete` ASC) ,
  CONSTRAINT `fk_facture_societe1`
    FOREIGN KEY (`societe_idSociete` , `societe_type_idType`)
    REFERENCES `societe` (`idSociete` , `type_idType`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_facture_personne1`
    FOREIGN KEY (`personne_idPersonne` , `personne_societe_idSociete`)
    REFERENCES `personne` (`idPersonne` , `societe_idSociete`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
