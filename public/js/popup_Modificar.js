	overlay = document.getElementById('overlay'),
	popup = document.getElementById('popup'),
	btnCerrarPopup = document.getElementById('btn-cerrar-popup');

var stockProducto = 0;

function abrirPopupModificar (idCategoria,idProducto,ruta){
	overlay.classList.add('active');
	popup.classList.add('active');
	console.log("abrirPopupModificar");

	traerDatosMofificar(idCategoria,idProducto,ruta);
	//cantidadProducto(true);	
};

btnCerrarPopup.addEventListener('click', function(e){
	e.preventDefault();
	overlay.classList.remove('active');
	popup.classList.remove('active');
});

function traerDatosMofificar (idCategoria,idProduc,ruta){	
	console.log("traerDatosMofificar");
	//Variables globales
	idProducto = idProduc;
	rutaArc = ruta;
	idCategori = idCategoria;

	var rutaArchivo = ruta+"/Paginas_Controller/datosProducto" ;
	var rutaImg = ruta+"/img/"+idCategoria+"/"+idProduc+".jpg";

	
	$.ajax({
 		url: rutaArchivo,
		data: {idProduc},
		type: 'POST',
		success: function (response) {
			if(!response.error) {
				var datosTarjeta = JSON.parse(response);//convetir el Json
				//Agregar contenido en ventana popup
				$('#nombreProduc').val(datosTarjeta["titulo"]); 
				$('#descripcionProduc').val(datosTarjeta["descripcion"]);
				$('#precioProduc').val(datosTarjeta["precio"]);
				$('#stockProduc').val(datosTarjeta["stock"]);
				//colocar imagen
				$('#contenedor_Imagen img').attr("src",rutaImg);//colocar ruta de vuelta

			}
        } 
	})
}

// operaciones para carrito de compra

var idProducto;
var rutaArc;
var idCategori;

 function guardarCambios() {
	console.log(idCategori);
	var nombreP = $('#nombreProduc').val();
	var descripcionP = $('#descripcionProduc').val();
	var stockP =$('#stockProduc').val();
	var precioP = $('#precioProduc').val();

	let rutaArchivo = rutaArc+"/Paginas_Controller_Ad/guardarCambios";

	$.ajax({
		url: rutaArchivo,
	   data: {idProducto,nombreP,descripcionP,stockP,precioP},
	   type: 'POST',
	   success: function (response){
		   console.log(response);
		   response = JSON.parse(response);
		   location.reload();
	   }
   })
 }
