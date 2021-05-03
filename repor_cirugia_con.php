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


  	<h2>TABLA DE REPORTE DE CIRUGÍA</h2>
  </div>
	 <form value='8' backcolor=black>


<center>

	<h4>Ingrese el Id del reporte de cirugía:</h4>
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

$sql = "SELECT repor_cirugia.id_reporte,  enfermera.id_enfermera, enfermera.nombre, camillero.id_camillero, camillero.nombre_camillero, cirugia.id_cirugia, medico.id_medico, medico.nombre_medico from  repor_cirugia   inner join enfermera on  repor_cirugia.enfermera_id_enfermera=enfermera.id_enfermera inner join camillero on camillero.id_camillero= repor_cirugia.camillero_id_camillero inner join cirugia on cirugia.id_cirugia= repor_cirugia.cirugia_id_cirugia  inner join medico where medico.id_medico= repor_cirugia.medico_id_medico and  repor_cirugia.id_reporte=$_GET[dato]";

$result =mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){

	echo "<table><tr><th><th>Id reporte de cirugía</th></th><th><th>Id de la enfermera</th></th><th><th>Nombre de la enfermera</th></th><th><th>Id del camillero</th></th>
		<th><th>Nombre del camillero</th></th><th><th>Id de la cirugía</th></th><th><th>Id del médico</th></th><th><th>Nombre del médico</th></th></tr>";

while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td><td>".$row["id_reporte"].
		     "</td></td><td><td>" . $row["id_enfermera"].
		     "</td></td><td><td>" . $row["nombre"].
		     "</td></td><td><td>" . $row["id_camillero"].
		     "</td></td><td><td>" . $row["nombre_camillero"].
		     "</td></td><td><td>" . $row["id_cirugia"].
		     "</td></td><td><td>" . $row["id_medico"].
		     "</td></td><td><td>" . $row["nombre_medico"].
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