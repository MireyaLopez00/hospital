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


  	<h2>TABLA DE CIRUGIA</h2>
  </div>

				<form action="cirugia_pro.php"  method="POST">
					<center>
						<div class="input-group">
			   			<p>Id del cirugía: </p>
			   			<input type="text" name="id_cirugia"placeholder="                                  300-400">
			   			</div>
			   			<div class="input-group">
			   			<p>Descripción de la cirugía: </p>
			   			<textarea  name="descrip_cirugia"  cols="50" rows="10"></textarea>
			   			</div>
			   			<div class="input-group">
			   			<p>Id quirófano: </p>
			   				<select name="quirofano_id_quirofano">
								        <option value="0">Seleccione:</option>
								        <?php
								          $query = $mysqli -> query ("SELECT * FROM quirofano");
								          while ($valores = mysqli_fetch_array($query)) {
								            echo '<option value="'.$valores[id_quirofano].'">'.$valores[id_quirofano].'</option>';
								          }
								          
								        ?>
						</select>
			   			</div>
			   			<div class="input-group">
			   			<p>Id paciente: </p>
			   		
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
			   			<p>Nombre de anestesiólogo: </p>
			   			
			   				<select name="anesteciologo_id_aneste">
								        <option value="0">Seleccione:</option>
								        <?php
								          $query = $mysqli -> query ("SELECT * FROM anesteciologo");
								          while ($valores = mysqli_fetch_array($query)) {
								            echo '<option value="'.$valores[id_aneste].'">'.$valores[nombre_aneste].'</option>';
								          }
								          
								        ?>
						</select>
			   			</div>
			   			<div class="input-group">
			   			<p>Id nota post-operatoria: </p>
			   				<select name="nota_postoperatoria_id_post">
								        <option value="0">Seleccione:</option>
								        <?php
								          $query = $mysqli -> query ("SELECT * FROM nota_postoperatoria");
								          while ($valores = mysqli_fetch_array($query)) {
								            echo '<option value="'.$valores[id_post].'">'.$valores[id_post].'</option>';
								          }
								          
								        ?>
						</select>
			   			</div>
			   			<div class="input-group">
			   			<p>Tipo de cirugía: </p>
			   				<select name="tipo_cirugia_id_tipociru">
								        <option value="0">Seleccione:</option>
								        <?php
								          $query = $mysqli -> query ("SELECT * FROM tipo_cirugia");
								          while ($valores = mysqli_fetch_array($query)) {
								            echo '<option value="'.$valores[id_tipociru].'">'.$valores[tipo_cirugia].'</option>';
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

