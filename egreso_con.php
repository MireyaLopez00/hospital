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


  	<h2>TABLA DE EGRESO</h2>
  </div>
	 <form value='8' backcolor=black>


<center>

	<h4>Ingrese el Id del egreso:</h4>
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

$sql = "SELECT  egreso.id_egreso, egreso.fecha_ingreso, egreso.fecha_egreso, egreso.motivo_ingreso, egreso.motivo_egreso, egreso.tratamiento_aplicado, paciente.id_paciente, paciente.nombre from egreso   inner join paciente on egreso.paciente_id_paciente=paciente.id_paciente  and egreso.id_egreso=$_GET[dato]";

$result =mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
	// imprime los encabezados de la tabla
	echo "<table><tr><th>Id de egreso</th><th>Id del paciente</th>
		<th>Nombre del paciente</th><th>Fecha de ingreso</th><th>Motivo de ingreso</th>
		<th>Fecha de egreso</th><th>Motivo de egreso</th>
		<th>tratamiento aplicado</th></tr>";

	
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td>".$row["id_egreso"].
			"</td><td>" . $row["id_paciente"].
		     "</td><td>" . $row["nombre"].
		     "</td><td>" . $row["fecha_ingreso"].
		     "</td><td>" . $row["motivo_ingreso"].
		     "</td><td>" . $row["fecha_egreso"].
		     "</td><td>" . $row["motivo_egreso"].
		     "</td><td>" . $row["tratamiento_aplicado"].
		    
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