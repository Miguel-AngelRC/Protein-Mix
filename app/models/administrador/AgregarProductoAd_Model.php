<?php
    Class AgregarProductoAd_Model{

        private $db;
        private $nombreProducto;
        private $descripcion;
        private $precio;
        private $stock;
        private $categoria;

        public function __construct () {
            $this->db= new Base;//Hacer conexion con el constructor de Base
            $this->nombreProducto = $_POST['nameProducto'];
            $this->descripcion = $_POST['description'];
            $this->precio = $_POST['price'];
            $this->stock = $_POST['stock'];
            $this->categoria = $_POST['category'];
        }

        //Verifica si ya existe el producto a agregar
        public function verificarProducto(){
            try {
                $this->db->query("SELECT * FROM ".DB_NAME.".Producto  WHERE nombreProducto = '".$this->nombreProducto."'");
                return $this->db->rowCount()==1;//retorna true o false
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
                return false;
            }
        }

        //Inserta el producto
        public function insertarProducto(){
            try {   
                $this->db->query("INSERT INTO ".DB_NAME.".Producto (nombreProducto,descripcion,precio,stock,idCategoria) VALUES('".$this->nombreProducto."','".$this->descripcion."','".$this->precio."','".$this->stock."','".$this->categoria."');");
                $this->db->execute();
                $this->db->query("SELECT MAX(idProducto) from ".DB_NAME.".Producto ");
                $resultado = $this->db->Registro();
                $res;
                foreach ($resultado as $idP) {
                    $res = (int) $idP;
                }
                return  $res;
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
                return false;
            }
            
        }

        public function eliminaProductoInsertado($idProducto){
            try {   
                $this->db->query("DELETE FROM ".DB_NAME.".Producto WHERE idProducto=".$idProducto);
                $this->db->execute();
                return  true;
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
                return "";
            }
        }
    }
?>