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


  	<h2>TABLA DE PROVEEDOR</h2>
  </div>
				<form action="proveedor_pro.php"  method="POST">
					<center>
						<div class="input-group">
			   			<p>Id del proveedor: </p>
			   			<input type="text" name="id_proveedor" placeholder="                                 900-950">
			   			</div>
			   			<div class="input-group">
			   			<p>Nombre del proveedor: </p>
			   			<input type="text" name="nombre_proveedor">
			   			</div>
			   			<div class="input-group">
			   			<p>Teléfono del proveedor: </p>
			   			<input type="text" name="telefono_provee">
			   			</div>
			   			<div class="input-group">
			   			<p>Productos: </p>
			   			<textarea type="text" name="productos" cols="50" rows="10"></textarea>
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