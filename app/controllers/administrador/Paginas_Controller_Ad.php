<?php
    SESSION_START();
    class Paginas_Controller_Ad extends Controller_Ad{
        
        private $modeloTarjeta;

        public function  __construct (){
            //se incluye y crea una instancia del modelo Tarjetas_Model
            $this->modeloTarjeta = $this->modelo('Tarjetas_Model');
        }

        /*<<<<<<METODOS PARA PAGINA PRINCIPAL >>>>>>*/

        //página principal para administrador
        public function index(){
            $this->vista('paginaPrincipalAd');
            if (isset($_SESSION["nombre"])){
                echo "<script>sesionActiva('".$_SESSION["nombre"]."'); </script>";
            }else{
                echo "<script>
                        sinSesion();
                    </script>";
            }   
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
            if (isset($_SESSION["nombre"])){
                echo "<script>sesionActiva('".$_SESSION["nombre"]."'); </script>";
            }else{
                echo "<script>
                        sinSesion();
                    </script>";
            } 
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


        //obtener los datos  de un producto por Ajax
        public function datosProducto(){
            $datosProducto = $this->tarjetasProductos($_POST["idProduc"]);
            $datosProducto = json_encode($datosProducto);
            echo  ($datosProducto);
        }
        //guardar cambios en producto
        public function guardarCambios(){
            
            $idP = $_POST["idProducto"];
            $nombreP = $_POST["nombreP"];
            $descripcionP = $_POST["descripcionP"];
            $stockP = $_POST["stockP"];
            $precioP = $_POST["precioP"];

            $modifcar = $this->modelo("EditarProductoAd_Model");

            $datosProducto = $modifcar->guardarCambios($idP,$nombreP, $descripcionP,$stockP, $precioP);
            $datosProducto = json_encode($datosProducto);
            echo  ($datosProducto);
        }
    }
?>