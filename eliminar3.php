<html>
	<head>
		<title>Ejercicio - DELETE</title>
		<link rel="stylesheet" href="style.css">
		<meta charset="UTF-8" />
	</head>
	<body>
		<?php
			include 'conexioninicio2.php';
			$consulta = $conexioninicio2 -> query ("DELETE FROM libreria WHERE Titulo = '{$_POST['TituloOriginal']}'") 
			or die ("Ha fallado la conexión");
			$conexion = null;
			echo '<h1>borrado!!<h1>';
		?>
	</body>
	<a  href="eliminar2.php"><input id="botonf"  type="submit" value="Volver" ><br></a> 
</html>