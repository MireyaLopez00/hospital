<?php


$conexion =new mysqli("localhost","root","","hospital");

	$id_medicamento= $_POST['id_medicamento'];
	$nombre_medi= $_POST['nombre_medi'];
	$fecha= $_POST['fecha'];
	$proveedor_id_proveedor= $_POST['proveedor_id_proveedor'];
	$marca_id_marca= $_POST['marca_id_marca'];
	$laboratorio_medi_id_labo= $_POST['laboratorio_medi_id_labo'];
	

	$query="INSERT INTO  medicamento(id_medicamento,nombre_medi,fecha,proveedor_id_proveedor,marca_id_marca,laboratorio_medi_id_labo) VALUES('$id_medicamento','$nombre_medi','$fecha','$proveedor_id_proveedor','$marca_id_marca','$laboratorio_medi_id_labo')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:index.html");
	} else {
	echo "conexion no exitosa";
}
?>