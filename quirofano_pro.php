<?php


$conexion =new mysqli("localhost","root","","hospital");

	$id_quirofano= $_POST['id_quirofano'];
	$descrip_equipo= $_POST['descrip_equipo'];


	$query="INSERT INTO  quirofano(id_quirofano,descrip_equipo) VALUES('$id_quirofano','$descrip_equipo')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:index.html");
	} else {
	echo "conexion no exitosa";
}
?>