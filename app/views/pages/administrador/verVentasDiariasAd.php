<table border=solid>

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