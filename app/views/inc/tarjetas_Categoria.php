<!-- Crea las tarjetas de los productos o categoria -->

<h1 id="subtitulo">Todas las categorías</h1> 
    <div class="linea"></div>

<?php //ciclo para imprimir todas las terjetas
    $i=1;//control de id
    $datosTarjeta;
    do{
;?>
    <section class="contenedor_tarjeta"> 
    <?php 
        //ciclo para imprimir  dos tarjetas en el section
        for ($j=1;$j<=2;$j++,$i++){
        //se obtienen datos y si esta vacio se evalua
        $datosTarjeta = $this->tarjetasCategoria($i);  
        
        if($datosTarjeta["seguir"]){
    ?>

        <article class="tarjeta">
            <div class="descripcion">
                <h2><?php echo$datosTarjeta["titulo"]?></h2>
                <p> <?php echo$datosTarjeta["descripcion"]?></p>
                <a class="verMas" href="<?php echo RUTA_URL;?>/Paginas_Controller/categoria/<?php echo $i?>"><div>Ver más</div></a>
            </div>
            <img class="img_producto" src="<?php echo RUTA_URL;?>/img/vitaminaC.jpg" alt="Vitamina C">
        
        </article>
           
    <?php   }//lleve if 
        }//llave for?>

    </section>  
<?php }while($datosTarjeta["seguir"]);//llave whule?>