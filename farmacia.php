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


  	<h2>TABLA DE VENTAS</h2>
  </div>
				<form action="farmacia_pro.php"  method="POST">
					<center>
						<div class="input-group">
			   			<p>Id del venta: </p>
			   			<input type="text" name="id_venta"placeholder="                                 100-200">
			   			</div>
			   			<div class="input-group">
			   			<p>Nombre del personal: </p>
			   			
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
						<div class="input-group">
			   			<p>Id receta: </p>
			   			
			   			<select name="receta_id_receta">
								        <option value="0">Seleccione:</option>
								        <?php
								          $query = $mysqli -> query ("SELECT * FROM receta");
								          while ($valores = mysqli_fetch_array($query)) {
								            echo '<option value="'.$valores[id_receta].'">'.$valores[id_receta].'</option>';
								          }
								          
								        ?>
						</select>
			   			</div>
			   			<div class="input-group">
			   			<p>Id detalle de venta: </p>
			   			
			   			<select name="detalle_venta_id_venta">
								        <option value="0">Seleccione:</option>
								        <?php
								          $query = $mysqli -> query ("SELECT * FROM detalle_venta");
								          while ($valores = mysqli_fetch_array($query)) {
								            echo '<option value="'.$valores[id_venta].'">'.$valores[id_venta].'</option>';
								          }
								          
								        ?>
						</select>
			   			</div>
			   			<div class="input-group">
			   			<p> Id de forma de pago: </p>
			   			
			   			<select name="forma_pago_id_forma">
								        <option value="0">Seleccione:</option>
								        <?php
								          $query = $mysqli -> query ("SELECT * FROM forma_pago");
								          while ($valores = mysqli_fetch_array($query)) {
								            echo '<option value="'.$valores[id_forma].'">'.$valores[id_forma].'</option>';
								          }
								          
								        ?>
						</select>
			   			</div>
			   			<div class="input-group">
			   			<p>Total final: </p>
			   			<input type="text" name="total_final">
			   			</div>
			   			<div class="input-group">
			   			<p>Fecha de compra: </p>
			   			<input type="date" name="fecha_compra">
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