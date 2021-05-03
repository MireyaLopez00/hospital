<?php


$conexion =new mysqli("localhost","root","","hospital");

	$id_urgencia= $_POST['id_urgencia'];
	$descripcion_urg= $_POST['descripcion_urg'];
	$tipo= $_POST['tipo'];
	$fecha= $_POST['fecha'];
	$hora_ingreso= $_POST['hora_ingreso'];
	$medico_id_medico= $_POST['medico_id_medico'];
	$paciente_id_paciente= $_POST['paciente_id_paciente'];
	$enfermera_id_enfermera= $_POST['enfermera_id_enfermera'];
	$referenciaytraslado_id_traslado= $_POST['referenciaytraslado_id_traslado'];
	$hora_salida= $_POST['hora_salida'];

	$query="INSERT INTO  urgencias(id_urgencia,descripcion_urg,tipo,fecha,hora_ingreso,medico_id_medico,paciente_id_paciente, enfermera_id_enfermera,referenciaytraslado_id_traslado,hora_salida) VALUES('$id_urgencia','$descripcion_urg','$tipo','$fecha','$hora_ingreso','$medico_id_medico','$paciente_id_paciente','$enfermera_id_enfermera','$referenciaytraslado_id_traslado','$hora_salida')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:index.html");
	} else {
	echo "conexion no exitosa";
}
?>