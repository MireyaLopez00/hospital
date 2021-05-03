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


  	<h2>TABLA DE EGRESO</h2>
  </div>
	
				<form action="egreso_pro.php"  method="POST">
					<center>
						<div class="input-group">
			   			<p>Id de egreso: </p>
			   			<input type="text" name="id_egreso" placeholder="                                100-200">
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
			   			<p>Fecha de ingreso: </p>
			   			<input type="date" name="fecha_ingreso">
			   			</div>
			   			<div class="input-group">
			   			<p>Motivo de ingreso: </p>
			   			<input type="text" name="motivo_ingreso">
			   			</div>
			   			<div class="input-group">
			   			<p>Tratamiento aplicado: </p>
			   			<textarea type="text" name="tratamiento_aplicado"  cols="50" rows="10"></textarea>
			   			</div>
			   			<div class="input-group">
			   			<p>Motivo de egreso: </p>
			   			<input type="text" name="motivo_egreso">
			   			</div>
			   			<div class="input-group">
			   			<p>Fecha de egreso: </p>
			   			<input type="date" name="fecha_egreso">
			   			</div>
			   			<br>
			   			<center>
			   				<input type="submit" value=" Guardar "  name="guardar" class="btn"> 
			   				<input type="button" value=" Cancelar " name="cancelar" onclick="location.href='index.html'"  class="btn">
			   			</center>
		   			</center>
		   		
		   		</form>

		</body>
	</html>