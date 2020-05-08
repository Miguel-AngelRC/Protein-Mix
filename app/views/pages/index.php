<!-- se carga la cabecera -->
<?php require_once RUTA_APP.'/views/inc/header.php';?>
    <div id="contendorFormulario">
        
        <form id="formRegistrar" method="post" action="<?php echo RUTA_URL;?>/RegistrarU_Controller/RegistrarUsuario">  
            <div id="contendorLogo">
                <img id="logo" src="<?php echo RUTA_URL;?>/img/proteinmix.png" alt="Protein-Mix">
            </div>
            
                <!--Nombre Usuario-->
                <label for="nombres">Nombres</label>
                    <input id="nombres" type="text" name="username" maxlength="50" required>

                <!--Apellidos-->
                <label for="apellidos" >Apellidos</label>
                    <input id="apellidos" type="text" name="lastname" maxlength="50" required>
                
                <!--Dirección-->
                <div id="direccion" >
                    <h1>Dirección</h1>
                    <div class="campos">
                        <input id="ciudad" type="text" name="city" maxlength="50" required>
                        <label for="ciudad"> Ciudad</label>
                    </div>
                    <div class="campos">
                        <input id="calle" type="text" name="street" maxlength="50" required> 
                        <label for="calle">Calle</label>
                    </div>
                    <div class="campos">
                        <input id="numero" type="text" name="number" maxlength="50" required>      
                        <label for="numero">Numero</label>
                    </div>
                </div>

                <!--Correo-->
                <label id="correo">Correo</label>
                    <input for="correo" type="email" name="email" maxlength="50" required>

                <!--Contraseña-->
                <label id="contrasena">Contraseña </label>
                    <input for="contrasena" type="password" name="password" maxlength="8" required>
               
                <p>Combinación de números, mayúsculas y símbolos especiales</p>

                <input id="btnRegistrar" type="submit" name="submit" value="Registrarse">
                <a id="irSesion" href="<?php echo RUTA_URL;?>/IniciarSesionU_Controller">¿Ya estás registrado?</a>
         </form>
    </div>
<!-- se carga el pie de pagina -->
<?php require_once RUTA_APP.'/views/inc/footer.php';?>

