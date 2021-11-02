<?php
  session_start();
  if(!$_SESSION["Ingreso"]){
    header("location:index.php?ruta=ingreso");

    exit();
  }
?>

<h1 class="page-header text-center fw-bold">Edición de Empleados</h1> 

<form method="POST">
  <?php

  $editar = new EmpleadosC();
  $editar -> EditarEmpleadosC();

  $actualizar = new EmpleadosC();
  $actualizar -> ActualizarEmpleadosC();

  ?>
</form>


