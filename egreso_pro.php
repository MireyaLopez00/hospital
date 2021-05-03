<?php


$conexion =new mysqli("localhost","root","","hospital");

	$id_egreso= $_POST['id_egreso'];
	$paciente_id_paciente= $_POST['paciente_id_paciente'];
	$fecha_ingreso= $_POST['fecha_ingreso'];
	$motivo_ingreso= $_POST['motivo_ingreso'];
	$tratamiento_aplicado= $_POST['tratamiento_aplicado'];
	$motivo_egreso= $_POST['motivo_egreso'];
	$fecha_egreso= $_POST['fecha_egreso'];
	
	
	$query="INSERT INTO egreso(id_egreso,fecha_ingreso,fecha_egreso,motivo_ingreso,motivo_egreso,tratamiento_aplicado,paciente_id_paciente) VALUES('$id_egreso','$fecha_ingreso','$fecha_egreso','$motivo_ingreso','$motivo_egreso','$tratamiento_aplicado','$paciente_id_paciente')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:index.html");
	} else {
	echo "conexion no exitosa";
}
?>