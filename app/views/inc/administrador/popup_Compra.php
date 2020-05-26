<div class="overlay" id="overlay">
	<div class="popup" id="popup">
		<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
			
		<div id="contenedor_Imagen">
			<img src="<?php echo RUTA_URL;?>/img/vitaminaC.jpg" alt="vitamina C">
		</div>
		
		<!--<div id="contenido">
			<h3 id="producto"></h3>
			<h4 id="descripcion"></h4>
			<h5 id="precio"></h5>
			<h5 id="stock"></h5>
		</div>-->

		<div id="contenido">
			<!--Nombre del producto a editar-->
			<label >Nombre producto</label>
            <input id="nombreProduc" id="producto" type="text" name="nameProducto" values="" required>
        	<br>
        	<!--Descripción del producto a editar-->
        	<label>Descripción</label>
            <textarea id="descripcionProduc" name="description" cols="50" rows="6"></textarea>
        	<br>    
        	<!--Precio del producto a editar-->
        	<label >precio</label>
            <input id="precioProduc" type="text" name="price" values="" required>
        	<br>
        	<!--Stock del producto a editar-->
        	<label >Stock</label>
            <input id="stockProduc" type="text" name="stock" values="" required>
       		<br>
        	<buttom id="btnGuardarCambios" type="submit" onclick="guardarCambios()">Efectuar cambios</buttom>
		</div>
	</div>
</div>

<script src="<?php echo RUTA_URL;?>/js/popup_Modificar.js"></script> <!-- JS de compra -->
