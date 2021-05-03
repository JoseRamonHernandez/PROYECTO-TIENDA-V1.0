<?php
require_once "navUsuarios.php";
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<br>
<center>

    <div class="container">
        <form action="editUsuario2.php" method="GET" class="row g-3">

        <h4>Para editar un registro busque el Codigo-Empleado</h4>
        <h4>e ingreselo a continuación</h4>
        <div className="input-field">
            <input className="contianer validate" type="text" placeholder="Teclee el dato" name="id" required minlength="1" maxlength="60" patter="[0-9]+"/>
        </div>
        <div class="col-12">
    <button type="submit"  name="editar" id="editar"  class="btn btn-warning">Editar</button>
  </div>
        

        </form>
    </div>
</center>
