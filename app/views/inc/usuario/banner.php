<!--------------------------- Banner ------------------------->
<?php 
    // datos tarjeta 1
    $categoria1 = 1;
    $producto1 = rand(1,7);

    $aux = $this->tarjetasProductos($producto1);
    $nombre1 = $aux["titulo"];
    $descripcion1 = $aux["descripcion"];

    // datos tarjeta 2
    $categoria2 = 2;
    $producto2 = rand(8,10);

    $aux = $this->tarjetasProductos($producto2);
    $nombre2 = $aux["titulo"];
    $descripcion2 = $aux["descripcion"];

    // datos tarjeta 3
    $categoria3 = 3;
    $producto3 = rand(11,16);

    $aux = $this->tarjetasProductos($producto3);
    $nombre3 = $aux["titulo"];
    $descripcion3 = $aux["descripcion"];
?>

    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <div class="carousel center-align" >

                        <div class="carousel-item">
                            <img src="<?php echo RUTA_URL;?>/img/<?php echo $categoria1."/".$producto1?>.jpg" alt="vitaminaC">
                            <h2 class="nomProducto"><?php echo $nombre1?></h2>
                            <div class="linea-division"></div>
                            <p class="texto"><?php echo $descripcion1?></p>
                        </div> 
                        
                        <div class="carousel-item">
                            <img src="<?php echo RUTA_URL;?>/img/<?php echo $categoria2."/".$producto2?>.jpg"  alt="vitaminaC">
                            <h2 class="nomProducto"><?php echo $nombre2?></h2>
                            <div class="linea-division"></div>
                            <p class="texto"><?php echo $descripcion2?></p>
                        </div> 

                        <div class="carousel-item">
                            <img src="<?php echo RUTA_URL;?>/img/<?php echo $categoria3."/".$producto3?>.jpg"  alt="vitaminaC">
                            <h2 class="nomProducto"><?php echo $nombre3?></h2>
                            <div class="linea-division"></div>
                            <p class="texto"><?php echo $descripcion3?></p>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>