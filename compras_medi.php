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


  	<h2>TABLA DE COMPRAS DE MEDICAMENTO</h2>
  </div>

				<form action="compras_medi_pro.php"  method="POST">
					<center>
						<div class="input-group">
			   			<p>Id del compra: </p>
			   			<input type="text" name="id_compra"placeholder="                                400-500">
			   			</div>
			   			<div class="input-group">
			   			<p>Total: </p>
			   			<input type="text" name="total">
			   			</div>
			   			<div class="input-group">
			   			<p>Id del detalle de la compra: </p>
			   			
			   				<select name="detalle_com_id_compra">
								        <option value="0">Seleccione:</option>
								        <?php
								          $query = $mysqli -> query ("SELECT * FROM detalle_com");
								          while ($valores = mysqli_fetch_array($query)) {
								            echo '<option value="'.$valores[id_compra].'">'.$valores[id_compra].'</option>';
								          }
								          
								        ?>
						</select>
			   			</div>
			   			<div class="input-group">
			   			<p>Fecha de caducidad: </p>
			   			<input type="date" name="fecha_caducidad">
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

