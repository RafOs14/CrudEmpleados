<?php
  session_start();
  if(!$_SESSION["Ingreso"]){
    header("location:index.php?ruta=ingreso");

    exit();
  }
?>

<h2> Empleados </h2>

<table class="table table-sm table-dark table-hovered">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Email</th>
      <th scope="col">Puesto</th>
      <th scope="col">Salario</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php

        $mostrar = new EmpleadosC();
        $mostrar -> MostrarEmpleadosC();

    ?>
  </tbody>
</table>

<?php

  $eliminar = new EmpleadosC();
  $eliminar -> EliminarEmpleadosC();

?>