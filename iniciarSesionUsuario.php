<?php
    $host_db = "localhost";
    $usuario_db = "root";
    $contraseña_db = "980919";
    $nombrebd = "protein_mix";
    $nombretabla = "usuario";
    
    $conexion = new mysqli($host_db, $usuario_db, $contraseña_db, $nombrebd);
    if ($conexion->connect_error) {
        die("La conexion falló: " . $conexion->connect_error);
    }
    
    //Consulta enviada a la base de datos
    $result = mysqli_query($conexion, "SELECT contrasena FROM $nombretabla WHERE nombre = '$_POST[username]'");
    
    //La variable $row retiene el resultado de la consulta realizada en $result
    $row = mysqli_fetch_assoc($result);

    //La variable $hash contiene el hash de la contraseña en la base de datos
    $hash = $row['contrasena'];

    /*La función password_verify () verifica si la contraseña ingresada por el usuario coincide con el hash de contraseña en la base de datos.*/
    if (password_verify($_POST['password'], $hash)) {
        header("Location:paginaPrincipal.html");//cambiar a la verdadera pagina principal
    }
    else{
        echo "<script>
                alert('No se encuentra en nuestro registro. Por favor intente de nuevo.');
                window.locationf='login.html\';
            </script>";//ventana emergente
    }
    
    /*$buscarUsuario = "SELECT nombre, contrasena FROM $nombretabla WHERE  nombre = '$_POST[username]'";
    $result = $conexion->query($buscarUsuario);
    $count =  mysqli_num_rows($result);

    if ($count == 1) {
        header("Location:prueba.html");//cambiar a la verdadera pagina principal
    }
    else{
        echo "<script>alert('No se encuentra en nuestro registro. Por favor intente de nuevo.');</script>";//ventana emergente
    }
    mysqli_close($conexion);*/
?>