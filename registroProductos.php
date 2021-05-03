<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<?php
require_once "navProductos.php";
?>


<br>
<center>
<div class="col-md-5">
<div class="btn-outline-dark">

<form  action="almacenProductos.php" method="GET">
<br>
  <h1>Modulo de Registro de Productos</h1>
  <div class="row mb-1">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Codigo de Barras</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="codigo" id="inputEmail3"  placeholder="Codigo de Barras" required >
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Modelo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="modelo" id="inputEmail3"  placeholder="Modelo del Producto" required>
    </div>
  </div>
  
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Producto</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nombre" id="inputEmail3"  placeholder="Nombre del Producto" required>
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Talla</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="talla" id="inputEmail3"  placeholder="Talla" required>
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Precio</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="precio" id="inputEmail3"  placeholder="Precio del Producto" required>
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Cantidad</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="cantidad" id="inputEmail3"  placeholder="Cantidad" required>
    </div>
  </div>
  
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Registrar Producto</button>
  </div>
</form>
</form>
</div>
</div>
</center>