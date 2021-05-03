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


  	<h2>TABLA DE REVISION</h2>
  </div>
				<form action="revision_pro.php"  method="POST">
					<center>
						<div class="input-group">
			   			<p>Id del paciente: </p>    
			   			<input type="text" name="paciente_id_paciente"placeholder="                                100-200">
			   			</div>
			   			<div class="input-group">
			   			<p>Signos vitales: </p>
			   			<textarea type="text" name="signos_vitales"  cols="50" rows="10"></textarea>
			   			</div>
			   			<div class="input-group">
			   			<p>Descripción: </p>
			   			<textarea type="text" name="descri_eu"  cols="50" rows="10"></textarea>
			   			</div>
			   			<div class="input-group">
			   			<p>Fecha: </p>
			   			<input type="date" name="fecha">
			   			</div>
			   			<div class="input-group">
			   			<p>Hora: </p>
			   			<input type="time" name="hora">
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
			   			<p>Id de egreso: </p>
			   			<select name="egreso_id_egreso">
								        <option value="0">Seleccione:</option>
								        <?php
								          $query = $mysqli -> query ("SELECT * FROM egreso");
								          while ($valores = mysqli_fetch_array($query)) {
								            echo '<option value="'.$valores[id_egreso].'">'.$valores[id_egreso].'</option>';
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