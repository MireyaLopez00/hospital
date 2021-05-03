<?php


$conexion =new mysqli("localhost","root","","hospital");

	$id_operacion= $_POST['id_operacion'];
	$tipo_operacion= $_POST['tipo_operacion'];
	$monto= $_POST['monto'];
	$fecha= $_POST['fecha'];
	$Compra_medi_id_compra= $_POST['Compra_medi_id_compra'];
	$farmacia_id_venta= $_POST['farmacia_id_venta'];


	$query="INSERT INTO  operaciones(id_operacion,tipo_operacion,monto,fecha,Compra_medi_id_compra,farmacia_id_venta) VALUES('$id_operacion','$tipo_operacion','$monto','$fecha','$Compra_medi_id_compra','$farmacia_id_venta')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:index.html");
	} else {
	echo "conexion no exitosa";
}
?>