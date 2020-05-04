<!-- se carga la cabecera -->
<?php require_once RUTA_APP.'/views/inc/header.php';?>

<h1><?php echo $datos[0];?></h1>
<!-- <?php echo RUTA_APP;?> -->
<ul>
//imprime los usuarios registrados
<?php foreach ($datos[1] as $usuario ): ?>
    <li><?php echo $usuario-> idUsuario. '----'.$usuario-> nombre; ?> </li>
<?php endforeach;?>

</ul>
<!-- se carga el pie de pagina -->
<?php require_once RUTA_APP.'/views/inc/footer.php';?>


