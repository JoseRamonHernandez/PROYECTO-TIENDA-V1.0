<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<?php
require_once "./assets/nav/navUsuarios.php";
?>


<br>
<center>
<div class="col-md-5">
<div class="btn-outline-dark">

<form  action="almacenUsuario.php" method="GET">
<br>
    <h1>Modulo de Registro de Empleados</h1>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre(s)</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nombre" id="inputEmail3"  placeholder="Nombre(s)" required >
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Apellido(s)</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="apellido" id="inputEmail3"  placeholder="Apellido(s)" required>
    </div>
  </div>
  
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Correo</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="correo" id="inputEmail3"  placeholder="Correo" required>
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="username" id="inputEmail3"  placeholder="Username" required>
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Contraseña</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" name="contraseña" id="inputEmail3"  placeholder="Contraseña" required>
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Telefono</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="telefono" id="inputEmail3"  placeholder="Telefono" required>
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Domicilio</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="domicilio" id="inputEmail3"  placeholder="Domicilio" required>
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Puesto</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="puesto" id="inputEmail3"  placeholder="Puesto" required>
    </div>
  </div>
  
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Registrar Empleado</button>
  </div>
</form>
</form>
</div>
</div>
</center>