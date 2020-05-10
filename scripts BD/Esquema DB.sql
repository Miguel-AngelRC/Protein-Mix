-- crear y eliminar base
-- drop database protein_mix;
-- create database protein_mix;	

-- -----------------------------------------------------	
-- Table `protein_mix`.`Usuario`	
-- -----------------------------------------------------	
 
 CREATE TABLE IF NOT EXISTS `protein_mix`.`Usuario` ( 	
  `idUsuario` INT NOT NULL auto_increment,	
  `nombre` VARCHAR(50) NOT NULL,	
  `apellidos` VARCHAR(50) NOT NULL,	
  `ciudad` VARCHAR(50) NOT NULL,	
  `calle` VARCHAR(50) NOT NULL,	
  `numero` VARCHAR(50) NOT NULL,	
  `correo` VARCHAR(50) NOT NULL,	
  `contrasena` VARCHAR(200) NOT NULL,	
  PRIMARY KEY (`idUsuario`))	
ENGINE = InnoDB;	

-- -----------------------------------------------------	
-- Table `protein_mix`.`VentaDiaria`	
-- -----------------------------------------------------	
CREATE TABLE IF NOT EXISTS `protein_mix`.`VentaDiaria` (	
<<<<<<< HEAD:esquema DB/esquema DB.sql
  `idVentaDiaria` INT NOT NULL auto_increment,	
  `totalComprasD` FLOAT NOT NULL,	
  `fecha` DATE NOT NULL,	
=======
  `idVentaDiaria` INT NOT NULL,	
  `totalComprasD` FLOAT NULL,	
  `fecha` DATE NULL,	
>>>>>>> 4eda72a8f2947b376b03d42458437501c31e8606:scripts BD/Esquema DB.sql
  PRIMARY KEY (`idVentaDiaria`))	
ENGINE = InnoDB;	

-- -----------------------------------------------------	
-- Table `protein_mix`.`Compra`	
-- -----------------------------------------------------	
CREATE TABLE IF NOT EXISTS `protein_mix`.`Compra` (	
  `idCompra` INT NOT NULL auto_increment,	
  `hora` TIME NOT NULL,	
  `numeroTarjeta` VARCHAR(30) NOT NULL,	
  `idUsuario` INT NOT NULL,	
  `idVentaDiaria` INT NOT NULL,
  `totalDeLaCompra` FLOAT NULL,
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
<<<<<<< HEAD:esquema DB/esquema DB.sql
  `descripcion` VARCHAR(400) NULL,	
=======
  `descripcion` VARCHAR(300) NULL,	
>>>>>>> 4eda72a8f2947b376b03d42458437501c31e8606:scripts BD/Esquema DB.sql
  PRIMARY KEY (`idCategoria`))	
ENGINE = InnoDB;	

-- -----------------------------------------------------	
-- Table `protein_mix`.`Producto`	
-- -----------------------------------------------------	
CREATE TABLE IF NOT EXISTS `protein_mix`.`Producto` (	
<<<<<<< HEAD:esquema DB/esquema DB.sql
  `idProducto` INT NOT NULL auto_increment,	
  `nombreProducto` VARCHAR(100) NOT NULL,	
  `descripcion` VARCHAR(400) NOT NULL,	
=======
  `idProducto` INT NOT NULL,	
  `nombreProducto` VARCHAR(100) NOT NULL,	
  `descripcion` VARCHAR(300) NOT NULL,	
>>>>>>> 4eda72a8f2947b376b03d42458437501c31e8606:scripts BD/Esquema DB.sql
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
-- Table `protein_mix`.`Compra_Producto`	
-- -----------------------------------------------------	
CREATE TABLE IF NOT EXISTS `protein_mix`.`Compra_Producto` (	
  `idCompra` INT NOT NULL,	
  `idProducto` INT NOT NULL,	
  `cantidad` INT NULL,	
  `total` FLOAT NULL,	
  PRIMARY KEY (`idCompra`, `idProducto`),	
  CONSTRAINT `fk_Compra_Producto_Compra`	
    FOREIGN KEY (`idCompra`)	
    REFERENCES `protein_mix`.`Compra` (`idCompra`)	
    ON DELETE RESTRICT	
    ON UPDATE CASCADE,	
  CONSTRAINT `fk_Compra_Producto_Producto`	
    FOREIGN KEY (`idProducto`)	
    REFERENCES `protein_mix`.`Producto` (`idProducto`)	
    ON DELETE RESTRICT	
    ON UPDATE CASCADE)	
ENGINE = InnoDB; 

