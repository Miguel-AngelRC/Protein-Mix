<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<table>
<tr>
    <td>Id Venta Diaria</td>
    <td>Total de Compras por Día</td>
    <td>Fecha</td>
</tr>

<?php
    foreach ($datos as $registro) {  
?>
    <tr>
        <td><?php echo $registro["idVentaDiaria"]?></td>
        <td><?php echo $registro["totalComprasD"]?></td>
        <td><?php echo $registro["fecha"]?></td>
    </tr>
    
<?php 
    }//fin de foreach
?>
<a id="refrescar" href="<?php echo RUTA_URL?>/VerVentasDiariasAd_Controller/"> Refrescar </a>
</body>
</html>