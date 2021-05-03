<?php


$conexion =new mysqli("localhost","root","","hospital");

	$id_especialidad= $_POST['id_especi'];
	$nombre_especialidad= $_POST['nombre_especialidad'];
	
	
	$query="INSERT INTO especialidad(id_especi,nombre_especialidad) VALUES('$id_especialidad','$nombre_especialidad')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:index.html");
	} else {
	echo "conexion no exitosa";
}
?>