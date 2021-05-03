<?php


$conexion =new mysqli("localhost","root","","hospital");

	$id_odon= $_POST['id_odon'];
	$odontograma= $_POST['odontograma'];
	$diagnostico= $_POST['diagnostico'];
	$tratamiento= $_POST['tratamiento'];


	$query="INSERT INTO  odontologia(id_odon,odontograma,diagnostico,tratamiento) VALUES('$id_odon','$odontograma','$diagnostico','$tratamiento')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:index.html");
	} else {
	echo "conexion no exitosa";
}
?>