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


  	<h2>TABLA DE ENFERMERA</h2>
  </div>

				<form action="enfermera_pro.php"  method="POST">
					<center>
						<div class="input-group">
			   			<p>Id de enfermera: </p>
			   			<input type="text" name="id_enfermera"placeholder="                                 100-200">
			   			</div>
			   			<div class="input-group">
			   			<p>Nombre de la enfermera: </p>
			   			<input type="text" name="nombre">
						</div>
						<div class="input-group">
			   			<p>Especialidad: </p>
			   		
			   			<select name="especialidad">
								        <option value="0">Seleccione:</option>
								        <?php
								          $query = $mysqli -> query ("SELECT * FROM especialidad");
								          while ($valores = mysqli_fetch_array($query)) {
								            echo '<option value="'.$valores[id_especi].'">'.$valores[nombre_especialidad	].'</option>';
								          }
								          
								        ?>
						</select>
			   			</div>
			   			<div class="input-group">
			   			<p>Turno: </p>
			   			<input type="text" name="turno">
			   			</div>
			   			<div class="input-group">
			   			<p>Teléfono: </p>
			   			<input type="text" name="telefono">
			   			</div>
			   			<div class="input-group">
			   			<p>Tipo de horario: </p>
			   			<select name="horarios_id_horario">
								        <option value="0">Seleccione:</option>
								        <?php
								          $query = $mysqli -> query ("SELECT * FROM horarios");
								          while ($valores = mysqli_fetch_array($query)) {
								            echo '<option value="'.$valores[id_horario].'">'.$valores[tipo_horario].'</option>';
								          }
								          
								        ?>
						</select>
			   			</div>
			   			<div class="input-group">
			   			<p>Nombre del personal: </p>
			   			
			   			<select name="recursos_hum_id_personal">
								        <option value="0">Seleccione:</option>
								        <?php
								          $query = $mysqli -> query ("SELECT * FROM recursos_hum");
								          while ($valores = mysqli_fetch_array($query)) {
								            echo '<option value="'.$valores[id_personal].'">'.$valores[nombre_per].'</option>';
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