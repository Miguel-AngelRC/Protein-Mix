<?php
    SESSION_START();
    class VerVentasDiariasAd_Controller extends Controller_Ad{

        public function  __construct (){
            if (isset($_SESSION["nombre"])){
                $this->inserta_Actualiza_VentaDiaria ();
                $this->vista('verVentasDiariasAd',$this->reciboTabla());
                echo "<script>sesionActivaAd('".$_SESSION["nombre"]."'); </script>";
            }else{
                echo "<script>alert('Debes de iniciar sesión para acceder a esta página')</script>";
                echo "<script>window.location.href='".RUTA_URL."/IniciarSesionAd_Controller'</script>";
            }  
        }

        public function inserta_Actualiza_VentaDiaria (){
            $modelo = $this->modelo('actualizaVentaDiaria');
            $modelo->inserta_Actualiza_VentaDiaria();
        }

        //carga pagina index metodo por default
        public function index(){
            if (isset($_SESSION["nombre"])){
                echo "<script>sesionActiva('".$_SESSION["nombre"]."'); </script>";
            }else{
                echo "<script>sinSesion();</script>";
            }
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