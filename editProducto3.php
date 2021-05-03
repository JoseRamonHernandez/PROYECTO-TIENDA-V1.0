<?php
require_once "./assets/nav/navProductos.php";
require_once "conexion.php";
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<?php
$codigoBarras=$_GET['codigoBarras'];
$modelo=$_GET['modelo'];
$NombreProducto=$_GET['nombreProducto'];
$talla=$_GET['talla'];
$precio=$_GET['precio'];
$cantidad=$_GET['cantidad'];


$modi= "UPDATE productos SET 
CodigoBarras='$codigoBarras',
modelo='$modelo',
NombreProducto='$NombreProducto',
talla='$talla',
precio='$precio',
cantidad='$cantidad'
WHERE CodigoBarras='$codigoBarras'";
$resultado = mysqli_query($db, $modi);
if($resultado)
{
    ?>
    <center>
    <a href="editProducto.php"><font color="red">Actualización Exitosa</font></a>
    </center>
    <?php
}
else{
    ?>
    <center>
    <a href="editProducto.php"><font color="red">Error con la conexión a la base de datos, intentelo mas tarde.</font></a>
    </center>
    <?php
}

?>