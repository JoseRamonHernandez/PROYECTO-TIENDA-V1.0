
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<?php
//require_once "nav.php";
?>
<?php

require_once "conexion.php";
if(isset($_GET)){
    if(strlen($_GET['codigo']) >=1 && strlen($_GET['NombreEmpresa']) >=1 && strlen($_GET['correo']) >=1 && strlen($_GET['telefono']) >=1 && strlen($_GET['domicilio']) >=1 )
    {


$codigo= $_GET['codigo'];
$NombreEmpresa= $_GET['NombreEmpresa'];
$correo= $_GET['correo'];
$telefono= $_GET['telefono'];
$domicilio= $_GET['domicilio'];
?>
<br>
<?php


$almacenar= "INSERT INTO proovedores( codigo, NombreEmpresa, correo, telefono, domicilio) VALUES ('$codigo', '$NombreEmpresa', '$correo', '$telefono', '$domicilio')";
$resultado= mysqli_query($db, $almacenar);

if($resultado)
{
    ?>
    <center>
    <a href="registroProovedor.php"><font size="red">Registro Exitoso</font></a>
    </center>
    
    <?php
    
}
else
{
    echo"Error, no se pudo registrar al nuevo proovedor";
}
    }
    
    
}

?>