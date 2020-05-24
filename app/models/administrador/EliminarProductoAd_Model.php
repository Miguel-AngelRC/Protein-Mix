<?php
    Class EliminarProductoAd_Model{

        private $db;
        private $nombreProducto;
        private $categoria;

        public function __construct () {
            $this->db= new Base;//Hacer conexion con el constructor de Base
            $this->nombreProducto = $_POST['nameProducto'];
            $this->categoria = (int)$_POST['category'];
        }

        public function verificarProducto(){
            try {
                $consulta = "SELECT idProducto FROM ".DB_NAME.".Producto  WHERE nombreProducto = '".$this->nombreProducto."' AND idCategoria = ".$this->categoria.";";
                $this->db->query($consulta);
                return $this->db->rowCount()==1; //retorna true o false
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
                return false;
            }
        }

        public function eliminarProducto(){
            try {   
                $this->db->query("DELETE FROM ".DB_NAME.".Producto WHERE nombreProducto = '".$this->nombreProducto."' AND idCategoria= ".$this->categoria);
                $this->db->execute();
                return true;
            } catch (PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
                return false;
            }
        }
    }
?>