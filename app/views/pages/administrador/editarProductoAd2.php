<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="post" action="<?php echo RUTA_URL;?>/">
        <label for="">Nombre del producto</label>
        <input type="text" id="" name="nameProducto" value="$registro["nombreProducto"]">
        <br>
        <label for="">Descripción</label>
        <textarea name="description" id="" cols="30" rows="10">$registro["descripcion"]</textarea>
        <br>
        <label for="">Precio</label>
        <input type="text" id="" name="price" value="$registro["precio"]">
        <br>
        <label for="">Stock</label>
        <input type="text" id="" name="stock" value="$registro["stock"]">
        <br>
        <label for="">Id de la categoria</label>
        <input type="text" id="" name="stock" value="$registro["idCategoria"]">
    </form>
</body>
</html>