<?php
    Class EditarProductoAd_Controller extends Controller_Ad{
        
        public function  __construct(){
            $this->vista('editarProductoAd');
        }

        //carga pagina index metodo por default
        public function index(){

        }

        //Función verIdProducto que llama a consultaProducto
        public function verIdProducto(){
            //se incluye y crea una instancia del modelo EditarProductoAd_Model
            $registrar = $this->modelo('EditarProductoAd_Model');

            if ($registrar->consultaProducto()) {
                echo "<script>alert('Este producto sí existe.');</script>";//ventana emergente
            }
        }

        function verRegistro(){
            //se incluye y crea una instancia del modelo VerVentasDiariasAd_Model
            $consulta = $this->modelo('EditarProductoAd_Model');

            $filaRegistro = $consulta->consultaProducto();

            $registro;
        
            foreach ($filaRegistro as $registroProducto) {
                $fila;
                $fila["nombreProducto"] = $registroProducto->nombreProducto;
                $fila["descripcion"] = $registroProducto->descripcion;
                $fila["precio"] = $registroProducto->precio;
                $fila["stock"] = $registroProducto->stock;
                $fila["idCategoria"] = $registroProducto->idCategoria;
            }
            return $registro;
        }
    }
?>