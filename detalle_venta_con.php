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


  	<h2>TABLA DE DETALLE DE VENTA</h2>
  </div>
	 <form value='8' backcolor=black>


<center>

	<h4>Ingrese el Id del detalle de la venta:</h4>
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

$sql = "SELECT detalle_venta.id_venta, detalle_venta.cantidad, detalle_venta.nombre_medi, detalle_venta.total, laboratorio_medi.nombre_laboratorio, detalle_venta.num_lote from detalle_venta inner join laboratorio_medi where laboratorio_medi.id_labo =detalle_venta.laboratorio_medi_id_labo and detalle_venta.id_venta=$_GET[dato]";

$result =mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
	// imprime los encabezados de la tabla
	echo "<table><tr><th>Id de la venta</th><th>Cantidad</th>
		<th>Nombre del medicamento</th><th>Total</th><th>Laboratorio del medicamento</th>
		<th>Número de lote</th></tr>";

	
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td>".$row["id_venta"].
		     "</td><td>" . $row["cantidad"].
		     "</td><td>" . $row["nombre_medi"].
		     "</td><td>" . $row["total"].
		     "</td><td>" . $row["nombre_laboratorio"].
		     "</td><td>" . $row["num_lote"].
		    
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