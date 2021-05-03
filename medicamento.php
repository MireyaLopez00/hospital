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


  	<h2>TABLA DE MEDICAMENTO</h2>
  </div>
				<form action="medicamento_pro.php"  method="POST">
					<center>
					<div class="input-group">
			   			<p>Id del medicamento: </p>
			   			<input type="text" name="id_medicamento" placeholder="                                  400-500">
			   			</div>
			   			<div class="input-group">
			   			<p>Nombre del medicamento: </p>
			   			<input type="text" name="nombre_medi">
			   			</div>
			   			<div class="input-group">
			   			<p>Fecha de caducidad: </p>
			   			<input type="date" name="fecha">
			   			</div>
			   			<div class="input-group">
			   			<p>Nombre del proveedor: </p>
			   			
						<select name="proveedor_id_proveedor">
								        <option value="0">Seleccione:</option>
								        <?php
								          $query = $mysqli -> query ("SELECT * FROM proveedor");
								          while ($valores = mysqli_fetch_array($query)) {
								            echo '<option value="'.$valores[id_proveedor].'">'.$valores[nombre_proveedor].'</option>';
								          }
								          
								        ?>
						</select>
			   			</div>
			   			<div class="input-group">
			   			<p>Id de la marca: </p>
			   			<select name="marca_id_marca">
								        <option value="0">Seleccione:</option>
								        <?php
								          $query = $mysqli -> query ("SELECT * FROM marca");
								          while ($valores = mysqli_fetch_array($query)) {
								            echo '<option value="'.$valores[id_marca].'">'.$valores[nombre_marca].'</option>';
								          }
								          
								        ?>
						</select>
			   			</div>
			   			<div class="input-group">
			   			<p>Id del laboratorio: </p>
			   			<select name="laboratorio_medi_id_labo">
								        <option value="0">Seleccione:</option>
								        <?php
								          $query = $mysqli -> query ("SELECT * FROM  laboratorio_medi");
								          while ($valores = mysqli_fetch_array($query)) {
								            echo '<option value="'.$valores[id_labo].'">'.$valores[nombre_laboratorio].'</option>';
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