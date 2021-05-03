<?php


$conexion =new mysqli("localhost","root","","hospital");

	$usuario= $_POST['usuario'];
	$contra = password_hash($_POST['contra'], PASSWORD_BCRYPT);
	
	
	$query="INSERT INTO registro(usuario,contra) VALUES('$usuario','$contra')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:inicio.php");
	} else {
	echo "conexion no exitosa";
}
?>