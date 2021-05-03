<?php


$conexion =new mysqli("localhost","root","","hospital");

	$id_horario= $_POST['id_horario'];
	$tipo_horario= $_POST['tipo_horario'];
	$tiempo_entrada= $_POST['tiempo_entrada'];
	$tiempo_salida= $_POST['tiempo_salida'];
	

	$query="INSERT INTO horarios(id_horario,tipo_horario, tiempo_entrada, tiempo_salida) VALUES('$id_horario','$tipo_horario', '$tiempo_entrada','$tiempo_salida')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:index.html");
	} else {
	echo "conexion no exitosa";
}
?>