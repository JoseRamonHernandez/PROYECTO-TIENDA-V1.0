<!DOCTYPE html>
<html>

<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<?php require_once "./assets/nav/navProductos.php" ?>

<?php require_once "conexion.php" ?>



<div class="">

            </br>

</br>
<div class="container center verpro">
<?php
require_once "conexion.php";
?>
<h3><font color="green">Dar seguimiento con las ventas, buscar los datos del cliente (username) en el apartado correspondiente</font></h3>
<br>
<div id="">

<div class="container">
    <center>
<table class="table">
        <thead>
          <tr>
              
              
          <th class="bg-dark text-white">Numero Venta</th>
            <th class="bg-dark text-white">Codigo de Barras del Producto</th>
              <th class="bg-dark text-white">Username del comprador</th>
              <th class="bg-dark text-white">Cantidad de productos vendidos</th>
              
             
          </tr>
        </thead>
        
    <?php
    $consulta= "SELECT * FROM ventas";
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
            {
                for($x=0; $x<=$fila; $x++)
                {
                    echo'
                        <tr>
                        <td>'.$fila[0].'</td>
                        <td>'.$fila[1].'</td>
                        <td>'.$fila[2].'</td>
                        <td>'.$fila[3].'</td>
                            
                            
                            
                        </tr>';
                        
                        $fila=mysqli_fetch_array($ejecutarconsulta);
                }
            }
        }

    ?>
        
      
<br>

</table>
</center>

</div>

</div>
</div>

