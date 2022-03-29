<link rel="stylesheet" href="style.css">
<?php
$Codigo= $_POST['Codigo'];
$Titulo= $_POST['Titulo'];
$Autor=$_POST['Autor'];
$Genero= $_POST['Genero'];
$Editorial= $_POST['Editorial'];
$Cantidad=$_POST['Cantidad'];
$Fecha=$_POST['Fecha_Publicacion'];
$Edicion=$_POST['Edicion'];



include 'conexioninicio2.php';
$consulta = $conexioninicio2 -> query("INSERT INTO libreria (Codigo,Titulo,Autor,Genero,Editorial,Cantidad,Fecha_Publicacion,Edicion) 
VALUES ('$_REQUEST[Codigo]','$_REQUEST[Titulo]','$_REQUEST[Autor]','$_REQUEST[Genero]','$_REQUEST[Editorial]','$_REQUEST[Cantidad]','$_REQUEST[Fecha_Publicacion]','$_REQUEST[Edicion]')");

echo "<h1>correcto!!</h1>";
?>
	<a  href="inicio.html"><input id="botonf"  type="submit" value="Volver" ><br></a> 