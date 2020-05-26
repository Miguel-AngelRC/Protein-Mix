function vaciarCarrito (ruta){
	rutaArchivo = ruta+"/Paginas_Controller/vaciarCarrito"

	$.ajax({
		url: rutaArchivo,
	   type: 'POST',
   });

   $("#btnComprarFlotante").hide(200);
	$("#cantidadEnCarrito").hide(200);
	$(".vaciarCarrito").hide(200);
}