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


  	<h2>TABLA DE PACIENTE</h2>
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

$sql = "SELECT  * from  paciente where paciente.id_paciente =$_GET[dato]";

$result =mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){

	echo "<table><tr><th><th>Id del paciente</th></th><th><th>Nombre del paciente </th></th><th><th>Sexo </th></th><th><th>Edad</th></th>
		<th><th>Tipo de sangre</th></th><th><th>Motivo de ingreso</th></th><th><th>Síntomas</th></th> </tr>";

while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td><td>".$row["id_paciente"].
			"</td></td><td><td>" . $row["nombre"].
		     "</td></td><td><td>" . $row["sexo"].
		     "</td></td><td><td>" . $row["edad"].
		     "</td></td><td><td>" . $row["tipo_sangre"].
		     "</td></td><td><td>" . $row["motivo_ingre"].
		     "</td></td><td><td>" . $row["sintomas"].
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