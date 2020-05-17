CREATE TABLE IF NOT EXISTS `protein_mix`.`Administrador` (	
  `idAdmin` INT NOT NULL auto_increment,	
  `nombre` VARCHAR(50) NOT NULL,	
  `contrasena` VARCHAR(200) NOT NULL,	
  PRIMARY KEY (`idAdmin`))	
ENGINE = InnoDB;