<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form class="form-register" method="post" action="<?php echo RUTA_URL;?>/AgregarProductoAd_Controller/registrarProducto" enctype="multipart/form-data">
        <h4>Formulario para agregar un nuevo producto</h4>    
        <!--Nombre del producto a agregar-->
        <label class="etiqueta" for="nombreProducto">Nombre del producto</label>
            <input class="controls" id="nombreProducto" type="text" name="nameProducto" maxlength="50" placeholder="Escriba el nombre del producto" required>
        <br>
        <br>
        <!--Descripción del producto a agregar-->
        <label class="etiqueta" id="descripcion">Descripción</label>
            <textarea class="controls" name="description" id="descripcion" cols="50" rows="6" placeholder="Escriba una breve descripción acerca del producto"></textarea>
        <br>
        <br>        
        <!--Precio del producto a agregar-->
        <label class="etiqueta" id="precio">Precio</label>
            <input class="controls" type="text" name="price" maxlength="50" placeholder="Escriba el precio del producto" required>
        <br>
        <br>  
        <!--Stock del producto a agregar-->
        <label class="etiqueta" id="stock">Stock</label>
            <input class="controls" type="text" name="stock" maxlength="50" placeholder="Escriba la cantidad de productos"  required>
        <br>
        <br>
        <!--Categoria del producto a agregar-->
        <label class="etiqueta" id="categoria">Categoria (del 1 al 13)</label>
            <input class="controls" type="text" name="category" maxlength="50" placeholder="Escriba la categoría a la que pertenece el producto (1-13)" required>
        <br>
        <br>

        Añadir imagen: <input name="archivo" id="archivo" type="file"/><br>
        <br>
        <input class="botons" type="submit" value="Agregar producto">
    </form>
</body>
</html>