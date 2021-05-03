
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<?php
//require_once "nav.php";
?>
<?php

require_once "conexion.php";
if(isset($_GET)){
    if(strlen($_GET['codigo']) >=1 && strlen($_GET['modelo']) >=1 && strlen($_GET['nombre']) >=1 && strlen($_GET['talla']) >=1 && strlen($_GET['precio']) >=1 && strlen($_GET['cantidad']) >=1)
    {


$codigo= $_GET['codigo'];
$modelo= $_GET['modelo'];
$nombre= $_GET['nombre'];
$talla= $_GET['talla'];
$precio= $_GET['precio'];
$cantidad= $_GET['cantidad'];
?>
<br>
<?php
/*
echo "$nombre";     
echo "$apPaterno";
echo "$apMaterno";
echo "$edad";*/


$almacenar= "INSERT INTO productos( CodigoBarras, modelo, NombreProducto, talla, precio, cantidad) VALUES ('$codigo', '$modelo', '$nombre', '$talla', '$precio', '$cantidad')";
$resultado= mysqli_query($db, $almacenar);

if($resultado)
{
    ?>
    <center>
    <a href="registroProductos.php"><font size="red">Registro Exitoso</font></a>
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