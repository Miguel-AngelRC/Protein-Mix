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

            if ($registrar->consultaProducto()) {
                echo "<script>alert('Si existe el producto.');</script>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form method="post" action="<?php echo RUTA_URL;?>/">
        <label for="">Nombre del producto</label>
        <input type="text" id="" name="nameProducto" value="$fila["nombreProducto"]">
        <br>
        <label for="">Descripción</label>
        <textarea name="description" id="" cols="30" rows="10">$fila["descripcion"]</textarea>
        <br>
        <label for="">Precio</label>
        <input type="text" id="" name="price" value="$fila["precio"]">
        <br>
        <label for="">Stock</label>
        <input type="text" id="" name="stock" value="$fila["stock"]">
        <br>
        <label for="">Id de la categoria</label>
        <input type="text" id="" name="stock" value="$fila["idCategoria"]">
    </form>
</body>
</html>