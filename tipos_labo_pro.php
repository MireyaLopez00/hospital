<?php


$conexion =new mysqli("localhost","root","","hospital");

	$id_tipodelab= $_POST['id_tipodelab'];
	$tipo_examen= $_POST['tipo_examen'];
	$descripcion_examen= $_POST['descripcion_examen'];

	$query="INSERT INTO  tipos_labo(id_tipodelab,tipo_examen,descripcion_examen) VALUES('$id_tipodelab','$tipo_examen','$descripcion_examen')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:index.html");
	} else {
	echo "conexion no exitosa";
}
?>