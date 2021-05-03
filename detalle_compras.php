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


  	<h2>TABLA DE DETALLE DE COMPRAS</h2>
  </div>

				<form action="detalle_compras_pro.php"  method="POST">
					<center>
						<div class="input-group">
			   			<p>Id de la compra: </p>
			   			<input type="text" name="id_compra" placeholder="                                   1-100">
			   			</div>
			   			<div class="input-group">
			   			<p>Cantidad: </p>
			   			<input type="text" name="cantidad">
						</div>
						<div class="input-group">
			   			<p>Nombre del medicamento: </p>
			   			<input type="text" name="nombre_medicamento">
			   			</div>
			   			<div class="input-group">
			   			<p>Total: </p>
			   			<input type="text" name="total">
			   			</div>
			   			<div class="input-group">
			   			<p>Nombre del medicamento: </p>
			   			
			   			<select name="medicamento_id_medicamento">
								        <option value="0">Seleccione:</option>
								        <?php
								          $query = $mysqli -> query ("SELECT * FROM medicamento");
								          while ($valores = mysqli_fetch_array($query)) {
								            echo '<option value="'.$valores[id_medicamento].'">'.$valores[nombre_medi].'</option>';
								          }
								          
								        ?>
						</select>
			   			</div>
			   			<div class="input-group">
			   			<p>Nombre del laboratorio: </p>
			   			
			   			<select name="laboratorio_medi_id_labo">
								        <option value="0">Seleccione:</option>
								        <?php
								          $query = $mysqli -> query ("SELECT * FROM laboratorio_medi");
								          while ($valores = mysqli_fetch_array($query)) {
								            echo '<option value="'.$valores[id_labo].'">'.$valores[nombre_laboratorio].'</option>';
								          }
								          
								        ?>
						</select>
			   			</div>
			   			<div class="input-group">
			   			<p>Numero de lote: </p>
			   			<input type="text" name="num_lote">
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