<html>
<body>

<link rel="stylesheet" href="css/contacto.css" type="text/css">

<form style="border:1px solid #ccc " action="guardar_datos.php" method="post">
	<div class="container">
	
		<h1>Contacto</h1>
		<p>Por favor rellene este formulario para que podamos contactar con usted.</p>
		<hr>

		<label for="email"><b>Nombre</b></label>
		<input type="text" placeholder="Introduzca el nombre de su empresa" name="nombre" required>

		<label for="psw"><b>Teléfono</b></label>
		<input type="text" placeholder="Introduzca el número de teléfono" name="tlf" required>
		<p></p>

	<div class="clearfix">
	
		<button type="reset" class="cancelbtn">Cancelar</button>
		<button type="submit" class="signupbtn">Enviar</button>
		
	</div></div>
</form>


<?php
// Conectando a la base de datos
include 'includes/conectardb.php';

echo '<h3> Estos son algunos de nuestros más recientes inscritos: </h3>';

    // Realizar la consulta MySQL
    $query = 'SELECT * FROM clientes';
    $result = mysqli_query($link,$query) or die('Consulta fallida');

// Muestra los resultados en HTML
include 'includes/imprimirSql.php';    
?>

</body>
</html>