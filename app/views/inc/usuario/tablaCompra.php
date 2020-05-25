<h1 id="subtitulo">Resumen de compra</h1> 
    <div class="linea"></div>

<div id="contenedorTabla">
    <table>
        <thead>
            <tr>
                <th>Nombre</th><th>Cantidad</td><th>precio</th><th>total</th>
            </tr>
        </thead>
        <?php
            $total =0;
            foreach ($_SESSION["productos"] as $producto) {
        ?>
            <tr>
                <td><?php echo $this->nombreProducto($producto["idProducto"]);?></td> <!-- Nombre -->
                <td><?php echo $producto["cantidad"] ?></td><!-- cantidad -->
                <td><?php echo $this->precioProducto($producto["idProducto"]);?></td><!-- precio -->
                <td><!-- toral -->
                    <?php 
                        $total += $producto["cantidad"]*$this->precioProducto($producto["idProducto"]);
                        echo $producto["cantidad"]*$this->precioProducto($producto["idProducto"]); 
                     ?>
                </td>
            </tr>
        <?php
            }
        ?>
    </table>
    <div id="totalContenedor" >
        <p>Total de compra:</p><p id="total" > <?php echo $total?></p>
    </div>
</div>

<div id="contenedorCompra">
        <label for="tarjeta">Número de tarjeta    </label> 
        <input id="tarjeta" type="text" required >
        
        <buttom id="btnComprar" onclick="abrirPopupCompraRealizada('<?php echo RUTA_URL;?>')" >Comprar</buttom>
        <p id="digitos"></p>
</div>