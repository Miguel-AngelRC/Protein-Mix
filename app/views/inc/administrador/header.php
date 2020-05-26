<!-- Encabezado -->
<header >
        <h1 id="titulo">Protein-Mix</h1>
</header>

<!-- Menú de navegación -->
<nav id="menu">
    <ul>
        <li id="inicio">
          <a href="<?php echo RUTA_URL;?>/Paginas_Controller_Ad">Inicio</a>
        </li>
        <li id="perfil">
        <div>Perfil</div>
            <ul id="sub_menu">
                <li id="registrarse" class="item"><a href="<?php echo RUTA_URL;?>/RegistrarAd_Controller">Registrarse</a></li>
                <li id="iniciarSesion" class="item"><a href="<?php echo RUTA_URL;?>/IniciarSesionAd_Controller">Iniciar Sesión</a></li>
                <li id="cerrarSesion" class="item"><a href="<?php echo RUTA_URL;?>/IniciarSesionAd_Controller">Cerrar sesión</a></li>
                <li class="item"><a href="<?php echo RUTA_URL;?>/VerVentasDiariasAd_Controller">Ver ventas</a></li><!--PRUEBA: agregado link para ver ventas-->
            </ul>  
         </li>
    </ul>
</nav>

<!-- Campo de busqueda -->
<section id="buscar">
    <form >
        <input id="input_buscar" name="buscar" type="text" >
            <input id="btn_buscar" type="button" value="Buscar">        
        </form>
</section>