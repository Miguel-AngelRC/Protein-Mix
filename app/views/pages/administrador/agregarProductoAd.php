<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="formRegistrar" method="post" action="<?php echo RUTA_URL;?>/AgregarProductoAd_Controller/registrarProducto">
        <!--Nombre del producto a agregar-->
        <label for="nombreProducto">Nombre del producto</label>
            <input id="nombreProducto" type="text" name="nameProducto" maxlength="50" required>
        <br>
        <br>
        <!--Descripción del producto a agregar-->
        <label id="descripcion">Descripción</label>
            <textarea name="description" id="descripcion" cols="50" rows="6"></textarea>
        <br>
        <br>        
        <!--Precio del producto a agregar-->
        <label id="precio">Precio</label>
            <input for="precio" type="text" name="price" maxlength="50" required>
        <br>
        <br>  
        <!--Stock del producto a agregar-->
        <label id="stock">Stock</label>
            <input for="stock" type="text" name="stock" maxlength="50" required>
        <br>
        <br>
        <label id="categoria">Categoria</label>
            <input for="categoria" type="text" name="category" maxlength="50" required>
        <br>
        <br>
        <input type="submit" value="Agregar producto">
    </form>
</body>
</html>