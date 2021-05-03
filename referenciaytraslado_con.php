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


  	<h2>TABLA DE REFERENCIA Y TRASLADO</h2>
  </div>
	 <form value='8' backcolor=black>


<center>

	<h4>Ingrese el Id de la referencia y traslado:</h4>
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

$sql = "SELECT  referenciaytraslado.id_traslado, referenciaytraslado.estado_origen, referenciaytraslado.estado_receptor, referenciaytraslado.motivo_envio, paciente.id_paciente, paciente.nombre  from  referenciaytraslado   inner join paciente on  referenciaytraslado.paciente_id_paciente=paciente.id_paciente  and  referenciaytraslado.id_traslado=$_GET[dato]";

$result =mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){

	echo "<table><tr><th><th>Id de referencia y traslado</th></th><th><th>Estado de origen</th></th><th><th>Estado del receptor</th></th><th><th>Motivo de envio</th></th>
		<th><th>Id del paciente</th></th><th><th>Nombre del paciente</th></th></tr>";

while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td><td>".$row["id_traslado"].
		     "</td></td><td><td>" . $row["estado_origen"].
		     "</td></td><td><td>" . $row["estado_receptor"].
		     "</td></td><td><td>" . $row["motivo_envio"].
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