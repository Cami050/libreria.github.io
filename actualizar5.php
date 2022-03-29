<html>
	<head>
		<title>Ejercicio- Update</title>
		<link rel="stylesheet" href="style.css">
		<meta charset="UTF-8" />
	</head>
	<body>
		<?php
                 include 'conexioninicio2.php'; 
                  $consulta = $conexioninicio2 -> query("SELECT `cantidad` FROM libreria WHERE Titulo = '{$_POST['nombreOriginal']}'") or die ("Ha fallado la conexión");
                  while ( $registro = $consulta -> fetch_assoc() ){
	              $registro['cantidad'];
					$R= $registro['cantidad'];
						}
					$Ope= $_POST['VIP']; 
					$Can_M=$_POST['nuevoNombre'];


				if ($Ope=="+") {
				$Can_A = $R + $Can_M  ;
				}
				else {
				$Can_A = $R - $Can_M  ;
					}


			include 'conexioninicio2.php';
			$consulta = $conexioninicio2 -> query ("UPDATE libreria SET Cantidad = '$Can_A' WHERE Titulo = '{$_POST['nombreOriginal']}' ") or die ("Ha fallado la conexión");
			$conexion = null;
			echo '<h1>Todo correcto</h1>';

		?>
				<a  href="inicio.html"><input id="botona"  type="submit" value="Volver" ><br></a> 

	</body>
</html>