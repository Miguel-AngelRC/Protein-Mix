<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Caompatible" content="ie=edge">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        

    <link rel="stylesheet" href="css/encabezado.css">   
    <link rel="stylesheet" href="css/contenido.css"> 
    <link rel="stylesheet" href="css/pie.css">
    <!-- Estilos del banner -->
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/estilosBanner.css">

    <!-- Fuente -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet"> -->

        <link rel="stylesheet" href="<?php echo RUTA_URL;?>/css/encabezado.css">   
        <link rel="stylesheet" href="<?php echo RUTA_URL;?>/css/contenido.css"> 
        <link rel="stylesheet" href="<?php echo RUTA_URL;?>/css/pie.css">
        <!-- Estilos del banner -->
        <link rel="stylesheet" href="<?php echo RUTA_URL;?>/css/materialize.css">
        <link rel="stylesheet" href="<?php echo RUTA_URL;?>/css/estilosBanner.css">

        <!-- Fuente -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet"> -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet"> -->
        
    <title>Protein-Mix</title>
</head>      

<body>
    <header >
        <h1 id="titulo">Protein-Mix</h1>
    </header>

    <nav id="menu">
        <a id="inicio" href="<?php echo RUTA_URL;?>/Paginas_Controller">Inicio</a>
        <a id="perfil" href="#">Perfil</a>
    </nav>

    <section id="buscar">
        <form >
            <input id="input_buscar" name="buscar" type="text" >
            <input id="btn_buscar" type="button" value="Buscar">
        </form>
    </section>

    <!--------------------------- Banner ------------------------->
    <section id="banner">
        <div class="container">
            <div class="row">
                <div class="col s12">
                    <div class="carousel center-align" >

                        <div class="carousel-item">
                            <img src="<?php echo RUTA_URL;?>/img/vitaminaC.jpg" alt="vitaminaC">
                            <h2 class="nomProducto">vitamina C</h2>
                            <div class="linea-division"></div>
                            <p class="texto">Ayuda a formar colágeno y tejidos, es el antioxidante por excelencia, ayuda a formar neurotransmisores y mejora la depresión estacional.</p>
                        </div> 
                        
                        <div class="carousel-item">
                            <img src="<?php echo RUTA_URL;?>/img/vitaminaC.jpg" alt="vitaminaC">
                            <h2 class="nomProducto">vitamina C</h2>
                            <div class="linea-division"></div>
                            <p class="texto">Ayuda a formar colágeno y tejidos, es el antioxidante por excelencia, ayuda a formar neurotransmisores y mejora la depresión estacional.</p>
                        </div> 

                        <div class="carousel-item">
                            <img src="<?php echo RUTA_URL;?>/img/vitaminaC.jpg" alt="vitaminaC">
                            <h2 class="nomProducto">vitamina C</h2>
                            <div class="linea-division"></div>
                            <p class="texto">Ayuda a formar colágeno y tejidos, es el antioxidante por excelencia, ayuda a formar neurotransmisores y mejora la depresión estacional.</p>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--------------------------- Tarjetas ------------------------->
    <section class="contenedor_tarjeta">
        <h1 id="subtitulo">Todas las categorías</h1>
        <div class="linea"></div>

        <article class="tarjeta">
            <div class="descripcion">
                <h2>Vitamina C</h2>
                <p> Ayuda a formar colágeno y tejidos,
                    es el antioxidante por excelencia, ayuda a formar neurotransmisores 
                    y mejora la depresión estacional, mejora la salud de la vista y 
                    previene las cataratas, previene la arterioesclerosis y 
                    ayuda a reducir el colesterol.
                </p>
                <a class="verMas" href="<?php echo RUTA_URL;?>/Paginas_Controller/categoria"><div>Ver más</div></a>
            </div>
            <img class="img_producto" src="<?php echo RUTA_URL;?>/img/vitaminaC.jpg" alt="Vitamina C">
            
        </article>            
            <article class="tarjeta">
                <div class="descripcion">
                    <h2>Vitamina C</h2>
                    <p> Ayuda a formar colágeno y tejidos,
                    es el antioxidante por excelencia, ayuda a formar neurotransmisores 
                    y mejora la depresión estacional, mejora la salud de la vista y 
                    previene las cataratas, previene la arterioesclerosis y 
                    ayuda a reducir el colesterol.
                    </p>
                    <a class="verMas" href="<?php echo RUTA_URL;?>/Paginas_Controller/categoria">Ver más</a>
                </div>
                <img class="img_producto" src="<?php echo RUTA_URL;?>/img/vitaminaC.jpg" alt="Vitamina C">      
            </article>
    </section>  

    <section class="contenedor_tarjeta">
        <article class="tarjeta">
            <div class="descripcion">
                <h2>Vitamina C</h2>
                <p> Ayuda a formar colágeno y tejidos,
                    es el antioxidante por excelencia, ayuda a formar neurotransmisores 
                    y mejora la depresión estacional, mejora la salud de la vista y 
                    previene las cataratas, previene la arterioesclerosis y 
                    ayuda a reducir el colesterol.
                </p>
                <a class="verMas" href="<?php echo RUTA_URL;?>/Paginas_Controller/categoria">Ver más</a>
            </div>
            <img class="img_producto" src="img/vitaminaC.jpg" alt="Vitamina C">
        </article>

        <article class="tarjeta">
            <div class="descripcion">
                <h2>Vitamina C</h2>
                <p> Ayuda a formar colágeno y tejidos,
                    es el antioxidante por excelencia, ayuda a formar neurotransmisores 
                    y mejora la depresión estacional, mejora la salud de la vista y 
                    previene las cataratas, previene la arterioesclerosis y 
                    ayuda a reducir el colesterol.
                </p>
                <a class="verMas" href="<?php echo RUTA_URL;?>/Paginas_Controller/categoria">Ver más</a>
            </div>
            <img class="img_producto" src="img/vitaminaC.jpg" alt="Vitamina C">            
        </article>
    </section>  


<!--------------------------- pie de pagina ------------------------->

<footer>
    <h2>Siguenos</h2>
    <div id="redes">
        <a href="https://www.facebook.com/ProteinMixPM"><img src="<?php echo RUTA_URL;?>/img/facebook.png" alt="facebook"></a>
        <a href="https://www.instagram.com/pm_mix/?hl=es-la"><img src="<?php echo RUTA_URL;?>/img/instagram.png" alt="instagram"></a>
        <a href=""><img src="<?php echo RUTA_URL;?>/img/whatsapp.png" alt="whatsapp"></a>
        <a href=""><p>Conócenos más</p></a>
    </div>
</footer>

<!--------------------------- Invocar scripts ------------------------->
<script src="<?php echo RUTA_URL;?>/js/materialize.js"></script> <!-- JS de materialize -->
<script src="<?php echo RUTA_URL;?>/js/bannerConf.js"></script> <!-- JS de banner -->

</body>
</html>