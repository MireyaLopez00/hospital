<?php


$conexion =new mysqli("localhost","root","","hospital");

	$id_consultorio= $_POST['id_consultorio'];
	$edificio= $_POST['edificio'];
	
	
	$query="INSERT INTO consultorio(id_consultorio,edificio) VALUES('$id_consultorio','$edificio')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:index.html");
	} else {
	echo "conexion no exitosa";
}
?>