<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">

    <!-- Estilos -->
    <link rel="stylesheet" type="text/css" href="<?php echo RUTA_URL;?>/css/estilo_RegistrarLogin.css?v=<?php echo(rand()); ?>">
    
    <title>Iniciar sesión Protein-Mix</title>
</head>
<body>
<div id="contendorFormulario">
    <form id="formSesion" method="post" action="<?php echo RUTA_URL;?>/IniciarSesionAd_Controller/validarRegistro"> 
        <div id="contendorLogo">
            <img id="logo" src="<?php echo RUTA_URL;?>/img/proteinmix.png" alt="Protein-Mix">
            <div id="tipoRegistro">Iniciar Sesión Administrador</div>
        </div>

        <!--Nombre del Administrador-->
        <label for="nombre">Nombre completo</label>
        <input id="nombre" type="text" name="username" maxlength="50" required>
       
        <!--Contraseña del Administrador-->
        <label for="contrasena">Contraseña</label>
        <input id="contrasena" type="password" name="password" maxlength="8" required>
        <p>Combinación de números, mayúsculas y símbolos especiales</p>
        <input id="btnSesion" type="submit" name="submit" value="Iniciar sesión">
        <a id="irRegistrar" href="<?php echo RUTA_URL;?>/RegistrarAd_Controller">¿Aún no estás registrado?</a>
    </form>
</div>
</body>
</html>