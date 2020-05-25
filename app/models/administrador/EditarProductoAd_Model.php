<?php
    Class EditarProductoAd_Model{

        private $db;
        private $idProducto;

        private $nombreProducto;
        private $descripcion;
        private $precio;
        private $stock;
        private $idCategoria;

        public function __construct () {
            $this->db = new Base;//Hacer conexion con el constructor de Base
            $this->idProducto = $_POST['idProducto'];

            $this->nombreProducto = $_POST['nameProducto'];
            $this->descripcion = $_POST['description'];
            $this->precio = $_POST['price'];
            $this->stock = $_POST['stock'];
            $this->idCategoria = $_POST['idCategoria'];
        }

        public function consultaProducto(){
            try {
                $consulta=$this->db->query("SELECT * FROM ".DB_NAME.".Producto  WHERE idProducto = '".$this->idProducto."'");
                return $this->db->registro();  
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }

        public function actualizaProducto(){
            try {
                $consulta=$this->db->query("UPDATE ".DB_NAME.".Producto SET idProducto = '".$this->idProducto,"',nombreProducto = '".$this->nombreProducto."',descripcion = '".$this->descripcion."',precio = ".$this->precio.",stock = ".$this->stock.",idCategoria = ".$this->idCategoria."");
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }
    }
?>