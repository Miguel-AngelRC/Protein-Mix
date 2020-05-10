<!-- Crea las tarjetas de los productos-->

<h1 id="subtitulo"><?php echo $this->nombreCategoria($datos[0]);?></h1> 
    <div class="linea"></div>

<?php //ciclo para imprimir todas las terjetas
    $datosTarjeta;
    $productos = $this->idProductos($datos[0]);
    $i=0;    
    while($i<count($productos)){
;?>
    <section class="contenedor_tarjeta"> 
    <?php 
        //se obtienen datos 
        for($j=1;$j<=2;$j++,$i++){
            if($i<count($productos)){
            $datosTarjeta = $this->tarjetasProductos($productos[$i]);  
    ?>
        <article class="tarjeta">
            <div class="descripcion">
                <h2><?php echo$datosTarjeta["titulo"]?></h2>
                <p> <?php echo$datosTarjeta["descripcion"]?></p>
                <p class="precio">Precio $<?php echo$datosTarjeta["precio"]?></p>
                <buttom id="btn-abrir-popup" class="btn-abrir-popup" >Comprar</buttom>
            </div>
            <img class="img_producto" src="<?php echo RUTA_URL;?>/img/vitaminaC.jpg" alt="Vitamina C">
        
        </article>
      
    <?php
            }//llave if
        }//llave for?>

    </section>  
<?php }//lave primer for?>