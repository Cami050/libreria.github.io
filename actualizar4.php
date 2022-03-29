<html>
	<head>
		<title>Ejercicio  - Update</title>
		<link rel="stylesheet" href="style.css">
		<meta charset="UTF-8" />
	</head>
	<body>
		<div class="row justify-content">
		<form id="formu" action="actualizar5.php" method="post">
			<select name="nombreOriginal">
			<?php
        

				include 'conexioninicio2.php';
				$consulta = $conexioninicio2 -> query ("SELECT Titulo FROM libreria ORDER BY Titulo ASC") or die ("Ha fallado la conexión");
					while ( $registro = $consulta -> fetch_assoc()) {
						echo'<option>'.$registro['Titulo'].'</option>';
					}
			?>
			</select>
			<input type="Text" name="nuevoNombre" placeholder="Cantidad de tomos" required /><br><br>
			<input type="radio" name="VIP" value="+">Ingreso<br>
			<input type="radio" name="VIP" value="-">Vendido<br><br>
			<input type="submit" value="Actualizar"/>
		</form>
		<a  href="inicio.html"><input id="botona"  type="submit" value="Volver" ><br></a> 
				</div>
				
	</body>
</html>