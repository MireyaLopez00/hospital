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


  	<h2>TABLA DE URGENCIAS</h2>
  </div>
	 <form value='8' backcolor=black>


<center>

	<h4>Ingrese el Id de la urgencia:</h4>
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

$sql = "SELECT urgencias.id_urgencia, urgencias.descripcion_urg, urgencias.tipo, urgencias.fecha, urgencias.hora_ingreso, paciente.id_paciente, paciente.nombre, medico.id_medico, medico.nombre_medico, enfermera.id_enfermera, referenciaytraslado.id_traslado, urgencias.hora_salida from  urgencias  inner join paciente on paciente.id_paciente= urgencias.paciente_id_paciente inner join medico on medico.id_medico=urgencias.medico_id_medico inner join enfermera on enfermera.id_enfermera= urgencias.enfermera_id_enfermera inner join referenciaytraslado where referenciaytraslado.id_traslado= urgencias.referenciaytraslado_id_traslado and urgencias.id_urgencia=$_GET[dato]";

$result =mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){

	echo "<table><tr><th><th>Id de  la urgencia</th></th>
		<th><th>Id del paciente </th></th>
		<th><th>Nombre del paciente</th></th>
		<th><th>Fecha de la urgencia </th></th>
		<th><th>Hora de ingreso </th></th>
		<th><th>Tipo de urgencia</th></th>
		<th><th>Descripción de la urgencia </th></th>
		<th><th>Id del médico</th></th>
		<th><th>Nombre del médico</th></th>
		<th><th>Id de la enfermera</th></th>
		<th><th>Id de traslado</th></th>
		<th><th>Hora de salida</th></th>		
		</tr>";

while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td><td>".$row["id_urgencia"].
		     "</td></td><td><td>" . $row["id_paciente"].
		     "</td></td><td><td>" . $row["nombre"].
		     "</td></td><td><td>" . $row["fecha"].
		     "</td></td><td><td>" . $row["hora_ingreso"].
		     "</td></td><td><td>" . $row["tipo"].
		     "</td></td><td><td>" . $row["descripcion_urg"].
			 "</td></td><td><td>" . $row["id_medico"].
			 "</td></td><td><td>" . $row["nombre_medico"].
			 "</td></td><td><td>" . $row["id_enfermera"].
			 "</td></td><td><td>" . $row["id_traslado"].
			 "</td></td><td><td>" . $row["hora_salida"].
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