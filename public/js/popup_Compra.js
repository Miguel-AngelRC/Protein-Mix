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

	// traerDatos(idProducto,ruta);
};

btnCerrarPopup.addEventListener('click', function(e){
	e.preventDefault();
	overlay.classList.remove('active');
	popup.classList.remove('active');
});



// function traerDatos (idProducto,ruta){

// 	idProd = idProducto;
// 	ruta += "/app/controllers/aux.php" 

// 	console.log(ruta);
// 	$.ajax({
//         url: ruta,
//         data: {idProd},
//         type: 'POST',
//         success: function (response) {
//           if(!response.error) {
// 			console.log(response);
//           }
//         } 
//       })
// }