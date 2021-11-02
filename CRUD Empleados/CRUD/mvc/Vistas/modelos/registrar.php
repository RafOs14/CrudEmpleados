<?php
  session_start();
  if(!$_SESSION["Ingreso"]){
    header("location:index.php?ruta=ingreso");

    exit();
  }
?>

<h1 class="page-header text-center fw-bold">Registro de Empleados</h1> 

<form method="POST">
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" name="nombreR" required>
  </div>
  <div class="mb-3">
    <label for="apellido" class="form-label">Apellido</label>
    <input type="apellido" class="form-control" name="apellidoR" required>
  </div>
  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email </label>
  <input type="email" class="form-control" name="emailR" placeholder="name@example.com" required>
  </div>
  <div class="mb-3">
    <label for="puesto" class="form-label">Puesto</label>
    <input type="text" class="form-control" name="puestoR">
  </div>
  <div class="mb-3">
    <label for="salario" class="form-label">Salario</label>
    <input type="text" class="form-control" name="salarioR">
  </div>
  <button type="submit" class="btn btn-primary">Registrar</button>
</form>


<?php

  $registrar = new EmpleadosC();
  $registrar -> RegistrarEmpleadosC();

  ?>