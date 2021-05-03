<?php require_once "./assets/nav/navUsuarios.php" ?>
<?php require_once "conexion.php" ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<?php
if(strlen('id')>=1)
{
    $id=$_GET['id'];
?>
    
    <div class="container center" border-radius="55px">
<center>
    <form action="editUsuario3.php" method="GET" class="row g-3">

    <div class="card-panel hoverable grey lighten-5">

    <?php
    $consulta="SELECT * FROM empleados WHERE id=$id";
    $ejecutarconsulta= mysqli_query($db,$consulta);
    $user = mysqli_fetch_assoc($ejecutarconsulta);

    ?>
    <br>
 <div class="col-md-2">
    <label for="inputAddress" class="form-label"><p><font color="red">No cambiar </font></p></label>
<input class="form-control" type="number" name="id" value="<?php echo $user['id']?>" required minlength="1" maxlength="60" readonly>
 </div>
<div class="col-md-2">
    <label for="inputAddress" class="form-label">Nombre</label>
<input class="form-control" type="text" name="nombre" value="<?php echo $user['nombre']?>" required minlength="1" maxlength="60" >
</div>
<div class="col-md-2">
    <label for="inputAddress" class="form-label">Apellido</label>
<input class="form-control" type="text" name="apellido" value="<?php echo $user['apellido']?>" required minlength="1" maxlength="60" >
</div>
<div class="col-md-2">
    <label for="inputAddress" class="form-label">Correo</label>
<input class="form-control" type="email" name="correo" value="<?php echo $user['correo']?>" required minlength="1" maxlength="60" >
</div>
<div class="col-md-2">
    <label for="inputAddress" class="form-label">Username</label>
<input class="form-control" type="text" name="username" value="<?php echo $user['username']?>" required minlength="1" maxlength="60" >
</div>
<div class="col-md-2">
    <label for="inputAddress" class="form-label">Contraseña</label>
<input class="form-control" type="password" name="contraseña" value="<?php echo $user['contraseña']?>" required minlength="1" maxlength="60" readonly>
</div>
<div class="col-md-2">
    <label for="inputAddress" class="form-label">Telefono</label>
<input class="form-control" type="text" name="telefono" value="<?php echo $user['telefono']?>" required minlength="1" maxlength="60" >
</div>
<div class="col-md-2">
    <label for="inputAddress" class="form-label">Domicilio</label>
<input class="form-control" type="text" name="domicilio" value="<?php echo $user['domicilio']?>" required minlength="1" maxlength="60" >
</div>
<div class="col-md-2">
    <label for="inputAddress" class="form-label">Puesto</label>
<input class="form-control" type="text" name="puesto" value="<?php echo $user['puesto']?>" required minlength="1" maxlength="60" >
</div>
<br>
<br>
 <div class="col-12">
    <button type="submit" class="btn btn-warning" name="actualizar">Modificar Datos</button>
  </div>
    </div>

    </form>
</center>
    </div>
    <?php
}
?>