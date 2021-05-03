<?php


$conexion =new mysqli("localhost","root","","hospital");

	$id_receta= $_POST['id_receta'];
	$medicamento_rece= $_POST['medicamento_rece'];
	$Consulta_id_consulta= $_POST['Consulta_id_consulta'];
	$medico_id_medico= $_POST['medico_id_medico'];


	$query="INSERT INTO  receta(id_receta,medicamento_rece,Consulta_id_consulta,medico_id_medico) VALUES('$id_receta','$medicamento_rece','$Consulta_id_consulta','$medico_id_medico')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:index.html");
	} else {
	echo "conexion no exitosa";
}
?>