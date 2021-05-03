<?php
require_once "navUsuarios.php";
require_once "conexion.php";
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<?php
$id=$_GET['id'];
$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];
$correo=$_GET['correo'];
$username=$_GET['username'];
$contraseña=$_GET['contraseña'];
$telefono=$_GET['telefono'];
$domicilio=$_GET['domicilio'];
$puesto=$_GET['puesto'];



$modi= "UPDATE empleados SET 
id='$id',
nombre='$nombre',
apellido='$apellido',
correo='$correo',
username='$username',
contraseña='$contraseña',
telefono='$telefono',
domicilio='$domicilio',
puesto='$puesto'
WHERE id='$id'";
$resultado = mysqli_query($db, $modi);
if($resultado)
{
    ?>
    <center>
    <a href="editUsuario.php"><font color="red">Actualización Exitosa</font></a>
    </center>
    <?php
}
else{
    ?>
    <center>
    <a href="editUsuario.php"><font color="red">Error</font></a>
    </center>
    <?php
}

?>