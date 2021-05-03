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


  	<h2>TABLA DE DETALLE DE COMPRA</h2>
  </div>
	 <form value='8' backcolor=black>


<center>

	<h4>Ingrese el Id del detalle de la compra:</h4>
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

$sql = "SELECT detalle_com.id_compra, detalle_com.cantidad, detalle_com.nombre_medicamento, detalle_com.total, laboratorio_medi.nombre_laboratorio, detalle_com.num_lote from detalle_com inner join laboratorio_medi where laboratorio_medi.id_labo =detalle_com.laboratorio_medi_id_labo and detalle_com.id_compra=$_GET[dato]";

$result =mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
	// imprime los encabezados de la tabla
	echo "<table><tr><th>Id de la compra</th><th>Cantidad</th>
		<th>Nombre del medicamento</th><th>Total</th><th>Laboratorio del medicamento</th>
		<th>Número de lote</th></tr>";

	
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td>".$row["id_compra"].
		     "</td><td>" . $row["cantidad"].
		     "</td><td>" . $row["nombre_medicamento"].
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