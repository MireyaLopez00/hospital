<?php


$conexion =new mysqli("localhost","root","","hospital");

	$id_aneste= $_POST['id_aneste'];
	$nombre_aneste= $_POST['nombre_aneste'];
	$recursos_hum_id_personal= $_POST['recursos_hum_id_personal'];
	$horarios_id_horario= $_POST['horarios_id_horario'];
	
	$query="INSERT INTO anesteciologo(id_aneste,nombre_aneste, recursos_hum_id_personal,horarios_id_horario) VALUES('$id_aneste','$nombre_aneste','$recursos_hum_id_personal','$horarios_id_horario')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:index.html");
	} else {
	echo "conexion no exitosa";
}
?>