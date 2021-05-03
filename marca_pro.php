<?php


$conexion =new mysqli("localhost","root","","hospital");

	$id_marca= $_POST['id_marca'];
	$nombre_marca= $_POST['nombre_marca'];
	$empresa= $_POST['empresa'];
	
	

	$query="INSERT INTO  marca(id_marca,nombre_marca,empresa) VALUES('$id_marca','$nombre_marca','$empresa')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:index.html");
	} else {
	echo "conexion no exitosa";
}
?>