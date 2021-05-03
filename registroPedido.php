<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<?php
require_once "./assets/nav/navProovedores.php";
?>


<br>
<center>
<div class="col-md-5">
<div class="btn-outline-dark">

<form  action="almacenPedido.php" method="GET">
<br>
    <h1>Levantamiento de Pedido</h1>
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Modelo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="modelo" id="inputEmail3"  placeholder="Modelo" required >
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="nombre" id="inputEmail3"  placeholder="Nombre del Producto" required>
    </div>
  </div>
  
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Codigo</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="codigo" id="inputEmail3"  placeholder="Codigo de Barras" required>
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Cantidad</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" name="cantidad" id="inputEmail3"  placeholder="Cantidad a pedir" required>
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Correo electronico</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="correo" id="inputEmail3"  placeholder="Correo electronico de la Empresa" required>
    </div>
  </div>

  
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Levantar Pedido</button>
  </div>
</form>
</form>
</div>
</div>
</center>