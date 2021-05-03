<?php


$conexion =new mysqli("localhost","root","","hospital");

	$id_personal= $_POST['id_personal'];
	$nombre_per= $_POST['nombre_per'];
	$telefono= $_POST['telefono'];
	$puesto= $_POST['puesto'];


	$query="INSERT INTO  recursos_hum(id_personal,nombre_per,telefono,puesto) VALUES('$id_personal','$nombre_per','$telefono','$puesto')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:index.html");
	} else {
	echo "conexion no exitosa";
}
?>