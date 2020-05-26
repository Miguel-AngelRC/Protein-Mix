function eliminarProducto(idProducto, ruta){
    if(confirm("Estás seguro de eliminar este producto")){
      //  traerDatosEliminar(idCategoria,idProducto,ruta);
        console.log(idProducto+"  "+ruta);
      let rutaArchivo = ruta+"/EliminarProductoAd_Controller/eliminaProducto";
      
      $.ajax({
        url: rutaArchivo,
	   data: {idProducto},
	   type: 'POST',
	   success: function (response){
		   //response = JSON.parse(response);
           console.log(response);
           location.reload();
	   }
      }) ;
    }
}    