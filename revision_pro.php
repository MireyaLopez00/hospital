<?php


$conexion =new mysqli("localhost","root","","hospital");

	$signos_vitales= $_POST['signos_vitales'];
	$descri_eu= $_POST['descri_eu'];
	$fecha= $_POST['fecha'];
	$hora= $_POST['hora'];
	$paciente_id_paciente= $_POST['paciente_id_paciente'];
	$enfermera_id_enfermera= $_POST['enfermera_id_enfermera'];
	$egreso_id_egreso= $_POST['egreso_id_egreso'];


	$query="INSERT INTO   revision(signos_vitales,descri_eu,fecha,hora,paciente_id_paciente,enfermera_id_enfermera,egreso_id_egreso) VALUES('$signos_vitales','$descri_eu','$fecha','$hora','$paciente_id_paciente','$enfermera_id_enfermera','$egreso_id_egreso')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:index.html");
	} else {
	echo "conexion no exitosa";
}
?>