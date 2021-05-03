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


  	<h2>TABLA DE MÉDICOS</h2>
  </div>
	 <form value='8' backcolor=black>


<center>

	<h4>Ingrese el Id del médico:</h4>
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

$sql = "SELECT medico.id_medico, medico.telefono, medico.correo, medico.nombre_medico, especialidad.nombre_especialidad,recursos_hum.id_personal, horarios.tipo_horario from medico   inner join especialidad on medico.especialidad_id_especi=especialidad.id_especi inner join recursos_hum on recursos_hum.id_personal=medico.recursos_hum_id_personal inner join horarios where horarios.id_horario=medico.horarios_id_horario and medico.id_medico=$_GET[dato]";

$result =mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
	// imprime los encabezados de la tabla
	echo "<table><tr><th>Id del médico</th>
		<th>Nombre del médico</th><th>Especialidad</th><th>Teléfono</th>
		<th>Correo</th><th>Id del personal</th>
		<th>Tipo de horario</th></tr>";

	
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td>".$row["id_medico"].
		     "</td><td>" . $row["nombre_medico"].
		     "</td><td>" . $row["nombre_especialidad"].
		     "</td><td>" . $row["telefono"].
		     "</td><td>" . $row["correo"].
		     "</td><td>" . $row["id_personal"].
		     "</td><td>" . $row["tipo_horario"].

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