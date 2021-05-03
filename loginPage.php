<!DOCTYPE html>
<html>
<head><title></title></head>
<body style="background-color:#CFCFCF">
<a href="home.php">
<button type="button" class="btn btn-outline-primary">Regresar</button>
</a>
  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<br>
<form action="validacionLogin.php" method="GET">
<br>
<br>
<br>
<br>

<div class="container">
<div style="background-color:#CFCFCF">
<center>
<h2><b><font color="red">Inicio de Sesión</font></b></h2>
</center>
<br>

<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">@</span>
  <input type="text" class="form-control" name="username" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
</div>
<div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1"></span>
  <input type="password" class="form-control" name="pass" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" required>
</div>
<center>
<p><font color="blue">¿No tienes una cuenta?</font></p>
<a><p><font color="blue">Para poder ingresar, uno de tus superiores debe de registrarte primero para que puedas tener tus credenciales y así iniciar sesión</font></p></a>
<br>
<br>
<button name="ingreso" type="submit" class="btn btn-warning">Entrar</button>
<br>
</center>
</div>
</div>
</form>