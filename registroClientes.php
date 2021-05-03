<!DOCTYPE html>
<html>
<head><title></title></head>

 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<br>
<a href="compraPage.php">
<button type="button" class="btn btn-outline-primary">Regresar</button>
</a>
<br>
<form action="almacenRegistroClientes.php" method="GET">
<br>


<div class="container">


<center>
<h2><b><font color="">Registro</font></b></h2>
</center>
<br>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Nombre(s)</span>
  <input type="text" class="form-control" name="nombre" placeholder="Nombre" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
</div>

<br>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Apellido(s)</span>
  <input type="text" class="form-control" name="apellidos" placeholder="Apellido(s)" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
</div>

<br>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Edad</span>
  <input type="number" class="form-control" name="edad" placeholder="Edad" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
</div>

<br>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Correo Electronico</span>
  <input type="email" class="form-control" name="correo" placeholder="Correo Electronico" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
</div>

<br>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Username</span>
  <input type="text" class="form-control" name="username" placeholder="Username" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
</div>

<br>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Telefono</span>
  <input type="text" class="form-control" name="telefono" placeholder="Telefono" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
</div>

<br>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Domicilio</span>
  <input type="text" class="form-control" name="domicilio" placeholder="Domicilio" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
</div>

<br>
<button type="submit" class="btn btn-danger">Registrarse</button>
<br>
</center>
</div>
</div>
</form>