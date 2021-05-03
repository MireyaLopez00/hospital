<?php


$conexion =new mysqli("localhost","root","","hospital");

	$id_compra= $_POST['id_compra'];
	$cantidad= $_POST['cantidad'];
	$nombre_medicamento= $_POST['nombre_medicamento'];
	$total= $_POST['total'];
	$medicamento_id_medicamento= $_POST['medicamento_id_medicamento'];
	$laboratorio_medi_id_labo= $_POST['laboratorio_medi_id_labo'];
	$num_lote= $_POST['num_lote'];
	
	
	$query="INSERT INTO detalle_com(id_compra,cantidad, nombre_medicamento, total, medicamento_id_medicamento, laboratorio_medi_id_labo, num_lote) VALUES('$id_compra','$cantidad', '$nombre_medicamento','$total','$medicamento_id_medicamento','$laboratorio_medi_id_labo','num_lote')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:index.html");
	} else {
	echo "conexion no exitosa";
}
?>