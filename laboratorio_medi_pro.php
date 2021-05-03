<?php


$conexion =new mysqli("localhost","root","","hospital");

	$id_labo= $_POST['id_labo'];
	$nombre_labo= $_POST['nombre_laboratorio'];
	
	

	$query="INSERT INTO  laboratorio_medi(id_labo,nombre_laboratorio) VALUES('$id_labo','$nombre_labo')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:index.html");
	} else {
	echo "conexion no exitosa";
}
?>