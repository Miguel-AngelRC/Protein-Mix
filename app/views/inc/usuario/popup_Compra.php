<div class="overlay" id="overlay">
	<div class="popup" id="popup">
		<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
			
		<div id="contenedor_Imagen">
			<img src="" alt="vitamina C">
		</div>
		
		<div id="contenido">
			<h3 id="producto"></h3>
			<h4 id="descripcion"></h4>
			<h6 id="cantidad"></h6>
			<h6 id="msj"></h6>
			<div id="btnAcciones">
				<a class="opciones" onClick = "agregar()">Agregar</a>
            	<a class="opciones" onClick = "quitar()">Quitar</a>
	           	<a class="opciones" href="<?php echo RUTA_URL;?>/Paginas_Controller/compra">Comprar</a>
			</div>
	
			<div id="datos">
				<p id="st">Stock:</p>
				<p id="stock"></p>
				<p id="precio"></p>
			</div>
		</div>
	</div>
</div>