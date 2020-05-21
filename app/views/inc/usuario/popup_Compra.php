<div class="overlay" id="overlay">
	<div class="popup" id="popup">
		<a href="#" id="btn-cerrar-popup" class="btn-cerrar-popup"><i class="fas fa-times"></i></a>
			
		<div id="contenedor_Imagen">
			<img src="<?php echo RUTA_URL;?>/img/vitaminaC.jpg" alt="vitamina C">
		</div>
		
		<div id="contenido">
			<h3 id="producto"></h3>
			<h4 id="informacion"><?php echo$datosTarjeta["descripcion"]?></h4>
			<div id="btnAcciones">
				<a class="opciones " href="<?php echo RUTA_URL;?>/Paginas_Controller/construccion">Agregar</a>
            	<a class="opciones" href="<?php echo RUTA_URL;?>/Paginas_Controller/construccion">Quitar</a>
	           	<a class="opciones" href="<?php echo RUTA_URL;?>/Paginas_Controller/construccion">Comprar</a>
			</div>
	
			<div id="datos">
				<p>Stock: 40</p>
				<p>Precio: 40</p>
			</div>
		</div>
	</div>
</div>