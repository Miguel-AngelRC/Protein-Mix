<?php
    Class EditarProductoAd2_Controller extends Controller_Ad{
        
        public function  __construct(){
            $this->vista('editarProductoAd2');
        }

        //carga pagina index metodo por default
        public function index(){

        }

        //Función
        public function obtenerProducto(){
            //se incluye y crea una instancia del modelo EditarProductoAd_Model
            $registrar = $this->modelo('EditarProductoAd_Model');

            
        }
    }
?>