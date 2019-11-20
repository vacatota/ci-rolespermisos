create database ci-rolespermisos;
use `ci-rolespermisos`;
-- MySQL Workbench Forward Engineering

-- -----------------------------------------------------
-- Table `mydb`.`empresas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ci-rolespermisos`.`empresas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombres` VARCHAR(45) NOT NULL,
  `subtitulo` VARCHAR(45) NULL,
  `direccion` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ci-rolespermisos`.`roles` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `empresaId` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_roles_empresas1_idx` (`empresaId`),
  CONSTRAINT `fk_roles_empresas1`
    FOREIGN KEY (`empresaId`)
    REFERENCES `ci-rolespermisos`.`empresas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`funcionalidades`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ci-rolespermisos`.`funcionalidades` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `empresaId` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_funcionalidades_empresas1_idx` (`empresaId` ) ,
  CONSTRAINT `fk_funcionalidades_empresas1`
    FOREIGN KEY (`empresaId`)
    REFERENCES `ci-rolespermisos`.`empresas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ci-rolespermisos`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombres` VARCHAR(45) NOT NULL,
  `apellidos` VARCHAR(45) NOT NULL,
  `correo` VARCHAR(45) NOT NULL,
  `alias` VARCHAR(45) NOT NULL,
  `clave` VARCHAR(45) NOT NULL,
  `empresaId` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_usuarios_empresas1_idx` (`empresaId` ) ,
  CONSTRAINT `fk_usuarios_empresas1`
    FOREIGN KEY (`empresaId`)
    REFERENCES `ci-rolespermisos`.`empresas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`rolesUsuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ci-rolespermisos`.`rolesUsuarios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `rolId` INT NOT NULL,
  `usuarioId` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_rolesUsuarios_roles_idx` (`rolId` ) ,
  INDEX `fk_rolesUsuarios_usuarios1_idx` (`usuarioId` ) ,
  CONSTRAINT `fk_rolesUsuarios_roles`
    FOREIGN KEY (`rolId`)
    REFERENCES `ci-rolespermisos`.`roles` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_rolesUsuarios_usuarios1`
    FOREIGN KEY (`usuarioId`)
    REFERENCES `ci-rolespermisos`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`rolFuncionalidad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `ci-rolespermisos`.`rolFuncionalidad` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `rolUsuarioId` INT NOT NULL,
  `funcionalidadId` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_rolFuncionalidad_rolesUsuarios1_idx` (`rolUsuarioId` ) ,
  INDEX `fk_rolFuncionalidad_funcionalidades1_idx` (`funcionalidadId` ) ,
  CONSTRAINT `fk_rolFuncionalidad_rolesUsuarios1`
    FOREIGN KEY (`rolUsuarioId`)
    REFERENCES `ci-rolespermisos`.`rolesUsuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_rolFuncionalidad_funcionalidades1`
    FOREIGN KEY (`funcionalidadId`)
    REFERENCES `ci-rolespermisos`.`funcionalidades` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;