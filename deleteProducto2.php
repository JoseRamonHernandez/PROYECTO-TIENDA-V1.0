<?php
require_once "conexion.php";
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<?php
require_once "./assets/nav/navProductos.php";
?>
<?php
if(isset($_GET['eliminar']))
{
    if(strlen($_GET['codigoBarras']) >=1)
    {
        $codigoBarras=$_GET['codigoBarras'];
        $delete= "DELETE FROM productos WHERE CodigoBarras=$codigoBarras";
        $resultado= mysqli_query($db,$delete);
        if($resultado)
        {
            ?>
            <center>
            <a href="deleteProducto.php"><font color="red">Producto Eliminado con exito</font></a>
            </center>
            <?php
        }
    }
}
?>

