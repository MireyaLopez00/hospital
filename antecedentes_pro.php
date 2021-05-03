<?php


$conexion =new mysqli("localhost","root","","hospital");
	
	$id_antecedente= $_POST['id_antecedente'];
	$antecedentes_quirur= $_POST['antecedentes_quirur'];
	$fecha_ante_quirur= $_POST['fecha_ante_quirur'];
	$antecedentes_personales= $_POST['antecedentes_personales'];
	$fecha_ante_personales= $_POST['fecha_ante_personales'];
	
	$query="INSERT INTO antecedentes(id_antecedente,antecedentes_quirur,fecha_ante_quirur,antecedentes_personales,fecha_ante_personales) VALUES('$id_antecedente','$antecedentes_quirur','$fecha_ante_quirur','$antecedentes_personales','$fecha_ante_personales')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:index.html");
	} else {
	echo "conexion no exitosa";
}
?>