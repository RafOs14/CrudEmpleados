<?php
    class EmpleadosC{

        //Registrar empleados

        public function RegistrarEmpleadosC(){

            if(isset($_POST["nombreR"])){

                $datosC = array("nombre"=>$_POST["nombreR"], "apellido"=>$_POST["apellidoR"], 
                                "email"=>$_POST["emailR"], "puesto"=>$_POST["puestoR"], "salario"=>$_POST["salarioR"]);

                $tablaBD = "personal";

                $respuesta = EmpleadosM::RegistrarEmpleadosM($datosC, $tablaBD);

                if($respuesta == "Datos insertados correctamente"){

                    header("location:index.php?ruta=empleados");
                }else{

                    echo "No se pudo ingresar los datos, revise y vuelva a intentarlo";
                }

            }
        }

        //Mostrar empleados

        public function MostrarEmpleadosC(){

            $tablaBD = "personal";

            $respuesta = EmpleadosM::MostrarEmpleadosM($tablaBD);

            foreach ($respuesta as $key => $value){

                echo '  <tr>
                            <th scope="row">'.$value["nombre"].'</th>
                            <th scope="row">'.$value["apellido"].'</th>
                            <th scope="row">'.$value["email"].'</th>
                            <th scope="row">'.$value["puesto"].'</th>
                            <th scope="row">'.$value["salario"].'</th>
                            <th scope="row"><a href="index.php?ruta=editar&idE='.$value["id"].'" class="btn btn-success btn-sm">Editar</a></th>
                            <th scope="row"><a href="index.php?ruta=empleados&idB='.$value["id"].'" class="btn btn-danger btn-sm">Eliminar</a></th>
                        </tr>';
            }
            
        }

        //Editar empleados

        public function EditarEmpleadosC(){

            $datosC = $_GET["id"];
            $tablaBD = "personal";
            $respuesta = EmpleadosM::EditarEmpleadosM($datosC, $tablaBD);

            echo'
                <div class="mb-3">
                    <label for="nombre" class="form-label">ID</label>
                    <input type="hidden" value="'.$respuesta["id"].'" class="form-control" name="idE" required>
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" value="'.$respuesta["nombre"].'" class="form-control" name="nombreE" required>
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="apellido" value="'.$respuesta["apellido"].'" class="form-control" name="apellidoE" required>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email </label>
                    <input type="email" value="'.$respuesta["email"].'" class="form-control" name="emailE" placeholder="name@example.com" required>
                 </div>
                <div class="mb-3">
                    <label for="puesto" class="form-label">Puesto</label>
                    <input type="text" value="'.$respuesta["puesto"].'" class="form-control" name="puestoE">
                </div>
                <div class="mb-3">
                    <label for="salario" class="form-label">Salario</label>
                    <input type="text" value="'.$respuesta["salario"].'" class="form-control" name="salarioE">
                </div>
                <button type="submit" class="btn btn-primary">Registrar</button>';

        }

        //Actualizar empleado
        public function ActualizarEmpleadosC(){
            
            if(isset($_POST["nombreE"])){

                $datosC = array("id"=>$_POST["idE"], "nombre"=>$_POST["nombreE"], "apellido"=>$_POST["apellidoE"],
                             "email"=>$_POST["emailE"], "puesto"=>$_POST["puestoE"],"salario"=>$_POST["salarioE"]);

                $tablaBD = "personal";

                $respuesta = EmpleadosM::ActualizarEmpleadosM($datosC, $tablaBD);

                if($respuesta == "Datos actualizados correctamente"){

                    header("location:index.php?ruta=empleados");

                }else{

                    echo "No fue posible actualizar los datos, revise y vuelva a intentarlo";
                }
            }
        }

        //Eliminar empleados
        public function EliminarEmpleadosC(){
            
            if(isset($GET["idB"])){

                $datosC = $_GET["idB"];

                $tablaBD = "personal";

                $respuesta = EmpleadosM::EliminarEmpleadosM($datosC, $tablaBD);

                if($respuesta == "Datos borrados correctamente"){

                    header("location:index.php?ruta=empleados");
                }else{

                    echo "No fue posible borrar los datos, revise y vuelva a intentarlo";
                }
            }
        }
    }

    
                    