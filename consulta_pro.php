<?php


$conexion =new mysqli("localhost","root","","hospital");

	$id_consulta= $_POST['id_consulta'];
	$fecha= $_POST['fecha'];
	$hora= $_POST['hora'];
	$Consultorio_id_consultorio= $_POST['Consultorio_id_consultorio'];
	$medico_id_medico= $_POST['medico_id_medico'];
	$paciente_id_paciente= $_POST['paciente_id_paciente'];
	
	$query="INSERT INTO consulta(id_consulta,fecha, hora,Consultorio_id_consultorio,medico_id_medico,paciente_id_paciente) VALUES('$id_consulta','$fecha','$hora','$Consultorio_id_consultorio', '$medico_id_medico','$paciente_id_paciente')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:index.html");
	} else {
	echo "conexion no exitosa";
}
?>