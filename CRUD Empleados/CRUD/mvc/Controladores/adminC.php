<?php

    class AdminC{

        public function IngresoC(){

            if(isset($_POST["usuarioI"])){
                $datosC = array("usuario"=>$_POST["usuarioI"], "clave"=>$_POST["claveI"]);

                $tablaBD = "administradores";

                $respuesta = AdminM::IngresoM($datosC, $tablaBD);

                if($respuesta["usuario"] == $_POST["usuarioI"] && $respuesta["clave"] == $_POST["claveI"]){

                    session_start();

                    $_SESSION["Ingreso"] = true;

                    header("location:index.php?ruta=empleados");

                }else{
                    $mensaje = "Error al ingresar";
                    echo '<div class="px-3 py-3 pb-md-4 mx-auto text-center text-danger">'.
                                        '<h6 class="page-header text-center fw-bold"> ' . $mensaje . '</h6>'.
                                    '</div>';
                }
            }
        }
    }