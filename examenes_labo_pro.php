<?php


$conexion =new mysqli("localhost","root","","hospital");

	$id_laboratorio= $_POST['id_laboratorio'];
	$fecha_examen= $_POST['fecha_examen'];
	$hora_examen= $_POST['hora_examen'];
	$paciente_id_paciente= $_POST['paciente_id_paciente'];
	$nombre_laboratorio= $_POST['nombre_laboratorio'];
	$lugar_labor= $_POST['lugar_labor'];
	$nombre_examen= $_POST['nombre_examen'];
	$tipos_labo_id_tipodelab= $_POST['tipos_labo_id_tipodelab'];
	
	
	$query="INSERT INTO examenes_labora(id_laboratorio,fecha_examen, hora_examen, paciente_id_paciente, nombre_laboratorio, lugar_labor, nombre_examen,tipos_labo_id_tipodelab) VALUES('$id_laboratorio','$fecha_examen', '$hora_examen','$paciente_id_paciente','$nombre_laboratorio','$lugar_labor','$nombre_examen','$tipos_labo_id_tipodelab')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:index.html");
	} else {
	echo "conexion no exitosa";
}
?>