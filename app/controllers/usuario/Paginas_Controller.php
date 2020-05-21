<?php

    class Paginas_Controller extends Controller_Us{
        
        private $modeloTarjeta;

        public function  __construct (){
            //se incluye y crea una instancia del modelo Tarjetas_Model
            $this->modeloTarjeta = $this->modelo('Tarjetas_Model');
        }

        /*<<<<<<METODOS PARA PAGINA PRINCIPAL >>>>>>*/

        //carga la página principal 
        public function index(){ 
            $this->vista('paginaPrincipal');
        }

        //Obtiene los id de los productos de la categoria
        public function idCategorias (){
            $idCategoria = $this->modeloTarjeta->idCategorias();
            $idArray;
            //extrae los id del resultado
            foreach ($idCategoria as $produc) {
                $idArray [] = $produc->idCategoria;
            }
            return $idArray;
        }

        //Consigue los datos de una categoría con respecto a su id
        public function tarjetasCategoria($idCategoria){
            return $this->modeloTarjeta->obtenerDatosCategoria($idCategoria);
        }

        //pagína en construcción
        public function construccion(){
            $this->vista('../construccion');
        }


        /*<<<<<<METODOS PARA PAGINA CATEGORIA>>>>>>*/

        //Carga pagina categoria y se pasa como parametro el id de la categoria
        public function categoria($categoria){
            $this->vista('categoria',$categoria);
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

        public function aux(){
            $datosProducto = $this->tarjetasProductos($_POST["idProducto"]);
            $datosProducto = json_encode($datosProducto);
            echo  $datosProducto;
        }

    }
?>