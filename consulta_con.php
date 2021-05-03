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


  	<h2>TABLA DE CONSULTA</h2>
  </div>
	 <form value='8' backcolor=black>


<center>

	<h4>Ingrese el Id de la consulta:</h4>
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

$sql = "SELECT consulta.id_consulta, consulta.fecha,consulta.hora, consultorio.edificio, medico.nombre_medico, paciente.id_paciente, paciente.nombre from consulta   inner join consultorio on consulta.Consultorio_id_consultorio=consultorio.id_consultorio inner join medico on consulta.medico_id_medico=medico.id_medico inner join paciente where paciente.id_paciente=consulta.paciente_id_paciente and consulta.id_consulta=$_GET[dato]";

$result =mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
	// imprime los encabezados de la tabla
	echo "<table><tr><th>Id de la consulta</th><th><th>Fecha</th></th>
		<th><th>Hora</th></th><th><th>Edificio</th></th><th><th>Nombre del médico</th></th>
		<th><th>Id del paciente</th></th><th><th>Nombre del paciente</th></th></tr>";

	
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td>".$row["id_consulta"].
		     "</td><td><td>" . $row["fecha"].
		     "</td></td><td><td>" . $row["hora"].
		     "</td></td><td><td>" . $row["edificio"].
		     "</td></td><td><td>" . $row["nombre_medico"].
		     "</td></td><td><td>" . $row["id_paciente"].
		     "</td></td><td><td>" . $row["nombre"].
		     
		     "</td></td></tr>";
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