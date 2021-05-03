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


  	<h2>TABLA DE CIRUGIA</h2>
  </div>
	 <form value='8' backcolor=black>


<center>

	<h4>Ingrese el Id de la cirugía:</h4>
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

$sql = "SELECT cirugia.id_cirugia, cirugia.descripcion_cirugia, cirugia.quirofano_id_quirofano, paciente.id_paciente, paciente.nombre,anesteciologo.nombre_aneste, cirugia.nota_postoperatoria_id_post, tipo_cirugia.tipo_cirugia from cirugia   inner join paciente on cirugia.paciente_id_paciente=paciente.id_paciente inner join anesteciologo on cirugia.anesteciologo_id_aneste=anesteciologo.id_aneste inner join tipo_cirugia where tipo_cirugia.id_tipociru=cirugia.tipo_cirugia_id_tipociru and cirugia.id_cirugia=$_GET[dato]";

$result =mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
	// imprime los encabezados de la tabla
	echo "<table><tr><th>Id de la cirugía</th><th>Descripción de la cirugía</th>
		<th>Id del quirófano</th><th>Id del paciente</th><th>Nombre del paciente</th>
		<th>Nombre del anestesiólogo</th><th>Id de la nota post-operatoria</th>
		<th>Tipo de cirugia</th></tr>";

	
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td>".$row["id_cirugia"].
		     "</td><td>" . $row["descripcion_cirugia"].
		     "</td><td>" . $row["quirofano_id_quirofano"].
		     "</td><td>" . $row["id_paciente"].
		     "</td><td>" . $row["nombre"].
		     "</td><td>" . $row["nombre_aneste"].
		     "</td><td>" . $row["nota_postoperatoria_id_post"].
		     "</td><td>" . $row["tipo_cirugia"].
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