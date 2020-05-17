<?php
    /*******************************************/
    /*Archivo que inicializa los demás archivos*/
    /*******************************************/

    //Cargar archivo config
    require_once 'config/config.php'; //Configuración de rutas

    /*Autoload, carga todos los archivos de la carpeta library
    spl_autoload_register(function ($nombreClase){
        require_once 'library/'.$nombreClase.'.php';
    });*/

    //Cargar librerias (caperta library)
    require_once 'library/Base.php';//Conexión con la base 
    require_once 'library/controller.php'; //Conexión entre los modelos y vistas
    require_once 'library/CoreAd.php';//Nucleo de la aplicación
?>