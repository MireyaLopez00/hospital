<html>
<! DOCTYPE html>
<head>
<title color="blue">HOSPITAL</title>

<link rel="icon" type="image/png" href="hospital.png" sizes="5x5">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background= "uno.png" background-size=cover  text= "black">
<center>
	  	<a href ="ingresar.html">
<img src="imagenes/ingresar.png" hspace="100" vspace="5"> </a>
&nbsp;
&nbsp;
&nbsp;
&nbsp;
<a href ="consultar.html">
<img src="imagenes/consultar.png" hspace="100" vspace="5"> </a>
</center>
	  <div class="header">


  	<h2>TABLA DE VENTAS</h2>
  </div>
	 <form value='8' backcolor=black>


<center>

	<h4>Ingrese el Id de la venta de medicamento:</h4>
<input type="text" name="dato" id="dato">
<br>
<br>
<input type="submit" value="Consultar" class="btn">
</form >

</center>
</body>
<br>
<br>
<center>

<?php
if (isset($_REQUEST['dato'])) {
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";


// crear conexion 

$conn = mysqli_connect ($servername, $username, $password, $dbname);

// Revisa la conexion

if (!$conn) {
	die("Connection failed" . mysqli_connect_error());
}

$sql = "SELECT farmacia.id_venta, farmacia.total_final, farmacia.fecha_compra, receta.id_receta, recursos_hum.id_personal, forma_pago.id_forma, forma_pago.forma_pago, farmacia.detalle_venta_id_venta from farmacia   inner join receta on farmacia.receta_id_receta=receta.id_receta inner join recursos_hum on recursos_hum.id_personal=farmacia.recursos_hum_id_personal inner join forma_pago on forma_pago.id_forma=farmacia.forma_pago_id_forma and farmacia.id_venta=$_GET[dato]";

$result =mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
	// imprime los encabezados de la tabla
	echo "<table><tr><th>Id de la venta</th><th>Fecha de la compra</th>
		<th>Id del detalle de venta</th><th>Id de la receta</th><th>Total final</th>
		<th>Id forma de pago</th><th>Forma de pago</th>
		<th>Id de personal</th></tr>";

	
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td>".$row["id_venta"].
		     "</td><td>" . $row["fecha_compra"].
		     "</td><td>" . $row["detalle_venta_id_venta"].
		     "</td><td>" . $row["id_receta"].
		     "</td><td>" . $row["total_final"].
		      "</td><td>" . $row["id_forma"].
		     "</td><td>" . $row["forma_pago"].
		     "</td><td>" . $row["id_personal"].
		    
		     "</td> </tr>";
	}
}else{
	echo "No existe ningún registro con el ID ingresado";
}
mysqli_close($conn);


}else{

}
?>

</center>
</htm>