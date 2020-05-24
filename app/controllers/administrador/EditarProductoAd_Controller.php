<?php
    Class EditarProductoAd_Controller extends Controller_Ad{
        
        public function  __construct(){
            $this->vista('editarProductoAd');
        }

        //carga pagina index metodo por default
        public function index(){

        }

        //Función registrarProducto que llama a verificarProducto o a insertarProducto
        public function registrarProducto(){
            //se incluye y crea una instancia del modelo EditarProductoAd_Model
            $registrar = $this->modelo('EditarProductoAd_Model');

            if ($registrar->consultaProducto()) {
                echo "<script>alert('Este producto sí existe.');</script>";//ventana emergente
                $this->vista('editarProductoAd2');
            }
        }
    }
?>