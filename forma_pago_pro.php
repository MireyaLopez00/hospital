<?php


$conexion =new mysqli("localhost","root","","hospital");

	$id_forma= $_POST['id_forma'];
	$paciente_id_paciente= $_POST['paciente_id_paciente'];
	$forma_pago= $_POST['forma_pago'];
	$seguro= $_POST['seguro'];
	$Pago_de= $_POST['Pago_de'];
	

	$query="INSERT INTO forma_pago(id_forma,forma_pago,seguro,Pago_de,paciente_id_paciente) VALUES('$id_forma','$forma_pago', '$seguro','$Pago_de','$paciente_id_paciente')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:index.html");
	} else {
	echo "conexion no exitosa";
}
?>