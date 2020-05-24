<?php
    class VerVentasDiariasAd_Controller extends Controller_Ad{

        public function  __construct (){
           $this->vista('verVentasDiariasAd',$this->reciboTabla());
        }

        //carga pagina index metodo por default
        public function index(){
        }

        function reciboTabla(){
            //se incluye y crea una instancia del modelo VerVentasDiariasAd_Model
            $consulta = $this->modelo('VerVentasDiariasAd_Model');

            $mostrarDatos = $consulta->verVentasDiarias();

            $RegistrosArray;
            $i=0;
            //extrae los id del resultado
            foreach ($mostrarDatos as $RegistrosVentaDiaria) {
                $fila;
                $fila["idVentaDiaria"]= (string) $RegistrosVentaDiaria->idVentaDiaria;
                $fila["totalComprasD"]= (string) $RegistrosVentaDiaria->totalComprasD;
                $fila["fecha"]= (string) $RegistrosVentaDiaria->fecha;
                $RegistrosArray[$i]= $fila;
                $i++;
            }
            return $RegistrosArray;
        }
    }
?>