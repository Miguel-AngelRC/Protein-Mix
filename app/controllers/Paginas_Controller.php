<?php

    class Paginas_Controller extends Controller{
        
        private $modeloTarjeta;

        public function  __construct (){
            //se incluye y crea una instancia del modelo Tarjetas_Model
            $this->modeloTarjeta = $this->modelo('Tarjetas_Model');
            
        }

        //carga pagina index (registrar usuarios) metodo por default
        public function index(){ 
            $this->vista('pages/paginaPrincipal');
        }

        

        // pagina compra
        public function comprar(){
            $this->vista('pages/comprar');
        }

        public function construccion(){
            $this->vista('pages/construccion');
        }
        
        //Coneguir datos de tupla en tupla de categoria
        public function tarjetasCategoria($idCategoria){
            return $this->modeloTarjeta->obtenerDatosCategoria($idCategoria,);
        }

        /*<<<<<<METODOS PARA PAGINA CATEGORIA>>>>>>*/

        //Carga pagina categoria
        public function categoria($categoria){
            $this->vista('pages/categoria',$categoria);
        }
        //Obtiene el nombre de la categoria
        public function nombreCategoria($idCategoria){
            return $this->modeloTarjeta->nombreCategoria($idCategoria);
        }
        //Obtiene los id de los productos de la categoria
        public function idProductos ($idCategoria){
            $idProductos = $this->modeloTarjeta->idProductos($idCategoria);
            $idArray;
            //extrae los id del resultado
            foreach ($idProductos as $produc) {
                $idArray [] = $produc->idProducto;
            }
            return $idArray;
        }

        //Coneguir datos de tupla en tupla de producto pero de una categoria especifica
        public function tarjetasProductos($idCategoria){
            return $this->modeloTarjeta->obtenerDatosProductos($idCategoria);
        }

    }
?>