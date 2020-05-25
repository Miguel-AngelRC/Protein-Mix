<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form id="formRegistrar" method="post" action="<?php echo RUTA_URL;?>/AgregarProductoAd_Controller/registrarProducto">
            <!--Nombre del producto a editar-->
        <label>Nombre del producto</label>
            <input id="producto" type="text" name="nameProducto" values="" required>
        <br>
        <br>
        <!--Descripción del producto a editar-->
        <label>Descripción</label>
            <textarea id="descripcion" name="description" cols="50" rows="6"></textarea>
        <br>
        <br>        
        <!--Precio del producto a editar-->
        <label>Precio</label>
            <input id="precio" type="text" name="price" values="" required>
        <br>
        <br>  
        <!--Stock del producto a editar-->
        <label>Stock</label>
            <input id="stock" type="text" name="stock" values="" required>
        <br>
        <br>
        <!--Categoria del producto a editar-->
        <label>Categoria</label>
            <input for="categoria" type="text" name="category" maxlength="50" values="" required>
        <br>
        <br>-->
        <input type="submit" value="Editar producto">
</body>
</html>