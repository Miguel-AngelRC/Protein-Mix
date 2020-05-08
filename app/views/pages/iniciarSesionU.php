<!-- se carga la cabecera -->
<?php require_once RUTA_APP.'/views/inc/header.php';?>

<div id="contendorFormulario">
    <form id="formSesion" method="post" action="<?php echo RUTA_URL;?>/IniciarSesionU_Controller/validarRegistro"> 
        <div id="contendorLogo">
            <img id="logo" src="<?php echo RUTA_URL;?>/img/proteinmix.png" alt="Protein-Mix">
        </div>

        <!--Nombre Usuario-->
        <label for="nombre">Nombre</label>
        <input id="nombre" type="text" name="username" maxlength="32"  required>
       
        <!--Contraseña-->
        <label for="contrasena">Contraseña</label>
        <input id="contrasena" type="password" name="password" maxlength="8"  required>
        <p>Combinación de números, mayúsculas y símbolos especiales</p>
        <input id="btnSesion" type="submit" name="submit" value="Iniciar sesión">
        <a id="irRegistrar" href="<?php echo RUTA_URL;?>/IniciarSesionU_Controller">¿Aún no estás registrado?</a>

    </form>
</div>
<!-- se carga el pie de pagina -->
<?php require_once RUTA_APP.'/views/inc/footer.php';?>
