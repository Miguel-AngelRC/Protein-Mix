<!-- Encabezado -->
<header >
        <h1 id="titulo">Protein-Mix</h1>
</header>

<!-- Menú de navegación -->
<nav id="menu">
    <ul>
        <li id="inicio">
          <a href="<?php echo RUTA_URL;?>/Paginas_Controller/index">Inicio</a>
        </li>
        <li id="perfil">
            <div>Perfil</div>
            <ul id="sub_menu">
                <li id="registrarse" class="item " > <a href="<?php echo RUTA_URL;?>/"> Registrarse</a></li>
                <li id="iniciarSesion" class="item"><a href="<?php echo RUTA_URL;?>/IniciarSesionU_Controller">Iniciar Sesión</a></li>
                <li id="cerrarSesion" class="item"><a href="<?php echo RUTA_URL;?>/Paginas_Controller/cerrarSesion">Cerrar sesión</a></li>
            </ul>  
         </li>
    </ul>
</nav>

<!-- Carrito -->

<!-- <h3><?php print_r ($_SESSION["productos"])?></h3> -->

<!-- Campo de busqueda -->
<section id="buscar">
    <form  method="post" action="<?php echo RUTA_URL;?>/Paginas_Controller/idProductosBusqueda">
        <input id="input_buscar" name="buscar" type="text" >
            <input id="btn_buscar" type="submit" value="Buscar">        
    </form>
</section>
