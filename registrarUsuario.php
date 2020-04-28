<?php
    $host_db = "localhost";
    $usuario_db = "edumilo";
    $contraseña_db = "980919";
    $nombrebd = "protein_mix";
    $nombretabla = "usuario";
    
    $conexion = new mysqli($host_db, $usuario_db, $contraseña_db, $nombrebd);
    if ($conexion->connect_error) {
        die("La conexion falló: " . $conexion->connect_error);
    }
    $buscarUsuario = "SELECT * FROM $nombretabla WHERE nombre = '$_POST[username]' and apellidos = '$_POST[lastname]' and correo = '$_POST[email]';";
    $result = $conexion->query($buscarUsuario);
    $count =  mysqli_num_rows($result);

    if ($count == 1) {
        echo "<script>alert('El usuario ya existe.');</script>";//ventana emergente, sí funciona
        echo "<script>alert('Por favor ingrese de nuevo.');</script>";//ventana emergente, sí funciona
        //header("Location:index.html");si redirecciona pero no muestra las ventanas emergentes
    }
    else{
        $form_pass = $_POST['password'];
        $hash = password_hash($form_pass, PASSWORD_BCRYPT);
        $query = "INSERT INTO $nombrebd.$nombretabla (nombre,apellidos,ciudad,calle,numero,correo,contrasena) VALUES('$_POST[username]','$_POST[lastname]','$_POST[city]','$_POST[street]','$_POST[number]','$_POST[email]','$hash');";
        if ($conexion->query($query) === TRUE) {
            echo "<script>alert('¡Se ha registrado exitosamente!');</script>";//ventana emergente, no la muestra y redirecciona
            header("Location:login.html");//redireccionar para que inicie sesión el usuario, sí redirecciona
        }
        else {
            echo "<script>alert('No se realizó correctamente su registro. Por favor intente de nuevo.');</script>";//ventana emergente
            //echo "Error al crear el usuario." . $query . "<br>" . $conexion->error;
        }
    }
    mysqli_close($conexion);
?>