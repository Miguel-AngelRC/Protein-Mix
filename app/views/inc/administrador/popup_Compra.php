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
			<label>Nombre del producto</label>
            <input id="producto" type="text" name="nameProducto" values="" required>
        	<br>
        	<br>
        	<!--Descripción del producto a editar-->
        	<label>Descripción</label>
            <textarea id="descripcion" name="description" cols="50" rows="6"></textarea>
        	<br>
        	<br>        
        	<!--Precio del producto a editar-->
        	<label>Precio</label>
            <input id="precio" type="text" name="price" values="" required>
        	<br>
        	<br>  
        	<!--Stock del producto a editar-->
        	<label>Stock</label>
            <input id="stock" type="text" name="stock" values="" required>
       		<br>
        	<br>
        	<!--Categoria del producto a editar
        	<label>Categoria</label>
            <input for="categoria" type="text" name="category" maxlength="50" required>
        	<br>
        	<br>-->
        	<input type="submit" value="Editar producto">
		</div>

	</div>
</div>