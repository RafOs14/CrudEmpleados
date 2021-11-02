<?php

    require_once "conexionBD.php";

    class EmpleadosM extends ConexionBD{

        //Registro de empleados

        static public  function RegistrarEmpleadosM($datosC, $tablaBD){
            
            $pdo = ConexionBD::cBD()->prepare("INSERT INTO $tablaBD (nombre,apellido,email,puesto,salario) VALUES
            (:nombre, :apellido, :email, :puesto, :salario)");


            $pdo -> bindParam(":nombre", $datosC["nombre"], PDO::PARAM_STR);
            $pdo -> bindParam(":apellido", $datosC["apellido"], PDO::PARAM_STR);
            $pdo -> bindParam(":email", $datosC["email"], PDO::PARAM_STR);
            $pdo -> bindParam(":puesto", $datosC["puesto"], PDO::PARAM_STR);
            $pdo -> bindParam(":salario", $datosC["salario"], PDO::PARAM_STR);

            if($pdo -> execute()){
                
                
                return  "Datos insertados correctamente";

            }else{

                return "No se pudo ingresar los datos, revise y vuelva a intentarlo";
            }

            //$pdo -> close();
        }

        //Mostrar empleados

        static public function MostrarEmpleadosM($tablaBD){

            $pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD ");

            $pdo -> execute();

            return $pdo->fetchAll();

        }

        //Editar empleados

        static public function EditarEmpleadosM($datosC, $tablaBD){

            $pdo = ConexionBD::cBD()->prepare("SELECT * FROM $tablaBD WHERE id = :id");

            $pdo -> bindParam(":id", $datosC, PDO::PARAM_INT);

            $pdo -> execute();

            return $pdo->fetch();

        }

        //Actualizar empleados

        static public function ActualizarEmpleadosM($datosC, $tablaBD){

            $pdo = ConexionBD::cBD()->prepare("UPDATE $tablaBD SET nombre=:nombre, apellido=:apellido, 
                                                email=:email,puesto=:puesto, salario=:salario WHERE id = :id");

            $pdo -> bindParam(":id", $datosC["id"], PDO::PARAM_INT);
            $pdo -> bindParam(":id", $datosC["nombre"], PDO::PARAM_STR);
            $pdo -> bindParam(":id", $datosC["apellido"], PDO::PARAM_STR);
            $pdo -> bindParam(":id", $datosC["email"], PDO::PARAM_STR);
            $pdo -> bindParam(":id", $datosC["puesto"], PDO::PARAM_STR);
            $pdo -> bindParam(":id", $datosC["salario"], PDO::PARAM_STR);

            if($pdo -> execute()){                
                
                return  "Datos actualizados correctamente";

            }else{

                return "No fue posible actualizar los datos, revise y vuelva a intentarlo";
            }

        }

        //Borrar empleados

        static public function EliminarEmpleadosM($datosC, $tablaBD){

            $pdo = ConexionBD::cBD()->prepare("DELETE FROM $tablaBD WHERE id = :id");

            $pdo -> bindParam(":id", $datosC, PDO::PARAM_INT);            

            if($pdo -> execute()){
                
                
                return  "Datos borrados correctamente";

            }else{

                return "No fue posible borrar los datos, revise y vuelva a intentarlo";
            }

        }

    }