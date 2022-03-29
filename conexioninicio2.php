<?php
$servidor='localhost';
$basedatos='libreria';
$usuario='root';
$contrasena='';

$conexioninicio2 = new mysqli($servidor,$usuario,$contrasena,$basedatos);
if ($conexioninicio2->connect_errno)
{
	echo"error de conexion verifique sus datos ";
}
else 
{
	echo "<br>
	<br>";
}
?>