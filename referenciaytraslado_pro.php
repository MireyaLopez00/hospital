<?php


$conexion =new mysqli("localhost","root","","hospital");

	$id_traslado= $_POST['id_traslado'];
	$estado_origen= $_POST['estado_origen'];
	$estado_receptor= $_POST['estado_receptor'];
	$motivo_envio= $_POST['motivo_envio'];
	$paciente_id_paciente= $_POST['paciente_id_paciente'];

	$query="INSERT INTO  referenciaytraslado(id_traslado,estado_origen,estado_receptor,motivo_envio,paciente_id_paciente) VALUES('$id_traslado','$estado_origen','$estado_receptor','$motivo_envio','$paciente_id_paciente')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:index.html");
	} else {
	echo "conexion no exitosa";
}
?>