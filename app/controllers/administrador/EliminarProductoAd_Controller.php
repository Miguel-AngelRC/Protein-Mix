<?php
    Class EliminarProductoAd_Controller extends Controller_Ad{

        public function eliminaProducto(){
            $idProducto = $_POST['idProducto'];
            //se incluye y crea una instancia del modelo EliminarProductoAd_Model
            $registrar = $this->modelo('EliminarProductoAd_Model');
            echo json_encode($registrar->eliminarProducto($idProducto));
        }
    }  
?>