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


  	<h2>TABLA DE EXÁMENES DE LABORATORIO</h2>
  </div>
	 <form value='8' backcolor=black>


<center>

	<h4>Ingrese el Id del exámen de laboratorio:</h4>
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

$sql = "SELECT examenes_labora.id_laboratorio, examenes_labora.fecha_examen, examenes_labora.hora_examen, paciente.id_paciente, paciente.nombre, examenes_labora.nombre_laboratorio, examenes_labora.lugar_labor, examenes_labora.nombre_examen, tipos_labo.tipo_examen from examenes_labora   inner join paciente on paciente.id_paciente=examenes_labora.paciente_id_paciente inner join tipos_labo where tipos_labo.id_tipodelab=examenes_labora.tipos_labo_id_tipodelab  and examenes_labora.id_laboratorio=$_GET[dato]";

$result =mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
	// imprime los encabezados de la tabla
	echo "<table><tr><th>Id de laboratorio</th><th>Fecha de exámen</th>
		<th>Hora de exámen<th><th>Id del paciente</th><th>Nombre del paciente</th>
		<th>Nombre del laboratorio</th><th>Lugar de laboratorio</th> <th>Nombre del exámen</th>
		<th>Tipo de exámen</th></tr>";

	
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td>".$row["id_laboratorio"].
		     "</td><td>" . $row["fecha_examen"].
		     "</td><td>" . $row["hora_examen"].
		     "</td><td><td>" . $row["id_paciente"].
		     "</td></td><td>" . $row["nombre"].
		     "</td><td>" . $row["nombre_laboratorio"].
		     "</td><td>" . $row["lugar_labor"].
		     "</td><td>" . $row["nombre_examen"].
		     "</td><td>" . $row["tipo_examen"].
		   
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