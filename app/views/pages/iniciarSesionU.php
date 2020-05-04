<!-- se carga la cabecera -->
<?php require_once RUTA_APP.'/views/inc/header.php';?>
<center><table>
        <tr>
            <td>
                <form method="post" action="<?php echo RUTA_URL;?>/IniciarSesionU_Controller/validarRegistro"> 
                    <h3>Protein-Mix</h3>
                    <!--Nombre Usuario-->
                    <label for="nombre">Nombre</label><br>
                    <input type="text" name="username" maxlength="32" placeholder="Nombre" required>
                    <br/>
                    <br/>
                    <!--Contraseña-->
                    <label for="contraseña">Contraseña</label><br>
                    <input type="password" name="password" maxlength="8" placeholder="Contraseña" required>
                    <h5>*Combinación de números, mayúsculas y símbolos especiales</h5>
                    <input type="submit" name="submit" value="Iniciar sesión">
                </form>
            </td>
        </tr>
    </table></center>
<!-- se carga el pie de pagina -->
<?php require_once RUTA_APP.'/views/inc/footer.php';?>
