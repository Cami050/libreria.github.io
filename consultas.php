<html>
	<html>
	<head>
		<title>Ejercicio 70</title>
		<meta charset="UTF-8" />
        <link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="row justify-content">
	<?php
		include 'conexioninicio2.php'; 
		$consulta = $conexioninicio2-> query("SELECT Codigo,Titulo,Autor,Genero,Editorial,Cantidad,Fecha_Publicacion,Edicion FROM `libreria` ;") or die ("Ha fallado la conexión");
			while ( $registro = $consulta -> fetch_assoc() ) {
				echo '<table>'.
				"<th>Codigo</th>".
				"<th>Titulo</th>".
				"<th>Autor</th>".
				"<th>Genero</th>".
				"<th>Editorial</th>".
				"<th>Cantidad</th>".
				"<th>Fecha_Publicacion</th>".
				"<th>Edicion</th>".
				"<tr>".
				"<td>".$registro['Codigo']."</td>".
				"<td>".$registro['Titulo']."</td>".
				"<td>".$registro['Autor']."</td>".
				"<td>".$registro['Genero']."</td>".
				"<td>".$registro['Editorial']."</td>".
				"<td>".$registro['Cantidad']."</td>".
				"<td>".$registro['Fecha_Publicacion']."</td>".
				"<td>".$registro['Edicion']."</td>".
			    "</tr>".
			    "</table>";
               }
			    $conexion=null;
	?>
     
	<br>
	
	<a  href="inicio.html"><input id="botono" type="submit" value="Volver" ><br></a>
	</div>

	<br>
	
   
	</body>
	</html>