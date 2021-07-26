<!DOCTYPE html>
<html>
<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<?php require_once "./assets/nav/nav2.php" ?>
<?php require_once "conexion.php" ?>
<br>

<form  action="productosBusqueda2.php" method="GET">
<div class="container">Buscar
    <center>
    <div class="input-group mb-3">
 
  <input type="text" class="form-control" name="buscar" placeholder="Producto" aria-label="Example text with button addon" aria-describedby="button-addon1">
</div>
    </center>
</form>
</div>
<br>
<div id="">
<div class="container">
    <center>
    <?php
    $consulta= "SELECT CodigoBarras, modelo, nombreProducto, talla, precio, imagen FROM productos";
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
            {?>
                <div class="container">
                <div class="row">
                    <?php
            for($x=0; $x<=$fila; $x++)
            {
                
                echo'
                <div class="col-sm-3">
                <div class="card" style="width: 18rem;">
                '.$fila[5].'
                <div class="card-body">
                <h5 class="card-title">'.$fila[2].'</h5>
                <p class="card-text">$MXN'.$fila[4].'</p>
                <p class="card-text">Modelo: '.$fila[1].'</p>
                <p class="card-text">Talla: '.$fila[3].'</p>
                <p class="card-text">Cantidad: '.$fila[4].'</p>
                <p class="card-text">Codigo de barras: '.$fila[0].'</p>
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

    ?>
        
      
<br>

</table>
</center>

</div>

</div>
</div>

