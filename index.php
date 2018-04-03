<html>
<head>
	<link rel="stylesheet" href="css/index.css" type="text/css">
	<title>Web de demostración</title>
</head>
<body>

<!-- BARRA LATERAL ----------------------------------------------------------------------- -->

<?php 
include 'includes/sidebar.php';
?>

<!-- EMPRESAS CONFIRMADAS ---------------------------------------------------------------- -->

<div class="confirmadas" style="border:1px solid #ccc">
<center>

    <h2>Empresas Confirmadas</h2>
    Éstas son algunas de las empresas que van a acudir a nuestra conferencia
    
    <empresas><h3>
    
        <?php
        // Conectar con la BD
        include 'includes/conectardb.php';
        
            // Realizar una consulta MySQL
            $consulta  = 'SELECT nombre FROM clientes';
            $result = mysqli_query($link,$consulta) or die('Consulta fallida: ');
        
        // Imprimir los resultados en HTML
        include 'includes/imprimirSql.php';
        ?>
        
    </empresas></h3>
	<br>
	
</center>
</div>
<br>  

<!-- REGISTRARSE ------------------------------------------------------------------------- --> 

<center>
<form style="border:1px solid #ccc" action="contacto.php" >

    <h2>Registrarse</h1>
    Si le gustaría que su empresa participase en las conferencias acceda a éste enlace
    <button type="submit" class="signupbtn">Registrarse</button>

</form>
</center>

<!-- CUENTA ATRÁS ------------------------------------------------------------------------ -->

<script type="text/javascript" src="js/countdown.js"></script>
<script type="text/javascript"> countdown(); </script>

<div class="countdown" style="border:1px solid #ccc">
  <center>
    <h2>Tiempo Restante</h2>
    Cuenta atrás hasta que empiece la próxima conferencia
    <h4><p id="demo"></p></h4>
  </center>
</div>

</body>
</html>
