
overlay2 = document.getElementById('overlay2'),
popup2 = document.getElementById('popup2'),
btnCerrarPopup2 = document.getElementById('btn-cerrar-popup2');


function abrirPopupCompraRealizada (ruta){
	

	if(tarjeta()){

		rutaArchivo = ruta+"/Paginas_Controller/insertarCompra";
		var numTarjeta = $("#tarjeta").val();
		$.ajax({
			url: rutaArchivo,
		   	data: {numTarjeta},
	   		type: 'POST',
	   		success:function (response){
			 console.log(response)
	   	}
		});

		overlay2.classList.add('active');
		popup2.classList.add('active');
	}
}

btnCerrarPopup2.addEventListener('click', function(e){
e.preventDefault();
overlay2.classList.remove('active');
popup2.classList.remove('active');
});



function tarjeta (){
	var tarjeta = $("#tarjeta").val();
	console.log(tarjeta);

	if (tarjeta){   
		if(parseInt(tarjeta)){
			if(tarjeta.length == 16 ){
				return true;
			}else if(tarjeta.length > 16 ){
				alert("digitos demás (16)");
				return false;
			}else{
				alert("faltan digitos (16)");
				return false;
			}
		}else{
			alert("Ingrese un número de tarjeta valido");
			return false;
		}
		
	}else{
		alert("Ingrese su tarjeta");
		return false;
	}
}

//control de digitos de tarjeta
$(document).ready(function(){
	var intervaloId;
	$("#tarjeta").focus(activar);
	$("#tarjeta").blur(desactivar);

	var digitos = 16;
	function actualizarDigitos(){
		digitos = 16;
		var tarjeta = $("#tarjeta").val();
		if(parseInt(tarjeta)){
			digitosEscritos = tarjeta.length;
			digitos = digitos - digitosEscritos;
			$("#digitos").css("color","black");
			$("#digitos").css("font-weight","normal");
			$("#digitos").text("Dígitos faltantes: "+digitos);
			console.log(digitos);
			if(digitos == 0){
				$("#digitos").css("color","#FED641");
				$("#digitos").css("font-weight","bolder");
				$("#digitos").text("Listo!");
			}else if(digitos<0){
				$("#digitos").css("color","red");
				$("#digitos").css("font-weight","bolder");
				$("#digitos").text("Dígitos demás");
			}
		}else{
			$("#digitos").css("color","black");
			$("#digitos").css("font-weight","normal");
			$("#digitos").text("Dígitos faltantes: "+digitos);
		}
	}

	function activar(){
		intervaloId = setInterval(actualizarDigitos, 300);	
	}

	function desactivar(){
		clearInterval(intervaloId);
	}
});

function comprando(){
	window.history.back();
}

function recibo(){
	overlay2.classList.remove('active');
	popup2.classList.remove('active');
	window.print();
	window.history.back();
}