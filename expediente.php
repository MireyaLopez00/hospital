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


  	<h2>TABLA DE EXPEDIENTE</h2>
  </div>
				<form action="expediente_pro.php"  method="POST">
					<center>
						<div class="input-group">
			   			<p>Id del expediente: </p>
			   			<input type="text" name="id_expe"placeholder="                                  1-100">
			   			</div>
			   			<div class="input-group">
			   			<p>Fecha del expediente: </p>
			   			<input type="date" name="fecha_actua">
						</div>
						<div class="input-group">
			   			<p>Padecimiento actual: </p>
			   			<textarea type="text" name="padecimiento_actual"  cols="50" rows="10"></textarea>
			   			</div>
			   			<div class="input-group">
			   			<p>Habitus exterior: </p>
			   			<textarea type="text" name="habitus_exterior"  cols="50" rows="10"></textarea>
			   			</div>
			   			<div class="input-group">
			   			<p>Signos vitales: </p>
			   			<textarea type="text" name="signosvitales" cols="50" rows="10"></textarea>
			   			</div>
			   			<div class="input-group">
			   			<p>Fecha: </p>
			   			<input type="date" name="fecha_signos">
			   			</div>
			   			<div class="input-group">
			   			<p>Hora: </p>
			   			<input type="time" name="hora_signos">
			   			</div>
			   			<div class="input-group">
			   			<p>Id odontología : </p>
			   			<select name="odontologia_id_odon">
								        <option value="0">Seleccione:</option>
								        <?php
								          $query = $mysqli -> query ("SELECT * FROM odontologia");
								          while ($valores = mysqli_fetch_array($query)) {
								            echo '<option value="'.$valores[id_odon].'">'.$valores[id_odon].'</option>';
								          }
								          
								        ?>
						</select>
			   			</div>
			   			<div class="input-group">
			   			<p>Nombre del paciente : </p>
			   			
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
			   			<p>Id de antecedentes : </p>
			   			<select name="antecedentes_id_antecedente">
								        <option value="0">Seleccione:</option>
								        <?php
								          $query = $mysqli -> query ("SELECT * FROM antecedentes");
								          while ($valores = mysqli_fetch_array($query)) {
								            echo '<option value="'.$valores[id_antecedente].'">'.$valores[id_antecedente].'</option>';
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