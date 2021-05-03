<!DOCTYPE html>
<html>

<body>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<?php require_once "./assets/nav/navUsuarios.php" ?>

<?php require_once "conexion.php" ?>



<div class="">

            </br>

</br>
<div class="container center verpro">
<?php
require_once "conexion.php";
?>

<?php

if(isset($_GET)){
if(strlen($_GET['buscar']) >=1)
{


$usuario= $_GET['buscar'];

?>
<br>
<div id="">
<div class="container">
    <center>
<table class="table">
        <thead>
          <tr>
              
              
                <th class="bg-dark text-white">Codigo-Empleado</th>
              <th class="bg-dark text-white">Nombre(s)</th>
              <th class="bg-dark text-white">Apellido(s)</th>
              <th class="bg-dark text-white">Correo</th>
              <th class="bg-dark text-white">Username</th>
              <th class="bg-dark text-white">Telefono</th>
              <th class="bg-dark text-white">Domicilio</th>
              <th class="bg-dark text-white">Puesto</th>
             
          </tr>
        </thead>
        
    <?php
    $consulta= "SELECT id, nombre, apellido, correo, username, telefono, domicilio, puesto FROM empleados WHERE nombre = '$usuario' OR apellido = '$usuario' OR correo = '$usuario' OR username = '$usuario' OR id = '$usuario'";
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
                            <td>'.$fila[7].'</td>
                            
                        </tr>';
                        
                        $fila=mysqli_fetch_array($ejecutarconsulta);
                }
            }
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

</div></body></html>