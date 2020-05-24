<!-- Crea las tarjetas de los productos-->

<h1 id="subtitulo"><?php echo $this->nombreCategoria($datos[0]);?></h1> 
    <div class="linea"></div>

<?php
    $datosTarjeta = []; //arreglo de arreglos para almacenar los datos de los productos
    $productos = $this->idProductos ($datos[0]); //obtiene arreglo con id de los productos
    $i=0;    
    while($i<count($productos)){//ciclo para imprimir todas las tarjetas
;?>
    <section class="contenedor_tarjeta"> 
    <?php 
        //se obtienen datos 
        for($j=1;$j<=2;$j++,$i++){//ciclo para imprimir de dos en dos las tarjetas
            if($i<count($productos)){
            $datosTarjeta = $this->tarjetasProductos($productos[$i]);  
            
    ?>
        <!-- Escribe tarjeta -->
        <article class="tarjeta">
            <div class="descripcion">
                <h2><?php echo $datosTarjeta["titulo"]?></h2>
                <p> <?php echo $datosTarjeta["descripcion"]?></p>
                <p class="precio">Precio $<?php echo$datosTarjeta["precio"]?></p>
                <buttom  class="btn-abrir-popup" onclick="abrirPopup(<?php echo $productos[$i]?>,'<?php echo RUTA_URL ?>')">Comprar</buttom>
            </div>
            <img class="img_producto" src="<?php echo RUTA_URL;?>/img/<?php echo $datos[0]."/".$productos[$i]?>.jpg" alt="Vitamina C">
        
        </article>
      
    <?php
            }//llave if
        }//llave segundo for
    ?>

    </section>  
<?php }//lave  while?>

<div id="contenedorAgregar"> 
    <a  id ="btnAgregar" href="<?php echo RUTA_URL;?>/AgregarProductoAd_Controller">Agregar</a>
    <a  id ="btnAgregar" href="<?php echo RUTA_URL;?>/EliminarProductoAd_Controller">Eliminar</a><!--boton agregado para prueba-->
    <a  id ="btnAgregar" href="<?php echo RUTA_URL;?>/EditarProductoAd_Controller">Editar</a><!--boton agregado para prueba-->
</div>