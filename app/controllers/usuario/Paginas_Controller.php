<?php
    SESSION_START();

    class Paginas_Controller extends Controller_Us{
        
        private $modeloTarjeta;
        private $sesionActiva = false;

        
        public function  __construct (){
            //se incluye y crea una instancia del modelo Tarjetas_Model
            $this->modeloTarjeta = $this->modelo('Tarjetas_Model'); 
        }

        public function inserta_Actualiza_VentaDiaria (){
            $modelo = $this->modelo('actualizaVentaDiaria');
            $modelo->inserta_Actualiza_VentaDiaria();
        }

        public function cerrarSesion(){
            SESSION_DESTROY();
            SESSION_START();
            $_SESSION["cantidadTotal"]=0;
            $_SESSION["productos"]=[];
            echo "<script>window.location.href='".RUTA_URL."/Paginas_Controller/'</script>";
        }



        /*<<<<<<METODOS PARA PAGINA PRINCIPAL >>>>>>*/

        //carga la página principal 
        public function index(){ 
            $this->vista('paginaPrincipal');
            if (isset($_SESSION["nombre"])){
                $this->inserta_Actualiza_VentaDiaria();
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

        //pagína e
        public function compraRealizada(){
            $this->vista('construccion');
        }

         //pagína en compra
         public function compra(){
            if(isset($_SESSION["nombre"])){
                if(count($_SESSION["productos"])>0){
                    $this->vista('compra');
                    if (isset($_SESSION["nombre"])){
                        echo "<script>sesionActiva('".$_SESSION["nombre"]."'); </script>";
                    }else{
                        echo "<script> sinSesion();    </script>";
                    } 
                }else{
                    echo "<script> alert('No hay productos en el carrito'); 
                            window.history.back();
                    </script>";
                }
            }else{
                echo "<script> alert('Inicia sesión primero'); 
                            window.history.back();
                    </script>";
            }
        }

        public function insertarCompra (){
            $numTarjeta = $_POST["numTarjeta"];
            $inserCompra = $this->modelo('Compras_Model'); 
            $inserCompra->insertarCompra($numTarjeta);
            echo "Listo";
        }


        /*<<<<<<METODOS PARA PAGINA CATEGORIA>>>>>>*/

        //Carga pagina categoria y se pasa como parametro el id de la categoria
        public function categoria($categoria){

            $this->vista('categoria',$categoria);
            
            if (isset($_SESSION["nombre"])){
                echo "<script>
                        sesionActiva('".$_SESSION["nombre"]."');
                    </script>";
            }else{
                echo "<script>
                        sinSesion();
                    </script>";
            }   
        }

        public function busqueda($resultado){
            $this->vista('busqueda',$resultado);
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

        //Id de los productos buscados
        public function idProductosBusqueda (){
            
            if (strlen($_POST["buscar"])>0){
                $idProductos = $this->modeloTarjeta->idProductosBusqueda($_POST["buscar"]);

                if(count($idProductos)>0){
                  
                    $idArray;  
                    foreach ($idProductos as $produc) {//extrae los id del resultado
                        $fila;
                        $fila ["idProducto"] = $produc->idProducto;
                        $fila ["idCategoria"]= $produc->idCategoria;
                        $idArray [] = $fila;
                    }
                    $this->busqueda($idArray);
                }else{
                    $this->vista('sinResultados');
                }
            }else{
                $this->vista('sinResultados');
            }
        }



        //Coneguir datos de tupla en tupla de producto pero de una categoria especifica
        public function tarjetasProductos($idCategoria){
            return $this->modeloTarjeta->obtenerDatosProductos($idCategoria);
        }
 
        //obtener los datos  de un producto por Ajax
        public function datosProducto(){
            $datosProducto = $this->tarjetasProductos($_POST["idProduc"]);
            $datosProducto = json_encode($datosProducto);
            echo  ($datosProducto);
        }

        /*Metodos para compra*/
        public function agregar (){
            $idProducto = $_POST["idProducto"];
                if (count($_SESSION["productos"])>0){
                    $encontrado = false;
                    for($i=0; $i<count($_SESSION["productos"]); $i++) {
                        if (isset($_SESSION["productos"][$i]["idProducto"]) && $_SESSION["productos"][$i]["idProducto"]== $idProducto){
                            $encontrado = true; 
                            if ($this->stockProducto($idProducto) > $_SESSION["productos"][$i]["cantidad"]){
                                $_SESSION["productos"][$i]["cantidad"]+=1;
                                $_SESSION["cantidadTotal"]+=1;
                                echo json_encode(true); 
                                break;
                            }else{
                                echo json_encode(false); 
                                break;
                            }
                        }
                    }

                    if(!$encontrado){
                        if ($this->stockProducto($idProducto) > 1){
                            $_SESSION["productos"] [] = [
                                "idProducto" => $idProducto,
                                "cantidad" => 1];
                                $_SESSION["cantidadTotal"]+=1;
                            echo json_encode(true);
                        }else{
                            echo json_encode(false);
                        }
                    }
                }else{
                    if ($this->stockProducto($idProducto) > 1){
                        $_SESSION["productos"] [] = [
                                "idProducto" => $idProducto,
                                "cantidad" => 1];
                        $_SESSION["cantidadTotal"]+=1;
                        echo json_encode(true);
                    }else{
                        echo json_encode(false);
                    }
                }
                
        }

    //Obtener stock de un producto
     public function stockProducto ($idProducto){
        $stock = (int)($this->modeloTarjeta->stockProducto($idProducto));
        return $stock;
     }

     //Obtener stock de un producto
     public function precioProducto ($idProducto){
        $precio = (int)($this->modeloTarjeta->precioProducto($idProducto));
        return $precio;
     }

     //Obtener nombre de un producto
     public function nombreProducto ($idProducto){
        $nombre = ($this->modeloTarjeta->nombreProducto($idProducto));
        return $nombre;
     }

        /*Metodos para compra*/
        public function quitar (){
            $idProducto = $_POST["idProducto"];
           
            if (count($_SESSION["productos"])>0){
                $encontrado = false;

                for($i=0; $i<count($_SESSION["productos"]); $i++) {
                    if (isset($_SESSION["productos"][$i]["idProducto"]) && $_SESSION["productos"][$i]["idProducto"]== $idProducto){
                        if($_SESSION["productos"][$i]["cantidad"]>0){
                            $_SESSION["productos"][$i]["cantidad"]-=1;
                            $_SESSION["cantidadTotal"]-=1;
                            if($_SESSION["productos"][$i]["cantidad"]==0){
                                $this->recorrerArreglo($i);    
                            }
                        }
                        $encontrado = true; 
                        break;
                    }
                }
                if(!$encontrado){
                    echo json_encode("Aún no esta agregado");
                }
            }else{
                echo json_encode("Carrito vacio");
            }
        }

        //recorrer arreglo para cuando se elimina
        public function recorrerArreglo($indice){
            $largoArray = count($_SESSION["productos"]);
            if ($largoArray>0){//valiar que el arreglo no este vacio
                    for ($i=$indice; $i < $largoArray-1; $i++) { 
                        $_SESSION["productos"][$i] = $_SESSION["productos"][$i+1];//se recorre
                    }
                    unset($_SESSION["productos"][ $largoArray-1]);//se elimina el ultimo elemento
            }
        }

        public function cantidadTotal(){
            echo $_SESSION["cantidadTotal"];
        }
        
        public function vaciarCarrito(){
            if(isset($_SESSION["cantidadTotal"])){
                $_SESSION["cantidadTotal"]=0;
                $_SESSION["productos"]=[];
            }
        }

        //Obtener cantidad a comprar de cierto producto
        public function cantidadProducto (){
            $idProducto = $_POST["idProducto"];
            $cantidad = 0;
            if (count($_SESSION["productos"])>0){
                $encontrado = false;
                for($i=0; $i<count($_SESSION["productos"]); $i++) {
                    if (isset($_SESSION["productos"][$i]["idProducto"]) && $_SESSION["productos"][$i]["idProducto"] == $idProducto){
                        $cantidad = $_SESSION["productos"][$i]["cantidad"];
                        echo json_encode($cantidad);
                        $encontrado = true; 
                        break;
                    }
                }

                if(!$encontrado){
                   echo json_encode($cantidad);
                }
            }else{
                echo json_encode($cantidad);
            }
        }

        public function conocenos(){
            $this->vista("conocenos");
            if (isset($_SESSION["nombre"])){
                echo "<script>sesionActiva('".$_SESSION["nombre"]."'); </script>";
            }else{
                echo "<script>
                        sinSesion();
                    </script>";
            } 
        }

}
?>