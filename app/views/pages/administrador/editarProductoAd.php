<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="formRegistrar" method="post" action="<?php echo RUTA_URL;?>/AgregarProductoAd_Controller/registrarProducto"><!--FALLA DESPUÉS DE ENVIAR-->
        <!--IdProducto del producto a editar-->
        <label for="idProducto">Clave del producto</label>
            <input id="idProducto" type="text" name="idProducto" maxlength="50" required>
        <input href= type="submit" value="Editar producto">
    </form>
</body>
</html>