	overlay = document.getElementById('overlay'),
	popup = document.getElementById('popup'),
	btnCerrarPopup = document.getElementById('btn-cerrar-popup');

var stockProducto = 0;

function abrirPopup (idCategoria,idProducto, ruta){
	overlay.classList.add('active');
	popup.classList.add('active');

	traerDatos(idCategoria,idProducto,ruta);
	cantidadProducto(true);	
};

btnCerrarPopup.addEventListener('click', function(e){
	e.preventDefault();
	overlay.classList.remove('active');
	popup.classList.remove('active');
	$('#msj').text("");
});

//Obtine la cantidad a comprar de un producto
function cantidadProducto($primera) {
	var cantidad = 0;
	rutaArchivo = rutaArc+"/Paginas_Controller/cantidadProducto"
	$.ajax({
		   url: rutaArchivo,
		   data: {idProducto},
		   type: 'POST',
		success: function (response) {   
			if(response) {
				cantidad = JSON.parse(response);//convetir el Json
			}else{
			    cantidad=0;
		   }
		   $("#cantidad").text("Cantidad a comprar: "+cantidad);

		   if($primera){
				let stock = parseInt($("#stock").text());
				cantidad = parseInt(cantidad);
				$("#stock").text(stock-cantidad)
		   }
		}
	   })
}


function traerDatos (idCategoria,idProduc,ruta){	
	//Variables goblales
	idProducto = idProduc;
	rutaArc = ruta;

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
				$('#contenido #producto').text(datosTarjeta["titulo"]); 
				$('#contenido #descripcion').text(datosTarjeta["descripcion"]);
				$('#contenido #precio').text("precio: "+ datosTarjeta["precio"]);
				$('#contenido #stock').text(datosTarjeta["stock"]);
				//colocar imagen
				$('#contenedor_Imagen img').attr("src",rutaImg);//colocar ruta de vuelta
			}
        } 
	})
 }

// operaciones para carrito de compra

var idProducto;
var rutaArc;
var cantidadTotal;

 function agregar() {
	let rutaArchivo = rutaArc+"/Paginas_Controller/agregar"

	$.ajax({
		url: rutaArchivo,
	   data: {idProducto},
	   type: 'POST',
	   success: function (response){
		   response = JSON.parse(response);
		   console.log(response);
		   if (response){
		   		let stock = parseInt($("#stock").text());
			    if (stock>0){
					$("#stock").text(stock-1)
				   $('#msj').text("");
				}
			}else{
				$('#msj').text("Stock Vacío");
			}
	   }
   })
   cantidadProducto(false);
   actualizarTotal(rutaArc);
 }

function quitar() {
	rutaArchivo = rutaArc+"/Paginas_Controller/quitar"

	$.ajax({
		url: rutaArchivo,
	   data: {idProducto},
	   type: 'POST',
	   success:function (response){
		let seguir = true;
		if(response){
			var dato = JSON.parse(response);//convetir el Json 
			$('#msj').text(dato);	
			seguir=false;		
		}
		if(seguir){
			let stock = parseInt($("#stock").text());
			$("#stock").text(stock+1)
			$('#msj').text("");
		}
	   }
   })
   cantidadProducto(false);
   actualizarTotal(rutaArc);
}


function actualizarTotal (ruta){
	rutaArchivo = ruta+"/Paginas_Controller/cantidadTotal"

	$.ajax({
		url: rutaArchivo,
	   type: 'POST',
	   success:function (response){
		   if(parseInt(response)>0){
				$("#cantidadEnCarrito").text(response);
				$("#btnComprarFlotante").show(200);
				$("#cantidadEnCarrito").show(200);
				$(".vaciarCarrito").show(200);
			}else{
				$("#btnComprarFlotante").hide(200);
				$("#cantidadEnCarrito").hide(200);
				$(".vaciarCarrito").hide(200);
			}
		
	   }
   })

}

function vaciarCarrito (ruta){
	rutaArchivo = ruta+"/Paginas_Controller/vaciarCarrito"

	$.ajax({
		url: rutaArchivo,
	   type: 'POST',
	   success:function (response){

	   }
   });

   actualizarTotal(rutaArc);
   overlay.classList.remove('active');
    popup.classList.remove('active');
}



