<?php
    Class EditarProductoAd_Controller extends Controller_Ad{
        
        public function  __construct(){
            $this->vista('editarProductoAd');
        }

        //carga pagina index metodo por default
        public function index(){

        }
        
        //Función verIdProducto que llama a consultaProducto
        public function verProducto(){
            //se incluye y crea una instancia del modelo EditarProductoAd_Model
            $registrar = $this->modelo('EditarProductoAd_Model');

            //$hola=$registrar->recibeRegistro();
        }
        
        public function recibeRegistro(){
            $fila=mysqli_result::fetch_array($consulta);
            echo $fila['idProducto']. "-". $fila ['nombreProducto']. "-". $fila ['descripcion']. "-". $fila ['precio']. "-". $fila ['stock']. "-". $fila ['idCategoria'];
        }
    }
?>