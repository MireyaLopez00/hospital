<?php


$conexion =new mysqli("localhost","root","","hospital");

	$id_enfermera= $_POST['id_enfermera'];
	$nombre= $_POST['nombre'];
	$especialidad= $_POST['especialidad'];
	$turno= $_POST['turno'];
	$telefono= $_POST['telefono'];
	$horarios_id_horario= $_POST['horarios_id_horario'];
	$recursos_hum_id_personal= $_POST['recursos_hum_id_personal'];
	
	
	$query="INSERT INTO enfermera(id_enfermera,nombre, especialidad, turno,telefono,recursos_hum_id_personal,horarios_id_horario) VALUES('$id_enfermera','$nombre', '$especialidad','$turno','$telefono','$recursos_hum_id_personal','$horarios_id_horario')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:index.html");
	} else {
	echo "conexion no exitosa";
}
?>