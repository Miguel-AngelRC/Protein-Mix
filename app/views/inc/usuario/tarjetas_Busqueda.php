<!-- Crea las tarjetas de los productos-->
<h1 id="subtitulo">Resultado de busqueda</h1> 
    <div class="linea"></div>

<?php
    $datosTarjeta = []; // arreglo de arreglos para almacenar los datos de los productos
    $productos = $datos; // obtiene arreglo con id de los productos
    $i=0;
    while($i<count($productos)){//ciclo para imprimir todas las terjetas
;?>
    <section class="contenedor_tarjeta"> 
    <?php 
        //se obtienen datos 
        for($j=1;$j<=2;$j++,$i++){//ciclo para imprimir de dos en dos las terjetas
            if($i<count($productos)){
            $datosTarjeta = $this->tarjetasProductos($productos[$i]["idProducto"]);  
    ?>
        <!-- Escribe tarejeta -->
        <article class="tarjeta">
            <div class="descripcion">
                <h2><?php echo $datosTarjeta["titulo"]?></h2>
                <p> <?php echo $datosTarjeta["descripcion"]?></p>
                <p class="precio">Precio $<?php echo$datosTarjeta["precio"]?></p>
                <buttom  class="btn-abrir-popup" onclick="abrirPopup(<?php echo $productos[$i]['idCategoria']?>,<?php echo $productos[$i]['idProducto']?>,'<?php echo RUTA_URL ?>')">Comprar</buttom>
            </div>
            <img class="img_producto" src="<?php echo RUTA_URL;?>/img/<?php echo $productos[$i]['idCategoria']."/".$productos[$i]['idProducto']?>.jpg" alt="Vitamina C">
        
        </article>
      
    <?php
            }//llave if
        }//llave segundo for?>

    </section>  
<?php }//lave primer for?>