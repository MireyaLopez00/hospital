<?php


$conexion =new mysqli("localhost","root","","hospital");

	$id_expe= $_POST['id_expe'];
	$fecha_actua= $_POST['fecha_actua'];
	$padecimiento_actual= $_POST['padecimiento_actual'];
	$habitus_exterior= $_POST['habitus_exterior'];
	$signosvitales= $_POST['signosvitales'];
	$fecha_signos= $_POST['fecha_signos'];
	$hora_signos= $_POST['hora_signos'];
	$odontologia_id_odon= $_POST['odontologia_id_odon'];
	$paciente_id_paciente= $_POST['paciente_id_paciente'];
	$antecedentes_id_antecedente= $_POST['antecedentes_id_antecedente'];


	$query="INSERT INTO expediente(id_expe,padecimiento_actual,habitus_exterior,signosvitales,odontologia_id_odon,paciente_id_paciente,fecha_actua,fecha_signos,hora_signos,antecedentes_id_antecedente) VALUES('$id_expe','$padecimiento_actual','$habitus_exterior','$signosvitales','$odontologia_id_odon','$paciente_id_paciente','$fecha_actua','$fecha_signos','$hora_signos','$antecedentes_id_antecedente')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:index.html");
	} else {
	echo "conexion no exitosa";
}
?>