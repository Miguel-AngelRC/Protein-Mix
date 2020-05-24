
<table border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt">

<tr>
    <td><font face="verdana"><b>Id Venta Diaria</b></font></td>
    <td><font face="verdana"><b>Total de Compras por Día</b></font></td>
    <td><font face="verdana"><b>Fecha</b></font></td>
</tr>

<?php
    foreach ($datos as $registro) {  
?>
    <tr>
        <td><font face="verdana"><?php echo $registro["idVentaDiaria"]?></font></td>
        <td><font face="verdana"><?php echo $registro["totalComprasD"]?></font></td>
        <td><font face="verdana"><?php echo $registro["fecha"]?></font></td>
    </tr>
    
<?php 
    }//fin de foreach
?>