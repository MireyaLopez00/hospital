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


  	<h2>TABLA DE FORMAS DE PAGO</h2>
  </div>
				<form action="forma_pago_pro.php"  method="POST">
					<center>
						<div class="input-group">
			   			<p>Id de forma de pago: </p>
			   			<input type="text" name="id_forma" placeholder="                                    1-100">
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
			   			<p>Forma de pago: </p>
			   			<input type="text" name="forma_pago">
			   			</div>
			   			<div class="input-group">
			   			<p>Seguro: </p>
			   			<select name="seguro">
								        <option value="0">Seleccione:</option>
								        <option value="SI">SI</option>
								        <option value="NO">NO</option>
						</select>
			   	
			   			</div>
			   			<div class="input-group">
			   			<p>Descripción de pago: </p>
			   			<input type="text" name="Pago_de">
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