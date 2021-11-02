<?php

    class Modelo{

        static public function RutasModelo($rutas){

            if($rutas == "ingreso" || $rutas == "registrar" || $rutas == "empleados" || $rutas == "editar" || $rutas == "salir"){

                $pagina = "Vistas/modelos/".$rutas."php";

            }else if($rutas == "index"){

                $pagina = "Vistas/modelos/ingreso.php";

            }else{

                $pagina = "Vistas/modelos/ingreso.php";
                
            }

            return $pagina;

        }
    }