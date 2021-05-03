<?php


$conexion =new mysqli("localhost","root","","hospital");

	$id_post= $_POST['id_post'];
	$diagnostico_preope= $_POST['diagnostico_preope'];
	$diagnostico_post= $_POST['diagnostico_post'];
	$operacion_reali= $_POST['operacion_reali'];
	$paciente_id_paciente= $_POST['paciente_id_paciente'];

	$query="INSERT INTO  nota_postoperatoria(id_post,diagnostico_preope,diagnostico_post,operacion_reali,paciente_id_paciente) VALUES('$id_post','$diagnostico_preope','$diagnostico_post','$operacion_reali','$paciente_id_paciente')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:index.html");
	} else {
	echo "conexion no exitosa";
}
?>