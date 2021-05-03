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


  	<h2>TABLA DE REPORTE CIRUGIA</h2>
  </div>
				<form action="repor_cirugia_pro.php"  method="POST">
					<center>
						<div class="input-group">
			   			<p>Id de reporte de cirugía: </p>
			   			<input type="text" name="id_reporte"placeholder="                                50-100">
			   			</div>
			   			<div class="input-group">
			   			<p>Nombre de  la enfermera: </p>
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
			   			<p>Nombre del camillero: </p>
			   			<select name="camillero_id_camillero">
								        <option value="0">Seleccione:</option>
								        <?php
								          $query = $mysqli -> query ("SELECT * FROM camillero");
								          while ($valores = mysqli_fetch_array($query)) {
								            echo '<option value="'.$valores[id_camillero].'">'.$valores[nombre_camillero].'</option>';
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
			   			<p>Id de cirugía: </p>
			   		
			   			<select name="cirugia_id_cirugia">
								        <option value="0">Seleccione:</option>
								        <?php
								          $query = $mysqli -> query ("SELECT * FROM cirugia");
								          while ($valores = mysqli_fetch_array($query)) {
								            echo '<option value="'.$valores[id_cirugia].'">'.$valores[id_cirugia].'</option>';
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