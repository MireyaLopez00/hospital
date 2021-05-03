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


  	<h2>TABLA DE EXPEDIENTE</h2>
  </div>
	 <form value='8' backcolor=black>


<center>

	<h4>Ingrese el Id del expediente:</h4>
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

$sql = "SELECT expediente.id_expe, expediente.padecimiento_actual, expediente.habitus_exterior, expediente.signosvitales, expediente.fecha_actua, expediente.fecha_signos, expediente.hora_signos, antecedentes.id_antecedente, odontologia.id_odon, paciente.id_paciente, paciente.nombre from expediente   inner join antecedentes on expediente.antecedentes_id_antecedente=antecedentes.id_antecedente inner join odontologia on odontologia.id_odon=expediente.odontologia_id_odon inner join paciente where paciente.id_paciente=expediente.paciente_id_paciente and expediente.id_expe=$_GET[dato]";

$result =mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
	// imprime los encabezados de la tabla
	echo "<table><tr><th>Id del expediente</th><th>Id del paciente</th>
		<th>Nombre del paciente</th><th>Fecha actual</th><th>Padecimiento actual</th>
		<th>Habitus exterior</th><th>Id del antecedente</th><th>Id de odontologia</th>
		<th>Fecha de signos vitales</th><th>Hora de signos vitales</th><th>Signos vitales</th></tr>";

	
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td>".$row["id_expe"].
			"</td><td>" . $row["id_paciente"].
		     "</td><td>" . $row["nombre"].
		     "</td><td>" . $row["fecha_actua"].
		     "</td><td>" . $row["padecimiento_actual"].
		     "</td><td>" . $row["habitus_exterior"].
		     "</td><td>" . $row["id_antecedente"].
		     "</td><td>" . $row["id_odon"].
		     "</td><td>" . $row["fecha_signos"].
		     "</td><td>" . $row["hora_signos"].
		     "</td><td>" . $row["signosvitales"].
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