<?php
require_once "conexion.php";

   
    if(isset($_GET['ingreso']))
    {
        $usuario = $_GET['username'];
        $pass = ($_GET['pass']);
        
    
        $ver= "SELECT * FROM empleados WHERE username='$usuario' and contraseña='$pass' ";
    $resultado= mysqli_query($db, $ver);
    $verfilas= mysqli_num_rows($resultado);
    if($verfilas >=1)
    {
       

        ?>
       

        <script>
        window.location="adindex.php";
        </script>
       
            <?php   
       
       
    }
    else{
       ?>
       <center>
       <br>
       <a href="loginPage.php"><font color="red">Usuario y/o Contraseña INCORRECTOS</font></a>
       </center>
       <?php
    }
}