<?php


$conexion =new mysqli("localhost","root","","hospital");

	$id_medico= $_POST['id_medico'];
	$nombre_medico= $_POST['nombre_medico'];
	$telefono= $_POST['telefono'];
	$correo= $_POST['correo'];
	$especialidad_id_especi= $_POST['especialidad_id_especi'];
	$recursos_hum_id_personal= $_POST['recursos_hum_id_personal'];
	$horarios_id_horario= $_POST['horarios_id_horario'];

	$query="INSERT INTO  medico(id_medico,telefono,correo,especialidad_id_especi,recursos_hum_id_personal,nombre_medico,horarios_id_horario) VALUES('$id_medico','$telefono','$correo','$especialidad_id_especi','$recursos_hum_id_personal','$nombre_medico','$horarios_id_horario')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:index.html");
	} else {
	echo "conexion no exitosa";
}
?>