<?php


$conexion =new mysqli("localhost","root","","hospital");

	$nombre_donador= $_POST['nombre_donador'];
	$tipo_sangre= $_POST['tipo_sangre'];
	$paciente_id_paciente= $_POST['paciente_id_paciente'];
	
	
	$query="INSERT INTO banco_sangre(nombre_donador,tipo_sangre, paciente_id_paciente) VALUES('$nombre_donador','$tipo_sangre','$paciente_id_paciente')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:index.html");
	} else {
	echo "conexion no exitosa";
}
?>