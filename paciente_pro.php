<?php


$conexion =new mysqli("localhost","root","","hospital");

	$id_paciente= $_POST['id_paciente'];
	$nombre= $_POST['nombre'];
	$sexo= $_POST['sexo'];
	$edad= $_POST['edad'];
	$tipo_sangre= $_POST['tipo_sangre'];
	$motivo_ingre= $_POST['motivo_ingre'];
	$sintomas= $_POST['sintomas'];
	$query="INSERT INTO paciente(id_paciente,nombre, sexo,edad,tipo_sangre, motivo_ingre, sintomas) VALUES('$id_paciente','$nombre','$sexo','$edad','$tipo_sangre', '$motivo_ingre','$sintomas')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:index.html");
	} else {
	echo "conexion no exitosa";
}
?>