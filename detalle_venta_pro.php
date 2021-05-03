<?php


$conexion =new mysqli("localhost","root","","hospital");

	$id_venta= $_POST['id_venta'];
	$cantidad= $_POST['cantidad'];
	$nombre_medi= $_POST['nombre_medi'];
	$total= $_POST['total'];
	$medicamento_id_medicamento= $_POST['medicamento_id_medicamento'];
	$laboratorio_medi_id_labo= $_POST['laboratorio_medi_id_labo'];
	$num_lote= $_POST['num_lote'];
	
	
	$query="INSERT INTO detalle_venta(id_venta,cantidad, nombre_medi, total, medicamento_id_medicamento, laboratorio_medi_id_labo, num_lote) VALUES('$id_venta','$cantidad', '$nombre_medi','$total','$medicamento_id_medicamento','$laboratorio_medi_id_labo','num_lote')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:index.html");
	} else {
	echo "conexion no exitosa";
}
?>