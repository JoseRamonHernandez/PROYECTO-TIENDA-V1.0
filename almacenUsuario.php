
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<?php
//require_once "nav.php";
?>
<?php

require_once "conexion.php";
if(isset($_GET)){
    if(strlen($_GET['nombre']) >=1 && strlen($_GET['apellido']) >=1 && strlen($_GET['correo']) >=1 && strlen($_GET['username']) >=1 && strlen($_GET['contraseña']) >=1 && strlen($_GET['telefono']) >=1 && strlen($_GET['domicilio']) >=1 && strlen($_GET['puesto']) >=1)
    {



$nombre=$_GET['nombre'];
$apellido=$_GET['apellido'];
$correo=$_GET['correo'];
$username=$_GET['username'];
$contraseña=$_GET['contraseña'];
$telefono=$_GET['telefono'];
$domicilio=$_GET['domicilio'];
$puesto=$_GET['puesto'];

?>
<br>
<?php



$almacenar= "INSERT INTO empleados( nombre, apellido, correo, username, contraseña, telefono, domicilio, puesto) VALUES ('$nombre', '$apellido', '$correo', '$username', '$contraseña', '$telefono', '$domicilio', '$puesto')";
$resultado= mysqli_query($db, $almacenar);

if($resultado)
{
    ?>
    <center>
    <a href="registrarUsuario.php"><font size="red">Registro Exitoso</font></a>
    </center>
    
    <?php
    
}
else
{
    echo"Error, no se pudo registrar al nuevo usuario";
}
    }
    
    
}

?>