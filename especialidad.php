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


  	<h2>TABLA DE ESPECIALIDADES</h2>
  </div>
				<form action="especialidad_pro.php"  method="POST">
					<center>
						<div class="input-group">
			   			<p>Id de la especialidad: </p>
			   			<input type="text" name="id_especialidad"placeholder="                                 1-100">
			   			</div>
			   			<div class="input-group">
			   			<p>Nombre de la especialidad: </p>
			   			<input type="text" name="nombre_especialidad">
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