<?php require_once "navProductos.php" ?>
<?php require_once "conexion.php" ?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<?php
if(strlen('id')>=1)
{
    $id=$_GET['id'];
?>
    
    <div class="container center" border-radius="55px">
<center>
    <form action="editProducto3.php" method="GET" class="row g-3">

    <div class="card-panel hoverable grey lighten-5">

    <?php
    $consulta="SELECT * FROM productos WHERE CodigoBarras=$id";
    $ejecutarconsulta= mysqli_query($db,$consulta);
    $user = mysqli_fetch_assoc($ejecutarconsulta);

    ?>
    <br>
 <div class="col-md-2">
    <label for="inputAddress" class="form-label"><p><font color="red">No cambiar </font></p></label>
<input class="form-control" type="number" name="codigoBarras" value="<?php echo $user['CodigoBarras']?>" required minlength="1" maxlength="60" readonly>
 </div>
<div class="col-md-2">
    <label for="inputAddress" class="form-label">Modelo</label>
<input class="form-control" type="text" name="modelo" value="<?php echo $user['modelo']?>" required minlength="1" maxlength="60" >
</div>
<div class="col-md-2">
    <label for="inputAddress" class="form-label">Nombre-Producto</label>
<input class="form-control" type="text" name="nombreProducto" value="<?php echo $user['NombreProducto']?>" required minlength="1" maxlength="60" >
</div>
<div class="col-md-2">
    <label for="inputAddress" class="form-label">Talla</label>
<input class="form-control" type="number" name="talla" value="<?php echo $user['talla']?>" required minlength="1" maxlength="60" >
</div>
<div class="col-md-2">
    <label for="inputAddress" class="form-label">Precio</label>
<input class="form-control" type="number" name="precio" value="<?php echo $user['precio']?>" required minlength="1" maxlength="60" >
</div>
<div class="col-md-2">
    <label for="inputAddress" class="form-label">Cantidad</label>
<input class="form-control" type="number" name="cantidad" value="<?php echo $user['cantidad']?>" required minlength="1" maxlength="60">
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