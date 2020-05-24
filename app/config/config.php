<?php
    /****************************
    * Definicion de constantes  *
    *****************************/

    //Ruta de la aplicación
    
    define('RUTA_APP',dirname(dirname(__FILE__)));

    //Ruta url
    //define('RUTA_URL','https://protein-mix.000webhostapp.com/Protein-Mix'); //ruta para servidor
    define('RUTA_URL','http://localhost/proteinmix');//ruta cuando se esta desarrollando
    
    define('NOMBRE_SITIO','PROTEIN-MIX');

    //Configuración a la base de datos localmente
    define('DB_HOST','localhost');
    define('DB_USER','edumilo');
    define('DB_NAME','protein_mix');
    define('DB_PASSWORD','980919');


    //Configuración a la base de datos en servidor
    /*define('DB_HOST','localhost');
    define('DB_USER','id13567294_edumilo');
    define('DB_NAME','id13567294_protein_mix');
    define('DB_PASSWORD','rv&S)GcH8AXykh5X');*/
?>