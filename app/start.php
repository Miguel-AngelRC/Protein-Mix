<?php
    /*******************************************/
    /*Archivo que inicializa los demás archivos*/
    /*******************************************/

    //Cargar archivo config
    require_once 'config/config.php'; //Configuración de rutas

    //Autoload, carga todos los archivos de la carpeta library
    // spl_autoload_register(function ($nombreClase){
    //     require_once 'library/'.$nombreClase.'.php';
    // });

    //Cargar librerias (caperta library)
    require_once 'library/Base.php';//Conexión con la base 
    require_once 'library/Core.php';//Nucleo de la aplicación para usuarios

    require_once 'library/controller_Ad.php'; //Conexión entre los modelos y vistas para el administador
    require_once 'library/controller_US.php'; //Conexión entre los modelos y vistas para el administador

?>