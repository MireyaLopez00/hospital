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


  	<h2>TABLA DE FORMAS DE PAGO</h2>
  </div>
	 <form value='8' backcolor=black>


<center>

	<h4>Ingrese el Id de la forma de pago:</h4>
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

$sql = "SELECT forma_pago.id_forma, forma_pago.forma_pago, forma_pago.seguro, forma_pago.Pago_de, paciente.id_paciente, paciente.nombre from forma_pago   inner join paciente on forma_pago.paciente_id_paciente=paciente.id_paciente  and forma_pago.id_forma=$_GET[dato]";

$result =mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
	// imprime los encabezados de la tabla
	echo "<table><tr><th>Id de la forma</th><th><th>Forma de pago</th></th>
		<th><th>Seguro</th></th><th>Descripción del pago</th><th>Id del paciente</th>
		<th>Nombre del paciente</th></tr>";

	
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td>".$row["id_forma"].
		     "</td><td><td>" . $row["forma_pago"].
		     "</td></td><td><td>" . $row["seguro"].
		     "</td></td><td>" . $row["Pago_de"].
		     "</td><td>" . $row["id_paciente"].
		     "</td><td>" . $row["nombre"].
		   
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