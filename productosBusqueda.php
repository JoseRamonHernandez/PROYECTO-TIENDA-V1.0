<!DOCTYPE html>
<html>

<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">


<?php require_once "conexion.php" ?>




            <?php

            if(isset($_GET)){
    if(strlen($_GET['buscar']) >=1)
    {


$producto= $_GET['buscar'];

?>
<br>
<a href="productos.php">
<button type="button" class="btn btn-outline-dark">Regresar</button>
</a>
<div class="container center verpro">

<br>

<div class="container">
    <center>
    <?php
    $consulta= "SELECT modelo, NombreProducto, talla, precio, imagen FROM productos WHERE NombreProducto LIKE '%$producto%'";
    $ejecutarconsulta= mysqli_query($db,$consulta);
    $verfilas= mysqli_num_rows($ejecutarconsulta);
    $fila= mysqli_fetch_array($ejecutarconsulta);

    if(!$ejecutarconsulta)
    {
        echo("ERROR en la consulta");
    }
    else
        {
            if($verfilas<1)
            {
                echo("<tr><td>Sin registros</td></tr>");
            }
            else
            { ?>
                <div class="container">
                <div class="row">
                    <?php
            for($x=0; $x<=$fila; $x++)
            {
                
                echo'
                <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                '.$fila[4].'
                <div class="card-body">
                <h5 class="card-title">'.$fila[1].'</h5>
                <p class="card-text">$MXN'.$fila[3].'</p>
                <p class="card-text">Modelo: '.$fila[0].'</p>
                <p class="card-text">Talla: '.$fila[2].'</p>
                </div>
                </div>
                </div>
                
                
                ';
                 
                    $fila=mysqli_fetch_array($ejecutarconsulta);
            }
            ?>
            </div>
         </div>
         <?php
            }
        }
    }
}
    ?>
        


</table>
    </center>
</div>
</div>
</body>
</html>