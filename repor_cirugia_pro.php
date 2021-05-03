<?php


$conexion =new mysqli("localhost","root","","hospital");

	$id_reporte= $_POST['id_reporte'];
	$enfermera_id_enfermera= $_POST['enfermera_id_enfermera'];
	$camillero_id_camillero= $_POST['camillero_id_camillero'];
	$cirugia_id_cirugia= $_POST['cirugia_id_cirugia'];
	$medico_id_medico= $_POST['medico_id_medico'];

	$query="INSERT INTO   repor_cirugia(id_reporte,enfermera_id_enfermera,camillero_id_camillero,cirugia_id_cirugia,medico_id_medico) VALUES('$id_reporte','$enfermera_id_enfermera','$camillero_id_camillero','$cirugia_id_cirugia','$medico_id_medico')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:index.html");
	} else {
	echo "conexion no exitosa";
}
?>