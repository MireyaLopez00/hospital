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


  	<h2>TABLA DE REVISIÓN</h2>
  </div>
	 <form value='8' backcolor=black>


<center>

	<h4>Ingrese el Id del paciente:</h4>
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

$sql = "SELECT  revision.signos_vitales, revision.descri_eu, revision.fecha, revision.hora, paciente.id_paciente, paciente.nombre ,enfermera.id_enfermera, egreso.id_egreso from  revision   inner join paciente on  revision.paciente_id_paciente=paciente.id_paciente  inner join enfermera on enfermera.id_enfermera=revision.enfermera_id_enfermera inner join egreso where egreso.id_egreso=revision.egreso_id_egreso and  paciente.id_paciente=$_GET[dato]";

$result =mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){

	echo "<table><tr><th><th>Id del paciente</th></th><th><th>Nombre del paciente </th></th><th><th>Fecha</th></th><th><th>Hora</th></th>
		<th><th>Signos vitales</th></th><th><th>Descripción de la revision</th></th><th><th>Id de la enfermera</th></th>
		<th><th>Id de egreso </th></th></tr>";
		
while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td><td>".$row["id_paciente"].
		     "</td></td><td><td>" . $row["nombre"].
		     "</td></td><td><td>" . $row["fecha"].
		     "</td></td><td><td>" . $row["hora"].
		     "</td></td><td><td>" . $row["signos_vitales"].
		     "</td></td><td><td>" . $row["descri_eu"].
		     "</td></td><td><td>" . $row["id_enfermera"].
		     "</td></td><td><td>" . $row["id_egreso"].
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