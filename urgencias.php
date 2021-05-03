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


  	<h2>TABLA DE URGENCIAS</h2>
  </div>

				<form action="urgencias_pro.php"  method="POST">

					<center>
						<div class="input-group">
			   			<p>Id de la urgencia: </p>
			   			<input type="text" name="id_urgencia" placeholder="                                 850-900">
			   			</div>
			   			<div class="input-group">
			   			<p>Fecha de la urgencia: </p>
			   			<input type="date" name="fecha">
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
			   			<div class="input-group">
			   			<p>Nombre del médico: </p>
			   			<select name="medico_id_medico">
								        <option value="0">Seleccione:</option>
								        <?php
								          $query = $mysqli -> query ("SELECT * FROM medico");
								          while ($valores = mysqli_fetch_array($query)) {
								            echo '<option value="'.$valores[id_medico].'">'.$valores[nombre_medico].'</option>';
								          }
								          
								        ?>
						</select>
			   			</div>
			   			<div class="input-group">
			   			<p>Descripción de la urgencia: </p>
			   			<textarea type="text" name="descripcion_urg"  cols="50" rows="10"></textarea>
			   			</div>
			   			<div class="input-group">
			   			<p>Tipo de urgencia: </p>
			   			<input type="text" name="tipo">
			   			</div>
			   			<div class="input-group">
			   			<p>Hora de ingreso: </p>
			   			<input type="time" name="hora_ingreso">
			   			</div>
			   			<div class="input-group">
			   			<p>Hora de egreso: </p>
			   			<input type="time" name="hora_salida">
			   			</div>
			   			<div class="input-group">
			   			<p>Nombre de la enfermera: </p>
			   			<select name="enfermera_id_enfermera">
								        <option value="0">Seleccione:</option>
								        <?php
								          $query = $mysqli -> query ("SELECT * FROM enfermera");
								          while ($valores = mysqli_fetch_array($query)) {
								            echo '<option value="'.$valores[id_enfermera].'">'.$valores[nombre].'</option>';
								          }
								          
								        ?>
						</select>
			   			</div>
			   			<div class="input-group">
			   			<p>Id de referencia y traslado: </p>
			   			
			   			<select name="referenciaytraslado_id_traslado">
								        <option value="0">Seleccione:</option>
								        <?php
								          $query = $mysqli -> query ("SELECT * FROM referenciaytraslado");
								          while ($valores = mysqli_fetch_array($query)) {
								            echo '<option value="'.$valores[id_traslado].'">'.$valores[id_traslado].'</option>';
								          }
								          
								        ?>
						</select>
			   			</div>
			   			<br>
			   			<center>
			   				<input type="submit" value=" Guardar "  name="guardar" class="btn"> 
			   				<input type="button" value=" Cancelar " name="cancelar" class="btn" onclick="location.href='index.html'">
			   			</center>
		   			</center>
		   		
		   		</form>
		  
		</body>
	</html>