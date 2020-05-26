<?php
    Class Compras_Model{
        
        private $db;
    
        public function __construct () {
            $this->db= new Base;//Hacer conexion con el constructor de Base
        }

        /***************************************/
        /*** Funciones para insertar compra ***/
        /*************************************/
         
        public function insertarCompra($numTarjeta){
            $this->db->query("SELECT insertarCompra('".$numTarjeta."',".$this->idUsuario().");");
            $resultado = $this->db->Registro();
            $idCompra;

            foreach ($resultado as $compra) {
                $idCompra =  (int)$compra;
            }

            foreach ($_SESSION["productos"] as $producto) {
                $this->db->query("SELECT compraProducto(".$idCompra.",".$producto["idProducto"].",".$producto["cantidad"].");");
                $this->db->Registro();
            }

            $this->db->query("SELECT totalFinalCompra(".$idCompra.");");
            $_SESSION["productos"] = [];//se limpia carrito de compras
            $_SESSION["cantidadTotal"] = 0;//se limpia carrito de compras
            $resultado = $this->db->Registro();
            $valor; 
            foreach ($resultado as $res) {
                $valor =  $res;
            }
            return $valor;
        }

         
        public function idUsuario (){
            $this->db->query("SELECT idUsuario FROM ".DB_NAME.".Usuario WHERE nombre = '".$_SESSION['nombre']."'");
            return (int) $this->db->Registro()->idUsuario; 
        }
       
    }
?>