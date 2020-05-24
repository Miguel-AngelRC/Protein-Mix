<!-- Crea las tarjetas de los productos o categoria -->

<h1 id="subtitulo">Todas las categorías</h1> 
    <div class="linea"></div>

<?php //ciclo para imprimir todas las terjetas
  
    $datosTarjeta;
    $categorias = $this->idCategorias();
    $i=0;//control de id
    while ($i<count($categorias)){
;?>
    <section class="contenedor_tarjeta"> 
    <?php 
        //ciclo para imprimir  dos tarjetas en el section
        for ($j=1;$j<=2;$j++,$i++){
            if($i<count($categorias)){
        //se obtienen datos y si esta vacio se evalua
        $datosTarjeta = $this->tarjetasCategoria($categorias[$i]);   
    ?>

    <!-- Escribe tarjeta -->
        <article class="tarjeta">
            <div class="descripcion">
                <h2><?php echo$datosTarjeta["titulo"]?></h2>
                <p> <?php echo$datosTarjeta["descripcion"]?></p>
                <a class="verMas" href="<?php echo RUTA_URL;?>/Paginas_Controller_Ad/categoria/<?php echo $categorias[$i];?>"><div>Ver más</div></a>
            </div>
            <img class="img_producto" src="<?php echo RUTA_URL;?>/img/categoria/<?php echo $categorias[$i]?>.jpg" alt="Vitamina C">
        </article>  
            <?php }//llave de if
        }//llave for?>
    </section>  
<?php }//llave while?>