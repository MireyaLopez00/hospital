<?php


$conexion =new mysqli("localhost","root","","hospital");

	$id_compra= $_POST['id_compra'];
	$total= $_POST['total'];
	$detalle_com_id_compra= $_POST['detalle_com_id_compra'];
	$fecha_caducidad= $_POST['fecha_caducidad'];
	
	$query="INSERT INTO compra_medi(id_compra,total,detalle_com_id_compra,fecha_caducidad) VALUES('$id_compra','$total','$detalle_com_id_compra','$fecha_caducidad')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:index.html");
	} else {
	echo "conexion no exitosa";
}
?>