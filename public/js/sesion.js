
function sesionActiva (nombre){
    //$("#cerrarSesion").css("display","block");
    $("#registrarse,#iniciarSesion").remove();
    
    $("#perfil div").text(nombre);
    $("#perfil div").width("fit-content");
    ancho = $("#perfil div").width();
    if(ancho>80){
        $(".item").width(ancho);
    }
    
}

function sinSesion (){
    $("#cerrarSesion,#usuario").remove();

    $(".item").width(80);
}

function whats(){
    alert("Contacto por WhatsApp: 272 189 1928")
}