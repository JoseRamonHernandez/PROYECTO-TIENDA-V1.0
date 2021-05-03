<!DOCTYPE html>
<html>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<?php require_once "nav2.php" ?>
<?php require_once "conexion.php" ?>
<br>

<form action="registroVenta.php" method="GET">
<br>


<div class="container">


<br>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Codigo de Barras</span>
  <input type="number" class="form-control" name="codigo" placeholder="Codigo de Barras del Producto a comprar" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
</div>

<br>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Cantidad</span>
  <input type="number" class="form-control" name="cantidad" placeholder="Cantidad de producto a comprar" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
</div>

<br>
<div class="input-group mb-3">
  <span class="input-group-text" id="inputGroup-sizing-default">Username</span>
  <input type="text" class="form-control" name="username" placeholder="Username del que realiza la compra" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required>
</div>

<br>
<button type="submit" class="btn btn-danger">Realizar Venta</button>
<br>
</center>
</div>
</div>
</form>