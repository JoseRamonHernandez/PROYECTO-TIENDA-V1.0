
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<?php
//require_once "nav.php";
?>
<?php

require_once "conexion.php";
if(isset($_GET)){
    if(strlen($_GET['codigo']) >=1 && strlen($_GET['username']) >=1 && strlen($_GET['cantidad']) >=1 )
    {


$codigo= $_GET['codigo'];
$username= $_GET['username'];
$cantidad= $_GET['cantidad'];
$cantidad1 = intval($cantidad);

?>
<br>
<?php


$almacenar= "INSERT INTO ventas( CodigoBarras, username, cantidad) VALUES ('$codigo', '$username', '$cantidad')";
$resultado= mysqli_query($db, $almacenar);

if($resultado)
{
   

    ?>
    <center>
    <a href="compraProducto.php"><font size="red">Venta Registrada</font></a>
    <p> En unos momentos te llegara un correo con los datos de tu compra, el cuál tendras que realizar un deposito a un numero de cuenta que se adjuntara al correo para poder continuar con el progreso de la compra</p>
    <p> Como ultimo punto, dicho correo que te llegará, tendrás que responderlo con una fotografia del comprobante del depósito</p>
    <p> y a la brevedad pondremos tu compra en paqueteria para que puedas rastrear su curso.</p>
    <h5>Gracias por su compra.</h5>
    
    
    </center>
    
    <?php
    
}
else
{
    echo"Error, no se pudo registrar la venta";
}
    }
    
    
}

?>