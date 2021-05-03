<?php


$conexion =new mysqli("localhost","root","","hospital");

	$id_proveedor= $_POST['id_proveedor'];
	$nombre_proveedor= $_POST['nombre_proveedor'];
	$telefono_provee= $_POST['telefono_provee'];
	$productos= $_POST['productos'];


	$query="INSERT INTO  proveedor(id_proveedor,nombre_proveedor,telefono_provee,productos) VALUES('$id_proveedor','$nombre_proveedor','$telefono_provee','$productos')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:index.html");
	} else {
	echo "conexion no exitosa";
}
?>