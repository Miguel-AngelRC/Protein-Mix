<?php
    Class EditarProductoAd_Model{

        private $db;
        private $idProducto;

        private $nombreProducto;
        private $descripción;
        private $precio;
        private $stock;

        public $fila;
        public $consulta;

        public function __construct () {
            $this->db = new Base;//Hacer conexion con el constructor de Base
            $this->idProducto = $_POST['idProducto'];
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
                $consulta=$this->db->query("UPDATE ".DB_NAME.".Producto SET nombreProducto = '".$this->nombreProducto."',descripcion = '".$this->descripcion."',precio = ".$this->precio.",stock = ".$this->stock."");
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }
    }
?>