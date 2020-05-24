<?php
    Class AgregarProductoAd_Controller extends Controller_Ad{
        
        public function  __construct(){
            $this->vista('agregarProductoAd');
        }

        //carga pagina index metodo por default
        public function index(){

        }

        //Función registrarProducto que llama a verificarProducto o a insertarProducto
        public function registrarProducto(){
            //se incluye y crea una instancia del modelo AgregarProductoAd_Model
            $registrar = $this->modelo('AgregarProductoAd_Model');

            if ($registrar->verificarProducto()) {
                echo "<script>alert('Este producto ya existe. Por favor ingrese otro.');</script>";//ventana emergente
                $this->vista('agregarProductoAd');
            }
            else{
                if ($registrar->insertarProducto()) {
                    echo "<script>alert('Se ha registrado el producto.');</script>";//ventana emergente
                }
                else{
                    echo "<script>alert('No se agregó correctamente el producto. Por favor intente de nuevo.');</script>";//ventana emergente
                    $this->vista('agregarProductoAd');
                }
            }
        }
    }
?>