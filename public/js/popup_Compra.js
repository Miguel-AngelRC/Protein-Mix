// var btnAbrirPopup = document.getElementBy('btn-abrir-popup'),
	overlay = document.getElementById('overlay'),
	popup = document.getElementById('popup'),
	btnCerrarPopup = document.getElementById('btn-cerrar-popup');

// btnAbrirPopup.addEventListener('click', function(){
// 	overlay.classList.add('active');
// 	popup.classList.add('active');
// });

function abrirPopup (idProducto, ruta){
	overlay.classList.add('active');
	popup.classList.add('active');

	traerDatos(idProducto,ruta);
};

btnCerrarPopup.addEventListener('click', function(e){
	e.preventDefault();
	overlay.classList.remove('active');
	popup.classList.remove('active');
});

function traerDatos (idProducto,ruta){
	ruta += "/Paginas_Controller/aux/" 

	$.ajax({
 		url: ruta,
		data: {idProducto},
		type: 'POST',
		success: function (response) {
			if(!response.error) {
				var datosTarjeta = JSON.parse(response);//convetir el Json 
				$('#contenido #producto').text(datosTarjeta["titulo"]);
				$('#contenido #descripcion').text(datosTarjeta["descripcion"]);
				$('#contenido #precio').text("Precio: "+datosTarjeta["precio"]);
				$('#contenido #stock').text("Stock: "+datosTarjeta["stock"]);
				console.log(datosTarjeta["titulo"]);
			}
        } 
    })
}