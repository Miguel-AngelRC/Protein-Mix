<!--------------------------- Head ------------------------->
<?php require_once RUTA_APP.'/views/inc/usuario/head.php';?>


<form action="<?php echo RUTA_URL ?>/SubirImagen_Controller/subirImagen" method="POST" enctype="multipart/form-data"/>
Añadir imagen: <input name="archivo" id="archivo" type="file"/>
<input type="submit" name="subir" value="Subir imagen"/>
</form>

<script src="<?php echo RUTA_URL;?>/js/subirImagen.js"></script> <!-- JS de eliminar -->
