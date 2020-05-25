<?php
    Class EditarProductoAd_Controller extends Controller_Ad{
        
        public function  __construct(){
            $this->vista('editarProductoAd');
        }

        //carga pagina index metodo por default
        public function index(){

        }
        
        public function registroProducto(){
            //se incluye y crea una instancia del modelo EditarProductoAd_Model
            $registrar = $this->modelo('EditarProductoAd_Model');

            $imprimeFila=$consulta->consultaProducto();

            $datos;
            $i=0;
            foreach ($imprimeFila as $e) {
                $fila;
                $fila['idProducto'] = (int) $e->idProducto;
                $fila['descripcion'] = (string) $e->descripcion;
                $fila['precio'] = (int) $e->precio;
                $fila['stock'] = (int) $e->stock;
                $fila['idCategoria'] = (int) $e->idCategoria;
                $datos[$i] = $fila;
            }
            return $datos;
        }
    }
?>