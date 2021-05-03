<?php
require_once "./assets/nav/navProductos.php";
require_once "conexion.php";
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<?php
$codigo=$_GET['codigo'];
$NombreEmpresa=$_GET['NombreEmpresa'];
$correo=$_GET['correo'];
$telefono=$_GET['telefono'];
$domicilio=$_GET['domicilio'];


$modi= "UPDATE proovedores SET 
codigo='$codigo',
NombreEmpresa='$NombreEmpresa',
correo='$correo',
telefono='$telefono',
domicilio='$domicilio'
WHERE codigo='$codigo'";
$resultado = mysqli_query($db, $modi);
if($resultado)
{
    ?>
    <center>
    <a href="editProovedor.php"><font color="red">Actualización Exitosa</font></a>
    </center>
    <?php
}
else{
    ?>
    <center>
    <a href="editProovedor.php"><font color="red">Error con la conexión a la base de datos, intentelo mas tarde.</font></a>
    </center>
    <?php
}

?>