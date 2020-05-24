<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="formRegistrar" method="post" action="<?php echo RUTA_URL;?>/EliminarProductoAd_Controller/ubicarProducto">
        <!--Nombre del producto a eliminar-->
        <label for="nombreProducto">Nombre del producto a eliminar</label>
            <input id="nombreProducto" type="text" name="nameProducto" maxlength="50" required>
        <br>
        <br>
        <!--Categoría del producto a eliminar-->
        <label for="categoria">Id de la categoría del producto a eliminar</label>
            <input id="categoria" type="text" name="category" maxlength="50" required>
        <br>
        <br>
        <input type="submit" value="Eliminar producto">
    </form>
</body>
</html>