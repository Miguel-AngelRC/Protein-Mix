<?php

    class Paginas extends Controller{

        public function  __construct (){
            echo '<p>Soy el controlador por deafult</p>';
            $this->pruebaModelo = $this->modelo('Prueba');
        }

        public function index(){
            echo "<p>Si no hay métodos se carga este método index</p>";

            $prueba=$this->pruebaModelo->obtenerUsuarios();

            $datos = [0 => "Este es mi login",
                      1 => $prueba
                        ];            
            $this->vista('pages/inicio',$datos);
        }
    }
?>