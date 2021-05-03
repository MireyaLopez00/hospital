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


  	<h2>TABLA DE MEDICAMENTO</h2>
  </div>
	 <form value='8' backcolor=black>


<center>

	<h4>Ingrese el Id del medicamento:</h4>
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

$sql = "SELECT medicamento.id_medicamento, medicamento.nombre_medi,proveedor.id_proveedor, proveedor.nombre_proveedor, marca.nombre_marca, laboratorio_medi.nombre_laboratorio from medicamento   inner join proveedor on medicamento.proveedor_id_proveedor=proveedor.id_proveedor inner join marca on marca.id_marca=medicamento.marca_id_marca inner join laboratorio_medi where laboratorio_medi.id_labo=medicamento.laboratorio_medi_id_labo and medicamento.id_medicamento=$_GET[dato]";

$result =mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
	// imprime los encabezados de la tabla
	echo "<table><tr><th>Id del medicamento</th><th>Nombre del medicamento</th>
		<th>Id del proveedor</th><th>Nombre del proveedor</th><th>Nombre de la marca</th>
		<th>Nombre del laboratorio</th></tr>";

	
	while($row = mysqli_fetch_assoc($result)){
		echo "<tr><td>".$row["id_medicamento"].
		     "</td><td>" . $row["nombre_medi"].
		     "</td><td>" . $row["id_proveedor"].
		     "</td><td>" . $row["nombre_proveedor"].
		     "</td><td>" . $row["nombre_marca"].
		     "</td><td>" . $row["nombre_laboratorio"].
		     
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