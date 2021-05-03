<?php
  $mysqli = new mysqli('localhost', 'root', '', 'hospital');
?>
<! DOCTYPE html>

<html>
<head>   
<title>HOSPITAL</title>
<link rel="icon" type="image/png" href="hospital.png" sizes="5x5">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
		<body  background= "uno.png" background-size=cover  text= "black" >
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


  	<h2>TABLA DE BANCO DE SANGRE</h2>
  </div>
			
				<form action="bancosangre_pro.php"  method="POST">
					<center>
						<div class="input-group">
			   			<p>Nombre del donador: </p>
			   			<input type="text" name="nombre_donador">
			   			</div>
			   			<div class="input-group">
			   			<p>Tipo de sangre: </p>
			   			<input type="text" name="tipo_sangre">
			   			</div>
			   			<div class="input-group">
			   			<p>Nombre del paciente: </p>
			   			<select name="paciente_id_paciente">
								        <option value="0">Seleccione:</option>
								        <?php
								          $query = $mysqli -> query ("SELECT * FROM paciente");
								          while ($valores = mysqli_fetch_array($query)) {
								            echo '<option value="'.$valores[id_paciente].'">'.$valores[nombre].'</option>';
								          }
								          
								        ?>
						</select>
			   			</div>
			   			<br>
			   			<center>
			   				<input type="submit" value=" Guardar "  name="guardar" class="btn"> 
			   				<input type="button" value=" Cancelar " name="cancelar" onclick="location.href='index.html'" class="btn">
			   			</center>
		   			</center>
		   		
		   		</form>
		   
		</body>
	</html>

