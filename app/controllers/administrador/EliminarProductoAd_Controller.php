<?php
    Class EliminarProductoAd_Controller extends Controller_Ad{
        
        public function  __construct(){
            $this->vista('eliminarProductoAd');
        }

        //carga pagina index metodo por default
        public function index(){

        }

        //Función ubicarProducto que llama a verificarProducto o a eliminarProducto
        public function ubicarProducto(){
            //se incluye y crea una instancia del modelo EliminarProductoAd_Model
            $registrar = $this->modelo('EliminarProductoAd_Model');

            if ($registrar->verificarProducto()) {
                echo "<script>alert('Este producto no existe. Por favor ingrese otro.');</script>";//ventana emergente
                $this->vista('eliminarProductoAd');
            }
            else{
                if ($registrar->eliminarProducto()) {
                    echo "<script>alert('Se ha eliminado el producto.');</script>";//ventana emergente
                }
                else{
                    echo "<script>alert('No se eliminó el producto. Por favor intente de nuevo.');</script>";//ventana emergente
                    $this->vista('eliminarProductoAd');
                }
            }
        }
    }
?>