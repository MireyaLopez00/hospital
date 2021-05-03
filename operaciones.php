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


  	<h2>TABLA DE OPERACIONES</h2>
  </div>
				<form action="operaciones_pro.php"  method="POST">
					<center>
						<div class="input-group">
			   			<p>Id de la operación: </p>
			   			<input type="text" name="id_operacion"placeholder="                               100-200">
			   			</div>
			   			<div class="input-group">
			   			<p>Tipo de operación: </p>
			   			<input type="text" name="tipo_operacion">
			   			</div>
			   			<div class="input-group">
			   			<p>Monto: </p>
			   			<input type="text" name="monto">
			   			</div>
			   			<div class="input-group">
			   			<p>Fecha: </p>
			   			<input type="date" name="fecha">
			   			</div>
			   			<div class="input-group">
			   			<p>Id de la venta: </p>
			   			<select name="farmacia_id_venta">
								        <option value="0">Seleccione:</option>
								        <?php
								          $query = $mysqli -> query ("SELECT * FROM farmacia");
								          while ($valores = mysqli_fetch_array($query)) {
								            echo '<option value="'.$valores[id_venta].'">'.$valores[id_venta].'</option>';
								          }
								          
								        ?>
						</select>
			   			</div>
			   			<div class="input-group">
			   			<p>Id de la compra: </p>
			   		
			   			<select name="Compra_medi_id_compra">
								        <option value="0">Seleccione:</option>
								        <?php
								          $query = $mysqli -> query ("SELECT * FROM compra_medi");
								          while ($valores = mysqli_fetch_array($query)) {
								            echo '<option value="'.$valores[id_compra].'">'.$valores[id_compra].'</option>';
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