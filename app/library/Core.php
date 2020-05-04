<?php
    /**
     * Mapear (trear) la url ingresada en el navegador
     * 1- controlador
     * 2- método
     * 3- Parámetro
     * Ejemplo: /Productos/comprar/1
     * */ 

     class Core {
         //Variasbles para almacenar datos de la url
         protected $controladorActual = 'RegistrarU_Controller';
         protected $metodoActual = 'index';
         protected $parametros = [];

         //Constructor
         public function __construct(){
            $url = $this->getUrl();
   
            //buscar en carpeta controllers si el controlador existe
            if(file_exists('../app/controllers/'.ucwords($url[0]).'.php')){//ucwords convierte la primera letra en mayuscula
               //si existe se cambia el controlador por defecto
               $this->controladorActual = ucwords($url[0]);
               //destruir controlador
               unset($url[0]);
            }else{
               echo "<p>El controlador <strong> ".$url[0]." </strong> no existe, pero te redirecciono al controlador por default</p>";
            }

            //incluir el controlador
            require_once '../app/controllers/'.$this->controladorActual.'.php';
            $this->controladorActual = new $this->controladorActual;
            
            //Buscar si existe el metodo
            if (isset($url[1])) {//verifica si se puso un metodo en la url
               if (method_exists($this->controladorActual,$url[1])) {//verifica si ese metodo existe
                  $this->metodoActual=$url[1];
                  echo "<p>El método <strong>".$url[1]."</strong> si existe </p>";
                  unset($url[1]);
               }else{
                  echo "<p>El método <strong>".$url[1]."</strong> no existe </p>";
               }
            }

            //Si existe obtener parametros
            $this->parametros = $url ? array_values($url): []; //pasa los valores del arreglo url a parametros si no hay valores lo deja vacio    

            call_user_func_array([$this->controladorActual,$this->metodoActual],$this->parametros);            
         }

         //Creación de método para obtener la url
         public function getUrl(){
            if (isset($_GET['url'])) { //el metodo isset verifica que existan variables y que no esten vacias, devuelve false en caso contrario
               $url = rtrim($_GET['url'],'/');//rtrim borra los ultimos caracteres, en este caso /
               $url = filter_var($url,FILTER_SANITIZE_URL);//
               $url = explode('/',$url); //crea un arreglo de string, el limitador es /
               return $url;
            }
            return [$this->controladorActual];
         }
     }
?>