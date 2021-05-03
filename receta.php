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


  	<h2>TABLA DE RECETA</h2>
  </div>
				<form action="receta_pro.php"  method="POST">
					<center>
						<div class="input-group">
			   			<p>Id de la receta: </p> 
			   			<input type="text" name="id_receta" placeholder="                                100-200">
			   			</div>
			   			<div class="input-group">
			   			<p>Medicamento recetado: </p>
			   			<textarea type="text" name="medicamento_rece"  cols="50" rows="10"></textarea>
			   			</div>
			   			<div class="input-group">
			   			<p>Id de la consulta: </p>
			   		
			   			<select name="Consulta_id_consulta">
								        <option value="0">Seleccione:</option>
								        <?php
								          $query = $mysqli -> query ("SELECT * FROM consulta");
								          while ($valores = mysqli_fetch_array($query)) {
								            echo '<option value="'.$valores[id_consulta].'">'.$valores[id_consulta].'</option>';
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
			   			
			   			<br>
			   			<center>
			   				<input type="submit" value=" Guardar "  name="guardar" class="btn"> 
			   				<input type="button" value=" Cancelar " name="cancelar" class="btn" onclick="location.href='index.html'">
			   			</center>
		   			</center>
		   		
		   		</form>
		</body>
	</html>