<?php


$conexion =new mysqli("localhost","root","","hospital");

	$id_camillero= $_POST['id_camillero'];
	$nombre_camillero= $_POST['nombre_camillero'];
	
	$horarios_id_horario= $_POST['horarios_id_horario'];
	
	$query="INSERT INTO camillero(id_camillero,nombre_camillero,horarios_id_horario) VALUES('$id_camillero','$nombre_camillero','$horarios_id_horario')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:index.html");
	} else {
	echo "conexion no exitosa";
}
?>