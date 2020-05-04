<!-- se carga la cabecera -->
<?php require_once RUTA_APP.'/views/inc/header.php';?>
    <center>
        <table>
            <tr>
                <td>
                    <form method="post" action="<?php echo RUTA_URL;?>/RegistrarU_Controller/RegistrarUsuario">  
                        
                    <h3>Protein-Mix</h3>
                        <!--Nombre Usuario-->
                        <label for="nombre">Nombres</label><br>
                        <input type="text" name="username" maxlength="50" required>
                        <br/>
                        <br/>
                        <!--Apellidos-->
                        <label for="apellidos">Apellidos</label><br>
                        <input type="text" name="lastname" maxlength="50" required>
                        <br/>
                        <br/>
                        <!--Dirección-->
                        <label for="ciudad">Dirección</label><br>
                        <input type="text" name="city" maxlength="50" required>&nbsp;&nbsp;<input type="text" name="street" maxlength="50" required>&nbsp;&nbsp;<input type="text" name="number" maxlength="50" required>
                        <br/>
                        <label for="ciudad">Ciudad</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="calle">Calle</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label for="numero">Numero</label>
                        <br/>
                        <br/>
                        <!--Correo-->
                        <label for="correo">Correo</label><br>
                        <input type="email" name="email" maxlength="50" required>
                        <br/>
                        <br/>
                        <!--Contraseña-->
                        <label for="contraseña">Contraseña</label><br>
                        <input type="password" name="password" maxlength="8" required>
                        <h5>*Combinación de números, mayúsculas y símbolos especiales</h5>
                        <br/>
                        <br/>
                        <input type="submit" name="submit" value="Registrarse">
                        <a href="<?php echo RUTA_URL;?>/IniciarSesionU_Controller">Iniciar sesión</a>
                    </form>
                </td>
            </tr>
        </table>
    </center>

    
<!-- se carga el pie de pagina -->
<?php require_once RUTA_APP.'/views/inc/footer.php';?>

