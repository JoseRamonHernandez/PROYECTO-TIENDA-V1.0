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
<div <i class="fa fa-align-center" aria-hidden="true"></i>
<form  action="productosBusqueda3.php" method="GET">
<div class="container-lg">Buscar</div>
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
<table class="table">
        <thead>
          <tr>
              
              
          <th class="bg-dark text-white">Codigo de Barras</th>
            <th class="bg-dark text-white">Modelo</th>
              <th class="bg-dark text-white">Nombre-Producto</th>
              <th class="bg-dark text-white">Talla</th>
              <th class="bg-dark text-white">Precio</th>
              <th class="bg-dark text-white">Stock</th>
              <th class="bg-dark text-white">Imagen</th>
              
              
             
          </tr>
        </thead>
        
    <?php
    $consulta= "SELECT * FROM productos";
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
                        <td>'.$fila[4].'</td>
                        <td>'.$fila[5].'</td>
                          <td>'.$fila[6].'</td>  
                            
                            
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

<?php
require_once "./assets/footer/footer.php";
?>