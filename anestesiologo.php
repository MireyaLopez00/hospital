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


  	<h2>TABLA DE ANESTESIÓLOGO</h2>
  </div>
	 <form value='8' backcolor=black>
				<form action="anestesiologo_pro.php"  method="POST">
					<center>
						<div class="input-group">
			   			<p>Id del anestesiólogo: </p>
			   			<input type="text" name="id_aneste" placeholder="                                  100-200">
			   			</div>
			   			<div class="input-group">
			   			<p>Nombre anestesiólogo: </p>
			   			<input type="text" name="nombre_aneste">
			   			</div>
			   			
			   			<p>Nombre del personal: </p>
			   			<div class="glyphIconMethod">
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
			   			<div class="glyphIconMethod">
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
			  				<br>
			  				<br>
			  				<br>
			   			<center>
			   				<input type="submit" value=" Guardar "  name="guardar" class="btn"> 
			   				<input type="button" value=" Cancelar " name="cancelar" onclick="location.href='index.html'" class="btn">
			   			</center>
		   			</center>
		   		
		   		</form>
		  
		</body>
	</html>

