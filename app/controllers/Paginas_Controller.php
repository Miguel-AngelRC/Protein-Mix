<?php

    class Paginas_Controller extends Controller{
        
        public function  __construct (){
            //$this->vista('pages/paginaPrincipal');
        }

        //carga pagina index (registrar usuarios) metodo por default
        public function index(){
            $this->vista('pages/paginaPrincipal');
        }

        public function categoria(){
            $this->vista('pages/categoria');
        }

        public function comprar(){
            $this->vista('pages/comprar');
        }

        public function construccion(){
            $this->vista('pages/construccion');
        }

    }
?>