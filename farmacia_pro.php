<?php


$conexion =new mysqli("localhost","root","","hospital");

	$id_venta= $_POST['id_venta'];
	$recursos_hum_id_personal= $_POST['recursos_hum_id_personal'];
	$receta_id_receta= $_POST['receta_id_receta'];
	$detalle_venta_id_venta= $_POST['detalle_venta_id_venta'];
	$forma_pago_id_forma= $_POST['forma_pago_id_forma'];
	$total_final= $_POST['total_final'];
	$fecha_compra= $_POST['fecha_compra'];

	$query="INSERT INTO farmacia(id_venta,total_final,fecha_compra,receta_id_receta,recursos_hum_id_personal,forma_pago_id_forma, detalle_venta_id_venta) VALUES('$id_venta','$total_final', '$fecha_compra','$receta_id_receta','$recursos_hum_id_personal','$forma_pago_id_forma','$detalle_venta_id_venta')";

	$resultado= $conexion->query($query);
	if ($resultado) {
		header("location:index.html");
	} else {
	echo "conexion no exitosa";
}
?>