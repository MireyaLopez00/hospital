<?php


$conexion =new mysqli("localhost","root","","hospital");

	$id_cirugia= $_POST['id_cirugia'];
	$descrip_cirugia= $_POST['descripcion_cirugia'];
	$quirofano_id_quirofano= $_POST['quirofano_id_quirofano'];
	$paciente_id_paciente= $_POST['paciente_id_paciente'];
	$anesteciologo_id_aneste=$_POST['anesteciologo_id_aneste'];
	$nota_postoperatoria_id_post=$_POST['nota_postoperatoria_id_post'];
	$tipo_cirugia_id_tipociru=$_POST['tipo_cirugia_id_tipociru'];

	
	$query="INSERT INTO cirugia(id_cirugia,descripcion_cirugia, quirofano_id_quirofano,paciente_id_paciente,anesteciologo_id_aneste, nota_postoperatoria_id_post,tipo_cirugia_id_tipociru) VALUES('$id_cirugia','$descrip_cirugia','$quirofano_id_quirofano','$paciente_id_paciente','$anesteciologo_id_aneste','$nota_postoperatoria_id_post','$tipo_cirugia_id_tipociru')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:index.html");
	} else {
	echo "conexion no exitosa";
}
?>