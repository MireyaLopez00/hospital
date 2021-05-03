<?php


$conexion =new mysqli("localhost","root","","hospital");

	$id_tipociru= $_POST['id_tipociru'];
	$tipo_cirugia= $_POST['tipo_cirugia'];
	$descripcion_ciru= $_POST['descripcion_ciru'];

	$query="INSERT INTO  tipo_cirugia(id_tipociru,tipo_cirugia,descripcion_ciru) VALUES('$id_tipociru','$tipo_cirugia','$descripcion_ciru')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:index.html");
	} else {
	echo "conexion no exitosa";
}
?>