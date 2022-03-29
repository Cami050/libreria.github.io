<html>
	<head>
		<title>Ejercicio - DELETE</title>
		<link rel="stylesheet" href="style.css">
		<meta charset="UTF-8" />
	</head>
	<body>
		<div class="row justify-content">
		<form id="formu" action="eliminar3.php" method="post">
			<select name="TituloOriginal">
			<?php
				include 'conexioninicio2.php';
				$consulta = $conexioninicio2 -> query ("SELECT Titulo FROM libreria ORDER BY Titulo ASC") or die ("Ha fallado la conexión");
					while ( $registro = $consulta -> fetch_assoc()) {
						echo'<option>'.$registro['Titulo'].'</option>';
					}
			?>
			</select>			
			<input type="submit" value="Borrar!!" />
		</form>
		<a  href="inicio.html"><input id="botona"  type="submit" value="Volver" ><br></a> 

				</div>
				
	</body>
</html>