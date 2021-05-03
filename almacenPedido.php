
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<?php
//require_once "nav.php";
?>
<?php

require_once "conexion.php";
if(isset($_GET)){
    if(strlen($_GET['modelo']) >=1 && strlen($_GET['nombre']) >=1 && strlen($_GET['codigo']) >=1 && strlen($_GET['cantidad']) >=1 && strlen($_GET['correo']) >=1)
    {


$modelo= $_GET['modelo'];
$nombre= $_GET['nombre'];
$codigo= $_GET['codigo'];
$cantidad= $_GET['cantidad'];
$correo= $_GET['correo'];
?>
<br>
<?php


$almacenar= "INSERT INTO pedidos( modelo, nombre, codigo, cantidad, correo) VALUES ('$modelo', '$nombre', '$codigo', '$cantidad', '$correo')";
$resultado= mysqli_query($db, $almacenar);

if($resultado)
{
    ?>
    <center>
    <a href="registroPedido.php"><font size="red">Registro Exitoso</font></a>
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