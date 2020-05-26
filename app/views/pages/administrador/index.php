<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL;?>/css/estilo_RegistrarLogin.css?v=<?php echo(rand()); ?>">

    <link rel="shortcut icon" href="<?php echo RUTA_URL;?>/img/proteinmix.ico" type="image/x-icon">
    <title>Registro Protein-Mix</title>
</head>
<body>
    <div id="contendorFormulario">
        
        <form id="formRegistrar" method="post" action="<?php echo RUTA_URL;?>/RegistrarAd_Controller/registrarAdministrador">  
            <div id="contendorLogo">
                <div id="tipoRegistro">Registrar Administrador</div>
                <img id="logo" src="<?php echo RUTA_URL;?>/img/proteinmix.png" alt="Protein-Mix">
            </div>
                <!--Nombre del Administrador-->
                <label for="nombres">Nombre completo</label>
                    <input id="nombres" type="text" name="username" maxlength="50" required>

                <!--Contraseña del Administrador-->
                <label id="contrasena">Contraseña</label>
                    <input for="contrasena" type="password" name="password" maxlength="8" required>
               
                <p>Combinación de números, mayúsculas y símbolos especiales</p>

                <input id="btnRegistrar" type="submit" name="submit" value="Registrarse">
                <a id="irSesion" href="<?php echo RUTA_URL;?>/IniciarSesionAd_Controller">¿Ya estás registrado?</a>
        </form>
    </div>
</body>
</html>