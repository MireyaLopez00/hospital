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


  	<h2>TABLA DE ANTECEDENTES</h2>
  </div>
				<form action="examenes_labo_pro.php"  method="POST">
					<center>
						<div class="input-group">
			   			<p>Id del laboratorio: </p>
			   			<input type="text" name="id_laboratorio"placeholder="                                 1-100">
			   			</div>
			   			<div class="input-group">
			   			<p>Fecha del examen: </p>
			   			<input type="date" name="fecha_examen">
						</div>
						<div class="input-group">
			   			<p>Hora del examen: </p>
			   			<input type="time" name="hora_examen">
			   			</div>
			   			<div class="input-group">
			   			<p>Id del paciente: </p>
			   		
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
			   			<p>Nombre del laboratorio: </p>
			   			<input type="text" name="nombre_laboratorio">
			   			</div>
			   			<div class="input-group">
			   			<p>Lugar del laboratorio: </p>
			   			<input type="text" name="lugar_labor">
			   			</div>
			   			<div class="input-group">
			   			<p>Nombre del examen: </p>
			   			<input type="text" name="nombre_examen">
			   			</div>
			   			<div class="input-group">
			   			<p>Tipo del examen: </p>
			   			
			   			<select name="tipos_labo_id_tipodelab">
								        <option value="0">Seleccione:</option>
								        <?php
								          $query = $mysqli -> query ("SELECT * FROM tipos_labo");
								          while ($valores = mysqli_fetch_array($query)) {
								            echo '<option value="'.$valores[id_tipodelab].'">'.$valores[tipo_examen].'</option>';
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