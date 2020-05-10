-- drop database protein_mix;

-- create database protein_mix;	
-- -----------------------------------------------------	
-- Table `protein_mix`.`Usuario`	
-- -----------------------------------------------------	
CREATE TABLE IF NOT EXISTS `protein_mix`.`Usuario` (	
  `idUsuario` INT NOT NULL auto_increment,	
  `nombre` VARCHAR(30) NOT NULL,	
  `apellidos` VARCHAR(30) NOT NULL,	
  `ciudad` VARCHAR(20) NOT NULL,	
  `calle` VARCHAR(10) NOT NULL,	
  `numero` VARCHAR(5) NOT NULL,	
  `correo` VARCHAR(40) NOT NULL,	
  `contrasena` VARCHAR(20) NOT NULL,	
  PRIMARY KEY (`idUsuario`))	
ENGINE = InnoDB;	

-- -----------------------------------------------------	
-- Table `protein_mix`.`VentaDiaria`	
-- -----------------------------------------------------	
CREATE TABLE IF NOT EXISTS `protein_mix`.`VentaDiaria` (	
  `idVentaDiaria` INT NOT NULL auto_increment,	
  `totalComprasD` FLOAT NOT NULL,	
  `fecha` DATE NOT NULL,	
  PRIMARY KEY (`idVentaDiaria`))	
ENGINE = InnoDB;	

-- -----------------------------------------------------	
-- Table `protein_mix`.`Compra`	
-- -----------------------------------------------------	
CREATE TABLE IF NOT EXISTS `protein_mix`.`Compra` (	
  `idCompra` INT NOT NULL auto_increment,	
  `hora` DATE NOT NULL,	
  `numeroTarjeta` VARCHAR(20) NOT NULL,	
  `idUsuario` INT NOT NULL,	
  `idVentaDiaria` INT NOT NULL,	
  PRIMARY KEY (`idCompra`),	
  CONSTRAINT `fk_Compra_Usuario`	
    FOREIGN KEY (`idUsuario`)	
    REFERENCES `protein_mix`.`Usuario` (`idUsuario`)	
    ON DELETE RESTRICT	
    ON UPDATE CASCADE,	
  CONSTRAINT `fk_Compra_VentaDiaria`	
    FOREIGN KEY (`idVentaDiaria`)	
    REFERENCES `protein_mix`.`VentaDiaria` (`idVentaDiaria`)	
    ON DELETE RESTRICT	
    ON UPDATE CASCADE)	
ENGINE = InnoDB;	

-- -----------------------------------------------------	
-- Table `protein_mix`.`Categoria`	
-- -----------------------------------------------------	
CREATE TABLE IF NOT EXISTS `protein_mix`.`Categoria` (	
  `idCategoria` INT NOT NULL auto_increment,	
  `nombreCategoria` VARCHAR(100) NULL,	
  `descripcion` VARCHAR(400) NULL,	
  PRIMARY KEY (`idCategoria`))	
ENGINE = InnoDB;	

-- -----------------------------------------------------	
-- Table `protein_mix`.`Producto`	
-- -----------------------------------------------------	
CREATE TABLE IF NOT EXISTS `protein_mix`.`Producto` (	
  `idProducto` INT NOT NULL auto_increment,	
  `nombreProducto` VARCHAR(100) NOT NULL,	
  `descripcion` VARCHAR(400) NOT NULL,	
  `precio` FLOAT NOT NULL,	
  `stock` INT NOT NULL,	
  `idCategoria` INT NOT NULL,	
  PRIMARY KEY (`idProducto`),	
  CONSTRAINT `fk_Producto_Categoria`	
    FOREIGN KEY (`idCategoria`)	
    REFERENCES `protein_mix`.`Categoria` (`idCategoria`)	
    ON DELETE RESTRICT	
    ON UPDATE CASCADE)	
ENGINE = InnoDB;	

-- -----------------------------------------------------	
-- Table `protein_mix`.`Compra-Producto`	
-- -----------------------------------------------------	
CREATE TABLE IF NOT EXISTS `protein_mix`.`Compra-Producto` (	
  `idCompra` INT NOT NULL,	
  `idProducto` INT NOT NULL,	
  `cantidad` INT NOT NULL,	
  `total` FLOAT NOT NULL,	
  PRIMARY KEY (`idCompra`, `idProducto`),	
  CONSTRAINT `fk_Compra-Producto_Compra`	
    FOREIGN KEY (`idCompra`)	
    REFERENCES `protein_mix`.`Compra` (`idCompra`)	
    ON DELETE RESTRICT	
    ON UPDATE CASCADE,	
  CONSTRAINT `fk_Compra-Producto_Producto`	
    FOREIGN KEY (`idProducto`)	
    REFERENCES `protein_mix`.`Producto` (`idProducto`)	
    ON DELETE RESTRICT	
    ON UPDATE CASCADE)	
ENGINE = InnoDB; 