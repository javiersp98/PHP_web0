<html>

<link rel="stylesheet" href="css/guardar_datos.css" type="text/css">

<?php

$nombre  = $_POST['nombre'];
$tlf     = $_POST['tlf'];

$response = 'No se han podido guardar los datos';

//echo '<h1>Datos recibidos</h1>';

//GUARDADO EN BASE DE DATOS
include 'includes/conectardb.php';

$_GRABAR_SQL = "INSERT INTO clientes (nombre, telefono) VALUES ('$nombre','$tlf')";
mysqli_query($link,$_GRABAR_SQL);
?>

<center>
  <form style="border:1px solid #ccc" action="index.php" >
  <h2>Datos Guardados</h1>

    <?php
      echo 'Éstos son los datos que acabas de guardar:<br><br>';
      echo 'Nombre: '.$nombre.'<br>';
      echo 'Teléfono: '.$tlf.'<br>';
    ?>

  <br><button type="submit" class="signupbtn">Volver a Inicio</button><br><br>

  </form>
</center>

</html>